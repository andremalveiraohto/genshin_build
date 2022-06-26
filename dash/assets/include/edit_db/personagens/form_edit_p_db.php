<?php
    $id = '';
    
    if(!empty($_POST['id'])){

        $id = ($_POST['id']);
        include '../../../../../assets/include/config.php';
        
    } 

    $table_personagens = "SELECT * FROM personagens WHERE id = '$id'";
    $table_personagens = $pdo->query($table_personagens);
    $personagens = $table_personagens->fetch();

?>
<div class="row">
    <div class="col-sm" >
        <div class="row margin_bottom_25px">
            <div class="col-sm padding_left_right_5px">
                <input id="nome" name="nome" type="text" value="<?php echo $personagens['nome'];?>" class="form-control"  placeholder="Nome" required="">
            </div>
            <div class="col-sm padding_left_right_5px">
                <input id="title" name="title" type="text" value="<?php echo $personagens['title'];?>" class="form-control"  placeholder="Título" >
            </div>
        </div>   
        <div class="row margin_bottom_25px">
            <div class="col-sm padding_left_right_5px">
                <input name="afiliação" type="text" value="<?php echo $personagens['afiliação'];?>" class="form-control"  placeholder="Afiliação" >
            </div>
            <div class="col-sm padding_left_right_5px">
                <input name="constelação" type="text" value="<?php echo $personagens['constelação'];?>" class="form-control"  placeholder="Constelação" >
            </div>
        </div>            
        <div class="row margin_bottom_25px">
            <div class="col-sm-3 padding_left_right_5px">
                <select name="nation" type="text"class="form-control" >
                    <option class="dp_n" value="<?php echo $personagens['nation'];?>">
                    <?php if(!empty($personagens['nation'])){echo ucfirst($personagens['nation']);
                    } else {echo 'Nação';};?></option>
                    <?php
                        foreach($nations as $nation) {
                            echo'<option value="'.$nation['nome'].'">'.$nation['id'].' - '.ucfirst($nation['nome']).'</option>';
                        }
                    ?>
                </select>
            </div>     
            <div class="col-sm-3 padding_left_right_5px">
                <select name="elemento" type="text"class="form-control" required="">
                <option class="dp_n" value="<?php echo $personagens['elemento'];?>">
                    <?php if(!empty($personagens['elemento'])){echo ucfirst($personagens['elemento']);
                    } else {echo 'Elemento';};?></option>
                    <?php
                        foreach($elementos as $elemento) {
                            echo'<option value="'.$elemento['nome'].'">'.ucfirst($elemento['nome']).'</option>';
                        }
                    ?>
                    </select>
            </div>                    
            <div class="col-sm-2 padding_left_right_5px">
                <select name="star" type="text"class="form-control" required="">
                    <option class="dp_n" value="<?php echo $personagens['star'];?>"><?php echo $personagens['star'];?> Estrelas</option>
                    <option value="5">5 Estrelas</option>
                    <option value="4">4 Estrelas</option>
                </select>
            </div>
            <div class="col-sm-2 padding_left_right_5px">
                <select name="arma" type="text"class="form-control">
                    <option class="dp_n" value="<?php echo $personagens['arma'];?>">
                    <?php if(!empty($personagens['arma'])){echo ucfirst($personagens['arma']);
                    } else {echo 'Arma';};?></option>
                        <?php
                            foreach($tipo_armas as $tipo_arma) {
                                echo'<option value="'.$tipo_arma['tipo'].'">'.ucfirst($tipo_arma['tipo']).'</option>';
                            }
                        ?>
                </select>
            </div>
            <div class="col-sm-2 padding_left_right_5px">
                <input id="niver_edit" name="niver" type="text" value="<?php echo $personagens['niver'];?>" class="form-control"  placeholder="Aniversário" >
            </div>
        </div>
        <div class="row margin_bottom_25px">
            <div class="col-sm padding_left_right_5px">
                <textarea name="habilidade" type="text" id="textarea_editavel" class="form-control"  style="height: 250px" placeholder="Sobre Habilidade"><?php echo $personagens['habilidade'];?></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm" >
        <div class="row margin_bottom_25px">
            <div class="col-sm padding_left_right_5px">
                <textarea name="comentário" type="text" class="form-control"  style="height: 164px;" placeholder="Comentário"><?php echo $personagens['comentário'];?></textarea>
            </div>
        </div>
        <div class="row margin_bottom_25px">
            <div id="viewer_img_p_db"  class="margin_left_right_5px">
            <h1>Não possui imagens</h1>
            </div>
        </div>
    </div>
</div>

    <div class="success"></div>
    <div class="error"></div>

    <div class="modal-footer">
        <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-save"></i>  Salvar Alterações</button>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.2.5/js/froala_editor.pkgd.min.js" integrity="sha512-YZzcBohdRs7t2mO/M7uagDICdsAP7Ar7pbmei/AqiRZA0qFzpPsroTFQ53Qdhj8sImEl/dV7TqpZqvbApg9VSw==" crossorigin="anonymous"></script>
<script>
//INICIA TEXT AREA EDITAVEL
new FroalaEditor('textarea#textarea_editavel');

</script>
