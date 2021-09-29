// ===========================
// Infinite Scroll for places list - Click to Load More
// https://www.billerickson.net/infinite-scroll-in-wordpress
// ===========================
jQuery(function($){

	$('.post-listing').append( '<button class="load-more-btn">Click here to load more places</button>' );
	var button = $('.post-listing .load-more-btn');
	var page = 2;
	var loading = false;

	$('body').on('click', '.load-more-btn', function(){
		if( ! loading ) {
            loading = true;
			var data = {
                action: 'be_ajax_load_more',
				page: page,
				query: beloadmore.query,
			};
			$.post(beloadmore.url, data, function(res) {
				if( res.success) {
                    console.log(res.data);
					$('.post-listing').append( res.data );

                    // load more button according to available places
                    if (res.data) {
                        $('.post-listing').append( button );
                    } else {
                        button.text('There is no more places');
                    }
					page = page + 1;
					loading = false;
				} else {
					// console.log(res);
				}
			}).fail(function(xhr, textStatus, e) {
				// console.log(xhr.responseText);
			});
		}
	});
		
});