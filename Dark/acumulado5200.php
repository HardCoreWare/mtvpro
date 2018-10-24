<!DOCTYPE html>
<html><style type="text/css">
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
    
    z-index: 1;
}


.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}


.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}


.dropdown:hover .dropbtn {
    background-color: #065b82;
    
}
P.mipar {text-align: right}
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
                                <h4 class="page-title"><span>Acumulado</span><span> Banco 5200</span></h4>
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
                            <img src="assets/images/users/m2.jpg" alt="user-img" title="" class="img-circle img-thumbnail img-responsive">
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

                           <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-other.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="zmdi zmdi-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li>
                                <a href="inbox.html" class="waves-effect"><i class="zmdi zmdi-email"></i><span class="label label-purple pull-right">New</span><span> Mail </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-item"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-layers"></i><span>Extra Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-projects.html">Projects</a></li>
                                    <li><a href="extras-tour.html">Tour</a></li>
                                    <li><a href="extras-taskboard.html">Taskboard</a></li>
                                    <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-maps.html">Maps</a></li>
                                    <li><a href="extras-contact.html">Contact list</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-email-template.html">Email template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming soon</a></li>
                                </ul>
                            </li>-->

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

//echo 'Hello, LIZ!';

require __DIR__ . '/../vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\BigQuery\BigQueryClient;
use GuzzleHttp\HTTP\Client;

$projectId='informe-211921';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);


$query=<<<ENDSQL
select * from `INFOR.acumuladofinal1`;
ENDSQL;

$queryJobConfig = $bigQuery->query($query);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i = 0;
    $rows = $queryResults->rows();
    foreach ($rows as $row) {
        $arr[$row['cuenta']]=$row;
        //print_r($arr['6491350100']);
    }
} else {
    throw new Exception('The query failed to complete');
}
//echo "\ n CONSULTA INSERTADA EN ARRAY";
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
        </br>
        <h1>
            BANCO MULTIVA S.A. INSTITUCION DE BANCA MULTIPLE GRUPO FINANCIERO MULTIVA
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

<p></p>
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
echo $fecha_actual; ?></p>
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
                        ________________
                    </td>
                    <td>
                        ________________ 
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
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
                        ___________________________________________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________ 
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
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
                       </br> 
  SUELDOS A FUNCIONARIOS Y EMPLEADOS</a>
  
    <a> </a>
  </div>
</div>
                    </td>
                    <td>
                        <CENTER><?php $Qrs=$arr['6410010102']['ENERO'];
                            //$n=number_format($número);
                            $n=number_format($Qrs, 0, '.', ',');
                            echo($n);
                        ?> 




                    </CENTER>
                    </td>
                    <td>
                         <center><?php  $Qrs1=$arr['6410010102']['FEBRERO']; 
                             $n1=number_format($Qrs1, 0, '.', ',');
                            echo($n1);
                         ?>
                          </center> 
                    </td>
                    <td>
                        <center><?php  $Qrs2=$arr['6410010102']['MARZO'];
                            $n2=number_format($Qrs2, 0, '.', ',');
                            echo($n2);
                          ?></a>
  
  </div>
</div>

                    </center>
                    </td>
                    <td>
                        <center><?php  $Qrs3=$arr['6410010102']['ABRIL']; 
                            $n3=number_format($Qrs3, 0, '.', ',');
                            echo($n3);
                        ?>

                    </center>
                    </td>
                    <td>
                        <center><?php  $Qrs4=$arr['6410010102']['MAYO'];
                            $n4=number_format($Qrs4, 0, '.', ',');
                            echo($n4);
                         ?>


                     </center>
                    </td>
                    <td>
                        <center> <?php  $Qrs5=$arr['6410010102']['JUNIO']; 
                            $n5=number_format($Qrs5, 0, '.', ',');
                            echo($n5);
                        ?>


                    </center>
                    </td>
                    <td>
                        <center><?php $Qrs6=$arr['6410010102']['JULIO']; 
                            $n6=number_format($Qrs6, 0, '.', ',');
                            echo($n6);
                        ?> 

                    </center>
                    </td>
                    

                </tr>
                <tr>
                    <td>
                       
   AGUINALDO Y OTRAS GRATIFICACIONES
                    </td>
                    <td>
                        <CENTER><?php  $Qrs7=$arr['6410010103']['ENERO']; 
                            $n7=number_format($Qrs7, 0, '.', ',');
                            echo($n7);?></a>
  
                         </CENTER>
                    </td>
                    <td>
                         <center><?php  $Qrs8=$arr['6410010103']['FEBRERO'];

                            $n8=number_format($Qrs8, 0, '.', ',');
                            echo($n8);
                          ?> 

                      </center> 
                    </td>
                    <td>
                        <center><?php  $Qrs9=$arr['6410010103']['MARZO']; 
                            $n9=number_format($Qrs9, 0, '.', ',');
                            echo($n9);

                        ?> 


                    </center>
                    </td>
                    <td>
                        <center> <?php  $Qrs10=$arr['6410010103']['ABRIL'];
                            $n10=number_format($Qrs10, 0, '.', ',');
                            echo($n10);
                         ?>

                     </center>
                    </td>
                    <td>
                        <center><?php  $Qrs11=$arr['6410010103']['MAYO']; 
                            $n11=number_format($Qrs11, 0, '.', ',');
                            echo($n11);
                        ?>

                    </center>
                    </td>
                    <td>
                        <center> <?php  $Qrs12=$arr['6410010103']['JUNIO']; 
                            $n12=number_format($Qrs12, 0, '.', ',');
                            echo($n12);
                        ?>
                    </center>
                    </td>
                    <td>
                        <center><?php $Qrs13=$arr['6410010103']['JULIO']; 
                            $n13=number_format($Qrs13, 0, '.', ',');
                            echo($n13);
                        ?>


                    </center>
                    </td>


                   
                </tr>
                <tr>
                    <td>
                        
  
GRATIFICACIONES</a>
    <a>  </a>
  </div>
</div>

                    </td>
                    <td>
                        <CENTER>
<?php  $Qrs14=$arr['6410010122']['ENERO']; 
                            $n14=number_format($Qrs14, 0, '.', ',');
                            echo($n14);

                        ?>
 </CENTER>
                    </td>
                    <td>
                         <center>
<?php  $Qrs15=$arr['6410010122']['FEBRERO'];
                            $n15=number_format($Qrs15, 0, '.', ',');
                            echo($n15);
                          ?> 
</center> 
                    </td>
                    <td>
                        <center>
<?php  $Qrs16=$arr['6410010122']['MARZO']; 
                            $n=number_format($Qrs16, 0, '.', ',');
                            echo($n);
                        ?> 
</center>
                    </td>
                    <td>
                        <center>
 <?php  $Qrs17=$arr['6410010122']['ABRIL'];
                            $n17=number_format($Qrs17, 0, '.', ',');
                            echo($n17);
                         ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $Qrs18=$arr['6410010122']['MAYO'];
                            $n18=number_format($Qrs18, 0, '.', ',');
                            echo($n18);
                         ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $Qrs19=$arr['6410010122']['JUNIO']; 
                            $n19=number_format($Qrs19, 0, '.', ',');
                            echo($n19);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $Qrs20=$arr['6410010122']['JULIO']; 
                            $n20=number_format($Qrs20, 0, '.', ',');
                            echo($n20);
                        ?>
 </center>
                    </td>


                    

                </tr>
                <tr>
                    <td>
                       
  
 BONO </a>

    

                    </td>
                    <td>
                        <CENTER>  
<?php  $Qrs21=$arr['6410010104']['ENERO']; 
                            $n21=number_format($Qrs21, 0, '.', ',');
                            echo($n21);
                        ?>
</CENTER>
                    </td>
                    <td>
                         <center> 
<?php  $Qrs22=$arr['6410010104']['FEBRERO']; 
                            $n22=number_format($Qrs22, 0, '.', ',');
                            echo($n22);
                         ?>
 </center> 
                    </td>
                    <td>
                        <center> 
<?php  $Qrs23=$arr['6410010104']['MARZO']; 
                            $n23=number_format($Qrs23, 0, '.', ',');
                            echo($n23);
                        ?> 
</center>
                    </td>
                    <td>
                        <center>  
 <?php  $Qrs24=$arr['6410010104']['ABRIL']; 
                            $n24=number_format($Qrs24, 0, '.', ',');
                            echo($n24);
                        ?>
</center>
                    </td>
                    <td>
                        <center>  
<?php  $Qrs25=$arr['6410010104']['MAYO']; 
                            $n25=number_format($Qrs25, 0, '.', ',');
                            echo($n25);
                        ?>
</center>
                    </td>
                    <td>
                        <center>  
<?php  $Qrs26=$arr['6410010104']['JUNIO'];
                            $n26=number_format($Qrs26, 0, '.', ',');
                            echo($n26);
                         ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php $Qrs27=$arr['6410010104']['JULIO']; 
                            $n27=number_format($Qrs27, 0, '.', ',');
                            echo($n27);
                        ?> 
