<?php 

$img_pont_borda_box_modal = 'assets/img/icons/pont_borda_box_modal.png';

$protocolo = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=="on") ? "https" : "http");
$url = '://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'];

?>
    
    <div id="modals_about"  class="modals_form hideModal" >
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
    
    <div id="modals_share"  class="modals_form hideModal" >
        <div class="main_modal_white w-h_share">
                        <div class="main_modal_cont">
                        <div class="main_modal_top">
                            <div class="main_modal_title"><h2><?php echo$text_compartilhar?></h2></div>
                            <div class="modal_buttom_close" onclick="closeShare(), closeM()"><img class="close_white" src="assets/img/icons/close_modal_white.png" alt=""></div>
                        </div>
                            <div class="redes_sociais_links main_modal_body">
                                <a href="http://www.facebook.com/sharer.php?u=<?php echo $protocolo.$url;?>" target="_blank" class="with_name left"><div class="bg_icons icon_facebook" ><i class="fab fa-facebook-f"></i></div><h2>Facebook</h2></a>
                                <a href="https://twitter.com/intent/tweet?text=<?php echo $text_confira, ucfirst($nome_personagem) ?> / for Genshin Impact <?php echo $protocolo.$url;?>" target="_blank" class="with_name center"><div class="bg_icons icon_twitter" ><i class="fab fa-twitter"></i></div><h2>Twitter</h2></a>
                                <a href="https://api.whatsapp.com/send?text=<?php echo $text_confira, ucfirst($nome_personagem) ?> / for Genshin Impact-> <?php echo $protocolo.$url;?>" target="_blank" class="with_name left"><div class="bg_icons icon_whatsapp" ><i class="fab fa-whatsapp"></i></div><h2>Whatsapp</h2></a>
                                <a href="http://www.reddit.com/submit?url=<?php echo $text_confira, ucfirst($nome_personagem) ?> / for Genshin Impact-> <?php echo $protocolo.$url;?>" target="_blank" class="with_name center"><div class="bg_icons icon_reddit" ><i class="fab fa-reddit-alien"></i></div><h2>Reddit</h2></a>
                            </div>
                        </div>            
        </div>
    </div>

    <div id="modals_feedback"  class="modals_form hideModal" >
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

    <div id="modal_details_persona"  class="modals_form hideModal" >
        <div class="main_modal">
            <div class="pontas_borda_main_modal">
                <img class="top_left" src="<?php echo$img_pont_borda_box_modal?>" alt="">
                <img class="top_right" src="<?php echo$img_pont_borda_box_modal?>" alt="">
                <img class="bottom_left" src="<?php echo$img_pont_borda_box_modal?>" alt="">
                <img class="bottom_right" src="<?php echo$img_pont_borda_box_modal?>" alt="">
            </div>
                <div class="bg_main_modal"> 
                    <div class="moldura_main_modal">
                        <div class="main_modal_top">
                            <div class="main_modal_title"><h1><?php echo$text_title_sobre_persona?></h1></div>
                            <div class="modal_buttom_close" onclick="closeDetails_Persona(), closeM()"><img src="assets/img/icons/close_modal.png" alt=""></div>
                        </div>
                        <div class="img_modal_persona"></div>
                        <div class="info_container_arrow">
                           
                            <div class="main_modal_text">
                                <h2><?php echo$about_personagem['habilidade'];?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>

    <div id="modals_map"  class="modals_form hideModal">
        <div class="main_modal_white w-h_full">
                        <div>
                        <div class="main_modal_top top_full">
                            
                            <div class="modal_buttom_close" onclick="closeMap()"><img src="assets/img/icons/close_modal.png" alt="" class="grayscale"></div>
                        </div></div>
                        <div id="map"></div>
        </div>
    </div>

    
    <div class="modals_form_shadow"></div>
    
    <div id="modals_popUp" class="modals_popUp"></div>