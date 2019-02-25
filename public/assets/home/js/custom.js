$('form.edit_email').on('submit',function(e){
   e.preventDefault();
   $.ajax({
      url: $('form.edit_email').attr('action'),
      data: $('form.edit_email').serialize(),
      type: 'POST',
      success: function(data){
        $('#errors').empty();
          if(data['error'])
          {
              $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                  '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                  '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
          }
          if(data['success']) {
              $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                  '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                  '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
          }
      },
      error: function (data) {
          $('#errors').empty();
          var l = JSON.parse(data.responseText);
          var i = 0;
          $.each(l['errors'], function (heading, text) {
              i++;
              $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                  '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                  '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

          });
      },
   });
});
$('form.edit_password').on('submit',function(e){
    e.preventDefault();
    $.ajax({
        url: $('form.edit_password').attr('action'),
        data: $('form.edit_password').serialize(),
        type: 'POST',
        success: function(data){
            $('#errors').empty();
            if(data['error'])
            {
                $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                    '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                    '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
            }
            if(data['success']) {
                $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                    '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                    '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
            }
        },
        error: function (data) {
            $('#errors').empty();
            var l = JSON.parse(data.responseText);
            var i = 0;
            $.each(l['errors'], function (heading, text) {
                i++;
                $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                    '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                    '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

            });
        },
    });
});