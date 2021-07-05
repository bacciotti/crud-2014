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

include "personagem-class.php";
$objPersonagem = new personagem;
$objPersonagem->Nome = $_POST["nome"];
$objPersonagem->Nacionalidade = $_POST["nacionalidade"];

if ($_POST["sexo"] == "Masculino") {
	$objPersonagem->Sexo = 0;  // Padrão do Sistema: 0 = Masculino, 1 = Feminino. Campo do BD é "sexo" BOOLEANO !
}
else{
	$objPersonagem->Sexo = 1;
}


if (isset($_GET['id'])) { //Se tem algo no GET, ou seja --> ALTERANDO TEXTO <-- 
	$objPersonagem->Personagem_id = $_GET['id'];
	include "../DAL/dbupdate.php";
	UpdatePersonagem($objPersonagem);
	echo "Editado com sucesso";
}

else {						// Se não tem nada no GET, ou seja --> INSERINDO NOVO TEXTO <--
	include "../DAL/dbinsert.php";
	InserirPersonagemBD($objPersonagem);
}

?>

</div>

<div id="rodape">desenvolvido por @baciotti</div>

</body>
</html>