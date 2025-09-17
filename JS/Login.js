document.getElementById("bton_iniciar-sesión").addEventListener("click", login);
document.getElementById("bton_registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPagina);

//Declaración de variables

var Contenedor_login_register = document.querySelector(".Contenedor_login-register");
var Formulario_login = document.querySelector(".Formulario_login");
var Formulario_register = document.querySelector(".Formulario_register");
var Caja_trasera_register = document.querySelector(".Caja_trasera-register");
var Caja_trasera_login = document.querySelector(".Caja_trasera-login");

function anchoPagina(){
    if(window.innerWidth > 850){
        Caja_trasera_login.style.display = "block";
        Caja_trasera_register.style.display = "block";
    }else{
        Caja_trasera_register.style.display = "block";
        Caja_trasera_register.style.opacity = "1";
        Caja_trasera_login.style.display = "none";
        Formulario_login.style.display = "block";
        Formulario_register.style.display = "none";
        Contenedor_login_register.style.left = "0px";
    }
}

anchoPagina();

function login (){
    if(window.innerWidth > 850){
    Formulario_login.style.display = "block";
    Contenedor_login_register.style.left = "10px";
    Formulario_register.style.display = "none";
    Caja_trasera_register.style.opacity = "1";
    Caja_trasera_login.style.opacity = "0";
    }else{
    Formulario_login.style.display = "block";
    Contenedor_login_register.style.left = "0px";
    Formulario_register.style.display = "none";
    Caja_trasera_register.style.display = "block";
    Caja_trasera_login.style.display = "none";
    }
}

function register (){

    if(window.innerWidth > 850){
    Formulario_register.style.display = "block";
    Contenedor_login_register.style.left = "410px";
    Formulario_login.style.display = "none";
    Caja_trasera_register.style.opacity = "0";
    Caja_trasera_login.style.opacity = "1";
    }else{
    Formulario_register.style.display = "block";
    Contenedor_login_register.style.left = "0px";
    Formulario_login.style.display = "none";
    Caja_trasera_register.style.display = "none";
    Caja_trasera_login.style.display = "block";
    Caja_trasera_login.style.opacity = "1";
    }
}