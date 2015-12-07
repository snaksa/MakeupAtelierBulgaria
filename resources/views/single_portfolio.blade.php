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
        <div class="pageHeader">
            <div class="siteMapDiv">
                <span><a href="/" class="siteMap">Начало</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/portfolio" class="siteMap">Портфолио</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/portfolio/<?php echo $data["gallery_info"][0]->gallery_id; ?>" class="siteMap"><?php echo $data["gallery_info"][0]->gallery_title; ?></a></span>
            </div>
        </div>



        <div id="imagesDiv" class="baguetteBoxOne gallery">
            <?php
            $count = 1;
            $totalCount = 0;
            $lenght = count($data["images"]);
            $divSet = true;
            foreach ($data["images"] as $image) {

                if ($count == 1) {
                    if($lenght - $totalCount > 5){
                        $divSet = true;
                        echo "<div style='width:auto;height:auto;float:left;border-bottom: 1px solid #3394B5;'>";
                    }
                    else $divSet = false;
                }
                ?>

                <div class="portfolioSingleImage"><a class="anchorImage" href="{{URL::asset($image->image_path)}}"><img src="{{URL::asset($image->image_path)}}" class="portfolioImage" ></a></div>
                <?php
                if (($count == 5 || $totalCount+1 == $lenght) && $divSet == true) {
                    echo "</div>";
                    $count = 0;
                }

                $count++;
                $totalCount++;
            }
            ?>

        </div>

        <div style="clear:both;"></div>
        <br />
        <br />
    </div>
</div>
<script>
    baguetteBox.run('.baguetteBoxOne');
</script>

@stop