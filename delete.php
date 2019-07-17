<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["Id"])) {
    $query = "DELETE FROM tb_user_224 WHERE Id=".$_GET["Id"];
    $result = $db_handle->executeQuery($query);
	if(!empty($result)){
		header("Location:DB.php");
	}
}
?>