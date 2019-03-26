<?php 

if (isset($_POST['submit'])){
	
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$query=$_POST['query'];

  $msg = "<html><body>
          <div id='appointmentTemplate' style='width:100%; background-color:#999; padding:20px;'>
                <div id='templateInner' style='margin:auto; width:70%; background-color:white; padding:20px;'>
                 Dear Dr. Richika Sahay Shukla,<br>
                 Someone has appointment request for you. Here are the details:
                 <hr>
                 <span><b>Name</b>: ".$name."</span> <br>
                 <span><b>Email</b>: ".$email."</span><br>
                  <span><b>Phone</b>:<a href='tel:".$mobile."'>".$mobile."</a> </span><br>
                 <span><b>Message</b>: ".$query."</span><br>
                 
                 <hr>
                 Thanks.<br>
                 Website:http://indiaivf.in
                </div>
           </div>
         </body></html>";
	
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Dr. Richika Sahay Shukla,<info@indiaivf.in>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$to='info@indiaivf.in';
$subject='Get a Treatment Advice';
 mail($to,$subject,$msg,$headers);
 mail('naresh@ichelon.in',$subject,$msg,$headers);
 mail('Abhash@ichelon.in',$subject,$msg,$headers);

	
	
	
	
}




?>

<style>


#form{
	background-color:#21923591;
	 color:#fff;
	 margin-top: -493px;
    padding: 2%;
    margin-right: 83px;
	    border-radius: 24px;
	
}

@media(max-width:600px){
	#ing1{
		height:190px;
		
	}
	
}


@media(max-width:1024px){
	#form{
	
	margin-right:0;
	margin-top:14px;
	padding:2%
	
	
}




}


input['type=text']{
	
	height:20px;
	
}
#form input['type=text']{
	
	height:20px;
	
}

#form p{
	color:red;
}
#slider1{display:block;margin-left:auto; margin-right:auto; height:280; width:690;}
   
   .form-group {
    margin-bottom: 14px;
}
.active a {
   
background-color:#fff!important;
}

#logo2{
	
	
}
#logo2:hover{
	margin-top:-12px;
}


#centers{
	
	float:left;
	margin-left:50px;
	
}

#area{
	
	
	
	
}

.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img{
	
	display:inline-grid;
}



.ctrlq.fb-button{
	display:none;
}

</style>

	<body>
	    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
<form class="form-vertical slider-form" method="post" action="#" id="form">
<h4 class="text-center"><b>Free Treatment Advice</b></h4>
<div class="form-group">
<input type="text" class="form-control input-lg" placeholder="Name*" name="name" required="required">
 </div>
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<input type="email" class="form-control input-lg" placeholder="Email*" name="email">
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<input type="mobile" aria-required="true" size="30" value="" name="mobile" class="form-control input-lg" placeholder="Mobile*" required="required">
</div>
</div>
</div>
<div class="form-group">
<textarea name="query" class="form-control input-lg" placeholder="Query*" required="required"></textarea>
</div>
<div class="form-group">
<p>* Fields are required</p>
</div>
<div class="form-group">
<input type="hidden" value="" name="url" id="current_url">
<input type="submit" name="submit" value="Send" class="btn btn-success btn-lg" id="submit">
<span id="alert"></span>
</div>
</form>
</div>

        </body>
	