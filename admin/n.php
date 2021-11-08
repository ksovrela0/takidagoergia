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
    <title>Партнеры</title>
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
                    <img src="http://takidageorgia.com/logo.png" width="100px" height="100px" alt="">
                    
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
                        Управление Сайтом                        <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                                                                                                                        <li><a href="jewelry.php">Добавить Туры</a></li><li><a href="jewelry2.php">Добавить Гостиницы</a></li><li><a href="jewelry6.php">Гиды</a></li><li><a href="n.php">Партнеры</a></li><li><a href="jewelry3.php">О Нас</a></li><li><a href="jewelry5.php">Автопарк</a></li><li><a href="jewelry4.php">Отзывы</a></li><li><a href="jewelry7.php">Гости</a></li><li><a href="jewelry8.php">Грузия</a></li><li><a href="jewelry9.php">Слайдер</a></li><li><a href="blog.php">Блог</a></li></li>
                                                                                                                                                                                                          
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
                    Туры                   <span class="divider">&nbsp;</span>
                </li>
                                                <li>
                    Список Туров                 <span class="divider-last">&nbsp;</span>
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
								 <h3>Добавить Гида</h3> 
								 <br />';
								 echo '<form action="n.php?add" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
								 
									<div class="input text"><label for="UserUsername">Картинка</label><input name="m_pic" type="file" accept="image/*" id="UserUsername"/></div>
								 <div class="input text"><label for="UserEmail">Имя</label><input name="name" type="text" value="" id="UserEmail"/></div>
								 
								 
								 
								 
								 
								 <div class="input text"><label for="UserFirstName">Описание</label><textarea name="ldescr" id="editor2" rows="10" cols="80" type="text"></textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor2" );
            </script>
								</div>
								
								
								 
								 
								 
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';

								if(isset($_POST['name']) and isset($_POST['ldescr']))
								{
									
									$name = mysql_real_escape_string($_POST['name']);
									$filep = $_FILES['m_pic']['tmp_name']; 
									$ldescr = $_POST['ldescr'];
									if(empty($name) or empty($ldescr))
									{
										echo '<h2 style="color:red;"><b>Вы пропустили важные поля!!!</b></h2>';
									}
									else
									{
										
										
										$ftp_server = 'takidageorgia.com';
															$ftp_user_name = 'admin3';
															$ftp_user_pass = 'N12345678';
										$name23 = uniqid();
										
										

										
										$name23 = $name23.'323.png';
										
										
										$conn_id = ftp_connect($ftp_server);
										$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
										// загружаем файл
										$upload = ftp_put($conn_id, 'www/takidageorgia.com/img/'.$name23, $filep, FTP_BINARY);
										echo $upload;
										

										// проверяем статус загрузки
										$AddCatalog = mysql_query("INSERT INTO partners(`name`,`text`,`main_pic`) VALUES('$name','$ldescr','httpы://takidageorgia.com/img/$name23')") or die(mysql_error());
										if($AddCatalog == true)
										{
											echo '<h2 style="color:green;"><b>Партнер '.$name.' Добавлен!!!</b></h2>';
										}
										else
										{
											echo 'Ошибка';
										}
											
									}
								}

								



                                 echo '                                 </div>
								</div></div></div></div></div></div>';
}
if(isset($_GET['edit']) and !empty($_GET['edit']))
{
$id = mysql_real_escape_string($_GET['edit']);
$Product3 = mysql_query("SELECT * FROM partners WHERE id='".$id."'");
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
								 <h3>Редактирование Партнера <b>'.$ProductRow3[name].'</b></h3> 
								 <br />';
								 echo '<form action="n.php?edit='.$ProductRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
								 <div class="input text"><img src="'.$ProductRow3[main_pic].'" height="240" width="120"></div>
									<div class="input text"><label for="UserUsername">Картинка</label><input name="m_pic" type="file" accept="image/*" id="UserUsername"/></div>
								 <div class="input text"><label for="UserEmail">Имя</label><input name="name" type="text" value="'.$ProductRow3[name].'" id="UserEmail"/></div>
								 
								 
								 
								 
								 
								 <div class="input text"><label for="UserFirstName">Описание</label><textarea name="ldescr" id="editor2" rows="10" cols="80" type="text">'.$ProductRow3[text].'</textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( "editor2" );
            </script>
								</div>
								
								
								 
								 
								 
<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
                                 echo '                                 </div>
								</div></div></div></div></div></div>';

								if(isset($_POST['name']) and isset($_POST['ldescr']))
								{
									
									$name = mysql_real_escape_string($_POST['name']);
									$filep = $_FILES['m_pic']['tmp_name']; 
									$ldescr = $_POST['ldescr'];
									if(empty($name) or empty($ldescr))
									{
										echo '<h2 style="color:red;"><b>Вы пропустили важные поля!!!</b></h2>';
									}
									else
									{
											$UpdateProduct = mysql_query("UPDATE partners SET name='$name', text='$ldescr' WHERE id='".$id."'") or die(mysql_error());
											if($UpdateProduct == true)
											{
												echo '<h2 style="color:green;"><b>Партнер '.$ProductRow3[name].' Изменен!!!</b></h2>';
												$ftp_server = 'takidageorgia.com';
															$ftp_user_name = 'admin3';
															$ftp_user_pass = 'N12345678';
															$name23 = uniqid();
															$name23 = $name23.'323.png';
															$conn_id = ftp_connect($ftp_server);
															$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
															// загружаем файл
															
															
															
															if(!empty($filep))
															{
																$upload = ftp_put($conn_id, 'www/takidageorgia.com/img/'.$name23, $filep, FTP_BINARY);
																$UpdateProduct = mysql_query("UPDATE partners SET main_pic='httpы://takidageorgia.com/img/$name23' WHERE id='".$id."'") or die(mysql_error());
															}
											}
											else
											{
												echo 'Ошибка';
											}

											
									}
								}
								else
								{
									echo 'Не наидено поле';
								}
}
if(isset($_GET['del']) and !empty($_GET['del']) and !isset($_GET[comment_id]))
{
$id = mysql_real_escape_string($_GET['del']);
$Product2 = mysql_query("SELECT * FROM partners WHERE id='".$id."'");
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
								 <h3>Удалить Партнера <b>'.$ProductRow2[name].'</b></h3> 
								 <br />
                                    <div class="tab-content">
                                        Are you sure?<br> <a href="n.php?del='.$_GET[del].'&yes">ДА</a><br><a href="n.php" style="color:red;">НЕТ</a>                                    </div>
                                </div>
								</div></div></div></div></div></div>';
								if(isset($_GET[yes]))
								{
									$DelProduct = mysql_query("DELETE FROM partners WHERE id='".$id."'");
									if($DelProduct == true)
									{
										echo '<h2 style="color:green;"><b>Партнер '.$ProductRow2[name].' Удален</b></h2>';
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
                    <a href="n.php?add">Добавить</a>                </li>
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
                                        <a href="/users.php/index/sort:username/direction:asc">Image</a>                                    </th>
										<th>
                                        <a href="/users.php/index/sort:username/direction:asc">Название</a>                                    </th>
										
                                                                    <th>
                                        <a href="/users.php/index/sort:email/direction:asc">Информация</a>                                    </th>
                                                                    
										
										
										
										
								
										
                                
                                                            <th>
                                    Actions                                </th>
                            
                                                    </tr>
                        </thead>
                        <tbody>';

                       
					   $Product = mysql_query("SELECT * FROM partners ORDER BY id DESC") or die(mysql_error());
					   $ProductRow = mysql_fetch_array($Product);
					   do
					   {
						   echo "<tr><td class=''>".$ProductRow[id]."</td><td class=''><img src='".$ProductRow[main_pic]."' width='90' height='90'></td><td class=''>".$ProductRow[name]."</td><td class=''>".$ProductRow[text]."</td>";			

						   
						  
						  echo"</td>   <td style='min-width: 190px;' class='actions'>
	<a href='?edit=$ProductRow[id]' class='btn btn-mini btn-primary'>Редактировать</a> <a href='?del=$ProductRow[id]' class='btn btn-mini btn-success'>Удалить</a> </td>                       </tr>";
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
