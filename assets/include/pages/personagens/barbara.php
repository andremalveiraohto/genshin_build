<?php 

include 'assets/include/config.php';



/* NOME PERSONAGEM */               $nome_personagem          = 'barbara';
/* ESTRELAS */                      $estrelas                 = '4';
/* NOME ELEMENTO */                 $nome_elemento            = 'Hydro';
/* ARMA UTILIZADA */                $arma_utilizada           = 'Arco'; 
/* ANIVERSARIO */                   $aniversario              = '45/64';
/* AFILIAÇÃO */                     $afiliacao                = 'rryrtyrt';   
/* CONSTELAÇÃO*/                    $constelacao              = 'yrtyrty';
/* DESCRIÇÃO PERSONA*/              $descricao_personagem     = 'rtyrtyrt'; 
/* SOBRE PERSONA*/                  $sobre_personagem         = '<p>rtyrtyrtyrtyrtyrtyrtyrtyrt ty rty rty rt</p>'; 

/* FAVICON ELEMENTO */              $favicon_elemento         = 'assets/img/elements/'.$nome_elemento.'/'.$nome_elemento.'_favicon.png';
/* ÍCONE ELEMENTO */                $icone_elemento           = 'assets/img/elements/'.$nome_elemento.'/'.$nome_elemento.'.png';
/* BG ELEMENTO*/                    $bg_elemento              = 'assets/img/elements/'.$nome_elemento.'/'.$nome_elemento.'_bg.png';
/* AVATAR PERSONAGEM*/              $avatar_personagem_face   = 'assets/img/elements/'.$nome_elemento.'/persona/'.$nome_personagem.'/avatar.png';
/* BG PERSONAGEM PRINCIPAL */       $bg_personagem            = 'assets/img/elements/'.$nome_elemento.'/persona/'.$nome_personagem.'/principal.png';
/* BG PERSONAGEM ARMAS */           $bg_armas                 = 'assets/img/elements/'.$nome_elemento.'/persona/'.$nome_personagem.'/armas.png';
/* BG PERSONAGEM ARTEFATOS */       $bg_artefatos             = 'assets/img/elements/'.$nome_elemento.'/persona/'.$nome_personagem.'/artefatos.png';



/* ===================== ==================================== =========================== */
/* ====================== DADOS ROWS 1 - BUILD DE 3 ESTRELAS ============================ */
/* ===================== ==================================== =========================== */

/* NOME DO CONJUNTO 1 */      $rows_1_nome_conjunto_1         = '1';
/* DESCRIÇÃO 2 PEÇAS */       $rows_1_conjunto_1_2peca        = '1';
/* DESCRIÇÃO 4 PEÇAS */       $rows_1_conjunto_1_4peca        = '2';
/* NOME DO CONJUNTO 2 */      $rows_1_nome_conjunto_2         = '4';
/* DESCRIÇÃO 2 PEÇAS */       $rows_1_conjunto_2_2peca        = '4';
/* DESCRIÇÃO 4 PEÇAS */       $rows_1_conjunto_2_4peca        = '4';

                            /* === DADOS PARA FLOR === */

/* NOME DO CONJUNTO */        $rows_1_nome_conj_artefato_1  = '22';
if (ctype_digit($rows_1_nome_conj_artefato_1)){$rows_1_nome_artefato_1 = ($conjunto[$rows_1_nome_conj_artefato_1]['taça']);}else{
/* NOME ARTEFATO */           $rows_1_nome_artefato_1       = '2';};
/* GENERO ARTEFATO */         $rows_1_genero_artefato_1     =  $text_flor_da_vida;
/* BENEFICIO ARTEFATO */      $rows_1_beneficio_artefato_1  = '1';
/* QUANTIDADE BENEFICIO */    $rows_1_quantidade_artefato_1 = '232323';
/* NIVEL DE ESTRELAS */       $rows_1_nv_star_artefato_1    = '5';
/* NIVEL ARTEFATO */          $rows_1_nivel_artefato_1      = '12';
/* IMAGEM ARTEFATO */  
    if (ctype_digit($rows_1_nome_conj_artefato_1)){
        $rows_1_conj_artefato_1 = ($conjunto[$rows_1_nome_conj_artefato_1]['Conjunto']);
    }else {$rows_1_conj_artefato_1 = '';};
