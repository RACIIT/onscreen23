<?php
    
    if(isset($_POST['save']))
    {	 

        // page 1
    $Participant1=$_POST['Participant-1'];
    $Email1=$_POST['Email-1'];
    $Participant2=$_POST['Participant-2'];
    $Email2=$_POST['Email-2'];
    $Participant3=$_POST['Participant-3'];
    $Email3=$_POST['Email-3'];
    // page 2
    $TeamName=$_POST['TeamName'];
    $TeamLeader=$_POST['Team-Leader'];
    $teamEmail=$_POST['teamEmail'];
    $ContactNumber=$_POST['Contact-Number'];
    // page 3
    $Name1=$_POST['Name-1'];
    $Club1=$_POST['Club-1'];
    $Name2=$_POST['Name-2'];
    $Club2=$_POST['Club-2'];
    $Name3=$_POST['Name-3'];
    $Club3=$_POST['Club-3'];
    // page 4
    $Queries=$_POST['Queries'];
    $Merchandise=$_POST['Merchandise'];


        
    
    // database connection
	$dbservername="localhost";
    $dbusername="onscreen_visitor";
    $dbpassword="(8@?TQ7.zr}Q";
    $dbname="onscreen_registration";
    $conn= new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
    if ($conn->connect_error){
        die("connection failed from our side: ".$conn->connect_error);
    }
 

    $sql="INSERT INTO registrations (Participant1,Email1,Participant2,Email2,Participant3,Email3,TeamName,TeamLeaderName,TeamEmail,ContactNumber,ParticipantNameclub,ClubNameP1,ParticipantNameclub2,ClubNameP2,ParticipantNameclub3,ClubNameP3,Queries,Merchandise)
    VALUES ('$Participant1','$Email1','$Participant2','$Email2','$Participant3','$Email3','$TeamName','$TeamLeader','$teamEmail','$ContactNumber','$Name1','$Club1','$Name2','$Club2','$Name3','$Club3','$Queries','$Merchandise')";
    $conn->query($sql);
    $conn->close();
    
    
}           



$to = "$Email1,$Email2,$Email3,$teamEmail";
$subject = "Onscreen21 - Registration";
$header = "From:onscreen21 <noreply@rciit.org/onscreen> \r\n";
$header .= "Content-Type: text/html; charset=UTF-8\r\n";
$message = '

<!DOCTYPE html>

<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">

<head>
	<title>Onscreen21</title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
	<!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
	<!--<![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}
    	.button-phoen{
				width: auto;
			}
		th.column {
			padding: 0
		}
		a { color: inherit; } 

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		@media (max-width:660px) {
			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}
            	.button-phoen{
				margin-right: 20px;
				margin-left: 20px;
				width: max-content;
			}
			.row-content {
				width: 100% !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}
		}
	</style>
</head>

