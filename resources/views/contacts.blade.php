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
<div id="fb-root"></div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>

    function initialize() {
        var myLatLng = {lat: 43.835571, lng: 25.965655};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="content">
    <div id="productsSec" class="teachersSection">
        <div class="pageHeader">
            <div class="siteMapDiv">
                <span><a href="/" class="siteMap">Начало</a><span class="siteMap">&nbsp;/</span></span>
                <span><a href="/contacts" class="siteMap">Контакти</a></span>
            </div>
        </div>
        <div class="contactAndMapDiv">
            <div class="contactForm">
                <div class="contactHeader">Свържете се с нас</div>
                <form class="form" id="form1">
                    <p class="name">
                        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Име" id="name" />
                    </p>

                    <p class="email">
                        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                    </p>

                    <p class="text">
                        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Съобщение"></textarea>
                    </p>


                    <div class="submit">
                        <input type="submit" value="Изпрати" id="button-blue"/>
                        <div class="ease"></div>
                    </div>
                </form>
            </div>

            <div class="mapDiv">
                <div class="contactHeader">Къде се намираме</div>
                <div id="map"></div>
            </div>

            <div style="clear:both;"></div>
        </div>

        <div class="socialMediaBoxes">
            <div class="fbAndTwitter">
                <div class="facebookBox">
                    <div class="socialHeader">Facebook</div>
                    <div class="fb-page" data-href="https://www.facebook.com/manchesterunited" data-width="400" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/manchesterunited"><a href="https://www.facebook.com/manchesterunited">Manchester United</a></blockquote></div></div>
                </div>

                <div class="twitterBox">
                    <div class="socialHeader">Twitter</div>
                    <!-- BEGIN: Twitter website widget (http://twitterforweb.com) -->
                    <a class="twitter-timeline" href="https://twitter.com/ManUtd" data-widget-id="632899129878970368">Tweets by @ManUtd</a>
                    <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");
                    </script>
                    <!-- END: Twitter website widget (http://twitterforweb.com) -->
                </div>
            </div>
        </div>

        <div class="instagramBox">
            <div class="socialHeader" style="margin-bottom:-0px;">Instagram</div>
            <script src="http://snapwidget.com/js/snapwidget.js"></script>
            <iframe src="http://snapwidget.com/in/?u=bWFuY2hlc3RlcnVuaXRlZHxpbnwxNTB8M3w0fHx5ZXN8NXxub25lfG9uU3RhcnR8eWVzfHllcw==&ve=160815" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
        </div>

        <div style="clear:both"></div>
    </div>
</div>
@stop