let section = document.getElementById("menu");
let bar = document.querySelector(".fa-bars");
let header = document.querySelector("header");
let cart = document.querySelector(".cart");
let logo = document.querySelector(".v a");

function menu() {
    section.classList.add("smooth");
    if (section.style.display == "none") {
        section.style.display = "flex";
        let s = window.innerHeight - 75;
        section.style.height = `${s}px`;
        bar.classList.remove("fa-bars");
        bar.classList.add("fa-times");
        document.body.style.overflowY = "hidden";
        header.style.backgroundColor = "#1c2750"
        header.style.color = "#fff";
        cart.style.color = "#1c2750";
        logo.style.color = "#fff";
        document.body.style.padding = "0px";

    }
    else {
        section.style.display = "none";
        bar.classList.remove("fa-times");
        bar.classList.add("fa-bars");
        document.body.style.overflow = "visible";
        header.style.backgroundColor = "#fff";
        header.style.color = "#1c2750";
        logo.style.color = "#1c2750";
        document.body.style.padding = "5px";

    }

}

let showoneimg = function () {
    var input = document.getElementById("img");
    var output = document.getElementById("images");
    output.style.display = "block";
    if (output.innerHTML == "") {
        for (let i = 0; i < 1; i++) {
            output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
        }
    } else {
        output.innerHTML = "";
        for (let i = 0; i < 1; i++) {
            output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
        }
    }

}

let show = function () {
    var thumb = document.getElementById("thumbnail");
    var output = document.getElementById("imgs");
    let warning = document.querySelector(".warn");
    output.style.display = "block";
    let x = document.querySelectorAll("#imgs li").length;
    for (let i = 0; i < thumb.files.length; i++) {
        if (x < 4 && thumb.files.length <5) {
            if (warning.style.display == "inline-block") {
                warning.style.display = "none";
            } 
            output.innerHTML += '<li>' + thumb.files.item(i).name + '</li>';
        }
        else{
            warning.style.display="inline-block";
        }

    }
}

let showfile = function (){
    var input = document.getElementById("files");
    var output = document.getElementById("softfiles");
    output.style.display = "block";
    if (output.innerHTML == "") {
        for (let i = 0; i < 1; i++) {
            output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
        }
    } else {
        output.innerHTML = "";
        for (let i = 0; i < 1; i++) {
            output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
        }
    }
}


