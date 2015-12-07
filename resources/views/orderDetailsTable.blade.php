<table id="userInfoTable" class="cartTableDetails">
    <tr>
        <td colspan="2" align="center">Информация за поръчката</td>
    </tr>
    <tr>
        <td align="right" width="150px">Име и Фамилия</td>
        <td><?php echo $data["userName"]; ?></td>
    </tr>
    <tr>
        <td align="right">Email</td>
        <td><?php echo $data["userEmail"]; ?></td>
    </tr>
    <tr>
        <td align="right">Телефон</td>
        <td><?php echo $data["userPhone"]; ?></td>
    </tr>
    <tr>
        <td align="right">Град</td>
        <td><?php echo $data["userCity"]; ?></td>
    </tr>
    <tr>
        <td align="right">Адрес</td>
        <td><?php echo $data["userAddress"]; ?></td>
    </tr>
</table>

<table class="cartTableDetails">
    <tr>
        <td colspan="3" align="center">Продукти</td>
    </tr>

    <?php
    $totalPrice = 0;
    $totalProducts = 0;
    foreach ($data["products"] as $product) {
        ?>
        <tr>
            <td width="450px"><?php echo $product[0]->product_name; ?></td>
            <td align="center">x<?php echo $product[0]->quantity; ?></td>
            <td align="center"><?php echo number_format($product[0]->product_price, 2, ',', ' '); ?>лв.</td>
        </tr>
        <?php
        $totalProducts += $product[0]->quantity;
        $totalPrice += $product[0]->quantity * $product[0]->product_price;
    }
    ?>

    <tr>
        <td align="right">Общо</td>
        <td align="center">x<?php echo $totalProducts; ?></td>
        <td align="center"><?php echo number_format($totalPrice, 2, ',', ' '); ?>лв.</td>
    </tr>
</table>