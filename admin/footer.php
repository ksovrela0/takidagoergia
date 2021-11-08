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
    <title>FOOTER</title>
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
                    <img src="assets/images/logo.jpg" width="100px" height="100px" alt="">
                    
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
<?php

if(isset($_GET['edit']) and !empty($_GET['edit']))
{
$id = mysql_real_escape_string($_GET['edit']);
$Product3 = mysql_query("SELECT * FROM system WHERE id='".$id."'");
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
								 <h3>FOOTER რედაქტირება</h3> 
								 <br />';
								 echo '<form action="footer.php?edit='.$ProductRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
								 <div class="input text"><label for="UserDateOfBirth">Address</label><input name="a" value="'.$ProductRow3['address'].'" type="text" id="UserDateOfBirth"/></div>
								 <div class="input text"><label for="UserDateOfBirth">Address RUS</label><input name="ar" value="'.$ProductRow3['address_rus'].'" type="text" id="UserDateOfBirth"/></div>
								 <div class="input text"><label for="UserDateOfBirth">Address GEO</label><input name="ag" value="'.$ProductRow3['address_geo'].'" type="text" id="UserDateOfBirth"/></div>
								 <div class="input text"><label for="UserDateOfBirth">Email</label><input name="email" value="'.$ProductRow3['email'].'" type="text" id="UserDateOfBirth"/></div>
								 <div class="input text"><label for="UserDateOfBirth">Mobile</label><input name="mobile" value="'.$ProductRow3['mobile'].'" type="text" id="UserDateOfBirth"/></div>
								 <div class="input text"><label for="UserDateOfBirth">Footer Text</label><input name="text" value="'.$ProductRow3['footer_text'].'" type="text" id="UserDateOfBirth"/></div>
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';
								if(isset($_POST['a']) and isset($_POST['ar']) and isset($_POST['ag']) and isset($_POST['mobile']) and isset($_POST['email']) and isset($_POST['text']))
								{
									$a = $_POST['a'];
									$ar = $_POST['ar'];
									$ag = $_POST['ag'];
									
									$mobile = $_POST['mobile'];
									$email = $_POST['email'];
									$text = $_POST['text'];
									if(empty($a) or empty($ar) or empty($ag) or empty($mobile) or empty($email) or empty($text))
									{
										echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
									}
									else
									{
										$UpdateProduct = mysql_query("UPDATE system SET address='$a', address_rus='$ar', address_geo='$ag', mobile='$mobile', email='$email', footer_text='$text' WHERE id='".$id."'") or die(mysql_error());
										if($UpdateProduct == true)
										{
											echo '<h2 style="color:green;"><b>FOOTER შესწორებულია!!!</b></h2>';
										}
										else
										{
											echo 'შეცდომაა';
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
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">Address</a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:username/direction:asc">Address RUS</a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:email/direction:asc">Address GEO</a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:registration_date/direction:asc">Email</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:registration_date/direction:asc">Mobile</a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:last_visit/direction:asc">footer_text</a>                                    </th>
										
								
										
                                
                                                            <th>
                                    Actions                                </th>
                            
                                                    </tr>
                        </thead>
                        <tbody>';

                       
					   $Product = mysql_query("SELECT * FROM system") or die(mysql_error());
					   $ProductRow = mysql_fetch_array($Product);
					   do
					   {
						   echo "<tr><td class=''>".$ProductRow[address]."</td><td class=''>".$ProductRow[address_rus]."</td><td class=''>".$ProductRow[address_geo]."</td>";					   
						  echo "<td class=''>".$ProductRow[email]."</td><td class=''>".$ProductRow[mobile]."</td><td class=''>".$ProductRow[footer_text]."</td>   <td style='min-width: 190px;' class='actions'>
	<a href='?edit=$ProductRow[id]' class='btn btn-mini btn-primary'>Edit</a> </td>                       </tr>";
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
