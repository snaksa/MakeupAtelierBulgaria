@extends("AdminPanel.admin_master")
@section("content")
<script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>
<script>
    function CheckFields(){
        var title = document.getElementById("productTitle").value;
        var price = document.getElementById("productPrice").value;
        var category = document.getElementById("productCategory").value;
        var beginning = "<h4 class='alert_warning' style='margin-top: 5px;'>";
        var end = "</h4>";
        var alerts = "";
        
        if(title == "") alerts += beginning + "Моля, добавете заглавие" + end;
        if(price == "") alerts += beginning + "Моля, добавете цена" + end;
        if(category == "0")alerts += beginning + "Моля, изберете категория" + end;
        
        document.getElementById("alerts").innerHTML = alerts;
        
        if(alerts != "") return false;
        
        return true;
    }
</script>


<div id="alerts">
    <h4 class="alert_info">Редактиране на продукт</h4>
</div>

<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <article class="module width_full" style="float:left;">
        <header>
            <h3>Данни за продукт</h3>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Име на продукт</label>
                <input type="text" id="productTitle" name="productTitle" value="<?php echo $data["product_details"]->product_name; ?>">
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Цена</label>
                <input type="text" id="productPrice" name="productPrice" value="<?php echo $data["product_details"]->product_price; ?>">
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Модели</label>
                <select id="productHasModels" name="productHasModels" style="margin-left: 5px;" >
                    <option <?php if ($data["product_details"]->has_models == 1) echo "selected"; ?> value="1">Да</option>
                    <option <?php if ($data["product_details"]->has_models == 0) echo "selected"; ?> value="0" selected>Не</option>
                </select>
            </fieldset>

            <fieldset style="width: 42%;float:left;">
                <label>Снимка</label>
                <input type="file" name="product_picture" id="product_picture" style="margin-left: 10px;"/>
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Категория</label>
                <select id="productCategory" id="productCategory" name="productCategory" style="margin-left: 5px;" onchange="GetSubcategories(this.value)" >
                    <option value = "0">Изберете категория</option>
                    <?php foreach ($data["categories"] as $cat) { ?>
                        <option value='<?php echo $cat->category_id; ?>'
                        <?php if ($data["product_details"]->product_main_category == $cat->category_id) echo "selected"; ?>
                                ><?php echo $cat->category_name; ?></option>
                            <?php } ?>
                </select>
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Подкатегория</label>
                <select id="subCategorySelect" name="subCategorySelect" style="margin-left: 5px;" >
                    <option value = "0">Изберете категория</option>
                </select>
            </fieldset>

            <article class="module width_full" style="float:left;">
                <header>
                    <h3 style="margin-left: 10px;">Описание</h3>
                </header>
                <div class="module_content">
                    <div><textarea type="text" name="productDescription" id="productDescription"><?php echo $data["product_details"]->product_description; ?></textarea></div>
                </div>
            </article>

            <div style=clear:both;"></div>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Редактирай продукт" class="alt_btn" onclick=" return CheckFields();">
            </div>
        </footer>
    </article>
</form>

<script type="text/javascript">
    CKEDITOR.replace('productDescription');
    var element = document.getElementById("productCategory");
    element.onchange();
    GetSubcategoriesWithSelect(<?php echo $data["product_details"]->product_main_category; ?>, <?php echo $data["product_details"]->product_sub_category; ?>);
</script>
@stop