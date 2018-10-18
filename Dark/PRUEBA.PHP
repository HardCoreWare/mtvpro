<?php //echo 'Hello, World';
//php -S localhost:8000 -t WEBAPP
//echo "BIGQUERY PROCESS";

require_once __DIR__ . '/../vendor/autoload.php';
//use GuzzleHttp\HTTP\Client;
use Google\Cloud\BigQuery\BigQueryClient;
//echo "BIGQUERY PROCESS1";

$projectId='mtv-gsts';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);
//echo "BIGQUERY PROCESS2";
$consulta= <<<ENDSQL
select CUENTA, FECHA, SOCIEDAD, DESCRIPCION, MONTO, MONEDA from `GASTOS.BSEG200y500`  where  CUENTA in ("6491350400","6491350100","6491350200","6491350300") and fecha like "201801%";
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta);
$queryResults = $bigQuery->runQuery($queryJobConfig);
if ($queryResults->isComplete()) {
    $i = 0;
    $fila = $queryResults->rows();


   $C1="6491350400";
   $C2="6491350100";
   $C3="6491350200";
   $C4="6491350300";

    foreach ($fila as $filas) {
        $wer[$filas['CUENTA']]=$filas;
print_r($filas);
      /*  if($filas['CUENTA']===$C1 && $filas['SOCIEDAD']==="5200"){
            $wer[$filas['CUENTA']]=$filas;
           // print_r($wer);
            //$were=$wer;
          // print_r($resultado);
        
        }else if($filas['CUENTA']=$C2 && $filas['SOCIEDAD']==="5200"){
            $wer1[$filas['CUENTA']]=$filas;
            // print_r($wer1);
            $were=$wer1;

        }else if($filas['CUENTA']=$C3 && $filas['SOCIEDAD']==="5200"){
            $wer2[$filas['CUENTA']]=$filas;
            // print_r($wer2);
           

        }else if($filas['CUENTA']=$C4 && $filas['SOCIEDAD']==="5200"){
            $wer3[$filas['CUENTA']]=$filas;
            //print_r($wer3);
           

        }else{}*/

       // print_r($filas);
   


    
//$resultado=array_merge($wer, $weres);
//print_r($weres);

}}



die();
/*if($wer['6491350400']['CUENTA']="6491350400" && $wer['6491350100']['CUENTA']="6491350100" && $wer['6491350200']['CUENTA']="6491350200" && $wer['6491350300']['CUENTA']="6491350300"){
    for($i=0;$i<=count($wer['6491350400']);$i++){
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL, $wer['6491350400']['DESCRIPCION'], $wer['6491350400']['MONTO'],$wer['6491350400']['MONEDA']);
    }
} else{
    echo "ERROR";}*/


?>