</center>
                    </td>


                    

                </tr>
                <tr>
                    <td>
                       
  
 INDEMNIZACIÓN LEGAL AL RETIRO</a>

    



                    </td>
                    <td>
                        <CENTER> <?php  print_r($Qrs28=0); ?></CENTER>
                    </td>
                    <td>
                         <center><?php  print_r($Qrs29=0); ?> </center> 
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs30=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs31=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs32=0); ?></center>
                    </td>
                    <td>
                        <center> <?php  print_r($Qrs33=0); ?></center>
                    </td>
                    <td>
                        <center> <?php print_r($Qrs34=0);?></center>
                    </td>


                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                       
  
 INDEMNIZACIONES POR DESPIDO
    
<?php 


?>
                    </td>
                   <td>
                        <CENTER> <?php 
                            //print_r($arr['6491350100']['ENERO']);
                        $Qrs35=0; 
                            $numbers=number_format($Qrs35, 0,'.', ',');
                            echo($numbers);
                        ?>
                        </CENTER>
                    </td>
                    <td>
                         <center><?php $Qrs36=0; 
                            $numbers1=number_format($Qrs36, 0, '.', ',');
                            echo($numbers1);
                        ?>
                        </center> 
                    </td>
                    <td>
                        <center> <?php $Qrs37=0; 
                            $numbers2=number_format($Qrs37, 0, '.', ',');
                            echo($numbers2);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $Qrs38=0; 
                            $numbers3=number_format($Qrs38, 0, '.', ',');
                            echo($numbers3);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $Qrs39=0; 
                            $numbers4=number_format($Qrs39, 0, '.', ',');
                            echo($numbers4);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php $Qrs40=0; 
                            $numbers5=number_format($Qrs40, 0, '.', ',');
                            echo($numbers5);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php $Qrs41=0; 
                            $numbers6=number_format($Qrs41, 0, '.', ',');
                            echo($numbers6);
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
                        
  
CUOTAS AL I.M.S.S.</a>

    

                    </td>
                    <td>
                        <CENTER>
<?php  $Qrs42=$arr['6410010111']['ENERO']; 
                            $n42=number_format($Qrs42, 0, '.', ',');
                            echo($n42);
                        ?> 
</CENTER>
                    </td>
                    <td>
                         <center>
<?php  $Qrs43=$arr['6410010111']['FEBRERO'];
                            $n43=number_format($Qrs43, 0, '.', ',');
                            echo($n43);
                          ?>
 </center> 
                    </td>
                    <td>
                        <center>
<?php  $Qrs44=$arr['6410010111']['MARZO']; 
                            $n44=number_format($Qrs44, 0, '.', ',');
                            echo($n44);
                        ?> 
</center>
                    </td>
                    <td>
                        <center> 
<?php  $Qrs45=$arr['6410010111']['ABRIL']; 
                            $n45=number_format($Qrs45, 0, '.', ',');
                            echo($n45);
                        ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $Qrs46=$arr['6410010111']['MAYO']; 
                            $n46=number_format($Qrs46, 0, '.', ',');
                            echo($n46);
                        ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $Qrs47=$arr['6410010111']['JUNIO']; 
                            $n47=number_format($Qrs47, 0, '.', ',');
                            echo($n47);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $Qrs48=$arr['6410010111']['JULIO']; 
                            $n48=number_format($Qrs48, 0, '.', ',');
                            echo($n48);
                        ?>
 </center>
                    </td>

                </tr>
                <tr>
                    <td>
                       
  
 APORTACIPONES AL INFONAVIT</a>

   
</div>

                    </td>
                    <td>
                        <CENTER>
<?php  $Qrs49=$arr['6410010112']['ENERO'];
                            $n49=number_format($Qrs49, 0, '.', ',');
                            echo($n49);
                         ?> 
</CENTER>
                    </td>
                    <td>
                         <center>
<?php  $Qrs50=$arr['6410010112']['FEBRERO']; 
                            $n50=number_format($Qrs50, 0, '.', ',');
                            echo($n50);
                         ?> 
</center> 
                    </td>
                    <td>
                        <center>
<?php  $Qrs51=$arr['6410010112']['MARZO']; 
                            $n51=number_format($Qrs51, 0, '.', ',');
                            echo($n51);
                        ?>
 </center>
                    </td>
                    <td>
                        <center>
 <?php  $Qrs52=$arr['6410010112']['ABRIL']; 
                            $n52=number_format($Qrs52, 0, '.', ',');
                            echo($n52);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php $Qrs53=$arr['6410010112']['MAYO']; 
                            $n53=number_format($Qrs53, 0, '.', ',');
                            echo($n53);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $Qrs54=$arr['6410010112']['JUNIO']; 
                            $n54=number_format($Qrs54, 0, '.', ',');
                            echo($n54);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $Qrs55=$arr['6410010112']['JULIO']; 
                            $n55=number_format($Qrs55, 0, '.', ',');
                            echo($n55);
                        ?>
 </center>
                    </td>

                </tr>
                <tr>
                    <td>
                       
  
 2% SOBRE NOINA E IMP. ESTATALES</a>

    

                    </td>
                    <td>
                        <CENTER>
<?php  $Qrs56=$arr['6410010125']['ENERO']; 
                            $n56=number_format($Qrs56, 0, '.', ',');
                            echo($n56);
                        ?> 
</CENTER>
                    </td>
                    <td>
                         <center>
<?php  $Qrs57=$arr['6410010125']['FEBRERO']; 
                            $n57=number_format($Qrs57, 0, '.', ',');
                            echo($n57);
                         ?>
 </center> 
                    </td>
                    <td>
                        <center>
<?php  $Qrs58=$arr['6410010125']['MARZO']; 
                            $n58=number_format($Qrs58, 0, '.', ',');
                            echo($n58);
                        ?>
 </center>
                    </td>
                    <td>
                        <center>
 <?php  $Qrs59=$arr['6410010125']['ABRIL']; 
                            $n59=number_format($Qrs59, 0, '.', ',');
                            echo($n59);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $Qrs60=$arr['6410010125']['MAYO']; 
                            $n60=number_format($Qrs60, 0, '.', ',');
                            echo($n60);
                        ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $Qrs61=$arr['6410010125']['JUNIO']; 
                            $n61=number_format($Qrs61, 0, '.', ',');
                            echo($n61);
                        ?>

</center>
                    </td>
                    <td>
                        <center>
<?php $Qrs62=$arr['6410010125']['JULIO']; 
                            $n62=number_format($Qrs62, 0, '.', ',');
                            echo($n62);
                        ?>
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
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        
  
PRIMA VACACIONAL</a>

   

                    </td>
                    <td>
                        <CENTER>  
<?php  $Qrs63=$arr['6410010113']['ENERO']; 
                            $n63=number_format($Qrs63, 0, '.', ',');
                            echo($n63);
                        ?>
 </CENTER>
                    </td>
                    <td>
                         <center> 
<?php  $Qrs64=$arr['6410010113']['FEBRERO']; 
                            $n64=number_format($Qrs64, 0, '.', ',');
                            echo($n64);
                         ?>
 </center> 
                    </td>
                    <td>
                        <center>  
<?php  $Qrs65=$arr['6410010113']['MARZO']; 
                            $n65=number_format($Qrs65, 0, '.', ',');
                            echo($n65);
                        ?> 
</center>
                    </td>
                    <td>
                        <center>  
 <?php  $Qrs66=$arr['6410010113']['ABRIL']; 
                            $n66=number_format($Qrs66, 0, '.', ',');
                            echo($n66);
                        ?>
</center>
                    </td>
                    <td>
                        <center>  
<?php  $Qrs67=$arr['6410010113']['MAYO']; 
                            $n67=number_format($Qrs67, 0, '.', ',');
                            echo($n67);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $Qrs68=$arr['6410010113']['JUNIO']; 
                            $n68=number_format($Qrs68, 0, '.', ',');
                            echo($n68);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $Qrs69=$arr['6410010113']['JULIO']; 
                            $n69=number_format($Qrs69, 0, '.', ',');
                            echo($n69);
                        ?> 
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
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                       
  
 VALES DE DESPENSA</a>

    

                    </td>
                    <td>
                        <CENTER> 
<?php  $Qrs70=$arr['6410010115']['ENERO']; 
                            $n70=number_format($Qrs70, 0, '.', ',');
                            echo($n70);
                        ?>
 </CENTER>
                    </td>
                    <td>
                         <center>
<?php  $Qrs71=$arr['6410010115']['FEBRERO']; 
                            $n71=number_format($Qrs71, 0, '.', ',');
                            echo($n71);
                         ?> 
</center> 
                    </td>
                    <td>
                        <center>
<?php  $Qrs72=$arr['6410010115']['MARZO']; 
                            $n72=number_format($Qrs72, 0, '.', ',');
                            echo($n72);
                        ?> 
</center>
                    </td>
                    <td>
                        <center> 
<?php  $Qrs73=$arr['6410010115']['ABRIL']; 
                            $n73=number_format($Qrs73, 0, '.', ',');
                            echo($n73);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $Qrs74=$arr['6410010115']['MAYO']; 
                            $n74=number_format($Qrs74, 0, '.', ',');
                            echo($n74);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $Qrs75=$arr['6410010115']['JUNIO']; $n75=number_format($Qrs75, 0, '.', ',');
                            echo($n75);?>
</center>
                    </td>
                    <td>
                        <center> 
<?php $Qrs76=$arr['6410010115']['JULIO'];$n76=number_format($Qrs76, 0, '.', ',');
                            echo($n76); ?>
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
                       
  
 SEG.DE VIDA</a>

    

                    </td>
                    <td>
                        <CENTER>
