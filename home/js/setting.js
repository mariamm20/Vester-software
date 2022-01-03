

function myFunction() {
    var x = document.querySelector(".pass1");
    var y = document.querySelector(".pass2")
    if (x.type === "password" && y.type === "password") {
        x.type = "text";
        y.type = "text";
    } else {
        x.type = "password";
        y.type  = "password";
    }
}
var output = document.getElementById("images");
let showoneimg = function () {

    var input = document.getElementById("img");
    if(output.style.display == "none"){
        output.style.display == "block"
    }
    
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
var btn1 = document.querySelector(".change-list .btn1");
btn1.addEventListener("click", function(){
output.innerHTML="";
output.style.display="none";
})
var btn2 = document.querySelector(".change-list .btn2");
btn2.addEventListener("click", function () {
    output.innerHTML = "";
    output.style.display = "none";
})










