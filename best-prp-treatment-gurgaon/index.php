<?php
$result='';
if(isset($_POST['submit']))
 { $name = $_POST['name']; 
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['query'];
   
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;


   
   $message = wordwrap($message,70);
   
    $msg = "<html><body>
          <div id='appointmentTemplate' style='width:100%; background-color:#009973; padding:20px;'>
                <div id='templateInner' style='margin:auto; width:70%; background-color:white; padding:20px;'>
                 Dear Dr.Ramanjit singh,<br>
                 Someone has appointment request for you. Here are the details:
                 <hr>
                 <span><b>Name</b>: ".$name."</span> <br>
                 <span><b>Email</b>: ".$email."</span><br>
                  <span><b>Phone</b>:<a href='tel:".$phone."'>".$phone."</a> </span><br>
                 <span><b>Message</b>: ".$message."</span><br>
                 
                 <hr>
                 Thanks.<br>
                 Website:http://dermcosskincare.com
                </div>
           </div>
         </body></html>";

		 
		 
		

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@dermcosskincare.com';                 // SMTP username
$mail->Password = 'Skincare@2018';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('info@dermcosskincare.com');
$mail->addAddress('info@dermcosskincare.com');     // Add a recipient
//$mail->addAddress('onlinemess2018@gmail.com');               // Name is optional
$mail->addBCC('abhash@ichelon.in');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject='Book An Appointment';
$mail->Body=$msg;
$mail->AltBody=$msg;

if(!$mail->send()) {
     $result='Message could not be sent.';
    
} else {
     $result='Message has been sent';
	 header("Location:thankyou.php");
}
		 
		 
		 
		 
		 
		 

 } 
   
?>

<html lang="en">
	
<!-- Mirrored from www.pristyncare.com/piles.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:29:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121469258-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121469258-1');
</script>
    
    
		<title>PRP Best Treatment </title>
		<meta charset="utf-8">
		<!-- Meta -->
		<meta name="description" content="Contact Pristyn Care Laser Clinic for the Best laser Painless Surgery/ Ayurvedic/ diet/ physiotherapy/ stapler/ Non-Surgical/ Conservative/ Modern/ Kshar sutra Treatment for Piles/ Bavasir/ Hemorrhoids in Gurgaon, Faridabad, Noida through Specialist Doctor. " />
		<!-- Favicon -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="theme/default/images/favicon.html">
		<!-- Google fonts - witch you want to use - (rest you can just remove) -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
                <meta name="google-site-verification" content="f9GHYF6PSeelHI89a_HD5BSdPW1Pxt4oJRJjD-2rSVA" />
				


		<link href="http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Stylesheets -->
		<link rel="stylesheet" media="screen" href="theme/default/js/bootstrap/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="theme/default/css/default.css" type="text/css" />
		<link rel="stylesheet" href="theme/default/css/layouts.css" type="text/css" />
		<link rel="stylesheet" href="theme/default/css/shortcodes.css" type="text/css" />
		<link rel="stylesheet" href="theme/default/css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" media="screen" href="theme/default/css/responsive-leyouts.css" type="text/css" />
		<link rel="stylesheet" href="theme/default/js/masterslider/style/masterslider.css" />
		<link rel="stylesheet" type="text/css" href="theme/default/css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
		<link rel="stylesheet" href="theme/default/css/et-line-font/et-line-font.css">
		<link href="theme/default/js/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link rel="stylesheet" href="theme/default/css/styles.css">
		<link rel="canonical" href="piles.html"/>
		<script type="text/javascript" src="theme/default/js/universal/jquery.js"></script> 
<link rel="icon" type="image/png" href="images/favicon.png"/>





<script
  src="../code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
		<script src="theme/default/css/script.js"></script>
		<link rel="stylesheet" type="text/css" href="theme/default/js/smart-forms/smart-forms.css">

