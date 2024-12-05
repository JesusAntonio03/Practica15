<!DOCTYPE html>
<html lang="es-mx">
<head>
<meta charset="UTF-8">
<title>CiTIM Grupo XB</title>
<link rel="stylesheet" href="css/problemaStem.css"/>
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<section class="wrapper">
    <header>
    <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
    </header>
    <section id="contenedor">
    <section class="problema">
        <h2>Problema: Aquí escribe el tema del problema</h2>
        <p>Descripción:</p>
        <p>Cálculo de la distancia de Saturno al Sol
        Se puede calcular el semieje de la órbita de cualquier planeta,
        conociendo su periodo orbital.
        Por ejemplo, el período de rotación de Saturno alrededor del
        Sol es de 29·5 años. A partir de dicho periodo calcula el
        semieje mayor de la órbita de Saturno.</p>
    </section>
    <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/problema.jpg" alt="Esquema del problema">
        </center>
    </section>
    <section class="formulas">
        <h2>Fórmulas</h2>
        <p>a³ = T²</p>
    </section>
    <section class="datos">
        <h2>Datos:</h2>
        <p>
        T = periodo del planeta = 29.5 años <br>
        a = semi eje mayor en Unidades Astronómicas (UA) <br>
        1 UA = 150 millones de Km
        </p>
    </section>
    <section class="calculos">
        <h2>Solución</h2>
        <p>a = raíz cúbica((29.5 años)²)</p>
    </section>
    <section class="resultado">
        <h2>Resultado:</h2>
        <div id="semiejeMayor">
    <?php
            // Realizamos el cálculo del semieje mayor en UA
            $T = 29.5; // Periodo de Saturno en años

            // Cálculo de la fórmula: a³ = T² => a = raíz cúbica(T²)
            $aCubed = pow($T, 2); // T²
            $a = pow($aCubed, 1/3); // Raíz cúbica de T²

            // Convertir el resultado a kilómetros (1 UA = 150 millones de km)
            $aKm = $a * 150000000;

            // Mostrar el resultado
            echo "El semieje mayor de la órbita de Saturno es:<br>";
            echo "<strong>" . number_format($a, 2) . " UA</strong><br>";
           // echo "o aproximadamente <strong>" . number_format($aKm, 0, '.', ',') . " km</strong>.";
        ?>
        </div>
    </section>
    </section>
    <footer class="pie">
    Creative Commons versión 3.0 SciSoft 2024
    </footer>
</section>
</body>
</html>
