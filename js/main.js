$(document).ready(function(){
    $('#load').click(function(){
       $.ajax({
        url: 'ajax-load.php',
        type: 'POST',
        success:function(data){
            $('#show').html(data);
        }
       });
    });
});