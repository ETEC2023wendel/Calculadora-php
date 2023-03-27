<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="main.php">
        <label for="num1">1ºnumero:<label>
            <input type="text" name="num1" id="num1">
            <br>
            <form method="post" action="main.php">
        <label for="num2">2ºnumero:<label>
            <input type="text" name="num2" id="num2">
            <br>
            <label for="op">Operação:</label>
            <select name="op" id="op">
                <option value="+">somar</option>
                <option value="*">multiplicar</option>
                <option value="-">subtrair</option>
                <option value="/">dividir</option>
</select>
<br>
<button type="submit">Calcular</button>
</form>
</body>
</html>