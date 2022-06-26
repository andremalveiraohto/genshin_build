<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $codErro; echo ' - ';  echo $titleErro?></title>
    <link rel="shortcut icon" href="<?php for ($i = 1; $i <= $count_barra; $i++) {echo '../';}?>assets/img/icons/exclam.png">
    <link rel="stylesheet" href="<?php for ($i = 1; $i <= $count_barra; $i++) {echo '../';} echo $font_dir ?>">
    <link rel="stylesheet" href="<?php for ($i = 1; $i <= $count_barra; $i++) {echo '../';}?>assets/css/style.css">
    <link rel="stylesheet" href="<?php for ($i = 1; $i <= $count_barra; $i++) {echo '../';}?>assets/include/pages/error/style.css">
</head>

<body class="body_erro">

    <div id="modal_details_persona"  class="modals_form" >
        <div class="main_modal">
            <div class="pontas_borda_main_modal">
            </div>
                <div class="bg_main_modal"> 
                    <div class="moldura_main_modal">
                        <div class="main_modal_top">
                            <div id="close" class="modal_buttom_close"><a href="
                            <?php 
                            if($count_barra == 0){
                                echo'./';
                            } else { for ($i = 1; $i <= $count_barra; $i++) {echo '../';}}
                            ?>
                            
                            
                            "><img src="<?php for ($i = 1; $i <= $count_barra; $i++) {echo '../';}?>assets/img/icons/close_modal.png" alt=""></a></div>
                        </div>
                            <div class="_main">
                                <div class="center_main">
                                    <div>
                                        <h2><?php echo $titleErro?></h2>        
                                        <p>Error <?php echo $codErro?></p>
                                        <span><?php if( $status_db == false){echo $errorPDO;};?></span>
                                    </div>
                                </div>
                                <div class="button_wide"><a href="
                                <?php 
                                if($count_barra == 0){
                                    echo'./';
                                } else { for ($i = 1; $i <= $count_barra; $i++) {echo '../';}}
                                ?>">
                                <div class="button_wide_fff voltar"><h3>Voltar</h3></div></a>
                                <!-- <div class="button_wide_fff"><h3>Reportar Erro!</h3></div> -->
                                </div>
                            </div>
                    </div>
                </div>
            
        </div>
    </div>
    <div class="modals_form_shadow"></div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<script>


    $('.button_wide_fff').on('click', function(e){
        $('.button_wide_fff img').addClass('hideExcla');
    });

    $(function(){
        $("#close img").hover(function(){
        var close_modal= new Audio();
        close_modal.src = '<?php for ($i = 1; $i <= $count_barra; $i++) {echo '../';}?>assets/audio/close_modal.mp3';
        close_modal.play(); },
        //Ao remover o cursor da div
        function(){
        });
    });

    $('#close').on('click', function(e) {
        $('.modals_form_shadow').addClass('modals_form_shadow_close');
        $('.modals_form_shadow').addClass('sdow_opty_2'); 
    });

        var open_modal= new Audio();
        open_modal.src = '<?php for ($i = 1; $i <= $count_barra; $i++) {echo '../';}?>assets/audio/open_modal.mp3';
        open_modal.play();


</script>
</body>
</html>