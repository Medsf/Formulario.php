function validar(){
    var Email = document.getElementById('email').innerHTML;

    if(document.forms[0].email.value.indexOf('@') == -1
    || document.forms[0].email.value.indexOf('.') == -1){
        alert('Informe um email válido');
    }
}