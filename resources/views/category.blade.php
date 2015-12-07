@extends("master")

@section("title")
<title>Категория</title>
@stop

@section("slideshow")
<div id="slideshow">
    <div>
        <img class="slideshowImage" src="{{ URL::asset('images/productsCover.jpg') }}">
    </div>
    <div class="categories">
        <div class="catHeader">
            <ul style="display: inline-block;">
                <?php foreach ($data["sub_data"] as $item) { ?>
                    <li>
                        <a href="<?php echo '#' . $item["sub_eng_name"]; ?>" class="menuLink"><?php echo $item["sub_name"]; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>	
@stop

@section("content")
<div class="content">
    <div id="productsSec" class="productsSection">
        <div class="pageHeader">
            <div class="siteMapDiv">
                <span><a href="/" class="siteMap">Начало</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/products" class="siteMap">Продукти</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/products/<?php echo $data["sub_data"][0]["category_name"]; ?>" class="siteMap"><?php echo $data["sub_data"][0]["category_bg_name"]; ?></a></span>
            </div>
        </div>
        <div style="width: 914px;margin: 0 auto;">
            <!--<div class="productTitleCategory">
                    <div style="height:auto; margin-top:20px;text-align:center;">
                            <span class="productCategory"><a href="#" class="mainCategory">Лице</a></span>
                            <hr class="horizontalLine" />
                    </div>
            </div>-->

            <?php
            $most_popular_count = 1;
            $newest_count = 1000;
            foreach ($data["sub_data"] as $item) {
                ?>
                <!--print_r($value["most_popular_products"]);-->
                <div class = "productCategoriesList" >
                    <center><span class = "productSubCategory"><a href = "/products/<?php echo $item['category_name'] . '/' . $item['sub_eng_name']; ?>" name = "<?php echo $item['sub_eng_name']; ?>" class = "mainCategory"><?php echo $item["sub_name"]; ?></a></span>
                        <hr class = "smallHorizontalLine" />
                        <span><a href = "/products/<?php echo $item['category_name'] . '/' . $item['sub_eng_name']; ?>" class = "subCategories">Виж всички (8)</a></span></center>

                    <div class = "productCategoriesListHeader">
                        <span class = "productCategoriesListHeaderTitle">Най-нови</span>
                    </div>
                    <div class = "productsList">
                        <?php
                        foreach ($item["newest_products"] as $product) { 
                        ?>
                            <div class = "homeProduct" style = "border:none;border-right: 1px dotted #3394B5;margin-top: 5px;"
                                 id = "<?php echo $newest_count; ?>" onmouseover = 'ShowDetailsDiv(this)' onmouseout = 'HideDetailsDiv(this)'>
                                <a href = "<?php echo $item['category_name'] . '/' . $item['sub_eng_name'] . '/' . $product->product_id; ?>" class = "homeProductLink">
                                    <div class = "productBox">
                                        <img src = "{{URL::asset($product->product_image)}}" class = "singleProductImage" id = "link<?php echo $newest_count; ?>"/>
                                        <a href = "<?php echo $item['category_name'] . '/' . $item['sub_eng_name'] . '/' . $product->product_id; ?>" class = "homeProductLink">
                                            <div class = "seeMoreProduct" id = "product<?php echo $newest_count; ?>">Детайли</div>
                                        </a>
                                    </div>
                                    <br />
                                    <div class = "productTitle"><?php echo $product->product_name; ?></div>
                                </a>
                            </div>
                            <?php
                            $newest_count++; } 
                            ?>
                    </div>


                    <div class = "productCategoriesListHeader">
                        <span class = "productCategoriesListHeaderTitle">Най-популярни</span>
                    </div>
                    <div class = "productsList">
                        <?php
                        foreach ($item["most_popular_products"] as $product) { 
                        ?>
                            <div class = "homeProduct" style = "border:none;border-right: 1px dotted #3394B5;margin-top: 5px;"
                                 id = "<?php echo $most_popular_count; ?>" onmouseover = 'ShowDetailsDiv(this)' onmouseout = 'HideDetailsDiv(this)'>
                                <a href = "<?php echo $item['category_name'] . '/' . $item['sub_eng_name'] . '/' . $product->product_id; ?>" class = "homeProductLink">
                                    <div class = "productBox">
                                        <img src = "{{URL::asset($product->product_image)}}" class = "singleProductImage" id = "link<?php echo $most_popular_count; ?>"/>
                                        <a href = "<?php echo $item['category_name'] . '/' . $item['sub_eng_name'] . '/' . $product->product_id; ?>" class = "homeProductLink">
                                            <div class = "seeMoreProduct" id = "product<?php echo $most_popular_count; ?>">Детайли</div>
                                        </a>
                                    </div>
                                    <br />
                                    <div class = "productTitle"><?php echo $product->product_name; ?></div>
                                </a>
                            </div>
                            <?php
                            $most_popular_count++; } 
                            ?>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</div>
@stop