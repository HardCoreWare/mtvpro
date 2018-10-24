<!DOCTYPE html>
<html><style type="text/css">

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
use GuzzleHttp\HTTP\Client;
use Google\Cloud\BigQuery\BigQueryClient;

$projectId='informe-211921';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);

$query = <<<ENDSQL
select * from `INFOR.SALDO_MESUAL_1` where SOCIEDAD="5500" AND CUENTA in ("6410010102","6410010103","6410010122","6410010104","6492030201","6410010111","6410010112","6410010125","6410010113","6410010115","6410010107","6410010108","6410010118","6492030201","6491350400","6491350100","6491350200","6491350300","6410010121","6410010110","6410010121","6491410100","6491250000","6491070000","6491010000","6409000000","6403020100","6491240000","6491010000","6491420101","6491050000","6404020000","6491380100","6408020100","6408010000","6406020000","6410010128","6491360200",'6402020000',"6491330000","6491140000","6408020000","6491030000","6491370000","6490020000","6491360000","6408080000","6490040000");
ENDSQL;

$queryJobConfig = $bigQuery->query($query);
$queryResults = $bigQuery->runQuery($queryJobConfig);

if ($queryResults->isComplete()) {
    $i=0;
    $rows = $queryResults->rows();
    foreach($rows as $row)
        $arr[$row['CUENTA']]=$row;
        
  // print_r($arr);
}



