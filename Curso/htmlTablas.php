<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROWEB | Mis cursos</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./resources/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="./resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="./resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="./resources/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./resources/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="./resources/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="./resources/plugins/summernote/summernote-bs4.min.css">
    <link rel="icon" href="./resources/images/Circulo_cromatico.svg.png">

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            <a class="navbar-brand" href="../uliya-html/index.html">
                <img src="./resources/images/Circulo_cromatico.svg.png" alt="" height="20px">
                <span>
                    PROWEB
                </span>
            </a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="../uliya-html/index.html">Inicio </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../Curso/indexCurso.php">Mis cursos<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../Usuario/login.php"> Ingresar </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../uliya-html/contact.html">Contactanos</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="./resources/images/Circulo_cromatico.svg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PROWEB</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Curso de programación web</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="./indexCurso.php" class="nav-link ">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    HTML Básicos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./htmlAtributos.php" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    HTML Atributos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./htmlEstilos.php" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    HTML Estilos - CSS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./htmlTablas.php" class="nav-link active">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    HTML Tablas
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row"></div>
                    <div class="row"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <br>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <h1>TABLAS EN HTML</h1>
                        </div><!-- /.col -->
                        <div class="col-md-4"></div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <br>
                    </div>
                    <div class="row">
                        <!-- ./col -->
                        <div class="col-md-8">
                            <h3>¿Qué son?</h3>
                            <p>Las tablas HTML permiten a los desarrolladores web organizar los datos en filas y Columnas.</p>
                            <table>
                                <tr>
                                    <th>Company</th>
                                    <th>Contact</th>
                                    <th>Country</th>
                                </tr>
                                <tr>
                                    <td>Alfreds Futterkiste</td>
                                    <td>Maria Anders</td>
                                    <td>Germany</td>
                                </tr>
                                <tr>
                                    <td>Centro comercial Moctezuma</td>
                                    <td>Francisco Chang</td>
                                    <td>Mexico</td>
                                </tr>
                                <tr>
                                    <td>Ernst Handel</td>
                                    <td>Roland Mendel</td>
                                    <td>Austria</td>
                                </tr>
                                <tr>
                                    <td>Island Trading</td>
                                    <td>Helen Bennett</td>
                                    <td>UK</td>
                                </tr>
                                <tr>
                                    <td>Laughing Bacchus Winecellars</td>
                                    <td>Yoshi Tannamuri</td>
                                    <td>Canada</td>
                                </tr>
                                <tr>
                                    <td>Magazzini Alimentari Riuniti</td>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <br><br>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Definir una tabla HTML</h3>
                            <p>Una tabla en HTML consta de celdas de tabla dentro de filas y columnas.</p>
                            
                            <table>
                                <tr>
                                    <th>Company</th>
                                    <th>Contact</th>
                                    <th>Country</th>
                                </tr>
                                <tr>
                                    <td>Alfreds Futterkiste</td>
                                    <td>Maria Anders</td>
                                    <td>Germany</td>
                                </tr>
                                <tr>
                                    <td>Centro comercial Moctezuma</td>
                                    <td>Francisco Chang</td>
                                    <td>Mexico</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <br>
                        <img src="./resources/images/table.png" alt="">
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="../uliya-html/index.html">PROWEB</a>.</strong>
            Todos los derechos reservados.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./resources/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="./resources/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="./resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="./resources/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="./resources/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="./resources/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="./resources/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="./resources/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="./resources/plugins/moment/moment.min.js"></script>
    <script src="./resources/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="./resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="./resources/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="./resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./resources/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./resources/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="./resources/dist/js/pages/dashboard.js"></script>
</body>

</html>