/*LINK*/   $rows_1_img_artefato_1 = 'assets/img/itens/artefatos/conjunto/'.$rows_1_conj_artefato_1.'/'.$rows_1_nv_star_artefato_1.'_estrelas/'.$rows_1_nome_artefato_1.'.png';

                            /* === DADOS PARA PENA === */

/* NOME ARTEFATO */           $rows_1_nome_artefato_2       = '11';
/* GENERO ARTEFATO */         $rows_1_genero_artefato_2     = $text_pluma_da_morte;
/* BENEFICIO ARTEFATO */      $rows_1_beneficio_artefato_2  = '2';
/* QUANTIDADE BENEFICIO */    $rows_1_quantidade_artefato_2 = '2323';
/* NIVEL DE ESTRELAS */       $rows_1_nv_star_artefato_2    = '3';
/* NIVEL ARTEFATO */          $rows_1_nivel_artefato_2      = '12';
/* NOME DO CONJUNTO */        $rows_1_nome_conj_artefato_2  = '11';
/* IMAGEM ARTEFATO */         $rows_1_img_artefato_2        = 'assets/img/itens/artefatos/'.$rows_1_genero_artefato_2.'/'.$rows_1_nivel_artefato_2 .'/teste.png';

                            /* === DADOS PARA AMPULHETA === */

/* NOME ARTEFATO */           $rows_1_nome_artefato_3       = '19';
/* GENERO ARTEFATO */         $rows_1_genero_artefato_3     = $text_areia_do_tempo;
/* BENEFICIO ARTEFATO */      $rows_1_beneficio_artefato_3  = '9';
/* QUANTIDADE BENEFICIO */    $rows_1_quantidade_artefato_3 = '2323';
/* NIVEL DE ESTRELAS */       $rows_1_nv_star_artefato_3    = '3';
/* NIVEL ARTEFATO */          $rows_1_nivel_artefato_3      = '12';
/* NOME DO CONJUNTO */        $rows_1_nome_conj_artefato_3  = '12';
/* IMAGEM ARTEFATO */         $rows_1_img_artefato_3        = 'assets/img/itens/artefatos/'.$rows_1_genero_artefato_3.'/'.$rows_1_nivel_artefato_3.'/teste.png';

                            /* === DADOS PARA TAÇA === */

/* NOME ARTEFATO */           $rows_1_nome_artefato_4       = '12';
/* GENERO ARTEFATO */         $rows_1_genero_artefato_4     = $text_cálice_de_erátema;
/* BENEFICIO ARTEFATO */      $rows_1_beneficio_artefato_4  = '6';
/* QUANTIDADE BENEFICIO */    $rows_1_quantidade_artefato_4 = '2323';
/* NIVEL DE ESTRELAS */       $rows_1_nv_star_artefato_4    = '4';
/* NIVEL ARTEFATO */          $rows_1_nivel_artefato_4      = '12';
/* NOME DO CONJUNTO */        $rows_1_nome_conj_artefato_4  = '12';
/* IMAGEM ARTEFATO */         $rows_1_img_artefato_4        = 'assets/img/itens/artefatos/'.$rows_1_genero_artefato_4.'/'.$rows_1_nivel_artefato_4.'/teste.png';

                            /* === DADOS PARA COROA === */

/* NOME ARTEFATO */           $rows_1_nome_artefato_5       = '18';
/* GENERO ARTEFATO */         $rows_1_genero_artefato_5     = $text_tiara_de_logos;
/* BENEFICIO ARTEFATO */      $rows_1_beneficio_artefato_5  = '4';
/* QUANTIDADE BENEFICIO */    $rows_1_quantidade_artefato_5 = '232';
/* NIVEL DE ESTRELAS */       $rows_1_nv_star_artefato_5    = '3';
/* NIVEL ARTEFATO */          $rows_1_nivel_artefato_5      = '16';
/* NOME DO CONJUNTO */        $rows_1_nome_conj_artefato_5  = '11';
/* IMAGEM ARTEFATO */         $rows_1_img_artefato_5        = 'assets/img/itens/artefatos/'.$rows_1_genero_artefato_5.'/'.$rows_1_nivel_artefato_5.'/teste.png';






/* ===================== ==================================== =========================== */
/* ====================== DADOS ROWS 2 - BUILD DE 4 ESTRELAS ============================ */
/* ===================== ==================================== =========================== */

