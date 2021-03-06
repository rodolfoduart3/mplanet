(function($){
  $(function(){    
    
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('#mosaicBio').Mosaic();
    $('#mensagem').trigger('autoresize'); 
    
    $('.tabs').tabs({ 'swipeable': true });
    
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
    });
    
    $('.icones-flutuantes li.main').on('click', function(e){
  		$('.overlay-total').toggleClass('ativo');
  		e.preventDefault();
  		$('.icones-flutuantes').find('li').each(function() {
  			var element = $(this);
  			if (!element.hasClass('main')) {
  				if(element.hasClass('visible')) {
  					element.css('opacity','0');
  					element.removeClass('visible');
  				} else {
  					element.css('opacity','1');
  					element.addClass('visible');
  				}
  			} else {
  				element.toggleClass('showAll');
  				element.parent().toggleClass('showAll');
  			}
  		});
  	});

    // Animate logo - footer
    var lastScrollTop = 0;
    $(window).scroll(function(event) {
      var $width = jQuery(window).width();
      if($width < 769) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop){
          if (document.body.scrollHeight == document.body.scrollTop + window.innerHeight) {
            $(".boxLogo img").toggleClass("onRotate");
          }
        }
        lastScrollTop = st;
      }
    });
    
  });
})(jQuery); 

// function goToTop() {
//   $("a[href='#top']").click(function() {
//     $("html, body").animate({ scrollTop: 0 }, "slow");
//       return false;
//   });
// }

function submitFormContact() {
  $("#formulario_contato").submit(function () {
    if ($(".nome").val() == "" && $(".email").val() == "") {
      alert("Preencha os campos corretamente!");
    }
  });
}

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