<?php


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:site_name"        content="GISH"> 
   
    <meta property="og:type"             content="gamer" />
    <meta property="game:section"        content="Server, Servidor, Hour, Hora">
    <meta property="game:tag"            content="Genshin Impact, hora servidor, server hour">  

    <meta property="og:url"              content="https://genshimpact.ga/hour" />
    <meta property="og:title"            content="GISH | Genshin Impact Server Hour | Hora Servidor de Genshin Impact"/>
    <meta property="og:description"      content="Update Time for Genshin Impact Servers | Hora da Atualização dos Servidores de Genshin Impact " />
    <meta property="og:image"            content="assets/img/og_image.png" />
      
    <meta name="description"             content="Update Time for Genshin Impact Servers | Hora da Atualização dos Servidores de Genshin Impact" />
    <meta name="keywords"                content="Genshin Impact, hora servidor, server hour">
    
    <meta name="theme-color" content="#aea189">
  	<meta name="apple-mobile-web-app-status-bar-style" content="#aea189">

    <link rel="icon" href ="assets/include/pages/assets/img/favicon-light.svg" type = "image/x-icon"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/include/pages/assets/css/style.css">
    <link rel="stylesheet" href="assets/include/pages/assets/css/full-page-scroll.css">
    <link rel="stylesheet" href="assets/include/pages/assets/css/hour.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="assets/include/pages/assets/js/moment-timezone-with-data-10-year-range.min.js"></script>
    <script src="assets/include/pages/assets/js/moment-precise-range.js"></script>

    <title>Hora de Reset dos Servidores de Genshin Impact </title>

