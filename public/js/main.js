$(function(){

	// var contentLoad = function(e) {
	// 	e.preventDefault();

	// 	var url = $(this).attr("href");

	// 	History.pushState(null,null,url);



	// 	// console.log(url);
	// 	// var spinner = new Spinner().spin();

	// 	// $('.main.group').append(spinner.el);

	// 	// $.get(url,function(data) {
	// 	// 	// console.log(data);
	// 	// 	$('.main.group').empty().append(data);
	// 	// });
	
	// };

	// History.Adapter.bind(window,'statechange',function(){ 

 //    	var state = History.getState(); 

 //    	var spinner = new Spinner().spin();

 //    	$('.main.group').append(spinner.el);

 //    	$.get(state.url,function(data) {
		
	// 	 	$('.main.group').empty().append(data);
	// 	});
    	
	// });

	// $('nav a').on("click",contentLoad);

	// $('.main.group').on('click','.pagination a',contentLoad);

	$("[data-field]").on("click",function() {

		var url = window.location.href;
		var options = {
			type:"textarea",
			submitdata:{
				_method:"PUT",
				_token:$("#token").text(),
				field: $(this).attr("data-field")
			},
			submit:"OK"

		};

		$(this).editable(url,options);


	});


























});



