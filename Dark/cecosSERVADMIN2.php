<!DOCTYPE html>
<html>
<style type="text/css">
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
                                <h4 class="page-title">CECOS</h4>
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
                            <img src="assets/images/users/multiva.jpg" alt="user-img" title="" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status online"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a href="#"><?php $useri=$_POST['email']; echo $useri;?></a> </h5>
                        
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
                                    <li><a href="cecos.php">CECOS</a></li>
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



<?php

require __DIR__ . '/../vendor/autoload.php';
use Google\Cloud\BigQuery\BigQueryClient;

$projectId='informe-211921';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);

$query = <<<ENDSQL
select * from `INFOR.SALDO_MESUAL_1` where SOCIEDAD="5500" AND CUENTA in ("6390010000","6410010103","6410010113","6410010119","6491320000","6401010114","6491080000","6491100000","6492030301","2401120702","6492020102","6410010102","6410010103","6410010122","6410010104","6492030201","6410010111","6410010112","6410010125","6410010113","6410010115","6410010107","6410010108","6410010118","6492030201","6491350400","6491350100","6491350200","6491350300","6410010121","6410010110","6410010121","6491410100","6491250000","6491070000","6491010000","6409000000","6403020100","6491240000","6491010000","6491420101","6491050000","6404020000","6491380100","6408020100","6408010000","6406020000","6410010128","6491360200",'6402020000',"6491330000","6491140000","6408020000","6491030000","6491370000","6490020000","6491360000","6408080000","6490040000","6410010104");
ENDSQL;

$queryJobConfig = $bigQuery->query($query);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i=0;
    $resaltadoows = $queryResults->rows();
    foreach($resaltadoows as $resaltadoow){
        $arr[$resaltadoow['CUENTA']]=$resaltadoow;
    }
        
  // print_r($arr);
}
$query1 = <<<ENDSQL
select * from `multiva.SERVADMIN` WHERE PERTENECE="SEGUROS";
ENDSQL;

$queryJobConfig = $bigQuery->query($query1);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows1 = $queryResults->rows();
    foreach($resaltadoows1 as $resaltadoow1){
        
        

        
       $arr1[$resaltadoow1['HKONT']]=$resaltadoow1;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
       // print_r($arr1);
    }
    }
        
   $query2 = <<<ENDSQL
select * from `multiva.SERVADMIN` WHERE PERTENECE="OPERADORA";
ENDSQL;

$queryJobConfig = $bigQuery->query($query2);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows2 = $queryResults->rows();
    foreach($resaltadoows2 as $resaltadoow2){
        
        

        
       $arr2[$resaltadoow2['HKONT']]=$resaltadoow2;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
       // print_r($arr1);
    }
    }
      
 $query3 = <<<ENDSQL
select * from `multiva.SERVADMIN` WHERE PERTENECE="BANCO";
ENDSQL;

$queryJobConfig = $bigQuery->query($query3);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows3 = $queryResults->rows();
    foreach($resaltadoows3 as $resaltadoow3){
        
        

        
       $arr3[$resaltadoow3['HKONT']]=$resaltadoow3;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
       // print_r($arr1);
    }
    }
    $query4 = <<<ENDSQL
select * from `multiva.SERVADMIN` WHERE PERTENECE="CASA";
ENDSQL;

$queryJobConfig = $bigQuery->query($query4);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows4 = $queryResults->rows();
    foreach($resaltadoows4 as $resaltadoow4){
        
        

        
       $arr4[$resaltadoow4['HKONT']]=$resaltadoow4;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
       // print_r($arr1);
    }
    }
    $query5 = <<<ENDSQL
select * from `multiva.SERVADMIN` WHERE PERTENECE="GFM";
ENDSQL;

$queryJobConfig = $bigQuery->query($query5);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows5 = $queryResults->rows();
    foreach($resaltadoows5 as $resaltadoow5){
        
        

        
       $arr5[$resaltadoow5['HKONT']]=$resaltadoow5;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
       // print_r($arr1);
    }
    }
     $query6 = <<<ENDSQL
select HKONT, SUM(DMBTR) AS DMBTR, PSWSL from `multiva.CECOSE` WHERE PERTENECE="BANCO" AND HKONT IN ("6410010104","6410010122") AND DBBLG LIKE "N%" GROUP BY HKONT,PSWSL;
ENDSQL;

$queryJobConfig = $bigQuery->query($query6);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows6 = $queryResults->rows();
    foreach($resaltadoows6 as $resaltadoow6){
        
        

        
       $arr6[$resaltadoow6['HKONT']]=$resaltadoow6;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
        //print_r($arr6);
    }
    }
     $query7= <<<ENDSQL
select HKONT, SUM(DMBTR) AS DMBTR, PSWSL from `multiva.CECOSE` WHERE PERTENECE="CASA" AND HKONT IN ("6410010104","6410010122") AND DBBLG LIKE "N%" GROUP BY HKONT,PSWSL;
ENDSQL;

$queryJobConfig = $bigQuery->query($query7);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows7 = $queryResults->rows();
    foreach($resaltadoows7 as $resaltadoow7){
        
        

        
       $arr7[$resaltadoow7['HKONT']]=$resaltadoow7;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
        //print_r($arr6);
    }
    }
$query10= <<<ENDSQL
SELEct gjahr,HKONT, BUKRS, KOSTL, BUDAT, SUM(DMBTR), SUM(WRBTR), SUM(KZBTR), SUM(PSWBT), PSWSL 
FROM `multiva.BSEG` 
WHERE HKONT="6410010115" 
AND DBBLG LIKE "PROV%"
--AND BKTXT LIKE "%2018"
AND BUKRS="5500" 
AND BUDAT LIKE "201803%" 
AND KOSTL IN ("5150110100","5440000100","5450000100","5450000100","5450000100","5510000000")
GROUP BY GJAHR, HKONT, BUKRS, KOSTL, BUDAT, PSWSL;
ENDSQL;

$queryJobConfig = $bigQuery->query($query10);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows10 = $queryResults->rows();
    foreach($resaltadoows10 as $resaltadoow10){
        
        

        
       $arr10[$resaltadoow10['KOSTL']]=$resaltadoow10;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
        //print_r($arr6);
    }
    }
    $query15= <<<ENDSQL
select * from `multiva.CECO1` WHERE KOSTL LIKE "SUMA";
ENDSQL;

$queryJobConfig = $bigQuery->query($query15);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows15 = $queryResults->rows();
    foreach($resaltadoows15 as $resaltadoow15){
        
        

        
       $arr15[$resaltadoow15['DBBLG']]=$resaltadoow15;
       $arr16[$resaltadoow15['BKTXT']]=$resaltadoow15;
       $arr17[$resaltadoow15['DBBLG']  ]=$arr16;
       $arr18[$resaltadoow15['BKTXT']  ]=$arr15;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
            //print_r($arr17);
    }
    }
    $query11= <<<ENDSQL
select * FROM `multiva.PRIMA` ;
ENDSQL;

$queryJobConfig = $bigQuery->query($query11);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $resaltadoows11 = $queryResults->rows();
    foreach($resaltadoows11 as $resaltadoow11){
        
        

        
       $arr11[$resaltadoow11['KOSTL']]=$resaltadoow11;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
        //print_r($arr6);
    }
    }



?>


                           <body>
    
    <center>
       
        <h3>
            BANCO MULTIVA S.A. INSTITUCIÓN DE BANCA MÚLTIPLE GRUPO FINANCIERO MULTIVA
        </h3>
        <h3>
            MULTIVALORES SERVICIOS CORPORATIVOS S.A.
        </h3>
        <h3>
            Integración de Gastos por Unidad de Negocio
        </h3></br></br>
        <div class="table-responsive">
            
        
        <table BORDER=0 class="table-hover table-fixed">
            <thead>
                <tr><td></td><td></td>
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
ini_set('date.timezone','America/Mexico_City');
    $fecha_actual=date("d/m/Y");
echo $fecha_actual."&nbsp"."&nbsp"; ?></p>
                    </td>
                    <td>
                        <p align="left"><?php 
ini_set('date.timezone','America/Mexico_City');
    $hora_actual=date("H:i:s");
