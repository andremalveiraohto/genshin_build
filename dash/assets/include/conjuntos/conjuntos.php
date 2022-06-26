<?php

$atributo = array(1=>
    array(
        "attrs" => array(1=>   
                    array("attr" => 'Vida'),
                    array("attr" => 'DEF'),
                    array("attr" => 'ATQ'),
                    array("attr" => 'Proficiência Elemental'),
                    array("attr" => 'Recarga de Energia'),
                    array("attr" => 'Bônus de Dano Elemental'),
                    array("attr" => 'Bônus de Dano Físico'),
                    array("attr" => 'Taxa Crítica'),
                    array("attr" => 'Dano Crítico'),
                    array("attr" => 'Bônus de Cura'))),
);
 
 
/* foreach($atributos as $key => $atributosAll){ 
       foreach ($atributosAll['attrs'] as $key_attr => $atributosAll){
        echo "<option data-attrs='{$key}' value='{$key_attr}' >{$atributosAll['attr']}</option>";
       }
} */



foreach($atributo as $key => $atributos){ 
        foreach ($atributos['attrs'] as $key_attr => $atributosAll){
            
        echo "<option data-attrs='{$key}' value='{$key_attr}' >{$atributosAll['attr']}</option>";}} 


echo'<br><br>';

echo ($atributos['attrs'][5]['attr']);


echo'<br><br>';


$conju_2_pecas = 'Conjunto de 2 peças ';
$conju_4_pecas = 'Conjunto de 4 peças ';

$conjunto = array(1=>
    array(
        "Conjunto"=> $aventureiro = 'Aventureiro', 
        "flor" => 'Rosa do Aventureiro',
        "pena" => 'Pena de Cauda de Aventureiro',             
        "ampulheta" => 'Relógio de bolso do Aventureiro',      
        "taça" => 'Cálice de Ouro do Aventureiro',          
        "coroa" => 'Bandana de Aventureiro',
        "2_peças" => $aventureiro_2_pecas = $conju_2_pecas.'Vida Max. +1000', 
        "4_peças" => $aventureiro_4_pecas = $conju_4_pecas.'Abrir um baú recupera 30% de Vida Máxima durante 5 segundos.'), 

    array(
        "Conjunto"=> $sortudo = 'O Sortudo', 
        "flor" => 'Flor Verde do Sortudo',             
        "pena" => 'Pena de Águia do Sortudo',        
        "ampulheta" => 'Ampulheta do Sortudo',
        "taça" > 'Cálice do Sortudo',            
        "coroa" => 'Grinalda de Prata do Sortudo',             
        "2_peças" => $sortudo_2_pecas = $conju_2_pecas.'DEF +100', 
        "4_peças" => $sortudo_4_pecas = $conju_4_pecas.'Ao coletar Mora, restaura 300 de Vida.'), 
);
        

//MOSTRA DETERMINADO ELEMENTO
/* foreach(array_slice($conjunto, 5, -1, true) as $key => $conjuntos){ 
    echo $conjuntos['nome'] .'<br>';
}        */
//MOSTRA DETERMINADO ELEMENTO 2°FORMA
/* foreach ($conjunto as $key => $conjuntos) {
    if( $key >= 2 && $key <=9){echo $conjuntos['nome']."<br>";}
} */


//REMOVE DETERMINADO ELEMENTO
/* foreach ($conjunto as $key => $conjuntos) {
    if( $key >= 2 && $key <=9){} else {echo $conjuntos['nome']."<br>";}
} */



$rows_1_nome_artefato_1 = '1';

echo "<br/>";
($conjunto[$rows_1_nome_artefato_1]['Conjunto']);
echo "<br/>";
echo($conjunto[2]['4_peças']);



?>