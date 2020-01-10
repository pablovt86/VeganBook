function validacion() {
var name, email, direccion,num_documento,telefono,password;
name = document.getElementById('name').value;
email = document.getElementById('email').value;
direccion = document.getElementById('direccion').value;
telefono = document.getElementById('telefono').value;
password = document.getElementById('password').value;
num_documento = document.getElementById('num_documento').value;
var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

if( name ===""||email ===""||direccion === ""||num_documento === "" ||telefono ===""||password ===""){
    alert("!ERROR! los campos no puede estar vacio")
    return false;


}else if( name.length>30 || /^\s+$/.test(name)) {
    alert("!ERROR! el nombre no puede ser tan largo & solamento texto")
  return false;
}else if( direccion === "" ){
    alert("!ERROR! el campo de la direccion no puede estar vacio")
  return false;
}else if(!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(email))){
    alert("!ERROR! introdusca un email valido ")
  return false;
}else if(!(/^\d{10}$/.test(telefono))){
    alert("!ERROR! el campo telfono colocar numeros ")
  return false;
}else if( !(/^\d{8}$/.test(num_documento)) ) {
    alert("!ERROR! DNI maximo 8 numeros ")
  return false;
}else if(valor.charAt(8) != letras[(valor.substring(0, 8))%23]) {
    return false;
  }else if( password <9 ||password == null){
    alert("!ERROR! el password no puede estar vacio & debe tener 8 caracteres" )
 return false;   
}


}