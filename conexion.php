<?php

$conexion = mysqli_connect("127.0.0.1:3307","root","","centro_medico");

$nombre = $_POST['nombrePaciente'];
$fecha = $_POST['fechaNacimiento'];
$generoPaciente = $_POST['generoPaciente'];
$direccionPaciente =  $_POST['direccionPaciente'];
$telefonoPaciente = $_POST['telefonoPaciente'];
$emailPaciente = $_POST['emailPaciente'];
$nombreContacto = $_POST['nombreContacto'];
$relacionContacto = $_POST['relacionContacto'];
$telefonoContacto = $_POST['telefonoContacto'];
$sintomasPaciente = $_POST['sintomasPaciente'];

$insert = mysqli_query($conexion,'INSERT INTO pacientes(nombre,fecha_nacimiento,genero,direccion,telefono,email,nombre_contacto,relacion_contacto,telefono_contacto,sintomas_paciente) VALUES ("'.$nombre.'","'.$fecha.'","'.$generoPaciente.'","'.$direccionPaciente.'",'.$telefonoPaciente.',"'.$emailPaciente.'","'.$nombreContacto.'","'.$relacionContacto.'",'.$telefonoContacto.',"'.$sintomasPaciente.'")');

if($conexion->affected_rows > 0){

    echo '<script>alert("Paciente registrado correctamente");
location.href = "index.html";
</script>';
}




mysqli_close($conexion);
?>