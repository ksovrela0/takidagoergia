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
    <title>მომხმარებლები</title>
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
                                                                                                                                        <li><a href="jewelry.php">მანქანების დამატება</a></li><li><a href="jewelry2.php">სასტუმროს დამატება</a></li><li><a href="n.php">სიახლეების დამატება</a></li><li><a href="jewelry3.php">შეკვეთები</a></li><li><a href="jewelry4.php">კონტაქტი</a></li>
                                                                                                                                                                                                          
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
                    Users                   <span class="divider">&nbsp;</span>
                </li>
                                                <li>
                    List Users                  <span class="divider-last">&nbsp;</span>
                </li>
                        </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">		
<?
if(isset($_GET['edit']) and !empty($_GET['edit']))
{
$id = mysql_real_escape_string($_GET['edit']);
$Users5 = mysql_query("SELECT * FROM users WHERE id='".$id."'");
$UsersRow5 = mysql_fetch_array($Users5);
	echo '<div class="row-fluid ">
            <div class="span12">
                <!-- BEGIN INLINE TABS PORTLET-->
                <div class="widget">
				<div class="widget-body">
                        <div class="row-fluid">
                            <div class="span12">
                                <!--BEGIN TABS-->
                                <div class="table table-custom">
								 <h3>Editing user <b>'.$UsersRow5[firstname].' '.$UsersRow5[lastname].'</b></h3> 
								 <br />';
								 echo '<form action="users.php?edit='.$UsersRow5[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset><div class="input text"><label for="UserUsername">Avatar</label><input name="avatar" type="text" value="'.$UsersRow5[avatar].'" id="UserUsername"/></div><div class="input text"><label for="UserFirstName">First Name</label><input name="firstname" type="text" value="'.$UsersRow5[firstname].'" id="UserFirstName"/></div><div class="input text"><label for="UserLastName">Last Name</label><input name="lastname" type="text" value="'.$UsersRow5[lastname].'" id="UserLastName"/></div><div class="input text"><label for="UserAddress1">E-mail</label><input name="email" type="text" value="'.$UsersRow5[email].'" id="UserAddress1"/></div><div class="input text"><label for="UserZipCode">Mobile</label><input name="mobile" type="text" value="'.$UsersRow5[mobile].'" id="UserZipCode"/></div>
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';
if(isset($_POST['avatar']) and isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['email']) and isset($_POST['mobile']))
{
	$avatar = $_POST['avatar'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	echo 'avatar: <img src="'.$avatar.'" width="36" height="36"><br>';
	echo 'firstname: '.$firstname.'<br>';
	echo 'lastname: '.$lastname.'<br>';
	echo 'email: '.$email.'<br>';
	echo 'mobile: '.$mobile.'<br>';
	if(empty($firstname) or empty($lastname) or empty($email) or empty($mobile))
	{
		echo '<h2 style="color:red;"><b>Fields are empty!!!</b></h2>';
	}
	else
	{
		if(empty($avatar))
		{
			$UpdateUser = mysql_query("UPDATE users SET avatar='http://geosky.ge/img/noavatar.png', firstname='$firstname', lastname='$lastname', email='$email', mobile='$mobile' WHERE id='$UsersRow5[id]'") or die(mysql_error());
			if($UpdateUser == true)
			{
				echo '<h2 style="color:green;"><b>User '.$UsersRow5[firstname].' was edited</b></h2>';
			}
			else
			{
				echo 'Problem';
			}
		}
		else
		{
			$UpdateUser = mysql_query("UPDATE users SET avatar='$avatar', firstname='$firstname', lastname='$lastname', email='$email', mobile='$mobile' WHERE id='$UsersRow5[id]'") or die(mysql_error());
			if($UpdateUser == true)
			{
				echo '<h2 style="color:green;"><b>User '.$UsersRow5[firstname].' was edited</b></h2>';
			}
			else
			{
				echo 'Problem';
			}
		}
	}
}
}
if(isset($_GET['del']) and !empty($_GET['del']))
{
$Users4 = mysql_query("SELECT * FROM users WHERE id='".$_GET[del]."'");
$UsersRow4 = mysql_fetch_array($Users4);
	echo '<div class="row-fluid ">
            <div class="span12">
                <!-- BEGIN INLINE TABS PORTLET-->
                <div class="widget">
				<div class="widget-body">
                        <div class="row-fluid">
                            <div class="span12">
                                <!--BEGIN TABS-->
                                <div class="table table-custom">
								 <h3>Removing user <b>'.$UsersRow4[firstname].'</b></h3> 
								 <br />
                                    <div class="tab-content">
                                        Are you sure?<br> <a href="users.php?del='.$_GET[del].'&yes">Yes, of course</a><br><a href="users.php" style="color:red;">No</a>                                    </div>
                                </div>
								</div></div></div></div></div></div>';
								if(isset($_GET['yes']))
								{
									$DelUser = mysql_query("DELETE FROM users WHERE id='".$_GET[del]."'");
									if($DelUser == true)
									{
										echo '<h2 style="color:green;"><b>User '.$UsersRow4[firstname].' has been deleted</b></h2>';
									}
								}
}

if(!isset($_GET['edit']) and !isset($_GET['del']) and !isset($_GET['add']) and !isset($_GET['c']) and !isset($_GET['addu']))
{
       echo '<div class="row-fluid ">
            <div class="span12">
                <!-- BEGIN INLINE TABS PORTLET-->
                <div class="widget">
                    <div class="widget-body">
                        
<style type="text/css">
    form#search-form {
        position: relative;
        right: 5px;
    }

    form#search-form .search-inputs {
        float: left;
        padding-left: 5px;;

    }

    form#search-form #search_button {
        float: left;
        margin: 25px 0 10px 10px;
    }
