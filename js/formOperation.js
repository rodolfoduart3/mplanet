(function($){
  $(function(){
    
    $('.boxBtn').click(function(e) {
      e.preventDefault();
      
      var name = $('#name').val();
      var email = $('#email').val();
      var message = $('#message').val();
      
      if (name.trim().length > 0 && message.trim().length > 0) {
        if (validateEmail(email)) {
          alert("OK!");
          clearInput();
        } else {
          alert('E-mail inválido!');
        }
      } else {
        alert('Preencha o formulário corretamente!');
      }
    });
    
    function validateEmail(email) {
      var exp = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
      return exp.test(String(email).toLowerCase());
    }
    
    function clearInput() {
      $('#name').val(''); $('#email').val(''); $('#message').val('');
    }
    
  });
})(jQuery); 