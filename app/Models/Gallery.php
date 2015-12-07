<?php

namespace App\Models;

use \DB;

class Gallery {
    public static function AddGallery($title, $image){
        $select = DB::select("SELECT gallery_position "
                . "FROM galleries "
                . "ORDER BY gallery_position "
                . "DESC LIMIT 1");
        $pos = $select[0]->gallery_position;
        $insert = DB::insert("INSERT INTO galleries "
                . "(gallery_title, gallery_main_image, gallery_position) "
                . "VALUES(?,?,?)", [$title, $image, $pos + 1]);
    }
    
    public static function GetAllGalleries(){
        $select = DB::select("SELECT * FROM galleries");
        return $select;
    }
    
    public static function GetSingleGalleryInfo($id){
        $select = DB::select("SELECT * FROM galleries WHERE gallery_id = ?", [$id]);
        return $select;
    }
    
    public static function GetGalleryImages($id){
        $select = DB::select("SELECT * FROM gallery_images WHERE image_main_gallery_id = ?", [$id]);
        return $select;
    }
    
    public static function GetSingleImage($id){
        $select = DB::select("SELECT * FROM gallery_images WHERE image_id = ?", [$id]);
        return $select;
    }
    
    public static function GetGalleryImagesCount($id){
        $select = DB::select("SELECT COUNT(*) as Count FROM gallery_images WHERE image_main_gallery_id = ?", [$id]);
        return $select[0]->Count;
    }
    
    public static function InsertImageToDB($gallery_id, $name){
        $insert = DB::insert("INSERT INTO gallery_images "
                . "(image_main_gallery_id, image_path) "
                . "VALUES(?,?)", [$gallery_id, $name]);
    }
    
    public static function DeleteImage($id){
        DB::delete("DELETE FROM gallery_images WHERE image_id = ?", [$id]);
    }
    
    public static function UpdateGalleryInfo($id, $title, $image, $hasImage){
        $query1 = "UPDATE galleries SET gallery_title = ?, gallery_main_image = ? WHERE gallery_id = ?";
        $query2 = "UPDATE galleries SET gallery_title = ? WHERE gallery_id = ?";
        
        if($hasImage){
            $update = DB::update($query1, [$title, $image, $id]);
        }
        else $update = DB::update($query2, [$title, $id]);
    }
}
