<!DOCTYPE html>
<html><!--


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
select * from `INFOR.SALDO_MESUAL_1` where SOCIEDAD="5500" AND CUENTA in ("6390010000","6410010103","6410010113","6410010119","6491320000","6401010114","6491080000","6491100000","6492030301","2401120702","6492020102","6410010102","6410010103","6410010122","6410010104","6492030201","6410010111","6410010112","6410010125","6410010113","6410010115","6410010107","6410010108","6410010118","6492030201","6491350400","6491350100","6491350200","6491350300","6410010121","6410010110","6410010121","6491410100","6491250000","6491070000","6491010000","6409000000","6403020100","6491240000","6491010000","6491420101","6491050000","6404020000","6491380100","6408020100","6408010000","6406020000","6410010128","6491360200",'6402020000',"6491330000","6491140000","6408020000","6491030000","6491370000","6490020000","6491360000","6408080000","6490040000","6410010104");
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
        <div class="table-responsive">
            
        
        <table BORDER=0 class="table-hover">
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
                    

                </tr><tr><td></td><td></td>
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
                        <center>5%</center>
                    </td>
                    <td>
                        <center>85%</center>
                    </td>
                    <td>
                        <center>10%</center>
                    </td>
                    <td>
                        <center></center>
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
                       <center>SEGUROS</center>
                    </td>
                    <td>
                        <center>OPERADORA</center>
                    </td>
                    <td>
                        <center>BANCO</center>
                    </td>
                    
                    <td>
                        <CENTER>MBC </CENTER>
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
                        ________________________________________________________________
                    </td>
                    <td>
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
                    </td>
                    

                </tr><tr>
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
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <center></br><?php echo $arr['6410010102']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                         <center></br><?php echo $result=0; ?>
                          </center> 
                    </td>
                    <td>
                        <center></br><?php  $result1=($Qrs)*(5/100);
                                        $n=number_format($result1, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center></br> <?php  $result2=($Qrs)*(85/100);
                                        $n=number_format($result2, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <center></br><?php  $result3=($Qrs)*(10/100);
                                        $n=number_format($result3, 0, '.', ',');
                                        echo($n);
                        ?>  </center>
                    </td>
                    <td>
                        <CENTER></br><?php $tot=$result+$result1+$result2+$result3; 
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

                <tr><td><center><?php echo $arr['6410010104']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                   
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result9=($Qrs1)*(5/100);
                                        $n=number_format($result9, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result10=($Qrs1)*(85/100);
                                        $n=number_format($result10, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result11=$Qrs1*(10/100);
                                        $n=number_format($result11, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot1=$result9+$result10+$result11; 
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
                        <CENTER><?php  $Qrs2=$arr['6410010111']['ABRIL']; 
                            $n=number_format($Qrs2, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                     <td><center>0</center></td>
                    <td>
                        <center><?php  $result18=($Qrs2)*(5/100);
                                        $n=number_format($result18, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result19=($Qrs2)*(85/100);
                                        $n=number_format($result19, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result20=$Qrs2*(10/100);
                                        $n=number_format($result, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot2=$result18+$result19+$result20; 
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
                        <CENTER><?php $Qrs3=$arr['6410010112']['ABRIL']; 
                            $n55=number_format($Qrs3, 0, '.', ',');
                            echo($n55); 
                         ?> 
</CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result21=($Qrs3)*(5/100);
                                        $n=number_format($result21, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result22=($Qrs3)*(85/100);
                                        $n=number_format($result22, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result23=$Qrs3*(10/100);
                                        $n=number_format($result23, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot3=$result21+$result22+$result23; 
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
                        <CENTER> <?php $Qrs4=$arr['6410010115']['ABRIL'];$n76=number_format($Qrs4, 0, '.', ',');
                            echo($n76); ?>
 </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result30=($Qrs4)*(5/100);
                                        $n=number_format($result30, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result31=($Qrs4)*(85/100);
                                        $n=number_format($result31, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php $result32=$Qrs4*(10/100);
                                        $n=number_format($result32, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <CENTER><?php $tot4=$result30+$result31+$result32; 
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

                       <tr><td></td><td></td>
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
                                    <?php $Qrs6=$arr['6410010122']['ABRIL']; 
                            $n=number_format($Qrs6, 0, '.', ',');
                            echo($n);
                        ?>
 </CENTER>
                    </td>
                    
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result6=($Qrs6)*(5/100);
                                        $n=number_format($result6, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result7=($Qrs6)*(85/100);
                                        $n=number_format($result7, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php $result8=$Qrs6*(10/100);
                                        $n=number_format($result8, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot6=$result6+$result7+$result8; 
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
                        <CENTER><?php  $Qrs7=$arr['6410010125']['ABRIL']; 
                            $n62=number_format($Qrs7, 0, '.', ',');
                            echo($n62);
                        ?> 
</CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result24=($Qrs7)*(5/100);
                                        $n=number_format($result24, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result25=($Qrs7)*(85/100);
                                        $n=number_format($result25, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result26=$Qrs7*(10/100);
                                        $n=number_format($result26, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot7=$result24+$result25+$result26; 
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
                        <CENTER> <?php $Qrs8=$arr['6410010104']['ABRIL']; 
                            $n=number_format($Qrs8, 0, '.', ',');
                            echo($n);
                        ?> 
</CENTER>
                    </td>
                   
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result9=($Qrs8)*(5/100);
                                        $n=number_format($result9, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result10=($Qrs8)*(85/100);
                                        $n=number_format($result10, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result11=$Qrs8*(10/100);
                                        $n=number_format($result11, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot8=$result9+$result10+$result11; 
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
                        <CENTER><?php $Qrs9=$arr['6410010103']['ABRIL']; 
                            $n=number_format($Qrs9, 0, '.', ',');
                            echo($n);
                            ?>
                         </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result3=($Qrs9)*(5/100);
                                        $n=number_format($result3, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result4=($Qrs9)*(85/100);
                                        $n=number_format($result4, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result5=$Qrs9*(10/100);
                                        $n=number_format($result5, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot9=$result3+$result4+$result5; 
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

 <tr><td></td><td></td>
                    <td>
                      
BONO GRATIFICACION Y PTU 
                    </td>
                    <td>
                        <CENTER><?php echo $Qrs10=0; ?></CENTER>
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
                       </tr>

                    <tr><td></td><td></td>
                    <td>
                      
PRIMA VACACIONAL (PAGADO EN EL MES) 
                    </td>
                    <td>
                        <CENTER><?php echo $Qrs11=0; ?></CENTER>
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
                       </tr>

                       
                  <tr><td></td><td></td>
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                    <td></br><?php echo "&nbsp"."&nbsp";
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                <tr><td><center><?php echo $arr['6410010102']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td></br><?php echo "&nbsp"."&nbsp";
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                <tr><td><center><?php echo $arr['6410010113']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td></br><?php echo "&nbsp"."&nbsp";
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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

                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center>SUMAS</center>
                    </td>
                    <td>
                        <CENTER> <?php $RES=$Qrs+$Qrs1+$Qrs2+$Qrs3+$Qrs4+$Qrs5+$Qrs6+$Qrs7+$Qrs8+$Qrs9+$Qrs10+$Qrs11+$Qrs12+$Qrs13+$Qrs14+$Qrs15+$Qrs16+$Qrs17+$Qrs18;
                        $as6=number_format($RES, 0, '.', ',');
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
                <tr><td></td><td></td>
                    <td>
                        <center><h4></h4></center>
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
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                    <td><center><?php echo $arr['6390010000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                       
                        OTRAS COMISIONES BANCARIAS

                    </td>
                    
                    <td>
                        <CENTER> <?php  $Qrs19=$arr['6390010000']['ABRIL']; $n90=number_format($Qrs19, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result43=($Qrs19)*(5/100);
                                        $n=number_format($result43, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result44=($Qrs19)*(85/100);
                                        $n=number_format($result44, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php $result45=$Qrs19*(10/100);
                                        $n=number_format($result45, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot19=$result43+$result44+$result45; 
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
                    <td><center>0</center></td>
                    <td>
                        <center><?php  
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php 
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php 
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php 
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
                                
                                $Qrs56=$arr['6402020000']['ABRIL']; 
                            $n=number_format($Qrs56, 0, '.', ',');
                            echo($n);
                            
                            ?></CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php 
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php 
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php 
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php 
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
                        <CENTER> <?php  $Qrs21=$arr['6403020100']['ABRIL']; $n90=number_format($Qrs21, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result43=($Qrs21)*(5/100);
                                        $n=number_format($result43, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result44=($Qrs21)*(85/100);
                                        $n=number_format($result44, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php $result45=$Qrs21*(10/100);
                                        $n=number_format($result45, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot21=$result43+$result44+$result45; 
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
                            $Qrs22=$arr['6404020000']['ABRIL']; 
                            $n=number_format($Qrs22, 0, '.', ',');
                            echo($n);
                        ?></CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result12=($Qrs22)*(5/100);
                                        $n=number_format($result12, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result13=($Qrs22)*(85/100);
                                        $n=number_format($result13, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php $result14=$Qrs22*(10/100);
                                        $n=number_format($result14, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot22=$result12+$result13+$result14;
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
                        <CENTER><?php $Qrs23=$arr['6408010000']['ABRIL']; 
                            $n21=number_format($Qrs23, 0, '.', ',');
                            echo($n21);
                        ?>  </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result15=($Qrs23)*(5/100);
                                        $n=number_format($result15, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result16=($Qrs23)*(85/100);
                                        $n=number_format($result16, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result17=$Qrs23*(10/100);
                                        $n=number_format($result17, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot23=$result15+$result16+$result17; 
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
                        <CENTER> <?php  $Qrs24=$arr['6408020000']['ABRIL']; 
                            $n69=number_format($Qrs24, 0, '.', ',');
                            echo($n69);
                        ?>
 </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result27=($Qrs24)*(5/100);
                                        $n=number_format($result27, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result28=($Qrs24)*(85/100);
                                        $n=number_format($result28, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result29=$Qrs24*(10/100);
                                        $n=number_format($result29, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot24=$result27+$result28+$result29; 
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
                        <CENTER><?php $Qrs25=$arr['6408020100']['ABRIL']; $n83=number_format($Qrs25, 0, '.', ',');
                            echo($n83);?>
</CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result33=($Qrs25)*(5/100);
                                        $n=number_format($result33, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result34=($Qrs25)*(85/100);
                                        $n=number_format($result34, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php $result35=$Qrs25*(10/100);
                                        $n=number_format($result35, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot25=$result33+$result34+$result35; 
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
                        <CENTER><?php $Qrs26=$arr['6409000000']['ABRIL'];$n90=number_format($Qrs26, 0, '.', ',');
                            echo($n90); ?>
 </CENTER>
                    </td>
                   <td><center>0</center></td>
                    <td>
                        <center><?php  $result36=($Qrs26)*(5/100);
                                        $n=number_format($result36, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result37=($Qrs26)*(85/100);
                                        $n=number_format($result37, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result38=$Qrs26*(10/100);
                                        $n=number_format($result38, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <CENTER><?php $tot26=$result36+$result37+$result38; 
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
                        <CENTER> <?php  $Qrs27=$arr['6410010110']['ABRIL']; $n90=number_format($Qrs27, 0, '.', ',');
                            echo($n90); ?> </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result39=($Qrs27)*(5/100);
                                        $n=number_format($result39, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result41=($Qrs27)*(85/100);
                                        $n=number_format($result41, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    
                    <td>
                        <center><?php $result42=$Qrs27*(10/100);
                                        $n=number_format($result42, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot27=$result39+$result41+$result42; 
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
                        <CENTER>  <?php $Qrs28=$arr['6410010119']['ABRIL'];;$n97=number_format($Qrs28, 0, '.', ',');
                            echo($n97); ?>

 </CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result=($Qrs28)*(5/100);
                                        $n=number_format($result, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result=($Qrs28)*(85/100);
                                        $n=number_format($result, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php $result=$Qrs28*(10/100);
                                        $n=number_format($result, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot28=$result+$result+$result; 
                                        $n=number_format($tot28, 0, '.', ',');
                                        echo($n);
                        ?></CENTER>
                    </td>
                    <td>
                         <center><?php $var28=+$tot28-$Qrs28; 
                                        $n=number_format($var28, 0, '.', ',');
                                        echo($n);
                        ?> </center> 
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
                        <CENTER><?php  $Qrs29=$arr['6410010128']['ABRIL'];  $n90=number_format($Qrs29, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result15=($Qrs29)*(5/100);
                                        $n=number_format($result15, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result16=($Qrs29)*(85/100);
                                        $n=number_format($result16, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php $result17=$Qrs29*(10/100);
                                        $n=number_format($result17, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot29=$result15+$result16+$result17; 
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
                        <CENTER> <?PHP  $Qrs30=$arr['6491010000']['ABRIL'];  $n90=number_format($Qrs30, 0, '.', ',');
                            echo($n90); ?></CENTER>
                    </td>
                    <td><center>0</center></td>
                    <td>
                        <center><?php  $result18=($Qrs30)*(5/100);
                                        $n=number_format($result18, 0, '.', ',');
                                        echo($n);
                         ?> </center>
                    </td>
                    <td>
                        <center> <?php  $result19=($Qrs30)*(85/100);
                                        $n=number_format($result19, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                   
                    <td>
                        <center><?php $result20=$Qrs30*(10/100);
                                        $n=number_format($result20, 0, '.', ',');
                                        echo($n);
                        ?> </center>
                    </td>
                    <td>
                        <CENTER><?php $tot30=$result18+$result19+$result20; 
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
                        <CENTER><?php $Qrs31=$arr['6491050000']['ABRIL'];
                            $n104=number_format($Qrs31, 0, '.', ',');
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
                    <td><center>6491060000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                         <center> </center> 
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                    <td><center><?php echo $arr['6491140000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
TRANSPORTES LOCALES (TAXIS, ESTACIONAMIENTOS, CASETA)
                    </td>
                    <td>
                        <CENTER>  <?php $Qrs34=$arr['6491140000']['ABRIL']; 
                            $n118=number_format($Qrs34, 0, '.', ',');
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
                         <center></br>
</center> 
                    </td>
                    <td>
                        <center></br>
 </center>
                    </td>
                    <td>
                        <center> </br>
</center>
                    </td>
                    <td>
                        <center></br>
</center>
                    </td>
                    <td>
                        <center> </br>
</center>
                    </td>
                    <td>
                        <center></br>
 
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
                    <td><center><?php echo $arr['6491240000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center><?php echo $arr['6491320000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center><?php echo $arr['6491330000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center>6491350000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center><?php echo $arr['6491350100']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center><?php echo $arr['6491350200']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                        TASNSP (TAXIS, ESTAC, GRUA, AUTOS, GASOLINA, CASETAS)
</td>
                    <td>
                        <cENTER><?php $Qrs41=$arr['6491350200']['ABRIL']; 
                            $n139=number_format($Qrs41, 0, '.', ',');
                            echo($n139);
                        ?></cENTER>
                    </td>
                    <td>
                         <center></br></center> 
                    </td>
                    <td>
                        <center></br></center>
                    </td>
                    <td>
                        <center></br></center>
                    </td>
                    <td>
                        <center></br></center>
                    </td>
                  
                    <td>
                        <center></br></center>
                    </td>
                    <td>
                        <center></br></center>
                    </td>
                    <td>
                       <center> </br></center>
                    </td>
                    <td>
                        <center> </br></center>
                    </td>
                    <td>
                        <center></br> </center>
                    </td>
                    <td>
                        <center></br> </center>
                    </td>
                    <td>
                        <center></br> </center>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
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
                        <ceNTER><?php $Qrs42=$arr['6491350300']['ABRIL'];
                            $n147=number_format($Qrs42, 0, '.', ',');
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
                    <td><center><?php echo $arr['6491350400']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center><?php echo $arr['6491360200']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center>6491360500 </center>
                    </td>
                    <td></br><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                         <center></br></center> 
                    </td>
                    <td>
                        <center></br></center>
                    </td>
                    <td>
                        <center> </br></center>
                    </td>
                    <td>
                        <center></br></center>
                    </td>
                    <td>
                        <center> </br></center>
                    </td>
                    <td>
                        <center></br> </center>
                    </td>
                    <td>
                       <center></br> </center>
                    </td>
                    <td>
                        <center></br> </center>
                    </td>
                    <td>
                        <center></br> </center>
                    </td>
                    <td>
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
                    <td><center><?php echo $arr['6491370000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
INSUMOS Y SUMINISTROS</td>
                    <td>
                        <cENTER><?php $Qrs46=$arr['6491370000']['ABRIL'];
                            $n161=number_format($Qrs46, 0, '.', ',');
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
                    <td><center><?php echo $arr['6491380100']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
CONSUMOS EN RESTAURANTES (LOCALES)</td>
                    <td>
                        <cENTER><?php $Qrs47=$arr['6491380100']['ABRIL'];
                            $n161=number_format($Qrs47, 0, '.', ',');
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
                    <td><center>6491410000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center><?php echo $arr['6491410100']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
COMBUSTIBLES Y LUBRICANTES (LOCALES) </td>
                    <td>
                        <cENTER><?php $Qrs49=$arr['6491410100']['ABRIL'];
                            $n161=number_format($Qrs49, 0, '.', ',');
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
                    <td><center>6491390000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center>6491090000 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center><?php echo $arr['6410010121']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
FIESTA FIN DE ANO</td>
                    <td>
                        <cENTER><?php $Qrs52=$arr['6410010121']['ABRIL'];
                            $n161=number_format($Qrs52, 0, '.', ',');
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
                    <td><center><?php echo $arr['6491250000']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
MANT INMUEBLES </td>
                    <td>
                        <cENTER><?php $Qrs53=$arr['6491250000']['ABRIL'];
                            $n161=number_format($Qrs53, 0, '.', ',');
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
                    <td><center>6491360300 </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
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
                    <td><center><?php echo $arr['6491420101']['CUENTA']; 
                        ?> </center>
                    </td>
                    <td><?php echo "&nbsp"."&nbsp";
                    ?> </td>
                    <td>
                      
CUOTAS COMISION NACIONAL BANCARIA Y DE VALORES</td>
                    <td>
                        <cENTER><?php $Qrs55=$arr['6491420101']['ABRIL'];
                            $n161=number_format($Qrs55, 0, '.', ',');
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

                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <CENTER> <?php $RES1=$Qrs+$Qrs19+$Qrs20+$Qrs21+$Qrs22+$Qrs23+$Qrs24+$Qrs25+$Qrs26+$Qrs27+$Qrs28+$Qrs29+$Qrs30+$Qrs31+$Qrs32+$Qrs33+$Qrs34+$Qrs35+$Qrs36+$Qrs37+$Qrs38+$Qrs39+$Qrs40+$Qrs41+$Qrs42+$Qrs43+$Qrs44+$Qrs45+$Qrs46+$Qrs47+$Qrs48+$Qrs49+$Qrs50+$Qrs51+$Qrs52+$Qrs53+$Qrs54+$Qrs55+$Qrs56;
                            $as46=number_format($RES1, 0, '.', ',');
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

                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center><h5 align="right">TOTAL</h5></center>
                    </td>
                    <td>
                        <CENTER> <?php $RES2=$RES+$RES1;
                            $as52=number_format($RES2, 0, '.', ',');
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
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                       <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
                        <center> </center>
                    </td>
                    <td>
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
                        <center>  <h5 align="right">Base IVA</h5></center>
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
                        <center> <h5 align="right">IVA 16%</h5></center>
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

                </tr>
                <tr><td></td><td></td>
                    <td>
                        <center> <h5 align="right">Total Gastos</h5></center>
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

                
                <tr><td></td><td></td>
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

                </tr>









                <tr><td></td><td></td>
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

                </tr><tr><td></td><td></td>
                    <td>
                        BONO OTRAS GRATIFICACIONES (PROVISIONES)
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

                </tr><tr><td></td><td></td>
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

                </tr><tr><td></td><td></td>
                    <td>
                        PROV VALES DE DESPENSA
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
                        UNIFORMES
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

                </tr><tr><TD></TD><TD></TD>

                    <td>
                        FIESTA FIN DE ANO
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
                        GRATIFICACION
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
<tr><td></td><td></td>
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