<?php

require_once("config.inc.php");

$data1 = mysqli_query($con,"SELECT * FROM users WHERE id=1");
$data2 = mysqli_query($con,"SELECT * FROM users WHERE id=2");
$data3 = mysqli_query($con,"SELECT * FROM users WHERE id=3");
$data4 = mysqli_query($con,"SELECT * FROM users WHERE id=4");
$data5 = mysqli_query($con,"SELECT * FROM users WHERE id=5");

$pass = $_POST['password'];
$user = $_POST['username'];

$cor1 = mysqli_fetch_array($data1);
$cor2 = mysqli_fetch_array($data2);
$cor3 = mysqli_fetch_array($data3);
$cor4 = mysqli_fetch_array($data4);
$cor5 = mysqli_fetch_array($data5);

if ($pass != $cor1['username'] || $user != $cor1['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=logged');
    setcookie(name, $user);
}
if ($pass != $cor2['username'] || $user != $cor2['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor3['username'] || $user != $cor3['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor4['username'] || $user != $cor4['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor5['username'] || $user != $cor5['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
header('Location: index.php?pg=login');

?>