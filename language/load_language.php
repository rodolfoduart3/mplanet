<script src="js/jquery.min.js"></script>

<script>

  $(document).ready(function() { 
    getAjax('pt_br');
    $('.listFlags .flagImage').on('click', function() {
      var element = $(this).find('img')
      var classLang = element.attr("class");
      getAjax(classLang);
    });      
  });
  
  function getAjax(lang) {    
    $.ajax({
      url: "language/translate.json",
      type: 'POST',
      dataType: 'json',
      data: lang,
      success: function(data) { 
        var convertJSON = JSON.stringify(data[lang]);
        window.localStorage.setItem('jsonLanguage', convertJSON);
        insertText();
      },
      error: function (request, status, error) {
        console.log(request.responseText);
      }
    });
  }
  
  function insertText() {
    var jsonComplete = JSON.parse(window.localStorage.getItem('jsonLanguage'));
    var searchIn = ".main-information, .album-description, .musics";
    $(searchIn).find('[id]').each(function() {
      var element = $(this).attr("id");
      $(this).text(jsonComplete[element]);
    });
  }
  
</script>

<?php 

  // $file_json = json_decode($_POST["jsonLanguage"]);
  // 
  // $bio = $file_json->bio;
  // $music = $file_json->music;
  // $contact = $file_json->contact;
  // 
  // $mainInfo_title = $file_json->mainInfo_title;
  // $mainInfo_desc = $file_json->mainInfo_desc;
  // 
  // $albumDescription_p1 = $file_json->albumDescription_p1;
  // $albumDescription_p2 = $file_json->albumDescription_p2;
  // $albumDescription_p3 = $file_json->albumDescription_p3;
  // $albumDescription_p4 = $file_json->albumDescription_p4;
  // $albumDescription_p5 = $file_json->albumDescription_p5;
  // $albumDescription_p6 = $file_json->albumDescription_p6;
  
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