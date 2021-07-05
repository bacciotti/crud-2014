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
		<li><a href="ListaTextos.php">Textos</a></li>
		<li><a href="ListaPersonagens.php">Personagens</a></li>
	</ul>
</nav>

<div id="conteudo">
	


<?php

include "../DAL/dbselect.php";
include "../BLL/personagem-class.php";
$objPersonagem = new personagem;
$sql_query = SelectPersonagens();

while($dados=mysql_fetch_array($sql_query)) { 
	$objPersonagem->Personagem_id = $dados['id']; 
	$objPersonagem->Nome = $dados['nome'];
	$objPersonagem->Nacionalidade = $dados['nacionalidade'];
	$objPersonagem->Sexo = $dados['sexo'];
	echo"<br>";
	echo "<b>Id:</b> ".$objPersonagem->Personagem_id." <br>";
	echo "<b>Nome:</b> ".$objPersonagem->Nome." <br>"; 
	echo "<b>Nacionalidade:</b> ".$objPersonagem->Nacionalidade." <br>"; 
	
	if ($objPersonagem->Sexo == 0) //Padrão do Sistema: 0 = Masculino, 1 = Feminino. Campo do BD é "sexo" BOOLEANO !
	{ 
		echo "<b>Sexo:</b> Masculino <br>"; 
	}
	else
	{
		echo "<b>Sexo:</b> Feminino <br>"; 
	}
	
	echo "<a href='../PL/PL_InsereAlteraPersonagem.php?id=$objPersonagem->Personagem_id'>Ver</a></br>"; 
	echo "----------------------------------------------------------------------<br></br>";
											} // End of loop WHILE
										
?>

	


</div>



















<div id="rodape">desenvolvido por @baciotti</div>


</body>
</html>