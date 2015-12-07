@extends("AdminPanel.admin_master")
@section("content")
<script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>
<script>
function CheckFields() {
    var title = document.getElementById("productTitle").value;
    var price = document.getElementById("productPrice").value;
    var pic = document.getElementById("product_picture").value;
    var category = document.getElementById("productCategory").value;

    var beginning = "<h4 class='alert_warning' style='margin-top: 5px;'>";
    var end = "</h4>";
    var alerts = "";

    if (title == "")
        alerts += beginning + "Моля, добавете заглавие" + end;
    if (price == "")
        alerts += beginning + "Моля, добавете цена" + end;
    if (pic == "")
        alerts += beginning + "Моля, добавете снимка" + end;
    if (category == "0")
        alerts += beginning + "Моля, изберете категория" + end;

    document.getElementById("alerts").innerHTML = alerts;

    if (alerts != "")
        return false;

    return true;
}

function ShowModelsDiv() {
    var v = document.getElementById("productHasModels").value;
    if (v == "1")
        document.getElementById("productModelsDiv").style.display = "block";
    else
        document.getElementById("productModelsDiv").style.display = "none";
}

var count = 1;
function AddFileInput() {

    var fileupload =
            '<div style="margin: 5px;float: left;width: 90%;padding-bottom: 5px;border-bottom: 1px solid #ccc;">' +
            '<input type="file" name="modelPicture' + count + '" style="margin-top: 10px;margin-left: 10px;float: left;"/>' +
            '<input type="text" name="modelTitle' + count + '" class="productModelName" style="width: 70%;margin-top: 5px;">' +
            '<div style="clear:both;"></div>' +
            '</div>';

    $("#modelsDiv").append(fileupload);
    count++;
    return false;
}

</script>


<div id="alerts">
    <h4 class="alert_info">Добавяне на нов продукт в списъка</h4>
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
                <input type="text" id="productTitle" name="productTitle">
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Цена</label>
                <input type="text" id="productPrice" name="productPrice">
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Модели</label>
                <select id="productHasModels" name="productHasModels" style="margin-left: 5px;" onchange="ShowModelsDiv()">
                    <option value="1">Да</option>
                    <option value="0" selected>Не</option>
                </select>
            </fieldset>

            <fieldset style="width: 42%;float:left;">
                <label>Снимка</label>
                <input type="file" id="product_picture" name="product_picture" id="product_picture" style="margin-left: 10px;"/>
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Категория</label>
                <select id="productCategory" name="productCategory" style="margin-left: 5px;" onchange="GetSubcategories(this.value)" >
                    <option value = "0">Изберете категория</option>
                    <?php foreach ($data["categories"] as $cat) { ?>
                        <option value='<?php echo $cat->category_id; ?>'><?php echo $cat->category_name; ?></option>
                    <?php } ?>
                </select>
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Подкатегория</label>
                <select id="subCategorySelect" name="subCategorySelect" style="margin-left: 5px;" >
                    <option value = "0">Изберете категория</option>
                </select>
            </fieldset>

            <article id="productModelsDiv" class="module width_full" style="float:left;">
                <header>
                    <h3 style="margin-left: 10px;margin-right: 10px;">Модели</h3>
                    <input type = "submit" class = "alt_btn" 
                           style = "float: left;margin-top:4px;" 
                           value = "Добави модел"
                           onclick=" return AddFileInput();"/>
                </header>
                <div id="modelsDiv" class="module_content">


                    <div style="clear:both" />
                </div>
            </article>

            <article class="module width_full" style="float:left;">
                <header>
                    <h3 style="margin-left: 10px;">Описание</h3>
                </header>
                <div class="module_content">
                    <div><textarea type="text" id="productDescription" name="productDescription" id="productDescription"></textarea></div>
                </div>
            </article>

            <div style=clear:both;"></div>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Добави продукт" class="alt_btn" onclick=" return CheckFields();">
            </div>
        </footer>
    </article>
</form>

<script type="text/javascript">
    CKEDITOR.replace('productDescription');
</script>
@stop