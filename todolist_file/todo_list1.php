<!DOCTYPE html>
<html>
<head>
	<title>로그인</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="todo_list4.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">로그인</button>
          <a href="todo_sign.php" class="ca">회원 가입</a>
     </form>
</body>
</html>
