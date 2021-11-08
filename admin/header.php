<?
session_start();
if(!isset($_SESSION[a_id]))
{
	die("Only authorized users can enter here");
}
//////////
include("../db.php");
//////////
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
 <script src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<script type="text/javascript" src="../js/jquery.meerkat.1.0.js"></script>
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){	
	meerkat({
		close: '.close',
		dontShow: '.dont-show',
		animation: 'slide',
		animationSpeed: 500,
		dontShowExpire: 0,
		removeCookie: '.remove-cookie',
		meerkatPosition: 'bottom',
		background: '#2e2a22 url(../../img/meerkat-bg.png) repeat-x 0 0',
		height: '110px'
	});
	
});
</script>
	<meta charset="utf-8" />
    <title>HEADER</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="Admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="Admin/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="Admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    
	<link rel="stylesheet" type="text/css" href="Admin/css/style.css" />
	<link rel="stylesheet" type="text/css" href="Admin/css/style_responsive.css" />
	<link rel="stylesheet" type="text/css" href="Admin/css/style_gray.css" />

	<link href="Admin/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="Admin/assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="Admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="Admin/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="Admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" type="text/css" />

    
	<script type="text/javascript" src="Admin/js/jquery-1.8.3.min.js"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="administration.php">
                    <img src="http://geoautorents.com/logoex4.png" width="100px" height="100px" alt="">
                    
                </a>
				<!-- END LOGO -->

				<div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
                                    </div>
                <!-- END  NOTIFICATION -->

                <div class="top-nav ">
                    <ul class="nav pull-right top-menu">
                        						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="https://demo.betscheme.com/theme/Admin/img/user-avatar.png" alt="" />                                <span class="username">
                                    <? echo $_SESSION['a_login'] ?>                                </span>
							</a>
						</li>
							<li class="">

							
								
                                    <a href="?exit"><img src="https://demo.betscheme.com/theme/Admin/img/door-exit.png" alt="" />                                        
                                     
                                    </a>
                               
							
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->

    <div id="container" class="row-fluid">

        <!-- BEGIN SIDEBAR -->
        
<div id="sidebar" class="nav-collapse collapse">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
    <div class="navbar-inverse">
        <form class="navbar-search visible-phone">
            <input type="text" class="search-query" placeholder="Search" />
        </form>
    </div>
    <!-- END RESPONSIVE QUICK SEARCH FORM -->
    <!-- BEGIN SIDEBAR MENU -->
	
    <ul class="sidebar-menu loading">
                                    <li class="has-sub hidden" >
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>
                        საიტის მართვა                        <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                                                                                                                        <li><a href="jewelry.php">მანქანების დამატება</a></li><li><a href="jewelry2.php">სასტუმროს დამატება</a></li><li><a href="n.php">სიახლეების დამატება</a></li><li><a href="jewelry3.php">შეკვეთები</a></li><li><a href="jewelry5.php">სერვისები</a></li><li><a href="jewelry4.php">კონტაქტი</a></li>
                                                                                                                                                                                                          
                                                                                                                        </ul>
                                    </li>
									
									
									
									<li class="has-sub hidden" >
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>
                        სისტემის მართვა                       <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                                                                                                                        <li><a href="header.php">სლაიდერი</a></li><li><a href="other.php">სხვა პარამეტრები</a></li>
                                                                                                                                                                                                          
                                                                                                                        </ul>
                                    </li>
                           
                            
	</ul>
    <script type="text/javascript">
        $(function() {
            var container = $('.sidebar-menu');
            container.find('a[href="/users.php"]').parent().parent().toggle('open');
            $('.sidebar-menu ul').each(function() {
                if($(this).find('ul li').context.childElementCount == 0) {
                    $(this).parent().css({'display' : 'none'});
                }else{

                }
            });
            container.removeClass('loading');
            container.find('li').removeClass('hidden');
        }());
    </script>
    <!-- END SIDEBAR MENU -->
