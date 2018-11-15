<script src="js/jquery.min.js"></script>

<script>

  $(document).ready(function() { 
    loadJSON('pt_br');
    
    // Controle de linguagens selecionadas
    $('.listFlags .flagImage').on('click', function() {
      var element = $(this).find('img')
      var classLang = element.attr("class");
      loadJSON(classLang);
    });      
  });
  
  // POST no JSON e criação de um localStorage com os dados obtidos
  function loadJSON(lang) {    
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
      error: function (request, status, error) { console.log(request.responseText); }
    });
  }
  
  // Localiza os ID's dentro dos elementos inseridos em @searchIn, e substitui pela informação do JSON
  function insertText() {
    var jsonComplete = JSON.parse(window.localStorage.getItem('jsonLanguage'));
    var searchIn = ".sidenav, .main-information, .album-description, .musics, .production-block, .page-footer, .extern-players, .titleInsta, .bioInformation, .presskitBox";
    $(searchIn).find('[id]').each(function() {
      var element = $(this).attr("id");
      $(this).text(jsonComplete[element]);
    });
  }
  
</script>