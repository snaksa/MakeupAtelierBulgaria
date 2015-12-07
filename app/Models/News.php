<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DB;

class News extends Model {

    public static function AddNews($title, $text, $image, $author) {
        $date = date('d/m/Y');
        $insert = DB::insert("INSERT INTO news (news_title, news_image, "
                        . "news_text, news_author, news_publish_date) "
                        . "VALUES(?,?,?,?,?)", [$title, $image, $text, $author, $date]);
    }

    public static function GetNews() {
        $news = DB::select("SELECT * FROM news");
        return $news;
    }
    
    public static function GetSingleNews($id){
        $news = DB::select("SELECT * FROM news WHERE news_id = ?", [$id]);
        return $news;
    }
    
    public static function GetLatestNews($limit){
        $select = DB::select("SELECT * FROM news "
                . "ORDER BY news_publish_date DESC "
                . "LIMIT ?", [$limit]);
        return $select;
    }

    public static function UpdateNews($title, $text, $image, $author, $id) {
        $update = DB::update("UPDATE news SET news_title = ?, news_image = ?, "
                        . "news_text = ?, news_author = ? "
                        . "WHERE news_id = ?", [$title, $image, $text, $author, $id]);
    }
}
