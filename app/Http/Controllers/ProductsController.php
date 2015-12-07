<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller {

    public function index() {
        $page_name = "products";

        $eyes_sub_categories = Category::GetSubcategoriesByMainCategoryName("eyes");
        $face_sub_categories = Category::GetSubcategoriesByMainCategoryName("face");
        $lips_sub_categories = Category::GetSubcategoriesByMainCategoryName("lips");

        $data["eyes_sub_categories"] = $eyes_sub_categories;
        $data["face_sub_categories"] = $face_sub_categories;
        $data["lips_sub_categories"] = $lips_sub_categories;

        //TODO: Move this db request to another file
        $header_image = DB::select('SELECT image_path FROM page_header_images WHERE page_name = ' . "'$page_name'");
        $data["header_image"] = $header_image;

        return view("products", ["data" => $data]);
    }

    public function GetProduct($category, $subcategory, $product_id) {
        $translatedCategory = Category::TranslateCategoryName($category);
        $translatedSubcategory = Category::TranslateSubcategoryName($subcategory);
        if (count($translatedCategory) == 0 || count($translatedSubcategory) == 0) {
            return Redirect::to("/");
        }

        $catID = $translatedCategory[0]->category_id;
        $subID = $translatedSubcategory[0]->sub_category_id;

        $product = Product::GetProduct($catID, $subID, $product_id);

        if (count($product) == 0) {
            return Redirect::to("/");
        }

        $pageInfo = ["categoryName" => $translatedCategory[0]->category_name,
            "subcategoryName" => $translatedSubcategory[0]->sub_category_name,
            "productName" => $product[0]->product_name,
            "categoryEngName" => $category,
            "subcategoryEngName" => $subcategory,
            "productId" => $product_id];

        //if the product has different models get them
        if ($product[0]->has_models == 1) {
            $product_models = Product::GetProductModels($product[0]->product_id);
            $data["product_models"] = $product_models;
            $pageInfo["has_models"] = "1";
        } else
            $pageInfo["has_models"] = "0";


        $data["pageInfo"] = $pageInfo;
        $data["product_info"] = $product;

        return view("single_product", ["data" => $data]);
    }

    public function GetBasketProducts() {
        if (Session::has("basketProducts")) {
            
        } else {
            return "";
        }

        return $this->GetBasketData();
    }

    public function AddProductToBasket($id, $model) {
        //Session::flush();
        if (Session::has("basketProducts")) {
            $arr = Session::pull("basketProducts");
            array_push($arr, array($id, $model));
        } else {
            $arr = array();
            array_push($arr, array($id, $model));
        }
        Session::put("basketProducts", $arr);

        return $this->GetBasketData();
    }

    public function ProcessBasketData() {
        $products = array();
        $ids = array();
        $quantity = array();
        foreach (Session::get("basketProducts") as $product) {
            array_push($ids, $product[0]);
            
            if (!isset($quantity[$product[0]][$product[1]])) {
                $quantity[$product[0]][$product[1]] = 1;
            } else
                $quantity[$product[0]][$product[1]]++;
        }
        //print_r(implode(", ", $ids));
        if(count($ids) == 0) {
            array_push($ids, -1);
        }
        
        //print_r($quantity);
        //Session::flush();
        
        $productList = array();
        foreach ($quantity as $key => $item) {
            foreach ($item as $key2 => $value) {
                $prod = Product::GetProductByID($key);
                if($key2 == "-1") $key2 = "";
                $prod[0]->model = $key2;
                $prod[0]->quantity = $value;
                if($key2 != "") $prod[0]->product_name .= '(' . $key2 . ')';
                $cat = Category::TranslateCategoryIndex($prod[0]->product_main_category);
                $sub = Category::TranslateSubcategoryIndex($prod[0]->product_sub_category);
                $prod[0]->product_main_category = $cat[0]->category_eng_name;
                $prod[0]->product_sub_category = $sub[0]->sub_category_eng_name;
                array_push($productList, $prod);
            }
        }
        
        //$products = Product::GetProductsForBasket('(' . implode(", ", $ids) . ')');

        //$data["quantity"] = $quantity;
        $data["products"] = $productList;

        return $data;
    }

    public function GetBasketData() {
        $data = $this->ProcessBasketData();
        return view("basket", ["data" => $data]);
    }

    public function GetCartData() {
        $data = $this->ProcessBasketData();
        return view("cart_page", ["data" => $data]);
    }

    public function DecreaseProductFromBasket($id, $model) {
        $ids = array();
        foreach (Session::pull("basketProducts") as $product) {
            if ($product[0] == $id && $product[1] == $model) {
                $id = -1;
                continue;
            }
            array_push($ids, array($product[0], $product[1]));
        }
        Session::put("basketProducts", $ids);
        return "success";
    }
    
    public function DeleteProductFromBasket($id, $model) {
        $ids = array();
        foreach (Session::pull("basketProducts") as $product) {
            if ($product[0] == $id && $product[1] == $model) {
                continue;
            }
            array_push($ids, array($product[0], $product[1]));
        }
        Session::put("basketProducts", $ids);
        return "success";
    }
    
    public function GetOrderDetailsTable($name, $email, $phone, $city, $address){
        
        $data = $this->ProcessBasketData();
        $data["userName"] = $name;
        $data["userEmail"] = $email;
        $data["userPhone"] = $phone;
        $data["userCity"] = $city;
        $data["userAddress"] = $address;
        return view("orderDetailsTable", ["data"=>$data]);
    }

}
