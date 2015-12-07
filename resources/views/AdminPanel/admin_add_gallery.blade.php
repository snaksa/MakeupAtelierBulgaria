@extends("AdminPanel.admin_master")
@section("content")
<script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>
<script>
    function CheckFields(){
        var title = document.getElementById("galleryTitle").value;
        var pic = document.getElementById("galleryPicture").value;
        
        var beginning = "<h4 class='alert_warning' style='margin-top: 5px;'>";
        var end = "</h4>";
        var alerts = "";
        
        if(title == "") alerts += beginning + "Моля, добавете заглавие" + end;
        if(pic == "") alerts += beginning + "Моля, добавете снимка" + end;
        
        document.getElementById("alerts").innerHTML = alerts;
        
        if(alerts != "") return false;
        
        return true;
    }
</script>


<div id="alerts">
    <h4 class="alert_info">Добавяне на нова галерия</h4>
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
                <input type="text" id="galleryTitle" name="galleryTitle">
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Главна снимка</label>
                <input type="file" id="galleryPicture" name="galleryPicture" id="product_picture" style="margin-left: 10px;"/>
            </fieldset>

            <div style=clear:both;"></div>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Добави галерия" class="alt_btn" onclick=" return CheckFields();">
            </div>
        </footer>
    </article>
</form>
@stop