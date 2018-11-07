
$(document).ready( function(){
   var editid;
   $('#Edit').on('show.bs.modal', function(e) {
       var $modal = $(this);
       editid = e.relatedTarget.dataset.editid;
       $.ajax({
           method: 'GET',
           url: '../Controllers/getedit.php',
           data: 'id=' + editid
       })
       .done(function(data) {
        $modal.find('.edit-content').html(data);
      })
   });

   $('#edit-button').click(function(){
     var nickname = $("#changeform input[name='nickname']").val();
     var age = $("#changeform input[name='age']").val();
     var rolevalue = $("#changeform select[name='rolevalue']").val();
     $.ajax({
         type: 'GET',
         url: '../Controllers/edituser.php',
         data: {id: editid, nickname: nickname, age: age, rolevalue: rolevalue }
     })
     .done(function(data) {
       $('#user-'+editid).html(data);
       $('#Edit').modal('toggle');
    });
   });
})
