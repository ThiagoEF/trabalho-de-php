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

<div class="message_table">
    <table>
        <tr>
            <th>
                <p><b>id</b></p>
            </th>
            <th>
                <p><b>name</b></p>
            </th>
            <th>
                <p><b>title</b></p>
            </th>
            <th>
                <p><b>message</b></p>
            </th>
            <th colspan="2">
                <p><b>edit</b></p>
            </th>
        </tr>
        <tr>
            <td>
                <?php  
                        if ($id = $d1['id']){
                            echo "<p>$id</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                ?>
            </td>
            <td>
                    <?php
                        if ($name = $d1['nome']){
                            echo "<p>$name</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if ($title = $d1['title']){
                            echo "<p>$title</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php  
                        if ($text = $d1['texto']){
                            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td rowspan="5">
                    <form class="admin" action="edit.php" method="post">
                        <label for="idedit">Id: </label><br>
                        <input type="number" name="idedit">
                        <label for="name">Nome: </label><br>
                        <input type="text" name="name" required>
                        <label for="title">Title: </label><br>
                        <input type="text" name="title" required>
                        <label for="text">Texto: </label><br>
                        <textarea name="text" cols="30" rows="10" required></textarea>
                        <button id="edit">Edit</button>
                    </form>
            </td>
        </tr>
        <tr>
            <td>
                <?php  
                        if ($id = $d2['id']){
                            echo "<p>$id</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                ?>
            </td>
            <td>
                    <?php
                        if ($name = $d2['nome']){
                            echo "<p>$name</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if ($title = $d2['title']){
                            echo "<p>$title</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php  
                        if ($text = $d2['texto']){
                            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php  
                        if ($id = $d3['id']){
                            echo "<p>$id</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                ?>
            </td>
            <td>
                    <?php
                        if ($name = $d3['nome']){
                            echo "<p>$name</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if ($title = $d3['title']){
                            echo "<p>$title</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php  
                        if ($text = $d3['texto']){
                            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php  
                        if ($id = $d4['id']){
                            echo "<p>$id</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                ?>
            </td>
            <td>
                    <?php
                        if ($name = $d4['nome']){
                            echo "<p>$name</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if ($title = $d4['title']){
                            echo "<p>$title</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php  
                        if ($text = $d4['texto']){
                            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php  
                        if ($id = $d5['id']){
                            echo "<p>$id</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                ?>
            </td>
            <td>
                    <?php
                        if ($name = $d5['nome']){
                            echo "<p>$name</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if ($title = $d5['title']){
                            echo "<p>$title</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php  
                        if ($text = $d5['texto']){
                            echo str_replace(array("\r\n", "\n", "\r"), "<br>", $text);
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
        </tr>
    </table>
</div>