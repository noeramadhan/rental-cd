<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#">

<head itemscope="itemscope" itemtype="http://schema.org/WebSite">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?=$detailcd->nama;?> - Rendy</title>

		<link rel='stylesheet' id='dashicons-css' href='<?=base_url() ;?>assets/css/dashicons.css' type='text/css' media='all' />
		<link rel='stylesheet' id='menu-icons-extra-css' href='<?=base_url() ;?>assets/css/extra.css' type='text/css' media='all' />
		<link rel='stylesheet' id='idmuvi-core-css' href='<?=base_url() ;?>assets/css/idmuvi-core.css' type='text/css' media='all' />
		<link rel='stylesheet' id='muvipro-fonts-css' href='<?=base_url() ;?>assets/css/muvipro-fonts.css' type='text/css' media='all' />
		<link rel='stylesheet' id='muvipro-style-css' href='<?=base_url() ;?>assets/css/muvipro-style.css' type='text/css' media='all' />

		<style id='muvipro-style-inline-css' type='text/css'>
		body {
			color: #212121;
			font-family: "Source Sans Pro", "Helvetica Neue", sans-serif;
			font-weight: 500;
			font-size: 12px;
		}

		kbd,
		a.button,
		button,
		.button,
		button.button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		ul.page-numbers li span.page-numbers,
		ul.page-numbers li a:hover,
		.widget-title:before,
		.widget-title:after,
		.page-title:before,
		.page-title:after,
		.tagcloud a,
		.page-links a .page-link-number:hover,
		.homemodule-title,
		.module-linktitle a,
		.post-navigation .nav-previous span,
		.post-navigation .nav-next span,
		.gmr-grid .item .gmr-box-content .content-thumbnail .gmr-posttype-item {
			background-color: #e50a4a;
		}

		a,
		a:hover,
		a:focus,
		a:active {
			color: #e50a4a;
		}

		a.button,
		button,
		.button,
		button.button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.sticky .gmr-box-content,
		.gmr-theme div.sharedaddy h3.sd-title:before,
		.bypostauthor > .comment-body,
		.gmr-movie-data {
			border-color: #e50a4a;
		}

		.gmr-popup-button-widget a,
		.gmr-popup-button a,
		.module-linktitle a,
		.gmr-grid .item .gmr-box-content .content-thumbnail .gmr-quality-item a {
			background-color: #FF0000;
		}

		.gmr-popup-button-widget a,
		.gmr-popup-button a {
			border-color: #FF0000;
		}

		.site-header {
			background-image: url();
			-webkit-background-size: auto;
			-moz-background-size: auto;
			-o-background-size: auto;
			background-size: auto;
			background-repeat: repeat;
			background-position: center top;
			background-attachment: scroll;
			background-color: #ffffff;
		}

		.site-title a {
			color: #e50a4a;
		}

		.site-description,
		.gmr-search input[type="text"] {
			color: #999999;
		}

		.gmr-menuwrap {
			background-color: #6600ff;
		}

		#gmr-responsive-menu,
		#primary-menu > li > a {
			color: #ffffff;
		}

		#primary-menu > li.menu-border > a span {
			border-color: #ffffff;
		}

		#gmr-responsive-menu:hover,
		.gmr-mainmenu #primary-menu > li:hover > a,
		.gmr-mainmenu #primary-menu .current-menu-item > a,
		.gmr-mainmenu #primary-menu .current-menu-ancestor > a,
		.gmr-mainmenu #primary-menu .current_page_item > a,
		.gmr-mainmenu #primary-menu .current_page_ancestor > a {
			color: #6600ff;
		}

		.gmr-mainmenu #primary-menu > li.menu-border:hover > a span,
		.gmr-mainmenu #primary-menu > li.menu-border.current-menu-item > a span,
		.gmr-mainmenu #primary-menu > li.menu-border.current-menu-ancestor > a span,
		.gmr-mainmenu #primary-menu > li.menu-border.current_page_item > a span,
		.gmr-mainmenu #primary-menu > li.menu-border.current_page_ancestor > a span {
			border-color: #ffffff;
		}

		.gmr-mainmenu #primary-menu > li:hover > a,
		.gmr-mainmenu #primary-menu .current-menu-item > a,
		.gmr-mainmenu #primary-menu .current-menu-ancestor > a,
		.gmr-mainmenu #primary-menu .current_page_item > a,
		.gmr-mainmenu #primary-menu .current_page_ancestor > a {
			background-color: #fff;
		}

		.current_page_item > a,
		.gmr-secondmenu #primary-menu .current_page_ancestor > a {
			background-color: #f7b519;
		}

		.gmr-topnavmenuwrap {
			background-color: #ffffff;
		}

		#gmr-topnavresponsive-menu,
		.gmr-topnavmenu #primary-menu > li > a,
		.gmr-social-icon ul > li > a {
			color: #e50a4a;
		}

		.gmr-topnavmenu #primary-menu > li.menu-border > a span {
			border-color: #e50a4a;
		}

		#gmr-topnavresponsive-menu:hover,
		.gmr-topnavmenu #primary-menu > li:hover > a,
		.gmr-topnavmenu #primary-menu .current-menu-item > a,
		.gmr-topnavmenu #primary-menu .current-menu-ancestor > a,
		.gmr-topnavmenu #primary-menu .current_page_item > a,
		.gmr-topnavmenu #primary-menu .current_page_ancestor > a,
		.gmr-social-icon ul > li > a:hover {
			color: #212121;
		}

		.gmr-topnavmenu #primary-menu > li.menu-border:hover > a span,
		.gmr-topnavmenu #primary-menu > li.menu-border.current-menu-item > a span,
		.gmr-topnavmenu #primary-menu > li.menu-border.current-menu-ancestor > a span,
		.gmr-topnavmenu #primary-menu > li.menu-border.current_page_item > a span,
		.gmr-topnavmenu #primary-menu > li.menu-border.current_page_ancestor > a span {
			border-color: #212121;
		}

		.gmr-content,
		.idmuvi-topbanner {
			background-color: #ffffff;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.h1,
		.h2,
		.h3,
		.h4,
		.h5,
		.h6,
		.site-title,
		#gmr-responsive-menu,
		#primary-menu > li > a {
			font-family: "Source Sans Pro", "Helvetica Neue", sans-serif;
		}

		h1 {
			font-size: 26px;
		}

		h2 {
			font-size: 22px;
		}

		h3 {
			font-size: 20px;
		}

		h4 {
			font-size: 18px;
		}

		h5 {
			font-size: 16px;
		}

		h6 {
			font-size: 14px;
		}

		.widget-footer {
			background-color: #ffffff;
			color: #212121;
		}

		.widget-footer a {
			color: #E91E63;
		}

		.widget-footer a:hover {
			color: #E91E63;
		}

		.site-footer {
			background-color: #f5f5f5;
			color: #212121;
		}

		.site-footer a {
			color: #E91E63;
		}

		.site-footer a:hover {
			color: #E91E63;
		}
	</style>

	<script type='text/javascript' src='http://themovie21.com/wp-includes/js/jquery/jquery.js'></script>
	<link rel="pingback" href="http://themovie21.com/xmlrpc.php">
	<style type="text/css" id="custom-background-css">
	body.custom-background {
		background-color: #f4f4f4;
	}
