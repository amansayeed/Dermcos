<?php 




	
	
	
	



?>







<?php

include"head.php";

?>


    <script type="text/javascript">
$(document).on("click", ".collapse-desc", function() {
  var activeTab = $(this).attr("href");
  $(".collapse-desc").each(function() {
    $(this).removeClass("active");
  });
  $(this).addClass("active");
  $(".collapse").each(function() {
    $(this).removeClass("in");
  });
  $(activeTab).addClass("in");
});
$(document).on("click", ".pop1", function() {
  var thumbnailSrc = $(this).children(".bimg").attr("src");
  $("#imagepreview").attr("src", thumbnailSrc);
  $("#imagemodal").modal("toggle");
});
$(document).on("click", ".pop2", function() {
  var thumbnailSrc = $(this).children(".thumbnail").children(".bimg").attr("src");
  $("#imagepreview").attr("src", thumbnailSrc);
  $("#imagemodal").modal("toggle");
});
$(document).on("click", ".subservicesdata", function() {
  var pageId = $(this).attr("id");
  $.ajax({
    type : "POST",
    url : "getresult.php",
    data : {
      id : pageId
    },
    /**
     * @param {?} status
     * @return {undefined}
     */
    success : function(status) {
      $("#accordion").html(status);
    }
  });
});
$(document).on("change", "#doctor", function() {
  var doctorname = $("#doctor option:selected").val();
  $.ajax({
    type : "POST",
    url : "getapptime.php",
    data : {
      doctorname : doctorname
    },
    /**
     * @param {?} status
     * @return {undefined}
     */
    success : function(status) {
      $("#timeofapp").html(status);
    }
  });
});
$(document).ready(function() {
  $(window).resize(function() {
    ellipses1 = $("#bc1 :nth-child(2)");
    if ($("#bc1 a:hidden").length > 0) {
      ellipses1.show();
    } else {
      ellipses1.hide();
    }
    ellipses2 = $("#bc2 :nth-child(2)");
    if ($("#bc2 a:hidden").length > 0) {
      ellipses2.show();
    } else {
      ellipses2.hide();
    }
  });
});
</script> 



<script type="text/javascript" src='javascript/core.js'></script>
<link rel="stylesheet" href='css/default.css' type="text/css">
<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#container').easyTabs({defaultContent:1});
		});
	</script>
    
    <script language="javascript">

 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
 function lettersOnly(evt) {
        evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
        if (charCode == 32)
            return true;
        if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
            return false;
        }
        else
            return true;
    }

function is_email(email)
    {
        if(!email.match(/^[A-Za-z0-9\._\-+]+@[A-Za-z0-9_\-+]+(\.[A-Za-z0-9_\-+]+)+$/))
            return false;
        return true;
    }
function appointment_validation()
{
	
  if(document.appointment.name.value=="")
  {
    alert("Please enter your  Name");
	document.appointment.name.value="";
	document.appointment.name.focus();
	return false;
  }
  

  if(document.appointment.email.value=="")
  {
    alert("Please enter your Email");
	document.appointment.email.value="";
	document.appointment.email.focus();
	return false;
  }
 if(!is_email(document.appointment.email.value))
 {
    alert('Invalid Email Address');
	document.appointment.email.value="";
	document.appointment.email.focus();
	return false;
  }
  if(document.appointment.mobile.value=="")
  {
    alert("Please enter your Mobile no");
	document.appointment.mobile.value="";
	document.appointment.mobile.focus();
	return false;
  }
 if(isNaN(document.appointment.mobile.value))
   {
		 alert('Mobile number must be numeric ');
		document.appointment.mobile.focus();
		 return false;
  }

   if(document.appointment.mobile.value.length<'10')
  {
    alert(" Mobile no not less then ten digit");
	document.appointment.mobile.value="";
	document.appointment.mobile.focus();
	return false;
  }
  
	if(document.appointment.doctor.value=="-99999")
  {
    alert("Please select doctor");
	document.appointment.doctor.value="";
	document.appointment.doctor.focus();
	return false;
  }  
  if(document.appointment.dateofapp.value=="")
  {
    alert("Please enter your appointment date");
	document.appointment.dateofapp.value="";
	document.appointment.dateofapp.focus();
	return false;
  }  
  
   if(document.appointment.timeofapp.value=="-999")
  {
    alert("Please enter your appointment time");
	document.appointment.timeofapp.value="";
	document.appointment.timeofapp.focus();
	return false;
  } 

  if(document.appointment.message.value=="")
  {
    alert("Please enter you Query");
	document.appointment.message.value="";
	document.appointment.message.focus();
	return false;
  }
  if(document.appointment.message.value.length>=150)
  {
    alert("Maximum 250 Character allowed");
	document.appointment.message.value="";
	document.appointment.message.focus();
	return false;
  }


  return true;
}
</script>

<!-- <div class="row border-top banner">
    <img src="images/appointment-banner.png" alt="appointment banner" title="appointment banner" class="col-xs-12 col-sm-12 col-md-12"></img>
