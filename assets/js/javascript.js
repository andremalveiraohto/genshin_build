
/*     var isModalInUse = false;
    var closeInM = false;

    $(function(){

        $(document).keyup(function(keypress){
            if(keypress.keyCode == 77) {
                if(isModalInUse == false){
                    if(closeInM == false){
                        closeInM = true
                        let modal= document.querySelector('#modals_map');
                        modal.classList.add("showModal");
                        modal.style.display = '';
                        $('#map').load('assets/include/map.php');

                    } else if (closeInM == true){
                        closeInM = false;
                        isModalInUse = false;
                        let m= document.querySelector('#modals_map');
                        m.classList.remove("showModal"); 
                        setTimeout(function () { $('#modals_map').css({ display: "none" }); }, 500);
                    }
                } 

            }

        });
    });
    
    function closeMap(){
        closeInM = false;
        isModalInUse = false;
        let m= document.querySelector('#modals_map');
        m.classList.remove("showModal"); 
        setTimeout(function () { $('#modals_map').css({ display: "none" }); }, 500);
    };
 */


$('#full_screen').on('click',function(){ 
    isFullScreen();
}); 

$('#full_screen').on('click',function(){ 
    if(document.querySelector('#full_screen img')){document.querySelector('#full_screen img').remove()}
     localStorage.setItem('hideExcla_screen', 'none');
 }); 
if(document.querySelector('#full_screen img'))
    {document.querySelector('#full_screen img')
        .style.display = localStorage.getItem("hideExcla_screen");
    }


//loader 
    var loading = document.querySelector('#loading');
    if(loading){
        window.addEventListener("load", function() {
            loading.classList.add('hide');
            setInterval(() => {
                loading.remove();
            }, 100);
        });
    }

//fullscreen
function isFullScreen() {

    if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
     (!document.mozFullScreen && !document.webkitIsFullScreen)) {

        localStorage.setItem("fullScreen", true);
      if (document.documentElement.requestFullScreen) {  
        document.documentElement.requestFullScreen();  
      } else if (document.documentElement.mozRequestFullScreen) {  
        document.documentElement.mozRequestFullScreen();  
      } else if (document.documentElement.webkitRequestFullScreen) {  
        document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
      }  


    } else {  
        localStorage.setItem("fullScreen", false);
      if (document.cancelFullScreen) {  
        document.cancelFullScreen();  
      } else if (document.mozCancelFullScreen) {  
        document.mozCancelFullScreen();  
      } else if (document.webkitCancelFullScreen) {  
        document.webkitCancelFullScreen();  
      }  
    }  
  }




/* ================= EFEITO SLIDES CLOSE ====================*/
$(function(){
    $('.top-bar .fechar a').on('click', function(e) {

        $('.top-bar').removeClass('slide_topbar');
        $('.top-bar').addClass('slide_topbar_click');
        $('.grid-2 .grid-2-1').addClass('slidein3_left');
        $('.grid-2 .grid-2-2').addClass('slidein_reverse');
        $('.grid-2 .grid-2-3').addClass('slidein2_right');

        $('.modals_form_shadow').addClass('modals_form_shadow_close');
        $('.modals_form_shadow').addClass('sdow_opty_2');


    });
});
/* =============== FIM EFEITO SLIDES CLOSE ==================*/

//CLICK PERSONAGEM ABOUT 
$('#_aboutp').click(function(){

    if(document.querySelector('.box-5.dp_n') != null){
        document.querySelector('.indice_h2')
            .classList.remove('indice_h2');

        document.querySelector('.pino_indice_active')
            .classList.remove('pino_indice_active');

        document.querySelector('.box-1 .fas, .box-1 .fa-caret-rightt')
            .classList.remove('fas', 'fa-caret-rightt');

        document.querySelectorAll('#armas, #artefatos, #equipe').forEach(function(item){
            item.classList.remove('dp_b');
            item.classList.add('dp_n');});

        document.querySelectorAll('.grid-2-2 .box-3').forEach(function(item){
            item.classList.remove('dp_b');
            item.classList.remove('dp_n');})
            
        var box_6_7 = document.querySelectorAll('.box-6, .box-7');
            box_6_7.forEach(function(item) {item.classList.add('dp_n');});
            
        var box_5 = document.querySelector('.box-5');
            box_5.classList.add('slidein2');
            box_5.classList.remove('dp_n');

        var $indice_add_pino_center = $('.indice .pinos .pino_center');
        $indice_add_pino_center.css('display', '');

        $('.indice h2').css('margin-left', '');
        $('.indice h2').css('opacity', '');

    }
})
/* ================= EFEITO HOVER, ACTIVE INDICE ====================*/

