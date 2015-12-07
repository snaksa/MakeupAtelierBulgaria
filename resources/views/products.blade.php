@extends("master")

@section("title")
<title>Продукти</title>
@stop

@section("slideshow")
<div id="slideshow">
    <div>
        <img class="slideshowImage" src="{{ URL::asset($data['header_image'][0]->image_path)}}">
    </div>
    <div class="categories">
        <div style="width: 460px;margin: 0 auto;">
            <ul>
                <li><a href="/products/eyes" class="menuLink">Очи</a></li><li>
                    <a href="/products/face" class="menuLink">Лице</a></li><li>
                    <a href="/products/lips" class="menuLink">Устни</a></li><li>
                    <a href="/products/brushes" class="menuLink">Четки</a></li><li>
                    <a href="/products/accessories" class="menuLink">Аксесоари</a></li><li>
                    <a href="/products/artistic" class="menuLink">Артистик</a></li>
            </ul>
        </div>
    </div>
</div>	
@stop

@section("content")
<div class="content">
    <div class="productsSection">
        <div class="pageHeader">
            <div class="siteMapDiv">
                <span><a href="/" class="siteMap">Начало</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/products" class="siteMap">Продукти</a></span>
            </div>
        </div>
        <div style="width: 914px;margin: 0 auto;">
            <div class="productCategories">
                <div class="productCategoriesInnerDivText">
                    <div style="height:auto; margin-top:110px;">
                        <span class="productCategory"><a href="/products/face" class="mainCategory">Лице</a></span>
                        <hr class="horizontalLine" />
                        <div style="width:200px;margin: 0 auto;">
                            <?php 
                            $arrCount = count($data["face_sub_categories"]);
                            for( $i = 0; $i < $arrCount; $i++) { ?>
                            <span>
                                <a href="/products/face/<?php echo $data["face_sub_categories"][$i]->sub_category_eng_name; ?>" class="subCategories">
                                    <?=$data["face_sub_categories"][$i]->sub_category_name;?>
                                </a>
                                <?php if($i < $arrCount-1) echo '<span>&nbsp;/</span>'; ?>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="productCategoriesInnerDivImage">
                    <a href="/products/face"><img src="{{ URL::asset('images/faceMakeUp.jpg')}}" class="productCategoriesInnerDivImageImage" /></a>
                </div>
            </div>

            <div class="productCategories">
                <div class="productCategoriesInnerDivImage">
                    <a href="/products/eyes"><img src="{{ URL::asset('images/eyesMakeUp.png')}}" class="productCategoriesInnerDivImageImage" /></a>
                </div>

                <div class="productCategoriesInnerDivText">
                    <div style="height:auto; margin-top:110px;">
                        <span class="productCategory"><a href="/products/eyes" class="mainCategory">Очи</a></span>
                        <hr class="horizontalLine" />
                        <div style="width:200px;margin: 0 auto;">
                            <?php 
                            $arrCount = count($data["eyes_sub_categories"]);
                            for( $i = 0; $i < $arrCount; $i++) { ?>
                            <span>
                                <a href="/products/eyes/<?php echo $data["eyes_sub_categories"][$i]->sub_category_eng_name; ?>" class="subCategories">
                                    <?=$data["eyes_sub_categories"][$i]->sub_category_name;?>
                                </a>
                                <?php if($i < $arrCount-1) echo '<span>&nbsp;/</span>'; ?>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="productCategories">						
                <div class="productCategoriesInnerDivText">
                    <div style="height:auto; margin-top:110px;">
                        <span class="productCategory"><a href="/products/lips" class="mainCategory">Устни</a></span>
                        <hr class="horizontalLine" />
                        <div style="width:200px;margin: 0 auto;">
                            <?php 
                            $arrCount = count($data["lips_sub_categories"]);
                            for( $i = 0; $i < $arrCount; $i++) { ?>
                            <span>
                                <a href="/products/lips/<?php echo $data["lips_sub_categories"][$i]->sub_category_eng_name; ?>" class="subCategories">
                                    <?=$data["lips_sub_categories"][$i]->sub_category_name;?>
                                </a>
                                <?php if($i < $arrCount-1) echo '<span>&nbsp;/</span>'; ?>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="productCategoriesInnerDivImage">
                    <a href="/products/lips"><img src="{{ URL::asset('images/lipsMakeUp.jpg')}}" class="productCategoriesInnerDivImageImage" /></a>
                </div>
            </div>

            <div class="smallSectionProducts">
                <div class="smallProductCategories">					
                    <a href="/products/brushes"><img src="{{ URL::asset('images/brushesMakeUp.jpg')}}" class="smallProductCategoriesInnerImage" /><br/></a>
                    <span class="productCategory"><a href="/products/brushes" class="mainCategory">Четки</a></span>
                    <hr class="horizontalLine" />
                </div>

                <div class="smallProductCategories">					
                    <a href="/products/accessories"><img src="{{ URL::asset('images/accessoriesMakeUp.jpg')}}" class="smallProductCategoriesInnerImage" /></a>
                    <span class="productCategory"><a href="/products/accessories" class="mainCategory">Аксесоари</a></span>
                    <hr class="horizontalLine" />
                </div>

                <div class="smallProductCategories" style="border-right: none;">					
                    <a href="/products/artistic"><img src="{{ URL::asset('images/artisticMakeUp.jpg')}}" class="smallProductCategoriesInnerImage" /></a>
                    <span class="productCategory"><a href="/products/artistic" class="mainCategory">Артистик</a></span>
                    <hr class="horizontalLine" />
                </div>
            </div>
        </div>
    </div>
</div>
@stop