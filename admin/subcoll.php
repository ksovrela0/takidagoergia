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
    <title>Jewerly Sub Collections</title>
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
				<a class="brand" href="https://deecentjewelry.com/admin">
                    <img src="https://deecentjewelry.com/assets/images/logo.png" alt="">
                    
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
                        Jewelry                        <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                                                                                                                        <li><a href="https://deecentjewelry.com/admin/jewelry.php">Jewelry management</a></li><li><a href="https://deecentjewelry.com/admin/collection.php">Jewelry Collections</a></li><li><a href="https://deecentjewelry.com/admin/subcoll.php">Jewelry SubCollections</a></li>
                                                                                                                                                                                                  
                                                                                                                        </ul>
                                    </li>
                            <li class="has-sub hidden" >
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-user"></i></span>
                        Users                        <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                                                                                                                        <li><a href="https://deecentjewelry.com/admin/users.php">Users</a></li>
                                                                                                                                                                                                            
                                                                                                                                                                                                            <li><a href="https://deecentjewelry.com/admin/users.php?addu">Create user</a></li>
                                                                                                                                                                                                            
                                                                                                                        </ul>
                                    </li>
                            

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
                    Jewerly                   <span class="divider">&nbsp;</span>
                </li>
                                                <li>
                    Collections List                  <span class="divider-last">&nbsp;</span>
                </li>
                        </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">		
<?php
if(isset($_GET['del']) and !empty($_GET['del']))
{
$Users4 = mysql_query("SELECT * FROM subcoll WHERE id='".$_GET[del]."'");
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
								 <h3>Removing Sub Collection <b>'.$UsersRow4[name].'</b></h3> 
								 <br />
                                    <div class="tab-content">
                                        Are you sure?<br> <a href="subcoll.php?del='.$_GET[del].'&yes">Yes, of course</a><br><a href="subcoll.php" style="color:red;">No</a>                                    </div>
                                </div>
								</div></div></div></div></div></div>';
								if(isset($_GET['yes']))
								{
									$DelUser = mysql_query("DELETE FROM subcoll WHERE id='".$_GET[del]."'");
									if($DelUser == true)
									{
										echo '<h2 style="color:green;"><b>sub collection '.$UsersRow4[name].' is deleted</b></h2>';
									}
								}
}

if(isset($_GET['add']))
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
								 <h3>Adding new collection<b></b></h3> 
								 <br />';
								 echo '<form action="subcoll.php?add" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset><div class="input text"><label for="UserUsername"></label><input name="name" type="text" id="UserUsername"/></div>
								 <div class="input text"><label for="UserUsername">Category</label><select name="category" id="UserAllowBetslip">';
$Collection = mysql_query("SELECT * FROM collections ORDER BY id DESC");
$CollectionRow = mysql_fetch_array($Collection);
do
{
echo '<option value="'.$CollectionRow[id].'">'.$CollectionRow[catname].'</option>';
}
while($CollectionRow = mysql_fetch_array($Collection));
echo '</select></div>
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';
								if(isset($_POST['name']))
								{
									$name = mysql_real_escape_string($_POST['name']);

									
									if(empty($name))
									{
										echo '<h2 style="color:red;"><b>Field is empty!!!</b></h2>';
									}
									else
									{
										$addsubCollection = mysql_query("INSERT INTO subcoll(`name`,`collid`) VALUES('$name','$_POST[category]')") or die(mysql_error());
										if($addsubCollection == true)
										{
											echo '<h2 style="color:green;"><b>new Sub collection created</b></h2>';
										}
										else
										{
											echo 'Problem';
										}
											
									}
								}
}
if(isset($_GET['edit']) and !empty($_GET['edit']))
{
$id = mysql_real_escape_string($_GET['edit']);
$Collection3 = mysql_query("SELECT * FROM subcoll WHERE id='".$id."'");
$CollectionRow3 = mysql_fetch_array($Collection3);	
	echo '<div class="row-fluid ">
            <div class="span12">
                <!-- BEGIN INLINE TABS PORTLET-->
                <div class="widget">
				<div class="widget-body">
                        <div class="row-fluid">
                            <div class="span12">
                                <!--BEGIN TABS-->
                                <div class="table table-custom">
								 <h3>Editing Sub Collection With ID <b>'.$CollectionRow3[id].'</b></h3> 
								 <br />';
								 echo '<form action="subcoll.php?edit='.$CollectionRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset><div class="input text"><label for="UserUsername"></label><input name="name" type="text" value="'.$CollectionRow3[name].'" id="UserUsername"/></div><div class="input text"><label for="UserUsername">Category</label><select name="category" id="UserAllowBetslip">';
$Collection = mysql_query("SELECT * FROM collections ORDER BY id DESC");
$CollectionRow = mysql_fetch_array($Collection);
do
{
echo '<option value="'.$CollectionRow[id].'">'.$CollectionRow[catname].'</option>';
}
while($CollectionRow = mysql_fetch_array($Collection));
echo '</select></div>
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';
								if(isset($_POST['name']))
								{
									$name = mysql_real_escape_string($_POST['name']);

									
									if(empty($name))
									{
										echo '<h2 style="color:red;"><b>Field is empty!!!</b></h2>';
									}
									else
									{
										$UpdateCollection = mysql_query("UPDATE subcoll SET name='$name', collid='".$_POST[category]."' WHERE id='".$id."'") or die(mysql_error());
										if($UpdateCollection == true)
										{
											echo '<h2 style="color:green;"><b>Sub Collection With ID '.$CollectionRow3[id].' was edited</b></h2>';
										}
										else
										{
											echo 'Problem';
										}
											
									}
								}
}

if(!isset($_GET['edit']))
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
                    <a href="#">List</a>                </li>
                            <li >
                    <a href="subcoll.php?add">Add</a>                </li>
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
                                        <a href="/users.php/index/sort/direction:asc" class="desc">Name</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort/direction:asc" class="desc">Collection</a>                                    </th>

                                                                    
                                
                                                            <th>
                                    Actions                                </th>
                            
                                                    </tr>
                        </thead>
                        <tbody>';

                       
					   $SubColl = mysql_query("SELECT * FROM subcoll ORDER BY id DESC") or die(mysql_error());
					   $SubCollRow = mysql_fetch_array($SubColl);
					   do
					   {
						  echo "<td class=''>".$SubCollRow[name]."</td>";
						  $coll = mysql_query("SELECT * FROM collections WHERE id='".$SubCollRow[collid]."'");
						  $collrow = mysql_fetch_array($coll);
						  echo "<td class=''>".$collrow[catname]."</td>";
						  echo "<td style='min-width: 190px;' class='actions'>
	<a href='?edit=$SubCollRow[id]' class='btn btn-mini btn-primary'>Edit</a> <a href='?del=$SubCollRow[id]' class='btn btn-mini btn-primary'>Delete</a>   </td>                       </tr>";
					   }
					   while($SubCollRow = mysql_fetch_array($SubColl));
					   

						
						
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
	echo '<meta http-equiv="refresh" content="0; url=https://deecentjewelry.com/admin/admin.php" />';
}
?>
</body>
<!-- END BODY -->
</html>
