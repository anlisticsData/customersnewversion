<?php

use Analistics\Customers\MenusManegement\MenusController;
if (basename($_SERVER['SCRIPT_NAME']) == basename(__FILE__)) {
	header("location:../index.php");
	die();
}
$MenusController = new MenusController($_SESSION['API_ANALISTICS_USER']);
$user = $MenusController->getUser();
$dws = $MenusController->getDws();
$extractors = $MenusController->getExtractor();
$meusIndicadores = $MenusController->meusIndicadores();

 

?>

<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							 
							<div id="more-details"><?php echo $user['name'];?><i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="public/auth-signin"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					
					<?php if(count($meusIndicadores)>0){ ?>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link ">
							<span class="pcoded-micon" >
								<i class="feather icon-layout"></i></span><span class="pcoded-mtext">
								Meus Indicadores
							</span></a>
							
							<ul class="pcoded-submenu" >
							<?php foreach($meusIndicadores as $indicador) {?>	
								<li><a href="layout-vertical.html" target="_blank">80/20</a></li>
							<?php  }?>	
							</ul>
							<?php }?>
					</li>
					<?php ?>


					<li class="nav-item pcoded-menu-caption">
						<label>Ações</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Sistema</span></a>
						<ul class="pcoded-submenu">
							<li><a href="bc_alert.html">Alert</a></li>
						</ul>
					</li>


					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Criações</span></a>
						<ul class="pcoded-submenu">
							<li><a href="bc_alert.html">Alert</a></li>
							<li><a href="bc_button.html">Button</a></li>
							 
						</ul>
					</li>

					<?php
					if(count($dws) > 0){
					?>
					<li class="nav-item pcoded-menu-caption">
					    <label>Discos</label>
					</li>
					<?php foreach($dws as $key=>$store){
						$tilte =$store['companyInformation']['razao_social'];
						
						?>	
						<li class="nav-item">
							<a href="form_elements.html" class="nav-link " title="<?php echo $tilte;?>">
								<span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">
								<?php echo $store['companyInformation']['cnpj_cpjf'];?>
							</span></a>
						</li>
					<?php   } ?>	
					<?php
					}
					?>
				

					<?php if(count($extractors) > 0){ ?>
						<li class="nav-item pcoded-menu-caption">
							<label>Extratores</label>
						</li>
						<?php foreach($extractors as $key=>$extractor){?>
							<li class="nav-item">
								<a href="chart-apex.html" class="nav-link " style="width:15em;word-wrap: break-word;text-align:center;">
									<span class="pcoded-mtext" ><li><?php echo $extractor['uuid'];?></li></span></a>
							</li>
						<?php }?>

					<?php } ?>

				
				

				</ul>
				
				<div class="card text-center" style="display: none;">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Upgrade To Pro</h6>
						<p>Please contact us on our email for need any support</p>
						<a href="https://1.envato.market/PgJNQ" target="_blank" class="btn btn-primary btn-sm text-white m-0">Upgrade</a>
					</div>
				</div>
				
			</div>
		</div>
	</nav>