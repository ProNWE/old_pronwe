<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Votepad - cобытия, заслуживающие внимания</title>
    <link type="image/x-icon" rel="shortcut icon" href="//votepad.ru/assets/img/favicon.png" />
    <meta charset="UTF-8">
    <meta name="description" content="Проект, с множеством возможностей для организации и проведения мероприятий.">
    <meta name="author" content="Votepad" />
    <meta name="keywords"  content="noteworthy,event,мероприятие,конкурс,организатор,жюри,судья,рейтинг" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Стили -->
    <link rel="stylesheet" type="text/css" href="<?=URL::base(); ?>assets/css/pronwe.css">
    <link rel="stylesheet" type="text/css" href="<?=URL::base(); ?>assets/vendor/animate.css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?=URL::base(); ?>assets/vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=URL::base(); ?>assets/vendor/jquery.cycle2/jquery.fullPage.css">
    <link rel="stylesheet" type="text/css" href="<?=URL::base(); ?>assets/css/welcome.css">
    <link rel="stylesheet" type="text/css" href="<?=URL::base(); ?>assets/vendor/sweetalert/dist/sweetalert.css">

    <!-- Подключаем скрипты -->
	<script src="<?=URL::base(); ?>assets/vendor/jquery/dist/jquery.js"></script>
    <script src="<?=URL::base(); ?>assets/vendor/jquery.cycle2/jquery.fullPage.js"></script>
    <script src="<?=URL::base(); ?>assets/js/welcome.js"></script>
	<script src="<?=URL::base(); ?>assets/vendor/jquery.cycle2/jquery.cycle2.js"></script>
	<script src="<?=URL::base(); ?>assets/vendor/bootstrap/dist/js/bootstrap.js"></script>
	<script src="<?=URL::base(); ?>assets/vendor/sweetalert/dist/sweetalert.min.js"></script>

	</head>
 <body style="user-select: none">
 	<img style="position:absolute; width: 0px; margin-left: 0px" src="assets/img/ProNWE_logo.png">
	<div class="pl">
		<div class="round1"></div>
		<div class="pl_r"></div>
		<div class="pl_l"></div>
	</div>
    
	<ul id="menu">
		<li class="menu__li" data-menuanchor="Welcome"><a class="menu__a" href="#Welcome">Главная</a></li>
		<li class="menu__li" data-menuanchor="About"><a class="menu__a" href="#About">О нас</a></li>
	</ul>  
    
	<div id="fullpage">
		<div class="p1 section" id="section0" data-anchor="Welcome">
			<div id="login">
				<a href="//votepad.ru/#events" class="button1" style="line-height: 1.5em; color: white; text-align: center; padding: 5px 20px 7px 20px !important; text-decoration: none;">Мероприятия</a>
			</div>
			<div class="p_left">
				<div class="p1_slogan">
					<h1>Информационная поддержка мероприятий</h1>
				</div>
				<div class="p1_down">
					<a class="tooltips" href="#About">

						<i class="p1_center fa fa-angle-double-down fa-5x"></i>
					</a>
				</div>
			</div>
		</div>
      
		<div class="p2 section" id="section1" data-anchor="About">
			<div class="p2_title lightbox">
				<h2>Что такое <a href="//votepad.ru" class="pronwe_Link-small pronwe_color">Votepad</a>?</h2>
			</div>
			<ul class="side-container">
				<li class="lightbox"><span>Автоматизированная система выставления баллов</span></li><br>
				<li class="lightbox"><span>Рейтинг участников в режиме онлайн</span></li><br>
				<li class="lightbox"><span>Гарантия неподдельности выставленных баллов</span></li>
			</ul>
		</div>
	</div>

</body>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter34278825 = new Ya.Metrika({ id:34278825, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/34278825" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</html>
