

<?php

include"head.php";

?>



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
      <option value="-99999">Select Doctor/Therapist</option>
              <option value="">Select Doctor's</option>
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
 
			<option value="-999">Select Time</option>
			<option value="10AM–1PM">10AM–1PM</option>
			<option value="1PM–3PM">1PM–3PM</option>
			<option value="3PM–7PM">3PM–7PM</option>
			
		
			
      </select>
     

    

    </div> -->

    <div class="form-group box">
    <label for="Email" class="col-sm-3 control-label">Select Time:</label>
    <div class="col-sm-9">
     <p class="form-control down-arrow" id="timeofapp">
 
			
		
			
      </p>
     

    

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




<script>

$(document).ready(function(){
  $(("#Doctor").option[value="Dr. Ramanjit Singh"]).attr('selected','selected'){
    $("#timeofapp").show("4PM-8:30PM");
  });
});


</script>






	<?php
		include"footer.php";
		?>