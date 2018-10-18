<?php

require __DIR__ . '/../vendor/autoload.php';
use GuzzleHttp\HTTP\Client;
use Google\Cloud\BigQuery\BigQueryClient;

$projectId='informe-211921';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);

$query = <<<ENDSQL
select * from `EDENRED.EDENRED1`;
ENDSQL;

$queryJobConfig = $bigQuery->query($query);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i=0;
    $rows = $queryResults->rows();
    foreach($rows as $row){
       
        
  // printf("%s %s %s %s %s %s ".PHP_EOL,$row['Fecha'],$row['Concepto'],$row['Descripcion'],$row['Pedido'],$row['Nombre'],$row['Importe']);
    }
}
$query1 = <<<ENDSQL
select * from `EDENRED.ANTICIPO1`;
ENDSQL;

$queryJobConfig = $bigQuery->query($query1);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i=0;
    $rows1 = $queryResults->rows();
    foreach($rows1 as $row1){
       
     print_r($row1);   
   //printf("%s %s %s %s  ".PHP_EOL,$row1['CONCEPTOP'],$row1['NumEmpleado'],$row1['fecha_Pago'],$row1['username']);}
}

}		if()

?>