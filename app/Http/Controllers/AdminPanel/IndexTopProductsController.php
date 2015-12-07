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


class IndexTopProductsController extends Controller {

    public function index() {
        $categories = Category::GetMainCategories();
        $data["categories"] = $categories;
        
        $products = Product::GetIndexProducts();
        $data["index_products"] = $products;
        
        
        return view("AdminPanel.admin_index_top_products", ["data"=>$data]);
    }

    static function GenerateProducts() {
        $categories = DB::select("select c.category_name, s.sub_category_name, s.sub_category_id, s.main_category_id "
                        . "from product_categories c inner join product_sub_categories s "
                        . "on c.category_id = s.main_category_id");

        foreach ($categories as $cat) {
            $mainCat = $cat->category_name;
            $subCat = $cat->sub_category_name;
            $mainID = $cat->main_category_id;
            $subID = $cat->sub_category_id;

            $a = 4;
            while ($a > 1) {
                IndexTopProductsController::InsertProduct($mainCat, $mainID, $subCat, $subID);
                $a--;
            }
        }
    }

    static function InsertProduct($mainName, $mainID, $subName, $subID) {
        $productName = $mainName . " -> " . $subName . str_random(6);
        $productDesc = "bla bla bla";
        $productImage = "images/testProduct3.jpg";
        $productPrice = "12.99";
        $productModels = 0;

        $insert = DB::insert("INSERT INTO products (product_name, product_image, product_description, product_price, product_main_category, product_sub_category, has_models) VALUES(?,?,?,?,?,?,?)", [$productName, $productImage, $productDesc, $productPrice, $mainID, $subID, 0]);
        echo "inserted <br/>";
    }

}
