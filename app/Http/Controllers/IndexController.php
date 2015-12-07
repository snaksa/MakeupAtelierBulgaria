<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Product;

class IndexController extends Controller {

    public function index() {
        //get data
        
        //TODO: Create a class for slideshow images
        $slideshow_images = DB::select('select path from slideshow_pics');
        $data["slideshow_images"] = $slideshow_images;
        
        $index_products = Product::GetIndexProducts();
        $data["index_products"] = $index_products;
        
        return view("index", ["data" => $data]);
    }

}
