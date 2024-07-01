<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1{
    color: rgb(97, 35, 212);
    font-family: cursive;
    font-size: 34px;
    animation-duration: 3s;
}

p{
   color: rgb(0, 0, 0);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

h2{
    color: rgb(156, 65, 216);
    font-style: italic;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 28px;
}
h3{
   color:rgba(138, 49, 255, 0.788);
   font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 23px;
}

h4{
  color:rgb(109, 47, 150);
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: 40px;

}
main{
  color: rgb(255, 255, 255);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

header {
    background: rgba(120, 32, 179, 0.5);
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
    background: #9531c4;
  }

  ul li{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    color: #ffffff;
  }

  ol li{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    color: #ffffff;
  }

  footer {
    background-color: rgba(126, 59, 233, 0.733);
    color: rgba(220, 143, 255, 0.829);
    text-align: center;
    padding: 10px;
    width: 100%;
  }

  h5{
    color: rgba(169, 132, 255, 0.829);
    font-size: 40px;
  }

  strong{
    color: mediumpurple;
    font-size: 22px;
    font-family: 'Times New Roman', Times, serif;
  }
    </style>
    <title>inscripcion</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="tratamiento_menor.html"> Regresar a la pagina :3 </a></li>
            <li><a href="">Inicio:3 </a></li>
        </ul>
    </nav>
</header>

<body background="https://i.pinimg.com/736x/40/36/17/403617f67f08b1c5cc1aa6ec34d31c93.jpg">
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
     <img src="https://i.pinimg.com/564x/0a/db/2b/0adb2b7c69002bfd6b81abd40e01667b.jpg" width="200" height="200" align="Right">
     <br>
     <br>
    <p>Estaras pagando 300$ pesos por mes :3</p>
    <img src="https://i.pinimg.com/564x/b2/8e/43/b28e439c5ce8c18ce9e18abb06230469.jpg" width="200" height="200" align="Right">
    <p>Suerte en tu curso durante este periodo de tiempo :3</p>
</body>
</html>
    
</body>
</html>