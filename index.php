<?php 
$servername = "162.222.203.222:3306";
$username = "pagina";
$password = "2922499aa";
$database = "ejemplophp";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Insertar datos en la base de datos
    $leerSql = "SELECT * FROM usuarios";
    $result = mysqli_query($conn, $leerSql);
    
    // Verificar si hay resultados
    if (mysqli_num_rows($result) > 0) {
        // Iterar sobre los resultados y mostrar los datos
        while ($row = mysqli_fetch_assoc($result)) {
            $content = array("nombre" => $row["nombre"], "Correo: " => $row["correo"] , "contrasena" => $row["contrasena"]) ;
       if($content["correo"] == $correo && $content["contrasena"]==$contrasena){
        header("location: home.php");
       }
        }
    } else {
        echo "No se encontraron resultados.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Pagina</title>
</head>
<body>  
    
<!-- 
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container-fluid">
    <a class="navbar-brand" href="#">Pagina de ejemplo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">sobre nosotros</a>
        </li>
      </ul>
    </div>
    <div class="navbar-nav ml-auto"> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Deiby Graciano
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Perfil</a></li>
          <li><a class="dropdown-item" href="#">Configuración</a></li>
          <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
        </ul>
      </li>
    </div>
  </div>
</nav>
    </div>

    -->

        <div class="row pt-4 contenedor">
            <div class="container">
            <div class="row">
            <div class="col ">
                <img class="foto-familia" src="https://d9b6rardqz97a.cloudfront.net/wp-content/uploads/2019/10/12172443/seguro-de-hogar_personas-1-1023x475.jpg" alt="">
            </div>
            <div class="col text-center">
                <form method="POST">
                    <h5 class="pt-4 mt-4 pb-2">Ingresa tus datos de inicio</h5>
                    <label class=" mt-4 pb-2">Ingresa tu correo</label></br>
                    <input type="text" class="form-control" name="nombre"></br>
                    <label class="pb-2">Ingresa tu contraseña</label></br>
                    <input type="password" class="form-control" name="contrasena"></br></br>
                    <input class="btn btn-success" type="submit" value="Entrar">
                    <form><br>
                    <label class="pt-4"><a href="#">¿Haz olvidado tu contraseña?</label></a><br>
                    <label class="pt-4"><a href="register.php">Registrate</label></a>
                    
            </div>
        </div>
            </div>
        </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>