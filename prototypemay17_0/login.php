<?php
//http://www.ondeweb.in/ajax-login-form-with-jquery-and-php/
//http://www.formget.com/login-form-in-php/
extract($_POST);

require_once('DBConnector.php');
$db = DBConnector::getInstance();
$params = array(":roomid" => $roomid);

$rows = $db->query('SELECT password FROM room WHERE room_id = :roomid', $params);



if(count($rows) > 0) 
{
	
	if($password == $rows['0']['password'])
	{
		header("Location: loggedin.php");
	}
	else
	{
		echo "Your room number and password do not match.";
	}
}
else
{
    echo "Account credentials do not exist";
}


?>