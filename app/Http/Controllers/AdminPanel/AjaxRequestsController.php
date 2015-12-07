<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ImportantMessage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Models\Category;
use App\Models\Product;

class AjaxRequestsController extends Controller {

    //put your code here
    public function GetSubcategories($id) {
        $subs = Category::GetSubCategories($id);
        $str = "";
        foreach ($subs as $item) {
            $name = $item->sub_category_name;
            $id = $item->sub_category_id;
            $str = $str . "<option value='$id'>" . $name . "</option>";
        }
        echo $str;
    }

    public function GetSubcategoriesWithSelect($id, $sub) {
        $subs = Category::GetSubCategories($id);
        $str = "";
        foreach ($subs as $item) {
            $name = $item->sub_category_name;
            $id = $item->sub_category_id;
            if ($id == $sub)
                $select = "selected";
            else
                $select = "";
            $str = $str . "<option value='$id'" . $select . ">" . $name . "</option>";
        }
        echo $str;
    }

    public function GetOptionProducts($mainID, $subID) {
        $products = Product::GetProductsByMainAndSubCategory($mainID, $subID);
        $data["products"] = $products;
        return view("AdminPanel.chooseIndexTopProductsResults", ["data" => $data]);
    }

    public function GetOptionTopProducts($mainID, $subID) {
        $products = Product::GetProductsByMainAndSubCategory($mainID, $subID);
        $data["products"] = $products;
        return view("AdminPanel.chooseTopProductsResults", ["data" => $data]);
    }

    public function GetProductsAsYouWish($mainID, $subID) {
        $products = Product::GetProductsByMainAndSubCategory($mainID, $subID);
        $data["products"] = $products;

        if (isset($_GET["table"])) {
            return view("AdminPanel.productsAsArticles", ["data" => $data]);
        }
        return view("AdminPanel.productsAsTable", ["data" => $data]);
    }

    public function GetTopProductsByCategory($mainID, $subID) {
        $products = Product::GetTopProductsByCategory($subID);
        $data["products"] = $products;

        return view("AdminPanel.productsAsArticles", ["data" => $data]);
    }

    public function UpdateIndexProduct($oldID, $newID) {
        $products = Product::UpdateTopProduct($oldID, $newID);
        return "success";
    }

    public function UpdateCategoryTopProduct($oldID, $newID) {
        $products = Product::UpdateCategoryTopProduct($oldID, $newID);
        return "success";
    }
    
    public function GetVideoProducts($cat, $sub){
        $products = Product::GetProductsByMainAndSubCategory($cat, $sub);
        $data["products"] = $products;

        return view("AdminPanel.productsAsArticlesForVideo", ["data" => $data]);
    }

}
