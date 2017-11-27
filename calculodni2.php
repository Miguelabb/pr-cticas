<html>

<head>
    <title>Calcular letra DNI</title>
    <meta charset="UTF-8">
    <style>
    input {
        margin-top: 10px;
    }
    
    .button {
        width: 100px;
        height: 60px;
    }
    
    .error {
        color: red;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <h1>Cálculo de la letra DNI</h1>
    <?php
    // $dni = "";
    // $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dni = $_POST["dni"];
        if ($dni == "") {
            $error = "Oye, está vacio";
        } 
    }


    ?>
    <form action="#" method="POST">
        <p class="error">
            <?= $error; ?>
        </p>
        <div>
            <label for="">DNI:</label>
            <input type="text" name="dni" value="<?= $dni ?>">
        </div>
        <div>
            <label for="">NIF:</label>
            <input type="text">
        </div>
        <div>
            <input class="button" type="submit">
        </div>
    </form>
</body>

</html>
