/*===================================== CLICK ARMAS ACTIVE ====================================*/


$(function(){

    var $infoarmas = $('.box-7 .box-7-1 .arma_info')
    var $infodescri = $('.box-7 .box-7-2 .arma_descri')

    /*=============================== ARMA 1 ACTIVE ============================================*/
        var  $row1_arma_1_img   = $('.row_1 .row1_arma_1 img');
        var  $remove_hover    = $('.row_1 .weapons img');

        $(".row1_arma_1").hover(function(){
            $row1_arma_1_img.addClass('img_hover');
        },
        function(){
            //Ao remover o cursor da div
            $remove_hover.removeClass('img_hover');
        });
            // active  
            var $row1_arma_1 = $('.row_1 .row1_arma_1');
            var $row1_arma_1_add_active_border = $('.row1_arma_1 .img_border');
            var $remove_active_border = $('.weapons .img_border');

            $row1_arma_1.on('click', function(e) {
                e.preventDefault();
                if(block_Aud == true){mouse_over.play();}
                $remove_active_border .removeClass('img_active');
                $remove_hover  .removeClass('img_border_active');
                $row1_arma_1_add_active_border .addClass('img_active');
                $remove_img_border.removeClass('img_border_active');
                $row1_arma_1_img.addClass('img_border_active');

                $infoarmas.addClass('dp_n');
                $infodescri.addClass('dp_n');
                $('.box-7 .box-7-1 #arma_1_info').removeClass('dp_n')
                $('.box-7 .box-7-2 #arma_1_descri').removeClass('dp_n');

            });

    /*=============================== ARMA 2 ACTIVE ============================================*/
        var  $row1_arma_2_img   = $('.row_1 .row1_arma_2 img');
        var  $remove_hover    = $('.row_1 .weapons img');

        $(".row1_arma_2").hover(function(){
            $row1_arma_2_img.addClass('img_hover');
        },
        function(){
            //Ao remover o cursor da div
            $remove_hover.removeClass('img_hover');
        });
            // active  
            var $row1_arma_2 = $('.row_1 .row1_arma_2');
            var $row1_arma_2_add_active_border = $('.row1_arma_2 .img_border');
            var $remove_active_border = $('.weapons .img_border');

            $row1_arma_2.on('click', function(e) {
                e.preventDefault();
                if(block_Aud == true){mouse_over.play();}
                $remove_active_border .removeClass('img_active');
                $remove_hover  .removeClass('img_border_active');
                $row1_arma_2_add_active_border .addClass('img_active');
                $row1_arma_2_img.addClass('img_border_active');

                $infoarmas.addClass('dp_n');
                $infodescri.addClass('dp_n');
                $('.box-7 .box-7-1 #arma_2_info').removeClass('dp_n')
                $('.box-7 .box-7-2 #arma_2_descri').removeClass('dp_n');


            });

    /*=============================== ARMA 3 ACTIVE ============================================*/
        var  $row1_arma_3_img   = $('.row_1 .row1_arma_3 img');
        var  $remove_hover    = $('.row_1 .weapons img');

        $(".row1_arma_3").hover(function(){
            $row1_arma_3_img.addClass('img_hover');
        },
        function(){
            //Ao remover o cursor da div
            $remove_hover.removeClass('img_hover');
        });
            // active  
            var $row1_arma_3 = $('.row_1 .row1_arma_3');
            var $row1_arma_3_add_active_border = $('.row1_arma_3 .img_border');
            var $remove_active_border = $('.weapons .img_border');

            $row1_arma_3.on('click', function(e) {
                e.preventDefault();
                if(block_Aud == true){mouse_over.play();}
                $remove_active_border .removeClass('img_active');
                $remove_hover  .removeClass('img_border_active');
                $row1_arma_3_add_active_border .addClass('img_active');
                $row1_arma_3_img.addClass('img_border_active');

                $infoarmas.addClass('dp_n');
                $infodescri.addClass('dp_n');
                $('.box-7 .box-7-1 #arma_3_info').removeClass('dp_n')
                $('.box-7 .box-7-2 #arma_3_descri').removeClass('dp_n');

            });
});