<style>
.section{
    padding:30px 0;
}
.carousel-control .fa{
    top:50%;
}
.carousel-control .fa-chevron-left, .carousel-control .fa-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev{
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
}
.carousel-control.right,.carousel-control.left{
    box-shadow:none;
    background-image: none;
    background-image: none;
    background-image: none;
    background-image: none;
}
</style>
<style>
 .rs-btn{
   display:block;
   padding:10px 10px 10px 55px;
   border-radius:3px;
   text-transform:uppercase;
   background-color:#016d8a;
   margin-bottom:5px;
   color:#fff;
   position:relative;
   max-height:45px;
   overflow:hidden;
   max-width:300px;
   font-weight:bold;
   letter-spacing:1px;
   margin-left:auto;
   margin-right:auto;
   text-align:left;
 }
 .rs-btn i.fa{
    position: absolute;
    width: 45px;
    height: 45px;
    display: table;
    background: #ef872b;
    top:0;
    left:0;
    text-align: center;
    bottom: 0;
    padding-top: 10px;
    font-size: 1.5em;
 }
 .rs-btn-lg{
   padding:10px 10px 10px 70px;
    max-height:60px;
   font-size:1.2em;
   margin-top:15px;
 }
 .rs-btn-lg i.fa{
    width:60px;
    height:60px;
    font-size:2.5em;
 }
 .rs-btn:hover{
   background-color:#016d8a;
   color:#fff;
 }
 @media only screen and (max-width:768px){
     .rs-btn,.rs-btn-lg{
         display:inline-block;
         text-transform:capitalize;
         letter-spacing:0;
         padding:0 5px 0 23px;
         font-size:.6em;
     }
     .rs-btn i.fa,.rs-btn-lg i.fa{
         width:18px;
         height:27px;
         font-size:1em;
         padding-top:7px;
     }
     .rs-btn-lg{
         margin-top:0;
     }
     .top-logo img{
         margin-top:-25px !important;
         margin-bottom:0;
     }
     .navbar-toggle{
         margin-top:0;
     }
 }
</style>
<style>
 .rs-slider,.rs-header{
   background-image:url("image/international-patients.jpg");
   background-size:cover;
   background-position:center;
   min-height:500px;
   position:relative;
 }
 .rs-slider .container{
   position:relative;
 }
 .rs-slider .query-form,#masterslider .query-form{
   max-width:350px;
   position:absolute;
   top:10px;
   right:2%;
   padding:15px 20px;
   background:rgba(255,255,255,1);
   width:100%;
   border:2px solid #016d8a;
   z-index:999;
 }
 .rs-slider .query-form .btn,#masterslider .query-form .btn{
    padding: 4px 12px;
 }
 .rs-slider .query-form .form-group,#masterslider .query-form .form-group{
    margin-bottom:13px;
 }
 .rs-slider .query-form h4,#masterslider .query-form h4,.query-form h4{
   font-size:15px;
   text-align:center;
   letter-spacing:2px;
   margin-top:0;
   text-transform:uppercase;
 }
 #masterslider .query-form *{
   box-sizing:border-box;
   -webkit-box-sizing:border-box;
   -moz-box-sizing:border-box;
 }
 .query-form{
     background:#fff;
     padding:15px;
     background:rgba(255,255,255,.9);
     margin-top:5px;
 }
 @media screen and (max-width:1101px){
   #masterslider .query-form{
    display:none;
   }
 }
 .lg-num{
   text-align:center;
   font-size:3.5em;
   color:#ef872b;
   line-height:2;
   font-weight:bold;
   text-shadow:1px 1px grey;
   letter-spacing:5px;
 }
 .lg-num span{
   font-size:14px;
   color:#016d8a;
   display:block;
   text-shadow:none;
   text-transform:uppercase;
   letter-spacing:2px;
 }
 section{
   
 }
</style>
<style>

