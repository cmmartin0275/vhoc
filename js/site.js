jQuery(document).ready(function() {
	jQuery(".nav ul li a[href='#']").attr('href', 'javascript:void(0)');
	jQuery(".nav .menu-icon a[href='#']").attr('href', 'javascript:void(0)');

	var posts = document.querySelectorAll('.item img');
	imagesLoaded( posts, function() {
		var container = document.querySelector('.gallery');
		var msnry = new Masonry( container, {
		  itemSelector: '.item',
		  columnWidth: 20, 
		});

	});

	

	jQuery('.menu-icon a').click( function(event){
		event.preventDefault();
		if (jQuery('.mobile-nav ul').hasClass("open") ) {
			jQuery('.mobile-nav ul').removeClass("open");
			jQuery('.mobile-nav ul').addClass("closed");		
		} else {	
			jQuery('.mobile-nav ul').removeClass("closed");
			jQuery('.mobile-nav ul').addClass("open");
		}
		return false;
	});


});