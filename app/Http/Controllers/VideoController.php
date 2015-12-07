<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller {
    
    public function GetSingleVideo($id){
        $v = Video::GetSingleVideo($id);
        $video = $v[0];
        $data["video"] = $video;
        $data["randomVideos"] = Video::GetRandomVideos(3);
        return view("single_video", ["data"=>$data]);
    }
}
