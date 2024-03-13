<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>parou impar</title>
</head>
<body>
    <h1>Verificação de par ou ímpar</h1>
 
    
    <form method="post" action="">

        <label for="numero">Informe um número:</label>

        <input type="text" id="numero" name="numero" required>
        
        <button type="submit">enviar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num = $_POST["numero"];
 
        if (is_numeric($num)) {
            // verifica se a entrada é um número
            if ($num % 2 == 0) {
                echo "<br>O número informado é par";
            } else {
                echo "<br>O número informado é impar";
            }
        } else {
            echo "insira um número válido.";
        }
    }
    ?>
</body>
</html>
 