/* NOME DO CONJUNTO 1 */      $rows_2_nome_conjunto_1         = '#rows_2_nome_conjunto_1#';
/* DESCRIÇÃO 2 PEÇAS */       $rows_2_conjunto_1_2peca        = '#rows_2_conjunto_1_2peca#';
/* DESCRIÇÃO 4 PEÇAS */       $rows_2_conjunto_1_4peca        = '#rows_2_conjunto_1_4peca#';
/* NOME DO CONJUNTO 2 */      $rows_2_nome_conjunto_2         = '#rows_2_nome_conjunto_2#';
/* DESCRIÇÃO 2 PEÇAS */       $rows_2_conjunto_2_2peca        = '#rows_2_conjunto_2_2peca#';
/* DESCRIÇÃO 4 PEÇAS */       $rows_2_conjunto_2_4peca        = '#rows_2_conjunto_2_4peca#';
/* NIVEL DE ESTRELAS */       $rows_2_nv_estrelas             = '#rows_2_nv_estrelas#';

                            /* === DADOS PARA FLOR === */

/* IMAGEM ARTEFATO */         $rows_2_img_artefato_1        = 'assets/img/itens/artefatos/'.$rows_2_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_2_nome_artefato_1       = '#rows_2_nome_artefato_1#';
/* GENERO ARTEFATO */         $rows_2_genero_artefato_1     = '#rows_2_genero_artefato_1#';
/* BENEFICIO ARTEFATO */      $rows_2_beneficio_artefato_1  = '#rows_2_beneficio_artefato_1#';
/* QUANTIDADE BENEFICIO */    $rows_2_quantidade_artefato_1 = '#rows_2_quantidade_artefato_1#';
/* NIVEL ARTEFATO */          $rows_2_nivel_artefato_1      = '#rows_2_nivel_artefato_1#';
/* NOME DO CONJUNTO */        $rows_2_nome_conj_art_1       = '#rows_2_nome_conj_art_1#';

                            /* === DADOS PARA PENA === */

/* IMAGEM ARTEFATO */         $rows_2_img_artefato_2        = 'assets/img/itens/artefatos/'.$rows_2_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_2_nome_artefato_2       = '#rows_2_nome_artefato_2#';
/* GENERO ARTEFATO */         $rows_2_genero_artefato_2     = '#rows_2_genero_artefato_2#';
/* BENEFICIO ARTEFATO */      $rows_2_beneficio_artefato_2  = '#rows_2_beneficio_artefato_2#';
/* QUANTIDADE BENEFICIO */    $rows_2_quantidade_artefato_2 = '#rows_2_quantidade_artefato_2#';
/* NIVEL ARTEFATO */          $rows_2_nivel_artefato_2      = '#rows_2_nivel_artefato_2#';
/* NOME DO CONJUNTO */        $rows_2_nome_conj_art_2       = '#rows_2_nome_conj_art_2#';

                            /* === DADOS PARA AMPULHETA === */

/* IMAGEM ARTEFATO */         $rows_2_img_artefato_3        = 'assets/img/itens/artefatos/'.$rows_2_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_2_nome_artefato_3       = '#rows_2_nome_artefato_3#';
/* GENERO ARTEFATO */         $rows_2_genero_artefato_3     = '#rows_2_genero_artefato_3#';
/* BENEFICIO ARTEFATO */      $rows_2_beneficio_artefato_3  = '#rows_2_beneficio_artefato_3#';
/* QUANTIDADE BENEFICIO */    $rows_2_quantidade_artefato_3 = '#rows_2_quantidade_artefato_3#';
/* NIVEL ARTEFATO */          $rows_2_nivel_artefato_3      = '#rows_2_nivel_artefato_3#';
/* NOME DO CONJUNTO */        $rows_2_nome_conj_art_3       = '#rows_2_nome_conj_art_3#';

                            /* === DADOS PARA TAÇA === */

