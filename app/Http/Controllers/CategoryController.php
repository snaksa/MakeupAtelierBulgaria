<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller {

    public function GetMainCategory($category) {
        $category_subCategories = Category::GetSubcategoriesByMainCategoryName($category);

        if ($category == "brushes") {
            return Redirect::to("/products/" . $category . "/all_brushes");
        }
        else if ( $category == "accessories") {
            return Redirect::to("/products/" . $category . "/all_accessories");
        }
        else if ($category == "artistic") {
            return Redirect::to("/products/" . $category . "/all_artistic");
        }

        if (count($category_subCategories) == 0) {
            return Redirect::to("/");
        }


        $list_count = count($category_subCategories);
        $sub_data = array();
        for ($i = 0; $i < $list_count; $i++) {
            $category_name = $category_subCategories[$i]->category_eng_name;
            $category_bg_name = $category_subCategories[$i]->category_name;
            $sub_id = $category_subCategories[$i]->sub_category_id;
            $sub_name = $category_subCategories[$i]->sub_category_name;
            $sub_eng_name = $category_subCategories[$i]->sub_category_eng_name;
            $most_popular_products = Product::GetMostPopularSubCatetegoryProducts($sub_id);
            $newest_products = Product::GetMostRecentSubCatetegoryProducts($sub_id);

            //TODO: get most popular and most recent products


            $sub_category_info = array(
                "category_name" => $category_name,
                "category_bg_name" => $category_bg_name,
                "sub_id" => $sub_id,
                "sub_name" => $sub_name,
                "sub_eng_name" => $sub_eng_name,
                "most_popular_products" => $most_popular_products,
                "newest_products" => $newest_products);

            array_push($sub_data, $sub_category_info);
        }

        $data["sub_data"] = $sub_data;

        return view("category", ["data" => $data]);
    }
    

    public function GetMainAndSubCategory($category, $sub_category) {
        $category_subCategory = Category::GetCategoryAndSubcategoryInfo($category, $sub_category);
        if (count($category_subCategory) == 0) {
            return Redirect::to("/");
        }

        $translatedCategory = Category::TranslateCategoryName($category);
        $translatedSubcategory = Category::TranslateSubcategoryName($sub_category);
        
        $sub_categories = Category::GetSubCategories($category_subCategory[0]->category_id);
        $newest_products = Product::GetProductsByMainAndSubCategory($translatedCategory[0]->category_id, $translatedSubcategory[0]->sub_category_id);
        $data["newest_products"] = $newest_products;
        $data["sub_info"] = $category_subCategory;
        $data["sub_categories"] = $sub_categories;

        return view("sub_category", ["data" => $data]);
    }

}
