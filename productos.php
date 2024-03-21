<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos - Compañía de Cómputo y Tecnología</title>
    <link rel="stylesheet" href="styles.css">
    </head>
<body>
    <header>
        <div class="container">
            <h1>Productos - Compañía de Cómputo y Tecnología</h1>
            <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                    <li><a href="mision.php">Misión</a></li>
                    <li><a href="vision.php">Visión</a></li>
                    <li><a href="historia.php">Historia</a></li>
                    <li><a href="sedes.php">Sedes</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contactenos.php">Contáctenos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <style>
        /* Estilos adicionales si es necesario */
        img {
            max-width: 80px; /* Reducimos el tamaño máximo de las imágenes */
            height: auto; /* Altura automática */
        }
    </style>
</head>
<body>
    
    <div class="container content">
        <section class="product-section">
            <h2>Nuestros Productos</h2>
            <?php
            // Ruta del archivo CSV
            $archivo_csv = 'productos.csv';

            // Leer el archivo CSV
            $filas = array_map('str_getcsv', file($archivo_csv));

            // Verificar si se encontraron filas
            if (count($filas) > 0) {
                echo "<table>";
                foreach ($filas as $indice => $fila) {
                    if ($indice === 0) {
                        // Si es la primera fila, es decir, los títulos de las columnas, mostrarla dentro de la tabla
                        echo "<tr>";
                        foreach ($fila as $titulo) {
                            echo "<th>$titulo</th>";
                        }
                        echo "<th>Imagen</th>";
                        echo "</tr>";
                    } else {
                        // Si no es la primera fila, mostrar los datos de la fila como de costumbre
                        echo "<tr>";
                        foreach ($fila as $dato) {
                            echo "<td>$dato</td>";
                        }
                        $imagen_url = 'imagenes/imagen' . ($indice + 1) . '.png';
                        echo "<td><img src='$imagen_url' alt='Imagen del producto' onerror=\"this.src='imagen_no_disponible.png';\"></td>";
                        echo "</tr>";
                    }
                }
                echo "</table>";
            } else {
                echo "No hay productos disponibles.";
            }
            ?>
        </section>
    </div>
    
    <footer>
        <p>Derechos de autor © 2024 Compañía de Cómputo y Tecnología. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
