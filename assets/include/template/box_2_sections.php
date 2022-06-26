<div class="box-2">
    <!------ SECTION ARMAS ------>
    <div id="armas" class="fadeIn_box2 dp_n">
        <div class="text_recomendado space_bottom"><h2>
            <?php 
                if (empty($arma[0]['nome']) or $arma[0]['nome'] == '0' or $arma[0]['nome'] == '') {     
                } else { echo $text_armas_recomendadas; }
            ?>
        </h2></div>
        <section class="menu__wrapper">
            <?php if (empty($arma[0]['nome']) or $arma[0]['nome'] == '0' or $arma[0]['nome'] == '') {
                echo'<div class="text_recomendado"><br><br><h2>'.$text_nenhum_arma.'</h2></div>';
                }else{ 
                echo'<div class="rows_artefatos row_1">';
                echo'<div class="weapons row1_arma_1"><img class="img_border_active" src="assets/img/itens/armas/'.strtolower($arma[0]['tipo']).'/'.$arma[0]['nome'].'.png" alt=""><div class="img_border img_active"></div></div>'; 
                if (empty($arma[1]['nome']) or $arma[1]['nome'] == '0' or $arma[1]['nome'] == '') {echo '';
                }else{ echo'<div class="weapons row1_arma_2"><img src="assets/img/itens/armas/'.$arma[1]['tipo'].'/'.strtolower($arma[1]['nome']).'.png" alt=""><div class="img_border"></div></div>';}
                
                if (empty($arma[2]['nome']) or $arma[2]['nome'] == '0' or $arma[2]['nome'] == '') {echo '';
                }else{ echo'<div class="weapons row1_arma_3"><img src="assets/img/itens/armas/'.$arma[1]['tipo'].'/'.strtolower($arma[1]['nome']).'.png" alt=""><div class="img_border"></div></div>';};
                echo '</div>';}
            ?>
        </section>
    </div>

    <!------ SECTION ARTEFATOS ------>
    <div id="artefatos" class="fadeIn_box2 dp_n">
        <div class="text_recomendado"><h2>
            <?php 
                if (empty($flor[0]['flor']) or $flor[0]['flor'] == '0' or $flor[0]['flor'] == '') {     
                } else { echo $text_artefatos_recomendados; }
            ?></h2>
        </div>
        <div class="artefatos">
            <div class="menu__tabs">
                <li id="flor" class="flor ">                  <a class="border_active"></a></li>
                <li id="pena" class="pena">                   <a class="border_active"></a></li>
                <li id="ampulheta" class="ampulheta">         <a class="border_active"></a></li>
                <li id="taca" class="taca">                   <a class="border_active"></a></li>
                <li id="coroa" class="coroa">                 <a class="border_active"></a></li>
            </div>
            <section class="menu__wrapper">
            
                <?php if (empty($flor[0]['flor']) or $flor[0]['flor'] == '0' or $flor[0]['flor'] == '') {
                        echo'<div class="text_recomendado"><br><br><h2>'.$text_nenhum_set.'</h2></div>';
                    } else {
                        echo'<div class="rows_artefatos row_1">';
                            
                            if (empty($flor[0]['flor']) or $flor[0]['flor'] == '0' or $flor[0]['flor'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row1_flor1">
                                    <div class="nv_artefato_img nv_active"><h2>+'.$flor[0][$row1_flor_star.'star'].'</h2></div>
                                    <img class="img_border_active" src="assets/img/itens/artefatos/conjunto/'.$flor[0]['conjunto'].'/'.$row1_flor_star.'_estrelas/'.$flor[0]['flor'].'.png"
                                    alt="Artefato '.$flor[0]['flor'].'">
                                    <div class="img_border img_active"></div>
                                </div>';
                            }

                            if (empty($pena[0]['pena']) or $pena[0]['pena'] == '0' or $pena[0]['pena'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row1_pena2">
                                    <div class="nv_artefato_img"><h2>+'.$pena[0][$row1_pena_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$pena[0]['conjunto'].'/'.$row1_pena_star.'_estrelas/'.$pena[0]['pena'].'.png" 
                                    alt="Artefato '.$pena[0]['pena'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }

                            if (empty($ampulheta[0]['ampulheta']) or $ampulheta[0]['ampulheta'] == '0' or $ampulheta[0]['ampulheta'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row1_ampu3">
                                    <div class="nv_artefato_img"><h2>+'.$ampulheta[0][$row1_ampulheta_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$ampulheta[0]['conjunto'].'/'.$row1_ampulheta_star.'_estrelas/'.$ampulheta[0]['ampulheta'].'.png"
                                    alt="Artefato '.$ampulheta[0]['ampulheta'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }

                            if (empty($taça[0]['taça']) or $taça[0]['taça'] == '0' or $taça[0]['taça'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row1_taca4">
                                    <div class="nv_artefato_img"><h2>+'.$taça[0][$row1_taça_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$taça[0]['conjunto'].'/'.$row1_taça_star.'_estrelas/'.$taça[0]['taça'].'.png" 
                                    alt="Artefato '.$taça[0]['taça'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }
                                
                            if (empty($coroa[0]['coroa']) or $coroa[0]['coroa'] == '0' or $coroa[0]['coroa'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row1_coroa5">
                                    <div class="nv_artefato_img"><h2>+'.$coroa[0][$row1_coroa_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$coroa[0]['conjunto'].'/'.$row1_coroa_star.'_estrelas/'.$coroa[0]['coroa'].'.png"
                                    alt="Artefato '.$coroa[0]['coroa'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }
                        echo'</div>'; 
                        }
                ?>

                <?php if (empty($flor[1]['flor']) or $flor[1]['flor'] == '0' or $flor[1]['flor'] == '') {
                        echo'';
                    } else {
                        echo'<div class="rows_artefatos row_2">';
                            
                            if (empty($flor[1]['flor']) or $flor[1]['flor'] == '0' or $flor[1]['flor'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row2_flor1">
                                    <div class="nv_artefato_img"><h2>+'.$flor[1][$row2_flor_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$flor[1]['conjunto'].'/'.$row2_flor_star.'_estrelas/'.$flor[1]['flor'].'.png"
                                    alt="Artefato '.$flor[1]['flor'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }

                            if (empty($pena[1]['pena']) or $pena[1]['pena'] == '0' or $pena[1]['pena'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row2_pena2">
                                    <div class="nv_artefato_img"><h2>+'.$pena[1][$row2_pena_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$pena[1]['conjunto'].'/'.$row2_pena_star.'_estrelas/'.$pena[1]['pena'].'.png" 
                                    alt="Artefato '.$pena[1]['pena'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }

                            if (empty($ampulheta[1]['ampulheta']) or $ampulheta[1]['ampulheta'] == '0' or $ampulheta[1]['ampulheta'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row2_ampu3">
                                    <div class="nv_artefato_img"><h2>+'.$ampulheta[1][$row2_ampulheta_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$ampulheta[1]['conjunto'].'/'.$row2_ampulheta_star.'_estrelas/'.$ampulheta[1]['ampulheta'].'.png"
                                    alt="Artefato '.$ampulheta[1]['ampulheta'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }

                            if (empty($taça[1]['taça']) or $taça[1]['taça'] == '0' or $taça[1]['taça'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row2_taca4">
                                    <div class="nv_artefato_img"><h2>+'.$taça[1][$row2_taça_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$taça[1]['conjunto'].'/'.$row2_taça_star.'_estrelas/'.$taça[1]['taça'].'.png" 
                                    alt="Artefato '.$taça[1]['taça'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }
                                
                            if (empty($coroa[1]['coroa']) or $coroa[1]['coroa'] == '0' or $coroa[1]['coroa'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row2_coroa5">
                                    <div class="nv_artefato_img"><h2>+'.$coroa[1][$row2_coroa_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$coroa[1]['conjunto'].'/'.$row2_coroa_star.'_estrelas/'.$coroa[1]['coroa'].'.png"
                                    alt="Artefato '.$coroa[1]['coroa'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }
                        echo'</div>'; 
                        }
                ?>

                <?php if (empty($flor[2]['flor']) or $flor[2]['flor'] == '0' or $flor[2]['flor'] == '') {
                        echo'';
                    } else {
                        echo'<div class="rows_artefatos row_3">';
                            
                            if (empty($flor[2]['flor']) or $flor[2]['flor'] == '0' or $flor[2]['flor'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row3_flor1">
                                    <div class="nv_artefato_img"><h2>+'.$flor[2][$row3_flor_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$flor[2]['conjunto'].'/'.$row3_flor_star.'_estrelas/'.$flor[2]['flor'].'.png"
                                    alt="Artefato '.$flor[2]['flor'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }

                            if (empty($pena[2]['pena']) or $pena[2]['pena'] == '0' or $pena[2]['pena'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row3_pena2">
                                    <div class="nv_artefato_img"><h2>+'.$pena[2][$row3_pena_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$pena[2]['conjunto'].'/'.$row3_pena_star.'_estrelas/'.$pena[2]['pena'].'.png" 
                                    alt="Artefato '.$pena[2]['pena'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }

                            if (empty($ampulheta[2]['ampulheta']) or $ampulheta[2]['ampulheta'] == '0' or $ampulheta[2]['ampulheta'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row3_ampu3">
                                    <div class="nv_artefato_img"><h2>+'.$ampulheta[2][$row3_ampulheta_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$ampulheta[2]['conjunto'].'/'.$row3_ampulheta_star.'_estrelas/'.$ampulheta[2]['ampulheta'].'.png"
                                    alt="Artefato '.$ampulheta[2]['ampulheta'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }

                            if (empty($taça[2]['taça']) or $taça[2]['taça'] == '0' or $taça[2]['taça'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row3_taca4">
                                    <div class="nv_artefato_img"><h2>+'.$taça[2][$row3_taça_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$taça[2]['conjunto'].'/'.$row3_taça_star.'_estrelas/'.$taça[2]['taça'].'.png" 
                                    alt="Artefato '.$taça[2]['taça'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }
                                
                            if (empty($coroa[2]['coroa']) or $coroa[2]['coroa'] == '0' or $coroa[2]['coroa'] == '') {echo'';}
                            else { echo'
                                <div class="artifafts row3_coroa5">
                                    <div class="nv_artefato_img"><h2>+'.$coroa[2][$row3_coroa_star.'star'].'</h2></div>
                                    <img class="" src="assets/img/itens/artefatos/conjunto/'.$coroa[2]['conjunto'].'/'.$row3_coroa_star.'_estrelas/'.$coroa[2]['coroa'].'.png"
                                    alt="Artefato '.$coroa[2]['coroa'].'">
                                    <div class="img_border"></div>
                                </div>';
                            }
                        echo'</div>'; 
                        }
                ?>

            </section>

        </div>   

    </div>

    <!------ SECTION EQUIPE ------>
    <div id="equipe" class="fadeIn_box2 dp_n">
    <div class="text_recomendado"><h2>
        <?php 
            if (empty($flor[0]['flor']) or $flor[0]['flor'] == '0' or $flor[0]['flor'] == '') {     
            } else { echo $text_equipes_recomendados; }
        ?>
    </h2></div>
    <?php echo'<div class="text_recomendado"><br><br><h2>'.$text_nenhum_equipe.'</h2></div>';?>
    </div>
    

    <div></div>
    <div></div>
    </div>