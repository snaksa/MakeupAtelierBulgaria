<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

class PortfolioController extends Controller
{
    public function GetGalleries()
    {
        $galleries = Gallery::GetAllGalleries();
        $data["galleries"] = $galleries;
        return view("portfolio", ["data"=>$data]);
    }
    
    public function GetSingleGallery($id){
        $images = Gallery::GetGalleryImages($id);
        $data["images"] = $images;
        
        $galleryDetails = Gallery::GetSingleGalleryInfo($id);
        $data["gallery_info"] = $galleryDetails;
        return view("single_portfolio", ["data"=>$data]);
    }
}
