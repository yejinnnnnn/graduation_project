<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
      rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <div id="todolist">
        <div class="main__title">
            <h1><?php echo $_SESSION['name']; ?>'s To do list</h1>
        </div>
    
        <div class="input__section">
           
            <input type = "text" class = "item" autofocus="true"> 
            <button type = "button" class="input__button">add</button>
           
        </div>
    
        <div class="item__list"></div>
    
    </div>

    <div>
        <button><a href="todo_list1.php" style="color:white">MAIN</a></button>
    </div>


    <script src="todo.js" defer></script>
</head>
<?php 
}else{
     header("Location: todo_list1.php");
     exit();
}
 ?>