    /*========================= AJAX FORM ============================ */
	$(function(){
		$('.form_insert_p').submit(function(){
			$.ajax({
				url: 'insert_p/autenvio/envio_insert_p.php',
                type: 'POST',
				data: $('.form_insert_p').serialize(),
				success: function(data){
                    $('.error').html(data);
            }

			});
			return false;
		});
    });
    
    function closeA(){

        $(".modals_form_shadow").css("display", "none");
        $(".modals_form_shadow").css("opacity", "0");
        $(".alert_ h2").html("");
        $(".btn-center div").html("");
        $("#modal_alert").removeClass("showModal");

     };

/*  Máscara   */
  $(document).ready(function(){
    $("#niver").mask("00/00");
    $("#qt_attr_1").mask("000", {reverse: true});
    $("#qt_attr_2").mask("00.00", {reverse: true});
    $("#qt_attr_3").mask("000", {reverse: true});
    $("#qt_attr_4").mask("00.00", {reverse: true});
});

/*=====================REQUISIÇÃO TEXTAREA EDITOR====================== */

     new FroalaEditor('textarea#textarea_editavel');
     


/*=========================SELECTION OPTION============================ */

function changePersonagem(){

    var select = document.getElementById('select_elemento');
    var selectSetor = document.getElementById('select_personagem');

    var value = select.options[select.selectedIndex].value;

    //remove itens
    var length = selectSetor.options.length;        
    var i;
    for(i = selectSetor.options.length-1 ; i>=0 ; i--)
    {
        selectSetor.remove(i);
    }

    var txt_Personagem = document.createElement('option');
    txt_Personagem.value = '';
    txt_Personagem.text = 'Personagem';
    txt_Personagem.setAttribute("class", "s_d");
    txt_Personagem.selected = true;

    if(value == 'Pyro') {

        var Amber = document.createElement('option');
        Amber.value = 'amber';
        Amber.text = 'Amber';
        Amber.setAttribute("class", "Pyro");

        var Bennet = document.createElement('option');
        Bennet.value = 'bennet';
        Bennet.text = 'Bennet';
        Bennet.setAttribute("class", "Pyro");

        var Diluc = document.createElement('option');
        Diluc.value = 'diluc';
        Diluc.text = 'Diluc';
        Diluc.setAttribute("class", "Pyro");

        var Klee = document.createElement('option');
        Klee.value = 'klee';
        Klee.text = 'Klee';
        Klee.setAttribute("class", "Pyro");

        var Xiangling = document.createElement('option');
        Xiangling.value = 'xiangling';
        Xiangling.text = 'Xiangling';
        Xiangling.setAttribute("class", "Pyro");

        var Xinyan = document.createElement('option');
        Xinyan.value = 'xinyan';
        Xinyan.text = 'Xinyan';
        Xinyan.setAttribute("class", "Pyro");

        selectSetor.add(txt_Personagem);
        selectSetor.add(Amber);
        selectSetor.add(Bennet);
        selectSetor.add(Diluc);
        selectSetor.add(Klee);
        selectSetor.add(Xiangling);
        selectSetor.add(Xinyan);


    } else if (value == 'Hydro'){

        var Barbara = document.createElement('option');
        Barbara.value = 'barbara';
        Barbara.text = 'Barbara';
        Barbara.setAttribute("class", "Hydro");

        var Childe = document.createElement('option');
        Childe.value = 'tartaglia';
        Childe.text = 'Tartaglia';
        Childe.setAttribute("class", "Hydro");

        var Mona = document.createElement('option');
        Mona.value = 'mona';
        Mona.text = 'Mona';
        Mona.setAttribute("class", "Hydro");

        var Xingqiu = document.createElement('option');
        Xingqiu.value = 'xingqiu';
        Xingqiu.text = 'Xingqiu';
        Xingqiu.setAttribute("class", "Hydro");

        selectSetor.add(txt_Personagem);
        selectSetor.add(Barbara);
        selectSetor.add(Childe);
        selectSetor.add(Mona);
        selectSetor.add(Xingqiu);

    }   else if (value == 'Anemo'){

        var Traveler = document.createElement('option');
        Traveler.value = 'aether-lumine';
        Traveler.text = 'Aether/Lumine';
        Traveler.setAttribute("class", "Anemo");

        var Jean = document.createElement('option');
        Jean.value = 'jean';
        Jean.text = 'Jean';
        Jean.setAttribute("class", "Anemo");

        var Sucrose = document.createElement('option');
        Sucrose.value = 'sucrose';
        Sucrose.text = 'Sucrose';
        Sucrose.setAttribute("class", "Anemo");

        var Venti = document.createElement('option');
        Venti.value = 'venti';
        Venti.text = 'Venti';
        Venti.setAttribute("class", "Anemo");

        var Xiao = document.createElement('option');
        Xiao.value = 'xiao';
        Xiao.text = 'Xiao';
        Xiao.setAttribute("class", "Anemo");

        selectSetor.add(txt_Personagem);
        selectSetor.add(Traveler);
        selectSetor.add(Jean);
        selectSetor.add(Sucrose);
        selectSetor.add(Venti);
        selectSetor.add(Xiao);

    }   else if (value == 'Electro'){

        var Beidou = document.createElement('option');
        Beidou.value = 'beidou';
        Beidou.text = 'Beidou';
        Beidou.setAttribute("class", "Electro");

        var Fischl = document.createElement('option');
        Fischl.value = 'fischl';
        Fischl.text = 'Fischl';
        Fischl.setAttribute("class", "Electro");

        var Keqing = document.createElement('option');
        Keqing.value = 'keqing';
        Keqing.text = 'Keqing';
        Keqing.setAttribute("class", "Electro");

        var Lisa = document.createElement('option');
        Lisa.value = 'lisa';
        Lisa.text = 'Lisa';
        Lisa.setAttribute("class", "Electro");

        var Razor = document.createElement('option');
        Razor.value = 'razor';
        Razor.text = 'Razor';
        Razor.setAttribute("class", "Electro");

        selectSetor.add(txt_Personagem);
        selectSetor.add(Beidou);
        selectSetor.add(Fischl);
        selectSetor.add(Keqing);
        selectSetor.add(Lisa);
        selectSetor.add(Razor);

    }   else if (value == 'Dendro'){

        var txt_Personagem = document.createElement('option');
        txt_Personagem.text = 'Personagem';
        txt_Personagem.setAttribute("class", "s_d");
        txt_Personagem.selected = true;


        var noDIs = document.createElement('option');
        noDIs.value = '';
        noDIs.text = 'Não Disponivel';
        noDIs.setAttribute("class", "Dendro");

        selectSetor.add(txt_Personagem);
        selectSetor.add(noDIs);


    }   
    else if (value == 'Cryo'){

        var Chongyun = document.createElement('option');
        Chongyun.value = 'chongyun';
        Chongyun.text = 'Chongyun';
        Chongyun.setAttribute("class", "Cryo");

        var Diona = document.createElement('option');
        Diona.value = 'diona';
        Diona.text = 'Diona';
        Diona.setAttribute("class", "Cryo");

        var Kaeya = document.createElement('option');
        Kaeya.value = 'kaeya';
        Kaeya.text = 'Kaeya';
        Kaeya.setAttribute("class", "Cryo");

        var Qiqi = document.createElement('option');
        Qiqi.value = 'qiqi';
        Qiqi.text = 'Qiqi';
        Qiqi.setAttribute("class", "Cryo");

        selectSetor.add(txt_Personagem);
        selectSetor.add(Chongyun);
        selectSetor.add(Diona);
        selectSetor.add(Kaeya);
        selectSetor.add(Qiqi);

    }   
    else if (value == 'Geo'){

        var Traveler = document.createElement('option');
        Traveler.value = 'aether-lumine';
        Traveler.text = 'Aether/Lumine';
        Traveler.setAttribute("class", "Geo");

        var Albedo = document.createElement('option');
        Albedo.value = 'albedo';
        Albedo.text = 'Albedo';
        Albedo.setAttribute("class", "Geo");

        var Ningguang = document.createElement('option');
        Ningguang.value = 'ningguang';
        Ningguang.text = 'Ningguang';
        Ningguang.setAttribute("class", "Geo");

        var Noelle = document.createElement('option');
        Noelle.value = 'noelle';
        Noelle.text = 'Noelle';
        Noelle.setAttribute("class", "Geo");

        var Zhongli = document.createElement('option');
        Zhongli.value = 'zhongli';
        Zhongli.text = 'Zhongli';
        Zhongli.setAttribute("class", "Geo");

        selectSetor.add(txt_Personagem);
        selectSetor.add(Traveler);
        selectSetor.add(Albedo);
        selectSetor.add(Ningguang);
        selectSetor.add(Noelle);
        selectSetor.add(Zhongli);

    }   
}

