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
<!--


<style type="text/css">

  .dropbtn {
    background-color: #022535;
    color: white;
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
    background-color: #f9f9f9;
    min-width: 160px;
    /*box-shadow: 0px 6px 10px 0px rgba(0,0,0,0.2);*/
    z-index: 1;
}


.dropdown-content a {
    color: black;
    padding: 12px 16px;*/
    text-decoration: none;
    display: block;
}


.dropdown-content a:hover {
    background-color: #f1f1f1
    }


.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #065b82;
    
}
P.mipar {
    text-align: right;
}

table{
    border-collapse: collapse;
}
.tab{

}
</style>-->
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



<?php

require __DIR__ . '/../vendor/autoload.php';
use GuzzleHttp\HTTP\Client;
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
select * from `multiva.SERVICIOSadministrativos` WHERE PERTENECE="SERVICIOS";
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
select * from `multiva.SERVICIOSadministrativos` WHERE PERTENECE="OPERADORA";
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
select * from `multiva.SERVICIOSadministrativos` WHERE PERTENECE="BANCO";
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
select * from `multiva.SERVICIOSadministrativos` WHERE PERTENECE="CASA";
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
select * from `multiva.SERVICIOSadministrativos` WHERE PERTENECE="GFM";
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
        echo $fec[0]." de ".$mes." de ".$fec[2];
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
            Integración de Gastos por Unidad de Negocio al <?php fecha($fecha_actual); ?>
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

                    <!--<td>
                        <?php/* echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"; */?>
                    </td>-->

                </tr>

                <tr><td></td><td></td>
                    <td>
                        <center></center>
                    </td>
                    
                    <td>
                        <center></center>
                    </td>
                    <td>
                       <center>1%</center>
                    </td>
                    <td>
                        <center>86%</center>
                    </td>
                    <td>
                        <center>1%</center>
                    </td>
                    <td>
                        <center>9%</center>
                    </td>
                    <td>
                        <center>3%</center>
                    </td>

                    <td>
                      <center> </center>
                    </td>
                    <td></td>
                    <td>
                       <center>5%</center>
                    </td>
                    <td>
                        <center>85%</center>
                    </td>
                    <td>
                        <center>10%</center>
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
                        <center>MSC</center>
                    </td>
                    
                    <td>
                        <CENTER>CASA </CENTER>
                    </td>
                    <td>
                        <CENTER>GFM</CENTER>
                    </td>
                    <td>
                         <center>TOTAL </center> 
                    </td>
                    <td>
                        <center> VARIACION</center>
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
                    <td><center>TOTAL</center>
                    </td> 
                    <td>
                        <center> VARIACION</center>
                    </td>             
                </tr>
                <tr>
                    <td></td><td></td>
                    <td>
                        ___________________________________________________
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
                        ______________
                    </td>
                    
                    <td>
                        <?php echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"; ?>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
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
                    </td><td>
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
                     <td>
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
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                     <td>
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
                       </br> SUELDOS A FUNCIONARIOS Y EMPLEADOS
  
                    </td>
                    <td>
                        <CENTER></br><?php $Qrs=$arr['6410010102']['ABRIL']; 
                            $n=number_format($Qrs, 0, '.', ',');
                            echo($n);
                        ?> 
                    </CENTER>
                    </td>
                    <td>
                         <center></br><?php $v1=$arr2['6410010102']['DMBTR']; 
                            $n=number_format($v1, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center></br><?php  $v2=$arr3['6410010102']['DMBTR']; 
                            $n=number_format($v2, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center></br> <?php  $v3=$arr1['6410010102']['DMBTR']; 
                            $n=number_format($v3, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center></br><?php  $v4=$arr4['6410010102']['DMBTR']; 
                            $n=number_format($v4, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center></br><?php  $v5=$arr5['6410010102']['DMBTR']; 
                            $n=number_format($v5, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER></br><?php $tot=$v1+$v2+$v3+$v4+$v5; 
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
                    <td>
                         <center></br><?php $veremos1=$v5*0.05; 
                            $n=number_format($veremos1, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center></br><?php  $veremos2=$v5*0.85; 
                            $n=number_format($veremos2, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center></br> <?php  $veremos3=$v5*0.1; 
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
                         <center></br><?php $variable=+$total-$v5; 
                                        $n=number_format($variable, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>

                <tr>

                    
                        <td>
 BONO 

                    </td>
                    <td>
                        <CENTER> <?php $Qrs1=$arr['6410010104']['ABRIL']; 
                            $n=number_format($Qrs1, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                   <td>
                         <center><?php $v6=0; 
                            $n=number_format($v6, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v7=$arr6['6410010104']['DMBTR']; 
                            $n=number_format($v7, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v8=$arr1['6410010104']['DMBTR']; 
                            $n=number_format($v8, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v9=0; 
                            $n=number_format($v9, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v10=0; 
                            $n=number_format($v10, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot1=$v6+$v7+$v8+$v9+$v10; 
                                        $n=number_format($tot1, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var1=$tot1-$Qrs1; 
                                        $n=number_format($tot1, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos4=$v10*0.05; 
                            $n=number_format($veremos4, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos5=$v10*0.85; 
                            $n=number_format($veremos5, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos6=$v10*0.1; 
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
                         <center><?php $variable1=+$total1-$v10; 
                                        $n=number_format($variable1, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

<tr>
    
                    <td>
                        
CUOTAS AL I.M.S.S.

                    </td>
                    <td>
                        <CENTER><?php  $Qrs2=$arr['6410010111']['ABRIL']; 
                            $n=number_format($Qrs2, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                     
                     <td>
                         <center><?php $v11=$arr2['6410010111']['DMBTR']; 
                            $n=number_format($v11, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v12=$arr3['6410010111']['DMBTR']; 
                            $n=number_format($v12, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v13=$arr1['6410010111']['DMBTR']; 
                            $n=number_format($v13, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v14=$arr4['6410010111']['DMBTR']; 
                            $n=number_format($v14, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v15=$arr5['6410010111']['DMBTR']; 
                            $n=number_format($v15, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot2=$v11+$v12+$v13+$v14+$v15; 
                                        $n=number_format($tot2, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var2=+$tot2-$Qrs2; 
                                        $n=number_format($var, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos7=$v15*0.05; 
                            $n=number_format($veremos7, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos8=$v15*0.85; 
                            $n=number_format($veremos8, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos9=$v15*0.1; 
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
                         <center><?php $variable2=+$total2-$v15; 
                                        $n=number_format($variable2, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr> 

                       <tr>
                        
                    <td>
                       
 APORTACIPONES AL INFONAVIT

                    </td>
                    <td>
                        <CENTER><?php $Qrs3=$arr['6410010112']['ABRIL']; 
                            $n55=number_format($Qrs3, 0, '.', ',');
                            echo($n55); 
                         ?> 
</CENTER>
                    <td>
                         <center><?php $v16=$arr2['6410010112']['DMBTR']; 
                            $n=number_format($v16, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v17=$arr3['6410010112']['DMBTR']; 
                            $n=number_format($v17, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v18=$arr1['6410010112']['DMBTR']; 
                            $n=number_format($v18, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v19=$arr4['6410010112']['DMBTR']; 
                            $n=number_format($v19, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v20=$arr5['6410010112']['DMBTR']; 
                            $n=number_format($v20, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot3=$v16+$v17+$v18+$v19+$v20; 
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
                    <td>
                         <center><?php $veremos10=$v20*0.05; 
                            $n=number_format($veremos10, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos11=$v20*0.85; 
                            $n=number_format($veremos11, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos12=$v20*0.1; 
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
                         <center><?php $variable3=+$total3-$v20; 
                                        $n=number_format($variable3, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
<tr>

    
                    <td>

 VALES DE DESPENSA
                    </td>
                    <td>
                        <CENTER> <?php $Qrs4=$arr['6410010115']['ABRIL'];$n76=number_format($Qrs4, 0, '.', ',');
                            echo($n76); ?>
 </CENTER>
                    </td>
                    <td>
                         <center><?php $v21=$arr2['6410010115']['DMBTR']; 
                            $n=number_format($v21, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v22=$arr3['6410010115']['DMBTR']; 
                            $n=number_format($v22, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v23=$arr1['6410010115']['DMBTR']; 
                            $n=number_format($v23, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v24=$arr4['6410010115']['DMBTR']; 
                            $n=number_format($v24, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v25=$arr5['6410010115']['DMBTR']; 
                            $n=number_format($v25, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot4=$v21+$v22+$v23+$v24+$v25; 
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
                    <td>
                         <center><?php $veremos13=$v25*0.05; 
                            $n=number_format($veremos13, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos14=$v25*0.85; 
                            $n=number_format($veremos14, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos15=$v25*0.1; 
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
                         <center><?php $variable4=+$total4-$v25; 
                                        $n=number_format($variable4, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       <tr>

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
                    </td><td>
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
                        
                    <td>
                       
GRATIFICACIONES

                    </td>
                    <td> 
                        <CENTER>
                                    <?php $Qrs6=$arr['6410010122']['ABRIL']; 
                            $n=number_format($Qrs6, 0, '.', ',');
                            echo($n);
                        ?>
 </CENTER>
                    </td>
                    
                    <td>
                         <center><?php $v26=0; 
                            $n=number_format($v26, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v27=$arr6['6410010122']['DMBTR']; 
                            $n=number_format($v27, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  if (empty($arr1['6410010122'])){
                                 $v28=0;
                            }
                            else{
                                
                                $v28=$arr1['6410010122']['DMBTR'];
                            }

                            $n=number_format($v28, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v29=$arr7['6410010122']['DMBTR']; 
                            $n=number_format($v29, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v30=0; 
                            $n=number_format($v30, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot6=$v26+$v27+$v28+$v29+$v30; 
                                        $n=number_format($tot6, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var6=+$tot6; 
                                        $n=number_format($var6, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos16=$v30*0.05; 
                            $n=number_format($veremos16, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos17=$v30*0.85; 
                            $n=number_format($veremos17, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos18=$v30*0.1; 
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
                         <center><?php $variable6=+$total6-$v30; 
                                        $n=number_format($variable6, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       <tr>
                        
                    <td>
                       
 2% SOBRE NOMINA E IMP. ESTATALES

                    </td>
                    <td>
                        <CENTER><?php  $Qrs7=$arr['6410010125']['ABRIL']; 
                            $n62=number_format($Qrs7, 0, '.', ',');
                            echo($n62);
                        ?> 
</CENTER>
                    </td>
                    <td>
                         <center><?php $v31=$arr2['6410010125']['DMBTR']; 
                            $n=number_format($v31, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v32=$arr3['6410010125']['DMBTR']; 
                            $n=number_format($v32, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v33=$arr1['6410010125']['DMBTR']; 
                            $n=number_format($v33, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v34=$arr4['6410010125']['DMBTR']; 
                            $n=number_format($v34, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v35=$arr5['6410010125']['DMBTR']; 
                            $n=number_format($v35, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot7=$v31+$v32+$v33+$v34+$v35; 
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
                    <td>
                         <center><?php $veremos19=$v35*0.05; 
                            $n=number_format($veremos19, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos20=$v35*0.85; 
                            $n=number_format($veremos20, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos21=$v35*0.1; 
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
                         <center><?php $variable7=+$total7-$v35; 
                                        $n=number_format($variable7, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       <tr>
                        
                        <td>
 BONO ACTUACION

                    </td>
                    <td>
                        <CENTER> <?php $Qrs8=$arr['6410010104']['ABRIL']; 
                            $n=number_format($Qrs8, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                   
                    <td>
                         <center><?php $v36=0; 
                            $n=number_format($v36, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v37=0; 
                            $n=number_format($v37, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v38=0; 
                            $n=number_format($v38, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v39=0; 
                            $n=number_format($v39, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v40=0; 
                            $n=number_format($v40, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot8=$v36+$v37+$v39+$v39+$v40; 
                                        $n=number_format($tot8, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var8=+$tot8; 
                                        $n=number_format($var8, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos22=$v40*0.05; 
                            $n=number_format($veremos22, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos23=$v40*0.85; 
                            $n=number_format($veremos23, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos24=$v40*0.1; 
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
                         <center><?php $variable8=+$total8-$v40; 
                                        $n=number_format($variable8, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                <tr>
                   
                    <td>
                    AGUINALDO Y OTRAS GRATIFICACIONES
              </td>
                    <td>
                        <CENTER><?php $Qrs9=$arr['6410010103']['ABRIL']; 
                            $n=number_format($Qrs9, 0, '.', ',');
                            echo($n);
                            ?>
                         </CENTER>
                    </td>
                    <td>
                         <center><?php $v41=0; 
                            $n=number_format($v41, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v42=0; 
                            $n=number_format($v42, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v43=0; 
                            $n=number_format($v43, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v44=0; 
                            $n=number_format($v44, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v45=0; 
                            $n=number_format($v45, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot9=$v41+$v42+$v43+$v44+$v45; 
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
                    </td>
                    <td>
                         <center><?php $veremos25=$v45*0.05; 
                            $n=number_format($veremos25, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos26=$v45*0.85; 
                            $n=number_format($veremos26, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos27=$v45*0.1; 
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
                         <center><?php $variable9=+$total9-$v45; 
                                        $n=number_format($variable9, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>

 <tr>

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
                    <td>
                         <center>0</center> 
                    </td>
                    <td>
                         <center>0</center> 
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
                    <td>
                         <center>0</center> 
                    </td>
                    <td>
                         <center>0</center> 
                    </td>
                       </tr>

                    <tr>
                    <td>
                      
PRIMA VACACIONAL (PAGADO EN EL MES) 
                    </td>
                    <td>
                        <CENTER><?php echo $Qrs11=0; ?></CENTER>
                    </td>
                    <td>
                         <center><?php $v46=$arr11['OPERADORA']['DMBTR']; 
                            $n=number_format($v46, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v47=$arr11['BANCO']['DMBTR']; 
                            $n=number_format($v47, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v48=0; 
                            $n=number_format($v48, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v49=$arr11['CASA']['DMBTR']; 
                            $n=number_format($v49, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v50=0; 
                            $n=number_format($v50, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot11=$v46+$v47+$v48+$v49+$v50; 
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
                    <td>
                         <center><?php $veremos28=$v50*0.05; 
                            $n=number_format($veremos28, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos29=$v50*0.85; 
                            $n=number_format($veremos29, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos30=$v50*0.1; 
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
                         <center><?php $variable11=+$total11-$v50; 
                                        $n=number_format($variable11, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       
                  <tr>

                    
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
                    </td><td>
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
                       </tr>


                    <tr>
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
                       <center> 0</center>
                    </td>

                </tr>
                <tr>
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
                         <center><?php if (empty($arr['6492020102'])){
                                echo 0;
                            }
                            else{
                                
                                $in=$arr2['6492020102']['DMBTR']; 
                            $n=number_format($in, 0, '.', ',');
                            echo($n);
                            } ?></center> 
                    </td>
                    <td>
                        <center> <?php if (empty($arr['6492020102'])){
                                echo 0;
                            }
                            else{
                                
                                $in1=$arr3['6492020102']['DMBTR']; 
                            $n=number_format($in1, 0, '.', ',');
                            echo($n);
                            } ?></center>
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
                       <center> 0</center>
                    </td>

                </tr>
                <tr>
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
                       <center> 0</center>
                    </td>

                </tr>
                <tr>
                    
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
                       <center> 0</center>
                    </td>
                </tr>
                <tr>
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
                       <center> 0</center>
                    </td>
                </tr>
                <tr>
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
                       <center> 0</center>
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
                <tr>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $r=$Qrs+$Qrs1+$Qrs2+$Qrs3+$Qrs4+$Qrs5+$Qrs6+$Qrs7+$Qrs8+$Qrs9+$Qrs10+$Qrs11+$Qrs12+$Qrs13+$Qrs14+$Qrs15+$Qrs16+$Qrs17+$Qrs18;
                        $as6=number_format($r, 0, '.', ',');
                            echo($as6);?></CENTER>
                    </td>
                    <td>
                         <center><?php $r1=$v1+$v6+$v11+$v16+$v21+$v26+$v31+$v36+$v41+$v46;
                        $as6=number_format($r1, 0, '.', ',');
                            echo($as6);?> </center> 
                    </td>
                    <td>
                        <center><?php $r2=$v2+$v7+$v12+$v17+$v22+$v27+$v32+$v37+$v42+$v47;
                        $as6=number_format($r2, 0, '.', ',');
                            echo($as6);?> </center>
                    </td>
                    <td>
                        <center> <?php $r3=$v3+$v8+$v13+$v18+$v23+$v28+$v33+$v38+$v43+$v48;
                        $as6=number_format($r3, 0, '.', ',');
                            echo($as6);?></center>
                    </td>
                    <td>
                        <center> <?php $r4=$v4+$v9+$v14+$v19+$v24+$v29+$v34+$v39+$v44+$v49;
                        $as6=number_format($r4, 0, '.', ',');
                            echo($as6);?></center>
                    </td>
                    <td>
                        <center> <?php $r5=$v5+$v10+$v15+$v20+$v25+$v30+$v35+$v40+$v45+$v50;
                        $as6=number_format($r5, 0, '.', ',');
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
                
<tr>
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
                   
                    <td>
                       
                        OTRAS COMISIONES BANCARIAS

                    </td>
                    
                    <td>
                        <CENTER> <?php  $Qrs19=$arr['6390010000']['ABRIL']; $n90=number_format($Qrs19, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    
                    <td>
                         <center><?php $v51=0; 
                            $n=number_format($v51, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v52=$arr3['6390010000']['DMBTR']; 
                            $n=number_format($v52, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php 
                        if (empty($arr['6402010000'])){
                                 $v53=0;
                            }
                            else{
                                
                                $v53=$arr['6402010000']['DMBTR']; 
                           
                            } 
                            $n=number_format($v53,0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v54=0; 
                            $n=number_format($v54, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v55=0; 
                            $n=number_format($v55, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot19=$v51+$v52+$v53+$v54+$v55; 
                                        $n=number_format($tot19, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var19=+$tot19-$v55; 
                                        $n=number_format($var19, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos31=$v55*0.05; 
                            $n=number_format($veremos31, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos32=$v55*0.85; 
                            $n=number_format($veremos32, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos33=$v55*0.1; 
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
                         <center><?php $variable19=+$total19-$v55; 
                                        $n=number_format($variable19, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>

                       <tr>
                    
                    <td>
                       
                    HONORARIOS PERSONAS FISICAS

                    </td>
                    
                    <td>
                        <CENTER> <?php 

                            
                        if (empty($arr['6402010000']['ABRIL'])){
                                echo $Qrs20=0;
                            }
                            else{
                                
                                $Qrs20=$arr['6402010000']['ABRIL']; 
                            $n=number_format($Qrs20, 0, '.', ',');
                            echo($n);
                            }
                            ?></CENTER>
                    </td>
                   <td>
                         <center><?php $v56=0; 
                            $n=number_format($v56, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v57=0; 
                            $n=number_format($v57, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v58=0; 
                            $n=number_format($v58, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v59=0; 
                            $n=number_format($v59, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v60=0; 
                            $n=number_format($v60, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot20=$v56+$v58+$v57+$v59+$v60; 
                                        $n=number_format($tot20, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var20=+$tot20-$v60; 
                                        $n=number_format($var20, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos34=$v60*0.05; 
                            $n=number_format($veremos34, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos35=$v60*0.85; 
                            $n=number_format($veremos35, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos36=$v60*0.1; 
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
                         <center><?php $variable20=+$total20-$v60; 
                                        $n=number_format($variable20, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                       <tr>
                    
                    <td>
                       
                    HONORARIOS PERSONAS MORALES

                    </td>
                    
                    <td>
                        <CENTER> <?php 
                                
                                $Qrs56=$arr['6402020000']['ABRIL']; 
                            $n=number_format($Qrs56, 0, '.', ',');
                            echo($n);
                            
                            ?></CENTER>
                    </td>
                     <td>
                         <center><?php $v61=$arr2['6402020000']['DMBTR']; 
                            $n=number_format($v61, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v62=$arr3['6402020000']['DMBTR']; 
                            $n=number_format($v62, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v63=$arr1['6402020000']['DMBTR']; 
                            $n=number_format($v63, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v64=$arr4['6402020000']['DMBTR']; 
                            $n=number_format($v64, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v65=0; 
                            $n=number_format($v65, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot56=$v65+$v61+$v62+$v63+$v64; 
                                        $n=number_format($tot56, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var56=+$tot56-$v65; 
                                        $n=number_format($var56, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos37=$v65*0.05; 
                            $n=number_format($veremos37, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos38=$v65*0.85; 
                            $n=number_format($veremos38, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos39=$v65*0.1; 
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
                         <center><?php $variable56=+$total56-$v65; 
                                        $n=number_format($variable56, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>



                <tr>
                    
                    <td>
                       
                        RENTAS INMUEBLES SOC ANONIMAS

                    </td>
                    
                    <td>
                        <CENTER> <?php  $Qrs21=$arr['6403020100']['ABRIL']; $n90=number_format($Qrs21, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td>
                         <center><?php $v66=0; 
                            $n=number_format($v66, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v67=$arr3['6403020100']['DMBTR']; 
                            $n=number_format($v67, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v68=$arr1['6403020100']['DMBTR']; 
                            $n=number_format($v68, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v69=$arr4['6403020100']['DMBTR']; 
                            $n=number_format($v69, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v70=0; 
                            $n=number_format($v70, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot21=$v70+$v66+$v67+$v68+$v69; 
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
                    <td>
                         <center><?php $veremos40=$v70*0.05; 
                            $n=number_format($veremos40, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos41=$v70*0.85; 
                            $n=number_format($veremos41, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos42=$v70*0.1; 
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
                         <center><?php $variable21=+$total21-$v70; 
                                        $n=number_format($variable21, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>



                 <tr>
                    
                    <td>
                      
                    OTROS MEDIOS PUBLI REVISTAS, PERIODICOS
                    </td>
                    <td>
                        <CENTER><?php 
                            $Qrs22=$arr['6404020000']['ABRIL']; 
                            $n=number_format($Qrs22, 0, '.', ',');
                            echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $v71=0; 
                            $n=number_format($v71, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v72=0; 
                            $n=number_format($v72, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php 
                            if (empty($arr1['6402010000'])){
                                 $v73=0;
                            }
                            else{
                                
                                $v73=$arr1['6402010000']['DMBTR']; 
                           
                            } 

                         
                            $n=number_format($v73, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v74=0; 
                            $n=number_format($v74, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v75=0; 
                            $n=number_format($v75, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot22=$v75+$v71+$v72+$v73+$v74; 
                                        $n=number_format($tot22, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var22=+$tot22-$v75; 
                                        $n=number_format($var22, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos43=$v75*0.05; 
                            $n=number_format($veremos43, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos44=$v75*0.85; 
                            $n=number_format($veremos44, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos45=$v75*0.1; 
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
                         <center><?php $variable22=+$total22-$v75; 
                                        $n=number_format($variable22, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>



                <tr>
                    <td>
                       
                        GASTOS NO DEDUCIBLES GENERALES
                    </td>
                   <td>
                        <CENTER><?php $Qrs23=$arr['6408010000']['ABRIL']; 
                            $n21=number_format($Qrs23, 0, '.', ',');
                            echo($n21);
                        ?>  </CENTER>
                    </td>
                    <td>
                         <center><?php $v76=0; 
                            $n=number_format($v76, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v77=$arr3['6408010000']['DMBTR']; 
                            $n=number_format($v77, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v78=0; 
                            $n=number_format($v78, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v79=0; 
                            $n=number_format($v79, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v80=0; 
                            $n=number_format($v80, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot23=$v80+$v76+$v77+$v78+$v79; 
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
                     <td>
                         <center><?php $veremos46=$v80*0.05; 
                            $n=number_format($veremos46, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos47=$v80*0.85; 
                            $n=number_format($veremos47, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos48=$v80*0.1; 
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
                         <center><?php $variable23=+$total23-$v80; 
                                        $n=number_format($variable23, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                
                <tr>
                   
                    <td>
                        
GASTOS NO DEDU POR EXEDENTES DE VA
</td>
                    <td>
                        <CENTER> <?php  $Qrs24=$arr['6408020000']['ABRIL']; 
                            $n69=number_format($Qrs24, 0, '.', ',');
                            echo($n69);
                        ?>
 </CENTER>
                    </td>
                    <td>
                         <center><?php $v81=$arr2['6408020000']['DMBTR']; 
                            $n=number_format($v81, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v82=$arr3['6408020000']['DMBTR']; 
                            $n=number_format($v82, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v83=0; 
                            $n=number_format($v83, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v84=$arr4['6408020000']['DMBTR']; 
                            $n=number_format($v84, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v85=0; 
                            $n=number_format($v85, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot24=$v85+$v81+$v82+$v83+$v84; 
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
                    <td>
                         <center><?php $veremos49=$v85*0.05; 
                            $n=number_format($veremos49, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos50=$v85*0.85; 
                            $n=number_format($veremos50, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos51=$v85*0.1; 
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
                         <center><?php $variable24=+$total24-$v85; 
                                        $n=number_format($variable24, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                 
                <tr>
                    
                    <td>
                    
                       
                        GASTOS NO DEDU POR CONSUMO EN RESTA

                    </td>
                    <td>
                        <CENTER><?php $Qrs25=$arr['6408020100']['ABRIL']; $n83=number_format($Qrs25, 0, '.', ',');
                            echo($n83);?>
</CENTER>
                    </td>
                    <td>
                         <center><?php $v86=0; 
                            $n=number_format($v86, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v87=$arr3['6408020100']['DMBTR']; 
                            $n=number_format($v87, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v88=0; 
                            $n=number_format($v88, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v89=$arr4['6408020100']['DMBTR']; 
                            $n=number_format($v89, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v90=$arr5['6408020100']['DMBTR']; 
                            $n=number_format($v90, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot25=$v90+$v86+$v87+$v88+$v89; 
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
                    <td>
                         <center><?php $veremos52=$v90*0.05; 
                            $n=number_format($veremos52, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos53=$v90*0.85; 
                            $n=number_format($veremos53, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos54=$v90*0.1; 
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
                         <center><?php $variable25=+$total25-$v90; 
                                        $n=number_format($variable25, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                <tr>
                    
                    <td>
                    
                    
                      
GASTOS EN TECNOLOGIA  
                    </td>
                    <td>
                        <CENTER><?php $Qrs26=$arr['6409000000']['ABRIL'];$n90=number_format($Qrs26, 0, '.', ',');
                            echo($n90); ?>
 </CENTER>
                    </td>
                   <td>
                         <center><?php $v91=0; 
                            $n=number_format($v91, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v92=$arr3['6409000000']['DMBTR']; 
                            $n=number_format($v92, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v93=0; 
                            $n=number_format($v93, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v94=0; 
                            $n=number_format($v94, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v95=0; 
                            $n=number_format($v95, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot26=$v95+$v91+$v92+$v93+$v94; 
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
                    <td>
                         <center><?php $veremos55=$v95*0.05; 
                            $n=number_format($veremos55, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos56=$v95*0.85; 
                            $n=number_format($veremos56, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos57=$v95*0.1; 
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
                         <center><?php $variable26=+$total26-$v95; 
                                        $n=number_format($variable26, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                <tr>
                    <td>
                       
 SERVICIO MEDICO
                    </td>
                   <td>
                        <CENTER> <?php  $Qrs27=$arr['6410010110']['ABRIL']; $n90=number_format($Qrs27, 0, '.', ',');
                            echo($n90); ?> </CENTER>
                    </td>
                    <td>
                         <center><?php $v96=0; 
                            $n=number_format($v96, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v97=$arr3['6410010110']['DMBTR']; 
                            $n=number_format($v97, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v98=0; 
                            $n=number_format($v98, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v99=0; 
                            $n=number_format($v99, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v100=0; 
                            $n=number_format($v100, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot27=$v100+$v96+$v97+$v98+$v99; 
                                        $n=number_format($tot27, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var27=+$tot27-$Qrs27; 
                                        $n=number_format($var27, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos58=$v100*0.05; 
                            $n=number_format($veremos58, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos59=$v100*0.85; 
                            $n=number_format($veremos59, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos60=$v100*0.1; 
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
                         <center><?php $variable27=+$total27-$v100; 
                                        $n=number_format($variable27, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                
                <tr>
                    
                    <td>
                    
                    
                        
                        VALES DE GASOLINA
                    </td>
                    <td>
                        <CENTER>  <?php $Qrs28=$arr['6410010119']['ABRIL'];;$n97=number_format($Qrs28, 0, '.', ',');
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
                    <td>
                         <center>0 </center> 
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center> 0 </center>
                    </td>
                   
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <CENTER>0</CENTER>
                    </td>
                    <td>
                         <center>0 </center> 
                    </td>
                    <td><center>0</center></td>
                       </tr>
                <tr>
                    
                    <td>
                        
CONVENCIONES
                    </td>
                    <td>
                        <CENTER><?php  $Qrs29=$arr['6410010128']['ABRIL'];  $n90=number_format($Qrs29, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td>
                         <center><?php $v101=0; 
                            $n=number_format($v101, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v102=$arr3['6410010128']['DMBTR']; 
                            $n=number_format($v102, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v103=0; 
                            $n=number_format($v103, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v104=0; 
                            $n=number_format($v104, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v105=0; 
                            $n=number_format($v105, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot29=$v105+$v101+$v102+$v103+$v104; 
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
                    <td>
                         <center><?php $veremos61=$v105*0.05; 
                            $n=number_format($veremos61, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos62=$v105*0.85; 
                            $n=number_format($veremos62, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos63=$v105*0.1; 
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
                         <center><?php $variable29=+$total29-$v105; 
                                        $n=number_format($variable29, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                <tr>
                    
                    <td>
                        CUOTAS Y SUSCRIPCIONES
                    </td>
                    <td>
                        <CENTER> <?PHP  $Qrs30=$arr['6491010000']['ABRIL'];  $n90=number_format($Qrs30, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td>
                         <center><?php $v106=$arr2['6408020000']['DMBTR']; 
                            $n=number_format($v106, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v107=$arr3['6408020000']['DMBTR']; 
                            $n=number_format($v107, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v108=0; 
                            $n=number_format($v108, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v109=$arr4['6408020000']['DMBTR']; 
                            $n=number_format($v109, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v110=0; 
                            $n=number_format($v110, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot30=$v110+$v106+$v107+$v108+$v109; 
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
                    <td>
                         <center><?php $veremos64=$v110*0.05; 
                            $n=number_format($veremos64, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos65=$v110*0.85; 
                            $n=number_format($veremos65, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos66=$v110*0.1; 
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
                         <center><?php $variable30=+$total30-$v110; 
                                        $n=number_format($variable30, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                
                <tr>
                    
                    <td>
                    
                    
                        
PAPELERIA
                    </td>
                    <td>
                        <CENTER><?php $Qrs31=$arr['6491050000']['ABRIL'];
                            $n104=number_format($Qrs31, 0, '.', ',');
                            echo($n104);
                        ?>
 </CENTER>
                    </td>
                    <td>
                         <center><?php $v111=0; 
                            $n=number_format($v111, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v112=0; 
                            $n=number_format($v112, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v113=0; 
                            $n=number_format($v113, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v114=0; 
                            $n=number_format($v114, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v115=0; 
                            $n=number_format($v115, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot31=$v115+$v111+$v112+$v113+$v114; 
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
                    <td>
                         <center><?php $veremos67=$v115*0.05; 
                            $n=number_format($veremos67, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos68=$v115*0.85; 
                            $n=number_format($veremos68, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos69=$v115*0.1; 
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
                         <center><?php $variable31=+$total31-$v115; 
                                        $n=number_format($variable31, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                
                <tr>
                    
                    <td>
PUBLICIDAD Y PROPAGANDA                    
                    </td>
                    <td>
                        <CENTER><?php  if (empty($arr['6491060000']['ABRIL'])){
                                echo $Qrs32=0;
                            }
                            else{
                                
                                $Qrs32=$arr['6491060000']['ABRIL']; 
                            $n=number_format($Qrs32, 0, '.', ',');
                            echo($n);
                            }?></CENTER>
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
                       <center> 0
 </center>
                    </td>
                    <td>
                       <center> 0</center>
                    </td>
                    <td>
                         <center><?php $veremos70=0*0.05; 
                            $n=number_format($veremos70, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos71=0*0.85; 
                            $n=number_format($veremos71, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos72=0*0.1; 
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
                         <center><?php $variable32=+$total32-0; 
                                        $n=number_format($variable32, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>
               
                <tr>
                    
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
                         <center>0
</center> 
                    </td>
                    <td>
                        <center>0
 </center>
                    </td>
                    <td>
                        <center>0
</center>
                    </td>
                    <td>
                        <center> 0
</center>
                    </td>
                    <td>
                        <center>0
</center>
                    </td>
                    <td>
                        <center>0

 </center>
                    </td>

                    <td>
                       <center> 0</center>
                    </td>
                    <td>
                         <center><?php $veremos73=0*0.05; 
                            $n=number_format($veremos73, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos74=0*0.85; 
                            $n=number_format($veremos74, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos75=0*0.1; 
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
                         <center><?php $variable33=+$total33-0; 
                                        $n=number_format($variable33, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>
               
                <tr>
                    
                    <td>
                      
TRANS LOCALES (TAXIS, ESTACIONA, CASETA)
                    </td>
                    <td>
                        <CENTER>  <?php $Qrs34=$arr['6491140000']['ABRIL']; 
                            $n118=number_format($Qrs34, 0, '.', ',');
                            echo($n118);
                        ?> 
 </CENTER>
                    </td>
                    <td>
                         <center><?php $v116=0; 
                            $n=number_format($v116, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v117=$arr3['6491140000']['DMBTR']; 
                            $n=number_format($v117, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v118=0; 
                            $n=number_format($v118, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v119=$arr4['6491140000']['DMBTR']; 
                            $n=number_format($v119, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v120=0; 
                            $n=number_format($v120, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot34=$v120+$v116+$v117+$v118+$v119; 
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
                    <td>
                         <center><?php $veremos76=$v120*0.05; 
                            $n=number_format($veremos76, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos77=$v120*0.85; 
                            $n=number_format($veremos77, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos78=$v120*0.1; 
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
                         <center><?php $variable34=+$total34-$v120; 
                                        $n=number_format($variable34, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                
                <tr>
                    
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
                         <center>0</br>
</center> 
                    </td>
                    <td>
                        <center>0</br>
 </center>
                    </td>
                    <td>
                        <center>0 </br>
</center>
                    </td>
                    <td>
                        <center>0</br>
</center>
                    </td>
                    <td>
                        <center>0 </br>
</center>
                    </td>
                    <td>
                        <center>0</br>
 
</center>
                    </td>

                    <td>
                       <center>0 </center>
                    </td>
                     <td>
                         <center><?php $veremos79=0*0.05; 
                            $n=number_format($veremos79, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos80=0*0.85; 
                            $n=number_format($veremos80, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos81=0*0.1; 
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
                         <center><?php $variable35=+$total35-0; 
                                        $n=number_format($variable35, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    
                </tr>
                
                <tr>
                    
                    <td>
TELEFONOS
                        
                    </td>
                    <td>
                        <cENTER><?php $Qrs36=$arr['6491240000']['ABRIL']; 
                            $n125=number_format($Qrs36, 0, '.', ',');
                            echo($n125);
                        ?>
</cENTER>
                    </td>
                    <td>
                         <center><?php $v121=$arr2['6491240000']['DMBTR']; 
                            $n=number_format($v121, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v122=$arr3['6491240000']['DMBTR']; 
                            $n=number_format($v122, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v123=0; 
                            $n=number_format($v123, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v124=$arr4['6491240000']['DMBTR']; 
                            $n=number_format($v124, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v125=$arr5['6491240000']['DMBTR']; 
                            $n=number_format($v125, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot36=$v125+$v121+$v122+$v123+$v124; 
                                        $n=number_format($tot36, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var36=+$tot36-$Qrs36; 
                                        $n=number_format($var36, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos82=$v125*0.05; 
                            $n=number_format($veremos82, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos83=$v125*0.85; 
                            $n=number_format($veremos83, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos84=$v125*0.1; 
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
                         <center><?php $variable36=+$total36-$v125; 
                                        $n=number_format($variable36, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    
                    <td>
GASTOS OPERATIVOS 
</td>
                    <td>
                        <cENTER><?php $Qrs37=$arr['6491320000']['ABRIL']; 
                            $n125=number_format($Qrs37, 0, '.', ',');
                            echo($n125);
                        ?>
</cENTER>
                    </td>
                    <td>
                         <center><?php $v126=0; 
                            $n=number_format($v126, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v127=$arr3['6491320000']['DMBTR']; 
                            $n=number_format($v127, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v128=0; 
                            $n=number_format($v128, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v129=0; 
                            $n=number_format($v129, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v130=0; 
                            $n=number_format($v130, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot37=$v130+$v126+$v127+$v128+$v129; 
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
                    <td>
                         <center><?php $veremos85=$v130*0.05; 
                            $n=number_format($veremos85, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos86=$v130*0.85; 
                            $n=number_format($veremos86, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos87=$v130*0.1; 
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
                         <center><?php $variable37=+$total37-$v130; 
                                        $n=number_format($variable37, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>
                
                <tr>
                    
                    <td>
OTROS
</td>
                    <td>
                        <cENTER><?php $Qrs38=$arr['6491330000']['ABRIL']; 
                            $n125=number_format($Qrs38, 0, '.', ',');
                            echo($n125);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $v131=$arr2['6491330000']['DMBTR']; 
                            $n=number_format($v131, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v132=$arr3['6491330000']['DMBTR']; 
                            $n=number_format($v132, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v133=0; 
                            $n=number_format($v133, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v134=$arr4['6491330000']['DMBTR']; 
                            $n=number_format($v134, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v135=$arr5['6491330000']['DMBTR']; 
                            $n=number_format($v135, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot38=$v135+$v131+$v132+$v133+$v134; 
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
                    <td>
                         <center><?php $veremos88=$v135*0.05; 
                            $n=number_format($veremos88, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos89=$v135*0.85; 
                            $n=number_format($veremos89, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos90=$v135*0.1; 
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
                         <center><?php $variable38=+$total38-$v135; 
                                        $n=number_format($variable38, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    
                    <td>
                       
GASTOS DE VIAJE
</td>
                    <td>
                        <cENTER> <?php  if (empty($arr['6491350000']['ABRIL'])){
                                echo $Qrs39=0;
                            }
                            else{
                                
                                $Qrs35=$arr['6491350000']['ABRIL']; 
                            $n=number_format($Qrs39, 0, '.', ',');
                            echo($n);
                            }?></cENTER>
                    </td>
                    <td>
                         <center><?php $v136=0; 
                            $n=number_format($v136, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v137=0; 
                            $n=number_format($v137, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v138=0; 
                            $n=number_format($v138, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v139=0; 
                            $n=number_format($v139, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v140=0; 
                            $n=number_format($v140, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot35=$v140+$v136+$v137+$v138+$v139; 
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
                    <td>
                         <center><?php $veremos91=$v140*0.05; 
                            $n=number_format($veremos91, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos92=$v140*0.85; 
                            $n=number_format($veremos92, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos93=$v140*0.1; 
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
                         <center><?php $variable39=+$total39-$v140; 
                                        $n=number_format($variable39, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                
                <tr>
                    
                    <td>
                        
ALIMENTOS
</td>
                    <td>
                        <cENTER><?php $Qrs40=$arr['6491350100']['ABRIL']+$arr['6408010000']['ABRIL']; 
                            $n139=number_format($Qrs40, 0, '.', ',');
                            echo($n139);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $v141=$arr2['6491350100']['DMBTR']; 
                            $n=number_format($v141, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v142=$arr3['6491350100']['DMBTR']; 
                            $n=number_format($v142, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v143=0; 
                            $n=number_format($v143, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v144=$arr4['6491350100']['DMBTR']; 
                            $n=number_format($v144, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v145=0; 
                            $n=number_format($v145, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot40=$v145+$v141+$v142+$v143+$v144; 
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
                    <td>
                         <center><?php $veremos94=$v145*0.05; 
                            $n=number_format($veremos94, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos95=$v145*0.85; 
                            $n=number_format($veremos95, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos96=$v145*0.1; 
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
                         <center><?php $variable40=+$total40-$v145; 
                                        $n=number_format($variable40, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
               
                <tr>
                    
                    <td>
                        TRANSP (TAX,ESTAC,GRUA,AUTO,GASS,CASETAS)
</td>
                    <td>
                        <cENTER><?php $Qrs41=$arr['6491350200']['ABRIL']; 
                            $n139=number_format($Qrs41, 0, '.', ',');
                            echo($n139);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $v146=0; 
                            $n=number_format($v146, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v147=$arr3['6491350200']['DMBTR']; 
                            $n=number_format($v147, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v148=0; 
                            $n=number_format($v148, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v149=$arr4['6491350200']['DMBTR']; 
                            $n=number_format($v149, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v150=0; 
                            $n=number_format($v150, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot41=$v150+$v146+$v147+$v148+$v149; 
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
                    <td>
                         <center><?php $veremos97=$v150*0.05; 
                            $n=number_format($veremos97, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos98=$v150*0.85; 
                            $n=number_format($veremos98, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos99=$v150*0.1; 
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
                         <center><?php $variable41=+$total41-$v150; 
                                        $n=number_format($variable41, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    <td>
                       
 HOSPEDAJE</td>
                    <td>
                        <ceNTER><?php $Qrs42=$arr['6491350300']['ABRIL'];
                            $n147=number_format($Qrs42, 0, '.', ',');
                            echo($n147);
                         ?> </cenTER>
                    </td>
                    <td>
                         <center><?php $v151=$arr2['6491350300']['DMBTR']; 
                            $n=number_format($v151, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v152=$arr3['6491350300']['DMBTR']; 
                            $n=number_format($v152, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v153=0; 
                            $n=number_format($v153, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v154=$arr4['6491350300']['DMBTR']; 
                            $n=number_format($v154, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v155=0; 
                            $n=number_format($v155, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot42=$v155+$v151+$v152+$v153+$v154; 
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
                    <td>
                         <center><?php $veremos100=$v155*0.05; 
                            $n=number_format($veremos100, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos101=$v155*0.85; 
                            $n=number_format($veremos101, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos102=$v155*0.1; 
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
                         <center><?php $variable42=+$total42-$v155; 
                                        $n=number_format($variable42, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    
                    <td>
                       
BOLETOS DE AVION 
</td>
                   <td>
                        <cENTER><?php $Qrs43=$arr['6491350400']['ABRIL'];
                            $n154=number_format($Qrs43, 0, '.', ',');
                            echo($n154);
                         ?></cENTER>
                    </td>
                    <td>
                         <center><?php $v156=0; 
                            $n=number_format($v156, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v157=$arr3['6491350400']['DMBTR']; 
                            $n=number_format($v157, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v158=0; 
                            $n=number_format($v158, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v159=0; 
                            $n=number_format($v159, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v160=0; 
                            $n=number_format($v160, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot43=$v160+$v156+$v157+$v158+$v159; 
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
                    <td>
                         <center><?php $veremos103=$v160*0.05; 
                            $n=number_format($veremos103, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos104=$v160*0.85; 
                            $n=number_format($veremos104, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos105=$v160*0.1; 
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
                         <center><?php $variable43=+$total43-$v160; 
                                        $n=number_format($variable43, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                
                <tr>
                   
                    <td>
                      
CAPACITACION EXTERNA 
</td>
                    <td>
                        <cENTER><?php $Qrs44=$arr['6491360200']['ABRIL'];
                            $n161=number_format($Qrs44, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $v161=0; 
                            $n=number_format($v161, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v162=$arr3['6491360200']['DMBTR']; 
                            $n=number_format($v162, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v163=0; 
                            $n=number_format($v163, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v164=0; 
                            $n=number_format($v164, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v165=0; 
                            $n=number_format($v165, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot44=$v165+$v161+$v162+$v163+$v164; 
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
                    <td>
                         <center><?php $veremos106=$v165*0.05; 
                            $n=number_format($veremos106, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos107=$v165*0.85; 
                            $n=number_format($veremos107, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos108=$v165*0.1; 
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
                         <center><?php $variable44=+$total44-$v165; 
                                        $n=number_format($variable44, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                
                <tr>
                    
                    <td>
GASTOS DE CAPACITACION  </td>
                    <td>
                        <cENTER><?php  if (empty($arr['6491360500']['ABRIL'])){
                                echo $Qrs45=0;
                            }
                            else{
                                
                                $Qrs45=$arr['6491360500']['ABRIL']; 
                            $n=number_format($Qrs45, 0, '.', ',');
                            echo($n);
                            }?></cENTER>
                    </td>
                    <td>
                         <center><?php $v166=0; 
                            $n=number_format($v166, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v167=0; 
                            $n=number_format($v167, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v168=0; 
                            $n=number_format($v168, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v169=0; 
                            $n=number_format($v169, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v170=0; 
                            $n=number_format($v170, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot45=$v170+$v166+$v167+$v168+$v169; 
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
                    <td>
                         <center><?php $veremos109=$v170*0.05; 
                            $n=number_format($veremos109, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos110=$v170*0.85; 
                            $n=number_format($veremos110, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos111=$v170*0.1; 
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
                         <center><?php $variable45=+$total45-$v170; 
                                        $n=number_format($variable45, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
               <tr>
                    
                    <td>
                      
INSUMOS Y SUMINISTROS</td>
                    <td>
                        <cENTER><?php $Qrs46=$arr['6491370000']['ABRIL'];
                            $n161=number_format($Qrs46, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $v171=0; 
                            $n=number_format($v171, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v172=$arr3['6491370000']['DMBTR']; 
                            $n=number_format($v172, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v173=0; 
                            $n=number_format($v173, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v174=$arr4['6491370000']['DMBTR']; 
                            $n=number_format($v174, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v175=0; 
                            $n=number_format($v175, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot46=$v175+$v171+$v172+$v173+$v174; 
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
                    <td>
                         <center><?php $veremos112=$v175*0.05; 
                            $n=number_format($veremos112, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos113=$v175*0.85; 
                            $n=number_format($veremos113, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos114=$v175*0.1; 
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
                         <center><?php $variable46=+$total46-$v175; 
                                        $n=number_format($variable46, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
               <tr>
                   
                    <td>
                      
CONSUMOS EN RESTAURANTES (LOCALES)</td>
                    <td>
                        <cENTER><?php $Qrs47=$arr['6491380100']['ABRIL'];
                            $n161=number_format($Qrs47, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $v176=0; 
                            $n=number_format($v176, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v177=$arr3['6491380100']['DMBTR']; 
                            $n=number_format($v177, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v178=0; 
                            $n=number_format($v178, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v179=$arr4['6491380100']['DMBTR']; 
                            $n=number_format($v179, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v180=$arr5['6491380100']['DMBTR']; 
                            $n=number_format($v180, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot47=$v180+$v176+$v177+$v178+$v179; 
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
                    <td>
                         <center><?php $veremos115=$v180*0.05; 
                            $n=number_format($veremos115, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos116=$v180*0.85; 
                            $n=number_format($veremos116, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos117=$v180*0.1; 
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
                         <center><?php $variable47=+$total47-$v180; 
                                        $n=number_format($variable47, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    
                    <td>
                      
CONSERV Y MANT EQ TRANSPORTE</td>
                    <td>
                        <cENTER><?php  if (empty($arr['6491410000']['ABRIL'])){
                                echo $Qrs48=0;
                            }
                            else{
                                
                                $Qrs48=$arr['6491410000']['ABRIL']; 
                            $n=number_format($Qrs48, 0, '.', ',');
                            echo($n);
                            }?></cENTER>
                    </td>
                    <td>
                         <center>0
                          </center> 
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
                        <center>0</center>
                    </td>
                    <td>
                        <CENTER>0</CENTER>
                    </td>
                    <td>
                         <center> 0</center> 
                    </td>
                    <td>
                         <center><?php $veremos118=0*0.05; 
                            $n=number_format($veremos118, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos119=0*0.85; 
                            $n=number_format($veremos119, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos120=0*0.1; 
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
                         <center><?php $variable48=+$total48-0; 
                                        $n=number_format($variable48, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>
                <tr>
                    
                    <td>
                      
COMBUSTIBLES Y LUBRICANTES (LOCALES) </td>
                    <td>
                        <cENTER><?php $Qrs49=$arr['6491410100']['ABRIL'];
                            $n161=number_format($Qrs49, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>

                    <td>
                        <center><?php  $v181=0; 
                            $n=number_format($v181, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v182=$arr3['6491140000']['DMBTR']; 
                            $n=number_format($v182, 0, '.', ',');
                            echo($n);
                        ?></center>
                    </td>
                    <td>
                        <center><?php  $v183=0; 
                            $n=number_format($v183, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $v184=$arr4['6491140000']['DMBTR']; 
                            $n=number_format($v184, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center> <?php  $v185=0; 
                            $n=number_format($v185, 0, '.', ',');
                            echo($n);
                        ?>   </center>
                    </td>
                    <td>
                        <CENTER><?php $tot48=$v185+$v181+$v182+$v183+$v184; 
                                        $n=number_format($tot48, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php $var48=+$tot48-$Qrs49; 
                                        $n=number_format($var48, 0, '.', ',');
                                        echo($n);
                        ?></center> 
                    </td>
                    <td>
                         <center><?php $veremos121=$v185*0.05; 
                            $n=number_format($veremos121, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos122=$v185*0.85; 
                            $n=number_format($veremos122, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos123=$v185*0.1; 
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
                         <center><?php $variable49=+$total49-$v185; 
                                        $n=number_format($variable49, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    
                    <td>
                      
MEDICAMENTOS</td>
                    <td>
                        <cENTER><?php  if (empty($arr['6491390000']['ABRIL'])){
                                echo $Qrs50=0;
                            }
                            else{
                                
                                $Qrs50=$arr['6491390000']['ABRIL']; 
                            $n=number_format($Qrs50, 0, '.', ',');
                            echo($n);
                            }?>
                                
                            </cENTER>
                    </td>
                    <td>
                         <center><?php $v186=0; 
                            $n=number_format($v186, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v187=0; 
                            $n=number_format($v187, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v188=0; 
                            $n=number_format($v188, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v189=0; 
                            $n=number_format($v189, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v190=0; 
                            $n=number_format($v190, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot50=$v190+$v186+$v187+$v188+$v189; 
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
                    <td>
                         <center><?php $veremos124=$v190*0.05; 
                            $n=number_format($veremos124, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos125=$v190*0.85; 
                            $n=number_format($veremos125, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos126=$v190*0.1; 
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
                         <center><?php $variable50=+$total50-$v190; 
                                        $n=number_format($variable50, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    
                    <td>
                      
LUZ Y AGUA
</td>
                    <td>
                        <cENTER>
                            <?php  if (empty($arr['']['ABRIL'])){
                                echo $Qrs51=0;
                            }
                            else{
                                
                                $Qrs51=$arr['']['ABRIL']; 
                            $n=number_format($Qrs51, 0, '.', ',');
                            echo($n);
                            }?>
                        </cENTER>
                    </td>
                    <td>
                         <center>0</center> 
                    </td>
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <center> 0</center>
                    </td>

                    <td>
                       <center>0 </center>
                    </td>
                    <td>
                         <center><?php $veremos127=0*0.05; 
                            $n=number_format($veremos127, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos128=0*0.85; 
                            $n=number_format($veremos128, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos129=0*0.1; 
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
                         <center><?php $variable51=+$total51-0; 
                                        $n=number_format($variable51, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>
                <tr>
                    
                    <td>
                      
FIESTA FIN DE ANO</td>
                    <td>
                        <cENTER><?php $Qrs52=$arr['6410010121']['ABRIL'];
                            $n161=number_format($Qrs52, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                   <td>
                         <center><?php $v191=0; 
                            $n=number_format($v191, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v192=$arr3['6410010121']['DMBTR']; 
                            $n=number_format($v192, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v193=0; 
                            $n=number_format($v193, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v194=0; 
                            $n=number_format($v194, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v195=0; 
                            $n=number_format($v195, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot52=$v195+$v191+$v192+$v193+$v194; 
                                        $n=number_format($tot52, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var52=+$tot52-$Qrs52; 
                                        $n=number_format($var52, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                    <td>
                         <center><?php $veremos130=$v195*0.05; 
                            $n=number_format($veremos130, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos131=$v195*0.85; 
                            $n=number_format($veremos131, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos132=$v195*0.1; 
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
                         <center><?php $variable52=+$total52-$v195; 
                                        $n=number_format($variable52, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                   
                    <td>
                      
MANT INMUEBLES </td>
                    <td>
                        <cENTER><?php $Qrs53=$arr['6491250000']['ABRIL'];
                            $n161=number_format($Qrs53, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $v196=0; 
                            $n=number_format($v196, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v197=0; 
                            $n=number_format($v197, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v198=0; 
                            $n=number_format($v198, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v199=0; 
                            $n=number_format($v199, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v200=0; 
                            $n=number_format($v200, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot53=$v200+$v196+$v197+$v198+$v199; 
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
                    <td>
                         <center><?php $veremos133=$v200*0.05; 
                            $n=number_format($veremos133, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos134=$v200*0.85; 
                            $n=number_format($veremos134, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos135=$v200*0.1; 
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
                         <center><?php $variable53=+$total53-$v200; 
                                        $n=number_format($variable53, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                </tr>
                <tr>
                    
                    <td>
                      
ESTUDIOS DE POSGRADO</td>
                    <td>
                        <cENTER>
                            <?php  if (empty($arr['']['ABRIL'])){
                                echo $Qrs54=0;
                            }
                            else{
                                
                                $Qrs54=$arr['']['ABRIL']; 
                            $n=number_format($Qrs54, 0, '.', ',');
                            echo($n);
                            }?>
                        </cENTER>
                    </td>
                    <td>
                         <center>0</center> 
                    </td>
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <center>0</center>
                    </td>
                    <td>
                        <center>0 </center>
                    </td>

                    <td>
                       <center>0 </center>
                    </td>
                    <td>
                         <center><?php $veremos136=0*0.05; 
                            $n=number_format($veremos136, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos137=0*0.85; 
                            $n=number_format($veremos137, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos138=0*0.1; 
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
                         <center><?php $variable54=+$total54-0; 
                                        $n=number_format($variable54, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>

                </tr>
                <tr>
                    
                    <td>
                      
CUOTAS COMISION NA BANCA Y DE VALORES</td>
                    <td>
                        <cENTER><?php $Qrs55=$arr['6491420101']['ABRIL'];
                            $n161=number_format($Qrs55, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center><?php $v201=$arr2['6491420101']['DMBTR']; 
                            $n=number_format($v201, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $v202=$arr3['6491420101']['DMBTR']; 
                            $n=number_format($v202, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center><?php  $v203=0; 
                            $n=number_format($v203, 0, '.', ',');
                            echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php  $v204=$arr4['6491420101']['DMBTR']; 
                            $n=number_format($v204, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <center><?php  $v205=0; 
                            $n=number_format($v205, 0, '.', ',');
                            echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER><?php $tot55=$v205+$v201+$v202+$v203+$v204
                        ; 
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
                    <td>
                         <center><?php $veremos139=$v205*0.05; 
                            $n=number_format($veremos139, 0, '.', ',');
                            echo($n); ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $veremos140=$v205*0.85; 
                            $n=number_format($veremos140, 0, '.', ',');
                            echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $veremos141=$v205*0.1; 
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
                         <center><?php $variable55=+$total55-$v205; 
                                        $n=number_format($variable55, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
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
                <tr>
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
                         <center><?php $r9=$v51+$v56+$v61+$v66+$v71+$v76+$v81+$v86+$v91+$v96+$v101+$v106+$v111+$v116+$v121+$v126+$v131+$v136+$v141+$v146+$v151+$v156+$v161+$v166+$v171+$v176+$v181+$v186+$v191+$v196;
                            $as46=number_format($r9, 0, '.', ',');
                            echo($as46);
                        ?></center> 
                    </td>
                    <td>
                        <center><?php $r10=$v52+$v57+$v62+$v67+$v72+$v77+$v82+$v87+$v92+$v97+$v102+$v107+$v112+$v117+$v122+$v127+$v132+$v137+$v142+$v147+$v152+$v157+$v162+$v167+$v172+$v177+$v182+$v187+$v192+$v197;
                            $as46=number_format($r10, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php $r11=$v53+$v58+$v63+$v68+$v73+$v78+$v83+$v88+$v93+$v98+$v103+$v108+$v113+$v118+$v123+$v128+$v133+$v138+$v143+$v148+$v153+$v158+$v163+$v168+$v173+$v178+$v183+$v188+$v193+$v198;
                            $as46=number_format($r11, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php $r12=$v54+$v59+$v64+$v69+$v74+$v79+$v84+$v89+$v94+$v99+$v104+$v109+$v114+$v119+$v124+$v129+$v134+$v139+$v144+$v149+$v154+$v159+$v164+$v169+$v174+$v179+$v184+$v189+$v194+$v199;
                            $as46=number_format($r12, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $r13=$v55+$v60+$v65+$v70+$v75+$v80+$v85+$v90+$v95+$v100+$v105+$v110+$v115+$v120+$v125+$v130+$v135+$v140+$v145+$v150+$v155+$v160+$v165+$v170+$v175+$v180+$v185+$v190+$v195+$v200;
                            $as46=number_format($r13, 0, '.', ',');
                            echo($as46);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $r14=$tot19+$tot20+$tot56+$tot21+$tot22+$tot23+$tot24+$tot25+$tot26+$tot27+$tot29+$tot30+$tot31+$tot34+$tot36+$tot37+$tot38+$tot35+$tot40+$tot41+$tot42+$tot43+$tot44+$tot45+$tot46+$tot47+$tot48+$tot50+$tot52+$tot53;
                            $as46=number_format($r14, 0, '.', ',');
                            echo($as46);
                        ?> </center>
                    </td>
                    <td>
                       <center> <?php $r15=$var19+$var20+$var56+$var21+$var22+$var23+$var24+$var25+$var26+$var27+$var29+$var30+$var31+$var34+$var36+$var37+$var38+$var35+$var40+$var41+$var42+$var43+$var44+$var45+$var46+$var47+$var48+$var50+$var52+$var53;
                            $as46=number_format($r15, 0, '.', ',');
                            echo($as46);
                        ?></center>
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
                <tr>
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
                        <center> <?php $resultado4=$r4+$r12;
                            $as52=number_format($resultado4, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado5=$r5+$r13;
                            $as52=number_format($resultado5, 0, '.', ',');
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
                
                <tr>
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
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    
                    <td>
                        <center> 0</center>
                    </td>
                    

                </tr>
                <tr>
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
                        <center> <?php $resultado4=$r4+$r12;
                            $as52=number_format($resultado4, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado5=$r5+$r13;
                            $as52=number_format($resultado5, 0, '.', ',');
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
                <tr>
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
                        <center> <?php $iva3=$resultado4*0.16;
                            $as52=number_format($iva3, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $iva4=$resultado5*0.16;
                            $as52=number_format($iva4, 0, '.', ',');
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
                <tr>
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
                        <center> <?php $resultado11=$resultado4+$iva3;
                            $as52=number_format($resultado11, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado12=$resultado5+$iva4;
                            $as52=number_format($resultado12, 0, '.', ',');
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
                <tr>
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
                <tr>
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

                </tr>
                <tr>
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

                </tr><tr>
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

                </tr><tr>
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

                </tr><tr>
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

                </tr><tr>
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

                </tr><tr>
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

                
                <tr>
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





                <tr>
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

                </tr><tr>
                    <td>
                        BONO OTRAS GRATIFICACIONES (PROV)
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

                </tr><tr>

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

                </tr><tr>
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

                </tr><tr>
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

                </tr><tr>
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

                </tr><tr>
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

                </tr><tr>
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

                </tr><tr>       
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
<tr>
                   
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
                 <tr>
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
                        <center> <?php $resultado4=$r4+$r12;
                            $as52=number_format($resultado4, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado5=$r5+$r13;
                            $as52=number_format($resultado5, 0, '.', ',');
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
                
                <tr>
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
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    
                    <td>
                        <center> 0</center>
                    </td>
                    

                </tr>
                <tr>
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
                        <center> <?php $resultado4=$r4+$r12;
                            $as52=number_format($resultado4, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado5=$r5+$r13;
                            $as52=number_format($resultado5, 0, '.', ',');
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
                <tr>
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
                        <center> <?php $iva3=$resultado4*0.16;
                            $as52=number_format($iva3, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $iva4=$resultado5*0.16;
                            $as52=number_format($iva4, 0, '.', ',');
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
                        ______________
                    </td>
                   

                </tr>
                <tr>
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
                        <center> <?php $resultado11=$resultado4+$iva3;
                            $as52=number_format($resultado11, 0, '.', ',');
                            echo($as52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $resultado12=$resultado5+$iva4;
                            $as52=number_format($resultado12, 0, '.', ',');
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>

                </tr>

            </tbody>

        </table>
        
    </center>
    
</body>

                </div> 


                
                </br></br></br></br>
                    <div>
                            <form method="POST" action=""> <h4> CEDULA </h4>
                                </br>
                            <!--<iframe width="670" height="230" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTk51q-aUgyOYlauSPr3iHj5UCU8NrDH8FRDQeuLANHuQCDjeKccjQoXYMisJVxiUamCC4Yr4g4EtH2/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>-->

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script>
        function showEdit(editableObj) {
            $(editableObj);
        } 
        
        function saveToDatabase(editableObj,column,id) {
            $(editableObj);
            $.ajax({
                url: "saveedit.php",
                type: "POST",
                data: 'column='+column+'&editval='+editableObj.innerHTML+'&var'+'&id='+id,
                success: function(data){
                    $(editableObj);
                }        
           });
        }
        </script>
<?PHP 

$query40 = <<<ENDSQL
select * from `multiva.php_interview_questions3` order by id ASC;
ENDSQL;

$queryJobConfig = $bigQuery->query($query40);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $j=1;
    $rows40 = $queryResults->rows();
    foreach($rows40 as $row40){
        
        

        
       $arr40[$row40['id']]=$row40;
     /*   $arre1[$arr1['BANCO']]=$arr1;
        $arre2[$arr1['GFM']]=$arr1;
        $arre3[$arr1['CASA']]=$arr1;*/
        //print_r($arr6);
    }
    }?>
    <table class="tbl-qa">
          <thead>
              <tr>
                <th class="table-header" width="10%">ID</th>
                <th class="table-header" width="40%">CONCEPTO</th>
                <th class="table-header" width="10%">BANCO</th>
                <th class="table-header" width="10%">CASA</th>
                <th class="table-header" width="10%">OPERADORA</th>
                <th class="table-header" width="10%"> GFM</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($rows40 as $row40) {
          ?>
              <tr class="table-row">
                <td><?php echo $row40['id']; ?></td>
                <td><?php echo $row40["CONCEPTO"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'BANCO','<?php echo $row40["id"].$row40['BANCO']; ?>')" onClick="showEdit(this);"><?php echo $row40["BANCO"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'CASA','<?php echo $row40["id"]; ?>')" onClick="showEdit(this);"><?php echo $row40["CASA"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'OPERADORA','<?php echo $row40["id"]; ?>')" onClick="showEdit(this);"><?php echo $row40["OPERADORA"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'GFM','<?php echo $row40["id"]; ?>')" onClick="showEdit(this);"><?php echo $row40["GFM"]; ?></td>
              </tr>
        <?php
        }
        ?>
          </tbody>
        </table>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$sql = "SELECT * from php_interview_questions2";
$faq = $db_handle->runQuery($sql);
?>

        
        
   
    <body>      
       <table class="tbl-qa">
          <thead>
              <tr>

                <th class="table-header" width="10%">ID</th>
                <th class="table-header" width="40%">CONCEPTO</th>
                <th class="table-header" width="10%">BANCO</th>
                <th class="table-header" width="10%">CASA</th>
                <th class="table-header" width="10%">OPERADORA</th>
                <th class="table-header" width="10%"> GFM</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($faq as $k=>$v) {
          ?>
              <tr class="table-row">
                <td><?php echo $k+1; ?></td>
                <td><?php echo $faq[$k]["CONCEPTO"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'BANCO','<?php echo $faq[$k]["id"]; ?>')" onClick="showEdit(this);"><?php echo $BANCO=$faq[$k]["BANCO"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'CASA','<?php echo $faq[$k]["id"]; ?>')" onClick="showEdit(this);"><?php echo $CASA=$faq[$k]["CASA"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'OPERADORA','<?php echo $faq[$k]["id"]; ?>')" onClick="showEdit(this);"><?php echo $OPERADORA=$faq[$k]["OPERADORA"]; ?></td>
                <td contenteditable="true" onBlur="saveToDatabase(this,'GFM','<?php echo $faq[$k]["id"]; ?>')" onClick="showEdit(this);"><?php echo $GFM=$faq[$k]["GFM"]; ?></td>
              </tr>
        <?php
        }
        ?>
          </tbody>
        </table>
    </body>
</html>


                            <input type="submit" name="Cargar">
                            </form>
               
                

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