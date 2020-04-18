window.addEventListener('DOMContentLoaded', function() {

	'use strict';

	$('.nav__authorization').on('click', function(e) {
		e.preventDefault();
		$('.overlay').fadeIn(200);
		$('.modal_auth').fadeIn(200);
	});

	$('.nav__registration').on('click', function(e) {
		e.preventDefault();
		$('.overlay').fadeIn(200);
		$('.modal_reg').fadeIn(200);
	});

	$('.modal__close').on('click', function() {
		$('.modal').fadeOut();
		$('.overlay').fadeOut();
	});


	//Модальные окна
	// $('[data-modal=consultation]').on('click', function() {
	// 	$('.overlay, #consultation').fadeIn();
	// });

	function validateForms(form) {
		$(form).validate({
			rules: {
				name: {
					required: true,
					minlength: 2
				},
				phone: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				name: {
					required: "Пожалуйста, введите ваше имя",
					minlength: jQuery.validator.format("Пожалуйста, введите {0} буквы!")
				},
				phone: "Пожалуйста, введите свой номер телефона",
				email: {
					required: "Пожалуйста, введите вашу почту",
					email: "Неправильно введен адрес почты"
				}
			}
		});
	}

	validateForms("#consultation form");
	validateForms("#consultation-form");
	validateForms(".footer__wrapper #consultation-form");

	$('input[name=phone]').mask("+7 (999) 999-9999");

	$('#consultation form, #consultation-form, .footer__wrapper #consultation-form').submit(function(e) {
		e.preventDefault();
		if($(this).valid()) {
			$.ajax({
				type: "POST",
				url: "mailer/smart.php",
				data: $(this).serialize()
			}).done(function() {
				$(this).find("input").val("");
				$('#consultation, #order').fadeOut();
				$('.overlay, #thanks').fadeIn();

				$('form').trigger('reset');
			});
			return false;
		}
	});

	//Скрол вниз
	$(".promo__down-wrapper").click(function() {
		$("html, body").animate({
			scrollTop : $(".advantages").offset().top - 100
		}, 800);
	});

	//Табы (без плагинов)
	$('ul.calc-choise').on('click', 'li:not(.calc-choise__choise-item_active)', function() {
		$(this)
		.addClass('calc-choise__choise-item_active').siblings().removeClass('calc-choise__choise-item_active')
		.closest('div.calc').find('form.calc-form').removeClass('calc-form_active').eq($(this).index()).addClass('calc-form_active');
	});

	var labels = document.querySelectorAll('.calc-form label');
	var inputs = document.querySelectorAll('.calc-form input');
	for(let i = 0; i < inputs.length; i++)
	{
		inputs[i].addEventListener('focus', function() {
			labels[i].classList.add('active');
		});

	}
	for(let i = 0; i < inputs.length; i++)
	{
		inputs[i].addEventListener('blur', function() {
			labels[i].classList.remove('active');
		});
	}


	// $('.button').each(function(i) {
	// 	$(this).on('click', function() {
	// 		$('#order .modal__descr').text($('.catalog-item__subtitle').eq(i).text());
	// 		$('.overlay, #order').fadeIn();
	// 	});
	// });
});