<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <form method="post" action="main.php">
        <label for="num1">Numero 1:</label>
        <input type="text" name="num1" id="num1">
        <br>
        <label for="num1">Numero 2:</label>
        <input type="text" name="num2" id="num2">
        <br>
        <label for="op">Operação</label>
        <select name="op" id="op">
            <option value="+">somar</option>
            <option value="-">multiplicar</option>
            <option value="*">subtrair</option>
            <option value="/">dividir</option>
        </select>
        <br>
        <button type="submit">Calcular</button>
</form>
</body>
</html>