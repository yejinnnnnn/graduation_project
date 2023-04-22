<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MY TODO LIST </title>
    <h1> MY TODO LIST </h1>
</head>

<body>
    <div>
        <button><a href="todo_list1.php">MAIN</a></button>
    </div>
    
    <div>
        <button><a href="todo_list3.php"> GO TODAYS TODO</a></button>
    </div>

</body>
</html>



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
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>

     <div>
        <button><a href="todo_list1.php">MAIN</a></button>
    </div>
    
    <div>
        <button><a href="todo_list3.php"> GO TODAYS TODO</a></button>
    </div>

    <a href="todo)list1.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>