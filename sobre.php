<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "Sobre";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "/css/sobre.css";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";
$menu = "sobre";

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/



/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/


// Inclui o cabeçalho do template
require ('_header.php');

?>

    <div class="about">
        <h2 id="about">O que é a Cursed Lab.?</h2>
        <hr>
        <p>Somos uma comunidade tecnológica que busca compartilhar o conhecimento e criar novas ferramentas.</p>
            <p>Nossa equipe principal de desenvolvedores tem um projeto de criação de Bots para o Discord em curso,
            no qual os membros cadastrados aqui no nosso site terão em primeira mão todas as informações sobre o desenvolvimento e andamento do projeto.</p>

            <p>Aqui você poderá expor suas ideias e contribuir com projetos de outros membros, crie artigos, compartilhe notícias e muito mais...</p>

            
        </h2>

    </div>  

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>