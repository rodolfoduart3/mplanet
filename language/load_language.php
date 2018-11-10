<script src="js/jquery.min.js"></script>

<script>

  clearAllCookies();
  
  $(document).ready(function() { 
    
    getAjax('pt_br');
      
    $('.listFlags .flagImage').on('click', function() {
       var element = $(this).find('img')
       var classLang = element.attr("class");
       getAjax(classLang)
       location.reload();
    });
      
  });
  
  function getAjax(lang) {
    $.ajax({
        url: "language/translate.json",
        type: 'GET',
        dataType: 'json',
        data: lang,
        success: function(data) { 
          eraseCookie("jsonLanguage");
          createCookie("jsonLanguage", JSON.stringify(data[lang]), 1);
        }
    });
  }
  
  function clearAllCookies() {
    var cookies = document.cookie.split(";");
    var expire = new Date();
    for (var i = 0; i < cookies.length; i++)
    {
      cookie = cookies[i].split("=")[0];
      expire.setDate(expire.getDate()-1);
      document.cookie = "asd=; expires=" + expire;
    }
  }
  function createCookie(name, value, days) {
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";               
    document.cookie = name + "=" + value + expires + "; path=/";
  }
  function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }
  function eraseCookie(name) {
    createCookie(name, "", -1);
  }
</script>

<?php 

  $file_json = json_decode($_COOKIE["jsonLanguage"]);
  
  $bio = $file_json->bio;
  $music = $file_json->music;
  $contact = $file_json->contact;
  
  $mainInfo_title = $file_json->mainInfo_title;
  $mainInfo_desc = $file_json->mainInfo_desc;
  
  $albumDescription_p1 = $file_json->albumDescription_p1;
  $albumDescription_p2 = $file_json->albumDescription_p2;
  $albumDescription_p3 = $file_json->albumDescription_p3;
  $albumDescription_p4 = $file_json->albumDescription_p4;
  $albumDescription_p5 = $file_json->albumDescription_p5;
  $albumDescription_p6 = $file_json->albumDescription_p6;
  // 
  // $musics_title = $file_json->musics_title;
  // 
  // $musics_track1_title = $file_json->musics_track1_title;
  // $musics_track1_desc = $file_json->musics_track1_desc;
  // 
  // $musics_track2_title = $file_json->musics_track2_title;
  // $musics_track2_desc = $file_json->musics_track2_desc;
  // 
  // $musics_track3_title = $file_json->musics_track3_title;
  // $musics_track3_desc = $file_json->musics_track3_desc;
  // 
  // $musics_track4_title = $file_json->musics_track4_title;
  // $musics_track4_desc = $file_json->musics_track4_desc;
  // 
  // $musics_track5_title = $file_json->musics_track5_title;
  // $musics_track5_desc = $file_json->musics_track5_desc;
  // 
  // $musics_track6_title = $file_json->musics_track6_title;
  // $musics_track6_desc = $file_json->musics_track6_desc;
  // 
  // $musics_track7_title = $file_json->musics_track7_title;
  // $musics_track7_desc = $file_json->musics_track7_desc;
  // 
  // $musics_track8_title = $file_json->musics_track8_title;
  // $musics_track8_desc = $file_json->musics_track8_desc;
  // 
  // $musics_track9_title = $file_json->musics_track9_title;
  // $musics_track9_desc = $file_json->musics_track9_desc;
  // 
  // $production_title = $file_json->production_title;
  // $production_item1 = $file_json->production_item1;
  // $production_item2 = $file_json->production_item2;
  // $production_coverArt1 = $file_json->production_coverArt1;
  // $production_coverArt2 = $file_json->production_coverArt2;
  // $production_label1 = $file_json->production_label1;
  // $production_label2 = $file_json->production_label2;
  // 
  // $moreMusic_soundcloud_footer = $file_json->moreMusic_soundcloud_footer;
  // $moreMusic_spotify_footer = $file_json->moreMusic_spotify_footer;
  
?>