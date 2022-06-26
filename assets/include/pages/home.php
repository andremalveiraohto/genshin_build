<?php
include 'assets/include/pages/assets/css_meta.php';

?>

<!-- <pre>
  <?php
  var_dump($name_meta)
  ?>
</pre> -->
<body>
<div id="buttonMenuPaimon" class="buttonMenuPaimon slide_topbar"></div>
        <!-- <div class="menu_paimon_new"></div> -->
<?php include 'assets/include/template/menu_paimon.php'?>

<div id="bodyTeiner" class="bodyTeiner">
    <div class="container vh padding_0"> 

        <div class="vertical-center"> 

        
            <div class="tab_card slide_topbar">
                <div class="tab-menu">
                    <ul>
                        <?php 
                        foreach($nations as $nation){
                        echo'<li><div class="tab-name nation" data-id="'.$nation['nome'].'">'.$nation['nome'].'</div></li>';
                        }
                        ?>
                    </ul>
                </div>
            <?php 
                    foreach($nations as $nation){
                            // INCLUDE DA TABELA PERSONAGENS
                            $nation = $nation['nome'];
                            $nt = "SELECT * FROM personagens WHERE nation = '$nation'";
                            $nts = $pdo->query($nt);
                        
                        echo'
                        <div  class="tab" data-id="'.$nation.'">

                                <div class="slider_center">
                                    <div class="slider_style_zero">';       

                                    if($nts->rowCount() > 0) {        
                                        foreach($personagens as $personagem){

                                            if($personagem['nation'] == $nation){
                                                echo'
                                                
                                                <div class="card_pers">
                                                    <a href="'.strtolower($personagem['nome']).'">
                                                        <div class="card_img">
                                                            <div class="card_iconPersona" style="background-image: url(assets/img/elements/'.strtolower($personagem['elemento']).'/persona/'.strtolower($personagem['nome']).'/style_zero_'.strtolower($personagem['nome']).'.png), url(assets/img/icons/bg_'.$personagem['star'].'_stars.png); background-size: 100%; background-repeat: no-repeat;"></div>
                                                            <div class="miniIconElement '.$personagem['elemento'].'"></div>
                                                            <div class="card_border"></div>
                                                            <span>'.preg_replace('/\B[A-Z]/', ' $0', $personagem['nome']).'</span>
                                                        </div>
                                                    </a> 
                                                </div>

                                                ';
                                            } 
                                        } 
                                    } else {
                                        echo'<div class="text_recomendado margin_top_150px"><h2>Nenhum Personsagem de '.$nation.' Disponível.</h2></div>';
                                    }   
                                echo'</div>
                                </div>
                        
                        </div>';    
                    }
                ?> 
                                  
            </div>
        </div>
    </div>
    <div class="bg blur" style="background-image: url(<?php echo$name_meta[14]['text'] ?>);"></div>
</div>

<div>
    <div id="modals_feedback"  class="modals_form hideModal" style="display:none">
        <div class="main_modal_white">

            <div class="main_modal_top">
                <div class="main_modal_title"><h2><?php echo$text_avalie_nos?></h2></div>
                <div class="modal_buttom_close" onclick="closeFeedback(), closeM()"><img class="close_white" src="assets/img/icons/close_modal_white.png" alt=""></div>
            </div>
            <div class="main_modal_body">
                <?php include 'assets/include/form_feedback.php'; ?>
            </div>           
        </div>
    </div>
    <div id="modals_about"  class="modals_form hideModal" style="display:none">
        <div class="main_modal_white w-h_full">
            <div class="main_modal_top top_full">
                
                <div class="modal_buttom_close" onclick="closeAbout(), closeM()"><img src="assets/img/icons/close_modal.png" alt="" class="grayscale"></div>
            </div>
            <div class="main_modal_body_about">
                <div class="body_title"><h3><?php echo$text_title_sobre_site?></h3></div>
                <div class="img_about"></div>
                <div class="body_text"><h4><?php echo$text_sobre_site?></h4></div>
                <div class="dp_jc_center height_91px">
                    <!-- <div class="button_wide" onclick="closeAbout(), closeM()"><h2>Confirmar</h2></div>-->
                </div>
            </div>           
        </div>
    </div>

    <div class="modals_form_shadow"></div>
</div>

<div id="welcome" class="modals_popUp"></div>

<?php include 'assets/include/js.php'; ?>
</html>