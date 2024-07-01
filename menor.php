<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
          h1{
    color: rgb(49, 179, 255);
    font-family: cursive;
    font-size: 34px;
    }

p{
   color: rgb(0, 0, 0);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

h2{
    color: rgb(43, 107, 226);
    font-style: italic;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 28px;
}
h3{
   color:rgba(49, 241, 255, 0.788);
   font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 23px;
}

h4{
  color:rgb(47, 109, 150);
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: 40px;

}
main{
  color: rgb(255, 255, 255);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

header {
    background: rgba(30, 135, 255, 0.5);
    width: 100%;
    position: fixed;
    z-index: 100;
  }
  
  nav {
    float: left;
  }
  
  nav ul {
    list-style: none;
    overflow: hidden; 
  }
  
  nav ul li {
    float: left;
    font-family: Cursive;
    font-size: 16px;
  }
  nav ul li a {
    display: block;
    padding: 10px;
    color:#ffffff;
    text-decoration: none;
  }
  nav ul li:hover {
    background: #85b6ff;
    text-decoration-color: rgb(68, 127, 255);
  }

  footer {
    background-color: rgba(59, 129, 233, 0.733);
    color: rgba(143, 219, 255, 0.829);
    text-align: center;
    padding: 10px;
    width: 100%;
  }
    </style>
    <title>Informacion de registro</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="tratamiento_menor.html"> Regresar a la pagina :3 </a></li>
            <li><a href="">Inicio:3 </a></li>
        </ul>
    </nav>
</header>

<body background="https://i.pinimg.com/736x/70/e2/11/70e2112b15d30161d100bd98a22d2aba.jpg">
<br>
   <br>
   <br>
   <br>
    <center>
    <h1>Mitsuko Siloe Soto Flores</h1>
    <h1>4AVP</h1>
    <h1>Programacion</h1>
    <h2>¡Bienvenido/a!</h2>
    </center>
    <h3>Datos del estudiante</h3>
    <?php
    $nombre= $_GET ['nombre'];
    $apellido= $_GET ['apellido'];
    $ape= $_GET ['ape'];
    $edad= $_GET ['edad'];
    $fecha= $_GET ['fecha'];
    $genero= $_GET ['rgb'];
    $correo= $_GET ['correo'];
    $mensaje= $_GET ['msg'];
    $curso= $_GET ['cur'];

    if (isset($_GET['rgb']))
    {
          $genero= $_GET['rgb'];
    }

    if (isset($resultado['cur']))
    {
         $curso= $resultado['cur'];
         switch($curso)
         {
            case 'Un año':
                echo 'Un año <br>';
                break;
                case '2 años':
                    echo '2 años <br>';
                    break;
                    case '3 años':
                        echo '3 años <br>';
                        break;
         }
        
    }
    echo "Su nombre es: " . $nombre . " " .$apellido. " " .$ape. "<br>";
    echo "Su edad es: " .$edad. "<br>";
    echo "Fecha de nacimiento: " .$fecha. "<br>";
    echo "Usted es: " .$genero. "<br>";
    echo "Ingreso con el correo: " .$correo. "<br>";
    echo "Motivo de la inscripcion: " .$mensaje. "<br>";
    echo "Estara cursando esta especialidad durante: " .$curso. "<br>";
    ?>
     <img src="https://i.pinimg.com/564x/cf/48/2c/cf482c8f454e782af0d72b65bea4ab79.jpg" width="200" height="200" align="Right">
     <br>
     <br>
    <p>Estaras pagando 300$ pesos por mes :3</p>
    <img src="https://i.pinimg.com/736x/ca/44/39/ca443984f4042907ce9c46f7981f0011.jpg" width="200" height="200" align="Right">
    <p>Suerte en tu curso durante este periodo de tiempo :3</p>
</body>
</html>