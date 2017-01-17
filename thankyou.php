
<?php

session_name('LoginForm');
@session_start();
include('/includes/dbconnection.php');
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $choice   = $_POST['optradio'];
				$thinking = $_POST['thinking'];
          		$Add="INSERT INTO talking(choice, thinking) VALUES ('$choice', '$thinking')";
               
                 mysql_query($Add)or die('Query failed'.mysql_error());                                             
                                                
           }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Urbian - Talking Toilet </title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
	
<!--login modal-->
<form id="login-form" class="login-form" name="form1" method="post" action="thankyou.php">
	    	<input type="hidden" name="is_login" value="1">

<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Talking Toilet.Thanks page</h1>
      </div>
      
      <div class="modal-body">
          <form class="form col-md-12 center-block">
	         <div class="form-group"> 
	  			<p>Thanks for sharing this information, please see a summary of the information saved.</p>
	  			<label>
	  			Everyones method of choice:
	  			</label></br>
	  			<?php
	  				$checkTotal = mysql_query("SELECT choice FROM talking");
                    $totalChoice = 0;
                    while($row = mysql_fetch_array($checkTotal))
                    {
                      $totalChoice = $totalChoice + 1;
                    }
	  				
					$resultfolded = mysql_query("SELECT choice FROM talking WHERE choice='Fold'");
                    $totalFolded=0;
                     while($rowFold = mysql_fetch_array($resultfolded))
                     {   
                        $totalFolded = $totalFolded+1;
                     }		               
                 $folded = ($totalFolded/$totalChoice)*100;                                
           			
           			$resultCrumple = mysql_query("SELECT choice FROM talking WHERE choice='Crumple'");
                    $totalCrumple=0;
                     while($rowCrump = mysql_fetch_array($resultCrumple))
                     {   
                        $totalCrumple = $totalCrumple+1;
                     }		               
                 $Crumple = ($totalCrumple/$totalChoice)*100; 
				?>
			  	<p>Folded <?php echo $folded;?>%</p>
			  	<p>Crumple <?php echo $Crumple;?>%</p></br>
	  			<label>
	  			Most people are thinking of the following:
	  			</label><p>
	  			<?php
	  				$resultThinking = mysql_query("SELECT thinking FROM talking GROUP BY thinking");
                    
                     while($rowThink = mysql_fetch_array($resultThinking))
                     {   
                        
                ?>
                <?php echo $rowThink['thinking'].', '; ?>
	  			
                <?php     }	
	  			?> </p>
	  			
			</div>
            
            
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          
		  </div>	
      </div>
  </div>
  </div>
</div>
</form>
		<script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>