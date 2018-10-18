<!DOCTYPE html>
<html>

<style>  
.table-fixed thead {
  width: 100%;
}
.table-fixed tbody {
  height: 550px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr .table-fixed th {
  display: block;
}
.table-fixed tbody tr td, .table-fixed thead > tr> th {
  
  border-bottom-width: 20px;
}

.dropbtn {
    background-color: none;
    color: none;
    font-size: 14px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;

    position: absolute;
    background-color: white;
    min-width: 160px;

    /*box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.2);*/
    z-index: 1;
}


.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}


.dropdown-content a:hover {
    background-color: none;
    color:none;
    }


.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: none;
    
}
P.mipar {
    text-align: right;
}
</style>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>BIENVENIDO MULTIVA</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a  class="logo"><span>Multiva<span> </span></span><i class="zmdi zmdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title"><span > Banco </span><span> 5200</span></h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Notification -->
                                
                                <!-- End Notification bar -->
                            </li>
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img  src="assets/images/users/m2.jpg" alt="user-img" title="" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status online"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a href="#"><?php $useri="lzarate@pitsistemas.com"; echo $useri;?></a> </h5>
                        
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navegador</li>

                           <!-- <li>
                                <a href="index.html" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li>
                                <a href="typography.html" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Typography </span> </a>
                            </li>-->

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Reportes </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="multiser.php">Multiservicios</a></li>
                                    <li><a href="casatable.php">Casa</a></li>
                                    <li><a href="bancotable.php">Banco</a></li>
                                    <li><a href="cecos1.php">CECOS</a></li>
                                    <li><a href="acumulado5500.php">Acumulado Casa</a></li>
                                    <li><a href="acumulado5200.php">Acumulado Banco</a></li>
                                    <li><a href="5103010600.php">5103010600</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-text"></i><span></span><span> Graficos </span><span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                 <!--   <li><a href="form-elements.html">Acumulado Casa</a></li>
                                    <li><a href="form-advanced.html">Acumulado Banco</a></li>
                                    <li><a href="form-validation.html">Mensual Casa</a></li>
                                    <li><a href="form-wizard.html">Mensual Banco</a></li>
                                    <li><a href="form-fileupload.html">Casa-Banco-CECOS</a></li>
                                    <li><a href="form-wysiwig.html">5103010600</a></li>-->
                                    <li><a href="#">Acumulado Casa</a></li>
                                    <li><a href="#">Acumulado Banco</a></li>
                                    <li><a href="#">Mensual Casa</a></li>
                                    <li><a href="#">Mensual Banco</a></li>
                                    <li><a href="#">Casa-Banco-CECOS</a></li>
                                    <li><a href="#">5103010600</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Tablas </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <!--<li><a href="tables-basic.html">Cuentas</a></li>-->
                                    <li><a href="#">Cuentas</a></li>
                                </ul>
                            </li>

                           

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
<?php //echo 'Hello, World';
//php -S localhost:8000 -t WEBAPP
//echo "BIGQUERY PROCESS";

require_once __DIR__ . '/../vendor/autoload.php';
//use GuzzleHttp\HTTP\Client;
use Google\Cloud\BigQuery\BigQueryClient;
//echo "BIGQUERY PROCESS1";

$projectId='informe-211921';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);
//echo "BIGQUERY PROCESS2";
$query = <<<ENDSQL
select * from `multiva.SALDO_MESUAL` where SOCIEDAD="5200" AND CUENTA in ("6410010102","6410010103","6410010122","6410010104","6492010200","6492010100","6492020102","6410010111","6410010112","6410010125","6410010113","6410010115","6410010107","6410010108","6401010119","6401010118","6492010300","6410010129","6491350400","6491350100","6491350200","6491350300","6491410100","6491250000","6491260000","6491250100","6491410000","6491070000","6491090000","6491010000","6409000000","6491310000","6403020100","6403010100","6403020200","6491240000","6491240100","6491300000","6491290000","6491010000","6491420101","6491050000","6404010000","6404020000","6491380100","6491380000","6406030000","6408020100","6408010000","6408060000","6408060100","6491170000","6406020000","6491130000","6491200000","6410010128","6491360200","6491360100","6491360500","6491360200","6402020000","6402010000","6410010101","6491330000","6491390000","6491140000","6408020000","6491200000","6491400000","6408080000","6491020000","6491370000","6490010000","6490020000","6490030000","6490040000");
ENDSQL;
//echo "BIGQUERY PROCESS3";

$queryJobConfig = $bigQuery->query($query);
$queryResults = $bigQuery->runQuery($queryJobConfig);

//echo "BIGQUERY PROCESS4";

if ($queryResults->isComplete()) {
    $i=0;
    $rows = $queryResults->rows();
    foreach($rows as $row){
        $arr[$row['CUENTA']]=$row;
    //return $queryResults;
    //print_r($arr);
    //print_r($arr[64100102]['FEBRERO']);
    }

}else {
    throw new Exception('The query failed to complete');
}

ini_set('date.timezone','America/Mexico_City');
    $hora_actual=date("H:i:s");
    ini_set('date.timezone','America/Mexico_City');
    $fecha_actual=date("d/m/Y");


    function fecha($fecha_actual){
            $fec=explode("/", $fecha_actual);
                
        switch ($fec[1]) {
            case '01':
                $mes="ENERO";
                break;
            case '02':
                $mes="FEBRERO";
                break;
            case '03':
                $mes="MARZO";
                break;
            case '04':
                $mes="ABRIL";
                break;
            case '05':
                $mes="MAYO";
                break;
            case '06':
                $mes="JUNIO";
                break;
            case '07':
                $mes="JULIO";
                break;
            case '08':
                $mes="AGOSTO";
                break;
            case '09':
                $mes="SEPTIEMBRE";
                break;
            case '10':
                $mes="OCTUBRE";
                break;
            case '11':
                $mes="NOVIEMBRE";
                break;
            case '12':
                $mes="DICIEMBRE";
                break;

            default:
                # code...
                break;
        }
        echo $fec[0]." DE ".$mes." DE ".$fec[2];
    }

?>
<body>
    
    <center>
        </br>
        <h1>
            BANCO MULTIVA S.A. INSTITUCIÓN DE BANCA MÚLTIPLE GRUPO FINANCIERO MULTIVA
        </h1>
        <h1>
            ESTADO COMPARATIVO DE GASTOS GENERALES POR EL PERIODO COMPRENDIDO DEL 1° DE ENERO AL <?php fecha($fecha_actual); ?>
        </h1>
        <h1>
            (MILES DE PESOS)
        </h1></br></br>
            
        <div class="table-responsive">
            
        
        <table BORDER=0 class="table-hover table-fixed">
            <thead>
                <tr>
                    <td>

    </td>
                    <td>
                        
                    </td>
                    <td>
                         
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                         <p align="right"><?php 

echo $fecha_actual."&nbsp"."&nbsp"; ?></p>
                    </td>
                    <td>
                        <p align="left"><?php 

echo $hora_actual; ?></p>
                    </td>

                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________ 
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>CONCEPTO</center>
                    </td>
                    <td>
                        <CENTER>ENERO</CENTER>
                    </td>
                    <td>
                         <center>FEBRERO</center> 
                    </td>
                    <td>
                        <center>MARZO</center>
                    </td>
                    <td>
                        <center>ABRIL</center>
                    </td>
                    <td>
                        <center>MAYO</center>
                    </td>
                    <td>
                        <center>JUNIO</center>
                    </td>
                    <td>
                        <center>JULIO</center>
                    </td>
                    <td>
                       <center>AGOSTO</center>
                    </td>
                    <td>
                        <center>SEPTIEMBRE</center>
                    </td>
                    <td>
                        <center>OCTUBRE</center>
                    </td>
                    <td>
                        <center>NOVIEMBRE</center>
                    </td>
                    <td>
                        <center>DICIEMBRE</center>
                    </td>
                </tr>
                <tr>
                    <td>
                        _________________________________________________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________ 
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                       </BR> I. FACTOR HUMANO</BR>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                       </br> <div class="dropdown">
 SUELDOS A FUNCIONARIOS Y EMPLEADOS
  <div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/rdiV" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                    </td>
                    <td>
                        <CENTER>

    <div class="dropdown">
  <?php $Qrs=$arr['6410010102']['FEBRERO'];
                            //$n=number_format($número);
                            $n=number_format($Qrs, 0, '.', ',');
                            ?></br><?php echo($n);
                        ?> 
  <div class="dropdown-content">
    <a><?php $consulta= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010102" and BUDAT like "201801%";
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila = $queryResults->rows();
    foreach ($fila as $fila) {
        
       printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL, $fila['BKTXT'], $fila['DMBTR'],$fila['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
}  ?> </a>
    
  </div>
</div>




                    </CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
  <?php  $Qrs1=$arr['6410010102']['MARZO']; 
                             $n1=number_format($Qrs1, 0, '.', ',');
                           ?></br><?php  echo($n1);
                         ?>
                           <div class="dropdown-content">
    <a><?php  $consulta1=<<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010102" and BUDAT like "201802%"
LIMIT 2;
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta1);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila1 = $queryResults->rows();
    foreach ($fila1 as $fila1) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL, $fila1['BKTXT'], $fila1['DMBTR'],$fila1['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
} ?></a>
  </div>
</div>

                          </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   <?php  $Qrs2=$arr['6410010102']['ABRIL'];
                            $n2=number_format($Qrs2, 0, '.', ',');
                            ?></br><?php echo($n2);
                         ?> </a>
                           <div class="dropdown-content">
    
    <a><?php $consulta2= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010102" and BUDAT like "201802%";
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta2);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila2 = $queryResults->rows();
    foreach ($fila2 as $fila2) {
        
        printf('DESCRIPCION: %s MONTO: %s PSWSL: %s ' . PHP_EOL, $fila2['BKTXT'], $fila2['DMBTR'],$fila2['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
}
?></a>
  
  </div>
</div>

                    </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
    <?php  $Qrs3=$arr['6410010102']['MAYO']; 
                            $n3=number_format($Qrs3, 0, '.', ',');
                           ?></br><?php  echo($n3);
                        ?></a>
  <div class="dropdown-content">
   
    <a><?php $consulta3= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010102" and BUDAT like "201804%"
LIMIT 2;
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta3);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila3 = $queryResults->rows();
    foreach ($fila3 as $fila3) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL, $fila3['BKTXT'], $fila3['DMBTR'],$fila3['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
}
?></a>
  
  </div>
</div>


                    </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
    <?php  $Qrs4=$arr['6410010102']['JUNIO'];
                            $n4=number_format($Qrs4, 0, '.', ',');
                           ?></br><?php  echo($n4);
                         ?></a>
  <div class="dropdown-content">
   
    <a><?php $consulta4= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010102" and BUDAT like "201805%"
LIMIT 2;
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta4);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila4 = $queryResults->rows();
    foreach ($fila4 as $fila4) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL,  $fila4['BKTXT'], $fila4['DMBTR'],$fila4['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
}
 ?></a>
  
  </div>
</div>


                     </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   <?php  $Qrs5=$arr['6410010102']['JULIO'];
                            $n5=number_format($Qrs5, 0, '.', ',');
                           ?></br><?php  echo($n5);
                        ?></a>
  <div class="dropdown-content">
   
   <a><?php $consulta5= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010102" and BUDAT like "201806%";
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta5);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila5 = $queryResults->rows();
    foreach ($fila5 as $fila5) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL, $fila5['BKTXT'], $fila5['DMBTR'],$fila5['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
} ?></a>
  
  </div>
</div>


                    </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   <?php $Qrs6=$arr['6410010102']['AGOSTO']; 
                            $n6=number_format($Qrs6, 0, '.', ',');
                           ?></br><?php  echo($n6);
                        ?> </a>
  <div class="dropdown-content">
    
    <a><?php   ?></a>
  
  </div>