<?php $Qrs77=$arr['6410010107']['ENERO'];$n77=number_format($Qrs77, 0, '.', ',');
                            echo($n77); ?> 
</CENTER>
                    </td>
                    <td>
                         <center>
<?php  $Qrs78=$arr['6410010107']['FEBRERO']; $n78=number_format($Qrs78, 0, '.', ',');
                            echo($n78);?>
 </center> 
                    </td>
                    <td>
                        <center>
<?php  $Qrs79=$arr['6410010107']['MARZO']; $n79=number_format($Qrs79, 0, '.', ',');
                            echo($n79);?>
</center>
                    </td>
                    <td>
                        <center> 
<?php $Qrs80=$arr['6410010107']['ABRIL']; $n80=number_format($Qrs80, 0, '.', ',');
                            echo($n80);?>
</center>
                    </td>
                    <td>
                        <center>
<?php  $Qrs81=$arr['6410010107']['MAYO']; $n81=number_format($Qrs81, 0, '.', ',');
                            echo($n81);?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $Qrs82=$arr['6410010107']['JUNIO'];$n82=number_format($Qrs82, 0, '.', ',');
                            echo($n82); ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $Qrs83=$arr['6410010107']['JULIO']; $n83=number_format($Qrs83, 0, '.', ',');
                            echo($n83);?>
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
                      
  
  SEG. GTOS. MÉDICOS MAYORES</a>

    

                    </td>
                    <td>
                        <CENTER>
<?php  $Qrs84=$arr['6410010108']['ENERO'];$n84=number_format($Qrs84, 0, '.', ',');
                            echo($n84); ?>
 </CENTER>
                    </td>
                    <td>
                         <center>
<?php  $Qrs85=$arr['6410010108']['FEBRERO'];$n85=number_format($Qrs85, 0, '.', ',');
                            echo($n85); ?> 
</center> 
                    </td>
                    <td>
                        <center>
<?php  $Qrs86=$arr['6410010108']['MARZO'];$n86=number_format($Qrs86, 0, '.', ',');
                            echo($n86); ?>
 </center>
                    </td>
                    <td>
                        <center> 
<?php  $Qrs87=$arr['6410010108']['ABRIL'];$n87=number_format($Qrs87, 0, '.', ',');
                            echo($n87); ?>
</center>
                    </td>
                    <td>
                        <center> 
 <?php  $Qrs88=$arr['6410010108']['MAYO'];$n88=number_format($Qrs88, 0, '.', ',');
                            echo($n88); ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $Qrs89=$arr['6410010108']['JUNIO'];
                            $n89=number_format($Qrs89, 0, '.', ',');
                            echo($n89);
                         ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $Qrs90=$arr['6410010108']['JULIO'];$n90=number_format($Qrs90, 0, '.', ',');
                            echo($n90); ?>
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
                       
  
 UNIFORMES</a>

   


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
                       
  
 PRIMA DE ANTIGUEDAD</a>

    

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
                        ________________
                    </td>
                    <td>
                        ________________ 
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
                    </td>
                    <td>
                        ________________
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
                        <CENTER> <?php $RES1=$Qrs+$Qrs7+$Qrs14+$Qrs21+$Qrs28+$Qrs35+$Qrs42+$Qrs49+$Qrs56+$Qrs63+$Qrs70+$Qrs77+$Qrs84+$Qrs91+$Qrs98;

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
                        </BR>
  
GASTOS DE VIAJE

                    </td>
                    <td>
                        <CENTER> 
<?php  $v1=$arr['6491350400']['ENERO']+$arr['6491350100']['ENERO']+$arr['6491350200']['ENERO']+$arr['6491350300']['ENERO']; $n91=number_format($v1, 0, '.', ',');
                            echo($n91);?>
 </CENTER>
                    </td>
                    <td>
                         <center>
<?php  $v2=$arr['6491350400']['FEBRERO']+$arr['6491350100']['FEBRERO']+$arr['6491350200']['FEBRERO']+$arr['6491350300']['FEBRERO'];$n92=number_format($v2, 0, '.', ',');
                            echo($n92); ?>
 </center> 
                    </td>
                    <td>
                        <center>
<?php  $v3=$arr['6491350400']['MARZO']+$arr['6491350100']['MARZO']+$arr['6491350200']['MARZO']+$arr['6491350300']['MARZO'];$n93=number_format($v3, 0, '.', ',');
                            echo($n93); ?>
</center>
                    </td>
                    <td>
                        <center> 
 <?php  $v4=$arr['6491350400']['ABRIL']+$arr['6491350100']['ABRIL']+$arr['6491350200']['ABRIL']+$arr['6491350300']['ABRIL']; $n94=number_format($v4, 0, '.', ',');
                            echo($n94);?>
</center>
                    </td>
                    <td>
                        <center> 
 <?php  $v5=$arr['6491350400']['MAYO']+$arr['6491350100']['MAYO']+$arr['6491350200']['MAYO']+$arr['6491350300']['MAYO'];$n95=number_format($v5, 0, '.', ',');
                            echo($n95); ?>
</center>
                    </td>
                    <td>
                        <center> 
 <?php  $v6=$arr['6491350400']['JUNIO']+$arr['6491350100']['JUNIO']+$arr['6491350200']['JUNIO']+$arr['6491350300']['JUNIO'];$n96=number_format($v6, 0, '.', ',');
                            echo($n96); ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php $v7=$arr['6491350400']['JULIO']+$arr['6491350100']['JULIO']+$arr['6491350200']['JULIO']+$arr['6491350300']['JULIO'];$n97=number_format($v7, 0, '.', ',');
                            echo($n97); ?>
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
                        
  
DIVERSAS PRESTACIONES</a>

   

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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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
                        
  
CONSERVACIÓN Y REPARACIÓN DE EQUIPO
                    </td>
                    <td>
                        <CENTER>
<?php  $c1=$arr['6491410100']['ENERO']+$arr['6491250000']['ENERO']+$arr['6491260000']['ENERO']+$arr['6491250100']['ENERO']+$arr['6491410000']['ENERO'];
                            $n98=number_format($c1, 0, '.', ',');
                            echo($n98);
                         ?>
 </CENTER>
                    </td>
                    <td>
                         <center>
<?php  $c2=$arr['6491410100']['FEBRERO']+$arr['6491250000']['FEBRERO']+$arr['6491260000']['FEBRERO']+$arr['6491250100']['FEBRERO']+$arr['6491410000']['FEBRERO'];
                            $n99=number_format($c2, 0, '.', ',');
                            echo($n99);
                          ?>
 </center> 
                    </td>
                    <td>
                        <center>
<?php  $c3=$arr['6491410100']['MARZO']+$arr['6491250000']['MARZO']+$arr['6491260000']['MARZO']+$arr['6491250100']['MARZO']+$arr['6491410000']['MARZO']; 
                            $n100=number_format($c3, 0, '.', ',');
                            echo($n100);
                        ?>
 </center>
                    </td>
                    <td>
                        <center>
 <?php  $c4=$arr['6491410100']['ABRIL']+$arr['6491250000']['ABRIL']+$arr['6491260000']['ABRIL']+$arr['6491250100']['ABRIL']+$arr['6491410000']['ABRIL'];
                            $n101=number_format($c4, 0, '.', ',');
                            echo($n101);
                         ?>
</center>
                    </td>
                    <td>
                        <center>
<?php  $c5=$arr['6491410100']['MAYO']+$arr['6491250000']['MAYO']+$arr['6491260000']['MAYO']+$arr['6491250100']['MAYO']+$arr['6491410000']['MAYO'];
                            $n102=number_format($c5, 0, '.', ',');
                            echo($n102);
                         ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $c6=$arr['6491410100']['JUNIO']+$arr['6491250000']['JUNIO']+$arr['6491260000']['JUNIO']+$arr['6491250100']['JUNIO']+$arr['6491410000']['JUNIO']; 
                            $n103=number_format($c6, 0, '.', ',');
                            echo($n103);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $c7=$arr['6491410100']['JULIO']+$arr['6491250000']['JULIO']+$arr['6491260000']['JULIO']+$arr['6491250100']['JULIO']+$arr['6491410000']['JULIO']; 
                            $n104=number_format($c7, 0, '.', ',');
                            echo($n104);
                        ?>
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
                        SEGUROS Y FIANZAS
                    </td>







                    <td>
                        <CENTER> <?php 
                            //print_r($se['ENERO']);
                        $Qrs105=$arr['6491070000']['ENERO']; 
                            $numbers7=number_format($Qrs105, 0,'.', ',');
                            echo($numbers7);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs106=$arr['6491070000']['FEBRERO']; 
                            $numbers8=number_format($Qrs106, 0,'.', ',');
                            echo($numbers8);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs107=$arr['6491070000']['MARZO']; 
                            $numbers9=number_format($Qrs107, 0,'.', ',');
                            echo($numbers9);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs108=$arr['6491070000']['ABRIL']; 
                            $numbers10=number_format($Qrs108, 0,'.', ',');
                            echo($numbers10);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs109=$arr['6491070000']['MAYO']; 
                            $numbers11=number_format($Qrs109, 0,'.', ',');
                            echo($numbers11);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs110=$arr['6491070000']['JUNIO']; 
                            $numbers12=number_format($Qrs110, 0,'.', ',');
                            echo($numbers12);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs111=$arr['6491070000']['JULIO']; 
                            $numbers13=number_format($Qrs111, 0,'.', ',');
                            echo($numbers13);
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
                        LUZ Y AGUA
                    </td>

