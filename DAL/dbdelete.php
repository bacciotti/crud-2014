<?php

function DeleteTextoBD($pObjTexto)
{
	include "dbconnect.php";
	//Não esquecer de vincular os objetos às variáveis da query:
	$Texto_id = $pObjTexto->Texto_id;
	//
	$sql = "DELETE FROM textos WHERE id = '$Texto_id'";
	$sql_query = mysql_query($sql, $db_connection);
}


function DeletePersonagemBD($pObjPersonagem)
{
	include "dbconnect.php";
	//Não esquecer de vincular os objetos às variáveis da query:
	$Personagem_id = $pObjPersonagem->Personagem_id;
	//
	$sql = "DELETE FROM personagens WHERE id = '$Personagem_id'";
	$sql_query = mysql_query($sql, $db_connection);
}


?>
