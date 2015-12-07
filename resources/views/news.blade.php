@extends("master")

@section("title")
<title>Новини</title>
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
                <span><a href="/news" class="siteMap">Новини</a></span>
            </div>
        </div>

        <?php
        $count = 1;
        foreach ($data["news"] as $news) {
            if ($count == 1 || $count == 4) {
                $divStyle = "";
                $imgStyle = "";
                $divClass = "singleNewsSmall";
                $detailsInfo = "newsSmallInfo";
                $newsTitle = "singleNewsSmallTitle";
                $trimText = "230";
                } else if ($count == 2 || $count == 5) {
                    $divStyle = "border:none;";
                    $imgStyle = "";
                    $divClass = "singleNewsSmall";
                    $detailsInfo = "newsSmallInfo";
                    $newsTitle = "singleNewsSmallTitle";
                    $trimText = "230";
                    } else if ($count == 3) {
                        $divStyle = "";
                        $imgStyle = "";
                        $divClass = "newsLarge";
                        $detailsInfo = "newsLargeInfo";
                        $newsTitle = "singleNewsSmallTitle";
                        $trimText = "800";
                        } else if ($count == 6) {
                            $divStyle = "";
                            $imgStyle = "float:right;";
                            $divClass = "newsLarge";
                            $detailsInfo = "newsLargeInfo";
                            $newsTitle = "singleNewsSmallTitle";
                            $trimText = "800";
                        }
            ?>
        
            <div class="<?php echo $divClass; ?>" style="<?php echo $divStyle; ?>">
                <img src="<?php echo $news->news_image; ?>" class="newsImage" style="<?php echo $imgStyle; ?>" />
                <div class="<?php echo $detailsInfo; ?>">
                    <span class="singleNewsSmallTitle"><a href="{{ URL::to('news/' . $news->news_id) }}" class="newsTitle"><?php echo $news->news_title; ?></a></span>
                    <br />
                    <br />
                    <span class="newsSmallLittleInfoSpan"><?php echo substr($news->news_text, 0, $trimText) . "..."; ?></span>
                    <br />
                    <span><a href="{{ URL::to('news/' . $news->news_id) }}" class="seeMoreNews">Виж повече</a></span>
                </div>
            </div>

        <?php $count++; } ?>

        <!--<div class="singleNewsSmall">
            <img src="images/newsImage.png" class="newsImage" />
            <div class="newsSmallInfo">
                <span class="singleNewsSmallTitle"><a href="#" class="newsTitle">10 основни правила за гримa на очите!</a></span>
                <br />
                <br />
                <span class="newsSmallLittleInfoSpan">От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти...</span>
                <br />
                <span><a href="#" class="seeMoreNews">Виж повече</a></span>
            </div>
        </div>

        <div class="singleNewsSmall" style="border:none;">
            <img src="images/newsImage2.jpg" class="newsImage" />
            <div class="newsSmallInfo">
                <span class="singleNewsSmallTitle"><a href="#" class="newsTitle">10 основни правила за гримa на очите!</a></span>
                <br />
                <br />
                <span class="newsSmallLittleInfoSpan">От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти...</span>
                <br />
                <span><a href="#" class="seeMoreNews">Виж повече</a></span>
            </div>
        </div>

        <div class="newsLarge">
            <img src="images/newsImage3.jpg" class="newsImage" />
            <div class="newsLargeInfo">
                <span class="singleNewsSmallTitle"><a href="#" class="newsTitle">10 основни правила за гримa на очите!</a></span>
                <br />
                <br />
                <span class="newsSmallLittleInfoSpan">От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва.
                    Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!
                </span>
                <br />
                <span><a href="#" class="seeMoreNews">Виж повече</a></span>
            </div>
        </div>

        <div class="singleNewsSmall">
            <img src="images/newsImage4.jpg" class="newsImage" />
            <div class="newsSmallInfo">
                <span class="singleNewsSmallTitle"><a href="#" class="newsTitle">10 основни правила за гримa на очите!</a></span>
                <br />
                <br />
                <span class="newsSmallLittleInfoSpan">От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти...</span>
                <br />
                <span><a href="#" class="seeMoreNews">Виж повече</a></span>
            </div>
        </div>

        <div class="singleNewsSmall" style="border:none;">
            <img src="images/newsImage5.jpg" class="newsImage" />
            <div class="newsSmallInfo">
                <span class="singleNewsSmallTitle"><a href="#" class="newsTitle">10 основни правила за гримa на очите!</a></span>
                <br />
                <br />
                <span class="newsSmallLittleInfoSpan">От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти...</span>
                <br />
                <span><a href="#" class="seeMoreNews">Виж повече</a></span>
            </div>
        </div>

        <div class="newsLarge">
            <img src="images/newsImage3.jpg" class="newsImage" style="float:right;"/>
            <div class="newsLargeInfo">
                <span class="singleNewsSmallTitle"><a href="#" class="newsTitle">10 основни правила за гримa на очите!</a></span>
                <br />
                <br />
                <span class="newsSmallLittleInfoSpan">От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва.
                    Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!
                </span>
                <br />
                <span><a href="#" class="seeMoreNews">Виж повече</a></span>
            </div>
        </div>-->

        <div style="clear:both;"></div>
        <br />
        <br />
    </div>
</div>
@stop