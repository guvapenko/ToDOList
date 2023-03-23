<?php

require_once 'db_config.php';

$task = $_POST['task'];
if($task === '') {
    echo 'Введите задачу';
    exit();
}

$pdo = new dbConnect();

$params = [[$_POST['task']]];

$sql = 'INSERT INTO justdoit(task) VALUES (?)';  //внесение данных в таблицу
$pdo->query($sql, $params);

header('Location: index.php');

