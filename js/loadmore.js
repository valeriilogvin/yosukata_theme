jQuery(function($){
	$(window).scroll(function(){
//		var bottomOffset = 2000; 
		var bottomOffset = 1000; 
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page,
			'post_type' : post_type,
		};
/*
		console.log("$(document).scrollTop()=", $(document).scrollTop());
		console.log("$(document).height()=", $(document).height());
		console.log("bottomOffset=", bottomOffset);
		console.log("$('body').hasClass('loadingsm')=", $('body').hasClass('loadingsm'));
*/
		

		if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loadingsm')){
//console.log("need to load more by scroll");

			setTimeout(function() {
			}, 5000);//tmp for testing only

			$.ajax({
				url:ajaxurl,
				data:data,
				type:'POST',
				beforeSend: function( xhr){
					$('body').addClass('loadingsm');
				},
				success:function(data){
					if( data ) { 
						$('body').removeClass('loadingsm');
						$('#loadsm').before(data);
						current_page++;
					}else{
						//console.log('else scroll');
					}
				}
			});
		}
	});


	$('#load_all, #load_articles, #load_video').click(function(){
//		var the_post_type = this.id.replace("load_", "");
		post_type = this.id.replace("load_", "");
		
		$('.blog-button').removeClass('active');
		$(this).addClass('active');
//		current_page = 1;
//		$('.container-blog').text('Loading...');
		$('body').removeClass('loadingsm');

		current_page = 0;
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page,
			'post_type' : post_type,
		};

		if( !$('body').hasClass('loadingsm')){

			setTimeout(function() {
			}, 5000);//tmp for testing only

			$.ajax({
				url:ajaxurl,
				data:data,
				type:'POST',
				beforeSend: function( xhr){
//					$('body').addClass('loadingsm');
				},
				success:function(data){
					if( data ) { 
						$('div.container.container-blog div.flex.row div.col-6').remove();
						$('#loadsm').before(data);
						current_page++;
					}else{
						//console.log('else all');
					}
				}
			});
		}
	});
});
