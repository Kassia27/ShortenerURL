<?php
$service ='localhost';
$user ='root';
$password ='';
$db = 'redutor-url';

$conn = mysqli_connect($service,$user,$password,$db);

if($conn){
    echo 'Conectado com o Banco de Dados';
}