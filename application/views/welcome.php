<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>NoteWorthyEvent - События, заслуживающие внимания</title>
    <meta charset="UTF-8">
    <meta name="description" content="Проект, с множеством возможностей для организации и проведения мероприятий.">
    <meta name="author" content="NoteWortyEvent" />
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
 <body>
 	<img style="position:absolute; width: 0px; margin-left: 0px" src="assets/img/ProNWE_logo.png">
	<div class="pl">
		<div class="round1"></div>
		<div class="pl_r"></div>
		<div class="pl_l"></div>
	</div>
    
	<ul id="menu">
		<li class="menu__li" data-menuanchor="Welcome"><a class="menu__a" href="#Welcome">Приветствие</a></li>
		<li class="menu__li" data-menuanchor="About"><a class="menu__a" href="#About">О нас</a></li>
		<li class="menu__li" data-menuanchor="forwhom"><a class="menu__a" href="#forwhom">Глазами пользователей</a></li>
		<li class="menu__li" data-menuanchor="Feedback"><a class="menu__a" href="#Feedback">Обратная связь</a></li> 
	</ul>  
    
	<div id="fullpage">
		<div class="p1 section" id="section0" data-anchor="Welcome">
			<div id="login">
				<img src="assets/img/ProNWE_logo.svg" class="mobile_logo">
				<!--<div class="button1"> <a href="<?=URL::site('auth'); ?>">Авторизация</a></div>-->
				<div class="button1"> <a class="ev">Мероприятия</a></div>
			</div>
			<div class="p_left">
				<div class="p1_logo">
					<img src="assets/img/ProNWE_logo.svg" width="70%">
				</div>
				<div class="p1_slogan">
					<h1>Информационная поддержка мероприятий</h1>
				</div>
				<div class="p1_down">
					<a class="tooltips" href="#About">
						<span>Подробнее</span>
						<i class="p1_center fa fa-angle-double-down fa-5x"></i>
					</a>
				</div>
			</div>
		</div>
      
		<div class="p2 section" id="section1" data-anchor="About">
			<div class="p2_title lightbox">
				<h2>Что такое <a href="http://pronwe.ru" class="pronwe_Link-small pronwe_color">NWE</a>?</h2>
			</div>
			<ul class="side-container">
				<li class="lightbox"><span>Автоматизированная система выставления баллов</span></li><br>
				<li class="lightbox"><span>Рейтинг участников в режиме онлайн</span></li><br>
				<li class="lightbox"><span>Гарантия неподдельности выставленных баллов</span></li>
			</ul>
		</div>
      
		<div class="p3 section" id="section2" data-anchor="forwhom">
			<div class="container">
				<div id="slide_0" class="slides">
					<div class="col-6 text-center p3_left">
						<img class="p3_img" src="assets/img/p3_1.png">
					</div>
					<div class="col-6 text-center p3_right">
						<h2>Организатору</h2>
						<p class="p3_text">Предоставляется удобная панель создания сценария мероприятия, заполнения информации о действующих лицах, формирования формул для подсчета баллов и администрирования мероприятия.</p>
					</div>
				</div>
				<div style="display:none;" id="slide_1" class="slides">
					<div class="col-6 text-center p3_left">
						<img class="p3_img" src="assets/img/p3_2.png">
					</div>
					<div class="col-6 text-center p3_right">
						<h2>Жюри</h2>
						<p class="p3_text">Предоставляется возможность выставлять баллы со своего смартфона, делать заметки участникам, просматривать баллы при обсуждении с коллегами.</p>
					</div>
				</div>
				<div style="display:none;" id="slide_2" class="slides">
					<div class="col-6 text-center p3_left">
						<img class="p3_img" src="assets/img/p3_3.png">
					</div>
					<div class="col-6 text-center p3_right">
						<h2>Гостям</h2>
						<p class="p3_text">Предоставляется возможность просматривать основную информацию о мероприятии, а также результаты участников сразу после их выставления.</p>
					</div>
				</div>
			</div>
			<div class="selector text-center">
				<input type="radio" name="sliderSelector" id="selector_0" checked></input>
				<input type="radio" name="sliderSelector" id="selector_1"></input>
				<input type="radio" name="sliderSelector" id="selector_2"></input>
			</div>
		</div>
	
		<div class="p4 section" id="section3" data-anchor="Feedback">
			<div class="getready text-center">
				<h2 class="quote">Запуск проекта запланирован на декабрь!</h2>
				<p>Несмотря на то, что проект <a class="pronwe_Link-small pronwe_color" href="http://pronwe.ru">NWE</a> разрабатывается, уже сегодня существует тестовая версия, где Вы можете оценить все преимущества! Для этого свяжитесь с нами любым удобным для Вас способом.</p>

				<ul class="connection">
					<li>
						<a href="mailto:turov96@ya.ru">
							<em class="fa fa-2x fa-envelope-o"></em>
						</a>
					</li>
					<li>
						<a href="//twitter.com/NWE_team">
							<em class="fa fa-2x fa-twitter"></em>
						</a>
					</li>
					<li>
						<a href="//vk.com/nwe_team">
							<em class="fa fa-2x fa-vk"></em>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77163890-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter34278825 = new Ya.Metrika({ id:34278825, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/34278825" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</html>
