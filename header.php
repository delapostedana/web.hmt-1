<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>PT Hidup Makmur Terencana - <?= $thisPage ?></title>
	<!-- Bootstrap CSS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="vendors/popup/magnific-popup.css">
	<link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
	<link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.css">
	<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
		rel="stylesheet">

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php 
	
		$no_wa = '6281388990505'; 
		$lang = 'id';
		$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
		if(isset($_GET['lang']) &&  $_GET['lang'] == 'en') {
			$lang = 'en';
		}
		$_GET['lang'] = $lang;
		$paramBuilder = '?' . http_build_query($_GET);
		$langParamBuilder = '?lang=' . $lang; 
		$url = strtok($actual_link, '?') . $paramBuilder;

		$menus = [
			'id' => [
				[
					'key'	=> 'home',
					'label'	=> 'Beranda',
					'link'	=> 'index.php'
				],
				[
					'key'	=> 'about-us',
					'label'	=> 'Tentang',
					'link'	=> 'about-us.php'
				],
				[
					'key'	=> 'gallery',
					'label'	=> 'Galeri',
					'link'	=> 'gallery.php'
				],
				[
					'key'	=> 'packages',
					'label'	=> 'Paket Wisata',
					'link'	=> 'packages.php'
				],
				[
					'key'	=> 'contact',
					'label'	=> 'Kontak',
					'link'	=> 'contact.php'
				],
				[
					'key'	=> 'news',
					'label'	=> 'Berita Terkini',
					'link'	=> 'news.php'
				]
			],
			'en' => [
				[
					'key'	=> 'home',
					'label'	=> 'Home',
					'link'	=> 'index.php'
				],
				[
					'key'	=> 'about-us',
					'label'	=> 'About Us',
					'link'	=> 'about-us.php'
				],
				[
					'key'	=> 'gallery',
					'label'	=> 'Gallery',
					'link'	=> 'gallery.php'
				],
				[
					'key'	=> 'packages',
					'label'	=> 'Packages',
					'link'	=> 'packages.php'
				],
				[
					'key'	=> 'contact',
					'label'	=> 'Contact',
					'link'	=> 'contact.php'
				],
				[
					'key'	=> 'news',
					'label'	=> 'News Update',
					'link'	=> 'news.php'
				]
			]
		];

		$global = [
			'btnPlayStore' => [
				'id' => 'GET IT ON PLAYSTORE',
				'en' => 'GET IT ON PLAYSTORE'
			]
		];
	
	?>
		<section class="top-btn-area">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.php<?=$langParamBuilder?>"><img src="img/logo.png" style="width: 100px;" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<ul class="navbar-nav mr-auto" style="font-size: 12pt;">
						<?php foreach($menus[$lang] as $menu) { ?>
							<li class="nav-item <?php if($thisPage == $menu['key']) echo "active"; ?>">
								<a class="nav-link" href="<?= $menu['link'] . $langParamBuilder ?>"><?= $menu['label'] ?></a>
							</li>
						<?php } ?>
						<li class="nav-item">
							<select class="nice-select" id="lang">
								<option value="en" <?= $lang == 'en' ? 'selected' : '' ?> class="lang-en"> <img src="img/flag-eng.jpg" width="20px" alt=""> English</option>
								<option value="id" <?= $lang == 'id' ? 'selected' : '' ?> class="lang-in"><img src="img/flag-indo.png" width="20px" alt=""> Indonesia</option>
							</select>
						</li>

					</ul>
					<div class="my-2 my-lg-0 text-center find-me">
					<a href="#" class="main_btn">
						<img src="img/playstore.png" style="width: 25px; right: 180px;" alt="">
						<span style="margin-left: 20px;"> <?= $global['btnPlayStore'][$lang] ?></span>
					</a>
					</div>
				</div>
			</div>
		</nav>
	</section>
	<a href="https:wa.me/<?= $no_wa ?>?text=Halo%20Admin" target="_BLANK">
            <img src="img/whatsapp.svg" class="wabutton" alt="Whatsapp-Button" />
        </a>