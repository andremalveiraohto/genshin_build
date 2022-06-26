
  /* POPUP MODALS */
  var modals_popUp = document.querySelector('.modals_popUp'),
  w = window,
  d = document,
  e = d.documentElement,
  g = d.getElementsByTagName('body')[0],
  x = w.innerWidth || e.clientWidth || g.clientWidth,
  y = w.innerHeight|| e.clientHeight|| g.clientHeight;
  // container.style.top = (y / 2) - (container.clientHeight / 2) + 'px'; //CETRALIZAR NA VERTICAL
  if(modals_popUp){
    modals_popUp.style.left = (x / 2) - (modals_popUp.clientWidth / 2) + 'px'; //CENTRALIZAR NA HORIZONTAL
  }
  // modals_popUp.style.display = 'none'; 
  
    if(localStorage.getItem("ocultPopUp") == 'true'){
        if(document.querySelector('#welcome')){
            document.querySelector('#welcome').remove();
        }
    }
    if(localStorage.getItem("ocultPopUp") != 'true'){
        if(block_Bv == true){
            if (document.URL == 'http://localhost/builds/') {
                setTimeout(function () {
                    $(".modals_popUp h3").remove("");
                    $(".modals_popUp").append('<div class="main_modals_popUp"><h3>Seja Bem-Vindo(a) Viajante!</h3></div>');
                    $(".modals_popUp").addClass("show_popUp");
                    if(block_Aud == true){open_modal.play();}
                    setTimeout(function () { 
                        $(".modals_popUp").removeClass("show_popUp"); 
                        setTimeout(function () { $(".modals_popUp .main_modals_popUp").remove("")
                        localStorage.setItem('ocultPopUp', 'true');
                    }, 500);
                    }, 3000);
                }, 900);
            }
        }
    }

//ARROWS SLIDER
$('.arrow_left').click(function () {
    $('.slider_center').animate({
        scrollLeft: '-=577.6'
    }, 500, 'swing');
});
$('.arrow_right').click(function () {
    $('.slider_center').animate({
        scrollLeft: '+=577.6'
    }, 500, 'swing');
});


//script tab builds add
$(document).ready(function(){ 
    $(".tab-name[data-id='Mondstadt']").addClass('active-a');
    $(".tab-name[data-id='Mondstadt']").parent().append('<div class="bottom_bar"></div>');
    $(".tab[data-id='Mondstadt']").addClass('tab-active');
    setTimeout(function(){$(".tab[data-id='Mondstadt']").addClass('tab-show');}, 100);


$('.tab-name').click(function(){ 
    $('.tab-active').removeClass('tab-show');
    $(".tab").removeClass('tab-active');  
    
    $(".tab[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active");
        setTimeout(function(){$('.tab-active').addClass('tab-show');}, 100);

    $(".tab-name").removeClass('active-a');
    $(".bottom_bar").remove()
    $(this).parent().find(".tab-name").addClass('active-a');
    $(this).parent().append('<div class="bottom_bar"></div>');
});
});



/* //change bg natios

var nations = document.querySelectorAll('.nation');
var bodyBg = document.querySelector('body .bg');

nations.forEach(function(nation){

    nation.addEventListener("click", function(){
        var nameNation = this.attributes["data-id"].value;
    
        if(bodyBg.attributes["id"]){
            bodyBg.removeAttribute('id');
        }

        bodyBg.setAttribute('id', (nameNation.toLowerCase()));

    })
     
}); */




//aud
var card_img = document.querySelectorAll('.card_img');

card_img.forEach(function(card_img){

    if(block_Aud == true){
        card_img.addEventListener('mouseover', function(){
            hover_card.play();
        })
    }
        
})




//MenuPaimon

var buttonPaimon = document.querySelector('#buttonMenuPaimon');

var bodyTeiner = document.querySelector('#bodyTeiner');
var boxRightBG = document.querySelector('#boxRightBG');
var overlayPaimon = document.querySelector('#overlayPaimon');
var menuPaimon = document.querySelector('#menuPaimon');
var boxRight = document.querySelector('#boxRight');