<body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation"
		style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%">
		<tbody>
			<tr>
				<td>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1"
						role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0"
										class="row-content stack" role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;"
										width="640">
										<tbody>
											<tr>
												<th class="column"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-bottom: 0px solid #E50914; border-left: 0px solid #E50914; border-right: 0px solid #E50914; border-top: 3px solid #E50914; padding-top: 20px; padding-bottom: 20px;"
													width="100%">
													<table border="0" cellpadding="0" cellspacing="0"
														class="image_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
														width="100%">
														<tr>
															<td style="width:100%;padding-right:0px;padding-left:0px;">
																<div align="center" style="line-height:10px">
																<img
																		alt="Image" src="https://i.ibb.co/hWvzD0L/logo.png"
																		style="display: block; height: auto; border: 0; width: 160px; max-width: 100%;"
																		title="Image" width="160" /></div>
															</td>
														</tr>
													</table>
												</th>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2"
						role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0"
										class="row-content stack" role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="640">
										<tbody>
											<tr>
												<th class="column"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;"
													width="100%">
													<table border="0" cellpadding="0" cellspacing="0" class="text_block"
														role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
														width="100%">
														<tr>
															<td style="padding-bottom:5px;padding-top:85px;">
																<div style="font-family: Tahoma, Verdana, sans-serif">
																	<div
																		style="font-family: Roboto, Tahoma, Verdana, Segoe, sans-serif; font-size: 12px; color: #555555; line-height: 1.2;">
																		<p
																			style="margin: 0; font-size: 14px; text-align: center;">
																			<span style="font-size:46px;"><strong><span
																						style="color:#ffffff;">Thank You
																						For
																						Registering!</span></strong></span>
																		</p>
																	</div>
																</div>
															</td>
														</tr>
													</table>
													<table border="0" cellpadding="10" cellspacing="0"
														class="text_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
														width="100%">
														<tr>
															<td>
																<div style="font-family: sans-serif">
																	<div
																		style="font-size: 16px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; color: #555555; line-height: 1.2;">
																		<p
																			style="margin: 0; font-size: 16px; text-align: center;">
																			<span
																				style="color:#999999;font-size:20px;"><strong>For
																					the Biggest Short Film
																					Competition</strong></span></p>
																	</div>
																</div>
															</td>
														</tr>
													</table>
													<table border="0" cellpadding="0" cellspacing="0"
														class="button_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
														width="100%">
														<tr>
															<td
																style="padding-bottom:65px;padding-left:10px;padding-right:10px;padding-top:15px;text-align:center; ">
																<div align="center">
																	<!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" style="height:56px;width:309px;v-text-anchor:middle;" arcsize="50%" stroke="false" fillcolor="#e50914"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:18px"><![endif]-->
																	<div
																		style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#e50914;border-radius:28px;border-top:1px solid #e50914;border-right:1px solid #e50914;border-bottom:1px solid #e50914;border-left:1px solid #e50914;padding-top:10px;padding-bottom:10px;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;" class="button-phoen">
																		<a href="https://drive.google.com/file/d/1Nc9gu0t04MEo38tDVDw5egJjJEZ3jT3l/view?usp=sharing" style="text-decoration: none;color: inherit;"><span
																			style="padding-left:60px;padding-right:60px;font-size:18px;display:inline-block;letter-spacing:normal;"><span
																				style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;"><span
																					data-mce-style="font-size: 18px; line-height: 36px;"
																					style="font-size: 18px; line-height: 36px;"><strong>Rules
																						And
																						Regulations</strong></span></span></span></a>
																	</div>
																	<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
																</div>
															</td>
														</tr>
													</table>
												</th>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3"
						role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0"
										class="row-content stack" role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="640">
										<tbody>
											<tr>
												<th class="column"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;"
													width="100%">
													<div class="spacer_block" style="height:10px;line-height:10px;"> 
													</div>
												</th>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4"
						role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0"
										class="row-content stack" role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="640">
										<tbody>
											<tr>
												<th class="column"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;"
													width="100%">
													<table border="0" cellpadding="10" cellspacing="0"
														class="text_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
														width="100%">
														<tr>
															<td>
																<div style="font-family: Verdana, sans-serif">
																	<div
																		style="font-size: 16px; font-family: Lucida Sans Unicode, Lucida Grande ,  Lucida Sans , Geneva, Verdana, sans-serif; color: #afafaf; line-height: 1.8;">
																		<p style="margin: 0; text-align: center;">Thank
																			you for the interest you have shown for
																			ONSCREEN21. You can download the
																			guidelines and regulations document by clicking the above
																			button and
																			will contact you with further details. Look
																			forward to more information on our social
																			media platforms as well.</p>
																		<p style="margin: 0; text-align: center;">Hope
																			you will enjoy the time with us and we wish
																			you all the best for the competition.</p>
																		<p
																			style="margin: 0; text-align: center; mso-line-height-alt: 28.8px;">
																			 </p>
																		<p style="margin: 0; text-align: center;">Team
																			Onscreen21</p>
																	</div>
																</div>
															</td>
														</tr>
													</table>
												</th>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5"
						role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0"
										class="row-content stack" role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="640">
										<tbody>
											<tr>
												<th class="column"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;"
													width="100%">
													<div class="spacer_block" style="height:10px;line-height:10px;"> 
													</div>
												</th>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6"
						role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0"
										class="row-content stack" role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="640">
										<tbody>
											<tr>
												<th class="column"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px;"
													width="100%">
													<div class="spacer_block" style="height:45px;line-height:45px;"> 
													</div>
												</th>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-7"
						role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0"
										class="row-content stack" role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="640">
										<tbody>
											<tr>
												<th class="column"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;"
													width="100%">
													<div class="spacer_block" style="height:10px;line-height:10px;"> 
													</div>
												</th>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-8"
						role="presentation"
						style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
						<tbody>
							<tr>
								<td>
									<table align="center" border="0" cellpadding="0" cellspacing="0"
										class="row-content stack" role="presentation"
										style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="640">
										<tbody>
											<tr>
												<th class="column"
													style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-bottom: 3px solid #E50914; border-left: 0px solid #E50914; border-right: 0px solid #E50914; border-top: 0px solid #E50914; padding-top: 40px; padding-bottom: 25px;"
													width="100%">
													<table border="0" cellpadding="0" cellspacing="0"
														class="image_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
														width="100%">
														<tr>
															<td style="width:100%;padding-right:0px;padding-left:0px;">
																<div align="center" style="line-height:10px"><img
																		alt="Im an image" src="https://i.ibb.co/hWvzD0L/logo.png"
																		style="display: block; height: auto; border: 0; width: 288px; max-width: 100%;"
																		title="Im an image" width="288" /></div>
															</td>
														</tr>
													</table>
													<table border="0" cellpadding="0" cellspacing="0" class="text_block"
														role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
														width="100%">
														<tr>
															<td
																style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:20px;">
																<div style="font-family: Arial, sans-serif">
																	<div
																		style="font-size: 14px; font-family: Arial,  Helvetica Neue , Helvetica, sans-serif; color: #555555; line-height: 1.2;">
																		<p
																			style="margin: 0; font-size: 14px; text-align: center;">
																			2021 © Copyrights Rotaract Club of IIT</p>
																	</div>
																</div>
															</td>
														</tr>
													</table>
													<table border="0" cellpadding="10" cellspacing="0"
														class="social_block" role="presentation"
														style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
														width="100%">
														<tr>
															<td>
																<table align="center" border="0" cellpadding="0"
																	cellspacing="0" class="social-table"
																	role="presentation"
																	style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
																	width="210px">
																	<tr>
																		<td style="padding:0 10px 0 0px;"><a
																				href="https://www.facebook.com/iitrotaractom/"
																				target="_blank"><img alt="Facebook"
																					height="32"
																					src="https://i.ibb.co/FWCmzmj/facebook2x.png"
																					style="display: block; height: auto; border: 0;"
																					title="Facebook" width="32" /></a>
																		</td>
																		<td style="padding:0 10px 0 0px;"><a
																				href="https://twitter.com/IITRotaract"
																				target="_blank"><img alt="Twitter"
																					height="32"
																					src="https://i.ibb.co/jwg7RJL/twitter2x.png"
																					style="display: block; height: auto; border: 0;"
																					title="Twitter" width="32" /></a>
																		</td>
																		<td style="padding:0 10px 0 0px;"><a
																				href="https://www.instagram.com/rotaract_iit/"
																				target="_blank"><img alt="Instagram"
																					height="32"
																					src="https://i.ibb.co/JkZYvR6/instagram2x.png"
																					style="display: block; height: auto; border: 0;"
																					title="Instagram" width="32" /></a>
																		</td>
																		<td style="padding:0 10px 0 0px;"><a
																				href="https://www.linkedin.com/company/rotaract-club-of-iit/"
																				target="_blank"><img alt="LinkedIn"
																					height="32"
																					src="https://i.ibb.co/BK6DfTy/linkedin2x.png"
																					style="display: block; height: auto; border: 0;"
																					title="LinkedIn" width="32" /></a>
																		</td>
																		<td style="padding:0 10px 0 0px;"><a
																				href="https://www.youtube.com/user/iitrotaract"
																				target="_blank"><img alt="YouTube"
																					height="32"
																					src="https://i.ibb.co/NYZ2ds1/youtube2x.png"
																					style="display: block; height: auto; border: 0;"
																					title="YouTube" width="32" /></a>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</th>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					
				</td>
			</tr>
		</tbody>
	</table><!-- End -->
