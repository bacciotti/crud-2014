<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>index</title>
	<link rel="stylesheet" href="../styles.css"></head>

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

include "../BLL/texto-class.php";
$objTexto = new texto;

if(isset($_GET['id'])) { // Se tem algo no GET, ou seja --> ALTERANDO TEXTO <-- 
	include "../DAL/dbselect.php";
	$objTexto->Texto_id = $_GET['id'] ; 
	$sql_query = SelectTextoPorId($objTexto->Texto_id);
	$dados=mysql_fetch_array($sql_query);
	$objTexto->Titulo = $dados['titulo'];
	$objTexto->Texto = $dados['texto'];
	
	//Menu 2 
	echo "<nav id='menu2'>";
	echo "<ul>";	
	echo "<li><a href='../PL/ConfirmaExcluir.php?id=$objTexto->Texto_id&TipoExclusao=0' >Excluir texto</a></li>";
	echo "</ul>";
	echo "</nav>";
	//Menu 2 FIM

	echo "Alterar texto";
	echo "Título";
	echo "<br>";
	echo "<form name='input' action='../BLL/BLL_InsereAlteraTexto.php?id=$objTexto->Texto_id' method='POST'>";
	echo "<input tabindex='1' size='140' name='titulo' value="."'".$objTexto->Titulo."'".">";
	echo "<br><br>";
	echo "Texto";
	echo "<br>";
	echo "<textarea tabindex='2' cols='105' rows='100' name='texto'>";
	echo $objTexto->Texto;
	echo "</textarea>";
	echo "</textarea>";
	echo "<br><br>";
	echo "<div style='text-align: left;'>";
	echo "<input name='submeter' id='submeter' value='Submeter' type='submit'>";
	echo "</div>";
	echo "</form>";		
	

}

else	// Se não tem nada no GET, ou seja --> INSERINDO NOVO TEXTO <--
{
	echo "Inserir novo texto";
	echo "Título";
	echo "<br>";
	echo "<form name='input' action='../BLL/BLL_InsereAlteraTexto.php' method='POST'>";
	echo "<input tabindex='1' size='140' name='titulo'>";
	echo "<br><br>";
	echo "Texto";
	echo "<br>";
	echo "<textarea tabindex='2' cols='105' rows='100' name='texto'>";
	echo "</textarea>";
	echo "<br><br>";
	echo "<div style='text-align: left;'>";
	echo "<input name='submeter' id='submeter' value='Submeter' type='submit'>";
	echo "</div>";
	echo "</form>";		

}
?>

		
</div>


<div id="rodape">desenvolvido por @baciotti</div>
</body></html>