.section-blue{
	padding:40px 0;
	background-color:#00546e;
	color:#fff;
}
.featured-section img{
	border:6px solid #ef872b;
	padding:0;
}
.featured-section p,.featured-section li{
	letter-spacing:.5px;
	font-size:110%;
	cursor:pointer;
}
.featured-section p:hover,.featured-section ul{
	color:#ef872b;
}
.featured-section h4,.featured-section h5{
	padding:10px;
	border:1px solid #fff;
	color:#fff;
	display:inline-block;
	text-transform:uppercase;
	letter-spacing: 2px;
	font-weight:bold;
	cursor:pointer;
	margin-bottom:20px;
}
.featured-section h4{
	font-size:125%;
}
.featured-section h5{
	font-size:110%;
}
.featured-section h4:hover,.featured-section h5:hover{
	background:#ef872b;
}
.featured-section p.square .fa{
	border:1px solid #fff;
	padding:5px;
	font-size:1.2em;
}

	#d2{
		display:none;
	}
	
	#btn1{
		width:45%;
		margin-left:4%;
		height: 7%;
    font-size: 185%;
	margin-top:2%;
	color:#FFF;
		
		background-color:#E14376;
	}
	#btn2{
		width:60%;
		margin-left:4%;
		height: 7%;
    font-size: 100%;
	margin-top:2%;
	color:#FFF;
		
		background-color:#E14376;
	}
	
	#btn2:hover{
		background-color:#A30909;
	}
	#btn1:hover{
		background-color:#A30909;
	}
	
	
	@media(max-width:500px){
		#btn1{
		font-size: 90%;
		margin-top:7%;
		}
		#btn2{
		font-size: 90%;
		margin-top:7%;
		}
		
	}
	
	
</style>
<script>
var testing=0;
</script>
	</head>
	<body>
<!-- Google Tag Manager →
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFNWRH9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->

	<div class="container-fluid hidden-xs" style="margin-top:10px;">
	    <div class="row">
	        <div class="col-sm-10 text-right">
             
	        </div>
	        <div class="col-sm-2 text-right">

                	<div id="google_translate_element"></div><script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
                </script><script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script>
	        </div>
	    </div>
	</div>


</div>
</div>
</div>
		<div class="site_wrapper">
			<div class="topbar orange-bg topbar-padding" style="background:#fff;">
				<div class="container">
<div class="row">
 <div class="col-sm-4 text-center" style="padding-left:0;padding-right:0;">
   <a href="index.html" class="top-logo"><img   src="img/logo.png" /></a>
 </div>
<div class="col-sm-4 text-center ">
   <a class="rs-btn rs-btn-lg" href="tel:tel:+91-9999697606" id="hotline"><i class="fa fa-phone"></i> <span >Hotline number<br/></span><small>tel:+91-9999697606</small></a>
 </div>


 
 <script>
$("#hotline1").click(function(){
if(testing && testing==1){
    alert("You've just clicked Hotline Number");
}
dataLayer.push({
"event": "eventsToSend",
"eventCategory": "Click",
"eventAction": "hotLineNumberClick",
"eventLabel":"http://www.pristyncare.com/piles.php" //dynamic
});

});
</script>	
 <div class="col-sm-4 text-center hidden-xs">
   <a class="rs-btn rs-btn-lg" href="tel:info@dermcosskincare.com" id="hotline"><i class="fa fa-envelope"></i> <span class="hidden-xs">E-mail<br/></span><small style="font-size:74%;">info@dermcosskincare.com</small></a>
 </div>
</div>
<script>
$("#hotline").click(function(){
if(testing && testing==1){
    alert("You've just clicked Hotline Number");
}
dataLayer.push({
"event": "eventsToSend",
"eventCategory": "Click",
"eventAction": "hotLineNumberClick",
"eventLabel":"http://www.pristyncare.com/piles.php" //dynamic
});

});
</script>					<!--end left-->

<!--
					<div class="topbar-right-items pull-right">
						<ul class="toplist toppadding">
							<li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook text-white"></i></a></li>
							<li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-twitter text-white"></i></a></li>
							<li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-google-plus text-white"></i></a></li>
							<li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-linkedin text-white"></i></a></li>
						</ul>
					</div>
-->
				</div>
			</div>


<section class="slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" style="padding:0">
			<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
   
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/b1.jpeg" alt="first slider" >
        
      </div>

      <div class="item">
        <img src="images/b2.jpeg" alt="second slider" >
       
      </div>
    
      
  
    </div>

    <!-- Left and right controls -->
    
  
  </div>
