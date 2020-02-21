<?php
ob_start();
setcookie("loginAG", "", time()-3600, "/");
setcookie("senhaAG", "", time()-3600, "/");

		echo "<script type=\"text/javascript\">";
		echo "alert('Você se deslogou com sucesso!');";
		echo "location.href=\"../login\";";
		echo "</script>";
?>