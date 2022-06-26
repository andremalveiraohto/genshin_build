<?php
    include '../../../config.php';

    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
    AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        
        $id_title = $_POST['id_title'];

        // INCLUDE DA TABELA CONQUISTAS DATA
        $table_conqs_data = "SELECT * FROM conquistas_data WHERE id_title='$id_title' ";
        $table_conqs_data = $pdo->query($table_conqs_data);
        $conqs_data = $table_conqs_data->fetchAll();
        



        echo'<div class="bodyRightCard" data-cues="slideInUp" data-group="images">';
        foreach($conqs_data as $data_conqs){

            echo'
                <div data-order="'.$data_conqs['id'].'">
                    <div class="cardRight" >
                        <div class="cardRight-L">
                            <div class="cardRight-L_img'.$data_conqs['nivel'].'"></div>
                            <div class="cardRight-L_text">
                                <div>
                                    <h1>'.$data_conqs['name'].'</h1>
                                    <h2>'.$data_conqs['objetivo'].'</h2>
                                </div>
                            </div>
                            <div class="cardRight-L_gems">
                                <div class="cardRight-L_carGems">
                                    <span>'.$data_conqs['gems'].'</span>
                                </div>
                            </div>
                        </div>
                        <div class="cardRight-R">
                            <div id="'.$data_conqs['id_url'].'" class="cardRight-R_button">Assistir</div>
                        </div>
                    </div>
                </div>
            
            ';
        }

        echo'</div>';
    }
?>

<script>
    initModalVideo();
    //UpdateScrollCue
    scrollCue.update();
</script>


