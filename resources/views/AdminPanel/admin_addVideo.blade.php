@extends("AdminPanel.admin_master")
@section("content")
<script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>
<script>
    
    function CheckFields(){
        return true;
    }
    
var count = 1;
function AddProductField() {
    var field =
            '<div style="float:left;width:90%;">' +
            '<input id="videoProduct' + count + '" name="videoProduct' + count + '" type="submit" class="alt_btn" style="float: left;margin-top:5px;" ' +
            'onclick="DisplayProductsChoice(' + count + ');return false;" value="Промени"/>' +
            '<span>Номер на продукт: </span><input type="text" name="videoProductID' + count + '" id="videoProductID' + count + '" style="font-size: 15px;" readonly />' +
            '<input id="delete' + count + '" name="delete' + count + '" type="submit" class="alt_btn" style="float: left;margin-top:5px;" ' +
            'onclick="DeleteChosenVideoProduct(' + count + ');return false;" value="Премахни" />' +
            '</div><div style="clear:both"></div>';
    $("#modelsDiv").append(field);
    count++;
    return false;
}

function UpdateVideoField(id) {
    var changeField = document.getElementById("productToChange").innerHTML;
    document.getElementById("videoProductID" + changeField).value = id;
    document.getElementById("productsWindow").style.visibility = "hidden";
}

function DeleteChosenVideoProduct(id) {
    document.getElementById("videoProductID" + id).value = "---";
}

</script>


<div id="alerts">
    <h4 class="alert_info">Добавяне на нов клип в списъка</h4>
</div>

<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <article class="module width_full" style="float:left;">
        <header>
            <h3>Детайли за клипа</h3>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Заглавие на клип</label>
                <input type="text" id="newsTitle" name="videoTitle">
            </fieldset>

            <fieldset>
                <label>Линк към клип</label>
                <input type="text" id="newsTitle" name="videoLink">
            </fieldset>

            <article class="module width_full" style="float:left;">
                <header>
                    <h3 style="margin-left: 10px;">Описание</h3>
                </header>
                <div class="module_content">
                    <div><textarea type="text" name="videoDescription" id="videoDescription"></textarea></div>
                </div>
            </article>

            <article id="productModelsDiv" class="module width_full" style="float:left;visibility: visible;">
                <header>
                    <h3 style="margin-left: 10px;margin-right: 10px;">Продукти в клипа</h3>
                    <input type = "submit" class = "alt_btn" 
                           style = "float: left;margin-top:4px;" 
                           value = "Добави продукт"
                           onclick=" return AddProductField();"/>

                </header>
                <div id="modelsDiv" class="module_content" style="padding: 10px;">

                </div>
            </article>

            <div style=clear:both;"></div>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Добави клип" class="alt_btn" onclick="return CheckFields();">
            </div>
        </footer>
    </article>
    
    
    
    
    
    

    <span id="productToChange" style="display:none;"></span>
    <div id="productsWindow" class="productsWindow">
        <article class="module width_full" style="width:98%;border: 2px solid #77BACE;">
            <header>
                <h3 style="text-transform: none;">Търсене</h3>
                <select id="mainCategories" name="selectBox" style="margin: 5px 5px;float: left;" required onchange="GetSubcategories(this.value)">
                    <option value = "0">Изберете категория</option>
                    <?php foreach ($data["categories"] as $cat) { ?>
                        <option value = "<?php echo $cat->category_id; ?>"><?php echo $cat->category_name; ?></option>
                    <?php } ?>
                </select>
                <select id="subCategorySelect" name="subSelect" style = "margin: 5px 5px;float: left;width: 150px;">
                </select>
                <input type = "submit" name="btn1" class = "alt_btn" style = "float: left;margin-top:4px;" value = "Покажи" onclick="GetVideoProducts();
                        return false;"/>
                <input type = "submit" name="btn2" style = "float: left;margin-top:4px;" value = "Затвори" onclick="CloseProductChoiceDiv();
                        return false;"/>
            </header>
            <div id="topProductsDiv" style = "overflow-y: scroll;height:500px;">
                <div style = "clear:both;"></div>
            </div>
            <div style = "clear:both;"></div>
        </article>
    </div>
</form>

<script type="text/javascript">
    CKEDITOR.replace('videoDescription');
</script>
@stop