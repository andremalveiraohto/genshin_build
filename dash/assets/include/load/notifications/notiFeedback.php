<?php
include '../../../../../assets/include/config.php';


    //=====INCLUDE DA TABELA FEEDBACKS
    $feedbacks = "SELECT * FROM feedbacks WHERE status = 'pendente' ORDER BY id DESC";
    $feedbacks = $pdo->query($feedbacks);
    $feedbacks = $feedbacks->fetchAll();


    date_default_timezone_set('America/Rio_Branco');
    $dataLocal = date('d/m/Y');
    $horaLocal = date('H:i');

    foreach( $feedbacks as $feedback){

        echo'

        <div class="mess__item">
            <div class="image img-cir img-40">
                <img src="assets/img/for_feedback/'.$feedback['page'].'.png" alt="'.$feedback['nome'].'" />
            </div>
            <div class="content">
                <h6>'.$feedback['nome'].'</h6>
                <p>'.$feedback['mensagem'].'</p>
                <span class="time">';
                

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
                        echo$feedback['data'];
                        echo ' ás '.$feedback['hora']; 
                    }

                }


                
                echo'</span>
            </div>
        </div>
        
        ';

    }

?>


