<?php
$datetime = date('d/m/Y');
require '../PHPMailer/PHPMailerAutoload.php';
						$mail = new PHPMailer;
						$body = '<html xmlns="http://www.w3.org/1999/xhtml"><head><script language="Javascript">
//-->
</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>Auto4Rental</title>
<link rel="stylesheet" href="https://kawebs.com/auto4rental/style.css" />
</head>
<body style="background-color: rgb(237, 237, 237); margin: 0px auto; padding: 0px;">
<center> 
      
      
      
      
      
      
      
      
      
      
      
	<!--LOGO SECTION-->
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#ededed" style="table-layout:fixed;margin:0 auto;mso-table-lspace:0pt;mso-table-rspace:0pt;">
		<tbody><tr>
			<td align="center">  
				<table width="618" bgcolor="#ededed" align="center" cellpadding="0" cellspacing="0" border="0" class="table600" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
					<tbody><tr>
						<td width="618" class="tdLogo" bgcolor="#ededed" align="left"> 
							<table width="230" align="left" cellpadding="0" cellspacing="0" border="0" bgcolor="#ededed" class="table600Logo" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
								<tbody><tr>
									<!--LOGO IMAGES WIDTH MUST BE 300px-->
									<!--HEIGHT MUST BE 200 px-->
									<!--Open the "logo.PSD" in photoshop-->
									<!--Add your logo, center it VERTICALLY as I did by default (this ensures to have some space at top and bottom as A padding)-->
									<!--FOR BEST RESULTS:MAKE YOUR IMAGES WIDTH JUST AS WIDE AS YOUR LOGO (NO SPACING at both LEFT and RIGHT sides at PSD File)-->
									<td>
										<table cellpadding="0" cellspacing="0" bgcolor="#ededed" border="0" class="centerize" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
											<tbody><tr>
												<td valign="middle" align="center" height="100" style="line-height:1px;"><a href="#" target="_blank"><img src="https://auto4rental.com/logo.png" style="display:block;" alt="Logo Image" border="0" align="top" hspace="0" vspace="0" width="150"></a></td>
												<td width="30" class="esFrMb"></td>
                                                                  </tr>
										</tbody></table>
									</td>
								</tr>
							</tbody></table>
							<table width="378" align="left" cellpadding="0" cellspacing="0" border="0" class="table600Menu" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
								<tbody><tr>
									<td height="10" style="font-size:0;line-height:0;">&nbsp;</td>
								</tr>
								<tr>
									<!-- SHORT SLOGAN (or any text) -->
                                                      <td width="378" valign="middle" align="right" height="80" class="AnnouncementTD">YOUR ORDER DETAILS</td>
								</tr>
                                                <tr>
									<td height="10" style="font-size:0;line-height:0;">&nbsp;</td>
								</tr>
							</tbody></table>
						</td>
					</tr> 
				</tbody></table>         
            	</td>
		</tr>
	</tbody></table>  
      <!--END OF THE MODULE-->
      
      
      
      
      
        
        
        
        
        
        
        
      
      
      
      
      
      <!-- INVOICE SECTION -->
       <table width="100%" bgcolor="#ededed" align="center" cellpadding="0" cellspacing="0" border="0" style="table-layout:fixed;margin:0 auto;mso-table-lspace:0pt;mso-table-rspace:0pt;">
		<tbody><tr>
			<td align="center"> 
                        <table width="618" align="center" cellpadding="0" cellspacing="0" border="0" class="table600" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                        	<tbody><tr>
                        		<td>
                                    	<table width="610" align="left" cellpadding="0" cellspacing="0" border="0" class="table600" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                <tbody><tr>
                                                      <td>  
                                                            <table width="608" cellpadding="0" cellspacing="0" border="0" class="table608" style="mso-table-lspace:0pt;mso-table-rspace:0pt;"> 
                                                                  <tbody><tr>   
                                                                  	<td>
                                                                              <table align="center" cellpadding="0" cellspacing="0" border="0" width="608" class="table608" bgcolor="#ffffff" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border:1px solid #ffffff; border-radius:4px 4px 0 0;">
                                                                                    <tbody><tr>
                                                                                          <td height="15" style="font-size:0;line-height:0;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>	
                                                                                          <td>
                                                                                                <table width="608" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" border="0" class="table608" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                      <tbody><tr>
                                                                                                            <td width="20" class="wz"></td>																																																					
                                                                                                            <td>
                                                                                                            	<!--(BILLED TO) SECTION-->
                                                                                                            	<table width="270" align="right" cellpadding="0" cellspacing="0" border="0" class="table518c" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                  	<tbody><tr>
                                                                                                                        	<!--BILLED TO-->	
                                                                                                            			<td width="270" class="invInfoA"><strong>Billed To:</strong></td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                        	<!--NAME-->	
                                                                                                            			<td class="invInfoA">'.$_POST['name'].'</td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                        	<!-- ADDRESS-->	
                                                                                                            			<td class="invInfoA">'.$_POST['email'].'</td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                        	<!--VAT NO SECTION-->	
                                                                                                            			<td class="invInfoA">'.$_POST['mob'].'</td>
                                                                                                                        </tr>
                                                                                                                  </tbody></table>
                                                                                                                  <!--YOUR COMPANYS INFORMATION-->
                                                                                                                  <table width="270" align="left" cellpadding="0" cellspacing="0" border="0" class="table518c2" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                  	<tbody><tr>
                                                                                                            			<td width="250" class="invInfoB"><a href="#">Auto4Rental Georgia<br>35 Vazha Pshavela Avenue, Tbilisi, Georgia<br>MOB: (+995) 558 51 51 91<br>E-mail: info@auto4rental.com</a></td>
                                                                                                                        	<td width="20" class="iconPdngErase" style="font-size:0;line-height:0;">&nbsp;</td>
                                                                                                                        </tr>
                                                                                                                  </tbody></table>
                                                                                                            </td>
                                                                                                            <td width="20" class="wz"></td>
                                                                                                      </tr>
                                                                                                      <tr>
                                                                                                            <td colspan="3" height="15" style="font-size:0;line-height:0;">&nbsp;</td>
                                                                                                      </tr>
                                                                                                      <tr>
                                                                                                            <td width="20" class="wz"></td>																																																				
                                                                                                            <td>
                                                                                                            	<table width="270" align="right" cellpadding="0" cellspacing="0" bgcolor="#ffffff" border="0" class="table518c" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                  	<tbody><tr>
                                                                                                                        	<!--INVOICE DATE-->	
                                                                                                            			<td width="270" class="invInfoA"><a href="#"><strong>Invoice Date</strong>: '.$datetime.'</a></td>
                                                                                                                        </tr>
                                                                                                                  </tbody></table>
                                                                                                                  <table width="270" align="left" cellpadding="0" cellspacing="0" bgcolor="#ffffff" border="0" class="table518c" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                  	<tbody><tr>
                                                                                                                        	<!--INVOICE NO-->	
                                                                                                            			<td width="250" class="invInfoB"><a href="#"><strong>Invoice No:</strong> A - '.$_POST[id].'</a></td>
                                                                                                                        	<td width="20" class="iconPdngErase"></td>
                                                                                                                        </tr>
                                                                                                                  </tbody></table>
                                                                                                            </td>
                                                                                                            <td width="20" class="wz"></td>
                                                                                                      </tr>
                                                                                                </tbody></table>
                                                                                           </td>
                                                                                     </tr> 
                                                                                      <tr>
                                                                                          <td height="30" style="font-size:0;line-height:0;">&nbsp;</td>
                                                                                    </tr>
													</tbody></table>
												</td>
											</tr>                                                  
                                                            </tbody></table>
                                                            <table width="608" cellpadding="0" cellspacing="0" bgcolor="#ffffff" border="0" class="table608" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border:1px solid #ffffff; border-radius:0 0 4px 4px;"> 
                                                                  <tbody><tr>   
                                                                  	<td>
                                                                              <table align="center" cellpadding="0" cellspacing="0" border="0" class="table608" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                    <tbody><tr>	
                                                                                          <td>
                                                                                                <table width="608" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" border="0" class="table608" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                      <tbody><tr>
                                                                                                            <td width="20" class="wz"></td>																																																				
                                                                                                            <td>
                                                                                                            	<table align="center" cellpadding="0" cellspacing="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                  	<tbody><tr>
                                                                                                                        	<td height="20" style="font-size:0;line-height:0;">&nbsp;</td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                        	<!-- INVOICE LABEL -->	
                                                                                                                              <td width="564" class="invoiceTD">Invoice</td>
                                                                                                                        </tr> 
                                                                                                                        <tr>
                                                                                                                        	<td height="20" style="font-size:0;line-height:0;">&nbsp;</td>
                                                                                                                        </tr>
																			</tbody></table>
                                                                                                                  <!--= PRODUCT GROUP (you can copy and paste the entire section to duplicate)=-->	
                                                                                                                  <table align="center" cellpadding="0" cellspacing="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                  	<tbody><tr>
                                                                                                                              <td colspan="3" valign="middle" height="40" class="invCap">Elvish Made Phone Case</td>
                                                                                                                        </tr> 
                                                                                                                        <tr style="background-color:#f9f9f9;">
																														<td width="189" valign="middle" height="25" class="invReg">Car/Model</td>
                                                                                                                        	<td width="189" valign="middle" height="25" class="invReg">Days</td>
                                                                                                                              <td width="189" valign="middle" height="25" class="invReg">Price Per Day</td>
                                                                                                                              <td width="189" valign="middle" height="25" class="invReg">Price For 10 Days</td>
																															  <td width="189" valign="middle" height="25" class="invReg">Start</td>
																															  <td width="189" valign="middle" height="25" class="invReg">End</td>
                                                                                                                        </tr>
                                                                                                                        <tr style="background-color:#f4f4f4;">
																														<td width="189" valign="middle" height="25" class="invReg">'.$_POST[car].'</td>
                                                                                                                        	<td width="189" valign="middle" height="25" class="invReg">'.$_POST[days].'</td>
                                                                                                                              <td width="189" valign="middle" height="25" class="invReg">'.ceil($_POST[price]/$_POST[days]).'</td>
                                                                                                                              <td width="189" valign="middle" height="25" class="invReg">'.$_POST[price].'</td>
																															  <td width="189" valign="middle" height="25" class="invReg">'.$_POST['start'].'</td>
																															  <td width="189" valign="middle" height="25" class="invReg">'.$_POST['end'].'</td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                        	<td colspan="3" height="20" style="font-size:0;line-height:0;">&nbsp;</td>
                                                                                                                        </tr>
                                                                                                                  </tbody></table>
                                                                                                                  <!--================================ END PRODUCT GROUP =====-->	
                                                                                                                  
                                                                                                                  <!--============================ SUBTOTAL, TOTAL, VAT, ETC. ==-->
																			<table align="center" cellpadding="0" cellspacing="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                        <!-- you can duplicate this group or delete it-->
                                                                                                                        <tbody>
                                                                                                                        <tr>
                                                                                                                        	<td width="189" class="invReg"></td>
                                                                                                                              <td width="189" valign="middle" height="25" class="invReg">Total</td>
                                                                                                                              <td width="189" valign="middle" height="25" class="invReg">'.$_POST[price].' GEL</td>
                                                                                                                        </tr>
                                                                                                                        <!-- end group -->
																			</tbody></table>
                                                                                                                  <!--======================= END SUBTOTAL, TOTAL, VAT. GROUP =-->
                                                                                                                  <table width="567" align="left" cellpadding="0" cellspacing="0" border="0" class="table518b" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                        <tbody><tr>	
                                                                                                                              <td height="40" style="font-size:0;line-height:0;">&nbsp;</td>
																				</tr>
                                                                                                                        
                                                                                                                  </tbody></table>
                                                                                                            </td>
                                                                                                            <td width="20" class="wz"></td>
                                                                                                      </tr>
                                                                                                </tbody></table>
                                                                                           </td>
                                                                                     </tr> 
                                                                                     <tr>
                                                                                          <td height="15" style="font-size:0;line-height:0;">&nbsp;</td>
                                                                                    </tr>
													</tbody></table>
                                                                              <table align="center" cellpadding="0" cellspacing="0" border="0" class="table608" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                    <tbody><tr>	
                                                                                          <td>
                                                                                                <table width="608" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" border="0" class="table608" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                      <tbody><tr>																																																				
                                                                                                            <td align="center">
                                                                                                            	<table align="center" cellpadding="0" cellspacing="0" bgcolor="#ff8725" border="0" style="border-radius:4px 4px 4px 4px;mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                  	<tbody><tr>
                                                                                                                        	<td width="20" class="wz"></td>
                                                                                                                              <td>
                                                                                                                              	<table width="528" align="center" cellpadding="0" cellspacing="0" border="0" class="table528Button" style="mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                                                                                                              		<tbody><tr>	
                                                                                                                                                <td height="8" style="font-size:0;line-height:0;">&nbsp;</td>
																							</tr>
                                                                                                                                          <tr>	
                                                                                                                                          	<!--BUTTON-->
                                                                                                                                                <!--Use shorter phrases , or the text jumps into an another line-->
                                                                                                                                                <td width="528" align="center" class="td528Button"><a target="_blank">Thank You For Your Order!</a></td>
                                                                                                                              		</tr>
                                                                                                                                          <tr>	
                                                                                                                                                <td height="8" style="font-size:0;line-height:0;">&nbsp;</td>
																							</tr>
                                                                                                                              	</tbody></table>
                                                                                                                              </td>
                                                                                                                              <td width="20" class="wz"></td>
                                                                                                                        </tr>
                                                                                                                  </tbody></table>
                                                                                                            </td>
                                                                                                      </tr>
                                                                                                </tbody></table>
                                                                                           </td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                          <td height="21" class="buttonVrt" style="font-size:0;line-height:0;">&nbsp;</td>
														</tr> 
													</tbody></table>
												</td>
											</tr>                                                  
                                                            </tbody></table>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
				</tbody></table>
                  </td>
		</tr>
	</tbody></table>
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#ededed" style="table-layout:fixed;mso-table-lspace:0pt;mso-table-rspace:0pt;">
      	<tbody><tr>
			<td align="center" width="610" height="30" class="mvd" bgcolor="#ededed" style="font-size:0;line-height:0;">&nbsp;</td>
		</tr>
	</tbody></table>
      <!--END OF THE MODULE-->
      
      
      
      
      

      
      
                
                
      
      
      
      
      
      
      
           
	<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#ededed" style="table-layout:fixed;margin:0 auto;">
       	<tbody><tr>
			<td align="center">
                  	<table width="618" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#ededed" class="table600">
					<tbody><tr>
						<td> 
                                          <table width="610" align="left" cellpadding="0" cellspacing="0" border="0" bgcolor="#ededed" class="table600">         	
                                                <tbody><tr>
                                                      <td height="0" style="font-size:0;line-height:0;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                	<!--= MAILING OPTIONS = NOTICE AND LEGAL DESCRIPTION =-->
                                                      <!--= ATTENTION = SUBSCRIBE , UNSUBSCRIBE , FORWARD LINKS ARE BUILT WITH NECESSARY TAGS (You can examine the href attribute of the Links) TO MAKE THEM WORK WITHIN MAILCHIMP , THEY ARE ALREADY WORKING AS THEY SHOULD BE-->
                                                      <td height="5" class="mailingOptionsTD">You are receiving this because you are a current subscriber, or have bought from our website.<br>© Auto4Rental GEORGIA - All rights reserved</td>
                                                      <!--= End of the section -->	
                                                </tr>
                                                <tr>
                                                      <td height="25" style="font-size:0;line-height:0;">&nbsp;</td>
                                                </tr>
                                          </tbody></table>
						</td>
					</tr>
				</tbody></table>                                                      
            	</td>
		</tr>
	</tbody></table>
      <!--FOOTER ENDS HERE-->
