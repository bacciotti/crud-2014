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
include "../BLL/texto-class.php";
$objTexto = new texto;
$sql_query = SelectTextos();
$total = mysql_num_rows($sql_query);


while($dados=mysql_fetch_array($sql_query)) { 
	$objTexto->Texto_id = $dados['id']; 
	$objTexto->Titulo = $dados['titulo'];
	echo"<br>";
	echo "<b>Id:</b> ".$objTexto->Texto_id." <br>";
	echo "<b>Título:</b> ".$objTexto->Titulo." <br>"; 
	echo "<a href='../PL/PL_InsereAlteraTexto.php?id=$objTexto->Texto_id'>Ver</a></br>"; 
	echo "----------------------------------------------------------------------<br></br>";
											} // End of loop WHILE
										
?>

	


</div>



















<div id="rodape">desenvolvido por @baciotti</div>


</body>
</html>