/* IMAGEM ARTEFATO */         $rows_2_img_artefato_4        = 'assets/img/itens/artefatos/'.$rows_2_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_2_nome_artefato_4       = '#rows_2_nome_artefato_4#';
/* GENERO ARTEFATO */         $rows_2_genero_artefato_4     = '#rows_2_genero_artefato_4#';
/* BENEFICIO ARTEFATO */      $rows_2_beneficio_artefato_4  = '#rows_2_beneficio_artefato_4#';
/* QUANTIDADE BENEFICIO */    $rows_2_quantidade_artefato_4 = '#rows_2_quantidade_artefato_4#';
/* NIVEL ARTEFATO */          $rows_2_nivel_artefato_4      = '#rows_2_nivel_artefato_4#';
/* NOME DO CONJUNTO */        $rows_2_nome_conj_art_4       = '#rows_2_nome_conj_art_4#';

                            /* === DADOS PARA COROA === */

/* IMAGEM ARTEFATO */         $rows_2_img_artefato_5        = 'assets/img/itens/artefatos/'.$rows_2_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_2_nome_artefato_5       = '#rows_2_nome_artefato_5#';
/* GENERO ARTEFATO */         $rows_2_genero_artefato_5     = '#rows_2_genero_artefato_5#';
/* BENEFICIO ARTEFATO */      $rows_2_beneficio_artefato_5  = '#rows_2_beneficio_artefato_5#';
/* QUANTIDADE BENEFICIO */    $rows_2_quantidade_artefato_5 = '#rows_2_quantidade_artefato_5#';
/* NIVEL ARTEFATO */          $rows_2_nivel_artefato_5      = '#rows_2_nivel_artefato_5#';
/* NOME DO CONJUNTO */        $rows_2_nome_conj_art_5       = '#rows_2_nome_conj_art_5#';



/* ===================== ==================================== =========================== */
/* ====================== DADOS ROWS 3 - BUILD DE 5 ESTRELAS ============================ */
/* ===================== ==================================== =========================== */

/* NOME DO CONJUNTO 1 */      $rows_3_nome_conjunto_1         = '#rows_3_nome_conjunto_1#';
/* DESCRIÇÃO 2 PEÇAS */       $rows_3_conjunto_1_2peca        = '#rows_3_conjunto_1_2peca#';
/* DESCRIÇÃO 4 PEÇAS */       $rows_3_conjunto_1_4peca        = '#rows_3_conjunto_1_4peca#';
/* NOME DO CONJUNTO 2 */      $rows_3_nome_conjunto_2         = '#rows_3_nome_conjunto_2#';
/* DESCRIÇÃO 2 PEÇAS */       $rows_3_conjunto_2_2peca        = '#rows_3_conjunto_2_2peca#';
/* DESCRIÇÃO 4 PEÇAS */       $rows_3_conjunto_2_4peca        = '#rows_3_conjunto_2_4peca#';
/* NIVEL DE ESTRELAS */       $rows_3_nv_estrelas             = '#rows_3_nv_estrelas#';

                            /* === DADOS PARA FLOR === */

/* IMAGEM ARTEFATO */         $rows_3_img_artefato_1        = 'assets/img/itens/artefatos/'.$rows_3_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_3_nome_artefato_1       = '#rows_3_nome_artefato_1#';
/* GENERO ARTEFATO */         $rows_3_genero_artefato_1     = '#rows_3_genero_artefato_1#';
/* BENEFICIO ARTEFATO */      $rows_3_beneficio_artefato_1  = '#rows_3_beneficio_artefato_1#';
/* QUANTIDADE BENEFICIO */    $rows_3_quantidade_artefato_1 = '#rows_3_quantidade_artefato_1#';
/* NIVEL ARTEFATO */          $rows_3_nivel_artefato_1      = '#rows_3_nivel_artefato_1#';
/* NOME DO CONJUNTO */        $rows_3_nome_conj_art_1       = '#rows_3_nome_conj_art_1#';

                            /* === DADOS PARA PENA === */

/* IMAGEM ARTEFATO */         $rows_3_img_artefato_2        = 'assets/img/itens/artefatos/'.$rows_3_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_3_nome_artefato_2       = '#rows_3_nome_artefato_2#';
/* GENERO ARTEFATO */         $rows_3_genero_artefato_2     = '#rows_3_genero_artefato_2#';
/* BENEFICIO ARTEFATO */      $rows_3_beneficio_artefato_2  = '#rows_3_beneficio_artefato_2#';
/* QUANTIDADE BENEFICIO */    $rows_3_quantidade_artefato_2 = '#rows_3_quantidade_artefato_2#';
/* NIVEL ARTEFATO */          $rows_3_nivel_artefato_2      = '#rows_3_nivel_artefato_2#';
/* NOME DO CONJUNTO */        $rows_3_nome_conj_art_2       = '#rows_3_nome_conj_art_2#';

                            /* === DADOS PARA AMPULHETA === */

