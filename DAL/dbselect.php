<?php
	function SelectTextos () {
		include "dbconnect.php";
		$sql = "SELECT id, texto, titulo FROM textos";
		$sql_query = mysql_query($sql, $db_connection);
		return $sql_query;
	}
	
	function SelectPersonagens() {
		include "dbconnect.php";
		$sql = "SELECT id, nome, nacionalidade, sexo FROM personagens";
		$sql_query = mysql_query($sql, $db_connection);
		return $sql_query;
	}
	
	function SelectTextoPorId ($pTextoId){
		include "dbconnect.php";
		$sql = "SELECT id, titulo, texto FROM textos WHERE id ='$pTextoId'";
		$sql_query = mysql_query($sql, $db_connection);
		return $sql_query;
	}
	
	function SelectPersonagemPorId ($pPersonagemId){
		include "dbconnect.php";
		$sql = "SELECT id, nome, nacionalidade, sexo FROM personagens WHERE id ='$pPersonagemId'";
		$sql_query = mysql_query($sql, $db_connection);
		return $sql_query;
	}
	
	
?>