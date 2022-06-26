/*!
 * Código js por: Andre Malveira
 * Copyright 2021
 */


var configHour = document.querySelector('#config');
var overlayConfig = document.querySelector('#overlayConfig');
var configHourCheck = true;

block_Aud = true;
document.getElementById("aud").checked = true;

if(localStorage.getItem('aud') == 'false'){
    block_Aud = false;
    document.getElementById("aud").checked = false;
}


if(localStorage.getItem('hideExcla_configHour') == 'check'){
    configHour.querySelector('img').remove();
}

//showhide
configHour.addEventListener('click', function(){
    if((this).querySelector('img')){
        (this).querySelector('img').remove();
    }
    localStorage.setItem('hideExcla_configHour', 'check');


    if(configHourCheck == true) {
        (this).parentElement.lastElementChild.classList.add('show');
        configHourCheck = false;
        overlayConfig.style.display= 'block';
        if(block_Aud == true){open_modal.play();}
    } else {
        (this).parentElement.lastElementChild.classList.remove('show');
        configHourCheck = true;
        overlayConfig.style.display= '';
    }
    
    if(configHourCheck == false){
        overlayConfig.addEventListener('click', function(){
            configHour.parentElement.lastElementChild.classList.remove('show');
            configHourCheck = true;
            overlayConfig.style.display= '';
            if(block_Aud == true){close_modal.play();}
        });
    }
});


var alertScroll = document.querySelector('.alertScroll');

if(localStorage.getItem('blockalertScroll') == 'true'){
    alertScroll.remove();
}

if(localStorage.getItem('blockalertScroll') == undefined){
    $(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 30)
            {
                if(alertScroll){
                    alertScroll.classList.add('hide');
                    localStorage.setItem('blockalertScroll', 'true'); 
                }

            } 
        });
    });
}



//modstream check buttom donate
if (localStorage.getItem('modstream') == "true") {	
    document.querySelector('.modalconfigHour [for=showSecondsSwitch]').style.display='none';
    document.querySelector('.modalconfigHour [for=compactModeSwitch]').style.display='none';

}


if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

    document.querySelector('.modalconfigHour [for=modstream]').style.display='none';

    var footer = document.querySelector('footer');
    footer.style.display='block';
    footer.lastElementChild.style.display='none';

    document.querySelector('body').classList.add('mobile');
    document.querySelector('.cpy').style.fontSize='10px';

    new fullScroll({

        // parent container
        mainElement: "bodyCardHour",
    
        // content section
        sections : 'section',
    
        // animation speed
        animateTime : 0.3,
    
        // easing for animation
        animateFunction : 'ease',
    
        // current position
        currentPosition: 0,
    
        // display dots navigation
        displayDots: true,
    
        // where to place the dots navigation
        dotsPosition: 'right'
    
    });
} 






/* ============== EFEITO HOVER BOTÃO CLOSE ====================*/
$(function(){
    var $borda_close_hover_1 = $('.borda_close_1'); 
    var $borda_close_hover_2 = $('.borda_close_2'); 
    var $fechar_bordar = $('.fechar');
    $fechar_bordar.hover(function(){
        $borda_close_hover_1.addClass('borda_close_hover_1');
        $borda_close_hover_2.addClass('borda_close_hover_2');

        if(block_Aud == true){close_modal.play();}
    },
    function(){
        //Ao remover o cursor da div
        $borda_close_hover_1.removeClass('borda_close_hover_1');
        $borda_close_hover_2.removeClass('borda_close_hover_2');
    });
 });
 