@extends("AdminPanel.admin_master")
@section("content")

<script src="{{ URL::asset('web_resources/admin_resources/js/ajaxRequests.js')}}" type="text/javascript"></script>

<article class="module width_3_quarter">
    <header>
        <h3>Списък с новини</h3>
    </header>

    <div class="tab_container">
        <div id="tab1" class="tab_content" style="display: block;">
            <table class="tablesorter" cellspacing="0"> 
                <thead> 
                    <tr> 
                        <th class="header" style="width: 30px;"></th>
                        <th class="header">Заглавие</th> 
                        <th class="header">Снимки</th>
                        <th class="header">Действия</th> 
                    </tr> 
                </thead> 
                <tbody id="productsByCategory">
                    <?php
                    foreach ($data["galleries"] as $gallery) {
                        ?>
                        <tr>
                            <td>
                                <img src="{{ URL::asset($gallery->gallery_main_image)}}" class="editProductsSmallImage" />
                            </td>
                            <td><?php echo $gallery->gallery_title; ?></td>
                            <td><?php echo $gallery->image_count; ?></td> 
                            <td>
                                <a href="{{ URL::to('admin/edit_gallery/'.$gallery->gallery_id) }}" class="actionImage"><img src="{{ URL::asset('web_resources/admin_resources/images/icn_edit.png')}}" /></a>
                                <a href="{{ URL::to('admin/slideshow') }}" class="actionImage"><img src="{{ URL::asset('web_resources/admin_resources/images/icn_trash.png')}}" /></a>
                            </td> 
                        </tr>  
                        <?php
                    }
                    ?>
                </tbody> 
            </table>
        </div><!-- end of #tab1 -->

    </div><!-- end of .tab_container -->

</article>
@stop