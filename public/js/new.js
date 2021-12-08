/*global $, window*/

$(function () {
	
	'use strict';
	var myHeader = $(".header");
	
	myHeader.height($(window).height());
	
	$(window).resize(function () {
		
		myHeader.height($(window).height());
		
	});
	
	
	// Links Add Class Active
	
	$(".links li a").mouseenter(function () {
		
		$(this).addClass("active").siblings().removeClass("active");
		
	});
	
	var swiper = new Swiper('.swiper-container', {
		
		pagination: {
			
			el: '.swiper-pagination',
			clickable: 'true',
			renderBullet: function (index, className) {
				
				return '<span class="' + className + '">' + (index + 1) + '</span>';
			}
			
		}
	});
	
	$(".links li a").click(function () {
		
		$('html, body').animate({
			
			scrollTop: $("#" + $(this).data('value')).offset().top
			
		}, 1000);
		
	});
	
	// Our Auto Slidr Code
	
	(function autoSlider() {
		
		$('.slider .active').each(function () {
			
			if (!$(this).is(':last-child')) {
				
				
				$(this).delay(3000).fadeOut(1000, function () {
					
					$(this).removeClass('active').next().addClass('active').fadeIn();
					autoSlider();
					
				});
				
			} else {
				$(this).delay(3000).fadeOut(1000, function () {
					
					$(this).removeClass('active');
					$('.slider div').eq(0).addClass('active').fadeIn();
					autoSlider();
					
				});
			}
			
		});
		
	}());
	
	$(".heart i").click(function () {
		
		$(this).css("color", "#F00");
		
	});
	
	$(".heart i").mouseleave(function () {
		$(this).css("color", "#FFF");
		
	});
	
	$(function () {
		
		
		$(window).scroll(function () {
			
			if ($(window).scrollTop() >= $(".testimonials").offset().top) {
				
				$(".our-projects").slideDown(2000);
			}
			
		});
		
	});
	
	$('ul li').click(function () {
		
		if ($(this).is('.mobile')) {
			
			$(this).addClass('select').siblings().removeClass('select');
			$(".gallary .row .mix7").slideUp(700);
			$(".gallary .row .mix8").slideUp(700);
			$(".gallary .row .mix9").slideUp(700);
			$(".gallary .row .mix4").slideUp(700);
			$(".gallary .row .mix5").slideUp(700);
			$(".gallary .row .mix6").slideUp(700);
			$(".gallary .row .mix1").slideDown(1500);
			$(".gallary .row .mix2").slideDown(1500);
			$(".gallary .row .mix3").slideDown(1500);
			
			
		}
		
	});
			
	$('ul li').click(function () {
				
		if ($(this).is('.video')) {
					
			$(this).addClass('select').siblings().removeClass('select');
			$(".gallary .row .mix1").slideUp(700);
			$(".gallary .row .mix2").slideUp(700);
			$(".gallary .row .mix3").slideUp(700);
			$(".gallary .row .mix7").slideUp(700);
			$(".gallary .row .mix8").slideUp(700);
			$(".gallary .row .mix9").slideUp(700);
			$(".gallary .row .mix4").slideDown(1500);
			$(".gallary .row .mix5").slideDown(1500);
			$(".gallary .row .mix6").slideDown(1500);
			
						
		}
	});
	
	$('ul li').click(function () {
				
		if ($(this).is('.lap')) {
					
			$(this).addClass('select').siblings().removeClass('select');
			$(".gallary .row .mix1").slideUp(700);
			$(".gallary .row .mix2").slideUp(700);
			$(".gallary .row .mix3").slideUp(700);
			$(".gallary .row .mix4").slideUp(700);
			$(".gallary .row .mix5").slideUp(700);
			$(".gallary .row .mix6").slideUp(700);
			$(".gallary .row .mix7").slideDown(1500);
			$(".gallary .row .mix8").slideDown(1500);
			$(".gallary .row .mix9").slideDown(1500);
		}
	});
	
	$('ul li').click(function () {
				
		if ($(this).is('.all')) {
					
			$(this).addClass('select').siblings().removeClass('select');
			$(".gallary .row .mix1").slideDown(1500);
			$(".gallary .row .mix2").slideDown(1500);
			$(".gallary .row .mix3").slideDown(1500);
			$(".gallary .row .mix4").slideDown(1500);
			$(".gallary .row .mix5").slideDown(1500);
			$(".gallary .row .mix6").slideDown(1500);
			$(".gallary .row .mix7").slideDown(1500);
			$(".gallary .row .mix8").slideDown(1500);
			$(".gallary .row .mix9").slideDown(1500);
			
		}
	});
	
	$('html').niceScroll({
		
		cursorcolor: "#1abc9c",
		cursorwidth: "7px",
		cursorborder: "1px solid #1abc9c"
	});
});

	
