<?php

require_once("config.inc.php");


$data1 = mysqli_query($con,"SELECT * FROM messages WHERE id = 1 ");
$data2 = mysqli_query($con,"SELECT * FROM messages WHERE id = 2 ");
$data3 = mysqli_query($con,"SELECT * FROM messages WHERE id = 3 ");
$data4 = mysqli_query($con,"SELECT * FROM messages WHERE id = 4 ");
$data5 = mysqli_query($con,"SELECT * FROM messages WHERE id = 5 ");
?>
 <p id="log-id"><b>You are logged as <?php echo $_COOKIE['admin']; ?>.</b></p>
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
        </tr>
        <tr>
            <td>
                <?php  
                        if ($id = @mysqli_fetch_array($data1)['id']){
                            echo "<p>$id</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                ?>
            </td>
            <td>
                    <?php
                        if ($name = @mysqli_fetch_array($data1)['name']){
                            echo "<p>$id</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if ($title = @mysqli_fetch_array($data1)['title']){
                            echo "<p>$id</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
            <td>
                    <?php  
                        if ($text = @mysqli_fetch_array($data1)['text']){
                            echo "<p>$id</p>";
                        }else{
                            echo "<p>Empty.</p>";
                        }
                    ?>
            </td>
        </tr>
    </table>
</div>