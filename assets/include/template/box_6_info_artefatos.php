<div id="grid_right-2-3" class="box-6 slidein2 dp_n">
    <div class="box-6-1">
            <!-- ROWS 1 -->
            <?php if (empty($flor[0]['flor']) or $flor[0]['flor'] == '0' or $flor[0]['flor'] == '') {
                     echo'';
                   } else {
                    
                    if (empty($flor[0]['flor']) or $flor[0]['flor'] == '0' or $flor[0]['flor'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_1_artefato_1" class="infoarti slidein2">
                        <h1>'.$flor[0]['flor'].'</h1>
                        <h4>'.$text_flor_da_vida.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row1_flor_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row1_flor_attr) {
                            echo $attribute[$row1_flor_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row1_flor_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$flor[0][$row1_flor_star.'star'].'</h2></div>
                        <div class="subsAttr">';
                        if(!empty($row1_flor_subattr1) or $row1_flor_subattr1 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_flor_subattr1.'</h2>
                                </div>';
                        }
                        if(!empty($row1_flor_subattr2) or $row1_flor_subattr2 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_flor_subattr2.'</h2>
                                </div>';
                        }
                        if(!empty($row1_flor_subattr3) or $row1_flor_subattr3 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_flor_subattr3.'</h2>
                                </div>';
                        }
                        if(!empty($row1_flor_subattr4) or $row1_flor_subattr4 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_flor_subattr4.'</h2>
                                </div>';
                        }

                        echo'</div>

                        <div class="row_1nome_conj_art_1"><h2>'.$flor[0]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($pena[0]['pena']) or $pena[0]['pena'] == '0' or $pena[0]['pena'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_1_artefato_2" class="infoarti slidein2 dp_n">
                        <h1>'.$pena[0]['pena'].'</h1>
                        <h4>'.$text_pluma_da_morte.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row1_pena_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row1_pena_attr) {
                            echo $attribute[$row1_pena_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row1_pena_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$pena[0][$row1_pena_star.'star'].'</h2></div>
                        <div class="subsAttr">';
                        if(!empty($row1_pena_subattr1) or $row1_pena_subattr1 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_pena_subattr1.'</h2>
                                </div>';
                        }
                        if(!empty($row1_pena_subattr2) or $row1_pena_subattr2 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_pena_subattr2.'</h2>
                                </div>';
                        }
                        if(!empty($row1_pena_subattr3) or $row1_pena_subattr3 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_pena_subattr3.'</h2>
                                </div>';
                        }
                        if(!empty($row1_pena_subattr4) or $row1_pena_subattr4 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_pena_subattr4.'</h2>
                                </div>';
                        }

                        echo'</div>
                        <div class="row_1nome_conj_art_1"><h2>'.$pena[0]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($ampulheta[0]['ampulheta']) or $ampulheta[0]['ampulheta'] == '0' or $ampulheta[0]['ampulheta'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_1_artefato_3" class="infoarti slidein2 dp_n">
                        <h1>'.$ampulheta[0]['ampulheta'].'</h1>
                        <h4>'.$text_areia_do_tempo.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row1_ampulheta_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row1_ampulheta_attr) {
                            echo $attribute[$row1_ampulheta_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row1_ampulheta_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$ampulheta[0][$row1_ampulheta_star.'star'].'</h2></div>
                        <div class="subsAttr">';
                        if(!empty($row1_ampulheta_subattr1) or $row1_ampulheta_subattr1 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_ampulheta_subattr1.'</h2>
                                </div>';
                        }
                        if(!empty($row1_ampulheta_subattr2) or $row1_ampulheta_subattr2 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_ampulheta_subattr2.'</h2>
                                </div>';
                        }
                        if(!empty($row1_ampulheta_subattr3) or $row1_ampulheta_subattr3 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_ampulheta_subattr3.'</h2>
                                </div>';
                        }
                        if(!empty($row1_ampulheta_subattr4) or $row1_ampulheta_subattr4 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_ampulheta_subattr4.'</h2>
                                </div>';
                        }

                        echo'</div>
                        <div class="row_1nome_conj_art_1"><h2>'.$ampulheta[0]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($taça[0]['taça']) or $taça[0]['taça'] == '0' or $taça[0]['taça'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_1_artefato_4" class="infoarti slidein2 dp_n">
                        <h1>'.$taça[0]['taça'].'</h1>
                        <h4>'.$text_cálice_de_erátema.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row1_taça_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row1_taça_attr) {
                            echo $attribute[$row1_taça_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row1_taça_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$taça[0][$row1_taça_star.'star'].'</h2></div>
                        <div class="subsAttr">';
                        if(!empty($row1_taça_subattr1) or $row1_taça_subattr1 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_taça_subattr1.'</h2>
                                </div>';
                        }
                        if(!empty($row1_taça_subattr2) or $row1_taça_subattr2 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_taça_subattr2.'</h2>
                                </div>';
                        }
                        if(!empty($row1_taça_subattr3) or $row1_taça_subattr3 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_taça_subattr3.'</h2>
                                </div>';
                        }
                        if(!empty($row1_taça_subattr4) or $row1_taça_subattr4 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_taça_subattr4.'</h2>
                                </div>';
                        }

                        echo'</div>
                        <div class="row_1nome_conj_art_1"><h2>'.$taça[0]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($coroa[0]['coroa']) or $coroa[0]['coroa'] == '0' or $coroa[0]['coroa'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_1_artefato_5" class="infoarti slidein2 dp_n">
                        <h1>'.$coroa[0]['coroa'].'</h1>
                        <h4>'.$text_tiara_de_logos.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row1_coroa_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row1_coroa_attr) {
                            echo $attribute[$row1_coroa_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row1_coroa_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$coroa[0][$row1_coroa_star.'star'].'</h2></div>
                        <div class="subsAttr">';
                        if(!empty($row1_coroa_subattr1) or $row1_coroa_subattr1 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_coroa_subattr1.'</h2>
                                </div>';
                        }
                        if(!empty($row1_coroa_subattr2) or $row1_coroa_subattr2 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_coroa_subattr2.'</h2>
                                </div>';
                        }
                        if(!empty($row1_coroa_subattr3) or $row1_coroa_subattr3 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_coroa_subattr3.'</h2>
                                </div>';
                        }
                        if(!empty($row1_coroa_subattr4) or $row1_coroa_subattr4 == '0'){
                            echo'<div class="sub_attr">
                                    <span>&bull; </span><h2>'.$row1_coroa_subattr4.'</h2>
                                </div>';
                        }

                        echo'</div>
                        <div class="row_1nome_conj_art_1"><h2>'.$coroa[0]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    
            } ?>

            <!-- ROWS 2 -->

            <?php if (empty($flor[1]['flor']) or $flor[1]['flor'] == '0' or $flor[1]['flor'] == '') {
                     echo'';
                   } else {
                    
                    if (empty($flor[1]['flor']) or $flor[1]['flor'] == '0' or $flor[1]['flor'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_2_artefato_1" class="infoarti slidein2 dp_n">
                        <h1>'.$flor[1]['flor'].'</h1>
                        <h4>'.$text_flor_da_vida.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row2_flor_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row2_flor_attr) {
                            echo $attribute[$row2_flor_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row2_flor_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$flor[1][$row2_flor_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$flor[1]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($pena[1]['pena']) or $pena[1]['pena'] == '0' or $pena[1]['pena'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_2_artefato_2" class="infoarti slidein2 dp_n">
                        <h1>'.$pena[1]['pena'].'</h1>
                        <h4>'.$text_pluma_da_morte.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row2_pena_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row2_pena_attr) {
                            echo $attribute[$row2_pena_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row2_pena_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$pena[1][$row2_pena_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$pena[1]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($ampulheta[1]['ampulheta']) or $ampulheta[1]['ampulheta'] == '0' or $ampulheta[1]['ampulheta'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_2_artefato_3" class="infoarti slidein2 dp_n">
                        <h1>'.$ampulheta[1]['ampulheta'].'</h1>
                        <h4>'.$text_areia_do_tempo.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row2_ampulheta_attr.'</h2><h3>';

                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row2_ampulheta_attr) {
                           
                            echo $attribute[$row2_ampulheta_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row2_ampulheta_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$ampulheta[1][$row2_ampulheta_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$ampulheta[1]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($taça[1]['taça']) or $taça[1]['taça'] == '0' or $taça[1]['taça'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_2_artefato_4" class="infoarti slidein2 dp_n">
                        <h1>'.$taça[1]['taça'].'</h1>
                        <h4>'.$text_cálice_de_erátema.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row2_taça_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row2_taça_attr) {
                            echo $attribute[$row2_taça_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row2_taça_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$taça[1][$row2_taça_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$taça[1]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($coroa[1]['coroa']) or $coroa[1]['coroa'] == '0' or $coroa[1]['coroa'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_2_artefato_5" class="infoarti slidein2 dp_n">
                        <h1>'.$coroa[1]['coroa'].'</h1>
                        <h4>'.$text_tiara_de_logos.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row2_coroa_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row2_coroa_attr) {
                            echo $attribute[$row2_coroa_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row2_coroa_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$coroa[1][$row2_coroa_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$coroa[1]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    
            } ?>

            <!-- ROWS 3 -->
            <?php if (empty($flor[2]['flor']) or $flor[2]['flor'] == '0' or $flor[2]['flor'] == '') {
                     echo'';
                   } else {
                    
                    if (empty($flor[2]['flor']) or $flor[2]['flor'] == '0' or $flor[2]['flor'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_3_artefato_1" class="infoarti slidein2 dp_n">
                        <h1>'.$flor[2]['flor'].'</h1>
                        <h4>'.$text_flor_da_vida.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row3_flor_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row3_flor_attr) {
                            echo $attribute[$row3_flor_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row3_flor_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$flor[2][$row3_flor_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$flor[2]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($pena[2]['pena']) or $pena[2]['pena'] == '0' or $pena[2]['pena'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_3_artefato_2" class="infoarti slidein2 dp_n">
                        <h1>'.$pena[2]['pena'].'</h1>
                        <h4>'.$text_pluma_da_morte.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row3_pena_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row3_pena_attr) {
                            echo $attribute[$row3_pena_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row3_pena_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$pena[2][$row3_pena_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$pena[2]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($ampulheta[2]['ampulheta']) or $ampulheta[2]['ampulheta'] == '0' or $ampulheta[2]['ampulheta'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_3_artefato_3" class="infoarti slidein2 dp_n">
                        <h1>'.$ampulheta[2]['ampulheta'].'</h1>
                        <h4>'.$text_areia_do_tempo.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row3_ampulheta_attr.'</h2><h3>';

                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row3_ampulheta_attr) {
                           
                            echo $attribute[$row3_ampulheta_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row3_ampulheta_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$ampulheta[2][$row3_ampulheta_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$ampulheta[2]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($taça[2]['taça']) or $taça[2]['taça'] == '0' or $taça[2]['taça'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_3_artefato_4" class="infoarti slidein2 dp_n">
                        <h1>'.$taça[2]['taça'].'</h1>
                        <h4>'.$text_cálice_de_erátema.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row3_taça_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row3_taça_attr) {
                            echo $attribute[$row3_taça_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row3_taça_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$taça[2][$row3_taça_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$taça[2]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    if (empty($coroa[2]['coroa']) or $coroa[2]['coroa'] == '0' or $coroa[2]['coroa'] == '') {
                        echo'';
                    }else{ echo'
                    <div id="rows_3_artefato_5" class="infoarti slidein2 dp_n">
                        <h1>'.$coroa[2]['coroa'].'</h1>
                        <h4>'.$text_tiara_de_logos.'</h4>
                        <div class="about_artefato">
                        <h2>'.$row3_coroa_attr.'</h2><h3>';
                            foreach($attributes as $attribute){
                            if($attribute['attribute'] == $row3_coroa_attr) {
                            echo $attribute[$row3_coroa_star];}}
                        echo'</h3></div>';
                        echo'<div class="stars">';
                        for ($i=0; $i < $row3_coroa_star; $i++) {echo '<i class="fas fa-star"></i>';};                       
                        echo'</div>  
                        <div class="nv_artefato"><h2>+'.$coroa[2][$row3_coroa_star.'star'].'</h2></div>
                        <div class="row_1nome_conj_art_1"><h2>'.$coroa[2]['conjunto'].'</h2></div>
                    </div>'; 
                    } 

                    
            } ?>

        
    </div>


    <div class="box-6-2">

        <?php if (empty($flor[0]['flor']) or $flor[0]['flor'] == '0' or $flor[0]['flor'] == '') {
                echo'';
            } else { 
            echo'<div id="rows_1_conjunto" class="infoconju slidein2">
                <h2>'.$text_bonus_conjunto_primeiro.'</h2>';

                 /* ---------------------------------- */
                    if(!empty($row1_c1_2peças)){ 
                        echo'<div class="descri_bord"><h2>'.$row1_c1.'</h2>';
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row1_c1_2peças.'</h2>
                        </div>';
                    }else{}

                        /* ---------------------- */
                    if(!empty($row1_c1_4peças)){
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row1_c1_4peças.'</h2>
                        </div>';
                    }else{}
                    
                echo'</div>';
                    /* ---------------------------------- */

                    /* ---------------------------------- */
                    if(!empty($row1_c2_2peças)){ 
                        echo'<div class="descri_bord"><h2>'.$row1_c2.'</h2>';
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row1_c2_2peças.'</h2>
                        </div>';
                    }else{}

                    /* ---------------------- */
                    if(!empty($row1_c2_4peças)){
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row1_c2_4peças.'</h2>
                        </div>';
                    }else{}

                echo'</div>';
                    /* ---------------------------------- */
                    
            echo'</div>';} 
        ?>

        <?php if (empty($flor[1]['flor']) or $flor[1]['flor'] == '0' or $flor[1]['flor'] == '') {
                echo'';
            } else { 
            echo'<div id="rows_2_conjunto" class="infoconju slidein2 dp_n">
                <h2>'.$text_bonus_conjunto_segundo.'</h2>';

                    /* ---------------------------------- */
                 /* ---------------------------------- */
                    if(!empty($row2_c1_2peças)){ 
                echo'<div class="descri_bord"><h2>'.$row2_c1.'</h2>';
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row2_c1_2peças.'</h2>
                        </div>';
                    }else{}

                        /* ---------------------- */
                    if(!empty($row2_c1_4peças)){
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row2_c1_4peças.'</h2>
                        </div>';
                    }else{}
                    
                echo'</div>';
                    /* ---------------------------------- */

                    /* ---------------------------------- */
                    if(!empty($row2_c2_2peças)){ 
                echo'<div class="descri_bord"><h2>'.$row2_c2.'</h2>';
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row2_c2_2peças.'</h2>
                        </div>';
                    }else{}

                    /* ---------------------- */
                    if(!empty($row2_c2_4peças)){
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row2_c2_4peças.'</h2>
                        </div>';
                    }else{}

                echo'</div>';
                    /* ---------------------------------- */
                    
            echo'</div>';} 
        ?>

        <?php if (empty($flor[2]['flor']) or $flor[2]['flor'] == '0' or $flor[2]['flor'] == '') {
                echo'';
            } else { 
            echo'<div id="rows_3_conjunto" class="infoconju slidein2 dp_n">
                <h2>'.$text_bonus_conjunto_segundo.'</h2>';

                    /* ---------------------------------- */
                 /* ---------------------------------- */
                    if(!empty($row3_c1_2peças)){ 
                echo'<div class="descri_bord"><h2>'.$row3_c1.'</h2>';
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row3_c1_2peças.'</h2>
                        </div>';
                    }else{}

                        /* ---------------------- */
                    if(!empty($row3_c1_4peças)){
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row3_c1_4peças.'</h2>
                        </div>';
                    }else{}
                    
                echo'</div>';
                    /* ---------------------------------- */

                    /* ---------------------------------- */
                    if(!empty($row3_c2_2peças)){ 
                echo'<div class="descri_bord"><h2>'.$row3_c2.'</h2>';
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row3_c2_2peças.'</h2>
                        </div>';
                    }else{}

                    /* ---------------------- */
                    if(!empty($row3_c2_4peças)){
                        echo'<div class="descri_conjunto 1 check">
                            <i class="fas fa-check-circle"></i>
                            <h2>'.$row3_c2_4peças.'</h2>
                        </div>';
                    }else{}

                echo'</div>';
                    /* ---------------------------------- */
                    
            echo'</div>';} 
        ?>
        

        
    </div>
    
</div>

