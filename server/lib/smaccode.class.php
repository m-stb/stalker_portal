<?php

use Stalker\Lib\Core\Mysql;

class SMACCode
{
    const STATUS_NOT_ACTIVATED = 'Not Activated';
    const STATUS_ACTIVATED = 'Activated';
    const STATUS_BLOCKED = 'Blocked';
    const STATUS_MANUALLY_ENTERED = 'Manually entered';

    private $activation_code = '';
    private $data;
    private $status;

    /**
     * SMACCode constructor.
     * @param string $code
     * @throws SMACCodeException
     */
    public function __construct($code) {

        $data = Mysql::getInstance()->from('smac_codes')->where(array('code' => $code))->get()->first();

        if (empty($data)) {
            throw new SMACCodeException("Activation code not found");
        }

        $this->activation_code = $code;
        $this->data = $data;
        $this->status = $data['status'];
    }

    /**
     * Extract param by key
     *
     * @param string $key
     * @return string|null
     */
    public function getParam($key) {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function getActivationCode() {
        return $this->activation_code;
    }

    public function getStatus() {
        return $this->status;
    }

    /**
     * Bind user to the code
     *
     * @param int $user_id
     * @param string|null $device
     * @return bool
     */
    public function setUser($user_id, $device = NULL) {

        $data = array(
            'user_id' => $user_id,
            'status'  => self::STATUS_ACTIVATED
        );

        if (NULL !== $device) {
            $data['device'] = $device;
        }

        return Mysql::getInstance()->update('smac_codes', $data, array('code' => $this->activation_code))->result();
    }

    /**
     * Change activation code status
     *
     * @param string $status One of class const SMACCode::STATUS_NOT_ACTIVATED, SMACCode::STATUS_ACTIVATED, SMACCode::STATUS_BLOCKED or SMACCode::STATUS_MANUALLY_ENTERED
     * @param int|null $user_id If not null value, update the user assignment to the code
     * @param string|null
     * @return bool
     */
    public function setStatus($status, $user_id = NULL) {

        $this->status = $status;
        $data = array('status' => $status);

        if (NULL !== $user_id) {
            $data['user_id'] = $user_id;
        }

        return Mysql::getInstance()->update('smac_codes', $data, array('code' => $this->activation_code))->result();
    }

    /**
     *
     * @param string|null $device_name
     */
    public function setDevice($device_name){
        if(!$this->getParam('device') || $this->getParam('device') !== $device_name) {
            $this->data['device'] = $device_name;
            Mysql::getInstance()->update('smac_codes', array('device' => $device_name), array('code' => $this->activation_code))->result();
        }
    }

    /**
     * Import file with activation codes list
     *
     * @throws SMACCodeException
     * @param string $filename
     * @param string $content
     */
    public static function importFile($filename, $content) {

        preg_match('/request_(\d+)/', $filename, $match);

        $request_id = isset($match[1]) ? $match[1] : 0;

        $lines = array_map('str_getcsv', str_getcsv($content, "\n"));

        $codes = array();

        foreach ($lines as $line) {
            if (isset($line[0])) {
                $codes[] = trim($line[0]);
            }
        }

        if (empty($codes)) {
            throw new SMACCodeException("Empty import file.");
        }

        $existed_codes = Mysql::getInstance()->select('code')->from('smac_codes')->in('code', $codes)->get()->all('code');

        $new_codes = array_diff($codes, $existed_codes);

        $new_codes = array_unique($new_codes);

        if (empty($new_codes)) {
            throw new SMACCodeException("Nothing to import.");
        }

        $data = array();

        foreach ($new_codes as $new_code) {
            $data[] = array(
                'code'    => $new_code,
                'request' => $request_id ? 'request_' . $request_id : '',
                'added'   => 'NOW()'
            );
        }

        return Mysql::getInstance()->insert('smac_codes', $data)->result();
    }
}

class SMACCodeException extends Exception
{
}
