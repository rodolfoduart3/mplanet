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
                swal('Thank you!', 'I will return your message as soon as possible.', "success");
              }, 1000);
              setTimeout(function() { clearInput(); }, 1000);
            },
            beforeSend: function() { $('.loadingImg').fadeIn('slow'); },
            complete: function() { $('.loadingImg').fadeOut('slow'); },
            error: function(response) {
              setTimeout(function() {
                swal('Ops...', 'There was a problem! <br/> Please try again later.', "warning");
              }, 500);
              $('.showMessage').html(response.statusText);
            }
          });          
        } else {
          swal('Ops...', 'Invalid email!', "error");
        }
      } else {
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