
<!DOCTYPE html>
<html = style="height: 100%;" lang="pt-br">
  <head>
    <title>Mapa Interativo <?php echo$name_meta[0]['text']?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $font_dir ?>">
    <link rel="stylesheet" href="assets/include/pages/assets/js/leafletjs/leaflet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/include/pages/assets/css/map.css">
    <link rel="stylesheet" href="assets/include/pages/assets/css/mapIcons.css">

    <script src="assets/include/pages/assets/js/leafletjs/leaflet-src.js"></script>

    <link rel="shortcut icon" href="assets/include/pages/assets/img/iconMap.png" type="image/x-icon">
  </head>
  
  <body class="fadeIn" style="height: 100%;margin: 0;" class="">
    <div id="loading"><div class="box"><div class="spinner"></div></div></div>

    <div id="topbar" class="slide_topbar" style="width:auto; right:inherit;">
      <div class="buttonMenuMarkers">
        <div id="buttonMenuMarkers" class="menu fechar closeMenuPaimon">
            <div class="borda_close_2"></div>
            <div class="borda_close_1"></div>
            <div class="icon_menu"></div>
        </div>
      </div>
      <div class="closeReturn" none>
          <a href="./">
              <div id="closeMenuPaimon" class="fechar closeMenuPaimon">
                  <div class="borda_close_2"></div>
                  <div class="borda_close_1"></div>
                  <div class="icon_return"></div>
              </div>
          </a>
      </div>
    </div>

    <?php
        if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
          echo'
          <div class="bodyMenuUser">
            <a href="./dash">
              <div class="user" title="Conta">
                
                  <div class="avatar">
                    <img src="dash/assets/img/users/ID-'.$user_ID.'/'.$user_Img.'"/>
                  </div>
                  <span>'.$username.'</span>
                
              </div>
            </a>
            <li class="buttonCheck">
              <label for="marker">Marcador</label>
              <input id="marker" type="checkbox" class="switch">
              
            </li>
          </div>
          ';
        } 
    ?>

    <div id="map" style="width: 100%; height: 100%; background: #273745;"></div> 

    <div id="barRight"></div>
    <div id="menuMarkers" class="" >
       <?php include 'assets/include/menu_markers.php'?> 
    </div>
    <div class="error"></div>
    <div id="overlay" class=""></div>
  </body>

    <?php include 'assets/include/js.php'?>
    <script src="assets/include/pages/assets/js/mapConfig.js"></script>
    <div id="markers"></div>
    <script src="assets/include/pages/assets/js/mapMarkers.js"></script>

    
    <?php
        if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
          echo'<script src="assets/include/pages/assets/js/mapLoadMarker.js"></script>';
        } 
    ?>


</html>


