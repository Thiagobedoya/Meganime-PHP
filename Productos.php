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
    <link rel="stylesheet" href="Images/">
</head>

<body>  
<nav class="navbar-fixed">  
         <div class="contenedor-layout">
           <img src="Images/Meganime 1.png" alt="Meganime" class="imagen-izquierda">
            <div class="texto-derecha">
              <h1>MEGANIME</h1>
            </div>
        </div>

  
  </nav>

  <section class="Fondo_productos">
    
<?php
    $pagina_actual = basename($_SERVER['SCRIPT_NAME']);
?>
<div class="botones"> 
            <a href="Inicio.php" class="boton <?php if ($pagina_actual == 'Inicio.php') { echo 'activo'; } ?>" class =  >Inicio</a>
            <a href="#" class="boton <?php if ($pagina_actual == 'Productos.php') { echo 'activo'; } ?>" >Productos</a>
            <a href="Contenido.hmtl" class="boton <?php if ($pagina_actual == 'Contenido.php') { echo 'activo'; } ?>">Contenido</a>
            <a href="#" class="boton <?php if ($pagina_actual == 'Comunidad.php') { echo 'activo'; } ?>">Comunidad</a>
            <a href="#" class="boton <?php if ($pagina_actual == 'Nosotros.php') { echo 'activo'; } ?>">Nosotros</a>
            <a href="php/cerrar_sesion.php" class= "boton">Cerrar Sesión</a>
            </div>
