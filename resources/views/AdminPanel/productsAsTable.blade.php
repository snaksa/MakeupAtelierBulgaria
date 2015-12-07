<?php

$counter = 1;
foreach ($data["products"] as $product) {
    ?>
    <tr>
        <td>
            <img src="{{ URL::asset($product->product_image)}}" class="editProductsSmallImage" />
        </td>
        <td><?php echo $product->product_name; ?></td> 
        <td><?php echo $product->product_price; ?></td> 
        <td><?php echo $product->product_date; ?></td> 
        <td>
            <a href="{{ URL::to('admin/edit_product/'.$product->product_id) }}" class="actionImage"><img src="{{ URL::asset('web_resources/admin_resources/images/icn_edit.png')}}" /></a>
            <a href="{{ URL::to('admin/slideshow') }}" class="actionImage"><img src="{{ URL::asset('web_resources/admin_resources/images/icn_trash.png')}}" /></a>
        </td> 
    </tr>  
    <?php
    $counter++;
}
?>