<?php


use Analistics\Customers\DashboardManegement\DashboardController;
use Analistics\Customers\CutSensorManegement\CutSensorDataBaseRepository;
use Analistics\Customers\TypeSensorManegement\TypeSensorDataBaseRepository;

require_once(__DIR__ . "/Application.php");
require_once(__DIR__ . "/components/modaComponets.php");

try {
    $cutSensors=[];    
    $modalAttributsInformation=array(
        "uuidModal" => uniqid(),
        "title"     =>"Detalhes do Sensor"
    );
    
    $modalAttributsDelete=array(
        "uuidModal" => uniqid(),
        "title"     =>"Remover Tipo de  Sensor",
        "action"    =>"public/delete-cut-sensor"
    );
    

    $modalAttributsUpdate=array(
        "uuidModal" => uniqid(),
        "title"     =>"Alterar Tipo de  Sensor",
        "action"    =>"public/update-cut-sensor"
    );
    $DashboardController = new DashboardController($App->Session()->get('API_ANALISTICS_USER'));
    $cutSensorDataBaseRepository =  new CutSensorDataBaseRepository($connection);
    $typeSensorDataBaseRepository =  new TypeSensorDataBaseRepository($connection);
    $params = array(
        "pager" => (isset($request['pager'])) ? $request['pager'] : 1,
        "max_links" => 2,


    );
    $cutSensorsData = $cutSensorDataBaseRepository->getAll();
    $typeSensors =  $typeSensorDataBaseRepository ->getAll();
    $options=[];
    foreach($typeSensors as $indexSensor =>$typeSensor){
        $options[]=array("type"=>$typeSensor->id,"value"=>$typeSensor->description);
    }

    

    $paginar = []; //$cutSensorDataBaseRepository->getLinksPaginator();




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

 

                <?php ModalIfomation($modalAttributsInformation); ?>
                <?php ModalDelete($modalAttributsDelete); ?>
                <?php ModalUpdate($modalAttributsUpdate); ?>
                

                <!-- [ breadcrumb ] end -->
                <!-- [ Main Content ] start -->
                <div class="row">


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
                          $uuid =uniqid();
                          echo "<div id=\"".$uuid."\" class=\"col-xl-12 col-md-12 center-object  \">";
                          echo "<hr>";
                          echo sprintf("<div class=\"alert alert-danger\"><ol>%s</ol></div>",$alert);
                          echo "</div>";
                          echo '
                                <script>
                                    setTimeout(()=>{
                                        document.getElementById("'.$uuid.'").remove()

                                    },3000)
                                </script>
                          ';
                      }
                  }                              
               
                ?>
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


                                            if (count($cutSensorsData) == 0) {
                                                echo "<tr><td><h5>Não há Sensor Cadastrados..!</h5><td></tr>";
                                            }


                                            foreach ($cutSensorsData as $indexCutSensor => $cutSensor) {
 
                                               
                                               // print_r(["<pre>",$cutSensor]);die;
    

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
                                                                <h6><?php echo trim($cutSensor->description); ?></h6>
                                                                <p class="text-muted m-b-0"><?php echo $cutSensor->id; ?></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=""><button class="btn btn-info onClickDetails" modalcode="<?php echo $modalAttributsInformation['uuidModal']; ?>" data-details="<?php echo strip_tags(trim($cutSensor->observation)); ?>">
                                                                <i modalcode="<?php echo $modalAttributsInformation['uuidModal']; ?>" data-details="<?php echo strip_tags(trim($cutSensor->observation)); ?>"   class="feather icon-file-text onClickDetails"></i>
                                                                Ver Detalhes do Sensor
                                                            </button></div>
                                                    </td>

                                                    <td class="text-right">
                                                        <div class="">
                                                            <button class="btn btn-info onClickUpdate" modalcode="<?php echo $modalAttributsUpdate['uuidModal']; ?>" datacode="<?php echo $cutSensor->id; ?>" datadescription="<?php echo trim($cutSensor->description); ?> "   datatype="<?php echo trim($cutSensor->typesensor); ?>" data-details="<?php echo strip_tags(trim($cutSensor->observation)); ?>">
                                                                <i class="feather icon-file-text onClickUpdate" modalcode="<?php echo $modalAttributsUpdate['uuidModal']; ?>" datacode="<?php echo $cutSensor->id; ?>" datadescription="<?php echo trim($cutSensor->description); ?>" datatype="<?php echo trim($cutSensor->typesensor); ?>" data-details="<?php echo strip_tags(trim($cutSensor->observation)); ?>"></i>
                                                            </button>
                                                        </div>
                                                    </td>

                                                    <td class="text-right">
                                                        <div class="">
                                                            <button class="btn btn-danger onClickRemove" modalcode="<?php echo $modalAttributsDelete['uuidModal']; ?>" datacode="<?php echo $cutSensor->id; ?>" datadescription="<?php echo trim($cutSensor->description); ?>"  >
                                                                <i modalcode="<?php echo $modalAttributsDelete['uuidModal']; ?>" datacode="<?php echo $cutSensor->id; ?>" datadescription="<?php echo trim($cutSensor->description); ?>" class="feather icon-trash onClickRemove"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (count($cutSensorsData) > 0 && count($paginar) > 0) {
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
                                                    <?php if (($paginar['pager_active'] - 1) > 0) { ?>
                                                        <li class="page-item"><a class="page-link" href="type-sensors?pager=<?php echo ($paginar['pager_active'] - 1); ?>">Anterior</a></li>
                                                    <?php } ?>
                                                    <?php for ($nextPagernation = 1; $nextPagernation <= count($paginar['next_pager']); $nextPagernation++) { ?>
                                                        <li class="page-item <?php if ($paginar['pager_active'] == $nextPagernation) {
                                                                                    echo 'active';
                                                                                } ?>"><a class="page-link" href="type-sensors?pager=<?php echo $nextPagernation; ?>"><?php echo $nextPagernation; ?></a></li>
                                                    <?php } ?>
                                                    <?php if (($paginar['end']) < $paginar['pages']) { ?>
                                                        <li class="page-item"><a class="page-link" href="type-sensors?pager=<?php echo ($paginar['pager_active'] + 1); ?>">Próximo</a></li>
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

        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>


        <script src="assets/js/pcoded.min.js"></script>

        <!-- Apex Chart -->
        <script src="assets/js/plugins/apexcharts.min.js"></script>


        <!-- custom-chart js -->
        <script src="assets/js/pages/dashboard-main.js"></script>



        <script>


                                                 


            document.addEventListener("DOMContentLoaded", function() {
                $(".onClickDetails").on("click", function(e) {
                    $('#' + e.target.attributes['modalcode'].value).on('shown.bs.modal', function(event) {
                        const modalBodyInput = document.getElementById(e.target.attributes['modalcode'].value).querySelector('.modal-body')
                        modalBodyInput.innerHTML = e.target.attributes['data-details'].value
                    })
                    $('#' + e.target.attributes['modalcode'].value).on('hide.bs.modal', function(event) {
                        const modalBodyInput = document.getElementById(e.target.attributes['modalcode'].value).querySelector('.modal-body')
                        modalBodyInput.innerHTML ="  <p>Processando...!</p>"
                    })

                    $('#' + e.target.attributes['modalcode'].value).modal('show');
                })


                $(".onClickRemove").on("click", function(e) {
                 try{
                    $('#' + e.target.attributes['modalcode'].value).on('shown.bs.modal', function(event) {
                        const modalBodyInput = document.getElementById(e.target.attributes['modalcode'].value).querySelector('.modal-body')
                        var formulario=""
                                formulario+=`     <input type="hidden" name="jwt" value="<?php  echo $request['SERVER_SOFTWARE_AUTH'];?>">
                                            <input type="hidden" name="crsf" value="<?php echo uniqid();?>">
                                            `     
                                formulario+=" <input type=\"hidden\" name=\"uuid\" value=\""+e.target.attributes['datacode'].value+"\">"
                                formulario+=" <h5>Remover o Tipo de Sensor ? </h5>"
                                formulario+="<br> #"+e.target.attributes['datadescription'].value
                            formulario+=""
                        modalBodyInput.innerHTML = formulario
                    })
                    $('#' + e.target.attributes['modalcode'].value).on('hide.bs.modal', function(event) {
                        const modalBodyInput = document.getElementById(e.target.attributes['modalcode'].value).querySelector('.modal-body')
                        modalBodyInput.innerHTML ="  <p>Processando...!</p>"
                    })

                    $('#' + e.target.attributes['modalcode'].value).modal('show');
                 }catch(e){}
                })

                $(".onClickUpdate").on("click", function(e) {
                 try{
                    $('#' + e.target.attributes['modalcode'].value).on('shown.bs.modal', function(event) {
                        const modalBodyInput = document.getElementById(e.target.attributes['modalcode'].value).querySelector('.modal-body')
                        var options=JSON.parse('<?php echo json_encode($options);?>')
                        var typeSensor =""
                        for(nextOption=0;nextOption <  options.length;nextOption++){
                            if(e.target.attributes['datatype'].value==options[nextOption].type){
                                typeSensor=options[nextOption].value
                                break
                            }
                        }
                        var formulario=`
                                        <form class="col-xl-9 col-md-9 center-object  p-5 " action="public/new-type-sensor" method="post">
                                            <input type="hidden" name="jwt" value="<?php  echo $request['SERVER_SOFTWARE_AUTH'];?>">
                                            <input type="hidden" name="crsf" value="<?php echo uniqid();?>">
                                            <input type="hidden" name="uuid" value="`+e.target.attributes['datacode'].value+`">
                                            <div class="form-group">
                                                <label for="type"><b>Tipo de  Sensor </b></label>
                                                <div class="form-control" >`+typeSensor+`</div>
                                            </div>
                                         

                                            <div class="form-group">
                                                <label for="description"><b>Descrição do Tipo de Sensor (`+e.target.attributes['datacode'].value+`)</b></label>
                                                <input type="text" class="form-control  " value="`+e.target.attributes['datadescription'].value+`" name="description" value="" placeholder="Descreva o Tipo do Sensor..!">
                                                  
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="observation"><b>Detalhes do Tipo de Sensor</b></label>
                                                <textarea class="form-control" name="observation" id="observation" rows="6"> 
                                                    `+e.target.attributes['data-details'].value+`
                                                </textarea>
                                            </div>

                                            <div class="form-group">
                                               <hr>
                                            </div>

                                          
                                        </form>

                                        `  
                        modalBodyInput.innerHTML = formulario
                    })
                    $('#' + e.target.attributes['modalcode'].value).on('hide.bs.modal', function(event) {
                        const modalBodyInput = document.getElementById(e.target.attributes['modalcode'].value).querySelector('.modal-body')
                        modalBodyInput.innerHTML ="  <p>Processando...!</p>"
                    })

                    $('#' + e.target.attributes['modalcode'].value).modal('show');
                 }catch(e){}
                })
                



                



            })
        </script>




</body>

</html>

<?php


}catch(Exception $e){
    echo sprintf("<h1>%s</h1>",$e->getMessage());
    exit;
}

?>
