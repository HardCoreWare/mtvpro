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
    color: #A8AFB8;
    cursor: pointer;
}

.dropdown {
    color: #A8AFB8;
    position: relative;
}

.dropdown-content {
   
    display: none;
    text-align: justify;
    text-justify: inter-word;
    position: absolute;
    background-color: white;
    min-width: 550px;
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
    color: black;
    }


.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
   color: #A8AFB8;
    
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
                                <h4 class="page-title">5103010600</h4>
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
                <div class="content">
                    
           
                




<?php

require __DIR__ . '/../vendor/autoload.php';
use GuzzleHttp\HTTP\Client;
use Google\Cloud\BigQuery\BigQueryClient;


$projectId='informe-211921';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);
//echo "BIGQUERY PROCESS2";
$query =<<<ENDSQL
select * from `INFOR.SALDO_MESUAL_1` where CUENTA="5103010600";
ENDSQL;
//echo "BIGQUERY PROCESS3";

$queryJobConfig = $bigQuery->query($query);
$queryResults = $bigQuery->runQuery($queryJobConfig);

//echo "BIGQUERY PROCESS4";

if ($queryResults->isComplete()) {
    $i=0;
    $rows = $queryResults->rows();
    foreach($rows as $row){
        $arr[$row['SOCIEDAD']]=$row;
    //return $queryResults;
    //print_r($arr);
    //print_r($arr[5300]['FEBRERO']);
    }

}else {
    throw new Exception('The query failed to complete');
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
        
            
        
        <table class="table-hover table-fixed">
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
                       <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
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
            </thead>
            <tbody>
                <tr>
                    <td>
                        5103010600
    <?php echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";?>
  
                    </td>
                    <td>
                        <CENTER><div class="dropdown">
  <a class="dropbtn">

    <?php $Qrs=$arr[5300]['FEBRERO'];
        $n=number_format($Qrs, 0, '.', ',');
                            print_r($n);
                        ?> </a> <?php echo "&nbsp"."&nbsp";?>
  <div class="dropdown-content">
    <a><?php $consulta=<<<ENDSQL
select FECHA, DESCRIPCION, MONTO, MONEDA from `INFOR.5103010600`  where  cuenta="5103010600" and fecha like "201801%";
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila = $queryResults->rows();
    foreach ($fila as $fila) {
        
       ?></br><?php printf('FECHA: %s   DESCRIPCION: %s     MONTO: %s %s ' . PHP_EOL, $fila['FECHA'], $fila['DESCRIPCION'], $fila['MONTO'],$fila['MONEDA']);
    }
} else {
    throw new Exception('The query failed to complete');
} ?> </a>
    
  </div>
</div>  </CENTER>
                    </td>
                    <td>
                         <center><div class="dropdown">
  <a class="dropbtn"><?php  $Qrs1=$arr[5300]['MARZO']; 
                             $n1=number_format($Qrs1, 0, '.', ',');
                             echo($n1);
                         ?></a> <?php echo "&nbsp"."&nbsp"."&nbsp"."&nbsp";?>
                           <div class="dropdown-content">
    <a><?php  $consulta1=<<<ENDSQL
select FECHA, DESCRIPCION, MONTO, MONEDA from `INFOR.5103010600`  where cuenta="5103010600" and fecha like "201802%";
ENDSQL;

$queryJobConfig = $bigQuery->query($consulta1);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $fila1 = $queryResults->rows();
    foreach ($fila1 as $fila1) {
        
       ?></br><?php printf('FECHA: %s DESCRIPCION: %s MONTO: %s %s ' . PHP_EOL, $fila1['FECHA'],$fila1['DESCRIPCION'], $fila1['MONTO'],$fila1['MONEDA']);
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
  <a class="dropbtn"> <?php   $Qrs2=$arr[5300]['ABRIL'];
                            $n2=number_format($Qrs2, 0, '.', ',');
                            echo($n2);
                         ?> </a><?php echo "&nbsp"."&nbsp";?>
                           <div class="dropdown-content">
    
    <a><?php    
?></a>
  
  </div>
</div>

                    </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
  <a class="dropbtn"> <?php  $Qrs3=$arr[5300]['MAYO']; 
                            $n3=number_format($Qrs3, 0, '.', ',');
                            echo($n3);
                        ?></a><?php echo "&nbsp"."&nbsp";?>
  <div class="dropdown-content">
   
    <a><?php 
?></a>
  
  </div>
</div>


                    </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
  <a class="dropbtn"> <?php  $Qrs4=$arr[5300]['JUNIO'];
                            $n4=number_format($Qrs4, 0, '.', ',');
                            echo($n4);
                         ?></a><?php echo "&nbsp"."&nbsp";?>
  <div class="dropdown-content">
   
    <a><?php 
 ?></a>
  
  </div>
</div>


                     </center>
                    </td>
                    <td>
                        <center> <div class="dropdown">
  <a class="dropbtn"><?php  $Qrs5=$arr[5300]['JULIO'];
                            $n5=number_format($Qrs5, 0, '.', ',');
                            echo($n5);
                        ?></a><?php echo "&nbsp"."&nbsp";?>
  <div class="dropdown-content">
   
   <a><?php ?></a>
  
  </div>
</div>


                    </center>
                    </td>
                    <td>
                        <center><div class="dropdown">
  <a class="dropbtn"><?php $Qrs6=$arr[5300]['AGOSTO']; 
                            $n6=number_format($Qrs6, 0, '.', ',');
                            echo($n6);
                        ?> </a><?php echo "&nbsp"."&nbsp";?>
  <div class="dropdown-content">
    
    <a><?php   ?></a>
  
  </div>
</div>


                    </center>
                    </td>
                    </tr>

<tr>
    <td>
    </td>
</tr>
<tr>
    <td>
    </td>
</tr>
<tr>
    <td>
    </td>
</tr>
<tr>
    <td>
    </td>
</tr>
<tr>
    <td>
    </td>
</tr>
<tr>
    <td>
    </td>
</tr>
<tr>
    <td>
    </td>
</tr>
</tbody>
    
        </TABLE>
   
    
</body>

                


                

          <!-- content -->

                



            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <!-- /Right-bar -->

     
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