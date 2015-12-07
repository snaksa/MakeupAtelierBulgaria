@extends("master")
@section("title")
<title>Начало</title>
@stop

@section("slideshow")
<div id="arrow1" class="nextButton"><img src="{{ URL::asset('images/next-arrow.png') }}" width="60px" /></div>
<div id="arrow2" class="previousButton"><img src="{{ URL::asset('images/prev-arrow.png') }}" width="60px" /></div>

<div id="slideshow">
    <?php
    foreach ($data["slideshow_images"] as $item) {
        ?>
        <img class="mainSlideshowImage" src="{{ URL::asset($item->path) }}">
    <?php } ?>
</div>

<div id="mesDiv" class="messageDiv">
    <p>
        <span style="color:red;">Важно:</span> 
        The gel texture of the Face and Body Liquid Makeup is light, fresh and meltingly smooth. It evens out the complexion and leaves a thin layer of powder on the skin, for a very natural finish. Its long-lasting and water-resistant formula is also suited to the
    </p>
</div>
@stop


@section("content")
<div class="content" style="margin-bottom: 0px;">
    <div class="products">
        <div style="margin: 20px auto;text-align: center;">
            <span class="indexTitle">Най-популярни продукти</span>
            <hr class="indexHorizontalLine" />
        </div>
        <div style="width: 904px;margin: 0 auto;">

            <?php
            $count = 1;
            foreach ($data["index_products"] as $item) {
                $divBorders = "";
                if ($count <= 3)
                    $divBorders = "border-bottom: 1px dotted #ccc;";
                if ($count % 3 != 0)
                    $divBorders .= "border-right: 1px dotted #ccc";
                ?>
                <div class="homeProduct" style="<?php echo $divBorders; ?>" id="<?= $item->product_id; ?>" onmouseover='ShowDetailsDiv(this)' onmouseout='HideDetailsDiv(this)'>
                    <a href="{{URL::to('/products/' . $item->category_eng_name . '/' . $item->sub_category_eng_name . '/' . $item->product_id)}}" class="homeProductLink">
                        <div class="productBox">
                            <img src="{{ URL::asset($item->product_image) }}" class="singleProductImage" id="link<?= $item->product_id; ?>" />
                            <a href="{{URL::to('/products/' . $item->category_eng_name . '/' . $item->sub_category_eng_name . '/' . $item->product_id)}}" class="homeProductLink">
                                <div class="seeMoreProduct" id="product<?= $item->product_id; ?>">Детайли</div>
                            </a>
                        </div>
                        <br />
                        <div class="productTitle"><?= $item->product_name; ?></div>
                    </a>
                </div>
                <?php
                $count++;
            }
            ?>
        </div>

        <div style="clear:both;"></div>
    </div>
</div>

