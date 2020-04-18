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

	//Слайдер

	let slideIndex = 1,
	slides = document.querySelectorAll('.slider__slider-item'),
	prev = document.querySelector('.slider__prev'),
	next = document.querySelector('.slider__next'),
	dotWrap = document.querySelector('.slider__slider-dots'),
	dots = document.querySelectorAll('.slider__dot');

	showSlides(slideIndex);

	function showSlides(n) {

		if (n > slides.length) {
			slideIndex = 1;
		}
		if (n < 1) {
			slideIndex = slides.length;
		}

		slides.forEach((item) => item.style.display = 'none');

		dots.forEach((item) => item.classList.remove('slider__dot_active'));

		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].classList.add('slider__dot_active');
	}

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n)
	}

	prev.addEventListener('click', function() {
		plusSlides(-1);
	});

	next.addEventListener('click', function() {
		plusSlides(1);
	});

	dotWrap.addEventListener('click', function(event) {
		for (let i = 0; i < dots.length + 1; i++) {
			if (event.target.classList.contains('slider__dot') && event.target == dots[i-1]) {
				currentSlide(i);
			}
		}
	});


	$("a[href^='#']").click(function(){
		const _href = $(this).attr("href");
		$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
		return false;
	});
	
	function validateForms(form) {
		$(form).validate({
			rules: {
				login: {
					required: true,
					minlength: 4
				},
				pass: {
					required: true,
					minlength: 4
				},
				name: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				phone: "required"
			},
			messages: {
				login: {
					required: "Пожалуйста, придумайте логин",
					minlength: jQuery.validator.format("Пожалуйста, введите {0} буквы!")
				},
				pass: {
					required: "Пожалуйста, придумайте пароль",
					minlength: jQuery.validator.format("Пожалуйста, введите {0} буквы!")
				},
				name: {
					required: "Пожалуйста, введите ваше имя",
					minlength: jQuery.validator.format("Пожалуйста, введите {0} буквы!")
				},
				email: {
					required: "Пожалуйста, введите вашу почту",
					email: "Неправильно введен адрес почты"
				},
				phone: "Пожалуйста, введите свой номер телефона"
			}
		});
	}

	validateForms(".modal #form-reg");

	//Появление кнопки для скролла вверх
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1400) {
			$('.pageup').fadeIn();
		} else {
			$('.pageup').fadeOut();
		}
	});

	//Скрол вверх
	$("body").on("click", ".pageup", function() {
		$("html, body").animate({scrollTop: 0}, "slow");
	});

	//Табы (без плагинов)
	$('ul.goods__tabs').on('click', 'li:not(.goods__tab_active)', function() {
		$(this)
		.addClass('goods__tab_active').siblings().removeClass('goods__tab_active')
		.closest('div.container').find('div.goods__content').removeClass('goods__content_active').eq($(this).index()).addClass('goods__content_active');
	});

	$('ul.services__tabs').on('click', 'li:not(.services__tab_active)', function() {
		$(this)
		.addClass('services__tab_active').siblings().removeClass('services__tab_active')
		.closest('div.container').find('div.services__content').removeClass('services__content_active').eq($(this).index()).addClass('services__content_active');
	});

		//Изменение контакта по клику

		$(".goods-item__link").click(function() {
			$(this).next('.goods-item__details').slideToggle();
			return false;
		});

	
		toggleSlide('.goods-item__link');
		toggleSlide('.goods-item__back');

	

});