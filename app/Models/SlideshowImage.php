<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SlideshowImage
 *
 * @author sinan
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DB;

class SlideshowImage extends Model {
    public static function UpdateImage($id, $path){
        $slideshow_images = DB::update("UPDATE slideshow_pics SET path = ? WHERE id = ?", [$path, $id]);
    }
    
    public static function GetImages(){
        $slideshow_images = DB::select('select path from slideshow_pics');
        return $slideshow_images;
    }
    
    public static function GetImageByID($id){
        $image = DB::select('select path from slideshow_pics where id = ?', [$id]);
        return $image;
    }
}
