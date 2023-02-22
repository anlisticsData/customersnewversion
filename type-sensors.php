<?php

use Analistics\Customers\DashboardManegement\DashboardController;
use Analistics\Customers\TypeSensorManegement\TypeSensorDataBaseRepository;
require_once(__DIR__."/Application.php");
try{
    $DashboardController = new DashboardController($App->Session()->get('API_ANALISTICS_USER'));
    $TypeSensorDataBaseRepository =  new TypeSensorDataBaseRepository($connection);

    $params=array(
        "pager"=>(isset($request['pager'])) ? $request['pager']:1,
        "max_links"=>2,
        

    );
    $typeSensorsData=$TypeSensorDataBaseRepository->getAllPagination($params);
    $paginar =$TypeSensorDataBaseRepository->getLinksPaginator();

    
    
   // print_r(["<pre>",$paginar]);die;
    
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
     <?php  require_once(__DIR__."/components/menuLeft.php");?>   
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
    <?php  require_once(__DIR__."/components/menuTop.php");?>   
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
                            <li class="breadcrumb-item"><a href="#!">Tipos de Sensores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

       
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            
        
            <!-- prject ,team member start -->
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Tipos de Sensores</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-search"></i>Busca Avançada</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="chk-option">
                                                <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label"></span>
                                                </label>
                                            </div>
                                            Selecionar
                                        </th>
                                        <th>Detalhes</th>
                                        <th class="text-center" colspan="2">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                        if(count($typeSensorsData)==0){
                                            echo "<tr><td><h5>Não há Sensor Cadastrados..!</h5><td></tr>";
                                        }
                                    
                                    
                                        foreach($typeSensorsData as $indexTypeSensor=>$typeSensor){
                                        
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/editar.png" alt="user image" class="wid-35 align-top m-r-20">
                                                    <div class="d-inline-block">
                                                        <h6><?php echo $typeSensor->description; ?></h6>
                                                        <p class="text-muted m-b-0"><?php echo $typeSensor->id; ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td ><div class=""><button class="btn btn-info">
                                                <i class="feather icon-file-text"></i>
                                                Ver Detalhes do Sensor
                                            </button></div></td>
                                            
                                            <td class="text-right" ><div class="">
                                                <button class="btn btn-info">
                                                    <i class="feather icon-file-text"></i>
                                                </button></div>
                                            </td>

                                            <td class="text-right" ><div class="">
                                                <button class="btn btn-danger">
                                                    <i class="feather icon-trash"></i>
                                                </button></div>
                                            </td>
                                        </tr>
                                    <?php }?>

                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
         
            <?php 
             if(count($typeSensorsData) > 0){
            ?>
            <!-- prject ,team member start -->
            <!-- seo start -->
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <nav class="float-rigth">
                                        <ul class="pagination ">
                                            <?php if(($paginar['pager_active']-1) > 0){ ?>
                                                <li class="page-item"><a class="page-link" href="type-sensors?pager=<?php echo ($paginar['pager_active']-1);?>">Anterior</a></li>
                                            <?php }?>
                                            <?php for($nextPagernation=1; $nextPagernation <= count($paginar['next_pager']);$nextPagernation++){ ?>
                                                <li class="page-item <?php if($paginar['pager_active']==$nextPagernation){ echo 'active'; } ?>"><a class="page-link" href="type-sensors?pager=<?php echo $nextPagernation;?>"><?php echo $nextPagernation;?></a></li>
                                            <?php } ?>
                                            <?php if(($paginar['end']) < $paginar['pages']){ ?>
                                                <li class="page-item"><a class="page-link" href="type-sensors?pager=<?php echo ($paginar['pager_active']+1);?>">Próximo</a></li>
                                            <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
          
            <?php } ?>    
            <!-- seo end -->

            <!-- Latest Customers start -->
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

}catch(Exception $e){
    echo sprintf("<h1>%s</h1>",$e->getMessage());
    exit;
}

?>
