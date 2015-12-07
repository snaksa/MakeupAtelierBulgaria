@extends("master")

@section("title")
<title>Моята количка</title>
<script src="{{ URL::asset('web_resources/ajaxRequests.js') }}" type="text/javascript"></script>
<script>
function IncreaseQuantity(id, model) {
    var m = "";
    if (!model || model.length == 0)
        model = "-1";
    else
        m = model;
    var val = document.getElementById("quantity" + id + m).innerHTML;
    AddProductToBasket(id, model);
    document.getElementById("quantity" + id + m).innerHTML = parseInt(val) + 1;
}

function DecreaseQuantity(id, model) {
    var m = "";
    if (!model || model.length == 0)
        model = "-1";
    else
        m = model;

    var val = document.getElementById("quantity" + id + m).innerHTML;
    if (val == "1")
        return;
    DecreaseProductFromBasket(id, model);
    document.getElementById("quantity" + id + m).innerHTML = parseInt(val) - 1;
}

function DeleteProductFromBasket(id, model) {
    var m = "";
    if (!model || model.length == 0)
        model = "-1";
    else
        m = model;

    DeleteProductFromBasketAjax(id, model);
    $("#singleProduct" + id + m).fadeOut("slow");
}

function FinalizeOrder() {
    //CheckUserDetails();

    $("#firstCartDiv").slideUp("slow");

    var name = document.getElementById("userName").value;
    var email = document.getElementById("userEmail").value;
    var phone = document.getElementById("userPhone").value;
    var city = document.getElementById("userCity").value;
    var address = document.getElementById("userAddress").value;

    GetOrderDetails(name, email, phone, city, address);
}

function BackToTheCartDiv(){
    $("#orderUserDetails").slideUp("slow");
    $("#firstCartDiv").slideDown("slow");
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
    <div id="productsSec" class="teachersSection">
        <div class="pageHeader">
            <div class="siteMapDiv">
                <span><a href="/" class="siteMap">Начало</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/cart" class="siteMap">Моята количка</a></span>
            </div>
        </div>

        <div style="width: 100%;position:relative;">
            <div id="firstCartDiv">
                <div id="orderProducts" class="cartProducts">
                    <?php
                    $totalPrice = 0;
                    $totalProducts = 0;
                    foreach ($data["products"] as $product) {
                        ?>
                        <div id="singleProduct<?php echo $product[0]->product_id . $product[0]->model; ?>" class="singleCartProduct">
                            <div class="cartProductImage">
                                <img src="{{URL::asset($product[0]->product_image)}}" class="basketProductImage" />
                            </div>
                            <div class="cartProductTitleDiv">
                                <a href="{{ URL::to('products/' . $product[0]->product_main_category . '/' . $product[0]->product_sub_category . '/' . $product[0]->product_id) }}" class="cartProductTitle"><?php echo $product[0]->product_name; ?></a>
                            </div>
                            <div class="cartProductQuantityDiv">
                                <div class="centeredCartQuantity">
                                    <span class="cartPQ" id="quantity<?php echo $product[0]->product_id . $product[0]->model; ?>"><?php echo $product[0]->quantity; ?></span>
                                    <div style="float:left;width: 20px;margin-top: 8px;">
                                        <img src="{{URL::asset('images/basketUp.png')}}" class="quantityUpAndDown" onclick="IncreaseQuantity(<?php echo $product[0]->product_id ?>, <?php echo "'" . $product[0]->model . "'"; ?>)" />
                                        <img src="{{URL::asset('images/basketDown.png')}}" class="quantityUpAndDown"  onclick="DecreaseQuantity(<?php echo $product[0]->product_id ?>,<?php echo "'" . $product[0]->model . "'"; ?>)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="cartProductQuantityDiv" style="text-align: center;">
                                <p class="cartProductPrice"><?php echo number_format($product[0]->product_price, 2, ',', ' ') . 'лв.'; ?></p>
                                <p><span onclick="DeleteProductFromBasket(<?php echo $product[0]->product_id ?>,<?php echo "'" . $product[0]->model . "'"; ?>)" class="cartProductDelete">изтрий</span></p>
                            </div>
                        </div>
                        <?php
                        $totalPrice += ($product[0]->product_price * $product[0]->quantity);
                        $totalProducts += $product[0]->quantity;
                    }
                    ?>

                    <div style="clear:both;"></div>
                </div>

                <div id="orderUserDetailsInput" class="cartUserDetailsDiv">
                    <div class="cartUserDetailsSingleDiv" style="width: 95%;">
                        <div style="height:20px;">Име и Фамилия</div>
                        <input type="text" id="userName" name="userName" class="cartUserInput" style="width: 90%;" />
                    </div>
                    <div class="cartUserDetailsSingleDiv">
                        <div style="height:20px;">Email</div>
                        <input type="text" id="userEmail" name="userEmail" class="cartUserInput" style="width: 90%;" />
                    </div>
                    <div class="cartUserDetailsSingleDiv">
                        <div style="height:20px;">Телефон</div>
                        <input type="text" id="userPhone" name="userPhone" class="cartUserInput" style="width: 90%;" />
                    </div>
                    <div class="cartUserDetailsSingleDiv">
                        <div style="height:20px;">Град</div>
                        <input type="text" id="userCity" name="userCity" class="cartUserInput" style="width: 90%;" />
                    </div>
                    <div class="cartUserDetailsSingleDiv">
                        <div style="height:20px;">Адрес</div>
                        <input type="text" id="userAddress" name="userAddress" class="cartUserInput" style="width: 90%;" />
                    </div>

                    <a class="toBasketLink">
                        <div class="cartFinalize" style="float:left;" onclick="FinalizeOrder()">
                            <p>Финализиране на поръчката</p>
                        </div>
                    </a>

                    <div style="clear:both;"></div>
                </div>
            </div>

            <div id="orderUserDetails" class="cartUserDetailsDiv" style="display:none;">
                <a class="toBasketLink">
                    <div class="cartFinalize" onclick="BackToTheCartDiv()" style="float:left;margin-bottom:10px;">
                        <p>Назад към количката</p>
                    </div>
                </a>
                
                <div id="orderDetailsTables">

                </div>

                <a class="toBasketLink" href="#">
                    <div class="cartFinalize" style="float:left;">
                        <p>Направи поръчка</p>
                    </div>
                </a>

                <div style="clear:both;"></div>
            </div>

        </div>


        <div style="clear:both;"></div>
    </div>
</div>
@stop