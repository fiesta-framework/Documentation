<title>Fiesta - The PHP Framework</title>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />  -->
<?php Html::charset(); ?>
<meta name="description" content="">
<meta name="author" content="">

<!-- Google Fonts
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<!-- Le Styles
================================================== -->
<!-- These are the awesome CSS files -->

<!-- <link href="<?php echo Url::$css ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo Url::$css ?>flexslider.css" rel="stylesheet">
<link href="<?php echo Url::$css ?>style.css" rel="stylesheet">
<link href="<?php echo Url::$css ?>fiesta.css" rel="stylesheet">
<link href="<?php echo Url::$css ?>responsive.css" rel="stylesheet">
<link href="<?php echo Url::$css ?>style_switcher.css" rel="stylesheet">
<link href="<?php echo Url::$css ?>dropkick.css" rel="stylesheet">
<link href="<?php echo Url::$css ?>jquery.fancybox.css" rel="stylesheet"> -->

	<!--<link href="<?php echo Url::$css ?>bootstrap.css" rel="stylesheet">
	<link href="<?php echo Url::$css ?>flexslider.css" rel="stylesheet">
	<link href="<?php echo Url::$css ?>style.css" rel="stylesheet">
	<link href="<?php echo Url::$css ?>responsive.css" rel="stylesheet">
	<link href="<?php echo Url::$css ?>style_switcher.css" rel="stylesheet">
	<link href="<?php echo Url::$css ?>docs.css" rel="stylesheet">
	<link href="<?php echo Url::$css ?>dropkick.css" rel="stylesheet">
	<link href="<?php echo Url::$css ?>jquery.fancybox.css" rel="stylesheet">
	<link href="<?php echo Url::$css ?>fiesta.css" rel="stylesheet">-->

	<?php 
	Libs::css("bootstrap");
	Libs::css("flexslider");
	Libs::css("style");
	Libs::css("responsive");
	Libs::css("style_switcher");
	Libs::css("docs");
	Libs::css("dropkick");
	Libs::css("jquery");
	Libs::css("fiesta");


	 ?>

<script>
$(document).ready(function() {
  $('.slider-area').flexslider({
    animation: "slide",
    animationSpeed: 300,
    smoothHeight: true,
    slideshow: false,
  });
});
</script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link href="<?php echo Url::$css ?>colours/blue.css" rel="stylesheet">
<!-- Fav and touch icons -->
<link rel="shortcut icon" href="<?php echo Url::$img ?>icon/favicon.png">