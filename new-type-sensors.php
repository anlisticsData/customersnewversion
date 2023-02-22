<?php

use Analistics\Customers\Commom\Dtos\SensorTypeDto;
use Analistics\Customers\DashboardManegement\DashboardController;
require_once(__DIR__ . "/Application.php");
try {
    $type =  new SensorTypeDto();
    $DashboardController = new DashboardController($App->Session()->get('API_ANALISTICS_USER'));
    if(isset($session->get("classObject")['value'])){
        $type=(new SensorTypeDto())->deserializer($session->get("classObject")['value']);
        unset($_SESSION['classObject']);
    }
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
                                  
                                    <div> 
                                            <?php 
                                                 $alert="";
                                                 if(isset($session->get("errors")['value'])){
                                                    foreach($session->get("errors")['value'] as $indewxErros =>$erro){
                                                        if(isset($erro['error'])){
                                                             $alert.=sprintf("<li>%s</li>",$erro['error']);
                                                        }
                                                    }
                                                    unset($_SESSION['errors']);
                                                    if(strlen(trim($alert))>0){
                                                        echo "<div class=\"col-xl-9 col-md-9 center-object  p-5\">";
                                                        echo "<h5>Error ao Cadastrar..!</h5>";
                                                        echo "<hr>";
                                                        echo sprintf("<div class=\"alert alert-danger\"><ol>%s</ol></div>",$alert);
                                                        echo "</div>";
                                                    }


                                                }
                                                ?>
                                   
                                        <form class="col-xl-9 col-md-9 center-object  p-5 "  action="public/new-type-sensor" method="post" >
                                            <input type="hidden" name="jwt" value="<?php  echo $request['SERVER_SOFTWARE_AUTH'];?>" >
                                            <input type="hidden" name="crsf" value="<?php echo uniqid();?>" >
                                            <div class="form-group">
                                                <label for="description"><b>Descrição do Tipo de Sensor</b></label>
                                                <input type="text" class="form-control  " id=""  name="description"
                                                     value="<?php echo $type->description; ?>" placeholder="Descreva o Tipo do Sensor..!">
                                                  
                                            </div>
                                            <div class="form-group">
                                                <label for="type"><b>Uso do Sensor </b></label>
                                                <select class="form-control" id="type" name="type">
                                                    <option value="U" <?php if($type->type=='U'){  echo "selected";  } ?> >Unico</option>
                                                    <option value="G" <?php if($type->type=='G'){  echo "selected";  } ?>>Geral</option>
                                                </select>
                                            </div>
                                         
                                            <div class="form-group">
                                                <label for="observation"><b>Detalhes do Tipo de Sensor</b></label>
                                                <textarea class="form-control"  name="observation" id="observation" rows="6">
                                                <?php echo $type->observation; ?>
                                                </textarea>
                                            </div>

                                            <div class="form-group">
                                               <hr/>
                                            </div>

                                            <div class="form-group  " >
                                                <button type="submit" class="btn btn-info float-rigth "    >
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