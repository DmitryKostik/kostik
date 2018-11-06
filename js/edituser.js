
$(document).ready( function(){
   var editid;
   var $modal;
   $('#Edit').on('show.bs.modal', function(e) {
       $modal = $(this);
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
     var changeform = $('#changeform');
     $.ajax({
         type: 'POST',
         url: '../Controllers/edituser.php',
         data: {id: editid, nickname: changeform.nickname, age: changeform.age, rolevalue: changeform.rolevalue }
     })
     .done(function() {

    });
   });
})