</style>
<link rel="icon" href='<?=base_url() ;?>assets/logo1.png' sizes="32x32" />
<link rel="icon" href='<?=base_url() ;?>assets/logo1.png' sizes="360x360" /> -->
<!--  -->
</head>

<body class="post-template-default single single-post postid-1089 single-format-standard custom-background gmr-theme idtheme kentooz gmr-no-sticky gmr-box-layout gmr-button-lk" itemscope="itemscope" itemtype="http://schema.org/WebPage">

	<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

	<div class="site inner-wrap" id="site-container">

		<div class="container"></div>
		<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
			<div class="container" id="headboi">

				<div class="clearfix gmr-headwrapper">
					<div class="gmr-logo">
						<a href="http://themovie21.com/" class="custom-logo-link" itemprop="url" title="TheMovie21">
							<img src='<?=base_url() ;?>assets/logo1.png' alt="TheMovie21" title="Ren'dy" style="max-height: 200px!important"/>
						</a>
					</div>
					<div class="gmr-search pull-right">
						<form method="get" class="gmr-searchform searchform" action="http://themovie21.com/">
							<input type="text" name="s" id="s" placeholder="Search Movie" />
							<input type="hidden" name="post_type[]" value="post">
							<input type="hidden" name="post_type[]" value="tv">
						</form>
					</div>
				</div>
			</div>

			<div class="top-header">
				<div class="gmr-menuwrap clearfix">
					<div class="container">
						<a id="gmr-responsive-menu" href="#menus">
						MENU								</a>
						<nav id="site-navigation" class="gmr-mainmenu" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
							<ul id="primary-menu" class="menu">
								<li id="menu-item-65" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-65"><a title="Home" href="http://themovie21.com" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-admin-home" aria-hidden="true"></i><span>Home</span></span></a></li>
								<li id="menu-item-66" class="col-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-66"><a title="Genre" href="#" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-editor-video" aria-hidden="true"></i><span>Genre</span></span></a>
									<ul class="sub-menu">
										<li id="menu-item-67" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-67"><a title="Action" href="http://themovie21.com/Genre/action/" itemprop="url"><span itemprop="name">Action</span></a></li>
										<li id="menu-item-69" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-69"><a title="Adventure" href="http://themovie21.com/Genre/adventure/" itemprop="url"><span itemprop="name">Adventure</span></a></li>
										<li id="menu-item-1049" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1049"><a href="http://themovie21.com/Genre/animation/" itemprop="url"><span itemprop="name">Animation</span></a></li>
										<li id="menu-item-76" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-76"><a title="Comedy" href="http://themovie21.com/Genre/comedy/" itemprop="url"><span itemprop="name">Comedy</span></a></li>
										<li id="menu-item-73" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-73"><a title="Crime" href="http://themovie21.com/Genre/crime/" itemprop="url"><span itemprop="name">Crime</span></a></li>
										<li id="menu-item-68" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-68"><a title="Drama" href="http://themovie21.com/Genre/drama/" itemprop="url"><span itemprop="name">Drama</span></a></li>
										<li id="menu-item-1050" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1050"><a href="http://themovie21.com/Genre/family/" itemprop="url"><span itemprop="name">Family</span></a></li>
										<li id="menu-item-72" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-72"><a title="Fantasy" href="http://themovie21.com/Genre/fantasy/" itemprop="url"><span itemprop="name">Fantasy</span></a></li>
										<li id="menu-item-1051" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1051"><a href="http://themovie21.com/Genre/history/" itemprop="url"><span itemprop="name">History</span></a></li>
										<li id="menu-item-1052" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1052"><a href="http://themovie21.com/Genre/horror/" itemprop="url"><span itemprop="name">Horror</span></a></li>
										<li id="menu-item-75" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-75"><a title="Mystery" href="http://themovie21.com/Genre/mystery/" itemprop="url"><span itemprop="name">Mystery</span></a></li>
										<li id="menu-item-74" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-74"><a title="Romance" href="http://themovie21.com/Genre/romance/" itemprop="url"><span itemprop="name">Romance</span></a></li>
										<li id="menu-item-70" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-70"><a title="Science Fiction" href="http://themovie21.com/Genre/science-fiction/" itemprop="url"><span itemprop="name">Science Fiction</span></a></li>
										<li id="menu-item-71" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-71"><a title="Thriller" href="http://themovie21.com/Genre/thriller/" itemprop="url"><span itemprop="name">Thriller</span></a></li>
										<li id="menu-item-1054" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1054"><a href="http://themovie21.com/Genre/tv-movie/" itemprop="url"><span itemprop="name">TV Movie</span></a></li>
										<li id="menu-item-1055" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1055"><a href="http://themovie21.com/Genre/war/" itemprop="url"><span itemprop="name">War</span></a></li>
										<li id="menu-item-1056" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1056"><a href="http://themovie21.com/Genre/western/" itemprop="url"><span itemprop="name">Western</span></a></li>
									</ul>
								</li>
								<li id="menu-item-92" class="col-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-92"><a title="Year" href="#" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-calendar-alt" aria-hidden="true"></i><span>Tahun</span></span></a>
									<ul class="sub-menu">
										<li id="menu-item-1008" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1008"><a href="http://themovie21.com/year/1984/" itemprop="url"><span itemprop="name">1984</span></a></li>
										<li id="menu-item-1009" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1009"><a href="http://themovie21.com/year/1991/" itemprop="url"><span itemprop="name">1991</span></a></li>
										<li id="menu-item-1010" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1010"><a href="http://themovie21.com/year/1993/" itemprop="url"><span itemprop="name">1993</span></a></li>
										<li id="menu-item-294" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-294"><a href="http://themovie21.com/year/1994/" itemprop="url"><span itemprop="name">1994</span></a></li>
										<li id="menu-item-1011" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1011"><a href="http://themovie21.com/year/1997/" itemprop="url"><span itemprop="name">1997</span></a></li>
										<li id="menu-item-1012" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1012"><a href="http://themovie21.com/year/1998/" itemprop="url"><span itemprop="name">1998</span></a></li>
										<li id="menu-item-1013" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1013"><a href="http://themovie21.com/year/2000/" itemprop="url"><span itemprop="name">2000</span></a></li>
										<li id="menu-item-1014" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1014"><a href="http://themovie21.com/year/2001/" itemprop="url"><span itemprop="name">2001</span></a></li>
										<li id="menu-item-295" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-295"><a href="http://themovie21.com/year/2002/" itemprop="url"><span itemprop="name">2002</span></a></li>
										<li id="menu-item-1015" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1015"><a href="http://themovie21.com/year/2003/" itemprop="url"><span itemprop="name">2003</span></a></li>
										<li id="menu-item-296" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-296"><a href="http://themovie21.com/year/2004/" itemprop="url"><span itemprop="name">2004</span></a></li>
										<li id="menu-item-1016" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1016"><a href="http://themovie21.com/year/2005/" itemprop="url"><span itemprop="name">2005</span></a></li>
										<li id="menu-item-1017" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1017"><a href="http://themovie21.com/year/2006/" itemprop="url"><span itemprop="name">2006</span></a></li>
										<li id="menu-item-297" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-297"><a href="http://themovie21.com/year/2007/" itemprop="url"><span itemprop="name">2007</span></a></li>
										<li id="menu-item-1018" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1018"><a href="http://themovie21.com/year/2008/" itemprop="url"><span itemprop="name">2008</span></a></li>
										<li id="menu-item-298" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-298"><a href="http://themovie21.com/year/2009/" itemprop="url"><span itemprop="name">2009</span></a></li>
										<li id="menu-item-1019" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1019"><a href="http://themovie21.com/year/2010/" itemprop="url"><span itemprop="name">2010</span></a></li>
										<li id="menu-item-1020" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1020"><a href="http://themovie21.com/year/2011/" itemprop="url"><span itemprop="name">2011</span></a></li>
										<li id="menu-item-299" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-299"><a href="http://themovie21.com/year/2012/" itemprop="url"><span itemprop="name">2012</span></a></li>
										<li id="menu-item-1021" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1021"><a href="http://themovie21.com/year/2013/" itemprop="url"><span itemprop="name">2013</span></a></li>
										<li id="menu-item-300" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-300"><a href="http://themovie21.com/year/2014/" itemprop="url"><span itemprop="name">2014</span></a></li>
										<li id="menu-item-301" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-301"><a href="http://themovie21.com/year/2015/" itemprop="url"><span itemprop="name">2015</span></a></li>
										<li id="menu-item-302" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-302"><a href="http://themovie21.com/year/2016/" itemprop="url"><span itemprop="name">2016</span></a></li>
										<li id="menu-item-303" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-303"><a href="http://themovie21.com/year/2017/" itemprop="url"><span itemprop="name">2017</span></a></li>
										<li id="menu-item-1022" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1022"><a href="http://themovie21.com/year/2018/" itemprop="url"><span itemprop="name">2018</span></a></li>
									</ul>
								</li>
								<li id="menu-item-98" class="col-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-98"><a title="Country" href="#" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-admin-site" aria-hidden="true"></i><span>Negara</span></span></a>
									<ul class="sub-menu">
										<li id="menu-item-103" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-103"><a title="Australia" href="http://themovie21.com/country/australia/" itemprop="url"><span itemprop="name">Australia</span></a></li>
										<li id="menu-item-1023" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1023"><a href="http://themovie21.com/country/belgium/" itemprop="url"><span itemprop="name">Belgium</span></a></li>
										<li id="menu-item-1024" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1024"><a href="http://themovie21.com/country/brazil/" itemprop="url"><span itemprop="name">Brazil</span></a></li>
										<li id="menu-item-1025" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1025"><a href="http://themovie21.com/country/bulgaria/" itemprop="url"><span itemprop="name">Bulgaria</span></a></li>
										<li id="menu-item-102" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-102"><a title="Canada" href="http://themovie21.com/country/canada/" itemprop="url"><span itemprop="name">Canada</span></a></li>
										<li id="menu-item-101" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-101"><a title="China" href="http://themovie21.com/country/china/" itemprop="url"><span itemprop="name">China</span></a></li>
										<li id="menu-item-1026" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1026"><a href="http://themovie21.com/country/denmark/" itemprop="url"><span itemprop="name">Denmark</span></a></li>
										<li id="menu-item-1027" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1027"><a href="http://themovie21.com/country/egypt/" itemprop="url"><span itemprop="name">Egypt</span></a></li>
										<li id="menu-item-1028" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1028"><a href="http://themovie21.com/country/finland/" itemprop="url"><span itemprop="name">Finland</span></a></li>
										<li id="menu-item-1029" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1029"><a href="http://themovie21.com/country/france/" itemprop="url"><span itemprop="name">France</span></a></li>
										<li id="menu-item-1030" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1030"><a href="http://themovie21.com/country/germany/" itemprop="url"><span itemprop="name">Germany</span></a></li>
										<li id="menu-item-1031" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1031"><a href="http://themovie21.com/country/hong-kong/" itemprop="url"><span itemprop="name">Hong Kong</span></a></li>
										<li id="menu-item-1032" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1032"><a href="http://themovie21.com/country/hongkong/" itemprop="url"><span itemprop="name">HONGKONG</span></a></li>
										<li id="menu-item-1033" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1033"><a href="http://themovie21.com/country/hungary/" itemprop="url"><span itemprop="name">Hungary</span></a></li>
										<li id="menu-item-1034" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1034"><a href="http://themovie21.com/country/iceland/" itemprop="url"><span itemprop="name">Iceland</span></a></li>
										<li id="menu-item-1035" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1035"><a href="http://themovie21.com/country/india/" itemprop="url"><span itemprop="name">India</span></a></li>
										<li id="menu-item-1036" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1036"><a href="http://themovie21.com/country/indonesia/" itemprop="url"><span itemprop="name">Indonesia</span></a></li>
										<li id="menu-item-105" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-105"><a title="Ireland" href="http://themovie21.com/country/ireland/" itemprop="url"><span itemprop="name">Ireland</span></a></li>
										<li id="menu-item-1037" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1037"><a href="http://themovie21.com/country/italy/" itemprop="url"><span itemprop="name">Italy</span></a></li>
										<li id="menu-item-1038" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1038"><a href="http://themovie21.com/country/japan/" itemprop="url"><span itemprop="name">Japan</span></a></li>
										<li id="menu-item-106" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-106"><a title="Korea" href="http://themovie21.com/country/korea/" itemprop="url"><span itemprop="name">Korea</span></a></li>
										<li id="menu-item-1039" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1039"><a href="http://themovie21.com/country/malta/" itemprop="url"><span itemprop="name">Malta</span></a></li>
										<li id="menu-item-104" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-104"><a title="New Zealand" href="http://themovie21.com/country/new-zealand/" itemprop="url"><span itemprop="name">New Zealand</span></a></li>
										<li id="menu-item-1040" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1040"><a href="http://themovie21.com/country/norway/" itemprop="url"><span itemprop="name">Norway</span></a></li>
										<li id="menu-item-1041" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1041"><a href="http://themovie21.com/country/romania/" itemprop="url"><span itemprop="name">Romania</span></a></li>
										<li id="menu-item-1042" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1042"><a href="http://themovie21.com/country/russian-federation/" itemprop="url"><span itemprop="name">Russian Federation</span></a></li>
										<li id="menu-item-1043" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1043"><a href="http://themovie21.com/country/south-africa/" itemprop="url"><span itemprop="name">South Africa</span></a></li>
										<li id="menu-item-1044" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1044"><a href="http://themovie21.com/country/spain/" itemprop="url"><span itemprop="name">Spain</span></a></li>
										<li id="menu-item-1045" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1045"><a href="http://themovie21.com/country/sweden/" itemprop="url"><span itemprop="name">Sweden</span></a></li>
										<li id="menu-item-1046" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1046"><a href="http://themovie21.com/country/thailand/" itemprop="url"><span itemprop="name">Thailand</span></a></li>
										<li id="menu-item-1047" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1047"><a href="http://themovie21.com/country/turkey/" itemprop="url"><span itemprop="name">Turkey</span></a></li>
										<li id="menu-item-99" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-99"><a title="USA" href="http://themovie21.com/country/usa/" itemprop="url"><span itemprop="name">USA</span></a></li>
										<li id="menu-item-100" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-100"><a title="United Kingdom" href="http://themovie21.com/country/united-kingdom/" itemprop="url"><span itemprop="name">United Kingdom</span></a></li>
										<li id="menu-item-1048" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1048"><a href="http://themovie21.com/country/viet-nam/" itemprop="url"><span itemprop="name">Viet Nam</span></a></li>
									</ul>
								</li>

								<li class="menu-item menu-item-type-close-btn gmr-close-btn"><a id="close-menu-button" itemprop="url" href="#">Close Menu</a></li>
							</ul>
						</nav>
						<!-- #site-navigation -->
					</div>
				</div>
			</div>
			<!-- .top-header -->

		</header>
		<!-- #masthead -->

		<div id="content" class="gmr-content">