<div class="indexGalleryTopBorder"></div>
<div class="indexGallery">
    <div style="margin: 0 auto;text-align: center;">
        <span class="indexTitle" style="color: #fff;">Галерия и видео</span>
        <hr class="indexHorizontalLine" style="background-color: #FFF;" />
    </div>

    <div id="imagesDiv" class="baguetteBoxOne gallery" style="margin: 0 auto;width:850px;">
        <div style="float:left;position: relative;margin-top: 18px;">
            <img src="http://localhost:8000/images/portfolioImage3.jpg" class="portfolioImageBig"/>
            <a title="2015ql" href="portfolio/1" class="tipBig">
                <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 35%; left: 45%;z-index:2;width:80px;" />
            </a>
        </div>

        <div style="float:left;margin-top: 18px;margin-left: 15px;padding-left: 15px;border-left: 1px solid #ccc;position:relative;">
            <img src="http://localhost:8000/images/portfolioImage2.jpg" class="portfolioImageMedium"/>
            <a title="2014" href="portfolio/2" class="tipSmallRight">
                <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
            </a>
        </div>

        <div style="float:left;margin-top: 18px;margin-left: 15px;padding-left: 15px;border-left: 1px solid #ccc;position: relative;">
            <img src="http://localhost:8000/images/portfolioImage1.jpg" class="portfolioImageMedium"/>
            <a title="2013" href="portfolio/3" class="tipSmallRight">
                <img src="images/galleryIcon.png" class="galleryIconHover" style="top: 30%; left: 40%;z-index:2;width:80px;" />
            </a>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<div class="content">
    <div class="products">
        <div style="margin: 0 auto;text-align: center;">
            <span class="indexTitle">Най-четени новини</span>
            <hr class="indexHorizontalLine" />
        </div>
        <div style="margin: 10px 0px 10px 0px;padding: 10px 0px 10px 0px;">
            <div class="singleNewsSmall" style="">
                <img src="/images/0Ymmnu_12047409_1161809863848620_590043092_n.jpg" class="newsImage" style="" />
                <div class="newsSmallInfo">
                    <span class="singleNewsSmallTitle"><a href="http://localhost:8000/news/3" class="newsTitle">Novo Заглавие !!!</a></span>
                    <br />
                    <br />
                    <span class="newsSmallLittleInfoSpan"><p><strong>От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните ...</span>
                    <br />
                    <span><a href="http://localhost:8000/news/3" class="seeMoreNews">Виж повече</a></span>
                </div>
            </div>
            <div class="singleNewsSmall" style="border:none;">
                <img src="/images/uDpOPS_12071858_894358583952719_1821043707_n.jpg" class="newsImage" style="" />
                <div class="newsSmallInfo">
                    <span class="singleNewsSmallTitle"><a href="http://localhost:8000/news/4" class="newsTitle">Novo Заглавие !!!</a></span>
                    <br />
                    <br />
                    <span class="newsSmallLittleInfoSpan"><p><strong>От личните ми наблюдения, в магазините за декоративна козметика, знам колко много се изпробват тестерите на различните ...</span>
                    <br />
                    <span><a href="http://localhost:8000/news/4" class="seeMoreNews">Виж повече</a></span>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>

        <div style="clear:both;"></div>
    </div>

    <div class="homeInfo">
        <div style="margin: 0 auto;text-align: center;">
            <span class="indexTitle">Информация за нас и така</span>
            <hr class="indexHorizontalLine" />
        </div>
        <div class="homeInfoInnerDiv">
            <center><img src="{{URL::asset('images/homeInfo1.png') }}" class="homeInfoImage" /></center>
            <p><span style="font-weight: bold;">Make-Up Atelier Paris</span>, une gamme complète de maquillage de haute qualité, idéale pour les maquilleurs professionnels.</p>
            <p>Une marque multi-ethnique qui comporte une large variété de produits de maquillage hommes / femmes de tous types et couleurs de peau.</p>
            <p>Comptant plus de 40 tons de fonds de teint, 20 tons de correcteurs et de poudres compactes elle 
                est l'une des seules marque qui répond amplement aux attentes de toutes les ethnies.</p>
            <p>Hélène Quillé est la créatrice, elle développe de nouvelles couleurs, textures et crée de nouveaux types de produits qui 
                donne à Make-Up Atelier Paris sont statuts de gamme de maquillage professionnel.</p>
        </div>

        <div class="homeInfoInnerDiv" style="border:none;">
            <center><img src="{{URL::asset('images/homeInfo2.png') }}" class="homeInfoImage" /></center>
            <p>Formations au maquillage professionnel dans tous les domaines du maquillage: Beauté & mode, maquillage artistique et effets spéciaux.</p>
            <p><span class="homeInfoInnerSpan">Maquillage Beauté & Mode</span><br /> 
                Acquérir rapidement les connaissances fondamentales indispensables au métier de maquilleur professionnel 
                dans les milieux de la beauté: maquillage podium, mode, photo, défilé.</p>
            <p><span class="homeInfoInnerSpan">Maquillage Artistique</span><br /> 
                Maquillage artistique visage, décolleté, Body painting sur différents thèmes: l’eau, le feu, la glace, les 4 saisons, les signes astrologiques. 
                Effets de contraste par opposition de couleurs. Collage paillettes et strass.</p>
            <p><span class="homeInfoInnerSpan">Effets Spéciaux</span><br /> 
                Empreinte pour prothèses faciales, empreinte d’une tête complète. Réalisation de prothèses en silicone. Pré-maquillage d'un masque 
                à l'aérographe. Implants de poils, sourcils, effet de pelage pour une transformation en animal. Technique de prise d'empreinte dentaire.</p>
        </div>


        <div style="clear:both;"></div>
    </div>
    <div style="clear:both;"></div>
</div>
@stop



