/*===================================== ====================== ====================================*/
/*===================================== ROWS 1 ====================================*/
/*===================================== ====================== ====================================*/
var  $remove_img_border    = $('.rows_artefatos .artifafts img');
var  $remove_nv_active    = $('.rows_artefatos .artifafts .nv_artefato_img');
$(function(){
    var $infoarti = $('.box-6 .box-6-1 .infoarti');

/*=============================== ROW 1 FLOR ACTIVE ============================================*/
    var $row1_flor1_img   = $('.row_1 .row1_flor1 img');
    var $row1_flor1_nv   = $('.row_1 .row1_flor1 .nv_artefato_img');
    var $remove_hover    = $('.row_1 .artifafts img');

    $(".row1_flor1").hover(function(){
         $row1_flor1_img.addClass('img_hover');
         $row1_flor1_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row1_flor1_nv.removeClass('nv_hover');
    });
        // active  
        var $row1_flor1 = $('.row_1 .row1_flor1');
        var $row1_flor1_add_active_border = $('.row1_flor1 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row1_flor1.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row1_flor1_add_active_border .addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row1_flor1_img.addClass('img_border_active');
            $row1_flor1_nv.addClass('nv_active');

            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_1_artefato_1').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_1_conjunto').removeClass('dp_n');

        });

/*===============================ROW 1  PENA ACTIVE ============================================*/

    var $row1_pena2_img   = $('.row_1 .row1_pena2 img');
    var $row1_pena2_nv   = $('.row_1 .row1_pena2 .nv_artefato_img');

     $(".row1_pena2").hover(function(){
        $row1_pena2_img.addClass('img_hover');
        $row1_pena2_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row1_pena2_nv.removeClass('nv_hover');
    });
        // active  
        var $row1_pena2 = $('.row_1 .row1_pena2');
        var $row1_pena2_add_active_border = $('.row1_pena2 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row1_pena2.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row1_pena2_add_active_border.addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row1_pena2_img.addClass('img_border_active');
            $row1_pena2_nv.addClass('nv_active');


            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_1_artefato_2').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_1_conjunto').removeClass('dp_n');
        });

/*===============================ROW 1  AMPULHETA ACTIVE ============================================*/

    var  $row1_ampu3_img   = $('.row_1 .row1_ampu3 img');
    var $row1_ampu3_nv   = $('.row_1 .row1_ampu3 .nv_artefato_img');

     $(".row1_ampu3").hover(function(){
        $row1_ampu3_img.addClass('img_hover');
        $row1_ampu3_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row1_ampu3_nv.removeClass('nv_hover');
    });
        // active  
        var $row1_ampu3 = $('.row_1 .row1_ampu3');
        var $row1_ampu3_add_active_border = $('.row1_ampu3 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row1_ampu3.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row1_ampu3_add_active_border.addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row1_ampu3_img.addClass('img_border_active');
            $row1_ampu3_nv.addClass('nv_active');

            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_1_artefato_3').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_1_conjunto').removeClass('dp_n');
        });

    /*===============================ROW 1  TAÇA ACTIVE ============================================*/
    
    var  $row1_taca4_img   = $('.row_1 .row1_taca4 img');
    var $row1_taca4_nv   = $('.row_1 .row1_taca4 .nv_artefato_img');

     $(".row1_taca4").hover(function(){
        $row1_taca4_img.addClass('img_hover');
        $row1_taca4_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row1_taca4_nv.removeClass('nv_hover');
    });
        // active  
        var $row1_taca4 = $('.row_1 .row1_taca4');
        var $row1_taca4_add_active_border = $('.row1_taca4 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row1_taca4.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row1_taca4_add_active_border.addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row1_taca4_img.addClass('img_border_active');
            $row1_taca4_nv.addClass('nv_active');

            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_1_artefato_4').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_1_conjunto').removeClass('dp_n');
        });


    /*===============================ROW 1  COROA ACTIVE ============================================*/

    var  $row1_coroa5_img   = $('.row_1 .row1_coroa5 img');
    var $row1_coroa5_nv   = $('.row_1 .row1_coroa5 .nv_artefato_img');

    $(".row1_coroa5").hover(function(){
       $row1_coroa5_img.addClass('img_hover');
       $row1_coroa5_nv.addClass('nv_hover');
   },
   function(){
       //Ao remover o cursor da div
       $remove_hover.removeClass('img_hover');
       $row1_coroa5_nv.removeClass('nv_hover');
   });
       // active  
       var $row1_coroa5 = $('.row_1 .row1_coroa5');
       var $row1_coroa5_add_active_border = $('.row1_coroa5 .img_border');
       var $remove_active_border = $('.artifafts .img_border');

       $row1_coroa5.on('click', function(e) {
           e.preventDefault();
           if(block_Aud == true){mouse_over.play();}
           $remove_active_border .removeClass('img_active');
           $remove_hover  .removeClass('img_border_active');
           $row1_coroa5_add_active_border.addClass('img_active');
           $remove_img_border.removeClass('img_border_active');
           $remove_nv_active.removeClass('nv_active');
           $row1_coroa5_img.addClass('img_border_active');
           $row1_coroa5_nv.addClass('nv_active');

           $infoarti.addClass('dp_n');
           $('.box-6 .box-6-1 #rows_1_artefato_5').removeClass('dp_n')
           $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
           $('.box-6 .box-6-2 #rows_1_conjunto').removeClass('dp_n');

       });

    /*=============================== ACTIVE E BLOCK INFOCONJU ============================================*/

 });




