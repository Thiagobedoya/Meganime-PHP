    var swiper = new Swiper(".mySwiper",{
        slidesPerView: 3,
        spaceBetween: 30,
        centeredSlides: false,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            1024:{
                slidesPerView: 3,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
        }
    }
    );

    const mangaTarjetas = document.querySelectorAll('.Manga_tarjeta');
    let inicioManga = 0;
    const tarjetasmangasPorVista = 6; // Número de tarjetas a mostrar por vista

    function mostrarMangaTarjetas() {
        mangaTarjetas.forEach((tarjeta, i) =>{
            tarjeta.style.display = (i >= inicioManga && i < inicioManga + tarjetasmangasPorVista) ? 'flex' : 'none';
        });
        document.getElementById('prevManga').disabled = inicioManga === 0;
        document.getElementById('nextManga').disabled = inicioManga >= mangaTarjetas.length - tarjetasmangasPorVista;
    }

    document.getElementById('prevManga').onclick = function(){
        if (inicioManga > 0) inicioManga --;
        mostrarMangaTarjetas();
    };

    document.getElementById('nextManga').onclick = function(){
        if (inicioManga < mangaTarjetas.length - tarjetasmangasPorVista) inicioManga++;
        mostrarMangaTarjetas();
    };

    mostrarMangaTarjetas();

    const ropaTarjetas = document.querySelectorAll('.Ropa_tarjeta');
    let inicioRopa = 0;
    const tarjetasRopaPorVista = 6; // Número de tarjetas a mostrar por vista

    function mostrarRopaTarjetas() {
        ropaTarjetas.forEach((tarjeta, i) =>{
            tarjeta.style.display = (i >= inicioRopa && i < inicioRopa + tarjetasRopaPorVista) ? 'flex' : 'none';
        });
        document.getElementById('prevPrenda').disabled = inicioRopa === 0;
        document.getElementById('nextPrenda').disabled = inicioRopa >= ropaTarjetas.length - tarjetasRopaPorVista;
    }

    document.getElementById('prevPrenda').onclick = function(){
        if (inicioRopa > 0) inicioRopa --;
        mostrarRopaTarjetas();
    };

    document.getElementById('nextPrenda').onclick = function(){
        if (inicioRopa < ropaTarjetas.length - tarjetasRopaPorVista) inicioRopa++;
        mostrarRopaTarjetas();
    };

    mostrarRopaTarjetas();

const figuraTarjetas = document.querySelectorAll('.Figuras_tarjeta');
    let iniciofigura = 0;
    const tarjetasFiguraPorVista = 4; // Número de tarjetas a mostrar por vista

    function mostrarFiguraTarjetas() {
        figuraTarjetas.forEach((tarjeta, i) =>{
            tarjeta.style.display = (i >= iniciofigura && i < iniciofigura + tarjetasFiguraPorVista) ? 'flex' : 'none';
        });
        document.getElementById('prevFigura').disabled = iniciofigura === 0;
        document.getElementById('nextFigura').disabled = iniciofigura >= figuraTarjetas.length - tarjetasFiguraPorVista;
    }

    document.getElementById('prevFigura').onclick = function(){
        if (iniciofigura > 0) iniciofigura --;
        mostrarFiguraTarjetas();
    };

    document.getElementById('nextFigura').onclick = function(){
        if (iniciofigura < figuraTarjetas.length - tarjetasFiguraPorVista) iniciofigura++;
        mostrarFiguraTarjetas();
    };

    mostrarFiguraTarjetas();

