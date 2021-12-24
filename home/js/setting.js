

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









