$(document).ready(function() {
	$(".item-list li").mouseenter(function(){  
        $(this).find($('.item-list .hover')).stop(true, true).fadeIn(600);
        return false;
     });
      $('.item-list li').mouseleave(function(){  
        $(this).find($('.item-list .hover')).stop(true, true).fadeOut(400);
        return false;
     });
      jQuery(document).on('click', ".menu_trigger", function (e) {
        e.preventDefault()
        window.setTimeout(function() {
            if(jQuery('#nav').hasClass('clicked')){
                jQuery('#nav').stop(true,true).animate({height:'hide'},100);
                jQuery('#nav').removeClass('clicked');
            }else{
                jQuery('#nav').stop(true,true).animate({height:'show'},400);
                jQuery('#nav').addClass('clicked');
            }
        }, 400);
        return false;
    });
    jQuery("#nav").on('click', '.drops', function () {
        if (jQuery(this).hasClass("active")) {
            jQuery(this).removeClass("active").parent().next().slideUp();
        } else {
            jQuery(this).addClass("active").parent().next().slideDown();
        }
        return false;
    });
// begin add	
	var $container = $('#container');
	// init
	$container.isotope({
		// options
		itemSelector: '.item',
		layoutMode: 'cellsByRow',
		cellsByRow: {
			columnWidth: 295,
			rowHeight: 295
		}
		});
		
	$('#filters').on( 'click', 'li', function() {
		var filterValue = $(this).attr('data-filter');
		$container.isotope({ filter: filterValue });
		$( "#filters li" ).removeClass("active");
		$(this).addClass("active");
	});
	$('.fancybox').fancybox({
	  helpers: {
	    overlay: {
	      locked: false
	    }
	  }
	});
// end add
    $('.smoothscroll').on('click',function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 800, 'swing', function () {
            window.location.hash = target;
        });
    });
    //scroll to top
    $('.upArrow').on('click', function(e){
        e.preventDefault();
        console.log('radi')
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {            
            $('.upArrow').css('display', 'block');
        }else{
            $('.upArrow').css('display', 'none');
        }
    })
}); 
$(window).resize(function() {
    if($(document).width() > 768){
      $( "#nav" ).addClass("active");
      $( "#nav ul" ).attr('style','');
      $( "#nav" ).attr('style','');
      $( "#nav" ).removeClass("clicked");
      $( "#nav .active" ).removeClass('active');
    }
    else {
        $( "#nav" ).removeClass("active");
    }
});