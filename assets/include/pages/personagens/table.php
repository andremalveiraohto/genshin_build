<?php
//SELECT TABELA BUILDS
$builds = "SELECT * FROM builds WHERE nome = '$nome_personagem'";
$builds = $pdo->query($builds);
$build = $builds->fetch();

//ARMAS
$arma_1 = $build['arma_1'] ?? ''; 
$arma_2 = $build['arma_2'] ?? '' ;
$arma_3 = $build['arma_3'] ?? '';
$a1_refina = $build['a1_refina'] ?? '';
$a2_refina = $build['a2_refina'] ?? '';
$a3_refina = $build['a3_refina'] ?? '';

//ROW1
$row1_flor = $build['row1_flor'] ?? '';
$row1_flor_attr = $build['row1_flor_attr'] ?? '';
$row1_flor_subattr1 = $build['row1_flor_subattr1'] ?? '';
$row1_flor_subattr2 = $build['row1_flor_subattr2'] ?? '';
$row1_flor_subattr3 = $build['row1_flor_subattr3'] ?? '';
$row1_flor_subattr4 = $build['row1_flor_subattr4'] ?? '';
$row1_flor_star = $build['row1_flor_star'] ?? '';

$row1_pena = $build['row1_pena'] ?? '';
$row1_pena_attr = $build['row1_pena_attr'] ?? '';
$row1_pena_subattr1 = $build['row1_pena_subattr1'] ?? '';
$row1_pena_subattr2 = $build['row1_pena_subattr2'] ?? '';
$row1_pena_subattr3 = $build['row1_pena_subattr3'] ?? '';
$row1_pena_subattr4 = $build['row1_pena_subattr4'] ?? '';
$row1_pena_star = $build['row1_pena_star'] ?? '';

$row1_ampulheta = $build['row1_ampulheta'] ?? '';
$row1_ampulheta_attr = $build['row1_ampulheta_attr'] ?? '';
$row1_ampulheta_subattr1 = $build['row1_ampulheta_subattr1'] ?? '';
$row1_ampulheta_subattr2 = $build['row1_ampulheta_subattr2'] ?? '';
$row1_ampulheta_subattr3 = $build['row1_ampulheta_subattr3'] ?? '';
$row1_ampulheta_subattr4 = $build['row1_ampulheta_subattr4'] ?? '';
$row1_ampulheta_star = $build['row1_ampulheta_star'] ?? '';

$row1_taça = $build['row1_taça'] ?? '';
$row1_taça_attr = $build['row1_taça_attr'] ?? '';
$row1_taça_subattr1 = $build['row1_taça_subattr1'] ?? '';
$row1_taça_subattr2 = $build['row1_taça_subattr2'] ?? '';
$row1_taça_subattr3 = $build['row1_taça_subattr3'] ?? '';
$row1_taça_subattr4 = $build['row1_taça_subattr4'] ?? '';
$row1_taça_star = $build['row1_taça_star'] ?? '';

$row1_coroa = $build['row1_coroa'] ?? '';
$row1_coroa_attr = $build['row1_coroa_attr'] ?? '';
$row1_coroa_subattr1 = $build['row1_coroa_subattr1'] ?? '';
$row1_coroa_subattr2 = $build['row1_coroa_subattr2'] ?? '';
$row1_coroa_subattr3 = $build['row1_coroa_subattr3'] ?? '';
$row1_coroa_subattr4 = $build['row1_coroa_subattr4'] ?? '';
$row1_coroa_star = $build['row1_coroa_star'] ?? '';

$row1_c1 = $build['row1_c1'] ?? '';
$row1_c1_2peças = $build['row1_c1_2peças'] ?? '';
$row1_c1_4peças = $build['row1_c1_4peças'] ?? '';

$row1_c2 = $build['row1_c2'] ?? '';
$row1_c2_2peças = $build['row1_c2_2peças'] ?? '';
$row1_c2_4peças = $build['row1_c2_4peças'] ?? '';


//ROW2
$row2_flor = $build['row2_flor'] ?? '';
$row2_flor_attr = $build['row2_flor_attr'] ?? '';
$row2_flor_star = $build['row2_flor_star'] ?? '';

$row2_pena = $build['row2_pena'] ?? '';
$row2_pena_attr = $build['row2_pena_attr'] ?? '';
$row2_pena_star = $build['row2_pena_star'] ?? '';

$row2_ampulheta = $build['row2_ampulheta'] ?? '';
$row2_ampulheta_attr = $build['row2_ampulheta_attr'] ?? '';
$row2_ampulheta_star = $build['row2_ampulheta_star'] ?? '';

