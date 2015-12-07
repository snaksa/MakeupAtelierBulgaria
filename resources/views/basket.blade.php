
<div class="basketHeader">
    <span style="width:50%;" class="basketHeaderSpan">Продукт</span>
    <span style="width:20%;" class="basketHeaderSpan">Брой</span>
    <span style="width:20%;" class="basketHeaderSpan">Цена</span>
</div>

<?php
$totalPrice = 0;
$totalProducts = 0;
foreach ($data["products"] as $product) {
    ?>

    <div class="basketProductDiv">
        <div class="basketProductImageDiv">
            <img src="{{URL::asset($product[0]->product_image)}}" class="basketProductImage" />
        </div>
        <div class="basketProductNameDiv">
            <a href="{{ URL::to('products/' . $product[0]->product_main_category . '/' . $product[0]->product_sub_category . '/' . $product[0]->product_id) }}" class="basketProductName"><?php echo $product[0]->product_name; ?></a>
        </div>
        <div class="basketProductQuanityDiv">
            <span class="basketProductQuanity">x<?php echo $product[0]->quantity; ?></span>
        </div>
        <div class="basketProductPriceDiv">
            <span class="basketProductQuanity"><?php echo number_format($product[0]->product_price * $product[0]->quantity, 2, ',', ' ') . "лв."; ?></span>
        </div>
    </div>
    <?php
    $totalPrice += ($product[0]->product_price * $product[0]->quantity);
    $totalProducts += $product[0]->quantity;
}
?>

<div class="basketHeader" style="border:none;">
    <span style="width:50%;text-align: left;margin-left:20px;" class="basketHeaderSpan">Общо: <?php echo $totalProducts; ?> продукта</span>
    <span style="width:10%;" class="basketHeaderSpan"></span>
    <span style="width:30%;" class="basketHeaderSpan"><center><?php echo round($totalPrice, 2) . "лв."; ?></center></span>
</div>

<a class="toBasketLink" href="{{ URL::to('cart')}}">
    <div class="basketToBasket">
        <p>Към количката</p>
    </div>
</a>