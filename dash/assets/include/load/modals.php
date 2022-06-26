<!-- Modal add_build-->
<div class="modal fade closeModal" id="add_build" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 80%!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Adicionar Build</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
      <div  class="padding_left_right_25px width_100">
            <form id="insert_build_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="row margin_bottom_25px">
                    <div class="col-sm">
                        <select name="nome" type="text"class="form-control">
                          <option class="dp_n" value >Selecionar Personagem</option>
                          <?php
                            foreach($personagens as $personagem) {
                              echo'<option value="'.$personagem['nome'].'">'.ucfirst($personagem['nome']).'</option>';                      
                            }
                          ?>
                        </select>
                    </div>                    
                </div>
                <label for="">ARMAS</label>
                <div class="row margin_bottom_15px">
                    <div class="col-sm-4">
                      <select name="arma_1" type="text"class="form-control" required="">
                        <option class="dp_n" value >Arma 1</option>
                          <?php
                              foreach($armas as $arma) {
                                  echo'<option value="'.$arma['nome'].'">'.ucfirst($arma['nome']).'</option>';
                              }
                          ?>
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <select name="arma_2" type="text"class="form-control">
                        <option class="dp_n" value >Arma 2</option>
                          <?php
                              foreach($armas as $arma) {
                                  echo'<option value="'.$arma['nome'].'">'.ucfirst($arma['nome']).'</option>';
                              }
                          ?>
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <select name="arma_3" type="text"class="form-control">
                        <option class="dp_n" value >Arma 3</option>
                          <?php
                              foreach($armas as $arma) {
                                  echo'<option value="'.$arma['nome'].'">'.ucfirst($arma['nome']).'</option>';
                              }
                          ?>
                      </select>
                    </div>
                </div>
                <div class="row margin_bottom_25px">
                    <div class="col-sm-4">
                      <select name="a1_refina" type="text"class="form-control" required="">
                        <option class="dp_n" value >Refinamento</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <select name="a2_refina" type="text"class="form-control">
                        <option class="dp_n" value >Refinamento</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <select name="a3_refina" type="text"class="form-control">
                        <option class="dp_n" value >Refinamento</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                      </select>
                    </div>
                </div>
                <div class="tab-menu">
                    <ul>
                        <li><a href="#" class="tab-a active-a" data-id="add_build1">BUILD 1</a></li>
                        <li><a href="#" class="tab-a" data-id="add_build2">BUILD 2</a></li>
                        <li><a href="#" class="tab-a" data-id="add_build3">BUILD 3</a></li>
                    </ul>
                </div>

                <div  class="tab tab-active" data-id="add_build1">
                  <div class="row margin_bottom_25px">
                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row1_flor" type="text"class="form-control" required="">
                            <option class="dp_n" value >Flor</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['flor'].'">'.ucfirst($conjunto['flor']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row1_flor_attr" type="text"class="mb form-control" required="">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>

                          <select name="row1_flor_subattr1" type="text"class="mb form-control" required="">
                            <option class="dp_n" selected value >Sub Atributo 1</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>

                          <select name="row1_flor_subattr2" type="text"class="mb form-control" required="">
                            <option class="dp_n" selected value >Sub Atributo 2</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
        
                          <select name="row1_flor_subattr3" type="text"class="mb form-control" required="">
                            <option class="dp_n" selected value >Sub Atributo 3</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                          
                          <select name="row1_flor_subattr4" type="text"class="mb form-control" required="">
                            <option class="dp_n" selected value >Sub Atributo 4</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                          
                          
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row1_flor_star" type="text"class="form-control" required="">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row1_pena" type="text"class="form-control" required="">
                            <option class="dp_n" value >Pluma</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['pena'].'">'.ucfirst($conjunto['pena']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row1_pena_attr" type="text"class="form-control" required="">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row1_pena_star" type="text"class="form-control" required="">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row1_ampulheta" type="text"class="form-control" required="">
                            <option class="dp_n" value >Areia</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['ampulheta'].'">'.ucfirst($conjunto['ampulheta']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row1_ampulheta_attr" type="text"class="form-control" required="">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row1_ampulheta_star" type="text"class="form-control" required="">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row1_taça" type="text"class="form-control" required="">
                            <option class="dp_n" value >Cálice</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['taça'].'">'.ucfirst($conjunto['taça']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row1_taça_attr" type="text"class="form-control" required="">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row1_taça_star" type="text"class="form-control" required="">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row1_coroa" type="text"class="form-control" required="">
                            <option class="dp_n" value >Tiara</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['coroa'].'">'.ucfirst($conjunto['coroa']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row1_coroa_attr" type="text"class="form-control" required="">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row1_coroa_star" type="text"class="form-control" required="">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="row width_100 margin_l_r_0px margin_bottom_25px">
                        <div class="col-sm">
                          <select name="row1_c1" type="text"class="form-control" required="">
                            <option class="dp_n" value >Conjunto 1</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                                  }
                              ?>
                          </select>
                        </div> 
                        <div class="col-sm">
                          <select name="row1_c1_2peças" type="text"class="form-control" required="">
                            <option class="dp_n" value >2 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['2_peças'].'">'.ucfirst($conjunto['2_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                        <div class="col-sm">
                          <select name="row1_c1_4peças" type="text"class="form-control">
                            <option class="dp_n" value >4 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['4_peças'].'">'.ucfirst($conjunto['4_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                      </div>

                      <div class="row width_100 margin_l_r_0px margin_bottom_25px">
                        <div class="col-sm">
                          <select name="row1_c2" type="text"class="form-control" required="">
                            <option class="dp_n" value >Conjunto 2</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                                  }
                              ?>
                          </select>
                        </div> 
                        <div class="col-sm">
                          <select name="row1_c2_2peças" type="text"class="form-control" required="">
                            <option class="dp_n" value >2 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['2_peças'].'">'.ucfirst($conjunto['2_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                        <div class="col-sm">
                          <select name="row1_c2_4peças" type="text"class="form-control">
                            <option class="dp_n" value >4 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['4_peças'].'">'.ucfirst($conjunto['4_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>

                <div  class="tab " data-id="add_build2">
                  <div class="row margin_bottom_25px">
                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row2_flor" type="text"class="form-control">
                            <option class="dp_n" value >Flor</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['flor'].'">'.ucfirst($conjunto['flor']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row2_flor_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row2_flor_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row2_pena" type="text"class="form-control">
                            <option class="dp_n" value >Pluma</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['pena'].'">'.ucfirst($conjunto['pena']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row2_pena_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row2_pena_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row2_ampulheta" type="text"class="form-control">
                            <option class="dp_n" value >Areia</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['ampulheta'].'">'.ucfirst($conjunto['ampulheta']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row2_ampulheta_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row2_ampulheta_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row2_taça" type="text"class="form-control">
                            <option class="dp_n" value >Cálice</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['taça'].'">'.ucfirst($conjunto['taça']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row2_taça_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row2_taça_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row2_coroa" type="text"class="form-control">
                            <option class="dp_n" value >Tiara</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['coroa'].'">'.ucfirst($conjunto['coroa']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row2_coroa_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row2_coroa_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>
                      <div class="row width_100 margin_l_r_0px margin_bottom_25px">
                        <div class="col-sm">
                          <select name="row2_c1" type="text"class="form-control">
                            <option class="dp_n" value >Conjunto 1</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                                  }
                              ?>
                          </select>
                        </div> 
                        <div class="col-sm">
                          <select name="row2_c1_2peças" type="text"class="form-control">
                            <option class="dp_n" value >2 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['2_peças'].'">'.ucfirst($conjunto['2_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                        <div class="col-sm">
                          <select name="row2_c1_4peças" type="text"class="form-control">
                            <option class="dp_n" value >4 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['4_peças'].'">'.ucfirst($conjunto['4_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                      </div>

                      <div class="row width_100 margin_l_r_0px margin_bottom_25px">
                        <div class="col-sm">
                          <select name="row2_c2" type="text"class="form-control">
                            <option class="dp_n" value >Conjunto 2</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                                  }
                              ?>
                          </select>
                        </div> 
                        <div class="col-sm">
                          <select name="row2_c2_2peças" type="text"class="form-control">
                            <option class="dp_n" value >2 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['2_peças'].'">'.ucfirst($conjunto['2_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                        <div class="col-sm">
                          <select name="row2_c2_4peças" type="text"class="form-control">
                            <option class="dp_n" value >4 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['4_peças'].'">'.ucfirst($conjunto['4_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>

                <div  class="tab " data-id="add_build3">
                  <div class="row margin_bottom_25px">
                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row3_flor" type="text"class="form-control">
                            <option class="dp_n" value >Flor</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['flor'].'">'.ucfirst($conjunto['flor']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row3_flor_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row3_flor_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row3_pena" type="text"class="form-control">
                            <option class="dp_n" value >Pluma</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['pena'].'">'.ucfirst($conjunto['pena']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row3_pena_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row3_pena_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row3_ampulheta" type="text"class="form-control">
                            <option class="dp_n" value >Areia</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['ampulheta'].'">'.ucfirst($conjunto['ampulheta']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row3_ampulheta_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row3_ampulheta_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row3_taça" type="text"class="form-control">
                            <option class="dp_n" value >Cálice</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['taça'].'">'.ucfirst($conjunto['taça']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row3_taça_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row3_taça_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm margin_bottom_25px">
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row3_coroa" type="text"class="form-control">
                            <option class="dp_n" value >Tiara</option>
                              <?php
                              foreach($conjuntos as $conjunto) {
                                  echo'<option value="'.$conjunto['coroa'].'">'.ucfirst($conjunto['coroa']).'</option>';
                              }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px margin_bottom_15px">
                          <select name="row3_coroa_attr" type="text"class="form-control">
                            <option class="dp_n" selected value >Atributo</option>
                              <?php
                                foreach($attributes as $attribute) {
                                  echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                                }
                              ?>
                          </select>
                        </div>
                        <div class="row margin_l_r_0px  margin_bottom_15px">
                          <select name="row3_coroa_star" type="text"class="form-control">
                                <option class="dp_n" value="">Estrelas</option>
                                <option value="5">5 Estrelas</option>
                                <option value="4">4 Estrelas</option>
                                <option value="3">3 Estrelas</option>
                            </select>
                        </div>
                      </div>

                      <div class="row width_100 margin_l_r_0px margin_bottom_25px">
                        <div class="col-sm">
                          <select name="row3_c1" type="text"class="form-control">
                            <option class="dp_n" value >Conjunto 1</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                                  }
                              ?>
                          </select>
                        </div> 
                        <div class="col-sm">
                          <select name="row3_c1_2peças" type="text"class="form-control">
                            <option class="dp_n" value >2 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['2_peças'].'">'.ucfirst($conjunto['2_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                        <div class="col-sm">
                          <select name="row3_c1_4peças" type="text"class="form-control">
                            <option class="dp_n" value >4 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['4_peças'].'">'.ucfirst($conjunto['4_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                      </div>

                      <div class="row width_100 margin_l_r_0px margin_bottom_25px">
                        <div class="col-sm">
                          <select name="row3_c2" type="text"class="form-control">
                            <option class="dp_n" value >Conjunto 2</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['conjunto'].'">'.ucfirst($conjunto['conjunto']).'</option>';
                                  }
                              ?>
                          </select>
                        </div> 
                        <div class="col-sm">
                          <select name="row3_c2_2peças" type="text"class="form-control">
                            <option class="dp_n" value >2 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['2_peças'].'">'.ucfirst($conjunto['2_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                        <div class="col-sm">
                          <select name="row3_c2_4peças" type="text"class="form-control">
                            <option class="dp_n" value >4 peças</option>
                              <?php
                                  foreach($conjuntos as $conjunto) {
                                      echo'<option value="'.$conjunto['4_peças'].'">'.ucfirst($conjunto['4_peças']).'</option>';
                                  }
                              ?>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="success"></div>
                <div class="error"></div>
                <div class="modal-footer">
                    <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-plus"></i> Adicionar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal edit_build-->
<div class="modal fade closeModal" id="edit_build" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 80%!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Editar Build</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
      <div  class="padding_left_right_25px width_100">
            <form id="edit_builds_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="row margin_bottom_25px">
                  <div class="col-sm grid_selected">
                      <select id="builds_selected" name="id" type="text"class="select_edit form-control" required="">
                          <?php include 'assets/include/edit_db/builds/select_builds_db.php'?>
                      </select>
                      <div id="delete_builds_db" class="delete_button" ><div class="button_del"><i class="far fa-trash-alt"></i></div></div>
                  </div>
                </div>
                <div id="load_edit"></div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal add_personagem-->
<div class="modal fade closeModal" id="add_personagem" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 80%!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Adicionar Personagem ao Banco de Dados</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div  class="padding_left_right_25px width_100">
            <form id="insert_p_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
              <div class="row">
                <div class="col-sm" >
                  <div class="row margin_bottom_25px">
                      <div class="col-sm padding_left_right_5px">
                          <input name="nome" type="text" value="" class="form-control"  placeholder="Nome" required="">
                      </div>
                      <div class="col-sm padding_left_right_5px">
                          <input name="title" type="text" value="" class="form-control"  placeholder="Título">
                      </div>                
                  </div>
                  <div class="row margin_bottom_25px">
                      <div class="col-sm padding_left_right_5px">
                          <input name="afiliação" type="text" value="" class="form-control"  placeholder="Afiliação">
                      </div>
                      <div class="col-sm padding_left_right_5px">
                          <input name="constelação" type="text" value="" class="form-control"  placeholder="Constelação">
                      </div>
                  </div>
                  <div class="row margin_bottom_25px">
                      <div class="col-sm-3 padding_left_right_5px">
                          <select name="nation" type="text"class="form-control">
                              <option class="dp_n" value="">Nação</option>
                              <?php
                                  foreach($nations as $nation) {
                                      echo'<option value="'.$nation['nome'].'">'.$nation['id'].' - '.ucfirst($nation['nome']).'</option>';
                                  }
                              ?>
                          </select>
                      </div>    
                      <div class="col-sm-3 padding_left_right_5px">
                          <select name="elemento" type="text"class="form-control" required="">
                              <option class="dp_n" value="">Elemento</option>
                              <?php
                                  foreach($elementos as $elemento) {
                                      echo'<option value="'.$elemento['nome'].'">'.ucfirst($elemento['nome']).'</option>';
                                  }
                              ?>
                          </select>
                      </div>    
                      <div class="col-sm-2 padding_left_right_5px">
                          <select name="star" type="text"class="form-control"  placeholder="Elemento" required="">
                              <option class="dp_n" value="">Estrelas</option>
                              <option value="5">5 Estrelas</option>
                              <option value="4">4 Estrelas</option>
                          </select>
                      </div>
                      <div class="col-sm-2 padding_left_right_5px">
                        <select name="arma" type="text"class="form-control"  placeholder="Elemento">
                          <option class="dp_n" value="">Arma</option>
                              <?php
                                  foreach($tipo_armas as $tipo_arma) {
                                      echo'<option value="'.$tipo_arma['tipo'].'">'.ucfirst($tipo_arma['tipo']).'</option>';
                                  }
                              ?>
                          </select>
                      </div>
                      <div class="col-sm-2 padding_left_right_5px">
                          <input id="niver" name="niver" type="text" value="" class="form-control"  placeholder="Aniversário">
                      </div>
                  </div>
                </div>
                <div class="col-sm" >
                  <div class="row margin_bottom_25px">
                      <div class="col-sm padding_left_right_5px">
                          <textarea name="comentário" type="text" style="height: 164px;" value="" class="form-control"  placeholder="Comentário" ></textarea>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row margin_bottom_25px">
                  <div class="col-sm padding_left_right_5px">
                      <textarea name="habilidade" id="textarea_editavel" type="text" value="" class="form-control"  style="height: 250px" placeholder="Sobre Habilidade" ></textarea>
                  </div>
              </div>
                <div class="success"></div>
                <div class="error"></div>
                <div class="modal-footer">
                    <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-plus"></i> Adicionar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Modal edit_personagem-->
<div class="modal fade closeModal" id="edit_personagem" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 80%!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Editar Personagem</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div  class="padding_left_right_25px width_100">
            <form id="edit_p_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="row margin_bottom_25px">
                    <div class="col-sm padding_left_right_5px grid_selected">
                        <select id="p_selected" name="id" type="text"class="select_edit form-control" required="">
                            <?php include 'assets/include/edit_db/personagens/select_p_db.php'?>
                        </select>
                        <div id="delete_p_db" class="delete_button" ><div class="button_del"><i class="far fa-trash-alt"></i></div></div>
                    </div>
                </div>
                <div id="load_edit"></div>
            </form>
            
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Modal add_arma-->
<div class="modal fade closeModal" id="add_arma" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%!important;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Adicionar Arma ao Banco de Dados</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
      <div  class="padding_left_right_25px width_100">
            <form id="insert_a_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="row margin_bottom_25px">
                    <div class="col-sm-3">
                      <select name="tipo" type="text"class="form-control" required="">
                        <option class="dp_n" value="">Tipo</option>
                            <?php
                                foreach($tipo_armas as $tipo_arma) {
                                    echo'<option value="'.$tipo_arma['tipo'].'">'.ucfirst($tipo_arma['tipo']).'</option>';
                                }
                            ?>
                      </select>
                    </div>
                    <div class="col-sm">
                      <input name="nome" type="text" value="" class="form-control"  placeholder="Nome" required="">
                    </div>      
                    <div class="col-sm-3">
                        <select name="star" type="text"class="form-control" required="">
                            <option class="dp_n" value="">Estrelas</option>
                            <option value="5">5 Estrelas</option>
                            <option value="4">4 Estrelas</option>
                            <option value="3">3 Estrelas</option>
                        </select>
                    </div>              
                </div>
                <div class="row margin_bottom_25px">
                    <div class="col-sm">
                      <select name="atributo_1" type="text"class="form-control" required="">
                        <option class="dp_n" value="">Atributo 1</option>
                            <?php
                              foreach($attributes as $attribute) {
                                echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                              }
                            ?>
                      </select>
                    </div>
                    <div class="col-sm-2 p_left_0">
                      <input name="atributo_1_valor" type="text" value="" class="form-control atributo_valor"  placeholder="Valor" required="">
                    </div>
                    <div class="col-sm">
                      <select name="atributo_2" type="text"class="form-control" required="">
                        <option class="dp_n" value="">Atributo 2</option>
                            <?php
                              foreach($attributes as $attribute) {
                                echo'<option value="'.$attribute['attribute'].'">'.ucfirst($attribute['attribute'].$attribute['%']).'</option>';
                              }
                            ?>
                      </select>
                    </div>
                    <div class="col-sm-2 p_left_0">
                      <input name="atributo_2_valor" type="text" value="" class="form-control atributo_valor"  placeholder="Valor" required="">
                    </div>
                </div>
                <div class="row margin_bottom_25px">
                    <div class="col-sm-3">
                        <select name="nivel" type="text"class="form-control" required="">
                            <option class="dp_n" value="">Nível</option>
                            <option value="90">+90</option>
                            <option value="80">+80</option>
                            <option value="70">+70</option>
                            <option value="60">+60</option>
                            <option value="50">+50</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input name="titulo_habilidade" type="text" value="" class="form-control"  placeholder="Título Habilidade" required="">
                    </div>
                </div>
                <div class="tab-menu">
                    <ul>
                        <li><a href="#" class="add-refina active-a" data-id="add_refina1">Refina 1</a></li>
                        <li><a href="#" class="add-refina" data-id="add_refina2">Refina 2</a></li>
                        <li><a href="#" class="add-refina" data-id="add_refina3">Refina 3</a></li>
                        <li><a href="#" class="add-refina" data-id="add_refina4">Refina 4</a></li>
                        <li><a href="#" class="add-refina" data-id="add_refina5">Refina 5</a></li>
                    </ul>
                </div>
                <div  class="refina tab-active" data-id="add_refina1">
                  <div class="row ">
                      <div class="col-sm margin_bottom_15px">
                          <textarea name="refina_1" type="text" value="" class="form-control"  placeholder="Refinamento 1" required="" style="height: 150px;"></textarea>
                      </div>
                  </div>
                </div>
                <div  class="refina" data-id="add_refina2">
                  <div class="row ">
                      <div class="col-sm margin_bottom_15px">
                          <textarea name="refina_2" type="text" value="" class="form-control"  placeholder="Refinamento 2" required="" style="height: 150px;"></textarea>
                      </div>
                  </div>
                </div>
                <div  class="refina" data-id="add_refina3">
                  <div class="row ">
                      <div class="col-sm margin_bottom_15px">
                          <textarea name="refina_3" type="text" value="" class="form-control"  placeholder="Refinamento 3" required="" style="height: 150px;"></textarea>
                      </div>
                  </div>
                </div>
                <div  class="refina" data-id="add_refina4">
                  <div class="row ">
                      <div class="col-sm margin_bottom_15px">
                          <textarea name="refina_4" type="text" value="" class="form-control"  placeholder="Refinamento 4" required="" style="height: 150px;"></textarea>
                      </div>
                  </div>
                </div>
                <div  class="refina" data-id="add_refina5">
                  <div class="row ">
                      <div class="col-sm margin_bottom_15px">
                          <textarea name="refina_5" type="text" value="" class="form-control"  placeholder="Refinamento 5" required="" style="height: 150px;"></textarea>
                      </div>
                  </div>
                </div>
                <div>span.blue </div>
                <div class="success"></div>
                <div class="error"></div>
                <div class="modal-footer">
                    <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-plus"></i> Adicionar</button>
                </div>
            </form>
            
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal edit_arma-->
<div class="modal fade closeModal" id="edit_arma" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%!important;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Editar Arma</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
      <div  class="padding_left_right_25px width_100">
            <form id="edit_a_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="row margin_bottom_25px">
                    <div class="col-sm grid_selected">
                        <select id="a_selected" name="id" type="text"class="select_edit form-control" required="">
                            <?php include 'assets/include/edit_db/armas/select_a_db.php'?>
                        </select>
                        <div id="delete_a_db" class="delete_button" ><div class="button_del"><i class="far fa-trash-alt"></i></div></div>
                    </div>
                </div>
                <div id="load_edit"></div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal add_conjunto-->
<div class="modal fade closeModal" id="add_conjunto" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 60%!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Adicionar Conjunto de Artefatos ao Banco de Dados</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div  class="padding_left_right_25px width_100">
            <form id="insert_conj_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
              <div class="row">
                <div class="col-sm">
                  <div class="row margin_bottom_25px">
                    <div class="col-sm">
                        <input name="conjunto" type="text" value="" class="form-control"  placeholder="Nome do Conjunto" required="">
                    </div>
                  </div>
                  <div class="row margin_bottom_25px">
                    <div class="col-sm flex_end">
                        <i class="fas fa-circle"></i><input name="flor" type="text" value="" class="form-control input_500px"  placeholder="Nome da Flor da Vida">
                    </div>  
                  </div>                
                  <div class="row margin_bottom_25px">
                    <div class="col-sm flex_end">
                        <i class="fas fa-circle"></i><input name="pena" type="text" value="" class="form-control input_500px"  placeholder="Nome da Pluma da Morte">
                    </div>  
                  </div>     
                  <div class="row margin_bottom_25px">
                    <div class="col-sm flex_end">
                        <i class="fas fa-circle"></i><input name="ampulheta" type="text" value="" class="form-control input_500px"  placeholder="Nome da Areia do Tempo">
                    </div>  
                  </div>     
                  <div class="row margin_bottom_25px">
                    <div class="col-sm flex_end">
                        <i class="fas fa-circle"></i><input name="taça" type="text" value="" class="form-control input_500px"  placeholder="Nome do Cálice de Erátema">
                    </div>  
                  </div>  
                  <div class="row margin_bottom_25px">
                    <div class="col-sm flex_end">
                        <i class="fas fa-circle"></i><input name="coroa" type="text" value="" class="form-control input_500px"  placeholder="Nome da Tiara de Logos">
                    </div>  
                  </div> 
                </div>     
                <div class="col-sm">  
                  <div class="row margin_bottom_25px">
                      <div class="col-sm">
                          <textarea name="1_peças" type="text" value="" class="form-control" style="height: 101px;" placeholder="Conjunto de 1 peça">Conjunto de 1 peça </textarea>
                      </div>
                  </div>
                  <div class="row margin_bottom_25px">
                      <div class="col-sm">
                          <textarea name="2_peças" type="text" value="" class="form-control" style="height: 101px;" placeholder="Conjunto de 2 peças">Conjunto de 2 peças </textarea>
                      </div>
                  </div>
                  <div class="row margin_bottom_25px">
                      <div class="col-sm">
                          <textarea name="4_peças" type="text" value="" class="form-control" style="height: 101px;" placeholder="Conjunto de 4 peças">Conjunto de 4 peças </textarea>
                      </div>
                  </div>
                  <input name="3" type="hidden" value="12" class="form-control">
                  <input name="4" type="hidden" value="16" class="form-control">
                  <input name="5" type="hidden" value="20" class="form-control">
                </div> 
              </div>
                <div class="success"></div>
                <div class="error"></div>
                <div class="modal-footer">
                    <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-plus"></i> Adicionar</button>
                </div>
            </form>
            
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Modal edit_conjunto-->
<div class="modal fade closeModal" id="edit_conjunto" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 60%!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Editar Conjunto de Artefatos</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div  class="padding_left_right_25px width_100">
            <form id="edit_conj_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="row margin_bottom_25px">
                    <div class="col-sm grid_selected">
                        <select id="conj_selected" name="id" type="text"class="select_edit form-control" required="">
                            <?php include 'assets/include/edit_db/conjuntos/select_conj_db.php'?>
                        </select>
                        <div id="delete_conj_db" class="delete_button" ><div class="button_del"><i class="far fa-trash-alt"></i></div></div>
                    </div>
                </div>
                <div id="load_edit"></div>
            </form>
            
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Modal add_conqs-->
<div class="modal fade closeModal" id="add_conqs" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 60%!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Adicionar Conquista ao Banco de Dados</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div  class="padding_left_right_25px width_100">
            <form id="insert_conqstitle_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
              <div class="row row margin_bottom_25px">
                <div class="col-sm">
                    <input name="title" type="text" value="" class="form-control" required placeholder="Adicionar Título de Conquista">
                </div>
                <div class="col-sm">
                    <input name="qt_conqs" type="text" value="" class="form-control gems" required placeholder="Total de Conquistas">
                </div>
                <div class="col-sm-2">
                <button type="submit" class="au-btn au-btn-load au-btn-h38px js-load-btn">Salvar</button>
                </div>
              </div>
            </form>
            <form id="insert_conqs_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
              <div class="row">
                <div class="col-sm">
                <div class="row margin_bottom_25px">
                    <div class="col-sm">
                        <select id="id_title" name="id_title" type="text"class="form-control" required>
                            <?php include 'assets/include/edit_db/conquistas/select_conqs_db.php'?>
                        </select>
                    </div>
                </div>
                  <div class="row margin_bottom_25px">
                    <div class="col-sm">
                        <input name="name" type="text" value="" class="form-control"  placeholder="Nome">
                    </div>
                    <div class="col-sm">
                      <input name="gems" type="text" value="" class="form-control gems"  placeholder="Quantidade Gemas">
                    </div>
                    <div class="col-sm">
                      <select name="nivel" type="text"class="form-control">
                        <option class="dp_n" value="">Nível</option>
                        <option value="1">1 Nível</option>
                        <option value="3">3 Nível</option>
                      </select>
                    </div>
                    <div class="col-sm">
                        <input name="id_url" type="text" value="" class="form-control"  placeholder="ID URL Vídeo">
                    </div>
                  </div>
                  <div class="row margin_bottom_25px">
                      <div class="col-sm">
                          <textarea name="objetivo" type="text" value="" class="form-control" style="height: 101px;" placeholder="Objetivo"></textarea>
                      </div>
                  </div>
                </div>     

              </div>
                <div class="success"></div>
                <div class="error"></div>
                <div class="modal-footer">
                    <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-plus"></i> Adicionar</button>
                </div>
            </form>
            
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Modal edit_conqs-->
<div class="modal fade closeModal" id="edit_conqs" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 60%!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Editar Conquistas</h5>
        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div  class="padding_left_right_25px width_100">
            <form id="edit_conqs_db" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="row margin_bottom_25px">
                    <div class="col-sm grid_selected">
                        <select id="conqs_selectTitle" name="id" type="text"class="select_edit form-control" required="">
                            <?php include 'assets/include/edit_db/conquistas/select_conqs_db.php'?>
                        </select>
                        <div id="delete_conqs_db" class="delete_button" ><div class="button_del"><i class="far fa-trash-alt"></i></div></div>
                    </div>
                </div>
                
                <div class="row">
                  <div class="col-sm">
                      <div class="row margin_bottom_25px">
                          <div class="col-sm">
                              <select id="id_name" name="id_name" type="text"class="form-control">
                                  
                              </select>
                          </div>
                      </div>
                      <div id="load_edit"></div>
                  </div>     
                </div>

                <div class="success"></div>
                <div class="error"></div>
                <div class="modal-footer">
                    <button type="submit" class="au-btn au-btn-load js-load-btn"><i class="fas fa-save"></i>  Salvar Alterações</button>
                </div>
 
            </form>
            
        </div>
      </div>
    </div>
  </div>

</div>
