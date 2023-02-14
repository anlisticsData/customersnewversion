<?php
 
//require_once(__DIR__ . "/InitApplications.php");
require_once(__DIR__."/Application.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    require_once(__DIR__ . "/layouts/header.php");
    ?>
</head>

<body>


    <?php  
         
        if($App->Session()->get("APLICATION_RESPONSE")){
            require_once(__DIR__."/components/modalOk.php");
        }
    ?>



    <form method="post" action="public/auth-sign-up.php">
        <!-- [ auth-signin ] start -->
        <div class="auth-wrapper">
            <div class="auth-content text-center">
                <img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
                <div class="card borderless">
                    <div class="row align-items-center ">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h4 class="mb-3 f-w-400">Signin</h4>
                                <hr>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="Email" name="email" value="drmatematic@yahoo.com" placeholder="Email address">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" class="form-control" id="Password" value="1" name="password" placeholder="Password">
                                </div>
                                <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                    <input type="checkbox" class="custom-control-input" id="saveId" name="saveId">
                                    <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                                </div>
                                <button   class="btn btn-block btn-primary mb-4">Signin</button>
                                <hr>
                                <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password" class="f-w-400">Reset</a></p>
                                <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup" class="f-w-400">Signup</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <?php
    require_once(__DIR__ . "/layouts/footer.base.php");
    ?>

  
</body>

</html>