<?php

$box5_np = $about_personagem['nome'];
$box5_ep = $about_personagem['elemento'];
$box5_st = $about_personagem['star'];


$box5_nation = $about_personagem['nation'];
$box5_afiation = $about_personagem['afiliação'];
$box5_title = $about_personagem['title'];
$box5_arma = $about_personagem['arma'];
$box5_niver = $about_personagem['niver'];
$box5_const = $about_personagem['constelação'];
$box5_coment = $about_personagem['comentário'];

?>


<div id="grid_right-2-3" class="box-5">
        <div class="box-5-1">
            <div id="top_about">
                <h1 title="<?php echo $box5_np?>"><?php echo preg_replace('/\B[A-Z]/', ' $0', $box5_np)?></h1>
                <?php  echo'<div class="stars" title="Personagem de '.$box5_st.' Estrelas">';
                    for ($i=0; $i < $box5_st; $i++) {echo '<i class="fas fa-star"></i>';};                       
                echo'</div>';   
                ?>   
            </div>
            <div class="elemento">
                <img src="<?php echo 'assets/img/IconElement/Icon_'.$box5_ep.'_67.png';?>" alt="<?php echo $box5_ep;?>">
            </div>
        </div>
        <div class="box-5-2">
            <div class="about_persona" title="<?php echo $box5_np.' - '; echo $text_nation.': '; echo $box5_nation;?>">
                <h2><?php echo $text_nation?></h2>
                <h3><?php echo $box5_nation;?></h3>
            </div>

            <div class="about_persona bg_about" title="<?php echo $box5_np.' - '; echo $text_afiliação.': '; echo $box5_afiation;?>" id="affiliation">
                <h2><?php echo $text_afiliação?></h2>
                <h3><?php echo $box5_afiation;?></h3>
            </div>

            <div class="about_persona" title="<?php echo $box5_np.' - '; echo $text_title.': '; echo $box5_title;?>" id="title">
                <h2><?php echo $text_title?></h2>
                <h3><?php echo $box5_title;?></h3>
            </div>

            <div class="about_persona bg_about" title="<?php echo $box5_np.' - '; echo $text_arma_ultilizada.': '; echo $box5_arma;?>">
                <h2><?php echo $text_arma_ultilizada?></h2>
                <h3><?php echo $box5_arma;?></h3>
            </div>

            <div class="about_persona" title="<?php echo $box5_np.' - '; echo $text_aniversario.': '; echo $box5_niver;?>">
                <h2><?php echo $text_aniversario?></h2>
                <h3><?php echo $box5_niver;?></h3>
            </div>

            <div class="about_persona bg_about" title="<?php echo $box5_np.' - '; echo $text_visão.': '; echo $box5_ep;?>">
                <h2><?php echo $text_visão?></h2>
                <h3><?php echo $box5_ep;?></h3>
            </div>

            <div class="about_persona" title="<?php echo $box5_np.' - '; echo $text_constelação.': '; echo $box5_const;?>">
                <h2><?php echo $text_constelação?></h2>
                <h3><?php echo $box5_const;?></h3>
            </div>

            <div class="descrition_persona" title="<?php echo 'Sobre '.$box5_np.' - '; echo $box5_coment;?>">
                <h3><?php echo $box5_coment;?></h3>
            </div>
            
            <?php if(!isset($about_personagem['habilidade']) or !empty($about_personagem['habilidade'])){
                echo'<div id="details_persona" class="details_persona_border" title="'.$text_mais_informações.' sobre '.$box5_np.'">
                        <div class="details_persona_bg">
                            <h2>'.$text_mais_informações.'</h2>
                        </div>
                        <img src="assets/img/icons/exclam.png" class="icon_excla" alt="Exclamação">
                     </div>';
                }
            ?>

        </div>
</div>



