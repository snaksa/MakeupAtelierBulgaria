<html>
    <head>
        @yield("title")
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('web_resources/styles.css')}}" />
        <link rel="stylesheet" href="{{ URL::asset('web_resources/searchBox/css/style.css?v=2') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('web_resources/cssDropDown/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('web_resources/baguetteBox.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('web_resources/contactFormStyle.css')}}" />
        <script type="text/javascript" src="{{ URL::asset('web_resources/jsDropDown/modernizr.custom.79639.js')}}"></script>
        <script src="{{ URL::asset('web_resources/baguetteBox.js')}}" async></script>
        <script src="{{ URL::asset('web_resources/plugins.js')}}" async></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{{ URL::asset('web_resources/myScripts.js') }}"></script>
        <script src="{{ URL::asset('web_resources/ajaxRequests.js') }}" type="text/javascript"></script>

        <script>
            window.onload = SetHeight;
            window.onresize = SetHeight;
            GetBasketProducts();
        </script>
    </head>

    <body>

        <div id="rightSidebar" class="rightSidebar">
            <a href="#"><img src="{{ URL::asset('images/facebookSidebar.png')}}" class="socialIconsSidebar" /></a>
            <a href="#"><img src="{{ URL::asset('images/twitterSidebar.png')}}" class="socialIconsSidebar" /></a>
            <a href="#"><img src="{{ URL::asset('images/instagramSidebar.png')}}" class="socialIconsSidebar" /></a>
            <a href="#"><img src="{{ URL::asset('images/emailSidebar.png')}}" class="socialIconsSidebar" style="border:none;"/></a>
        </div>

        <div id="header">

            <div id="menu-wrapper">
                <img src="{{ URL::asset('images/menuBackground.png')}}" class="menuBackground" />
                <div style="float:left;"><img src="{{ URL::asset('images/logo.png')}}" class="logoImage"/></div>
                <div id="menu">
                    <ul>
                        <li><a href="{{ URL::to('/') }}" class="menuLink">Начало</a></li><li id="Products">
                            <a href="{{ URL::to('products') }}" class="menuLink">Продукти</a>
                            <ul id="ProductsSubMenu">
                                <li>
                                    <div class="innerMenuDiv"></div>
                                    <div class="listContentFace">

                                        <div class="subMenu">
                                            <span class="subMenuLink"><a href="{{ URL::to('products/eyes') }}">Очи</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/eyes/eye_shadow') }}">Сенки</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/eyes/pigments') }}">Пигменти</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/eyes/mascara') }}">Очни линии</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/eyes/false_lashes') }}">Изкуствени мигли</a></span>
                                            <span class="subMenuLink"><a href="{{ URL::to('products/eyes/eyebrows') }}">Вежди</a></span>
                                            <span class="subMenuLink"><a href="{{ URL::to('products/eyes/eyeliners') }}">Моливи за очи</a></span>
                                        </div>

                                        <div class="subMenu">
                                            <span class="subMenuLink"><a href="{{ URL::to('products/face') }}">Лице</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/face/primer') }}">Основи за грим</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/face/concealer') }}">Коректори</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/face/foundation') }}">Фон дьо тен</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/face/powder') }}">Пудри</a></span>
                                        </div>



                                        <div class="subMenu">
                                            <span class="subMenuLink"><a href="{{ URL::to('products/lips') }}">Устни</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/lips/lipstick') }}">Червила</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/lips/lip_gloss') }}">Гланцове</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/lips/lasting_lipstick') }}">Дълготрайни червила</a></span><br />
                                            <span class="subMenuLink"><a href="{{ URL::to('products/lips/lip_liner') }}">Моливи за устни</a></span>
                                        </div>

                                        <div class="subMenu2">
                                            <span class="subMenuLink2"><a href="{{ URL::to('products/brushes') }}">Четки</a></span><br />
                                            <span class="subMenuLink2"><a href="{{ URL::to('products/accessories') }}">Аксесоари</a></span><br />
                                            <span class="subMenuLink2"><a href="{{ URL::to('products/artistic') }}">Артистик</a></span><br />
                                        </div>

                                        <div class="faceImage" >
                                            <img src="{{ URL::asset('images/faceModel.jpg')}}" class="faceModel" />
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li><li id="toHover1">
                            <a href="#" class="menuLink">Марката</a>
                        </li><li id="Academy">
                            <a href="#" class="menuLink">Академия</a>
                            <ul id="AcademySubMenu">
                                <li>
                                    <div class="innerMenuDiv"></div>
                                    <div class="listContentSingle">

                                        <div class="subMenu2" style="float:left;margin-top: 6px;">
                                            <span class="subMenuLink2"><a href="{{ URL::to('lecturers') }}">Преподаватели</a></span><br />
                                            <span class="subMenuLink2"><a href="#">Клипове</a></span><br />
                                            <span class="subMenuLink2"><a href="#">Курсове</a></span><br />
                                        </div>
                                        <div class="academyImage" >
                                            <img src="{{ URL::asset('images/academyImage.jpg')}}" class="academySectionImage" />
                                        </div>
                                    </div>
                                </li>
                            </ul></li><li>
                            <a href="{{ URL::to('portfolio') }}" class="menuLink">Портфолио</a></li><li>
                            <a href="{{ URL::to('news') }}" class="menuLink">Новини</a></li><li>
                            <a href="{{ URL::to('contacts') }}" class="menuLink">Контакти</a></li>
                    </ul>
                </div>
                <!-- end #menu --> 
                <div id="basketMenu" class="basketMenu">
                    <a href="{{ URL::to('cart')}}" class="basketLink">Моята количка</a>
                    <div id="basketDiv" class="basketDiv">
                        <!--<div class="basketHeader">
                            <span style="width:50%;" class="basketHeaderSpan">Продукт</span>
                            <span style="width:20%;" class="basketHeaderSpan">Брой</span>
                            <span style="width:20%;" class="basketHeaderSpan">Цена</span>
                        </div>

                        <div class="basketProductDiv">
                            <div class="basketProductImageDiv">
                                <img src="{{URL::asset('images/testProduct2.jpg')}}" class="basketProductImage" />
                            </div>
                            <div class="basketProductNameDiv">
                                <a href="#" class="basketProductName">Име на продукт по дългичко от това </a>
                            </div>
                            <div class="basketProductQuanityDiv">
                                <span class="basketProductQuanity">x2</span>
                            </div>
                            <div class="basketProductPriceDiv">
                                <span class="basketProductQuanity">14.99лв.</span>
                            </div>
                        </div>

                        <div class="basketProductDiv">
                            <div class="basketProductImageDiv">
                                <img src="{{URL::asset('images/testProduct2.jpg')}}" class="basketProductImage" />
                            </div>
                            <div class="basketProductNameDiv">
                                <a href="#" class="basketProductName">Име на продукт по дългичко от това </a>
                            </div>
                            <div class="basketProductQuanityDiv">
                                <span class="basketProductQuanity">x2</span>
                            </div>
                            <div class="basketProductPriceDiv">
                                <span class="basketProductQuanity">14.99лв.</span>
                            </div>
                        </div>

                        <div class="basketProductDiv">
                            <div class="basketProductImageDiv">
                                <img src="{{URL::asset('images/testProduct2.jpg')}}" class="basketProductImage" />
                            </div>
                            <div class="basketProductNameDiv">
                                <a href="#" class="basketProductName">Име на продукт по дългичко от това </a>
                            </div>
                            <div class="basketProductQuanityDiv">
                                <span class="basketProductQuanity">x2</span>
                            </div>
                            <div class="basketProductPriceDiv">
                                <span class="basketProductQuanity">14.99лв.</span>
                            </div>
                        </div>

                        <div class="basketHeader" style="border:none;">
                            <span style="width:50%;text-align: left;margin-left:20px;" class="basketHeaderSpan">Общо: 3 продукта</span>
                            <span style="width:10%;" class="basketHeaderSpan"></span>
                            <span style="width:30%;" class="basketHeaderSpan"><center>45.97лв.</center></span>
                        </div>

                        <a class="toBasketLink" href="#">
                            <div class="basketToBasket">
                                <p>Към количката</p>
                            </div>
                        </a>-->
                    </div>
                </div>

                <!--
                <div id="socialForm">
                    <form id="searchForm" method="post">
                        <fieldset>
                            <div class="input">
                                <input type="text" name="searchBox" id="s" />
                            </div>
                            <div class="searchButtonDiv"><input type="image" name="searchButton" src="searchBox/images/search-icon3.png" alt="Submit" id="searchButton"></div>
                            <a href="#"><img src="images/facebook_logo2.png" class="socialIcons" style="margin-left: 6px;" /></a>
                            <a href="#"><img src="images/twitter_logo2.png" class="socialIcons" /></a>
                            <a href="#"><img src="images/insta_logo2.png" class="socialIcons" /></a>
                        </fieldset>
                    </form>
                </div>
                -->
            </div>

