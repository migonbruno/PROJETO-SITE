<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "Notícias";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "/css/blog.css";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "/js/artigos.js";
$menu = "blog";

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/

// Pesquisando artigo no banco de dados
$sql = <<<SQL
SELECT titulo_noticia, resumo_noticia, texto_noticia, autores.*
    FROM noticias
    INNER JOIN autores ON autor_id = id_autor
    AND status_noticia = 'ativo'
    ORDER BY data_noticia DESC
;

SQL;

// Executar a query
$res = $conn->query($sql);
$noticias = '';
while ( $noti = $res->fetch_assoc() ) :


// Preparação da view de noticias
$noticias .=  <<<TEXTO

    <div class="noticias">
        <h3>{$noti['titulo_noticia']}</h3>
        <small>Por: <a href="{$noti['site']}" id="modalAutor" target="_blank">{$noti['nome_tela']}</a></small>
        <hr>
        <p>{$noti['resumo_noticia']}</p>
        <a href="{$noti['texto_noticia']}"><p>Leia mais...</p></a>
    </div>
TEXTO;


endwhile;



/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/


// Inclui o cabeçalho do template
require ('_header.php');

echo($noticias);
echo($mautor);
?>

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>