<<<<<<< HEAD
				<div class="top-header">
					<div class="gmr-menuwrap clearfix">
						<div class="container">
							<a id="gmr-responsive-menu" href="#menus">
							MENU								</a>
							<nav id="site-navigation" class="gmr-mainmenu" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
								<ul id="primary-menu" class="menu"><li id="menu-item-65" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-65"><a title="Home" href="http://themovie21.com" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-admin-home" aria-hidden="true"></i><span>Home</span></span></a></li>
									<li id="menu-item-66" class="col-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-66"><a title="Genre" href="#" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-editor-video" aria-hidden="true"></i><span>Genre</span></span></a>
										<ul class="sub-menu">
											<li id="menu-item-67" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-67"><a title="Action" href="http://themovie21.com/Genre/action/" itemprop="url"><span itemprop="name">Action</span></a></li>
											<li id="menu-item-69" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-69"><a title="Adventure" href="http://themovie21.com/Genre/adventure/" itemprop="url"><span itemprop="name">Adventure</span></a></li>
											<li id="menu-item-1049" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1049"><a href="http://themovie21.com/Genre/animation/" itemprop="url"><span itemprop="name">Animation</span></a></li>
											<li id="menu-item-76" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-76"><a title="Comedy" href="http://themovie21.com/Genre/comedy/" itemprop="url"><span itemprop="name">Comedy</span></a></li>
											<li id="menu-item-73" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-73"><a title="Crime" href="http://themovie21.com/Genre/crime/" itemprop="url"><span itemprop="name">Crime</span></a></li>
											<li id="menu-item-68" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-68"><a title="Drama" href="http://themovie21.com/Genre/drama/" itemprop="url"><span itemprop="name">Drama</span></a></li>
											<li id="menu-item-1050" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1050"><a href="http://themovie21.com/Genre/family/" itemprop="url"><span itemprop="name">Family</span></a></li>
											<li id="menu-item-72" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-72"><a title="Fantasy" href="http://themovie21.com/Genre/fantasy/" itemprop="url"><span itemprop="name">Fantasy</span></a></li>
											<li id="menu-item-1051" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1051"><a href="http://themovie21.com/Genre/history/" itemprop="url"><span itemprop="name">History</span></a></li>
											<li id="menu-item-1052" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1052"><a href="http://themovie21.com/Genre/horror/" itemprop="url"><span itemprop="name">Horror</span></a></li>
											<li id="menu-item-75" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-75"><a title="Mystery" href="http://themovie21.com/Genre/mystery/" itemprop="url"><span itemprop="name">Mystery</span></a></li>
											<li id="menu-item-74" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-74"><a title="Romance" href="http://themovie21.com/Genre/romance/" itemprop="url"><span itemprop="name">Romance</span></a></li>
											<li id="menu-item-70" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-70"><a title="Science Fiction" href="http://themovie21.com/Genre/science-fiction/" itemprop="url"><span itemprop="name">Science Fiction</span></a></li>
											<li id="menu-item-71" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-71"><a title="Thriller" href="http://themovie21.com/Genre/thriller/" itemprop="url"><span itemprop="name">Thriller</span></a></li>
											<li id="menu-item-1054" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1054"><a href="http://themovie21.com/Genre/tv-movie/" itemprop="url"><span itemprop="name">TV Movie</span></a></li>
											<li id="menu-item-1055" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1055"><a href="http://themovie21.com/Genre/war/" itemprop="url"><span itemprop="name">War</span></a></li>
											<li id="menu-item-1056" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1056"><a href="http://themovie21.com/Genre/western/" itemprop="url"><span itemprop="name">Western</span></a></li>
										</ul>
									</li>
									<li id="menu-item-92" class="col-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-92"><a title="Year" href="#" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-calendar-alt" aria-hidden="true"></i><span>Tahun</span></span></a>
										<ul class="sub-menu">
											<li id="menu-item-1008" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1008"><a href="http://themovie21.com/year/1984/" itemprop="url"><span itemprop="name">1984</span></a></li>
											<li id="menu-item-1009" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1009"><a href="http://themovie21.com/year/1991/" itemprop="url"><span itemprop="name">1991</span></a></li>
											<li id="menu-item-1010" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1010"><a href="http://themovie21.com/year/1993/" itemprop="url"><span itemprop="name">1993</span></a></li>
											<li id="menu-item-294" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-294"><a href="http://themovie21.com/year/1994/" itemprop="url"><span itemprop="name">1994</span></a></li>
											<li id="menu-item-1011" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1011"><a href="http://themovie21.com/year/1997/" itemprop="url"><span itemprop="name">1997</span></a></li>
											<li id="menu-item-1012" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1012"><a href="http://themovie21.com/year/1998/" itemprop="url"><span itemprop="name">1998</span></a></li>
											<li id="menu-item-1013" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1013"><a href="http://themovie21.com/year/2000/" itemprop="url"><span itemprop="name">2000</span></a></li>
											<li id="menu-item-1014" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1014"><a href="http://themovie21.com/year/2001/" itemprop="url"><span itemprop="name">2001</span></a></li>
											<li id="menu-item-295" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-295"><a href="http://themovie21.com/year/2002/" itemprop="url"><span itemprop="name">2002</span></a></li>
											<li id="menu-item-1015" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1015"><a href="http://themovie21.com/year/2003/" itemprop="url"><span itemprop="name">2003</span></a></li>
											<li id="menu-item-296" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-296"><a href="http://themovie21.com/year/2004/" itemprop="url"><span itemprop="name">2004</span></a></li>
											<li id="menu-item-1016" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1016"><a href="http://themovie21.com/year/2005/" itemprop="url"><span itemprop="name">2005</span></a></li>
											<li id="menu-item-1017" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1017"><a href="http://themovie21.com/year/2006/" itemprop="url"><span itemprop="name">2006</span></a></li>
											<li id="menu-item-297" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-297"><a href="http://themovie21.com/year/2007/" itemprop="url"><span itemprop="name">2007</span></a></li>
											<li id="menu-item-1018" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1018"><a href="http://themovie21.com/year/2008/" itemprop="url"><span itemprop="name">2008</span></a></li>
											<li id="menu-item-298" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-298"><a href="http://themovie21.com/year/2009/" itemprop="url"><span itemprop="name">2009</span></a></li>
											<li id="menu-item-1019" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1019"><a href="http://themovie21.com/year/2010/" itemprop="url"><span itemprop="name">2010</span></a></li>
											<li id="menu-item-1020" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1020"><a href="http://themovie21.com/year/2011/" itemprop="url"><span itemprop="name">2011</span></a></li>
											<li id="menu-item-299" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-299"><a href="http://themovie21.com/year/2012/" itemprop="url"><span itemprop="name">2012</span></a></li>
											<li id="menu-item-1021" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1021"><a href="http://themovie21.com/year/2013/" itemprop="url"><span itemprop="name">2013</span></a></li>
											<li id="menu-item-300" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-300"><a href="http://themovie21.com/year/2014/" itemprop="url"><span itemprop="name">2014</span></a></li>
											<li id="menu-item-301" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-301"><a href="http://themovie21.com/year/2015/" itemprop="url"><span itemprop="name">2015</span></a></li>
											<li id="menu-item-302" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-302"><a href="http://themovie21.com/year/2016/" itemprop="url"><span itemprop="name">2016</span></a></li>
											<li id="menu-item-303" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-303"><a href="http://themovie21.com/year/2017/" itemprop="url"><span itemprop="name">2017</span></a></li>
											<li id="menu-item-1022" class="menu-item menu-item-type-taxonomy menu-item-object-muviyear menu-item-1022"><a href="http://themovie21.com/year/2018/" itemprop="url"><span itemprop="name">2018</span></a></li>
										</ul>
									</li>
									<li id="menu-item-98" class="col-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-98"><a title="Country" href="#" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-admin-site" aria-hidden="true"></i><span>Negara</span></span></a>
										<ul class="sub-menu">
											<li id="menu-item-103" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-103"><a title="Australia" href="http://themovie21.com/country/australia/" itemprop="url"><span itemprop="name">Australia</span></a></li>
											<li id="menu-item-1023" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1023"><a href="http://themovie21.com/country/belgium/" itemprop="url"><span itemprop="name">Belgium</span></a></li>
											<li id="menu-item-1024" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1024"><a href="http://themovie21.com/country/brazil/" itemprop="url"><span itemprop="name">Brazil</span></a></li>
											<li id="menu-item-1025" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1025"><a href="http://themovie21.com/country/bulgaria/" itemprop="url"><span itemprop="name">Bulgaria</span></a></li>
											<li id="menu-item-102" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-102"><a title="Canada" href="http://themovie21.com/country/canada/" itemprop="url"><span itemprop="name">Canada</span></a></li>
											<li id="menu-item-101" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-101"><a title="China" href="http://themovie21.com/country/china/" itemprop="url"><span itemprop="name">China</span></a></li>
											<li id="menu-item-1026" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1026"><a href="http://themovie21.com/country/denmark/" itemprop="url"><span itemprop="name">Denmark</span></a></li>
											<li id="menu-item-1027" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1027"><a href="http://themovie21.com/country/egypt/" itemprop="url"><span itemprop="name">Egypt</span></a></li>
											<li id="menu-item-1028" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1028"><a href="http://themovie21.com/country/finland/" itemprop="url"><span itemprop="name">Finland</span></a></li>
											<li id="menu-item-1029" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1029"><a href="http://themovie21.com/country/france/" itemprop="url"><span itemprop="name">France</span></a></li>
											<li id="menu-item-1030" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1030"><a href="http://themovie21.com/country/germany/" itemprop="url"><span itemprop="name">Germany</span></a></li>
											<li id="menu-item-1031" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1031"><a href="http://themovie21.com/country/hong-kong/" itemprop="url"><span itemprop="name">Hong Kong</span></a></li>
											<li id="menu-item-1032" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1032"><a href="http://themovie21.com/country/hongkong/" itemprop="url"><span itemprop="name">HONGKONG</span></a></li>
											<li id="menu-item-1033" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1033"><a href="http://themovie21.com/country/hungary/" itemprop="url"><span itemprop="name">Hungary</span></a></li>
											<li id="menu-item-1034" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1034"><a href="http://themovie21.com/country/iceland/" itemprop="url"><span itemprop="name">Iceland</span></a></li>
											<li id="menu-item-1035" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1035"><a href="http://themovie21.com/country/india/" itemprop="url"><span itemprop="name">India</span></a></li>
											<li id="menu-item-1036" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1036"><a href="http://themovie21.com/country/indonesia/" itemprop="url"><span itemprop="name">Indonesia</span></a></li>
											<li id="menu-item-105" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-105"><a title="Ireland" href="http://themovie21.com/country/ireland/" itemprop="url"><span itemprop="name">Ireland</span></a></li>
											<li id="menu-item-1037" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1037"><a href="http://themovie21.com/country/italy/" itemprop="url"><span itemprop="name">Italy</span></a></li>
											<li id="menu-item-1038" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1038"><a href="http://themovie21.com/country/japan/" itemprop="url"><span itemprop="name">Japan</span></a></li>
											<li id="menu-item-106" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-106"><a title="Korea" href="http://themovie21.com/country/korea/" itemprop="url"><span itemprop="name">Korea</span></a></li>
											<li id="menu-item-1039" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1039"><a href="http://themovie21.com/country/malta/" itemprop="url"><span itemprop="name">Malta</span></a></li>
											<li id="menu-item-104" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-104"><a title="New Zealand" href="http://themovie21.com/country/new-zealand/" itemprop="url"><span itemprop="name">New Zealand</span></a></li>
											<li id="menu-item-1040" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1040"><a href="http://themovie21.com/country/norway/" itemprop="url"><span itemprop="name">Norway</span></a></li>
											<li id="menu-item-1041" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1041"><a href="http://themovie21.com/country/romania/" itemprop="url"><span itemprop="name">Romania</span></a></li>
											<li id="menu-item-1042" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1042"><a href="http://themovie21.com/country/russian-federation/" itemprop="url"><span itemprop="name">Russian Federation</span></a></li>
											<li id="menu-item-1043" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1043"><a href="http://themovie21.com/country/south-africa/" itemprop="url"><span itemprop="name">South Africa</span></a></li>
											<li id="menu-item-1044" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1044"><a href="http://themovie21.com/country/spain/" itemprop="url"><span itemprop="name">Spain</span></a></li>
											<li id="menu-item-1045" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1045"><a href="http://themovie21.com/country/sweden/" itemprop="url"><span itemprop="name">Sweden</span></a></li>
											<li id="menu-item-1046" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1046"><a href="http://themovie21.com/country/thailand/" itemprop="url"><span itemprop="name">Thailand</span></a></li>
											<li id="menu-item-1047" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1047"><a href="http://themovie21.com/country/turkey/" itemprop="url"><span itemprop="name">Turkey</span></a></li>
											<li id="menu-item-99" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-99"><a title="USA" href="http://themovie21.com/country/usa/" itemprop="url"><span itemprop="name">USA</span></a></li>
											<li id="menu-item-100" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-100"><a title="United Kingdom" href="http://themovie21.com/country/united-kingdom/" itemprop="url"><span itemprop="name">United Kingdom</span></a></li>
											<li id="menu-item-1048" class="menu-item menu-item-type-taxonomy menu-item-object-muvicountry menu-item-1048"><a href="http://themovie21.com/country/viet-nam/" itemprop="url"><span itemprop="name">Viet Nam</span></a></li>
										</ul>
										<li id="menu-item-2024" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2024 pull-right"><a title="Home" href="http://localhost:8000/rental-cd/app/index.php/cd/" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-login-site" aria-hidden="true"></i><span>Login</span></span></a></li>

                                    <li id="menu-item-2025" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2025 pull-right"><a title="Home" href="http://localhost:8000/rental-cd/app/index.php/cd/" itemprop="url"><span itemprop="name"><i class="_mi _before dashicons dashicons-login-site" aria-hidden="true"></i><span>Register</span></span></a></li>
									</li>
									
									<li class="menu-item menu-item-type-close-btn gmr-close-btn"><a id="close-menu-button" itemprop="url" href="#">Close Menu</a></li></ul>								</nav><!-- #site-navigation -->	
								</div>
							</div>
						</div><!-- .top-header -->

						
					</header><!-- #masthead -->

					<div id="content" class="gmr-content">

						<div class="container">
							<div class="row">


								<div id="primary" class="content-area col-md-12">

									<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
										<span class="first-item" typeof="v:Breadcrumb">
											<a href="http://themovie21.com/" rel="v:url" property="v:title">Homepage</a>
										</span>
										<span class="separator">/</span>
										<span class="last-item" property="v:title"><?php echo $detailcd->nama?></span>
									</div>
