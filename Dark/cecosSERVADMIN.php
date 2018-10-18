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
    $rows = $queryResults->rows();
    foreach($rows as $row){
        $arr[$row['CUENTA']]=$row;
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
    $rows1 = $queryResults->rows();
    foreach($rows1 as $row1){
        
        

        
       $arr1[$row1['HKONT']]=$row1;
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
    $rows2 = $queryResults->rows();
    foreach($rows2 as $row2){
        
        

        
       $arr2[$row2['HKONT']]=$row2;
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
    $rows3 = $queryResults->rows();
    foreach($rows3 as $row3){
        
        

        
       $arr3[$row3['HKONT']]=$row3;
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
    $rows4 = $queryResults->rows();
    foreach($rows4 as $row4){
        
        

        
       $arr4[$row4['HKONT']]=$row4;
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
    $rows5 = $queryResults->rows();
    foreach($rows5 as $row5){
        
        

        
       $arr5[$row5['HKONT']]=$row5;
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
    $rows6 = $queryResults->rows();
    foreach($rows6 as $row6){
        
        

        
       $arr6[$row6['HKONT']]=$row6;
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
    $rows7 = $queryResults->rows();
    foreach($rows7 as $row7){
        
        

        
       $arr7[$row7['HKONT']]=$row7;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
        //print_r($arr6);
    }
    }

    $query11= <<<ENDSQL
select * FROM `multiva.PRIMA` ;
ENDSQL;

$queryJobConfig = $bigQuery->query($query11);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=0;
    $rows11 = $queryResults->rows();
    foreach($rows11 as $row11){
        
        

        
       $arr11[$row11['KOSTL']]=$row11;
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
                         <center>TOTAL </center> 
                    </td>
                    <td>
                        <center> VARIACION</center>
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
                         <center></br><?php $v1=$arr5['6410010102']['DMBTR']*0.05; 
                            $n=number_format($v1, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center></br><?php  $v2=$arr5['6410010102']['DMBTR']*0.85; 
                            $n=number_format($v2, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center></br> <?php  $v3=$arr5['6410010102']['DMBTR']*0.1; 
                            $n=number_format($v3, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER></br><?php $tot=$v1+$v2+$v3; 
                                        $n=number_format($tot, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center></br><?php $var=+$tot-$Qrs; 
                                        $n=number_format($var, 0, '.', ',');
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
                        <CENTER> <?php $Qrs1=$arr5['6410010104']['DMBTR']; 
                            $n=number_format($Qrs1, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                   <td>
                         <center><?php $v4=$arr5['6410010104']['DMBTR']*0.05; 
                            $n=number_format($v4, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v5=$arr5['6410010104']['DMBTR']*0.85; 
                            $n=number_format($v5, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v6=$arr5['6410010104']['DMBTR']*0.1; 
                            $n=number_format($v6, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot1=$v4+$v5+$v6; 
                                        $n=number_format($tot1, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var1=+$tot1-$Qrs1; 
                                        $n=number_format($var1, 0, '.', ',');
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
                         <center><?php $v7=$arr5['6410010111']['DMBTR']*0.05; 
                            $n=number_format($v7, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v8=$arr5['6410010111']['DMBTR']*0.85; 
                            $n=number_format($v8, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v9=$arr5['6410010111']['DMBTR']*0.1; 
                            $n=number_format($v9, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot2=$v7+$v8+$v9; 
                                        $n=number_format($tot2, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var2=+$tot2-$Qrs2; 
                                        $n=number_format($var2, 0, '.', ',');
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
                         <center><?php $v10=$arr5['6410010112']['DMBTR']*0.05; 
                            $n=number_format($v10, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v11=$arr5['6410010112']['DMBTR']*0.85; 
                            $n=number_format($v11, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v12=$arr5['6410010112']['DMBTR']*0.1; 
                            $n=number_format($v12, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot3=$v10+$v11+$v12; 
                                        $n=number_format($tot3, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var3=+$tot3-$Qrs3; 
                                        $n=number_format($var3, 0, '.', ',');
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
                         <center><?php $v13=$arr5['6410010115']['DMBTR']*0.05; 
                            $n=number_format($v13, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v14=$arr5['6410010115']['DMBTR']*0.85; 
                            $n=number_format($v14, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v15=$arr5['6410010115']['DMBTR']*0.1; 
                            $n=number_format($v15, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot4=$v13+$v14+$v15; 
                                        $n=number_format($tot4, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var4=+$tot4-$Qrs4; 
                                        $n=number_format($var4, 0, '.', ',');
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
                         <center><?php $v16=$Qrs6*0.05; 
                            $n=number_format($v16, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v17=$Qrs6*0.85; 
                            $n=number_format($v17, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v18=$Qrs6*0.1; 
                            $n=number_format($v18, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot6=$v16+$v17+$v18; 
                                        $n=number_format($tot6, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var6=+$tot6-$Qrs6; 
                                        $n=number_format($var6, 0, '.', ',');
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
                         <center><?php $v19=$arr5['6410010125']['DMBTR']*0.05; 
                            $n=number_format($v19, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v20=$arr5['6410010125']['DMBTR']*0.85; 
                            $n=number_format($v20, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v21=$arr5['6410010125']['DMBTR']*0.1; 
                            $n=number_format($v21, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot7=$v19+$v20+$v21; 
                                        $n=number_format($tot7, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var7=+$tot7-$Qrs7; 
                                        $n=number_format($var7, 0, '.', ',');
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
                        <CENTER> <?php $Qrs8=$arr5['6410010104']['DMBTR']; 
                            $n=number_format($Qrs8, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                   
                    <td>
                         <center><?php $v22=$arr5['6410010104']['DMBTR']*0.05; 
                            $n=number_format($v22, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v23=$arr5['6410010104']['DMBTR']*0.85; 
                            $n=number_format($v23, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v24=$arr5['6410010104']['DMBTR']*0.1; 
                            $n=number_format($v24, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot8=$v22+$v23+$v24; 
                                        $n=number_format($tot8, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var8=+$tot8-$Qrs8; 
                                        $n=number_format($var8, 0, '.', ',');
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
                        <CENTER><?php $Qrs9=$arr5['6410010103']['DMBTR']; 
                            $n=number_format($Qrs9, 0, '.', ',');
                            echo($n);
                            ?>
                         </CENTER>
                    </td>
                    <td>
                         <center><?php $v25=$arr5['6410010103']['DMBTR']*0.05; 
                            $n=number_format($v25, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v26=$arr5['6410010103']['DMBTR']*0.85; 
                            $n=number_format($v26, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v27=$arr5['6410010103']['DMBTR']*0.1; 
                            $n=number_format($v27, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot9=$v25+$v26+$v27; 
                                        $n=number_format($tot9, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var9=+$tot9-$Qrs9; 
                                        $n=number_format($var9, 0, '.', ',');
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
                         <center><?php $v28=$Qrs11*0.05; 
                            $n=number_format($v28, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v29=$Qrs11*0.85; 
                            $n=number_format($v29, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v30=$Qrs11*0.1; 
                            $n=number_format($v30, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot11=$v28+$v29+$v30; 
                                        $n=number_format($tot11, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var11=+$tot11-$Qrs11; 
                                        $n=number_format($var11, 0, '.', ',');
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
                        <CENTER> <?php $r=$Qrs+$Qrs1+$Qrs2+$Qrs3+$Qrs4+$Qrs5+$Qrs6+$Qrs7+$Qrs8+$Qrs9+$Qrs10+$Qrs11+$Qrs12+$Qrs13+$Qrs14+$Qrs15+$Qrs16+$Qrs17+$Qrs18;
                        $as6=number_format($r, 0, '.', ',');
                            echo($as6);?></CENTER>
                    </td>
                    <td>
                         <center><?php $r1=$v1+$v4+$v7+$v10+$v13+$v16+$v19+$v22+$v25+$v28;
                        $as6=number_format($r1, 0, '.', ',');
                            echo($as6);?> </center> 
                    </td>
                    <td>
                        <center><?php $r2=$v2+$v5+$v8+$v11+$v14+$v17+$v20+$v23+$v26+$v29;
                        $as6=number_format($r2, 0, '.', ',');
                            echo($as6);?> </center>
                    </td>
                    <td>
                        <center> <?php $r3=$v3+$v6+$v9+$v12+$v15+$v18+$v21+$v24+$v27+$v30;
                        $as6=number_format($r3, 0, '.', ',');
                            echo($as6);?></center>
                    </td>
                    
                    <td>
                        <center><?php $r6=$tot+$tot1+$tot2+$tot3+$tot4+$tot6+$tot7+$tot8+$tot9+$tot11;
                        $as6=number_format($r6, 0, '.', ',');
                            echo($as6);?> </center>
                    </td>
                    <td>
                       <center><?php $r7=$var+$var1+$var2+$var3+$var4+$var6+$var7+$var8+$var9+$var11;
                        $as6=number_format($r7, 0, '.', ',');
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
                         <center><?php $v31=$Qrs19*0.05; 
                            $n=number_format($v31, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v32=$Qrs19*0.85; 
                            $n=number_format($v32, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v33=$Qrs19*0.1; 
                            $n=number_format($v33, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot19=$v31+$v32+$v33; 
                                        $n=number_format($tot19, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var19=+$tot19-$Qrs19; 
                                        $n=number_format($var19, 0, '.', ',');
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
                         <center><?php $v34=$Qrs20*0.05; 
                            $n=number_format($v34, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v35=$Qrs20*0.85; 
                            $n=number_format($v35, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v36=$Qrs20*0.1; 
                            $n=number_format($v30, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot20=$v34+$v35+$v36; 
                                        $n=number_format($tot20, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var20=+$tot20-$Qrs20; 
                                        $n=number_format($var20, 0, '.', ',');
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
                         <center><?php $v37=$Qrs56*0.05; 
                            $n=number_format($v37, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v38=$Qrs56*0.85; 
                            $n=number_format($v38, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v39=$Qrs56*0.1; 
                            $n=number_format($v39, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot56=$v37+$v38+$v39; 
                                        $n=number_format($tot11, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var56=+$tot56-$Qrs56; 
                                        $n=number_format($var56, 0, '.', ',');
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
                         <center><?php $v40=$Qrs21*0.05; 
                            $n=number_format($v40, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v41=$Qrs21*0.85; 
                            $n=number_format($v41, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v42=$Qrs21*0.1; 
                            $n=number_format($v42, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot21=$v40+$v41+$v42; 
                                        $n=number_format($tot21, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var21=+$tot21-$Qrs21; 
                                        $n=number_format($var21, 0, '.', ',');
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
                         <center><?php $v43=$Qrs22*0.05; 
                            $n=number_format($v43, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v44=$Qrs22*0.85; 
                            $n=number_format($v44, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v45=$Qrs22*0.1; 
                            $n=number_format($v45, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot22=$v43+$v44+$v45; 
                                        $n=number_format($tot22, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var22=+$tot22-$Qrs22; 
                                        $n=number_format($var22, 0, '.', ',');
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
                         <center><?php $v46=$Qrs23*0.05; 
                            $n=number_format($v46, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v47=$Qrs23*0.85; 
                            $n=number_format($v47, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v48=$Qrs23*0.1; 
                            $n=number_format($v48, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot23=$v46+$v47+$v48; 
                                        $n=number_format($tot23, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var23=+$tot23-$Qrs23; 
                                        $n=number_format($var23, 0, '.', ',');
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
                         <center><?php $v49=$Qrs24*0.05; 
                            $n=number_format($v49, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v50=$Qrs24*0.85; 
                            $n=number_format($v50, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v51=$Qrs24*0.1; 
                            $n=number_format($v51, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot24=$v49+$v50+$v51; 
                                        $n=number_format($tot24, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var24=+$tot24-$Qrs24; 
                                        $n=number_format($var24, 0, '.', ',');
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
                         <center><?php $v52=$arr5['6408020100']['DMBTR']*0.05; 
                            $n=number_format($v52, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v53=$arr5['6408020100']['DMBTR']*0.85; 
                            $n=number_format($v53, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v54=$arr5['6408020100']['DMBTR']*0.1; 
                            $n=number_format($v54, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot25=$v52+$v53+$v54; 
                                        $n=number_format($tot25, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var25=+$tot25-$Qrs25; 
                                        $n=number_format($var25, 0, '.', ',');
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
                         <center><?php $v55=$Qrs26*0.05; 
                            $n=number_format($v55, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v56=$Qrs26*0.85; 
                            $n=number_format($v56, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v57=$Qrs26*0.1; 
                            $n=number_format($v57, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot26=$v55+$v56+$v57; 
                                        $n=number_format($tot26, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var26=+$tot26-$Qrs26; 
                                        $n=number_format($var26, 0, '.', ',');
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
                         <center><?php $v58=$Qrs27*0.05; 
                            $n=number_format($v58, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v59=$Qrs27*0.85; 
                            $n=number_format($v59, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v60=$Qrs27*0.1; 
                            $n=number_format($v60, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot27=$v58+$v59+$v60; 
                                        $n=number_format($tot11, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var27=+$tot27-$Qrs27; 
                                        $n=number_format($var27, 0, '.', ',');
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
                         <center><?php $v61=$Qrs29*0.05; 
                            $n=number_format($v61, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v62=$Qrs29*0.85; 
                            $n=number_format($v62, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v63=$Qrs29*0.1; 
                            $n=number_format($v63, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot29=$v61+$v62+$v63; 
                                        $n=number_format($tot29, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var29=+$tot29-$Qrs29; 
                                        $n=number_format($var29, 0, '.', ',');
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
                         <center><?php $v64=$Qrs30*0.05; 
                            $n=number_format($v64, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v65=$Qrs30*0.85; 
                            $n=number_format($v65, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v66=$Qrs30*0.1; 
                            $n=number_format($v66, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot30=$v64+$v65+$v66; 
                                        $n=number_format($tot30, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var30=+$tot30-$Qrs30; 
                                        $n=number_format($var30, 0, '.', ',');
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
                         <center><?php $v67=$Qrs31*0.05; 
                            $n=number_format($v67, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v68=$Qrs31*0.85; 
                            $n=number_format($v68, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v69=$Qrs31*0.1; 
                            $n=number_format($v69, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot31=$v67+$v68+$v69; 
                                        $n=number_format($tot31, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var31=+$tot31-$Qrs31; 
                                        $n=number_format($var31, 0, '.', ',');
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
                         <center><?php $v70=$Qrs32*0.05; 
                            $n=number_format($v70, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v71=$Qrs32*0.85; 
                            $n=number_format($v71, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v72=$Qrs32*0.1; 
                            $n=number_format($v72, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot32=$v70+$v71+$v72; 
                                        $n=number_format($tot32, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var32=+$tot32-$Qrs32; 
                                        $n=number_format($var32, 0, '.', ',');
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
                         <center><?php $v73=$Qrs33*0.05; 
                            $n=number_format($v73, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v74=$Qrs33*0.85; 
                            $n=number_format($v74, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v75=$Qrs33*0.1; 
                            $n=number_format($v75, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot33=$v73+$v74+$v75; 
                                        $n=number_format($tot33, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var33=+$tot33-$Qrs33; 
                                        $n=number_format($var33, 0, '.', ',');
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
                         <center><?php $v76=$Qrs34*0.05; 
                            $n=number_format($v76, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v77=$Qrs34*0.85; 
                            $n=number_format($v77, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v78=$Qrs34*0.1; 
                            $n=number_format($v78, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot34=$v76+$v77+$v78; 
                                        $n=number_format($tot34, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var34=+$tot34-$Qrs34; 
                                        $n=number_format($var34, 0, '.', ',');
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
                         <center><?php $v79=$Qrs35*0.05; 
                            $n=number_format($v79, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v80=$Qrs35*0.85; 
                            $n=number_format($v80, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v81=$Qrs35*0.1; 
                            $n=number_format($v81, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot35=$v79+$v80+$v81; 
                                        $n=number_format($tot35, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var35=+$tot35-$Qrs35; 
                                        $n=number_format($var35, 0, '.', ',');
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
                         <center><?php $v82=$Qrs36*0.05; 
                            $n=number_format($v82, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v83=$Qrs36*0.85; 
                            $n=number_format($v83, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v84=$Qrs36*0.1; 
                            $n=number_format($v84, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot36=$v82+$v83+$v84; 
                                        $n=number_format($tot33, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var36=+$tot36-$Qrs36; 
                                        $n=number_format($var36, 0, '.', ',');
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
                         <center><?php $v85=$Qrs37*0.05; 
                            $n=number_format($v85, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v86=$Qrs37*0.85; 
                            $n=number_format($v86, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v87=$Qrs37*0.1; 
                            $n=number_format($v87, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot37=$v85+$v86+$v87; 
                                        $n=number_format($tot37, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var37=+$tot37-$Qrs37; 
                                        $n=number_format($var37, 0, '.', ',');
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
                         <center><?php $v88=$arr5['6491330000']['DMBTR']*0.05; 
                            $n=number_format($v88, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v89=$arr5['6491330000']['DMBTR']*0.85; 
                            $n=number_format($v89, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v90=$arr5['6491330000']['DMBTR']*0.1; 
                            $n=number_format($v90, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot38=$v88+$v89+$v90; 
                                        $n=number_format($tot38, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var38=+$tot38-$Qrs38; 
                                        $n=number_format($var38, 0, '.', ',');
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
                         <center><?php $v91=$Qrs39*0.05; 
                            $n=number_format($v91, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v92=$Qrs39*0.85; 
                            $n=number_format($v92, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v93=$Qrs39*0.1; 
                            $n=number_format($v93, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot39=$v91+$v92+$v93; 
                                        $n=number_format($tot39, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var39=+$tot39-$Qrs39; 
                                        $n=number_format($var39, 0, '.', ',');
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
                         <center><?php $v94=$Qrs40*0.05; 
                            $n=number_format($v94, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v95=$Qrs40*0.85; 
                            $n=number_format($v95, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v96=$Qrs40*0.1; 
                            $n=number_format($v96, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot40=$v94+$v95+$v96; 
                                        $n=number_format($tot40, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var40=+$tot40-$Qrs40; 
                                        $n=number_format($var40, 0, '.', ',');
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
                         <center><?php $v97=$Qrs41*0.05; 
                            $n=number_format($v97, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v98=$Qrs41*0.85; 
                            $n=number_format($v98, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v99=$Qrs41*0.1; 
                            $n=number_format($v99, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot41=$v97+$v98+$v99; 
                                        $n=number_format($tot41, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var41=+$tot41-$Qrs41; 
                                        $n=number_format($var41, 0, '.', ',');
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
                         <center><?php $v100=$Qrs42*0.05; 
                            $n=number_format($v100, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v101=$Qrs42*0.85; 
                            $n=number_format($v101, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v102=$Qrs42*0.1; 
                            $n=number_format($v102, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot42=$v100+$v101+$v102; 
                                        $n=number_format($tot42, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var42=+$tot42-$Qrs42; 
                                        $n=number_format($var42, 0, '.', ',');
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
                         <center><?php $v103=$Qrs43*0.05; 
                            $n=number_format($v103, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v104=$Qrs43*0.85; 
                            $n=number_format($v104, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v105=$Qrs43*0.1; 
                            $n=number_format($v105, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot43=$v103+$v104+$v105; 
                                        $n=number_format($tot43, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var43=+$tot43-$Qrs43; 
                                        $n=number_format($var43, 0, '.', ',');
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
                         <center><?php $v106=$Qrs44*0.05; 
                            $n=number_format($v106, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v107=$Qrs44*0.85; 
                            $n=number_format($v107, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v108=$Qrs44*0.1; 
                            $n=number_format($v108, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot44=$v106+$v107+$v108; 
                                        $n=number_format($tot44, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var44=+$tot44-$Qrs44; 
                                        $n=number_format($var44, 0, '.', ',');
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
                         <center><?php $v109=$Qrs45*0.05; 
                            $n=number_format($v109, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v110=$Qrs45*0.85; 
                            $n=number_format($v110, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v111=$Qrs45*0.1; 
                            $n=number_format($v111, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot45=$v109+$v110+$v111; 
                                        $n=number_format($tot45, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var45=+$tot45-$Qrs45; 
                                        $n=number_format($var45, 0, '.', ',');
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
                         <center><?php $v112=$Qrs46*0.05; 
                            $n=number_format($v112, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v113=$Qrs46*0.85; 
                            $n=number_format($v113, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v114=$Qrs46*0.1; 
                            $n=number_format($v114, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot46=$v112+$v113+$v114; 
                                        $n=number_format($tot46, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var46=+$tot46-$Qrs46; 
                                        $n=number_format($var46, 0, '.', ',');
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
                         <center><?php $v115=$arr5['6491380100']['DMBTR']*0.05; 
                            $n=number_format($v115, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v116=$arr5['6491380100']['DMBTR']*0.85; 
                            $n=number_format($v116, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v117=$arr5['6491380100']['DMBTR']*0.1; 
                            $n=number_format($v117, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot47=$v115+$v116+$v117; 
                                        $n=number_format($tot47, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var47=+$tot47-$Qrs47; 
                                        $n=number_format($var47, 0, '.', ',');
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
                         <center><?php $v118=$Qrs48*0.05; 
                            $n=number_format($v118, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v119=$Qrs48*0.85; 
                            $n=number_format($v119, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v120=$Qrs48*0.1; 
                            $n=number_format($v120, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot48=$v118+$v119+$v120; 
                                        $n=number_format($tot48, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var48=+$tot48-$Qrs48; 
                                        $n=number_format($var48, 0, '.', ',');
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
                         <center><?php $v121=$Qrs49*0.05; 
                            $n=number_format($v121, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v122=$Qrs49*0.85; 
                            $n=number_format($v122, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v123=$Qrs49*0.1; 
                            $n=number_format($v123, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot49=$v121+$v122+$v123; 
                                        $n=number_format($tot49, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var49=+$tot49-$Qrs49; 
                                        $n=number_format($var49, 0, '.', ',');
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
                         <center><?php $v124=$Qrs50*0.05; 
                            $n=number_format($v124, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v125=$Qrs50*0.85; 
                            $n=number_format($v125, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v126=$Qrs50*0.1; 
                            $n=number_format($v126, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot50=$v124+$v125+$v126; 
                                        $n=number_format($tot50, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var50=+$tot50-$Qrs50; 
                                        $n=number_format($var50, 0, '.', ',');
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
                         <center><?php $v127=$Qrs51*0.05; 
                            $n=number_format($v127, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v128=$Qrs51*0.85; 
                            $n=number_format($v128, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v129=$Qrs51*0.1; 
                            $n=number_format($v129, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot51=$v127+$v128+$v129; 
                                        $n=number_format($tot51, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var51=+$tot51-$Qrs51; 
                                        $n=number_format($var51, 0, '.', ',');
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
                         <center><?php $v130=$Qrs52*0.05; 
                            $n=number_format($v130, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v131=$Qrs52*0.85; 
                            $n=number_format($v131, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v132=$Qrs52*0.1; 
                            $n=number_format($v132, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot52=$v130+$v131+$v132; 
                                        $n=number_format($tot49, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var52=+$tot52-$Qrs52; 
                                        $n=number_format($var52, 0, '.', ',');
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
                         <center><?php $v133=$Qrs53*0.05; 
                            $n=number_format($v133, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v134=$Qrs53*0.85; 
                            $n=number_format($v134, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v135=$Qrs53*0.1; 
                            $n=number_format($v135, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot53=$v133+$v134+$v135; 
                                        $n=number_format($tot53, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var53=+$tot53-$Qrs53; 
                                        $n=number_format($var53, 0, '.', ',');
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
                         <center><?php $v136=$Qrs54*0.05; 
                            $n=number_format($v136, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v137=$Qrs54*0.85; 
                            $n=number_format($v137, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v138=$Qrs54*0.1; 
                            $n=number_format($v138, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot54=$v136+$v137+$v138; 
                                        $n=number_format($tot54, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var54=+$tot54-$Qrs54; 
                                        $n=number_format($var54, 0, '.', ',');
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
                         <center><?php $v139=$Qrs55*0.05; 
                            $n=number_format($v139, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v140=$Qrs55*0.85; 
                            $n=number_format($v140, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v141=$Qrs55*0.1; 
                            $n=number_format($v141, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot55=$v139+$v140+$v141; 
                                        $n=number_format($tot55, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var55=+$tot55-$Qrs55; 
                                        $n=number_format($var55, 0, '.', ',');
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
                        <CENTER> <?php $r8=$Qrs+$Qrs19+$Qrs20+$Qrs21+$Qrs22+$Qrs23+$Qrs24+$Qrs25+$Qrs26+$Qrs27+$Qrs28+$Qrs29+$Qrs30+$Qrs31+$Qrs32+$Qrs33+$Qrs34+$Qrs35+$Qrs36+$Qrs37+$Qrs38+$Qrs39+$Qrs40+$Qrs41+$Qrs42+$Qrs43+$Qrs44+$Qrs45+$Qrs46+$Qrs47+$Qrs48+$Qrs49+$Qrs50+$Qrs51+$Qrs52+$Qrs53+$Qrs54+$Qrs55+$Qrs56;
                            $as46=number_format($r8, 0, '.', ',');
                            echo($as46);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $r9=$v31+$v34+$v37+$v40+$v43+$v46+$v49+$v52+$v55+$v58+$v61+$v64+$v67+$v70+$v73+$v76+$v79+$v82+$v85+$v88+$v91+$v94+$v97+$v100+$v103+$v106+$v109+$v112+$v115+$v118+$v121+$v124+$v127+$v130+$v133+$v136+$v139;
                            $as46=number_format($r9, 0, '.', ',');
                            echo($as46);
                        ?></center> 
                    </td>
                    <td>
                        <center><?php $r10=$v32+$v35+$v38+$v41+$v44+$v47+$v50+$v53+$v56+$v59+$v62+$v65+$v68+$v71+$v74+$v77+$v80+$v83+$v86+$v89+$v92+$v95+$v98+$v101+$v104+$v107+$v110+$v113+$v116+$v119+$v122+$v125+$v128+$v131+$v134+$v137+$v140;
                            $as46=number_format($r10, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php $r11=$v33+$v36+$v39+$v42+$v45+$v48+$v51+$v54+$v57+$v60+$v63+$v66+$v69+$v72+$v75+$v78+$v81+$v84+$v87+$v90+$v93+$v96+$v99+$v102+$v105+$v108+$v111+$v114+$v117+$v120+$v123+$v126+$v129+$v132+$v135+$v138+$v141;
                            $as46=number_format($r11, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $r14=$tot+$tot1+$tot2+$tot3+$tot4+$tot6+$tot7+$tot8+$tot9+$tot11+$tot19+$tot20+$tot56+$tot21+$tot22+$tot23+$tot24+$tot25+$tot26+$tot27+$tot42+$tot29+$tot30+$tot31+$tot32+$tot33+$tot34+$tot35+$tot36+$tot37+$tot38+$tot39+$tot40+$tot41+$tot43+$tot44+$tot45+$tot46+$tot47+$tot48+$tot49+$tot50+$tot51+$tot52+$tot53+$tot54+$tot55;
                            $as46=number_format($r14, 0, '.', ',');
                            echo($as46);
                        ?> </center>
                    </td>
                    <td>
                       <center> <?php $r15=$var+$var1+$var2+$var3+$var4+$var6+$var7+$var8+$var9+$var11+$var19+$var20+$var56+$var21+$var22+$var23+$var24+$var25+$var26+$var27+$var42+$var29+$var30+$var31+$var32+$var33+$var34+$var35+$var36+$var37+$var38+$var39+$var40+$var41+$var43+$var44+$var45+$var46+$var47+$var48+$var49+$var50+$var51+$var52+$var53+$var54+$var55;
                            $as46=number_format($r15, 0, '.', ',');
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
                        <center><h5 align="right">TOTAL</h5></center>
                    </td>
                    <td>
                        <CENTER> <?php $resultado=$r+$r8;
                            $as52=number_format($resultado, 0, '.', ',');
                            echo($as52);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $resultado1=$r1+$r9;
                            $as52=number_format($resultado1, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resultado2=$r2+$r10;
                            $as52=number_format($resultado2, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resultado3=$r3+$r11;
                            $as52=number_format($resultado3, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado6=$r6+$r14;
                            $as52=number_format($resultado6, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resultado7=$r7+$r15;
                            $as52=number_format($resultado7, 0, '.', ',');
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
                         <center><?php $resultado1=$r1+$r9;
                            $as52=number_format($resultado1, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resultado2=$r2+$r10;
                            $as52=number_format($resultado2, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resultado3=$r3+$r11;
                            $as52=number_format($resultado3, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado6=$r6+$r14;
                            $as52=number_format($resultado6, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resultado7=$r7+$r15;
                            $as52=number_format($resultado7, 0, '.', ',');
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
                         <center><?php $iva=$resultado1*0.16;
                            $as52=number_format($iva, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $iva1=$resultado2*0.16;
                            $as52=number_format($iva1, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $iva2=$resultado3*0.16;
                            $as52=number_format($iva2, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $iva5=$resultado6*0.16;
                            $as52=number_format($iva5, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $iva6=$resultado7*0.16;
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
                        <center> <h5 align="right">Total Gastos</h5></center>
                    </td>
                    <td> </td>
                    <td>
                         <center><?php $resultado8=$resultado1+$iva;
                            $as52=number_format($resultado8, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resultado9=$resultado2+$iva1;
                            $as52=number_format($resultado9, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resultado10=$resultado3+$iva2;
                            $as52=number_format($resultado10, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado13=$resultado6+$iva5;
                            $as52=number_format($resultado13, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resultado14=$resultado7+$iva6;
                            $as52=number_format($resultado14, 0, '.', ',');
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
                        <CENTER><?php $Qrs54=$arr['6410010103']['ABRIL']; 
                            $n=number_format($Qrs54, 0, '.', ',');
                            echo($n);
                            ?> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <CENTER><?php $Qrs55=$arr['6410010104']['ABRIL']; 
                            $n=number_format($Qrs55, 0, '.', ',');
                            echo($n);
                        ?>  </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <CENTER><?php $Qrs56=$arr['6410010113']['ABRIL']; 
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
                        <CENTER>  <?php $Qrs57=$arr['6410010115']['ABRIL'];$n76=number_format($Qrs57, 0, '.', ',');
                            echo($n76); ?></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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

                </tr><tr><td><center><?php echo $arr['6410010118']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        UNIFORMES
                    </td>
                    <td>
                        <CENTER> <?php $Qrs58=$arr['6410010118']['ABRIL']; 
                            $n=number_format($Qrs58, 0, '.', ',');
                            echo($n);
                        ?> </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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

                </tr><tr><td><center><?php echo $arr['6410010121']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>

                    <td>
                        FIESTA FIN DE ANO
                    </td>
                    <td>
                        <CENTER><?php $Qrs59=$arr['6410010121']['ABRIL']; 
                            $n=number_format($Qrs59, 0, '.', ',');
                            echo($n);
                        ?>  </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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

                </tr><tr><td><center><?php echo $arr['6410010122']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        GRATIFICACION
                    </td>
                    <td>
                        <CENTER><?php $Qrs60=$arr['6410010122']['ABRIL']; 
                            $n=number_format($Qrs60, 0, '.', ',');
                            echo($n);
                        ?>  </CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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

                </tr><tr><td><center><?php echo $arr['6491240000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>        
                    <td>
                        TELEFONOS
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
<tr><td><center>6491020000 
                        </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        IMPUESTOS
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
                        <center><h5 align="right">TOTAL</h5></center>
                    </td>
                    <td>
                        <CENTER>    </CENTER>
                    </td>
                    <td>
                         <center><?php $resultado1=$r1+$r9;
                            $as52=number_format($resultado1, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resultado2=$r2+$r10;
                            $as52=number_format($resultado2, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resultado3=$r3+$r11;
                            $as52=number_format($resultado3, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado6=$r6+$r14;
                            $as52=number_format($resultado6, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resultado7=$r7+$r15;
                            $as52=number_format($resultado7, 0, '.', ',');
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
                         <center><?php $resultado1=$r1+$r9;
                            $as52=number_format($resultado1, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resultado2=$r2+$r10;
                            $as52=number_format($resultado2, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resultado3=$r3+$r11;
                            $as52=number_format($resultado3, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado6=$r6+$r14;
                            $as52=number_format($resultado6, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resultado7=$r7+$r15;
                            $as52=number_format($resultado7, 0, '.', ',');
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
                         <center><?php $iva=$resultado1*0.16;
                            $as52=number_format($iva, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $iva1=$resultado2*0.16;
                            $as52=number_format($iva1, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $iva2=$resultado3*0.16;
                            $as52=number_format($iva2, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $iva5=$resultado6*0.16;
                            $as52=number_format($iva5, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $iva6=$resultado7*0.16;
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
                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center> <h5 align="right">Total Gastos</h5></center>
                    </td>
                    <td> </td>
                    <td>
                         <center><?php $resultado8=$resultado1+$iva;
                            $as52=number_format($resultado8, 0, '.', ',');
                            echo($as52);
                        ?> </center> 
                    </td>
                    <td>
                        <center><?php $resultado9=$resultado2+$iva1;
                            $as52=number_format($resultado9, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $resultado10=$resultado3+$iva2;
                            $as52=number_format($resultado10, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado13=$resultado6+$iva5;
                            $as52=number_format($resultado13, 0, '.', ',');
                            echo($as52);
                        ?> </center>
                    </td>
                    <td>
                       <center><?php $resultado14=$resultado7+$iva6;
                            $as52=number_format($resultado14, 0, '.', ',');
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