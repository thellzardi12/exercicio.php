<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEIÇÕES</title>
</head>
<style>
        Body {
                font-family: Arial, Arial, Helvetica, sans-serif;
                background-image: linear-gradient(45deg, rgb(19, 219, 235) , rgb(17, 255, 180));
                color:

     }
        div
    { 
                }

    </style>

<body>
    <form method="post" action="">
        <label for="idade">Insira sua idade: </label>
        <input type="number" id="idade" name="idade">
        <button type="submit">Confira</button>
    </form> 

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $idade = $_POST["idade"];

    if($idade < 16){
        echo "Não pode votar";
    }
    if($idade >= 16 && $idade <= 18){
        echo "Voto facultativo";
    }
    if($idade >= 19 && $idade <= 65){
        echo "Voto obrigatório";
    }
    if($idade >= 66){
        echo "Voto facultativo";
    }
}
?>

</body>
</html>
</body>
</html>