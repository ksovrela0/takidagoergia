<?
include("db.php");

//EXPORT_DATABASE("localhost", "ks2", "N12345678", "takida" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Так И Да! Грузия</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" />
	<meta property="og:title" content="Так и ДА! Грузия" />
	<meta property="og:description" content="ПОЧЕМУ  СТОИТ ВЫБРАТЬ НАС - Мы предлагаем широкий спектр туров, подобранных под запросы самых разных клиентов! На любой вкус, возраст и финансовые возможности! Студенты, пенсионеры, семейные пары с детьми, молодожены, корпоративные сообщества  – все смогут подобрать  или составить оптимальный для себя тур! Все маршруты туров тщательно продуманы и пройдены. Каждый тур соответствует своим задачам и потребностям клиента, рассчитано время и продолжительность всех мероприятий. Мы внимательно следим за тем, чтобы не было никаких неприятных неожиданностей в уже начавшейся поездке. Поэтому заранее предупреждаем о возможных несоответствиях, например, в графике осмотра достопримечательностей! Нам важно, чтобы Вы успели посмотреть и посетить все запланированные места. " />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://takidageorgia.com" />
	<meta property="og:image" content="https://takidageorgia.com/logo.png" />
    <link rel="stylesheet" href="assets/css/min/bootstrap.min.css" media="all" >
    <link rel="stylesheet" href="assets/css/min/jqueryui.min.css" media="all" >
    <link rel="stylesheet" href="vendor/animate-css/animate.css" media="all" >
    <link rel="stylesheet" href="assets/font/iconfont/iconstyle.css" media="all" >
    <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.css" media="all" >
    <link rel="stylesheet" href="assets/css/main.css" media="all"  id="maincss">
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
    <script type="text/javascript" src="vendor/js-cookie/src/js.cookie.js"></script>
    <style id="moldcustomize">
    </style>

    

</head>
<body>

	
<div class="pre-loader">
  <div class="loading-img"></div>
</div>
<? include("social/soc.html"); ?>
<?
include("blocks/header.php");
?>
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<?
		$GetSlider = mysql_query("SELECT * FROM slider");
		$GetSliderRow = mysql_fetch_array($GetSlider);
		$i = 0;
		$b = 1;
		do
		{
			echo '<li><img src="'.$GetSliderRow[img].'" alt="'.$GetSliderRow[textUP].'" title="'.$GetSliderRow[textUP].'" id="wows1_'.$i.'"/></li>';
			$i++;
		}
		while($GetSliderRow = mysql_fetch_array($GetSlider));
		?>
	</ul></div>
	<div class="ws_bullets"><div>
		<?
		$GetSlider2 = mysql_query("SELECT * FROM slider");
		$GetSliderRow2 = mysql_fetch_array($GetSlider2);
		do
		{
			echo '<a href="#" title="'.$GetSliderRow2[textUP].'"><span>'.$b.'</span></a>';
			$b++;
		}
		while($GetSliderRow2 = mysql_fetch_array($GetSlider2));
		
		
		?>
	</div></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>

	

	
	
	<section class="showcase" style="background: url('assets/img/bg.html'); padding-bottom:0px; padding-top:40px;">
		<div class="main-title">
			<h2>Туры по Грузии</h2>
			<p></p>
		</div>
		<div class="container">

			<div class="row item">

				<?
				$GetTours = mysql_query("SELECT * FROM tours WHERE type='2' ORDER BY id DESC LIMIT 6");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							
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
						</div>	
							
							';
						}
						else
						{
							
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
													<div class="price">'.$GetToursR[price].'$</div>
													<a href="tour.php?id='.$GetToursR[id].'" class="btn btn-primary hvr-sweep-to-right">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</div>	';
							}
							while($GetToursR = mysql_fetch_array($GetTours));
						}
				?>
		

			</div>	

		</div>
	</section>
	
	
	<section class="showcase" style="background: url('assets/img/bg.html'); padding-bottom:0px; padding-top:40px;">
		<div class="main-title">
			<h2>Экскурсии</h2>
			<p></p>
		</div>
		<div class="container">

			<div class="row item">

				<?
				$GetTours = mysql_query("SELECT * FROM tours WHERE type='3' ORDER BY id DESC LIMIT 6");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							
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
						</div>	
							
							';
						}
						else
						{
							
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
													<div class="price">'.$GetToursR[price].'$</div>
													<a href="tour.php?id='.$GetToursR[id].'" class="btn btn-primary hvr-sweep-to-right">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</div>	';
							}
							while($GetToursR = mysql_fetch_array($GetTours));
						}
				?>
		

			</div>	

		</div>
	</section>
	<section class="showcase" style="background: url('assets/img/bg.html'); padding-bottom:0px; padding-top:40px;">
		<div class="main-title">
			<h2>Групповые туры</h2>
			<p></p>
		</div>
		<div class="container">

			<div class="row item">

				<?
				$GetTours = mysql_query("SELECT * FROM tours WHERE type='11' ORDER BY id DESC LIMIT 6");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							
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
						</div>	
							
							';
						}
						else
						{
							
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
													<div class="price">'.$GetToursR[price].'$</div>
													<a href="tour.php?id='.$GetToursR[id].'" class="btn btn-primary hvr-sweep-to-right">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</div>	';
							}
							while($GetToursR = mysql_fetch_array($GetTours));
						}
				?>
		

			</div>	

		</div>
	</section>

	<div class="banner">
		<div class="container">
			<div class="section-title center">
  <h3>Наши Сотрудники</h3>
</div>
<div class="row team">
		<?
		$GetGuids = mysql_query("SELECT * FROM guids ORDER BY id DESC");
		$GetGuidsR = mysql_fetch_array($GetGuids);
		do
		{
			echo '<div class="col-sm-6 col-md-4">
			<div class="member">
			  <div class="image" style="background-image: url(\''.$GetGuidsR[main_pic].'\'); height:350px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;">
				
			  </div>
			  <h4 class="name">'.$GetGuidsR[name].'</h4>
			  <h5 class="detail"></h5>
			  <p>'.$GetGuidsR[text].'</p>
			  
			</div>
		  </div>';
		}
		while($GetGuidsR = mysql_fetch_array($GetGuids));
		  
	    ?>
	  
  
</div>	
		</div>
	</div>



	
	




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


<link href="assets/css/controlpanel.css" rel="stylesheet">
<link href="vendor/colpick-jQuery-Color-Picker-master/css/colpick.css" rel="stylesheet"  type="text/css" />
<link href="vendor/colorpicker/css/evol-colorpicker.min.css" rel="stylesheet" type="text/css" />



<script src="vendor/colpick-jQuery-Color-Picker-master/js/colpick.js" type="text/javascript"></script>
<script src="vendor/colorpicker/js/evol-colorpicker.min.js" type="text/javascript"></script>
<script src="assets/js/min/controlpanel.min.js" type="text/javascript"></script>

	<!-- Current Page JS -->
	<script type="text/javascript" src="assets/js/min/home.min.js"></script>
<script type="text/javascript">

</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'BtMZaHxNd7';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>