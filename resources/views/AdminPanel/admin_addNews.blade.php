@extends("AdminPanel.admin_master")
@section("content")
<script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>
<script>
    function CheckFields(){
        var title = document.getElementById("newsTitle").value;
        var author = document.getElementById("newsAuthor").value;
        var pic = document.getElementById("news_picture").value;
        
        var beginning = "<h4 class='alert_warning' style='margin-top: 5px;'>";
        var end = "</h4>";
        var alerts = "";
        
        if(title == "") alerts += beginning + "Моля, добавете заглавие" + end;
        if(author == "") alerts += beginning + "Моля, добавете автор" + end;
        if(pic == "")alerts += beginning + "Моля, добавете снимка" + end;
        
        document.getElementById("alerts").innerHTML = alerts;
        
        if(alerts != "") return false;
        
        return true;
    }
</script>


<div id="alerts">
    <h4 class="alert_info">Добавяне на нова новина в списъка</h4>
</div>
    
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <article class="module width_full" style="float:left;">
        <header>
            <h3>Детайли на новина</h3>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Заглавие на новина</label>
                <input type="text" id="newsTitle" name="newsTitle">
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Автор</label>
                <input type="text" id="newsAuthor" name="newsAuthor">
            </fieldset>

            <fieldset style="width: 25%;float:left;">
                <label>Снимка</label>
                <input type="file" id="news_picture" name="news_picture" id="product_picture" style="margin-left: 10px;"/>
            </fieldset>

            <article class="module width_full" style="float:left;">
                <header>
                    <h3 style="margin-left: 10px;">Текст</h3>
                </header>
                <div class="module_content">
                    <div><textarea type="text" name="newsText" id="productDescription"></textarea></div>
                </div>
            </article>

            <div style=clear:both;"></div>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Добави новина" class="alt_btn" onclick=" return CheckFields();">
            </div>
        </footer>
    </article>
</form>

<script type="text/javascript">
    CKEDITOR.replace('productDescription');
</script>
@stop