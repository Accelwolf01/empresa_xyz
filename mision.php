<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Misión - Compañía de Cómputo y Tecnología</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .video-section {
            margin-top: 20px; /* Espacio superior para separar el video del texto */
            text-align: center; /* Centrar el contenido */
        }

        .video-section video {
            width: 80%; /* Ancho del video */
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Misión - Compañía de Cómputo y Tecnología</h1>
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
    
    <div class="container content">
        <section class="about-section">
            <h2>Misión</h2>
            <p>Nuestra misión es proporcionar soluciones tecnológicas innovadoras y de calidad que satisfagan las necesidades de nuestros clientes, contribuyendo así al desarrollo y crecimiento de sus actividades.</p>
        </section>
        
        <section class="video-section">
            <video controls>
                <source src="videos/video2.mp4" type="video/mp4">
                Tu navegador no admite la etiqueta de video.
            </video>
        </section>
    </div>
    
    <footer>
        <div class="container">
            <p>© <?php echo date("Y"); ?> Compañía de Cómputo y Tecnología. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>

