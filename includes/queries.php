<?php
 $exhget = $_GET['key'];
  $code = $_GET['code'];
 
  $exsum = (int)$exhget;
  $codesum = (int)$code;
				
				$exh = $exsum - 987 - $code;

$ex = "SELECT * FROM exhibotors WHERE ex_id = '".$exh."' ";
$exresult = $conn->query($ex);
 if ($exresult->num_rows > 0) {
    // output data of each row
    while($exrow = $exresult->fetch_assoc()) {
		
		$sc1 = $exrow["scanner1"];
		$sc2 = $exrow["scanner2"];
		$sc3 = $exrow["scanner3"];
		$sc4 = $exrow["scanner4"];
		$sc5 = $exrow["scanner5"];
		$sc6 = $exrow["scanner6"];
		$sc7 = $exrow["scanner7"];
		$sc8 = $exrow["scanner8"];
	}
 }
 else
 {
	 }

$scanners = "SELECT * FROM scanners WHERE shortcode = '".$sc1."' ";
$scannerresult = $conn->query($scanners);
 if ($scannerresult->num_rows > 0) {
 while($scannerrow = $scannerresult->fetch_assoc()) {
 
 $scanner1 = $scannerrow["serial"];

 }
 }
 else{
	 
	 	  $scanner1 = "";
 }
 $scanners2 = "SELECT * FROM scanners WHERE shortcode = '".$sc2."' ";
$scannerresult2 = $conn->query($scanners2);
  if ($scannerresult2->num_rows > 0) {
 while($scannerrow2 = $scannerresult2->fetch_assoc()) {
 
 $scanner2 = $scannerrow2["serial"];

 }
  }
 else{
	 	  $scanner2 = "";
	 
 }
 $scanners3= "SELECT * FROM scanners WHERE shortcode = '".$sc3."' ";
$scannerresult3 = $conn->query($scanners3);
  if ($scannerresult3->num_rows > 0) {
 while($scannerrow3 = $scannerresult3->fetch_assoc()) {
 
 $scanner3 = $scannerrow3["serial"];

 }
  }
 else{
	 	  $scanner3 = "";
	 
 }
 $scanners4 = "SELECT * FROM scanners WHERE shortcode = '".$sc4."' ";
$scannerresult4 = $conn->query($scanners4);
  if ($scannerresult4->num_rows > 0) {
 while($scannerrow4 = $scannerresult4->fetch_assoc()) {
 
 $scanner4 = $scannerrow4["serial"];

 }
  }
 else{
	 
	 	  $scanner4 = "";
 }
 $scanners5 = "SELECT * FROM scanners WHERE shortcode = '".$sc5."' ";
$scannerresult5 = $conn->query($scanners5);
  if ($scannerresult5->num_rows > 0) {
 while($scannerrow5 = $scannerresult5->fetch_assoc()) {
 
 $scanner5 = $scannerrow5["serial"];

 }
  }
 else{
	 
	  $scanner5 = "";
	 
 }
 $scanners6 = "SELECT * FROM scanners WHERE shortcode = '".$sc6."' ";
 $scannerresult6 = $conn->query($scanners6);
 if ($scannerresult6->num_rows > 0) {
 	while($scannerrow6 = $scannerresult6->fetch_assoc()) {
 
 		$scanner6 = $scannerrow6["serial"];
 
 	}
 }
 else{
 
 	$scanner6 = "";
 
 }
 $scanners7 = "SELECT * FROM scanners WHERE shortcode = '".$sc7."' ";
 $scannerresult7 = $conn->query($scanners7);
 if ($scannerresult7->num_rows > 0) {
 	while($scannerrow7 = $scannerresult7->fetch_assoc()) {
 
 		$scanner7 = $scannerrow7["serial"];
 
 	}
 }
 else{
 
 	$scanner7 = "";
 
 }
 $scanners8 = "SELECT * FROM scanners WHERE shortcode = '".$sc8."' ";
 $scannerresult8 = $conn->query($scanners8);
 if ($scannerresult8->num_rows > 0) {
 	while($scannerrow8 = $scannerresult8->fetch_assoc()) {
 
 		$scanner8 = $scannerrow8["serial"];
 
 	}
 }
 else{
 
 	$scanner8 = "";
 
 }

?>