//SELECTION ARMA 1
var arma_1_nome = $('select[name="arma_1_nome"] option');
$('select[name="arma_1_genero"]').on('change', function () {
    var arma_1_genero = this.value;
    var novoSelect = arma_1_nome.filter(function () {
        return $(this).data('arma_1_genero') == arma_1_genero;
    });
    $('select[name="arma_1_nome"]').html(novoSelect);
});
//SELECTION ARMA 2
var arma_2_nome = $('select[name="arma_2_nome"] option');
$('select[name="arma_2_genero"]').on('change', function () {
    var arma_2_genero = this.value;
    var novoSelect = arma_2_nome.filter(function () {
        return $(this).data('arma_1_genero') == arma_2_genero;
    });
    $('select[name="arma_2_nome"]').html(novoSelect);
});




//SELECTION CONJUNTO 1
var rows_1_conjunto_1_2peca = $('select[name="rows_1_conjunto_1_2peca"] option');
var rows_1_conjunto_1_4peca = $('select[name="rows_1_conjunto_1_4peca"] option');
$('select[name="rows_1_nome_conjunto_1"]').on('change', function () {
    var rows_1_nome_conjunto_1 = this.value;
    var novoSelect = rows_1_conjunto_1_2peca.filter(function () {
        return $(this).data('conjunto') == rows_1_nome_conjunto_1;
    });
    var novoSelect2 = rows_1_conjunto_1_4peca.filter(function () {
        return $(this).data('conjunto') == rows_1_nome_conjunto_1;
    });
    $('select[name="rows_1_conjunto_1_2peca"]').html(novoSelect);
    $('select[name="rows_1_conjunto_1_4peca"]').html(novoSelect2);
});
//SELECTION CONJUNTO 2
var rows_1_conjunto_2_2peca = $('select[name="rows_1_conjunto_2_2peca"] option');
var rows_1_conjunto_2_4peca = $('select[name="rows_1_conjunto_2_4peca"] option');
$('select[name="rows_1_nome_conjunto_2"]').on('change', function () {
    var rows_1_nome_conjunto_2 = this.value;
    var novoSelect = rows_1_conjunto_2_2peca.filter(function () {
        return $(this).data('conjunto') == rows_1_nome_conjunto_2;
    });
    var novoSelect2 = rows_1_conjunto_2_4peca.filter(function () {
        return $(this).data('conjunto') == rows_1_nome_conjunto_2;
    });
    $('select[name="rows_1_conjunto_2_2peca"]').html(novoSelect);
    $('select[name="rows_1_conjunto_2_4peca"]').html(novoSelect2);
});
//SELECTION CONJUNTO 3
var rows_1_conjunto_3_1peca = $('select[name="rows_1_conjunto_3_1peca"] option');
$('select[name="rows_1_nome_conjunto_3"]').on('change', function () {
    var rows_1_nome_conjunto_3 = this.value;
    var novoSelect2 = rows_1_conjunto_3_1peca.filter(function () {
        return $(this).data('conjunto') == rows_1_nome_conjunto_3;
    });
    $('select[name="rows_1_conjunto_3_1peca"]').html(novoSelect2);
});