</div>

			
                
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <form class="form-vertical slider-form" method="post" action="" >
                        <h4>Book An Appointment</h4>
        				<div class="form-group">
        					<input type="text" class="form-control input-sm" placeholder="Name*" name="name" required="required">
        				</div>
        				<div class="row">
        					<div class="col-xs-6" style="padding-right:0;">
        						<div class="form-group">
        							<input type="email" class="form-control input-sm" placeholder="Email" name="email">
        						</div>
        					</div>
        					<div class="col-xs-6">
        						<div class="form-group">
        							<input type="text" class="form-control input-sm" placeholder="Mobile*" name="phone" required="required">
        						</div>
        					</div>
        				</div>
        				
        				<div class="form-group">
        					<textarea name="query" class="form-control input-sm" placeholder="Query*" required="required"></textarea>
        				</div>
        				
        				
        				<div class="form-group">
        					<small>* Fields are required</small><br>
							
        					
        				</div>
        				<div class="form-group">
        					<input type="hidden" value="" name="url" id="current_url"/>
        					<input type="submit"  name="submit" class="btn " style="background-color:#E14376;" id="submit"/>
        					<span id="alert"></span>
        				</div>
        			</form>
            </div>
        </div>
    </div>

</section>


    <div class="container">
	<div class="row">

	
	 <button type="button" id="btn1" onclick="document.getElementById('d1').style.display = 'block'; document.getElementById('d2').style.display = 'none'">PRP Skin Treatment</button>
       
  
  

  <button type="button" id="btn1"  onclick="document.getElementById('d1').style.display = 'none'; document.getElementById('d2').style.display = 'block'">PRP Hair Treatment </button>
  
  
</div>
</div>
</div>

	
<section class="section bg-grey color-black text-large-sm">
    <div class="container">
	<div class="row" id="d1">
	<div class="col-md-4">
	<img src="images/b.jpeg"/>
	<img src="images/a.jpeg"/>
	</div>
	<div class="col-md-8">
        <h3 class="heading-1">PRP treatment for Skin Rejuvenation</h3>
        <p>PRP i.e. platelet rich plasma is effectively a composition of your own blood that is injected into the areas you wish to rejuvenate. A small amount of blood is drawn from you and placed in a sterile tube that is spun down in a centrifuge to separate the different components of the blood. Red and white blood cells are divided from the platelets and the plasma (the clear fluid). This plasma now contains a higher than normal number of platelets and is called platelet rich plasma, or PRP.Platelets are the cells in the blood that help tissue to heal and grow new cells. The PRP, platelet rich plasma that is injected is a concentrated formula of your own platelets, which makes it rich in growth factors when injected into specific areas of the skin, act as a matrix that promotes your own collagen to grow, regenerates tissue, and thus naturally smoothens and tighten the facial and neck skin--making it look more toned, more vibrant. In this way, PRP softens wrinkles and creates smoother skin texture and tone. The PRP treatment is also effective for decreasing the discoloration and hollowness that occur under the eyes. The PRP treatment is not just beneficial for the skin also helps in hair restoration.</p>
     
   <h3 class="heading-1" >Advantages of PRP Skin Rejuvenation Treatment</h3>
    <ul>    
<li>It is a Simple and a non-surgical OPD procedure.</li> 
<li>It is a 15 to 20 minute procedure with 0 down time in case of multiple Injection procedure might take some time approximately 60 to 90 minutes.</li> 
<li>Safe and reliable results as it is made up of your own cells, there is no risk of rejection, infection, or an allergic reaction.</li> 
<li>Very quick recovery period.</li> 
<li>Beautiful and, above all extremely natural looking end results.</li> 
</ul>

	 <h3 class="heading-1" >Procedure for PRP Skin Treatment</h3>
		<P>Platelet-rich plasma(PRP) is a treatment in which blood is drawn, similar to a routine blood test and then prepared to produce a concentration of platelets. These platelets contain concentrations of growth factors and nutrients that help to stimulate collagen remodeling along with improving skin quality and texture.

Many PRP treatments are added to existing treatments protocols in order to enhance their results such as:

		</P>
		
	<ul>    
<li>Microneedling</li> 
<li>Fractional laser treatments</li> 
<li>Dermal Fillers </li> 
</ul>	
		
<P>
In these cases, it may add approximately ten to twenty minutes to the treatment. When PRP injections alone are performed to the face or scalp, the whole process and treatment can take 30 to 45 minutes.		
</P>		
		<p>PRP Treatment For Facial Rejuvenation: Step-by-Step
		</p>
	

