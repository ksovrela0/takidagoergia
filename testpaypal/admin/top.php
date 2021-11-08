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



	<meta charset="utf-8" />
    <title><?php

		echo 'ჩვენი გუნდი';

	?></title>
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
                    <img src="" width="100px" height="100px" alt="">
                    
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
                                                               <span class="username">
                                    <?php echo $_SESSION['a_login'] ?>                                </span>
							</a>
						</li>
							<li class="">

							
								

                               
							
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
	
    <?php
	include("assets/header.php");
	?>
    <script type="text/javascript">
        $(function() {
            var container = $('.sidebar-menu');
            container.find('a[href="/slider.php"]').parent().parent().toggle('open');
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
                                       <span class="divider">&nbsp;</span>
                </li>
                                                <li>
                                      <span class="divider-last">&nbsp;</span>
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
									 <h3>';
										echo 'ახალი დონატორი';
									 echo '</h3> 
									 <br />';
									 echo '<form action="top.php?add" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
									 
					
									 
									 <div class="input text"><label for="UserEmail">სახელი</label><input name="name" type="text" value="'.$ProductRow3['title'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">paypal e-mail</label><input name="email" type="text" value="'.$ProductRow3['title'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">თანხა</label><input name="amount" type="text" value="'.$ProductRow3['text'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="amount">Country:</label>
									 <select class="form-control" name="country">
										 <option value="AF">Afghanistan</option>
										 <option value="AX">Åland Islands</option>
										 <option value="AL">Albania</option>
										 <option value="DZ">Algeria</option>
										 <option value="AS">American Samoa</option>
										 <option value="AD">Andorra</option>
										 <option value="AO">Angola</option>
										 <option value="AI">Anguilla</option>
										 <option value="AQ">Antarctica</option>
										 <option value="AG">Antigua and Barbuda</option>
										 <option value="AR">Argentina</option>
										 <option value="AM">Armenia</option>
										 <option value="AW">Aruba</option>
										 <option value="AU">Australia</option>
										 <option value="AT">Austria</option>
										 <option value="AZ">Azerbaijan</option>
										 <option value="BS">Bahamas</option>
										 <option value="BH">Bahrain</option>
										 <option value="BD">Bangladesh</option>
										 <option value="BB">Barbados</option>
										 <option value="BY">Belarus</option>
										 <option value="BE">Belgium</option>
										 <option value="BZ">Belize</option>
										 <option value="BJ">Benin</option>
										 <option value="BM">Bermuda</option>
										 <option value="BT">Bhutan</option>
										 <option value="BO">Bolivia, Plurinational State of</option>
										 <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
										 <option value="BA">Bosnia and Herzegovina</option>
										 <option value="BW">Botswana</option>
										 <option value="BV">Bouvet Island</option>
										 <option value="BR">Brazil</option>
										 <option value="IO">British Indian Ocean Territory</option>
										 <option value="BN">Brunei Darussalam</option>
										 <option value="BG">Bulgaria</option>
										 <option value="BF">Burkina Faso</option>
										 <option value="BI">Burundi</option>
										 <option value="KH">Cambodia</option>
										 <option value="CM">Cameroon</option>
										 <option value="CA">Canada</option>
										 <option value="CV">Cape Verde</option>
										 <option value="KY">Cayman Islands</option>
										 <option value="CF">Central African Republic</option>
										 <option value="TD">Chad</option>
										 <option value="CL">Chile</option>
										 <option value="CN">China</option>
										 <option value="CX">Christmas Island</option>
										 <option value="CC">Cocos (Keeling) Islands</option>
										 <option value="CO">Colombia</option>
										 <option value="KM">Comoros</option>
										 <option value="CG">Congo</option>
										 <option value="CD">Congo, the Democratic Republic of the</option>
										 <option value="CK">Cook Islands</option>
										 <option value="CR">Costa Rica</option>
										 <option value="CI">Côte dIvoire</option>
										 <option value="HR">Croatia</option>
										 <option value="CU">Cuba</option>
										 <option value="CW">Curaçao</option>
										 <option value="CY">Cyprus</option>
										 <option value="CZ">Czech Republic</option>
										 <option value="DK">Denmark</option>
										 <option value="DJ">Djibouti</option>
										 <option value="DM">Dominica</option>
										 <option value="DO">Dominican Republic</option>
										 <option value="EC">Ecuador</option>
										 <option value="EG">Egypt</option>
										 <option value="SV">El Salvador</option>
										 <option value="GQ">Equatorial Guinea</option>
										 <option value="ER">Eritrea</option>
										 <option value="EE">Estonia</option>
										 <option value="ET">Ethiopia</option>
										 <option value="FK">Falkland Islands (Malvinas)</option>
										 <option value="FO">Faroe Islands</option>
										 <option value="FJ">Fiji</option>
										 <option value="FI">Finland</option>
										 <option value="FR">France</option>
										 <option value="GF">French Guiana</option>
										 <option value="PF">French Polynesia</option>
										 <option value="TF">French Southern Territories</option>
										 <option value="GA">Gabon</option>
										 <option value="GM">Gambia</option>
										 <option value="GE">Georgia</option>
										 <option value="DE">Germany</option>
										 <option value="GH">Ghana</option>
										 <option value="GI">Gibraltar</option>
										 <option value="GR">Greece</option>
										 <option value="GL">Greenland</option>
										 <option value="GD">Grenada</option>
										 <option value="GP">Guadeloupe</option>
										 <option value="GU">Guam</option>
										 <option value="GT">Guatemala</option>
										 <option value="GG">Guernsey</option>
										 <option value="GN">Guinea</option>
										 <option value="GW">Guinea-Bissau</option>
										 <option value="GY">Guyana</option>
										 <option value="HT">Haiti</option>
										 <option value="HM">Heard Island and McDonald Islands</option>
										 <option value="VA">Holy See (Vatican City State)</option>
										 <option value="HN">Honduras</option>
										 <option value="HK">Hong Kong</option>
										 <option value="HU">Hungary</option>
										 <option value="IS">Iceland</option>
										 <option value="IN">India</option>
										 <option value="ID">Indonesia</option>
										 <option value="IR">Iran, Islamic Republic of</option>
										 <option value="IQ">Iraq</option>
										 <option value="IE">Ireland</option>
										 <option value="IM">Isle of Man</option>
										 <option value="IL">Israel</option>
										 <option value="IT">Italy</option>
										 <option value="JM">Jamaica</option>
										 <option value="JP">Japan</option>
										 <option value="JE">Jersey</option>
										 <option value="JO">Jordan</option>
										 <option value="KZ">Kazakhstan</option>
										 <option value="KE">Kenya</option>
										 <option value="KI">Kiribati</option>
										 <option value="KP">Korea, Democratic Peoples Republic of</option>
										 <option value="KR">Korea, Republic of</option>
										 <option value="KW">Kuwait</option>
										 <option value="KG">Kyrgyzstan</option>
										 <option value="LA">Lao Peoples Democratic Republic</option>
										 <option value="LV">Latvia</option>
										 <option value="LB">Lebanon</option>
										 <option value="LS">Lesotho</option>
										 <option value="LR">Liberia</option>
										 <option value="LY">Libya</option>
										 <option value="LI">Liechtenstein</option>
										 <option value="LT">Lithuania</option>
										 <option value="LU">Luxembourg</option>
										 <option value="MO">Macao</option>
										 <option value="MK">Macedonia, the former Yugoslav Republic of</option>
										 <option value="MG">Madagascar</option>
										 <option value="MW">Malawi</option>
										 <option value="MY">Malaysia</option>
										 <option value="MV">Maldives</option>
										 <option value="ML">Mali</option>
										 <option value="MT">Malta</option>
										 <option value="MH">Marshall Islands</option>
										 <option value="MQ">Martinique</option>
										 <option value="MR">Mauritania</option>
										 <option value="MU">Mauritius</option>
										 <option value="YT">Mayotte</option>
										 <option value="MX">Mexico</option>
										 <option value="FM">Micronesia, Federated States of</option>
										 <option value="MD">Moldova, Republic of</option>
										 <option value="MC">Monaco</option>
										 <option value="MN">Mongolia</option>
										 <option value="ME">Montenegro</option>
										 <option value="MS">Montserrat</option>
										 <option value="MA">Morocco</option>
										 <option value="MZ">Mozambique</option>
										 <option value="MM">Myanmar</option>
										 <option value="NA">Namibia</option>
										 <option value="NR">Nauru</option>
										 <option value="NP">Nepal</option>
										 <option value="NL">Netherlands</option>
										 <option value="NC">New Caledonia</option>
										 <option value="NZ">New Zealand</option>
										 <option value="NI">Nicaragua</option>
										 <option value="NE">Niger</option>
										 <option value="NG">Nigeria</option>
										 <option value="NU">Niue</option>
										 <option value="NF">Norfolk Island</option>
										 <option value="MP">Northern Mariana Islands</option>
										 <option value="NO">Norway</option>
										 <option value="OM">Oman</option>
										 <option value="PK">Pakistan</option>
										 <option value="PW">Palau</option>
										 <option value="PS">Palestinian Territory, Occupied</option>
										 <option value="PA">Panama</option>
										 <option value="PG">Papua New Guinea</option>
										 <option value="PY">Paraguay</option>
										 <option value="PE">Peru</option>
										 <option value="PH">Philippines</option>
										 <option value="PN">Pitcairn</option>
										 <option value="PL">Poland</option>
										 <option value="PT">Portugal</option>
										 <option value="PR">Puerto Rico</option>
										 <option value="QA">Qatar</option>
										 <option value="RE">Réunion</option>
										 <option value="RO">Romania</option>
										 <option value="RU">Russian Federation</option>
										 <option value="RW">Rwanda</option>
										 <option value="BL">Saint Barthélemy</option>
										 <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
										 <option value="KN">Saint Kitts and Nevis</option>
										 <option value="LC">Saint Lucia</option>
										 <option value="MF">Saint Martin (French part)</option>
										 <option value="PM">Saint Pierre and Miquelon</option>
										 <option value="VC">Saint Vincent and the Grenadines</option>
										 <option value="WS">Samoa</option>
										 <option value="SM">San Marino</option>
										 <option value="ST">Sao Tome and Principe</option>
										 <option value="SA">Saudi Arabia</option>
										 <option value="SN">Senegal</option>
										 <option value="RS">Serbia</option>
										 <option value="SC">Seychelles</option>
										 <option value="SL">Sierra Leone</option>
										 <option value="SG">Singapore</option>
										 <option value="SX">Sint Maarten (Dutch part)</option>
										 <option value="SK">Slovakia</option>
										 <option value="SI">Slovenia</option>
										 <option value="SB">Solomon Islands</option>
										 <option value="SO">Somalia</option>
										 <option value="ZA">South Africa</option>
										 <option value="GS">South Georgia and the South Sandwich Islands</option>
										 <option value="SS">South Sudan</option>
										 <option value="ES">Spain</option>
										 <option value="LK">Sri Lanka</option>
										 <option value="SD">Sudan</option>
										 <option value="SR">Suriname</option>
										 <option value="SJ">Svalbard and Jan Mayen</option>
										 <option value="SZ">Swaziland</option>
										 <option value="SE">Sweden</option>
										 <option value="CH">Switzerland</option>
										 <option value="SY">Syrian Arab Republic</option>
										 <option value="TW">Taiwan, Province of China</option>
										 <option value="TJ">Tajikistan</option>
										 <option value="TZ">Tanzania, United Republic of</option>
										 <option value="TH">Thailand</option>
										 <option value="TL">Timor-Leste</option>
										 <option value="TG">Togo</option>
										 <option value="TK">Tokelau</option>
										 <option value="TO">Tonga</option>
										 <option value="TT">Trinidad and Tobago</option>
										 <option value="TN">Tunisia</option>
										 <option value="TR">Turkey</option>
										 <option value="TM">Turkmenistan</option>
										 <option value="TC">Turks and Caicos Islands</option>
										 <option value="TV">Tuvalu</option>
										 <option value="UG">Uganda</option>
										 <option value="UA">Ukraine</option>
										 <option value="AE">United Arab Emirates</option>
										 <option value="GB">United Kingdom</option>
										 <option value="US">United States</option>
										 <option value="UM">United States Minor Outlying Islands</option>
										 <option value="UY">Uruguay</option>
										 <option value="UZ">Uzbekistan</option>
										 <option value="VU">Vanuatu</option>
										 <option value="VE">Venezuela, Bolivarian Republic of</option>
										 <option value="VN">Viet Nam</option>
										 <option value="VG">Virgin Islands, British</option>
										 <option value="VI">Virgin Islands, U.S.</option>
										 <option value="WF">Wallis and Futuna</option>
										 <option value="EH">Western Sahara</option>
										 <option value="YE">Yemen</option>
										 <option value="ZM">Zambia</option>
										 <option value="ZW">Zimbabwe</option>
									 </select></div>';
									
	/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
									
									echo '
									
									
									
	<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
									if(isset($_POST['name']))
									{
										$name = $_POST[name];
										$email = $_POST['email'];
										$country = $_POST['country'];
										$amount = $_POST['amount'];
										
										
										if(empty($name) or empty($email) or empty($amount))
										{
											echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
										}
										else
										{
												$datetime = date('d.m.Y - H:i');
												$ins = mysql_query("INSERT INTO transaction(`VERIFIED`,`txn_id`,`user`,`amount`,`status`,`country`,`payer_email`,`datetime`) VALUES('VERIFIED','ხელით შეცვლილი','$name','$amount','PAID','$country','$email','$datetime')") or die(mysql_error());
												
												if($AddProduct == true)
												{
													echo '<h2 style="color:green;"><b> დამატებულია!!!</b></h2>';
												}
												else
												{
													echo 'შეცდომაა';
												}

												
												
												
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=top.php">';
												
										}
									}
									
									 echo '                                 </div>
									</div></div></div></div></div></div>';
	}
	if(isset($_GET['del']) and !empty($_GET['del']) and !isset($_GET[comment_id]))
	{
	$id = mysql_real_escape_string($_GET['del']);
	$Product2 = mysql_query("SELECT * FROM team WHERE id='".$id."'");
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
									 <h3><b>'.$ProductRow2[name].' წაშლა</b></h3> 
									 <br />
										<div class="tab-content">
											Are you sure?<br> <a href="top.php?del='.$_GET[del].'&yes">Yes, of course</a><br><a href="slider.php" style="color:red;">No</a>                                    </div>
									</div>
									</div></div></div></div></div></div>';
									if(isset($_GET[yes]))
									{
										$DelProduct = mysql_query("DELETE FROM team WHERE id='".$id."'");
										if($DelProduct == true)
										{
											echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=top.php"><h2 style="color:green;"><b>'.$ProductRow2[name].' წაშლილია</b></h2>';
											
										}
									}
									
	}
	if(isset($_GET['edit']) and !empty($_GET['edit']))
	{
		$id = mysql_real_escape_string($_GET['edit']);
	
	$Product3 = mysql_query("	SELECT      ROUND(SUM(amount),2) AS 'amount',
											user,
											country,
											payer_email
								FROM        transaction
								WHERE		payer_email = '$_GET[edit]'
								GROUP BY    payer_email
								ORDER BY    'amount'");
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
									 <h3>რედაქტირება <b>'.$ProductRow3[user].'</b></h3> 
									 <br />';
									 echo '<form action="top.php?edit='.$ProductRow3[payer_email].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
									 
									 <div class="input text"><label for="UserEmail">თანხის ცვლილება</label><input name="amount" type="text" value="" id="UserEmail"/></div>';
									 
									
									
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
									
									echo '
									
									
									
	<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
									 echo '                                 </div>
									</div></div></div></div></div></div>';

									if(isset($_POST['amount']))
									{
										$amount = $_POST[amount];

										
										
										if(empty($amount))
										{
											echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
										}
										else
										{
												$new_am = $ProductRow3[amount] + $amount;
												$datetime = date('d.m.Y - H:i');
												$ins = mysql_query("INSERT INTO transaction(`VERIFIED`,`txn_id`,`user`,`amount`,`status`,`country`,`payer_email`,`datetime`) VALUES('VERIFIED','ხელით შეცვლილი','$ProductRow3[user]','$amount','PAID','$ProductRow3[country]','$ProductRow3[payer_email]','$datetime')") or die(mysql_error());
												if($ins == true)
												{
													echo '<h2 style="color:green;"><b> შესწორებულია!!!</b></h2>';
												}
												else
												{
													echo 'შეცდომაა';
												}
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=top.php">';
												
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
						<a href="top.php?add">დამატება</a>                </li>
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
											<a href="/slider.php/index/sort:id/direction:asc" class="desc">Id</a>                                    </th>
																		<th>
											<a href="/slider.php/index/sort:username/direction:asc">სახელი</a>                                    </th>
											<th>
											<a href="/slider.php/index/sort:username/direction:asc">E-Mail</a>                                    </th>
											<th>
											<a href="/slider.php/index/sort:username/direction:asc">თანხა</a>                                    </th>
											
											
									
											
									
																<th>
										Actions                                </th>
								
														</tr>
							</thead>
							<tbody>';

						   
						   $Product = mysql_query("	SELECT      ROUND(SUM(amount),2) AS 'amount',
																user,
																payer_email
													FROM        transaction
													
													GROUP BY    payer_email
													ORDER BY    ROUND(SUM(amount),2) DESC") or die(mysql_error());
							$i = 1;
						   $ProductRow = mysql_fetch_array($Product);
						   do
						   {
							   echo "<tr><td class=''>".$i."</td><td class=''>".$ProductRow[user]."</td><td class=''>".$ProductRow[payer_email]."</td><td>".$ProductRow[amount]."</td>";
							   echo "</td><td style='min-width: 190px;' class='actions'>
		 <a href='?edit=$ProductRow[payer_email]' class='btn btn-mini btn-success'>Edit</a>  </td>                       </tr>";
		 $i++;
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
