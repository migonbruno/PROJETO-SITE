<?php
session_start();

session_destroy();

echo "desconectado com sucesso"

header("Location: index.php");
exit;

?>