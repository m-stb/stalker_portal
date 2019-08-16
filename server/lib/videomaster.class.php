<?php
/**
 * Master for video storages.
 *
 * @package stalket_portal
 * @author zhurbitsky@gmail.com
 */

use Stalker\Lib\Core\Mysql;

class VideoMaster extends Master implements \Stalker\Lib\StbApi\VideoMaster
{
    public function __construct(){
        
        $this->media_type = 'vclub';
        $this->db_table   = 'video';
        
        parent::__construct();
    }

    public function getStoragesForVideo(){

        $video_id = intval($_REQUEST['video_id']);

        $good_storages = $this->getAllGoodStoragesForMediaFromNet($video_id, 0);
        $good_storages = $this->sortByLoad($good_storages);
        return array_keys($good_storages);
    }
    
    protected function getMediaName(){
        
        if (!empty($this->media_params) && !empty($this->media_params['path'])){
            
            return $this->media_params['path'];
        }
        
        return '';
    }

    protected function getMediaPath($file_name, $file_id){

        if ($file_id){
            $file = Video::getFileById($file_id);
            if (!empty($file)){

                $movie = Video::getById($file['video_id']);

                if ($movie['is_series'] && $file['series_id']){
                    $episode = Video::getEpisodeById($file['series_id']);
                    $season = Video::getSeasonById($episode['season_id']);
                    $path = '/s' . str_pad($season['season_number'], 2, '0', STR_PAD_LEFT). '/e' . str_pad($episode['series_number'], 2, '0', STR_PAD_LEFT) . '/';
                }else{
                    $path = '/';
                }

                return $this->media_name.$path.$file['file_name'];
            }
        }

        return $this->media_name.'/'.$file_name;

    }

    protected function setStatus($status, $file_id = 0){

        if ($file_id) {
            $this->db->update('video_series_files',
                array('status' => $status),
                array(
                    'video_id' => $this->media_id,
                    'id' => $file_id,
                    'protocol<>' => 'custom'
                ));
        }

        $files = Mysql::getInstance()
            ->select(array('status', 'protocol'))
            ->from('video_series_files')
            ->where(array(
                'video_id' => $this->media_id,
                'file_type' => 'video'
            ))
            ->get()
            ->all('status');

        $has_files = (int) count($files);

        if ($file_id) {

            if (is_array($files)) {
                $has_files = count(array_filter($files));
            }

            $this->db->update('video',
                array('status' => (int) !!$has_files),
                array('id' => $this->media_id));

        } else if (!$has_files) {
            $this->db->update('video',
                array('status' => $status),
                array('id' => $this->media_id));
        }

    }
}

?>