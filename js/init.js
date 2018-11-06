(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    
    $('.iconTranslate').on('click', function() {
      $('.listFlags').slideToggle("fast");
    });
    
    // $('.listFlags .flagImage').on('click', function() {
    //   location.reload();
    // });
    
    $('.musics-description').slick({
      arrows: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
  		dots: true,
      speed: 500,      
  		responsive: [{
  		  breakpoint: 1024,
  		  settings: {
  			slidesToShow: 3
  		  }
  		},{
  		  breakpoint: 994,
  		  settings: {
    			slidesToShow: 2,
          slidesToScroll: 2
  		  }
  		},{
        breakpoint: 768,
  		  settings: {
    			slidesToShow: 1,
          slidesToScroll: 1
  		  }
  		}]
    });
    
  }); // end of document ready
})(jQuery); // end of jQuery name space
