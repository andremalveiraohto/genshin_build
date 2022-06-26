<?php 

    include '../../../../assets/include/config.php';

?>

<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c1">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-account-o"></i>
                </div>
                <div class="text">
                    <h2>0</h2>    
                    <span>Online</span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c3">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="far fa-heart"></i>
                </div>
                <div class="text">
                    <h2><?php echo'0'?></h2>
                    <span>Curtidas</span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart3"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c2">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="text">
                    <h2><?php echo$data_hoje->rowCount();?></h2>
                    <span>Visitas Hoje</span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart2"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c4">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="far fa-eye"></i>
                </div>
                <div class="text">
                    <h2><?php echo$table_count_visit->rowCount(); ?></h2>           
                    <span>Visitas Total</span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart4"></canvas>
            </div>
        </div>
    </div>
</div> 



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" integrity="sha512-SRW1NuegWCD4fowVB3sUwr2LnLnVAcKTCtYT9z84rskfoqqtIZfEW1iKB0uF1RzvdSbqcVIs6FkONjj5j88RYw==" crossorigin="anonymous"></script>

<script src="assets/include/graficos/chart.js"></script>

    