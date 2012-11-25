
			
		
	
        
        
<!--Rounded Corners ---------------------------------------------------->      
        
      (function ($) {
  Drupal.behaviors.dt = {
    attach: function(context, settings) {
      // list every element that you would like to adorn with corners below
       $('.rounded').corner("5px"); 
   $('.form-item input, .dropdown_container, textarea, .form-submit').corner("5px"); 
      $('#login_up').corner("top 5px"); 
	    $(' #widget_pager_bottom_home_blog-block .views-slideshow-pager-field-item').corner("3px"); 
	  
	  
	  
	 
   
   $(document).ready(function(){
							  
							  
							  
		$('.right .block').mouseleave(function() {	
												
												
												$(".dropdown_container").hide();
												$('.dropdown').removeClass("dropdown_highlighted");
												
												});
							  



             
               $('.dropdown').click(function() {
              $('.dropdown').removeClass("dropdown_highlighted");
         $(".dropdown_container").hide();    
    $(this).next(".dropdown_container").toggle();
	$(this).addClass("dropdown_highlighted");
	
	
	});     
 			  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
		$("a#login_up").click(function () {
										
      $("#block-user-login").slideDown("fast");
	$(this).addClass("login_clicked");
	
					});
		
		
		
	
	$('#block-user-login').mouseleave(function() {
		 $('#login_up').removeClass("login_clicked");
			$('#block-user-login').slideUp('fast');
			
				 });
	
	
	
	
	
	
							  
  $('#block-views-tour-documents-block li a').attr('target', '_blank');
  

$("#block-user-login input, #webform-component-could-you-please-provide-some-background-on-your-facility input, #webform-component-contact-information input, #webform-component-contact-information textarea, #block-webform-client-block-17  input, #block-webform-client-block-17  textarea").labelify({text: "label",  labelledClass: "labelHighlight" });

 

}); 
   }
  }
  
   			


$(document).ready(function(){

	$('#drcam').jcaption({
		copyStyle: true,
		animate: true,
		show: {height: "show"},
		hide: {height: "hide"}
	});

});

  
})(jQuery);
  




