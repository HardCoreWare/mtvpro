<?php
require_once("dbcontroller.php");
require_once __DIR__ . '/../vendor/autoload.php';

use Google\Cloud\BigQuery\BigQueryClient;

$projectId='informe-211921';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);



$db_handle = new DBController();
$result = $db_handle->executeUpdate("UPDATE php_interview_questions2 set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"]);;


$result = $db_handle->executeUpdate("UPDATE `multiva.php_interview_questions3` SET ".$_POST['column']." = REPLACE(".$_POST['column'].", r"0", ".$_POST['editval'].") WHERE id=".$_POST['id'].");");



?>