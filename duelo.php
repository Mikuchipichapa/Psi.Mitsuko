<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion</title>
    <style>
        h1{
    color: rgb(45, 131, 42);
    font-family: cursive;
    font-size: 34px;
    animation-duration: 3s;
}

p{
   color: rgb(255, 255, 255);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

h2{
    color: rgb(18, 150, 18);
    font-style: italic;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 28px;
}
h3{
   color:rgb(26, 187, 4);
   font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   font-size: 23px;
}

main{
  color: rgb(255, 255, 255);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

header {
    background: rgba(22, 211, 123, 0.575);
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
    background: #337e5b;
  }

  ul li{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    color: #ffffff;
  }
  </style>
</head>
<header>
    <nav>
        <ul>
            <li><a href="tratamiento_duelo.html"> Regresar a la pagina :3 </a></li>
            <li><a href="">Inicio:3 </a></li>
        </ul>
    </nav>
</header>

<body background="https://i.pinimg.com/564x/95/b7/7e/95b77e56ec13e7bad04a48161ab627b8.jpg">
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
     <img src="https://i.pinimg.com/564x/01/9c/9b/019c9b8def0afdb51d154ad12130fbf6.jpg" width="200" height="200" align="Right">
     <br>
     <br>
    <p>Estaras pagando 300$ pesos por mes :3</p>
    <img src="https://i.pinimg.com/564x/46/ab/2f/46ab2f528eda98ff64fc53a477b22012.jpg" width="200" height="200" align="Right">
    <p>Suerte en tu curso durante este periodo de tiempo :3</p>
    
</body>
</html>