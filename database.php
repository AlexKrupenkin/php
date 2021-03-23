<?php

$link = mysqli_connect('localhost', 'root', '', 'fp');


if (mysqli_connect_errno()) {
    echo 'error connect (' . mysqli_connect_errno() . ')';
    exit();
}


$sql = "SELECT * FROM `users`";

$result = mysqli_query($link, $sql);

$users = mysqli_fetch_all;


echo '<pre>';
var_dump($result);
echo '</pre>';
ddd