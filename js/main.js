var section = false;

$( document ).ready(function() {
   
	$('#open-menu').click(function() {
		$('#open-menu').hide();
		$('#close-menu').fadeIn(1000);
		$('.slide').show();

		$(".burger").animate({ 
		   	'padding-left': '82%'
		}, 700);
		$(".burger").css('background-color', '#00000087');

		$(".slide").animate({ 
		   	'width': '100%'
		}, 700);

		$('.wrapper').fadeOut(700);
		$('.login').fadeOut(700);
	});


	$('#close-menu').click(function() {
		$('#close-menu').hide();
		$('#open-menu').fadeIn(1000);


		$(".burger").animate({ 
		   	'padding-left': '4%'
		}, 700);
		$(".burger").css('background-color', 'transparent');
		$(".slide").fadeOut(700, function() {
		   	$(".slide").css('width', '22%');
		});

		$('.wrapper').fadeIn(700);
		section ? $('.login').hide() : $('.login').fadeIn(700);
	});


	$('.login button').click(function() {
		$('.login_section').fadeIn(500);
		$('.content').hide();
		$('.login').hide();
		section = true;

	});


	$('.encomendar').click(function() {
		$('.login_section').fadeIn(500);
		$('.content').hide();
		$('.login').hide();
		section = true;

	});


	$('#close-section').click(function() {
		$(this).parent().fadeOut(500);
		$('.content').fadeIn(500);
		$('.login').fadeIn(500);
		section = false;


	});





});