@extends("master")

@section("title")
<title>Име на продукт</title>
<script src="{{ URL::asset('web_resources/ajaxRequests.js') }}" type="text/javascript"></script>
<script>
function AddToBasket(id) {
    var e = document.getElementById("modelName");
    if(e === null){
      AddProductToBasket(id, "-1");
    }
    else{
        AddProductToBasket(id, e.innerHTML);
    }
    //AddProductToBasket(id);
}
</script>
@stop

@section("slideshow")
<div id="slideshow">
    <div>
        <img class="slideshowImage" src="{{ URL::asset('images/eyesCover.png') }}">
    </div>
</div>	
@stop

@section("content")
<div class="content">
    <div class="singleProductSection">
        <div class="pageHeader">
            <div class="siteMapDiv">
                <span><a href="/" class="siteMap">Начало</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/products" class="siteMap">Продукти</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/products/<?php echo $data["pageInfo"]["categoryEngName"]; ?>" class="siteMap"><?php echo $data["pageInfo"]["categoryName"]; ?></a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/products/<?php echo $data["pageInfo"]["categoryEngName"] . '/' . $data["pageInfo"]["subcategoryEngName"]; ?>" class="siteMap"><?php echo $data["pageInfo"]["subcategoryName"]; ?></a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/products/<?php echo $data["pageInfo"]["categoryEngName"] . '/' . $data["pageInfo"]["subcategoryEngName"] . '/' . $data["pageInfo"]["productId"]; ?>" class="siteMap"><?php echo $data["pageInfo"]["productName"]; ?></a></span>
            </div>
        </div>
        <div class="productImages">
            <div class="mainProductImageDiv"><center><img id="mainImage" src="{{ URL::asset($data["product_info"][0]->product_image) }}" class="productImage" /></center></div>

            <div id="imagesDiv" class="baguetteBoxOne gallery">
                <a id="image1" href="{{ URL::asset($data["product_info"][0]->product_image) }}" class="secondaryProductImageDiv" onmouseover='ChangeMainImage(this)'>
                    <center><img src="{{ URL::asset($data["product_info"][0]->product_image) }}" class="secondaryProductImage"></center>
                </a>
                <!--<a id="image2" href="{{ URL::asset('images/testProduct3.jpg') }}" class="secondaryProductImageDiv" onmouseover='ChangeMainImage(this)'>
                    <center><img src="{{ URL::asset('images/testProduct3.jpg') }}" class="secondaryProductImage"></center>
                </a>
                <a id="image3" href="{{ URL::asset('images/testProduct4.jpg') }}" class="secondaryProductImageDiv" onmouseover='ChangeMainImage(this)'>
                    <center><img src="{{ URL::asset('images/testProduct4.jpg') }}" class="secondaryProductImage"></center>
                </a>
                <a id="image4" href="{{ URL::asset('images/testProduct5.jpg') }}" class="secondaryProductImageDiv" onmouseover='ChangeMainImage(this)'>
                    <center><img src="{{ URL::asset('images/testProduct5.jpg') }}" class="secondaryProductImage"></center>
                </a>
                <a id="image5" href="{{ URL::asset('images/testProduct6.jpg') }}" class="secondaryProductImageDiv" onmouseover='ChangeMainImage(this)' 	style="border:none;">
                    <center><img src="{{ URL::asset('images/testProduct6.jpg') }}" class="secondaryProductImage"></center>
                </a>-->
            </div>
        </div>

        <div class="singleProductDetails"><span class="productName"><?php echo $data["product_info"][0]->product_name; ?></span>
            <hr class="singleNewsHorizontalLine"/>

            <p class="productDescription">
                <?php echo $data["product_info"][0]->product_description; ?>
            </p>
            <hr class="singleNewsHorizontalLine"/>

            <?php if ($data["pageInfo"]["has_models"] == "1") { ?>
                <span class="productModel">Модел: <span id="modelName" class="modelName">EVEDW Gilded green</span></span>
                <div id="models" class="modelOptions">
                    <?php foreach ($data["product_models"] as $item) { ?>
                        <img id="<?php echo $item->model_name; ?>" src="{{ URL::asset($item->model_image) }}" class="modelImage" onclick='SetBorder(this)'/>
                    <?php } ?>

                </div>
                <script>
                    document.getElementById('models').children[0].click();
                </script>
                <hr class="singleNewsHorizontalLine"/>
            <?php } ?>

            <span class="productModel" style="float:left;">Цена: <span class="price"><?php echo number_format($data["product_info"][0]->product_price, 2, ',', ' '); ?>лв.</span></span>
            <div class="orderButton" onclick="AddToBasket(<?php echo $data["product_info"][0]->product_id; ?>)"><img src="{{ URL::asset('images/kol.png') }}" class="kol" /><span class="addToCard">Добави в количката</span></div>
        </div>
        <div style="clear:both;"></div>

        <div class="productCategoriesListHeader">
            <span class="productCategoriesListHeaderTitle">Закупилите този продукт, купуват също:</span>
        </div>
        <div class="productsList">
            <div class="homeProduct" style="border:none;border-right: 1px dotted #3394B5;margin-top: 5px;" 
                 id="1" 	onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="{{ URL::asset('images/testProduct4.jpg') }}" class="singleProductImage" id="link1"/>
                        <a href="#" class="homeProductLink">
                            <div class="seeMoreProduct" id="product1">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Paco Rabanne Olympéa Shower Gel 200ml</div>
                </a>
            </div>

            <div class="homeProduct" style="border:none;border-right: 1px dotted #3394B5;margin-top: 5px;"
                 id="2" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="{{ URL::asset('images/testProduct5.jpg') }}" class="singleProductImage" id="link2"/>
                        <a href="#" class="homeProductLink">
                            <div class="seeMoreProduct" id="product2">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Paco Rabanne Olympéa Shower Gel 200ml</div>
                </a>
            </div>

            <div class="homeProduct" style="border:none;margin-top: 5px;"
                 id="3" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="{{ URL::asset('images/testProduct6.jpg') }}" class="singleProductImage" id="link3"/>
                        <a href="#" class="homeProductLink">
                            <div class="seeMoreProduct" id="product3">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Paco Rabanne Olympéa Shower Gel 200ml</div>
                </a>
            </div>
        </div>

        <div class="productCategoriesListHeader">
            <span class="productCategoriesListHeaderTitle">Продукти от същата категория</span>
        </div>
        <div class="productsList">
            <div class="homeProduct" style="border:none;border-right: 1px dotted #3394B5;margin-top: 5px;" 
                 id="4" 	onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="{{ URL::asset('images/testProduct4.jpg') }}" class="singleProductImage" id="link4"/>
                        <a href="#" class="homeProductLink">
                            <div class="seeMoreProduct" id="product4">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Paco Rabanne Olympéa Shower Gel 200ml</div>
                </a>
            </div>

            <div class="homeProduct" style="border:none;border-right: 1px dotted #3394B5;margin-top: 5px;"
                 id="5" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="{{ URL::asset('images/testProduct5.jpg') }}" class="singleProductImage" id="link5"/>
                        <a href="#" class="homeProductLink">
                            <div class="seeMoreProduct" id="product5">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Paco Rabanne Olympéa Shower Gel 200ml</div>
                </a>
            </div>

            <div class="homeProduct" style="border:none;margin-top: 5px;"
                 id="6" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="{{ URL::asset('images/testProduct6.jpg') }}" class="singleProductImage" id="link6"/>
                        <a href="#" class="homeProductLink">
                            <div class="seeMoreProduct" id="product6">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Paco Rabanne Olympéa Shower Gel 200ml</div>
                </a>
            </div>
        </div>
    </div>
</div>
@stop