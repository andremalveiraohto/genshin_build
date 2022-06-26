<?php
    session_start();
    include '../../../config.php';

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {

    echo'<div id="barInsertMarker" class="barRight">
        <div class="topTitleClose">
            <div class="title">
                <div class="icon"><img src="assets/include/pages/assets/img/add.png"></div>
                <h1 style="">Adicionar Marcador</h1>
            </div>
            <div class="closeIcon">
                <div class="icon"></div>
            </div>
        </div>
         <div class="contents">
          <div class="contentsBorder">
            <form id="form_insert_marker" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <h3 id="coord" style="text-align: center; margin-bottom: 20px;">0.000000, 0.000000</h3>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm" >
                    <select  id="selectGrupo" name="group" class="form-control" required="">
                      <option class="dp_n" value="">Selecione o Grupo</option>';
                        foreach($map_grupos as $grupos_map) {
                            echo'<option value="'.$grupos_map['id'].'-'.strtolower($grupos_map['grupo']).'-'.$grupos_map['is_item'].'">'.$grupos_map['title'].'</option>';
                        } 
              
                    echo'</select>

                  </div>
                  <div id="qtd_item" class="col-sm-3" style="display:none">
                    <input name="qtd_item" type="text" value="" class="form-control" placeholder="Qtd Item">
                  </div>

                </div>
              </div>
              <div id="title_descrition"></div>
              <br>
              <h1 class="form-group">Envie uma Imagem ou Vídeo do Local</h1>
              <div class="form-group url_image">

                <label for="">● Url exemplo: https://hostdeimagem.com/imagem.png</label>
                <label for="">● Hospedar Imagem no <a href="https://imgur.com/upload" target="_blank">imgur.com</a></label>
                <label for="">● Mais de uma imagem, cole a url separada por vírgula + espaço.</a></label>
                <label for="">● Resolução mínima de 480x256.</a></label>
                <input name="url_image" type="text" value="" class="form-control" placeholder="Link/URL da Imagem">
              </div>';
              $upImage = false;
              if($upImage){
                echo'<div class="form-group nameimg"> 
                  <p>Resolução mínima 480x256 | <span>Tamanho máximo 1MB</span></p>
                  <div class="input">
                    <span></span>
                    <label for="nameimg">Selecionar Imagem</label>
                  </div>
                  <input name="nameimg[]" id="nameimg" multiple type="file" value="" class="form-control-file" >

                </div>';
              };
              echo'
              <div class="form-group id_video">
                <label for="">Ex: <a target="_blank"><strong>youtube.com/watch?v=</strong><span>ZNhtRDDwi-E</span></a></label>
                <input name="id_video" type="text" value="" class="form-control" placeholder="ID Link Youtube">
              </div>
              <input id="inputCoord" type="hidden" name="coord" required="">
              <div class="button">
                <button type="submit">Salvar</button>
              </div>
              <div class="error"></div>
              <div class="success"></div>
            
            </form>
            <form id="form_insert_grupo" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
              <select name="nation" class="form-control" required="">
                <option class="dp_n" value="">Selecione a Nação desse grupo</option>
                <option value="all_nations">Todas Nações</option>';
                
                  foreach($nations as $nation) {
                      echo'<option value="'.strtolower($nation['nome']).'">Especialidade de '.$nation['nome'].'</option>';
                  }
              
              echo'</select>
            </div>
            <div class="form-group">
              <select name="is_item" class="form-control" required="">
                <option class="dp_n" value="">Esse grupo é um Item?</option>
                <option value="true">Sim</option>
                <option value="false">Não</option>
              </select>
            </div>
            <div class="form-group">
              <select name="tipo" class="form-control" required="">
                <option class="dp_n" value="">Tipo do Grupo</option>';
                foreach($map_tipoGrupos as $tipoGrupos) {
                  echo'<option value="'.$tipoGrupos['value'].'">'.$tipoGrupos['title'].'</option>';
              }
              echo'</select>
            </div>
            <div class="form-group">
              <input name="title" type="name" value="" class="form-control" placeholder="Título do Grupo" required="">
            </div>
            <div class="form-group">
              <textarea name="descrição" class="form-control"  cols="30" rows="10" placeholder="Descrição" ></textarea>
            </div>
            <div class="form-group iconGrupo"> 
              <p>Ícone resolução 50x50</span></p>
              <div class="input">
                <span></span>
                <label for="iconGrupo">Selecionar Ícone</label>
              </div>
              <input name="iconGrupo" id="iconGrupo" multiple type="file" value="" class="form-control-file" >

            </div>
            <div class="button">
              <button type="submit">Salvar</button>
            </div>

            <div class="error"></div>
            <div class="success"></div>
            
            </form>';
/*             foreach($map_grupos as $grupos_map) {
              if($grupos_map['is_item'] == 'false'){
                echo strtolower($grupos_map['grupo']).'<br>';
              }
            }  */
            echo'
          </div>
      </div>
      <div class="barEdit">';
      if($type_user == 'Administrador'){
      echo'<div id="addGrupo" class="boxButton" title="Adicionar grupo de ícone"><div class="buttonEdit"><i class="add"></i>Adicionar grupo de Ícone</div></div>';
      }
  echo'</div>
    </div>';
}else{
  echo'<div style="
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 3rem;
      color: #ff4700;
      font-family: monospace;
      background: black;
      margin: -8px;
  ">Acesso Negado!</div>';
}
?>
<script>

    var point = L.divIcon({
        iconSize: [50, 50],
        iconAnchor: [29, 26],
        popupAnchor: [-3, -30],
        className: 'point',
      });
    

    //Marcador de Coordenada
    if(pointActive == true){
      var marker = L.marker([lasLMlat, lasLMlng], {icon: point, id:'point',draggable: true}).addTo(map);
      marker.bindPopup(L.popup({className:'pointpopup'}).setContent("Marcador")).openPopup();
      marker.on('dragend', function(e) {
      marker.getPopup().setContent(marker.getLatLng().toString()).openOn(map);
      });
    }
  

    marker.on('drag', function(event) {
        var coord = marker.getLatLng().toString();
        if(document.querySelector('#barRight #coord')){
          document.querySelector('#barRight #coord').innerHTML=coord;
        }

        if(document.querySelector('#form_insert_marker #inputCoord')){
          document.querySelector('#form_insert_marker #inputCoord').setAttribute('value', coord);
        } 
    });


    //inputsform 
    var midia = '';
    var msgSize;

    var nameimg = document.querySelector('#form_insert_marker .nameimg');
    var url_image = document.querySelector('#form_insert_marker .url_image');
    var id_video = document.querySelector('#form_insert_marker .id_video');
    var h1 = document.querySelector('#form_insert_marker h1');
    var iconIMG = document.querySelector('#barInsertMarker .title .icon img');


    var inputTitleDescrition = `
      <div class="form-group">
      <input name="title" type="name" value="" class="form-control" placeholder="Título do Marcador" required="">
      </div>
      <div class="form-group">
        <textarea name="descrição" class="form-control"  cols="30" rows="10" placeholder="Descrição" ></textarea>
      </div>
    `;

    document.querySelector('#form_insert_marker #selectGrupo').addEventListener('change', function(){
      
      var value = this.value;
      var newValue = value.split("-");

      if(newValue[2] == 'true'){
        document.querySelector('#qtd_item').style.display='block';
        document.querySelector('#qtd_item input').setAttribute('required','');
      } else {
        document.querySelector('#qtd_item').style.display='none';
        document.querySelector('#qtd_item input').removeAttribute('required');
      }

      iconIMG.setAttribute('src', `assets/include/pages/assets/img/iconsMap/${newValue[1]}.png`);
      iconIMG.style.borderRadius='50%';      

      if(newValue[1] == 'templo' || newValue[1] == 'dominio'){
        document.querySelector('#title_descrition').innerHTML = inputTitleDescrition;
      } else {
        document.querySelector('#title_descrition').innerHTML = '';
      }

    });

    /*nameimg.lastElementChild.addEventListener('change', function() {
        document.querySelector('#form_insert_marker .error').innerHTML='';
        id_video.remove();
        h1.innerHTML='Print Selecionado';

        midia = 'img';

        var inputFileName = this.files;

        if(inputFileName.length == 1){
          nameimg.querySelector('.input span').innerHTML=inputFileName.length+ ' arquivo selecionado';
        } else {
          nameimg.querySelector('.input span').innerHTML=inputFileName.length+ ' arquivos selecionados';
        }


        for (var i = 0; i < inputFileName.length; i++){
            var inputFileSize = inputFileName[i].size;

            if(inputFileSize > 1048576) {

              if(inputFileName.length == 1){
                document.querySelector("#form_insert_marker .nameimg p span").style.color="var(--red)";
                document.querySelector("#form_insert_marker .error").innerHTML="Tamanho da Imagem muito grande, Selecione uma imagem de até 1MB";
              } else {
                document.querySelector("#form_insert_marker .nameimg p span").style.color="var(--red)";
                document.querySelector("#form_insert_marker .error").innerHTML="Uma ou mais Imagens possui o tamanho muito grande, Selecione imagens de até 1MB";
              }

              imgSizeOk = false;
              msgSize = true;

            } else {
              imgSizeOk = true;

              if(msgSize == true){
                document.querySelector("#form_insert_marker .nameimg p span").style.color="";
                document.querySelector("#form_insert_marker .error").innerHTML="";

                if(inputFileName.length == 1){
                  document.querySelector("#form_insert_marker .success").innerHTML="Agora sim, Tamanho da imagem ok!";
                } else {
                  document.querySelector("#form_insert_marker .success").innerHTML="Agora sim, Tamanho das imagens ok!";
                }
              }
            }

        }
        //1.048.576
    });*/

    url_image.lastElementChild.addEventListener('change', function() {

      if ( /\.(jpe?g|png|gif)$/i.test(this.value) ) {
        id_video.remove();
        h1.innerHTML='Imagem Selecionada';
        document.querySelector('#form_insert_marker .error').innerHTML='';
      } else {
        document.querySelector('#form_insert_marker .error').innerHTML='URL informada está incorreta, as urls de imagens terminam com extenção .png, .jpg ou .gif';
      }

    });

    id_video.lastElementChild.addEventListener('change', function() {
        document.querySelector('#form_insert_marker .error').innerHTML='';
        url_image.remove();
        h1.innerHTML='Vídeo Selecionado';

        midia = 'video';

        id_video.firstElementChild.firstElementChild.lastElementChild.innerText = id_video.lastElementChild.value;
        var linkYoutube = id_video.firstElementChild.firstElementChild.innerText;
        id_video.firstElementChild.firstElementChild.setAttribute('href', 'https://'+linkYoutube)
    });


    //closeBarRight
    document.querySelector('#barRight .closeIcon .icon').addEventListener('click', function(){
        closeBarRight(); active = false;
        if(document.querySelector('#barRight .barRight')){
        setTimeout(function(){
            removeInsertMarker();
        },40);
    }
    });



    $('#form_insert_marker').submit(function(){
      var printorvideo = false;
      if(document.querySelector('.id_video input')){
        if(document.querySelector('.id_video input').value == ''){
          printorvideo = true;
        }
      }
      if(document.querySelector('.url_image input')){
       if(document.querySelector('.url_image input').value == ''){
          printorvideo = true
        }
      }
      if(printorvideo == true){
          document.querySelector('#form_insert_marker .error').innerHTML='Envie um print ou video!';
      } else {

        if(document.querySelector('#inputCoord').value != ''){
          
                $.ajax({
                    url: 'assets/include/pages/assets/include/insert_marker.php',
                    type: 'POST',
                    data: $('#form_insert_marker').serialize(),
                    success: function(data){
                        $('#form_insert_marker .error').html(data);
                    }
                });

        } else {
          document.querySelector('#form_insert_marker .error').innerHTML='Informe a Coordenada';
          document.querySelector('#coord').style.color='var(--red)';
        }

      }
        return false;
    }); 

 
    //insertMarke if dataMarker for true
    marker.on('dragstart', function(event) {
      if(document.querySelector('#barRight .barRight') == null ||
       document.querySelector('#barRight #dataMarker') != null){
        closeBarRight();
        loadInsertMarker();
        removemarkerSelected();
        pointActive = false;
      }

    });


    //addGrupo

    if(addGrupo){
    var addGrupo = document.querySelector('#addGrupo');
    var form_insert_grupo = document.querySelector('#form_insert_grupo');
    var form_insert_marker = document.querySelector('#form_insert_marker');
    var title = document.querySelector('#barInsertMarker .title h1');

    function showAddGrupo() {
        form_insert_marker.style.display='none';
        form_insert_grupo.style.display='block';
        title.innerHTML='Add Grupo de Marcador';
        addGrupo.firstElementChild.innerHTML='<i class="return"></i>Voltar';
        localStorage.setItem('addGrupo', 'true');
        iconIMG.setAttribute('src', 'assets/include/pages/assets/img/point_icon.png');
        iconIMG.style.width='';        
    }

    function showInserMarker() {
        form_insert_marker.style.display='';
        form_insert_grupo.style.display='';
        title.innerHTML='Adicionar Marcador';
        addGrupo.firstElementChild.innerHTML='<i class="add"></i>Adicionar grupo de Ícone';
        localStorage.setItem('addGrupo', 'false');
        iconIMG.setAttribute('src', 'assets/include/pages/assets/img/point_icon.png');
        iconIMG.style.width='';        
    }

    var showAG = false;

    if(localStorage.getItem('addGrupo') == 'true'){
      showAddGrupo();
      showAG = true;
    }


    addGrupo.addEventListener('click', function(){
      if(showAG == false){
        showAddGrupo();
        showAG = true; 
      } else {
        showInserMarker();
        showAG = false; 
      }
    });
    
  }

    document.querySelector('#form_insert_grupo .iconGrupo input').addEventListener('change', function(){
      document.querySelector('#form_insert_grupo .input span').innerHTML=this.files[0].name;

      var reader = new FileReader();

      reader.onload = () => {
        iconIMG.src = reader.result;
      }
      iconIMG.style.width='50px';
      reader.readAsDataURL(this.files[0]);
    });


    $('#form_insert_grupo').submit(function(){

        var form_insert_grupo = $('#form_insert_grupo')[0];
        var formdata = new FormData(form_insert_grupo);

        $.ajax({
            url: 'assets/include/pages/assets/include/add_grupo_icone.php',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data){
                $('#form_insert_grupo .error').html(data);
            }
        });

      return false;
    }); 

</script>

