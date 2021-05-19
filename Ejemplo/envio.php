<?php
$nameA = $_GET['name'];
$email = $_GET['email'];
$asunto = $_GET['asunto'];
$textA = $_GET['textarea'];

echo"<h4>Estos son los datos capturados:</h4>";
echo"Nombre: ".$nameA."</br>";
echo"Email: ".$email."</br>";
echo"Asunto: ".$asunto."</br>";
echo"Mensaje ".$textA."</br>";
?>