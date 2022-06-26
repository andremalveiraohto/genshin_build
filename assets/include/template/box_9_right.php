<div class="box-9 absolute_right">
    <div class="box-9-1">
        <!-- <div>
            <div id="modals_star_rat"  class="modals_star_rating hideModal" >
                <div class="main_modal_star_rating">

                                <div class="main_modal_top">
                                    <div class="main_modal_title"><h2>Avaliar Personagem</h2></div>
                                    <div class="modal_buttom_close" onclick="closeStar_rat()"><img class="close_white" src="assets/img/icons/close_modal_white.png" alt=""></div>
                                </div>
                                <div class="main_modal_body">
                                    
                                </div>      
                                <div class="caret-down"><i class="fas fa-caret-down"></i></div>     
                </div>
            </div>
            <a id="star_rat" class="elipse_bottom" title="Avaliar Personagem"><i class="fas fa-star"></i><img src="assets/img/icons/exclam.png" class="i_e_right icon_excla" alt="Exclamação"></a>
        </div> -->

        <?php
        
        $bgBanner = 'assets/img/elements/'.$about_personagem['elemento'].'/persona/'.$about_personagem['nome'].'/bgchange_'.$about_personagem['nome'].'.png';
        
        if(file_exists($bgBanner)){
            echo '<div id="bgchangeDownload"><a class="elipse_bottom" title="Download this Background"><i class="fas fa-arrow-alt-circle-down"></i></a></div>';
            echo '<a id="bgchange" class="elipse_bottom"><div class="iconBG"></div><img src="assets/img/icons/exclam.png" class="i_e_right icon_excla" alt="Exclamação"></a>';
        } 
        ?>
        

        <a id="feedback"><?php echo$text_feedback?><img src="assets/img/icons/exclam.png" class="icon_excla" alt="Exclamação"></a>
        <!-- <a id="donate"  >Donate   <img src="assets/img/icons/exclam.png" class="icon_excla" alt="Exclamação"></a> -->
    </div>
</div>