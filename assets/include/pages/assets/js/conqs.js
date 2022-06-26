//initScrollCue
scrollCue.init({
    duration : 150,
});

function playVideo(){
	$('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
}
function stopVideo(){
	$('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
}
function pauseVideo(){
    $('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
}


// initloadconqsdata
document.querySelector('[idtitle="1"]').setAttribute('id', 'active');
$('#conqs_data').load('assets/include/pages/assets/include/conqs_data.php', {id_title:1}); 


 var cardLeftclick = document.querySelectorAll('.cardLeftclick');

    cardLeftclick.forEach(function(card){
        card.addEventListener('click', function(){

            var id_title = this.attributes['idtitle'].value;

            $('#conqs_data').load('assets/include/pages/assets/include/conqs_data.php', {id_title:id_title}); 


        });
    });



playvideo = true;

$(document).keyup(function(keypress){
    if(keypress.keyCode == 32 || keypress.keyCode == 13) {

        if(playvideo == true ){
            pauseVideo();
            playvideo = false;
        } else {
            playVideo();
            playvideo = true;
        }
    }
});



initModalVideo();   

function initModalVideo() {
    //openModalVideo
    var cardRightButton = document.querySelectorAll('.cardRight-R_button');
    var ModalVideo = document.querySelector('.ModalVideo');

    var bodyVideo = `

        <div class="bodyVideo teiner">

        <div class="topBar overlay">
            <div></div>
            <div></div>
            <div class="closeReturn">
                <div id="closeModalVideo" class="fechar closeMenuPaimon">
                    <div class="borda_close_2"></div>
                    <div class="borda_close_1"></div>
                    <div class="icon_close"></div>
                </div>
            </div>
        </div>

        <div id="video" class="video">
            <iframe class="youtube-video" 
                width="1200" 
                height="700" 
                title=""  
                controls 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe> 
        </div>
        <div class="overlayCloseVideo"></div>

    </div>
    `;
    cardRightButton.forEach(function(buttons){
        buttons.addEventListener('click', function(){

            ModalVideo.innerHTML=bodyVideo;

            
            var classblur = document.querySelector('.blur');
            var video = document.querySelector('#video iframe');

            var url = this.attributes['id'].value;

            //pega ID depois do '='da url do youtube
            ID_url = url.split('=');
            ID_url= ID_url[1];

            newUrl = 'https://www.youtube.com/embed/'+url+'?controls=1&autoplay=1&enablejsapi=1&version=3&playerapiid=ytplayer'
            video.setAttribute('src', newUrl);

            ModalVideo.classList.add('show');
            classblur.classList.add('show');


            function closeModalVideo() {
                ModalVideo.classList.remove('show');
                classblur.classList.remove('show');
                ModalVideo.firstElementChild.remove();
                console.clear();
            }

            document.querySelector('#closeModalVideo').addEventListener('click', function(){
                closeModalVideo();
            });
            document.querySelector('.overlayCloseVideo').addEventListener('click', function(){
                closeModalVideo();
            });


            hoverButtonClose();
        })
    });

}


//active cardleft

document.querySelectorAll('.bodyLeft .cardLeftclick').forEach(function(cardLeft){

    cardLeft.addEventListener('click', function(){

        var IDactive = this.parentElement.children[id='active'];
        if(IDactive){
            IDactive.removeAttribute('id');
        }


        this.setAttribute('id', 'active');
    })

})

    var bodyTeiner = document.querySelectorAll('.bodyRightCard, .bodyLeft');


    bodyTeiner.forEach(function(overlay){
        //drag
        if(document.querySelector('.bodyLeft')) {
            const slider = overlay;
            var isDown = false;
            var startY;
            var scrollTop;
            
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

    });


