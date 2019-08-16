<?php

use Stalker\Lib\Core\Mysql;
use Stalker\Lib\Core\Stb;
use Stalker\Lib\Core\Config;

class Video
{

    public static function getById($id){

        $id = intval($id);

        return Mysql::getInstance()->from('video')->where(array('id' => $id))->get()->first();
    }

    public static function getVideoByFileId($file_id){

        $video_id = (int) Mysql::getInstance()->from('video_series_files')
            ->where(array('id' => (int) $file_id))->get()->first('video_id');

        if (!$video_id){
            return null;
        }

        return self::getById($video_id);
    }

    public static function getFileById($file_id){
        return Mysql::getInstance()->from('video_series_files')
                    ->where(array('id' => (int) $file_id))->get()->first();
    }

    public static function getSeasonById($season_id){
        return Mysql::getInstance()->from('video_season')
                    ->where(array('id' => (int) $season_id))->get()->first();
    }

    public static function getEpisodeById($episode_id){
        return Mysql::getInstance()->from('video_season_series')
                    ->where(array('id' => (int) $episode_id))->get()->first();
    }

    public static function getEpisodesBySeasonId($season_id){
        return Mysql::getInstance()->from('video_season_series')
                    ->where(array('season_id' => (int) $season_id))->get()->all();
    }

    public static function getQualityById($quality_id, $for_api = false){
        $qualities = Mysql::getInstance()->from('quality')->orderby('width')->get()->all();

        foreach ($qualities as $quality){
            if ($quality['id'] == $quality_id){

                  return array(
                   'id'    => (int) $quality['id'],
                   'code'  => $quality['num_title'],
                   'name'  => _($quality['text_title']),
                   'width' => (int) $quality['width'],
                  );
            }
        }

        return null;
    }

    public static function getQualityMap(){
        $qualities = Mysql::getInstance()->from('quality')->orderby('width')->get()->all();

        $map = array();

        foreach ($qualities as $quality){
            $map[$quality['id']] = $quality;
        }

        return $map;
    }

    public static function switchOnById($id, $check_status = FALSE){

        $where = array('id' => intval($id));

        if ($check_status) {
            $where['status'] = 1;
        }

        if ((int)Mysql::getInstance()->update('video', array('accessed' => 1, 'added' => 'NOW()'), $where)->total_rows()) {
            Mysql::getInstance()->update('updated_places', array('vclub' => 1));

            self::log($id, "on");
            self::disableForHDDevices($id);
        }
    }

    public static function switchOffById($id){

        $id = intval($id);

        if ((int)Mysql::getInstance()->update('video', array('accessed' => 0, 'added' => 'NOW()'), array('id' => $id))->total_rows()) {

            self::log($id, "off");
            self::enableForHDDevices($id);
        }
    }

    private static function disableForHDDevices($id){

        $id = intval($id);

        return self::setDisableForHDDevices($id, 1);
    }

    private static function enableForHDDevices($id){

        $id = intval($id);

        return self::setDisableForHDDevices($id, 0);
    }

    private static function setDisableForHDDevices($id, $val){

        $id  = intval($id);
        $val = intval($val);

        $video = self::getById($id);

        if ($video['hd']){
            return Mysql::getInstance()->update('video', array('disable_for_hd_devices' => 1), array(
                'name'     => $video['name'],
                'o_name'   => $video['o_name'],
                'director' => $video['director'],
                'year'     => $video['year'],
                'hd'       => 0
            ));
        }

        return true;
    }

    public static function log($video_id, $text, $moderator_id = null){

        if ($moderator_id === null){
            $moderator_id = $_SESSION['uid'];
        }

        $video = self::getById($video_id);

        return Mysql::getInstance()->insert('video_log', array(
            'action'       =>  $text,
            'video_id'     => $video_id,
            'video_name'   => $video['name'],
            'moderator_id' => $moderator_id,
            'actiontime'   => 'NOW()'
        ))->insert_id();
    }

