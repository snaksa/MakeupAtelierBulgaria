@extends("AdminPanel.admin_master")
@section("content")

<script>
    function UploadImage(element) {
        document.getElementById(element.id + 'fileToUpload').click();
    }

    function PressSubmit(element) {
        document.getElementById("chosenImage").value = element.id;
        document.getElementById("submit_page").click();
    }
</script>

<h4 class="alert_info">Препоръчителен размер: 1920x816 (изтриване при промяна на снимка)</h4>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" id="chosenImage" name="chosenImage" value="" />
    <input type="submit" id="submit_page" style="display:none;" />
    <?php 
        $count = 1;
        foreach ($data["slideshow_images"] as $image) { 
        if($count % 2 == 1) echo '<div style="float:left;">'; ?>
        <article class="module width_half">
            <header>
                <h3 style="text-transform: none;"><?php echo $count . ". ";?>Размер <?php echo $image->width . "x" . $image->height; ?></h3>
                <input type="submit" id="<?php echo $count; ?>" class="alt_btn" 
                       style="float: right;margin-top:5px;" value="Промени"
                       onclick="UploadImage(this);
                               return false;"/>
                <input type="file" name="<?php echo $count; ?>fileToUpload" id="<?php echo $count; ?>fileToUpload" style="display:none;" onchange="PressSubmit(this)"/>
            </header>
            <div class="module_content">
                <img src="{{URL::asset($image->path)}}" width="100%" />
            </div>
        </article>
    <?php 
        if($count % 2 == 0) echo "</div>";
        $count++; } ?>
</form>
@stop