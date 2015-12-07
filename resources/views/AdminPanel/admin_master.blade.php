<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="{{ URL::asset('web_resources/admin_resources/css/layout.css')}}" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="{{ URL::asset('web_resources/admin_resources/js/jquery-1.5.2.min.js')}}" type="text/javascript"></script>
	<script src="{{ URL::asset('web_resources/admin_resources/js/jquery.tablesorter.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ URL::asset('web_resources/admin_resources/js/jquery.equalHeight.js')}}"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="http://www.medialoot.com">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>John Doe</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<!--<article class="breadcrumbs"><a href="index.html">Website Admin</a> 
                            <div class="breadcrumb_divider">
                            </div> <a class="current">Dashboard</a>
                            <div class="breadcrumb_divider">
                            </div> <a class="current">Dashboard</a>
                        </article>-->
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<h3>Начална страница</h3>
		<ul class="toggle">
			<li class="slideshow_icon"><a href="{{ URL::to('admin/slideshow') }}">Слайдшоу</a></li>
			<li class="important_icon"><a href="{{ URL::to('admin/important_message') }}">Важно съобщение</a></li>
			<li class="top_icon"><a href="{{ URL::to('admin/index_top_products') }}">Топ продукти</a></li>
		</ul>
		<h3>Продукти</h3>
		<ul class="toggle">
			<li class="addProduct_icon"><a href="{{ URL::to('admin/add_product') }}">Добави продукт</a></li>
			<li class="list_icon"><a href="{{ URL::to('admin/edit_products') }}">Всички продукти</a></li>
                        <li class="top_icon"><a href="{{ URL::to('admin/category_top_products') }}">Топ продукти</a></li>
		</ul>
		<h3>Новини</h3>
		<ul class="toggle">
			<li class="addProduct_icon"><a href="{{ URL::to('admin/add_news') }}">Добави новина</a></li>
			<li class="list_icon"><a href="{{ URL::to('admin/edit_news') }}">Всички новини</a></li>
		</ul>
		<h3>Галерии</h3>
		<ul class="toggle">
			<li class="addProduct_icon"><a href="{{ URL::to('admin/add_gallery') }}">Добави галерия</a></li>
			<li class="gallery_icon"><a href="{{ URL::to('admin/edit_gallery') }}">Всички галерии</a></li>
		</ul>
                <h3>Клипове</h3>
		<ul class="toggle">
			<li class="addProduct_icon"><a href="{{ URL::to('admin/add_video') }}">Добави клип</a></li>
			<li class="gallery_icon"><a href="{{ URL::to('admin/edit_gallery') }}">Всички галерии</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2011 Website Admin</strong></p>
			<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		@yield("content")
	</section>


</body>

</html>