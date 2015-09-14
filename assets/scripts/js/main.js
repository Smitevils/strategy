$(document).ready(function() {
	$('#fullpage').fullpage({
		anchors: ['Page-1', 'Page-2', 'Page-3', 'Page-4', 'Page-5'],
		menu: '#myMenu',
		scrollOverflow: false,
		afterLoad: function(anchorLink, index){
			var loadedSection = $('#fullpage');
			if(index == 2 || index == 3 || index == 4){
				$('nav ul#myMenu li a').css('color', '#515e6a');
				$('.documents-links a').css('color', '#515e6a');
			} else {
				$('nav ul#myMenu li a').css('color', '#fff');
				$('.documents-links a').css('color', '#f0eff0');
			}
		}
	});
	$('.slide-button-right').click(function() {
		$.fn.fullpage.moveSlideRight();
	});
	$('.slide-button-left').click(function() {
		$.fn.fullpage.moveSlideLeft();
	});
	/*setInterval(function() {
		$.fn.fullpage.moveSlideRight();
	}, 5000);*/
	/* Активная страница */
	$('.section-list').find('.section-item:eq(0)').click(function() {
		$.fn.fullpage.moveTo(1);
	});
	$('.section-list').find('.section-item:eq(1)').click(function() {
		$.fn.fullpage.moveTo(2);
	});
	$('.section-list').find('.section-item:eq(2)').click(function() {
		$.fn.fullpage.moveTo(3);
	});
	$('.section-list').find('.section-item:eq(3)').click(function() {
		$.fn.fullpage.moveTo(5);
	});
	/* /Активная страница */
	/* more buttons */
	$('.section-bg-2 .rocks .more-button').click(function() {
		$.fn.fullpage.moveTo(2);
	});
	$('.section-bg-3-2 .rocks .more-button').click(function() {
		$.fn.fullpage.moveTo(4);
	});
	/* modal */
	$('.about-strategy-button').click(function() {
		$.fancybox.open("#modal-1")
	});
	$('.slide-button').click(function() {
		$.fancybox.open("#modal-2")
	});


	$('input').click(function() {
		$(this).removeClass('alert')
	});
	/* forms */
	$('input[type="submit"]').click(function(event) {
		event.preventDefault();
		var method = $(this).closest("form").attr('method');
		var url = $(this).closest("form").attr('action');
		var name = $(this).closest("form").find('input[name="name"]').val();
		var email = $(this).closest("form").find('input[name="email"]').val();
		var phone = $(this).closest("form").find('input[name="phone"]').val();
		/* Если поля пустые или их нет */
		if (name == "") {
			$(this).closest("form").find('input[name="name"]').addClass('alert')
		} else if (name == "undifined") {
			name = "Поля в форме не найдено!"
		};
		if (email == "") {
			$(this).closest("form").find('input[name="email"]').addClass('alert')
		} else if (email == "undifined") {
			email = "Поля в форме не найдено!"
		};
		if (phone == "") {
			$(this).closest("form").find('input[name="phone"]').addClass('alert')
		} else if (phone == "undifined") {
			phone = "Поля в форме не найдено!"
		};
		/* /Если поля пустые или их нет */
		if (name != "" && email != "" && phone != "") {
			sentAjaxMail(name,email,phone,method,url);
			$('input[name="name"], input[name="email"], input[name="phone"]').val("");
			name = ""; email=""; phone=""
		};
	});
	
});

/* Отправка сообщения */
function sentAjaxMail(name,email,phone,method,url) {
	/* Ajax */
	$.ajax({
		type: method,
		url: url,
		data: {
			name: name,
			email: email,
			phone: phone
		},
		success: function(data) {
			$('#modal-sucsess p').html("Заявка успешно отправлена!")
			$.fancybox.open('#modal-sucsess');
		},
		error: function (xhr, ajaxOptions, thrownError) {
			$('#modal-sucsess p').html("Что то пошло не так! Попробуйте в другой раз.")
			$.fancybox.open('#modal-sucsess');
		}
	});
}
