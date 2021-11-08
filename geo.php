<?
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

<?
include("blocks/header.php");
?>
	<section class="page-img" style="background-image: url('assets/img/home_img/mountain.jpg');">
		<div class="main-title">
			<h1>Так и ДА! Грузия</h1>
			<p>О Компании / Отзывы / Наши Гиды / Наш Автопарк</p>
		</div>
	</section>

<?
if($_GET[id] == 1)
{
	echo '<div class="container">
		<div class="section row">';
			
			$GetAbout = mysql_query("SELECT * FROM about WHERE id='1'");
			$GetAboutR = mysql_fetch_array($GetAbout);
			
			echo $GetAboutR[text];
				
			
		echo '</div>
	</div>';
	
}
	?>
	<?
	if($_GET[id] == 6)
	{
		echo '<section style="padding-bottom:0px; padding-top:40px">
		<div class="container">
			<div class="main-title">
				<h2>Отзывы</h2>
				<p>Отзывы от наших постоянных клиентов</p>
			</div>
			<div class="row">
				<div class="testimonial boxed">';
				
					$GetTest = mysql_query("SELECT * FROM testimonials ORDER BY id DESC LIMIT 9");
					$GetTestR = mysql_fetch_array($GetTest);
					do
					{
						echo '<div class="col-sm-4">
							<div style="padding-bottom: 70px;">
								<img src="'.$GetTestR[main_pic].'" alt="" class="avatar">
								<div class="name">'.$GetTestR[name].'</div>
								<p>'.$GetTestR[text].'</p>
									<br>
									<div class="gallery" id="trip-gallery-1">
										<div class="col-sm-4">
											<a href="'.$GetTestR[pic1].'" class="gallery-item" data-lightbox="trip-detail-gallery">
											<img src="'.$GetTestR[pic1].'" alt="..." class="img-responsive" >
											<div class="hover-overlay">
											<span class="icon-search"></span>
											</div>
											</a>
										</div>
										<div class="col-sm-4">
											<a href="'.$GetTestR[pic2].'" class="gallery-item" data-lightbox="trip-detail-gallery">
											<img src="'.$GetTestR[pic2].'" alt="..." class="img-responsive" >
											<div class="hover-overlay">
											<span class="icon-search"></span>
											</div>
											</a>
										</div>
										<div class="col-sm-4">
											<a href="'.$GetTestR[pic3].'" class="gallery-item" data-lightbox="trip-detail-gallery">
											<img src="'.$GetTestR[pic3].'" alt="..." class="img-responsive" >
											<div class="hover-overlay">
											<span class="icon-search"></span>
											</div>
											</a>
										</div>
									</div>
							</div>
						</div>';
					}
					while($GetTestR = mysql_fetch_array($GetTest));
					
					
					
					
					
				echo '</div>
			</div>
		</div>
	</section>';
	}
	?>
	<?
	if($_GET[id] == 2)
	{
		echo '<section style="padding-bottom:0px; padding-top:40px">
			<div class="container">
				<div class="main-title">
					<h2>Наши Гиды</h2>
					<p>Наши гиды, настоящии ходячии учебники по истории, помогут понять всю историю месности</p>
				</div>
				<div class="row">
					<div class="testimonial boxed">';
					
						$GetGuids = mysql_query("SELECT * FROM guids ORDER BY id DESC");
						$GetGuidsR = mysql_fetch_array($GetGuids);
						do
						{
							echo '<div class="col-sm-4">
							<div>
								<img src="'.$GetGuidsR[main_pic].'" alt="" class="avatar">
								<div class="name">'.$GetGuidsR[name].'</div>
								<p>'.$GetGuidsR[text].'</p>

							</div>
						</div>';
						}
						while($GetGuidsR = mysql_fetch_array($GetGuids));
						
						
						
					echo '</div>
				</div>
			</div>
		</section>';
	}
	?>
	<?
	if($_GET[id] == 3)
	{
		echo '<section style="padding-bottom:0px; padding-top:40px">
			<div class="main-title">
				<h1>Наш Автопарк</h1>
				<p></p>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="gallery" id="trip-gallery-1">';
						$GetCars = mysql_query("SELECT * FROM cars ORDER BY id DESC");
						$GetCarsR = mysql_fetch_array($GetCars);
						do
						{
							echo '
							<div class="col-sm-3">
							<a href="'.$GetCarsR[pic].'" class="gallery-item" data-lightbox="trip-detail-gallery">
								<img src="'.$GetCarsR[pic].'" style="width:438px; height:292px;" alt="..." class="img-responsive" >
								<div class="hover-overlay">
									<span class="icon-search"></span>
								</div>
							</a>
						</div>
							';
						}
						while($GetCarsR = mysql_fetch_array($GetCars));
						
						
					echo '</div>
				</div>
			</div>
		</section>';
	}
	?>
	<?
	if($_GET[id] == 5)
	{
		echo '<section style="padding-bottom:0px; padding-top:40px">
			<div class="container">
				<div class="main-title">
					<h2>Наши Партнеры</h2>
					<p></p>
				</div>
				<div class="row">
					<div class="testimonial boxed">';
					
						$GetPartners = mysql_query("SELECT * FROM partners ORDER BY id DESC");
						$GetPartnersR = mysql_fetch_array($GetPartners);
						do
						{
							echo '<div class="col-sm-4">
							<div>
								<img src="'.$GetPartnersR[main_pic].'" alt="" class="avatar">
								<div class="name">'.$GetPartnersR[name].'</div>
								<p>'.$GetPartnersR[text].'</p>

							</div>
						</div>';
						}
						while($GetPartnersR = mysql_fetch_array($GetPartners));
						
						
						
					echo '</div>
				</div>
			</div>
		</section>';
	}
	?>
	<?
	if($_GET[id] == 4)
	{
		$GetTours = mysql_query("SELECT * FROM hotels ORDER BY id DESC");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							<div class="main-title">
				<h1>Гостиницы</h1>
				<p></p>
			</div>
					<div class="row item">
					<div class="col-sm-6 col-md-4">
							<div class="item-grid">
								<div class="item-img" style="background-image: url();">	
									<div class="item-overlay">
										<a href="№"><span class="icon-binocular"></span></a>
									</div>
								</div>
								<div class="item-desc">
									<div class="item-info">
										
										<h4 class="title"><a href="#">Не Найдено</a></h4>
									</div>

									<div class="sub-title">
										<span class="location">Не Найдено</span>
										<span class="grade">Не Найдено</span>
									</div>

									<div class="item-detail">
										<div class="left">
											<div class="day"><span class="icon-sun"></span>Не Найдено</div>
											<div class="night"><span class="icon-moon"></span>Не Найдено</div>
										</div>
										<div class="right">
											<div class="price">Не Найдено</div>
											<a href="№" class="btn btn-primary hvr-sweep-to-right">Не Найдено</a>
										</div>
									</div>
								</div>
							</div>
						</div>	</div>
							
							';
						}
						else
						{
							echo '
					<div class="row item">';
							$GetToursR = mysql_fetch_array($GetTours);
							do
							{
										echo '<div class="col-sm-6 col-md-4">
									<div class="item-grid">
										<div class="item-img" style="background-image: url(\''.$GetToursR[main_pic].'\');">	
											<div class="item-overlay">
												<a href="tour.php?id='.$GetToursR[id].'"><span class="icon-binocular"></span></a>
											</div>
										</div>
										<div class="item-desc">
											<div class="item-info">
												
												<h4 class="title"><a href="tour.php?id='.$GetToursR[id].'">'.$GetToursR[name].'</a></h4>
											</div>

											<div class="sub-title">
												<span class="location">'.$GetToursR[location].'</span>
												
											</div>

											<div class="item-detail">
												<div class="left">
													<div class="day"><span class="icon-sun"></span>'.$GetToursR[duration].'</div>
												</div>
												<div class="right">
													<div class="price">GEL '.$GetToursR[price].'</div>
													<a href="tour.php?id='.$GetToursR[id].'" class="btn btn-primary hvr-sweep-to-right">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</div>	';
								
							}
							while($GetToursR = mysql_fetch_array($GetTours));
							echo '</div>';
							
						}
						
						
	}
	?>
	<?
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

</body>
</html>