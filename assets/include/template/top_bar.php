<div class="top-bar slide_topbar">
    <div class="top-bar_grid"> 
        
        <div  class="elemento_nome">
            <div class="insígnia">
                <?php 
                    $visionImg = 'assets/img/teyvat/'.$about_personagem['nation'].'/'.$about_personagem['elemento'].'.png';
                    if(file_exists($visionImg)){
                        echo'<img src="'.$visionImg.'" alt="Insígnia">';
                    }
                ?>
            </div>
            <h1 id="_aboutp" title="<?php echo $about_personagem['elemento'] ."/ ". $about_personagem['nome']  ?>">
                <?php echo $about_personagem['elemento'] ."/ ". preg_replace('/\B[A-Z]/', ' $0', $about_personagem['nome'])  ?>
            </h1>
        </div>
        <div class="menu_persona">
            <div class="menu_persona_row">
                <div class="slide_persona fadeIn">
                    <?php                               


                       

                        $table_personagens = "SELECT * FROM personagens ORDER BY nome";
                        $table_personagens = $pdo->query($table_personagens);
                        $table_personagens = $table_personagens->fetchAll();


                        foreach($table_personagens as $for_slide){ 

                            $for_slide_nome = strtolower($for_slide['nome']);
                            $for_slide_elemento = strtolower($for_slide['elemento']);

                            $url_forSlideImg = 'assets/img/elements/'.$for_slide_elemento.'/persona/'.$for_slide_nome.'/for_slide_'.$for_slide_nome.'.png';

                            if(file_exists($url_forSlideImg)){
                                echo '
                                    <div class="slide_single">
                                        <a href="'.$for_slide_nome.'">
                                            <div id="'.$for_slide_nome.'" class="slide_single_bg">
                                                <img src="'.$url_forSlideImg.'" class="profile_normal" alt="'.$for_slide_nome.'">
                                            </div>
                                        </a>
                                        <div class="'.$for_slide_nome.' ss_active"></div>
                                    </div>                      
                                ';     
                            }
                        } 
                        
                    ?> 
                </div>
            </div>
                <div class="arrow_left"></div>
                <div class="arrow_right"></div>
        </div>
        <div class="fechar">
            <div>
            <div class="borda_close_2"></div>
            <div class="borda_close_1"></div>
            <a href="./"><div class="icon_close"></div></a>
            </div>
        </div>
    </div> 
</div>