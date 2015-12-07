@section("menu")
<div id="menu-wrapper">
                <div style="float:left;"><img src="{{ URL::asset('images/logo.png')}}" class="logoImage"/></div>
                <div id="menu">
                    <ul>
                        <li><a href="index.html" class="menuLink">Начало</a></li><li id="Products">
                            <a href="products.html" class="menuLink">Продукти</a>
                            <ul id="ProductsSubMenu">
                                <li>
                                    <div class="innerMenuDiv"></div>
                                    <div class="listContentFace">

                                        <div class="subMenu">
                                            <span class="subMenuLink"><a href="#">Очи</a></span><br />
                                            <span class="subMenuLink"><a href="#">Сенки</a></span><br />
                                            <span class="subMenuLink"><a href="#">Пигменти</a></span><br />
                                            <span class="subMenuLink"><a href="#">Очни линии</a></span><br />
                                            <span class="subMenuLink"><a href="#">Изкуствени мигли</a></span>
                                            <span class="subMenuLink"><a href="#">Вежди</a></span>
                                            <span class="subMenuLink"><a href="#">Моливи за очи</a></span>
                                        </div>

                                        <div class="subMenu">
                                            <span class="subMenuLink"><a href="#">Лице</a></span><br />
                                            <span class="subMenuLink"><a href="#">Основи за грим</a></span><br />
                                            <span class="subMenuLink"><a href="#">Коректори</a></span><br />
                                            <span class="subMenuLink"><a href="#">Фон дьо тен</a></span><br />
                                            <span class="subMenuLink"><a href="#">Пудри</a></span>
                                        </div>



                                        <div class="subMenu">
                                            <span class="subMenuLink"><a href="#">Устни</a></span><br />
                                            <span class="subMenuLink"><a href="#">Червила</a></span><br />
                                            <span class="subMenuLink"><a href="#">Гланцове</a></span><br />
                                            <span class="subMenuLink"><a href="#">Дълготрайни червила</a></span><br />
                                            <span class="subMenuLink"><a href="#">Моливи за устни</a></span>
                                        </div>

                                        <div class="subMenu2">
                                            <span class="subMenuLink2"><a href="#">Четки</a></span><br />
                                            <span class="subMenuLink2"><a href="#">Аксесоари</a></span><br />
                                            <span class="subMenuLink2"><a href="#">Артистик</a></span><br />
                                        </div>

                                        <div class="faceImage" >
                                            <img src="{{ URL::asset('images/faceModel.jpg')}}" class="faceModel" />
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li><li id="toHover1">
                            <a href="#" class="menuLink">За марката</a>
                        </li><li id="Academy">
                            <a href="#" class="menuLink">Академия за грим</a>
                            <ul id="AcademySubMenu">
                                <li>
                                    <div class="innerMenuDiv"></div>
                                    <div class="listContentSingle">

                                        <div class="subMenu2" style="float:left;margin-top: 6px;">
                                            <span class="subMenuLink2"><a href="#">Преподаватели</a></span><br />
                                            <span class="subMenuLink2"><a href="#">Клипове</a></span><br />
                                            <span class="subMenuLink2"><a href="#">Курсове</a></span><br />
                                        </div>
                                        <div class="academyImage" >
                                            <img src="images/academyImage.jpg" class="academySectionImage" />
                                        </div>
                                    </div>
                                </li>
                            </ul></li><li>
                            <a href="#" class="menuLink">Портфолио</a></li><li>
                            <a href="#" class="menuLink">Новини</a></li><li>
                            <a href="#" class="menuLink">Контакти</a></li>
                    </ul>
                </div>
                <!-- end #menu --> 

                <div id="socialForm">
                    <form id="searchForm" method="post">
                        <fieldset>
                            <div class="input">
                                <input type="text" name="searchBox" id="s" />
                            </div>
                            <div class="searchButtonDiv"><input type="image" name="searchButton" src="searchBox/images/search-icon3.png" alt="Submit" id="searchButton"></div>
                            <a href="#"><img src="{{ URL::asset('images/facebook_logo2.png'}}" class="socialIcons" style="margin-left: 6px;" /></a>
                            <a href="#"><img src="{{ URL::asset('images/twitter_logo2.png'}}" class="socialIcons" /></a>
                            <a href="#"><img src="{{ URL::asset('images/insta_logo2.png'}}" class="socialIcons" /></a>
                        </fieldset>
                    </form>
                </div>
            </div>

@stop