</head>
<body class="fadeIn" >

    <div id="bodyTeinerH" class="no_blur">
        <div id="bodyTeinerHour">
            <div class="topBarHour slide_topbar">

                <div class="menuLeft">
                    <div class="configHour">
                        <div  id="config" class="elipse_bottom"><i class="fas fa-cog"></i><img src="assets/img/icons/exclam.png" class="icon_excla"></div>
                        <div class="modalconfigHour">

                            <label class="optionName" for="showSecondsSwitch">
                                <span>Habilitar Segundos</span>
                                <label class="switch">
                                    <input type="checkbox" id="showSecondsSwitch" onchange="settingToggle(this)">
                                </label>
                            </label>

                            <label class="optionName" for="compactModeSwitch">
                                <span>Mais Detalhes</span>
                                <label class="switch">
                                    <input type="checkbox" id="compactModeSwitch" onchange="settingToggle(this)">
                                </label>
                            </label>

                            <label class="optionName" for="aud">
                                <span>Sons Interativos</span>
                                <label class="switch">
                                    <input type="checkbox" id="aud" onchange="settingToggle(this)">
                                </label>
                            </label>
                            <label class="optionName" for="modstream">
                                <span>Modo Live/Stream</span>
                                <label class="switch">
                                    <input type="checkbox" id="modstream" onchange="settingToggle(this)">
                                </label>
                            </label>
                        </div>
                    </div>
                    <div id="details_persona" class="elipse_bottom"><i class="fas fa-info"></i><img src="assets/img/icons/exclam.png" class="icon_excla"></div>
                    <div class="closeReturn">
                        <a href="./">
                            <div id="closeMenuPaimon" class="fechar closeMenuPaimon">
                                <div class="borda_close_2"></div>
                                <div class="borda_close_1"></div>
                                <div class="icon_close"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="overlayConfig"></div>
            <div id="bodyCardHour" class="">
                    
                <section class="section flex_jcenter_acenter slidein3">
                    <div class="gameContainer">
                        <div class="cardHour">
                            <div class="gameTimes">
                                <div class="gameHeader"></div>
                                <div class="localTimes">
                                    <p class="gameTimesText">Atualiza às</p>
                                    <p class="gameTimesText">Tempo Restante</p>                                       
                                </div>
                                <div class="serverTimes">
                                    <p class="">Hora da Atualização no Servidor: </p>
                                    <p class="">Hora atual no Servidor: </p>
                                    <p class="">Data atual no Servidor: </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section flex_jcenter_acenter slide_topbar">
                    <div class="gameContainer">
                        <div class="cardHour">
                            <div class="gameTimes">
                                <div class="gameHeader"></div>
                                <div class="localTimes">
                                    <p class="gameTimesText">Atualiza às</p>
                                    <p class="gameTimesText">Tempo Restante</p>                                       
                                </div>
                                <div class="serverTimes">
                                    <p class="">Hora da Atualização no Servidor: </p>
                                    <p class="">Hora atual no Servidor: </p>
                                    <p class="">Data atual no Servidor: </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section flex_jcenter_acenter slidein2">
                    <div class="gameContainer">
                        <div class="cardHour">
                            <div class="gameTimes">
                                <div class="gameHeader"></div>
                                <div class="localTimes">
                                    <p class="gameTimesText">Atualiza às</p>
                                    <p class="gameTimesText">Tempo Restante</p>                                       
                                </div>
                                <div class="serverTimes">
                                    <p class="">Hora da Atualização no Servidor: </p>
                                    <p class="">Hora atual no Servidor: </p>
                                    <p class="">Data atual no Servidor: </p>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                </section>



            </div>
            <div id="bodyStream" class="docSlider bodyStream"></div>
            <div class="alertScroll"><div class="relative"><div class="alertBorder"></div><div class="alertArrow"></div></div></div> 
        </div>
    </div>

    <div id="modal_details_persona"  class="modals_form hideModal" style="display: none;">

        <div class="main_modal">
            <div class="pontas_borda_main_modal">
                <img class="top_left" src="assets/include/pages/assets/img/pont_borda_box_modal.png" alt="">
                <img class="top_right" src="assets/include/pages/assets/img/pont_borda_box_modal.png" alt="">
                <img class="bottom_left" src="assets/include/pages/assets/img/pont_borda_box_modal.png" alt="">
                <img class="bottom_right" src="assets/include/pages/assets/img/pont_borda_box_modal.png" alt="">
            </div>
                <div class="bg_main_modal"> 
                    <div class="moldura_main_modal">
                        <div class="main_modal_top">
                            <div class="main_modal_title"><h1>Leia</h1></div>
                            <div class="modal_buttom_close" onclick="closeDetails_Persona(), closeM()"><img src="assets/include/pages/assets/img/close_modal.png" alt=""></div>
                        </div>
             
                        <div class="info_container_arrow txt">
                           
                            <div class="main_modal_text">
                                <div id="txt">
                                Bem Vindo viajante, 
                                <br>            
                                <p>Os horários das atualizações são em tempo real com base no seu fuso horário!</p>

                                <p>
                                Características:<br>
                                &#9656; Detecta automaticamente seu fuso horário local.<br>
                                &#9656; Converte todos os horários dos servidores em seu fuso horário local.<br>
                                &#9656; Mostra o tempo restante até a reinicialização diária do servidor de jogo.<br>
                                &#9656; Atualiza automaticamente os dados a cada minuto.<br>
                                &#9656; Opção para atualizar e exibir a cada segundo.<br>
                                &#9656; Todos os cálculos levam em consideração o horário de verão, quando aplicável.<br>
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

    </div>

    <div class="modals_form_shadow"></div>

    <footer><div></div>
        <div class="cpy"> Copyright 2021 - <a href="https://gish.ga" target="_blank">GISH.ga</a> | Genshin Impact Server Hour</div>
        <div class="flex_jcenter_aflexend">
        </div>
    </footer>

</body>
    <script>var index = true;</script>
    <script src='assets/include/pages/assets/js/jquery.min.js'></script>
    <script src="assets/include/pages/assets/js/javascript.js"></script>
    <script src="assets/include/pages/assets/js/docSlider.min.js"></script>
    <script src="assets/include/pages/assets/js/full-page-scroll.js"></script>
    <script src="assets/include/pages/assets/js/aud.js"></script>
    <script src="assets/include/pages/assets/js/hour.js"></script>
    <script>
        window.onload = function(){
            setTimeout(function(){
                if(block_Aud == true){open_hour.play();}
            }, 450)
        }
    </script>
    <script src="assets/include/pages/assets/js/script.js"></script>
</html>

