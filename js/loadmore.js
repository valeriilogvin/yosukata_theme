jQuery(function($){
	$(window).scroll(function(){
		var bottomOffset = 1500; 
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page,
			'post_type' : post_type,
		};

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


// 	$('#load_all, #load_articles, #load_video').click(function(){
// //		var the_post_type = this.id.replace("load_", "");
// 		post_type = this.id.replace("load_", "");
		
// 		$('.blog-button').removeClass('active');
// 		$(this).addClass('active');
// //		current_page = 1;
// //		$('.container-blog').text('Loading...');
// 		$('body').removeClass('loadingsm');

// 		current_page = 0;
// 		var data = {
// 			'action': 'loadmore',
// 			'query': true_posts,
// 			'page' : current_page,
// 			'post_type' : post_type,
// 		};

// 		if( !$('body').hasClass('loadingsm')){

// 			setTimeout(function() {
// 			}, 5000);//tmp for testing only

// 			$.ajax({
// 				url:ajaxurl,
// 				data:data,
// 				type:'POST',
// 				beforeSend: function( xhr){
// //					$('body').addClass('loadingsm');
// 				},
// 				success:function(data){
// 					if( data ) { 
// 						$('div.container.container-blog div.flex.row a.col-6').remove();
// 						$('#loadsm').before(data);
// 						current_page++;
// 					}else{
// 						//console.log('else all');
// 					}
// 				}
// 			});
// 		}
// 	});
// });



	$('#load_all, #load_articles, #load_video').click(function(){

		let post_type = this.id.replace("load_", "");
		
		$('.blog-button').removeClass('active');
		$(this).addClass('active');

		$('body').removeClass('loadingsm');

		current_page = 0;
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page,
			'post_type' : post_type,
		};

		if( !$('body').hasClass('loadingsm')){

			$.ajax({
				url:ajaxurl,
				data:data,
				type:'POST',
				success:function(data){
					if( data ) { 
						$('div.container.container-blog div.flex.row a.col-6').remove();
						$('#loadsm').before(data);
						current_page++;
					}
				}
			});
		}
	});




// New
function switchTab(byLocationHash, hash){

	if (byLocationHash) {
		var currentHash = window.location.hash;
	}else{
		var currentHash = hash;
	}

	let tabsHash = ['#all', '#video', '#articles'];
	let post_type = currentHash.replace("#", "");

	if ( tabsHash.includes(currentHash) ) {

		$('.blog-button').removeClass('active');
		$("#load_"+post_type).addClass('active');
		$('body').removeClass('loadingsm');

		let current_page = 0;
		let data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page,
			'post_type' : post_type,
		};

		if( !$('body').hasClass('loadingsm')){

			$.ajax({
				url:ajaxurl,
				data:data,
				type:'POST',
				success:function(data){
					if( data ) { 
						$('div.container.container-blog div.flex.row a.col-6').remove();
						$('#loadsm').before(data);
						current_page++;
					}
				}
			});
		}

	}

}

// onReady
setTimeout(function(){
	switchTab(true);
}, 200);

// onClick
$(".blog_tabs a").on("click", function(event){
	event.preventDefault();

	let url = $(this).attr('href');
	let index = url.indexOf("#");

	if ($('#is_blog').hasClass('blog')) {
		
		if (index !== -1) {
		  let currentHash = url.substring(index + 1);
		  switchTab(false, "#" + currentHash);
		}
	}else{
		window.location.href = url;
	}

	return false;
});









}); // end of document