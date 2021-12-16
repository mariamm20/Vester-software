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



//api countries

fetch('https://restcountries.com/v2/all').then(res =>{
    return res.json();
}).then(data =>{
    let output= '<option>Select Country</option>';
    
    data.forEach(data =>{
         output += `<option value=${data.name}> ${data.name} (+${data.callingCodes})</option>`
        // console.log(`<img width="10" height="10" src="${data.flag}" />`)
    })
    document.getElementById("countries").innerHTML = output;
    
}).catch(err =>{
    console.log(err);
})
















