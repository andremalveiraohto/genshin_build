<?php

include '../../../config.php';
session_start();
    if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
        //=====INCLUDE DA TABELA USER
        $session_id = $_SESSION['id'];
        $users = "SELECT * FROM user WHERE id = '$session_id'";
        $users = $pdo->query($users);
        $user = $users->fetch();

        $user_ID = $user['id'];
        $username = $user['user'];
        $nome_user = $user['nome'];
        $type_user = $user['type_user'];
        $user_Img = $user['img'];
    }
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    
    $id_marker = $_POST['id_marker'];

    // INCLUDE DA TABELA MAP_MARCADORES
    $tableDataMarker = "SELECT * FROM map_marcadores WHERE id='$id_marker' ";
    $tableDataMarker = $pdo->query($tableDataMarker);
    $dataMarker = $tableDataMarker->fetchAll();


    foreach($dataMarker as $data_Marker){
            $nameimg = $data_Marker['nameimg'];
            $grupo = $data_Marker['grupo'];
            $title = $data_Marker['title'];
            $nation = $data_Marker['nation'];
            $qtd_item = $data_Marker['qtd_item'];
            $author = $data_Marker['author'];
            $coord = $data_Marker['coord'];


            // INCLUDE DA TABELA MAP_GRUPOS
            $tableDataGrupo = "SELECT * FROM map_grupos WHERE grupo='$grupo' AND nation='$nation'";
            $tableDataGrupo = $pdo->query($tableDataGrupo);
            $dataGrupo = $tableDataGrupo->fetchAll();

        foreach($dataGrupo as $data_Grupo){
            $is_item = $data_Grupo['is_item'];

            echo'
            <div id="dataMarker" class="barRight">

                <div class="topTitleClose">
                    <div class="title">
                        <div class="icon"><div class="iconIMG" style="background-image: url(assets/include/pages/assets/img/iconsMap/'.$data_Marker['grupo'].'.png)"></div></div>
                        <h1>';

                        if(!empty($title)){
                            echo$title;
                        } else {
                            if($qtd_item){
                                echo'<span>'.$qtd_item.'x </span>';
                            }
                            echo$data_Grupo['title'];
                        }
                        
                        echo'</h1>
                    </div>
                    <div class="closeIcon">
                        <div class="icon"></div>
                    </div>
                </div>';
                if(!empty($nameimg)){

                    $nameimgExplod = explode(', ', $nameimg);
                    $nameimgFirst = $nameimgExplod[0];

                    if($nameimgFirst){
                        echo'
                        <div class="contentsImg">
                            <div class="contentsSlide">';

                                $nameimgArray = explode(', ', $nameimg);

                                foreach($nameimgArray as $namesimg ){
                                echo'
                                <div class="image" style="background-image: url('.$namesimg.')"></div>
                                ';
                                }
                
                            echo'</div>';

                                if(count($nameimgArray) > 1){
                                echo'
                                <div class="slideControls">
                                    <div class="arrow Left"></div>
                                    <div class="arrow Right"></div>
                                </div>
                                ';
                                }

                        echo'</div>';
                    }
                }
                if(!empty($data_Marker['id_video'])){
                    echo'<div id="video" class="contentsVideo">
                    <iframe class="youtube-video" 
                        width="480" 
                        height="256" 
                        title="" 
                        src="https://www.youtube.com/embed/'.$data_Marker['id_video'].'?controls=1&autoplay=1&enablejsapi=1&version=3&playerapiid=ytplayer&mute=1" 
                        controls 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe> 
                    </div>';
                }
                echo'<div class="contents">
                    <div class="contentsBorder">
                    
                        <h3 class="">';
                        
                        if(!empty($data_Marker['descrição'])){
                            echo$data_Marker['descrição'];
                        } else {
                            echo$data_Grupo['descrição'];
                        }

                        echo'</h3>
                    </div>
                </div>
                <div class="error"></div><div class="success"></div>
                    <div id="'.$data_Marker['id'].'" class="barEdit"><div class="flex">';
                        echo'<div class="boxButton copyLocation" coord="'.$coord.'" title="Copiar Link dessa Localização"><div class="buttonEdit"><i class="link"></i></div></div>';
                    if($is_item == 'true'){
                        echo'<div class="boxButton checkMarker" title="Marcar como Concluído"><div class="buttonEdit"><i class="check"></i><span></span></div></div>';
                    }
                    echo'</div>';
                    if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
                        if($username == $author){
                            echo'
                                <div class="boxButton delMarker" title="Excluir Marcador"><div class="buttonEdit"><i class="delete"></i></div></div>
                            ';
                        } else {
                            echo'<span>Você não pode Excluir esse Marcador</span>';
                        }
                    }
                echo'</div>
                </div>';
        }
    }

}
?>

