<?php 
session_start(); 
include "todo_DB.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']); //포스트 방식으로 넘어온 유저네임과 패스워드 저장
	$pass = validate($_POST['password']);

	if (empty($uname)) { //유저네임이 비어있는 경우 에러사인출력
		header("Location: todo_list1.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){ //위와 동일 패스워드
        header("Location: todo_list1.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
        //테이블에서 유저네임, 패스워드 레코드를 가져옴

		$result = mysqli_query($conn, $sql);
        //쿼리 결과를 담음

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: todo_list2_login.php");
		        exit();
            }else{
				header("Location: todo_list1.php?error=계정명 또는 암호가 틀렸다");
		        exit();
			}
		}else{
			header("Location: todo_list1.php?error= 계정명 또는 암호가 틀렸다");
	        exit();
		}
	}
	
}else{
	header("Location: todo_list1.php");
	exit();
}