$row2_taça = $build['row2_taça'] ?? '';
$row2_taça_attr = $build['row2_taça_attr'] ?? '';
$row2_taça_star = $build['row2_taça_star'] ?? '';

$row2_coroa = $build['row2_coroa'] ?? '';
$row2_coroa_attr = $build['row2_coroa_attr'] ?? '';
$row2_coroa_star = $build['row2_coroa_star'] ?? '';

$row2_c1 = $build['row2_c1'] ?? '';
$row2_c1_2peças = $build['row2_c1_2peças'] ?? '';
$row2_c1_4peças = $build['row2_c1_4peças'] ?? '';

$row2_c2 = $build['row2_c2'] ?? '';
$row2_c2_2peças = $build['row2_c2_2peças'] ?? '';
$row2_c2_4peças = $build['row2_c2_4peças'] ?? '';

//ROW3
$row3_flor = $build['row3_flor'] ?? '';
$row3_flor_attr = $build['row3_flor_attr'] ?? '';
$row3_flor_star = $build['row3_flor_star'] ?? '';

$row3_pena = $build['row3_pena'] ?? '';
$row3_pena_attr = $build['row3_pena_attr'] ?? '';
$row3_pena_star = $build['row3_pena_star'] ?? '';

$row3_ampulheta = $build['row3_ampulheta'] ?? '';
$row3_ampulheta_attr = $build['row3_ampulheta_attr'] ?? '';
$row3_ampulheta_star = $build['row3_ampulheta_star'] ?? '';

$row3_taça = $build['row3_taça'] ?? '';
$row3_taça_attr = $build['row3_taça_attr'] ?? '';
$row3_taça_star = $build['row3_taça_star'] ?? '';

$row3_coroa = $build['row3_coroa'] ?? '';
$row3_coroa_attr = $build['row3_coroa_attr'] ?? '';
$row3_coroa_star = $build['row3_coroa_star'] ?? '';

$row3_c1 = $build['row3_c1'] ?? '';
$row3_c1_2peças = $build['row3_c1_2peças'] ?? '';
$row3_c1_4peças = $build['row3_c1_4peças'] ?? '';

$row3_c2 = $build['row3_c2'] ?? '';
$row3_c2_2peças = $build['row3_c2_2peças'] ?? '';
$row3_c2_4peças = $build['row3_c2_4peças'] ?? '';


//SELECT TABELA PERSONAGEM COM BASE NO NOME DO PERSONAGEM
$about_personagem = "SELECT * FROM personagens WHERE nome = '$nome_personagem'";
$about_personagem = $pdo->query($about_personagem);
$about_personagem = $about_personagem->fetch();
//SELECT TABELA ARMAS COM BASE NO NOME DAS ARMAS DA BUILD
$arma = "SELECT * FROM armas WHERE nome in ('$arma_1', '$arma_2', '$arma_3' ) ";
$arma = $pdo->query($arma);
$arma = $arma->fetchAll();

// INCLUDE DA TABELA CONJUNTOS
$flor = "SELECT * FROM conjuntos WHERE flor in ('$row1_flor', '$row2_flor', '$row3_flor') 
ORDER BY FIELD (flor, '$row1_flor', '$row2_flor', '$row3_flor') ";
$flor = $pdo->query($flor);
$flor = $flor->fetchAll();


//
$pena = "SELECT * FROM conjuntos WHERE pena in ('$row1_pena', '$row2_pena', '$row3_pena') 
ORDER BY FIELD (pena, '$row1_pena', '$row2_pena', '$row3_pena') ";
$pena = $pdo->query($pena);
$pena = $pena->fetchAll();


//
$ampulheta = "SELECT * FROM conjuntos WHERE ampulheta in ('$row1_ampulheta ', '$row2_ampulheta', '$row3_ampulheta') 
ORDER BY FIELD (ampulheta, '$row1_ampulheta', '$row2_ampulheta', '$row3_ampulheta') ";
$ampulheta = $pdo->query($ampulheta);
$ampulheta = $ampulheta->fetchAll();


//
$taça = "SELECT * FROM conjuntos WHERE taça in ('$row1_taça', '$row2_taça', '$row3_taça') 
ORDER BY FIELD (taça, '$row1_taça', '$row2_taça', '$row3_taça') ";
$taça = $pdo->query($taça);
$taça = $taça->fetchAll();


//
$coroa = "SELECT * FROM conjuntos WHERE coroa in ('$row1_coroa', '$row2_coroa', '$row3_coroa') 
ORDER BY FIELD (coroa, '$row1_coroa', '$row2_coroa', '$row3_coroa') ";
$coroa = $pdo->query($coroa);
$coroa = $coroa->fetchAll();