</div>		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <ul class="breadcrumb">
                                    <li>
                    <a href="/eng"><i class="icon-home"></i></a>
                    <span class="divider">&nbsp;</span>
                </li>
                                                <li>
                    //                   <span class="divider">&nbsp;</span>
                </li>
                                                <li>
                    //                  <span class="divider-last">&nbsp;</span>
                </li>
                        </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">		
<?
/*if(isset($_GET['add']))
{

	echo '<div class="row-fluid ">
            <div class="span12">
                <!-- BEGIN INLINE TABS PORTLET-->
                <div class="widget">
				<div class="widget-body">
                        <div class="row-fluid">
                            <div class="span12">
                                <!--BEGIN TABS-->
                                <div class="table table-custom">
								 <h3>HEADER დამატება</h3> 
								 <br />';
								 echo '<form action="header.php?add" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
								 <div class="input text"><label for="UserDateOfBirth">Title</label><input name="t1" value="'.$_POST['t1'].'" type="text" id="UserDateOfBirth"/></div><div class="input text"><label for="UserDateOfBirth">Title RUS</label><input name="t2" value="'.$_POST['t2'].'" type="text" id="UserDateOfBirth"/></div><div class="input text"><label for="UserDateOfBirth">Title GEO</label><input name="t3" value="'.$_POST['t3'].'" type="text" id="UserDateOfBirth"/></div>
								 <div class="input text"><label for="UserDateOfBirth">Header Image 1</label><input name="i1" type="file" accept="image/*" id="UserUsername"/></div>
								 
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';
								if(isset($_POST['t1']) and isset($_POST['t2']) and isset($_POST['t3']))
								{
									$t1 = $_POST['t1'];
									$t2 = $_POST['t2'];
									$t3 = $_POST['t3'];
									
									
									$filep1 = $_FILES['i1']['tmp_name']; 
													
									
									if(empty($t1) or empty($t2) or empty($t3))
									{
										echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
									}
									else
									{
										$ftp_server = 'geosky.ge';
															$ftp_user_name = 'geoskyge';
															$ftp_user_pass = 'O159mQmrk4';
											
											$name1 = uniqid();

											
											$name1 = $name1.'.png';

											
											$conn_id = ftp_connect($ftp_server);
											$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
											// загружаем файл
											
									
												$upload1 = ftp_put($conn_id, 'public_html/gallery/'.$name1, $filep1, FTP_BINARY);
												$AddImg = mysql_query("INSERT INTO header(`title`,`title_rus`,`title_geo`,`img`) VALUES('$t1','$t2','$t3','http://geosky.ge/gallery/$name1')");
												if($AddImg == true)
												{
													echo '<h2 style="color:green;"><b>სურათი '.$name1.' დამატებულია!!!</b></h2>';
												}
												else
												{
													echo 'შეცდომაა';
												}
											
											
									}
								}
}*/
if(isset($_GET['edit']) and !empty($_GET['edit']))
{
$id = mysql_real_escape_string($_GET['edit']);
$Product3 = mysql_query("SELECT * FROM slider WHERE id='".$id."'");
$ProductRow3 = mysql_fetch_array($Product3);	
	echo '<div class="row-fluid ">
            <div class="span12">
                <!-- BEGIN INLINE TABS PORTLET-->
                <div class="widget">
				<div class="widget-body">
                        <div class="row-fluid">
                            <div class="span12">
                                <!--BEGIN TABS-->
                                <div class="table table-custom">
								 <h3>HEADER რედაქტირება</h3> 
								 <br />';
								 echo '<form action="header.php?edit='.$ProductRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
								 <div class="input text"><label for="UserDateOfBirth">სახელი(GEO)</label><input name="n1" value="'.$ProductRow3['name'].'" type="text" id="UserDateOfBirth"/></div><div class="input text"><label for="UserDateOfBirth">სახელი(RUS)</label><input name="n2" value="'.$ProductRow3['name_rus'].'" type="text" id="UserDateOfBirth"/></div><div class="input text"><label for="UserDateOfBirth">სახელი(ENG)</label><input name="n3" value="'.$ProductRow3['name_eng'].'" type="text" id="UserDateOfBirth"/></div>
								 
								 <div class="input text"><label for="UserDateOfBirth">TEXT(GEO)</label><input name="t1" value="'.$ProductRow3['desc'].'" type="text" id="UserDateOfBirth"/></div><div class="input text"><label for="UserDateOfBirth">TEXT(RUS)</label><input name="t2" value="'.$ProductRow3['desc_rus'].'" type="text" id="UserDateOfBirth"/></div><div class="input text"><label for="UserDateOfBirth">TEXT(ENG)</label><input name="t3" value="'.$ProductRow3['desc_eng'].'" type="text" id="UserDateOfBirth"/></div>
								 
								 <div class="input text"><label for="UserDateOfBirth">წელი</label><input name="year" value="'.$ProductRow3['year'].'" type="text" id="UserDateOfBirth"/></div><div class="input text"><label for="UserDateOfBirth">link</label><input name="link" value="'.$ProductRow3['link'].'" type="text" id="UserDateOfBirth"/></div><div class="input text"><label for="UserDateOfBirth">ფასი</label><input name="p" value="'.$ProductRow3['price'].'" type="text" id="UserDateOfBirth"/></div>
								 
								 <div class="input text"><img src="'.$ProductRow3[img].'" height="240" width="120"></div>
								 <div class="input text"><label for="UserDateOfBirth">Header Image 1</label><input name="i1" type="file" accept="image/*" id="UserUsername"/></div>
								 
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';
								if(isset($_POST['t1']) and isset($_POST['t2']) and isset($_POST['t3']) and isset($_POST['n1']) and isset($_POST['n2']) and isset($_POST['n3']) and isset($_POST['year']) and isset($_POST['link']) and isset($_POST['p']))
								{
									$t1 = $_POST['t1'];
									$t2 = $_POST['t2'];
									$t3 = $_POST['t3'];
									$n1 = $_POST['n1'];
									$n2 = $_POST['n2'];
									$n3 = $_POST['n3'];
									$year = $_POST['year'];
									$link = $_POST['link'];
									$price = $_POST['p'];
									
									
									$filep1 = $_FILES['i1']['tmp_name']; 
													
									
									if(empty($t1) or empty($t2) or empty($t3) or empty($n1) or empty($n2) or empty($n3) and empty($price) or empty($year) or empty($link))
									{
										echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
									}
									else
									{
										$UpdateProduct = mysql_query("UPDATE slider SET desc_rus='$t2', desc_eng='$t3', name='$n1', name_rus='$n2', name_eng='$n3', year='$year', link='$link', price='$price', `desc`='$t1' WHERE id='".$id."'") or die(mysql_error());
										if($UpdateProduct == true)
										{
											echo '<h2 style="color:green;"><b>სლაიდერი შესწორებულია!!!</b></h2>';
										}
										else
										{
											echo 'შეცდომაა';
										}
										$ftp_server = 'geoautorents.com';
															$ftp_user_name = 'admin2';
															$ftp_user_pass = 'car12345678';
											
											$name1 = uniqid();

											$salt = rand(1111111,9999999);
											$name1 = $name1.$salt.'.png';

											
											$conn_id = ftp_connect($ftp_server);
											$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
											// загружаем файл
											
											

											if(!empty($filep1))
											{
												$upload1 = ftp_put($conn_id, 'www/geoautorents.com/slider/'.$name1, $filep1, FTP_BINARY);
												$UpdateProduct = mysql_query("UPDATE slider SET img='http://geoautorents.com/slider/$name1' WHERE id='".$id."'") or die(mysql_error());
											}
											
											
									}
								}
}
if(!isset($_GET['edit']) and !isset($_GET['del']) and !isset($_GET['add']))
{
echo '<div class="row-fluid ">
            <div class="span12">
                <!-- BEGIN INLINE TABS PORTLET-->
                <div class="widget">
				<div class="widget-body">
                        <div class="row-fluid">
                            <div class="span12">
                                <!--BEGIN TABS-->
                                <div class="table table-custom">
								 <ul class="nav nav-tabs">
                                    <li class="active">
                    <a href="#">სია</a>                </li>
                            
                        </ul>
								 <br />
								 <div class="tab-content">
									
									<div class="row-fluid">
        <div class="span12">
            <!-- BEGIN TABLE widget-->
            <div class="widget">
                <div class="widget-title">
                    <h4>
                        <i class="icon-reorder"></i>
                                                    Data list                                            </h4>

                </div>
                <div class="widget-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                                                                <th>
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">Name GEO </a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:username/direction:asc">Text GEO</a>                                    </th>

                                                                    <th>
                                        <a href="/users.php/index/sort:last_visit/direction:asc">Image</a>                                    </th>
								
										
                                
                                                            <th>
                                    Actions                                </th>
                            
                                                    </tr>
                        </thead>
                        <tbody>';

                       
					   $Product = mysql_query("SELECT * FROM slider ORDER BY id DESC") or die(mysql_error());
					   $ProductRow = mysql_fetch_array($Product);
					   do
					   {
						   echo "<tr><td class=''>".$ProductRow[name]."</td><td class=''>".$ProductRow[desc]."</td>";					   
						  echo "<td class=''><img src='".$ProductRow[img]."' width='90' height='90'></td>   <td style='min-width: 190px;' class='actions'>
	<a href='?edit=$ProductRow[id]' class='btn btn-mini btn-primary'>Edit</a>                        </tr>";
					   }
					   while($ProductRow = mysql_fetch_array($Product));
					   

						
						
                                               echo ' <tr>
                                                            <td>
                                                           </td>
                                                            <td>
                                                           </td>
                                                            <td>
                                                           </td>
                                                            <td>
                                                           </td>
                                                            <td>
                                                           </td>
                                                                                    <td></td>
                                                    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END TABLE widget-->
        </div>
    </div>

								 
                                                                  </div>
								</div></div></div></div></div></div>';	
}
		?>
    </div>
    <!-- END PAGE CONTENT-->
