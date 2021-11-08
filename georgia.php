<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>О Грузии</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" />
<meta property="og:title" content="Так и ДА! Грузия" />
	<meta property="og:description" content="ПОЧЕМУ  СТОИТ ВЫБРАТЬ НАС - Мы предлагаем широкий спектр туров, подобранных под запросы самых разных клиентов! На любой вкус, возраст и финансовые возможности! Студенты, пенсионеры, семейные пары с детьми, молодожены, корпоративные сообщества  – все смогут подобрать  или составить оптимальный для себя тур! Все маршруты туров тщательно продуманы и пройдены. Каждый тур соответствует своим задачам и потребностям клиента, рассчитано время и продолжительность всех мероприятий. Мы внимательно следим за тем, чтобы не было никаких неприятных неожиданностей в уже начавшейся поездке. Поэтому заранее предупреждаем о возможных несоответствиях, например, в графике осмотра достопримечательностей! Нам важно, чтобы Вы успели посмотреть и посетить все запланированные места. " />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://takidageorgia.com" />
	<meta property="og:image" content="http://takidageorgia.com/logo.png" />
    <link rel="stylesheet" href="assets/css/min/bootstrap.min.css" media="all" >
    <link rel="stylesheet" href="assets/css/min/jqueryui.min.css" media="all" >
    <link rel="stylesheet" href="vendor/animate-css/animate.css" media="all" >
    <link rel="stylesheet" href="assets/font/iconfont/iconstyle.css" media="all" >
    <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.css" media="all" >
    <link rel="stylesheet" href="assets/css/main.css" media="all"  id="maincss">

    <script type="text/javascript" src="vendor/js-cookie/src/js.cookie.js"></script>
    <style id="moldcustomize">
    </style>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-83435216-1', 'auto');
        ga('send', 'pageview');

    </script></head>
<body>
	
<div class="pre-loader">
  <div class="loading-img"></div>
</div>
<?php include("social/soc.html"); ?>
<?php
include("blocks/header.php");
?>
	<section class="page-img" style="background-image: url('assets/img/home_img/mountain.jpg');">
		<div class="main-title">
			<h1><?php
			if($_GET[id] == 1)
			{
				echo 'О Стране';
			}
			if($_GET[id] == 2)
			{
				echo 'Регионы';
			}
			if($_GET[id] == 3)
			{
				echo 'Памятка туристу';
			}
			?></h1>
			<p>О Грузии</p>
		</div>
	</section>

	<?php
	if($_GET[id] == 1)
	{
		echo '<div class="container">
			<div class="section row">';
				
				$GetAbout = mysql_query("SELECT * FROM georgia WHERE id='1'");
				$GetAboutR = mysql_fetch_array($GetAbout);
				
				echo $GetAboutR[strana];
					
				
			echo '</div>
		</div>';
		
	}
	?>
	<?php
	if($_GET[id] == 2)
	{
		echo '<div class="container">
			<div class="section row">';
				
				$GetAbout = mysql_query("SELECT * FROM georgia WHERE id='1'");
				$GetAboutR = mysql_fetch_array($GetAbout);
				
				echo $GetAboutR[regioni];
					
				
			echo '</div>
		</div>';
		
	}
	?>
	<?php
	if($_GET[id] == 3)
	{
		echo '<div class="container">
			<div class="section row">';
				
				$GetAbout = mysql_query("SELECT * FROM georgia WHERE id='1'");
				$GetAboutR = mysql_fetch_array($GetAbout);
				
				echo $GetAboutR[tur];
					
				
			echo '</div>
		</div>';
		
	}
	?>

	<?php
	include("blocks/footer.php");
	?>

<script type="text/javascript" src="vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="vendor/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="vendor/retina.min.js"></script>
<script type="text/javascript" src="assets/js/min/responsivetable.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-tabcollapse.html"></script>

<script type="text/javascript" src="assets/js/min/countnumbers.min.js"></script>
<script type="text/javascript" src="assets/js/min/main.min.js"></script>




<script src="vendor/colpick-jQuery-Color-Picker-master/js/colpick.js" type="text/javascript"></script>
<script src="vendor/colorpicker/js/evol-colorpicker.min.js" type="text/javascript"></script>
<script src="assets/js/min/controlpanel.min.js" type="text/javascript"></script>
	<!-- Current Page JS -->
	<script type="text/javascript" src="assets/js/min/about.min.js"></script>
	<script type="text/javascript" src="assets/js/min/step_timeline.min.js"></script>
	<script type="text/javascript" src="vendor/lightbox/js/lightbox.js"></script>
	<script type="text/javascript" src="assets/js/min/img_gallery.min.js"></script>
<script type='text/javascript'>
(function(){ var widget_id = 'BtMZaHxNd7';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
</body>
</html>