var closeMenuPaimon = document.querySelector('#closeMenuPaimon');

if(menuPaimon){

    //function tecla
    $(function(){
        $(document).keyup(function(keypress){
            if(keypress.keyCode == 27) {
                if(closeInM == false){
                    showMenuPaimon()
                } else if (closeInM == true){
                    hideMenuPaimon();
                }
            }
        });
    });

    function showMenuPaimon() {
        if(block_Aud == true){open_menu_paimon.play()}
        if(buttonPaimon){
            buttonPaimon.classList.add('slide_topbar_click');
        }
        closeMenuPaimon.classList.add('slide_topbar');
        boxRight.classList.add('transition');
        menuPaimon.classList.add('show');
        overlayPaimon.classList.add('show');
        bodyTeiner.classList.add('si_blur');
        
        setTimeout(function(){
            boxRightBG.classList.add('transition');
        }, 100)
        closeInM = true;
    }

    function hideMenuPaimon() {
        if(block_Aud == true){close_menu_paimon.play()}
        
        if(buttonPaimon){
            buttonPaimon.classList.remove('slide_topbar_click');
        }
        closeMenuPaimon.classList.remove('slide_topbar');
        boxRight.classList.remove('transition');
        menuPaimon.classList.remove('show');
        overlayPaimon.classList.remove('show');
        bodyTeiner.classList.remove('si_blur');

        boxRightBG.classList.remove('transition');
        closeInM = false;
    }


    if(buttonPaimon){
        buttonPaimon.addEventListener('click', function(){
            showMenuPaimon();
        });
    }
    overlayPaimon.addEventListener('click', function(){
        hideMenuPaimon();
    });
    closeMenuPaimon.addEventListener('click', function(){
        hideMenuPaimon();
    });


    //MoveDragScroll
    const aboutSite = document.querySelector('.boxTopRight #aboutSite');
    let isDown = false;
    let startY;
    let scrollTop;

    if(aboutSite){
        aboutSite.addEventListener('mousedown', (e) => {
        isDown = true;
        aboutSite.classList.add('active');
        startY = e.pageY - aboutSite.offsetTop;
        scrollTop = aboutSite.scrollTop;
        });
        aboutSite.addEventListener('mouseleave', () => {
        isDown = false;
        aboutSite.classList.remove('active');
        });
        aboutSite.addEventListener('mouseup', () => {
        isDown = false;
        aboutSite.classList.remove('active');
        });
        aboutSite.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const y = e.pageY - aboutSite.offsetTop;
        const walk = (y - startY) * 1; //scroll-fast
        aboutSite.scrollTop = scrollTop - walk;
        });
    }

}


    //HOVERBOXBUTTOM
    var boxButtom = document.querySelectorAll('.boxRightButtom .boxButtom');
    boxButtom.forEach(function(ButtomsItems){
        ButtomsItems.addEventListener('mouseover', function(){
            (this).querySelector('.boxButtomBorder').firstElementChild
            .innerHTML ='<i class="pin arrowHoverIcon"></i>';
        });
        ButtomsItems.addEventListener('mouseout', function(){
            (this).querySelector('.boxButtomBorder').firstElementChild
            .innerHTML ='';
        })
    })



    //HOVERICONSBARLEFT
    var iconsBarLeft = document.querySelectorAll('.barLeft .iconsMenuBarLeft');
    iconsBarLeft.forEach(function(icons){
        icons.addEventListener('mouseover', function(){
            var alt = (this).attributes["alt"].value;
            (this).innerHTML ='<div class="popUpHover">'+alt+'</div>';
            setTimeout(function(){
                var popUpdiv = document.querySelector('.iconsMenuBarLeft .popUpHover');
                if(popUpdiv){
                    popUpdiv.style.opacity=1;
                }
            }, 100);
            
        });
        icons.addEventListener('mouseout', function(){
            (this).firstElementChild.remove();
        })
    })


    //audclicknation

    document.querySelectorAll('.tab-name').forEach(function(item){
        item.addEventListener('click', function(){
            if(block_Aud == true){abrir.play();}
        })
    })