<

                    <td>
                        <CENTER> <?php 
                            //print_r($se['ENERO']);
                        $Qrs112=$arr['6491090000']['ENERO']; 
                            $numbers14=number_format($Qrs112, 0,'.', ',');
                            echo($numbers14);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs113=$arr['6491090000']['FEBRERO']; 
                            $numbers15=number_format($Qrs113, 0,'.', ',');
                            echo($numbers15);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs114=$arr['6491090000']['MARZO']; 
                            $numbers16=number_format($Qrs114, 0,'.', ',');
                            echo($numbers16);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs115=$arr['6491090000']['ABRIL']; 
                            $numbers17=number_format($Qrs115, 0,'.', ',');
                            echo($numbers17);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs116=$arr['6491090000']['MAYO']; 
                            $numbers18=number_format($Qrs116, 0,'.', ',');
                            echo($numbers18);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs117=$arr['6491090000']['JUNIO']; 
                            $numbers19=number_format($Qrs117, 0,'.', ',');
                            echo($numbers19);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs118=$arr['6491090000']['JULIO']; 
                            $numbers20=number_format($Qrs118, 0,'.', ',');
                            echo($numbers20);
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
                      
  
  GASTOS EN TECNOLOGIA</a>

   

                    </td>
                    <td>
                        <CENTER>
<?php  $c8=$arr['6491010000']['ENERO']+$arr['6409000000']['ENERO']; 
                            $n105=number_format($c8, 0, '.', ',');
                            echo($n105);
                        ?> 
</CENTER>
                    </td>
                    <td>
                         <center>
<?php  $c9=$arr['6491010000']['FEBRERO']+$arr['6409000000']['FEBRERO']; $n106=number_format($c9, 0, '.', ',');
                            echo($n106);?> 
</center> 
                    </td>
                    <td>
                        <center>
<?php  $c10=$arr['6491010000']['MARZO']+$arr['6409000000']['MARZO']; 
                            $n107=number_format($c10, 0, '.', ',');
                            echo($n107);
                        ?>
 </center>
                    </td>
                    <td>
                        <center>
 <?php  $c11=$arr['6491010000']['ABRIL']+$arr['6409000000']['ABRIL']; 
                            $n108=number_format($c11, 0, '.', ',');
                            echo($n108);
                        ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $c12=$arr['6491010000']['MAYO']+$arr['6409000000']['MAYO']; 
                            $n109=number_format($c12, 0, '.', ',');
                            echo($n109);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $c13=$arr['6491010000']['JUNIO']+$arr['6409000000']['JUNIO']; 
                            $n110=number_format($c13, 0, '.', ',');
                            echo($n110);
                            ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $c14=$arr['6491010000']['JULIO']+$arr['6409000000']['JULIO']; 
                            $n111=number_format($c14, 0, '.', ',');
                            echo($n111);
                        ?>
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
                        SEGURIDAD
                    </td>



                    <td>
                        <CENTER> <?php 
                            //print_r($arr['6491310000']['ENERO']);
                        $Qrs119=$arr['6491310000']['ENERO']; 
                            $numbers21=number_format($Qrs119, 0,'.', ',');
                            echo($numbers21);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs120=$arr['6491310000']['FEBRERO']; 
                            $numbers22=number_format($Qrs120, 0,'.', ',');
                            echo($numbers22);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs121=$arr['6491310000']['MARZO']; 
                            $numbers23=number_format($Qrs121, 0,'.', ',');
                            echo($numbers23);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs122=$arr['6491310000']['ABRIL']; 
                            $numbers24=number_format($Qrs122, 0,'.', ',');
                            echo($numbers24);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs123=$arr['6491310000']['MAYO']; 
                            $numbers25=number_format($Qrs123, 0,'.', ',');
                            echo($numbers25);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs124=$arr['6491310000']['JUNIO']; 
                            $numbers26=number_format($Qrs124, 0,'.', ',');
                            echo($numbers26);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs125=$arr['6491310000']['JULIO']; 
                            $numbers27=number_format($Qrs125, 0,'.', ',');
                            echo($numbers27);
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
                      
  
  RENTAS INMUEBLES</a>

  
                    </td>
                    <td>
                        <CENTER> 
<?php  $c15=$arr['6403020100']['ENERO']+$arr['6403010100']['ENERO']; 
                            $n112=number_format($c15, 0, '.', ',');
                            echo($n112);
                            ?>
 </CENTER>
                    </td>
                    <td>
                         <center>
<?php  $c16=$arr['6403020100']['FEBRERO']+$arr['6403010100']['FEBRERO']; 
                            $n113=number_format($c16, 0, '.', ',');
                            echo($n113);
                         ?>
 </center> 
                    </td>
                    <td>
                        <center>
<?php  $c17=$arr['6403020100']['MARZO']+$arr['6403010100']['MARZO']; 
                            $n114=number_format($c17, 0, '.', ',');
                            echo($n114);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $c18=$arr['6403020100']['ABRIL']+$arr['6403010100']['ABRIL']; 
                            $n115=number_format($c18, 0, '.', ',');
                            echo($n115);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $c19=$arr['6403020100']['MAYO']+$arr['6403010100']['MAYO']; 
                            $n116=number_format($c19, 0, '.', ',');
                            echo($n116);
                        ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $c20=$arr['6403020100']['JUNIO']+$arr['6403010100']['JUNIO']; 
                            $n117=number_format($c19, 0, '.', ',');
                            echo($n117);
                        ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php $c21=$arr['6403020100']['JULIO']+$arr['6403010100']['JULIO']; 
                            $n118=number_format($c21, 0, '.', ',');
                            echo($n118);
                        ?>
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
                        RENTAS DE EQUIPOS
                    </td>



                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs126=$arr['6403020200']['ENERO']; 
                            $numbers28=number_format($Qrs126, 0,'.', ',');
                            echo($numbers28);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs127=$arr['6403020200']['FEBRERO']; 
                            $numbers29=number_format($Qrs127, 0,'.', ',');
                            echo($numbers29);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs128=$arr['6403020200']['MARZO']; 
                            $numbers30=number_format($Qrs128, 0,'.', ',');
                            echo($numbers30);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs129=$arr['6403020200']['ABRIL']; 
                            $numbers31=number_format($Qrs129, 0,'.', ',');
                            echo($numbers31);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs130=$arr['6403020200']['MAYO']; 
                            $numbers32=number_format($Qrs130, 0,'.', ',');
                            echo($numbers32);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs131=$arr['6403020200']['JUNIO']; 
                            $numbers33=number_format($Qrs131, 0,'.', ',');
                            echo($numbers33);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs132=$arr['6403020200']['JULIO']; 
                            $numbers34=number_format($Qrs132, 0,'.', ',');
                            echo($numbers34);
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
                        <CENTER> <?php $RES22=$c1+$c8+$c15+$Qrs126+$Qrs119+$Qrs112+$Qrs105;
                        $as21=number_format($RES22, 0, '.', ',');
                            echo($as21);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES23=$c2+$c9+$c16+$Qrs127+$Qrs120+$Qrs113+$Qrs106;
                            $as22=number_format($RES23, 0, '.', ',');
                            echo($as22);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES24=$c3+$c10+$c17+$Qrs128+$Qrs121+$Qrs114+$Qrs107;
                        $as23=number_format($RES24, 0, '.', ',');
                            echo($as23);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES25=$c4+$c11+$c18+$Qrs129+$Qrs122+$Qrs115+$Qrs108;
                            $as24=number_format($RES25, 0, '.', ',');
                            echo($as24);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES26=$c5+$c12+$c19+$Qrs130+$Qrs123+$Qrs116+$Qrs109;
                            $as25=number_format($RES26, 0, '.', ',');
                            echo($as25);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES27=$c6+$c13+$c20+$Qrs131+$Qrs124+$Qrs117+$Qrs110;
                            $as26=number_format($RES27, 0, '.', ',');
                            echo($as26);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES28=$c7+$c14+$c21+$Qrs132+$Qrs125+$Qrs118+$Qrs111;
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
                        </BR>
  
TELÉFONOS</a>

   
                    </td>
                    <td>
                        <cENTER>
<?php  $r1=$arr['6491240000']['ENERO']; 
                            $n119=number_format($r1, 0, '.', ',');
                            echo($n119);
                        ?> 
</cENTER>
                    </td>
                    <td>
                         <center>
<?php  $r2=$arr['6491240000']['FEBRERO']; 
                            $n120=number_format($r2, 0, '.', ',');
                            echo($n120);
                         ?> 
</center> 
                    </td>
                    <td>
                        <center>
<?php  $r3=$arr['6491240000']['MARZO']; 
                            $n121=number_format($r3, 0, '.', ',');
                            echo($n121);
                        ?>
 </center>
                    </td>
                    <td>
                        <center>
<?php  $r4=$arr['6491240000']['ABRIL']; 
                            $n122=number_format($r4, 0, '.', ',');
                            echo($n122);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