    public function getRawAll($is_tv_series = NULL){

        $user = User::getInstance();
        $all_users_video_ids = $user->getServicesByType('video');

        $result = Mysql::getInstance()
            ->select(array('*', 'IF(`rating_imdb` >= `rating_kinopoisk`, `rating_imdb`, `rating_kinopoisk`) as rating'))
            ->from('video')->where(array('status' => 1, 'accessed' => 1));

        if (Config::get('enable_tariff_plans') && $all_users_video_ids != 'all'){
            $result->in('video.id', $all_users_video_ids);
        }

        if (NULL !== $is_tv_series ) {
            if ($is_tv_series) {
                $result->where(array(
                    'is_series' => (int)$is_tv_series,
                    '(`series` <> "a:0:{}" AND NOT ISNULL(`series`) AND `series`<> "") AND 1=' => 1
                ), ' OR ');
            } else {
                $result->where(array(
                    'is_series' => (int)$is_tv_series,
                    '(`series` = "a:0:{}" OR ISNULL(`series`) OR `series` = "") AND 1=' => 1
                ));
            }
        }

        return $result;
    }

    public function filterList($list){

        for ($i = 0; $i < count($list); $i++){
            /// xgettext:no-php-format
            $list[$i]['name']   = sprintf(_('video_name_format'), $list[$i]['name'], $list[$i]['o_name']);
            $list[$i]['genres'] = implode(', ',
                array_map(
                    function($item){
                        return _($item);
                    },
                    Mysql::getInstance()->from('cat_genre')
                        ->in('id',
                        array(
                            $list[$i]['cat_genre_id_1'],
                            $list[$i]['cat_genre_id_2'],
                            $list[$i]['cat_genre_id_3'],
                            $list[$i]['cat_genre_id_4']))
                        ->get()->all('title')
                )
            );

            $list[$i]['genres_ids'] = array();

            for ($j = 1; $j<=4; $j++){
                if ($list[$i]['cat_genre_id_'.$j] > 0)
                    $list[$i]['genres_ids'][] = (int) $list[$i]['cat_genre_id_'.$j];
            }

            $list[$i]['cover'] = self::getCoverUrl($list[$i]['id']);
            $list[$i]['screenshots'] = self::getScreenshotsUrls($list[$i]['id']);
        }

        return $list;
    }

    public static function getCoverUrl($video_id){

        $cover = Mysql::getInstance()->from('screenshots')->where(array('media_id' => intval($video_id), 'video_episodes' => 0))->get()->first();

        if (empty($cover)){
            return false;
        }

        $dir_name = ceil($cover['id']/100);
        $dir_path = Config::get('screenshots_url').$dir_name;
        $ext = pathinfo($cover['name'], PATHINFO_EXTENSION);
        if (!$ext){
            $ext = 'jpg';
        }
        $dir_path .= '/'.$cover['id'].'.'.$ext;
        return $dir_path;
    }

    /**
     * @param $video_id int
     * @return array
     */
    public static function getScreenshotsUrls($video_id){

        $screenshots = Mysql::getInstance()->from('screenshots')->where(array('media_id' => intval($video_id), 'video_episodes!=' => 0))->get()->all();

        if (empty($screenshots)){
            return array();
        }

        $urls = array_map(function ($screenshot){

            $dir_name = ceil($screenshot['id']/100);
            $dir_path = Config::get('screenshots_url').$dir_name;
            $ext = pathinfo($screenshot['name'], PATHINFO_EXTENSION);
            if (!$ext){
                $ext = 'jpg';
            }
            return $dir_path.'/'.$screenshot['id']. '_' . $screenshot['video_episodes'] . '.'.$ext;

        }, $screenshots);

        return $urls;
    }

    public function setLocale($language){
        Stb::getInstance()->initLocale($language);
    }

    public function getFavorites(){

    }

    public static function getNotEnded(){

        $raw = Mysql::getInstance()->from('vclub_not_ended')->where(array('uid' => Stb::getInstance()->id))->get()->all();

        $not_ended = array();

        foreach ($raw as $video){
            $not_ended[$video['video_id']] = $video;
        }

        return $not_ended;
    }

    public static function getServices(){

        return Mysql::getInstance()->select('id, name')->from('video')->orderby('name')->get()->all();
    }

    public static function isNotEndedHistoryEnabled(){
        return Mysql::getInstance()->from('watched_settings')->get()->first('enable_not_ended') == 1;
    }

    public static function isWatchedHistoryEnabled(){
        return Mysql::getInstance()->from('watched_settings')->get()->first('enable_watched') == 1;
    }

    /**
     * History size in days
     *
     * @return int
     */
    public static function getWatchedHistorySize(){
        return (int) Mysql::getInstance()->from('watched_settings')->get()->first('not_ended_history_size');
    }
}
