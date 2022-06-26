<?php
        include '../../../../assets/include/config.php';

        session_start();

        $session_id = $_SESSION['id'];

        //=====INCLUDE DA TABELA USER
        $users = "SELECT * FROM user WHERE id = '$session_id'";
        $users = $pdo->query($users);
        $user = $users->fetch();





if($user['type_user_cod'] == '0'){
echo'
<div class="au-card height_100">
    <div class="au-card-inner">
        <h3 class="title-2 tm-b-5">Acessibilidade</h3>
        <div class="row no-gutters">                                        
            <div class="chart-note-wrap">
                <form id="formBlocks" class="formBlocks" action="" method="POST" enctype="multipart/form-data">';
                    
                        foreach($block as $key => $nameBlocks){ 
                            
                            if($nameBlocks['valor'] == 'false'){$status = 'Bloqueado';} 
                            else if($nameBlocks['valor'] == 'true'){$status = 'Ativo';}; 

                            echo'<div class="chart-note mr-0">
                                <span>'.$nameBlocks['text_nome'].'</span>
                                <div class="chart-note-select">
                                    
                                    <select name="'.$nameBlocks['nome'].'" class="selectBlocks form-control">
                                        <option type="hidden" value="" style="display: none;">'.$status.'</option>
                                        <option value="true">Ativar</option>
                                        <option value="false">Bloquear</option>
                                    </select>
                                </div>
                            </div>';
                        };
                   echo'
                        <div class="line_space"></div>
                        
                    <div class="chart-note mr-0">
                        <span>Font do Site</span>
                        <div class="chart-note-select">
                            <select name="edit_font" class="width_150px selectBlocks form-control">
                                <option type="hidden" value="" style="display: none;">';
                            
                                
                                //=====INCLUDE DA TABELA FONTS
                                $name_font = "SELECT * FROM fonts WHERE dir = '$font_dir' ORDER BY ID DESC ";
                                $name_font = $pdo->query($name_font);
                                $name_font = $name_font->fetch();
                                echo$name_font['nome'];
                            
                            
                                echo'</option>';

                                 foreach($fonts as $font) {
                                    if($font['id'] > 1){
                                        echo'<option value="'.$font['dir'].'">'.$font['nome'].'</option>';
                                    }
                                    
                                }
                                
                                echo'
                            </select>
                        </div>
                    </div>

                </form> 
            </div>                                  
        </div>
    </div>
</div>';
}

?>
<script>

$(function(){
            $('select.selectBlocks').change(function(){
                $.ajax({
                        type: 'POST',
                        url: 'assets/include/load/edit_blocks.php',
                        data: $('form#formBlocks').serialize(),
                        success: function(data){
                            $('.error').html(data);
                        }
                });
                return false;
            });
        });

   // APLICAR COR SELECT BLOCKS
var select =  document.querySelectorAll('.chart-note-select select');

var falsee = 'Bloqueado';
var truee = 'Ativo';

select.forEach(function(item){
  
  var chart = item.parentElement

 
    if(item[0].innerHTML == falsee) {
        item.style.color = '#fa4251';
        chart.firstChild.nextSibling.classList.add('dot', 'dot--red')
        } else if(item[0].innerHTML == truee) {
            item.style.color = '#00ad5f';
            chart.firstChild.nextSibling.classList.add('dot', 'dot--green')
        }

    // TROCA COR DO SELECT AO MUDAR OPTION
    item.onchange = function () {
        if(item.value == 'false') {
            item.style.color = '#fa4251';
            chart.firstChild.nextSibling.classList.remove('dot');
            chart.firstChild.nextSibling.classList.remove('dot--green');
            chart.firstChild.nextSibling.classList.add('dot', 'dot--red');
            setTimeout(function(){$("#funçoes").load('assets/include/load/funcoes.php');}, 1000);
            
            } else if(item.value == 'true') {
                item.style.color = '#00ad5f';
                chart.firstChild.nextSibling.classList.remove('dot');
                chart.firstChild.nextSibling.classList.remove('dot--red');
                chart.firstChild.nextSibling.classList.add('dot', 'dot--green');
            
                setTimeout(function(){$("#funçoes").load('assets/include/load/funcoes.php');}, 1000);
                }
            }

});

</script>