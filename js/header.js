const header = document.getElementById("header");
window.onscroll = function () {
    myFunction()
};

function myFunction() {
    if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
        header.style.width = "100%";
        header.style.position = "fixed";
        header.style.top = "0";
    } else if (document.body.scrollTop < 1 || document.documentElement.scrollTop < 1) {
        header.style.width = "90%";
        header.style.position = "absolute";
        header.style.top = "40px";
    }
}

/* Variables Menu Movil */
let img1 = document.getElementById('iconMov1');
let img2 = document.getElementById('iconMov2');
let fondoNav = document.getElementById('fondoNav');
let iconHam = document.getElementById('abrir');
let iconClose = document.getElementById('cerrar');
let btnCerrar = document.getElementById('btnClose');
let carruselMov = document.getElementById('home');

function cambiarFondo() {
    fondoNav.style.background = "#00394C";
    fondoNav.style.boxShadow = "none";
    fondoNav.style.maxHeight = "1000vh";
    fondoNav.style.position = "absolute";
    fondoNav.style.zIndex = "100";
    carruselMov.style.display = "none";
    img1.style.display = "none";
    img2.style.display = "block";
    iconHam.style.display = "none";
    iconClose.style.display = "block";
    btnCerrar.style.fontSize = "25px";
}

function fondoOriginal() {
    fondoNav.style.background = "#ffffff";
    fondoNav.style.position = "fixed";
    img1.style.display = "block";
    img2.style.display = "none";
    iconHam.style.display = "block";
    iconClose.style.display = "none";
    carruselMov.style.display = "block";
}