</div>


                    </center>
                    </td>
                    

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
    AGUINALDO Y OTRAS GRATIFICACIONES</a>
  <div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/3pYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>
                    </td>
                    <td>
                        <CENTER><div class="dropdown">
   <?php 


$Qrs7=$arr['6410010103']['FEBRERO']; 
                            $n7=number_format($Qrs7, 0, '.', ',');
                            echo($n7);?></a>
  <div class="dropdown-content">
    
     <a><?php $consulta6= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010103" and BUDAT like "201801%"
LIMIT 2;
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta6);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila6 = $queryResults->rows();
    foreach ($fila6 as $fila6) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL,  $fila6['BKTXT'], $fila6['DMBTR'],$fila6['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
}

 ?></a>
  </div>
</div>
                         </CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   <?php  $Qrs8=$arr['6410010103']['MARZO'];

                            $n8=number_format($Qrs8, 0, '.', ',');
                            echo($n8);
                          ?> </a>

<div class="dropdown-content">
    
    <a><?php  $consulta8= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010103" and BUDAT like "201802%"
LIMIT 2;
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta8);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila8 = $queryResults->rows();
    foreach ($fila8 as $fila8) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL, $fila8['BKTXT'], $fila8['DMBTR'],$fila8['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
}
?></a>
  </div>
</div>

                      </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   <?php  $Qrs9=$arr['6410010103']['ABRIL']; 
                            $n9=number_format($Qrs9, 0, '.', ',');
                            echo($n9);

                        ?> </a>
<div class="dropdown-content">
    
    <a><?php $consulta9= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010103" and BUDAT like "201803%"
LIMIT 2;
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta9);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila9 = $queryResults->rows();
    foreach ($fila9 as $fila9) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL,  $fila9['BKTXT'], $fila9['DMBTR'],$fila9['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
}
 ?></a>
  </div>
</div>


                    </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   <?php  $Qrs10=$arr['6410010103']['MAYO'];
                            $n10=number_format($Qrs10, 0, '.', ',');
                            echo($n10);
                         ?></a>

<div class="dropdown-content">
   
    <a><?php $consulta10= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010103" and BUDAT like "201804%"
LIMIT 2;
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta10);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila10 = $queryResults->rows();
    foreach ($fila10 as $fila10) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL,  $fila10['BKTXT'], $fila10['DMBTR'],$fila10['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
}
  ?></a>
  </div>
</div>

                     </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
    <?php  $Qrs11=$arr['6410010103']['JUNIO']; 
                            $n11=number_format($Qrs11, 0, '.', ',');
                            echo($n11);
                        ?></a>

<div class="dropdown-content">
   
    <a><?php $consulta11= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010103" and BUDAT like "201805%"
LIMIT 2;
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta11);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila11 = $queryResults->rows();
    foreach ($fila11 as $fila11) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL, $fila11['BKTXT'], $fila11['DMBTR'],$fila11['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
} ?></a>
  </div>
</div>

                    </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
    <?php  $Qrs12=$arr['6410010103']['JULIO']; 
                            $n12=number_format($Qrs12, 0, '.', ',');
                            echo($n12);
                        ?></a>

<div class="dropdown-content">
    
    <a><?php  $consulta7= <<<ENDSQL
select BUDAT, BKTXT, DMBTR, PSWSL from `multiva.BSEG`  where BUKRS="5200" and HKONT="6410010103" and BUDAT like "201806%"
LIMIT 2;
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta7);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila7 = $queryResults->rows();
    foreach ($fila7 as $fila7) {
        
        printf('DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL,  $fila7['BKTXT'], $fila7['DMBTR'],$fila7['PSWSL']);
    }
} else {
    throw new Exception('The query failed to complete');
} ?></a>
  </div>
</div>

                    </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   <?php $Qrs13=$arr['6410010103']['AGOSTO']; 
                            $n13=number_format($Qrs13, 0, '.', ',');
                            echo($n13);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>


                    </center>
                    </td>


<tr>
                    <td>
                        <div class="dropdown">
   
GRATIFICACIONES</a><div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/k8SW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td> 
                        <CENTER><div class="dropdown">
   
<?php 
$Qrs14=$arr['6410010122']['FEBRERO']; 
                            $n14=number_format($Qrs14, 0, '.', ',');
                            echo($n14);

                        ?></a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
 </CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $Qrs15=$arr['6410010122']['MARZO'];
                            $n15=number_format($Qrs15, 0, '.', ',');
                            echo($n15);
                          ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $Qrs16=$arr['6410010122']['ABRIL']; 
                            $n=number_format($Qrs16, 0, '.', ',');
                            echo($n);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php   ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $Qrs17=$arr['6410010122']['MAYO'];
                            $n17=number_format($Qrs17, 0, '.', ',');
                            echo($n17);
                         ?></a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $Qrs18=$arr['6410010122']['JUNIO'];
                            $n18=number_format($Qrs18, 0, '.', ',');
                            echo($n18);
                         ?></a>
  <div class="dropdown-content">
   
    <a><?php ?> </a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $Qrs19=$arr['6410010122']['JULIO']; 
                            $n19=number_format($Qrs19, 0, '.', ',');
                            echo($n19);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $Qrs20=$arr['6410010122']['AGOSTO']; 
                            $n20=number_format($Qrs20, 0, '.', ',');
                            echo($n20);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>


                    

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 BONO </a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/RqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER>  <div class="dropdown">
  
 <?php
