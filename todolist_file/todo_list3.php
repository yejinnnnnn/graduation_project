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
            <h1>To do list</h1>
        </div>

        <div>
            <button><a href="todo_list1.php">MAIN</a></button>
        </div>
    
        <div class="input__section">
            <form>
                <div>
                    <input type = "text" class = "item" autofocus="true">
                </div>
                <div>
                    <button type = "button" class="input__button"><i class="fas fa-plus-circle"></i></button>
                </div>
            </form>
        </div>
    
        <div class="item__list"></div>
    
    </div>

    <script src="todo.js" defer></script>
</head>