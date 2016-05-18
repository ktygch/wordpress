<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<?php if(is_front_page()): ?>
		<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<?php else: ?>
		<title><?php wp_title('');?> | <?php bloginfo('name'); ?></title>
	<?php endif; ?>
	
	<link href="<?php bloginfo('template_directory'); ?>/css/bs/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/layout.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/design.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/slider-pro.min.css" rel="stylesheet">
	
	<?php /*ie8以前へのhtml5対応用スクリプト*/ ?>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<?php /*Adobe type kit*/ ?>
	<script src="//use.typekit.net/imj4zdo.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1385887718376393',
			xfbml      : true,
			version    : 'v2.4'
		});
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

	<div class="loader">
		<span class="logoarea">SOME SONG TEACHERS</span>
	</div>
	
	<div id="wrapper"><?php /*#wrapper ENDはfooter.php内*/ ?>
		<div class="socials">
			<ul>
				<li>
					<a href="https://www.facebook.com/somesongteachers" target="_blank">
						F
					</a>
				</li>
			</ul>
		</div>
		
		<?php if(is_front_page()): ?><?php /*トップページのみ以下*/ ?>
			<div id="header" class="topheader">
				<p class="catch"><span>OK, PARTY PEOPLE IN THE HOUSE</span></p>
				<h2><span>SST</span></h2>
				<h1 id="headH1"><span>SOME SONG TEACHERS</span></h1>
				<span class="scrolldown">CLICK</span>
			</div>
			<div id="topLogo">
				<span>SOME SONG TEACHERS</span>
			</div>
		<?php else: ?><?php /*それ以外*/ ?>
			<div id="header" class="fixed">
				<h1 id="headH1"><a href="<?php echo home_url('/'); ?>">SOME SONG TEACHERS</a></h1>
			</div>
		<?php endif; ?>
