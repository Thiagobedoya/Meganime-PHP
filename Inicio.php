<?php

    session_start(); // Iniciar sesión para poder usar $_SESSION

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión primero");
                window.location = "index.php";
            </script>
            '; 
            session_destroy(); // Destruir la sesión si el usuario no está autenticado
            die();
            
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meganime</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="shortcut icon" href="Images/Favicon.png" type="image/x-icon">
    
</head>


<body>  


<nav class="navbar-fixed">
    <div class="contenedor-layout">
        <img src="Images/Meganime 1.png" alt="Meganime" class="imagen-izquierda">
        <div class="texto-derecha">
            <h1>MEGANIME</h1>
        </div>
        
</nav>


<?php
    $pagina_actual = basename($_SERVER['SCRIPT_NAME']);
?>
<div class="botones"> 
            <a href="#" class="boton <?php if ($pagina_actual == 'Inicio.php') { echo 'activo'; } ?>" class =  >Inicio</a>
            <a href="Productos.php" class="boton <?php if ($pagina_actual == 'Productos.php') { echo 'activo'; } ?>" >Productos</a>
            <a href="Contenido.hmtl" class="boton <?php if ($pagina_actual == 'Contenido.php') { echo 'activo'; } ?>">Contenido</a>
            <a href="#" class="boton <?php if ($pagina_actual == 'Comunidad.php') { echo 'activo'; } ?>">Comunidad</a>
            <a href="#" class="boton <?php if ($pagina_actual == 'Nosotros.php') { echo 'activo'; } ?>">Nosotros</a>
            <a href="php/cerrar_sesion.php" class= "boton">Cerrar Sesión</a>
        </div>
    </div>

<section class="hero-section">
        <div class="contenido-superpuesto">
            </div>
                <div class="presentacion">
                  <p class="titulo-presentacion">¿Te gusta el anime y el manga?</p>
                  <img src="Images/gif presentacion.gif" alt="Gif-presentacion" class="Gif-presentacion">
                  <p>Has llegado al lugar indicado, donde encontrarás toda variabilidad de productos y contenido sobre el mundo del anime
                  y el manga.</p>
               </div>
                 <div class="manga-anime">
                    <p class="anime-manga">¿Anime o Manga?</p>
                    <div class="anime-manga-container">
                      <p class="anime-manga1">No hay una respuesta universal a la pregunta de si el anime o el manga es "mejor", ya que la elección 
                       depende de las preferencias individuales. Ambos ofrecen experiencias únicas, y la elección de cuál 
                       disfrutar primero (o ambos) dependerá de tus gustos personales. </p>

                       <li class="anime-manga1"><strong>Si te gusta leer:</strong> Empieza con el manga.</li>
                       <br>
                       <li class="anime-manga1"><strong>Si prefieres las experiencias visuales:</strong> El anime puede ser más atractivo.</li>
                       <br>
                       <li class="anime-manga1"><strong>Si buscas la experiencia original:</strong> El manga es el camino a seguir.</li>
                       <br>
                       <li class="anime-manga1"><strong>Si quieres una experiencia dinámica:</strong> El anime puede ser más emocionante.</li>
                       <br>
                       <li class="anime-manga1"><strong>Si no tienes mucho tiempo:</strong> El anime puede ser más rápido de consumir.</li>
                       <br>
                    </div>
                    <img src="Images/anime-manga.jpg" alt="An-Man" class="An-Man">
                 </div>
                    <div class="productos">
                        <p class="Productos destacados">Productos destacados</p>
                        <div class="Productos-carrusel-contenedor">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="producto-tarjeta">
                                            <img src="Images/Manga 1.webp" alt="Manga-1">
                                            <h3>Bleack Volumen 1</h3>
                                            <span class="precio">$120.000</span>
                                            <button>Agregar</button>
                                        </div>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <div class="producto-tarjeta">
                                            <img src="Images/Manga 2.jpg" alt="Manga-2">
                                            <h3>Naruto Volumen 1 Ed. Española</h3>
                                            <span class="precio">$140.000</span>
                                            <button>Agregar</button>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="producto-tarjeta">
                                            <img src="Images/Manga 3.webp" alt="Manga-3">
                                            <h3>One Piece Volumen 11</h3>
                                            <span class="precio">$135.000</span>
                                            <button>Agregar</button>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="producto-tarjeta">
                                            <img src="Images/Manga 4.webp" alt="Manga-4">
                                            <h3>Kimetsu No Yaiba Volumen 1</h3>
                                            <span class="precio">$90.000</span>
                                            <button>Agregar</button>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="producto-tarjeta">
                                            <img src="Images/Manga 5.webp" alt="Manga-5">
                                            <h3>Blue Lock Volumen 28</h3>
                                            <span class="precio">$50.000</span>
                                            <button>Agregar</button>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="producto-tarjeta">
                                            <img src="Images/Manga 6.webp" alt="Manga-6">
                                            <h3>Overlord Volumen 17</h3>
                                            <span class="precio">$100.000</span>
                                            <button>Agregar</button>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="producto-tarjeta">
                                            <img src="Images/Manga 7.webp" alt="Manga-7">
                                            <h3>Jujutsu Kaisen Volumen 21</h3>
                                            <span class="precio">$110.000</span>
                                            <button>Agregar</button>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="producto-tarjeta">
                                            <img src="Images/Manga 8.webp" alt="Manga-8">
                                            <h3>Death Note Volumen 1</h3>
                                            <span class="precio">$110.000</span>
                                            <button>Agregar</button>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="producto-tarjeta">
                                            <img src="Images/Manga 9.jpg" alt="Manga-9">
                                            <h3>Berserk Volumen 41</h3>
                                            <span class="precio">$120.000</span>
                                            <button>Agregar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-next"><img src="Images/Arrow-right.svg" alt="Siguiente"></div>
                               
                                <div class="swiper-button-prev"><img src="Images/Arrow-left.svg" alt="Anterior"></div>
                            </div>
                            <div class="Mas">
                            <a href="Productos.php">Ver más</a>
                            </div>
                        </div>
                    </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="JS/script.js"></script>

