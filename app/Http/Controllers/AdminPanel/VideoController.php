<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Category;

class VideoController extends Controller
{
    public function AddVideoPage(){
        $categories = Category::GetMainCategories();
        $data["categories"] = $categories;
        
        return view("AdminPanel.admin_addVideo", ["data"=>$data]);
    }
    
    public function AddVideo(){
        $title = $_POST["videoTitle"];
        $link = $_POST["videoLink"];
        $description = $_POST["videoDescription"];
        
        $video_id = Video::AddVideo($title, $link, $description);
        
        $arrayToInsert = array();
        $count = 1;
        print_r($_POST);
        while(true){
            if(isset($_POST["videoProductID" . $count])){
                $txt = $_POST["videoProductID" . $count];
                if($txt != "---"){
                    array_push($arrayToInsert, $txt);
                }
            }
            else break;
            $count++;
        }
        
        foreach ($arrayToInsert as $value) {
            Video::AddVideoProduct($video_id, $value);
        }
    }
}