</center>

</body></html>';

$b = '

<html>

<head>

<title>mailinvoice</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

<style>

td{

  padding:2px;

}

</style>

<div class="container">

<div class="row" style="text-align:center;">

    <div class="col-md-12 col-xs-12">

      <p style="font-weight:bold; font-size:25px;">INVOICE</p>

    </div>

    <div class="col-md-6 col-xs-6" style="min-height:100px;">

      <table style="margin:0 auto;" width="85%" border="0" cellpadding="2" cellspacing="0">

      <tr>

        <td><img width="200px" src="https://auto4rental.com/logo.png"></td>

      </tr>

      </table>

    </div>

    <div class="col-md-6 col-xs-6" style="min-height:100px;">

      <table style="margin:0 auto;" width="85%" border="0" cellpadding="2" cellspacing="0">

      <tr>

        <td>Date:</td>

        <td>'.$datetime.'</td>

      </tr>

      <tr>

        <td>Invoice # </td>

        <td>'.$_POST[id].'</td>

      </tr>

      

      </table>

    </div>

    <div class="col-md-6 col-xs-6" style="min-height:100px;">

      <table style="margin:0 auto;" width="85%" border="0" cellpadding="2" cellspacing="0">

      <tr>

        <td>The Owner:</td>

        <td>Auto4Rental LLC</td>

      </tr>

      <tr>

        <td>Identification Code:</td>

        <td>405248058</td>

      </tr>

      <tr>

        <td>Phone number:</td>

        <td>(+995) 558515191</td>

      </tr>

      <tr>

        <td>E-mail:</td>

        <td>info@auto4rental.com</td>

      </tr>

      </table>

    </div>

    <div class="col-md-6 col-xs-6" style="min-height:100px;">

      <table style="margin:0 auto;" width="85%" border="0" cellpadding="2" cellspacing="0">

      <tr>

        <td>The Renter:</td>

        <td>'.$_POST[name].'</td>

      </tr>

      <tr>

        <td>Identification Code:</td>

        <td>----------</td>

      </tr>

      <tr>

        <td>Phone number:</td>

        <td>'.$_POST[mob].'</td>

      </tr>

      <tr>

        <td>E-mail:</td>

        <td>'.$_POST[email].'</td>

      </tr>

      </table>

    </div>

    <div class="col-md-12 col-xs-12">

      <p style="font-weight:bold; font-size:25px;">CAR RENTAL PRICE</p>

    </div>

    <div class="col-md-12 col-xs-12">

      <table style="margin:0 auto; text-align:center;" width="85%" border="0" cellpadding="2" cellspacing="0">

        <tr style="background-color:#bfbfbf;">

	  <td><b>Manufacturer</b></td>

	  <td><b>Model</b></td>

	  <td><b>Line Total Price</b></td>

	</tr>

	<tr style="background-color:#d9d9d9;">

	  <td>'.$_POST[car].'</td>

	  <td>Rav4</td>

	  <td>'.$_POST[price].'</td>

	</tr>

      </table>

    </div>

    <div class="col-md-12 col-xs-12" style="margin-top:20px;">

      <p style="font-weight:bold; font-size:25px;">PICK UP/DROP OFF</p>

    </div>

    <div class="col-md-12 col-xs-12">

      <table style="margin:0 auto; text-align:center;" width="85%" border="0" cellpadding="2" cellspacing="0">

        <tr style="background-color:#bfbfbf;">

	  <td><b>Pick Up Date</b></td>

	  <td><b>Pick Up Place</b></td>

	  <td><b>Line Total</b></td>

	</tr>

	<tr style="background-color:#d9d9d9;">

	  <td>'.$_POST[start].'</td>

	  <td>Tbilisi</td>

	  <td>-------</td>

	</tr>

	<tr style="background-color:#bfbfbf;">

	  <td><b>Drop Off Date</b></td>

	  <td><b>Drop Off Place</b></td>

	  <td><b>Line Total</b></td>

	</tr>

	<tr style="background-color:#d9d9d9;">

	  <td>'.$_POST['end'].'</td>

	  <td>Tbilisi</td>

	  <td>-------</td>

	</tr>

	<tr>

	  <td></td>

	  <td>Total Price:</td>

	  <td>'.$_POST[price].'</td>

	</tr>

      </table>

    </div>

  </div>

</div>

  

</body>

</html>


';
						$mail->isSMTP();
						//$mail->SMTPDebug = 3;
						$mail->CharSet = 'UTF-8';
						$mail->Host = 'smtp.office365.com';
						$mail->Port       = 587;
						$mail->SMTPSecure = 'tls';
						$mail->SMTPAuth   = true;
						$mail->Username = 'info@auto4rental.com';
						$mail->Password = 'Aa123456@';
						$mail->From = 'info@auto4rental.com';
						$mail->FromName = 'Auto4rental Company';
						$mail->AddAddress($_POST['email']);
						//$mail->AddAddress("info@auto4rental.com");
						$mail->Subject  = 'INVOICE CAR RENTAL';
						$mail->Body     = $b;
						$mail->IsHTML(true);
						$mail->send();
?>