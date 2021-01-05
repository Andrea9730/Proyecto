
function admin_usuarios()
{   
    $.ajax({
        url:'admin_usuarios.php',
        type: 'POST',
        success: function (a){
            $('#principal').html(a);
        }
    })
}
function nuevo_usuario()
{   
    $.ajax({
        url:'usuarios_form2.php',
        type: 'POST',
        success: function (a){
            $('#principal').html(a);
        }
    })
}
function guardar_usuario()
{   var dataString='CUIL='+$('#CUIL').val()+'&nombre='+$('#nombre').val()+'&apellido='+$('#apellido').val()+'&direccion='+$('#direccion').val()+'&titulo='+$('#titulo').val()+'&cargo='+$('#cargo').val();
    $.ajax({
        url:'usuario_form2.php',
        type: 'POST',
		data: dataString,
        success: function (a){
            $('#principal').html(a);
        }
    })
}
function muestra_modificar_usuario(id)
{   
    $.ajax({
        url:'mod_usuarios.php',
        type: 'POST',
		data: "id="+id,
        success: function (a){
            $('#principal').html(a);
        }
    })
}
function modificar_usuario(id)
{   var dataString='id='+id+'&nombre='+$('#nombre').val()+'&apellido='+$('#apellido').val()+'&fecha_nac='+$('#fecha_nac').val()+'&sexo='+$('#sexo').val()+'&domicilio='+$('#domicilio').val();
    $.ajax({
        url:'modpaciente.php',
        type: 'POST',
		data: dataString,
        success: function (a){
            $('#principal').html(a);
        }
    })
}
function eliminar_paciente(id)
{ 
	$.ajax({
        url:'admin_paciente.php',
        type: 'POST',
		data: "id="+id,
        success: function (a){
            $('#principal').html(a);
        }
    })
}