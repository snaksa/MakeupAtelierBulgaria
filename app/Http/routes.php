<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('lecturers', function(){
    return view("lecturers");
});

Route::get('video/{id}', function(){
    return view("single_video");
});

Route::get('cart', "ProductsController@GetCartData");

Route::get('portfolio', "PortfolioController@GetGalleries");
Route::get('portfolio/{id}', "PortfolioController@GetSingleGallery");

Route::get('contacts', function(){
    return view("contacts");
});

Route::get('/', "IndexController@index");

Route::get('/getBasketProducts', "ProductsController@GetBasketProducts");
Route::get('/addProductToBasket/{id}/{model}', "ProductsController@AddProductToBasket");
Route::get('/decreaseProductFromBasket/{id}/{model}', "ProductsController@DecreaseProductFromBasket");
Route::get('/deleteProductFromBasket/{id}/{model}', "ProductsController@DeleteProductFromBasket");
Route::get('/getOrderDetailsTable/{name}/{email}/{phone}/{city}/{address}', "ProductsController@GetOrderDetailsTable");

Route::get('products', "ProductsController@index");
Route::get('products/{category}', "CategoryController@GetMainCategory");
Route::get('products/{category}/{subcategory}', "CategoryController@GetMainAndSubCategory");
Route::get('products/{category}/{subcategory}/{product_id}', "ProductsController@GetProduct");

//this is the user NewsController, not the Admin NewsController
Route::get('news', "NewsController@GetNews");
Route::get('news/{id}', "NewsController@GetSingleNews");

Route::get('video/{id}', "VideoController@GetSingleVideo");

Route::get('admin/getSubcategories/{id}', "AdminPanel\AjaxRequestsController@GetSubcategories");
Route::get('admin/edit_product/getSubcategories/{id}', "AdminPanel\AjaxRequestsController@GetSubcategories");
Route::get('admin/edit_product/getSubcategoriesWithSelect/{id}/{sub}', "AdminPanel\AjaxRequestsController@GetSubcategoriesWithSelect");


//START-----AdminPanel Ajax Requests-----

//gets all products by category and subcategory, so you can choose which to set on the index page
//and shows them in different window
Route::get('admin/indexTopProductsResult/{mainID}/{subID}', "AdminPanel\AjaxRequestsController@GetOptionProducts");

//get all products by subcategory, so you can choose which to set as one of the three
//most popular products for the given subcategory
//the difference with the route above is in the javascript function that is being triggered
//when you click "Избери"/"Choose"
Route::get('admin/topProductsResult/{mainID}/{subID}', "AdminPanel\AjaxRequestsController@GetOptionTopProducts");

//get products by category and subcategory and show them as articles or as rows in table
//the difference is when you pass ?table=0
Route::get('admin/getProductsByCategory/{mainID}/{subID}', "AdminPanel\AjaxRequestsController@GetProductsAsYouWish");

//get the most_popular products for a given subcategory
//no need to pass main category but I'm too lazy right now to fix it
Route::get('admin/getTopProductsByCategory/{mainID}/{subID}', "AdminPanel\AjaxRequestsController@GetTopProductsByCategory");

//update top product that is being shown on the index page
Route::get('admin/updateTopProduct/{oldID}/{newID}', "AdminPanel\AjaxRequestsController@UpdateIndexProduct");

//update product for a given subcategory
Route::get('admin/updateCategoryTopProduct/{oldID}/{newID}', "AdminPanel\AjaxRequestsController@UpdateCategoryTopProduct");

//get list with products to choose for a video
Route::get('admin/videoTopProducts/{mainID}/{subID}', "AdminPanel\AjaxRequestsController@GetVideoProducts");


//END-----AdminPanel Ajax Requests-----

Route::get('elements', function(){
    return view("AdminPanel.elements");
});

Route::get('admin/slideshow', 'AdminPanel\SlideshowController@index');
Route::post('admin/slideshow', 'AdminPanel\SlideshowController@update_image');

Route::get('admin/important_message', 'AdminPanel\ImportantMessageController@index');
Route::post('admin/important_message', 'AdminPanel\ImportantMessageController@update_message');

Route::get('admin/index_top_products', 'AdminPanel\IndexTopProductsController@index');
Route::get('admin/category_top_products', 'AdminPanel\ProductsController@CategoryTopProducts');

Route::get('admin/add_product', "AdminPanel\ProductsController@AddProductPage");
Route::post('admin/add_product', 'AdminPanel\ProductsController@AddProduct');
Route::get('admin/edit_products', 'AdminPanel\ProductsController@EditProducts');
Route::get('admin/edit_product/{id}', 'AdminPanel\ProductsController@EditSingleProduct');
Route::post('admin/edit_product/{id}', 'AdminPanel\ProductsController@EditProduct');

Route::get('admin/add_news', "AdminPanel\NewsController@AddNewsPage");
Route::post('admin/add_news', "AdminPanel\NewsController@AddNews");
Route::get('admin/edit_news', "AdminPanel\NewsController@EditNews");
Route::get('admin/edit_news/{id}', "AdminPanel\NewsController@EditSingleNews");
Route::post('admin/edit_news/{id}', "AdminPanel\NewsController@EditSelectedNews");

Route::get('admin/add_gallery', "AdminPanel\GalleryController@AddGalleryPage");
Route::post('admin/add_gallery', "AdminPanel\GalleryController@AddGallery");
Route::get('admin/edit_gallery', "AdminPanel\GalleryController@EditGalleryPage");
Route::get('admin/edit_gallery/{id}', "AdminPanel\GalleryController@EditSingleGalleryPage");
Route::post('admin/edit_gallery/{id}', "AdminPanel\GalleryController@UploadGalleryImages");

Route::get('admin/add_video', "AdminPanel\VideoController@AddVideoPage");
Route::post('admin/add_video', "AdminPanel\VideoController@AddVideo");