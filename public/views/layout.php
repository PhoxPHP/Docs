<!DOCTYPE html>
<html class="ui" lang="en">
<head>
	<title>#contain<"title"></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="PhoxPHP - Lightweight, modern PHP framework. This framework helps you to build websites and web applications without a sweat. Official PhoxPHP website.">
	<meta name="keywords" content="PhoxPHP, PHP, PHP framework">
	<meta property="og:title" content=#contain<"title">/>
	<meta property="og:url" content="#{siteUrl()}"/>
	<meta property="og:image" content="#{siteUrl('assets/img/logo.png')}"/>
	<meta property="og:type" content="website"/>
	<meta http-equiv="expires" content="date">
	<meta http-equiv="expires" content="sun, 20 may 2018 12:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="window-target" content="_top">
	<link rel="stylesheet" type="text/css" href="#{siteUrl('assets/css/bootstrap.css')}">
	<link rel="stylesheet" type="text/css" href="#{siteUrl('assets/css/docs.css')}">
	<link rel="stylesheet" type="text/css" href="#{siteUrl('assets/css/iziModal.min.css')}">
	<link rel="shortcut icon" href="#{siteUrl('assets/img/201805/favicon/favicon.ico')}" type="image/x-icon">
	<link rel="shortcut icon" href="#{siteUrl('assets/img/201805/favicon/favicon.ico')}" type="image/x-icon">
	<link href="https://unpkg.com/ionicons@4.1.1/dist/css/ionicons.min.css" type="text/css" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112983054-1"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-112983054-1');
	</script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-8753280927880003",
			enable_page_level_ads: true
		});
	</script>
</head>
#contain<"misc">
<body class="ui-body" title='#contain<"title">'>
	<header class="ui-body-header col-12">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="ui-body-header-index">
						<a href="#{siteUrl()}">
							<img src="#{siteUrl('assets/img/201805/logo.png')}" alt="PhoxPHP logo">
						</a>
						<span id="uiMenuToggle">
							<img src="#{siteUrl('assets/img/menu.svg')}" alt="PhoxPHP">
						</span>
					</div>
					<div class="ui-body-header-last" id="uiMenuTarget">
						<ul>
							<li>
								<a href="#{siteUrl('docs/latest')}">Docs</a>
							</li>
							<li>
								<a href="#{siteUrl('docs/contributing')}">Contribute</a>
							</li>
							<li>
								<a href="https://github.com/PhoxPHP/phoxphp/archive/develop.zip" target="_blank">Download</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<div class="ui-body-layout">
		<div class="ui-body-layout-container">
			#contain<"content">
		</div>
	</div>
	<footer class="ui-body-footer">
		<ul>
			<li>
				<a href="https://github.com/PhoxPHP" target="_blank">View on github</a>
			</li>
		</ul>
		<p>
			Follow PhoxPHP on:
		</p>
		<ul>
			<li class="inline">
				<a href="https://facebook.com/PhoxFramework" target="_blank"><i class="icon ion-logo-facebook"></i></a>
				<a href="https://twitter.com/PhoxPHFramework" target="_blank"><i class="icon ion-logo-twitter"></i></a>
				<a href="https://github.com/PhoxPHP" target="_blank"><i class="icon ion-logo-github"></i></a>
			</li>
		</ul>
	</footer>
	<script type="text/javascript" src="#{siteUrl('assets/js/jquery.js')}"></script>
	<script type="text/javascript" src="#{siteUrl('assets/js/docs.js')}"></script>
	<script type="text/javascript" src="#{siteUrl('assets/js/iziModal.min.js')}"></script>
	<script type="text/javascript">
		docs.use(window.label);
	</script>
	#contain<"scripts">
</body>
</html>