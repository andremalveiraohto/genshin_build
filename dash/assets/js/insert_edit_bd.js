 //============================BUILD==================================

 //REQUISIÇÃO AJAX INSERT_BUILD_DB
 $(function(){
    $('#add_build #insert_build_db').submit(function(){
        $.ajax({
            url: 'assets/include/insert_db/insert_build_db.php',
            type: 'POST',
            data: $('#add_build #insert_build_db').serialize(),
            success: function(data){
                $('.error').html(data);
        }

        });
        return false;
    });
});
//ENVIAR VALOR DO SELECT E FAZ O LOAD
$(function(){
    $('#edit_build #builds_selected').change(function(){

        var value_selected = document.querySelector('#builds_selected').value;

       $('#edit_build #load_edit').load('assets/include/edit_db/builds/form_edit_builds_db.php', {id:value_selected});

    });
});
  //REQUISIÇÃO AJAX edit_build_DB
  $(function(){
    $('#edit_build #edit_builds_db').submit(function(){
        $.ajax({
            url: 'assets/include/edit_db/builds/edit_builds_db.php',
            type: 'POST',
            data: $('#edit_builds_db').serialize(),
            success: function(data){
                $('.error').html(data);
        }

        });
        return false;
    });
});
//REQUISIÇÃO AJAX DELETE_PERSONAGEM_DB
$(function(){

    $('#delete_builds_db').on('click',function(){ 

        var value = document.querySelector('#builds_selected').value;
        if(value > 0){
            var confirmation = confirm("Deseja deletar essa Build?");
            var value_selected = document.querySelector('#builds_selected').value;
            
            if (confirmation) {
                $.ajax({
                    url: 'assets/include/edit_db/builds/delete_builds_db.php',
                    type: 'POST',
                    data: {id:value_selected},
                    success: function(data){
                        $('.error').html(data);
                    }
                });
                return false;
            }
        } else {
            document.querySelector("#edit_build .error").innerHTML= "Selecione uma Build para deletar";
            setTimeout(function(){
                document.querySelector("#edit_build .error").innerHTML= "";
            }, 5000);
        
        }  
    }); 

}); 




//============================PERSONAGEM==================================

 //REQUISIÇÃO AJAX INSERT_PERSONAGEM_DB
 $(function(){
    $('#insert_p_db').submit(function(){
        $.ajax({
            url: 'assets/include/insert_db/insert_p_db.php',
            type: 'POST',
            data: $('#insert_p_db').serialize(),
            success: function(data){
                $('.error').html(data);
        }

        });
        return false;
    });
});

//ENVIAR VALOR DO SELECT E FAZ O LOAD
$(function(){
    $('#edit_personagem #p_selected').change(function(){
        var value_selected = document.querySelector('#p_selected').value;
       $('#edit_personagem #load_edit').load('assets/include/edit_db/personagens/form_edit_p_db.php', {id:value_selected});
       setTimeout(function(){
        $('#edit_personagem #viewer_img_p_db').load('assets/include/edit_db/personagens/viewer_img_p_db.php', {id:value_selected});
    }, 300);
       
    
    });
});
  //REQUISIÇÃO AJAX EDIT_PERSONAGEM_DB
  $(function(){
    $('#edit_personagem #edit_p_db').submit(function(){

        var edit_p_db = $('#edit_personagem #edit_p_db')[0];
        var formdata = new FormData(edit_p_db);

        $.ajax({
            url: 'assets/include/edit_db/personagens/edit_p_db.php',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data){
                $('.error').html(data);
            }
        });

        return false;
    });
});
//REQUISIÇÃO AJAX DELETE_PERSONAGEM_DB
$(function(){

    $('#delete_p_db').on('click',function(){ 

        var value = document.querySelector('#p_selected').value;
        if(value > 0){
            var confirmation = confirm("Deseja deletar o Personagem?");
            var value_selected = document.querySelector('#p_selected').value;
            
            if (confirmation) {
                $.ajax({
                    url: 'assets/include/edit_db/personagens/delete_p_db.php',
                    type: 'POST',
                    data: {id:value_selected},
                    success: function(data){
                        $('.error').html(data);
                    }
                });
                return false;
            }
        } else {
            document.querySelector("#edit_personagem .error").innerHTML= "Selecione um personagem para Deletar";
            setTimeout(function(){
                document.querySelector("#edit_personagem .error").innerHTML= "";
            }, 5000);
        
        }  
    }); 

}); 
  
