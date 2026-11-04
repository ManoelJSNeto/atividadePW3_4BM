<?php
$veiculo = $_POST['veiculo'];
$horas   = $_POST['horas'];

switch ($veiculo) {
    case 'carro':
        $precoPorHora = 8.00;
        $nomeVeiculo  = 'carro';
        break;
    case 'moto':
        $precoPorHora = 5.00;
        $nomeVeiculo  = 'moto';
        break;
    case 'suv':
        $precoPorHora = 12.00;
        $nomeVeiculo  = 'SUV';
        break;
    case 'caminhonete':
        $precoPorHora = 15.00;
        $nomeVeiculo  = 'caminhonete';
        break;
}

$valorBruto = $horas * $precoPorHora;

if ($horas <= 2) {
    $percentualDesconto = 0;
} else if ($horas <= 5) {
    $percentualDesconto = 0.05;
} else {
    $percentualDesconto = 0.10;
}

if ($horas > 8) {
    $percentualDesconto += 0.05;
}

$valorDesconto = $valorBruto * $percentualDesconto;
$valorFinal    = $valorBruto - $valorDesconto;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Center Park - resumo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Center Park</h1>
<h2>resumo</h2>

<table>
    <tr>
        <th>campo</th>
        <th>valor</th>
    </tr>
    <tr>
        <td>tipo de veiculo</td>
        <td><?= $nomeVeiculo ?></td>
    </tr>
    <tr>
        <td>horas</td>
        <td><?= $horas ?>h</td>
    </tr>
    <tr>
        <td>valor por hora</td>
        <td>R$ <?= number_format($precoPorHora, 2, ',', '.') ?></td>
    </tr>
    <tr class="total-row">
        <td>valor bruto</td>
        <td>R$ <?= number_format($valorBruto, 2, ',', '.') ?></td>
    </tr>
    <tr class="total-row">
        <td>desconto (<?= ($percentualDesconto * 100) ?>%)</td>
        <td>- R$ <?= number_format($valorDesconto, 2, ',', '.') ?></td>
    </tr>
    <tr class="total-row">
        <td>valor final</td>
        <td class="destaque">R$ <?= number_format($valorFinal, 2, ',', '.') ?></td>
    </tr>
</table>

<a href="index.html" class="btn">voltar</a>

</body>
</html>