<?php  $r5=$arr['6491240000']['MAYO'];
                            $n123=number_format($r5, 0, '.', ',');
                            echo($n123);
                         ?>
</center>
                    </td>
                    <td>
                        <center>
<?php  $r6=$arr['6491240000']['JUNIO'];
                            $n124=number_format($r6, 0, '.', ',');
                            echo($n124);
                         ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $r7=$arr['6491240000']['JULIO']; 
                            $n125=number_format($r7, 0, '.', ',');
                            echo($n125);
                        ?> 
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
                        ENLACES
                    </td>



                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs133=$arr['6491240100']['ENERO']; 
                            $numbers35=number_format($Qrs133, 0,'.', ',');
                            echo($numbers35);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs134=$arr['6491240100']['FEBRERO']; 
                            $numbers36=number_format($Qrs134, 0,'.', ',');
                            echo($numbers35);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs135=$arr['6491240100']['MARZO']; 
                            $numbers37=number_format($Qrs135, 0,'.', ',');
                            echo($numbers37);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs136=$arr['6491240100']['ABRIL']; 
                            $numbers38=number_format($Qrs136, 0,'.', ',');
                            echo($numbers38);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs137=$arr['6491240100']['MAYO']; 
                            $numbers39=number_format($Qrs137, 0,'.', ',');
                            echo($numbers39);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs138=$arr['6491240100']['JUNIO']; 
                            $numbers40=number_format($Qrs138, 0,'.', ',');
                            echo($numbers40);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs139=$arr['6491240100']['JULIO']; 
                            $numbers41=number_format($Qrs139, 0,'.', ',');
                            echo($numbers41);
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
                        CORREOS Y VALIJAS
                    </td>







                    <td>
                        <CENTER> <?php 
                           // print_r($arr['6491300000']['ENERO']);echo "      ";print_r($arr['6491300000']['ENERO']); echo "     ";
                        $Qrs140=$arr['6491300000']['ENERO']+$arr['6491290000']['ENERO']; 
                            $numbers42=number_format($Qrs140, 0,'.', ',');
                            echo($numbers42); 
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs141=$arr['6491300000']['FEBRERO']+$arr['6491290000']['FEBRERO']; 
                            $numbers43=number_format($Qrs141, 0,'.', ',');
                            echo($numbers43);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs142=$arr['6491300000']['MARZO']+$arr['6491290000']['MARZO'];
                            $numbers44=number_format($Qrs142, 0,'.', ',');
                            echo($numbers44);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs143=$arr['6491300000']['ABRIL']+$arr['6491290000']['ABRIL']; 
                            $numbers45=number_format($Qrs143, 0,'.', ',');
                            echo($numbers45);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs144=$arr['6491300000']['MAYO']+$arr['6491290000']['MAYO']; 
                            $numbers46=number_format($Qrs144, 0,'.', ',');
                            echo($numbers46);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs145=$arr['6491300000']['JUNIO']+$arr['6491290000']['JUNIO']; 
                            $numbers47=number_format($Qrs145, 0,'.', ',');
                            echo($numbers47);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs146=$arr['6491300000']['JULIO']+$arr['6491290000']['JULIO']; 
                            $numbers48=number_format($Qrs146, 0,'.', ',');
                            echo($numbers48);
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
                        CUOTAS Y SUSCRIPCIONES
                    </td>

                    


                    <td>
                        <CENTER> <?php 
                           // print_r($se6['ENERO']);echo "      ";print_r($se7['ENERO']); echo "     ";
                        $Qrs147=$arr['6491010000']['ENERO']+$arr['6491420101']['ENERO']; 
                            $numbers49=number_format($Qrs147, 0,'.', ',');
                            echo($numbers49); 
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs148=$arr['6491010000']['FEBRERO']+$arr['6491420101']['FEBRERO']; 
                            $numbers50=number_format($Qrs148, 0,'.', ',');
                            echo($numbers50);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs149=$arr['6491010000']['MARZO']+$arr['6491420101']['MARZO'];
                            $numbers51=number_format($Qrs149, 0,'.', ',');
                            echo($numbers51);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs150=$arr['6491010000']['ABRIL']+$arr['6491420101']['ABRIL']; 
                            $numbers52=number_format($Qrs150, 0,'.', ',');
                            echo($numbers52);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs151=$arr['6491010000']['MAYO']+$arr['6491420101']['MAYO']; 
                            $numbers53=number_format($Qrs151, 0,'.', ',');
                            echo($numbers53);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs152=$arr['6491010000']['JUNIO']+$arr['6491420101']['JUNIO']; 
                            $numbers54=number_format($Qrs152, 0,'.', ',');
                            echo($numbers54);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs153=$arr['6491010000']['JULIO']+$arr['6491420101']['JULIO']; 
                            $numbers55=number_format($Qrs153, 0,'.', ',');
                            echo($numbers55);
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
                        PAPELERIA Y ÚTILES DE ESCRITORIO
                    </td>

                

                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs154=$arr['6491050000']['ENERO']; 
                            $numbers56=number_format($Qrs154, 0,'.', ',');
                            echo($numbers56);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs155=$arr['6491050000']['FEBRERO']; 
                            $numbers57=number_format($Qrs155, 0,'.', ',');
                            echo($numbers57);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs156=$arr['6491050000']['MARZO']; 
                            $numbers58=number_format($Qrs156, 0,'.', ',');
                            echo($numbers58);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs157=$arr['6491050000']['ABRIL']; 
                            $numbers59=number_format($Qrs157, 0,'.', ',');
                            echo($numbers59);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs158=$arr['6491050000']['MAYO']; 
                            $numbers60=number_format($Qrs158, 0,'.', ',');
                            echo($numbers60);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs159=$arr['6491050000']['JUNIO']; 
                            $numbers61=number_format($Qrs159, 0,'.', ',');
                            echo($numbers61);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs160=$arr['6491050000']['JULIO']; 
                            $numbers62=number_format($Qrs160, 0,'.', ',');
                            echo($numbers62);
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
                        MEDIOS MASIVOS
                    </td>

                   

                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs161=$arr['6404010000']['ENERO']; 
                            $numbers63=number_format($Qrs161, 0,'.', ',');
                            echo($numbers63);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs162=$arr['6404010000']['FEBRERO']; 
                            $numbers64=number_format($Qrs162, 0,'.', ',');
                            echo($numbers64);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs163=$arr['6404010000']['MARZO']; 
                            $numbers65=number_format($Qrs163, 0,'.', ',');
                            echo($numbers65);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs164=$arr['6404010000']['ABRIL']; 
                            $numbers66=number_format($Qrs164, 0,'.', ',');
                            echo($numbers66);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs165=$arr['6404010000']['MAYO']; 
                            $numbers67=number_format($Qrs165, 0,'.', ',');
                            echo($numbers67);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs166=$arr['6404010000']['JUNIO']; 
                            $numbers68=number_format($Qrs166, 0,'.', ',');
                            echo($numbers68);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs167=$arr['6404010000']['JULIO']; 
                            $numbers69=number_format($Qrs167, 0,'.', ',');
                            echo($numbers69);
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
                        OTROS MEDIOS PUBLICITARIOS
                    </td>




                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs168=$arr['6404020000']['ENERO']; 
                            $numbers70=number_format($Qrs168, 0,'.', ',');
                            echo($numbers70);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs169=$arr['6404020000']['FEBRERO']; 
                            $numbers71=number_format($Qrs169, 0,'.', ',');
                            echo($numbers71);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs170=$arr['6404020000']['MARZO']; 
                            $numbers72=number_format($Qrs170, 0,'.', ',');
                            echo($numbers72);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs171=$arr['6404020000']['ABRIL']; 
                            $numbers73=number_format($Qrs171, 0,'.', ',');
                            echo($numbers73);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs172=$arr['6404020000']['MAYO']; 
                            $numbers74=number_format($Qrs172, 0,'.', ',');
                            echo($numbers74);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs173=$arr['6404020000']['JUNIO']; 
                            $numbers75=number_format($Qrs173, 0,'.', ',');
                            echo($numbers75);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs174=$arr['6404020000']['JULIO']; 
                            $numbers76=number_format($Qrs174, 0,'.', ',');
                            echo($numbers76);
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
                        
  
GASTOS DE REPRESENTACION
                    </td>
                    <td>
                        <cENTER>
<?php  $r8=$arr['6491380100']['ENERO'];
                            $n126=number_format($r8, 0, '.', ',');
                            echo($n126);
                         ?>
 </cENTER>
                    </td>
                    <td>
                         <center>
<?php  $r9=$arr['6491380100']['FEBRERO']; 
                            $n127=number_format($r9, 0, '.', ',');
                            echo($n127);
                         ?>
 </center> 
                    </td>
                    <td>
                        <center>
<?php  $r10=$arr['6491380100']['MARZO']; 
                            $n128=number_format($r10, 0, '.', ',');
                            echo($n128);
                        ?> 
</center>
                    </td>
                    <td>
                        <center> 
<?php  $r11=$arr['6491380100']['ABRIL']; 
                            $n129=number_format($r11, 0, '.', ',');
                            echo($n129);
                        ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $r12=$arr['6491380100']['MAYO'];
                            $n130=number_format($r12, 0, '.', ',');
                            echo($n130);
                         ?></center>
                    </td>
                    <td>
                        <center> 
