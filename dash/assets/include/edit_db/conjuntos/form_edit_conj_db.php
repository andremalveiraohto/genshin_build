<?php
    $id = '';
    
    if(!empty($_POST['id'])){

        $id = ($_POST['id']);
        include '../../../../../assets/include/config.php';
        
    }

    $table_conjuntos = "SELECT * FROM conjuntos WHERE id = '$id'";
    $table_conjuntos = $pdo->query($table_conjuntos);
    $conjuntos = $table_conjuntos->fetch();


?>


<div class="row">
    <div class="col-sm">
        <div class="row margin_bottom_25px">
        <div class="col-sm">
            <input name="conjunto" type="text" value="<?php echo $conjuntos['conjunto']?>" class="form-control"  placeholder="Nome do Conjunto" required="">
        </div>
        </div>
        <div class="row margin_bottom_25px">
        <div class="col-sm flex_end">
            <i class="fas fa-circle"></i><input name="flor" type="text" value="<?php echo $conjuntos['flor']?>" class="form-control input_500px"  placeholder="Nome da Flor da Vida">
        </div>  
        </div>                
        <div class="row margin_bottom_25px">
        <div class="col-sm flex_end">
            <i class="fas fa-circle"></i><input name="pena" type="text" value="<?php echo $conjuntos['pena']?>" class="form-control input_500px"  placeholder="Nome da Pluma da Morte">
        </div>  
        </div>     
        <div class="row margin_bottom_25px">
        <div class="col-sm flex_end">
            <i class="fas fa-circle"></i><input name="ampulheta" type="text" value="<?php echo $conjuntos['ampulheta']?>" class="form-control input_500px"  placeholder="Nome da Areia do Tempo">
        </div>  
        </div>     
        <div class="row margin_bottom_25px">
        <div class="col-sm flex_end">
            <i class="fas fa-circle"></i><input name="taça" type="text" value="<?php echo $conjuntos['taça']?>" class="form-control input_500px"  placeholder="Nome do Cálice de Erátema">
        </div>  
        </div>  
        <div class="row margin_bottom_25px">
        <div class="col-sm flex_end">
            <i class="fas fa-circle"></i><input name="coroa" type="text" value="<?php echo $conjuntos['coroa']?>" class="form-control input_500px"  placeholder="Nome da Tiara de Logos">
        </div>  
        </div> 
    </div>     
    <div class="col-sm">  
        <div class="row margin_bottom_25px">
            <div class="col-sm">
                <textarea name="1_peças" type="text" value="" class="form-control" style="height: 101px;" placeholder="Conjunto de 1 peça"><?php if(!empty($conjuntos['1_peças'])){echo $conjuntos['1_peças'];} else {echo 'Conjunto de 1 peça';}?></textarea>
            </div>
        </div>
        <div class="row margin_bottom_25px">
            <div class="col-sm">
                <textarea name="2_peças" type="text" value="" class="form-control" style="height: 101px;" placeholder="Conjunto de 2 peças"><?php if(!empty($conjuntos['2_peças'])){echo $conjuntos['2_peças'];} else {echo 'Conjunto de 2 peças';}?></textarea>
            </div>
        </div>
        <div class="row margin_bottom_25px">
            <div class="col-sm">
                <textarea name="4_peças" type="text" value="" class="form-control" style="height: 101px;" placeholder="Conjunto de 4 peças"><?php if(!empty($conjuntos['4_peças'])){echo $conjuntos['4_peças'];} else {echo 'Conjunto de 4 peças';}?></textarea>
            </div>
        </div>
    </div> 
    </div>
    <div class="success"></div>
    <div class="error"></div>
    <div class="modal-footer">
        <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-save"></i>  Salvar Alterações</button>
    </div>