
/* ----------------------------------------------------------------------------- */
/*-----------------------Pop-up notifica esci applicazione-----------------------*/
/* ----------------------------------------------------------------------------- */
const
    toast_esci = document.querySelector(".toast_esci"),
    closeIcon_esci = document.querySelector(".close_esci"),
    conferma_esci = document.querySelector(".conferma_esci"),
    annulla_esci = document.querySelector(".annulla_esci");
    id = localStorage.getItem("id");

closeIcon_esci.onclick = function(){
    toast_esci.classList.remove("active");
};

annulla_esci.onclick = function(){
    toast_esci.classList.remove("active");
};

conferma_esci.onclick = function(){
    toast_esci.classList.remove("active");
    window.close();
};

function esci() {
    toast_esci.classList.add("active");
}

/*-----------------------------Pop-up notifica disconetti--------------------------*/

const
    toast_disc = document.querySelector(".toast_disc"),
    closeIcon_disc = document.querySelector(".close_disc"),
    conferma_disconetti = document.querySelector(".conferma_disc"),
    annulla_disc = document.querySelector(".annulla_disc");

closeIcon_disc.onclick = function(){
    toast_disc.classList.remove("active");
};

annulla_disc.onclick = function(){
    toast_disc.classList.remove("active");
};

conferma_disconetti.onclick = function(){
    toast_disc.classList.remove("active");
    cambia_pagina("../Index.html");
};

function disconetti() {
    toast_disc.classList.add("active");
}

/* ---------------------------------------------------------------------------------*/
/* ---------------------------------Apertura pagine---------------------------------*/
/* ---------------------------------------------------------------------------------*/

function cambia_pagina(pagina) {
    window.open(pagina);
    window.close();
}

function cambia_pagina_mappa(pagina, img_mappa, pagina_pre) {
    window.close();
    window.open(pagina);
    localStorage.setItem("img_mappa", img_mappa);
    localStorage.setItem("pagina_pre_m", pagina_pre);
}

function cambia_pagina_crediti(pagina, pagina_pre) {
    window.close();
    window.open(pagina);
    localStorage.setItem("pagina_pre_c", pagina_pre);
}

function cambia_pagina_aiuto(pagina, pagina_pre) {
    window.close();
    window.open(pagina);
    localStorage.setItem("pagina_pre_a", pagina_pre);
}

/* ---------------------------------------------------------------------------------*/
/* -------------------------Notifica pulsanti argomenti-----------------------------*/
/* ---------------------------------------------------------------------------------*/


/* ----------------------------------------------------------------------------- */
/* --------------------------Menu Utente---------------------------------------- */
/* ----------------------------------------------------------------------------- */

function menuToggle() {
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active');
}

const imgData = document.querySelector('.profile');
const img = document.querySelector('#foto');
const file = document.querySelector('#file');

file.addEventListener('change', function () {

    const choosedFile = this.files[0];

    if (choosedFile) {

        const reader = new FileReader();

        reader.addEventListener('load', function () {
            img.setAttribute('src', reader.result);
            localStorage.setItem(id+'chiave', reader.result);
        });

        reader.readAsDataURL(choosedFile);
    }


});

document.addEventListener('DOMContentLoaded', () => {
    const image = localStorage.getItem(id+'chiave');
    let formData = JSON.parse(localStorage.getItem('formData'));
    id = localStorage.getItem("id");
    document.querySelector(".nome_utente").textContent = "Ciao " + formData[id].uname;
    document.querySelector(".email").textContent = formData[id].email;

    if (image) {
        document.querySelector('#foto').setAttribute('src', image);
    }
});

/* ----------------------------------------------------------------------------- */
/* --------------------------Menu hamburger indici------------------------------ */
/* ----------------------------------------------------------------------------- */

/*Animazione barra laterale */
if (document.querySelector(".bar-container")) {
    $(".bar-container").click(function () {
        $(this).toggleClass("change");
        $('.sidenav_p').toggleClass("sidenav-toggle");
        $('.sidenav_i').toggleClass("sidenav-toggle");
        $('.sidenav_a').toggleClass("sidenav-toggle");
        $('.container').toggleClass("container-toggle");
    });
}




/* ---------------------------------------------------------------------------------*/
/* -----------------------------SLIDER SCRIPT---------------------------------------*/
/* ---------------------------------------------------------------------------------*/

let slideIndex = 1;

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("text");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

/* ---------------------------------------------------------------------------------*/
/* ------------------------------Zoom Immagine--------------------------------------*/
/* ---------------------------------------------------------------------------------*/

mediumZoom('.immagine1', {
    background: "none"
})
mediumZoom('.immagine2', {
    background: "none"
})
mediumZoom('.immagine3', {
    background: "none"
})
mediumZoom('.immagine4', {
    background: "none"
})
mediumZoom('.immagine5', {
    background: "none"
})
mediumZoom('.immagine6', {
    background: "none"
})
mediumZoom('.immagine7', {
    background: "none"
})
mediumZoom('.immagine8', {
    background: "none"
})
mediumZoom('.immagine9', {
    background: "none"
})
mediumZoom('.immagine10', {
    background: "none"
})
mediumZoom('.immagine11', {
    background: "none"
})
mediumZoom('.immagine12', {
    background: "none"
})
mediumZoom('.immagine13', {
    background: "none"
})
mediumZoom('.immagine14', {
    background: "none"
})
mediumZoom('.immagine15', {
    background: "none"
})
mediumZoom('.immagine16', {
    background: "none"
})
mediumZoom('.immagine17', {
    background: "none"
})
mediumZoom('.immagine18', {
    background: "none"
})
mediumZoom('.immagine19', {
    background: "none"
})
mediumZoom('.immagine20', {
    background: "none"
})
mediumZoom('.immagine21', {
    background: "none"
})
mediumZoom('.immagine22', {
    background: "none"
})
mediumZoom('.immagine23', {
    background: "none"
})
mediumZoom('.immagine24', {
    background: "none"
})
mediumZoom('.immagine25', {
    background: "none"
})
mediumZoom('.immagine26', {
    background: "none"
})
mediumZoom('.immagine27', {
    background: "none"
})
mediumZoom('.immagine28', {
    background: "none"
})
mediumZoom('.immagine29', {
    background: "none"
})
mediumZoom('.immagine30', {
    background: "none"
})
mediumZoom('.immagine31', {
    background: "none"
})
mediumZoom('.immagine32', {
    background: "none"
})
mediumZoom('.immagine33', {
    background: "none"
})
mediumZoom('.immagine34', {
    background: "none"
})
mediumZoom('.immagine35', {
    background: "none"
})
mediumZoom('.immagine36', {
    background: "none"
})
mediumZoom('.immagine37', {
    background: "none"
})
