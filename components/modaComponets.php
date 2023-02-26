<?php 

function ModalIfomation($attributs){

    echo '
    
            <div id="'.$attributs['uuidModal'].'" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="'.$attributs['uuidModal'].'Title" aria-modal="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="'.$attributs['uuidModal'].'Title">'.$attributs['title'].'</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body" id="content">
                        <p>Processando...!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    
    
    
    ';



}



function ModalDelete($attributs){

    echo '
            
                <div id="'.$attributs['uuidModal'].'" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="'.$attributs['uuidModal'].'Title" aria-modal="true">
                <div class="modal-dialog" role="document">
                    <form method=\'POST\' action=\''.$attributs["action"].'\'>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="'.$attributs['uuidModal'].'Title">'.$attributs['title'].'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body" id="content">
                            <p>Processando...!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn  btn-primary">Excluir</button>

                        </div>
                    </div>
                    </form>
                </div>
            </div>

         

    
    
    
    ';



}




function ModalUpdate($attributs){

    echo '
            
                <div id="'.$attributs['uuidModal'].'" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="'.$attributs['uuidModal'].'Title" aria-modal="true">
                <div class="modal-dialog" role="document">
                    <form method=\'POST\' action=\''.$attributs["action"].'\'>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="'.$attributs['uuidModal'].'Title">'.$attributs['title'].'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body" id="content">
                            <p>Processando...!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn  btn-primary">Atualizar</button>

                        </div>
                    </div>
                    </form>
                </div>
            </div>

         

    
    
    
    ';



}



?>