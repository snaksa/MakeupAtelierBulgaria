@extends("master")

@section("title")
<title><?php echo $data["sub_info"][0]->category_name . ' - ' . $data["sub_info"][0]->sub_category_name; ?></title>
@stop

@section("slideshow")
<div id="slideshow">
    <div>
        <img class="slideshowImage" src="{{URL::asset('images/productsCover.jpg')}}">
    </div>
    <div class="categories">
        <div class="catHeader">
            <ul style="display: inline-block;">
                <?php foreach($data["sub_categories"] as $item) { ?>
                <li><a href="<?php echo $item->sub_category_eng_name; ?>" class="menuLink"><?php echo $item->sub_category_name; ?></a></li>
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
                <span><a href="/products/<?php echo $data["sub_info"][0]->category_eng_name; ?>" class="siteMap"><?php echo $data["sub_info"][0]->category_name; ?></a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/products/<?php echo $data["sub_info"][0]->category_eng_name . '/' . $data["sub_info"][0]->sub_category_eng_name; ?>" class="siteMap"><?php echo $data["sub_info"][0]->sub_category_name; ?></a></span>
            </div>
        </div>
        <div style="width: 914px;margin: 0 auto;">
            <!--<div class="productTitleCategory">
                    <div style="height:auto; margin-top:20px;text-align:center;">
                            <span class="productCategory"><a href="#" class="mainCategory">Лице</a></span>
                            <hr class="horizontalLine" />
                    </div>
            </div>-->

            <div class="productCategoriesList" >
                <center><span class="productSubCategory"><a href="#" name="section1" class="mainCategory"><?php echo $data["sub_info"][0]->sub_category_name; ?></a></span>
                    <hr class="smallHorizontalLine" />
                    <span>
                        <section class="main">
                            <div class="wrapper-demo">
                                <div id="dd" class="wrapper-dropdown-5" tabindex="1">Подреди по
                                    <ul class="dropdown">
                                        <li><a href="#"><i class="icon-user"></i>Най-нови</a></li>
                                        <li><a href="#"><i class="icon-cog"></i>Най-популярни</a></li>
                                    </ul>
                                </div>
                                ​</div>
                        </section>
                    </span></center>

                <div class="productsList">

                    <?php
                    $item_count = 0;
                    foreach ($data["newest_products"] as $item) {
                        ?>
                        <div class = "homeProduct" style = "border:none;margin-top: 5px;"
                             id = "<?php echo $item_count; ?>" onmouseover = 'ShowDetailsDiv(this)' onmouseout = 'HideDetailsDiv(this)'>
                            <a href = "<?php echo $data['sub_info'][0]->sub_category_eng_name . '/' . $item->product_id; ?>" class = "homeProductLink">
                                <div class = "productBox">
                                    <img src = "{{URL::asset($item->product_image)}}" class = "singleProductImage" id = "link<?php echo $item_count; ?>"/>
                                    <a href = "<?php echo $data['sub_info'][0]->sub_category_eng_name . '/' . $item->product_id; ?>" class = "homeProductLink">
                                        <div class = "seeMoreProduct" id = "product<?php echo $item_count; ?>">Детайли</div>
                                    </a>
                                </div>
                                <br />
                                <div class = "productTitle"><?php echo $item->product_name; ?></div>
                            </a>
                        </div>
                    <?php 
                    $item_count++;
                    } ?>

                    

                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
</div>
@stop