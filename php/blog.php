<?php include("../conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELBASK - Blog de Básquet</title>
    <meta name="description" content="Blog de básquet ELBASK: noticias, evolución, jugadas legendarias y comentarios de la comunidad.">
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background-color: #1a1a1a; color: #cccccc;">

    <!-- HEADER MEJORADO -->
    <div style="background: linear-gradient(135deg, #4c0099 0%, #6d28d9 100%); color: #fff; padding: 15px 20px; display: flex; justify-content: space-between; align-items: center; border-bottom: 3px solid #5e10b1; box-shadow: 0 4px 6px rgba(0,0,0,0.3);">
        <div style="display: flex; align-items: center; gap: 30px;">
            <span style="font-size: 28px; font-weight: bold; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">ELBASK</span>
            <div style="display: flex; align-items: center; gap: 5px;">
                <a href="../html-css/inicio1.html" style="color: #fff; text-decoration: none; padding: 8px 15px; font-size: 14px; border-radius: 5px;">Inicio</a>
                <a href="../html-css/partido.html" style="color: #fff; text-decoration: none; padding: 8px 15px; font-size: 14px; border-radius: 5px;">Partidos</a>
                <a href="../html-css/noticia.html" style="color: #fff; text-decoration: none; padding: 8px 15px; font-size: 14px; border-radius: 5px;">Noticias</a>
                <a href="../html-css/clasificacion.html" style="color: #fff; text-decoration: none; padding: 8px 15px; font-size: 14px; border-radius: 5px;">Clasificación</a>
                <a href="../html-css/calendario.html" style="color: #fff; text-decoration: none; padding: 8px 15px; font-size: 14px; border-radius: 5px;">Calendario</a>
                <a href="../html-css/formulario.html" style="color: #fff; padding: 8px 15px; text-decoration: none; font-size: 14px; border-radius: 5px;">Formulario</a>
                <a href="../html-css/quienes-somos.html" style="color: #fff; padding: 8px 15px; text-decoration: none; font-size: 14px; border-radius: 5px;">Acerca de ELBASK</a>
            </div>
        </div>
        <div style="display: flex; align-items: center; gap: 15px;">
            <form action="buscar.php" method="GET" style="display: flex;">
                <input type="text" name="q" placeholder="Buscar Noticias, Equipos..." 
                    style="padding: 8px 15px; border: none; border-radius: 20px 0 0 20px; background-color: rgba(255,255,255,0.2); color: #fff; font-size: 14px; width: 200px;">
                <button type="submit" style="background-color: #5e10b1; color: white; border: none; padding: 8px 12px; border-radius: 0 20px 20px 0; cursor: pointer; font-size: 14px;">🔍</button>
            </form>
            <a href="../php/index.php" style="color: #fff; text-decoration: none; padding: 8px 20px; background-color: #5e10b1; border-radius: 20px; font-size: 14px; font-weight: bold;">LOGIN</a>
        </div>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div style="max-width: 1100px; margin: 40px auto 20px auto; padding: 0 20px;">
        
        <!-- TÍTULO -->
        <div style="text-align: center; margin-bottom: 30px;">
            <h1 style="color: #fff; font-size: 42px; margin: 0 0 10px 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">📝 Blog ELBASK</h1>
            <p style="color: #999; font-size: 16px; margin: 0;">Análisis, historia y comunidad del básquet internacional</p>
        </div>

        <!-- NAVEGACIÓN SECUNDARIA -->
        <div style="background-color: #2b2b2b; padding: 15px 25px; display: flex; align-items: center; gap: 25px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 2px 8px rgba(0,0,0,0.3);">
            <a href="../html-css/quienes-somos.html" style="color: #ccc; text-decoration: none; padding: 8px 0; font-size: 14px; transition: color 0.3s;">Quiénes Somos</a>
            <a href="../html-css/preguntas-frecuentes.html" style="color: #ccc; text-decoration: none; padding: 8px 0; font-size: 14px; transition: color 0.3s;">Preguntas Frecuentes</a>
            <a href="../html-css/cv.html" style="color: #ccc; text-decoration: none; padding: 8px 0; font-size: 14px; transition: color 0.3s;">CV</a>
            <a href="../html-css/blog.html" style="background: linear-gradient(135deg, #5e10b1 0%, #7c3aed 100%); color: #fff; text-decoration: none; padding: 8px 20px; border-radius: 20px; font-size: 14px; font-weight: bold; box-shadow: 0 2px 8px rgba(94,16,177,0.3);">Blog</a>
        </div>

        <!-- ARTÍCULOS -->
        <div style="display: grid; gap: 30px;">
            
            <!-- ARTÍCULO 1 -->
            <article class="article-card" style="background-color: #2b2b2b; border-radius: 12px; padding: 30px; box-shadow: 0 4px 10px rgba(0,0,0,0.4); border-left: 5px solid #5e10b1; transition: all 0.3s ease;">
                
                <!-- Encabezado del Artículo -->
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #5e10b1 0%, #7c3aed 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px;">🏀</div>
                    <div>
                        <h2 style="color: #fff; font-size: 26px; margin: 0;">La evolución del baloncesto en el siglo XXI</h2>
                        <div style="display: flex; gap: 15px; align-items: center; margin-top: 5px;">
                            <span style="color: #999; font-size: 13px;">📅 10 de mayo de 2025</span>
                            <span style="background-color: #5e10b1; color: #fff; padding: 3px 10px; border-radius: 12px; font-size: 11px; font-weight: bold;">EVOLUCIÓN Y TÉCNICA</span>
                        </div>
                    </div>
                </div>

                <!-- Contenido -->
                <p style="font-size: 16px; line-height: 1.8; color: #ddd; margin: 0 0 25px 0;">
                    El baloncesto ha cambiado radicalmente desde sus inicios. En las últimas décadas, 
                    la tecnología, el análisis de datos (Big Data) y los nuevos estilos de juego han transformado este deporte, haciendo que el ritmo y el triple sean protagonistas. Las estadísticas avanzadas han revolucionado la manera en que los equipos planifican sus estrategias.
                </p>

                <!-- Estadísticas del Artículo -->
                <div style="display: flex; gap: 20px; margin-bottom: 20px; padding: 15px; background-color: #1a1a1a; border-radius: 8px;">
                    <div style="flex: 1; text-align: center;">
                        <div style="font-size: 24px; color: #5e10b1; font-weight: bold;">1.2K</div>
                        <div style="font-size: 12px; color: #999;">Lecturas</div>
                    </div>
                    <div style="flex: 1; text-align: center;">
                        <div style="font-size: 24px; color: #22c55e; font-weight: bold;">89</div>
                        <div style="font-size: 12px; color: #999;">Me gusta</div>
                    </div>
                    <div style="flex: 1; text-align: center;">
                        <div style="font-size: 24px; color: #ff9900; font-weight: bold;">2</div>
                        <div style="font-size: 12px; color: #999;">Comentarios</div>
                    </div>
                </div>

                <!-- Comentarios -->
                <div style="background-color: #333; padding: 20px; border-radius: 10px;">
                    <h4 style="color: #fff; font-size: 16px; margin: 0 0 15px 0; display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 18px;">💬</span> Comentarios
                    </h4>
                    
                    <div class="comment" style="background-color: #2b2b2b; padding: 15px; border-radius: 8px; margin-bottom: 10px; border-left: 3px solid #5e10b1; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                            <div style="width: 35px; height: 35px; background: linear-gradient(135deg, #ff9900 0%, #ff6600 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #fff; font-size: 14px;">A</div>
                            <div>
                                <div style="font-weight: bold; color: #fff; font-size: 14px;">Ana</div>
                                <div style="font-size: 11px; color: #888;">Hace 2 horas</div>
                            </div>
                        </div>
                        <p style="font-size: 14px; margin: 0; color: #ddd; line-height: 1.6;">Muy interesante el artículo, no sabía lo del impacto del Big Data en el juego. ¡Excelente análisis!</p>
                    </div>

                    <div class="comment" style="background-color: #2b2b2b; padding: 15px; border-radius: 8px; border-left: 3px solid #5e10b1; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                            <div style="width: 35px; height: 35px; background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #fff; font-size: 14px;">L</div>
                            <div>
                                <div style="font-weight: bold; color: #fff; font-size: 14px;">Lucas</div>
                                <div style="font-size: 11px; color: #888;">Hace 5 horas</div>
                            </div>
                        </div>
                        <p style="font-size: 14px; margin: 0; color: #ddd; line-height: 1.6;">Deberían hablar más sobre los cambios en la defensa de los últimos años. Ese tema también es fascinante.</p>
                    </div>
                </div>
            </article>

            <!-- ARTÍCULO 2 -->
            <article class="article-card" style="background-color: #2b2b2b; border-radius: 12px; padding: 30px; box-shadow: 0 4px 10px rgba(0,0,0,0.4); border-left: 5px solid #ff9900; transition: all 0.3s ease;">
                
                <!-- Encabezado del Artículo -->
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #ff9900 0%, #ff6600 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px;">⭐</div>
                    <div>
                        <h2 style="color: #fff; font-size: 26px; margin: 0;">10 jugadas legendarias en la historia de la FIBA</h2>
                        <div style="display: flex; gap: 15px; align-items: center; margin-top: 5px;">
                            <span style="color: #999; font-size: 13px;">📅 5 de mayo de 2025</span>
                            <span style="background-color: #ff9900; color: #000; padding: 3px 10px; border-radius: 12px; font-size: 11px; font-weight: bold;">HISTORIA Y MOMENTOS</span>
                        </div>
                    </div>
                </div>

                <!-- Contenido -->
                <p style="font-size: 16px; line-height: 1.8; color: #ddd; margin: 0 0 25px 0;">
                    Revivimos momentos icónicos que marcaron un antes y un después en el básquet internacional. 
                    Desde triples sobre la bocina hasta bloqueos imposibles, esta lista lo tiene todo para emocionar a los fans. Cada jugada representa un momento único que quedó grabado en la historia del deporte.
                </p>

                <!-- Estadísticas del Artículo -->
                <div style="display: flex; gap: 20px; margin-bottom: 20px; padding: 15px; background-color: #1a1a1a; border-radius: 8px;">
                    <div style="flex: 1; text-align: center;">
                        <div style="font-size: 24px; color: #ff9900; font-weight: bold;">2.5K</div>
                        <div style="font-size: 12px; color: #999;">Lecturas</div>
                    </div>
                    <div style="flex: 1; text-align: center;">
                        <div style="font-size: 24px; color: #22c55e; font-weight: bold;">156</div>
                        <div style="font-size: 12px; color: #999;">Me gusta</div>
                    </div>
                    <div style="flex: 1; text-align: center;">
                        <div style="font-size: 24px; color: #5e10b1; font-weight: bold;">2</div>
                        <div style="font-size: 12px; color: #999;">Comentarios</div>
                    </div>
                </div>

<!-- COMENTARIOS -->
<div style="background-color: #333; padding:20px; border-radius:10px;">

    <?php
    include("../php/conexion.php");

    // Definir el artículo ANTES de usarlo en el formulario
    $id_articulo = $_GET['id'] ?? 1;
    ?>

    <!-- FORM PARA AGREGAR COMENTARIO -->
    <form action="../php/guardar_comentario.php" method="POST" style="margin-bottom:20px;">
        <input type="hidden" name="id_articulo" value="<?= $id_articulo ?>">

        <input type="text" name="nombre" placeholder="Tu nombre" required
        style="width:100%; padding:10px; margin-bottom:10px; border-radius:6px; border:none;">

        <textarea name="comentario" placeholder="Escribe tu comentario..." required
        style="width:100%; height:80px; padding:10px; border-radius:6px; border:none;"></textarea>

        <button type="submit"
        style="margin-top:10px; padding:10px 20px; background-color:#5e10b1; color:white;
        border:none; border-radius:8px; cursor:pointer; font-weight:bold;">
            Publicar comentario
        </button>
    </form>

    <h4 style="color:#fff; font-size:16px;">💬 Comentarios</h4>

    <?php
    // Consulta segura
    $sql = "SELECT * FROM comentarios WHERE articulo_id = ? ORDER BY fecha DESC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_articulo);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $nombre = htmlspecialchars($row['nombre']);
        $comentario = htmlspecialchars($row['comentario']);
        $fecha = htmlspecialchars($row['fecha']);
        $inicial = strtoupper(substr($nombre, 0, 1));
    ?>
        <div style="background:#2b2b2b; padding:15px; margin-top:10px; border-radius:8px; border-left:3px solid #ff9900;">
            <div style="display:flex; gap:10px;">
                <div style="width:35px; height:35px; background:#5e10b1; border-radius:50%; display:flex; justify-content:center; align-items:center; color:white;">
                    <?= $inicial ?>
                </div>
                <div>
                    <b style="color:white;"><?= $nombre ?></b>
                    <div style="font-size:11px; color:#aaa;"><?= $fecha ?></div>
                </div>
            </div>
            <p style="color:#ddd; margin-top:10px;"><?= $comentario ?></p>

            <!-- Botones -->
            <a href="../php/eliminar_comentario.php?id=<?= $row['id_coment'] ?>" 
                style="color:red; font-size:13px;">Eliminar</a>
            <a href="../php/editar_comentario.php?id=<?= $row['id_coment'] ?>" 
                style="color:#5e10b1; font-size:13px; margin-left:10px;">Editar</a>
        </div>
    <?php } ?>
</div>


    <!-- FOOTER -->
    <footer style="background: linear-gradient(135deg, #430199 0%, #6d28d9 100%); color: #fff; text-align: center; padding: 30px 20px; margin-top: 50px; border-top: 3px solid #5e10b1;">
        <div style="max-width: 1300px; margin: 0 auto;">
            <p style="font-size: 18px; font-weight: bold; margin: 0 0 10px 0; letter-spacing: 2px;">ELBASK</p>
            <p style="margin: 5px 0; font-size: 14px; opacity: 0.9;">Equipos Nacionales | Básquetbol Internacional</p>
            <div style="height: 1px; background-color: rgba(255,255,255,0.2); margin: 20px auto; max-width: 600px;"></div>
            <p style="margin: 5px 0; font-size: 13px;">Escuela Educación Técnica 3139 "Gral. Martín Miguel de Güemes"</p>
            <p style="margin: 5px 0; font-size: 13px;">Alumno: Yañez Nicolás | Profesor: Artaza</p>
            <p style="margin: 15px 0 0 0; font-size: 13px;">
                Contacto: <a href="mailto:elbask@gmail.com" style="color: #fff; text-decoration: underline;">elbask@gmail.com</a>
            </p>
            <p style="margin: 15px 0 0 0; font-size: 12px; opacity: 0.7;">&copy; 2025 ELBASK. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>