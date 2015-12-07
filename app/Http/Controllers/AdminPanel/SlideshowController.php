<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\SlideshowImage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class SlideshowController extends Controller {

    public function index() {
        $slideshow_images = SlideshowImage::GetImages();
        
        $arr = array();
        foreach($slideshow_images as $image){
            list($width, $height) = getimagesize(public_path().$image->path);
            $image->width = $width;
            $image->height = $height;
            array_push($arr, $image);
        }
        
        $data["slideshow_images"] = $arr;
        return view("AdminPanel.admin_slideshow", ["data"=>$data]);
    }

    public function update_image() {
        $inputName = $_POST["chosenImage"];

        //return Redirect::to("admin_index");

        $destinationPath = '';
        $filename = '';

        if(Input::hasFile($inputName)){
            $file = Input::file($inputName);
            $folder = '/images/';
            $destinationPath = public_path().$folder;
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            
            $id = intval($inputName);
            $img_path = $folder . $filename;
            
            $old_image = SlideshowImage::GetImageByID($id);
            $old_path = $old_image[0]->path;
            echo $old_path;
            if(File::exists(public_path().$old_path)){
                File::delete(public_path().$old_path);
            }
            
            SlideshowImage::UpdateImage($id, $img_path);
        }
        
        return Redirect::to("admin/slideshow");
    }

}