$(function(){
    var  $pino_indice_hover = $('#box_armas .pino_indice');
    var  $indice_hover      = $('#box_armas');

    var $indice_remove_pino_center = $('#box_armas .pinos .pino_center');
    var $indice_add_pino_center = $('.indice .pinos .pino_center');

    $("#box_armas").hover(function(){
        if(block_Aud == true){mouse_over.play()}
        if(!document.querySelector('#box_armas .pino_indice_active')){
            $pino_indice_hover.addClass('pino_indice_hover');}
        $indice_hover.addClass('indice_hover');
        $indice_remove_pino_center.css('opacity', '1');
    },
    function(){
        //Ao remover o cursor da div
        $pino_indice_hover.removeClass('pino_indice_hover');
        $indice_hover.removeClass('indice_hover');
        $indice_remove_pino_center.css('opacity', '');
    });

        // Arma active
        var $arma_active = $('#box_armas'); 
        var $indice_h2 = $('#box_armas h2'); 
        var $indice_li_h2 = $('.indice li h2');

        var $indice_li = $('.indice li '); 
        var $indice_li_i = $('.indice li i');

        var $indice_pinos_fas = $('#box_armas .pinos .pin');
        var $indice_pinos_pin = $('.indice .pinos .pin');
     
        var $box_2_armas = $('#armas')
        var $box_2 = $('.dp_n');

        var $add_dp_b = $('.grid-2-2 .bg_armas');
        var $add_dp_n = $('.grid-2-2 .bg_principal');
        var $remove_dp_b = $('.grid-2-2 .box-3');

        $arma_active.on('click', function(e) {
            e.preventDefault();          
            if(block_Aud == true){arma.play();}
            
            $add_dp_n.addClass('dp_n');
            $remove_dp_b.removeClass('dp_b');
            $add_dp_b.addClass('slidein dp_b');
            

            $box_2.removeClass('dp_b ');
            $box_2_armas.addClass('dp_b ');
            
            $('.indice h2').css('opacity', '');
            $('#box_armas h2').css('opacity', '1');

            $('.indice h2').css('margin-left', '');
            document.querySelector('#box_armas h2').style.marginLeft = '15px';

             /*DISPLAY NONE NO GRID RIGHT-2-3*/ $('.grid-2-3 #grid_right-2-3').addClass('dp_n');
             /*DISPLAY BLOCK NO BOX-7*/$('.grid-2-3 .box-7').removeClass('dp_n');
             
            $indice_add_pino_center.css('display', '');
            $indice_remove_pino_center.css('display', 'none');
            
            $indice_li_i.removeClass('pino_indice_active');
            $pino_indice_hover.addClass('pino_indice_active');

            $indice_pinos_pin.removeClass('fa-caret-rightt');
            $indice_pinos_fas.addClass('fa-caret-rightt');

            $indice_li.removeClass('indice_active');
            $indice_hover.addClass('indice_active');

            $indice_li_h2.removeClass('indice_h2');
            $indice_h2.addClass('indice_h2');
        });
 });

 $(function(){
    var  $pino_indice_hover = $('#box_artefatos .pino_indice');
    var  $indice_hover      = $('#box_artefatos');

    var $indice_remove_pino_center = $('#box_artefatos .pinos .pino_center');
    var $indice_add_pino_center = $('.indice .pinos .pino_center');

    $("#box_artefatos").hover(function(){
        if(block_Aud == true){mouse_over.play();}
        if(!document.querySelector('#box_artefatoss .pino_indice_active')){
            $pino_indice_hover.addClass('pino_indice_hover');}
        $indice_hover.addClass('indice_hover');
        $indice_remove_pino_center.css('opacity', '1');

    },
    function(){
        //Ao remover o cursor da div
        $pino_indice_hover.removeClass('pino_indice_hover');
        $indice_hover.removeClass('indice_hover');

        $indice_remove_pino_center.css('opacity', '');
    });

        // artefatos active
        var $artefatos_active = $('#box_artefatos'); 
        var $indice_h2 = $('#box_artefatos h2');
        var $indice_li_h2 = $('.indice li h2'); 

        var $indice_li = $('.indice li '); 
        var $indice_li_i = $('.indice li i');

        var $indice_pinos_fas = $('#box_artefatos .pinos .pin');
        var $indice_pinos_pin = $('.indice .pinos .pin');

        var $box_2_artefatos = $('#artefatos')
        var $box_2 = $('.dp_n');
        
        var $add_dp_b = $('.grid-2-2 .bg_artefatos');
        var $add_dp_n = $('.grid-2-2 .bg_principal');
        var $remove_dp_b = $('.grid-2-2 .box-3');
        

        $artefatos_active.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){artefatos.play();}


            $remove_dp_b.removeClass('dp_b');

            $add_dp_n.addClass('dp_n');
            $add_dp_b.addClass('slidein dp_b');

            $('.indice h2').css('opacity', '');
            $('#box_artefatos h2').css('opacity', '1');

            $('.indice h2').css('margin-left', '');
            document.querySelector('#box_artefatos h2').style.marginLeft = '15px';

            /*DISPLAY BLOCK NO BOX-8*/$('.grid-2-3 #grid_right-2-3').addClass('dp_n');
            /*DISPLAY BLOCK NO BOX-6*/$('.grid-2-3 .box-6').removeClass('dp_n');


            $box_2.removeClass('dp_b ');
            $box_2_artefatos.addClass('dp_b ');

            $indice_li_i.removeClass('pino_indice_active');
            $pino_indice_hover.addClass('pino_indice_active');

            $indice_add_pino_center.css('display', '');
            $indice_remove_pino_center.css('display', 'none');

            $indice_pinos_pin.removeClass('fa-caret-rightt');
            $indice_pinos_fas.addClass('fa-caret-rightt');

            $indice_li.removeClass('indice_active');
            $indice_hover.addClass('indice_active');

            $indice_li_h2.removeClass('indice_h2');
            $indice_h2.addClass('indice_h2');
        });
 });

 $(function(){
    var  $pino_indice_hover = $('#box_equipe .pino_indice');
    var  $indice_hover      = $('#box_equipe');

    var $indice_remove_pino_center = $('#box_equipe .pinos .pino_center');
    var $indice_add_pino_center = $('.indice .pinos .pino_center');

    $("#box_equipe").hover(function(){
        if(block_Aud == true){mouse_over.play();}
        if(!document.querySelector('#box_equipe .pino_indice_active')){
            $pino_indice_hover.addClass('pino_indice_hover');}
        $indice_hover.addClass('indice_hover');
        $indice_remove_pino_center.css('opacity', '1');
    },
    function(){
        //Ao remover o cursor da div
        $pino_indice_hover.removeClass('pino_indice_hover');
        $indice_hover.removeClass('indice_hover');
        $indice_remove_pino_center.css('opacity', '');
    });

        // equipe active
        var $equipe_active = $('#box_equipe'); 
        var $indice_h2 = $('#box_equipe h2'); 
        var $indice_li_h2 = $('.indice li h2'); 

        var $indice_li = $('.indice li '); 
        var $indice_li_i = $('.indice li i');

        var $indice_pinos_fas = $('#box_equipe .pinos .pin');
        var $indice_pinos_pin = $('.indice .pinos .pin');

        var $box_2_armas = $('#equipe')
        var $box_2 = $('.dp_n');

        var $add_dp_b = $('.grid-2-2 .bg_equipe');
        var $add_dp_n = $('.grid-2-2 .bg_principal');
        var $remove_dp_b = $('.grid-2-2 .box-3');
        
        $equipe_active.on('click', function(e) {
            e.preventDefault();
            //if(block_Aud == true){equipe.play();}

            $add_dp_n.addClass('dp_n');
            $remove_dp_b.removeClass('dp_b');
            $add_dp_b.addClass('slidein dp_b');

            $box_2.removeClass('dp_b ');
            $box_2_armas.addClass('dp_b ');

            $('.indice h2').css('opacity', '');
            $('#box_equipe h2').css('opacity', '1');

            $('.indice h2').css('margin-left', '');
            document.querySelector('#box_equipe h2').style.marginLeft = '15px';

            /*DISPLAY NONE NO GRID RIGHT-2-3*/ $('.grid-2-3 #grid_right-2-3').addClass('dp_n');
            /*DISPLAY BLOCK NO BOX-8*/$('.grid-2-3 .box-8').removeClass('dp_n');

            $indice_li_i.removeClass('pino_indice_active');
            $pino_indice_hover.addClass('pino_indice_active');

            $indice_add_pino_center.css('display', '');
            $indice_remove_pino_center.css('display', 'none');
            
            $indice_pinos_pin.removeClass('fa-caret-rightt');
            $indice_pinos_fas.addClass('fa-caret-rightt');

            $indice_li.removeClass('indice_active');
            $indice_hover.addClass('indice_active');

            $indice_li_h2.removeClass('indice_h2');
            $indice_h2.addClass('indice_h2');
        });
 });