<?php  $r13=$arr['6491380100']['JUNIO'];
                            $n131=number_format($r13, 0, '.', ',');
                            echo($n131);
                         ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $r14=$arr['6491380100']['JULIO']; 
                            $n132=number_format($r14,0,'.',',');
                            echo($n132);
                        ?>
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
                        <CENTER> <?php $RES29=$r1+$r8+$Qrs133+$Qrs140+$Qrs147+$Qrs154+$Qrs161;
                            $as28=number_format($RES29, 0, '.', ',');
                            echo($as28);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES30=$r2+$r9+$Qrs134+$Qrs141+$Qrs148+$Qrs155+$Qrs162;
                            $as29=number_format($RES30, 0, '.', ',');
                            echo($as29);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES31=$r3+$r10+$Qrs135+$Qrs142+$Qrs149+$Qrs156+$Qrs163;
                            $as30=number_format($RES31, 0, '.', ',');
                            echo($as30);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES32=$r4+$r11+$Qrs136+$Qrs143+$Qrs150+$Qrs157+$Qrs164;
                            $as31=number_format($RES32, 0, '.', ',');
                            echo($as31);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES33=$r5+$r12+$Qrs137+$Qrs144+$Qrs151+$Qrs158+$Qrs165;
                        $as32=number_format($RES33, 0, '.', ',');
                            echo($as32);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES34=$r6+$r13+$Qrs138+$Qrs145+$Qrs152+$Qrs159+$Qrs166;
                            $as33=number_format($RES34, 0, '.', ',');
                            echo($as33);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $RES35=$r7+$r14+$Qrs139+$Qrs146+$Qrs153+$Qrs160+$Qrs167;
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
                        </BR>IMPUESTOS Y DERECHOS
                    </td>


                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs175=0; 
                            $numbers76=number_format($Qrs175, 0,'.', ',');
                            echo($numbers76);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs176=0; 
                            $numbers77=number_format($Qrs176, 0,'.', ',');
                            echo($numbers77);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs177=0; 
                            $numbers78=number_format($Qrs177, 0,'.', ',');
                            echo($numbers78);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs178=0; 
                            $numbers79=number_format($Qrs178, 0,'.', ',');
                            echo($numbers79);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs179=0; 
                            $numbers80=number_format($Qrs179, 0,'.', ',');
                            echo($numbers80);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs180=0; 
                            $numbers81=number_format($Qrs180, 0,'.', ',');
                            echo($numbers81);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs181=0; 
                            $numbers82=number_format($Qrs181, 0,'.', ',');
                            echo($numbers82);
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
                        
  
GASTOS NO DEDUCIBLES
                    </td>
                    <td>
                        <cENTER>
<?php  $a1=$arr['6408020100']['ENERO']+$arr['6408010000']['ENERO']+$arr['6408060000']['ENERO']; 
                            $n133=number_format($a1, 0, '.', ',');
                            echo($n133);
                        ?>
</cENTER>
                    </td>
                    <td>
                         <center>
<?php  $a2=$arr['6408020100']['FEBRERO']+$arr['6408010000']['FEBRERO']+$arr['6408060000']['FEBRERO']; 
                            $n134=number_format($a2, 0, '.', ',');
                            echo($n134);
                         ?>
 </center> 
                    </td>
                    <td>
                        <center>
<?php  $a3=$arr['6408020100']['MARZO']+$arr['6408010000']['MARZO']+$arr['6408060000']['MARZO']; 
                            $n135=number_format($a3, 0, '.', ',');
                            echo($n135);
                        ?> 
</center>
                    </td>
                    <td>
                        <center>
 <?php  $a4=$arr['6408020100']['ABRIL']+$arr['6408010000']['ABRIL']+$arr['6408060000']['ABRIL']; 
                            $n136=number_format($a4, 0, '.', ',');
                            echo($n136);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $a5=$arr['6408020100']['MAYO']+$arr['6408010000']['MAYO']+$arr['6408060000']['MAYO'];
                            $nu1=number_format($a5, 0, '.', ',');
                            echo($nu1);
                         ?>
</center>
                    </td>
                  
                    <td>
                        <center>
 <?php  $a6=$arr['6408020100']['JUNIO']+$arr['6408010000']['JUNIO']+$arr['6408060000']['JUNIO']; 
                            $n138=number_format($a6, 0, '.', ',');
                            echo($n138);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $a7=$arr['6408020100']['JULIO']+$arr['6408010000']['JULIO']+$arr['6408060000']['JULIO']; 
                            $n139=number_format($a7, 0, '.', ',');
                            echo($n139);
                        ?>
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
                        GASTOS LEGALES
                    </td>

                    



                    <td>
                        <CENTER> <?php 
                           // print_r($se6['ENERO']);echo "      ";print_r($se7['ENERO']); echo "     ";
                        $Qrs182=$arr['6491170000']['ENERO']+$arr['6406020000']['ENERO']; 
                            $numbers83=number_format($Qrs182, 0,'.', ',');
                            echo($numbers83); 
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs183=$arr['6491170000']['FEBRERO']+$arr['6406020000']['FEBRERO']; 
                            $numbers84=number_format($Qrs183, 0,'.', ',');
                            echo($numbers84);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs184=$arr['6491170000']['MARZO']+$arr['6406020000']['MARZO'];
                            $numbers85=number_format($Qrs184, 0,'.', ',');
                            echo($numbers85);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs185=$arr['6491170000']['ABRIL']+$arr['6406020000']['ABRIL']; 
                            $numbers86=number_format($Qrs185, 0,'.', ',');
                            echo($numbers86);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs186=$arr['6491170000']['MAYO']+$arr['6406020000']['MAYO']; 
                            $numbers87=number_format($Qrs186, 0,'.', ',');
                            echo($numbers87);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs187=$arr['6491170000']['JUNIO']+$arr['6406020000']['JUNIO']; 
                            $numbers88=number_format($Qrs187, 0,'.', ',');
                            echo($numbers88);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs188=$arr['6491170000']['JULIO']+$arr['6406020000']['JULIO']; 
                            $numbers89=number_format($Qrs188, 0,'.', ',');
                            echo($numbers89);
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
                        DONATIVOS
                    </td>

?>

                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs189=$arr['6491130000']['ENERO']; 
                            $numbers90=number_format($Qrs189, 0,'.', ',');
                            echo($numbers90);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs190=$arr['6491130000']['FEBRERO']; 
                            $numbers91=number_format($Qrs190, 0,'.', ',');
                            echo($numbers91);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs191=$arr['6491130000']['MARZO']; 
                            $numbers92=number_format($Qrs191, 0,'.', ',');
                            echo($numbers92);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs192=$arr['6491130000']['ABRIL']; 
                            $numbers93=number_format($Qrs192, 0,'.', ',');
                            echo($numbers93);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs193=$arr['6491130000']['MAYO']; 
                            $numbers94=number_format($Qrs193, 0,'.', ',');
                            echo($numbers94);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs194=$arr['6491130000']['JUNIO']; 
                            $numbers95=number_format($Qrs194, 0,'.', ',');
                            echo($numbers95);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs195=$arr['6491130000']['JULIO']; 
                            $numbers96=number_format($Qrs195, 0,'.', ',');
                            echo($numbers96);
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
                        SANCIONES Y RECARGOS
                    </td>

                


                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs196=$arr['6491200000']['ENERO']; 
                            $numbers97=number_format($Qrs196, 0,'.', ',');
                            echo($numbers97);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs197=$arr['6491200000']['FEBRERO']; 
                            $numbers98=number_format($Qrs197, 0,'.', ',');
                            echo($numbers98);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs198=$arr['6491200000']['MARZO']; 
                            $numbers99=number_format($Qrs198, 0,'.', ',');
                            echo($numbers99);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs199=$arr['6491200000']['ABRIL']; 
                            $numbers100=number_format($Qrs199, 0,'.', ',');
                            echo($numbers100);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs200=$arr['6491200000']['MAYO']; 
                            $numbers101=number_format($Qrs200, 0,'.', ',');
                            echo($numbers101);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs201=$arr['6491200000']['JUNIO']; 
                            $numbers102=number_format($Qrs201, 0,'.', ',');
                            echo($numbers102);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs202=$arr['6491200000']['JULIO']; 
                            $numbers103=number_format($Qrs202, 0,'.', ',');
                            echo($numbers103);
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
                        <CENTER> <?php $RES36=$a1+$Qrs175+$Qrs182+$Qrs189+$Qrs196;
                        $as35=number_format($RES36, 0, '.', ',');
                            echo($as35);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES37=$a2+$Qrs176+$Qrs183+$Qrs190+$Qrs197;
                            $as36=number_format($RES37, 0, '.', ',');
                            echo($as36);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES38=$a3+$Qrs177+$Qrs184+$Qrs191+$Qrs198;
                            $as37=number_format($RES38, 0, '.', ',');
                            echo($as37);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES39=$a4+$Qrs178+$Qrs185+$Qrs192+$Qrs199;
                            $as38=number_format($RES39, 0, '.', ',');
                            echo($as38);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES40=$a5+$Qrs179+$Qrs186+$Qrs193+$Qrs200;
                            $as39=number_format($RES40, 0, '.', ',');
                            echo($as39);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES41=$a6+$Qrs180+$Qrs187+$Qrs194+$Qrs201;
                            $as40=number_format($RES41, 0, '.', ',');
                            echo($as40);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES42=$a7+$Qrs181+$Qrs188+$Qrs195+$Qrs202;
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
                        </BR>CONVENCIONES
                    </td>
                    


                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs203=$arr['6410010128']['ENERO']; 
                            $numbers104=number_format($Qrs203, 0,'.', ',');
                            echo($numbers104);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs204=$arr['6410010128']['FEBRERO']; 
                            $numbers105=number_format($Qrs204, 0,'.', ',');
                            echo($numbers105);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs205=$arr['6410010128']['MARZO']; 
                            $numbers106=number_format($Qrs205, 0,'.', ',');
                            echo($numbers106);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs206=$arr['6410010128']['ABRIL']; 
                            $numbers107=number_format($Qrs206, 0,'.', ',');
                            echo($numbers107);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs207=$arr['6410010128']['MAYO']; 
                            $numbers108=number_format($Qrs207, 0,'.', ',');
                            echo($numbers108);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs208=$arr['6410010128']['JUNIO']; 
                            $numbers109=number_format($Qrs208, 0,'.', ',');
                            echo($numbers109);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs209=$arr['6410010128']['JULIO']; 
                            $numbers110=number_format($Qrs209, 0,'.', ',');
                            echo($numbers110);
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
                       
  
 CURSOS Y CONFERENCIAS

                    </td>
                    <td>
                        <ceNTER>
