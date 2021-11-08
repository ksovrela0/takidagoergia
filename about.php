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
    <title>О компании, Наши Гиды, Гостиницы, Автопарк, Наши Гости</title>
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
<? include("social/soc.html"); ?>
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
	if($_GET[id] == 7)
	{
		echo '<section style="padding-bottom:0px; padding-top:40px">
			<div class="main-title">
				<h1>Наши Гости</h1>
				<p></p>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="gallery" id="trip-gallery-1">';
						$GetCars = mysql_query("SELECT * FROM guests ORDER BY id DESC");
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
								<div class="image" style="background-image: url(\''.$GetTestR[main_pic].'\'); height:300px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
								<div class="name">'.$GetTestR[name].'</div>
								<p>';
								$len = strlen(strip_tags($GetTestR[text]));
								if($len <= 250)
								{
									echo strip_tags($GetTestR[text]);
								}
								if($len > 251)
								{
									
									$short_text = mb_substr(strip_tags($GetTestR[text]),0,250,'UTF-8');
									$short_text = $short_text . '...';
									echo $short_text;
								}
								echo '</p>
									<br>
									<div class="gallery" id="trip-gallery-1">
										<div class="col-sm-4">
											<a href="'.$GetTestR[pic1].'" class="gallery-item" data-lightbox="trip-detail-gallery">
											<div class="image" style="background-image: url(\''.$GetTestR[pic1].'\'); height:50px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
											<div class="hover-overlay">
											<span class="icon-search"></span>
											</div>
											</a>
										</div>
										<div class="col-sm-4">
											<a href="'.$GetTestR[pic2].'" class="gallery-item" data-lightbox="trip-detail-gallery">
											<div class="image" style="background-image: url(\''.$GetTestR[pic2].'\'); height:50px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
											<div class="hover-overlay">
											<span class="icon-search"></span>
											</div>
											</a>
										</div>
										<div class="col-sm-4">
											<a href="'.$GetTestR[pic3].'" class="gallery-item" data-lightbox="trip-detail-gallery">
											<div class="image" style="background-image: url(\''.$GetTestR[pic3].'\'); height:50px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
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
					<h2>Наши Менеджеры</h2>
					
				</div>
				<div class="row">
					<div class="testimonial boxed">';
					
						$GetGuids = mysql_query("SELECT * FROM guids WHERE type='1' ORDER BY id DESC");
						$GetGuidsR = mysql_fetch_array($GetGuids);
						do
						{
							echo '<div class="col-sm-4">
							<div>
								<div class="image" style="background-image: url(\''.$GetGuidsR[main_pic].'\'); height:300px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
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
		
		echo '<section style="padding-bottom:0px; padding-top:40px">
			<div class="container">
				<div class="main-title">
					<h2>Наши Гиды</h2>
					
				</div>
				<div class="row">
					<div class="testimonial boxed">';
					
						$GetGuids = mysql_query("SELECT * FROM guids WHERE type='0' ORDER BY id DESC");
						$GetGuidsR = mysql_fetch_array($GetGuids);
						do
						{
							echo '<div class="col-sm-4">
							<div>
								<div class="image" style="background-image: url(\''.$GetGuidsR[main_pic].'\'); height:300px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
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
		echo '<section style="padding-bottom:0px; padding-top:40px">
			<div class="container">
				<div class="main-title">
					<h2>Наши Водители</h2>
					
				</div>
				<div class="row">
					<div class="testimonial boxed">';
					
						$GetGuids = mysql_query("SELECT * FROM guids WHERE type='2' ORDER BY id DESC");
						$GetGuidsR = mysql_fetch_array($GetGuids);
						do
						{
							echo '<div class="col-sm-4">
							<div>
								<div class="image" style="background-image: url(\''.$GetGuidsR[main_pic].'\'); height:300px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
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
		
							echo '
							<div style="text-align:center;" >
							
							<table cellspacing="0" class="Table" style="background:white; border-collapse:collapse; border:undefined; width:526.5pt">
	<tbody>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Направление</span></span></span></strong></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">1-3 пассажира (легковое авто), USD</span></span></span></strong></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">4-7 пассажиров (минивен), USD</span></span></span></strong></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">8-17 пассажиров (микроавтобус), USD</span></span></span></strong></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси &ndash; отель Тбилиси</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">20 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">32 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">50 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Гудаури</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">65 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">85 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">120 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Тбилиси - Гудаури</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">65 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">85 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">120 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Бакуриани</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">125 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">165 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Тбилиси - Бакуриани</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">125 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">165 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Казбеги</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">105 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">135 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Боржоми</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">95 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">115 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">125 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Тбилиси - Боржоми</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">95 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">115 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">125 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Батуми</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">180 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">310 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Местия</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">225 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">300 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">450 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Тбилиси - Местия</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">225 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">300 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">450 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Кутаиси</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">75 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">165 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Тбилиси - Кутаиси</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">75 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">165 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Цхалтубо</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">85 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">110 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">175 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Саирме</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">95 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">120 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">185 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси &ndash; Сигнаги</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">90 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">110 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">160 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси &ndash; Кварели/Лопота</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">105 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">125 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">175 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси - Ереван</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">110 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">140 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">220 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Тбилиси &ndash; Баку</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">220 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">280 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">360 USD</span></span></span></p>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p><span style="background-color:white"><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Батуми</span></span></span></strong></span></p>

<table cellspacing="0" class="Table" style="background:white; border-collapse:collapse; border:undefined; width:526.5pt">
	<tbody>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Направление</span></span></span></strong></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">1-3 пассажира (легковое авто), USD</span></span></span></strong></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">4-7 пассажиров (минивен), USD</span></span></span></strong></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">8-17 пассажиров (микроавтобус), USD</span></span></span></strong></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Батуми &ndash; отель Батуми</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">15 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">27 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">45 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Батуми - Квариати</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">25 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">37 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">55 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Батуми - Кобулети</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">30 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">50 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">80 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Батуми - Уреки</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">45 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">70 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">95 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Батуми - Тбилиси</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">180 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">310 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Батуми &ndash; Аэропорт Тбилиси</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">180 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">310 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Батуми - Боржоми</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">120 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">290 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Батуми - Боржоми</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">120 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">290 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Батуми - Кутаиси</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">75 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Батуми - Кутаиси</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">75 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Батуми - Местия</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">200 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">275 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">375 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Батуми - Местия</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">200 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">275 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">375 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Батуми - Цхалтубо</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">85 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">110 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">160 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Батуми - Саирме</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">95 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">120 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">170 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Батуми - Махунцети</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">75 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">155 USD</span></span></span></p>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p><span style="background-color:white"><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Кутаиси</span></span></span></strong></span></p>

<table cellspacing="0" class="Table" style="background:white; border-collapse:collapse; border:undefined; width:526.5pt">
	<tbody>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Направление</span></span></span></strong></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">1-3 пассажира (легковое авто), USD</span></span></span></strong></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">4-7 пассажиров (минивен), USD</span></span></span></strong></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><strong><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">8-17 пассажиров (микроавтобус), USD</span></span></span></strong></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси &ndash; отель Кутаиси</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">20 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">32 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">50 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Цхалтубо</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">25 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">37 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">60 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Батуми</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">75 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Кобулети</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">70 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">95 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">145 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Уреки</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">60 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">85 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">135 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Местия</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">115 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">150 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">190 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Саирме</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">40 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">52 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">70 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Боржоми</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">80 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">90 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">120 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси &ndash; Бакуриани</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">90 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">130 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Тбилиси</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">75 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">100 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">165 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Гудаури</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">95 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">115 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">200 USD</span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; width:211.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">Аэропорт Кутаиси - Казбеги</span></span></span></p>
			</td>
			<td style="background-color:white; width:108.0pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">135 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:94.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">155 USD</span></span></span></p>
			</td>
			<td style="background-color:white; width:112.5pt">
			<p><span style="font-size:11.5pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#353133">240 USD</span></span></span></p>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

				</div>
							
							';
					
						
						
						
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