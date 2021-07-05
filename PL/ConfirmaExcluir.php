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

switch ($_GET['TipoExclusao']) {
	//Flag TipoExclusao: 0 - Confirmacao de Exclusao de TEXTO; 1 - Confirmacao de Exclusao de PERSONAGEM;
    case 0: //0 - Confirmacao de Exclusao de TEXTO;
        include "../DAL/dbselect.php";
		include "../BLL/texto-class.php";
		$objTexto = new texto;
		$objTexto->Texto_id = $_GET['id']; 
		$sql_query = SelectTextoPorId($objTexto->Texto_id);
		$dados=mysql_fetch_array($sql_query);
		$objTexto->Titulo = $dados['titulo'];
		$objTexto->Texto = $dados['texto'];
		echo "Tem certeza que deseja excluir o texto:";
		echo "<br><br>";
		echo "<b>".$objTexto->Titulo."</b>";
		echo "<br><br>";
		echo "<a href='../PL/ListaTextos.php'>NO!</a></br>"; 
		echo "<a href='../BLL/ExcluirTexto.php?id=$objTexto->Texto_id'>YES!</a></br>";
        break;
    case 1: //1 - Confirmacao de Exclusao de PERSONAGEM;
		include "../DAL/dbselect.php";
		include "../BLL/personagem-class.php";
		$objPersonagem = new personagem;
		$objPersonagem->Personagem_id = $_GET['id']; 
		$sql_query = SelectPersonagemPorId($objPersonagem->Personagem_id);
		$dados=mysql_fetch_array($sql_query);
		$objPersonagem->Nome = $dados['nome'];
		echo "Tem certeza que deseja excluir o personagem:";
		echo "<br><br>";
		echo "<b>".$objPersonagem->Nome."</b>";
		echo "<br><br>";
		echo "<a href='../PL/ListaPersonagens.php'>NO!</a></br>"; 
		echo "<a href='../BLL/ExcluirPersonagem.php?id=$objPersonagem->Personagem_id'>YES!</a></br>";
        break;
    default:
       echo "Algum erro ocorreu. Contate o administrador do sistema.";
}





?>

		
</div>


<div id="rodape">desenvolvido por @baciotti</div>
</body></html>