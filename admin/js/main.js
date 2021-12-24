/* global bootstrap: false */
(function () {
    'use strict'
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()


function appear() {
    let x = document.querySelector(".pickColor");
    if (x.style.display == "block")
        x.style.display = "none";
    else
        x.style.display = "block";
}
let lis = document.querySelectorAll(".pickColor ul li");
let exp = document.querySelector("header")
let btn = document.querySelector(".fix")

if (localStorage.getItem("color")) {
    if (btn != null) {
        exp.style.backgroundColor = localStorage.getItem("color");
        btn.style.backgroundColor = localStorage.getItem("color");
    }
    else {
        exp.style.backgroundColor = localStorage.getItem("color");
    }

    lis.forEach((li) => {
        li.classList.remove("active");
    });
    // document.querySelector(`[data-color="${localStorage.getItem("color")}]`).classList.add("active");
}

lis.forEach((li) => {
    li.addEventListener("click", (e) => {
        lis.forEach((li) => {
            li.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        localStorage.setItem("color", e.currentTarget.dataset.color);
        if (btn != null) {
            exp.style.backgroundColor = e.currentTarget.dataset.color;
            btn.style.backgroundColor = e.currentTarget.dataset.color;
        }
        else {
            exp.style.backgroundColor = e.currentTarget.dataset.color;
        }

    })
})



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
    output.innerHTML = "";
    for (let i = 0; i < thumb.files.length; i++) {
        if (x < 4 && thumb.files.length < 5) {
            if (warning.style.display == "inline-block") {
                warning.style.display = "none";
            }
            output.innerHTML += '<li>' + thumb.files.item(i).name + '</li>';
        }
        else {
            warning.style.display = "inline-block";
        }

    }
}

let showfile = function () {
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
















