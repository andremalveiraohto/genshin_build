<?php
    $id = '';
    
    if(!empty($_POST['id'])){

        $id = ($_POST['id']);
        include '../../../../../assets/include/config.php';
        
    }

    $table_armas = "SELECT * FROM armas WHERE id = '$id'";
    $table_armas = $pdo->query($table_armas);
    $armas = $table_armas->fetch();


?>


<div class="row margin_bottom_25px">
    <div class="col-sm-3">
        <select name="tipo" type="text"class="form-control" required="">
        <option class="dp_n" value="<?php echo $armas['tipo'];?>">
            <?php if(!empty($armas['tipo'])){echo ucfirst($armas['tipo']);
            } else {echo 'Tipo';};?>
        </option>
            <?php
                foreach($tipo_armas as $tipo_arma) {
                    echo'<option value="'.$tipo_arma['tipo'].'">'.ucfirst($tipo_arma['tipo']).'</option>';
                }
            ?>
        </select>
    </div>
    <div class="col-sm">
        <input name="nome" type="text" value="<?php echo $armas['nome'];?>" class="form-control"  placeholder="Nome" required="">
    </div>      
    <div class="col-sm-3">
        <select name="star" type="text"class="form-control" required="">
            <option class="dp_n" value="<?php echo $armas['star'];?>"><?php echo $armas['star'];?> Estrelas</option>
            <option value="5">5 Estrelas</option>
            <option value="4">4 Estrelas</option>
        </select>
    </div>              
</div>
<div class="row margin_bottom_25px">
    <div class="col-sm">
        <select name="atributo_1" type="text"class="form-control" required="">
        <option class="dp_n" value="<?php echo $armas['atributo_1'];?>">
            <?php if(!empty($armas['atributo_1'])){echo ucfirst($armas['atributo_1']);
                } else {echo 'Atributo 1';};?>
        </option>
            <?php
                foreach($attributes as $attribute) {
                echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute']).'</option>';
                }
            ?>
        </select>
    </div>
    <div class="col-sm-2 p_left_0">
        <input name="atributo_1_valor" type="text" value="<?php echo $armas['atributo_1_valor'];?>" class="form-control atributo_valor"  placeholder="Valor" required="">
    </div>
    <div class="col-sm">
        <select name="atributo_2" type="text"class="form-control" required="">
        <option class="dp_n" value="<?php echo $armas['atributo_2'];?>">
            <?php if(!empty($armas['atributo_2'])){echo ucfirst($armas['atributo_2']);
                } else {echo 'Atributo 2';};?>
        </option>
            <?php
                foreach($attributes as $attribute) {
                echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute']).'</option>';
                }
            ?>
        </select>
    </div>
    <div class="col-sm-2 p_left_0">
        <input name="atributo_2_valor" type="text" value="<?php echo $armas['atributo_2_valor'];?>" class="form-control atributo_valor"  placeholder="Valor" required="">
    </div>
</div>
<div class="row margin_bottom_25px">
    <div class="col-sm-3">
        <select name="nivel" type="text"class="form-control" required="">
            <option class="dp_n" value="<?php echo $armas['nivel'];?>">
                <?php if(!empty($armas['nivel'])){echo ucfirst($armas['nivel']);
                    } else {echo 'Nível';};?>
            </option>
            <option value="90">+90</option>
            <option value="80">+80</option>
            <option value="70">+70</option>
            <option value="60">+60</option>
            <option value="50">+50</option>
        </select>
    </div>
    <div class="col-sm">
        <input name="titulo_habilidade" type="text" value="<?php echo $armas['titulo_habilidade'];?>" class="form-control"  placeholder="Título Habilidade" required="">
    </div>
</div>
<div class="tab-menu">
    <ul>
        <li><a href="#" class="edit-refina active-a" data-id="edit_refina1">Refina 1</a></li>
        <li><a href="#" class="edit-refina" data-id="edit_refina2">Refina 2</a></li>
        <li><a href="#" class="edit-refina" data-id="edit_refina3">Refina 3</a></li>
        <li><a href="#" class="edit-refina" data-id="edit_refina4">Refina 4</a></li>
        <li><a href="#" class="edit-refina" data-id="edit_refina5">Refina 5</a></li>
    </ul>
</div>
<div  class="edit-ref tab-active" data-id="edit_refina1">
    <div class="row ">
        <div class="col-sm margin_bottom_15px">
            <textarea name="refina_1" type="text" value="" class="form-control"  placeholder="Refinamento 1" required="" style="height: 150px;"><?php echo $armas['refina_1'];?></textarea>
        </div>
    </div>
</div>
<div  class="edit-ref" data-id="edit_refina2">
    <div class="row ">
        <div class="col-sm margin_bottom_15px">
            <textarea name="refina_2" type="text" value="" class="form-control"  placeholder="Refinamento 2" style="height: 150px;"><?php echo $armas['refina_2'];?></textarea>
        </div>
    </div>
</div>
<div  class="edit-ref" data-id="edit_refina3">
    <div class="row ">
        <div class="col-sm margin_bottom_15px">
            <textarea name="refina_3" type="text" value="" class="form-control"  placeholder="Refinamento 3" style="height: 150px;"><?php echo $armas['refina_3'];?></textarea>
        </div>
    </div>
</div>
<div  class="edit-ref" data-id="edit_refina4">
    <div class="row ">
        <div class="col-sm margin_bottom_15px">
            <textarea name="refina_4" type="text" value="" class="form-control"  placeholder="Refinamento 4" style="height: 150px;"><?php echo $armas['refina_4'];?></textarea>
        </div>
    </div>
</div>
<div  class="edit-ref" data-id="edit_refina5">
    <div class="row ">
        <div class="col-sm margin_bottom_15px">
            <textarea name="refina_5" type="text" value="" class="form-control"  placeholder="Refinamento 5" style="height: 150px;"><?php echo $armas['refina_5'];?></textarea>
        </div>
    </div>
</div>
<div>span.blue </div>
<div class="success"></div>
<div class="error"></div>
<div class="modal-footer">
    <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-save"></i>  Salvar Alterações</button>
</div>

<script>

//script tab edit refina
$(document).ready(function(){ 
  $('.edit-refina').click(function(){  
    $(".edit-ref").removeClass('tab-active');
    $(".edit-ref[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active");
    $(".edit-refina").removeClass('active-a');
    $(this).parent().find(".edit-refina").addClass('active-a');
   });
});


</script>