$Qrs21=$arr['6410010104']['FEBRERO']; 
                            $n21=number_format($Qrs21, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
</CENTER>
                    </td>
                    <td>
                         <center>  <div class="dropdown">
   
<?php  $Qrs22=$arr['6410010104']['MARZO']; 
                            $n22=number_format($Qrs22, 0, '.', ',');
                            echo($n22);
                         ?></a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php  $Qrs23=$arr['6410010104']['ABRIL']; 
                            $n23=number_format($Qrs23, 0, '.', ',');
                            echo($n23);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $Qrs24=$arr['6410010104']['MAYO']; 
                            $n24=number_format($Qrs24, 0, '.', ',');
                            echo($n24);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>   <div class="dropdown">
   
<?php  $Qrs25=$arr['6410010104']['JUNIO']; 
                            $n25=number_format($Qrs25, 0, '.', ',');
                            echo($n25);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>   <div class="dropdown">
   
<?php  $Qrs26=$arr['6410010104']['JULIO'];
                            $n26=number_format($Qrs26, 0, '.', ',');
                            echo($n26);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php $Qrs27=$arr['6410010104']['AGOSTO']; 
                            $n27=number_format($Qrs27, 0, '.', ',');
                            echo($n27);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>


                    

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 INDEMNIZACIÓN LEGAL AL RETIRO</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/SqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER><div class="dropdown">
  
 <?php
$Qrs28=$arr['6492010200']['FEBRERO']; 
                            $n21=number_format($Qrs28, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php ?></a>
  </div>
</div>  </CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
  
 <?php
$Qrs29=$arr['6492010200']['MARZO']; 
                            $n21=number_format($Qrs29, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>  </center> 
                    </td>
                    <td>
                        <center> <div class="dropdown">
  
 <?php
$Qrs30=$arr['6492010200']['ABRIL']; 
                            $n21=number_format($Qrs30, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div> </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
  
 <?php
$Qrs31=$arr['6492010200']['MAYO']; 
                            $n21=number_format($Qrs31, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>  </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
  
 <?php
$Qrs32=$arr['6492010200']['JUNIO']; 
                            $n21=number_format($Qrs32, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div> </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
  
 <?php
$Qrs33=$arr['6492010200']['JULIO']; 
                            $n21=number_format($Qrs33, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div> </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
  
 <?php
$Qrs34=$arr['6492010200']['AGOSTO']; 
                            $n21=number_format($Qrs34, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php ?></a>
  </div>
</div> </center>
                    </td>


                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 INDEMNIZACIONES POR DESPIDO<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/TqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                   <td>
                        <CENTER><div class="dropdown">
  
 <?php
$Qrs35=$arr['6492020102']['FEBRERO']; 
                            $n21=number_format($Qrs35, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div> </CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
  
 <?php
$Qrs36=$arr['6492020102']['MARZO']; 
                            $n21=number_format($Qrs36, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div></center> 
                    </td>
                    <td>
                        <center> <div class="dropdown">
  
 <?php
$Qrs37=$arr['6492020102']['ABRIL']; 
                            $n21=number_format($Qrs37, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php ?></a>
  </div>
</div></center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
  
 <?php
$Qrs38=$arr['6492020102']['MAYO']; 
                            $n21=number_format($Qrs38, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php   ?></a>
  </div>
</div><center>
                    </td>
                    <td>
                        <center><div class="dropdown">
  
 <?php
    $Qrs39=$arr['6492020102']['JUNIO']; 
                            $n21=number_format($Qrs39, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div> </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
  
 <?php
$Qrs40=$arr['6492020102']['JULIO']; 
                            $n21=number_format($Qrs40, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php   ?></a>
  </div>
</div> </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
  
 <?php
$Qrs41=$arr['6492020102']['AGOSTO']; 
                            $n21=number_format($Qrs41, 0, '.', ',');
                            echo($n21);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div> </center>
                    </td>


                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="dropdown">
   
CUOTAS AL I.M.S.S.</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/WqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER><div class="dropdown">
   
<?php  $Qrs42=$arr['6410010111']['FEBRERO']; 
                            $n42=number_format($Qrs42, 0, '.', ',');
                            echo($n42);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php   ?></a>
  </div>
</div>
</CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $Qrs43=$arr['6410010111']['MARZO'];
                            $n43=number_format($Qrs43, 0, '.', ',');
                            echo($n43);
                          ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $Qrs44=$arr['6410010111']['ABRIL']; 
                            $n44=number_format($Qrs44, 0, '.', ',');
                            echo($n44);
                        ?> </a>
<div class="dropdown-content">
  
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $Qrs45=$arr['6410010111']['MAYO']; 
                            $n45=number_format($Qrs45, 0, '.', ',');
                            echo($n45);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $Qrs46=$arr['6410010111']['JUNIO']; 
                            $n46=number_format($Qrs46, 0, '.', ',');
                            echo($n46);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $Qrs47=$arr['6410010111']['JULIO']; 
                            $n47=number_format($Qrs47, 0, '.', ',');
                            echo($n47);
                        ?></a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $Qrs48=$arr['6410010111']['AGOSTO']; 
                            $n48=number_format($Qrs48, 0, '.', ',');
                            echo($n48);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 APORTACIPONES AL INFONAVIT</a>
<div class="dropdown-content">
    <a><iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/XqYW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER><div class="dropdown">
   
<?php  $Qrs49=$arr['6410010112']['FEBRERO'];
                            $n49=number_format($Qrs49, 0, '.', ',');
                            echo($n49);
                         ?> </a>
<div class="dropdown-content">
   
    <a><?php      ?></a>
  </div>
</div>
</CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $Qrs50=$arr['6410010112']['MARZO']; 
                            $n50=number_format($Qrs50, 0, '.', ',');
                            echo($n50);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $Qrs51=$arr['6410010112']['ABRIL']; 
                            $n51=number_format($Qrs51, 0, '.', ',');
                            echo($n51);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $Qrs52=$arr['6410010112']['MAYO'];
                            $n52=number_format($Qrs52, 0, '.', ',');
                            echo($n52);
                        ?></a>
<div class="dropdown-content">
   
    <a><?php   ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php $Qrs53=$arr['6410010112']['JUNIO']; 
                            $n53=number_format($Qrs53, 0, '.', ',');
                            echo($n53);
                        ?></a>
  <div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $Qrs54=$arr['6410010112']['JULIO']; 
                            $n54=number_format($Qrs54, 0, '.', ',');
                            echo($n54);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $Qrs55=$arr['6410010112']['AGOSTO']; 
                            $n55=number_format($Qrs55, 0, '.', ',');
                            echo($n55);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 2% SOBRE NOMINA E IMP. ESTATALES</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/YqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER><div class="dropdown">
   
<?php  $Qrs56=$arr['6410010125']['FEBRERO']; 
                            $n56=number_format($Qrs56, 0, '.', ',');
                            echo($n56);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php   ?></a>
  </div>
</div>
</CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $Qrs57=$arr['6410010125']['MARZO']; 
                            $n57=number_format($Qrs57, 0, '.', ',');
                            echo($n57);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $Qrs58=$arr['6410010125']['ABRIL']; 
                            $n58=number_format($Qrs58, 0, '.', ',');
                            echo($n58);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php        ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $Qrs59=$arr['6410010125']['MAYO']; 
                            $n59=number_format($Qrs59, 0, '.', ',');
                            echo($n59);
                        ?></a>
<div class="dropdown-content">
   
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $Qrs60=$arr['6410010125']['JUNIO']; 
                            $n60=number_format($Qrs60, 0, '.', ',');
                            echo($n60);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $Qrs61=$arr['6410010125']['JULIO']; 
                            $n61=number_format($Qrs61, 0, '.', ',');
                            echo($n61);
                        ?>
</a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $Qrs62=$arr['6410010125']['AGOSTO']; 
                            $n62=number_format($Qrs62, 0, '.', ',');
                            echo($n62);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
 </center>
                    </td>


                                     
                    </td>

                </tr>
                <tr>
                    <td>
                        2% FONDO DE PENSIONES Y JUBILACIONES
                    </td>
                    <td>
                        <CENTER>0 </CENTER>
                    </td>
                    <td>
                         <center> 0</center> 
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="dropdown">
   
PRIMA VACACIONAL</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/ZqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER>  <div class="dropdown">
   


<?php  $Qrs63=$arr['6410010113']['FEBRERO']; 
                            $n63=number_format($Qrs63, 0, '.', ',');
                            echo($n63);
                        ?></a>
<div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
 </CENTER>
                    </td>
                    <td>
                         <center>  <div class="dropdown">
   
<?php  $Qrs64=$arr['6410010113']['MARZO']; 
                            $n64=number_format($Qrs64, 0, '.', ',');
                            echo($n64);
                         ?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php  $Qrs65=$arr['6410010113']['ABRIL']; 
                            $n65=number_format($Qrs65, 0, '.', ',');
                            echo($n65);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $Qrs66=$arr['6410010113']['MAYO']; 
                            $n66=number_format($Qrs66, 0, '.', ',');
                            echo($n66);
                        ?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>   <div class="dropdown">
   
<?php  $Qrs67=$arr['6410010113']['JUNIO']; 
                            $n67=number_format($Qrs67, 0, '.', ',');
                            echo($n67);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $Qrs68=$arr['6410010113']['JULIO']; 
                            $n68=number_format($Qrs68, 0, '.', ',');
                            echo($n68);
                        ?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php $Qrs69=$arr['6410010113']['AGOSTO']; 
                            $n69=number_format($Qrs69, 0, '.', ',');
                            echo($n69);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?PHP ?></a>
  </div>
</div>
</center>
                    </td>


                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        FONDO DE AHORRO
                    </td>
                    <td>
                        <CENTER> 0</CENTER>
                    </td>
                    <td>
                         <center>0</center> 
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 VALES DE DESPENSA</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/bqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER>  <div class="dropdown">
   
<?php  $Qrs70=$arr['6410010115']['FEBRERO']; 
                            $n70=number_format($Qrs70, 0, '.', ',');
                            echo($n70);
                        ?></a>
<div class="dropdown-content">
   
    <a><?PHP  ?></a>
  </div>
</div>
 </CENTER>
                    </td>
                    <td>
                         <center>  <div class="dropdown">
   
<?php  $Qrs71=$arr['6410010115']['MARZO']; 
                            $n71=number_format($Qrs71, 0, '.', ',');
                            echo($n71);
                         ?> </a>
<div class="dropdown-content">
   
    <a><?PHP  ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php  $Qrs72=$arr['6410010115']['ABRIL']; 
                            $n72=number_format($Qrs72, 0, '.', ',');
                            echo($n72);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP   ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>   <div class="dropdown">
   
<?php  $Qrs73=$arr['6410010115']['MAYO']; 
                            $n73=number_format($Qrs73, 0, '.', ',');
                            echo($n73);
                        ?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $Qrs74=$arr['6410010115']['JUNIO']; 
                            $n74=number_format($Qrs74, 0, '.', ',');
                            echo($n74);
                        ?></a>
  <div class="dropdown-content">
   
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $Qrs75=$arr['6410010115']['JULIO']; $n75=number_format($Qrs75, 0, '.', ',');
                            echo($n75);?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php $Qrs76=$arr['6410010115']['AGOSTO'];$n76=number_format($Qrs76, 0, '.', ',');
                            echo($n76); ?></a>
<div class="dropdown-content">
   
    <a><?PHP ?></a>
  </div>
</div>
 </center>
                    </td>


                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    
                       <div class="dropdown">
   
 SEG.DE VIDA</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/cqYW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER><div class="dropdown">
   
<?php $Qrs77=$arr['6410010107']['FEBRERO'];$n77=number_format($Qrs77, 0, '.', ',');
                            echo($n77); ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $Qrs78=$arr['6410010107']['MARZO']; $n78=number_format($Qrs78, 0, '.', ',');
                            echo($n78);?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $Qrs79=$arr['6410010107']['ABRIL']; $n79=number_format($Qrs79, 0, '.', ',');
                            echo($n79);?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php $Qrs80=$arr['6410010107']['MAYO']; $n80=number_format($Qrs80, 0, '.', ',');
                            echo($n80);?></a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $Qrs81=$arr['6410010107']['JUNIO']; $n81=number_format($Qrs81, 0, '.', ',');
                            echo($n81);?></a>
  <div class="dropdown-content">
   
    <a><?PHP ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $Qrs82=$arr['6410010107']['JULIO'];$n82=number_format($Qrs82, 0, '.', ',');
                            echo($n82); ?></a>
<div class="dropdown-content">
    
    <a><?php   ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $Qrs83=$arr['6410010107']['AGOSTO']; $n83=number_format($Qrs83, 0, '.', ',');
                            echo($n83);?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
 </center>
                    </td>


                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    
                    
                      <div class="dropdown">
   
  SEG. GTOS. MÉDICOS MAYORES</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/eqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER><div class="dropdown">
   
<?php  $Qrs84=$arr['6410010108']['FEBRERO'];$n84=number_format($Qrs84, 0, '.', ',');
                            echo($n84); ?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
 </CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $Qrs85=$arr['6410010108']['MARZO'];$n85=number_format($Qrs85, 0, '.', ',');
                            echo($n85); ?> </a>
<div class="dropdown-content">
    
    <a><?PHP   ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $Qrs86=$arr['6410010108']['ABRIL'];$n86=number_format($Qrs86, 0, '.', ',');
                            echo($n86); ?></a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $Qrs87=$arr['6410010108']['MAYO'];$n87=number_format($Qrs87, 0, '.', ',');
                            echo($n87); ?></a>
<div class="dropdown-content">
    <a><?PHP ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $Qrs88=$arr['6410010108']['JUNIO'];$n88=number_format($Qrs88, 0, '.', ',');
                            echo($n88); ?></a>
  <div class="dropdown-content">
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $Qrs89=$arr['6410010108']['JULIO'];
                            $n89=number_format($Qrs89, 0, '.', ',');
                            echo($n89);
                         ?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $Qrs90=$arr['6410010108']['AGOSTO'];$n90=number_format($Qrs90, 0, '.', ',');
                            echo($n90); ?> </a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div>
</center>
                    </td>


                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        VALES DE GASOLINA
                    </td>
                    <td>
                        <CENTER> 0</CENTER>
                    </td>
                    <td>
                         <center>0 </center> 
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 UNIFORMES</a>
<div class="dropdown-content">
    <a></a>
  </div>
</div>

                    </td>
                   <td>
                        <CENTER> <?php  print_r($Qrs91=0); ?></CENTER>
                    </td>
                    <td>
                         <center><?php  print_r($Qrs92=0); ?> </center> 
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs93=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs94=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs95=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs96=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs97=0); ?></center>
                    </td>


                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 PRIMA DE ANTIGUEDAD</a>
<div class="dropdown-content">
    <a> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER> <?php  print_r($Qrs98=0); ?></CENTER>
                    </td>
                    <td>
                         <center><?php  print_r($Qrs99=0); ?> </center> 
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs100=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs101=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs102=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs103=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs104=0); ?></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        DIFERERIMIENTO GASTOS POR OTORGAMIENTO
                    </td>
                    <td>
                        <CENTER> 0</CENTER>
                    </td>
                    <td>
                         <center>0 </center> 
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center>0 </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        INICIAL DEL CREDITO
                    </td>
                    <td>
                        <CENTER> 0</CENTER>
                    </td>
                    <td>
                         <center> 0</center> 
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES1=$Qrs+$Qrs7+$Qrs14+$Qrs21+$Qrs28+$Qrs35+$Qrs42+$Qrs94+$Qrs56+$Qrs63+$Qrs70+$Qrs77+$Qrs84+$Qrs91+$Qrs98;

                        $as=number_format($RES1, 0, '.', ',');
                            echo($as);?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES2=$Qrs1+$Qrs8+$Qrs15+$Qrs22+$Qrs29+$Qrs36+$Qrs43+$Qrs50+$Qrs57+$Qrs64+$Qrs71+$Qrs78+$Qrs85+$Qrs92+$Qrs99;
                         $as1=number_format($RES2, 0, '.', ',');
                            echo($as1);?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES3=$Qrs2+$Qrs9+$Qrs16+$Qrs23+$Qrs30+$Qrs37+$Qrs44+$Qrs51+$Qrs58+$Qrs65+$Qrs72+$Qrs79+$Qrs86+$Qrs93+$Qrs100;
                        $as2=number_format($RES3, 0, '.', ',');
                            echo($as2);?></center>
                    </td>
                    <td>
                        <center><?php $RES4=$Qrs3+$Qrs10+$Qrs17+$Qrs24+$Qrs31+$Qrs38+$Qrs45+$Qrs52+$Qrs59+$Qrs66+$Qrs73+$Qrs80+$Qrs87+$Qrs94+$Qrs101;
                        $as3=number_format($RES4, 0, '.', ',');
                            echo($as3);?> </center>
                    </td>
                    <td>
                        <center> <?php $RES5=$Qrs4+$Qrs11+$Qrs18+$Qrs25+$Qrs32+$Qrs39+$Qrs46+$Qrs53+$Qrs60+$Qrs67+$Qrs74+$Qrs81+$Qrs88+$Qrs95+$Qrs102;
                        $as4=number_format($RES5, 0, '.', ',');
                            echo($as4);?></center>
                    </td>
                    <td>
                        <center><?php $RES6=$Qrs5+$Qrs12+$Qrs19+$Qrs26+$Qrs33+$Qrs40+$Qrs47+$Qrs54+$Qrs61+$Qrs68+$Qrs75+$Qrs82+$Qrs89+$Qrs96+$Qrs103;
                        $as5=number_format($RES6, 0, '.', ',');
                            echo($as5);?> </center>
                    </td>
                    <td>
                        <center> <?php $RES7=$Qrs6+$Qrs13+$Qrs20+$Qrs27+$Qrs34+$Qrs41+$Qrs48+$Qrs55+$Qrs62+$Qrs69+$Qrs76+$Qrs83+$Qrs90+$Qrs97+$Qrs104;
                        $as6=number_format($RES7, 0, '.', ',');
                            echo($as6);?></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center></BR></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        GASTOS VARIABLES
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    
                    
                        </BR><div class="dropdown">
   
GASTOS DE VIAJE</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/iqYW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER>  <div class="dropdown">
   
<?php  $v1=$arr['6491350400']['FEBRERO']+$arr['6491350100']['FEBRERO']+$arr['6491350200']['FEBRERO']+$arr['6491350300']['FEBRERO']; $n91=number_format($v1, 0, '.', ',');
                            echo($n91);?></a>
<div class="dropdown-content">
   
    <a><?PHP  ?></a>
  </div>
</div>
 </CENTER>
                    </td>
                    <td>
                         <center>  <div class="dropdown">
   
<?php  $v2=$arr['6491350400']['MARZO']+$arr['6491350100']['MARZO']+$arr['6491350200']['MARZO']+$arr['6491350300']['MARZO'];$n92=number_format($v2, 0, '.', ',');
                            echo($n92); ?></a>
<div class="dropdown-content">
   
    <a><?PHP  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php  $v3=$arr['6491350400']['ABRIL']+$arr['6491350100']['ABRIL']+$arr['6491350200']['ABRIL']+$arr['6491350300']['ABRIL'];$n93=number_format($v3, 0, '.', ',');
                            echo($n93); ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $v4=$arr['6491350400']['MAYO']+$arr['6491350100']['MAYO']+$arr['6491350200']['MAYO']+$arr['6491350300']['MAYO']; $n94=number_format($v4, 0, '.', ',');
                            echo($n94);?></a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $v5=$arr['6491350400']['JUNIO']+$arr['6491350100']['JUNIO']+$arr['6491350200']['JUNIO']+$arr['6491350300']['JUNIO'];$n95=number_format($v5, 0, '.', ',');
                            echo($n95); ?></a>
  <div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $v6=$arr['6491350400']['JULIO']+$arr['6491350100']['JULIO']+$arr['6491350200']['JULIO']+$arr['6491350300']['JULIO'];$n96=number_format($v6, 0, '.', ',');
                            echo($n96); ?></a>
<div class="dropdown-content">
    
    <a><?PHP   ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php $v7=$arr['6491350400']['AGOSTO']+$arr['6491350100']['AGOSTO']+$arr['6491350200']['AGOSTO']+$arr['6491350300']['AGOSTO'];$n97=number_format($v7, 0, '.', ',');
                            echo($n97); ?></a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div>
 </center>
                    </td>


                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="dropdown">
   
DIVERSAS PRESTACIONES</a>
<div class="dropdown-content">
    <a>  </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER> <?php  print_r($v8=0); ?></CENTER>
                    </td>
                    <td>
                         <center><?php  print_r($v9=0); ?> </center> 
                    </td>
                    <td>
                        <center> <?php  print_r($v10=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($v11=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($v12=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($v13=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($v14=0); ?></center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        OTROS
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES8=$v1+$v8;
                            $as7=number_format($RES8, 0, '.', ',');
                            echo($as7);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES9=$v2+$v9; $as8=number_format($RES9, 0, '.', ',');
                            echo($as8);?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES10=$v3+$v10;$as9=number_format($RES10, 0, '.', ',');
                            echo($as9);?></center>
                    </td>
                    <td>
                        <center><?php $RES11=$v4+$v11;$as10=number_format($RES11, 0, '.', ',');
                            echo($as10);?> </center>
                    </td>
                    <td>
                        <center> <?php $RES12=$v5+$v12;$as11=number_format($RES12, 0, '.', ',');
                            echo($as11);?></center>
                    </td>
                    <td>
                        <center><?php $RES13=$v6+$v13;$as12=number_format($RES13, 0, '.', ',');
                            echo($as12);?> </center>
                    </td>
                    <td>
                        <center> <?php $RES14=$v7+$v14;$as13=number_format($RES14, 0, '.', ',');
                            echo($as13);?></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>TOTAL FACTOR HUMANO</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES15=$RES1+$RES8;
                            $as14=number_format($RES15, 0, '.', ',');
                            echo($as14);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES16=$RES2+$RES9;
                            $as15=number_format($RES16, 0, '.', ',');
                            echo($as15);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES17=$RES3+$RES10;
                            $as16=number_format($RES16, 0, '.', ',');
                            echo($as16);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES18=$RES4+$RES11;
                            $as17=number_format($RES18, 0, '.', ',');
                            echo($as17);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES19=$RES5+$RES12;
                            $as18=number_format($RES19, 0, '.', ',');
                            echo($as18);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES20=$RES6+$RES13;
                            $as19=number_format($RES20, 0, '.', ',');
                            echo($as19);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $RES21=$RES7+$RES14;
                            $as20=number_format($RES21, 0, '.', ',');
                            echo($as20);
                        ?>  </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>


       
                <tr>
                    <td>
                       </BR> II. OTROS GASTOS</BR>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                       </br><Center>INSTALACIONES</Center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    
                    
                        <div class="dropdown">
   
CONSERVACIÓN Y REPARACIÓN DE EQUIPO</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/jqYW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER><div class="dropdown">
   
<?php  $c1=$arr['6491410100']['FEBRERO']+$arr['6491250000']['FEBRERO']+$arr['6491260000']['FEBRERO']+$arr['6491250100']['FEBRERO']+$arr['6491410000']['FEBRERO'];
                            $n98=number_format($c1, 0, '.', ',');
                            echo($n98);
                         ?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
 </CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $c2=$arr['6491410100']['MARZO']+$arr['6491250000']['MARZO']+$arr['6491260000']['MARZO']+$arr['6491250100']['MARZO']+$arr['6491410000']['MARZO'];;
                            $n99=number_format($c2, 0, '.', ',');
                            echo($n99);
                          ?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $c3=$arr['6491410100']['ABRIL']+$arr['6491250000']['ABRIL']+$arr['6491260000']['ABRIL']+$arr['6491250100']['ABRIL']+$arr['6491410000']['ABRIL'];
                            $n100=number_format($c3, 0, '.', ',');
                            echo($n100);
                        ?></a>
<div class="dropdown-content">
   
    <a><?PHP  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $c4=$arr['6491410100']['MAYO']+$arr['6491250000']['MAYO']+$arr['6491260000']['MAYO']+$arr['6491250100']['MAYO']+$arr['6491410000']['MAYO'];
                            $n101=number_format($c4, 0, '.', ',');
                            echo($n101);
                         ?></a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $c5=$arr['6491410100']['JUNIO']+$arr['6491250000']['JUNIO']+$arr['6491260000']['JUNIO']+$arr['6491250100']['JUNIO']+$arr['6491410000']['JUNIO'];
                            $n102=number_format($c5, 0, '.', ',');
                            echo($n102);
                         ?></a>
  <div class="dropdown-content">
   
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $c6=$arr['6491410100']['JULIO']+$arr['6491250000']['JULIO']+$arr['6491260000']['JULIO']+$arr['6491250100']['JULIO']+$arr['6491410000']['JULIO']; 
                            $n103=number_format($c6, 0, '.', ',');
                            echo($n103);
                        ?></a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $c7=$arr['6491410100']['AGOSTO']+$arr['6491250000']['AGOSTO']+$arr['6491260000']['AGOSTO']+$arr['6491250100']['AGOSTO']+$arr['6491410000']['AGOSTO'];
                            $n104=number_format($c7, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div>
</center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        ÚTILES Y GASTOS DE ASEO
                    </td>
                    <td>
                        <CENTER>0 </CENTER>
                    </td>
                    <td>
                         <center>0 </center> 
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center>0 </center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td><div class="dropdown">
   
                    SEGUROS Y FIANZAS
                    <div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/lqYW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                    </td>
                    <td>
                        <CENTER><div class="dropdown"> 
<?php $acuenta1=$arr['6491070000']['FEBRERO']; 
                            $n104=number_format($acuenta1, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div> </CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown"> 
<?php $acuenta2=$arr['6491070000']['MARZO']; 
                            $n104=number_format($acuenta2, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div> </center> 
                    </td>
                    <td>
                        <center> <div class="dropdown"> 
<?php $acuenta3=$arr['6491070000']['ABRIL']; 
                            $n104=number_format($acuenta3, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div></center>
                    </td>
                    <td>
                        <center><div class="dropdown"> 
<?php $acuenta4=$arr['6491070000']['MAYO']; 
                            $n104=number_format($acuenta4, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div> </center>
                    </td>
                    <td>
                        <center><div class="dropdown">  
<?php $acuenta5=$arr['6491070000']['JUNIO']; 
                            $n104=number_format($acuenta5, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div></center>
                    </td>
                    <td>
                        <center> <div class="dropdown"> 
<?php $acuenta6=$arr['6491070000']['JULIO']; 
                            $n104=number_format($acuenta6, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div></center>
                    </td>
                    <td>
                        <center> <div class="dropdown"> 
<?php $acuenta7=$arr['6491070000']['AGOSTO']; 
                            $n104=number_format($acuenta7, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    
                    <div class="dropdown">
   
                    LUZ Y AGUA
                    <div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/oqYW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                        
                    </td>
                    <td>
                        <CENTER><div class="dropdown"> 
<?php $acuenta8=$arr['6491090000']['FEBRERO']; 
                            $n104=number_format($acuenta8, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP ?></a>
  </div>
</div> </CENTER>
                    </td>
                    <td> 
                         <center><div class="dropdown"> 
<?php $acuenta9=$arr['6491090000']['MARZO']; 
                            $n104=number_format($acuenta9, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div> </center> 
                    </td>
                    <td>
                        <center> <div class="dropdown"> 
<?php $acuenta10=$arr['6491090000']['ABRIL']; 
                            $n104=number_format($acuenta10, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP   ?></a>
  </div>
</div></center>
                    </td>
                    <td>
                        <center><div class="dropdown"> 
<?php $acuenta11=$arr['6491090000']['MAYO']; 
                            $n104=number_format($acuenta11, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div> </center>
                    </td>
                    <td>
                        <center><div class="dropdown">  
<?php $acuenta12=$arr['6491090000']['JUNIO']; 
                            $n104=number_format($acuenta12, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP   ?></a>
  </div>
</div></center>
                    </td>
                    <td>
                        <center> <div class="dropdown"> 
<?php $acuenta13=$arr['6491090000']['JULIO']; 
                            $n104=number_format($acuenta13, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP    ?></a>
  </div>
</div></center>
                    </td>
                    <td>
                        <center> <div class="dropdown"> 
<?php $acuenta14=$arr['6491090000']['AGOSTO']; 
                            $n104=number_format($acuenta14, 0, '.', ',');
                            echo($n104);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?PHP  ?></a>
  </div>
</div></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                      <div class="dropdown">
   
  GASTOS EN TECNOLOGIA</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/qqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER><div class="dropdown">
   
<?php  $c8=$arr['6491010000']['FEBRERO']+$arr['6409000000']['FEBRERO']; 
                            $n105=number_format($c8, 0, '.', ',');
                            echo($n105);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $c9=$arr['6491010000']['MARZO']+$arr['6409000000']['MARZO']; $n106=number_format($c9, 0, '.', ',');
                            echo($n106);?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $c10=$arr['6491010000']['ABRIL']+$arr['6409000000']['ABRIL']; 
                            $n107=number_format($c10, 0, '.', ',');
                            echo($n107);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $c11=$arr['6491010000']['MAYO']+$arr['6409000000']['MAYO'];
                            $n108=number_format($c11, 0, '.', ',');
                            echo($n108);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $c12=$arr['6491010000']['JUNIO']+$arr['6409000000']['JUNIO'];
                            $n109=number_format($c12, 0, '.', ',');
                            echo($n109);
                        ?></a>
  <div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $c13=$arr['6491010000']['JULIO']+$arr['6409000000']['JULIO'];
                            $n110=number_format($c13, 0, '.', ',');
                            echo($n110);
                            ?></a>
<div class="dropdown-content">
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $c14=$arr['6491010000']['AGOSTO']+$arr['6409000000']['AGOSTO']; 
                            $n111=number_format($c14, 0, '.', ',');
                            echo($n111);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
 </center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                     <div class="dropdown">
   SEGURIDAD
  </a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/tqYW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>
                        
                    </td>
                   <td>
                        <CENTER><div class="dropdown">
   
<?php  $acuenta15=$arr['6491310000']['FEBRERO']; 
                            $n105=number_format($acuenta15, 0, '.', ',');
                            echo($n105);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta16=$arr['6491310000']['MARZO']; $n106=number_format($acuenta16, 0, '.', ',');
                            echo($n106);?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta17=$arr['6491310000']['ABRIL']; 
                            $n107=number_format($acuenta17, 0, '.', ',');
                            echo($n107);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta18=$arr['6491310000']['MAYO'];
                            $n108=number_format($acuenta18, 0, '.', ',');
                            echo($n108);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta19=$arr['6491310000']['JUNIO'];
                            $n109=number_format($acuenta19, 0, '.', ',');
                            echo($n109);
                        ?></a>
  <div class="dropdown-content">
   
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta20=$arr['6491310000']['JULIO'];
                            $n110=number_format($acuenta20, 0, '.', ',');
                            echo($n110);
                            ?></a>
<div class="dropdown-content">
    <a><?php   ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta21=$arr['6491310000']['AGOSTO']; 
                            $n111=number_format($acuenta21, 0, '.', ',');
                            echo($n111);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                      <div class="dropdown">
   
  RENTAS INMUEBLES</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/j1YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER>  <div class="dropdown">
   
<?php  $c15=$arr['6403020100']['FEBRERO']+$arr['6403010100']['FEBRERO']; 
                            $n112=number_format($c15, 0, '.', ',');
                            echo($n112);
                            ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
 </CENTER>
                    </td>
                    <td>
                         <center>  <div class="dropdown">
   
<?php  $c16=$arr['6403020100']['MARZO']+$arr['6403010100']['MARZO']; 
                            $n113=number_format($c16, 0, '.', ',');
                            echo($n113);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php   ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php  $c17=$arr['6403020100']['ABRIL']+$arr['6403010100']['ABRIL']; 
                            $n114=number_format($c17, 0, '.', ',');
                            echo($n114);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php   ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $c18=$arr['6403020100']['MAYO']+$arr['6403010100']['MAYO']; 
                            $n115=number_format($c18, 0, '.', ',');
                            echo($n115);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php   ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $c19=$arr['6403020100']['JUNIO']+$arr['6403010100']['JUNIO']; 
                            $n116=number_format($c19, 0, '.', ',');
                            echo($n116);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>   <div class="dropdown">
   
<?php  $c20=$arr['6403020100']['JULIO']+$arr['6403010100']['JULIO']; 
                            $n117=number_format($c20, 0, '.', ',');
                            echo($n117);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php   ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php $c21=$arr['6403020100']['AGOSTO']+$arr['6403010100']['AGOSTO']; 
                            $n118=number_format($c21, 0, '.', ',');
                            echo($n118);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    <div class="dropdown">
   RENTAS DE EQUIPOS
 </a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/l1YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>
                    
                        
                    </td>
                    <td>
                        <CENTER>  <div class="dropdown">
   
<?php  $acuenta22=$arr['6403020200']['FEBRERO']; 
                            $n112=number_format($acuenta22, 0, '.', ',');
                            echo($n112);
                            ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </CENTER>
                    </td>
                    <td>
                         <center>  <div class="dropdown">
   
<?php  $acuenta23=$arr['6403020200']['MARZO']; 
                            $n113=number_format($acuenta23, 0, '.', ',');
                            echo($n113);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php  $acuenta24=$arr['6403020200']['ABRIL']; 
                            $n114=number_format($acuenta24, 0, '.', ',');
                            echo($n114);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $acuenta25=$arr['6403020200']['MAYO']; 
                            $n115=number_format($acuenta25, 0, '.', ',');
                            echo($n115);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
 <?php  $acuenta26=$arr['6403020200']['JUNIO']; 
                            $n116=number_format($acuenta26, 0, '.', ',');
                            echo($n116);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>   <div class="dropdown">
   
<?php  $acuenta27=$arr['6403020200']['JULIO']; 
                            $n117=number_format($acuenta27, 0, '.', ',');
                            echo($n117);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center>  <div class="dropdown">
   
<?php $acuenta28=$arr['6403020200']['AGOSTO']; 
                            $n118=number_format($acuenta28, 0, '.', ',');
                            echo($n118);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                
                <tr>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php  $RES22=$c1+$c8+$c15+$acuenta1+$acuenta8+$acuenta15+$acuenta22;
                        $as21=number_format($RES22, 0, '.', ',');
                            echo($as21);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES23=$c2+$c9+$c16+$acuenta2+$acuenta9+$acuenta16+$acuenta23;
                            $as22=number_format($RES23, 0, '.', ',');
                            echo($as22);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES24=$c3+$c10+$c17+$acuenta3+$acuenta10+$acuenta17+$acuenta24;
                        $as23=number_format($RES24, 0, '.', ',');
                            echo($as23);
                        ?></center>
                    </td>
                    <td>
                        <center><?php  $RES25=$c4+$c11+$c18+$acuenta4+$acuenta11+$acuenta18+$acuenta25;
                            $as24=number_format($RES25, 0, '.', ',');
                            echo($as24);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES26=$c5+$c12+$c19+$acuenta5+$acuenta12+$acuenta19+$acuenta26;
                            $as25=number_format($RES26, 0, '.', ',');
                            echo($as25);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES27=$c6+$c13+$c20+$acuenta6+$acuenta13+$acuenta20+$acuenta27;
                            $as26=number_format($RES27, 0, '.', ',');
                            echo($as26);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES28=$c7+$c14+$c21+$acuenta7+$acuenta14+$acuenta21+$acuenta28;
                            $as27=number_format($RES28, 0, '.', ',');
                            echo($as27);
                       ?></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center></BR></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        COMUNICACIONES
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        </BR><div class="dropdown">
   
TELÉFONOS</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/m1YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $r1=$arr['6491240000']['FEBRERO']; 
                            $n119=number_format($r1, 0, '.', ',');
                            echo($n119);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $r2=$arr['6491240000']['MARZO']; 
                            $n120=number_format($r2, 0, '.', ',');
                            echo($n120);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $r3=$arr['6491240000']['ABRIL']; 
                            $n121=number_format($r3, 0, '.', ',');
                            echo($n121);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $r4=$arr['6491240000']['MAYO']; 
                            $n122=number_format($r4, 0, '.', ',');
                            echo($n122);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $r5=$arr['6491240000']['JUNIO'];
                            $n123=number_format($r5, 0, '.', ',');
                            echo($n123);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $r6=$arr['6491240000']['JULIO'];
                            $n124=number_format($r6, 0, '.', ',');
                            echo($n124);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $r7=$arr['6491240000']['AGOSTO']; 
                            $n125=number_format($r7, 0, '.', ',');
                            echo($n125);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    <div class="dropdown">
   ENLACES
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/n1YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>
                        
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta29=$arr['6491240100']['FEBRERO']; 
                            $n119=number_format($acuenta29, 0, '.', ',');
                            echo($n119);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta30=$arr['6491240100']['MARZO']; 
                            $n120=number_format($acuenta30, 0, '.', ',');
                            echo($n120);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta31=$arr['6491240100']['ABRIL']; 
                            $n121=number_format($acuenta31, 0, '.', ',');
                            echo($n121);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta32=$arr['6491240100']['MAYO']; 
                            $n122=number_format($acuenta32, 0, '.', ',');
                            echo($n122);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta33=$arr['6491240100']['JUNIO'];
                            $n123=number_format($acuenta33, 0, '.', ',');
                            echo($n123);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta34=$arr['6491240100']['JULIO'];
                            $n124=number_format($acuenta34, 0, '.', ',');
                            echo($n124);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta35=$arr['6491240100']['AGOSTO']; 
                            $n125=number_format($acuenta35, 0, '.', ',');
                            echo($n125);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    <div class="dropdown">
   CORREOS Y VALIJAS
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/p1YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                        
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta36=$arr['6491300000']['FEBRERO']+$arr['6491290000']['FEBRERO']; 
                            $n119=number_format($acuenta36, 0, '.', ',');
                            echo($n119);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta37=$arr['6491300000']['MARZO']+$arr['6491290000']['MARZO']; 
                            $n120=number_format($acuenta37, 0, '.', ',');
                            echo($n120);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta38=$arr['6491300000']['ABRIL']+$arr['6491290000']['ABRIL']; 
                            $n121=number_format($acuenta38, 0, '.', ',');
                            echo($n121);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta39=$arr['6491300000']['MAYO']+$arr['6491290000']['MAYO']; 
                            $n122=number_format($acuenta3, 0, '.', ',');
                            echo($n122);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta40=$arr['6491300000']['JUNIO']+$arr['6491290000']['JUNIO'];
                            $n123=number_format($acuenta40, 0, '.', ',');
                            echo($n123);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta41=$arr['6491300000']['JULIO']+$arr['6491290000']['JULIO'];
                            $n124=number_format($acuenta41, 0, '.', ',');
                            echo($n124);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta42=$arr['6491300000']['AGOSTO']+$arr['6491290000']['AGOSTO']; 
                            $n125=number_format($acuenta42, 0, '.', ',');
                            echo($n125);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    <div class="dropdown">
   CUOTAS Y SUSCRIPCIONES
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/q1YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                        
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta43=$arr['6491010000']['FEBRERO']+$arr['6491420101']['FEBRERO']; 
                            $n119=number_format($acuenta43, 0, '.', ',');
                            echo($n119);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta44=$arr['6491010000']['MARZO']+$arr['6491420101']['MARZO']; 
                            $n120=number_format($acuenta44, 0, '.', ',');
                            echo($n120);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta45=$arr['6491010000']['ABRIL']+$arr['6491420101']['ABRIL']; 
                            $n121=number_format($acuenta45, 0, '.', ',');
                            echo($n121);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta46=$arr['6491010000']['MAYO']+$arr['6491420101']['MAYO']; 
                            $n122=number_format($acuenta46, 0, '.', ',');
                            echo($n122);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta47=$arr['6491010000']['JUNIO']+$arr['6491420101']['JUNIO'];
                            $n123=number_format($acuenta47, 0, '.', ',');
                            echo($n123);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta48=$arr['6491010000']['JULIO']+$arr['6491420101']['JULIO'];
                            $n124=number_format($acuenta48, 0, '.', ',');
                            echo($n124);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta49=$arr['6491010000']['AGOSTO']+$arr['6491420101']['AGOSTO']; 
                            $n125=number_format($acuenta49, 0, '.', ',');
                            echo($n125);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    <div class="dropdown">
   PAPELERIA Y ÚTILES DE ESCRITORIO
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/92YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                        
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta50=$arr['6491050000']['FEBRERO']; 
                            $n119=number_format($acuenta50, 0, '.', ',');
                            echo($n119);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta51=$arr['6491050000']['MARZO']; 
                            $n120=number_format($acuenta51, 0, '.', ',');
                            echo($n120);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta52=$arr['6491050000']['ABRIL']; 
                            $n121=number_format($acuenta52, 0, '.', ',');
                            echo($n121);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta53=$arr['6491050000']['MAYO']; 
                            $n122=number_format($acuenta53, 0, '.', ',');
                            echo($n122);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta54=$arr['6491050000']['JUNIO'];
                            $n123=number_format($acuenta54, 0, '.', ',');
                            echo($n123);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta55=$arr['6491050000']['JULIO'];
                            $n124=number_format($acuenta55, 0, '.', ',');
                            echo($n124);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta56=$arr['6491050000']['AGOSTO']; 
                            $n125=number_format($acuenta56, 0, '.', ',');
                            echo($n125);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                     <div class="dropdown">
   MEDIOS MASIVOS
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/C3YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
       
                        
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta57=$arr['6404010000']['FEBRERO']; 
                            $n119=number_format($acuenta57, 0, '.', ',');
                            echo($n119);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta58=$arr['6404010000']['MARZO']; 
                            $n120=number_format($acuenta58, 0, '.', ',');
                            echo($n120);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta59=$arr['6404010000']['ABRIL']; 
                            $n121=number_format($acuenta59, 0, '.', ',');
                            echo($n121);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta60=$arr['6404010000']['MAYO']; 
                            $n122=number_format($acuenta60, 0, '.', ',');
                            echo($n122);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta61=$arr['6404010000']['JUNIO'];
                            $n123=number_format($acuenta61, 0, '.', ',');
                            echo($n123);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta62=$arr['6404010000']['JULIO'];
                            $n124=number_format($acuenta62, 0, '.', ',');
                            echo($n124);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta63=$arr['6404010000']['AGOSTO']; 
                            $n125=number_format($acuenta63, 0, '.', ',');
                            echo($n125);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    <div class="dropdown">
   OTROS MEDIOS PUBLICITARIOS
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/C3YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                        
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta64=$arr['6404020000']['FEBRERO']; 
                            $n119=number_format($acuenta64, 0, '.', ',');
                            echo($n119);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta65=$arr['6404020000']['MARZO']; 
                            $n120=number_format($acuenta65, 0, '.', ',');
                            echo($n120);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta66=$arr['6404020000']['ABRIL']; 
                            $n121=number_format($acuenta66, 0, '.', ',');
                            echo($n121);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta67=$arr['6404020000']['MAYO']; 
                            $n122=number_format($acuenta67, 0, '.', ',');
                            echo($n122);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta68=$arr['6404020000']['JUNIO'];
                            $n123=number_format($acuenta68, 0, '.', ',');
                            echo($n123);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta69=$arr['6404020000']['JULIO'];
                            $n124=number_format($acuenta69, 0, '.', ',');
                            echo($n124);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta70=$arr['6404020000']['AGOSTO']; 
                            $n125=number_format($acuenta70, 0, '.', ',');
                            echo($n125);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="dropdown">
   
GASTOS DE REPRESENTACION</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/E3YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>

                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $r8=$arr['6491380100']['FEBRERO'];
                            $n126=number_format($r8, 0, '.', ',');
                            echo($n126);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
 </cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $r9=$arr['6491380100']['MARZO']; 
                            $n127=number_format($r9, 0, '.', ',');
                            echo($n127);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $r10=$arr['6491380100']['ABRIL']; 
                            $n128=number_format($r10, 0, '.', ',');
                            echo($n128);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $r11=$arr['6491380100']['MAYO']; 
                            $n129=number_format($r11, 0, '.', ',');
                            echo($n129);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $r12=$arr['6491380100']['JUNIO'];
                            $n130=number_format($r12, 0, '.', ',');
                            echo($n130);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>

</div></center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $r13=$arr['6491380100']['JULIO'];
                            $n131=number_format($r13, 0, '.', ',');
                            echo($n131);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $r14=$arr['6491380100']['AGOSTO']; 
                            $n132=number_format($r14,0,'.',',');
                            echo($n132);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________ 
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES29=$r1+$r8+$acuenta29+$acuenta36+$acuenta43+$acuenta50+$acuenta57+$acuenta64;
                            $as28=number_format($RES29, 0, '.', ',');
                            echo($as28);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES30=$r2+$r9+$acuenta30+$acuenta37+$acuenta44+$acuenta51+$acuenta58+$acuenta65;
                            $as29=number_format($RES30, 0, '.', ',');
                            echo($as29);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES31=$r3+$r10+$acuenta31+$acuenta38+$acuenta45+$acuenta52+$acuenta59+$acuenta66;
                            $as30=number_format($RES31, 0, '.', ',');
                            echo($as30);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES32=$r4+$r11+$acuenta32+$acuenta39+$acuenta46+$acuenta53+$acuenta60+$acuenta67;
                            $as31=number_format($RES32, 0, '.', ',');
                            echo($as31);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES33=$r5+$r12+$acuenta33+$acuenta40+$acuenta47+$acuenta54+$acuenta61+$acuenta68;
                        $as32=number_format($RES33, 0, '.', ',');
                            echo($as32);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES34=$r6+$r13+$acuenta34+$acuenta41+$acuenta48+$acuenta55+$acuenta62+$acuenta69;
                            $as33=number_format($RES34, 0, '.', ',');
                            echo($as33);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $RES35=$r7+$r14+$acuenta35+$acuenta42+$acuenta49+$acuenta56+$acuenta63+$acuenta70;
                            $as34=number_format($RES35, 0, '.', ',');
                            echo $as34;//echo($as34);
                        ?> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        </br>GASTOS FISCALES
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        </BR><div class="dropdown">
                         IMPUESTOS Y DERECHOS
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/F3YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                        
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta71=$arr['6406030000']['FEBRERO'];
                            $n126=number_format($acuenta71, 0, '.', ',');
                            echo($n126);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
 </cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta72=$arr['6406030000']['MARZO']; 
                            $n127=number_format($acuenta72, 0, '.', ',');
                            echo($n127);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta73=$arr['6406030000']['ABRIL']; 
                            $n128=number_format($acuenta73, 0, '.', ',');
                            echo($n128);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta74=$arr['6406030000']['MAYO']; 
                            $n129=number_format($acuenta74, 0, '.', ',');
                            echo($n129);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta75=$arr['6406030000']['JUNIO'];
                            $n130=number_format($acuenta75, 0, '.', ',');
                            echo($n130);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>

</div></center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta76=$arr['6406030000']['JULIO'];
                            $n131=number_format($acuenta76, 0, '.', ',');
                            echo($n131);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta77=$arr['6406030000']['AGOSTO']; 
                            $n132=number_format($acuenta77,0,'.',',');
                            echo($n132);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="dropdown">
   
GASTOS NO DEDUCIBLES</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/G3YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>

                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $a1=$arr['6408020100']['FEBRERO']+$arr['6408010000']['FEBRERO']+$arr['6408060000']['FEBRERO']+$arr['6408060100']['FEBRERO']; 
                            $n133=number_format($a1, 0, '.', ',');
                            echo($n133);
                        ?> <div class="dropdown">
   
</a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $a2=$arr['6408020100']['MARZO']+$arr['6408010000']['MARZO']+$arr['6408060000']['MARZO']+$arr['6408060100']['MARZO']; 
                            $n134=number_format($a2, 0, '.', ',');
                            echo($n134);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $a3=$arr['6408020100']['ABRIL']+$arr['6408010000']['ABRIL']+$arr['6408060000']['ABRIL']+$arr['6408060100']['ABRIL']; 
                            $n135=number_format($a3, 0, '.', ',');
                            echo($n135);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $a4=$arr['6408020100']['MAYO']+$arr['6408010000']['MAYO']+$arr['6408060000']['MAYO']+$arr['6408060100']['MAYO']; 
                            $n136=number_format($a4, 0, '.', ',');
                            echo($n136);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $a5=$arr['6408020100']['JUNIO']+$arr['6408010000']['JUNIO']+$arr['6408060000']['JUNIO']+$arr['6408060100']['JUNIO'];
                            $nu1=number_format($a5, 0, '.', ',');
                            echo($nu1);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                  
                    <td>
                        <center><div class="dropdown">
   
 <?php  $a6=$arr['6408020100']['JULIO']+$arr['6408010000']['JULIO']+$arr['6408060000']['JULIO']+$arr['6408060100']['JULIO']; 
                            $n138=number_format($a6, 0, '.', ',');
                            echo($n138);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $a7=$arr['6408020100']['AGOSTO']+$arr['6408010000']['AGOSTO']+$arr['6408060000']['AGOSTO']+$arr['6408060100']['AGOSTO']; 
                            $n139=number_format($a7, 0, '.', ',');
                            echo($n139);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    <div class="dropdown">
    GASTOS LEGALES
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/H3YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                       
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta78=$arr['6491170000']['FEBRERO']+$arr['6406020000']['FEBRERO']; 
                            $n133=number_format($acuenta78, 0, '.', ',');
                            echo($n133);
                        ?> <div class="dropdown">
   
</a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta79=$arr['6491170000']['MARZO']+$arr['6406020000']['MARZO']; 
                            $n134=number_format($acuenta79, 0, '.', ',');
                            echo($n134);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta80=$arr['6491170000']['ABRIL']+$arr['6406020000']['ABRIL']; 
                            $n135=number_format($acuenta80, 0, '.', ',');
                            echo($n135);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta81=$arr['6491170000']['MAYO']+$arr['6406020000']['MAYO']; 
                            $n136=number_format($acuenta81, 0, '.', ',');
                            echo($n136);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta82=$arr['6491170000']['JUNIO']+$arr['6406020000']['JUNIO'];
                            $nu1=number_format($acuenta82, 0, '.', ',');
                            echo($nu1);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                  
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta83=$arr['6491170000']['JULIO']+$arr['6406020000']['JULIO']; 
                            $n138=number_format($acuenta83, 0, '.', ',');
                            echo($n138);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta84=$arr['6491170000']['AGOSTO']+$arr['6406020000']['AGOSTO']; 
                            $n139=number_format($acuenta84, 0, '.', ',');
                            echo($n139);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    <div class="dropdown">
   DONATIVOS
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/K3YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>
                
                        
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta85=$arr['6491130000']['FEBRERO']; 
                            $n133=number_format($acuenta85, 0, '.', ',');
                            echo($n133);
                        ?> <div class="dropdown">
   
</a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta86=$arr['6491130000']['MARZO']; 
                            $n134=number_format($acuenta86, 0, '.', ',');
                            echo($n134);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta87=$arr['6491130000']['ABRIL']; 
                            $n135=number_format($acuenta87, 0, '.', ',');
                            echo($n135);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta88=$arr['6491130000']['MAYO']; 
                            $n136=number_format($acuenta88, 0, '.', ',');
                            echo($n136);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta89=$arr['6491130000']['JUNIO'];
                            $nu1=number_format($acuenta89, 0, '.', ',');
                            echo($nu1);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                  
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta90=$arr['6491130000']['JULIO']; 
                            $n138=number_format($acuenta90, 0, '.', ',');
                            echo($n138);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta91=$arr['6491130000']['AGOSTO']; 
                            $n139=number_format($acuenta91, 0, '.', ',');
                            echo($n139);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                    <div class="dropdown">
   SANCIONES Y RECARGOS
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/c3YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>    
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta92=$arr['6491200000']['FEBRERO']; 
                            $n133=number_format($acuenta92, 0, '.', ',');
                            echo($n133);
                        ?> <div class="dropdown">
   
</a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta93=$arr['6491200000']['MARZO']; 
                            $n134=number_format($acuenta93, 0, '.', ',');
                            echo($n134);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta94=$arr['6491200000']['ABRIL']; 
                            $n135=number_format($acuenta94, 0, '.', ',');
                            echo($n135);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta95=$arr['6491200000']['MAYO']; 
                            $n136=number_format($acuenta95, 0, '.', ',');
                            echo($n136);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta96=$arr['6491200000']['JUNIO'];
                            $nu1=number_format($acuenta96, 0, '.', ',');
                            echo($nu1);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                  
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta97=$arr['6491200000']['JULIO']; 
                            $n138=number_format($acuenta97, 0, '.', ',');
                            echo($n138);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta98=$arr['6491200000']['AGOSTO']; 
                            $n139=number_format($acuenta98, 0, '.', ',');
                            echo($n139);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________ 
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES36=$a1+$acuenta71+$acuenta78+$acuenta85+$acuenta92;
                        $as35=number_format($RES36, 0, '.', ',');
                            echo($as35);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES37=$a2+$acuenta72+$acuenta79+$acuenta86+$acuenta93;
                            $as36=number_format($RES37, 0, '.', ',');
                            echo($as36);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES38=$a3+$acuenta73+$acuenta80+$acuenta87+$acuenta94;
                            $as37=number_format($RES38, 0, '.', ',');
                            echo($as37);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES39=$a4+$acuenta74+$acuenta81+$acuenta88+$acuenta95;
                            $as38=number_format($RES39, 0, '.', ',');
                            echo($as38);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES40=$a5+$acuenta75+$acuenta82+$acuenta89+$acuenta96;
                            $as39=number_format($RES40, 0, '.', ',');
                            echo($as39);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES41=$a6+$acuenta76+$acuenta83+$acuenta90+$acuenta97;
                            $as40=number_format($RES41, 0, '.', ',');
                            echo($as40);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES42=$a7+$acuenta77+$acuenta84+$acuenta91+$acuenta98;
                            $as41=number_format($RES42, 0, '.', ',');
                            echo($as41);
                        ?></center>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        </br>OTROS
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        </BR><div class="dropdown">
   CONVENCIONES
</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/e3YW" frameborder="0" style="border:0" allowfullscreen></iframe></a>
  </div>
</div>    
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $acuenta99=$arr['6410010128']['FEBRERO']; 
                            $n133=number_format($acuenta99, 0, '.', ',');
                            echo($n133);
                        ?> <div class="dropdown">
   
</a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta100=$arr['6410010128']['MARZO']; 
                            $n134=number_format($acuenta100, 0, '.', ',');
                            echo($n134);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $acuenta101=$arr['6410010128']['ABRIL']; 
                            $n135=number_format($acuenta101, 0, '.', ',');
                            echo($n135);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta102=$arr['6410010128']['MAYO']; 
                            $n136=number_format($acuenta102, 0, '.', ',');
                            echo($n136);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta103=$arr['6410010128']['JUNIO'];
                            $nu1=number_format($acuenta103, 0, '.', ',');
                            echo($nu1);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                  
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta104=$arr['6410010128']['JULIO']; 
                            $n138=number_format($acuenta104, 0, '.', ',');
                            echo($n138);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta105=$arr['6410010128']['AGOSTO']; 
                            $n139=number_format($acuenta105, 0, '.', ',');
                            echo($n139);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 CURSOS Y CONFERENCIAS</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/h3YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <ceNTER><div class="dropdown">
   
<?php  $b1=$arr['6491360200']['FEBRERO']+$arr['6491360100']['FEBRERO']+$arr['6491360500']['FEBRERO']+$arr['6491360200']['FEBRERO'];

                            $n141=number_format($b1, 0, '.', ',');
                            echo($n141);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
 </cenTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $b2=$arr['6491360200']['MARZO']+$arr['6491360100']['MARZO']+$arr['6491360500']['MARZO']+$arr['6491360200']['MARZO']; 
                                $n142=number_format($b2, 0, '.', ',');
                            echo($n142);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $b3=$arr['6491360200']['ABRIL']+$arr['6491360100']['ABRIL']+$arr['6491360500']['ABRIL']+$arr['6491360200']['ABRIL']; 
                            $n143=number_format($b3, 0, '.', ',');
                            echo($n143);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $b4=$arr['6491360200']['MAYO']+$arr['6491360100']['MAYO']+$arr['6491360500']['MAYO']+$arr['6491360200']['MAYO']; 

                            $n144=number_format($b4, 0, '.', ',');
                            echo($n144);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $b5=$arr['6491360200']['JUNIO']+$arr['6491360100']['JUNIO']+$arr['6491360500']['JUNIO']+$arr['6491360200']['JUNIO'];
                            $n145=number_format($b5, 0, '.', ',');
                            echo($n145);
                         ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $b6=$arr['6491360200']['JULIO']+$arr['6491360100']['JULIO']+$arr['6491360500']['JULIO']+$arr['6491360200']['JULIO']; 
                            $n146=number_format($b6, 0, '.', ',');
                            echo($n146);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $b7=$arr['6491360200']['AGOSTO']+$arr['6491360100']['AGOSTO']+$arr['6491360500']['AGOSTO']+$arr['6491360200']['AGOSTO'];
                            $n147=number_format($b7, 0, '.', ',');
                            echo($n147);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   
 HONORARIOS PROFESIONALES</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/j3YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                   <td>
                        <cENTER><div class="dropdown">
   
<?php  $b8=$arr['6402020000']['FEBRERO']+$arr['6402010000']['FEBRERO']; 
                            $n148=number_format($b8, 0, '.', ',');
                            echo($n148);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $b9=$arr['6402020000']['MARZO']+$arr['6402010000']['MARZO'];
                            $n149=number_format($b9, 0, '.', ',');
                            echo($n149);
                          ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $b10=$arr['6402020000']['ABRIL']+$arr['6402010000']['ABRIL'];
                            $n150=number_format($b10, 0, '.', ',');
                            echo($n150);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $b11=$arr['6402020000']['MAYO']+$arr['6402010000']['MAYO'];
                            $n151=number_format($b11, 0, '.', ',');
                            echo($n151);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $b12=$arr['6402020000']['JUNIO']+$arr['6402010000']['JUNIO'];
                            $n152=number_format($b12, 0, '.', ',');
                            echo($n152);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $b13=$arr['6402020000']['JULIO']+$arr['6402010000']['JULIO'];
                            $n153=number_format($b13, 0, '.', ',');
                            echo($n153);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $b14=$arr['6402020000']['AGOSTO']+$arr['6402010000']['AGOSTO'];
                            $n154=number_format($b14, 0, '.', ',');
                            echo($n154);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                      <div class="dropdown">
   HONORARIOS A CONSEJEROS
 </a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/l3YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>  
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php  $aconsulta113=$arr['6410010101']['FEBRERO']; 
                            $n148=number_format($aconsulta113, 0, '.', ',');
                            echo($n148);
                        ?> </a>
<div class="dropdown-content">
   
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $aconsulta114=$arr['6410010101']['MARZO'];
                            $n149=number_format($aconsulta114, 0, '.', ',');
                            echo($n149);
                          ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php  $aconsulta115=$arr['6410010101']['ABRIL'];
                            $n150=number_format($aconsulta115, 0, '.', ',');
                            echo($n150);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $aconsulta116=$arr['6410010101']['MAYO'];
                            $n151=number_format($aconsulta116, 0, '.', ',');
                            echo($n151);
                         ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $aconsulta117=$arr['6410010101']['JUNIO'];
                            $n152=number_format($aconsulta117, 0, '.', ',');
                            echo($n152);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $aconsulta118=$arr['6402020000']['JULIO'];
                            $n153=number_format($aconsulta118, 0, '.', ',');
                            echo($n153);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $aconsulta119=$arr['6410010101']['AGOSTO'];
                            $n154=number_format($aconsulta119, 0, '.', ',');
                            echo($n154);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                      <div class="dropdown">
   
  OTROS NO ESPECIFICADOS</a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/m3YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>

                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php $b15=$arr['6491330000']['FEBRERO']+$arr['6491390000']['FEBRERO']+$arr['6491140000']['FEBRERO']+$arr['6408020000']['FEBRERO']+$arr['6491200000']['FEBRERO']+$arr['6491400000']['FEBRERO']+$arr['6408080000']['FEBRERO']+$arr['6491020000']['FEBRERO']+$arr['6491370000']['FEBRERO']; 
                            $n155=number_format($b15, 0, '.', ',');
                            echo($n155);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $b16=$arr['6491330000']['MARZO']+$arr['6491390000']['MARZO']+$arr['6491140000']['MARZO']+$arr['6408020000']['MARZO']+$arr['6491200000']['MARZO']+$arr['6491400000']['MARZO']+$arr['6408080000']['MARZO']+$arr['6491020000']['MARZO']+$arr['6491370000']['MARZO']; 
                            $n156=number_format($b16, 0, '.', ',');
                            echo($n156);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $b17=$arr['6491330000']['ABRIL']+$arr['6491390000']['ABRIL']+$arr['6491140000']['ABRIL']+$arr['6408020000']['ABRIL']+$arr['6491200000']['ABRIL']+$arr['6491400000']['ABRIL']+$arr['6408080000']['ABRIL']+$arr['6491020000']['ABRIL']+$arr['6491370000']['ABRIL'];
                            $n157=number_format($b17, 0, '.', ',');
                            echo($n157);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $b18=$arr['6491330000']['MAYO']+$arr['6491390000']['MAYO']+$arr['6491140000']['MAYO']+$arr['6408020000']['MAYO']+$arr['6491200000']['MAYO']+$arr['6491400000']['MAYO']+$arr['6408080000']['MAYO']+$arr['6491020000']['MAYO']+$arr['6491370000']['MAYO']; 
                            $n158=number_format($b18, 0, '.', ',');
                            echo($n158);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $b19=$arr['6491330000']['JUNIO']+$arr['6491390000']['JUNIO']+$arr['6491140000']['JUNIO']+$arr['6408020000']['JUNIO']+$arr['6491200000']['JUNIO']+$arr['6491400000']['JUNIO']+$arr['6408080000']['JUNIO']+$arr['6491020000']['JUNIO']+$arr['6491370000']['JUNIO']; 
                            $n159=number_format($b19, 0, '.', ',');
                            echo($n159);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $b20=$arr['6491330000']['JULIO']+$arr['6491390000']['JULIO']+$arr['6491140000']['JULIO']+$arr['6408020000']['JULIO']+$arr['6491200000']['JULIO']+$arr['6491400000']['JULIO']+$arr['6408080000']['JULIO']+$arr['6491020000']['JULIO']+$arr['6491370000']['JULIO']; 
                            $n160=number_format($b20, 0, '.', ',');
                            echo($n160);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $b21=$arr['6491330000']['AGOSTO']+$arr['6491390000']['AGOSTO']+$arr['6491140000']['AGOSTO']+$arr['6408020000']['AGOSTO']+$arr['6491200000']['AGOSTO']+$arr['6491400000']['AGOSTO']+$arr['6408080000']['AGOSTO']+$arr['6491020000']['AGOSTO']+$arr['6491370000']['AGOSTO'];
                            $n161=number_format($b21, 0, '.', ',');
                            echo($n161);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES43=$b1+$b8+$b15+$acuenta99+$aconsulta113;
                            $as45=number_format($RES43, 0, '.', ',');
                            echo($as45);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES44=$b2+$b9+$b16+$acuenta100+$aconsulta114;
                            $as44=number_format($RES44, 0, '.', ',');
                            echo($as44);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES45=$b3+$b10+$b17+$acuenta101+$aconsulta115;
                            $aw1=number_format($RES45, 0, '.', ',');
                            echo($aw1);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES46=$b4+$b11+$b18+$acuenta102+$aconsulta116;
                            $as42=number_format($RES46, 0, '.', ',');
                            echo($as42);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES47=$b5+$b12+$b19+$acuenta103+$aconsulta117;
                            $as43=number_format($RES47, 0, '.', ',');
                            echo($as43);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES48=$b6+$b13+$b20+$acuenta104+$aconsulta118;
                            $as44=number_format($RES48, 0, '.', ',');
                            echo($as44);
                        ?> </center>
                    </td>
                    <td>
                        <center>  <?php $RES49=$b7+$b14+$b21+$acuenta105+$aconsulta119;
                            $as45=number_format($RES49, 0, '.', ',');
                            echo($as45);
                        ?></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                
                <tr>
                    <td>
                        </br>PROVISIONES
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        </BR><div class="dropdown">
   DEPECIACIÓN HISTÓRICA
  </a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/n3YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div>
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php $acuenta120=$arr['6490030000']['FEBRERO']; $n155=number_format($acuenta120, 0, '.', ',');
                            echo($n155);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta121=$arr['6490030000']['MARZO'];       $n156=number_format($acuenta121, 0, '.', ',');
                            echo($n156);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta122=$arr['6490030000']['ABRIL'];    $n157=number_format($acuenta122, 0, '.', ',');
                            echo($n157);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta123=$arr['6490030000']['MAYO'];    $n158=number_format($acuenta123, 0, '.', ',');
                            echo($n158);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta124=$arr['6490030000']['JUNIO'];  $n159=number_format($acuenta124, 0, '.', ',');
                            echo($n159);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta125=$arr['6490030000']['JULIO'];   $n160=number_format($acuenta125, 0, '.', ',');
                            echo($n160);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta126=$arr['6490030000']['AGOSTO'];       $n161=number_format($acuenta126, 0, '.', ',');
                            echo($n161);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        DEPRECIACIÓN REVALUADA
                    </td>
                    <td>
                        <CENTER> 0</CENTER>
                    </td>
                    <td>
                         <center> 0</center> 
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center>0 </center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                       <div class="dropdown">
   AMORTIZACIÓN
  </a>
<div class="dropdown-content">
    <a> <iframe width="1000" height="563" src="https://datastudio.google.com/embed/reporting/1ApUvkXlp3CYHro5MQqu1SExwSAnhda5r/page/o3YW" frameborder="0" style="border:0" allowfullscreen></iframe> </a>
  </div>
</div> 
                    </td>
                    <td>
                        <cENTER><div class="dropdown">
   
<?php $acuenta127=$arr['6490040000']['FEBRERO']; $n155=number_format($acuenta127, 0, '.', ',');
                            echo($n155);
                        ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</cENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
   
<?php  $acuenta128=$arr['6490040000']['MARZO'];       $n156=number_format($acuenta128, 0, '.', ',');
                            echo($n156);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center> 
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta129=$arr['6490040000']['ABRIL'];    $n157=number_format($acuenta129, 0, '.', ',');
                            echo($n157);
                         ?> </a>
<div class="dropdown-content">
    
    <a><?php ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta130=$arr['6490040000']['MAYO'];    $n158=number_format($acuenta130, 0, '.', ',');
                            echo($n158);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
 <?php  $acuenta131=$arr['6490040000']['JUNIO'];  $n159=number_format($acuenta131, 0, '.', ',');
                            echo($n159);
                        ?></a>
  <div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
   
<?php  $acuenta132=$arr['6490040000']['JULIO'];   $n160=number_format($acuenta132, 0, '.', ',');
                            echo($n160);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
</center>
                    </td>
                    <td>
                        <center><div class="dropdown">
   
<?php $acuenta133=$arr['6490040000']['AGOSTO'];       $n161=number_format($acuenta133, 0, '.', ',');
                            echo($n161);
                        ?></a>
<div class="dropdown-content">
    
    <a><?php  ?></a>
  </div>
</div>
 </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        PROV. P/CUENTAS INCOBRABLES
                    </td>
                    <td>
                        <CENTER> 0</CENTER>
                    </td>
                    <td>
                         <center> 0</center> 
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                        <center>0 </center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
               
                <tr>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                       
                    </td>
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RESUL01=$acuenta120+$acuenta127;
                            $as46=number_format($RESUL01, 0, '.', ',');
                            echo($as46);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RESUL02=$acuenta121+$acuenta128;
                            $as46=number_format($RESUL02, 0, '.', ',');
                            echo($as46);
                        ?></center> 
                    </td>
                    <td>
                        <center><?php $RESUL03=$acuenta122+$acuenta129;
                            $as46=number_format($RESUL03, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php $RESUL04=$acuenta123+$acuenta130;
                            $as46=number_format($RESUL04, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RESUL05=$acuenta124+$acuenta131;
                            $as46=number_format($RESUL05, 0, '.', ',');
                            echo($as46);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $RESUL06=$acuenta125+$acuenta132;
                            $as46=number_format($RESUL06, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php $RESUL07=$acuenta126+$acuenta133;
                            $as46=number_format($RESUL07, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES50=$RES22+$RES29+$RES36+$RES43;
                            $as46=number_format($RES50, 0, '.', ',');
                            echo($as46);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES51=$RES23+$RES30+$RES37+$RES44;
                            $as47=number_format($RES51, 0, '.', ',');
                            echo($as47);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES52=$RES24+$RES31+$RES38+$RES45;
                            $as48=number_format($RES52, 0, '.', ',');
                            echo($as48);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES53=$RES25+$RES32+$RES39+$RES46;
                            $as49=number_format($RES53, 0, '.', ',');
                            echo($as49);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES54=$RES26+$RES33+$RES40+$RES47;
                            $as50=number_format($RES54, 0, '.', ',');
                            echo($as50);
                            ?></center>
                    </td>
                    <td>
                        <center><?php $RES55=$RES27+$RES34+$RES41+$RES48;
                            $as51=number_format($RES55, 0, '.', ',');
                            echo($as51);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $RES56=$RES28+$RES35+$RES42+$RES49;
                            $as52=number_format($RES56, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                  </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                  </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                  </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                  </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                  </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                  </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                  </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>TOTAL OTROS GASTOS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES57=$RES15+$RES50+$RESUL01;
                            $as53=number_format($RES57, 0, '.', ',');
                            echo($as53);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES58=$RES16+$RES51+$RESUL02;
                            $as54=number_format($RES58, 0, '.', ',');
                            echo($as54);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES59=$RES17+$RES52+$RESUL03;
                            $as55=number_format($RES59, 0, '.', ',');
                            echo($as55);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES60=$RES18+$RES53+$RESUL04;
                            $as56=number_format($RES60, 0, '.', ',');
                            echo($as56);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES61=$RES19+$RES54+$RESUL05;
                            $as57=number_format($RES61, 0, '.', ',');
                            echo($as57);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES62=$RES20+$RES55+$RESUL06;
                            $as58=number_format($RES62, 0, '.', ',');
                            echo($as58);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $RES63=$RES21+$RES56+$RESUL07;
                            $as59=number_format($RES63, 0, '.', ',');
                            echo($as59);
                        ?> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                       &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        <center>  </br></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>

                <tr>
                    <td>
                        __________________________________________
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>
                        AJUSTE OTROS NO ESPECIFICADOS
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>









                <tr>
                    <td>
                        </br>SUELDOS Y SALARIOS
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        CUOTAS IMSS
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        INFONAVIT
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        2% SOBRE NOMINA
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        PRIMA VACAIONAL
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        VALES DE DESPENSA
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        PRIMA DE ANTIGUEDS
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        GASTOS DE VIAJE
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr><tr>
                    <td>
                        OTROS
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>

            </tbody>
        </table>
    </center>
    
</body>
                           <!-- <div class="col-lg-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Total Revenue</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                               data-bgColor="#F9B9B9" value="58"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                        </div>

                                        <div class="widget-detail-1">
                                            <h2 class="p-t-10 m-b-0"> 256 </h2>
                                            <p class="text-muted">Revenue today</p>
                                        </div>
                                    </div>
                                </div>
                            </div> end col 

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Sales Analytics</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2">
                                            <span class="badge badge-success pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                                            <h2 class="m-b-0"> 8451 </h2>
                                            <p class="text-muted m-b-25">Revenue today</p>
                                        </div>
                                        <div class="progress progress-bar-success-alt progress-sm m-b-0">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 77%;">
                                                <span class="sr-only">77% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> end col 

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Statistics</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                               data-bgColor="#FFE6BA" value="80"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                        </div>
                                        <div class="widget-detail-1">
                                            <h2 class="p-t-10 m-b-0"> 4569 </h2>
                                            <p class="text-muted">Revenue today</p>
                                        </div>
                                    </div>
                                </div>
                            </div> end col 

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Daily Sales</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2">
                                            <span class="badge badge-pink pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                                            <h2 class="m-b-0"> 158 </h2>
                                            <p class="text-muted m-b-25">Revenue today</p>
                                        </div>
                                        <div class="progress progress-bar-pink-alt progress-sm m-b-0">
                                            <div class="progress-bar progress-bar-pink" role="progressbar"
                                                 aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 77%;">
                                                <span class="sr-only">77% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> end col 

                        </div>
                        end row 

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0">Daily Sales</h4>

                                    <div class="widget-chart text-center">
                                        <div id="morris-donut-example"style="height: 245px;"></div>
                                        <ul class="list-inline chart-detail-list m-b-0">
                                            <li>
                                                <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                            </li>
                                            <li>
                                                <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>end col 

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="header-title m-t-0">Statistics</h4>
                                    <div id="morris-bar-example" style="height: 280px;"></div>
                                </div>
                            </div> end col 

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="header-title m-t-0">Total Revenue</h4>
                                    <div id="morris-line-example" style="height: 280px;"></div>
                                </div>
                            </div> end col 

                        </div>
                        end row 


                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-3.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">Chadengle</h4>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-warning"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div> end col 

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-2.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600"> Michael Zenaty</h4>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-custom"><b>Support Lead</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div> end col 

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-1.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">Stillnotdavid</h4>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-success"><b>Designer</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div> end col 

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-10.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">Tomaslau</h4>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-info"><b>Developer</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div> end col 
                        </div>
                         end row 


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Inbox</h4>

                                    <div class="inbox-widget nicescroll" style="height: 315px;">
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Chadengle</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">13:40 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Tomaslau</p>
                                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                                <p class="inbox-item-date">13:34 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Stillnotdavid</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">13:17 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Kurafire</p>
                                                <p class="inbox-item-text">Nice to meet you</p>
                                                <p class="inbox-item-date">12:20 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Shahedk</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">10:15 AM</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> end col 

                            <div class="col-lg-8">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Latest Projects</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Assign</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Adminto Admin v1</td>
                                                    <td>01/01/2016</td>
                                                    <td>26/04/2016</td>
                                                    <td><span class="label label-danger">Released</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Adminto Frontend v1</td>
                                                    <td>01/01/2016</td>
                                                    <td>26/04/2016</td>
                                                    <td><span class="label label-success">Released</span></td>
                                                    <td>Adminto admin</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Adminto Admin v1.1</td>
                                                    <td>01/05/2016</td>
                                                    <td>10/05/2016</td>
                                                    <td><span class="label label-pink">Pending</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Adminto Frontend v1.1</td>
                                                    <td>01/01/2016</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-purple">Work in Progress</span>
                                                    </td>
                                                    <td>Adminto admin</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Adminto Admin v1.3</td>
                                                    <td>01/01/2016</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-warning">Coming soon</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>Adminto Admin v1.3</td>
                                                    <td>01/01/2016</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-primary">Coming soon</span></td>
                                                    <td>Adminto admin</td>
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td>Adminto Admin v1.3</td>
                                                    <td>01/01/2016</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-primary">Coming soon</span></td>
                                                    <td>Adminto admin</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> end col 

                        </div>
                       end row

                    </div>container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    <!--2018 © Multiva.-->
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>