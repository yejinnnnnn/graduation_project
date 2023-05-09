
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MY TODO LIST </title>
    <h1> MY TODO LIST </h1>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    
    <div>
        <button><a href="todo_list3.php" style="color:white"> MY TO DO LIST</a></button>
    </div>

    <div>
    <p></p>
    </div>

    <div>
        <button><a href="todo_list1.php" style="color:white">Logout</a></button>
    </div>
</body>
</html>

<?php 
}else{
     header("Location: todo_list1.php");
     exit();
}
 ?>