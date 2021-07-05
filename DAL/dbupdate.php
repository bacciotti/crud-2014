<?php

function UpdateTexto($pObjTexto){
	include "dbconnect.php";
	//Não esquecer de vincular os objetos às variáveis da query:
	$Titulo = $pObjTexto->Titulo;
	$Texto = $pObjTexto->Texto;
	$Texto_id = $pObjTexto->Texto_id;
	//

	$sql = "UPDATE textos SET titulo = '$Titulo', texto='$Texto' WHERE id = '$Texto_id'";
	$sql_query = mysql_query($sql, $db_connection);
}


function UpdatePersonagem($pObjPersonagem) {
	include "dbconnect.php";
	//Não esquecer de vincular os objetos às variáveis da query:
	$Personagem_id = $pObjPersonagem->Personagem_id;
	$Nome = $pObjPersonagem->Nome;
	$Nacionalidade = $pObjPersonagem->Nacionalidade;
	$Sexo = $pObjPersonagem->Sexo;
	//

	$sql = "UPDATE personagens SET nome = '$Nome', nacionalidade='$Nacionalidade', sexo = '$Sexo' WHERE id = '$Personagem_id'";
	$sql_query = mysql_query($sql, $db_connection);
}

?>