<section class="Ropa_manga">
    <div class="Ropa">
        <a href=""><div class="Prenda_tarjeta">
            <img src="Images/Prenda 1.jpg" alt="prenda1">
            <p>$60.000</p>
        </div></a>
        <a href=""><div class="Prenda_tarjeta">
            <img src="Images/Prenda 2.png" alt="prenda2">
            <p>$80.000</p>
        </div></a>
        <a href=""><div class="Prenda_tarjeta">
            <img src="Images/Prenda 3.jpg" alt="prenda3">
            <p>$55.000</p>
        </div></a>
        <a href=""><div class="Prenda_tarjeta">
            <img src="Images/Prenda 4.webp" alt="prenda4">
            <p>$38.000</p>
        </div></a>
        <a href=""><div class="Prenda_tarjeta">
            <img src="Images/Prenda 5.jpg" alt="prenda5">
            <p>$65.000</p>
        </div></a>
        <a href=""><div class="Prenda_tarjeta">
            <img src="Images/Prenda 6.jpg" alt="prenda6">
            <p>$55.000</p>
        </div></a>
        <div class="Mas_ropa">
        <a href="Productos.php">Ver más</a>
        </div>
    </div>
</section>

<section>
    <div class="Contenido_inicio">

    </div>
</section>

</section>


    <footer>
        <div class="footer">
            <div class="contacto">
                <h3>Contáctanos</h3>
            </div>
            <div class="redes_sociales">
                <div class="facebook">
                    <p>Facebook</p>
                    <a href="#"><img src="Images/facebook.svg" alt="Facebook_1"></a>
                 </div>
                    <div class="twitter">
                        <p>Twitter</p>
                        <a href="#"><img src="Images/Twitter.png" alt="Twitter_1"></a>
                        </div>
                        <div class="Youtube">
                            <p>Youtube</p>
                            <a href="#"><img src="Images/youtube.svg" alt="Youtube_1"></a>
                        </div>
                    </div>
                            <p class = "Copy">Copyright © 2025 Reservados todos los derechos.</p>

                </div>
            </div>
        </div>
    </footer>
</body>
</html>
