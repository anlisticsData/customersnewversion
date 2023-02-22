<?php

use Analistics\Customers\DashboardManegement\DashboardController;

require_once(__DIR__ . "/Application.php");
try {
    $DashboardController = new DashboardController($App->Session()->get('API_ANALISTICS_USER'));
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <?php
        require_once(__DIR__ . "/layouts/header.php");
        ?>



    </head>

    <body class="">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->
        <!-- [ navigation menu ] start -->
        <?php require_once(__DIR__ . "/components/menuLeft.php"); ?>
        <!-- [ navigation menu ] end -->
        <!-- [ Header ] start -->
        <?php require_once(__DIR__ . "/components/menuTop.php"); ?>
        <!-- [ Header ] end -->



        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Dashboard Analytics</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="painel"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">
                                        Novo Tipo de Sensores</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- [ breadcrumb ] end -->
                <!-- [ Main Content ] start -->
                <div class="row">


                    <!-- prject ,team member start -->
                    <div class="col-xl-12 col-md-12 ">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Criar Novo Tipos de Sensores</h5>
                            </div>
                            <div class="card-body ">
                                <div class="row ">
                                <div class="col-xl-12 col-md-12 doNotExceed "  >
                                    <div   > 
                                        <form class="col-xl-9 col-md-9 center-object  p-5 "  >
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1"><b>Descrição do Tipo de Sensor</b></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Descreva o Tipo do Sensor..!">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1"><b>Uso do Sensor </b></label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Unico</option>
                                                    <option>Geral</option>
                                                </select>
                                            </div>
                                         
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1"><b>Detalhes do Tipo de Sensor</b></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                            </div>

                                            <div class="form-group">
                                               <hr/>
                                            </div>

                                            <div class="form-group  " >
                                                <button class="btn btn-info float-rigth "    >
                                                    <i class="feather icon-box"></i>
                                                    Criar Novo tipo
                                                </button>
                                            </div>



                                        </form>
                                    </div>

                                </div>    



                                </div>
                            </div>
                        </div>
                    </div>

                 
                </div>
                <!-- Latest Customers end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
        </div>
        <!-- [ Main Content ] end -->
        <!-- Warning Section start -->
        <!-- Older IE warning message -->
        <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
        <!-- Warning Section Ends -->

        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>


        <script src="assets/js/pcoded.min.js"></script>

        <!-- Apex Chart -->
        <script src="assets/js/plugins/apexcharts.min.js"></script>


        <!-- custom-chart js -->
        <script src="assets/js/pages/dashboard-main.js"></script>
    </body>

    </html>

<?php

} catch (Exception $e) {
    echo sprintf("<h1>%s</h1>", $e->getMessage());
    exit;
}

?>