<?php 

$nome_personagem  = $url[0];
include 'assets/include/pages/personagens/table.php';

?>


<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'assets/include/css_meta.php'; ?>
    <title><?php echo preg_replace('/\B[A-Z]/', ' $0', $about_personagem['nome']); echo' '; echo$name_meta[0]['text']?> | Guia de Personagem</title>
</head>

<body class="fadeIn" style="overflow:hidden;">
<div id="loading"><div class="box"><div class="spinner"></div></div></div>
    <div id="bodyTeiner" class="bg vh no_blur" style="background-image: url(<?php echo'assets/img/elements/'.strtolower($about_personagem['elemento']).'/'.$about_personagem['elemento'].'_bg.png' ?>)">
        <div id="bg_animation"></div>
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
    <script>window.onload = function(){if(block_Aud == true){open_persona.play()}}</script>

</html>

