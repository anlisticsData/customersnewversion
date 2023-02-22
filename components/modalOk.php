<?php
if (basename($_SERVER['SCRIPT_NAME']) == basename(__FILE__)) {
	header("location:../index.php");
	die();

}

if(($App->Session()->get("APLICATION_RESPONSE"))['value']->size() !=0){
$sessionValue =$App->Session()->get("APLICATION_RESPONSE",true);    
?>
<div id="exampleModalLive" class="modal fade   " tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" style="display: block; padding-right: 17px;" aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel">Aviso do Sistema.!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0"><b>Erros Encontrados</b></p>
                    <?php while($sessionValue['value']->size() !=0){ ?>
                    <?php     $item =(array) $sessionValue['value']->pop(); ?>
                    <?php     foreach($item['messages'] as $value){        ?>
                    <?php       echo sprintf("<p class=\"mb-0\">%s</p>",$value);   ?>
                    <?php     } ?>                        
                    <?php  }    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
     document.addEventListener("DOMContentLoaded",function(){
        $('#exampleModalLive').modal('toggle')
     })
    </script>

<?php } ?>    