</body>

</html>

';



mail ($to,$subject,$message,$header);
header( "Refresh:10; url=../index.html" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<title>ONSCREEN21</title>
<link rel="shortcut icon" href="../asset/icon.png" type="image/png">

<style>
body {
    font-family: 'Varela Round', sans-serif;
    background: rgb(0, 0, 0);
}
.modal-content {
    width: 175%;
    height:330px;
}
.modal-confirm {		
	color: #636363;
	/* width: 325px; */
    font-size: 14px;
    padding: 20px 25px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 8px;
    border: none;
    
}
.modal-footer{
    padding:8px 50px;
    margin-bottom:0px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
    margin: 30px 0 -15px;
    font-weight: bold;
    font-style: 'roboto';
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.text-center{
    font-size: 18px;
}
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 110px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
.modal-body{
    padding-right:30px ;
    padding-left: 30px;
}
.anim-reg{
    -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
}

.btn{
    font-size:20px;
    font-style:'roboto';
}
@-webkit-keyframes fadeInDown {
            0% {
               opacity: 0;
               -webkit-transform: translateY(-20px);
            }
            100% {
               opacity: 1;
               -webkit-transform: translateY(0);
            }
         }
         
         @keyframes fadeInDown {
            0% {
               opacity: 0;
               transform: translateY(-20px);
            }
            100% {
               opacity: 1;
               transform: translateY(0);
            }
         }
         
         .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
         }




@media (max-width: 520px){
    .modal-content {
    width: 100%;
    height:auto;
}
.text-center{
    font-size: 17px;
}
.modal-body{
    padding-left: 10px;
    padding-right: 10px;
}
}
</style>
</head>
<body class="modal-open">
<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<!-- <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a> -->
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade show anim-reg fadeInDown" style="display:block; aria-modal='true'">
	<div class="modal-dialog modal-confirm d-flex justify-content-center align-content-center xox">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100"> Registration Successful
                </h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Thankyou for registering for Onscreen21, Your Registration has been confirmed. Check your email for more details.</p>
			</div>
			<div class="modal-footer">
				<a href="../index.html" class="btn btn-success btn-block" data-dismiss="modal">OK</a>
			</div>
		</div>
	</div>
</div>     
</body>
</html>

