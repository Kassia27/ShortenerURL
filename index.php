<?php
   include "conexao.php";
   
   if(isset($_POST['url'])){
   
    $url =$_POST['url'];

    $conn->query("INSERT INTO shortene_url(url) VALUES ('$url')");
   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redutor URL</title>
</head>
<body>
    <h2>Redutor de URL</h2>
    
    <form method="POST">
        <input type="url" name="url" placeholder="Cole a URL" >
        <button type="submit" name="buttom">Reduzir</button>
    </form>

    <p> URL reduzida</p>
    <input type="text" readonly value="">
</body>
</html>