<?php
ob_start();?>
<?php
include"head.php";


?><?php

// Turn off error reporting
// error_reporting(0);

// // Report runtime errors
// error_reporting(E_ERROR | E_WARNING | E_PARSE);

// // Report all errors
// error_reporting(E_ALL);

// // Same as error_reporting(E_ALL);
// ini_set("error_reporting", E_ALL);

// // Report all errors except E_NOTICE
// error_reporting(E_ALL & ~E_NOTICE);


if(isset($_POST['submit']))
 {
      $name = $_POST['name']; 
 
   $email = $_POST['email'];
   $phone = $_POST['mobile'];

   $doctor= $_POST['doctor'];
   $date = $_POST['date'];
   $appointmentTime=$_POST['appointmentTime'];
  

    
   $message = $_POST['message'];
  
   $message = wordwrap($message,70);
   
   $html2 = '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
	<head>
		
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DermCos</title>
        
    <style type="text/css">
		p{
			margin:10px 0;
			padding:0;
		}
		table{
			border-collapse:collapse;
		}
		h1,h2,h3,h4,h5,h6{
			display:block;
			margin:0;
			padding:0;
		}
		img,a img{
			border:0;
			height:auto;
			outline:none;
			text-decoration:none;
		}
		body,#bodyTable,#bodyCell{
			height:100%;
			margin:0;
			padding:0;
			width:100%;
		}
		.mcnPreviewText{
			display:none !important;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		table{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		p,a,li,td,blockquote{
			mso-line-height-rule:exactly;
		}
		a[href^=tel],a[href^=sms]{
			color:inherit;
			cursor:default;
			text-decoration:none;
		}
		p,a,li,td,body,table,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
			line-height:100%;
		}
		a[x-apple-data-detectors]{
			color:inherit !important;
			text-decoration:none !important;
			font-size:inherit !important;
			font-family:inherit !important;
			font-weight:inherit !important;
			line-height:inherit !important;
		}
		.templateContainer{
			max-width:600px !important;
		}
		a.mcnButton{
			display:block;
		}
		.mcnImage,.mcnRetinaImage{
			vertical-align:bottom;
		}
		.mcnTextContent{
			word-break:break-word;
		}
		.mcnTextContent img{
			height:auto !important;
		}
		.mcnDividerBlock{
			table-layout:fixed !important;
		}
	/*
	@tab Page
	@section Heading 1
	@style heading 1
	*/
		h1{
			/*@editable*/color:#222222;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:40px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:150%;
			/*@editable*/letter-spacing:normal;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section Heading 2
	@style heading 2
	*/
		h2{
			/*@editable*/color:#222222;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:28px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:150%;
			/*@editable*/letter-spacing:normal;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section Heading 3
	@style heading 3
	*/
		h3{
			/*@editable*/color:#444444;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:22px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:150%;
			/*@editable*/letter-spacing:normal;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section Heading 4
	@style heading 4
	*/
		h4{
			/*@editable*/color:#999999;
			/*@editable*/font-family:Georgia;
			/*@editable*/font-size:20px;
			/*@editable*/font-style:italic;
			/*@editable*/font-weight:normal;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:normal;
			/*@editable*/text-align:left;
		}
	/*
	@tab Header
	@section Header Container Style
	*/
		#templateHeader{
			/*@editable*/background-color:#ffffff;
			/*@editable*/background-image:url("https://gallery.mailchimp.com/7ec7106a074be2d76535a25d8/images/c4107ee5-f53f-433e-a010-e51b0426e67e.png");
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:contain;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:34px;
			/*@editable*/padding-bottom:34px;
		}
	/*
	@tab Header
	@section Header Interior Style
	*/
		.headerContainer{
			/*@editable*/background-color:#transparent;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:0;
			/*@editable*/padding-bottom:0;
		}
	/*
	@tab Header
	@section Header Text
	*/
		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			/*@editable*/color:#808080;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:16px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Header
	@section Header Link
	*/
		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
			/*@editable*/color:#00ADD8;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Body
	@section Body Container Style
	*/
		#templateBody{
			/*@editable*/background-color:#ffffff;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:38px;
			/*@editable*/padding-bottom:38px;
		}
	/*
	@tab Body
	@section Body Interior Style
	*/
		.bodyContainer{
			/*@editable*/background-color:#transparent;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:0;
			/*@editable*/padding-bottom:0;
		}
	/*
	@tab Body
	@section Body Text
	*/
		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			/*@editable*/color:#808080;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:16px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Body
	@section Body Link
	*/
		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
			/*@editable*/color:#00ADD8;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Footer
	@section Footer Style
	*/
		#templateFooter{
			/*@editable*/background-color:#e0629a;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:1px groove ;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:0px;
			/*@editable*/padding-bottom:0px;
		}
	/*
	@tab Footer
	@section Footer Interior Style
	*/
		.footerContainer{
			/*@editable*/background-color:#transparent;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:0;
			/*@editable*/padding-bottom:0;
		}
	/*
	@tab Footer
	@section Footer Text
	*/
		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			/*@editable*/color:#FFFFFF;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:12px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:center;
		}
	/*
	@tab Footer
	@section Footer Link
	*/
		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
			/*@editable*/color:#FFFFFF;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	@media only screen and (min-width:768px){
		.templateContainer{
			width:600px !important;
		}

}	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnRetinaImage{
			max-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImage{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
			max-width:100% !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnBoxedTextContentContainer{
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupContent{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardBottomImageContent{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockInner{
			padding-top:0 !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockOuter{
			padding-top:9px !important;
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnTextContent,.mcnBoxedTextContentColumn{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
			padding-right:18px !important;
			padding-bottom:0 !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcpreview-image-uploader{
			display:none !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Heading 1
	@tip Make the first-level headings larger in size for better readability on small screens.
	*/
		h1{
			/*@editable*/font-size:30px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Heading 2
	@tip Make the second-level headings larger in size for better readability on small screens.
	*/
		h2{
			/*@editable*/font-size:26px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Heading 3
	@tip Make the third-level headings larger in size for better readability on small screens.
	*/
		h3{
			/*@editable*/font-size:20px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Heading 4
	@tip Make the fourth-level headings larger in size for better readability on small screens.
	*/
		h4{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Boxed Text
	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
			/*@editable*/font-size:14px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Header Text
	@tip Make the header text larger in size for better readability on small screens.
	*/
		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			/*@editable*/font-size:16px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Body Text
	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			/*@editable*/font-size:16px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Footer Text
	@tip Make the footer content text larger in size for better readability on small screens.
	*/
		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			/*@editable*/font-size:14px !important;
			/*@editable*/line-height:150% !important;
		}

}</style></head>
    <body>
		<!--*|IF:MC_PREVIEW_TEXT|*-->
		<!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span><!--<![endif]-->
		<!--*|END:IF|*-->
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td align="center" valign="top" id="templateHeader" data-template-container>
									<!--[if (gte mso 9)|(IE)]>
									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
									<tr>
									<td align="center" valign="top" width="600" style="width:600px;">
									<![endif]-->
									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
										<tr>
                                			<td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="*|BRAND:LOGO|*" width="196" style="max-width:196px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
										</tr>
									</table>
									<!--[if (gte mso 9)|(IE)]>
									</td>
									</tr>
									</table>
									<![endif]-->
								</td>
                            </tr>
							<tr>
								<td align="center" valign="top" id="templateBody" data-template-container>
									<!--[if (gte mso 9)|(IE)]>
									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
									<tr>
									<td align="center" valign="top" width="600" style="width:600px;">
									<![endif]-->
									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
										<tr>
                                			<td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
              	<!--[if mso]>
				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
				<tr>
				<![endif]-->
			    
				<!--[if mso]>
				<td valign="top" width="600" style="width:600px;">
				<![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <h2><span style="color:#FFA07A">Thanks Mr/Mrs. '.$name .', for showing your interest.</span></h2>

      <p style="font-size:18px !important;">The team of Dr. Ramanjit Singh at Dermcos Skin Care Clinic thanks you for trusting and choosing us.<br>
    Your appointment has been confirmed at Dermcos Skin Care Clinic on '.$DateofApp.' at '.$TimeofApp.' .<br>
   Call us: 099101 24566</p>

                        </td>
                    </tr>
                </tbody></table>
				<!--[if mso]>
				</td>
				<![endif]-->
                
				<!--[if mso]>
				</tr>
				</table>
				<![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #E0629A;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; padding: 18px;">
                                <a class="mcnButton " title="To Visit Our Services" href="http://dermcosskincare.com/services-and-treatments.php" target="_blank" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">To Visit Our Services</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table></td>
										</tr>
									</table>
									<!--[if (gte mso 9)|(IE)]>
									</td>
									</tr>
									</table>
									<![endif]-->
								</td>
                            </tr>
                            <tr>
								<td align="center" valign="top" id="templateFooter" data-template-container>
									<!--[if (gte mso 9)|(IE)]>
									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
									<tr>
									<td align="center" valign="top" width="600" style="width:600px;">
									<![endif]-->
									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
										<tr>
                                			<td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
              	<!--[if mso]>
				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
				<tr>
				<![endif]-->
			    
				<!--[if mso]>
				<td valign="top" width="600" style="width:600px;">
				<![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            Dermcos Skin Care Clinic<br>
SCO-58, Old Judicial Complex, Civil Lines,<br>
Gurgaon-122001,&nbsp;Haryana,India
<p><a href="mailto:info@dermcosskincare.com">info@dermcosskincare.com</a><br>
+91-124-4228328,9910124566, 9999697606<br>
Monday to Sunday - 10:00 AM - 7:00 PM</p>
<br>
&nbsp;
                        </td>
                    </tr>
                </tbody></table>
				<!--[if mso]>
				</td>
				<![endif]-->
                
				<!--[if mso]>
				</tr>
				</table>
				<![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
    <tbody class="mcnFollowBlockOuter">
        <tr>
            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
    <tbody><tr>
        <td align="center" style="padding-left:9px;padding-right:9px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center" valign="top">
                                    <!--[if mso]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://www.facebook.com/DermcosSkinCareClinic/?tsid=0.7570122131146491&amp;source=typeahead" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://twitter.com/dermcosskincare" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://dermcosskincare.com/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="mailto:info@dermcosskincare.com" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-forwardtofriend-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                    <!--[if mso]>
                                    </tr>
                                    </table>
                                    <![endif]-->
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
    </tbody>
</table></td>
										</tr>
									</table>
									<!--[if (gte mso 9)|(IE)]>
									</td>
									</tr>
									</table>
									<![endif]-->
								</td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>';





		 $html1 = "<html><body>
		 <div id='appointmentTemplate' style='width:100%; background-color:#fff; padding:20px;'>
			   <div id='templateInner' style='margin:auto; width:70%; background-color:white; padding:20px;'>
				Dear Dr. Vimmi Kashyap<br>
				Someone has Contact  request for you. Here are the details:
				<hr>
			   
				<span><b>name</b>: ".$name."</span> <br>
				<span><b>Email</b>: ".$email."</span><br>

				 <span><b>Phone</b>:<a href='tel:".$phone."'>".$phone."</a> </span><br>
				 <span><b>Doctor</b>: ".$doctor."</span><br>
				 <span><b>Date</b>: ".$date."</span><br>
				<span><b>Date</b>: ".$appointmentTime."</span><br>
				<span><b>Message</b>: ".$message."</span><br>
			   
				<hr>
				Thanks.<br>
				Website Url: http://www.dermcosskincare.com/
			   </div>
		  </div>
		</body></html>";

















		//  print_r("$html1");
		//  die();
  //  $headers .= "MIME-Version: 1.0\r\n";
  // $headers = "From: Dr_Sfurti_Mann_Website;.\r\nContent-Type: text/html;\r\n charset=ISO-8859-1;";
   
   
   
//    $headers = 'From: Dr_Sfurti_Mann_Website\r\n'.
       
//        'X-Mailer: PHP/' . phpversion() . "\r\n" .
//        "MIME-Version: 1.0\r\n" .
//        "Content-Type: text/html; charset=utf-8\r\n" .
//        "Content-Transfer-Encoding: 8bit\r\n\r\n";

 //$mailSend = mail('ichelonconsulting@gmail.com','anantahealthclinic@gmail.com','Appointment Request.', $html1, $headers);









// Include PHPMailer library files
// require 'PHPMailer/Exception.php';
// require 'PHPMailer/PHPMailer.php';
// require 'PHPMailer/SMTP.php';
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
//$mail->Host     = 'smtp.dermcosskincare.com';
$mail->SMTPAuth = true;
$mail->Username = 'ichelonconsulting@gmail.com';
$mail->Password = 'ichelon@007';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;




$mail->setFrom('ichelonconsulting@gmail.com','dermcosskincare');
$mail->addReplyTo('ichelonconsulting@gmail.com','dermcosskincare');

// Add a recipient
//$mail->addAddress('amanichelon@gmail.com');
$mail->addAddress('info@dermcosskincare.com');
$mail->addAddress('ichelonconsulting@gmail.com');
$mail->addAddress('$email');

// Add cc or bcc 
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Email subject
$mail->Subject = 'dermcosskincare Appointment Form';

// Set email format to HTML
$mail->isHTML(true);

// Email body content

$mail->Body =  $html1;
//$mail->Send();


// Send email


// $mail->ClearAddresses();

// $aman=$mail->AddAddress('$email');


// $mail->Body = $html1;
// $mail->Send();
// header("Location:thankyou.php");

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else{
	// echo "Message sent!<br>";
}

// print_r('$email');
// die();

// now send to user.

// print_r($email);
// die();

$subject='dermcosskincare';

$mail2 = new PHPMailer;
$mail2->isHTML();
$mail2->IsSMTP(); 
$mail2->Host     = 'smtp.gmail.com';
//$mail->Host     = 'smtp.dermcosskincare.com';
$mail2->SMTPAuth = true;
$mail2->Username = 'ichelonconsulting@gmail.com';
$mail2->Password = 'ichelon@007';
$mail2->SMTPSecure = 'tls';
$mail2->Port     = 587;



$mail2->setFrom('ichelonconsulting@gmail.com', 'dermcosskincare'); 
$mail2->AddAddress($email);
$mail2->Subject = $subject;
$mail2->Body = $html2;
if(!$mail2->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail2->ErrorInfo;
}
else
{
	header('Location:Thankyou.php ');
}

// $mailSend = mail('amanichelon@gmail.com','gautamnaresh96@gmail.com','anantahealthclinic@gmail.com','Appointment Request.', $html1, $headers);

//header("Location:Thankyou.php"); 	



 }

?>  

 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/5bda8f4a22b2be1613fe5405/default';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
// </script>
<!--End of Tawk.to Script-->

<!--messanger-->

	
		
				
<section class="slider">
    <div class="container-fluid" style="padding:0;" >
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0; ">
			<div class="container-fluid">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      
      <!-- <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li> -->
   
    </ol>

    <!-- Wrapper for slides  -->
    <div class="carousel-inner">

     

      <div class="item active">
       <img src="images/banners/1.jpeg" alt="Best ivf Doctor in India" usemap="#planetmap"  >
   
       </div>
      
      <div class="item">
       <img src="images/banners/2.jpeg" alt="Best ivf Clinic in Gurgaon" usemap="#planetmap" >
    
       </div>
      <div class="item">
       <img src="images/banners/3.jpeg" alt="Best ivf Center in India" usemap="#planetmap" >
    
       </div>
	   <div class="item">
       <img src="images/banners/4.jpeg" alt="Best ivf Doctor in India" usemap="#planetmap"  >
   
       </div>
     
	  
	  <!-- <div class="item">
        <img src="images/banners/N5.jpg" alt="Best ivf Clinic in Noida"  usemap="#planetmap" >
        
      </div>
	  
	  
	  <div class="item">
        <img src="images/banners/N6.jpg" alt="Best ivf Clinic in Delhi"  usemap="#planetmap" >
        
    	 </div> -->
    	 
    	 
	 
	
	</div>

    <!-- Left and right controls -->
    
  
  </div>
</div>

	 <map name="planetmap">
  <area shape="rect" coords="0,0,400,400" href="appointment.php" alt="Sun">
  
    </map>		
                
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right"  >
                   <form class="form-vertical slider-form" method="post" action="#"  id="form">
                        <h4 class="text-center"><b>Free Treatment Advice</b></h4>
                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Name*" name="name" required="required">
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <input type="email" class="form-control input-lg" placeholder="Email*" name="email" >
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                    	<input type="mobile" aria-required="true" size="30" value="" name="mobile"  class="form-control input-lg" placeholder="Mobile*" required="required">
                     
                    </div>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <textarea name="query" class="form-control input-lg" placeholder="Query*" required="required"></textarea>
                </div>
                
                
                <div class="form-group">
                  <p >* Fields are required</p>
                </div>
                <div class="form-group">
                  <input type="hidden" value="" name="url" id="current_url"/>
                  <input type="submit" name="submit"  value="Send" class="btn btn-success btn-lg" id="submit"/>
                  <span id="alert"></span>
                </div>
              </form>
            </div>
        </div>
    </div>

</section>

	
		<!-- Wrapper For Sliders Ends -->
		<!-- Controls Starts -->
					
		<!-- Controls Ends -->
		
					<!-- Services Home Section Starts -->
<!--		<section class="section-area services-home text-center">-->
		<!-- Nested Container Starts -->
<!--			<div class="container-fluid" style="overflow:hidden">-->
<!--			<h1 >Our Centers</h1>-->
			
<!--			<div id="area">-->
			
				
				
			<!-- Services List Carousel Starts -->
			
<!--<marquee  scrollamount="10" onMouseout="this.start();" onMouseover="this.stop();">-->
				
				<!-- Col #1 Starts -->
<!--				<div id="centers" >-->
					
				
<!--				<center><a href="noida.php" target="_blank"><img src="images/slider/Noida.png" alt="Best ivf Center in Noida" class="img-responsive">-->
<!--				<p> Noida</p></a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
<!--				<div id="centers">-->
					
<!--					<center><a href="delhi.php" target="_blank"><img src="images/slider/d1.png" alt="Best ivf Center in Delhi" class="img-responsive">-->
<!--				<p> Delhi</p> </a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
				
<!--					<div id="centers">-->
				
<!--				<center><a href="gurugram.php" target="_blank"><img src="images/slider/g1.png" alt="Best ivf Center in Gurgaon" class="img-responsive">-->
<!--                  <p>  Gurugram</p></a></center>-->
				
<!--				</div>-->
				<!-- Col #1 Ends -->
<!--                <div id="centers">-->
					
				
<!--				<center><a href="Baghpat.php" target="_blank"><img src="images/slider/1.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p> Baghpat</p></a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
<!--				<div id="centers">-->
					
<!--					<center><a href="Kanpur.php" target="_blank"><img src="images/slider/5.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p> Kanpur</p> </a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
				
<!--					<div id="centers">-->
				
<!--				<center><a href="Uttarakhand.php"target="_blank"><img src="images/slider/2.png" alt="gurugram" class="img-responsive">-->
<!--                  <p> Haldwani</p></a></center>-->
				
<!--				</div>-->
				
		 
          <!-- Col #1 Ends -->
<!--                <div id="centers">-->
					
				
<!--				<center><a href="dibrugarh.php" target="_blank"><img src="images/slider/3.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p>Dibrugarh</p></a></center>-->
			
				
<!--				</div>-->
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
<!--				<div id="centers">-->
					
<!--					<center><a href="Durgapur.php" target="_blank"><img src="images/slider/4.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p> Durgapur</p> </a></center>-->
			
				
<!--				</div>-->
				
<!--					<div id="centers">-->
					
<!--					<center><a href="rewari.php" target="_blank"><img src="images/slider/4.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p> Rewari</p> </a></center>-->
			
				
<!--				</div>-->
				
<!--				<div id="centers">-->
					
<!--					<center><a href="Guwahati.php" target="_blank"><img src="images/slider/4.png" alt="Thumb 1" class="img-responsive">-->
<!--				<p>Guwahati</p> </a></center>-->
			
<!--				</div>-->
<!--					</div>-->
				
		
			
				
				  <!-- Col #1 Ends -->
              
				<!-- Col #1 Ends -->
				<!-- Col #1 Starts -->
				
				
				
				<!-- Col #1 Ends -->
		

		<!-- Col #1 Starts -->
	
				
		 		
<!--		</marquee>-->

<!--		</div>-->
<!--		</div>-->
		
		<!--		<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>-->
  <!--<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>-->
			<!-- Services List Carousel Ends -->
<!--			</div>-->
		<!-- Nested Container Ends -->
<!--		</section>-->

<!--owl clouser start-->


<!-- <section class="section-area services-home text-center" >
    
    <h1 >Our Centers</h1>
<div class="owl-carousel1 owl-theme" id="owl-demo">
          
  <div class="item"><center><a href="noida.php" target="_blank"><img src="images/slider/n1.png" alt="Best ivf Center in Noida"  class="img-responsive"><p> Noida</p></a></center></div>
  <div class="item"><center><a href="delhi.php" target="_blank"><img src="images/slider/delhi.png" alt="Best ivf Center in Delhi" class="img-responsive">	<p> Delhi</p> </a></center></div>
  
  <div class="item"><center><a href="gurugram.php" target="_blank"><img src="images/slider/gurgaon.png" alt="Best ivf Center in Gurgaon" class="img-responsive"><p>  Gurugram</p></a></center></div>
  
 <div class="item">	<center><a href="Baghpat.php" target="_blank"><img src="images/slider/bhagat.png" alt="Thumb 1" class="img-responsive">	<p> Baghpat</p></a></center></div>
 <div class="item"><center><a href="Durgapur.php" target="_blank"><img src="images/slider/1.png" alt="Thumb 1" class="img-responsive">
	<p> Durgapur</p> </a></center></div>
 
 
 
 
  <div class="item"><center><a href="Kanpur.php" target="_blank"><img src="images/slider/400.png" alt="Thumb 1" class="img-responsive">
			<p> Kanpur</p> </a></center></div>
  <div class="item"><center><a href="Uttarakhand.php"target="_blank"><img src="images/slider/2.png" alt="gurugram" class="img-responsive"><p> Haldwani</p></a></center></div>
  <div class="item"><center><a href="dibrugarh.php" target="_blank"><img src="images/slider/3.png" alt="Thumb 1" class="img-responsive"><p>Dibrugarh</p></a></center></div>
  <div class="item"><center><a href="rewari.php" target="_blank"><img src="images/slider/r.png" alt="Thumb 1" class="img-responsive">	<p> Rewari</p> </a></center></div>
  <div class="item"><center><a href="Guwahati.php" target="_blank"><img src="images/slider/g.png" alt="Thumb 1" class="img-responsive">	<p>Guwahati</p> </a></center></div>
  <div class="item"><center><a href="panipat.php" target="_blank"><img src="images/slider/p.png" alt="Thumb 1" class="img-responsive">	<p>panipat</p> </a></center></div>
 
</div> -->

<!--owl clouser end -->

<!-- Our Center-->



<!-- our Client End-->

	<!-- Slider Ends -->
	<!-- Intro Section Starts -->
	
	
	
	<!--collage start-->
	

		</div>
		

			   <section class="section-area services-home text-center" style="background-color:#343434; color:#fff;" >
		<!-- Nested Container Starts -->
			<div class="container" >
			<h1 style="    font-family: 'Alex Brush', cursive;
">Our Vision </h1>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
					    <p>Your skin is the mirror that reflects your overall health. Your skin does not just lie there to serve the purpose of beauty but acts as a barrier and protect you from various environmental and biological threats such as extreme temperatures, sunrays and bacterias. In short, your skin is the largest organ that bears the brunt of the external environment and acts a first line defence. However, it is also very common to suffer from skin disorders that could ruin your looks and take a toll at your self-confidence. Any problem related to your skin requires the best <b>skin specialist in Gurgaon</b>

We at Dermcos skin care clinic, which is the<b> best skin care clinic in Gurgaon </b> constantly work towards providing a world-class solution for skin troubles of all sorts. The experts at Dermcos strictly believes in “making people feel good in their own skin, while at the same time enhancing the health and charm of their skin. Dermcos clinic is envisaged at providing its patients with the excellent services for every kind of skin issues such as acne, hair related issues and issues that may require cosmetic or plastic surgery procedures. Dermatology has been an integral practice that is an amalgamation of medicine, cosmetic and surgical procedures to render the most amazing and glowing skin to you. Dermcos clinic has a dream of becoming the<b> best skin care clinic in Gurgaon,</b> which is also the centre of excellence for dermatology and cosmetology. This clinic instead of focusing on just the dermatology aspect takes care of cosmetology and surgical aspects as well. The experts at Dermcos skin care clinic makes sure to keep up with the latest trends and follows an evidence-based approach while following the strict international protocol. 
</p>

<!-- <a href="#" class="btn btn-secondary animation">View More</a> -->
				
					</div>
				</div>
			</div>

		</section>





















	    
	    <!--section class="section-area services-home text-center" style="background-color: #fff;" >
	
			<div class="container" >
			<h1>Our Wonderful Success Stories </h1>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
					    <a href="Our-Wonderful-Success-Stories.php" target="_blank"><img src="images/collage.png" alt="Thumb 1" class="img-responsive">
				
					</div>
				</div>
			</div>

		</section-->
	<!-- collage End -->
	<!-- <section class="intro-home section-area text-center-xs">
		
			<div class="container" style="margin-top:-40px;">
			    
		<h3 class=" text-center">Why choose <br>India IVF Clinic ?</h3>		
	
				<div class="row">
					<div class="col-md-3 col-sm-12 col-xs-12">
					</div>
					
					<div class="col-md-12">
					 	<div class="container">
 
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel" data-interval="3000">
   
    <div class="carousel-inner">

      <div class="item active">
	  <p>Senior IVF Specialist Formerly at AIIMS & Sir Gangaram Hospital New Delhi.</p>
	  
        <img src="images/gallery/thumb/s1.jpeg" alt="first slider" id="slider1"usemap="slide2" class="img-thumbnail">
        
      </div>

      <div class="item">
<p>State of the Art IVF Lab.</p>      
	  <img src="images/gallery/thumb/s2.png" alt="second slider" id="slider1"usemap="slide2" class="img-thumbnail">
         
      </div>
      <div class="item">
        <p>Individualized fertility program that is right for you.</p>
		<img src="images/gallery/thumb/s3.jpeg" alt="second slider" usemap="slide2" id="slider1" class="img-thumbnail">
       
      </div>
      
      <div class="item">
        <p>Procedures done by Senior IVF Specialist only</p>
		<img src="images/gallery/thumb/fouth.jpeg" alt="second slider" usemap="slide2"  id="slider1" class="img-thumbnail">
       
      </div>
      <div class="item">
        <p> Ethical and transparent practices </p>
	<img src="images/gallery/thumb/ethics.jpg" alt="second slider"usemap="slide2" id="slider1" class="img-thumbnail"
	
	>
       
      </div>
      <div class="item">
        
		<p>0% EMI facility Available</p>
		<img src="images/gallery/thumb/s5.png" alt="second slider"usemap="slide2" id="slider1" class="img-thumbnail">
       
      </div>
    <div class="item">
<p>Free First consultation     
</p>    
    <img src="images/gallery/thumb/s6.jpeg" alt="second slider"  usemap="slide2" id="slider1" class="img-thumbnail">
       </div>
      
	  
	  
	  
	  
      	<div class="col-md-3 col-sm-12 col-xs-12">
					</div>
  
    </div>
<map name="slide2">
  <area shape="rect" coords="0,0,650,400" href="gallery-page.php" alt="Sun">
  
    </map>
   
    
  
  </div>
</div>
					</div>
					
				</div>
			</div>
	
		</section>
				 -->
				<!-- links Ends -->
					
					<!-- query form -->
				<!-- row Ends -->
				
				<!-- container Ends -->

	<!-- Intro Section Ends -->
	<!-- Services Home Section Starts -->
	
	

		<section class="section-area services-home text-center" style="background-color: #fff;">
		<!-- Nested Container Starts -->
			<div class="container">
				<h1 class="font" >What's New At Dermcos</h1>
				
			<!-- Services List Carousel Starts -->
				<div  id="services-home-carousel" class="owl-carousel">
				<!-- Col #1 Starts -->
					
				
					<div class="services-home-col">
						<img src="images/services/Face Sculpting.png" alt="Image" class="img-responsive img-center img-circle">
						<h5 ><em>PRP Treatment</em></h5>
						<p>Platelet Rich Protein Treatment (PRP) .Treating Atopic areata, Melasma and facial rejuvenation </p>
						<a href="prp-treatment.php" class="btn btn-secondary animation">View More</a>
					</div>
			
					<div class="services-home-col">
						<img src="images/services/botox.png" alt="Image" class="img-responsive img-center img-circle">
						<h5 ><em>Hollywood Peel</em></h5>
						<p>The Hollywood Laser Peel, also known as the Spectra Peel or carbon peel, is a mildly exfoliating and resurfacing procedure that improves the appearance of fine wrinkles, pigment, pores, and acne.</p>
						<a href="skin-tightening.php" class="btn btn-secondary animation">View More</a>
					</div>

					 <div class="services-home-col">
						<img src="images/services/In House Legacy invite.png" alt="Image" class="img-responsive img-center img-circle" >
						<h5 ><em>Chemical peels</em></h5>
						<p>Chemical Peels also known as skin polishing is a technique of exfoliation, used to smooth rough & dry skin. The topmost layer of the skin which is damaged by sunburn, pigmentation, scarring from spots is removed by this technique</p>
						<a href="chemical-peels.php" class="btn btn-secondary animation">View More</a>
					</div>
			
			 
		
		</div>
</div>
		
		</section>


		<section class="section-area services-home text-center" style="background-color:#343434; color:#fff;" >
		<!-- Nested Container Starts -->
			<div class="container" >
			<h1 style="    font-family: 'Alex Brush', cursive;
">OUR AIM </h1>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
					    <p>Our Aim is to bring Dermcos Skin Care Clinic at the forefront of dermatology and make it India's Premiere Skincare centre utilising the latest technological advances with great emphasis on patient care and safety - delivering world-class quality for people searching for a good dermatologist. 

<!-- <a href="#" class="btn btn-secondary animation">View More</a> -->
				
					</div>
				</div>
			</div>

		</section>

	<!-- Services Home Section Ends -->
	<!-- Info Home Section Starts -->
	<section class="section-area services-home text-center" >
		<!-- Nested Container Starts -->

		<a href="doctor-appointment.php">
			<div class="container" >
	<picture>
  <source srcset="images/dee.jpg" type="image/svg+xml">



  <img src="images/dee.jpg" class="img-fluid img-thumbnail" alt="...">
</picture>

</a>
</div>
</section>
	<section class="section-area services-home text-center" style="background-color:#343434; color:#fff;" >
		<!-- Nested Container Starts -->
			<div class="container" >
			<h1 class="font" >Health Tips of Day </h1>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
					    <p>Folliculitis-Waxing, epilation makes teen age girls prone to Folliculitis. The baseline care for such thing is to get these things done in a hygienic place and application of moisturizer in the direction of hair follicles after the procedure."</p>

<a href="HealthTips.php" class="btn btn-secondary animation">View More</a>
				
					</div>
				</div>
			</div>

		</section>
	
	
	
	
	
	
		
			<section class="intro-home section-area text-center-xs" style="padding-bottom:0;">
		<!-- Nested Container Starts -->	<div class="container" ">
		 
				<h4 class=" text-center font" >Meet Our Specialist</h4>
					
				<div class="row">
					
					
					<div class="col-md-8 col-sm-7 col-xs-12" style="font-size:100%;text-align: left;" >
						<p><div> <p>Dermcos skin care clinic is flourishing under the guidance of Dr. Ramanjit Singh who is the best<b> skin specialist in Gurgaon</b> having extensive experience in the field of dermatology and cosmetology where he has served for more than a decade now. Dr. Ramanjit has provided his esteemed guidance to several dermatologists and was amongst the first to introduce the concept of Laser spa in the country. He has completed his MBBS from MSR medical college, Banglore and MD from JJM medical college, Devangere. He has various fellowships and is an active member of various dermatological societies all around the globe. Dr. Ramanjit started Dermcos skin care clinic with the vision of providing the dermatological services at affordable rates while maintaining the international standards in their procedures and protocols, which makes Dermcos the best<b> skin care clinic in Gurgaon.</b> </p>





</ul>
</div></p>
						
						
					</div>
					<div class="col-md-4 col-sm-5 col-xs-12">
						<img src="images/ramanjitsingh.png" alt="Dr._Richika_Sahay_Shukla" style=" border-radius:30%;margin-top:15px;" class="img-responsive ">

						<h5>Dr Ramanjit Singh</h5>
		
					</div>
				</div>
			</div>
		<!-- Nested Container Ends -->
<hr>
		</section  > 

		
		
			<!-- Info Home Section Ends -->
	<!-- Memories Home Section Starts -->
		<!-- <section class="section-area memoried-home-section text-center-xs"  style="background-color: #fff;" >
		
			<div class="container">
			 <center><h3 class=" text-center"><b>Fertility Blog</b></h3><hr></center>
				<div class="row">
					
					<div class="col-md-3">
					<p > <a href="Recurrent-Pregnancy-loss-what-to-do.php" >Recurrent Pregnancy loss: what to do?</a></p>
						<img src="images/blog/blog3.jpg" alt="Blog Post Image" style="height: " width="" class="img-thumbnail">
					<p>Recurrent pregnancy loss is classically defined as the occurrence</p><a href="https://plus.google.com/u/2/109765596680089522078" target="_blank">
        <img id="logo2" src="images/logo/google.png" alt="Google" />
    </a>
	  <a href="https://www.facebook.com/indiaivfdelhi/" target="_blank">
        <img id="logo2" src="images/logo/facebook.png" alt="Facebook" />
    </a>
	
    <a href="https://twitter.com/india_ivf" target="_blank">
        <img id="logo2" src="images/logo/twitter.png" alt="Twitter" />
    </a>
	<!--<a href="whatsapp://send" data-text="How to create the Share on WhatsApp button on your site:" data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog3" ><img id="logo2" src="images/logo/whatsup.png" alt="whatsup" /></a>
	
	
	<a href="whatsapp://send" data-text="Recurrent pregnancy loss is classically " data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog3" class="wa_btn wa_btn_s"></a>
	
	<br>
						<a href="" class="btn btn-secondary animation">View More</a>
				     </div>
					
					
					
					<div class="col-md-3">
					<p ><a href="Polycystic Ovarian syndrome Cause of infertility.php" >Polycystic Ovarian syndrome:Cause of infertility?</a></p>
						<img src="images/blog/p.jpeg" alt="Blog Post Image" style="height: " width="" class="img-thumbnail">
					<p>A Polycystic ovarian syndrome (PCOS) is a group of symptoms that affect </p>
					
					<a href="https://plus.google.com/u/2/109765596680089522078" target="_blank">
        <img id="logo2" src="images/logo/google.png" alt="Google" />
    </a>
	  <a href="https://www.facebook.com/indiaivfdelhi/" target="_blank">
        <img id="logo2" src="images/logo/facebook.png" alt="Facebook" />
    </a>
	 
    <a href="https://twitter.com/india_ivf" target="_blank">
        <img id="logo2" src="images/logo/twitter.png" alt="Twitter" />
    </a>
	<!--<a href="whatsapp://send" data-text="How to create the Share on WhatsApp button on your site:" data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog1" ><img id="logo2" src="images/logo/whatsup.png" alt="whatsup" /></a>
					<br>
					
						<a href="blog1.php" class="btn btn-secondary animation">View More</a>
				     </div>
					 
					 
                        <div class="col-md-3">
						<p ><a href="Causes-of-infertility-in-men-and-women.php" >Causes of infertility in men and women</a></p>
						<img src="images/blog/man.jpg"  alt="man"style="height: " width="" class="img-thumbnail">
					<p>Infertility is becoming a growing cause for concern in India. An infertility </p>
					
					
					<a href="https://plus.google.com/u/2/109765596680089522078" target="_blank">
        <img id="logo2" src="images/logo/google.png" alt="Google" />
    </a>
	  <a href="https://www.facebook.com/indiaivfdelhi/" target="_blank">
        <img id="logo2" src="images/logo/facebook.png" alt="Facebook" />
    </a>
	
    <a href="https://twitter.com/india_ivf" target="_blank">
        <img id="logo2" src="images/logo/twitter.png" alt="Twitter" />
    </a>
	<!--<a href="whatsapp://send" data-text="How to create the Share on WhatsApp button on your site:" data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog2" ><img id="logo2" src="images/logo/whatsup.png" alt="whatsup" /></a>
					
					<br>
					
					
						<a href=" Causes-of-infertility-in-men-and-women.php" class="btn btn-secondary animation">View More</a>
				     </div>
				    
					<div class="col-md-3">
					
					<p ><a href="Traditional-vs-Gestational-Surrogacy.php" > Traditional vs Gestational Surrogacy</a></p>
						<img src="images/blog/blog4.jpg" alt="blog" style="height: " width="" class="img-thumbnail">
					<p>The term surrogacy is becoming increasingly popular day by day. For couples</p>
					
					
					
					
					<a href="https://plus.google.com/u/2/109765596680089522078" target="_blank">
        <img id="logo2" src="images/logo/google.png" alt="Google" />
    </a>
	  <a href="https://www.facebook.com/indiaivfdelhi/" target="_blank">
        <img id="logo2" src="images/logo/facebook.png" alt="Facebook" />
    </a>
	
    <a href="https://twitter.com/india_ivf" target="_blank">
        <img id="logo2" src="images/logo/twitter.png" alt="Twitter" /><br>
    </a>
	<!--<a href="whatsapp://send" data-text="How to create the Share on WhatsApp" data-href="http://www.ichelon.in/projects/indiaivf-demo/india-ivfn/blog4" ><img id="logo2" src="images/logo/whatsup.png" alt="whatsup" /></a>
					
					
					
						<a href="Traditional-vs-Gestational-Surrogacy.php" class="btn btn-secondary animation">View More</a>
				     </div>
					
				</div>
		
			</div>

		</section> -->
	<!--	<section class="section-area testimonials-section parallax text-center">
		<!-- Nested Container Starts -->
	
			<!--<div class="container">
				<h1>Testimonials</h1>
				<h5>What people say about us</h5>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
						<div id="testimonials-carousel" class="owl-carousel">
							<div>
								<p>
									Regardless of who you are - manager, cook, politician, rocker, lawyer, pensioner, or bank employee, in our clinic, first of all you are a person, who needs help, and we guarantee you specialist care and warm attitude, that are constant values for our staff.
								</p>
								<h5>Sainath Chillapuram</h5>
							</div>
							<div>
								<p>
									Regardless of who you are - manager, cook, politician, rocker, lawyer, pensioner, or bank employee, in our clinic, first of all you are a person, who needs help, and we guarantee you specialist care and warm attitude, that are constant values for our staff.
								</p>
								<h5>Chandra Shekar Rao</h5>
							</div>
							<div>
								<p>
									Regardless of who you are - manager, cook, politician, rocker, lawyer, pensioner, or bank employee, in our clinic, first of all you are a person, who needs help, and we guarantee you specialist care and warm attitude, that are constant values for our staff.
								</p>
								<h5>Vishnu Chitha</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		</section> -->
	<!-- Memories Home Section Ends -->
	<!-- Subscribe Newsletter Section Starts -->
		<section class="section-area testimonials-section parallax text-center">
		<!-- Nested Container Starts -->
			<div class="container">
				<h1 class="font">Testimonials</h1>
				<h5>What people say about us</h5>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
						<div id="testimonials-carousel" class="owl-carousel">
							<div>
								<P>	Awesome and completely satisfied with the best laser in town and even Delhi.  <span> <b>Vivek Gupta</b><span>  </p>
							</div>
							<div>
								<p>Best Doctor I ever came across � Most genuine and treat patients with sincerity. Pleasure meeting him <span> <b>- Yogesh Yadav</b><span></p>
							</div>
							<div>
								<p>	I had a wonderful experience with Dr. Ramanjit, he was very polite, I went to him with the problem of severe acne and He counselled me nicely and all thanks to his treatment that today I get compliments for my glowing skin. He advised me some Medicine and a few sessions of peel..... and believe me that worked wonders for me........ I am so blessed to have found him <span> <b>Gaurav Singh</b><span></p>
							</div>

							<div>
								<P> He is very polite and a very gentle doctor. Takes care of the patient's needs personally. Best doctor ever met! <span> <b>vipin Kuma</b><span>  </p>
							</div>
							<div>
								<P>	He was very thorough in addressing overall health concerns, and offering referrals. His manner was cordial and not rushed.  <span> <b>- Shashi Yadav</b><span>  </p>
							</div>
							<div>
								<P>	Dr. Ramanjit Singh gives great personal attention and is very personable.The appointment did not feel rushed at all. He listens to every concern you may have. I would highly recommended him. <span> <b>- Shashi Yadav</b><span>  </p>
							</div>
							
							<div>
								<P>	Overall experience was very good with the doctor. He is very good with nature and behavior. Everything went well and I would like to recommend the doctor  <span> <b>Deepak Garg</b><span>  </p>
							</div>







						</div>
					</div>
				</div>
			</div>
		<!-- Nested Container Ends -->
		</section>

<!--Whats app -->


<section class="section-area services-home text-center" style="background-color:#fff; color:#000;" >
		<!-- Nested Container Starts -->
			<div class="container" >
			<h1 style="    font-family: 'Alex Brush', cursive;
">About the Dermcos Skin Care Clinic</h1>
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2">
					<p>
Dr. Ramanjit has a team of highly skilled medical professionals who design programs for their patients as their needs that promote healthy and gorgeous transformations. Dr. Ramanjit Singh has travelled all around the globe to find out the latest innovations for aesthetic makeovers. He has vast experience in various fields of Dermatology and provides a myriad of services that are available to the patients. A world-class quality services are also assured for his patients making Dermcos an excellent<b> skin care clinic in Gurgaon.</b> </p>
<ul style="text-align: left;">
<b>Services we offer</b>
<li>Cosmetic dermatology</li>
<li>Clinical dermatology</li>
<li>Pediatric dermatology</li>


<!-- <a href="#" class="btn btn-secondary animation">View More</a> -->
				
					</div>
				</div>
			</div>

		</section>


		
	<!-- Subscribe Newsletter Section Ends -->
	<!-- Footer Starts -->
<!--messanger start-->








<!-- FACEBOOK CHAT WIDGET-->
<!-- See: https://www.labnol.org/software/facebook-messenger-chat-widget/9583/ -->
<!--<style>.fb-livechat,.fb-widget{display:none}.ctrlq.fb-button,.ctrlq.fb-close{position:fixed;right:24px;cursor:pointer}.ctrlq.fb-button{z-index:1;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff;width:60px;height:60px;text-align:center;bottom:42px;border:0;outline:0;border-radius:60px;-webkit-border-radius:60px;-moz-border-radius:60px;-ms-border-radius:60px;-o-border-radius:60px;box-shadow:0 1px 6px rgba(0,0,0,.06),0 2px 32px rgba(0,0,0,.16);-webkit-transition:box-shadow .2s ease;background-size:80%;transition:all .2s ease-in-out}.ctrlq.fb-button:focus,.ctrlq.fb-button:hover{transform:scale(1.1);box-shadow:0 2px 8px rgba(0,0,0,.09),0 4px 40px rgba(0,0,0,.24)}.fb-widget{background:#fff;z-index:2;position:fixed;width:360px;height:435px;overflow:hidden;opacity:0;bottom:0;right:24px;border-radius:6px;-o-border-radius:6px;-webkit-border-radius:6px;box-shadow:0 5px 40px rgba(0,0,0,.16);-webkit-box-shadow:0 5px 40px rgba(0,0,0,.16);-moz-box-shadow:0 5px 40px rgba(0,0,0,.16);-o-box-shadow:0 5px 40px rgba(0,0,0,.16)}.fb-credit{text-align:center;margin-top:8px}.fb-credit a{transition:none;color:#bec2c9;font-family:Helvetica,Arial,sans-serif;font-size:12px;text-decoration:none;border:0;font-weight:400}.ctrlq.fb-overlay{z-index:0;position:fixed;height:100vh;width:100vw;-webkit-transition:opacity .4s,visibility .4s;transition:opacity .4s,visibility .4s;top:0;left:0;background:rgba(0,0,0,.05);display:none}.ctrlq.fb-close{z-index:4;padding:0 6px;background:#365899;font-weight:700;font-size:11px;color:#fff;margin:8px;border-radius:3px}.ctrlq.fb-close::after{content:'x';font-family:sans-serif}</style>-->

<!--<div class="fb-livechat">-->
<!--  <div class="ctrlq fb-overlay"></div>-->
<!--  <div class="fb-widget">-->
<!--    <div class="ctrlq fb-close"></div>-->
<!--    <div class="fb-page" data-href="https://www.messenger.com/t/indiaivfdelhi" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false">-->
<!--        <blockquote cite="https://www.messenger.com/t/indiaivfdelhi" class="fb-xfbml-parse-ignore"> </blockquote>-->
<!--    </div>-->
<!--    <div class="fb-credit"> -->
<!--      <a href="http://bit.ly/2zNv2CL" target="_blank"></a>-->
<!--    </div>-->
<!--    <div id="fb-root"></div>-->
<!--  </div>-->
<!--  <a href="https://www.messenger.com/t/indiaivfdelhi" title="Send us a message on Facebook" class="ctrlq fb-button"></a> -->
<!--</div>-->


<!--form start-->

<div class="row rs_mobile_enquiry visible-xs">
  <div class="col-xs-6 text-center btn btn-secondary animation" >
     <!--<a href="tel:73-538-73-538" id="calldr"><button class="myButton btn-success""></i>  Book your first free consultation</button></a>-->
<a href="tel:99-996-97-606" id="calldr" style="color:#fff;">Free consultation</a>    
	
  </div>
  <div class="col-xs-6 text-center btn btn-secondary animation" >
    <!-- <a href="appointment.php"><button class="myButton btn-success""> <span style="font-size: 12px; ;">Book An Appointment</span></button></a>-->
     <a href="doctor-appointment.php"style="color:#fff;" >Book Appointment</a>





  <script> $(document).ready(function() {
   var owl = $('.owl-carousel1');
   owl.owlCarousel({
     	autoPlay: 1500, //Set AutoPlay to 1.5 seconds
		items : 4,
		loop:true,
		stopOnHover : true,
		navigation : true, // Show next and prev buttons
		pagination : true,
   });
 
 })</script>




  
     <script>
   $("#calldr").click(function(){
if(testing && testing==1){
    alert("You've just clicked Call button");
}
   dataLayer.push({
"event": "eventsToSend",
"eventCategory": "Click",
"eventAction": "callClick",

});

  });
</script>
  
     <script>
   $("#enquiry").click(function(){
if(testing && testing==1){
    alert("You've just clicked Enquiry button");
}
dataLayer.push({
"event": "eventsToSend",
"eventCategory": "Click",
"eventAction": "enquiryClick",

});
});
</script>

<style type="text/css">
  .rs_mobile_enquiry {
    position: fixed;
    z-index: 999;
    bottom: 0;
    left: 0;
    right: 0;
}

</style>

  </div>
</div>

<!--form end-->

  
  





	
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>$(document).ready(function(){var t={delay:125,overlay:$(".fb-overlay"),widget:$(".fb-widget"),button:$(".fb-button")};setTimeout(function(){$("div.fb-livechat").fadeIn()},8*t.delay),$(".ctrlq").on("click",function(e){e.preventDefault(),t.overlay.is(":visible")?(t.overlay.fadeOut(t.delay),t.widget.stop().animate({bottom:0,opacity:0},2*t.delay,function(){$(this).hide("slow"),t.button.show()})):t.button.fadeOut("medium",function(){t.widget.stop().show().animate({bottom:"30px",opacity:1},2*t.delay),t.overlay.fadeIn(t.delay)})})});</script>



<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "WebSite",
  "name": "Indiaivf",
  "alternateName": "indiaivf",
  "url": "#/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "#/{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>







<!-- Gitter Chat Link -->
<!-- <div class="fixed-action-btn"><a class="btn-floating btn-large red" href="https://gitter.im/Dogfalo/materialize" target="_blank"><i class="large material-icons">chat</i></a></div> -->

<!-- Visual Breakpoint Helper for Materialize - http://materializecss.com/ -->
<div style="position:fixed;bottom:0;left:0;background-color:rgba(0,0,0,0.5);padding:10px;color:#fff;z-index: 73-538-73-538;">
  
</div>

<!--messanger end-->
 




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7a5c54afc2c34e96e7b7b1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    



	
		<?php
		
		include"footer.php";
		?>