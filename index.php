<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="functions.php" method="get">
        <input type="number" name="num1" placeholder="Enter number 1">
        <select name="oper" id="">
            <label for="">Choose Operation</label>
            <option value="add">Add</option>
            <option value="sub">Substract</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <input type="number" name="num2" placeholder="Enter number 2">

        <button type="submit">Calculate</button>
    </form>
</body>

</html>