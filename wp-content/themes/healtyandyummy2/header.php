<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php bloginfo(name); ?><?php wp_title ( '|', true, 'left' ); ?></title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=1040">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="2011年に創業して以来、生体の生理を考慮した食事の探求、優れたエルゴジェニック・エイドの研究、創造あるライフスタイルの追求を続けています。ヘルシーヤミー水素販売。" />
  <meta name="keywords" content="Healthy&Yummy,ヘルシーアンドヤミー,ヘルシヤミー,提坂キヨ,KIYO,癌,糖尿病,アトピー,水素,水素水,抗酸化,アンチエイジング,健康,効果,ガン,ライフスタイル,白髪,自然療法,サプリメント,治療,アンチオキシダント," />
  <meta name="author" content="KobaDesigns" />
  <meta property="og:title" content="HELTHY & YUMMY OFFICIAL HP" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="2011年に創業して以来、生体の生理を考慮した食事の探求、優れたエルゴジェニック・エイドの研究、創造あるライフスタイルの追求を続けています。" />
  <meta property="og:url" content="https://healthy-yummy.com/" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
  <meta property="og:site_name" content="HEALTHY &amp; YUMMY" />
  <link rel="shortcut icon" href="">
  <link rel="apple-touch-icon" href="" />
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/css/style.css'); ?>" type="text/css" />
  <link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>
</head>
<body class="fadeIn">
<?php include_once("analyticstracking.php") ?>

<div id="wrap">
	<?php //wp_nav_menu(array('menu' => 'cart')); ?>
	<div id="navwrap">
		<header>
				<div id="button"></div>
				<h1 class="bar"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_ver.png"  alt="Healty &amp; Yummy"></h1>
		</header>
		<div class="navArea">
		<?php wp_nav_menu(array('menu' => 'sideMenu')); ?>
		<div class="navFoot">
			  <div class="privacy"><a href="https://healthy-yummy.com/law">SPECIFIED COMMERCIAL<br>TRANSACTION LAW</a></div>
			  <div class="privacy"><a href="https://healthy-yummy.com/privacy-policy">PRIVACY POLICY</a></div>
			<div class="copyright">&copy; 2018 healthy & Yummy</div>
		</div>
		</div>
		
	</div><!--navWrap-->
