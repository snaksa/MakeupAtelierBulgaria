<?php 
$counter = 1;
foreach ($data["products"] as $product) { ?>
<article class = "module width_product" style = "width: 30%;">
    <header>
        <h3 style = "text-transform: none;">Продукт №<?php echo $product->product_id; ?></h3>
        <input id="<?php echo $product->product_id; ?>" onclick="ChooseProduct(this.id)" type = "submit" class = "alt_btn" style = "float: right;margin-top:5px;" value = "Избери"/>
    </header>
    <div class = "module_content">
        <img src = "{{ URL::asset($product->product_image)}}" width = "100%" />
        <p class = "productTitle" style="height: 50px;"><?php echo $product->product_name; ?></p>
    </div>
</article>
<?php 
$counter++;
} ?>