/* ============== EFEITO SONORO ====================*/

//NEWS
var hover_card= new Audio();
hover_card.src = 'assets/audio/hover_card.mp3';

var open_menu_paimon= new Audio();
open_menu_paimon.src = 'assets/audio/open_menu_paimon.mp3';

var close_menu_paimon= new Audio();
close_menu_paimon.src = 'assets/audio/close_menu_paimon.mp3';

var switch_type= new Audio();
switch_type.src = 'assets/audio/switch_type.mp3';

var click_marker_map= new Audio();
click_marker_map.src = 'assets/audio/click_marker_map.mp3';

//OLDS
var abrir = new Audio();
abrir.src = 'assets/audio/open_win.mp3';

var open_info_persona= new Audio();
open_info_persona.src = 'assets/audio/open_info_persona.mp3';

var open_persona = new Audio();
open_persona.src = 'assets/audio/open_persona.mp3';

var mouse_over= new Audio();
mouse_over.src = 'assets/audio/02.mp3';

var arma= new Audio();
arma.src = 'assets/audio/arma.mp3';

var artefatos= new Audio();
artefatos.src = 'assets/audio/artefatos.mp3';

var click_artefatos= new Audio();
click_artefatos.src = 'assets/audio/click_artefatos.mp3';

var open_modal= new Audio();
open_modal.src = 'assets/audio/open_modal.mp3';

