<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>index</title>
	<link rel="stylesheet" href="../styles.css">
</head>

<body>

<nav id="menu">
	<ul>	
		<li><a href="../index.html">Início</a></li>
		<li><a href="../PL/ListaTextos.php">Textos</a></li>
		<li><a href="../PL/ListaPersonagens.php">Personagens</a></li>
	</ul>
</nav>

<div id="conteudo">
	

<?php

include "texto-class.php";
$objTexto = new texto;
$objTexto->Titulo = $_POST["titulo"];
$objTexto->Texto = $_POST["texto"];

if (isset($_GET['id'])) { //Se tem algo no GET, ou seja --> ALTERANDO TEXTO <-- 
	$objTexto->Texto_id = $_GET['id'];
	include "../DAL/dbupdate.php";
	UpdateTexto($objTexto);
	echo "Editado com sucesso";
}

else {						// Se não tem nada no GET, ou seja --> INSERINDO NOVO TEXTO <--
	include "../DAL/dbinsert.php";
	InserirTextoBD($objTexto->Titulo, $objTexto->Texto);
}

?>

</div>

<div id="rodape">desenvolvido por @baciotti</div>

</body>
</html>