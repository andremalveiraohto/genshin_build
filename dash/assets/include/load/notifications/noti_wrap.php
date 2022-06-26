
<div class="noti__item js-item-menu">
    <i class="zmdi zmdi-notifications"></i>
    <div id="quantity"></div>
    <div class="mess-dropdown js-dropdown">
        <div id="mess__title"><p></p><div id="cleanNoti">Limpar</div></div>
        <div id="NotiFeedbacks"></div>
        <div class="mess__footer"></div>
    </div>
</div>



<script>


$(document).ready(function(){

 setInterval(() => {
    notifications();
    loadNotiFeedback()
}, 5000);   

    notifications();
    loadNotiFeedback()
}); 



function notifications() {

    $.ajax({
        url:'assets/include/load/notifications/notiCount.php',
        type:'POST',
        dataType:'json',
        success: function(json){

            if(json.notiCount == 0){
                $('#noti_wrap #mess__title').css('display','none');
                $('#noti_wrap #NotiFeedbacks').html('<h1>Você não tem Notificações</h1>');
                $('#noti_wrap .mess__footer').css('display','none');
               
            }else{
                if(json.notiCount > 0){

                    $('#quantity').html('<span class="quantity">'+json.notiCount+'</span>');

                    refreshNoti(json.notiCount);
                    
                    $('#noti_wrap #mess__title').css('display','');
                    $('#noti_wrap .mess__footer').css('display','');

                }
            }
        }
    })

}

//Refresh Notificações
var title = document.title;
function refreshNoti(noti) {
document.title = '(' + noti + ') ' + title;

    if(noti == 0){
        $('#mess__title').addClass('mess__title');
        $('#mess__title p').html('');
    }else{
        if(noti == 1){
            $('#mess__title').addClass('mess__title');
            $('#mess__title p').html(''+ noti +' nova Notificação');
        }else{
            $('#mess__title').addClass('mess__title');
            $('#mess__title p').html(''+ noti +' novas Notificações');
        } 
    }
    loadFeedback();
}

function loadNotiFeedback(){
    $('#NotiFeedbacks').load('assets/include/load/notifications/notiFeedback.php');
}

//CLICK LIMPAR
$('#mess__title #cleanNoti').on('click',function(){ 
    $.ajax({
      url:'assets/include/load/notifications/cleanNoti.php',
      success: function(){
              $('#quantity span').remove();
              $('head title')[0].firstChild.remove();

              $('#noti_wrap #mess__title').css('display','none');
              $('#noti_wrap #NotiFeedbacks').html('<h1>Você não tem Notificações</h1>');
              $('#noti_wrap .mess__footer').css('display','none');
              
              loadFeedback();
      }
  });
  return false; 
});






</script>