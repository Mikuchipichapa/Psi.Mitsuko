<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tu cita</title>
    <style>
        h1{
    color: rgb(107, 83, 51);
    font-family: cursive;
    font-size: 34px;
}

p{
   color: rgb(0, 0, 0);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

h2{
    color: rgb(157, 185, 80);
    font-style: italic;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 28px;
}
h3{
   color:rgba(128, 103, 70, 0.863);
   font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   font-size: 23px;
}

h4{
  color: #315f2d;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 24px;
}

main{
  color: rgb(0, 0, 0);
   font-size: 22px;
   font-family: 'Times New Roman', Times, serif;
}

header {
    background: rgba(128, 102, 69, 0.699);
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
    background: #614a2dd2;
  }
    </style>
</head>
<header>
    <nav>
        <ul>
            <li><a href="consulta1.html"> Regresar a la pagina :3 </a></li>
            <li><a href="">Inicio:3 </a></li>
        </ul>
    </nav>
</header>

<body background="https://i.pinimg.com/564x/5e/17/c8/5e17c849c77e1947935f20771a390863.jpg">
   <br>
   <br>
   <br>
   <br>
    <center>
    <h1>Mitsuko Siloe Soto Flores</h1>
    <h1>4AVP</h1>
    <h1>Programacion</h1>
    <h2>Tu cita</h2>
    </center>
    <h3>Datos del paciente</h3>
    <?php
    $nombre= $_GET ['nombre'];
    $apellido= $_GET ['apellido'];
    $ape= $_GET ['ape'];
    $edad= $_GET ['edad'];
    $genero= $_GET ['rgb'];
    $correo= $_GET ['correo'];
    $mensaje= $_GET ['msg'];
    $dr= $_GET ['dr'];

    if (isset($_GET['edad'])) {
        $edad = $_GET['edad'];
        
        
        if ($edad < 18) {
            $edad= "Lo siento, " .$nombre." aun eres menor de edad. Debes ir acompañado de tu padre o tutor legal. Pero aun asi puedes ir al consultorio";
        } else {
            $edad= "¡Eres mayor de edad! Puedes ir solo/a al consultorio.";
        }
    } else {
        $edad= "No se recibió la edad.";
    }

    if (isset($_GET['rgb']))
    {
          $genero= $_GET['rgb'];
    }

    if (isset($resultado['dr']))
    {
         $dr= $resultado['dr'];
         switch($dr)
         {
            case 'Mitsuko Soto':
                echo 'Mitsuko Soto <br>';
                break;
                case 'Emily Castro':
                    echo 'Emily Castro <br>';
                    break;
                    case 'Ashley Ramos':
                        echo 'Ashley Ramos <br>';
                        break;
         }
        
    }
    echo "Su nombre es: " . $nombre . " " .$apellido. " " .$ape. "<br>";
    echo $edad. "<br>";
    echo "Usted es: " .$genero. "<br>";
    echo "Ingreso con el correo:" .$correo. "<br>";
    echo "Motivo de la inscripcion: " .$mensaje. "<br>";
    echo "Con el/la doctor/a: " .$dr. "<br>";
    ?>
    <center>
    <img src="https://i.pinimg.com/564x/a6/10/11/a610111a3938a4eb47f02d2d5311c2b7.jpg" widht="200" height="200" align=>
    <p> ¡Nos vemos la siguiente semana en mi consultorio!</p>
   </center>
</body>
</html>