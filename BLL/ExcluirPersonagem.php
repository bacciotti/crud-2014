<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>index</title>
	<link rel="stylesheet" href="../styles.css"></head>

<body>

<nav id="menu">
	<ul>	
		<li><a href="../index.html">In�cio</a></li>
		<li><a href="../PL/ListaTextos.php">Textos</a></li>
		<li><a href="../PL/ListaPersonagens.php">Personagens</a></li>
	</ul>
</nav>

<div id="conteudo">

<?php 
include "personagem-class.php";
$objPersonagem = new personagem;
$objPersonagem->Personagem_id = $_GET['id'] ; 
include "../DAL/dbdelete.php";
DeletePersonagemBD($objPersonagem);
echo "Exclu�do com sucesso!";
?>

		
</div>


<div id="rodape">desenvolvido por @baciotti</div>
</body></html>