<?php  $b1=$arr['6491360200']['ENERO']+$arr['6491360100']['ENERO']+$arr['6491360500']['ENERO']+$arr['6491360200']['ENERO']; 

                            $n141=number_format($b1, 0, '.', ',');
                            echo($n141);
                        ?>
 </cenTER>
                    </td>
                    <td>
                         <center>
<?php  $b2=$arr['6491360200']['FEBRERO']+$arr['6491360100']['FEBRERO']+$arr['6491360500']['FEBRERO']+$arr['6491360200']['FEBRERO']; 
                                $n142=number_format($b2, 0, '.', ',');
                            echo($n142);
                         ?> 
</center> 
                    </td>
                    <td>
                        <center>
<?php  $b3=$arr['6491360200']['MARZO']+$arr['6491360100']['MARZO']+$arr['6491360500']['MARZO']+$arr['6491360200']['MARZO']; 
                            $n143=number_format($b3, 0, '.', ',');
                            echo($n143);
                        ?> 
</center>
                    </td>
                    <td>
                        <center> 
<?php  $b4=$arr['6491360200']['ABRIL']+$arr['6491360100']['ABRIL']+$arr['6491360500']['ABRIL']+$arr['6491360200']['ABRIL']; 

                            $n144=number_format($b4, 0, '.', ',');
                            echo($n144);
                        ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $b5=$arr['6491360200']['MAYO']+$arr['6491360100']['MAYO']+$arr['6491360500']['MAYO']+$arr['6491360200']['MAYO'];
                            $n145=number_format($b5, 0, '.', ',');
                            echo($n145);
                         ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $b6=$arr['6491360200']['JUNIO']+$arr['6491360100']['JUNIO']+$arr['6491360500']['JUNIO']+$arr['6491360200']['JUNIO']; 
                            $n146=number_format($b6, 0, '.', ',');
                            echo($n146);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $b7=$arr['6491360200']['JULIO']+$arr['6491360100']['JULIO']+$arr['6491360500']['JULIO']+$arr['6491360200']['JULIO'];
                            $n147=number_format($b7, 0, '.', ',');
                            echo($n147);
                         ?> 
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
                       
  
 HONORARIOS PROFESIONALES

                    </td>
                   <td>
                        <cENTER>
<?php  $b8=$arr['6402020000']['ENERO']+$arr['6402010000']['ENERO']; 
                            $n148=number_format($b8, 0, '.', ',');
                            echo($n148);
                        ?> 
</cENTER>
                    </td>
                    <td>
                         <center>
<?php  $b9=$arr['6402020000']['FEBRERO']+$arr['6402010000']['FEBRERO'];
                            $n149=number_format($b9, 0, '.', ',');
                            echo($n149);
                          ?> 
</center> 
                    </td>
                    <td>
                        <center>
<?php  $b10=$arr['6402020000']['MARZO']+$arr['6402010000']['MARZO']; 
                            $n150=number_format($b10, 0, '.', ',');
                            echo($n150);
                        ?> 
</center>
                    </td>
                    <td>
                        <center> 
<?php  $b11=$arr['6402020000']['ABRIL']+$arr['6402010000']['ABRIL'];
                            $n151=number_format($b11, 0, '.', ',');
                            echo($n151);
                         ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $b12=$arr['6402020000']['MAYO']+$arr['6402010000']['MAYO']; 
                            $n152=number_format($b12, 0, '.', ',');
                            echo($n152);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $b13=$arr['6402020000']['JUNIO']+$arr['6402010000']['JUNIO']; 
                            $n153=number_format($b13, 0, '.', ',');
                            echo($n153);
                        ?>
                    </td>
                    <td>
                        <center>
<?php $b14=$arr['6402020000']['JULIO']+$arr['6402010000']['JULIO'];
                            $n154=number_format($b14, 0, '.', ',');
                            echo($n154);
                         ?> 
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
                        HONORARIOS A CONSEJEROS
                    </td>

                    

                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs210=$arr['6410010101']['ENERO']; 
                            $numbers110=number_format($Qrs210, 0,'.', ',');
                            echo($numbers110);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs211=$arr['6410010101']['FEBRERO']; 
                            $numbers111=number_format($Qrs211, 0,'.', ',');
                            echo($numbers111);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs212=$arr['6410010101']['MARZO']; 
                            $numbers112=number_format($Qrs212, 0,'.', ',');
                            echo($numbers112);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs213=$arr['6410010101']['ABRIL']; 
                            $numbers113=number_format($Qrs213, 0,'.', ',');
                            echo($numbers113);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs214=$arr['6410010101']['MAYO']; 
                            $numbers114=number_format($Qrs214, 0,'.', ',');
                            echo($numbers114);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs215=$arr['6410010101']['JUNIO']; 
                            $numbers115=number_format($Qrs215, 0,'.', ',');
                            echo($numbers115);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs216=$arr['6410010101']['JULIO']; 
                            $numbers116=number_format($Qrs216, 0,'.', ',');
                            echo($numbers116);
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
                      
  
  OTROS NO ESPECIFICADOS

                    </td>
                    <td>
                        <cENTER>
<?php $b15=$arr['6491330000']['ENERO']+$arr['6491390000']['ENERO']+$arr['6491140000']['ENERO']+$arr['6408020000']['ENERO']+$arr['6491200000']['ENERO']+$arr['6491400000']['ENERO']+$arr['6408080000']['ENERO']+$arr['6491020000']['ENERO']+$arr['6491370000']['ENERO']; 
                            $n155=number_format($b15, 0, '.', ',');
                            echo($n155);
                        ?>
</cENTER>
                    </td>
                    <td>
                         <center>
<?php  $b16=$arr['6491330000']['FEBRERO']+$arr['6491390000']['FEBRERO']+$arr['6491140000']['FEBRERO']+$arr['6408020000']['FEBRERO']+$arr['6491200000']['FEBRERO']+$arr['6491400000']['FEBRERO']+$arr['6408080000']['FEBRERO']+$arr['6491020000']['FEBRERO']+$arr['6491370000']['FEBRERO']; 
                            $n156=number_format($b16, 0, '.', ',');
                            echo($n156);
                         ?> 
</center> 
                    </td>
                    <td>
                        <center>
<?php $b17=$arr['6491330000']['MARZO']+$arr['6491390000']['MARZO']+$arr['6491140000']['MARZO']+$arr['6408020000']['MARZO']+$arr['6491200000']['MARZO']+$arr['6491400000']['MARZO']+$arr['6408080000']['MARZO']+$arr['6491020000']['MARZO']+$arr['6491370000']['MARZO'];
                            $n157=number_format($b17, 0, '.', ',');
                            echo($n157);
                         ?> 
</center>
                    </td>
                    <td>
                        <center>
<?php  $b18=$arr['6491330000']['ABRIL']+$arr['6491390000']['ABRIL']+$arr['6491140000']['ABRIL']+$arr['6408020000']['ABRIL']+$arr['6491200000']['ABRIL']+$arr['6491400000']['ABRIL']+$arr['6408080000']['ABRIL']+$arr['6491020000']['ABRIL']+$arr['6491370000']['ABRIL']; 
                            $n158=number_format($b18, 0, '.', ',');
                            echo($n158);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
 <?php  $b19=$arr['6491330000']['MAYO']+$arr['6491390000']['MAYO']+$arr['6491140000']['MAYO']+$arr['6408020000']['MAYO']+$arr['6491200000']['MAYO']+$arr['6491400000']['MAYO']+$arr['6408080000']['MAYO']+$arr['6491020000']['MAYO']+$arr['6491370000']['MAYO']; 
                            $n159=number_format($b19, 0, '.', ',');
                            echo($n159);
                        ?>
</center>
                    </td>
                    <td>
                        <center> 