<ul>    
<li>When patients arrive for their treatment they have their skin numbed and their blood is drawn.
</li> 
<li>This process takes a minute and the only side effect is that some patients may feel a bit dizzy or lightheaded when blood is drawn. Something like a little water and juice will help in no time.
</li> 
<li>Once the blood is drawn, doctors take it away to centrifuge where it is spun to separate out the PRP solution from the rest of the blood.</li> 
<li>The full sample is then brought back in and the treatment provider is able to draw out the PRP using a syringe so that it can be used on the skin.
</li> 
<li>Before the treatment begins, doctors make sure that the patients’ skin is thoroughly clean with no remaining residue and the full numbing period has completed.</li> 
<li>Once ready, doctors gently apply your body’s own PRP solution to the face (or body area being treated) while a micro-needling pen is slowly glided across the treatment surface. The microneedling pen would be penetrating to the dermis level which will cause some surface-level blood to be visible on the top of the skin. The micro-injuries stimulates deep collagen production, while the PRP is able to penetrate deep into the skin to promote healing, minimize inflammation and support skin rejuvenation.
</li> 
<li>After the treatment, the skin will be quite red and may feel tight or sting. The residual redness might last for 1-3 days but will be greatly diminished within 24 hours. After a week, some patients may see some superficial flaking.
</li> 
<li>Initial results will be visible in 1-2 weeks. Skin will look brighter and brand new!</li> 
 
</ul>


<p>In case of some treatments, prior to injecting PRP, local anesthesia may be used or numbing cream may be applied, mainly for sensitive clients. There is no pain following treatment and no recovery time. For all PRP treatments, results are progressively seen in the weeks following treatment.
</p>
<p>Since PRP is derived from your own blood, there is virtually no risk of an allergic reaction or rejection, and this is considered by many to be the most “natural” injection to enhance the radiance of the skin.
</p>
	
     
    </div>
    </div>
<div class="row" id="d2" >
	<div class="col-md-4">
	<img src="images/p2.jpg"/>
	<img src="images/p1.jpg"/>
	</div>
	<div class="col-md-8">
        <h3 class="heading-1">PRP Hair Treatment</h3>
        <p>PRP or Platelet Rich Plasma is a new way of treating problems related to hair. Plasma is the fluid found in the blood which is responsible for carrying the RBC, WBC and the platelets throughout the body. Platelets are the cells which cause the blood to clot, at the site of an injury, so as to prevent excess blood loss. They are also responsible for growth factors and other tissue recoveries by increasing blood flow.</p>
        <p>PRP is a concentrate of blood plasma and platelets. The red blood cells and the white blood cells are removed from PRP by centrifuging. This platelet-rich plasma is taken from the patient’s own blood. It is used in treatments related to hair growth. This platelet rich plasma is injected into the scalp wherever hair growth is dwindling to restore its growth.</p>
        


<h3 class="heading-1" >Advantages of PRP Hair Treatment</h3>
   <ul>    
<li>Near to no time required for recovery after the treatment is performed.</li> 
<li>The results start to show in just 4-6 months.</li> 
<li>There are a very few side effects to the process.</li> 
<li>The whole procedure takes only about 1 to 1.5 hours.</li> 
<li>The process has no major risks that need to be taken care of.</li> 
</ul>
		
		
		<h3 class="heading-1" >Procedure for PRP Hair Treatment</h3>
	<p>The procedure of PRP hair treatment might take about an hour and a half to complete. The treatment is given every 4-6 months. The following steps are usually followed during the procedure
	<p>




   

<ul>    
<li>During each visit, PRP is prepared by extracting the patient’s blood and centrifuging it to remove the red and white blood cells.</li> 
<li>The doctor the marks the area where hair growth is needed and then numbs it either by giving a local anesthesia or by applying a numbing cream to reduce the pain from the injections.</li> 
<li>Disinfectants are applied so as to prevent any possible infections from occurring. </li> 
<li>Now the PRP is injected in multiple places into the scalp where hair roots are.</li> 
<li>Then the area is thoroughly cleaned.</li> 
</ul>





