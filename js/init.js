(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    
    $('.musics-description').slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });
		

  }); // end of document ready
})(jQuery); // end of jQuery name space
