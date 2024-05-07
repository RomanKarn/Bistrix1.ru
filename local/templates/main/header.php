<?

use Bitrix\Main\Page\Asset;

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?$APPLICATION->ShowTitle();?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/bootstrap.min.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/owl.carousel.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/animate-text.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/magnific-popup.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/et-line.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/pe-icon-7-stroke.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/shortcode/shortcodes.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/meanmenu.min.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/font-awesome.min.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/style.css" ) ?>
		<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/responsive.css" ) ?>
		
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/vendor/modernizr-2.8.3.min.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/vendor/jquery-1.12.0.min.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/bootstrap.min.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/owl.carousel.min.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/jquery.counterup.min.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/waypoints.min.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/jquery.magnific-popup.min.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/jquery.mixitup.min.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/jquery.meanmenu.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/jquery.nav.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/jquery.parallax-1.1.3.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/animate-text.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/plugins.js" ) ?>
		<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/main.js" ) ?>
		
		<?$APPLICATION->ShowHead();?>
	</head>

<body>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	
	

