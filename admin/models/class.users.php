<?php

class Users{
var $statusmsg = NULL;
//--------------------------------------------------------------

#gets single admin information
function getUser($event_id, $user_id){
	
	$function = 'getAdmin';
        
        if((int)$event_id == 0){
            $this->statusmsg = 'no event_id  id ';
            return false;
	}
	if((int)$user_id == 0){
            $this->statusmsg = 'no user  id ';
            return false;
	}	
	
	$query = "SELECT * FROM users"
                . " WHERE  user_id = '$user_id' "
                . "AND event_id = '$event_id' LIMIT 1 ";	
	$result = mysql_query($query);
	
	if(!$result){		
            $this->statusmsg = 'A backend error occured. ';
            keeplog($function, $this->statusmsg.' - '.mysql_error());
            return false;		
	}
	if(mysql_num_rows($result) == 0){		
            $this->statusmsg = 'No user found';	
            return false;			
	}
	
		
	return $row;
	
}

function userLookup($eventid){

	$query = "SELECT * FROM users where type_id=4 and event_id=".$eventid;
	$result = mysql_query($query);

	if(!$result){
		return false;
	}
	if(mysql_num_rows($result) == 0){
		return false;
	}
	$resultprint='';
	while($row = mysql_fetch_array($result)){
		
		$resultprint = $resultprint."<option value='".$row['event_id']."' >".$row['name']." ".$row['surname']. "</option>";
		
	}
	
	return $resultprint;
}

//--------------------------------------------------------------
#funtion to log the admin in
function loginUser($username, $password){
	
	$function = 'loginAdmin';

	if(strlen($username) < 4){
            $this->statusmsg = 'Username is to short';
            return false;	
		
	}
	if(strlen($password) < 4){
            $this->statusmsg = 'Password is to short';
            return false;			
	}
		//echo "Username :".$username;
		//echo "Password :".$password;
        //$username 	= clean_string(strtolower($username));
		//$password 	= clean_string(strtolower($password));
	
        
	$query = "SELECT * FROM users  WHERE username = '$username' AND password = '$password' LIMIT 1";
	$result = mysql_query($query);
	echo "No. Users found :".mysql_num_rows($result);
	if(!$result){

		$this->statusmsg = 'An backend MYSQL error occurred.';
		keeplog($function, $this->statusmsg.' - '.mysql_error());
		return false;
		
	}else{	
	
            if(mysql_num_rows($result) == 0){
                    
                $this->statusmsg = 'Delegate not found or details incorrect';
                //keeplog($function, $this->statusmsg.' - for '. $username.' | '.$password);					
                return false;
                    
            }
 
            $this->statusmsg = 'Loggin user in';			
            return mysql_fetch_array($result); 
	}//else
	
} //function 

	function sendForgottenPassword(){
	
	}

}