<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion</title>
    <style>
        h1{
    color: rgba(253, 0, 21, 0.849);
    font-family: cursive;
    font-size: 34px;
    
}

p{
   color: rgb(0, 0, 0);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

h2{
    color: rgb(219, 35, 81);
    font-style: italic;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 28px;
}
h3{
   color:rgb(255, 10, 10);
   font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   font-size: 23px;
}

h4{
  color: #d34141;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 24px;
}

main{
  color: rgb(255, 255, 255);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

header {
    background: rgba(150, 5, 5, 0.521);
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
    background: #bd3c3cdc;
  }
</style>
</head>
<header>
    <nav>
        <ul>
            <li><a href="tratamiento_forense.html"> Regresar a la pagina :3 </a></li>
            <li><a href="">Inicio:3 </a></li>
        </ul>
    </nav>
</header>
<body background="https://i.pinimg.com/736x/2a/cb/1d/2acb1de2840b287fda73585a1c6dc17f.jpg">

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

     <img src="https://i.pinimg.com/564x/45/b5/0f/45b50f9d9f38d989ce7b06978d1d1611.jpg" width="200" height="200" align="Right">
     <br>
     <br>
    <p>Estaras pagando 300$ pesos por mes :3</p>
    <img src="https://i.pinimg.com/564x/97/a9/cf/97a9cf35f9b778a47d0b2e6f268869fd.jpg" width="200" height="200" align="Right">
    <p>Suerte en tu curso durante este periodo de tiempo :3</p>
    
</body>
</html>