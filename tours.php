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
    <title><?
	if($_GET[id] == 1)
	{
		echo 'Паломнические туры';
	}
	if($_GET[id] == 2)
	{
		echo 'Индивидуальные Туры';
	}
	if($_GET[id] == 3)
	{
		echo 'Экскурсии';
	}
	if($_GET[id] == 4)
	{
		echo 'Туры Грузия-Армения-Азербайджан';
	}
	if($_GET[id] == 10)
	{
		echo 'Школьные туры';
	}
	if($_GET[id] == 11)
	{
		echo 'Групповые туры';
	}
	if(empty($_GET[id]))
	{
		echo 'Туры';
	}
	?></title>
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

    </script>
</head>
<body>
	
<div class="pre-loader">
  <div class="loading-img"></div>
</div>
<? include("social/soc.html"); ?>
<?
include("blocks/header.php");
?>
	
	
	<?
	if($_GET[id] == 1)
	{
		echo '<section class="page-img" style="background-image: url(\'back/1.jpg\');">';
	}
	if($_GET[id] == 2)
	{
		echo '<section class="page-img" style="background-image: url(\'back/2.jpg\');">';
	}
	if($_GET[id] == 3)
	{
		echo '<section class="page-img" style="background-image: url(\'back/3.jpg\');">';
	}
	if($_GET[id] == 4)
	{
		echo '<section class="page-img" style="background-image: url(\'back/5.jpg\');">';
	}
	if($_GET[id] == 10)
	{
		echo '<section class="page-img" style="background-image: url(\'back/5.jpg\');">';
	}
	if($_GET[id] == 11)
	{
		echo '<section class="page-img" style="background-image: url(\'back/3.jpg\');">';
	}
	if(empty($_GET[id]))
	{
		echo '<section class="page-img" style="background-image: url(\'back/4.jpg\');">';
	}
	?>
		<div class="container">
			<div class="col-sm-8">
				<h1 class="main-head"><?
	if($_GET[id] == 1)
	{
		echo 'Паломнические туры';
	}
	if($_GET[id] == 2)
	{
		echo 'Индивидуальные Туры';
	}
	if($_GET[id] == 3)
	{
		echo 'Экскурсии';
	}
	if($_GET[id] == 4)
	{
		echo 'Туры Грузия-Армения-Азербайджан';
	}
	if($_GET[id] == 10)
	{
		echo 'Школьные туры';
	}
	if($_GET[id] == 11)
	{
		echo 'Групповые туры';
	}
	if(empty($_GET[id]))
	{
		echo 'Туры';
	}
	?></h1>
				<h5 class="sub-head"></h5>
			</div>
			<div class="col-sm-4">
				<ul class="breadcrumb">
					<li><a href="#"><span class="icon-home"></span></a></li>
					<li><a href="#"><?
	if($_GET[id] == 1)
	{
		echo 'Паломнические туры';
	}
	if($_GET[id] == 2)
	{
		echo 'Индивидуальные Туры';
	}
	if($_GET[id] == 3)
	{
		echo 'Экскурсии';
	}
	if($_GET[id] == 4)
	{
		echo 'Туры Грузия-Армения-Азербайджан';
	}
	if($_GET[id] == 10)
	{
		echo 'Школьные туры';
	}
	if($_GET[id] == 11)
	{
		echo 'Групповые туры';
	}
	if(empty($_GET[id]))
	{
		echo 'Туры';
	}
	?></a></li>
				</ul>
			</div>

		</div>
	</section>

	<main>
		<div class="container">
			<div class="row">
				

				
					
					<?
					if($_GET[id] == 1)
					{
						$GetTours = mysql_query("SELECT * FROM tours WHERE type='1' ORDER BY id DESC");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
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
						</div>	
							
							';
						}
						else
						{
							echo '<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
					</div>
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
						
					}
					else if($_GET[id] == 2)
					{
						$GetTours = mysql_query("SELECT * FROM tours WHERE type='2' ORDER BY id DESC");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						<div class="toogle-view">
							<a href="trip_list.html" class="icon icon-list"></a>
							<a href="trip_grid_withsidebar.html" class="icon icon-grid active"></a>
						</div>
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
						</div>	
							
							';
						}
						else
						{
							echo '<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
					</div>
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
					}
					else if($_GET[id] == 3)
					{
						$GetTours = mysql_query("SELECT * FROM tours WHERE type='3' ORDER BY id DESC");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
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
						</div>	
							
							';
						}
						else
						{
							echo '<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
					</div>
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
					}
					else if($_GET[id] == 4)
					{
						$GetTours = mysql_query("SELECT * FROM tours WHERE type='4' ORDER BY id DESC");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
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
						</div>	
							
							';
						}
						else
						{
							echo '<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
					</div>
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
					}
					else if($_GET[id] == 11)
					{
						$GetTours = mysql_query("SELECT * FROM tours WHERE type='11' ORDER BY id DESC");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
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
						</div>	
							
							';
						}
						else
						{
							echo '<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
					</div>
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
					}
					else if($_GET[id] == 10)
					{
						$GetTours = mysql_query("SELECT * FROM tours WHERE type='10' ORDER BY id DESC");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
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
						</div>	
							
							';
						}
						else
						{
							echo '<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
					</div>
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
					}
					else
					{
						$GetTours = mysql_query("SELECT * FROM tours ORDER BY id DESC");
						$GetToursC = mysql_num_rows($GetTours);
						if($GetToursC == 0)
						{
							echo '
							<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
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
						</div>	
							
							';
						}
						else
						{
							echo '<div class="sort-wrap">
						<div class="sort-title">Найдено результатов: <b>'.$GetToursC.'</b></div>
						
					</div>
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
					}
					
					?>
							

					</div>	
					


				
			</div>
		</div>
	</main>

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
	<script type="text/javascript" src="assets/js/min/priceslider.min.js"></script>
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