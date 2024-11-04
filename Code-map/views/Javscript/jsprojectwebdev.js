
<!-- Dit script zorgt dat als iemand op het hamburger men klikt er een menu tevoorschijn komt -->

function hamburgermenu() {
    var x = document.getElementById("IDUL");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}