</div> -->
<!-- <div class="row">
<div id="bc1" class="btn-group btn-breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <a href="http://www.dermcosskincare.com" class="btn btn-default" itemprop="url"><span itemprop="title">Home</span></a>
    <a href="http://www.dermcosskincare.com/appointment.php" class="btn btn-default" itemprop="url"><span itemprop="title">Appointment</span></a>
</div>
</div> -->
<div class="container padding-bottom" style="padding-top:70px; ">
    <div class="row text-center"><h1 class="pad">Book An Appointment</h2>
     <div style="padding-top:40px;">
         
    <?php
 
     if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; $_SESSION['msg']="";}?>    </div>
      <form id="appointment" name="appointment" method="post" action="appointmentprocess.php" onSubmit="return appointment_validation();" enctype="multipart/form-data" class="menu">
    <div class="row">
        <div class="col-sm-6 col-md-6">
        
  <div class="form-group">
    <label for="Name" class="col-sm-3 control-label">Name:</label>
    <div class="col-sm-9">
      <input type="name" class="form-control" id="name" name="name" placeholder="Madhur Gupta">
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="form-group">
    <label for="Email" class="col-sm-3 control-label">Email:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="email" name="email" placeholder="madhurgupta@gmail.com">
    </div>
    <div class="clearfix"></div>
  </div>
   
   <div class="form-group">
    <label for="mobileno" class="col-sm-3 control-label">Select Doctor/Therapist:</label>
    <div class="col-sm-9">
      <select class="form-control down-arrow" name="doctor" id="doctor" >
      <option value="">Select Doctor/Therapist</option>
              <option value="Dr. Ramanjit Singh">Dr. Ramanjit Singh</option>
						<option value="Dr. Ashit Gupta">Dr. Ashit Gupta</option>
						<option value="Dr. Rinky Sharma">Dr. Rinky Sharma(Sat-Sun)</option>
				        <option value="Dr. Vimmi Kashyap">Dr. Vimmi Kashyap(Mon-Sat)</option>
              </select>
    </div>
    <div class="clearfix"></div>
  </div>
  <!-- <div class="form-group box">
    <label for="Email" class="col-sm-3 control-label">Select Time:</label>
    <div class="col-sm-9">
     <select class="form-control down-arrow" name="timeofapp" id="timeofapp">
 
			<option value="">Select Time</option>
			<option value="10AM–1PM">10AM–1PM</option>
			<option value="1PM–3PM">1PM–3PM</option>
			<option value="3PM–7PM">3PM–7PM</option>
			
		
			
      </select>
     

    </div>
    <div class="clearfix"></div>
  </div>
  <div class="form-group box" style="display:none;">
    <label for="Email" class="col-sm-3 control-label">Select Time:</label>
    <div class="col-sm-9">
     <select class="form-control down-arrow" name="timeofapp" id="timeofapp">
 
			<option value="-999">Select Time</option>
			<option value="10AM–1PM">10AM–1PM</option>
			<option value="1PM–3PM">1PM–3PM</option>
			<option value="3PM–7PM">3PM–7PM</option>
			
		
			
      </select>
     

    </div>
    <div class="clearfix"></div>
  </div>
  <div class="form-group box" style="display:none;">
    <label for="Email" class="col-sm-3 control-label">Select Time:</label>
    <div class="col-sm-9">
     <select class="form-control down-arrow" name="timeofapp" id="timeofapp">
 
			<option value="-999">Select Time</option>
			<option value="10AM–1PM">10AM–1PM</option>
			<option value="1PM–3PM">1PM–3PM</option>
			<option value="3PM–7PM">3PM–7PM</option>
			
		
			
      </select>
      -->

    </div>
    <div class="clearfix"></div>
  </div>
    </div>
        <div class="col-sm-6 col-md-6">
   <div class="form-group">
    <label for="Name" class="col-sm-3 control-label">Select Date:</label>
    <div class="col-sm-9">
    <input name="dateofapp" id="dateofapp" class="dateofapp form-control" type="date"/>
   </div>
    <div class="clearfix"></div>
  </div>
  
  <div class="form-group">
    <label for="mobileno" class="col-sm-3 control-label">Mobile No.:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="+91 98714356..">
    </div>
    <div class="clearfix"></div>
  </div>
   <div class="form-group">
    <label for="mobileno" class="col-sm-3 control-label">Message:</label>
    <div class="col-sm-9">
       <textarea class="form-control" name="message" id="message" rows="4"></textarea>
    </div>
    <div class="clearfix"></div>
  </div>
  
    </div>
    </div>
        <div class="row">
            <p class="text-center">
            <button class="btn .btn-primary" type="submit" name="submit" class="submit btn btn-default">Book</button>
            </p>
        </div>
    </form>
</div>
</div>
<div class="container">
<div class="row">
<p>* for same day appointments - connect with us at - +91-9910124566</p>
</div>
</div>
	
	<div class="embed-responsive embed-responsive-16by9">

	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7015.438062731726!2d77.034035!3d28.457885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25c780026b086480!2sDermcos+Skin+Care+Clinic!5e0!3m2!1sen!2sin!4v1543566928248"  ></iframe>
	</div>
	<!-- Map Ends -->
	<!-- Footer Starts -->
		<?php
		include"footer.php";
		?>