?>


                           <body>
    
    <center>
        </br>
        <h1>
            BANCO MULTIVA S.A. INSTITUCIÓN DE BANCA MÚLTIPLE GRUPO FINANCIERO MULTIVA
        </h1>
        <h1>
            MULTIVALORES SERVICIOS CORPORATIVOS S.A.
        </h1>
        <h1>
            Integración de Gastos por Unidad de Negocio
        </h1></br></br>
            
        </br></BR></BR>
        <table BORDER=0>
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
                    </td><td>
                        ______________
                    </td>
                    <td>
                        ______________ 
                    </td>

                </tr><tr>
                    <td>
                        <center></center>
                    </td>
                    
                    <td>
                        <center></center>
                    </td>
                    <td>
                       <center>0%</center>
                    </td>
                    <td>
                        <center>1%</center>
                    </td>
                    <td>
                        <center>86%</center>
                    </td>
                    <td>
                        <center>0%</center>
                    </td>
                    <td>
                        <center>1%</center>
                    </td>

                    <td>
                      <center> 9%</center>
                    </td>
                    <td>
                        <CENTER>3% </CENTER>
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
                        <center>CONCEPTO</center>
                    </td>
                    
                    <td>
                        <center>JULIO</center>
                    </td>
                    <td>
                       <center>SEGUROS</center>
                    </td>
                    <td>
                        <center>OPERADORA</center>
                    </td>
                    <td>
                        <center>BANCO</center>
                    </td>
                    <td>
                        <center>SAVELLA</center>
                    </td>
                    <td>
                        <center>MSC</center>
                    </td>

                    <td>
                      <center> CASA</center>
                    </td>
                    <td>
                        <CENTER>GFM </CENTER>
                    </td>
                    <td>
                         <center>TOTAL </center> 
                    </td>
                    <td>
                        <center> VARIACION</center>
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
                    </td><td>
                        ______________
                    </td>
                    <td>
                        ______________ 
                    </td>
                    <td>
                        ______________
                    </td>
                    

                </tr><tr>
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
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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

                </tr>
                <tr>
                    <td>
                       </br> SUELDOS A FUNCIONARIOS Y EMPLEADOS
  
                    </td>
                    <td>
                        <CENTER><?php $Qrs=$arr['6410010102']['AGOSTO']; 
                            $n=number_format($Qrs, 0, '.', ',');
                            echo($n);
                        ?> 
                    </CENTER>
                    </td>
                    <td>
                         <center>0
                          </center> 
                    </td>
                    <td>
                        <center><?php  $result=($Qrs)*(1/100);
                                        $n=number_format($result, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result1=($Qrs)*(86/100);
                                        $n=number_format($result1, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result2=$Qrs*(1/100);
                                        $n=number_format($result2, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result3=$Qrs*(9/100);
                                        $n=number_format($result3, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result4=$Qrs*(3/100);
                                        $n=number_format($result4, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot=$result+$result1+$result2+$result3+$result4; 
                                        $n=number_format($tot, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var=+$tot-$Qrs; 
                                        $n=number_format($var, 0, '.', ',');
                                        echo($n);
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
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <center> AGUINALDO Y OTRAS GRATIFICACIONES
              </td>
                    <td>
                        <CENTER><?php $Qrs1=$arr['6410010103']['AGOSTO']; 
                            $n=number_format($Qrs1, 0, '.', ',');
                            echo($n);
                            ?>
                         </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result5=($Qrs1)*(1/100);
                                        $n=number_format($result5, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result6=($Qrs1)*(86/100);
                                        $n=number_format($result6, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result7=$Qrs1*(1/100);
                                        $n=number_format($result7, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result8=$Qrs1*(9/100);
                                        $n=number_format($result8, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result9=$Qrs1*(3/100);
                                        $n=number_format($result9, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot1=$result5+$result6+$result7+$result8+$result9; 
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


<tr>
                    <td>
                       
GRATIFICACIONES

                    </td>
                    <td> 
                        <CENTER>
                                    <?php $Qrs2=$arr['6410010122']['AGOSTO']; 
                            $n=number_format($Qrs2, 0, '.', ',');
                            echo($n);
                        ?>
 </CENTER>
                    </td>
                    
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result10=($Qrs2)*(1/100);
                                        $n=number_format($result10, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result11=($Qrs2)*(86/100);
                                        $n=number_format($result11, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result12=$Qrs2*(1/100);
                                        $n=number_format($result12, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result13=$Qrs2*(9/100);
                                        $n=number_format($result13, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result14=$Qrs2*(3/100);
                                        $n=number_format($result14, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot2=$result10+$result11+$result12+$result13+$result14; 
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
                        <td>
 BONO 

                    </td>
                    <td>
                        <CENTER> <?php $Qrs3=$arr['6410010104']['AGOSTO']; 
                            $n=number_format($Qrs3, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                   
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result11=($Qrs3)*(1/100);
                                        $n=number_format($result11, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result12=($Qrs3)*(86/100);
                                        $n=number_format($result12, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result13=$Qrs3*(1/100);
                                        $n=number_format($result13, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result14=$Qrs3*(9/100);
                                        $n=number_format($result14, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result15=$Qrs3*(3/100);
                                        $n=number_format($result15, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot3=$result11+$result12+$result13+$result14+$result15; 
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
                    <td>
                      
 INDEMNIZACIÓN LEGAL AL RETIRO

                    </td>
                    <td>
                        <CENTER><?php 
                            $Qrs4=$arr['6492030201']['AGOSTO']; 
                            $n=number_format($Qrs4, 0, '.', ',');
                            echo($n);
                        ?></CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result22=($Qrs4)*(1/100);
                                        $n=number_format($result22, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result23=($Qrs4)*(86/100);
                                        $n=number_format($result23, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result24=$Qrs4*(1/100);
                                        $n=number_format($result24, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result21=$Qrs4*(9/100);
                                        $n=number_format($result21, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result20=$Qrs4*(3/100);
                                        $n=number_format($result20, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot4=$result22+$result23+$result24+$result21+$result20;
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
                    <td>
                       
 INDEMNIZACIONES POR DESPIDO

                    </td>
                   <td>
                        <CENTER><?php $Qrs5=$arr['6492030201']['AGOSTO']; 
                            $n21=number_format($Qrs5, 0, '.', ',');
                            echo($n21);
                        ?>  </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result25=($Qrs5)*(1/100);
                                        $n=number_format($result25, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result26=($Qrs5)*(86/100);
                                        $n=number_format($result26, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result27=$Qrs5*(1/100);
                                        $n=number_format($result27, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result28=$Qrs5*(9/100);
                                        $n=number_format($result28, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result29=$Qrs5*(3/100);
                                        $n=number_format($result29, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot5=$result25+$result26+$result27+$result28+$result29; 
                                        $n=number_format($tot5, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var5=+$tot5-$Qrs5; 
                                        $n=number_format($var5, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                <tr>
                    <td>
                        
CUOTAS AL I.M.S.S.

                    </td>
                    <td>
                        <CENTER><?php  $Qrs6=$arr['6410010111']['AGOSTO']; 
                            $n=number_format($Qrs6, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                     <td><center>0</center></td>
                    <td>
                        <center><?php  $result30=($Qrs6)*(1/100);
                                        $n=number_format($result30, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result31=($Qrs6)*(86/100);
                                        $n=number_format($result31, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result32=$Qrs6*(1/100);
                                        $n=number_format($result32, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result33=$Qrs6*(9/100);
                                        $n=number_format($result33, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result34=$Qrs6*(3/100);
                                        $n=number_format($result34, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot6=$result30+$result31+$result32+$result33+$result34; 
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
                    <td>
                       
 APORTACIPONES AL INFONAVIT

                    </td>
                    <td>
                        <CENTER><?php $Qrs7=$arr['6410010112']['AGOSTO']; 
                            $n55=number_format($Qrs7, 0, '.', ',');
                            echo($n55); 
                         ?> 
</CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result35=($Qrs7)*(1/100);
                                        $n=number_format($result35, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result36=($Qrs7)*(86/100);
                                        $n=number_format($result36, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result37=$Qrs7*(1/100);
                                        $n=number_format($result37, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result38=$Qrs7*(9/100);
                                        $n=number_format($result38, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result39=$Qrs7*(3/100);
                                        $n=number_format($result39, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot7=$result35+$result36+$result37+$result38+$result39; 
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
                    <td>
                       
 2% SOBRE NOMINA E IMP. ESTATALES

                    </td>
                    <td>
                        <CENTER><?php  $Qrs8=$arr['6410010125']['AGOSTO']; 
                            $n62=number_format($Qrs8, 0, '.', ',');
                            echo($n62);
                        ?> 
</CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result40=($Qrs8)*(1/100);
                                        $n=number_format($result40, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result41=($Qrs8)*(86/100);
                                        $n=number_format($result41, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result42=$Qrs8*(1/100);
                                        $n=number_format($result42, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result43=$Qrs8*(9/100);
                                        $n=number_format($result43, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result44=$Qrs8*(3/100);
                                        $n=number_format($result44, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot8=$result40+$result41+$result42+$result43+$result44; 
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

                </tr>
                <tr>
                    <td>
                        
PRIMA VACACIONAL</td>
                    <td>
                        <CENTER> <?php  $Qrs9=$arr['6410010113']['AGOSTO']; 
                            $n69=number_format($Qrs9, 0, '.', ',');
                            echo($n69);
                        ?>
 </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result45=($Qrs9)*(1/100);
                                        $n=number_format($result45, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result46=($Qrs9)*(86/100);
                                        $n=number_format($result46, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result47=$Qrs9*(1/100);
                                        $n=number_format($result47, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result48=$Qrs9*(9/100);
                                        $n=number_format($result48, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result49=$Qrs9*(3/100);
                                        $n=number_format($result49, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot9=$result45+$result46+$result47+$result48+$result49; 
                                        $n=number_format($tot, 0, '.', ',');
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
                        
                    </td>
                    <td>
                        
                    </td>

                </tr>
                <tr>
                    <td>

 VALES DE DESPENSA
                    </td>
                    <td>
                        <CENTER> <?php $Qrs10=$arr['6410010115']['AGOSTO'];$n76=number_format($Qrs10, 0, '.', ',');
                            echo($n76); ?>
 </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result50=($Qrs10)*(1/100);
                                        $n=number_format($result50, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result51=($Qrs10)*(86/100);
                                        $n=number_format($result51, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result52=$Qrs10*(1/100);
                                        $n=number_format($result52, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result53=$Qrs10*(9/100);
                                        $n=number_format($result53, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result54=$Qrs10*(3/100);
                                        $n=number_format($result54, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot10=$result50+$result51+$result52+$result53+$result54; 
                                        $n=number_format($tot10, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var10=+$tot10-$Qrs10; 
                                        $n=number_format($var10, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                <tr>
                    <td>
                    
                       
 SEG.DE VIDA</a>

                    </td>
                    <td>
                        <CENTER><?php $Qrs11=$arr['6410010107']['AGOSTO']; $n83=number_format($Qrs11, 0, '.', ',');
                            echo($n83);?>
</CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result55=($Qrs11)*(1/100);
                                        $n=number_format($result55, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result56=($Qrs11)*(86/100);
                                        $n=number_format($result56, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result57=$Qrs11*(1/100);
                                        $n=number_format($result57, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result58=$Qrs11*(9/100);
                                        $n=number_format($result58, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result59=$Qrs11*(3/100);
                                        $n=number_format($result59, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot11=$result55+$result56+$result57+$result58+$result59; 
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
                    <td>
                    
                    
                      
  SEG. GTOS. MÉDICOS MAYORES
                    </td>
                    <td>
                        <CENTER><?php $Qrs12=$arr['6410010108']['AGOSTO'];$n90=number_format($Qrs12, 0, '.', ',');
                            echo($n90); ?>
 </CENTER>
                    </td>
                   <td><center>0</center></td>
                    <td>
                        <center><?php  $result60=($Qrs12)*(1/100);
                                        $n=number_format($result60, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result61=($Qrs12)*(86/100);
                                        $n=number_format($result61, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result62=$Qrs12*(1/100);
                                        $n=number_format($result62, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result63=$Qrs12*(9/100);
                                        $n=number_format($result63, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result64=$Qrs12*(3/100);
                                        $n=number_format($result64, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot12=$result60+$result61+$result62+$result63+$result64; 
                                        $n=number_format($tot12, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var12=+$tot12-$Qrs12; 
                                        $n=number_format($var12, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
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
                       
 UNIFORMES
                    </td>
                   <td>
                        <CENTER> <?php  $Qrs13=$arr['6410010118']['AGOSTO']; $n90=number_format($Qrs13, 0, '.', ',');
                            echo($n90); ?> </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result65=($Qrs13)*(1/100);
                                        $n=number_format($result65, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result66=($Qrs13)*(86/100);
                                        $n=number_format($result66, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result67=$Qrs13*(1/100);
                                        $n=number_format($result67, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result68=$Qrs13*(9/100);
                                        $n=number_format($result68, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result69=$Qrs13*(3/100);
                                        $n=number_format($result69, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot13=$result65+$result66+$result67+$result68+$result69; 
                                        $n=number_format($tot13, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var13=+$tot13-$Qrs13; 
                                        $n=number_format($var13, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
                    </td>
                       </tr>
                <tr>
                    <td>
                       
 PRIMA DE ANTIGUEDAD

                    </td>
                    
                    <td>
                        <CENTER> <?php  $Qrs14=$arr['6492030201']['AGOSTO']; $n90=number_format($Qrs14, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result70=($Qrs14)*(1/100);
                                        $n=number_format($result70, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result71=($Qrs14)*(86/100);
                                        $n=number_format($result71, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center>0    </center>
                    </td>
                    <td>
                        <center><?php $result72=$Qrs14*(1/100);
                                        $n=number_format($result72, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center><?php $result73=$Qrs14*(9/100);
                                        $n=number_format($result73, 0, '.', ',');
                                        echo($n);
                        ?> 
                    </center>
                    </td>
                    <td>
                       <center><?php $result74=$Qrs14*(3/100);
                                        $n=number_format($result74, 0, '.', ',');
                                        echo($n); ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot14=$result70+$result71+$result72+$result73+$result74; 
                                        $n=number_format($tot14, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var14=+$tot14-$Qrs14; 
                                        $n=number_format($var14, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
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
                        <center>0 </center>
                    </td>
                    <td>
                        <center>0</center>
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
                    

                </tr>
                <tr>
                    <td>
                        INICIAL DEL CREDITO
                    </td>
                    <td>
                        <CENTER> 0</CENTER>
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
                        <center>0 </center>
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
                        _____________
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
                        <CENTER> <?php $RES7=$Qrs+$Qrs1+$Qrs2+$Qrs3+$Qrs4+$Qrs5+$Qrs6+$Qrs7+$Qrs8+$Qrs9+$Qrs10+$Qrs11+$Qrs12+$Qrs13+$Qrs14;
                        $as6=number_format($RES7, 0, '.', ',');
                            echo($as6);?></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <CENTER>  <?php $v7=$arr['6491350400']['AGOSTO']+$arr['6491350100']['AGOSTO']+$arr['6491350200']['AGOSTO']+$arr['6491350300']['AGOSTO'];;$n97=number_format($v7, 0, '.', ',');
                            echo($n97); ?>

 </CENTER>
                    </td>
                    <td>
                         <center>  
 </center> 
                    </td>
                    <td>
                        <center>  
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>  
</center>
                    </td>
                    <td>
                        <center>  
</center>
                    </td>
                    <td>
                        <center>  

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
                        
DIVERSAS PRESTACIONES

                    </td>
                    <td>
                        <CENTER><?php  $v14=$arr['6410010121']['AGOSTO'];  $n90=number_format($v14, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <CENTER> <?PHP  $do7=$arr['6410010110']['AGOSTO']+$arr['6410010121']['AGOSTO'];  $n90=number_format($do7, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                       ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        _____________
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
                        <CENTER> <?php $RES14=$v7+$v14+$do7;$as13=number_format($RES14, 0, '.', ',');
                            echo($as13);?></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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
                        <CENTER><?php $RES21=$RES7+$RES14;
                            $as20=number_format($RES21, 0, '.', ',');
                            echo($as20);
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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


        </table>

</br>
        
        <table BORDER=0>

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
                        ______________
                    </td><td>
                        ______________
                    </td>
                    <td>
                        ______________ 
                    </td>

                </tr><tr>
                    <td>
                        <center></center>
                    </td>
                    
                    <td>
                        <center></center>
                    </td>
                    <td>
                       <center>0%</center>
                    </td>
                    <td>
                        <center>1%</center>
                    </td>
                    <td>
                        <center>86%</center>
                    </td>
                    <td>
                        <center>0%</center>
                    </td>
                    <td>
                        <center>1%</center>
                    </td>

                    <td>
                      <center> 9%</center>
                    </td>
                    <td>
                        <CENTER>3% </CENTER>
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
                        <center>CONCEPTO</center>
                    </td>
                    
                    <td>
                        <center>JULIO</center>
                    </td>
                    <td>
                       <center>SEGUROS</center>
                    </td>
                    <td>
                        <center>OPERADORA</center>
                    </td>
                    <td>
                        <center>BANCO</center>
                    </td>
                    <td>
                        <center>SAVELLA</center>
                    </td>
                    <td>
                        <center>MSC</center>
                    </td>

                    <td>
                      <center> CASA</center>
                    </td>
                    <td>
                        <CENTER>GFM </CENTER>
                    </td>
                    <td>
                         <center>TOTAL </center> 
                    </td>
                    <td>
                        <center> VARIACION</center>
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
                    </td><td>
                        ______________
                    </td>
                    <td>
                        ______________ 
                    </td>
                    <td>
                        ______________
                    </td>
                    

                </tr><tr>
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
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <CENTER><?php $c7=$arr['6491410100']['AGOSTO']+$arr['6491250000']['AGOSTO'];
                            $n104=number_format($c7, 0, '.', ',');
                            echo($n104);
                        ?>
 </CENTER>
                    </td>
                    <td>
                         <center>
 </center> 
                    </td>
                    <td>
                        <center>
 </center>
                    </td>
                    <td>
                        <center>
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>
</center>
                    </td>
                    <td>
                        <center>

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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <CENTER> <?php $acuenta7=$arr['6491070000']['AGOSTO']; 
                            $n104=number_format($acuenta7, 0, '.', ',');
                            echo($n104);
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
                        <center> 
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
                    
                    
                    LUZ Y AGUA
                             
                    </td>
                    <td>
                        <CENTER> 0 </CENTER>
                    </td>
                    <td> 
                         <center></center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                      
  GASTOS EN TECNOLOGIA

                    </td>
                    <td>
                        <CENTER>    <?php $c14=$arr['6491010000']['AGOSTO']+$arr['6409000000']['AGOSTO']; 
                            $n111=number_format($c14, 0, '.', ',');
                            echo($n111);
                        ?>
</CENTER>
                    </td>
                    <td>
                         <center>
</center> 
                    </td>
                    <td>
                        <center>
 </center>
                    </td>
                    <td>
                        <center>
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>
</center>
                    </td>
                    <td>
                        <center>

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
                        <CENTER>0
</CENTER>
                    </td>
                    <td>
                         <center>
</center> 
                    </td>
                    <td>
                        <center>
 </center>
                    </td>
                    <td>
                        <center>
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>
</center>
                    </td>
                    <td>
                        <center>
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
                      
  RENTAS INMUEBLES

                    </td>
                    <td>
                        <CENTER>  <?php $c21=$arr['6403020100']['AGOSTO']; 
                            $n118=number_format($c21, 0, '.', ',');
                            echo($n118);
                        ?> 
 </CENTER>
                    </td>
                    <td>
                         <center>  
 </center> 
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>  
</center>
                    </td>
                    <td>
                        <center> 

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
                        <CENTER> 0
 </CENTER>
                    </td>
                    <td>
                         <center>  
 </center> 
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>  
</center>
                    </td>
                    <td>
                        <center>  
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>  
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
                       ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        _____________
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
                        <CENTER> <?php $RES28=$c7+$c14+$c21+$acuenta7;
                            $as27=number_format($RES28, 0, '.', ',');
                            echo($as27);
                       ?></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
TELÉFONOS


                    </td>
                    <td>
                        <cENTER><?php $r7=$arr['6491240000']['AGOSTO']; 
                            $n125=number_format($r7, 0, '.', ',');
                            echo($n125);
                        ?>
</cENTER>
                    </td>
                    <td>
                         <center>
</center> 
                    </td>
                    <td>
                        <center>
 </center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>
 
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
                        <cENTER>0
</cENTER>
                    </td>
                    <td>
                         <center>
</center> 
                    </td>
                    <td>
                        <center>
 </center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>
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
                    CORREOS Y VALIJAS
                 
                    </td>
                    <td>
                        <cENTER>0
</cENTER>
                    </td>
                    <td>
                         <center>
</center> 
                    </td>
                    <td>
                        <center>
 </center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>
</center>
                    </td>
                    <td>
                        <center>
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
                    CUOTAS Y SUSCRIPCIONES

                        
                    </td>
                    <td>
                        <cENTER><?php $acuenta49=$arr['6491010000']['AGOSTO']+$arr['6491420101']['AGOSTO']; 
                            $n125=number_format($acuenta49, 0, '.', ',');
                            echo($n125);
                        ?>
</cENTER>
                    </td>
                    <td>
                         <center>
</center> 
                    </td>
                    <td>
                        <center>
 </center>
                    </td>
                    <td>
                        <center>
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>
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
                    PAPELERIA Y ÚTILES DE ESCRITORIO
</td>
                    <td>
                        <cENTER><?php $acuenta56=$arr['6491050000']['AGOSTO']; 
                            $n125=number_format($acuenta56, 0, '.', ',');
                            echo($n125);
                        ?>
</cENTER>
                    </td>
                    <td>
                         <center>
</center> 
                    </td>
                    <td>
                        <center>
 </center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center> 
</center>
                    </td>
                    <td>
                        <center>
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
                     MEDIOS MASIVOS
</td>
                    <td>
                        <cENTER>0</cENTER>
                    </td>
                    <td>
                         <center></center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <cENTER><?php $acuenta70=$arr['6404020000']['AGOSTO']; 
                            $n125=number_format($acuenta70, 0, '.', ',');
                            echo($n125);
                        ?></cENTER>
                    </td>
                    <td>
                         <center></center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                       
GASTOS DE REPRESENTACION</td>
                    <td>
                        <cENTER><?php $r14=$arr['6491380100']['AGOSTO']; 
                            $n132=number_format($r14,0,'.',',');
                            echo($n132);
                        ?> </cENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                       ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        _____________
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
                        <CENTER> <?php $RES35=$r7+$r14+$acuenta49+$acuenta56+$acuenta70;
                            $as34=number_format($RES35, 0, '.', ',');
                            echo $as34;//echo($as34);
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
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <cENTER>0</cENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        
GASTOS NO DEDUCIBLES</td>
                    <td>
                        <cENTER><?php $a7=$arr['6408020100']['AGOSTO']+$arr['6408010000']['AGOSTO']; 
                            $n139=number_format($a7, 0, '.', ',');
                            echo($n139);
                        ?></cENTER>
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
                        <center> </center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <cENTER>0</cENTER>
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
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                    <td>
                        <cENTER>0</cENTER>
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
                        <center></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <cENTER>0</cENTER>
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
                        <center></center>
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
                       ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        _____________
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
                        <CENTER> <?php $RES42=$a7;
                            $as41=number_format($RES42, 0, '.', ',');
                            echo($as41);
                        ?></CENTER>
                    </td>
                    <td>
                         <center></center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <cENTER><?php $acuenta105=$arr['6410010128']['AGOSTO']; 
                            $n139=number_format($acuenta105, 0, '.', ',');
                            echo($n139);
                        ?></cENTER>
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
                        <center></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                       
 CURSOS Y CONFERENCIAS</td>
                    <td>
                        <ceNTER><?php $b7=$arr['6491360200']['AGOSTO']+$arr['6491360000']['AGOSTO']+$arr['6491360200']['AGOSTO'];
                            $n147=number_format($b7, 0, '.', ',');
                            echo($n147);
                         ?> </cenTER>
                    </td>
                    <td>
                         <center></center> 
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                       
 HONORARIOS PROFESIONALES<
</td>
                   <td>
                        <cENTER><?php $b14=$arr['6402020000']['AGOSTO'];
                            $n154=number_format($b14, 0, '.', ',');
                            echo($n154);
                         ?></cENTER>
                    </td>
                    <td>
                         <center></center> 
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
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
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <cENTER>0</cENTER>
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
                        <center></center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                      
  OTROS NO ESPECIFICADOS</td>
                    <td>
                        <cENTER><?php $b21=$arr['6491330000']['AGOSTO']+$arr['6491140000']['AGOSTO']+$arr['6408020000']['AGOSTO']+$arr['6491370000']['AGOSTO'];
                            $n161=number_format($b21, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
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
                        <center> </center>
                    </td>

                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                       ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        _____________
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
                        <CENTER> <?php $RES49=$b7+$b14+$b21+$acuenta105;
                            $as45=number_format($RES49, 0, '.', ',');
                            echo($as45);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
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
                        <center> </center>
                    </td>
                    <td>
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
                        </BR>DEPECIACIÓN HISTÓRICA
  </td>
                    <td>
                        <cENTER><?php $acuenta126=$arr['6490020000']['AGOSTO'];       $n161=number_format($acuenta126, 0, '.', ',');
                            echo($n161);
                        ?></cENTER>
                    </td>
                    <td>
                         <center></center> 
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <cENTER>0</cENTER>
                    </td>
                    <td>
                         <center></center> 
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
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
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                       ______________
                    </td>
                    <td>
                        ______________
                    </td>
                    <td>
                        _____________
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
                        <CENTER> <?php $RESUL07=$acuenta126;
                            $as46=number_format($RESUL07, 0, '.', ',');
                            echo($as46);
                        ?></CENTER>
                    </td>
                    <td>
                         <center></center> 
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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
                        <CENTER> <?php $RES56=$RES28+$RES35+$RES42+$RES49;
                            $as52=number_format($RES56, 0, '.', ',');
                            echo($as52);
                        ?></CENTER>
                    </td>
                    <td>
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                   </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                   </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                   </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                   </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                   </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                   </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;                   </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
                    </td>
                    <td>
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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
                        <CENTER><?php $RES63=$RES21+$RES56+$RESUL07;
                            $as59=number_format($RES63, 0, '.', ',');
                            echo($as59);
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
                        &#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;&#9552;
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