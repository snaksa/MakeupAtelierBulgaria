<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author sinan
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DB;

class Product extends Model {

    public static function GetMostRecentSubCatetegoryProducts($categoryID) {
        //Currently gets the most popular products FIX IT !!!
        $newest_products = DB::select('SELECT p.product_id, p.product_name, p.product_image '
                        . 'FROM most_popular_products m INNER JOIN products p '
                        . 'ON m.product_id = p.product_id '
                        . 'WHERE m.sub_category_id = ?', [$categoryID]);
        return $newest_products;
    }

    public static function GetMostPopularSubCatetegoryProducts($categoryID) {
        //TODO: Check settings: get real most popular products or given by the admin
        //Get products defined by the admin
        $most_popular_products = DB::select('SELECT p.product_id, p.product_name, p.product_image '
                        . 'FROM most_popular_products m INNER JOIN products p '
                        . 'ON m.product_id = p.product_id '
                        . 'WHERE m.sub_category_id = ?', [$categoryID]);
        return $most_popular_products;
    }

    public static function GetProduct($catID, $subID, $product_id) {
        $product = DB::select("SELECT * FROM products p "
                        . "WHERE p.product_main_category = ? AND p.product_sub_category = ? AND p.product_id = ?", [$catID, $subID, $product_id]);
        return $product;
    }

    public static function GetProductByID($product_id) {
        $product = DB::select("SELECT * FROM products p "
                        . "WHERE p.product_id = ?", [$product_id]);
        return $product;
    }

    public static function GetProductsByMainAndSubCategory($catID, $subID) {
        $products = DB::select("SELECT * FROM products p "
                        . "WHERE p.product_main_category = ? AND p.product_sub_category = ?", [$catID, $subID]);
        return $products;
    }

    //get different models of the product (if exist)
    public static function GetProductModels($id) {
        $models = DB::select("SELECT * FROM product_models WHERE product_id = ?", [$id]);
        return $models;
    }

    //get home page products
    public static function GetIndexProducts() {
        $result = DB::select('SELECT * FROM index_products i '
                . 'INNER JOIN products p '
                . 'ON i.prod_id = p.product_id '
                . 'INNER JOIN product_categories c '
                . 'ON c.category_id = p.product_main_category '
                . 'INNER JOIN product_sub_categories s '
                . 'ON p.product_sub_category = s.sub_category_id');
        return $result;
    }

    public static function UpdateTopProduct($oldID, $newID) {
        $update = DB::update("UPDATE index_products SET prod_id = ? WHERE prod_id = ?", [$newID, $oldID]);
    }

    public static function AddProduct($title, $description, $price, $mainCat, $subCat, $picture, $hasModels) {
        $update = DB::insert("INSERT INTO products (product_name, product_image, "
                        . "product_description, product_price, "
                        . "product_main_category, product_sub_category, has_models) "
                        . "VALUES(?,?,?,?,?,?,?)", [$title, $picture, $description, $price, $mainCat, $subCat, $hasModels]);
        return DB::getPdo()->lastInsertId();
    }

    public static function EditProduct($id, $title, $description, $price, $mainCat, $subCat, $picture, $hasModels) {
        $update = DB::update("UPDATE products SET product_name = ?, product_image = ?, "
                        . "product_description = ?, product_price = ?, "
                        . "product_main_category = ?, product_sub_category = ?, has_models = ? "
                        . "WHERE product_id = ?", [$title, $picture, $description, $price, $mainCat, $subCat, $hasModels, $id]);
    }

    public static function GetTopProductsByCategory($subID) {
        $result = DB::select('select * '
                        . 'from most_popular_products m INNER JOIN products p ON m.product_id = p.product_id WHERE m.sub_category_id = ?', [$subID]);
        return $result;
    }

    public static function UpdateCategoryTopProduct($oldID, $newID) {
        $update = DB::update("UPDATE most_popular_products SET product_id = ? WHERE product_id = ?", [$newID, $oldID]);
    }

    public static function GetProductsForBasket($prod_ids) {
        $product = DB::select("SELECT * FROM products p "
                        . "INNER JOIN product_categories c "
                        . "ON product_main_category = c.category_id "
                        . "INNER JOIN product_sub_categories s "
                        . "ON product_sub_category = s.sub_category_id "
                        . "WHERE p.product_id IN " . $prod_ids);
        return $product;
    }

    public static function AddProductModel($id, $image_path, $model_name) {
        $update = DB::insert("INSERT INTO product_models (model_name, model_image, "
                        . "product_id) "
                        . "VALUES(?,?,?)", [$model_name, $image_path, $id]);
    }

}
