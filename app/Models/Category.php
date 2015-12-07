<?php

namespace App\Models;

use \DB;

class Category {

    //get subcategories by main category id
    public static function GetSubCategories($category_id) {
        $subs = DB::select("SELECT * FROM product_sub_categories p WHERE p.main_category_id = ?", [$category_id]);
        return $subs;
    }

    //get subcategories by main category name
    public static function GetSubcategoriesByMainCategoryName($category) {
        $result = DB::select(
                        'SELECT * FROM product_categories c INNER JOIN product_sub_categories s 
                ON c.category_id = s.main_category_id 
                WHERE c.category_eng_name = ?', [$category]);
        return $result;
    }
    
    public static function GetMainCategories(){
        $cats = DB::select("SELECT * FROM product_categories");
        return $cats;
    }

    public static function GetCategoryAndSubcategoryInfo($category, $sub_category) {
        $result = DB::select(
                        'SELECT c.category_id, c.category_name, c.category_eng_name, '
                        . 's.sub_category_name, s.sub_category_eng_name, s.sub_category_id '
                        . 'FROM product_categories c inner join product_sub_categories s '
                        . 'ON c.category_id = s.main_category_id '
                        . 'WHERE c.category_eng_name = ? AND s.sub_category_eng_name = ?', [$category, $sub_category]);
        return $result;
    }

    public static function TranslateCategoryName($name) {
        $info = DB::select("SELECT category_id, category_name FROM product_categories WHERE category_eng_name = ?", [$name]);
        return $info;
    }

    public static function TranslateSubcategoryName($name) {
        $info = DB::select("SELECT sub_category_id, sub_category_name FROM product_sub_categories WHERE sub_category_eng_name = ?", [$name]);
        return $info;
    }
    
    public static function TranslateCategoryIndex($index) {
        $info = DB::select("SELECT category_id, category_eng_name FROM product_categories WHERE category_id = ?", [$index]);
        return $info;
    }
    
    public static function TranslateSubcategoryIndex($index) {
        $info = DB::select("SELECT sub_category_id, sub_category_eng_name FROM product_sub_categories WHERE sub_category_id = ?", [$index]);
        return $info;
    }

}
