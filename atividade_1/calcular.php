<?php
$qtdCamiseta = $_POST['camiseta'];
$qtdCalca    = $_POST['calca'];
$qtdJaqueta  = $_POST['jaqueta'];
$qtdVestido  = $_POST['vestido'];
$qtdTenis    = $_POST['tenis'];

$subtotalCamiseta = $qtdCamiseta * 49.90;
$subtotalCalca    = $qtdCalca    * 129.90;
$subtotalJaqueta  = $qtdJaqueta  * 249.90;
$subtotalVestido  = $qtdVestido  * 179.90;
$subtotalTenis    = $qtdTenis    * 299.90;

$descontoCamiseta = $subtotalCamiseta * 0.05;
$descontoCalca    = $subtotalCalca    * 0.10;
$descontoJaqueta  = $subtotalJaqueta  * 0.15;
$descontoVestido  = $subtotalVestido  * 0.08;
$descontoTenis    = 0;

$valorBruto       = $subtotalCamiseta + $subtotalCalca + $subtotalJaqueta + $subtotalVestido + $subtotalTenis;
$valorDesconto    = $descontoCamiseta + $descontoCalca + $descontoJaqueta + $descontoVestido + $descontoTenis;
$valorComDesconto = $valorBruto - $valorDesconto;

$descontoAdicional = 0;
if ($valorComDesconto > 500) {
    $descontoAdicional = $valorComDesconto * 0.05;
}

$valorFinal = $valorComDesconto - $descontoAdicional;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Fashion Style - resumo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Fashion Style</h1>
<h2>resumo da compra</h2>

<table>
    <tr>
        <th>produto</th>
        <th>qtd</th>
        <th>subtotal</th>
        <th>desconto</th>
    </tr>
    <?php if ($qtdCamiseta > 0) { ?>
    <tr>
        <td>camiseta</td>
        <td><?= $qtdCamiseta ?></td>
        <td>R$ <?= number_format($subtotalCamiseta, 2, ',', '.') ?></td>
        <td>R$ <?= number_format($descontoCamiseta, 2, ',', '.') ?></td>
    </tr>
    <?php } ?>
    <?php if ($qtdCalca > 0) { ?>
    <tr>
        <td>calca jeans</td>
        <td><?= $qtdCalca ?></td>
        <td>R$ <?= number_format($subtotalCalca, 2, ',', '.') ?></td>
        <td>R$ <?= number_format($descontoCalca, 2, ',', '.') ?></td>
    </tr>
    <?php } ?>
    <?php if ($qtdJaqueta > 0) { ?>
    <tr>
        <td>jaqueta</td>
        <td><?= $qtdJaqueta ?></td>
        <td>R$ <?= number_format($subtotalJaqueta, 2, ',', '.') ?></td>
        <td>R$ <?= number_format($descontoJaqueta, 2, ',', '.') ?></td>
    </tr>
    <?php } ?>
    <?php if ($qtdVestido > 0) { ?>
    <tr>
        <td>vestido</td>
        <td><?= $qtdVestido ?></td>
        <td>R$ <?= number_format($subtotalVestido, 2, ',', '.') ?></td>
        <td>R$ <?= number_format($descontoVestido, 2, ',', '.') ?></td>
    </tr>
    <?php } ?>
    <?php if ($qtdTenis > 0) { ?>
    <tr>
        <td>tenis</td>
        <td><?= $qtdTenis ?></td>
        <td>R$ <?= number_format($subtotalTenis, 2, ',', '.') ?></td>
        <td>R$ 0,00</td>
    </tr>
    <?php } ?>
    <tr class="total-row">
        <td colspan="2">valor bruto</td>
        <td colspan="2">R$ <?= number_format($valorBruto, 2, ',', '.') ?></td>
    </tr>
    <tr class="total-row">
        <td colspan="2">descontos dos produtos</td>
        <td colspan="2">- R$ <?= number_format($valorDesconto, 2, ',', '.') ?></td>
    </tr>
    <?php if ($descontoAdicional > 0) { ?>
    <tr class="total-row">
        <td colspan="2">desconto adicional (acima de R$ 500)</td>
        <td colspan="2" class="destaque">- R$ <?= number_format($descontoAdicional, 2, ',', '.') ?></td>
    </tr>
    <?php } ?>
    <tr class="total-row">
        <td colspan="2">valor final</td>
        <td colspan="2" class="destaque">R$ <?= number_format($valorFinal, 2, ',', '.') ?></td>
    </tr>
</table>

<a href="index.html" class="btn">voltar as compras</a>

</body>
</html>