<div class="contenido-superpuesto"> 

            <div class="texto_productos">
                <h1>Productos</h1>
                <p>Explora nuestra amplia gama de productos relacionados con el anime, desde mangas, figuras coleccionables hasta ropa temática.</p>
            </div>

                <div class="Manga-productos">
                  <h2>Mangas</h2>
                  <p>Desliza para ver nuestros mangas disponibles.</p>
                  <div class="Mangas">
                    <div class="Manga_tarjeta">
                    <img src="Images/Manga 1.webp" alt="Manga-producto1">
                     <h3>Bleack Volumen 1</h3>
                     <p class="precio-manga">$120.000</p>
                      <button>Agregar</button>
                    </div>

                    <div class="Manga_tarjeta">
                      <img src="Images/Manga 2.jpg" alt="Manga-producto2">
                     <h3>Naruto Volumen 1 Ed. Española</h3>
                     <p class="precio-manga">$140.000</p>
                      <button>Agregar</button>
                      </div>

                      <div class="Manga_tarjeta">
                      <img src="Images/Manga 3.webp" alt="Manga-producto3">
                     <h3>One Piece Volumen 11</h3>
                     <p class="precio-manga">$135.000</p>
                      <button>Agregar</button>
                      </div>

                      <div class="Manga_tarjeta">
                      <img src="Images/Manga 4.webp" alt="Manga-producto4">
                     <h3>Kimetsu No Yaiba Volumen 1</h3>
                     <p class="precio-manga">$90.000</p>
                      <button>Agregar</button>
                      </div>
                      
                      <div class="Manga_tarjeta">
                      <img src="Images/Manga 5.webp" alt="Manga-producto5">
                     <h3>Blue Lock Volumen 28</h3>
                     <p class="precio-manga">$50.000</p>
                      <button>Agregar</button>
                      </div>
                      
                      <div class="Manga_tarjeta">
                      <img src="Images/Manga 6.webp" alt="Manga-producto6">
                     <h3>Overlord Volumen 17</h3>
                     <p class="precio-manga">$100.000</p>
                      <button>Agregar</button>
                      </div>

                      <div class="Manga_tarjeta">
                      <img src="Images/Manga 7.webp" alt="Manga-producto7">
                     <h3>Jujutsu Kaisen Volumen 21</h3>
                     <p class="precio-manga">$110.000</p>
                      <button>Agregar</button>
                      </div>
                      
                      <div class="Manga_tarjeta">
                      <img src="Images/Manga 8.webp" alt="Manga-producto9">
                     <h3>Death Note Volumen 1</h3>
                     <p class="precio-manga">$110.000</p>
                      <button>Agregar</button>
                    </div>

                      <div class="Manga_tarjeta">
                      <img src="Images/Manga 9.jpg" alt="Manga-producto9">
                     <h3>Berserk Volumen 41</h3>
                     <p class="precio-manga">$120.000</p>
                      <button>Agregar</button>
                    </div>
                  </div>
                  <div class="Navegacion"></div>
                  <button id="prevManga">Anterior</button>
                  <button id="nextManga">Siguiente</button>
                </div>

    <div class="Ropa-productos">
                  <h2>Nuestra ropa</h2>
                  <p>Desliza para ver nuestras mejores prendas, para vestir al mejor estilo.</p>
                  <div class="Ropas">
                    <div class="Ropa_tarjeta">
                    <img src="Images/Prenda 1.jpg" alt="Prenda-producto1">
                     <p class="precio-prenda">$60.000</p>
                      <button id="boton_prenda">Agregar</button>
                    </div>

                    <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 2.png" alt="Prenda-producto2">
                     <p class="precio-prenda">$80.000</p>
                      <button id="boton_prenda">Agregar</button>
                      </div>

                      <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 3.jpg" alt="Prenda-producto3">
                     <p class="precio-prenda">$55.000</p>
                      <button id="boton_prenda">Agregar</button>
                      </div>

                      <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 4.webp" alt="Prenda-producto4">
                     <p class="precio-prenda">$38.000</p>
                      <button id="boton_prenda">Agregar</button>
                      </div>
                      
                      <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 5.jpg" alt="Prenda-producto5">
                     <p class="precio-prenda">$65.000</p>
                      <button id="boton_prenda">Agregar</button>
                      </div>
                      
                      <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 6.jpg" alt="Prenda-producto6">
                     <p class="precio-prenda">$55.000</p>
                      <button id="boton_prenda">Agregar</button>
                      </div>

                      <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 7.webp" alt="Prenda-producto7">
                     <p class="precio-prenda">$50.000</p>
                      <button id="boton_prenda">Agregar</button>
                      </div>
                      
                      <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 8.webp" alt="Prenda-producto9">
                     <p class="precio-prenda">$60.000</p>
                      <button id="boton_prenda">Agregar</button>
                    </div>

                      <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 9.webp" alt="Prenda-producto9">
                     <p class="precio-prenda">$70.000</p>
                      <button id="boton_prenda">Agregar</button>
                    </div>

                    <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 10.jpg" alt="Prenda-producto10">
                     <p class="precio-prenda">$85.000</p>
                      <button class="boton_prenda">Agregar</button>
                    </div>

                    <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 11.jpg" alt="Prenda-producto11">
                     <p class="precio-prenda">$80.000</p>
                      <button id="boton_prenda">Agregar</button>
                    </div>

                    <div class="Ropa_tarjeta">
                      <img src="Images/Prenda 12.jpg" alt="Prenda-producto12">
                     <p class="precio-prenda">$70.000</p>
                      <button id="boton_prenda">Agregar</button>
                    </div>

                  </div>
                  <div class="Navegacion"></div>
                  <button id="prevPrenda">Anterior</button>
                  <button id="nextPrenda">Siguiente</button>
                </div>

                <div class="Figuras-productos">
                  <h2>Figuras coleccionables</h2>
                  <p>Decora tu habitación a tu gusto con nuestras fabulosas figuras.</p>
                  <div class="Figuras">
                    <div class="Figuras_tarjeta">
                    <img src="Images/Figura 1.webp" alt="Figura-producto1">
                     <p class="precio-figura">$50.000</p>
                      <button id="boton_figura">Agregar</button>
                    </div>

                    <div class="Figuras_tarjeta">
                      <img src="Images/Figura 2.webp" alt="Figura-producto2">
                     <p class="precio-figura">$45.000</p>
                      <button id="boton_figura">Agregar</button>
                      </div>

                      <div class="Figuras_tarjeta">
                      <img src="Images/Figura 3.webp" alt="Figura-producto3">
                     <p class="precio-figura">$181.000</p>
                      <button id="boton_figura">Agregar</button>
                      </div>

                      <div class="Figuras_tarjeta">
                      <img src="Images/Figura 4.jpg" alt="Figura-producto4">
                     <p class="precio-figura">$120.000</p>
                      <button id="boton_figura">Agregar</button>  
                      </div>
                      
                      <div class="Figuras_tarjeta">
                      <img src="Images/Figura 5.jpg" alt="Figura-producto5">
                     <p class="precio-figura">$30.000</p>
                      <button id="boton_figura">Agregar</button>  
                      </div>
                      
                      <div class="Figuras_tarjeta">
                      <img src="Images/Figura 6.jpg" alt="Figura-producto6">
                     <p class="precio-figura">$65.000</p>
                      <button id="boton_figura">Agregar</button>  
                      </div>

                      <div class="Figuras_tarjeta">
                      <img src="Images/Figura 7.jpg" alt="Figura-producto7">
                     <p class="precio-figura">$58.000</p>
                      <button id="boton_figura">Agregar</button>  
                      </div>
                      
                      <div class="Figuras_tarjeta">
                      <img src="Images/Figura 8.jpg" alt="Figura-producto8">
                     <p class="precio-figura">$30.000</p>
                      <button id="boton_figura">Agregar</button>  
                      </div>

                      <div class="Figuras_tarjeta">
                      <img src="Images/Figura 9.jpg" alt="Figura-producto9">
                     <p class="precio-figura">$132.000</p>
                      <button id="boton_figura">Agregar</button>  
                      </div>

                    <div class="Figuras_tarjeta">
                      <img src="Images/Figura 10.webp" alt="Figura-producto10">
                     <p class="precio-figura">$135.000</p>
                      <button id="boton_figura">Agregar</button>  
                      </div>

                  </div>
                  <div class="Navegacion"></div>
                  <button id="prevFigura">Anterior</button>
                  <button id="nextFigura">Siguiente</button>
                </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="JS/script.js"></script>

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
                        <p>Twiiter</p>
                        <a href="#"><img src="Images/twitter.svg" alt="Twitter_1"></a>
                        </div>
                        <div class="Youtube">
                            <p>Youtube</p>
                            <a href="#"><img src="Images/youtube.svg" alt="Youtube_1"></a>
                        </div>
                    </div>
                            <p>Copyright © 2025 Reservados todos los derechos.</p>

                </div>
            </div>
        </div>
    </footer>

</body>

</html>