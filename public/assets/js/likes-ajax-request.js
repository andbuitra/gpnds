$(document).ready(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url : "/like/alreadyLiked",
		method : "POST",
		data : {
			slug : '{{Request::segment(2)}}',
			user_id : '{{Auth::user()->user_id}}'
		},
		success : function(data){
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
				method: "POST",//type of posting the data
				data: {
					slug : '{{Request::segment(2)}}',
					user_id : '{{Auth::user()->user_id}}'
				},
				success: function (data) {
					if(data){
						executeAnimation(e);
					}
				}
			});
		}else{
			$.ajax({
				url: "/dislike",
				method: "POST",
				data: {
					slug : '{{Request::segment(2)}}',
					user_id : '{{Auth::user()->user_id}}'
				},
				success: function (data) {
					if(data){
						executeAnimation(e);
					}
				}
			});
		}
	});
});
