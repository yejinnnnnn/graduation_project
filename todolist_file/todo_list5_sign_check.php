<?php 
session_start(); 
include "todo_DB.php";
$intnum=1;
if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}


	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: todo_sign.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: todo_sign.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: todo_sign.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: todo_sign.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: todo_sign.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: todo_sign.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(id, user_name, password, name) VALUES(3, '$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           
           
           if ($result2) {
           	 header("Location: todo_sign.php?success=success");
	         exit();
           }else {
	           	header("Location: todo_sign.php?error=ERROR&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: todo_sign.php");
	exit();
}
