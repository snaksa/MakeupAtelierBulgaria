<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class SingleProductController extends Controller {
    
    public function index($category, $subcategory, $product_id){
        $translatedCategory = Category::TranslateCategoryName($category);
        $translatedSubcategory = Category::TranslateSubcategoryName($subcategory);
        $catID = $translatedCategory[0]->category_id;
        $subID = $translatedSubcategory[0]->sub_category_id;
        
        
        $product = Product::GetProduct($catID, $subID, $product_id);
        
        $pageInfo = ["categoryName"=>$translatedCategory[0]->category_name, 
            "subcategoryName"=>$translatedSubcategory[0]->sub_category_name,
            "productName"=>$product[0]->product_name];
        
        //if the product has different models get them
        if($product[0]->has_models == 1){
            $product_models = Product::GetProductModels($product[0]->product_id);
            $data["product_models"] = $product_models;
            $pageInfo["has_models"] = "1";
        }
        else $pageInfo["has_models"] = "0";
        
        
        $data["pageInfo"] = $pageInfo;
        $data["product_info"] = $product;
        
        return view("single_product", ["data"=>$data]);
    }
}
