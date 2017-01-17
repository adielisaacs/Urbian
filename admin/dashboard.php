<?php 
if(!isset($_SESSION)) {
	session_start();
}
include('/models/dbconnection.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $choice   = $_POST['choice'];
				$thinking = $_POST['thinking'];
				$idthinking = $_POST['idtalking'];
          		$update="UPDATE talking SET choice = '".$choice."' and thinking ='".$thinking."' WHERE idtalking=".$idthinking.";";
               
                 mysql_query($update)or die('Query failed'.mysql_error());                                             
                                                
           }
?>

	<h1>  Admin - Toilet </h1>
	<div class="row-fluid">
 		<div class="span6">
 		<table class='table table-striped'   >
  				<?php 
	  				$resultThinking = mysql_query("SELECT * FROM talking");
                    
                     while($rowThink = mysql_fetch_array($resultThinking))
                     {   
                        
                ?>
                <tr><td><p><a href="editdata.php?id=<?php echo $rowThink['idtalking']; ?>">EDIT</a></p></td><td><?php echo $rowThink['choice']; ?></td><td><?php echo $rowThink['thinking']; ?></td></tr>
                
	  			
                <?php 
                }	
	  			?>

       	</table>
 
     	</div>   
	</div>