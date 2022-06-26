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
        <h3 class="title-2 tm-b-5">MetaTag/ Info Site</h3>
        <div class="row no-gutters">                                        
            <div class="chart-note-wrap">
                <form id="meta_form" class="meta_form" action="" method="POST" enctype="multipart/form-data" autocomplete="off">';


           
                        //=====INCLUDE DA TABELA META
                        $name_meta = "SELECT * FROM meta ";
                        $name_meta = $pdo->query($name_meta);
                        $name_meta = $name_meta->fetchAll();

                        foreach($name_meta as $meta){
                            
                            if($meta['id'] == 1){
                            echo'
                            <div class="chart-note-inputtex mr-0">
                                <span style="text-transform: none; color: var(--color_text-second);">'.$meta['nome'].' das Pages</span>
                                <div class="chart-note-inputtext">
                                    <input disabled name="'.$meta['nome'].'" type="text" value="'.$meta['text'].'" class="form-control" style="height: 30px;" >  
                                </div>
                            </div>';
                            }

                            if($meta['id'] > 1 && $meta['id'] < 9){
                            echo'
                            <div class="chart-note-inputtex mr-0">
                                <span style="text-transform: none;">meta: "'.$meta['nome'].'"</span>
                                <div class="chart-note-inputtext">
                                    <input disabled name="'.$meta['nome'].'" type="text" value="'.$meta['text'].'" class="form-control" style="height: 30px;" >  
                                </div>
                            </div>';
                            }

                            if($meta['id'] >= 9 && $meta['id'] < 11){
                                echo'
                                <div class="chart-note-inputtex mr-0">
                                    <span style="text-transform: none; color: var(--color_text-second);">'.$meta['nomeview'].'</span>
                                    <div class="chart-note-inputtext">
                                        <input disabled name="'.$meta['nome'].'" type="text" value="'.$meta['text'].'" class="form-control" style="height: 30px;" >  
                                    </div>
                                </div>';
                            }
                            if($meta['id'] == 11){
                                echo'
                                <div class="chart-note-inputtex mr-0">
                                    <span style="text-transform: none; color: var(--color_text-second);">'.$meta['nomeview'].'</span>
                                    <div class="chart-note-inputtext">
                                        <textarea disabled name="'.$meta['nome'].'" type="text"class="form-control">'.$meta['text'].'</textarea>  
                                    </div>
                                </div>';
                            }
                            if($meta['id'] >= 12){
                                echo'
                                <div class="chart-note-inputtex mr-0">
                                    <span style="text-transform: none; color: var(--color_text-second);">'.$meta['nomeview'].'</span>
                                    <div class="chart-note-inputtext">
                                        <input disabled name="'.$meta['nome'].'" type="text" value="'.$meta['text'].'" class="form-control" style="height: 30px;" >  
                                    </div>
                                </div>';
                            }

                        }

                            
                echo'
                </form> 
            </div>                                  
        </div>
    </div>
</div>';
}
?>

<script>


        //AJAX
        function meta_edit() {
            $('#meta_form input').removeAttr("disabled");   
            $('#meta_form textarea').removeAttr("disabled");            
                $.ajax({
                        type: 'POST',
                        url: 'assets/include/load/meta_edit.php',
                        data: $('form#meta_form').serialize(),
                        success: function(data){
                            $('.error').html(data);
                        }
                }); 
            $('#meta_form input').attr("disabled", "disabled");
            $('#meta_form textarea').attr("disabled", "disabled");
            return false;
        }
        //INPUT
        $(function(){
            $('#meta_form input').change(function(){
                meta_edit();
            });
        });
        //TEXTAREA
        $(function(){
            $('#meta_form textarea').change(function(){
                meta_edit();
            });
        });




        
//habilitar input dpclick

var input_clicked = document.querySelectorAll('#meta_form .chart-note-inputtext');



    input_clicked.forEach(function(input){

        var input_status = false;
        var input_click;

        input.addEventListener('dblclick', function(){
            this.firstElementChild.removeAttribute("disabled");
            input_status = true;
            status();
        }); 

      
       

        function status(){
            if(input_status == true) {

                input.firstElementChild.addEventListener('mouseout', function(){
                this.setAttribute("disabled", "disabled");
                });  
            }
        }   
    });
  


 


</script>