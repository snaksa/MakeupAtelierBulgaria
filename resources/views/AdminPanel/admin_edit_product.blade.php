@extends("AdminPanel.admin_master")
@section("content")

<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>

<article class="module width_3_quarter">
    <header>
        <h3>Списък с продукти</h3>
        <select id="mainCategories" style="margin: 5px 5px;float: left;" required onchange="GetSubcategories(this.value)">
            <option value = "0">Изберете категория</option>
            <?php foreach ($data["categories"] as $cat) { ?>
                <option value = "<?php echo $cat->category_id; ?>"><?php echo $cat->category_name; ?></option>
            <?php } ?>
        </select>
        <select id="subCategorySelect" name="subCategorySelect" style = "margin: 5px 5px;float: left;width: 150px;" required>
            <option value = "0">Изберете категория</option>
        </select>
        <input type = "submit" class = "alt_btn" 
               style = "float: left;margin-top:4px;" value = "Покажи"
               onclick="GetProductsAsTable()"/>
    </header>

    <div class="tab_container">
        <div id="tab1" class="tab_content" style="display: block;">
            <table class="tablesorter" cellspacing="0"> 
                <thead> 
                    <tr> 
                        <th class="header" style="width: 30px;"></th>
                        <th class="header">Име</th> 
                        <th class="header">Цена</th> 
                        <th class="header">Добавен на</th> 
                        <th class="header">Действия</th> 
                    </tr> 
                </thead> 
                <tbody id="productsByCategory">
                </tbody> 
            </table>
        </div><!-- end of #tab1 -->

    </div><!-- end of .tab_container -->

</article>
@stop