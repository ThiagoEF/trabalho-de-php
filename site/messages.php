<?php
require_once("config.inc.php");


$data1 = mysqli_query($con,"SELECT * FROM messages WHERE id = 1 ");
$data2 = mysqli_query($con,"SELECT * FROM messages WHERE id = 2 ");
$data3 = mysqli_query($con,"SELECT * FROM messages WHERE id = 3 ");
$data4 = mysqli_query($con,"SELECT * FROM messages WHERE id = 4 ");
$data5 = mysqli_query($con,"SELECT * FROM messages WHERE id = 5 ");
$d1 = @mysqli_fetch_array($data1);
$d2 = @mysqli_fetch_array($data2);
$d3 = @mysqli_fetch_array($data3);
$d4 = @mysqli_fetch_array($data4);
$d5 = @mysqli_fetch_array($data5);
?>

<div id= messages-back class="messages-container">
    <div class="message1">
        <?php
            $name = $d1['nome'];
            echo "Author: $name";
            $title = $d1['title'];
            echo "<h3>$title</h3>";
            echo "<br>";
            $text = $d1['texto'];
            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
        ?>
    </div>
    <div class="message2">
        <?php
            $name = $d2['nome'];
            echo "Author: $name";
            $title = $d2['title'];
            echo "<h3>$title</h3>";
            echo "<br>";
            $text = $d2['texto'];
            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
        ?>
    </div>
    <div class="message3">
        <?php
            $name = $d3['nome'];
            echo "Author: $name";
            $title = $d3['title'];
            echo "<h3>$title</h3>";
            echo "<br>";
            $text = $d3['texto'];
            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
        ?>
    </div>
    <div class="message4">
        <?php
            $name = $d4['nome'];
            echo "Author: $name";
            $title = $d4['title'];
            echo "<h3>$title</h3>";
            echo "<br>";
            $text = $d4['texto'];
            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
        ?>
    </div>
    <div class="message5">
        <?php
            $name = $d5['nome'];
            echo "Author: $name";
            $title = $d5['title'];
            echo "<h3>$title</h3>";
            echo "<br>";
            $text = $d5['texto'];
            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
        ?>
    </div>
</div>