<?php
include('/models/class.users.php');

$Users		= new Users();
//Page Control

$page = 'dashboard';
if(isset($_GET['page'])){

	$page = $_GET['page'];
}else if(isset($_POST['page'])){
	$page = $_POST['page'];
}

// Cotroller Check
$controller =  (isset($_POST['controller']) ?  $_POST['controller'] : NULL);

$Submit =  (isset($_POST['Submit']) ?  $_POST['Submit'] : NULL);

//echo 'Submit >'.$Submit;
//echo 'Controller >'.$controller;

if($Submit != NULL){
	include('/controllers/'.$controller.'.php');
}
 
//Header Include
 include('header.php'); 

$msg = NULL;

?>

   

<div id='content' class="the-icons">
 	 <?php
  
  
  		include($page.'.php');
  ?>
 
</div>
<?php /*include('footer.php');*/ ?>