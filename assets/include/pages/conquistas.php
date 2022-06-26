<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conquistas <?php echo$name_meta[0]['text']?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $font_dir ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/scrollCue.css">
    <link rel="stylesheet" href="assets/include/pages/assets/css/conqs.css">

    <link rel="shortcut icon" href="assets/include/pages/assets/img/icon_conquista.svg" type="image/x-icon">

</head>
<body class="fadeIn" >
    <div id="loading"><div class="box"><div class="spinner"></div></div></div>
    <div class="bg blur" style="background-image: url(<?php echo$name_meta[14]['text'] ?>);">
        <div class="teiner">
            <div class="topBar slide_topbar">
                <div class="topBarLeft">
                    <div class="iconConquista"></div>
                    <h1>Conquistas</h1>
                </div>
                <div class="topBarRight">
                    <div class="conqsTotal">
                        <h1>Conquistas Concluídas:</h1>
                        <span><?php

                            //COUNTCONQS
                            $table_qtconqs  = "SELECT * FROM conquistas_data";
                            $table_qtconqs  = $pdo->query($table_qtconqs );
                            $qtconqs  = $table_qtconqs ->rowCount();

                            echo str_pad($qtconqs , 3 , '0' , STR_PAD_LEFT);
                        ?>
                        </span>
                    </div>
                    <div class="closeReturn">
                        <a href="./">
                            <div id="closeMenuPaimon" class="fechar closeMenuPaimon">
                                <div class="borda_close_2"></div>
                                <div class="borda_close_1"></div>
                                <div class="icon_return"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="teiner">
            <div class="bodyTeiner">
                <div class="bodyLeft" data-cues="slideInUp" data-group="images">

                    <?php
                        foreach($conqs_title as $title_conqs){

                            echo'
                            <div idtitle="'.$title_conqs['id'].'" class="cardLeftclick" data-order="'.$title_conqs['id'].'">
                                <div class="cardLeft" >
                                    <div class="arrow"><i class="pin fa-caret-rightt"></i></div>
                                    <div class="cardLeftBorder">
                                        <div class="cardLeftbg"></div>
                                       <div class="cardLeftimg" ';

                                       $tt = $title_conqs['title'];
                                       $tt = explode(':', $tt);
                                       $tt = explode(' -', $tt[0]);
                                       
                                       $dirIcon = 'assets/include/pages/assets/img/icons_conqs/'.$tt[0].'.png';

                                       if(file_exists($dirIcon)){
                                           $asp = "'";
                                            echo$iconcardLeft = 'style="background-image: url('.$asp.$dirIcon.$asp.')';
                                       }else{echo'';}
                                                                                                   
                                        echo'"></div>
                                        <div class="cardLeftText">
                                            <div>
                                                <h1>'.$title_conqs['title'].'</h1>
                                                <h2>';
                                                $id_title = $title_conqs['id'];
                                                if($id_title != 1){
                                                    //COUNTCONQS
                                                    $table_qtconqs  = "SELECT * FROM conquistas_data WHERE id_title='$id_title'";
                                                    $table_qtconqs  = $pdo->query($table_qtconqs );
                                                    $qtconqs  = $table_qtconqs ->rowCount();

                                                    if(empty($title_conqs['qt_conqs']) or $title_conqs['qt_conqs'] == 0){
                                                        echo'';
                                                    }else {
                                                        $qt_conqs = ( $qtconqs * 100 ) / $title_conqs['qt_conqs'];

                                                        $qtpct = explode('.', $qt_conqs);
                                                        echo$qtpct[0].'%';
                                                    }
                                                }
                                                
                                                echo'</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    ?>


                </div>
                <div class="bodyRight">
                    <div id="conqs_data" class="bodyRightTeiner">
 
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="ModalVideo"></div>
        <div class="bg topbg si_blur"></div>

</body>
<?php include 'assets/include/js.php';?>
<script src="assets/include/pages/assets/js/conqs.js"></script>
<script>
        // updateScrollCue
        setTimeout(function(){
            scrollCue.update();
        }, 1500);
</script>

</html>