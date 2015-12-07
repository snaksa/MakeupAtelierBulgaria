<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ImportantMessage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Product;

class ProductsController extends Controller {

    public function AddProductPage() {
        $categories = Category::GetMainCategories();
        $data["categories"] = $categories;
        return view("AdminPanel.admin_addProduct", ["data" => $data]);
    }

    public function AddProduct() {

        $title = $_POST["productTitle"];
        $description = $_POST["productDescription"];
        $price = $_POST["productPrice"];
        $hasModels = $_POST["productHasModels"];
        $category = $_POST["productCategory"];
        $subcategory = $_POST["subCategorySelect"];

        if (Input::hasFile("product_picture")) {
            $file = Input::file("product_picture");
            $folder = '/images/';
            $destinationPath = public_path() . $folder;
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $img_path = $folder . $filename;
            $uploadSuccess = $file->move($destinationPath, $filename);
        }

        $p_id = Product::AddProduct($title, $description, $price, $category, $subcategory, $img_path, $hasModels);
        if ($hasModels) {
            $count = 1;
            while (true) {
                if (Input::hasFile("modelPicture" . $count)) {
                    $file = Input::file("modelPicture" . $count);
                    $folder = '/productModels/';
                    $destinationPath = public_path() . $folder;
                    $filename = str_random(6) . '_' . $file->getClientOriginalName();
                    $img_path = $folder . $filename;
                    $uploadSuccess = $file->move($destinationPath, $filename);

                    $modelTitle = $_POST["modelTitle" . $count];
                    echo $modelTitle;

                    Product::AddProductModel($p_id, $img_path, $modelTitle);
                } else
                    break;
                $count++;
            }
        }

        return Redirect::to("admin/edit_products");
    }

    public function EditProducts() {
        $categories = Category::GetMainCategories();
        $data["categories"] = $categories;
        return view("AdminPanel.admin_edit_product", ["data" => $data]);
    }

    public function EditSingleProduct($id) {
        $categories = Category::GetMainCategories();
        $data["categories"] = $categories;
        $product = Product::GetProductByID($id);
        $data["product_details"] = $product[0];


        return view("AdminPanel.admin_edit_single_product", ["data" => $data]);
    }

    public function EditProduct($id) {
        $title = $_POST["productTitle"];
        $description = $_POST["productDescription"];
        $price = $_POST["productPrice"];
        $hasModels = $_POST["productHasModels"];
        $category = $_POST["productCategory"];
        $subcategory = $_POST["subCategorySelect"];

        if (Input::hasFile("product_picture")) {
            $has_file = true;
            $file = Input::file("product_picture");
            $folder = '/images/';
            $destinationPath = public_path() . $folder;
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $img_path = $folder . $filename;
            $uploadSuccess = $file->move($destinationPath, $filename);

            $pd = Product::GetProductByID($id);
            $img = $pd[0]->product_image;
            if (File::exists(public_path() . $img)) {
                File::delete(public_path() . $img);
            }
        } else {
            $has_file = false;
            $pd = Product::GetProductByID($id);
            $img = $pd[0]->product_image;
            $img_path = $img;
        }

        Product::EditProduct($id, $title, $description, $price, $category, $subcategory, $img_path, $hasModels);
        return Redirect::to("admin/edit_product/" . $id);
    }

    public function CategoryTopProducts() {
        $categories = Category::GetMainCategories();
        $data["categories"] = $categories;

        $products = Product::GetIndexProducts();
        $data["index_products"] = $products;

        return view("AdminPanel.admin_category_top_products", ["data" => $data]);
    }

}
