<?php
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
    <title>სურათები</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="https://demo.betscheme.com/theme/Admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://demo.betscheme.com/theme/Admin/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="https://demo.betscheme.com/theme/Admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    
	<link rel="stylesheet" type="text/css" href="https://demo.betscheme.com/theme/Admin/css/style.css" />
	<link rel="stylesheet" type="text/css" href="https://demo.betscheme.com/theme/Admin/css/style_responsive.css" />
	<link rel="stylesheet" type="text/css" href="https://demo.betscheme.com/theme/Admin/css/style_gray.css" />

	<link href="https://demo.betscheme.com/theme/Admin/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="https://demo.betscheme.com/theme/Admin/assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="https://demo.betscheme.com/theme/Admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="https://demo.betscheme.com/theme/Admin/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://demo.betscheme.com/theme/Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="https://demo.betscheme.com/theme/Admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" type="text/css" />

    
	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/jquery-1.8.3.min.js"></script>
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
                                    <?php echo $_SESSION['a_login'] ?>                                </span>
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
                                                                                                                                        <li><a href="jewelry.php">მანქანების დამატება</a></li><li><a href="jewelry2.php">სასტუმროს დამატება</a></li><li><a href="n.php">სიახლეების დამატება</a></li><li><a href="jewelry3.php">შეკვეთები</a></li><li><a href="jewelry4.php">კონტაქტი</a></li>
                                                                                                                                                                                                          
                                                                                                                        </ul>
                                    </li>
									
									<li class="has-sub hidden" >
                     <a href="users.php" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>
                        მომხმარებლები                       <span class="arrow"></span>
                    </a>
                                            
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
                    გალერეა                   <span class="divider">&nbsp;</span>
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
<?php
if(isset($_GET['add']))
{
	//$id = mysql_real_escape_string($_GET['add']);
	//$Collection4 = mysql_query("SELECT * FROM collections WHERE id='".$id."'");
	//$CollectionRow4 = mysql_fetch_array($Collection4);	
	echo '<div class="row-fluid ">
            <div class="span12">
                <!-- BEGIN INLINE TABS PORTLET-->
                <div class="widget">
				<div class="widget-body">
                        <div class="row-fluid">
                            <div class="span12">
                                <!--BEGIN TABS-->
                                <div class="table table-custom">
								 <h3>სურათის დამატება</h3> 
								 <br />';
								 echo '<form action="gallery.php?add" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
								 
<div class="input text"><label for="UserUsername">სურათი(300x200)</label><input name="m_pic" type="file" accept="image/*" id="UserUsername"/></div>
<div class="input text"><label for="UserUsername">სურათი(full-size)</label><input name="m_pic2" type="file" accept="image/*" id="UserUsername"/></div>
								 
								 <div class="input text"><label for="UserEmail">სახელი ENG</label><input name="name" type="text" id="UserEmail" value="'.$_POST[name].'"/></div>
								 <div class="input text"><label for="UserEmail">სახელი RUS</label><input name="namerus" type="text" id="UserEmail" value="'.$_POST[namerus].'"/></div>
								 <div class="input text"><label for="UserEmail">სახელი GEO</label><input name="namegeo" type="text" id="UserEmail" value="'.$_POST[namegeo].'"/></div>
								 <div class="input text"><label for="UserEmail">კუთხე</label><select name="kutxe">';
								 $GetKutxe = mysql_query("SELECT * FROM kutxeebi");
								 $GetKutxeRow = mysql_fetch_array($GetKutxe);
								 do
								 {
									echo '<option value="'.$GetKutxeRow[id].'">'.$GetKutxeRow[name_geo].'</option>';
								 }
								 while($GetKutxeRow = mysql_fetch_array($GetKutxe));
								 echo '</select></div>
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
								if(isset($_POST['name']) and isset($_POST['namerus']) and isset($_POST['namegeo']) and isset($_POST['kutxe']))
								{
									$name = mysql_real_escape_string($_POST['name']);
									$namerus = mysql_real_escape_string($_POST['namerus']);
									$namegeo = mysql_real_escape_string($_POST['namegeo']);
									$kutxe = $_POST['kutxe'];
									
									$filep = $_FILES['m_pic']['tmp_name']; 
									$filep2 = $_FILES['m_pic2']['tmp_name']; 
									if(empty($name) or empty($namerus) or empty($namegeo) or empty($kutxe))
									{
										echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
									}
									else
									{
										$ftp_server = 'geosky.ge';
															$ftp_user_name = 'geoskyge';
															$ftp_user_pass = 'O159mQmrk4';
										$name23 = uniqid();								
										$name23 = $name23.'.png';
										$name233 = uniqid();								
										$name233 = $name233.'.png';
										$conn_id = ftp_connect($ftp_server);
										$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
										// загружаем файл
										$upload = ftp_put($conn_id, 'public_html/gallery/'.$name23, $filep, FTP_BINARY);
										$upload = ftp_put($conn_id, 'public_html/gallery/'.$name233, $filep2, FTP_BINARY);


										// проверяем статус загрузки
										$AddTour = mysql_query("INSERT INTO gallery(`name`,`name_rus`,`name_geo`,`img`,`full-img`,`type`) VALUES('$name','$namerus','$namegeo','http://geosky.ge/gallery/$name23','http://geosky.ge/gallery/$name233','$kutxe')");
										if($AddTour == true)
										{
											echo '<h2 style="color:green;"><b>სურათი '.$ProductRow3[name_geo].' დამატებულია!!!</b></h2>';
										}
										else
										{
											echo 'შეცდომაა';
										}
											
									}
								}

								



                                 echo '                                 </div>
								</div></div></div></div></div></div>';
}
if(isset($_GET['edit']) and !empty($_GET['edit']))
{
$id = mysql_real_escape_string($_GET['edit']);
$Product3 = mysql_query("SELECT * FROM gallery WHERE id='".$id."'");
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
								 <h3>სურათის რედაქტირება <b>'.$ProductRow3[name].'</b></h3> 
								 <br />';
								 echo '<form action="gallery.php?edit='.$ProductRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
								 
<div class="input text"><label for="UserUsername">სურათი(300x200)</label><input name="pic" type="file" accept="image/*" id="UserUsername"/></div>
<div class="input text"><label for="UserUsername">სურათი(full-size)</label><input name="pic2" type="file" accept="image/*" id="UserUsername"/></div>
								 
								 <div class="input text"><label for="UserEmail">სახელი ENG</label><input name="name" type="text" value="'.$ProductRow3[name].'" id="UserEmail"/></div>
								 <div class="input text"><label for="UserEmail">სახელი RUS</label><input name="namerus" type="text" value="'.$ProductRow3[name_rus].'" id="UserEmail"/></div>
								 <div class="input text"><label for="UserEmail">სახელი GEO</label><input name="namegeo" type="text" value="'.$ProductRow3[name_geo].'" id="UserEmail"/></div>
								 <div class="input text"><label for="UserEmail">კუთხე</label>
								 <select name="kutxe">';
								 $GetKutxe = mysql_query("SELECT * FROM kutxeebi");
								 $GetKutxeRow = mysql_fetch_array($GetKutxe);
								 do
								 {
									echo '<option value="'.$GetKutxeRow[id].'">'.$GetKutxeRow[name_geo].'</option>';
								 }
								 while($GetKutxeRow = mysql_fetch_array($GetKutxe));
								 echo '</select>
								 </div>
								 
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';
								if(isset($_POST['name']) and isset($_POST['namerus']) and isset($_POST['namegeo']))
								{
									$name = mysql_real_escape_string($_POST['name']);
									$namerus = mysql_real_escape_string($_POST['namerus']);
									$namegeo = mysql_real_escape_string($_POST['namegeo']);
									$filep1 = $_FILES['pic']['tmp_name']; 
									$filep2 = $_FILES['pic2']['tmp_name']; 
									if(empty($name) or empty($namerus) or empty($namegeo))
									{
										echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
									}
									else
									{
										$UpdateProduct = mysql_query("UPDATE gallery SET type='$_POST[kutxe]', name='$name', name_rus='$namerus', name_geo='$namegeo' WHERE id='".$id."'") or die(mysql_error());
										if($UpdateProduct == true)
										{
											echo '<h2 style="color:green;"><b>სურათი '.$ProductRow3[name].' შესწორებულია!!!</b></h2>';
										}
										else
										{
											echo 'შეცდომაა';
										}
										$ftp_server = 'geosky.ge';
															$ftp_user_name = 'geoskyge';
															$ftp_user_pass = 'O159mQmrk4';
											
											$name1 = uniqid();
											$name2 = uniqid();
											
											$name1 = $name1.'.png';
											$name2 = $name2.'.png';
											
											$conn_id = ftp_connect($ftp_server);
											$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
											// загружаем файл
											
											

											if(!empty($filep1))
											{
												$upload1 = ftp_put($conn_id, 'public_html/gallery/'.$name1, $filep1, FTP_BINARY);
												$UpdateProduct = mysql_query("UPDATE gallery SET img='http://geosky.ge/gallery/$name1' WHERE id='".$id."'") or die(mysql_error());
											}
											if(!empty($filep2))
											{
												$upload1 = ftp_put($conn_id, 'public_html/gallery/'.$name2, $filep2, FTP_BINARY);
												$UpdateProduct = mysql_query("UPDATE gallery SET img-full='http://geosky.ge/gallery/$name2' WHERE id='".$id."'") or die(mysql_error());
											}
											
											
									}
								}
}
if(isset($_GET['del']) and !empty($_GET['del']))
{
$id = mysql_real_escape_string($_GET['del']);
$Product2 = mysql_query("SELECT * FROM gallery WHERE id='".$id."'");
$ProductRow2 = mysql_fetch_array($Product2);
echo '<div class="row-fluid ">
            <div class="span12">
                <!-- BEGIN INLINE TABS PORTLET-->
                <div class="widget">
				<div class="widget-body">
                        <div class="row-fluid">
                            <div class="span12">
                                <!--BEGIN TABS-->
                                <div class="table table-custom">
								 <h3>სურათის <b>'.$ProductRow2[name].' წაშლა</b></h3> 
								 <br />
                                    <div class="tab-content">
                                        Are you sure?<br> <a href="gallery.php?del='.$_GET[del].'&yes">Yes, of course</a><br><a href="gallery.php" style="color:red;">No</a>                                    </div>
                                </div>
								</div></div></div></div></div></div>';
								if(isset($_GET[yes]))
								{
									$DelProduct = mysql_query("DELETE FROM gallery WHERE id='".$id."'");
									if($DelProduct == true)
									{
										echo '<h2 style="color:green;"><b>Tour '.$ProductRow2[name].' has been deleted</b></h2>';
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
                            <li >
                    <a href="gallery.php?add">დამატება</a>                </li>
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
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">Id</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">კუთხე</a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:username/direction:asc">Image</a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:email/direction:asc">Name RUS</a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:registration_date/direction:asc">Name GEO</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:registration_date/direction:asc">Name ENG</a>                                    </th>
                                                                    
								
										
                                
                                                            <th>
                                    Actions                                </th>
                            
                                                    </tr>
                        </thead>
                        <tbody>';

                       
					   $Product = mysql_query("SELECT * FROM gallery ORDER BY id DESC") or die(mysql_error());
					   $ProductRow = mysql_fetch_array($Product);
					   do
					   {
						   echo "<tr><td class=''>".$ProductRow[id]."</td>";
						   $GetKutxe = mysql_query("SELECT * FROM kutxeebi WHERE id='$ProductRow[type]'");
						   $GetKutxeRow = mysql_fetch_array($GetKutxe);
						   echo "<td class=''>".$GetKutxeRow[name_geo]."</td>";
						   echo "<td class=''><img src='".$ProductRow[img]."' width='90' height='90'></td><td class=''>".$ProductRow[name_rus]."</td>";					   
						  echo "<td class=''>".$ProductRow[name_geo]."</td><td class=''>".$ProductRow[name]."</td>   <td style='min-width: 190px;' class='actions'>
	<a href='?edit=$ProductRow[id]' class='btn btn-mini btn-primary'>Edit</a> <a href='?del=$ProductRow[id]' class='btn btn-mini btn-success'>Delete</a>  </td>                       </tr>";
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
	<script src="https://demo.betscheme.com/theme/Admin/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/bootstrap/js/bootstrap.min.js"></script>
    
	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/jquery.blockui.js"></script>
    
	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/jquery.cookie.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
    
	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/excanvas.js"></script>
    
	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/respond.js"></script>
	<![endif]-->
	<script src="https://demo.betscheme.com/theme/Admin/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<script src="https://demo.betscheme.com/theme/Admin/assets/jquery-knob/js/jquery.knob.js"></script>

    <!-- ie8 fixes -->
    <!--[if lt IE 9]>
    
	
    
	
    <![endif]-->

    
	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/jquery.peity.min.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    
	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/scripts.js"></script>

    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

    <!--[if lte IE 8]>
    <script language="javascript" type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/flot/excanvas.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/flot/jquery.flot.pie.js"></script>
<!--Begin Comm100 Live Chat Code-->
<script>
		jQuery(document).ready(function() {
			// initiate layout and plugins
			App.setMainPage(true);
			App.init();
		});
	</script>
<?php
if(isset($_GET['exit']))
{
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=http://geosky.ge/admin" />';
}
?>
</body>
<!-- END BODY -->
</html>
