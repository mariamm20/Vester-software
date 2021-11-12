/* global bootstrap: false */
(function () {
    'use strict'
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()


function appear(){
    let x = document.querySelector(".pickColor");
    if (x.style.display == "block")
    x.style.display = "none";
    else
        x.style.display = "block";
}
let lis = document.querySelectorAll(".pickColor ul li");
let exp = document.querySelector("header")
let btn = document.querySelector(".fix")

if(localStorage.getItem("color")){
    exp.style.backgroundColor = localStorage.getItem("color");
    btn.style.backgroundColor = localStorage.getItem("color");
    lis.forEach((li) =>{
        li.classList.remove("active");
    });
    // document.querySelector(`[data-color="${localStorage.getItem("color")}]`).classList.add("active");
}

lis.forEach((li) =>{
    li.addEventListener("click",(e) => {
        lis.forEach((li) => {
            li.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        localStorage.setItem("color",e.currentTarget.dataset.color);
        exp.style.backgroundColor = e.currentTarget.dataset.color;
        btn.style.backgroundColor = e.currentTarget.dataset.color;
    })
})