//SELECTION STARS / NIVEL ARTEFATO 1
var rows_1_nivel_artefato_1 = $('select[name="rows_1_nivel_artefato_1"] option');
$('select[name="rows_1_nv_star_artefato_1"]').on('change', function () {
    var rows_1_nv_star_artefato_1 = this.value;
    var novoSelect = rows_1_nivel_artefato_1.filter(function () {
        return $(this).data('nivel_star') == rows_1_nv_star_artefato_1;
    });
    $('select[name="rows_1_nivel_artefato_1"]').html(novoSelect);
});

//SELECTION STARS / NIVEL ARTEFATO 2
var rows_1_nivel_artefato_2 = $('select[name="rows_1_nivel_artefato_2"] option');
$('select[name="rows_1_nv_star_artefato_2"]').on('change', function () {
    var rows_1_nv_star_artefato_2 = this.value;
    var novoSelect = rows_1_nivel_artefato_2.filter(function () {
        return $(this).data('nivel_star') == rows_1_nv_star_artefato_2;
    });
    $('select[name="rows_1_nivel_artefato_2"]').html(novoSelect);
});
//SELECTION STARS / NIVEL ARTEFATO 3
var rows_1_nivel_artefato_3 = $('select[name="rows_1_nivel_artefato_3"] option');
$('select[name="rows_1_nv_star_artefato_3"]').on('change', function () {
    var rows_1_nv_star_artefato_3 = this.value;
    var novoSelect = rows_1_nivel_artefato_3.filter(function () {
        return $(this).data('nivel_star') == rows_1_nv_star_artefato_3;
    });
    $('select[name="rows_1_nivel_artefato_3"]').html(novoSelect);
});


// BUTTOM DES/ATIV CHECK 4 PEÇAS CONJU1
var check_conju1 = function () {
    $("#select4_conj1").prop("disabled", !$('#check4_conj1').prop('checked'));
};
check_conju1();
$("#check4_conj1").change(check_conju1);

// BUTTOM DES/ATIV CHECK 4 PEÇAS CONJU2
var check_conju2 = function () {
    $("#select4_conj2").prop("disabled", !$('#check4_conj2').prop('checked'));
};
check_conju2();
$("#check4_conj2").change(check_conju2);

// BUTTOM DES/ATIV CHECK 1 PEÇAS CONJU3

var check_conju3 = function () {
    $('#select1_conj1').prop("disabled", !$('#check4_conj3').prop('checked'));
    $('#select1_conj2').prop("disabled", !$('#check4_conj3').prop('checked'));
};
check_conju3();
$("#check4_conj3").change(check_conju3);