<script>

     //msgInOverlay
    var overlay = document.querySelector('#overlay');
    function warning(text,timeout) {
        var timeout = timeout || 1200;
        
        overlay.classList.add('show');
        overlay.innerHTML=`<div class="ballon"><span>${text}</span></div>`;

        setTimeout(() => {
        overlay.classList.remove('show');
        setTimeout(() => {
            if(overlay.firstElementChild){
                overlay.firstElementChild.remove();
            }
        }, timeout+50);
        }, timeout);
    }

    function confirmation(text, script) {
        /* var text = params['text']; */
        /* var script = params['script']; */


        overlay.classList.add('show');
        overlay.innerHTML=`<div class="ballon"><span>${text}</span></div>`;

        overlay.querySelector('.ballon').insertAdjacentHTML('beforeend', `
            <div class="b_buttons">
                <div id="confirm" class="boxButton">
                    <div class="buttonEdit">
                        <i class="check"></i>
                        <span class="mg_left_5px">Confirmar</span>
                    </div>
                </div>
                <div id="cancel" class="boxButton">
                    <div class="buttonEdit">
                        <i class="remove"></i>
                        <span class="mg_left_5px">Cancelar</span>
                    </div>
                </div>
            </div>
        `);
        
        if(script){
            overlay.querySelector('#confirm').addEventListener('click', function(){
                script();

                overlay.querySelector('.ballon span').innerText='Excluído!';
                setTimeout(() => {
                overlay.classList.remove('show');
                setTimeout(() => {
                    overlay.firstElementChild.remove();
                }, 1000+10);
                }, 1000);

            });
        }
        overlay.querySelector('#cancel').addEventListener('click', function(){
            overlay.classList.remove('show');
            setTimeout(() => {
                overlay.firstElementChild.remove();
            }, 150);
        })
           
    }   


    //contentsSlide
    var totalImage = document.querySelectorAll('.contentsImg .contentsSlide .image').length;

    if(totalImage > 1){
        document.querySelector('.contentsImg .contentsSlide').style.width = `calc(480px * ${totalImage})`;

        var currentSlide = 0;
        var arrowLeft = document.querySelector('.slideControls .arrow.Left');
        var arrowRight = document.querySelector('.slideControls .arrow.Right');

        arrowLeft.style.display='none';

        arrowLeft.addEventListener('click', function(){
            currentSlide--;

            arrowRight.style.display='';

            if(currentSlide == totalImage-totalImage){
                this.style.display='none';
            }
            if(currentSlide < 0){
                currentSlide = totalImage - 1;
            }

            updateTransition();
        })
        arrowRight.addEventListener('click', function(){
            currentSlide++;

            arrowLeft.style.display='';

            if(currentSlide == totalImage-1){
                this.style.display='none';
            }
            if(currentSlide > (totalImage-1)){
                currentSlide = 0;
            }

            updateTransition();
        })

        function updateTransition() {
            var updateTransition = (currentSlide * document.querySelector('.contentsImg .contentsSlide .image').clientWidth);
            document.querySelector('.contentsImg .contentsSlide').style.transform = `translateX(-${updateTransition}px)`;
        }
    }

    //ptop
    var contentsImg = document.querySelector('#barRight .contentsImg');
    var contentsVideo = document.querySelector('#barRight .contentsVideo');
    if(contentsImg){
        contentsImg.parentElement.querySelector('.contents').classList.add('ptop')
    }
    if(contentsVideo){
        contentsVideo.parentElement.querySelector('.contents').classList.add('ptop')
    }

    //closeBarRight
    document.querySelector('#barRight .closeIcon .icon').addEventListener('click', function(){
        closeBarRight(); active = false;
        if(document.querySelector('#barRight .barRight')){
        setTimeout(function(){
            document.querySelector('#barRight .barRight').remove();
            document.querySelector('#barRight script').remove();
            removemarkerSelected();

            pointActive = false;
        },60);
    }
    });

    //marcarComo
    var barEdit = document.querySelector('#barRight .barEdit');
    var buttomCheckMarker = document.querySelector('#barRight .barEdit .boxButton.checkMarker');
    var checkedMarkers = JSON.parse(localStorage.getItem('checkedMarkers') || '[]');

    function checkItemChecked(){
        Array.prototype.forEach.call (checkedMarkers, function (ArraymarkerCheck) {
            var allMarkerID = ArraymarkerCheck['markerID'];
            var buttomCheckMarker = document.querySelector(`#barRight [id='${allMarkerID}'].barEdit .checkMarker`);

            if(buttomCheckMarker){
                buttomCheckMarker.querySelector('.buttonEdit span').innerText='Concluído';
                buttomCheckMarker.querySelector('.buttonEdit span').classList.add('mg_left_5px')
                buttomCheckMarker.setAttribute('checked','true');
            } 

        });
    }
    checkItemChecked();

    //hoverbuttomCheckMarker
    var checkMarkerButton = document.querySelector(`#barRight .barEdit .checkMarker`);
    if(checkMarkerButton){
        checkMarkerButton.addEventListener('mouseover', function(){
            if(buttomCheckMarker.attributes['checked']){
            this.querySelector('.buttonEdit i').classList.add('remove');
            this.querySelector('.buttonEdit span').innerText='Desmarcar';
            }
        })
        checkMarkerButton.addEventListener('mouseout', function(){
            if(buttomCheckMarker.attributes['checked']){
            this.querySelector('.buttonEdit i').classList.remove('remove');
            this.querySelector('.buttonEdit span').innerText='Concluído';
            this.querySelector('.buttonEdit span').classList.add('mg_left_5px')
            }
        })
    }

    function RemoveItemChecked(id) {
        checkedMarkerClass = 'checkedMarker';
        var checkedMarker = document.getElementById(`${id}`);
        checkedMarker.classList.remove(checkedMarkerClass);


        if(buttomCheckMarker){
            buttomCheckMarker.removeAttribute('checked');
            buttomCheckMarker.querySelector('.buttonEdit i').classList.remove('remove');
            buttomCheckMarker.querySelector('.buttonEdit i').classList.add('check');
            buttomCheckMarker.querySelector('.buttonEdit span').innerText='';
            buttomCheckMarker.querySelector('.buttonEdit span').classList.remove('mg_left_5px')
        } 
        
        warning('Desmarcado!')

        if(localStorage.getItem('checkedMarkers')){
            checkedMarkers = JSON.parse(localStorage.getItem('checkedMarkers')).filter(item => item.markerID !== id)
            localStorage.setItem('checkedMarkers', JSON.stringify(checkedMarkers)); 
        }

        

    }

    if(buttomCheckMarker){
        buttomCheckMarker.addEventListener('click', function(){
            var id = barEdit.attributes['id'].value;
            var This = this;
            var checkedMarkerClass = '';
            var checkedMarker = document.getElementById(`${id}`);
            var buttomCheckMarker = document.querySelector(`#barRight .barEdit .checkMarker`);

            function InsertItemChecked() {
                checkedMarkerClass = 'checkedMarker';
                checkedMarker.classList.add(checkedMarkerClass);
                buttomCheckMarker.setAttribute('checked','');

                if(buttomCheckMarker){
                    buttomCheckMarker.querySelector('.buttonEdit span').innerText='Concluído';
                    buttomCheckMarker.querySelector('.buttonEdit span').classList.add('mg_left_5px')
                } 

                checkedMarkers.push({
                    markerID: id,
                    status: checkedMarkerClass
                });
                localStorage.setItem("checkedMarkers", JSON.stringify(checkedMarkers));  

                warning(text='Marcado como Concluído!');
            }

            function verificaItemChecked() {
                //verifica se o ID/item já existe no localstorage
                var keys = Object.keys(checkedMarkers)
                for (key in keys){
                    if (checkedMarkers[keys[key]].markerID == id){
                        itemExist = true;
                    } 
                } 
            }
            verificaItemChecked();

            if(itemExist == true){
                markerChecked = false;
            } else {
                markerChecked = true;
            }

            if(markerChecked == true){
                markerChecked = false;
                var itemExist = false;
                //se viewMarker em Localstorage for vazio ele insere o item
                if(checkedMarkers == ''){
                    InsertItemChecked(); 
                } else {
                    verificaItemChecked();
                    if(itemExist == true){
                        RemoveItemChecked(id);
                    } else {
                        InsertItemChecked(); 
                    }

                }
            } else {
                RemoveItemChecked(id);
                markerChecked = true;

            }

        })
    }


    //copyURLLocation
    var buttonCopyLocation = document.querySelector('#barRight .barEdit .copyLocation');

    buttonCopyLocation.addEventListener('click', () => {

        var urlmap = window.location.href;
            urlmap = urlmap.split('?');

        var idMarker = barEdit.attributes['id'].value;
        var coord = buttonCopyLocation.attributes['coord'].value.split(', ');
           
            var lat = coord[0];
            var lng = coord[1];
            var urlCoord = urlmap[0]+'?id='+idMarker+'&lat='+lat+'&lng='+lng;

        var textarea = document.createElement("textarea");

        textarea.innerText = urlCoord;

        buttonCopyLocation.appendChild(textarea)
        textarea.select();
        document.execCommand("copy"); 
        textarea.remove();

        warning(text='Copiado!');

    })




</script>

<?php 

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
    if($username == $author){
        echo "<script>
            var buttonDelMarker = document.querySelector('#barRight .barEdit .delMarker')
            if(buttonDelMarker){
                buttonDelMarker.addEventListener('click', function(){

                    var id_marker = barEdit.attributes['id'].value;

                    if(id_marker > 0){

                        confirmation(text='Excluir Marcador?', del_Marker)
                        function del_Marker() {
                            $.ajax({
                                url: 'assets/include/pages/assets/include/del_marker.php',
                                type: 'POST',
                                data: {id_marker:id_marker},
                                success: function(data){
                                    $('#dataMarker .error').html(data);
                                }
                            });
                        
                            RemoveItemChecked(id_marker);

                            return false;
                        }  
                  
                    } 
                }); 
            }
            </script>";
        } 
    }
?>