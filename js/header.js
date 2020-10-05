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