/*===================================== ====================== ====================================*/
/*===================================== ROW 2 ====================================*/
/*===================================== ====================== ====================================*/

$(function(){
    var $infoarti = $('.box-6 .box-6-1 .infoarti');

/*=============================== ROW 1 FLOR ACTIVE ============================================*/
    var $row2_flor1_img   = $('.row_2 .row2_flor1 img');
    var $row2_flor1_nv   = $('.row_2 .row2_flor1 .nv_artefato_img');
    var $remove_hover    = $('.row_2 .artifafts img');

    $(".row2_flor1").hover(function(){
         $row2_flor1_img.addClass('img_hover');
         $row2_flor1_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row2_flor1_nv.removeClass('nv_hover');
    });
        // active  
        var $row2_flor1 = $('.row_2 .row2_flor1');
        var $row2_flor1_add_active_border = $('.row2_flor1 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row2_flor1.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row2_flor1_add_active_border .addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row2_flor1_img.addClass('img_border_active');
            $row2_flor1_nv.addClass('nv_active');

            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_2_artefato_1').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_2_conjunto').removeClass('dp_n');

        });

/*===============================ROW 1  PENA ACTIVE ============================================*/

    var $row2_pena2_img   = $('.row_2 .row2_pena2 img');
    var $row2_pena2_nv   = $('.row_2 .row2_pena2 .nv_artefato_img');

     $(".row2_pena2").hover(function(){
        $row2_pena2_img.addClass('img_hover');
        $row2_pena2_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row2_pena2_nv.removeClass('nv_hover');
    });
        // active  
        var $row2_pena2 = $('.row_2 .row2_pena2');
        var $row2_pena2_add_active_border = $('.row2_pena2 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row2_pena2.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row2_pena2_add_active_border.addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row2_pena2_img.addClass('img_border_active');
            $row2_pena2_nv.addClass('nv_active');


            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_2_artefato_2').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_2_conjunto').removeClass('dp_n');
        });

