<?php 

$cargos = [
    "Gerente de Vendas",
    "Gerente de Marketing",
    "Gerente de Contratos",
    "Gerente de Cobrança",
    "Gerente de Produção",
    "Gerente de Compras",
];

//adicionando um elemento no vetor
$cargos[] = "Gerente Administrativo";
$cargos[] = "Gerente Financeiro";
$cargos[] = "Gerente Comercial";
$cargos[] = "Gerente de RH";

//iprimindo um vetor na tela
// print_r($cargos);

// die;
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
            <input class="texto" type="text" id="nome" name="nome" required>
        </label>

        <label for="salario">
            Salário (em R$)
            <input class="texto" type="number" id="salario" name="salario" required>
        </label>

        <div class="generos">
            <label>Gênero:</label>
            <label for="masculino">
                <input type="radio" id="masculino" name="genero" value="Masculino" required>Masculino
            </label>

            <label for="feminino">
                <input type="radio" id="feminino" name="genero" value="Feminino">Feminino
            </label>

            <label for="outros">
                <input type="radio" id="outros" name="genero" value="Outros">Outros
            </label>
        </div>

        <label id="cargosLabel" for="cargos">
            Cargos
            <select id="cargos" name="cargos" required>
                <option id="selecione" selected disabled value="">Selecione</option>
                
                <?php
                    foreach($cargos as $cargo){
                        echo "<option>$cargo</option>";
                    }
                ?>
            </select>
        </label>

        <button>Calcular Aumento</button>

    </form>

</body>

</html>