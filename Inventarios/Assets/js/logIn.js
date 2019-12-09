
var button = document.getElementById("buttonLogIn");

button.addEventListener("click", function(){
    var request = new XMLHttpRequest();
    var user = document.getElementById("user").value;
    var password = document.getElementById("password").value;
    request.open("GET","http://skynet.lp.upb.edu:7875/usuarios", true);
    //request.withCredentials = true;
    //request.setRequestHeader("Usuario", "/");
    request.onload = function () {
        console.log(request.responseText);
    };
    request.send();

});


//coockies , sesiones


