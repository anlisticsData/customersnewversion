<?php



//echo "<pre>";

require("Pagination.php");

$itens =[];
$itens2=[];

for($i=0;$i < 999;$i++){
	$itens[]=uniqid();
}

$totalPaginas =5;

$pager=(isset($_GET['pager'])) ? $_GET['pager'] : 1;
$pagination =  new Pagination(count($itens),$pager,10,null,10,8);
$paginationData =$pagination->links();




 $t=1;
 foreach ($itens as $key => $value) {
 //	print_r(['*',$paginationData['initial'],$key,$paginationData['initial']>=$key,"<br>"]);
 	if($t > $paginationData['initial'] && $t < $paginationData['end']  ){
		$itens2[]=$value;
 	}
 	$t++;
 }





//echo "<pre>";
//print_r($pagination->links());


 





?>

  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    	<div class="container">
    		<ul class="collapsible">
    		 <?php 
    		 
    		 foreach ($itens2 as $key => $value) {

    		 	
    		 	# code...
    		 ?>	
			 
				  <li>
				    <div class="collapsible-header">
				      <i class="material-icons">place</i>
				      <?php echo $value; ?>
				      <span class="badge"><?php echo $key; ?></span>
				  	</div>
				     
				  </li>

			<?php } ?>
			</ul>

			 <ul class="pagination">
			    <li class="disabled"><a href="index.php?pager=<?php  echo $paginationData['initial'];?>"><i class="material-icons">chevron_left</i></a></li>
			    
				<?php foreach ($paginationData['next_pager'] as $key => $value) {
					if($paginationData['pager_active']!==$value-1){
				   ?>
			    <li class="waves-effect">
			    	<a href="index.php?pager=<?php  echo $value;?>">
			    		<?php echo $value;?></a></li>
			    <?php  }else{
			    	echo '<li class="active"><a href="#!">'.$paginationData["pager_active"].'</a></li>';
			    } }?>
			    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
			</ul>

	          

    	</div>

	 
	

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>


  <?php

  	echo "<pre>";

	print_r($paginationData);

  ?>