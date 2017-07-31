<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('Pebblewood Pawn Shop'); ?></title>
      <meta name="description" content="Pebblewood Pawn Shop is your go-to store for new and used jewelry, electronics, and other treasures!">
      <meta name="keywords" content="Naperville, pawn shop, gold, silver, cash for gold, jewelry, electronics">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Serif:400,700" rel="stylesheet">



		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-103683353-1', 'auto');
      ga('send', 'pageview');

    </script>
    <div id="greenbar">
    </div>

    <header>
      <div id="logo">
        <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/img/logo-01.png" alt="Pebblewood Pawn Shop" title="Pebblewood Pawn Shop"></a>
      </div>

    </header>

    <nav>
      <ul>
          <li><a href="/home">HOME</a></li>
          <li><a href="/about">ABOUT</a></li>
          <li><a href="/services">SERVICES</a></li>
          <li><a href="/contact">CONTACT</a></li>
          <li><a href="#">BLOG</a></li>
      </ul>
    </nav>

</html>
