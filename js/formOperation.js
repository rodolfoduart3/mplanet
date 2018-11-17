(function($){
  $(function(){
    
    $('#form_contact').on('submit', function() {
      var that =  $(this),
          url = that.attr('action'),
          type = that.attr('method'),
          data = {};
      
      that.find('[name]').each(function(index, value) {
        var that = $(this),
            name = that.attr('name'),
            value = that.val();
            
        data[name] = value;
      });
      
      if ($.trim(data.name).length > 0 && $.trim(data.message).length > 0) {
        if (validateEmail(data.email)) {
          $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(response) {
              setTimeout(function() { 
                swal('Obrigado!', 'Retornarei sua mensagem o mais breve possível.', "success");
                $('.showMessage').html(response); 
              }, 1000);
              setTimeout(function() { clearInput(); }, 1000);
            },
            beforeSend: function() {
              $('.loadingImg').fadeIn('slow');
            },
            complete: function() { 
              $('.loadingImg').fadeOut('slow');
            },
            error: function(response){
              setTimeout(function() {
                swal('Ops...', 'Houve um problema!<br/>Tente mais tarde.', "warning");
              }, 500);
              console.log(response.statusText);
            }
          });          
        } else {
          // alert('Email inválido!');
          swal('Ops...', 'O e-mail informado é inválido!', "error");
        }
      } else {
        // alert('Preencha o formulário corretamente!');
        swal('Ops...', 'Preencha o formulário corretamente!', "warning");
      }

      return false;
    });
    
    function validateEmail(email) {
      var exp = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
      return exp.test(String(email).toLowerCase());
    }
    
    function clearInput() {
      $(':input','#form_contact').not(':button, :submit, :reset, :hidden').val('');
    }
    
  });
})(jQuery); 