/*$('.btn').on('click', function(event) {
	event.preventDefault();
	var mail = $('.email');
	var news = $('.new');

	var newsletter = {
		mailsList: [],
		newsList: [],
		name:"lucas"
	}
	
	for (var i = 0; i < mail.length; i++) {
		if ($(mail[i]).is(':checked')) {

			var item = $(mail[i]).closest('p').find('span').text();
			newsletter.mailsList.push(item);
		}
	}

	for (var i = 0; i < news.length; i++) {
		if ($(news[i]).is(':checked')) {

			var item = $(news[i]).closest('p').find('span').text();
			newsletter.newsList.push(item);
		}
	}

	setTimeout(function(){
		$.ajax({
			url: '/testComparte/send-email.php',
			type: 'POST',
			contentType: 'application/json; charset=utf-8',
			data: newsletter,
			success: function (data) {
				console.log(data);
				console.log(newsletter);	
			}
		});
	}, 500);

	

	//
});*/