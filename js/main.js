var lnStickyNavigation;

$(document).ready(function()
{
	applyNavigation();
});

function applyNavigation() {
	applyStickyNavigation();
  applyResize();
  activeClass();
	activeClassOnScroll();
  smoothScroll();
	removeBanner();
}

function activeClass() {
  $('.nav-item').on('click', function() {
    $('.nav-item.active').removeClass('active');
    $(this).addClass('active');
  });
}

function smoothScroll() {
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      if(window.location.hash != hash) {
				$('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 800, function(){
	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash;
	      });
			}
    } // End if
  });
}

function applyStickyNavigation()
{
	lnStickyNavigation = $('.scroll-down').offset().top;
	$('.jumbotron').css({ height: ($(window).height()) +'px' });

	$(window).on('scroll', function()
	{
		stickyNavigation();
	});

	stickyNavigation();
}

function applyResize()
{
	$(window).on('resize', function()
	{
		lnStickyNavigation = $('.scroll-down').offset().top + 20;

		$('.jumbotron').css({ height: ($(window).height()) +'px' });
	});
}

function stickyNavigation()
{
	if($(window).scrollTop() > lnStickyNavigation)
	{
		$('body').addClass('fixed');
	}
	else
	{
		$('body').removeClass('fixed');
	}
}

function activeClassOnScroll()
{
	$(document).scroll(function () {
    //the current height
		var y = $(this).scrollTop();
    var y = y + 80;

		// perfil
    if(y >= $('#perfil-main.container').offset().top) {
			$('.nav-item').removeClass('active');
			$('.nav-item#perfil').addClass('active');
    }

		var y = y - 60;
		//experiencias
		if(y >= $('#experiencias-main.container').offset().top) {
			$('.nav-item').removeClass('active');
			$('.nav-item#experiencias').addClass('active');
    }

		//habilidades
		if(y >= $('#habilidades-main.container').offset().top) {
			$('.nav-item').removeClass('active');
			$('.nav-item#habilidades').addClass('active');
    }

		//projetos
		if(y >= $('#projetos-main.container').offset().top) {
			$('.nav-item').removeClass('active');
			$('.nav-item#projetos').addClass('active');
    }

		//contato
		if(y >= $('#contato-main.container').offset().top) {
			$('.nav-item').removeClass('active');
			$('.nav-item#contato').addClass('active');
    }
	});
}

function removeBanner() {
	$('div:has(img[alt="www.000webhost.com"])').remove();
}
