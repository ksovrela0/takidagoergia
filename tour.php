<?
include("db.php");
if(isset($_GET[id]))
{
	$id = mysql_real_escape_string(trim(strip_tags($_GET[id])));
	$GetTour = mysql_query("SELECT * FROM tours WHERE id='$id'") or die(mysql_error());
	$GetTourR = mysql_fetch_array($GetTour);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><? echo $GetTourR[name]; ?></title>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" />
<meta property="og:title" content="<? echo $GetTourR[name] ?>" />
	<meta property="og:description" content="<? echo strip_tags($GetTourR[text]); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://takidageorgia.com/tour.php?id=<? echo $GetTourR[id]; ?>" />
	<meta property="og:image" content="<? echo $GetTourR[main_pic]; ?>" />
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
		if(isset($_GET[id]))
		{
			
			$GetTourC = mysql_num_rows($GetTour);
			if($GetTourC == 1)
			{
				
				echo '
							<div class="row">
							<br>
							<h1 align="center">'.$GetTourR[name].'</h1>
							<br>
							<div class="gallery" id="trip-gallery-1">
								<div class="col-sm-3">
									<a href="'.$GetTourR[main_pic].'" class="gallery-item" data-lightbox="trip-detail-gallery">
										<div class="image" style="background-image: url(\''.$GetTourR[main_pic].'\'); height:300px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
										<div class="hover-overlay">
											<span class="icon-search"></span>
										</div>
									</a>
								</div>
								<div class="col-sm-3">
									<a href="'.$GetTourR[pic1].'" class="gallery-item" data-lightbox="trip-detail-gallery">
										<div class="image" style="background-image: url(\''.$GetTourR[pic1].'\'); height:300px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
										<div class="hover-overlay">
											<span class="icon-search"></span>
										</div>
									</a>
								</div>
								<div class="col-sm-3">
									<a href="'.$GetTourR[pic2].'" class="gallery-item" data-lightbox="trip-detail-gallery">
										<div class="image" style="background-image: url(\''.$GetTourR[pic2].'\'); height:300px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
										<div class="hover-overlay">
											<span class="icon-search"></span>
										</div>
									</a>
								</div>
								<div class="col-sm-3">
									<a href="'.$GetTourR[pic3].'" class="gallery-item" data-lightbox="trip-detail-gallery">
										<div class="image" style="background-image: url(\''.$GetTourR[pic3].'\'); height:300px; background-repeat:no-repeat; background-position: 100% 50%; background-size:cover;"></div>
										<div class="hover-overlay">
											<span class="icon-search"></span>
										</div>
									</a>
								</div>
								
							</div>
						</div>
				<div class="container">
					<div class="trip-insight">
					
						

						<div class="main-price">
							<div>Цена</div>
							<div class="price"><b>'.$GetTourR[price].'$</b></div>
							<button class="btn btn-primary btn-lg hvr-sweep-to-right" data-toggle="modal" data-target="#myModal">Забронировать</button>
						</div>
						
					</div>	
				</div>

				<div class="trip-detail">
					<div class="container">
						<div class="tab-wrap">

							<ul id="trip-tab" class="nav nav-tabs affix-top" data-spy="affix" data-offset-top="1290" >
								<li class="active"><a href="#overview" data-toggle="tab">Информация о Туре</a></li>
							</ul>

							<div class="tab-content paper-effect">

								<div class="tab-pane active" id="overview">
									<div class="row">
										'.$GetTourR[text].'
									</div>
								</div>

								

							</div>
						</div>


						<br>
						<br>



						
						<br>
						<br>
						

					</div>

				</div>
				';
			}
			if($GetTourC == 0)
			{
				echo '
							<div class="row">
							<h1 align="center">Не Найдено</h1>
							
							<div class="gallery" id="trip-gallery-1">
								<div class="col-sm-3">
									<a href="assets/img/trip_detail/1.jpg" class="gallery-item" data-lightbox="trip-detail-gallery" data-title="Lorem ipsum dolor.">
										<img src="assets/img/trip_detail/thumb_1.jpg" alt="..." class="img-responsive" >
										<div class="hover-overlay">
											<span class="icon-search"></span>
										</div>
									</a>
								</div>
								<div class="col-sm-3">
									<a href="assets/img/trip_detail/1.jpg" class="gallery-item" data-lightbox="trip-detail-gallery" data-title="Lorem ipsum dolor.">
										<img src="assets/img/trip_detail/thumb_1.jpg" alt="..." class="img-responsive" >
										<div class="hover-overlay">
											<span class="icon-search"></span>
										</div>
									</a>
								</div>
								<div class="col-sm-3">
									<a href="assets/img/trip_detail/1.jpg" class="gallery-item" data-lightbox="trip-detail-gallery" data-title="Lorem ipsum dolor.">
										<img src="assets/img/trip_detail/thumb_1.jpg" alt="..." class="img-responsive" >
										<div class="hover-overlay">
											<span class="icon-search"></span>
										</div>
									</a>
								</div>
								<div class="col-sm-3">
									<a href="assets/img/trip_detail/1.jpg" class="gallery-item" data-lightbox="trip-detail-gallery" data-title="Lorem ipsum dolor.">
										<img src="assets/img/trip_detail/thumb_1.jpg" alt="..." class="img-responsive" >
										<div class="hover-overlay">
											<span class="icon-search"></span>
										</div>
									</a>
								</div>
								
							</div>
						</div>
				<div class="container">
					<div class="trip-insight">
					
						

						<div class="main-price">
							<div>Цена</div>
							<div class="price">Не Найдено</div>
							
						</div>
						
					</div>	
				</div>

				<div class="trip-detail">
					<div class="container">
						<div class="tab-wrap">

							<ul id="trip-tab" class="nav nav-tabs affix-top" data-spy="affix" data-offset-top="1290" >
								<li class="active"><a href="#overview" data-toggle="tab">Информация о Туре</a></li>
							</ul>

							<div class="tab-content paper-effect">

								<div class="tab-pane active" id="overview">
									<div class="row">
										Не Найдено
									</div>
								</div>

								

							</div>
						</div>


						<br>
						<br>



						
						<br>
						<br>
						

					</div>

				</div>
				';
			}
		}
?>

	<div class="banner white">
	<div class="container">
		<div class="section-title center">
			<h3>Похожие Туры</h3>
		</div>
		<div class="row item">
		<?
			$GetST = mysql_query("SELECT * FROM tours ORDER BY RAND() LIMIT 3 ");
			$GetSTR = mysql_fetch_array($GetST);
			do
			{
				echo '<div class="col-sm-6 col-md-4">
					<div class="item-grid">
						<div class="item-img" style="background-image: url(\''.$GetSTR[main_pic].'\');">	
							<div class="item-overlay">
								<a href="tour.php?id='.$GetSTR[id].'"><span class="icon-binocular"></span></a>
							</div>
						</div>
						<div class="item-desc">
							<div class="item-info">
						
								<h4 class="title"><a href="tour.php?id='.$GetSTR[id].'">'.$GetSTR[name].'</a></h4>
							</div>

							<div class="sub-title">
								<span class="location">'.$GetSTR[location].'</span>
								
							</div>

							<div class="item-detail">
								<div class="left">
									<div class="day"><span class="icon-sun"></span>'.$GetSTR[duration].'</div>
								</div>
								<div class="right">
									<div class="price">GEL '.$GetSTR[price].'</div>
									<a href="tour.php?id='.$GetSTR[id].'" class="btn btn-primary hvr-sweep-to-right">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				</div>';
			}
			while($GetSTR = mysql_fetch_array($GetST));
		?>	
		</div>	
	</div>
</div>

	<div class="modal fade modal-book-now" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Бронирование Тура - <? echo $GetTourR[name]; ?></h4>
				</div>
				<div class="modal-body">

					<div class="preview-wrap">
						<div class="preview-img" style="background-image: url('<? echo $GetTourR[main_pic]; ?>')"></div>

						<div class="form-wrap">
							<form id="ajax-contact" method="post" action="https://takidageorgia.com/book.php">
								<div id="form-messages" class="alert" role="alert" style="display: none;"></div>
								<input type="hidden" name="trip" id="trip" value="<? echo $GetTourR[name]; ?>">
								<div class="form-group">
									<label>ФИО</label>
									<input type="text" name="name" id="name" class="form-control" placeholder="" value="" required>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="" value="" required>
								</div>

								<div class="form-group">
									<label>Мобильный</label>
									<input type="number" name="phone" id="phone" class="form-control" placeholder="" value="" required>
								</div>

								<div class="form-group">
									<label>Кол-во Человек</label>
									<input type="text" name="number_person" id="number_person" class="form-control" value="2" required>
								</div>
								<button class="btn btn-primary hvr-sweep-to-right">Забронировать</button>

							</form>
						</div>
					</div>
				</div>
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





	<!-- Current Page JS -->
	<script type="text/javascript" src="vendor/lightbox/js/lightbox.js"></script>
	<script type="text/javascript" src="assets/js/min/tripdetailpage.min.js"></script>
	<script type="text/javascript" src="assets/js/min/img_gallery.min.js"></script>

	<!-- Current Page JS || Ajax Contact -->
	<script type="text/javascript" src="assets/js/book_trip.js"></script>
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
