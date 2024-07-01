<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion</title>
    <style>
    h1{
    color: rgb(252, 72, 198);
    font-family: cursive;
    font-size: 34px;
}

p{
   color: rgb(0, 0, 0);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

h2{
    color: rgb(216, 65, 208);
    font-style: italic;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 28px;
}
h3{
   color:rgb(243, 94, 169);
   font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 23px;
}

h4{
  color:rgba(255, 55, 178, 0.884);
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: 40px;

}
main{
  color: rgb(255, 255, 255);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

header {
    background: rgba(255, 101, 222, 0.733);
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
    background: #ff9dea;
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
            <li><a href="tratamiento3_amor.html"> Regresar a la pagina :3 </a></li>
            <li><a href="">Inicio:3 </a></li>
        </ul>
    </nav>
</header>
<body background="https://i.pinimg.com/564x/eb/df/e8/ebdfe876d5a2f98f389f60826fcb987c.jpg">

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
     <img src="https://i.pinimg.com/564x/2d/f9/b3/2df9b37f1589ef3b095007ad0f97633e.jpg" width="200" height="200" align="Right">
     <br>
     <br>
    <p>Estaras pagando 300$ pesos por mes :3</p>
    <img src="https://i.pinimg.com/736x/06/1d/f3/061df3313e826380d294c091aea7f787.jpg" width="200" height="200" align="Right">
    <p>Suerte en tu curso durante este periodo de tiempo :3</p>
    
</body>
</html>