<!--<img src="images/slideshow2.jpg" class="slideshowImage" />-->



            @yield("slideshow")
        </div>


        @yield("content")

        <div class="footer">
            <div style="width: 900px;margin: 0px auto;">
                <div class="footerDiv">
                    <span style="text-decoration:underline;">Make-Up Atelier Paris</span><br />
                    <span style="font-size: 12px;">19 Rue de la Pierre Levée 75011 Paris</span><br />
                    <span style="font-size: 12px;">Tél: +33 1 48 05 16 40</span>
                </div>

                <div class="footerDiv">
                    <span style="text-decoration:underline;">Контакти</span><br />
                    <a href="#"><img src="{{ URL::asset('images/facebook_logo2.png')}}" class="socialIcons" style="margin-top: 6px;" /></a>
                    <a href="#"><img src="{{ URL::asset('images/twitter_logo2.png')}}" class="socialIcons" /></a>
                    <a href="#"><img src="{{ URL::asset('images/insta_logo2.png')}}" class="socialIcons" /></a>
                </div>

                <div class="footerDiv" style="margin-right:0px;">
                    <span style="text-decoration:underline;">Make-Up Atelier Paris</span><br />
                    <span style="font-size: 12px;">19 Rue de la Pierre Levée 75011 Paris</span><br />
                    <span style="font-size: 12px;">Tél: +33 1 48 05 16 40</span>
                </div>
            </div>
        </div>

        <script>
        </script>
    </body>
</html>


