var close_modal= new Audio();
close_modal.src = 'assets/audio/close_modal.mp3';


/* ============== EFEITO HOVER BOTÃO CLOSE ====================*/
hoverButtonClose();
function hoverButtonClose() {
    $(function(){
        var $borda_close_hover_1 = $('.borda_close_1'); 
        var $borda_close_hover_2 = $('.borda_close_2'); 
        var $fechar_bordar = $('.fechar');
        $fechar_bordar.hover(function(){

            this.querySelector('.borda_close_1').classList.add('borda_close_hover_1');
            this.querySelector('.borda_close_2').classList.add('borda_close_hover_2');
          
            if(block_Aud == true){close_modal.play();}
        },
        function(){
            //Ao remover o cursor da div
            $borda_close_hover_1.removeClass('borda_close_hover_1');
            $borda_close_hover_2.removeClass('borda_close_hover_2');
        });
    });
}



    /* GET ITEM LOCAL STORAGE */
    if(document.querySelector('#feedback .icon_excla')){document.querySelector('#feedback .icon_excla').style.display = localStorage.getItem("hideExcla_feed");}
    if(document.querySelector('#details_persona .icon_excla')){document.querySelector('#details_persona .icon_excla').style.display = localStorage.getItem("hideExcla_details_persona");}       
    if(document.querySelector('#share .icon_excla')){document.querySelector('#share .icon_excla').style.display = localStorage.getItem("hideExcla_share");}
    if(document.querySelector('#about .icon_excla')){document.querySelector('#about .icon_excla').style.display = localStorage.getItem("hideExcla_about");}
    if(document.querySelector('#star_rat .icon_excla')){document.querySelector('#star_rat .icon_excla').style.display = localStorage.getItem("hideExcla_star_rat");}
    if(document.querySelector('#bgchange .icon_excla')){document.querySelector('#bgchange .icon_excla').style.display = localStorage.getItem("hideExcla_bgchange");}




    /*BGCHANGE*/ 
    if(typeof np != 'undefined') {
        var bgBanner = 'url(assets/img/elements/'+ep+'/persona/'+np+'/bgchange_'+np+'.png'+')';
        var bgPattern = 'url(assets/img/elements/'+ep+'/'+ep+'_bg.png'+')';
        var htmlbgchangeDownload = '<a class="elipse_bottom" title="Download this Background"><i class="fas fa-arrow-alt-circle-down"></i></a>';
        var LSbgBanner = localStorage.getItem('bgBanner_'+np+'');
        var grid22 = document.querySelector('.grid-2-2');
        var url_atual = window.location.host;

        if(LSbgBanner){
            document.querySelector('#bodyTeiner').style.backgroundImage = localStorage.getItem('bgBanner_'+np+'');
            grid22.style.opacity='0';    
            $('#bgchangeDownload').html(htmlbgchangeDownload);
        }else{
            $('#bgchangeDownload a').remove()
        }

        var bgchange = false;
    
        $('#bgchange').on('click', function(e) {

            if(bgchange == false){
                document.querySelector('#bodyTeiner').style.backgroundImage = bgBanner;
                localStorage.setItem('bgBanner_'+np+'', bgBanner);
                bgchange = true;
                grid22.style.opacity='0';
                $('#bgchangeDownload').html(htmlbgchangeDownload);
                bgchangeButton();
            } else {
                bgchange = false;
                document.querySelector('#bodyTeiner').style.backgroundImage = bgPattern;
                localStorage.removeItem('bgBanner_'+np+'');
                grid22.style.opacity='1';
                $('#bgchangeDownload a').remove()
            }
            if(block_Aud == true){switch_type.play();}

            //hideExcla
            if(localStorage.getItem("hideExcla_bgchange") == null){
                let hideExcla= document.querySelector('#bgchange img');
                hideExcla.classList.add("hideExcla");
                localStorage.setItem('hideExcla_bgchange', 'none');
            }
        });

        //DOWNLOAD
        function bgchangeButton() {
            $('#bgchangeDownload a').on('click', function(e) {

                var confirmation = confirm("Download this Background?");

                if(confirmation){
                    $("#bgchangeDownload a")
                    .attr("href", 'assets/img/elements/'+ep+'/persona/'+np+'/bgchange_'+np+'.png'+'')
                    .attr("download", 'banner.'+np+'.('+url_atual+').png')
                    .appendTo("body"); 
                    $('#bgchangeDownload').html(htmlbgchangeDownload);
                }
            });
        }
    }


    /* FEEDBACK */

    $('#feedback').on('click', function(e) {
        isModalInUse = true;
        closeInM = true

        let modal= document.querySelector('#modals_feedback');
        modal.classList.add("showModal");
        let hideExcla= document.querySelector('#feedback img');
        if(hideExcla){
            hideExcla.classList.add("hideExcla");
            localStorage.setItem('hideExcla_feed', 'none');
        }
        modal.style.display = '';
        if(document.querySelector('#menuPaimon')){
            document.querySelector('#menuPaimon').classList.add('si_blur')
        }
    });

    function closeFeedback(){
        isModalInUse = false;
        closeInM = false;
        let m= document.querySelector('#modals_feedback');
        m.classList.remove("showModal"); 
        document.querySelector('#modal_load').classList.remove("showModal");
        setTimeout(function () { $('#modals_feedback').css({ display: "none" }); }, 500);
        if(document.querySelector('#menuPaimon')){
            document.querySelector('#menuPaimon').classList.remove('si_blur')
        }
    }



    /* details_persona*/
    $('#details_persona').on('click', function(e) {
        let modal= document.querySelector('#modal_details_persona');
        modal.classList.add("showModal");
        let hideExcla= document.querySelector('#details_persona img');
        hideExcla.classList.add("hideExcla");
        localStorage.setItem('hideExcla_details_persona', 'none');
        modal.style.display = '';

        if(block_Aud == true){open_info_persona.play();}
    });

    function closeDetails_Persona(){
        let m= document.querySelector('#modal_details_persona');
        m.classList.remove("showModal"); 
        setTimeout(function () { $('#modal_details_persona').css({ display: "none" }); }, 500);
    }

      /* details_persona VERIFICA SE SCROL ESTÁ ATIVO se SIM ADICIONA OS ARROWS DO SCROLL*/
     var main_modal_text_h2 = $('.main_modal_text h2').height();
     var main_modal_text = $('.main_modal_text').height();
     var info_container_arrow = $('.info_container_arrow');

     if(main_modal_text_h2){
        if(main_modal_text_h2 > main_modal_text){
            info_container_arrow.append('<div class="arrow_top"></div>');
            info_container_arrow.append('<div class="arrow_bottom"></div>');
            info_container_arrow.append('<div class="op_top"></div>');
            info_container_arrow.append('<div class="op_bottom"></div>');
         } 
     }
   

     if(document.querySelector('.main_modal_text')) {
        const slider = document.querySelector('.main_modal_text');
        let isDown = false;
        let startY;
        let scrollTop;
        
        slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startY = e.pageY - slider.offsetTop;
        scrollTop = slider.scrollTop;
        });
        slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
        });
        slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
        });
        slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const y = e.pageY - slider.offsetTop;
        const walk = (y - startY) * 1; //scroll-fast
        slider.scrollTop = scrollTop - walk;
        });
    }

    /* ABOUT */
    $('#about').on('click', function(e) {
        let modal= document.querySelector('#modals_about');
        modal.classList.add("showModal");
        let hideExcla= document.querySelector('#about img');
        if(hideExcla){
            hideExcla.classList.add("hideExcla");
            localStorage.setItem('hideExcla_about', 'none');
        }
        modal.style.display = '';
    });

    function closeAbout(){
        let m= document.querySelector('#modals_about');
        m.classList.remove("showModal"); 
        setTimeout(function () { $('#modals_about').css({ display: "none" }); }, 500);
    }

    /* SHARE */
    $('#share').on('click', function(e) {
        let modal= document.querySelector('#modals_share');
        modal.classList.add("showModal");
        let hideExcla= document.querySelector('#share img');
        hideExcla.classList.add("hideExcla");
        localStorage.setItem('hideExcla_share', 'none');
        modal.style.display = '';
    });

    function closeShare(){
        let m= document.querySelector('#modals_share');
        m.classList.remove("showModal"); 
        setTimeout(function () { $('#modals_share').css({ display: "none" }); }, 500);
    }

    /* STAR RATING PERSONAGEM */
        $('#modals_star_rat').css({ display: "none" });
    $('#star_rat').on('click', function(e) {
        let modal= document.querySelector('#modals_star_rat');
        modal.classList.add("showModal");
        let hideExcla= document.querySelector('#star_rat img');
        hideExcla.classList.add("hideExcla");
        localStorage.setItem('hideExcla_star_rat', 'none');
        modal.style.display = '';
        if(block_Aud == true){open_modal.play();}
    });
    
    function closeStar_rat(){
        let m= document.querySelector('#modals_star_rat');
        m.classList.remove("showModal"); 
        setTimeout(function () { $('#modals_star_rat').css({ display: "none" }); }, 500);
        if(block_Aud == true){close_modal.play();}
    }

    /* CLICKS COM AÇÕES GERAIS*/

    window.onload = function(){ $('.modals_form').css({ display: "none" }); }

    $('#feedback, #details_persona, #share, #about').on('click', function(e) {
        let modals_form_shadow= document.querySelector('.modals_form_shadow');
        let blur_body = document.querySelector('.no_blur');
        let blur_footer = document.querySelector('footer');
        /* SHADOW */
        if(modals_form_shadow){modals_form_shadow.classList.add("sdow_opty_1");}
        /* BLUR */
        if(blur_body){blur_body.classList.add("si_blur");}
        if( blur_footer ) {
        blur_footer.classList.add("si_blur");}
        /* DESABITA O SCROLL*/
        document.documentElement.style.overflow = 'hidden';
        document.body.scroll = "no"; 

        if(block_Aud == true){open_modal.play();}
  
        
    });
    
    function closeM(){
        let modals_form_shadow= document.querySelector('.modals_form_shadow');
        let blur_body = document.querySelector('.no_blur');
        let blur_footer = document.querySelector('footer');
        /* SHADOW */
        if(modals_form_shadow) {modals_form_shadow.classList.remove("sdow_opty_1");}
        /* BLUR */
        if(blur_body){blur_body.classList.remove("si_blur");}
        if( blur_footer ) {
        blur_footer.classList.remove("si_blur");}
        /* HABITA O SCROLL*/
        document.documentElement.style.overflow = 'auto';
        document.body.scroll = "yes"; // IE

        if(block_Aud == true){close_modal.play();}
        
    }
    function closeM_for_popUp(){
        let modals_form_shadow= document.querySelector('.modals_form_shadow');
        let blur_body = document.querySelector('.bg');
        let blur_footer = document.querySelector('footer');
        /* SHADOW */
        modals_form_shadow.classList.remove("sdow_opty_1");
        /* BLUR */
        blur_body.classList.remove("si_blur");
        if( blur_footer ) {
        blur_footer.classList.remove("si_blur");}
        /* HABITA O SCROLL*/
        document.documentElement.style.overflow = 'auto';
        document.body.scroll = "yes"; // IE
        
    }
 
    $('.redes_sociais_links a').on('click', function(e) {
        if(block_Aud == true){open_modal.play();}
        
    });
    /*========================= FINAL MODALS ============================ */


    /*========================= AJAX FORM feedbacks ============================ */
	$(function(){
		$('.form_feedback').submit(function(){
            var IDmodal_load= document.querySelector('#modal_load');
            $('#modal_load').html("<div class='modal_white_load'><div class='spinner'><svg class='spinner3' viewBox='0 0 50 50'><circle class='path' cx='25' cy='25' r='20' fill='none' stroke-width='3'></circle></svg></div><h2> Enviando...</h2></div>");
            IDmodal_load.classList.add("showModal");
            IDmodal_load.style.display = '';

            setTimeout(function () {
                $.ajax({
                    url: 'assets/include/autenvio/send-form.php',
                    type: 'POST',
                    data: $('.form_feedback').serialize(),
                    success: function(data){
                    
                        $('.erros .ErrorInfo').html(data);

                        IDmodal_load.classList.remove("showModal"); 
                    
                        setTimeout(function () { $('#modal_load').html(""); }, 2000);
                        setTimeout(function () { $('#modal_load').css({ display: "none" }); }, 900);
                    }
                });
			}, 900);
			return false;
		});
	});


    /*========================= REQUIRED FORM ============================ */

    if(document.getElementById("modals_feedback")){
        document.getElementById("form_nome").oninvalid = function () {
            this.setCustomValidity(this.value ? '' : 'Opa Viajante! Informe seu email.');    
        };

        document.getElementById("form_nome").oninput = function () {
            this.setCustomValidity(this.value ? '' : '');    
        };


        document.getElementById("form_email").oninvalid = function () {
            this.setCustomValidity(this.value ? '' : 'Opa Viajante! Informe seu e-mail.');
        };
        document.getElementById("form_email").oninput = function () {
            this.setCustomValidity(this.value ? '' : '');    
        };


        document.getElementById("form_msg").oninvalid = function () {
            this.setCustomValidity(this.value ? '' : 'Opa Viajante! Escreva sua mensagem.');
        };
        document.getElementById("form_msg").oninput = function () {
            this.setCustomValidity(this.value ? '' : '');    
        };
    
        /* MORE DATAILS ERROR*/
 
        document.querySelector(".erro_escri").onclick = function() {
        let more_details = document.querySelector("#more_details");

        more_details.style.display = 'none';
        document.querySelector(".ErrorInfo").style.display = 'block';
    };

    }







    //===================== MENU PERSONAGENS TOPBAR JS ========================== //
    if(typeof np != 'undefined') {

        var ponto = '.';
        var Class_personagem = ponto+np;
        var Class_border_active = $(Class_personagem);
        var hash = '#';
        var ID_personagem = hash+np;
        var ID_diretorio_bg = $(ID_personagem);
        var ID_diretorio_img = $(ID_personagem.concat(' img'));

        if(np){
            ID_diretorio_bg.addClass('s_s_bg_active');
            ID_diretorio_img.addClass('p_n_active');
            Class_border_active.css('display','block');

        }
    

        var owl = $('.menu_persona_topbar');
        // mostra a colocação/posição do ID_personagem
        let slide_single = Array.from(document.querySelectorAll(".slide_single_bg"));

        $('.slide_persona').slick({
            slidesToScroll: 3,
            draggable: false,
            dots: false,
            prevArrow: $('.menu_persona .arrow_left'),
            nextArrow: $('.menu_persona .arrow_right'),
            infinite: false,
            slidesToShow: 10,
            swipeToSlide: true,
            centerMode: false,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 7,
                }
              },
              {
                breakpoint: 800,
                settings: {
                  slidesToShow: 5,
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 4,
                }
              },
              {
                breakpoint: 500,
                settings: {
                  slidesToShow: 3,
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                }
              }
            ]
          });

          var active;
          var desactive;
          var placeid;
   
          
        var positionid = slide_single.findIndex((item) => item.id == np);
        console.log('positionid: '+positionid); 
        

        var qtd_slide_single_bg = $(".slide_single_bg").length;
         console.log('qtd_slide_single_bg: '+qtd_slide_single_bg); 


        var posiId = qtd_slide_single_bg - positionid ;
        console.log('posiId: '+posiId); 

        document.querySelectorAll('.slide_single').forEach(function(item){
            if(item.ariaHidden == 'true'){
                desactive = item.ariaHidden.length;
            }
        })


        var active = qtd_slide_single_bg - desactive ;

        var total = active - desactive;

        console.log('total: '+total);
        

        if(positionid >= 10) {
            placeid = total - posiId;
        }
        console.log('placeid: '+placeid);
        console.log('desactive: '+desactive);

        $('.slide_persona').slick('slickGoTo', placeid - 1);
          
    }//endif condição




// APLICAR FONT SIZE EM algumas divs COM MAIS DE 15 CARACTERES
    var about_artefato = document.querySelectorAll('.about_artefato h2');

    about_artefato.forEach(function(item){
    if(item.innerHTML.length > 15) {
    item.style.fontSize = '16px';
    }
    });

    if(document.querySelector('#affiliation h3')){
        var affiliation = document.querySelector('#affiliation h3');
        if(affiliation.innerHTML.length >= 24) {
        affiliation.style.fontSize = '15px';
        }
    }
    if(document.querySelector('#title h3')){
        var title = document.querySelector('#title h3');
        if(title.innerHTML.length >= 24) {
        title.style.fontSize = '15px';
        }
    }
//-------------------------------//



if(block_Bg_animation == true){
    $(document).ready(function(){
        $("#bg_animation").load('./assets/include/bg_animated.php')
    });
}

if(block_Bd == false){ 
    document.addEventListener('contextmenu', event => event.preventDefault());
    var body = document.querySelector('body')
    }
    
if(block_St == false){ 
    var body = document.querySelector('body')
    body.setAttribute('onselectstart', 'return false')
    }
