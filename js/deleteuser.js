
$(document).ready( function(){
   var deleteid;
   $('#Delete').on('show.bs.modal', function(e) {
       var $modal = $(this);
           deleteid = e.relatedTarget.dataset.deleteid;
       $.ajax({
           method: 'GET',
           url: '../Controllers/getuser.php',
           data: 'id=' + deleteid
       })
       .done(function(data) {
        $modal.find('.delete-content').html(data);
      })
      .fail(function() {
        $modal.find('.delete-content').html(deleteid);
      })
   });

   $('#delete-button').click(function(){
     $.ajax({
         method: 'GET',
         url: '../Controllers/deleteuser.php',
         data: 'id='+ deleteid
     })
     .done(function() {
      $('#user-'+deleteid).remove();
      $('#Delete').modal('toggle');
    });
   });

})