=======
			<div class="container">
				<div class="row">
>>>>>>> 022062ff702d13b9d5558c52930548049fee6fd6

					<div id="primary" class="content-area col-md-12">

						<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
							<span class="first-item" typeof="v:Breadcrumb">
								<a href="http://themovie21.com/" rel="v:url" property="v:title">Homepage</a>
							</span>
							<span class="separator">/</span>
							<span class="last-item" property="v:title"><?php echo $detailcd->nama?></span>
						</div>

						<main id="main" class="site-main" role="main">

							<article id="post-1089" class="single-thumb post-1089 post type-post status-publish format-standard has-post-thumbnail hentry category-adventure category-animation category-comedy category-family tag-anthropomorphism tag-cars tag-cgi tag-high-tech tag-racing tag-sequel tag-trainer tag-travel muvidirector-brian-fee muvicast-angel-oquendo muvicast-armie-hammer muvicast-bob-costas muvicast-bob-peterson muvicast-bonnie-hunt muvicast-chase-elliott muvicast-cheech-marin muvicast-chris-cooper muvicast-cristela-alonzo muvicast-daniel-suarez muvicast-darrell-wallace-jr muvicast-darrell-waltrip muvicast-guido-quaroni muvicast-humpy-wheeler muvicast-isiah-whitlock-jr muvicast-jason-pace muvicast-jeff-gordon muvicast-jenifer-lewis muvicast-john-ratzenberger muvicast-junior-johnson muvicast-katherine-helmond muvicast-kerry-washington muvicast-kyle-petty muvicast-larry-the-cable-guy muvicast-lea-delaria muvicast-lewis-hamilton muvicast-lloyd-sherr muvicast-madeleine-mcgraw muvicast-margo-martindale muvicast-michael-wallis muvicast-mike-joy muvicast-nathan-fillion muvicast-owen-wilson muvicast-paul-dooley muvicast-paul-newman muvicast-ray-evernham muvicast-ray-magliozzi muvicast-richard-petty muvicast-ryan-blaney muvicast-shannon-spake muvicast-tom-magliozzi muvicast-tony-shalhoub muviyear-1543 muvicountry-usa muviquality-hd muviindex-c" itemscope="itemscope" itemtype="http://schema.org/Movie">

								<div class="gmr-box-content gmr-single">

									<div class="gmr-server-wrap clearfix muvipro_player_content" id="muvipro_player_content_id" data-id="1089">
										<div class="clearfix">
											<div id="player1-tab-content" class="tab-content">
											</div>
											<div id="player2-tab-content" class="tab-content">
											</div>
											<div id="player3-tab-content" class="tab-content">
											</div>
										</div>

									</div>

									<div class="gmr-movie-data clearfix">
										<figure class="pull-left">
											<img src='<?=$detailcd->image?>' class="wp-post-image" alt="" itemprop="image" title="fyy1nDC8wm553FCiBDojkJmKLCs " /></figure>
											<br>
	<div class="gmr-movie-data-top ">
											<h1 class="entry-title " itemprop="name "><?php echo $detailcd->nama?></h1></div>
											<div class="clearfix gmr-rating " itemscope="itemscope " itemprop="aggregateRating " itemtype="//schema.org/AggregateRating ">
												<meta itemprop="worstRating " content="1 ">
												<meta itemprop="bestRating " content="10 ">
												<div class="gmr-rating-content "></div>
											</div>
											<div class="entry-content entry-content-single " itemprop="description ">
												<?php echo $detailcd->sinopsis?>
												<table style="border:1px;width:100%; ">
													<tr>
														<td width="20% "><strong>Cast:</strong></td>
														<td><span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/angel-oquendo/ " rel="tag ">Angel Oquendo</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/armie-hammer/ " rel="tag ">Armie Hammer</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/bob-costas/ " rel="tag ">Bob Costas</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/bob-peterson/ " rel="tag ">Bob Peterson</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/bonnie-hunt/ " rel="tag ">Bonnie Hunt</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/chase-elliott/ " rel="tag ">Chase Elliott</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/cheech-marin/ " rel="tag ">Cheech Marin</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/chris-cooper/ " rel="tag ">Chris Cooper</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/cristela-alonzo/ " rel="tag ">Cristela Alonzo</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/daniel-suarez/ " rel="tag ">Daniel Suárez</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/darrell-wallace-jr/ " rel="tag ">Darrell Wallace Jr.</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/darrell-waltrip/ " rel="tag ">Darrell Waltrip</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/guido-quaroni/ " rel="tag ">Guido Quaroni</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/humpy-wheeler/ " rel="tag ">Humpy Wheeler</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/isiah-whitlock-jr/ " rel="tag ">Isiah Whitlock Jr.</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/jason-pace/ " rel="tag ">Jason Pace</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/jeff-gordon/ " rel="tag ">Jeff Gordon</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/jenifer-lewis/ " rel="tag ">Jenifer Lewis</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/john-ratzenberger/ " rel="tag ">John Ratzenberger</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/junior-johnson/ " rel="tag ">Junior Johnson</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/katherine-helmond/ " rel="tag ">Katherine Helmond</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/kerry-washington/ " rel="tag ">Kerry Washington</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/kyle-petty/ " rel="tag ">Kyle Petty</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/larry-the-cable-guy/ " rel="tag ">Larry the Cable Guy</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/lea-delaria/ " rel="tag ">Lea DeLaria</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/lewis-hamilton/ " rel="tag ">Lewis Hamilton</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/lloyd-sherr/ " rel="tag ">Lloyd Sherr</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/madeleine-mcgraw/ " rel="tag ">Madeleine McGraw</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/margo-martindale/ " rel="tag ">Margo Martindale</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/michael-wallis/ " rel="tag ">Michael Wallis</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/mike-joy/ " rel="tag ">Mike Joy</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/nathan-fillion/ " rel="tag ">Nathan Fillion</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/owen-wilson/ " rel="tag ">Owen Wilson</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/paul-dooley/ " rel="tag ">Paul Dooley</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/paul-newman/ " rel="tag ">Paul Newman</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/ray-evernham/ " rel="tag ">Ray Evernham</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/ray-magliozzi/ " rel="tag ">Ray Magliozzi</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/richard-petty/ " rel="tag ">Richard Petty</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/ryan-blaney/ " rel="tag ">Ryan Blaney</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/shannon-spake/ " rel="tag ">Shannon Spake</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/tom-magliozzi/ " rel="tag ">Tom Magliozzi</a></span></span>, <span itemprop="actors " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/cast/tony-shalhoub/ " rel="tag ">Tony Shalhoub</a></span></span>
														</td>
													</tr>
													<tr>
														<td width="20% "><strong>Director:</strong></td>
														<td><span itemprop="director " itemscope="itemscope " itemtype="http://schema.org/Person "><span itemprop="name "><a href="http://themovie21.com/director/brian-fee/ " rel="tag "><?php echo $detailcd->sutradara?></a></span></span>
														</td>
													</tr>
													<tr>
														<td width="20% "><strong>Country:</strong></td>
														<td><span itemprop="contentLocation " itemscope="itemscope " itemtype="http://schema.org/Place "><a href="http://themovie21.com/country/usa/ " rel="tag "><?php echo $detailcd->negara?></a></span></td>
													</tr>
													<tr>
														<td width="20% "><strong>Release:</strong></td>
														<td><span><time itemprop="dateCreated " datetime="2017-06-15T00:00:00+00:00 "><?php echo $detailcd->tanggal_rilis?></time></span></td>
													</tr>
													<tr>
														<td width="20% "><strong>Language:</strong></td>
														<td><span property="inLanguage ">English, Hrvatski, Polski</span></td>
													</tr>

												</table>

											</div>
											<!-- .gmr-box-content -->

											<div id="footer-container ">

												<div class="gmr-bgstripes ">
													<span class="gmr-bgstripe gmr-color1 "></span><span class="gmr-bgstripe gmr-color2 "></span>
													<span class="gmr-bgstripe gmr-color3 "></span><span class="gmr-bgstripe gmr-color4 "></span>
													<span class="gmr-bgstripe gmr-color5 "></span><span class="gmr-bgstripe gmr-color6 "></span>
													<span class="gmr-bgstripe gmr-color7 "></span><span class="gmr-bgstripe gmr-color8 "></span>
													<span class="gmr-bgstripe gmr-color9 "></span><span class="gmr-bgstripe gmr-color10 "></span>
													<span class="gmr-bgstripe gmr-color11 "></span><span class="gmr-bgstripe gmr-color12 "></span>
													<span class="gmr-bgstripe gmr-color13 "></span><span class="gmr-bgstripe gmr-color14 "></span>
													<span class="gmr-bgstripe gmr-color15 "></span><span class="gmr-bgstripe gmr-color16 "></span>
													<span class="gmr-bgstripe gmr-color17 "></span><span class="gmr-bgstripe gmr-color18 "></span>
													<span class="gmr-bgstripe gmr-color19 "></span><span class="gmr-bgstripe gmr-color20 "></span>
												</div>

												<div id="footer-sidebar " class="widget-footer " role="complementary ">
													<div class="container ">
														<div class="row ">
															<div class="footer-column col-md-4 ">
																<div id="text-4 " class="widget widget_text ">
																	<h3 class="widget-title ">REN'DY</h3>
																	<div class="textwidget ">REN'DY adalah sebuah website hiburan yang menyajikan layanan peminjaman film Subtitle Indonesa Secara ONLINE. Dibuat oleh :
																		<p style="margin-bottom: 0; ">Revangga Twin Theodora</p>
																		<p style="margin-bottom: 0; ">Johar Putra Adek Artemi</p>
																		<p style="margin-bottom: 0; ">Muhammad Noer Ramadhan</p>
																		<p>Sukron Nurtado</p>

																	</div>
																</div>
															</div>

															<div class="footer-column col-md-4 ">
																<div id="views-1 " class="widget widget_views ">
																	<h3 class="widget-title ">Most Rent Film</h3>
																	<ul>
																		<li><a href="http://themovie21.com/avengers-infinity-war-2018/ " title="Avengers: Infinity War (2018) ">Avengers: Infinity War (2018)</a> - 9,307 views</li>
																		<li><a href="http://themovie21.com/jurassic-world-fallen-kingdom-2018/ " title="Jurassic World: Fallen Kingdom (2018) ">Jurassic World: Fallen Kingdom (2018)</a> - 7,984 views</li>
																		<li><a href="http://themovie21.com/dilan-1990-2018/ " title="Dilan 1990 (2018) ">Dilan 1990 (2018)</a> - 3,992 views</li>
																		<li><a href="http://themovie21.com/tomb-raider-2018/ " title="Tomb Raider (2018) ">Tomb Raider (2018)</a> - 3,751 views</li>
																		<li><a href="http://themovie21.com/dragon-hunter-2017/ " title="Dragon Hunter (2017) ">Dragon Hunter (2017)</a> - 3,245 views</li>
																	</ul>
																</div>
															</div>
															<div class="footer-column col-md-4 ">
																<div id="media_image-3 " class="widget widget_media_image ">
																	<h3 class="widget-title ">Rental Film Online</h3><a href="http://themovie21.com "><img src='<?=base_url() ;?>assets/logo1.png' alt="Ren 'dy" title="Ren'dy " style="margin-top: -50px; width:260px; height:200px "/>
																	</a></div>
																</div>
															</div>
														</div>
													</div>

													<footer id="colophon " class="text-center site-footer " role="contentinfo ">
														<div class="container ">
															<div class="site-info ">
																<a href="http://themovie21.com ">Rental Film Subtitle Indonesia Online</a> </div>
																<!-- .site-info -->
															</div>
															<!-- .container -->
														</footer>
														<!-- #colophon -->

													</div>
													<!-- #footer-container -->

													<div class="gmr-ontop gmr-hide "><span class="arrow_carrot-up "></span></div>

													<script type='text/javascript' src='http://themovie21.com/wp-content/themes/muvipro/js/jquery-plugin-min.js'></script>
													<script type='text/javascript' src='http://themovie21.com/wp-content/themes/muvipro/js/customscript.js'></script>

													<script type='text/javascript' src='http://themovie21.com/wp-content/themes/muvipro/js/ajax-player.js'></script>
													<script type='text/javascript' src='http://themovie21.com/wp-includes/js/comment-reply.min.js'></script>
												</body>

												</html>