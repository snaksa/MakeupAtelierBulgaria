@extends("AdminPanel.admin_master")
@section("content")
<script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>
<script>
    function ClickFileupload(){
        document.getElementById("imagesToUpload").click();
    }
    
    function SubmitForm(){
        
        document.getElementById("uploadImagesButton").click();
    }
    
    function ImageClicked(id){
        var e = document.getElementById("checkbox" + id);
        if(e.checked == true) {
            e.checked = false;
            document.getElementById("selectedImage" + id).style.display = "none";
        }
        else {
            e.checked = true;
            document.getElementById("selectedImage" + id).style.display = "block";
        }
        
    }
    
    function CheckFields(){
        var title = document.getElementById("galleryTitle").value;
        
        var beginning = "<h4 class='alert_warning' style='margin-top: 5px;'>";
        var end = "</h4>";
        var alerts = "";
        
        if(title == "") alerts += beginning + "Моля, добавете заглавие" + end;
        
        document.getElementById("alerts").innerHTML = alerts;
        
        if(alerts != "") return false;
        
        return true;
    }
</script>


<div id="alerts">
    <h4 class="alert_info">Редактиране на галерия</h4>
</div>

<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <article class="module width_full" style="float:left;">
        <header>
            <h3>Детайли на галерия</h3>
        </header>
        <div class="module_content">
            <fieldset style="width: 50%;float:left;">
                <label>Заглавие на галерия</label>
                <input type="text" id="galleryTitle" name="galleryTitle" value="<?php echo $data["galleryInfo"][0]->gallery_title; ?>">
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Главна снимка</label>
                <input type="file" id="galleryPicture" name="galleryPicture" id="product_picture" style="margin-left: 10px;"/>
            </fieldset>

            <div style=clear:both;"></div>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" id="editGalleryInfoButton" name="editGalleryInfoButton" value="Редактирай галерия" class="alt_btn" onclick=" return CheckFields();">
            </div>
        </footer>
    </article>
    
    <article class="module width_full" style="float:left;">
        <header>
            <h3>Снимки</h3>
            <input type = "submit" class = "alt_btn" 
               style = "float: left;margin-top:4px;" 
               value = "Качване на снимки"
               onclick="ClickFileupload();return false;"/>
            <input type="file" id="imagesToUpload" name="imagesToUpload[]" style="display: none;" onchange="SubmitForm()" multiple="multiple">
            <input id="uploadImagesButton" name="uploadImagesButton" type = "submit" style="display:none;"/>
        </header>
        <div class="module_content">
            <?php foreach ($data["gallery_images"] as $img) { ?>
            <div id="{{ $img->image_id}}" class="singleImageEditGallery" onclick="ImageClicked(this.id)">
                <input type="checkbox" style="display: none;" name="imagesCheckboxGroup[]" id="checkbox{{ $img->image_id}}" value="{{ $img->image_id}}" />
                <img id="image{{ $img->image_id}}" src="{{ URL::asset($img->image_path)}}" class="galImg" />
                <img id="selectedImage{{ $img->image_id}}" src="{{URL::asset('web_resources/admin_resources/images/selectedImage.png')}}" class="selectedImage" />
            </div>
            <?php } ?>

            <div style=clear:both;"></div>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" id="deletePicsButton" name="deletePicsButton" value="Изтрий избраните снимки" class="alt_btn">
            </div>
        </footer>
    </article>
</form>
@stop