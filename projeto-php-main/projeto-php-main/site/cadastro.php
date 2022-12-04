
<h2>Cadastrar</h2>
<div class="sticker-cadas">
    <p>.</p>
</div>
<div class="cadastro">
    <form action="cadastrodb.php" method="post">
        <h2 id="h2-cadas">cadastro</h2>
        <input  class="input-cadas"lasstype="text" placeholder="username" name="senha" required><br>
        <input  class="input-cadas"type="password" placeholder="password" name="nome" required><br>
        <button class="button-cadas">Enviar</button>
    </form>
    <?php
        if ($cadastro = @$_COOKIE['cadastro']){
            echo "<p id='cadastro-message'>$cadastro</p>";
        }else{
            echo "";
        }
        
    ?>
</div>
