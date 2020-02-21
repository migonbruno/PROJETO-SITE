<?php

// Configuração inicial da página
require ('_config.php');

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/


/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Define o título "desta" página
$titulo = "";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "/css/index.css";
$menu = "index";
// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

// Inclui o cabeçalho do template
require ('_header.php');

?>
<div class="welcomehome">
    <h1>SEJA BEM-VINDO AO CURSED LAB.</h1>
    <br>    
    <h2>Faça seu cadastro e junte-se a nossa comunidade.</h2>
    <br>
    <hr>
</div>

<div class="login">
    <form method="post" action="valida.php">
        <p>
            <input type="email" name="email" id="email" placeholder="Email" maxlength="50" /> 
        </p>
        <p>
            <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="50" />
        </p>
        <p>
            <input class="butaum" type="submit" value="Entrar" />
        </p>
        <p>
        <input class="butaum" type="submit" value="Cadastrar" />
        </p>
    </form>
</div>
<center><img src="img/logo05.png" alt=""></center>
<hr>
<?php

// Inclui o rodapé do template
require ('_footer.php');

?>