

//Ejecutando funciones
// document.getElementById("btn_singUp").addEventListener("click",validar);
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//VARIABLES
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".contenedor__inferior-login");
var caja_trasera_register = document.querySelector(".contenedor__inferior-register");

//FUNCIONES




function anchoPage(){

    if (window.innerWidth > 850){
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "block";
    }else{
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";   
    }
}

anchoPage();


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "block";
            contenedor_login_register.style.left = "10px";
            formulario_register.style.display = "none";
            caja_trasera_register.style.opacity = "1";
            caja_trasera_login.style.opacity = "0";
        }else{
            formulario_login.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_register.style.display = "none";
            caja_trasera_register.style.display = "block";
            caja_trasera_login.style.display = "none";
        }
    }

    // Funcion para que se cambie el cuadro cuando selecciona registrarse
    function register(){
        if (window.innerWidth > 850){
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "410px";
            formulario_login.style.display = "none";
            caja_trasera_register.style.opacity = "0";
            caja_trasera_login.style.opacity = "1";
        }else{
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "none";
            caja_trasera_register.style.display = "none";
            caja_trasera_login.style.display = "block";
            caja_trasera_login.style.opacity = "1";
        }
}




// function validar(){
    

//     var id = document.getElementById("id").value;
   
//     if(id == 0 ){
        
//         alert("Debe ingresar la cedula");
//         return false;
//     }else if(id.length != 9){

//         alert("El formato de cedula no es correcto");
//         return false;
//     }

//     var name = document.getElementById("name").value;
//     if(name==0){
//         alert("El nombre esta vacio");
//         return false;
//     }

//     var lastname = document.getElementById("lastname").value;
//     if(lastname==0){
//         alert("El apellido esta vacio");
//         return false;
//     }

//     var password = document.getElementById("password").value;
//     if(password==0){
//         alert("La contraseña esta vacia");
//         return false;
//     }
    
// }




// function registro(){


//     var id= document.getElementById("id").value;
//     var name= document.getElementById("name").value;
//     var lastname= document.getElementById("lastname").value;
//     var gmail= document.getElementById("gmail").value;
//     var password= document.getElementById("password").value;
        

//     // $.ajax({
//     //     url: "../../Controllers/singUp.php",
//     //     method : "POST",
//     //     data : {id : id, name : name, lastname : lastname, gmail : gmail, password : password},
//     //     error : function(request, errorcode, errortext){
//     //     },
//     //     success : function(dataresponse, statustext, response){
//     //         alert('esto')
//     //     }            
//     // });  


//  }