/*===============================ROW 1  AMPULHETA ACTIVE ============================================*/

    var  $row2_ampu3_img   = $('.row_2 .row2_ampu3 img');
    var $row2_ampu3_nv   = $('.row_2 .row2_ampu3 .nv_artefato_img');

     $(".row2_ampu3").hover(function(){
        $row2_ampu3_img.addClass('img_hover');
        $row2_ampu3_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row2_ampu3_nv.removeClass('nv_hover');
    });
        // active  
        var $row2_ampu3 = $('.row_2 .row2_ampu3');
        var $row2_ampu3_add_active_border = $('.row2_ampu3 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row2_ampu3.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row2_ampu3_add_active_border.addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row2_ampu3_img.addClass('img_border_active');
            $row2_ampu3_nv.addClass('nv_active');

            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_2_artefato_3').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_2_conjunto').removeClass('dp_n');
        });

    /*===============================ROW 1  TAÇA ACTIVE ============================================*/
    
    var  $row2_taca4_img   = $('.row_2 .row2_taca4 img');
    var $row2_taca4_nv   = $('.row_2 .row2_taca4 .nv_artefato_img');

     $(".row2_taca4").hover(function(){
        $row2_taca4_img.addClass('img_hover');
        $row2_taca4_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row2_taca4_nv.removeClass('nv_hover');
    });
        // active  
        var $row2_taca4 = $('.row_2 .row2_taca4');
        var $row2_taca4_add_active_border = $('.row2_taca4 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row2_taca4.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row2_taca4_add_active_border.addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row2_taca4_img.addClass('img_border_active');
            $row2_taca4_nv.addClass('nv_active');

            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_2_artefato_4').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_2_conjunto').removeClass('dp_n');
        });


    /*===============================ROW 1  COROA ACTIVE ============================================*/

    var  $row2_coroa5_img   = $('.row_2 .row2_coroa5 img');
    var $row2_coroa5_nv   = $('.row_2 .row2_coroa5 .nv_artefato_img');

    $(".row2_coroa5").hover(function(){
       $row2_coroa5_img.addClass('img_hover');
       $row2_coroa5_nv.addClass('nv_hover');
   },
   function(){
       //Ao remover o cursor da div
       $remove_hover.removeClass('img_hover');
       $row2_coroa5_nv.removeClass('nv_hover');
   });
       // active  
       var $row2_coroa5 = $('.row_2 .row2_coroa5');
       var $row2_coroa5_add_active_border = $('.row2_coroa5 .img_border');
       var $remove_active_border = $('.artifafts .img_border');

       $row2_coroa5.on('click', function(e) {
           e.preventDefault();
           if(block_Aud == true){mouse_over.play();}
           $remove_active_border .removeClass('img_active');
           $remove_hover  .removeClass('img_border_active');
           $row2_coroa5_add_active_border.addClass('img_active');
           $remove_img_border.removeClass('img_border_active');
           $remove_nv_active.removeClass('nv_active');
           $row2_coroa5_img.addClass('img_border_active');
           $row2_coroa5_nv.addClass('nv_active');

           $infoarti.addClass('dp_n');
           $('.box-6 .box-6-1 #rows_2_artefato_5').removeClass('dp_n')
           $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
           $('.box-6 .box-6-2 #rows_2_conjunto').removeClass('dp_n');

       });

});

 /*===================================== ====================== ====================================*/
/*===================================== ROW 3 ====================================*/
/*===================================== ====================== ====================================*/

$(function(){
    var $infoarti = $('.box-6 .box-6-1 .infoarti');

/*=============================== ROW 1 FLOR ACTIVE ============================================*/
    var $row3_flor1_img   = $('.row_3 .row3_flor1 img');
    var $row3_flor1_nv   = $('.row_3 .row3_flor1 .nv_artefato_img');
    var $remove_hover    = $('.row_3 .artifafts img');

    $(".row3_flor1").hover(function(){
         $row3_flor1_img.addClass('img_hover');
         $row3_flor1_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row3_flor1_nv.removeClass('nv_hover');
    });
        // active  
        var $row3_flor1 = $('.row_3 .row3_flor1');
        var $row3_flor1_add_active_border = $('.row3_flor1 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row3_flor1.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row3_flor1_add_active_border .addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row3_flor1_img.addClass('img_border_active');
            $row3_flor1_nv.addClass('nv_active');

            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_3_artefato_1').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_3_conjunto').removeClass('dp_n');

        });

/*===============================ROW 1  PENA ACTIVE ============================================*/

    var $row3_pena2_img   = $('.row_3 .row3_pena2 img');
    var $row3_pena2_nv   = $('.row_3 .row3_pena2 .nv_artefato_img');

     $(".row3_pena2").hover(function(){
        $row3_pena2_img.addClass('img_hover');
        $row3_pena2_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row3_pena2_nv.removeClass('nv_hover');
    });
        // active  
        var $row3_pena2 = $('.row_3 .row3_pena2');
        var $row3_pena2_add_active_border = $('.row3_pena2 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row3_pena2.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row3_pena2_add_active_border.addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row3_pena2_img.addClass('img_border_active');
            $row3_pena2_nv.addClass('nv_active');


            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_3_artefato_2').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_3_conjunto').removeClass('dp_n');
        });

