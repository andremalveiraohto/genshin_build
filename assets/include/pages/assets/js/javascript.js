/*!
    Created by André Malveira.
    Copyright (c) 2021 GISH.
    https://www.instagram.com/andremalveira/
*/



$(document).ready(function(){
    $('.modals_form').css({ display: "none" });
});


    if(document.querySelector('#details_persona .icon_excla')){document.querySelector('#details_persona .icon_excla').style.display = localStorage.getItem("hideExcla_details_persona");}       



    $('#details_persona').on('click', function(e) {
        /* $('#modal_details_persona').load('leia.html?v3'); */

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


     let main_modal_text_h2 = $('#txt').height();
     let main_modal_text = $('.main_modal_text').height();
     let info_container_arrow = $('.info_container_arrow.txt');


     if(main_modal_text_h2 > main_modal_text){
        info_container_arrow.append('<div class="arrow_top"></div>');
        info_container_arrow.append('<div class="arrow_bottom"></div>');
        info_container_arrow.append('<div class="op_top"></div>');
        info_container_arrow.append('<div class="op_bottom"></div>');
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

    if(document.querySelector('#donatetop img')){
        if(localStorage.getItem('hideExcla_donatetop') == 'true'){
            document.querySelector('#donatetop img').remove();
        }
        if(localStorage.getItem('hideExcla_donate') == 'true'){
            document.querySelector('#donate img').remove();
        }
    }
    function openDonate() {
        let modal= document.querySelector('#modal_donate');
        modal.classList.add("showModal");
        let hideExcla= document.querySelector('#donate img');
        if(hideExcla){
            hideExcla.classList.add("hideExcla");
        }

        localStorage.setItem('hideExcla_donate', 'true');
        modal.style.display = '';

        if(block_Aud == true){open_info_persona.play();}
    }

    $('#donate').on('click', function(e) {
        openDonate()
    });

    $('#donatetop').on('click', function(e) {
        openDonate();
        let modal= document.querySelector('#modal_donate');
        let hideExcla= document.querySelector('#donatetop img');
        if(hideExcla){
            hideExcla.classList.add("hideExcla");
        }

        localStorage.setItem('hideExcla_donatetop', 'true');
        modal.style.display = '';
    });



    
    function closeDonate(){
        let m= document.querySelector('#modal_donate');
        m.classList.remove("showModal"); 
        setTimeout(function () { $('#modal_donate').css({ display: "none" }); }, 500);
    }





    $('#feedback, #details_persona, #share, #about, #donate, #donatetop').on('click', function(e) {
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

        docSlider.enable(false);

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

        docSlider.enable(true);
        
    }


    block_Bd = true;
    block_St = false;

    if(block_Bd == false){ 
        document.addEventListener('contextmenu', event => event.preventDefault());
        var body = document.querySelector('body');
        }
        
    if(block_St == false){ 
        var body = document.querySelector('body');
        body.setAttribute('onselectstart', 'return false');
        }
    


         