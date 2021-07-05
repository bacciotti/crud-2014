<?php
function InserirTextoBD ($titulo, $texto) {
	include "dbconnect.php";
	$sql = "INSERT INTO textos (autor_id, titulo, texto) VALUES (1,'$titulo','$texto')"; 
	$sql_query = mysql_query($sql, $db_connection);
}

function InserirPersonagemBD ($pObjPersonagem) {
	include "dbconnect.php";
	$nome =  $pObjPersonagem->Nome;
	$nacionalidade = $pObjPersonagem->Nacionalidade;
	//$sexo = $pObjPersonagem->Sexo; // Padrão do Sistema: 0 = Masculino, 1 = Feminino. Campo do BD é "sexo" BOOLEANO !
	$sexo = 1;
	$sql = "INSERT INTO personagens (nome, nacionalidade, sexo) VALUES ('$nome','$nacionalidade', $sexo)"; 
	$sql_query = mysql_query($sql, $db_connection);
}

?>
