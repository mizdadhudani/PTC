(function ($) {
    "use strict";
	
	var $window = $(window); 
	var $body = $('body'); 
	
	/* Preloader Effect */
	$window.on( "load", function() {
	   $(".preloader").fadeOut(600);
    });
	
	/* Sticky header */
	$window.scroll(function(){
    	if ($window.scrollTop() > 100) {
			$('.navbar').addClass('sticky-header');
		} else {
			$('.navbar').removeClass('sticky-header');
		}
	});
	
	/* slick nav */
	$('#main-menu').slicknav({prependTo:'#responsive-menu',label:'', closeOnClick:true});
	
	/* Top Menu */
	$(document).on('click','.navbar-nav li a, #responsive-menu ul li a',function(){
		
		if($(this).hasClass("has-popup")) return false;
		var id = $(this).attr('href');
		if($(id).length) {
			var h = parseFloat($(id).offset().top);
			$('body,html').stop().animate({
				scrollTop: h - 70
			}, 800);
			return false;
		}
		
	});
	
	/* Scroll to anchor when calling URL */
	$(document).ready(function() {
		var elem = window.location.hash.replace('#', '');
		if($('#'+elem).length) {
			 var h = parseFloat($('#'+elem).offset().top);
			$('body,html').stop().animate({
				scrollTop: h - 70
			}, 800);
		}
	});
	
	/* Add Popup to Photo Gallery */
	var $photogallery = $(".gallery-single"); 
	if($photogallery.length){
		$photogallery.magnificPopup({
			delegate: 'a', 
			type: 'image',
			gallery: {
			  enabled:true
			}
		});
	}

	
	/* Add active class to tab panel */
	var $card = $(".card"); 
	if($card.length){
		$card.on("show.bs.collapse hide.bs.collapse", function(e) {
			if (e.type=='show'){
			  $(this).addClass('active');
			}else{
			  $(this).removeClass('active');
			}
		 });  
	}
	 
	/* Pop up page*/
	var $haspopup = $(".has-popup"); 
	if($haspopup.length){
		$haspopup.magnificPopup({
			type: 'inline',
			fixedContentPos: true,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			removalDelay: 300,
			mainClass: 'mfp-zoom-in',
			callbacks: {
				open: function() {
					$('html').css('margin-right', 0);
					$('html').css('overflow', 'auto');
				}
			}
		});
	}
	
	/* Testimonial slider */
	var swiper = new Swiper('.testimonial-slider',{
		slidesPerView: 3,
		spaceBetween: 40,
		pagination: {
			el: '.testimonial-pagination',
			type: 'bullets',
			clickable: true,
		},
		breakpoints: {
			991: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			575: {
				slidesPerView: 1,
				spaceBetween: 0
			}
		}
    });
	
	/* Popup video */
	var $popupvideo = $(".popup-video"); 
	if($popupvideo.length){
		$popupvideo.magnificPopup({
			type: 'iframe',
			preloader: true,
		});
	}
	
	/* Contact form validation */
	var $contactform=$("#contactForm");
	$contactform.validator({focus: false}).on("submit", function (event) {
		if (!event.isDefaultPrevented()) {
			event.preventDefault();
			submitForm();
		}
	});

	function submitForm(){
		/* Initiate Variables With Form Content*/
		var name = $("#name").val();
		var email = $("#email").val();
		var subject = $("#subject").val();
		var message = $("#message").val();

		$.ajax({
			type: "POST",
			url: "form-process.php",
			data: "name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message,
			success : function(text){
				if (text == "success"){
					formSuccess();
				} else {
					submitMSG(false,text);
				}
			}
		});
	}

	function formSuccess(){
		$contactform[0].reset();
		submitMSG(true, "Message Sent Successfully!")
	}

	function submitMSG(valid, msg){
		if(valid){
			var msgClasses = "h3 text-center text-success";
		} else {
			var msgClasses = "h3 text-center text-danger";
		}
		$("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
	}
	/* Contact form validation end */
	
	/* Animate with wow js */
    new WOW({mobile:false}).init(); 
	
})(jQuery);