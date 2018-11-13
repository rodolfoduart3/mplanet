(function($){
  $(function(){    
    
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    
    $('.iconTranslate').on('click', function() {
      $('.listFlags').slideToggle("fast");
    });

    $('.musics-description').slick({
      arrows: true,
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 2,
  		dots: true,
      speed: 500,      
  		responsive: [{
  		  breakpoint: 1024,
  		  settings: {
    			slidesToShow: 1,
          slidesToScroll: 1
  		  }
  		},{
        breakpoint: 768,
  		  settings: {
    			slidesToShow: 1,
          slidesToScroll: 1
  		  }
  		}]
    });
    
    instalarInsta({
        // https://maestrooo.com/instagram
        token: "598137428.6a7999e.cebabb381334452cac5b4e11b1bc85f7",
        id: 598137428
    })
    
  });
})(jQuery); 

function instalarInsta(a) {
  insertInstagram(), jQuery(".js-instagram").length && jQuery.ajax({
    url: "https://api.instagram.com/v1/users/" + a.id + "/media/recent",
    dataType: "jsonp",
    type: "GET",
    data: {
      access_token: a.token,
      count: 4
    }
  }).then(function(a) {
  getPhotoInstagram(a), jQuery("#instagram-rodape").fadeIn()
  })
}

function insertInstagram() {
  jQuery(".boxInstafeed").before('<div class="wrapinstafeed"><div class="container"><div class="js-instagram instagram"><div class="photo-container"><ul></ul></div></div></div></div>')
}

function getPhotoInstagram(a) {
  for (var n = jQuery(".instagram ul"), o = 0; o < a.data.length; o++) n.append('<li><a href="' + a.data[o].link + '" target="_blank"><figure class="photo" style="background-image: url(' + a.data[o].images.standard_resolution.url + ')"><div class="stats"><span class="likes"><i class="icon-heart"></i>' + a.data[o].likes.count + '</span><span class="comments"><i class="icon-chat"></i>' + a.data[o].comments.count + "</span></div></figure></a></li>")
}