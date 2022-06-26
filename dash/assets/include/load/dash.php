<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen, Edit:andremalveira">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title> Main Panel</title>

    <!-- Fontfaces CSS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" media="all">
    <link href="assets/css/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.2.5/css/froala_editor.pkgd.min.css" integrity="sha512-GChJf6u3FFk3SePdFBOQmaq3EK8jAQJheHZrZx9g/nr7gecjkEvHa+ESsOdoBzlrnpv5h/J7iTsL5Y6OYUywsQ==" crossorigin="anonymous" />
    <!-- Bootstrap CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" media="all">
    <!--LIGHTBOX--> <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
   <!--  <link href="assets/css/animsition.min.css" rel="stylesheet" media="all"> -->
    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

</head>


<body class="animsition">
    
    <?php include 'assets/include/load/modals.php';?>

    <div id="add_blur" class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a>
                MAIN PANEL
                    <!-- <img src="assets/img/icon/logo.png" alt="Cool Admin" /> -->
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li class="add_edit has-sub">
                            <a id="openModal" data-toggle="modal" data-target="#add_build" class="js-arrow">
                                <i class="fas fa-plus"></i>Build
                            </a>
                            <a id="openModal" data-toggle="modal" data-target="#edit_build" class="js-arrow icon_edit">
                                <i class="fas fa-edit"></i>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow grid_3 open" href="#">
                                <i class="fas fa-database"></i>DataBase
                                <div class="icon_edit"><i class="fas fa-chevron-down"></i></div>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: block;">
                                <li class="add_edit">
                                    <a id="openModal" data-toggle="modal" data-target="#add_personagem" class="js-arrow">
                                        <i class="fas fa-plus"></i>Personagem
                                    </a>
                                    <a id="openModal" data-toggle="modal" data-target="#edit_personagem" class="js-arrow icon_edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li class="add_edit">
                                    <a id="openModal" data-toggle="modal" data-target="#add_arma" class="js-arrow">
                                        <i class="fas fa-plus"></i>Arma
                                    </a>
                                    <a id="openModal" data-toggle="modal" data-target="#edit_arma" class="js-arrow icon_edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li class="add_edit">
                                    <a id="openModal" data-toggle="modal" data-target="#add_conjunto" class="js-arrow">
                                        <i class="fas fa-plus"></i>Conjunto
                                    </a>
                                    <a id="openModal" data-toggle="modal" data-target="#edit_conjunto" class="js-arrow icon_edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li class="add_edit">
                                    <a id="openModal" data-toggle="modal" data-target="#add_conqs" class="js-arrow">
                                        <i class="fas fa-plus"></i>Conquista
                                    </a>
                                    <a id="openModal" data-toggle="modal" data-target="#edit_conqs" class="js-arrow icon_edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="row pos_abs_bottom">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Main Panel</a>.</p>
                    </div>
                </div>
            </div>
            </div>
            
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div id="noti_wrap" class="noti-wrap">
                                   <?php include 'assets/include/load/notifications/noti_wrap.php';?>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="assets/img/users/ID-<?php echo$user_ID ?>/<?php echo$user_Img ?>" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo$nome_user ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    
                                                        <img src="assets/img/users/ID-<?php echo$user_ID ?>/<?php echo$user_Img ?>" alt="John Doe" />
                                                   
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <?php echo$nome_user ?>
                                                    </h5>
                                                    <span class="email"><?php echo$type_user ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="account">
                                                        <i class="zmdi zmdi-account"></i>Conta</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Configurações</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="exit.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div id="geral" class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="error"></div>
                            <div class="row m-t-25">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        
                                        <h2 class="title-1">Visão Geral</h2>
                                        <i id="refreshGraphics" class="refresh fas fa-redo-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="graphics" class="row m-t-25">
                                
                            </div>
                            <div class="row margin_bottom_25px">
                                <div id="meta_edit" class="col-lg-6">

                                </div>
                                <div id="funçoes" class="col-lg-6">

                                </div>
                            </div>
                            <div class="row margin_bottom_25px">
                                <div class="col-lg-6">
                                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                        <div class="au-card-title" style="background-image:url('assets/img/bg-title-01.jpg');">
                                            <div class="bg-overlay bg-overlay--blue"></div>
                                            <h3>
                                                <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
                                            <button class="au-btn-plus">
                                                <i class="zmdi zmdi-plus"></i>
                                            </button>
                                        </div>
                                        <div class="au-task js-list-load">
                                            <div class="au-task__title">
                                                <p>Tasks for John Doe</p>
                                            </div>
                                            <div class="au-task-list js-scrollbar3">
                                                <div class="au-task__item au-task__item--danger">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Meeting about plan for Admin Template 2018</a>
                                                        </h5>
                                                        <span class="time">10:00 AM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--warning">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Create new task for Dashboard</a>
                                                        </h5>
                                                        <span class="time">11:00 AM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--primary">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Meeting about plan for Admin Template 2018</a>
                                                        </h5>
                                                        <span class="time">02:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--success">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Create new task for Dashboard</a>
                                                        </h5>
                                                        <span class="time">03:30 PM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--danger js-load-item">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Meeting about plan for Admin Template 2018</a>
                                                        </h5>
                                                        <span class="time">10:00 AM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--warning js-load-item">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Create new task for Dashboard</a>
                                                        </h5>
                                                        <span class="time">11:00 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-task__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                        <div class="au-card-title" style="background-image:url('assets/img/bg-title-02.jpg');">
                                            <div class="bg-overlay bg-overlay--blue"></div>
                                            <h3>Feedbacks
                                            <i id="refreshFeed" class="refresh fas fa-redo-alt" style=""></i>
                                            </h3>
                                            
                                        </div>
                                            <div id="feedbacks"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="row margin_bottom_25px">
                                <div class="col-lg-9">
                                    <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>date</th>
                                                    <th>order ID</th>
                                                    <th>name</th>
                                                    <th class="text-right">price</th>
                                                    <th class="text-right">quantity</th>
                                                    <th class="text-right">total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2018-09-29 05:57</td>
                                                    <td>100398</td>
                                                    <td>iPhone X 64Gb Grey</td>
                                                    <td class="text-right">$999.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$999.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-28 01:22</td>
                                                    <td>100397</td>
                                                    <td>Samsung S8 Black</td>
                                                    <td class="text-right">$756.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$756.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-27 02:12</td>
                                                    <td>100396</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="text-right">$22.00</td>
                                                    <td class="text-right">2</td>
                                                    <td class="text-right">$44.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-26 23:06</td>
                                                    <td>100395</td>
                                                    <td>iPhone X 256Gb Black</td>
                                                    <td class="text-right">$1199.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$1199.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-25 19:03</td>
                                                    <td>100393</td>
                                                    <td>USB 3.0 Cable</td>
                                                    <td class="text-right">$10.00</td>
                                                    <td class="text-right">3</td>
                                                    <td class="text-right">$30.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-29 05:57</td>
                                                    <td>100392</td>
                                                    <td>Smartwatch 4.0 LTE Wifi</td>
                                                    <td class="text-right">$199.00</td>
                                                    <td class="text-right">6</td>
                                                    <td class="text-right">$1494.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-24 19:10</td>
                                                    <td>100391</td>
                                                    <td>Camera C430W 4k</td>
                                                    <td class="text-right">$699.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$699.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-22 00:43</td>
                                                    <td>100393</td>
                                                    <td>USB 3.0 Cable</td>
                                                    <td class="text-right">$10.00</td>
                                                    <td class="text-right">3</td>
                                                    <td class="text-right">$30.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h2 class="title-1 m-b-25">Top countries</h2>
                                    <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                        <div class="au-card-inner">
                                            <div class="table-responsive">
                                                <table class="table table-top-countries">
                                                    <tbody>
                                                        <tr>
                                                            <td>United States</td>
                                                            <td class="text-right">$119,366.96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Australia</td>
                                                            <td class="text-right">$70,261.65</td>
                                                        </tr>
                                                        <tr>
                                                            <td>United Kingdom</td>
                                                            <td class="text-right">$46,399.22</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Turkey</td>
                                                            <td class="text-right">$35,364.90</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Germany</td>
                                                            <td class="text-right">$20,366.96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>France</td>
                                                            <td class="text-right">$10,366.96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Australia</td>
                                                            <td class="text-right">$5,366.96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Italy</td>
                                                            <td class="text-right">$1639.32</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
               
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            
        </div>

    </div>

    <script src="assets/js/jquery.min.js"></script>
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script> -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Efeito Menu User --><script src="assets/js/animsition/animsition.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" integrity="sha512-SRW1NuegWCD4fowVB3sUwr2LnLnVAcKTCtYT9z84rskfoqqtIZfEW1iKB0uF1RzvdSbqcVIs6FkONjj5j88RYw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.2.5/js/froala_editor.pkgd.min.js" integrity="sha512-YZzcBohdRs7t2mO/M7uagDICdsAP7Ar7pbmei/AqiRZA0qFzpPsroTFQ53Qdhj8sImEl/dV7TqpZqvbApg9VSw==" crossorigin="anonymous"></script>
    <!-- Main JS--><script src="assets/js/main.js"></script>
    
    <!-- Main JS--><script type="module" src="assets/js/insert_edit_bd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" type="text/javascript"></script>

   <!-- LIGHTBOX--> <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>

</html>
<!-- end document-->