//======================================================================

 //============================ARMA==================================
 //REQUISIÇÃO AJAX INSERT_ARMA_DB
 $(function(){
  $('#insert_a_db').submit(function(){
      $.ajax({
          url: 'assets/include/insert_db/insert_a_db.php',
          type: 'POST',
          data: $('#insert_a_db').serialize(),
          success: function(data){
              $('.error').html(data);
      }

      });
      return false;
  });
});
//ENVIAR VALOR DO SELECT E FAZ O LOAD
$(function(){
    $('#edit_arma #a_selected').change(function(){

        var value_selected = document.querySelector('#a_selected').value;

       $('#edit_arma #load_edit').load('assets/include/edit_db/armas/form_edit_a_db.php', {id:value_selected});

    });
});
  //REQUISIÇÃO AJAX EDIT_PERSONAGEM_DB
  $(function(){
    $('#edit_arma #edit_a_db').submit(function(){
        $.ajax({
            url: 'assets/include/edit_db/armas/edit_a_db.php',
            type: 'POST',
            data: $('#edit_arma #edit_a_db').serialize(),
            success: function(data){
                $('.error').html(data);
        }

        });
        return false;
    });
});
//REQUISIÇÃO AJAX DELETE_PERSONAGEM_DB
$(function(){

    $('#edit_arma #delete_a_db').on('click',function(){ 

        var value = document.querySelector('#edit_arma #a_selected').value;
        if(value > 0){
            var confirmation = confirm("Deseja deletar a Arma selecionada?");
            var value_selected = document.querySelector('#edit_arma #a_selected').value;
            
            if (confirmation) {
                $.ajax({
                    url: 'assets/include/edit_db/armas/delete_a_db.php',
                    type: 'POST',
                    data: {id:value_selected},
                    success: function(data){
                        $('.error').html(data);
                    }
                });
                return false;
            }
        } else {
            document.querySelector("#edit_arma .error").innerHTML= "Selecione uma Arma para Deletar";
            setTimeout(function(){
                document.querySelector("#edit_arma .error").innerHTML= "";
            }, 5000);
        
        }  
    }); 

}); 


 //============================ARTEFATO==================================

  //REQUISIÇÃO AJAX INSERT_CONJUNTO_DB
  $(function(){
    $('#insert_conj_db').submit(function(){
        $.ajax({
            url: 'assets/include/insert_db/insert_conj_db.php',
            type: 'POST',
            data: $('#insert_conj_db').serialize(),
            success: function(data){
                $('.error').html(data);
        }

        });
        return false;
    });
});
//ENVIAR VALOR DO SELECT E FAZ O LOAD
$(function(){
    $('#edit_conjunto #conj_selected').change(function(){

        var value_selected = document.querySelector('#conj_selected').value;

       $('#edit_conjunto #load_edit').load('assets/include/edit_db/conjuntos/form_edit_conj_db.php', {id:value_selected});

    });
});
  //REQUISIÇÃO AJAX edit_conjunto_DB
  $(function(){
    $('#edit_conjunto #edit_conj_db').submit(function(){
        $.ajax({
            url: 'assets/include/edit_db/conjuntos/edit_conj_db.php',
            type: 'POST',
            data: $('#edit_conj_db').serialize(),
            success: function(data){
                $('.error').html(data);
        }

        });
        return false;
    });
});
//REQUISIÇÃO AJAX DELETE_conjunto_DB
$(function(){

    $('#delete_conj_db').on('click',function(){ 

        var value = document.querySelector('#conj_selected').value;
        if(value > 0){
            var confirmation = confirm("Deseja deletar o Conjunto?");
            var value_selected = document.querySelector('#conj_selected').value;
            
            if (confirmation) {
                $.ajax({
                    url: 'assets/include/edit_db/conjuntos/delete_conj_db.php',
                    type: 'POST',
                    data: {id:value_selected},
                    success: function(data){
                        $('.error').html(data);
                    }
                });
                return false;
            }
        } else {
            document.querySelector("#edit_conjunto .error").innerHTML= "Selecione um Conjunto para Deletar";
            setTimeout(function(){
                document.querySelector("#edit_conjunto .error").innerHTML= "";
            }, 5000);
        
        }  
    }); 

}); 


 //============================CONQUISTAS==================================

 //REQUISIÇÃO AJAX INSERT_TITLECONQS_DB
 $(function(){
    $('#add_conqs #insert_conqstitle_db').submit(function(){
        $.ajax({
            url: 'assets/include/insert_db/insert_conqstitle_db.php',
            type: 'POST',
            data: $('#add_conqs #insert_conqstitle_db').serialize(),
            success: function(data){
                $('.error').html(data);
        }

        });
        return false;
    });
});
 //REQUISIÇÃO AJAX INSERT_CONQS_DB
 $(function(){
    $('#add_conqs #insert_conqs_db').submit(function(){
        $.ajax({
            url: 'assets/include/insert_db/insert_conqs_db.php',
            type: 'POST',
            data: $('#add_conqs #insert_conqs_db').serialize(),
            success: function(data){
                $('.error').html(data);
        }

        });
        return false;
    });
});

//ENVIAR VALOR DO SELECT E FAZ O LOAD
$(function(){
    $('#edit_conqs #conqs_selectTitle').change(function(){

        var id_title = document.querySelector('#conqs_selectTitle').value;

       $('#edit_conqs #id_name').load('assets/include/edit_db/conquistas/select_conqsData_db.php', {id_title:id_title});

    });
});

$(function(){
    $('#edit_conqs #id_name').change(function(){

        var id_name = document.querySelector('#id_name').value;

       $('#edit_conqs #load_edit').load('assets/include/edit_db/conquistas/form_edit_conqs_db.php', {id_name:id_name});

    });
});

  //REQUISIÇÃO AJAX edit_conqs_DB
  $(function(){
    $('#edit_conqs #edit_conqs_db').submit(function(){
        $.ajax({
            url: 'assets/include/edit_db/conquistas/edit_conqs_db.php',
            type: 'POST',
            data: $('#edit_conqs_db').serialize(),
            success: function(data){
                $('.error').html(data);
        }

        });
        return false;
    });
});