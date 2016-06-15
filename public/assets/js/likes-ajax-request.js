$(document).ready(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url : "/like/alreadyLiked",
		method : "POST",
		dataType : 'json',
		data : {
			slug : '{{Request::segment(2)}}',
			user_id : '{{Auth::user()->user_id}}'
		},
		success : function(data){
			console.log("Lo que hay en la variable data es: "+data);
			if(data){
				$('#likelink').addClass('active');
			}
		}
	});

	$('#likelink').click(function(e) {
		e.preventDefault();
		if($('#likelink').attr('class') == 'like'){
			$.ajax({
				url: "/like",
				method: "POST",
				dataType : 'json',
				data: {
					slug : '{{Request::segment(2)}}',
					user_id : '{{Auth::user()->user_id}}'
				},
				success: function (data) {
					console.log("Lo que hay en la variable data 2 es: "+data);
					if(data){
						executeAnimation(e);
					}
				}
			});
		}else{
			$.ajax({
				url: "/dislike",
				method: "POST",
				dataType : 'json',
				data: {
					slug : '{{Request::segment(2)}}',
					user_id : '{{Auth::user()->user_id}}'
				},
				success: function (data) {
					console.log("Lo que hay en la variable data 3 es: "+data);
					if(data){
						executeAnimation(e);
					}
				}
			});
		}
	});
});
