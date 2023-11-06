<?php

$host ='localhost';
$user ='root';
$password ='';
$db = 'redutor-url';

$conn = new mysqli($host,$user,$password,$db);

if ($conn->connect_errno)
      echo('Falha na conexão');