/*===============================ROW 1  AMPULHETA ACTIVE ============================================*/

    var  $row3_ampu3_img   = $('.row_3 .row3_ampu3 img');
    var $row3_ampu3_nv   = $('.row_3 .row3_ampu3 .nv_artefato_img');

     $(".row3_ampu3").hover(function(){
        $row3_ampu3_img.addClass('img_hover');
        $row3_ampu3_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row3_ampu3_nv.removeClass('nv_hover');
    });
        // active  
        var $row3_ampu3 = $('.row_3 .row3_ampu3');
        var $row3_ampu3_add_active_border = $('.row3_ampu3 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row3_ampu3.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row3_ampu3_add_active_border.addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row3_ampu3_img.addClass('img_border_active');
            $row3_ampu3_nv.addClass('nv_active');

            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_3_artefato_3').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_3_conjunto').removeClass('dp_n');
        });

    /*===============================ROW 1  TAÇA ACTIVE ============================================*/
    
    var  $row3_taca4_img   = $('.row_3 .row3_taca4 img');
    var $row3_taca4_nv   = $('.row_3 .row3_taca4 .nv_artefato_img');

     $(".row3_taca4").hover(function(){
        $row3_taca4_img.addClass('img_hover');
        $row3_taca4_nv.addClass('nv_hover');
    },
    function(){
        //Ao remover o cursor da div
        $remove_hover.removeClass('img_hover');
        $row3_taca4_nv.removeClass('nv_hover');
    });
        // active  
        var $row3_taca4 = $('.row_3 .row3_taca4');
        var $row3_taca4_add_active_border = $('.row3_taca4 .img_border');
        var $remove_active_border = $('.artifafts .img_border');

        $row3_taca4.on('click', function(e) {
            e.preventDefault();
            if(block_Aud == true){mouse_over.play();}
            $remove_active_border .removeClass('img_active');
            $remove_hover  .removeClass('img_border_active');
            $row3_taca4_add_active_border.addClass('img_active');
            $remove_img_border.removeClass('img_border_active');
            $remove_nv_active.removeClass('nv_active');
            $row3_taca4_img.addClass('img_border_active');
            $row3_taca4_nv.addClass('nv_active');

            $infoarti.addClass('dp_n');
            $('.box-6 .box-6-1 #rows_3_artefato_4').removeClass('dp_n')
            $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
            $('.box-6 .box-6-2 #rows_3_conjunto').removeClass('dp_n');
        });


    /*===============================ROW 1  COROA ACTIVE ============================================*/

    var  $row3_coroa5_img   = $('.row_3 .row3_coroa5 img');
    var $row3_coroa5_nv   = $('.row_3 .row3_coroa5 .nv_artefato_img');

    $(".row3_coroa5").hover(function(){
       $row3_coroa5_img.addClass('img_hover');
       $row3_coroa5_nv.addClass('nv_hover');
   },
   function(){
       //Ao remover o cursor da div
       $remove_hover.removeClass('img_hover');
       $row3_coroa5_nv.removeClass('nv_hover');
   });
       // active  
       var $row3_coroa5 = $('.row_3 .row3_coroa5');
       var $row3_coroa5_add_active_border = $('.row3_coroa5 .img_border');
       var $remove_active_border = $('.artifafts .img_border');

       $row3_coroa5.on('click', function(e) {
           e.preventDefault();
           if(block_Aud == true){mouse_over.play();}
           $remove_active_border .removeClass('img_active');
           $remove_hover  .removeClass('img_border_active');
           $row3_coroa5_add_active_border.addClass('img_active');
           $remove_img_border.removeClass('img_border_active');
           $remove_nv_active.removeClass('nv_active');
           $row3_coroa5_img.addClass('img_border_active');
           $row3_coroa5_nv.addClass('nv_active');

           $infoarti.addClass('dp_n');
           $('.box-6 .box-6-1 #rows_3_artefato_5').removeClass('dp_n')
           $('.box-6 .box-6-2 .infoconju').addClass('dp_n');
           $('.box-6 .box-6-2 #rows_3_conjunto').removeClass('dp_n');

       });

 });