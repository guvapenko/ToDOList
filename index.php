<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список дел</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Список дел</h1>
    <form action="add.php" method="post">
        <input type="text" name="task" id="task" placeholder="Задача" class="form-control">
        <button type="submit" name="createTask" class="btn btn-success">Создать</button>
    </form>

    <?php

        require_once 'db_config.php';   //вывод всех строк из таблицы
        $pdo = new dbConnect();
        echo '<ul>';
        $query = $pdo->query("SELECT * FROM justdoit ORDER BY id DESC");
        foreach($query as $i => $value)
        {
            echo '<li><b>'.$value['task'].'</b><a href="delete.php?id='.$query[$i]['id'].'"><button>Удалить</button></li>';
        }
        echo '</ul>';

    ?>
</body>
</html>

