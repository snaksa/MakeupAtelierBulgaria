<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DB;

class Video extends Model {

    public static function AddVideo($title, $link, $description) {
        $insert = DB::insert("INSERT INTO videos (video_title, video_link, video_description) "
                        . "VALUES(?,?,?)", [$title, $link, $description]);
        return DB::getPdo()->lastInsertId();
    }
    
    public static function AddVideoProduct($video_id, $product_id){
        $insert = DB::insert("INSERT INTO video_products (video_id, product_id) "
                        . "VALUES(?,?)", [$video_id, $product_id]);
    }

    public static function GetSingleVideo($id) {
        $video = DB::select("SELECT * FROM videos "
                        . "WHERE video_id = ?", [$id]);
        return $video;
    }

    public static function GetRandomVideos($count) {
        $videos = DB::select("SELECT * FROM videos ORDER BY RAND() LIMIT ?", [$count]);
        return $videos;
    }

}
