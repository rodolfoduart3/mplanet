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
              var lang = window.localStorage.getItem('jsonLanguage');
              var convertJSON = JSON.parse(lang);
              setTimeout(function() {
                swal({
                  title: convertAux.swal_thankYou,
                  text: convertAux.swal_returnMessage,
                  type: "success",
                  confirmButtonText: "OK" 
                 });
              }, 1000);
              setTimeout(function() { clearInput(); }, 1000);
            },
            beforeSend: function() { $('.loadingImg').fadeIn('slow'); },
            complete: function() { $('.loadingImg').fadeOut('slow'); },
            error: function(response) {
              setTimeout(function() {
                var lang = window.localStorage.getItem('jsonLanguage');
                var convertJSON = JSON.parse(lang);
                swal({
                  title: "Ops...",
                  text: convertJSON.swal_errorSendEmail,
                  type: "warning",
                  confirmButtonText: "OK" 
                 });
              }, 500);
              $('.showMessage').html(response.statusText);
            }
          });          
        } else {
          var lang = window.localStorage.getItem('jsonLanguage');
          var convertJSON = JSON.parse(lang);
          swal({
            title: "Ops...",
            text: convertJSON.swal_invalidEmail,
            type: "error",
            confirmButtonText: "OK" 
           });
        }
      } else {
        var lang = window.localStorage.getItem('jsonLanguage');
        var convertJSON = JSON.parse(lang);
        swal({
          title: "Ops...",
          text: convertJSON.swal_invalidFields,
          type: "warning",
          confirmButtonText: "OK" 
         });
        swal('Ops...', 'Complete the form correctly!', "warning");
      }

      return false;
    });
    
    function validateEmail(email) {
      var exp = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
      return exp.test(String(email).toLowerCase());
    }
    
    function clearInput() {
      $(':input','#form_contact').not(':button, :submit, :reset, :hidden').val('');
      $(':input','#form_contact').not(':button, :submit, :reset, :hidden').removeClass('active');
      $('textarea').css('height','min-content');
    }
    
  });
})(jQuery); 