<script src="js/jquery.min.js"></script>

<script>

  $('#load_screen').show();
  
  window.addEventListener('load', function() {
    $('#load_screen').fadeOut(1000, "linear");
    $('.loading').fadeOut(800, "linear");
  });

  $(document).ready(function() { 
    
    // Validação para preservar linguagem escolhida
    if (window.localStorage.getItem('jsonLanguage') === null) {
      loadJSON('pt_br');
    } else {
      insertText();
    }
    
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
        setTimeout(insertText(), 300);
      },
      error: function (request, status, error) { console.log(request.responseText); }
    });
  }
  
  // Localiza os ID's dentro dos elementos inseridos em @searchIn, e substitui pela informação do JSON
  function insertText() {
    var jsonComplete = JSON.parse(window.localStorage.getItem('jsonLanguage'));
    var searchIn = ".sidenav, .main-information, .album-description, .musics, .production-block, .page-footer, .extern-players, .titleInsta, .bioInformation, .presskitBox, .formContact";
    $(searchIn).find('[id]').each(function() {
      var element = $(this).attr("id");
      $(this).html(jsonComplete[element]);
    });
  }
  
</script>