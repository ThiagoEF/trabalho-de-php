<?php

require_once("config.inc.php");

$data = mysqli_query($con,"SELECT * FROM users WHERE id = 1 ");

$pass = $_POST['password'];
$user = $_POST['username'];

$cor = mysqli_fetch_array($data);

if ($pass != $cor['username'] || $user != $cor['pass']){
    echo "<p>Invalid, <a href='index.php?pg=login'>try again.</a></p>";
}else{
    header('Location: index.php?pg=logged');
    setcookie("admin","$cor_pass");
}

?>