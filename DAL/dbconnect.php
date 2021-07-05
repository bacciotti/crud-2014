<?php
// Connect to database with the information of CONFIG.PHP file.
include "/../config.php";
$db_connection = mysql_connect(BD_HOST, BD_USER, BD_PW);
if (!$db_connection) die ("<h1>Unable to connect to database. Please check CONFIG.PHP file.</h1>");
$db = mysql_select_db(BD_NAME);
?>