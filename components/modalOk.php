<?php
if (basename($_SERVER['SCRIPT_NAME']) == basename(__FILE__)) {
	header("location:../index.php");
	die();
}

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
                    <?php foreach($_SESSION["APLICATION_RESPONSE"]['messagens'] as $values ){ ?>
                        <p class="mb-0"><?php  echo $values; ?></p>
                    <?php } ?>    
                    <?php unset($_SESSION["APLICATION_RESPONSE"]);?>
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


