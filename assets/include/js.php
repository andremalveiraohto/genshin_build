<?php 
    echo'<script>';
    foreach($block as $key => $nameBlocks){
        echo 'var '.$nameBlocks['nome'].'='.$nameBlocks['valor'].';';       
    };
    if(isset($nome_personagem)) { echo'var np="'.$nome_personagem.'";';}
    if(isset($about_personagem['elemento'])) { echo'var ep="'.strtolower($about_personagem['elemento']).'";';}
    echo'</script>';
?>
<div>
<script src='assets/js/jquery.min.js'></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script> 
<script src="assets/js/menu__wrapper.js"></script>
<script src="assets/js/scrollCue.min.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/javascript.js"></script>
</div>