</style>                        <div class="row-fluid">
                            <div class="span12">
                                <!--BEGIN TABS-->
                                <div class="table table-custom">
                                            <ul class="nav nav-tabs">
                                    <li class="active">
                    <a href="#">List</a>                </li>
                            
                        </ul>
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
                                        <a href="/users.php/index/sort:username/direction:asc">avatar</a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:username/direction:asc">Name</a>                                    </th>
                                                                    <th>
                                        <a href="/users.php/index/sort:email/direction:asc">Email</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:email/direction:asc">Mobile</a>                                    </th>
                                                                    
                                                                
                                
                                                            <th>
                                    Actions                                </th>
                            
                                                    </tr>
                        </thead>
                        <tbody>';
?>
                       <?
					   $Users = mysql_query("SELECT * FROM users ORDER BY id DESC");
					   $UsersRow = mysql_fetch_array($Users);
					   do
					   {
						   echo "<tr><td class=''>".$UsersRow['id']."</td><td class=''><img src='".$UsersRow['avatar']."' width='36' height='36'></td><td class=''>".$UsersRow['firstname']." ".$UsersRow['lastname']."</td><td class=''>".$UsersRow['email']."</td><td class=''>".$UsersRow['mobile']."</td><td style='min-width: 190px;' class='actions'>
	<a href='?edit=$UsersRow[id]' class='btn btn-mini btn-primary'>Edit</a> <a href='?del=$UsersRow[id]' class='btn btn-mini btn-success'>Delete</a>  </td>                            </tr>";
					   }
					   while($UsersRow = mysql_fetch_array($Users));
					   ?>
						<?

						
						
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
    <p>
    Page 1 of 1, showing 20 records out of 20 total, starting on record 1, ending on 20</p>

                                    </div>
                                </div>
                                <!--END TABS-->
                            </div>
                            <div class="space10 visible-phone"></div>
                        </div>
                    </div>
                </div>
                <!-- END INLINE TABS PORTLET-->
            </div>
        </div>';
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
<?
if(isset($_GET['exit']))
{
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=https://deecentjewelry.com/admin/admin.php" />';
}
?>
</body>
<!-- END BODY -->
</html>
