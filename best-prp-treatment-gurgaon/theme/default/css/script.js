( function( $ ) {
$( document ).ready(function() {
$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
	$('#cssmenu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
	
	
	
	
$("#newslettersb").click(function(event){
	  event.preventDefault();
	  						 
	  var newsletter = $('#newsletterval').val();
	  var path= $('#newsletterval').attr("data-path");
	  
	  if(validate_email(newsletter) !=true)
	  {
		  $('#newsletterval').addClass("error");
	  }else
	  {
	 //alert(newsletter);
	  
				$.ajax({
				url: path+"newsletter.php",
				type: "POST",
				data: {
					newsletter: newsletter
				},
				cache: false,
				dataType: "JSON",					
				success: function (jsonStr) {
					if(jsonStr.action == 'success')
					{
						$('#newslettererr').addClass("hide");
						$('#newslettersuc').removeClass("hide");
						$('#newslettersuc').html(jsonStr.message);
					}
					if(jsonStr.action == 'error')
					{
						$('#newslettersuc').addClass("hide");
						$('#newslettererr').removeClass("hide");
						$('#newslettererr').html(jsonStr.message);						
					}				
				}
				
				});		  

	  }
  }); 



function validate_email(email) 
{
	var rxp =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})$/;
	if(rxp.test(email)!=true) 
	{
		return false;
	} 
	else 
	{
		return true;
	}
}




});
} )( jQuery );
