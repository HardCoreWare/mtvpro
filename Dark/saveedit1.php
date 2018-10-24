<?php
require_once __DIR__ . '/../vendor/autoload.php';
//use GuzzleHttp\HTTP\Client;
use Google\Cloud\BigQuery\BigQueryClient;
//echo "BIGQUERY PROCESS1";

$projectId='informe-211921';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);
$query40 = <<<ENDSQL
select * from `multiva.php_interview_questions3` WHERE "$_POST['column']"!=0 order by id ASC;
ENDSQL;

$queryJobConfig = $bigQuery->query($query40);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=1;
    $rows40 = $queryResults->rows();
    foreach($rows40 as $row40){
    }
    }
require_once("dbcontroller.php");
$db_handle = new DBController();
$result = $db_handle->executeUpdate("UPDATE php_interview_questions2 set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"]);

$query = <<<ENDSQL
"UPDATE `multiva.php_interview_questions3`
SET $_POST['column'] = REGEXP_REPLACE($_POST['column'], r"0", "$_POST['editval']")
WHERE id="$_POST['id']";
ENDSQL;
//echo "BIGQUERY PROCESS3";

$queryJobConfig = $bigQuery->query($query);
$queryResults = $bigQuery->runQuery($queryJobConfig);

$result = $db_handle->executeUpdate("UPDATE `multiva.php_interview_questions3`
SET " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"]);;

?>