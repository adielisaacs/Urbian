<?php 
if(!isset($_SESSION)) {
	session_start();
}
include('/models/dbconnection.php');

	$idtalking = $_POST['id'];
?>
<form id="login-form" class="login-form" name="form2" method="post" action="dashboard.php">
	<h1>  Admin - Edit Toilet Data</h1>
	<div class="row-fluid">
 		<div class="span6">
 		<table class='table table-striped'   >
		<input type="hidden" name="idthinking" value="<?php echo $idtalking;?>"/>
  				<?php 
	  				$resultThinking = mysql_query("SELECT * FROM talking where idtalking=$idtalking");
                    
                     while($rowThink = mysql_fetch_array($resultThinking))
                     {   
                        
                ?>
                <tr><td>Choice :</td><td><input name="choice" value="<?php echo $rowThink['choice']; ?>"/></td></tr>
                <tr><td>Thinking :</td><td><input name="thinking" value="<?php echo $rowThink['thinking']; ?>"/></td></tr>
	  			<tr><td></td><td><input name="submit" type="submit" value="Submit" class="btn btn-primary btn-lg btn-block"/></td>
	  			</tr>
                <?php 
                }	
	  			?>

       	</table>
 
     	</div>   
	</div>
</form