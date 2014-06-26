

$(document).ready(function(){
  

   $('#story').click(function(){
        $(this).show('#synopsis');
        hide('#directors');

    });

$('#film-makers').click(function(){
        $(this).show('#directors');
        hide('#synopsis');

    });





});