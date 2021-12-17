<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна 2</title>
    <style>
        body {
            background-color: aquamarine;
        }
        form {
            text-align: center;
            font-size: 20px;

        }
        select,
        input {
            font-size: 100%;
            color: blue;
            background-color: white;
        }
    </style>
</head>
<body>
<form action="script.php" method="post">
    <p>Ввести ім'я : <br>
        <input type="text" id="firstname" name="firstname"><br>
    <p>Ввести прізвище : <br>
        <input type="text" id="family_name" name="family_name"><br>
        <input type="submit">
</form>
</body>
</html>