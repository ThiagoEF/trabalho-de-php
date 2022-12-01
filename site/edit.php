<?php

require_once("config.inc.php");

$idedit = @$_POST['idedit'];
$name = @$_POST['name'];
$title = @$_POST['title'];
$text = @$_POST['text'];

mysqli_query($con, "UPDATE messages SET nome=$name,title=$title,texto=$text WHERE id=$idedit");