<h3 class="heading-1" >Who Can Go for PRP Hair Treatment?</h3>
<p>This treatment responds differently to men and women. It also varies according to the amount of hair you have. People can opt for PRP Hair treatment if:
</p>
<ul>    
<li>They do not suffer from any medical condition like cancer, blood disorders, skin or liver diseases, etc.</li> 
<li>If you do not have a low platelet count.</li> 
<li>They have a few hairs on their scalp.</li> 
<li>They don’t take heavy consumption of alcohol and drugs.</li> 
<li>Don’t use any blood thinners.</li> 
</ul>







<h3 class="heading-1" >Results of PRP Treatment</h3>
   <ul>    
<li>The PRP treatment takes about 4 to 6 months to show any kinds of results. Although it may differ from person to person since hair growth in men is more difficult to achieve than in most women.</li> 
<li>The effects of a full treatment last for about 1 year. To retain the effects of the treatment, it should be repeated yearly. </li> 
</ul>



    </div>
    </div>
</div>




			<div class="clearfix"></div>
			<section  style="background-color:#E14376; margin-top:12px;">
				<div class="container">
					<div class="row">
						<div class="col-md-6" style="padding-top: 18px;">
							<h3 class="less-mar3 uppercase text-white">Address</h3>
							<p class="text-white">Dermcos Skin Care Clinic 
SCO-58, Old Judicial Complex, Civil Lines,
Gurgaon-122001, Haryana,India</p>
						</div>
	<div class="col-md-6" style="padding-top: 18px;">
							<button onclick="   document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;" id="Btn2" class="pull-right" title="Book An appointment">Book An Appointment</button>
						</div>
						
						
					</div>
					
				</div>
			
			</section>
			
			<script>
$("#appointment").click(function(){
if(testing && testing==1){
    alert("You've just clicked Get Appointment button");
}
dataLayer.push({
"event": "eventsToSend",
"eventCategory": "Click",
"eventAction": "getAppointmentClick",
"eventLabel":"http://dermcosskincare.com/" //dynamic
});
});
</script>
			<!-- end section -->
			<div class="clearfix"></div>
<section>
 <div class="container-flud" style="background-color:#E14376;  padding:2%; color:#FFF">
			
  <!-- Col  -->
 <div class="row">
 <hr>
  <div class="col-md-6">
               <span>All Rights Reserved, Dermcos, © 2018 </span>
               </div>
               
   
 </div>
 </div>
  <!-- Col  end -->
  <!-- Col  -->
 
  <!-- Col  end -->


 </div>
</section> 
	
		<!-- end site wraper --> 
		<!-- ============ JS FILES ============ -->
		<script src="theme/default/js/bootstrap/bootstrap.min.js" type="text/javascript"></script> 
		<script src="theme/default/js/masterslider/jquery.easing.min.js"></script> 
		<script src="theme/default/js/masterslider/masterslider.min.js"></script> 
		<script type="text/javascript">
			(function($) {
			 "use strict";
				var slider = new MasterSlider();
				// adds Arrows navigation control to the slider.
				slider.control('arrows');
				slider.control('bullets');
				
				slider.setup('masterslider' , {
					 width:1600,    // slider standard width
					 height:630,   // slider standard height
					 space:0,
					 speed:45,
					 layout:'fullwidth',
					 loop:true,
					 preload:0,
					 autoplay:true,
					 view:"parallaxMask"
				});
			
			})(jQuery);
		</script> 
		<script>
			$('#basicuse').jflickrfeed({
			limit: 6,
			qstrings: {
			id: '133294431@N08'
			},
			itemTemplate: 
			'<li>' +
			'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
			'</li>'
			});
		</script> 
		<script src="theme/default/js/mainmenu/customeUI.js"></script> 
		<script src="theme/default/js/scrolltotop/totop.js"></script> 
		<script src="theme/default/js/mainmenu/jquery.sticky.js"></script> 
		<script src="theme/default/js/owl-carousel/owl.carousel.js"></script> 
		<script src="theme/default/js/owl-carousel/custom.js"></script> 

<script>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(100);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(100);
});
</script>
<div class="row rs_mobile_enquiry visible-xs">
  <div class="col-xs-12 text-center">
     <a href="tel:+91-9999697606 id="calldr"><i class="fa fa-phone"></i> Call</a>
     <script>
	 $("#calldr").click(function(){
if(testing && testing==1){
    alert("You've just clicked Call button");
}
	 dataLayer.push({
"event": "eventsToSend",
"eventCategory": "Click",
"eventAction": "callClick",
"eventLabel":"http://dermcosskincare.com/" //dynamic
});

	});
