<?
include("db.php");
if(isset($_GET[id]))
{
	$id = mysql_real_escape_string(trim(strip_tags($_GET[id])));
	$GetTour = mysql_query("SELECT * FROM blog WHERE id='$id'") or die(mysql_error());
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
    <title>
      <?
          if(isset($_GET[id]))
          {
              echo $GetTourR[name];
          }
          else
          {
              echo 'Наш Блог';
          }
      ?>
    </title>

    <?
        if(isset($_GET[id]))
        {
            echo '

              <meta property="og:title" content="'.$GetTourR[name].'" />
              <meta property="og:description" content="'.strip_tags($GetTourR[text]).'" />
              <meta property="og:type" content="website" />
              <meta property="og:url" content="http://takidageorgia.com/blog.php?id='.$GetTourR[id].'" />
              <meta property="og:image" content="'.$GetTourR[m_pic].'" />

            ';
        }
    ?>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <link rel="stylesheet" href="assets/css/min/bootstrap.min.css" media="all" >
    <link rel="stylesheet" href="assets/css/min/jqueryui.min.css" media="all" >
    <link rel="stylesheet" href="vendor/animate-css/animate.css" media="all" >
    <link rel="stylesheet" href="assets/font/iconfont/iconstyle.css" media="all" >
    <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.css" media="all" >
    <link rel="stylesheet" href="assets/css/main.css" media="all"  id="maincss">

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
	<?
		if(!isset($_GET[id]))
		{
			echo '
			
			<section class="page-img" style="background-image: url(\'assets/img/home_img/mountain.jpg\');">
				<div class="page-img-txt container">
					<div class="row">
						<div class="col-sm-8">
							<h1 class="main-head">Наш Блог</h1>
						</div>
						<div class="colsm-4">
							<ul class="breadcrumb">
								<li><a href="#"><span class="icon-home"></span></a></li>
								<li><a href="#">Блог</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<main>
				<div class="container">
					<div class="row">';
						$getBlog = mysql_query("SELECT * FROM blog ORDER BY id DESC");
						$getBlogR = mysql_fetch_array($getBlog);
						do
						{
							echo '
							
							<div class="col-sm-4">
								<article class="post-list full-img">
									<div class="post-img" style="background-image: url(\''.$getBlogR[m_pic].'\')">
										<div class="item-overlay">
											<a href="blog.php?id='.$getBlogR[id].'"><span class="icon-binocular"></span></a>
										</div>
									</div>
									<div class="post-summary">
										<header>
											<h4 class="post-title">
												<a href="#">'.$getBlogR[name].'</a>
											</h4>
											<p class="byline author vcard">
												<span class="updated">'.$getBlogR['date'].'</span>
											</p>
										</header>
										<div class="post-excerpt">';
											$len = strlen($getBlogR[text]);
											if($len <= 220)
											{
												echo $getBlogR[text];
											}
											if($len > 221)
											{
												
												$short_text = mb_substr($getBlogR[text],0,220,'UTF-8');
												$short_text = $short_text . '...';
												echo $short_text;
											}
										echo '</div>

										<a href="blog.php?id='.$getBlogR[id].'" class="btn btn-primary hvr-sweep-to-right">Подробнее</a>
									</div>
								</article>
							</div>
							
							';
						}
						while($getBlogR = mysql_fetch_array($getBlog));
						
				
					echo '</div>
				</div>
			</main>
			
			';
		}
		else
		{
			$id = mysql_real_escape_string($_GET[id]);
			$getBlog = mysql_query("SELECT * FROM blog WHERE id='$id' LIMIT 1");
			$getBlogR = mysql_fetch_array($getBlog);
			echo '
			
			<section class="page-img" style="background-image: url(\'assets/img/blog/4.jpg\');">
				<div class="page-img-txt container">
					<div class="row">
						<div class="col-sm-2">
						</div>
						<div class="col-sm-8">
							<h1 class="main-head">'.$getBlogR[name].'</h1>	
						</div>
						<div class="col-sm-2">
						</div>
					</div>
				</div>
			</section>

			<main class="white">
				<div class="container">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-8">
							<div class="post">
								<div class="post_img" style="text-align:center;">
									<img src="'.$getBlogR[m_pic].'" width="100%">
								</div>
								
								'.$getBlogR[text].'
								
								
					<div class="fb-comments" width="100%" data-href="https://takidageorgia.com/blog.php?id='.$id.'" data-numposts="5"></div>
				
						</div>

					</div>
				</div>
				
				
			</main>
			
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2&appId=148288789311900&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
