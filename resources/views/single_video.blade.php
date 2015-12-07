@extends("master")

@section("title")
<title>Име на видео</title>
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
                <span><a href="/news" class="siteMap">Клипове</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/news/<?php echo $data["video"]->video_id; ?>" class="siteMap"><?php echo $data["video"]->video_title; ?></a></span>
            </div>
        </div>

        <div class="videoTitle">
            <span class="singleNewsTitle"><?php echo $data["video"]->video_title; ?></span>
        </div>

        <div class="youtibeVideoDiv">
            <iframe class="youtubeVideoFrame" src="<?php echo $data["video"]->video_link; ?>" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="videoDescription">
            <p>
                <?php echo $data["video"]->video_description; ?>
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>

    <div class="products">
        <div style="width: 904px;margin: 0 auto;">
            <div style="margin: 40px auto;text-align: center;margin-bottom: 20px;">
                <span class="indexTitle">Продукти в това видео</span>
                <hr class="indexHorizontalLine">
            </div>

            <div class="homeProduct" style="border-bottom: 1px dotted #ccc;border-right: 1px dotted #ccc" id="51" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="http://localhost:8000/images/testProduct3.jpg" class="singleProductImage" id="link51" />
                        <a href="http://localhost:8000/products/lips/lipstick/51" class="homeProductLink">
                            <div class="seeMoreProduct" id="product51">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Устни -> ЧервилаeUn644</div>
                </a>
            </div>
            <div class="homeProduct" style="border-bottom: 1px dotted #ccc;border-right: 1px dotted #ccc" id="2" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="http://localhost:8000/images/testProduct4.jpg" class="singleProductImage" id="link2" />
                        <a href="http://localhost:8000/products/eyes/primer/2" class="homeProductLink">
                            <div class="seeMoreProduct" id="product2">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Paco Rabanne Olymp?a Shower Gel 200ml</div>
                </a>
            </div>
            <div class="homeProduct" style="border-bottom: 1px dotted #ccc;" id="27" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="http://localhost:8000/images/testProduct3.jpg" class="singleProductImage" id="link27" />
                        <a href="http://localhost:8000/products/eyes/mascara/27" class="homeProductLink">
                            <div class="seeMoreProduct" id="product27">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Очи -> Очни линииVL9m8i</div>
                </a>
            </div>
            <div class="homeProduct" style="border-right: 1px dotted #ccc" id="45" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="http://localhost:8000/images/testProduct3.jpg" class="singleProductImage" id="link45" />
                        <a href="http://localhost:8000/products/face/foundation/45" class="homeProductLink">
                            <div class="seeMoreProduct" id="product45">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Лице -> Фон дьо тенhjF1n0</div>
                </a>
            </div>
            <div class="homeProduct" style="border-right: 1px dotted #ccc" id="9" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="http://localhost:8000/images/7domdG_cover.jpg" class="singleProductImage" id="link9" />
                        <a href="http://localhost:8000/products/eyes/false_lashes/9" class="homeProductLink">
                            <div class="seeMoreProduct" id="product9">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">21Очи -> Очни линииpNAK7b</div>
                </a>
            </div>
            <div class="homeProduct" style="" id="12" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                <a href="#" class="homeProductLink">
                    <div class="productBox">
                        <img src="http://localhost:8000/images/testProduct3.jpg" class="singleProductImage" id="link12" />
                        <a href="http://localhost:8000/products/eyes/eyeliners/12" class="homeProductLink">
                            <div class="seeMoreProduct" id="product12">Детайли</div>
                        </a>
                    </div>
                    <br />
                    <div class="productTitle">Очи -> Моливи за очиtejzyV</div>
                </a>
            </div>
        </div>

        <div style="clear:both;"></div>
    </div>

    <div style="margin: 40px auto;text-align: center;margin-bottom: 20px;">
        <span class="indexTitle">Други клипове</span>
        <hr class="indexHorizontalLine">
    </div>
    <div style="width:825px;margin: 0 auto;">
        <center>

            <?php
            $count = 1;
            foreach ($data["randomVideos"] as $video) {
                if ($count == 1) {
                    $divStyle = "float:left;margin-top: 0px;margin-right: 15px;padding-right: 15px;border-right: 1px solid #ccc;position: relative;";
                    $tip = "tipSmallLeft";
                    $videoThumb = "top: 30%; left: 33%;z-index:3;width:80px;";
                }
                if ($count == 2) {
                    $divStyle = "float:left;margin-top: 0px;position: relative;";
                    $tip = "tipSmallLeft";
                    $videoThumb = "top: 30%; left: 33%;z-index:3;width:80px;";
                }
                if ($count == 3) {
                    $divStyle = "float:left;margin-top: 0px;margin-left: 15px;padding-left: 15px;border-left: 1px solid #ccc;position:relative;";
                    $tip = "tipSmallRight";
                    $videoThumb = "top: 30%; left: 40%;z-index:3;width:80px;";
                }
                ?>
                <div style="<?php echo $divStyle; ?>">
                    <a title="<?php echo $video->video_title ?>" href="{{URL::to('video/'.$video->video_id)}}" class="<?php echo $tip; ?>">
                        <div class="videoThumbnailOverlay">
                            <img src="{{ URL::asset('images/videoIcon.png') }}" class="videoIconHover" style="<?php echo $videoThumb; ?>" />
                        </div>
                    </a>
                <!--<img src="{{ URL::asset('images/portfolioImage1.jpg') }}" class="portfolioImageMedium"/>-->
                    <iframe class="videoThumbnailFrame" width="252" height="142" src="<?php echo $video->video_link; ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                </div>
                <?php
                $count++;
            }
            ?>
        </center>

        <div style="clear:both;"></div>
    </div>


</div>
@stop