echo $hora_actual; ?></p>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                
                <tr><td></td><td></td>
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
                </tr>

                <tr><td></td><td></td>
                    <td>
                        <center></center>
                    </td>
                    
                    <td>
                        <center></center>
                    </td>
                    <td>
                       <center>5%</center>
                    </td>
                    <td>
                        <center>85%</center>
                    </td>
                    <td>
                        <center>10%</center>
                    </td>
                    

                    <td>
                      <center> </center>
                    </td>
                    <td>
                        <CENTER></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>              
                </tr>

                <tr><td></td><td></td>
                    <td>
                        <center>CONCEPTO</center>
                    </td>
                    
                    <td>
                        <center>MARZO</center>
                    </td>
                    <td>
                       <center>OPERADORA</center>
                    </td>
                    <td>
                        <center>BANCO</center>
                    </td>
                    
                    <td>
                        <CENTER>MCB</CENTER>
                    </td>
                    <td>
                         <center>totalAL </center> 
                    </td>
                    <td>
                        <center> variableIACION</center>
                    </td>               
                </tr>
                <tr>
                    <td></td><td></td>
                    <td>
                        ______________________________________________________________________________
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
                        <?php echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"; ?>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td><td></td>
                    <td>
                       <center>GASTOS PAGADOS  </center>
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
                    

                </tr>
                <tr>
                    <td></td><td></td>
                    <td>
                       </BR> FACTOR HUMANO</BR>
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
                    
                </tr>
                <tr>
                    <td>
                        <center></br><?php echo $arr['6410010102']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       </br> SUELDOS A FUNCIONARIOS Y EMPLEADOS
  
                    </td>
                    <td>
                        <CENTER></br><?php $Qrs=$arr5['6410010102']['DMBTR']; 
                            $n=number_format($Qrs, 0, '.', ',');
                            echo($n);
                        ?> 
                    </CENTER>
                    </td>
                    <td>
                         <center></br><?php $veremos1=$arr5['6410010102']['DMBTR']*0.05; 
                            $n=number_format($veremos1, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center></br><?php  $veremos2=$arr5['6410010102']['DMBTR']*0.85; 
                            $n=number_format($veremos2, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center></br> <?php  $veremos3=$arr5['6410010102']['DMBTR']*0.1; 
                            $n=number_format($veremos3, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER></br><?php $total=$veremos1+$veremos2+$veremos3; 
                                        $n=number_format($total, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center></br><?php $variable=+$total-$arr5['6410010102']['DMBTR']; 
                                        $n=number_format($variable, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    

                </tr>

                <tr>

                    <td><center><?php echo $arr['6410010104']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                        <td>
 BONO 

                    </td>
                    <td>
                        <CENTER> <?php $Qrs1=0; 
                            $n=number_format($Qrs1, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                   <td>
                         <center><?php $veremos4=0*0.05; 
                            $n=number_format($veremos4, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos5=0*0.85; 
                            $n=number_format($veremos5, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos6=0*0.1; 
                            $n=number_format($veremos6, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total1=$veremos4+$veremos5+$veremos6; 
                                        $n=number_format($total1, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable1=+$total1-0; 
                                        $n=number_format($variable1, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

<tr>
    <td><center><?php echo $arr['6410010111']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        
CUOTAS AL I.M.S.S.

                    </td>
                    <td>
                        <CENTER><?php  $Qrs2=$arr5['6410010111']['DMBTR']; 
                            $n=number_format($Qrs2, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                     
                    
                   <td>
                         <center><?php $veremos7=$arr5['6410010111']['DMBTR']*0.05; 
                            $n=number_format($veremos7, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos8=$arr5['6410010111']['DMBTR']*0.85; 
                            $n=number_format($veremos8, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos9=$arr5['6410010111']['DMBTR']*0.1; 
                            $n=number_format($veremos9, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total2=$veremos7+$veremos8+$veremos9; 
                                        $n=number_format($total2, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable2=+$total2-$Qrs2; 
                                        $n=number_format($variable2, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr> 

                       <tr>
                        <td><center><?php echo $arr['6410010112']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
 APORTACIPONES AL INFONAVIT

                    </td>
                    <td>
                        <CENTER><?php $Qrs3=$arr5['6410010112']['DMBTR']; 
                            $n55=number_format($Qrs3, 0, '.', ',');
                            echo($n55); 
                         ?> 
</CENTER></td>
                     <td>
                         <center><?php $veremos10=$arr5['6410010112']['DMBTR']*0.05; 
                            $n=number_format($veremos10, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos11=$arr5['6410010112']['DMBTR']*0.85; 
                            $n=number_format($veremos11, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos12=$arr5['6410010112']['DMBTR']*0.1; 
                            $n=number_format($veremos12, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total3=$veremos10+$veremos11+$veremos12; 
                                        $n=number_format($total3, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable3=+$total3-$Qrs3; 
                                        $n=number_format($variable3, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
<tr>

    <td><center><?php echo $arr['6410010115']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>

 VALES DE DESPENSA
                    </td>
                    <td>
                        <CENTER> <?php $Qrs4=$arr5['6410010115']['DMBTR'];$n76=number_format($Qrs4, 0, '.', ',');
                            echo($n76); ?>
 </CENTER>
                    </td>
                    <td>
                         <center><?php $veremos13=$arr5['6410010115']['DMBTR']*0.05; 
                            $n=number_format($veremos13, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos14=$arr5['6410010115']['DMBTR']*0.85; 
                            $n=number_format($veremos14, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos15=$arr5['6410010115']['DMBTR']*0.1; 
                            $n=number_format($veremos15, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total4=$veremos13+$veremos14+$veremos15; 
                                        $n=number_format($total4, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable4=+$total4-$Qrs4; 
                                        $n=number_format($variable4, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       <tr>

                        <td></td><td></td>
                    <td>

 VALES DE DESPENSA AGUINALDO
                    </td>
                    <td>
                        <CENTER>  <?php echo $Qrs5=0; ?>
 </CENTER>
                    </td>
                    <td><center></center></td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center>  </center>
                    </td>
                   
                    <td>
                        <center> </center>
                    </td>
                   
                    <td>
                        <CENTER></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                       </tr>

                       <tr>
                        <td><center><?php echo $arr['6410010122']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
GRATIFICACIONES

                    </td>
                    <td> 
                        <CENTER>
                                    <?php $Qrs6=0; 
                            $n=number_format($Qrs6, 0, '.', ',');
                            echo($n);
                        ?>
 </CENTER>
                    </td>
                    
                    <td>
                         <center><?php $veremos16=$Qrs6*0.05; 
                            $n=number_format($veremos16, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos17=$Qrs6*0.85; 
                            $n=number_format($veremos17, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos18=$Qrs6*0.1; 
                            $n=number_format($veremos18, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total6=$veremos16+$veremos17+$veremos18; 
                                        $n=number_format($total6, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable6=+$total6-$Qrs6; 
                                        $n=number_format($variable6, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       <tr>
                        <td><center><?php echo $arr['6410010125']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
 2% SOBRE NOMINA E IMP. ESTATALES

                    </td>
                    <td>
                        <CENTER><?php  $Qrs7=$arr5['6410010125']['DMBTR']; 
                            $n62=number_format($Qrs7, 0, '.', ',');
                            echo($n62);
                        ?> 
</CENTER>
                    </td>
                    <td>
                         <center><?php $veremos19=$arr5['6410010125']['DMBTR']*0.05; 
                            $n=number_format($veremos19, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos20=$arr5['6410010125']['DMBTR']*0.85; 
                            $n=number_format($veremos20, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos21=$arr5['6410010125']['DMBTR']*0.1; 
                            $n=number_format($veremos21, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total7=$veremos19+$veremos20+$veremos21; 
                                        $n=number_format($total7, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable7=+$total7-$Qrs7; 
                                        $n=number_format($variable7, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       <tr>
                        <td><center><?php echo $arr['6410010104']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                        <td>
 BONO ACTUACION

                    </td>
                    <td>
                        <CENTER> <?php $Qrs8=0; 
                            $n=number_format($Qrs8, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                   
                    <td>
                         <center><?php $veremos22=0*0.05; 
                            $n=number_format($veremos22, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos23=0*0.85; 
                            $n=number_format($veremos23, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos24=0*0.1; 
                            $n=number_format($veremos24, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total8=$veremos22+$veremos23+$veremos24; 
                                        $n=number_format($total8, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable8=+$total8-$Qrs8; 
                                        $n=number_format($variable8, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                <tr>
                    <td><center><?php echo $arr['6410010103']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                    AGUINALDO Y OTRAS GRATIFICACIONES
              </td>
                    <td>
                        <CENTER><?php $Qrs9=0; 
                            $n=number_format($Qrs9, 0, '.', ',');
                            echo($n);
                            ?>
                         </CENTER>
                    </td>
                    <td>
                         <center><?php $veremos25=0*0.05; 
                            $n=number_format($veremos25, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos26=0*0.85; 
                            $n=number_format($veremos26, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos27=0*0.1; 
                            $n=number_format($veremos27, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total9=$veremos25+$veremos26+$veremos27; 
                                        $n=number_format($total9, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable9=+$total9-$Qrs9; 
                                        $n=number_format($variable9, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>

 <tr>

    <td></td><td></td>
                    <td>
                      
BONO GRATIFICACION Y PTU 
                    </td>
                    <td>
                        <CENTER><?php echo $Qrs10=0; ?></CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center>0 </center>
                    </td>
                    <td>
                        <center>0 </center>
                    </td>
                   
                    <td>
                        <center>0 </center>
                    </td>
                    
                    <td>
                        <CENTER>0</CENTER>
                    </td>
                       </tr>

                    <tr><td></td><td></td>
                    <td>
                      
PRIMA VACACIONAL (PAGADO EN EL MES) 
                    </td>
                    <td>
                        <CENTER><?php echo $Qrs11=0; ?></CENTER>
                    </td>
                    <td>
                         <center><?php $veremos28=$Qrs11*0.05; 
                            $n=number_format($veremos28, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos29=$Qrs11*0.85; 
                            $n=number_format($veremos29, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos30=$Qrs11*0.1; 
                            $n=number_format($veremos30, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total11=$veremos28+$veremos29+$veremos30; 
                                        $n=number_format($total11, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable11=+$total11-$Qrs11; 
                                        $n=number_format($variable11, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       
                  <tr>

                    <td></td><td></td>
                    <td>
                      
<h5> PAGOS EN PASIVOS</h5> 
                    </td>
                    <td>
                        <CENTER></CENTER>
                    </td>
                    <td><center></center></td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                   
                    <td>
                        <center> </center>
                    </td>
                    
                    <td>
                        <CENTER></CENTER>
                    </td>
                    <td>
                         <center></center> 
                    </td>
                    <td>
                         <center></center> 
                    </td>
                       </tr>


                    <tr><td><center>6492020102</center></td><td></td>
                    <td>
                       PRIMA DE ANTIGUEDAD
                    </td>
                    <td>
                        <CENTER> <?php 

                            
                        if (empty($arr['6492020102']['ABRIL'])){
                                echo $Qrs12=0;
                            }
                            else{
                                
                                $Qrs12=$arr['6492020102']['ABRIL']; 
                            $n=number_format($Qrs12, 0, '.', ',');
                            echo($n);
                            }
                            ?></CENTER>
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

                </tr>
                <tr><td><center>6492020102</center></td><td></td>
                    <td>
                       INDEMNIZACION POR ANTIGUEDAD
                    </td>
                    <td>
                        <CENTER> <?php 

                            
                        if (empty($arr['6492020102']['ABRIL'])){
                                echo $Qrs13=0;
                            }
                            else{
                                
                                $Qrs13=$arr['6492020102']['ABRIL']; 
                            $n=number_format($Qrs13, 0, '.', ',');
                            echo($n);
                            }
                            ?></CENTER>
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
                    

                </tr>
                <tr><td><center>6492020102</center></td><td></td>
                    <td>
                       INDEMNIZACION POR 3 MESES
                    </td>
                    <td>
                        <CENTER> <?php 

                            
                        if (empty($arr['6492020102']['ABRIL'])){
                                echo $Qrs14=0;
                            }
                            else{
                                
                                $Qrs14=$arr['6410010103']['ABRIL']; 
                            $n=number_format($Qrs14, 0, '.', ',');
                            echo($n);
                            }
                            ?></CENTER>
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

                </tr>
                <tr><td><center><?php echo $arr['6410010103']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       AGUINALDO (PAGADO EN FINIQUITO)
                    </td>
                    <td>
                        <CENTER><?php if ($arr['6410010103']['ABRIL']!=0){
                                echo $Qrs15=0;
                            }
                            else{
                                
                                $Qrs15=$arr['6410010103']['ABRIL']; 
                            $n=number_format($Qrs15, 0, '.', ',');
                            echo($n);
                            }
                            ?></CENTER>
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

                </tr>
                <tr>
                    <td><center><?php echo $arr['6410010102']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       VACACIONES Y SUELDO (PAGADO)
                    </td>
                    <td>
                        <CENTER> <?php if ($arr['6410010102']['ABRIL']!=0){
                                echo $Qrs16=0;
                            }
                            else{
                                
                                $Qrs16=$arr['6410010102']['ABRIL']; 
                            $n=number_format($Qrs16, 0, '.', ',');
                            echo($n);
                            }
                            ?></CENTER>
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
                </tr>
                <tr><td><center><?php echo $arr['6410010102']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       COMPENSACION
                    </td>
                    <td>
                        <CENTER> <?php if ($arr['6410010102']['ABRIL']!=0){
                                echo $Qrs17=0;
                            }
                            else{
                                
                                $Qrs17=$arr['6410010102']['ABRIL']; 
                            $n=number_format($Qrs17, 0, '.', ',');
                            echo($n);
                            }
                            ?></CENTER>
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
                </tr>
                <tr><td><center><?php echo $arr['6410010113']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        PRIMA VACACIONAL (PAGADO EN FINIQUITO)
                    </td>
                    <td>
                        <CENTER> <?php if ($arr['6410010113']['ABRIL']!=0){
                                echo $Qrs18=0;
                            }
                            else{
                                
                                $Qrs18=$arr['6410010113']['ABRIL']; 
                            $n=number_format($Qrs18, 0, '.', ',');
                            echo($n);
                            }
                            ?></CENTER>
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

                </tr>
                       
                <tr><td></td><td></td>
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

                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $resaltado=$Qrs+$Qrs1+$Qrs2+$Qrs3+$Qrs4+$Qrs5+$Qrs6+$Qrs7+$Qrs8+$Qrs9+$Qrs10+$Qrs11+$Qrs12+$Qrs13+$Qrs14+$Qrs15+$Qrs16+$Qrs17+$Qrs18;
                        $as6=number_format($resaltado, 0, '.', ',');
                            echo($as6);?></CENTER>
                    </td>
                    <td>
                         <center><?php $resaltado1=$veremos1+$veremos4+$veremos7+$veremos10+$veremos13+$veremos16+$veremos19+$veremos22+$veremos25+$veremos28;
                        $as6=number_format($resaltado1, 0, '.', ',');
                            echo($as6);?> </center> 
                    </td>
                    <td>
                        <center><?php $resaltado2=$veremos2+$veremos5+$veremos8+$veremos11+$veremos14+$veremos17+$veremos20+$veremos23+$veremos26+$veremos29;
                        $as6=number_format($resaltado2, 0, '.', ',');
                            echo($as6);?> </center>
                    </td>
                    <td>
                        <center> <?php $resaltado3=$veremos3+$veremos6+$veremos9+$veremos12+$veremos15+$veremos18+$veremos21+$veremos24+$veremos27+$veremos30;
                        $as6=number_format($resaltado3, 0, '.', ',');
                            echo($as6);?></center>
                    </td>
                    
                    <td>
                        <center><?php $resaltado6=$total+$total1+$total2+$total3+$total4+$total6+$total7+$total8+$total9+$total11;
                        $as6=number_format($resaltado6, 0, '.', ',');
                            echo($as6);?> </center>
                    </td>
                    <td>
                       <center><?php $resaltado7=$variable+$variable1+$variable2+$variable3+$variable4+$variable6+$variable7+$variable8+$variable9+$variable11;
                        $as6=number_format($resaltado7, 0, '.', ',');
                            echo($as6);?>  </center>
                    </td>
                    

                </tr>
                
<tr><td></td><td></td>
                    <td>
                        <center><h4>GASTOS GENERALES</h4></center>
                    </td>
                    <td>
                        <CENTER> </BR></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    

                </tr>
                    <tr>
                    <td><center><?php echo $arr['6390010000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
                        OTRAS COMISIONES BANCARIAS

                    </td>
                    
                    <td>
                        <CENTER> <?php  $Qrs19=0; $n90=number_format($Qrs19, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    
                    <td>
                         <center><?php $veremos31=$Qrs19*0.05; 
                            $n=number_format($veremos31, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos32=$Qrs19*0.85; 
                            $n=number_format($veremos32, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos33=$Qrs19*0.1; 
                            $n=number_format($veremos33, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total19=$veremos31+$veremos32+$veremos33; 
                                        $n=number_format($total19, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable19=+$total19-$Qrs19; 
                                        $n=number_format($variable19, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       <tr>
                    <td><center><?php echo "6402010000"; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
                    HONORARIOS PERSONAS FISICAS

                    </td>
                    
                    <td>
                        <CENTER> <?php 

                            
                        if (empty($arr5['6402010000']['DMBTR'])){
                                echo $Qrs20=0;
                            }
                            else{
                                
                                $Qrs20=$arr5['6402010000']['DMBTR']; 
                            $n=number_format($Qrs20, 0, '.', ',');
                            echo($n);
                            }
                            ?></CENTER>
                    </td>
                    <td>
                         <center><?php $veremos34=$Qrs20*0.05; 
                            $n=number_format($veremos34, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos35=$Qrs20*0.85; 
                            $n=number_format($veremos35, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos36=$Qrs20*0.1; 
                            $n=number_format($veremos30, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total20=$veremos34+$veremos35+$veremos36; 
                                        $n=number_format($total20, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable20=+$total20-$Qrs20; 
                                        $n=number_format($variable20, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                       <tr>
                    <td><center><?php echo $arr['6402020000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
                    HONORARIOS PERSONAS MORALES

                    </td>
                    
                    <td>
                        <CENTER> <?php 
                                
                                $Qrs56=0; 
                            $n=number_format($Qrs56, 0, '.', ',');
                            echo($n);
                            
                            ?></CENTER>
                    </td>
                      <td>
                         <center><?php $veremos37=$Qrs56*0.05; 
                            $n=number_format($veremos37, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos38=$Qrs56*0.85; 
                            $n=number_format($veremos38, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos39=$Qrs56*0.1; 
                            $n=number_format($veremos39, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total56=$veremos37+$veremos38+$veremos39; 
                                        $n=number_format($total11, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable56=+$total56-$Qrs56; 
                                        $n=number_format($variable56, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>



                <tr>
                    <td><center><?php echo $arr['6403020100']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
                        RENTAS INMUEBLES SOCIEDADES ANONIMAS

                    </td>
                    
                    <td>
                        <CENTER> <?php  $Qrs21=0; $n90=number_format($Qrs21, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                     <td>
                         <center><?php $veremos40=$Qrs21*0.05; 
                            $n=number_format($veremos40, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos41=$Qrs21*0.85; 
                            $n=number_format($veremos41, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos42=$Qrs21*0.1; 
                            $n=number_format($veremos42, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total21=$veremos40+$veremos41+$veremos42; 
                                        $n=number_format($total21, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable21=+$total21-$Qrs21; 
                                        $n=number_format($variable21, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>



                 <tr>
                    <td><center><?php echo $arr['6404020000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
                    OTROS MEDIOS PUBLICITARIOS REVISTAS, PERIODICOS
                    </td>
                    <td>
                        <CENTER><?php 
                            $Qrs22=0; 
                            $n=number_format($Qrs22, 0, '.', ',');
                            echo($n);
                        ?></CENTER>
                    </td>
                     <td>
                         <center><?php $veremos43=$Qrs22*0.05; 
                            $n=number_format($veremos43, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos44=$Qrs22*0.85; 
                            $n=number_format($veremos44, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos45=$Qrs22*0.1; 
                            $n=number_format($veremos45, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total22=$veremos43+$veremos44+$veremos45; 
                                        $n=number_format($total22, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable22=+$total22-$Qrs22; 
                                        $n=number_format($variable22, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>



                <tr><td><center><?php echo $arr['6408010000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
                        GASTOS NO DEDUCIBLES GENERALES
                    </td>
                   <td>
                        <CENTER><?php $Qrs23=0; 
                            $n21=number_format($Qrs23, 0, '.', ',');
                            echo($n21);
                        ?>  </CENTER>
                    </td>
                    <td>
                         <center><?php $veremos46=$Qrs23*0.05; 
                            $n=number_format($veremos46, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos47=$Qrs23*0.85; 
                            $n=number_format($veremos47, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos48=$Qrs23*0.1; 
                            $n=number_format($veremos48, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total23=$veremos46+$veremos47+$veremos48; 
                                        $n=number_format($total23, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable23=+$total23-$Qrs23; 
                                        $n=number_format($variable23, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                
                <tr>
                    <td><center><?php echo $arr['6408020000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        
GASTOS NO DEDUCIBLES POR EXEDENTES DE GASTOS DE VA
</td>
                    <td>
                        <CENTER> <?php  $Qrs24=0; 
                            $n69=number_format($Qrs24, 0, '.', ',');
                            echo($n69);
                        ?>
 </CENTER>
                    </td>
                     <td>
                         <center><?php $veremos49=$Qrs24*0.05; 
                            $n=number_format($veremos49, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos50=$Qrs24*0.85; 
                            $n=number_format($veremos50, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos51=$Qrs24*0.1; 
                            $n=number_format($veremos51, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total24=$veremos49+$veremos50+$veremos51; 
                                        $n=number_format($total24, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable24=+$total24-$Qrs24; 
                                        $n=number_format($variable24, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                 
                <tr>
                    <td><center><?php echo $arr['6408020100']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                    
                       
                        GASTOS NO DEDUCIBLES POR CONSUMO EN RESTAURANTES

                    </td>
                    <td>
                        <CENTER><?php $Qrs25=$arr5['6408020100']['DMBTR']; $n83=number_format($Qrs25, 0, '.', ',');
                            echo($n83);?>
</CENTER>
                    </td>
                     <td>
                         <center><?php $veremos52=$arr5['6408020100']['DMBTR']*0.05; 
                            $n=number_format($veremos52, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos53=$arr5['6408020100']['DMBTR']*0.85; 
                            $n=number_format($veremos53, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos54=$arr5['6408020100']['DMBTR']*0.1; 
                            $n=number_format($veremos54, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total25=$veremos52+$veremos53+$veremos54; 
                                        $n=number_format($total25, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable25=+$total25-$Qrs25; 
                                        $n=number_format($variable25, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                <tr>
                    <td><center><?php echo $arr['6409000000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                    
                    
                      
GASTOS EN TECNOLOGIA  
                    </td>
                    <td>
                        <CENTER><?php $Qrs26=0;$n90=number_format($Qrs26, 0, '.', ',');
                            echo($n90); ?>
 </CENTER>
                    </td>
                    <td>
                         <center><?php $veremos55=$Qrs26*0.05; 
                            $n=number_format($veremos55, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos56=$Qrs26*0.85; 
                            $n=number_format($veremos56, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos57=$Qrs26*0.1; 
                            $n=number_format($veremos57, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total26=$veremos55+$veremos56+$veremos57; 
                                        $n=number_format($total26, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable26=+$total26-$Qrs26; 
                                        $n=number_format($variable26, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                <tr><td><center><?php echo $arr['6410010110']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
 SERVICIO MEDICO
                    </td>
                   <td>
                        <CENTER> <?php  $Qrs27=0; $n90=number_format($Qrs27, 0, '.', ',');
                            echo($n90); ?> </CENTER>
                    </td>
                    <td>
                         <center><?php $veremos58=$Qrs27*0.05; 
                            $n=number_format($veremos58, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos59=$Qrs27*0.85; 
                            $n=number_format($veremos59, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos60=$Qrs27*0.1; 
                            $n=number_format($veremos60, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total27=$veremos58+$veremos59+$veremos60; 
                                        $n=number_format($total11, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable27=+$total27-$Qrs27; 
                                        $n=number_format($variable27, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                
                <tr>
                    <td><center><?php echo $arr['6410010119']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                    
                    
                        
                        VALES DE GASOLINA
                    </td>
                    <td>
                        <CENTER>  <?php $Qrs28=0;$n97=number_format($Qrs28, 0, '.', ',');
                            echo($n97); ?>

 </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <center> 0 </center>
                    </td>
                   
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <CENTER>0</CENTER>
                    </td>
                       </tr>
                <tr>
                    <td><center><?php echo $arr['6410010128']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        
CONVENCIONES
                    </td>
                    <td>
                        <CENTER><?php  $Qrs29=0;  $n90=number_format($Qrs29, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                     <td>
                         <center><?php $veremos61=$Qrs29*0.05; 
                            $n=number_format($veremos61, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos62=$Qrs29*0.85; 
                            $n=number_format($veremos62, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos63=$Qrs29*0.1; 
                            $n=number_format($veremos63, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total29=$veremos61+$veremos62+$veremos63; 
                                        $n=number_format($total29, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable29=+$total29-$Qrs29; 
                                        $n=number_format($variable29, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                <tr>
                    <td><center><?php echo $arr['6491010000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        CUOTAS Y SUSCRIPCIONES
                    </td>
                    <td>
                        <CENTER> <?PHP  $Qrs30=0;  $n90=number_format($Qrs30, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                     <td>
                         <center><?php $veremos64=$Qrs30*0.05; 
                            $n=number_format($veremos64, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos65=$Qrs30*0.85; 
                            $n=number_format($veremos65, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos66=$Qrs30*0.1; 
                            $n=number_format($veremos66, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total30=$veremos64+$veremos65+$veremos66; 
                                        $n=number_format($total30, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable30=+$total30-$Qrs30; 
                                        $n=number_format($variable30, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                <tr>
                    <td><center><?php echo $arr['6491050000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                    
                    
                        
PAPELERIA
                    </td>
                    <td>
                        <CENTER><?php $Qrs31=0;
                            $n104=number_format($Qrs31, 0, '.', ',');
                            echo($n104);
                        ?>
 </CENTER>
                    </td>
                     <td>
                         <center><?php $veremos67=$Qrs31*0.05; 
                            $n=number_format($veremos67, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos68=$Qrs31*0.85; 
                            $n=number_format($veremos68, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos69=$Qrs31*0.1; 
                            $n=number_format($veremos69, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total31=$veremos67+$veremos68+$veremos69; 
                                        $n=number_format($total31, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable31=+$total31-$Qrs31; 
                                        $n=number_format($variable31, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>
                
                <tr>
                    <td><center>6491060000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
PUBLICIDAD Y PROPAGANDA                    
                    </td>
                    <td>
                        <CENTER><?php  if (empty($arr5['6491060000']['DMBTR'])){
                                echo $Qrs32=0;
                            }
                            else{
                                
                                $Qrs32=$arr5['6491060000']['DMBTR']; 
                            $n=number_format($Qrs32, 0, '.', ',');
                            echo($n);
                            }?></CENTER>
                    </td>
                    <td>
                         <center><?php $veremos70=$Qrs32*0.05; 
                            $n=number_format($veremos70, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos71=$Qrs32*0.85; 
                            $n=number_format($veremos71, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos72=$Qrs32*0.1; 
                            $n=number_format($veremos72, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total32=$veremos70+$veremos71+$veremos72; 
                                        $n=number_format($total32, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable32=+$total32-$Qrs32; 
                                        $n=number_format($variable32, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>
               
                <tr>
                    <td><center>6491090000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
LUZ Y AGUA
                    </td>
                    <td>
                        <CENTER>  <?php  if (empty($arr['6491090032']['ABRIL'])){
                                echo $Qrs33=0;
                            }
                            else{
                                
                                $Qrs33=$arr['6491090032']['ABRIL']; 
                            $n=number_format($Qrs33, 0, '.', ',');
                            echo($n);
                            }?>
</CENTER>
                    </td>
                    <td>
                         <center><?php $veremos73=$Qrs33*0.05; 
                            $n=number_format($veremos73, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos74=$Qrs33*0.85; 
                            $n=number_format($veremos74, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos75=$Qrs33*0.1; 
                            $n=number_format($veremos75, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total33=$veremos73+$veremos74+$veremos75; 
                                        $n=number_format($total33, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable33=+$total33-$Qrs33; 
                                        $n=number_format($variable33, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    

                </tr>
               
                <tr>
                    <td><center><?php echo $arr['6491140000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
TRANSPORTES LOCALES (TAXIS, ESTACIONAMIENTOS, CASETA)
                    </td>
                    <td>
                        <CENTER>  <?php $Qrs34=0; 
                            $n118=number_format($Qrs34, 0, '.', ',');
                            echo($n118);
                        ?> 
 </CENTER>
                    </td>
                     <td>
                         <center><?php $veremos76=$Qrs34*0.05; 
                            $n=number_format($veremos76, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos77=$Qrs34*0.85; 
                            $n=number_format($veremos77, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos78=$Qrs34*0.1; 
                            $n=number_format($veremos78, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total34=$veremos76+$veremos77+$veremos78; 
                                        $n=number_format($total34, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable34=+$total34-$Qrs34; 
                                        $n=number_format($variable34, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                
                <tr>
                    <td><center>6491200000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                
RECARGOS


                    </td>
                    <td>
                        <cENTER><?php  if (empty($arr['6491200000']['ABRIL'])){
                                echo $Qrs35=0;
                            }
                            else{
                                
                                $Qrs35=$arr['6491200000']['ABRIL']; 
                            $n=number_format($Qrs35, 0, '.', ',');
                            echo($n);
                            }?>
</cENTER>
                    </td>
                    <td>
                         <center><?php $veremos79=$Qrs35*0.05; 
                            $n=number_format($veremos79, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos80=$Qrs35*0.85; 
                            $n=number_format($veremos80, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos81=$Qrs35*0.1; 
                            $n=number_format($veremos81, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total35=$veremos79+$veremos80+$veremos81; 
                                        $n=number_format($total35, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable35=+$total35-$Qrs35; 
                                        $n=number_format($variable35, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    
                </tr>
                
                <tr>
                    <td><center><?php echo $arr['6491240000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
TELEFONOS
                        
                    </td>
                    <td>
                        <cENTER><?php $Qrs36=$arr5['6491240000']['DMBTR']; 
                            $n125=number_format($Qrs36, 0, '.', ',');
                            echo($n125);
                        ?>
</cENTER>
                    </td>
                    <td>
                         <center><?php $veremos82=$Qrs36*0.05; 
                            $n=number_format($veremos82, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos83=$Qrs36*0.85; 
                            $n=number_format($veremos83, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos84=$Qrs36*0.1; 
                            $n=number_format($veremos84, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total36=$veremos82+$veremos83+$veremos84; 
                                        $n=number_format($total36, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable36=+$total36-$Qrs36; 
                                        $n=number_format($variable36, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td><center><?php echo $arr['6491320000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
GASTOS OPERATIVOS 
</td>
                    <td>
                        <cENTER><?php $Qrs37=0; 
                            $n125=number_format($Qrs37, 0, '.', ',');
                            echo($n125);
                        ?>
</cENTER>
                    </td>
                    <td>
                         <center><?php $veremos85=$Qrs37*0.05; 
                            $n=number_format($veremos85, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos86=$Qrs37*0.85; 
                            $n=number_format($veremos86, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos87=$Qrs37*0.1; 
                            $n=number_format($veremos87, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total37=$veremos85+$veremos86+$veremos87; 
                                        $n=number_format($total37, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable37=+$total37-$Qrs37; 
                                        $n=number_format($variable37, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                
                <tr>
                    <td><center><?php echo $arr['6491330000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
OTROS
</td>
                    <td>
                        <cENTER><?php $Qrs38=$arr5['6491330000']['DMBTR']; 
                            $n125=number_format($Qrs38, 0, '.', ',');
                            echo($n125);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos88=$arr5['6491330000']['DMBTR']*0.05; 
                            $n=number_format($veremos88, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos89=$arr5['6491330000']['DMBTR']*0.85; 
                            $n=number_format($veremos89, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos90=$arr5['6491330000']['DMBTR']*0.1; 
                            $n=number_format($veremos90, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total38=$veremos88+$veremos89+$veremos90; 
                                        $n=number_format($total38, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable38=+$total38-$Qrs38; 
                                        $n=number_format($variable38, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>

                    <td><center>6491350000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
GASTOS DE VIAJE
</td>
                    <td>
                        <cENTER> <?php  if (empty($arr5['6491350000']['DMBTR'])){
                                echo $Qrs39=0;
                            }
                            else{
                                
                                $Qrs39=$arr5['6491350000']['DMBTR']; 
                            $n=number_format($Qrs39, 0, '.', ',');
                            echo($n);
                            }?></cENTER>
                    </td>
                   <td>
                         <center><?php $veremos91=$Qrs39*0.05; 
                            $n=number_format($veremos91, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos92=$Qrs39*0.85; 
                            $n=number_format($veremos92, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos93=$Qrs39*0.1; 
                            $n=number_format($veremos93, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total39=$veremos91+$veremos92+$veremos93; 
                                        $n=number_format($total39, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable39=+$total39-$Qrs39; 
                                        $n=number_format($variable39, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    
                </tr>
                
                <tr>
                    <td><center><?php echo $arr['6491350100']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        
ALIMENTOS
</td>
                    <td>
                        <cENTER><?php $Qrs40=0; 
                            $n139=number_format($Qrs40, 0, '.', ',');
                            echo($n139);
                        ?></cENTER>
                    </td>
                   <td>
                         <center><?php $veremos94=$Qrs40*0.05; 
                            $n=number_format($veremos94, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos95=$Qrs40*0.85; 
                            $n=number_format($veremos95, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos96=$Qrs40*0.1; 
                            $n=number_format($veremos96, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total40=$veremos94+$veremos95+$veremos96; 
                                        $n=number_format($total40, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable40=+$total40-$Qrs40; 
                                        $n=number_format($variable40, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>
               
                <tr>
                    <td><center><?php echo $arr['6491350200']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        TASNSP (TAXIS, ESTAC, GRUA, AUTOS, GASOLINA, CASETAS)
</td>
                    <td>
                        <cENTER><?php $Qrs41=0; 
                            $n139=number_format($Qrs41, 0, '.', ',');
                            echo($n139);
                        ?></cENTER>
                    </td>
                   <td>
                         <center><?php $veremos97=$Qrs41*0.05; 
                            $n=number_format($veremos97, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos98=$Qrs41*0.85; 
                            $n=number_format($veremos98, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos99=$Qrs41*0.1; 
                            $n=number_format($veremos99, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total41=$veremos97+$veremos98+$veremos99; 
                                        $n=number_format($total41, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable41=+$total41-$Qrs41; 
                                        $n=number_format($variable41, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr><td><center><?php echo $arr['6491350300']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
 HOSPEDAJE</td>
                    <td>
                        <ceNTER><?php $Qrs42=0;
                            $n147=number_format($Qrs42, 0, '.', ',');
                            echo($n147);
                         ?> </cenTER>
                    </td>
                    <td>
                         <center><?php $veremos100=$Qrs42*0.05; 
                            $n=number_format($veremos100, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos101=$Qrs42*0.85; 
                            $n=number_format($veremos101, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos102=$Qrs42*0.1; 
                            $n=number_format($veremos102, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total42=$veremos100+$veremos101+$veremos102; 
                                        $n=number_format($total42, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable42=+$total42-$Qrs42; 
                                        $n=number_format($variable42, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td><center><?php echo $arr['6491350400']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
BOLETOS DE AVION 
</td>
                   <td>
                        <cENTER><?php $Qrs43=0;
                            $n154=number_format($Qrs43, 0, '.', ',');
                            echo($n154);
                         ?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos103=$Qrs43*0.05; 
                            $n=number_format($veremos103, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos104=$Qrs43*0.85; 
                            $n=number_format($veremos104, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos105=$Qrs43*0.1; 
                            $n=number_format($veremos105, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total43=$veremos103+$veremos104+$veremos105; 
                                        $n=number_format($total43, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable43=+$total43-$Qrs43; 
                                        $n=number_format($variable43, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                
                <tr>
                    <td><center><?php echo $arr['6491360200']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
CAPACITACION EXTERNA 
</td>
                    <td>
                        <cENTER><?php $Qrs44=0;
                            $n161=number_format($Qrs44, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos106=$Qrs44*0.05; 
                            $n=number_format($veremos106, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos107=$Qrs44*0.85; 
                            $n=number_format($veremos107, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos108=$Qrs44*0.1; 
                            $n=number_format($veremos108, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total44=$veremos106+$veremos107+$veremos108; 
                                        $n=number_format($total44, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable44=+$total44-$Qrs44; 
                                        $n=number_format($variable44, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                
                <tr>
                    <td><center>6491360500 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
GASTOS DE CAPACITACION  </td>
                    <td>
                        <cENTER><?php  if (empty($arr5['6491360500']['DMBTR'])){
                                echo $Qrs45=0;
                            }
                            else{
                                
                                $Qrs45=$arr5['6491360500']['DMBTR']; 
                            $n=number_format($Qrs45, 0, '.', ',');
                            echo($n);
                            }?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos109=$Qrs45*0.05; 
                            $n=number_format($veremos109, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos110=$Qrs45*0.85; 
                            $n=number_format($veremos110, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos111=$Qrs45*0.1; 
                            $n=number_format($veremos111, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total45=$veremos109+$veremos110+$veremos111; 
                                        $n=number_format($total45, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable45=+$total45-$Qrs45; 
                                        $n=number_format($variable45, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
               <tr>
                    <td><center><?php echo $arr['6491370000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
INSUMOS Y SUMINISTROS</td>
                    <td>
                        <cENTER><?php $Qrs46=0;
                            $n161=number_format($Qrs46, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos112=$Qrs46*0.05; 
                            $n=number_format($veremos112, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos113=$Qrs46*0.85; 
                            $n=number_format($veremos113, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos114=$Qrs46*0.1; 
                            $n=number_format($veremos114, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total46=$veremos112+$veremos113+$veremos114; 
                                        $n=number_format($total46, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable46=+$total46-$Qrs46; 
                                        $n=number_format($variable46, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
               <tr>
                    <td><center><?php echo $arr['6491380100']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
CONSUMOS EN RESTAURANTES (LOCALES)</td>
                    <td>
                        <cENTER><?php $Qrs47=$arr5['6491380100']['DMBTR'];
                            $n161=number_format($Qrs47, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos115=$arr5['6491380100']['DMBTR']*0.05; 
                            $n=number_format($veremos115, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos116=$arr5['6491380100']['DMBTR']*0.85; 
                            $n=number_format($veremos116, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos117=$arr5['6491380100']['DMBTR']*0.1; 
                            $n=number_format($veremos117, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total47=$veremos115+$veremos116+$veremos117; 
                                        $n=number_format($total47, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable47=+$total47-$Qrs47; 
                                        $n=number_format($variable47, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td><center>6491410000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
CONSERV Y MANT EQ TRANSPORTE</td>
                    <td>
                        <cENTER><?php  if (empty($arr5['6491410000']['DMBTR'])){
                                echo $Qrs48=0;
                            }
                            else{
                                
                                $Qrs48=$arr5['6491410000']['DMBTR']; 
                            $n=number_format($Qrs48, 0, '.', ',');
                            echo($n);
                            }?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos118=$Qrs48*0.05; 
                            $n=number_format($veremos118, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos119=$Qrs48*0.85; 
                            $n=number_format($veremos119, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos120=$Qrs48*0.1; 
                            $n=number_format($veremos120, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total48=$veremos118+$veremos119+$veremos120; 
                                        $n=number_format($total48, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable48=+$total48-$Qrs48; 
                                        $n=number_format($variable48, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td><center><?php echo $arr['6491410100']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
COMBUSTIBLES Y LUBRICANTES (LOCALES) </td>
                    <td>
                        <cENTER><?php $Qrs49=0;
                            $n161=number_format($Qrs49, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos121=$Qrs49*0.05; 
                            $n=number_format($veremos121, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos122=$Qrs49*0.85; 
                            $n=number_format($veremos122, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos123=$Qrs49*0.1; 
                            $n=number_format($veremos123, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total49=$veremos121+$veremos122+$veremos123; 
                                        $n=number_format($total49, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable49=+$total49-$Qrs49; 
                                        $n=number_format($variable49, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td><center>6491390000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
MEDICAMENTOS</td>
                    <td>
                        <cENTER><?php  if (empty($arr5['6491390000']['DMBTR'])){
                                echo $Qrs50=0;
                            }
                            else{
                                
                                $Qrs50=$arr5['6491390000']['DMBTR']; 
                            $n=number_format($Qrs50, 0, '.', ',');
                            echo($n);
                            }?>
                                
                            </cENTER>
                    </td>
                   <td>
                         <center><?php $veremos124=$Qrs50*0.05; 
                            $n=number_format($veremos124, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos125=$Qrs50*0.85; 
                            $n=number_format($veremos125, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos126=$Qrs50*0.1; 
                            $n=number_format($veremos126, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total50=$veremos124+$veremos125+$veremos126; 
                                        $n=number_format($total50, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable50=+$total50-$Qrs50; 
                                        $n=number_format($variable50, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>   
                </tr>
                <tr>
                    <td><center>6491090000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
LUZ Y AGUA
</td>
                    <td>
                        <cENTER>
                            <?php  if (empty($arr5['6491090000']['DMBTR'])){
                                echo $Qrs51=0;
                            }
                            else{
                                
                                $Qrs51=$arr5['6491090000']['DMBTR']; 
                            $n=number_format($Qrs51, 0, '.', ',');
                            echo($n);
                            }?>
                        </cENTER>
                    </td>
                    <td>
                         <center><?php $veremos127=$Qrs51*0.05; 
                            $n=number_format($veremos127, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos128=$Qrs51*0.85; 
                            $n=number_format($veremos128, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos129=$Qrs51*0.1; 
                            $n=number_format($veremos129, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total51=$veremos127+$veremos128+$veremos129; 
                                        $n=number_format($total51, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable51=+$total51-$Qrs51; 
                                        $n=number_format($variable51, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td><center><?php echo $arr['6410010121']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
FIESTA FIN DE ANO</td>
                    <td>
                        <cENTER><?php $Qrs52=0;
                            $n161=number_format($Qrs52, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                   <td>
                         <center><?php $veremos130=$Qrs52*0.05; 
                            $n=number_format($veremos130, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos131=$Qrs52*0.85; 
                            $n=number_format($veremos131, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos132=$Qrs52*0.1; 
                            $n=number_format($veremos132, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total52=$veremos130+$veremos131+$veremos132; 
                                        $n=number_format($total49, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable52=+$total52-$Qrs52; 
                                        $n=number_format($variable52, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td><center><?php echo $arr['6491250000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
MANT INMUEBLES </td>
                    <td>
                        <cENTER><?php $Qrs53=0;
                            $n161=number_format($Qrs53, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos133=$Qrs53*0.05; 
                            $n=number_format($veremos133, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos134=$Qrs53*0.85; 
                            $n=number_format($veremos134, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos135=$Qrs53*0.1; 
                            $n=number_format($veremos135, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total53=$veremos133+$veremos134+$veremos135; 
                                        $n=number_format($total53, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable53=+$total53-$Qrs53; 
                                        $n=number_format($variable53, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td><center>6491360300 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
ESTUDIOS DE POSGRADO</td>
                    <td>
                        <cENTER>
                            <?php  if (empty($arr5['6491360300']['DMBTR'])){
                                echo $Qrs54=0;
                            }
                            else{
                                
                                $Qrs54=$arr5['6491360300']['DMBTR']; 
                            $n=number_format($Qrs54, 0, '.', ',');
                            echo($n);
                            }?>
                        </cENTER>
                    </td>
                    <td>
                         <center><?php $veremos136=$Qrs54*0.05; 
                            $n=number_format($veremos136, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos137=$Qrs54*0.85; 
                            $n=number_format($veremos137, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos138=$Qrs54*0.1; 
                            $n=number_format($veremos138, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total54=$veremos136+$veremos137+$veremos138; 
                                        $n=number_format($total54, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable54=+$total54-$Qrs54; 
                                        $n=number_format($variable54, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td><center><?php echo $arr['6491420101']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
CUOTAS COMISION NACIONAL BANCARIA Y DE VALORES</td>
                    <td>
                        <cENTER><?php $Qrs55=0;
                            $n161=number_format($Qrs55, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $veremos139=$Qrs55*0.05; 
                            $n=number_format($veremos139, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos140=$Qrs55*0.85; 
                            $n=number_format($veremos140, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos141=$Qrs55*0.1; 
                            $n=number_format($veremos141, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $total55=$veremos139+$veremos140+$veremos141; 
                                        $n=number_format($total55, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variable55=+$total55-$Qrs55; 
                                        $n=number_format($variable55, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr><td></td><td></td>
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
                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <CENTER> <?php $resaltado8=$Qrs19+$Qrs20+$Qrs21+$Qrs22+$Qrs23+$Qrs24+$Qrs25+$Qrs26+$Qrs27+$Qrs28+$Qrs29+$Qrs30+$Qrs31+$Qrs32+$Qrs33+$Qrs34+$Qrs35+$Qrs36+$Qrs37+$Qrs38+$Qrs39+$Qrs40+$Qrs41+$Qrs42+$Qrs43+$Qrs44+$Qrs45+$Qrs46+$Qrs47+$Qrs48+$Qrs49+$Qrs50+$Qrs51+$Qrs52+$Qrs53+$Qrs54+$Qrs55+$Qrs56;
                            $as46=number_format($resaltado8, 0, '.', ',');
                            echo($as46);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $resaltado9=$veremos31+$veremos34+$veremos37+$veremos40+$veremos43+$veremos46+$veremos49+$veremos52+$veremos55+$veremos58+$veremos61+$veremos64+$veremos67+$veremos70+$veremos73+$veremos76+$veremos79+$veremos82+$veremos85+$veremos88+$veremos91+$veremos94+$veremos97+$veremos100+$veremos103+$veremos106+$veremos109+$veremos112+$veremos115+$veremos118+$veremos121+$veremos124+$veremos127+$veremos130+$veremos133+$veremos136+$veremos139;
                            $as46=number_format($resaltado9, 0, '.', ',');
                            echo($as46);
                        ?></center> 
                    </td>
                    <td>
                        <center><?php $resaltado10=$veremos32+$veremos35+$veremos38+$veremos41+$veremos44+$veremos47+$veremos50+$veremos53+$veremos56+$veremos59+$veremos62+$veremos65+$veremos68+$veremos71+$veremos74+$veremos77+$veremos80+$veremos83+$veremos86+$veremos89+$veremos92+$veremos95+$veremos98+$veremos101+$veremos104+$veremos107+$veremos110+$veremos113+$veremos116+$veremos119+$veremos122+$veremos125+$veremos128+$veremos131+$veremos134+$veremos137+$veremos140;
                            $as46=number_format($resaltado10, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php $resaltado11=$veremos33+$veremos36+$veremos39+$veremos42+$veremos45+$veremos48+$veremos51+$veremos54+$veremos57+$veremos60+$veremos63+$veremos66+$veremos69+$veremos72+$veremos75+$veremos78+$veremos81+$veremos84+$veremos87+$veremos90+$veremos93+$veremos96+$veremos99+$veremos102+$veremos105+$veremos108+$veremos111+$veremos114+$veremos117+$veremos120+$veremos123+$veremos126+$veremos129+$veremos132+$veremos135+$veremos138+$veremos141;
                            $as46=number_format($resaltado11, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resaltado14=$total19+$total20+$total56+$total21+$total22+$total23+$total24+$total25+$total26+$total27+$total42+$total29+$total30+$total31+$total32+$total33+$total34+$total35+$total36+$total37+$total38+$total39+$total40+$total41+$total43+$total44+$total45+$total46+$total47+$total48+$total49+$total50+$total51+$total52+$total53+$total54+$total55;
                            $as46=number_format($resaltado14, 0, '.', ',');
                            echo($as46);
                        ?> </center>
                    </td>
                    <td>
                       <center> <?php $resaltado15=$variable19+$variable20+$variable56+$variable21+$variable22+$variable23+$variable24+$variable25+$variable26+$variable27+$variable42+$variable29+$variable30+$variable31+$variable32+$variable33+$variable34+$variable35+$variable36+$variable37+$variable38+$variable39+$variable40+$variable41+$variable43+$variable44+$variable45+$variable46+$variable47+$variable48+$variable49+$variable50+$variable51+$variable52+$variable53+$variable54+$variable55;
                            $as46=number_format($resaltado15, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>

                </tr>
                <tr><td></td><td></td>
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
                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center><h5 align="right">total</h5></center>
                    </td>
                    <td>
                        <CENTER> <?php $resaltadoesultado=$resaltado+$resaltado8;
                            $as52=number_format($resaltadoesultado, 0, '.', ',');
                            echo($as52);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $resaltadoesultado1=$resaltado1+$resaltado9;
                            $as52=number_format($resaltadoesultado1, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resaltadoesultado2=$resaltado2+$resaltado10;
                            $as52=number_format($resaltadoesultado2, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resaltadoesultado3=$resaltado3+$resaltado11;
                            $as52=number_format($resaltadoesultado3, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resaltadoesultado6=$resaltado6+$resaltado14;
                            $as52=number_format($resaltadoesultado6, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resaltadoesultado7=$resaltado7+$resaltado15;
                            $as52=number_format($resaltadoesultado7, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    

                </tr>
                
                <tr><td></td><td></td>
                    <td>
                         <h5 align="right">Comision 2.8%</h5>
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
                        <center> 0</center>
                    </td>
                    

                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center>  <h5 align="right">Base IVA</h5></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center><?php $resaltadoesultado1=$resaltado1+$resaltado9;
                            $as52=number_format($resaltadoesultado1, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resaltadoesultado2=$resaltado2+$resaltado10;
                            $as52=number_format($resaltadoesultado2, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resaltadoesultado3=$resaltado3+$resaltado11;
                            $as52=number_format($resaltadoesultado3, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resaltadoesultado6=$resaltado6+$resaltado14;
                            $as52=number_format($resaltadoesultado6, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resaltadoesultado7=$resaltado7+$resaltado15;
                            $as52=number_format($resaltadoesultado7, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center> <h5 align="right">IVA 16%</h5></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center><?php $iva=$resaltadoesultado1*0.16;
                            $as52=number_format($iva, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $iva1=$resaltadoesultado2*0.16;
                            $as52=number_format($iva1, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $iva2=$resaltadoesultado3*0.16;
                            $as52=number_format($iva2, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $iva5=$resaltadoesultado6*0.16;
                            $as52=number_format($iva5, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $iva6=$resaltadoesultado7*0.16;
                            $as52=number_format($iva6, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                </tr>
                 <tr><td></td><td></td>
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
            </tr>
                <tr><td></td><td></td>
                    <td>
                        <center> <h5 align="right">total Gastos</h5></center>
                    </td>
                    <td> </td>
                    <td>
                         <center><?php $resaltadoesultado8=$resaltadoesultado1+$iva;
                            $as52=number_format($resaltadoesultado8, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resaltadoesultado9=$resaltadoesultado2+$iva1;
                            $as52=number_format($resaltadoesultado9, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resaltadoesultado10=$resaltadoesultado3+$iva2;
                            $as52=number_format($resaltadoesultado10, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resaltadoesultado13=$resaltadoesultado6+$iva5;
                            $as52=number_format($resaltadoesultado13, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resaltadoesultado14=$resaltadoesultado7+$iva6;
                            $as52=number_format($resaltadoesultado14, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>

                </tr>
                
                <tr><td></td><td></td>
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
                </tr>
                <tr><td></td><td></td>
                    <td>
                       </br></br> <h5>COBRADO 1A QNA</h5> 
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
                <tr><td></td><td></td>
                    <td>
                        <h5>COBRADO 2A QNA</h5>
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

                </tr><tr><td></td><td></td>
                    <td>
                        <h5>COBRADO 3RA FACT</h5>
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

                </tr><tr><td></td><td></td>
                    <td>
                        <h5>COBRADO 4TA FACT</h5>
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

                </tr><tr><td></td><td></td>
                    <td>
                        <h5>COBRADO 5TA FACT</h5>
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

                </tr><tr><td></td><td></td>
                    <td>
                        </br></Br><h5>COBRADO</h5>
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

                </tr><tr><td></td><td></td>
                    <td>
                         </br><H5>POR COBRAR A FAVOR </H5>
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

                </tr><tr><td></td><td></td>
                    <td>
                        </BR></BR><H4>GASTOS NO PAGADOS</H4>
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

                
                <tr><td><center><?php echo $arr['6410010103']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        AGUINALDO
                    </td>
                    <td>
                        <CENTER><?php $Qrsa1=$arr5['6410010103']['DMBTR']; 
                            $n=number_format($Qrsa1, 0, '.', ',');
                            echo($n);
                            ?> </CENTER>
                    </td>
                    <td>
                         <center><?php $veremose1=$Qrsa1*0.05; 
                            $n=number_format($veremose1, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremose2=$Qrsa1*0.85; 
                            $n=number_format($veremose2, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremose3=$Qrsa1*0.1; 
                            $n=number_format($veremose3, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $totala1=$veremose1+$veremose2+$veremose3; 
                                        $n=number_format($totala1, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variablea1=+$totala1-$Qrsa1; 
                                        $n=number_format($variablea1, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>





                <tr><td><center><?php echo $arr['6410010103']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        AGUINALDO
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

                </tr><tr><td><?php echo $arr['6410010104']['CUENTA']; 
                        ?> </td>
                        <td><?php echo "&nbsp"."&nbsp";
                    ?></td>
                    <td>
                        BONO OTRAS GRATIFICACIONES (PROVISIONES)
                    </td>
                    <td>
                        <CENTER><?php $Qrsa2=$arr5['6410010104']['DMBTR']; 
                            $n=number_format($Qrsa2, 0, '.', ',');
                            echo($n);
                        ?>  </CENTER>
                    </td>
                    <td>
                         <center><?php $veremose4=$Qrsa2*0.05; 
                            $n=number_format($veremose4, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremose5=$Qrsa2*0.85; 
                            $n=number_format($veremose5, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremose6=$Qrsa2*0.1; 
                            $n=number_format($veremose6, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $totala2=$veremose4+$veremose5+$veremose6; 
                                        $n=number_format($totala2, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variablea2=+$totala2-$Qrsa2; 
                                        $n=number_format($variablea2, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr><tr><td><center><?php echo $arr['6410010113']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>

                    <td>
                        PRIMA VACACIONAL
                    </td>
                    <td>
                        <CENTER><?php $Qrs56=$arr5['6410010113']['DMBTR']; 
                            $n=number_format($Qrs56, 0, '.', ',');
                            echo($n); ?> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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

                </tr><tr><td><center><?php echo $arr['6410010113']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        PRIMA VACACIONAL
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

                </tr><tr><td><center><?php echo $arr['6410010115']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        PROV VALES DE DESPENSA
                    </td>
                    <td>
                        <CENTER>  <?php $Qrsa3=$arr10['5450000100']['f0_'];$n76=number_format($Qrsa3, 0, '.', ',');
                            echo($n76); ?></CENTER>
                    </td>
                    <td>
                         <center><?php $veremose7=$Qrsa3*0.05; 
                            $n=number_format($veremose7, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremose8=$Qrsa3*0.85; 
                            $n=number_format($veremose8, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremose9=$Qrsa3*0.1; 
                            $n=number_format($veremose9, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $totala3=$veremose7+$veremose8+$veremose9; 
                                        $n=number_format($totala3, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variablea3=+$totala3-$Qrsa3; 
                                        $n=number_format($variablea3, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr><td><center><?php echo $arr['6410010107']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        SEGURO DE VIDA
                    </td>
                    <td>
                        <CENTER> <?php $Qrsa4=0; 
                            $n=number_format($Qrsa4, 0, '.', ',');
                            echo($n);
                        ?> </CENTER>
                    </td>
                    <td>
                         <center><?php $veremose10=$Qrsa4*0.05; 
                            $n=number_format($veremose10, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremose11=$Qrsa4*0.85; 
                            $n=number_format($veremose11, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremose12=$Qrsa4*0.1; 
                            $n=number_format($veremose12, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $totala4=$veremose10+$veremose11+$veremose12; 
                                        $n=number_format($totala4, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $variablea4=+$totala4-$Qrsa4; 
                                        $n=number_format($variablea4, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>

                 <tr><td></td><td></td>
                    <td>
                        <center><h5 align="right">total</h5></center>
                    </td>
                    <td>
                        <CENTER>    </CENTER>
                    </td>
                    <td>
                         <center><?php $resaltadoesulta=$veremose1+$veremose4+$veremose7+$veremose10;
                            $as52=number_format($resaltadoesulta, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resaltadoesulta1=$veremose2+$veremose5+$veremose8+$veremose11;
                            $as52=number_format($resaltadoesulta1, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resaltadoesulta2=$veremose3+$veremose6+$veremose9+$veremose12;
                            $as52=number_format($resaltadoesulta2, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resaltadoesulta3=$total1+$totala2+$totala3+$totala4;
                            $as52=number_format($resaltadoesulta3, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resaltadoesulta4=$variablea1+$variablea2+$variablea3+$variablea4;
                            $as52=number_format($resaltadoesulta4, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    

                </tr>
                
                <tr><td></td><td></td>
                    <td>
                         <h5 align="right">Comision 2.8%</h5>
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
                        <center> 0</center>
                    </td>
                    

                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center>  <h5 align="right">Base IVA</h5></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center><?php 
                            $as52=number_format($resaltadoesulta, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php 
                            $as52=number_format($resaltadoesulta1, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            $as52=number_format($resaltadoesulta2, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            $as52=number_format($resaltadoesulta3, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resaltadoesultado7=$resaltadoesulta4+$resaltado15;
                            $as52=number_format($resaltadoesulta4, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center> <h5 align="right">IVA 16%</h5></center>
                    </td>
                    <td>
                        <CENTER> </CENTER>
                    </td>
                    <td>
                         <center><?php $ivas=$resaltadoesulta*0.16;
                            $as52=number_format($ivas, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $ivas1=$resaltadoesulta1*0.16;
                            $as52=number_format($ivas1, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $ivas2=$resaltadoesulta2*0.16;
                            $as52=number_format($ivas2, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $ivas5=$resaltadoesulta3*0.16;
                            $as52=number_format($ivas5, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $ivas6=$resaltadoesulta4*0.16;
                            $as52=number_format($ivas6, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                </tr>
                 <tr><td></td><td></td>
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
                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center> <h5 align="right">total Gastos</h5></center>
                    </td>
                    <td> </td>
                    <td>
                         <center><?php $resaltadoesultado8=$resaltadoesulta+$ivas;
                            $as52=number_format($resaltadoesultado8, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resaltadoesultado9=$resaltadoesulta1+$ivas1;
                            $as52=number_format($resaltadoesultado9, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resaltadoesultado10=$resaltadoesulta2+$ivas2;
                            $as52=number_format($resaltadoesultado10, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resaltadoesultado13=$resaltadoesulta3+$ivas5;
                            $as52=number_format($resaltadoesultado13, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resaltadoesultado14=$resaltadoesulta4 +$ivas6;
                            $as52=number_format($resaltadoesultado14, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>

                </tr>
                
                <tr><td></td><td></td>
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
                </tr>

            </tbody>

        </table>
        
    </center>
    
</body>

                </div> 

            </div><!-- content -->

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
            variable resizefunc = [];
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