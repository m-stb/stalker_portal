<?php

use Stalker\Lib\Core\Mysql;

/**
 * Exchange rate
 * 
 * @package stalker_portal
 * @author zhurbitsky@gmail.com
 */

class CourseCbr implements \Stalker\Lib\StbApi\CourseCbr
{
    public $db;
    public $cache_table;
    public $content_url = 'http://www.cbr.ru/scripts/XML_daily.asp';
    public $codes = array(840, 978, 980);
    
    public function __construct(){
        $this->db = Mysql::getInstance();
        $this->cache_table = "course_cache";
    }
    
    public function getData(){
        return $this->getDataFromDBCache();
    }
    
    public function getDataFromURI(){

        $result = array();
        $content = file_get_contents($this->content_url);
        $xml_obj = NULL;

        if ($content && ($xml_obj = simplexml_load_string($content))) {

            $xml_attr = $xml_obj->attributes();

            $result['title'] = _('Exchange rate on').' '. (string) $xml_attr['Date'];
            $result['on_date'] = (string) $xml_attr['Date'];
            $result['data'] = array();
            $idx = 0;

            $old_data = $this->getDataFromDBCache();

            if (!array_key_exists('on_date', $old_data) || $result['on_date'] != $old_data['on_date']){
            //if (1){

                foreach ($xml_obj as $valute){

                    if ($valute->NumCode && in_array($valute->NumCode, $this->codes)) {
                        $result['data'][$idx] = array();
                        $result['data'][$idx]['code'] = (string)$valute->NumCode;
                        $result['data'][$idx]['currency'] = $valute->Nominal.' '.$valute->CharCode;
                        $result['data'][$idx]['value'] = floatval(str_replace(',', '.', $valute->Value));

                        $result['data'][$idx]['diff'] = 0;
                        $result['data'][$idx]['trend'] = 0;

                        if (is_array($old_data) && array_key_exists('data', $old_data) && array_key_exists($idx, $old_data['data'])){

                            $result['data'][$idx]['diff'] = round(($result['data'][$idx]['value'] - $old_data['data'][$idx]['value']), 4);

                            if ($result['data'][$idx]['diff'] > 0){
                                $result['data'][$idx]['trend'] = 1;
                            }else if ($result['data'][$idx]['diff'] < 0){
                                $result['data'][$idx]['trend'] = -1;
                            }

                        }

                        $idx++;
                    }
                }

                $this->setDataDBCache($result);
            }else{
                $result = $old_data;
            }
        }
        return $result;
    }
    
    private function getDataFromDBCache(){
        
        $content = $this->db->from($this->cache_table)->where(array('url' => $this->content_url))->get()->first('content');
                
        $content = unserialize(System::base64_decode($content));
        
        if (is_array($content)){
            return $content;
        }else{
            return array();
        }
    }
    
    private function setDataDBCache($arr){
        
        $content = System::base64_encode(serialize($arr));
        
        $result = $this->db->from($this->cache_table)->where(array('url' => $this->content_url))->get();
        $crc = $result->get('crc');
        
        
        if (md5($content) != $crc){
            
            $data = array(
                          'content' => $content,
                          'updated' => 'NOW()',
                          'url'     => $this->content_url,
                          'crc'     => md5($content)
                      );
            
            if ($result->count() == 1){
                
                $this->db->update($this->cache_table,
                                  $data, array('url' => $this->content_url));
                
            }else{
                
                $this->db->insert($this->cache_table,
                                  $data);
            }
        }
    }
}
?>