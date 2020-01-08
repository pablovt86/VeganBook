function validacion() {
var = name, email, direccion , num_documento, telefono, password;
name= document.getElementById('name').value;
email= document.getElementById('email').value;
direccion=document.getElementById('direccion').value;
num_documento=document.getElementById('num_documento').value;
telefono=document.getElementById('telefono').value;
password= document.getElementById('password').value;


  if( name ===""){
    alert("el campo esta vacio");
    return false;

  }

var miSelect=document.getElementById("Paises");
 
// Creamos un objeto option
var miOption=document.createElement("option");
 
// Añadimos las propiedades value y label
miOption.setAttribute("value","1");
miOption.setAttribute("label","argentina");
 
// Añadimos el option al select
miSelect.appendChild(miOption);
 
 
var miOption2=document.createElement("option");
miOption2.setAttribute("value","2");
miOption2.setAttribute("label","brasil");
 
// Dejamos seleccionado este valor por defecto
miOption2.setAttribute("selected","true");
 
miSelect.appendChild(miOption2);
 
 
var miOption3=document.createElement("option");
 
miOption3.setAttribute("value","3");
miOption3.setAttribute("label","uruguay");
 
var miOption4=document.createElement("option");
 
miOption4.setAttribute("value","4");
miOption4.setAttribute("label","paraguay");

miSelect.appendChild(miOption4)


var miOption5=document.createElement("option");
 
miOption5.setAttribute("value","5");
miOption5.setAttribute("label","bolivia");
miSelect.appendChild(miOption5)

var miOption6=document.createElement("option");
 
miOption6.setAttribute("value","6");
miOption6.setAttribute("label","ecuador");

miSelect.appendChild(miOption6)
var miOption7=document.createElement("option");
 
miOption7.setAttribute("value","3");
miOption7.setAttribute("label","peru");
miSelect.appendChild(miOption7)

var miOption8=document.createElement("option");
 
miOption8.setAttribute("value","8");
miOption8.setAttribute("label","colombia");
miSelect.appendChild(miOption8)

// Dejamos este valor desactivado
miOption3.setAttribute("disabled","true");
 
miSelect.appendChild(miOption3);
}
 