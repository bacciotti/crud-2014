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

include "../BLL/personagem-class.php";
$objPersonagem = new personagem;

if(isset($_GET['id'])) { // Se tem algo no GET, ou seja --> ALTERANDO TEXTO <-- 
	include "../DAL/dbselect.php";
	$objPersonagem->Personagem_id = $_GET['id'] ; 
	$sql_query = SelectPersonagemPorId($objPersonagem->Personagem_id);
	$dados=mysql_fetch_array($sql_query);
	$objPersonagem->Nome = $dados['nome'];
	$objPersonagem->Nacionalidade = $dados['nacionalidade'];
	$objPersonagem->Sexo = $dados['sexo']; // Padrão do Sistema: 0 = Masculino, 1 = Feminino. Campo do BD é "sexo" BOOLEANO !
	


	//Menu 2 
	echo "<nav id='menu2'>";
	echo "<ul>";	
	echo "<li><a href='../PL/ConfirmaExcluir.php?id=$objPersonagem->Personagem_id&TipoExclusao=1' >Excluir personagem</a></li>";
	//Flag TipoExclusao: 0 - Confirmacao de Exclusao de TEXTO; 1 - Confirmacao de Exclusao de PERSONAGEM;
	echo "</ul>";
	echo "</nav>";
	//Menu 2 FIM

	echo "Alterar personagem";
	echo "Nome";
	echo "<br>";
	echo "<form name='input' action='../BLL/BLL_InsereAlteraPersonagem.php?id=$objPersonagem->Personagem_id' method='POST'>";
	echo "<input tabindex='1' size='140' name='nome' value="."'".$objPersonagem->Nome."'".">";
	echo "<br><br>";
	echo "Nacionalidade";
	echo "<br>";
	echo "<input tabindex='2' size='140' name='nacionalidade' value="."'".$objPersonagem->Nacionalidade."'".">";
	echo "<br><br>";
	echo "Sexo:";
	echo "<br>";
	
	if ($objPersonagem->Sexo == 0)  // Padrão do Sistema: 0 = Masculino, 1 = Feminino. Campo do BD é "sexo" BOOLEANO !
	{
		echo "<input type='radio' name='sexo' value='Masculino' checked >Masculino<br>";
		echo "<input type='radio' name='sexo' value='Feminino'>Feminino";
	}
	else
	{
		echo "<input type='radio' name='sexo' value='Masculino'>Masculino<br>";
		echo "<input type='radio' name='sexo' value='Feminino' checked>Feminino";
	}
	
	echo "<div style='text-align: left;'>";
	echo "<br>";
	echo "<br>";
	echo "<input name='submeter' id='submeter' value='Submeter' type='submit'>";
	echo "</div>";
	echo "</form>";		
	

}

else	// Se não tem nada no GET, ou seja --> INSERINDO NOVO TEXTO <--
{
	echo "Inserir novo personagem";
	echo "Nome";
	echo "<br>";
	echo "<form name='input' action='../BLL/BLL_InsereAlteraPersonagem.php' method='POST'>";
	echo "<input tabindex='1' size='140' name='nome'>";
	echo "<br><br>";
	echo "Nacionalidade";
	echo "<br>";
	echo "<input tabindex='2' size='140' name='nacionalidade'>";
	echo "<br><br>";
	echo "Sexo:";
	echo "<br>";
	echo "<input type='radio' name='sexo' value='Masculino'>Masculino<br>";
	echo "<input type='radio' name='sexo' value='Feminino'>Feminino";
	echo "<div style='text-align: left;'>";
	echo "<br>";
	echo "<br>";	
	echo "<input name='submeter' id='submeter' value='Submeter' type='submit'>";
	echo "</div>";
	echo "</form>";		

}
?>

		
</div>


<div id="rodape">desenvolvido por @baciotti</div>
</body></html>