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
    <title>OTHER</title>
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
								 <h3>OTHER რედაქტირება</h3> 
								 <br />';
								 echo '<form action="other.php?edit='.$ProductRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
								 
                                 <div class="input text"><label for="UserUsername">დოლარის კურსი</label><input name="dollar" value="'.$ProductRow3['dollar'].'" type="text" id="UserDateOfBirth"/></div>
                                 
								 <div class="input text"><label for="UserUsername">ლოგო</label><input name="logo" type="file" accept="image/*" id="UserUsername"/></div>
								  <div class="input text"><label for="UserFirstName">ჩვენ შესახებ(GEO)</label><textarea name="aboutgeo" id="editor2" rows="10" cols="80" type="text">'.$ProductRow3['about-us-geo'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor2" );
            </script>
								</div>
								 <div class="input text"><label for="UserFirstName">ჩვენ შესახებ(RUS)</label><textarea name="aboutrus" id="editor12" rows="10" cols="80" type="text">'.$ProductRow3['about-us-rus'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor12" );
            </script>
								</div>
								 <div class="input text"><label for="UserFirstName">ჩვენ შესახებ(ENG)</label><textarea name="abouteng" id="editor22" rows="10" cols="80" type="text">'.$ProductRow3['about-us-eng'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor22" );
            </script>
								</div>
								  <div class="input text"><label for="UserUsername">სამუშაო საათები(GEO)</label><input name="wh" value="'.$ProductRow3['workingH'].'" type="text" id="UserDateOfBirth"/></div>
								  <div class="input text"><label for="UserDateOfBirth">სამუშაო საათები(rus)</label><input name="whr" value="'.$ProductRow3['workingH_rus'].'" type="text" id="UserDateOfBirth"/></div>
									<div class="input text"><label for="UserDateOfBirth">სამუშაო საათები(eng)</label><input name="whe" value="'.$ProductRow3['workingH_eng'].'" type="text" id="UserDateOfBirth"/></div>
								  
								   <div class="input text"><label for="UserUsername">მისამართი(ინგლისურად)</label><input name="addr" value="'.$ProductRow3['address'].'" type="text" id="UserDateOfBirth"/></div>
								   <div class="input text"><label for="UserDateOfBirth">მობილური</label><input name="mobile" value="'.$ProductRow3['mobile'].'" type="text" id="UserDateOfBirth"/></div>
									<div class="input text"><label for="UserDateOfBirth">Email</label><input name="email" value="'.$ProductRow3['email'].'" type="text" id="UserDateOfBirth"/></div>
								   
								    <div class="input text"><label for="UserUsername">სერვისი 1 სახელი(GEO)</label><input name="sern" value="'.$ProductRow3['sn1_geo'].'" type="text" id="UserDateOfBirth"/></div>
									<div class="input text"><label for="UserFirstName">სერვისი 1 შიგთავსი(GEO)</label><textarea name="serS" id="editor30" rows="10" cols="80" type="text">'.$ProductRow3['service1_geo'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor30" );
            </script>
								</div>
									
									 <div class="input text"><label for="UserUsername">სერვისი 1 სახელი(rus)</label><input name="sern_rus" value="'.$ProductRow3['sn1_rus'].'" type="text" id="UserDateOfBirth"/></div>
									 <div class="input text"><label for="UserFirstName">სერვისი 1 შიგთავსი(rus)</label><textarea name="serS_rus" id="editor31" rows="10" cols="80" type="text">'.$ProductRow3['service1_rus'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor31" );
            </script>
								</div>
										
										<div class="input text"><label for="UserUsername">სერვისი 1 სახელი(eng)</label><input name="sern_eng" value="'.$ProductRow3['sn1_eng'].'" type="text" id="UserDateOfBirth"/></div>
									 <div class="input text"><label for="UserFirstName">სერვისი 1 შიგთავსი(eng)</label><textarea name="serS_eng" id="editor32" rows="10" cols="80" type="text">'.$ProductRow3['service1_eng'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor32" );
            </script>
								</div>
										
										<div class="input text"><label for="UserUsername">სერვისი 2 სახელი(GEO)</label><input name="sern2" value="'.$ProductRow3['sn2_geo'].'" type="text" id="UserDateOfBirth"/></div>
									<div class="input text"><label for="UserFirstName">სერვისი 2 შიგთავსი(GEO)</label><textarea name="serS2" id="editor33" rows="10" cols="80" type="text">'.$ProductRow3['service2_geo'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor33" );
            </script>
								</div>
									
									 <div class="input text"><label for="UserUsername">სერვისი 2 სახელი(rus)</label><input name="sern_rus2" value="'.$ProductRow3['sn2_rus'].'" type="text" id="UserDateOfBirth"/></div>
									 <div class="input text"><label for="UserFirstName">სერვისი 2 შიგთავსი(rus)</label><textarea name="serS_rus2" id="editor34" rows="10" cols="80" type="text">'.$ProductRow3['service2_rus'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor34" );
            </script>
								</div>
										
										<div class="input text"><label for="UserUsername">სერვისი 2 სახელი(eng)</label><input name="sern_eng2" value="'.$ProductRow3['sn2_eng'].'" type="text" id="UserDateOfBirth"/></div>
									 <div class="input text"><label for="UserFirstName">სერვისი 2 შიგთავსი(eng)</label><textarea name="serS_eng2" id="editor35" rows="10" cols="80" type="text">'.$ProductRow3['service2_eng'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor35" );
            </script>
								</div>
									 
									 <div class="input text"><label for="UserUsername">სერვისი 3 სახელი(GEO)</label><input name="sern3" value="'.$ProductRow3['sn3_geo'].'" type="text" id="UserDateOfBirth"/></div>
									<div class="input text"><label for="UserFirstName">სერვისი 3 შიგთავსი(GEO)</label><textarea name="serS3" id="editor36" rows="10" cols="80" type="text">'.$ProductRow3['service3_geo'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor36" );
            </script>
								</div>
									
									 <div class="input text"><label for="UserUsername">სერვისი 3 სახელი(rus)</label><input name="sern_rus3" value="'.$ProductRow3['sn3_rus'].'" type="text" id="UserDateOfBirth"/></div>
									 <div class="input text"><label for="UserFirstName">სერვისი 3 შიგთავსი(rus)</label><textarea name="serS_rus3" id="editor37" rows="10" cols="80" type="text">'.$ProductRow3['service3_rus'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor37" );
            </script>
								</div>
										
										<div class="input text"><label for="UserUsername">სერვისი 3 სახელი(eng)</label><input name="sern_eng3" value="'.$ProductRow3['sn3_eng'].'" type="text" id="UserDateOfBirth"/></div>
									 <div class="input text"><label for="UserFirstName">სერვისი 3 შიგთავსი(eng)</label><textarea name="serS_eng3" id="editor38" rows="10" cols="80" type="text">'.$ProductRow3['service3_eng'].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor38" );
            </script>
								</div>
									 
									 
									 
								
								
								
								
								
								
								
								
									 
										
									 
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';
								if(isset($_POST[aboutgeo]) and isset($_POST[aboutrus]) and isset($_POST[abouteng]) and isset($_POST[wh]) and isset($_POST[whr]) and isset($_POST[whe]) and isset($_POST[addr]) and isset($_POST[mobile]) and isset($_POST[email]) and isset($_POST[sern]) and isset($_POST[serS]) and isset($_POST[sern_rus]) and isset($_POST[serS_rus]) and isset($_POST[sern_eng]) and isset($_POST[serS_eng]) and isset($_POST[sern2]) and isset($_POST[serS2]) and isset($_POST[sern_rus2]) and isset($_POST[serS_rus2]) and isset($_POST[sern_eng2]) and isset($_POST[serS_eng2]) and isset($_POST[sern3]) and isset($_POST[serS3]) and isset($_POST[sern_rus3]) and isset($_POST[serS_rus3]) and isset($_POST[sern_eng3]) and isset($_POST[serS_eng3]) and isset($_POST[dollar]))
								{
									
									if(empty($_POST['aboutgeo']) or empty($_POST[aboutrus]) or empty($_POST[abouteng]) or empty($_POST[wh]) or empty($_POST[whr]) or empty($_POST[whe]) or empty($_POST[addr]) or empty($_POST[mobile]) or empty($_POST[email]) or empty($_POST[sern]) or empty($_POST[serS]) or empty($_POST[sern_rus]) or empty($_POST[serS_rus]) or empty($_POST[sern_eng]) or empty($_POST[serS_eng]) or empty($_POST[sern2]) or empty($_POST[serS2]) or empty($_POST[sern_rus2]) or empty($_POST[serS_rus2]) or empty($_POST[sern_eng2]) or empty($_POST[serS_eng2]) or empty($_POST[sern3]) or empty($_POST[serS3]) or empty($_POST[sern_rus3]) or empty($_POST[serS_rus3]) or empty($_POST[sern_eng3]) or empty($_POST[serS_eng3]) or empty($_POST[dollar]))
									{
										echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
									}
									else
									{
										$UpdateProduct = mysql_query("UPDATE system SET `about-us-geo`='$_POST[aboutgeo]', `about-us-rus`='$_POST[aboutrus]', `about-us-eng`='$_POST[abouteng]', workingH='$_POST[wh]', workingH_rus='$_POST[whr]', workingH_eng='$_POST[whe]', address='$_POST[addr]', mobile='$_POST[mobile]', email='$_POST[email]', sn1_geo='$_POST[sern]', sn1_rus='$_POST[sern_rus]', sn1_eng='$_POST[sern_eng]', sn2_geo='$_POST[sern2]', sn2_rus='$_POST[sern_rus2]', sn2_eng='$_POST[sern_eng2]', sn3_geo='$_POST[sern3]', sn3_rus='$_POST[sern_rus3]', sn3_eng='$_POST[sern_eng3]', service1_geo='$_POST[serS]', service1_rus='$_POST[serS_rus]', service1_eng='$_POST[serS_eng]', service2_geo='$_POST[serS2]', service2_rus='$_POST[serS_rus2]', service2_eng='$_POST[serS_eng2]', service3_geo='$_POST[serS3]', service3_rus='$_POST[serS_rus3]', service3_eng='$_POST[serS_eng3]', dollar='$_POST[dollar]' WHERE id='".$id."'") or die(mysql_error());
										if($UpdateProduct == true)
										{
											echo '<h2 style="color:green;"><b>OTHER შესწორებულია!!!</b></h2>';
										}
										else
										{
											echo 'შეცდომაა';
										}
										
									}
								}
								else{
									echo 'fffff';
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
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">კურსი$</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">ჩვენ შესახებ(GEO)</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">სამუშაო საათები</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">მისამართი(ENG)</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">მობილური</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">E-mail</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:id/direction:asc" class="desc">LOGO</a>                                    </th>
                                                                    
										
								
										
                                
                                                            <th>
                                    Actions                                </th>
                            
                                                    </tr>
                        </thead>
                        <tbody>';

                       
					   $Product = mysql_query("SELECT * FROM system WHERE id=2") or die(mysql_error());
					   $ProductRow = mysql_fetch_array($Product);
					   do
					   {
						   echo "<tr><td class=''>".$ProductRow[dollar]."</td><td class=''>";
						   
						   $len = strlen($ProductRow['about-us-geo']);
														if($len <= 220)
														{
															echo $ProductRow['about-us-geo'];
														}
														if($len > 221)
														{
															
															$short_text = mb_substr($ProductRow['about-us-geo'],0,220,'UTF-8');
															$short_text = $short_text . '...';
															echo $short_text;
														}
						   
						   echo "</td>
							<td class=''>".$ProductRow[workingH]."</td>
							<td class=''>".$ProductRow[address]."</td>
							<td class=''>".$ProductRow[mobile]."</td>.
							<td class=''>".$ProductRow[email]."</td>
							<td class=''><img src='".$ProductRow[logo]."' width='90' height='90'></td>
						   <td style='min-width: 190px;' class='actions'>
	<a href='?edit=$ProductRow[id]' class='btn btn-mini btn-primary'>Edit</a> </td>       <tr>                </tr>";
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
