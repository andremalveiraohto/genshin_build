<div id="grid_right-2-3" class="box-7 slidein2 dp_n">
    <div class="box-7-1">


        <?php if (empty($arma[0]['nome']) or $arma[0]['nome'] == '0' or $arma[0]['nome'] == '') {
                echo '';
            }else{ 
                echo' 
                <div id="arma_1_info" class="arma_info slidein2 ">
                    <h1>'.$arma[0]['nome'].'</h1>
                    <h4>'.$arma[0]['tipo'].'</h4>
                    <div class="about_artefato">
                        <h2>'.$arma[0]['atributo_1'].'</h2><h3>'.$arma[0]['atributo_1_valor'].'</h3>
                    </div>
                    <div class="about_artefato">
                        <h2>'.$arma[0]['atributo_2'].'</h2><h3>'.$arma[0]['atributo_2_valor'].'</h3>
                    </div>',
                    '<div class="stars">';
                    for ($i=0; $i < $arma[0]['star']; $i++) {echo '<i class="fas fa-star"></i>';}
                    echo'</div><div class="nv_armas"><h2>Nv.'.$arma[0]['nivel'].'<strong>/'.$arma[0]['nivel'].'</strong></h2></div>';
                echo'</div>';
                }  
        ?>

        <?php if (empty($arma[1]['nome']) or $arma[1]['nome'] == '0' or $arma[1]['nome'] == '') {
                echo '';
            }else{ 
                echo' 
                <div id="arma_2_info" class="arma_info slidein2 dp_n ">
                    <h1>'.$arma[1]['nome'].'</h1>
                    <h4>'.$arma[1]['tipo'].'</h4>
                    <div class="about_artefato">
                        <h2>'.$arma[1]['atributo_1'].'</h2><h3>'.$arma[1]['atributo_1_valor'].'</h3>
                    </div>
                    <div class="about_artefato">
                        <h2>'.$arma[1]['atributo_2'].'</h2><h3>'.$arma[1]['atributo_2_valor'].'</h3>
                    </div>',
                    '<div class="stars">';
                    for ($i=0; $i < $arma[1]['star']; $i++) {echo '<i class="fas fa-star"></i>';}
                    echo'</div><div class="nv_armas"><h2>Nv.'.$arma[1]['nivel'].'<strong>/'.$arma[1]['nivel'].'</strong></h2></div>';
                echo'</div>';
                }  
        ?>

        <?php if (empty($arma[2]['nome']) or $arma[2]['nome'] == '0' or $arma[2]['nome'] == '') {
                echo '';
            }else{
                echo' 
                <div id="arma_3_info" class="arma_info slidein2 dp_n ">
                    <h1>'.$arma[2]['nome'].'</h1>
                    <h4>'.$arma[2]['tipo'].'</h4>
                    <div class="about_artefato">
                        <h2>'.$arma[2]['atributo_1'].'</h2><h3>'.$arma[2]['atributo_1_valor'].'</h3>
                    </div>
                    <div class="about_artefato">
                        <h2>'.$arma[2]['atributo_2'].'</h2><h3>'.$arma[2]['atributo_2_valor'].'</h3>
                    </div>',
                    '<div class="stars">';
                    for ($i=0; $i < $arma[2]['star']; $i++) {echo '<i class="fas fa-star"></i>';}
                    echo'</div><div class="nv_armas"><h2>Nv.'.$arma[2]['nivel'].'<strong>/'.$arma[2]['nivel'].'</strong></h2></div>';
                echo'</div>';} 
        ?>



    </div>
    <div class="box-7-2">


        <?php if (empty($arma[0]['nome']) or $arma[0]['nome'] == '0' or $arma[0]['nome'] == '') {
                echo '';
            }else{
                echo' 
            <div id="arma_1_descri" class="arma_descri slidein2">
                <h2>Rank de Refinamento '.$a1_refina.'</h2>
                <div class="arma_1_titulo">
                    <h2>'.$arma[0]['titulo_habilidade'].'</h2>
                    <div class="descri_refina 1">
                        <h2>&nbsp;&bull; '.$arma[0]['refina_'.$a1_refina].'</h2>
                    </div>

                </div>';
            echo'</div>';} 
        ?>

        <?php if (empty($arma[1]['nome']) or $arma[1]['nome'] == '0' or $arma[1]['nome'] == '') {
                echo '';
            }else{
                echo' 
            <div id="arma_2_descri" class="arma_descri slidein2 dp_n">
                <h2>Rank de Refinamento '.$a2_refina.'</h2>
                <div class="arma_1_titulo">
                    <h2>'.$arma[1]['titulo_habilidade'].'</h2>
                    <div class="descri_refina 1">
                        <h2>&nbsp;&bull; '.$arma[1]['refina_'.$a2_refina].'</h2>
                    </div>

                </div>';
            echo'</div>';} 
        ?>
        
        <?php if (empty($arma[2]['nome']) or $arma[2]['nome'] == '0' or $arma[2]['nome'] == '') {
                echo '';
            }else{
                echo' 
            <div id="arma_3_descri" class="arma_descri slidein2 dp_n">
                <h2>Rank de Refinamento '.$a3_refina.'</h2>
                <div class="arma_1_titulo">
                    <h2>'.$arma[2]['titulo_habilidade'].'</h2>
                    <div class="descri_refina 1">
                        <i class="fas fa-circle"></i>
                        <h2>&nbsp;&bull; '.['refina_'.$a3_refina].'</h2>
                    </div>

                </div>';
            echo'</div>';} 
        ?>
        


    </div>
    
</div>