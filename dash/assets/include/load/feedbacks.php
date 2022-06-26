<?php
        include '../../../../assets/include/config.php';

        //=====INCLUDE DA TABELA USER
        $feedbacks = "SELECT * FROM feedbacks ORDER BY id DESC";
        $feedbacks = $pdo->query($feedbacks);
        $feedbacks = $feedbacks->fetchAll();

        date_default_timezone_set('America/Rio_Branco');
        $dataLocal = date('d/m/Y');
        $horaLocal = date('H:i');



     

?>


        <div class="au-inbox-wrap js-inbox-wrap">
            <div class="au-message js-list-load">
                <div class="au-message-list">

                    <!-- class para mensagem já visualizada "unread"-->
                    <?php 
                        foreach( $feedbacks as $feedback){

                            echo'
                                <div class="au-message__item '.$feedback['status'].'"> 
                                    <div class="au-message__item-inner">
                                        <div class="au-message__item-text">
                                            <div class="avatar-wrap">
                                                <div class="avatar">
                                                    <img src="assets/img/for_feedback/'.$feedback['page'].'.png" alt="'.$feedback['nome'].'">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h5 class="name">'.$feedback['nome'].'</h5>
                                                <p>'.$feedback['mensagem'].'</p>
                                            </div>
                                        </div>
                                        <div class="au-message__item-time">
                                        <div class="starsFlex"><div class="starsRelative">';
                                        
                                        echo'<div class="starsGold" title="'.$feedback['avaliação'].' Estrelas">';
                                            for ($i=0; $i < $feedback['avaliação']; $i++) {echo '<i class="fas fa-star"></i>';};                       
                                        echo'</div>'; 
                                        
                                        echo'<div class="starsGrey">';
                                        for ($i=0; $i < 5-$feedback['avaliação']; $i++) {echo '<i class="fas fa-star"></i>';};                       
                                        echo'</div>'; 

                                        echo'</div></div><span>';
                                            
                                            //HORA/DATA

                                            if($feedback['data'] == $dataLocal){

                                                $tempo = gmdate('H:i:s', abs( strtotime( $horaLocal ) - strtotime( $feedback['hora'] ) ) );
                                                $minutos = explode(':', $tempo);

                                                if($minutos[0] == 0){
                                                    echo'Há '.$minutos[1].' min';
                                                } else if($minutos[0] > 0 && $minutos[0] < 24){

                                                    if($minutos[0] == 1){
                                                        $text_hora = ' hora';
                                                    } else if($minutos[0] > 1) {
                                                        $text_hora = ' horas';
                                                    }
                                                    echo'Há '.$minutos[0].$text_hora;
                                                }
                                                

                                            } else {

                                                $data1 = $dataLocal;
                                                $data2 = $feedback['data'];
                                                
                                                // transforma a data do formato BR para o formato americano, ANO-MES-DIA
                                                $data1 = implode('-', array_reverse(explode('/', $data1)));
                                                $data2 = implode('-', array_reverse(explode('/', $data2)));
                                                // converte as datas para o formato timestamp
                                                $d1 = strtotime($data1); 
                                                $d2 = strtotime($data2);
                                                // verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
                                                $dataFinal = ($d2 - $d1) /86400;
                                                // caso a data 2 seja menor que a data 1, multiplica o resultado por -1
                                                if($dataFinal < 0)
                                                $dataFinal *= -1;
                                        
                                                if($dataFinal == 1){
                                                    echo 'Ontem ás '.$feedback['hora'];
                                                }else if($dataFinal > 1 && $dataFinal <= 10) {
                                                    echo 'Há '.$dataFinal.' dias'; 
                                                }else if($dataFinal > 10) {
                                                    echo$feedback['data'].' ';
                                                    echo 'ás '.$feedback['hora']; 
                                                }

                                            }


                                            echo'</span>
                                        </div>
                                    </div>
                                </div>'
                            ;
                        }

                    ?>
                </div>
                <div class="au-message__footer">
                    <button class="au-btn au-btn-load js-load-btn">load more</button>
                </div>
            </div>
        </div>
    