</div>			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="Admin/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="Admin/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="Admin/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
	<script src="Admin/assets/bootstrap/js/bootstrap.min.js"></script>
    
	<script type="text/javascript" src="Admin/js/jquery.blockui.js"></script>
    
	<script type="text/javascript" src="Admin/js/jquery.cookie.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
    
	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/excanvas.js"></script>
    
	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/respond.js"></script>
	<![endif]-->


    <!-- ie8 fixes -->
    <!--[if lt IE 9]>
    
	
    
	
    <![endif]-->
    <script src="Admin/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script type="text/javascript" src="Admin/assets/jquery-knob/js/jquery.knob.js"></script>
	<script type="text/javascript" src="Admin/js/jquery.peity.min.js"></script>
    <script type="text/javascript" src="Admin/assets/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    
	<script type="text/javascript" src="Admin/js/scripts.js"></script>

    <script type="text/javascript" src="Admin/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="Admin/assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="Admin/assets/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="Admin/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="Admin/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>

    <script type="text/javascript" src="Admin/assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="Admin/assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="Admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

    <!--[if lte IE 8]>
    <script language="javascript" type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/flot/excanvas.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="Admin/assets/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="Admin/assets/flot/jquery.flot.pie.js"></script>
<!--Begin Comm100 Live Chat Code-->
<script>
		jQuery(document).ready(function() {
			// initiate layout and plugins
			App.setMainPage(true);
			App.init();
		});
	</script>
<?
if(isset($_GET['exit']))
{
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=http://geosky.ge/admin" />';
}
?>
</body>
<!-- END BODY -->
</html>