/* IMAGEM ARTEFATO */         $rows_3_img_artefato_3        = 'assets/img/itens/artefatos/'.$rows_3_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_3_nome_artefato_3       = '#rows_3_nome_artefato_3#';
/* GENERO ARTEFATO */         $rows_3_genero_artefato_3     = '#rows_3_genero_artefato_3#';
/* BENEFICIO ARTEFATO */      $rows_3_beneficio_artefato_3  = '#rows_3_beneficio_artefato_3#';
/* QUANTIDADE BENEFICIO */    $rows_3_quantidade_artefato_3 = '#rows_3_quantidade_artefato_3#';
/* NIVEL ARTEFATO */          $rows_3_nivel_artefato_3      = '#rows_3_nivel_artefato_3#';
/* NOME DO CONJUNTO */        $rows_3_nome_conj_art_3       = '#rows_3_nome_conj_art_3#';

                            /* === DADOS PARA TAÇA === */

/* IMAGEM ARTEFATO */         $rows_3_img_artefato_4        = 'assets/img/itens/artefatos/'.$rows_3_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_3_nome_artefato_4       = '#rows_3_nome_artefato_4#';
/* GENERO ARTEFATO */         $rows_3_genero_artefato_4     = '#rows_3_genero_artefato_4#';
/* BENEFICIO ARTEFATO */      $rows_3_beneficio_artefato_4  = '#rows_3_beneficio_artefato_4#';
/* QUANTIDADE BENEFICIO */    $rows_3_quantidade_artefato_4 = '#rows_3_quantidade_artefato_4#';
/* NIVEL ARTEFATO */          $rows_3_nivel_artefato_4      = '#rows_3_nivel_artefato_4#';
/* NOME DO CONJUNTO */        $rows_3_nome_conj_art_4       = '#rows_3_nome_conj_art_4#';

                            /* === DADOS PARA COROA === */

/* IMAGEM ARTEFATO */         $rows_3_img_artefato_5        = 'assets/img/itens/artefatos/'.$rows_3_nv_estrelas .'/teste.png';
/* NOME ARTEFATO */           $rows_3_nome_artefato_5       = '#rows_3_nome_artefato_5#';
/* GENERO ARTEFATO */         $rows_3_genero_artefato_5     = '#rows_3_genero_artefato_5#';
/* BENEFICIO ARTEFATO */      $rows_3_beneficio_artefato_5  = '#rows_3_beneficio_artefato_5#';
/* QUANTIDADE BENEFICIO */    $rows_3_quantidade_artefato_5 = '#rows_3_quantidade_artefato_5#';
/* NIVEL ARTEFATO */          $rows_3_nivel_artefato_5      = '#rows_3_nivel_artefato_5#';
/* NOME DO CONJUNTO */        $rows_3_nome_conj_art_5       = '#rows_3_nome_conj_art_5#';




/* ===================== ==================================== =========================== */
/* ================================== DADOS ARMAS 1 - =================================== */
/* ===================== ==================================== =========================== */


/* NOME ARMA  */                 $arma_1_nome              = 'Arco';
/* GENERO ARMA  */               $arma_1_genero            = 'Arco';
/* IMAGEM ARMA  */               $arma_1_img               = 'assets/img/armas/'.$arma_1_genero.'/'.$arma_1_nome  .'.png';

/* BENEFICIO 1 ARMA */           $arma_1_beneficio_1       = 'ATK';
/* QUANTIDADE  BENEFICIO */      $arma_1_quantidade_1      = '454';
/* BENEFICIO 2 ARMA  */          $arma_1_beneficio_2       = 'Bônus de dano físico';
/* QUANTIDADE BENEFICIO */       $arma_1_quantidade_2      = '45.45%';

/* NIVEL DE ESTRELAS */          $arma_1_nv_estrelas       = '5';
/* NIVEL ARMA  */                $arma_1_nivel             = '90';
/* NIVEL REFINAMENTO */          $arma_1_rank_refinamento  = '2';
/* ARMA 1 TITULO DESCRIÇÃO */    $arma_1_titulo            = '454545';
/* ARMA 1 DESCRIÇÃO */           $arma_1_descricao         = '45454';

