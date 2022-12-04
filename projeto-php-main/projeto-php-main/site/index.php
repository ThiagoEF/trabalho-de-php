<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="css/aboutus.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="css/content.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="css/footer.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="css/logged.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="css/messages.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="css/cadastro.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    
</head>
<body>
    <header>

<?php

include_once("main.php");

if (empty($_SERVER['QUERY_STRING'])){
    $var = "content.php";
    include_once($var);
}else{
    $pg = $_GET['pg'];
	include_once("$pg.php");
}

include_once("footer.php");

?>