<?php  $b20=$arr['6491330000']['JUNIO']+$arr['6491390000']['JUNIO']+$arr['6491140000']['JUNIO']+$arr['6408020000']['JUNIO']+$arr['6491200000']['JUNIO']+$arr['6491400000']['JUNIO']+$arr['6408080000']['JUNIO']+$arr['6491020000']['JUNIO']+$arr['6491370000']['JUNIO']; 
                            $n160=number_format($b20, 0, '.', ',');
                            echo($n160);
                        ?>
</center>
                    </td>
                    <td>
                        <center>
<?php $b21=$arr['6491330000']['JULIO']+$arr['6491390000']['JULIO']+$arr['6491140000']['JULIO']+$arr['6408020000']['JULIO']+$arr['6491200000']['JULIO']+$arr['6491400000']['JULIO']+$arr['6408080000']['JULIO']+$arr['6491020000']['JULIO']+$arr['6491370000']['JULIO']; 
                            $n161=number_format($b21, 0, '.', ',');
                            echo($n161);
                        ?>
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
                        <CENTER> <?php $RES43=$b1+$b8+$b15+$Qrs203+$Qrs210;
                            $as45=number_format($RES43, 0, '.', ',');
                            echo($as45);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES44=$b2+$b9+$b16+$Qrs204+$Qrs211;
                            $as44=number_format($RES44, 0, '.', ',');
                            echo($as44);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES45=$b3+$b10+$b17+$Qrs205+$Qrs212;
                            $aw1=number_format($RES45, 0, '.', ',');
                            echo($aw1);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES46=$b4+$b11+$b18+$Qrs206+$Qrs213;
                            $as42=number_format($RES46, 0, '.', ',');
                            echo($as42);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES47=$b5+$b12+$b19+$Qrs207+$Qrs214;
                            $as43=number_format($RES47, 0, '.', ',');
                            echo($as43);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES48=$b6+$b13+$b20+$Qrs208+$Qrs215;
                            $as44=number_format($RES48, 0, '.', ',');
                            echo($as44);
                        ?> </center>
                    </td>
                    <td>
                        <center>  <?php $RES49=$b7+$b14+$b21+$Qrs209+$Qrs216;
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
                        </BR>DEPRECIACIÓN HISTÓRICA
                    </td>






                    <td>
                        <CENTER> <?php 
                           // print_r($se6['ENERO']);echo "      ";print_r($se7['ENERO']); echo "     ";
                        $Qrs217=$arr['6490010000']['ENERO']+$arr['6490020000']['ENERO']+$arr['6490030000']['ENERO']; 
                            $numbers117=number_format($Qrs217, 0,'.', ',');
                            echo($numbers117); 
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs218=$arr['6490010000']['FEBRERO']+$arr['6490020000']['FEBRERO']+$arr['6490030000']['FEBRERO']; 
                            $numbers118=number_format($Qrs218, 0,'.', ',');
                            echo($numbers118);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs219=$arr['6490010000']['MARZO']+$arr['6490020000']['MARZO']+$arr['6490030000']['MARZO'];
                            $numbers119=number_format($Qrs219, 0,'.', ',');
                            echo($numbers119);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs220=$arr['6490010000']['ABRIL']+$arr['6490020000']['ABRIL']+$arr['6490030000']['ABRIL']; 
                            $numbers120=number_format($Qrs220, 0,'.', ',');
                            echo($numbers120);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs221=$arr['6490010000']['MAYO']+$arr['6490020000']['MAYO']+$arr['6490030000']['MAYO']; 
                            $numbers121=number_format($Qrs221, 0,'.', ',');
                            echo($numbers121);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs222=$arr['6490010000']['JUNIO']+$arr['6490020000']['JUNIO']+$arr['6490030000']['JUNIO']; 
                            $numbers122=number_format($Qrs222, 0,'.', ',');
                            echo($numbers122);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs223=$arr['6490010000']['JULIO']+$arr['6490020000']['JULIO']+$arr['6490030000']['JULIO']; 
                            $numbers123=number_format($Qrs223, 0,'.', ',');
                            echo($numbers123);
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
                        DEPRECIACIÓN REVALUADA
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
                        <center>0 </center>
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
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        AMORTIZACIÓN
                    </td>
                    

                    <td>
                        <CENTER> <?php 
                            //print_r($se3['ENERO']);
                        $Qrs224=$arr['6490040000']['ENERO']; 
                            $numbers123=number_format($Qrs223, 0,'.', ',');
                            echo($numbers123);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs225=$arr['6490040000']['FEBRERO']; 
                            $numbers124=number_format($Qrs224, 0,'.', ',');
                            echo($numbers124);
                        ?></center> 
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs226=$arr['6490040000']['MARZO']; 
                            $numbers125=number_format($Qrs225, 0,'.', ',');
                            echo($numbers125);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs227=$arr['6490040000']['ABRIL']; 
                            $numbers126=number_format($Qrs226, 0,'.', ',');
                            echo($numbers126);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs228=$arr['6490040000']['MAYO']; 
                            $numbers127=number_format($Qrs227, 0,'.', ',');
                            echo($numbers127);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                            //print_r($se['ENERO']);
                        $Qrs229=$arr['6490040000']['JUNIO']; 
                            $numbers128=number_format($Qrs228, 0,'.', ',');
                            echo($numbers128);
                        ?></center>
                    </td>
                    <td>
                        <center><?php 
                            //print_r($se['ENERO']);
                        $Qrs230=$arr['6490040000']['JULIO']; 
                            $numbers129=number_format($Qrs229, 0,'.', ',');
                            echo($numbers129);
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
                        PROV. P/CUENTAS INCOBRABLES
                    </td>
                    <td>
                        <CENTER>0 </CENTER>
                    </td>
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
                        <center>0 </center>
                    </td>
                    <td>
                        <center>0 </center>
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
                        <CENTER> <?php $SUMErge=$Qrs217+$Qrs224;
                           $numbers140=number_format($SUMErge, 0, '.', ',');
                           echo($numbers140);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $SUMErge1=$Qrs218+$Qrs225;
                           $numbers141=number_format($SUMErge1, 0, '.', ',');
                           echo($numbers141);
                        ?></center> 
                    </td>
                    <td>
                        <center><?php $SUMErge2=$Qrs219+$Qrs226;
                           $numbers142=number_format($SUMErge2, 0, '.', ',');
                           echo($numbers142);
                        ?></center>
                    </td>
                    <td>
                        <center> <?php $SUMErge3=$Qrs220+$Qrs227;
                           $numbers143=number_format($SUMErge3, 0, '.', ',');
                           echo($numbers143);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $SUMErge4=$Qrs221+$Qrs228;
                           $numbers144=number_format($SUMErge4, 0, '.', ',');
                           echo($numbers144);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $SUMErge5=$Qrs222+$Qrs229;
                           $numbers145=number_format($SUMErge5, 0, '.', ',');
                           echo($numbers145);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $SUMErge6=$Qrs223+$Qrs230;
                           $numbers146=number_format($SUMErge6, 0, '.', ',');
                           echo($numbers146); ?></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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
                        <CENTER> <?php $RES50=$RES22+$RES29+$RES36+$RES43+$SUMErge;
                            $as46=number_format($RES50, 0, '.', ',');
                            echo($as46);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES51=$RES23+$RES30+$RES37+$RES44+$SUMErge1;
                            $as47=number_format($RES51, 0, '.', ',');
                            echo($as47);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES52=$RES24+$RES31+$RES38+$RES45+$SUMErge2;
                            $as48=number_format($RES52, 0, '.', ',');
                            echo($as48);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES53=$RES25+$RES32+$RES39+$RES46+$SUMErge3;
                            $as49=number_format($RES53, 0, '.', ',');
                            echo($as49);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES54=$RES26+$RES33+$RES40+$RES47+$SUMErge4;
                            $as50=number_format($RES54, 0, '.', ',');
                            echo($as50);
                            ?></center>
                    </td>
                    <td>
                        <center><?php $RES55=$RES27+$RES34+$RES41+$RES48+$SUMErge5;
                            $as51=number_format($RES55, 0, '.', ',');
                            echo($as51);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $RES56=$RES28+$RES35+$RES42+$RES49+$SUMErge6;
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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
                        <center>TOTAL OTROS GASTOS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES57=$RES15+$RES50;
                            $as53=number_format($RES57, 0, '.', ',');
                            echo($as53);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $RES58=$RES16+$RES51;
                            $as54=number_format($RES58, 0, '.', ',');
                            echo($as54);
                         ?> </center> 
                    </td>
                    <td>
                        <center> <?php $RES59=$RES17+$RES52;
                            $as55=number_format($RES59, 0, '.', ',');
                            echo($as55);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES60=$RES18+$RES53;
                            $as56=number_format($RES60, 0, '.', ',');
                            echo($as56);
                        ?> </center>
                    </td>
                    <td>
                        <center> <?php $RES61=$RES19+$RES54;
                            $as57=number_format($RES61, 0, '.', ',');
                            echo($as57);
                        ?></center>
                    </td>
                    <td>
                        <center><?php $RES62=$RES20+$RES55;
                            $as58=number_format($RES62, 0, '.', ',');
                            echo($as58);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $RES63=$RES21+$RES56;
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                       &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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