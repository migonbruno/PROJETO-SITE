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
$titulo = "Seja Bem-vindo";

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
    <h2>A maior comunidade sobre tecnologia.</h2>
    <br>
    <hr>
</div>

    <div class="begin">
        <p>Junte-se a nós, criando o seu <a href="login.php">cadastro</a> e compartilhando o seu conhecimento.</p>
        <p>Clicando na seção <a href="sobre.php">Sobre</a> você irá saber qual é nossa missão e objetivo.</p>
        <br>
        <hr>
        <center><img id="brasao" src="img/logo02.png" alt="Brasão">
    </div>

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>