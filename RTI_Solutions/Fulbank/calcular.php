<?php

if (isset($_POST["nome"]) && isset($_POST["salario"]) && isset($_POST["genero"]) && isset($_POST["cargos"])) {

    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $genero = $_POST["genero"];
    $cargos = $_POST["cargos"];

    if ($salario > 5000) {
        $novoSalario = ((10 / 100) * $salario) + $salario;
    } else {
        $novoSalario = ((20 / 100) * $salario) + $salario;
    }
} else {
    die("<h1>ERRO AO ENVIAR FORMULÁRIO!</h1>");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Aumento Salarial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST" action="calcular.php">
        <p>Aumento Salarial</p>

        <label for="nome">
            Nome
            <input class="texto" type="text" id="nome" name="nome" value="<?= $nome ?>" readonly>
        </label>

        <label for="salario">
            Antigo Salário (em R$)
            <input class="texto" type="number" id="salario" name="salario" value="<?= $salario ?>" readonly>
        </label>

        <div class="generos">
            <label>Gênero:</label>
            <label for="masculino">
                <input type="radio" name="genero" checked value="<?= $genero ?>"><?= $genero ?>
            </label>

            <br>
            <br>
            <br>

            <label id="cargosLabel" for="cargos">
                Cargos
                <select id="cargos" name="cargos" disabled>
                    <option id="selecione" selected value=""><?= $cargos ?></option>
                </select>
            </label>


            <textarea id="total" cols="22" rows="4" readonly>Parabéns <?= $nome ?>! Você passará a receber R$<?= $novoSalario ?> no cargo de <?= $cargos ?>!</textarea>

    </form>

</body>

</html>