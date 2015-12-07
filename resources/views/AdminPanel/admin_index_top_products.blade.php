@extends("AdminPanel.admin_master")
@section("content")

<h4 class="alert_info">Топ 6 продукти, които се показват на началната страница</h4>
<?php
$counter = 1;
foreach ($data["index_products"] as $item) {
    ?>
    <article class="module width_product">
        <header>
            <h3 style="text-transform: none;">Продукт №<?php echo $item->product_id; ?></h3>
            <input id="<?php echo $item->product_id; ?>" type="submit" class="alt_btn" style="float: right;margin-top:5px;" onclick="DisplayProductsChoice(this.id)" value="Промени"/>
        </header>
        <div class="module_content">
            <img src="{{ URL::asset($item->product_image)}}" width="100%" />
            <p class="productTitle" style="height: 30px;"><?php echo $item->product_name; ?></p>
        </div>
    </article>
    <?php $counter++;
}
?>

<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>


<span id="productToChange" style="display:none;"></span>
<div id="productsWindow" class="productsWindow">
    <article class="module width_full" style="width:98%;border: 2px solid #77BACE;">
        <header>
            <h3 style="text-transform: none;">Търсене</h3>
            <select id="mainCategories" style="margin: 5px 5px;float: left;" required onchange="GetSubcategories(this.value)">
                <option value = "0">Изберете категория</option>
                <?php foreach ($data["categories"] as $cat) { ?>
                    <option value = "<?php echo $cat->category_id; ?>"><?php echo $cat->category_name; ?></option>
<?php } ?>
            </select>
            <select id="subCategorySelect" style = "margin: 5px 5px;float: left;width: 150px;" required>
            </select>
            <input type = "submit" class = "alt_btn" style = "float: left;margin-top:4px;" value = "Покажи" onclick="GetProducts();"/>
            <input type = "submit" style = "float: left;margin-top:4px;" value = "Затвори" onclick="CloseProductChoiceDiv()"/>
        </header>
        <div id="topProductsDiv" style = "overflow-y: scroll;height:500px;">
            <div style = "clear:both;"></div>
        </div>
        <div style = "clear:both;"></div>
    </article>
</div>
@stop