</script>
  </div>
</div>


<div class="visible-xs whatsapp-button">
 <a href="whatsapp://send?phone=+919999697606" id="wp">
     <div class="rs_whatsapp_icon"></div>
     <p><small>Chat with Us on</small><br/>WhatsApp</p>
     <script>
$("#wp").click(function(){
if(testing && testing==1){
    alert("You've just clicked Whatsapp button");
}

dataLayer.push({
"event": "eventsToSend",
"eventCategory": "Click",
"eventAction": "whatsappClick",
"eventLabel": "http://dermcosskincare.com" //dynamic
});
});

</script>

 </a>
 
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enquiry Form</h4>
      </div>
      <div class="modal-body">
        <p><script type="text/javascript" defer src="../www.123contactform.com/embed/3052216.js" data-role="form" data-default-width="650px"></script></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<style>
.query-form-sidebar{
    position:fixed;
    display:block;
    width:100%;
    max-width:432px;
    top:5%;
    right:0;
    /*padding:0 0 0 32px;*/
    z-index:999;
    margin-right:-432px;
    z-index:9999;
}
.query-form-sidebar .query-form-inner{
    background:#fff;
    padding:15px;
	    margin-top:90px;

    box-shadow:0px 1px 10px 0px rgba(0,0,0,.2)
}
.query-form-sidebar .close{
    padding:4px 8px;
    border-radius:4px;
    color:#fff;
    background:#d9534f;
    opacity:.9;
}
.gta{
    position:fixed;
    right:0;
    top:20%;
    z-index:9999;
}
</style>
<a class="gta" id="open_side_form" href="javascript:void(0)"><img src="images/f.jpeg"/></a>
<div class="query-form-sidebar" id="sidebar_form">
	

    <div class="query-form-inner">
        		    <a class="text-right text-danger close" style="font-weight:bold;" onclick="close_gta()">&times;</a>
                    <h5 class="text-center">Feedback</h5>
        			<form class="form-vertical" method="post" action="#" id="query_form">
        				<div class="form-group">
        					<input type="text" class="form-control input-sm" placeholder="Name*" name="name" required="required">
        				</div>
        				<div class="row">
        					<div class="col-xs-6" style="padding-right:0;">
        						<div class="form-group">
        							<input type="email" class="form-control input-sm" placeholder="Email" name="email">
        						</div>
        					</div>
        					<div class="col-xs-6">
        						<div class="form-group">
        							<input type="text" class="form-control input-sm" placeholder="Mobile*" name="phone" required="required">
        						</div>
        					</div>
        				</div>
        				
        				
        				<div class="form-group">
        					<textarea name="query" class="form-control input-sm" placeholder="Query*" required="required"></textarea>
        				</div>
        				
        				
        				<div class="form-group">
        					<small>* Fields are required</small>
        				</div>
        				<div class="form-group">
        					
        					<input type="submit" name="submit" class="btn btn-primary btn-sm" />
        					<a class="btn btn-danger btn-sm" onclick="close_gta()">Close</a>
        					<span id="alert"></span>
        				</div>
        			</form>
    </div>
</div>

<script>
    $("#open_side_form").click( function() {
		var marginright = $("#sidebar_form").css("marginRight");
        var togglemargin = marginright == "-432px" ? "0px" : "-432px";
        $("#sidebar_form").animate({ marginRight: togglemargin });
    });
    function close_gta(){
        $("#sidebar_form").animate({ marginRight: "-432px" });
    }
    </script>

<script>
$(function(){

dataLayer.push({
'userId':'18827' //dynamic & should be undefined/null if the user is not logged in
});
if(testing && testing==1){
    $('.footer').after("UserId: 18827");
}
});
</script>

<script>
 $('.dropdown-toggle.has-link').on('click',function(){
     var link = $(this).attr('data-link');
     if(link.length>0){
         window.location = link;
     }
 });
</script>
	</body>

<!-- Mirrored from www.pristyncare.com/piles.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:31:42 GMT -->
</html>