/* ===================== ==================================== =========================== */
/* ================================== DADOS ARMAS 2 - =================================== */
/* ===================== ==================================== =========================== */

/* NOME ARMA  */                 $arma_2_nome              = 'Arco';
/* GENERO ARMA  */               $arma_2_genero            = 'Arco';
/* IMAGEM ARMA  */               $arma_2_img               = 'assets/img/armas/'.$arma_2_genero.'/'.$arma_2_nome  .'.png';

/* BENEFICIO 1 ARMA  */          $arma_2_beneficio_1       = 'ATK';
/* QUANTIDADE  BENEFICIO */      $arma_2_quantidade_1      = '454';
/* BENEFICIO 2 ARMA  */          $arma_2_beneficio_2       = 'ATK';
/* QUANTIDADE BENEFICIO */       $arma_2_quantidade_2      = '45.45%';

/* NIVEL DE ESTRELAS */          $arma_2_nv_estrelas       = '5';
/* NIVEL ARMA   */               $arma_2_nivel             = '90';
/* NIVEL REFINAMENTO */          $arma_2_rank_refinamento  = '1';
/* ARMA 1 TITULO DESCRIÇÃO */    $arma_2_titulo            = '454545';
/* ARMA 1 DESCRIÇÃO */           $arma_2_descricao         = '4545454';
 

/* ===================== ==================================== =========================== */
/* ================================== DADOS ARMAS 3 - =================================== */
/* ===================== ==================================== =========================== */

/* NOME ARMA  */                 $arma_3_nome              = '#arma_3_nome#';
/* GENERO ARMA  */               $arma_3_genero            = '#arma_3_genero#';
/* IMAGEM ARMA  */               $arma_3_img               = 'assets/img/armas/'.$arma_3_genero.'/'.$arma_3_nome  .'.png';

/* BENEFICIO 1 ARMA  */          $arma_3_beneficio_1       = '#arma_3_beneficio_1#';
/* QUANTIDADE  BENEFICIO */      $arma_3_quantidade_1      = '#arma_3_quantidade_1#';
/* BENEFICIO 2 ARMA  */          $arma_3_beneficio_2       = '#arma_3_beneficio_2#';
/* QUANTIDADE BENEFICIO */       $arma_3_quantidade_2      = '#arma_3_quantidade_2#%';

/* NIVEL DE ESTRELAS */          $arma_3_nv_estrelas       = '#arma_3_nv_estrelas#';
/* NIVEL ARMA   */               $arma_3_nivel             = '#arma_3_nivel#';
/* NIVEL REFINAMENTO */          $arma_3_rank_refinamento  = '#arma_3_rank_refinamento#';
/* ARMA 1 TITULO DESCRIÇÃO */    $arma_3_titulo            = '#arma_3_titulo#';
/* ARMA 1 DESCRIÇÃO */           $arma_3_descricao         = '#arma_3_descricao#';

/* ===================== ==================================== =========================== */
   
$star = array(
    0=>'<i class="fas fa-star"></i>',
    1=>'<i class="fas fa-star"></i>',
    2=>'<i class="fas fa-star"></i>',
    3=>'<i class="fas fa-star"></i>',
    4=>'<i class="fas fa-star"></i>');
?>


<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'assets/include/css_meta.php'; ?>
</head>

<body class="fadeIn" style="overflow:hidden;">
    <div is="keypress" class="bg vh no_blur" style="background-image: url(<?php echo $bg_elemento ?>)">
        <?php include 'assets/include/bg_animated.php'; ?>
            <div class="shadow"> 
                <!--------TOP BAR-------->
                <?php include 'assets/include/template/top_bar.php'; ?>
                    <div class="container-2 ">       
                        <div class="grid-2">
                            <!--------GRID 1 - ESQUERDA-------->
                            <?php include 'assets/include/template/grid1_esquerda.php'; ?>
                            <!--------GRID 2 - CENTRO -------->
                            <?php include 'assets/include/template/grid2_centro.php'; ?>
                            <!--------GRID 3 - DIREITA -------->
                            <?php include 'assets/include/template/grid3_direita.php'; ?>
                        </div>    
                    </div>
            </div>
    </div>
    <!--------MODALS-------->
    <?php include 'assets/include/modals.php'; ?>
</body>


    <!--------SCRIPTS------->
    <?php include 'assets/include/js.php'; ?>

</html>