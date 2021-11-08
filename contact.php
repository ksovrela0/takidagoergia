<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Контактные Данные</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" />
<meta property="og:title" content="Так и ДА! Грузия" />
	<meta property="og:description" content="ПОЧЕМУ  СТОИТ ВЫБРАТЬ НАС - Мы предлагаем широкий спектр туров, подобранных под запросы самых разных клиентов! На любой вкус, возраст и финансовые возможности! Студенты, пенсионеры, семейные пары с детьми, молодожены, корпоративные сообщества  – все смогут подобрать  или составить оптимальный для себя тур! Все маршруты туров тщательно продуманы и пройдены. Каждый тур соответствует своим задачам и потребностям клиента, рассчитано время и продолжительность всех мероприятий. Мы внимательно следим за тем, чтобы не было никаких неприятных неожиданностей в уже начавшейся поездке. Поэтому заранее предупреждаем о возможных несоответствиях, например, в графике осмотра достопримечательностей! Нам важно, чтобы Вы успели посмотреть и посетить все запланированные места. " />
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

    </script>
</head>
<body>
<?php include("social/soc.html"); ?>	
<div class="pre-loader">
  <div class="loading-img"></div>
</div>

<?php
include("blocks/header.php");
?>


	<section class="page-img" style="background-image: url('assets/img/home_img/mountain.jpg');">
		<div class="main-title">
			<h1>Контакты</h1>
			<p>Свяжитесь с нами</p>
		</div>
	</section>


	<section class="white">
		<div class="container">
			<div class="">
				<div class="row">
					<div class="col-sm-4">
						<div class="feature-list center">
							<span class="square-icon" style="background:white;width: 95px;height: 70px;"><img src="flags/ge.png" width="95" height="70"></span>
							<div class="desc" style="word-wrap: break-word;">
								<h3>Мы в Грузии</h3>
								<h5>+(995)597039122</h5>
								<h5>takidageorgia@yandex.com</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="feature-list center">
							<span class="square-icon" style="background:white;width: 95px;height: 70px;"><img src="flags/ru.png" width="95" height="70"></span>
							<div class="desc" style="word-wrap: break-word;">
								<h3>Мы в России</h3>
								<h5>+7(902)2500142</h5>
								<h5>takidageorgia@yandex.com</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="feature-list center">
							<span class="square-icon" style="background:white;width: 95px;height: 70px;"><img src="flags/kz.png" width="95" height="70"></span>
							<div class="desc" style="word-wrap: break-word;">
								<h3>Мы в Казахстане</h3>
								<h5>+7(776)127-44-86</h5>
								<h5>takidageorgia@yandex.com</h5>
							</div>
						</div>
					</div>
					
				</div>

			</div>
			
		</div>
	</section>
	<form id="ajax-contact" method="post" action="contact_send_mail.php">
					<div id="form-messages" class="alert" role="alert" style="display: none;"></div>
					
					<div class="row">	
						<div class="col-sm-6">
							<div class="form-group">
								<label for="name">Full Name</label>
								<input type="text" name="name" class="form-control" placeholder="Full Name" required="">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Email Address" required="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="message">Message</label>
								<textarea name="message" class="form-control">Your Message</textarea>
							</div>
						</div>
					</div>
					<div class="row">	
						<div class="col-sm-12">
							<button type="submit" class="btn btn-primary hvr-sweep-to-right">Submit</button>
						</div>
					</div>
				</form>



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



	<!-- Current Page JS || Ajax Contact -->
	<script type="text/javascript" src="assets/js/contact_mail.js"></script>


	<!-- Current Page JS -->
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