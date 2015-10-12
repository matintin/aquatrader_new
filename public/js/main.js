$(function(){
	var contentLoad = function(e) {
		e.preventDefault();

		var url = $(this).attr("href");

	console.log(url);
	var spinner = new Spinner().spin();

	$('.main.group').append(spinner.el);

	$.get(url,function(data) {
		// console.log(data);
		$('.main.group').empty().append(data);
	});
	
	};

	$('nav a').on("click",contentLoad);
	$('.main.group').on('click','.pagination a',contentLoad);
});
