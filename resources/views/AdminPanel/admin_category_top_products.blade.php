@extends("AdminPanel.admin_master")
@section("content")

<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>

<div>
    <article class="module width_full" style="width:98%;">
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
            <input id="SubmitButton" type = "submit" class = "alt_btn" style = "float: left;margin-top:4px;" value = "Покажи" onclick="DisplayTopProducts();"/>
        </header>
    </article>
</div>


<div id="topProducts"></div>

<span id="productToChange" style="display:none;"></span>
<div id="productsWindow" class="productsWindow">
    <article class="module width_full" style="width:98%;border: 2px solid #77BACE;">
        <header>
            <input type = "submit" style = "float: right;margin-top:4px;margin-right:10px;" value = "Затвори" onclick="CloseProductChoiceDiv()"/>
        </header>
        <div id="topProductsChoiceDiv" style = "overflow-y: scroll;height:500px;">
            <div style = "clear:both;"></div>
        </div>
        <div style = "clear:both;"></div>
    </article>
</div>

@stop