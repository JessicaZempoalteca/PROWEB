<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROWEB | Ingresar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./resources/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./resources/dist/css/adminlte.min.css">
    <link rel="icon" href="./resources/images/Circulo_cromatico.svg.png">


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="./resources/css/bootstrap.css" />
    <!-- Custom styles for this template -->
    <link href="./resources/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="./resources/css/responsive.css" rel="stylesheet" />

</head>

<body class=" ">

    <header class="header_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 offset-lg-1">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand" href="index.html">
                            <img src="./resources/images/Circulo_cromatico.svg.png" alt="">
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
                                        <a class="nav-link" href="index.html">Inicio </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../Curso/indexCurso.php">Mis cursos</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="../Usuario/login.php"> Ingresar <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html"> Sobre Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contactanos</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <br><br><br>

    <div class="row">
        <div class="col"></div>
    <div class="col ">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="./login.php" class="h1"><b>PRO</b>WEB</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Inicia sesión para guardar tu progreso</p>

                <form action="../Curso/indexCurso.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Correo eléctronico">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <br>
                <p class="mb-1">
                    <a href="forgot-password.html">No puedo iniciar sesión</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Registrarse</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>
    <div class="col"></div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- footer section -->

    <script type="text/javascript" src="./resources/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="./resources/js/bootstrap.js"></script>
</body>

</html>