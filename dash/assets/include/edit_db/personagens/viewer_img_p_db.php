<?php

$id = '';
    
if(!empty($_POST['id'])){

    $id = ($_POST['id']);
    include '../../../../../assets/include/config.php';    
} 

$table_personagens = "SELECT * FROM personagens WHERE id = '$id'";
$table_personagens = $pdo->query($table_personagens);
$personagens = $table_personagens->fetch();

$dir_imgs = '../../../../../assets/img/elements/'.lcfirst($personagens['elemento']).'/persona/'.lcfirst($personagens['nome']).'/'; 
$imgs = glob($dir_imgs . "*.{jpg,png,gif}", GLOB_BRACE);


?>

    <div class="col-sm padding_left_right_5px viewer">

            <?php
                if(empty($imgs)){
                    echo'<h1>Não possui imagens</h1>';
                } else {
                    echo'<div class="viewer_imgs">';
                foreach($imgs as $img){
                
                    $img = explode('../', $img);
                    $name_ext = explode('/', $img[5]);
                    $name_img = explode('.', $name_ext[6]);
                
                    echo '
                            <div class="viewer_imgs_card">
                                <div class="bar_top"><i class="delete_img far fa-trash-alt" title="Deletar"></i></div>
                                <a data-fancybox="gallery" href="../'.$img[5].'">
                                    <div>
                                        <img src="../'.$img[5].'" />
                                    </div>
                                </a>
                                <p>'.$name_img[0].'</p>
                            </div>
                        ';
                    }
                    echo'</div>';
                }
                ?>

    </div>
    <div class="bar_edition">
            <div class="input_upload">
                <label title="Enviar Imagem" for="fusk"><i class="fas fa-upload"></i></label>
                <input visibility="hidden" id="fusk" type="file" name="up_img[]" multiple>
                
            </div>
    </div>


<script>
//viewer_mg_p_db ao deletar imagem
$(function(){ // aguarda o DOM ser carregado
    $(".delete_img").on("click", function(){
        var dir_img = $(this).parent().parent()[0].children[1].getAttribute("href");
    
    if(dir_img){
        var confirmation = confirm("Deletar Imagem?");
        
            if (confirmation) {
                $.ajax({
                    url: 'assets/include/edit_db/personagens/delete_img.php',
                    type: 'POST',
                    data: {delete_img:dir_img},
                    success: function(data){
                        $('.error').html(data);

                        
                    }
                });
                return false;
            }
        } else {
            alert('Não foi possível deletar essa imagem!')
        }
    });
});


//INPUT FILE LABEL CHANGE
var input = document.querySelector(".input_upload input");
    if(input){
        input.addEventListener("change", function() {
            var inputLabel = $(this).parent()[0].firstElementChild;
            var inputFilename = $(this).parent()[0].lastElementChild.files[0].name;

            inputLabel.style.color= '#00ad5f'; //style color for label
            inputLabel.setAttribute('title', 'Imagem selecionada: '+inputFilename);
            inputLabel.innerHTML = '<i class="fas fa-check-circle"></i>';
        }); 
    }


</script>
