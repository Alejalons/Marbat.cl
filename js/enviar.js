function enviar(){
    var nombre = document.getElementById('nombre').value,
        correo = document.getElementById('correo').value,
        mensaje= document.getElementById('mensaje').value,
        submit = document.getElementById('submit').value;

        var param = 'nombre='+nombre+'&correo='+correo+'&mensaje='+mensaje+'&submit='+submit;
    $.ajax({
        type: 'post',
        url: '/php/Marbat/php/contacto.php',
        data: param,
        success: function(data){
            $("#respuesta").html(data);
        }
    });
    return false;
}