<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilos/signin.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Gestion consultas</title>
</head>
<body style="background-color: grey;">

<?php $url ="http://localhost/EntornosGraficosTPFinal"?>

    <div class="container ">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark  nav-justified" >
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo $url?>/index.php">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/UTN_logo.jpg" alt="Avatar Logo" style="width:100px;" class="rounded-pill" > 
              </a>
            </div>
            
            <li class="nav-item"><a class="nav-link" href="<?php echo $url?>/Vistas/Informacion.php">Informacion</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $url?>/Vistas/ListadoConsultasVisitante.php">Lista de Consultas</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $url?>/Vistas/Login.php">Iniciar Sesión</a></li>
        
          </nav>
          
          