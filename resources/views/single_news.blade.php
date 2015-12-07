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
                <span><a href="/news" class="siteMap">Новини</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/news/<?php echo $data["news"]->news_id; ?>" class="siteMap"><?php echo $data["news"]->news_title; ?></a></span>
            </div>
        </div>

        <div class="singleNewsSection">
            <div class="singleNewsDetails">
                <span class="singleNewsTitle"><?php echo $data["news"]->news_title; ?></span>
                <hr class="singleNewsHorizontalLine"/>
                <span class="singleNewsPublicationDetails">Автор: <span style="font-style:italic;"><?php echo $data["news"]->news_author; ?></span></span>
                <span class="singleNewsPublicationDetails" style="float:right;margin-right:10px;">Публикувано на: <span style="font-style:italic;"><?php echo $data["news"]->news_publish_date; ?></span></span>
                <hr class="singleNewsHorizontalLine"/>
                <img src="{{ URL::asset($data["news"]->news_image)}}" class="singleNewsImage" />
                <p>
                    <?php echo $data["news"]->news_text; ?>
                    <!--
                    <br />
                    <br />
                    <img src="{{ URL::asset('images/newsImage7.jpg')}}" class="singleNewsImage"  style="float:right;margin:10px;"/>
                    От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва.
                    Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!
                    От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва.
                    От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва.
                    Общодостъпните тестери на продукти като фон дьо тен, спирала, червило или гланц, могат да бъдат носители на множество бактерии, вируси и болести. Безстрашното пробване върху нашата кожа, очи и устни, може да ни навлече херпес, ечемик, конюнктивит, хепатит С, стафилококова или стрептококова инфекция!
                    От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните грим продукти. Тази на пръв поглед необходима проба, предшестваща покупката, крие сериозна опасност за вашето здраве, особено ако не е направена както трябва.-->

                </p>
            </div>

            <div class="recentNewsDiv">
                <div class="recentNewsTitleDiv">
                    <span class="recentNewsTitleSpan">Последни новини</span>

                    <?php foreach ($data["latestNews"] as $news) { ?>
                    <div class="recentSingleNews">
                        <img src="{{ URL::asset($news->news_image)}}" class="recentSingleNewsImage" />
                        <div class="recentSingleNewsInfoDiv">
                            <span class="recentSingleNewsTitle"><a href="{{URL::to("news/".$news->news_id)}}" class="newsTitle"><?php echo $news->news_title; ?></a></span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div style="clear:both;"></div>
        </div>

        <div style="clear:both;"></div>
        <br />
        <br />
    </div>
</div>
@stop