function myFunction() {
    var x = document.querySelector(".pass1");
    
    if (x.type === "password" ) {
        x.type = "text";
        
    } else {
        x.type = "password";
       
    }
}
