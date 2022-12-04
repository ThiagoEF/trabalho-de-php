<?php
setcookie('cadastro');
?>
<div class="sticker-login">
    <p>.</p>
</div>
<div id="login">
    <form action="loginback.php" method="post">
        <h2 id="h2">LOGIN</h2>
        <input class="input" type="text" required name="username" placeholder="username"><br>
        <input class="input" type="password" required name="password" placeholder="password"><br>
        <button class="button-login">Enviar</button>
    </form>
</div>