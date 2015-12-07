@extends("master")

@section("title")
<title>Портфолио</title>
@stop

@section("slideshow")
<div id="slideshow">
    <div>
        <img class="slideshowImage" src="{{ URL::asset('images/eyesCover.png') }}">
    </div>
</div>	
@stop

@section("content")
<div class="content">
    <div id="productsSec" class="teachersSection">

        <div style="width:815px;margin: 0px auto;">
            <div class="pageHeader">
                <div class="siteMapDiv">
                    <span><a href="/" class="siteMap">Начало</a><span class="siteMap">&nbsp;/</span></span>
                    <span><a href="/portfolio" class="siteMap">Портфолио</a></span>
                </div>
            </div>
            <div id="imagesDiv" class="baguetteBoxOne gallery">
                
                <?php 
                    $count = 1;
                    foreach ($data["galleries"] as $gallery) {
                        if($count == 1 || $count == 8){
                            $image_size = "portfolioImageBig";
                            $icon = "top: 35%; left: 45%;z-index:2;width:80px;";
                        }
                        else {
                            $image_size = "portfolioImageMedium";
                            $icon = "top: 30%; left: 40%;z-index:2;width:80px;";
                        }
                        
                        if($count == 1 || $count == 8) $tip = "tipBig";
                        else if($count == 2 || $count == 3) $tip = "tipSmallRight";
                        else $tip = "tipSmallLeft";
                        
                        if($count == 1) $div_head = "float:left;position: relative;margin-top: 18px;";
                        else if($count == 2) $div_head = "float:left;margin-top: 18px;margin-left: 15px;padding-left: 15px;border-left: 1px solid #ccc;position:relative;";
                        else if($count == 3) $div_head = "float:left;margin-top: 18px;margin-left: 15px;padding-left: 15px;border-left: 1px solid #ccc;position: relative;";
                        else if($count == 4 || $count == 10) $div_head = "float:left;margin-top: 18px;margin-right: 13px;padding-right: 14px;border-right: 1px solid #ccc;position: relative;";
                        else if($count == 6 || $count == 12) $div_head = "float:left;margin-top: 18px;position: relative;";
                        else if($count == 7 || $count == 9) $div_head = "float:left;margin-top: 18px;margin-right: 15px;padding-right: 14px;border-right: 1px solid #ccc;position: relative;";
                        else if ($count == 5 || $count == 11) $div_head = "float:left;margin-top: 18px;margin-right: 15px;padding-right: 15px;border-right: 1px solid #ccc;position: relative;";
                        else if($count == 8) $div_head = "float:right;margin-top: 18px;position: relative;";
                ?> 
                
                <div style="<?php echo $div_head; ?>">
                    <img src="{{URL::asset($gallery->gallery_main_image)}}" class="<?php echo $image_size; ?>"/>
                    <a title="<?php echo $gallery->gallery_title; ?>" href="portfolio/<?php echo $gallery->gallery_id;?>" class="<?php echo $tip; ?>">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="<?php echo $icon; ?>" />
                    </a>
                </div>
                       
                <?php
                        $count++;
                        if($count > 12) $count = 1;
                    }
                ?>
                <!-- --------------------------------------------------- -->
                

                <!--<div style="float:left;position: relative;">
                    <img src="images/faceModel.jpg" class="portfolioImageBig"/>
                    <a title="Кратко заглавие" href="#" class="tipBig">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 35%; left: 45%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:left;margin-top: 0px;margin-left: 15px;padding-left: 15px;border-left: 1px solid #ccc;position:relative;">
                    <img src="images/portfolioImage1.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallRight">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:left;margin-top: 18px;margin-left: 15px;padding-left: 15px;border-left: 1px solid #ccc;position: relative;">
                    <img src="images/portfolioImage2.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallRight">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>
                
                <div style="float:left;margin-top: 18px;margin-right: 13px;padding-right: 14px;border-right: 1px solid #ccc;position: relative;">
                    <img src="images/portfolioImage3.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallLeft">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:left;margin-top: 18px;margin-right: 15px;padding-right: 15px;border-right: 1px solid #ccc;position: relative;">
                    <img src="images/portfolioImage1.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallLeft">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:left;margin-top: 18px;position: relative;">
                    <img src="images/homeInfo1.png" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallLeft">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 35%; left: 45%;z-index:2;width:80px;" />
                    </a>
                </div>
                
                <div style="float:left;margin-top: 18px;margin-right: 15px;padding-right: 14px;border-right: 1px solid #ccc;position: relative;">
                    <img src="images/portfolioImage3.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallLeft">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:right;margin-top: 18px;position: relative;">
                    <img src="images/faceModel.jpg" class="portfolioImageBig"/>
                    <a title="Кратко заглавие" href="#" class="tipBig">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 35%; left: 45%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:left;margin-top: 18px;margin-right: 15px;padding-right: 14px;border-right: 1px solid #ccc;position: relative;">
                    <img src="images/portfolioImage1.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallLeft">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>
                
                <div style="float:left;margin-top: 18px;margin-right: 13px;padding-right: 14px;border-right: 1px solid #ccc;position: relative;">
                    <img src="images/portfolioImage3.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallLeft">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:left;margin-top: 18px;margin-right: 15px;padding-right: 15px;border-right: 1px solid #ccc;position: relative;">
                    <img src="images/portfolioImage2.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallLeft">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:left;margin-top: 18px;position: relative;">
                    <img src="images/homeInfo1.png" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallLeft">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 35%; left: 45%;z-index:2;width:80px;" />
                    </a>
                </div>
                
                <div style="float:left;margin-top: 18px;position: relative;">
                    <img src="images/faceModel.jpg" class="portfolioImageBig"/>
                    <a title="Кратко заглавие" href="#" class="tipBig">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 35%; left: 45%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:left;margin-top: 18px;margin-left: 15px;padding-left: 15px;border-left: 1px solid #ccc;position: relative;">
                    <img src="images/portfolioImage1.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallRight">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>
                <div style="float:left;margin-top: 18px;margin-left: 15px;padding-left: 15px;border-left: 1px solid #ccc;position: relative;">
                    <img src="images/portfolioImage2.jpg" class="portfolioImageMedium"/>
                    <a title="Кратко заглавие" href="#" class="tipSmallRight">
                        <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
                    </a>
                </div>-->
            </div>

            <div style="clear:both;"></div>
            <br />
            <br />
        </div>
    </div>
</div>
<script>

</script>
@stop