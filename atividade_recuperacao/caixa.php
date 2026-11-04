<?php
session_start();

if (isset($_POST['saldo'])) {
    $saldo = $_POST['saldo'];

    if ($saldo <= 0) {
        header('Location: index.html');
        exit;
    }

    $_SESSION['saldo']        = $saldo;
    $_SESSION['totalSacado']  = 0;
    $_SESSION['qtdSaques']    = 0;
    $_SESSION['historico']    = [];
}

$mensagem = '';
if (isset($_POST['saque'])) {
    $valorSaque = $_POST['saque'];

    if ($valorSaque <= 0) {
        $mensagem = 'erro';
    } else if ($valorSaque > $_SESSION['saldo']) {
        $mensagem = 'insuficiente';
    } else {
        $_SESSION['saldo']       -= $valorSaque;
        $_SESSION['totalSacado'] += $valorSaque;
        $_SESSION['qtdSaques']++;
        $_SESSION['historico'][]  = $valorSaque;
        $mensagem = 'ok';
    }
}

$saldo       = $_SESSION['saldo'];
$totalSacado = $_SESSION['totalSacado'];
$qtdSaques   = $_SESSION['qtdSaques'];
$historico   = $_SESSION['historico'];
$encerrado   = ($saldo <= 0);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>caixa eletronico</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>caixa eletronico</h1>

<?php if ($mensagem == 'ok') { ?>
    <p style="color:green;">saque realizado!</p>
<?php } else if ($mensagem == 'insuficiente') { ?>
    <p style="color:red;">saldo insuficiente!</p>
<?php } else if ($mensagem == 'erro') { ?>
    <p style="color:red;">valor invalido.</p>
<?php } ?>

<?php if (!$encerrado) { ?>

    <table>
        <tr>
            <th>saldo disponivel</th>
            <td class="destaque">R$ <?= number_format($saldo, 2, ',', '.') ?></td>
        </tr>
    </table>

    <form action="caixa.php" method="post">
        <table>
            <tr>
                <th>valor do saque (R$)</th>
                <td><input type="number" name="saque" min="0.01" step="0.01" required></td>
            </tr>
        </table>
        <button type="submit">sacar</button>
    </form>

<?php } ?>

<?php if (count($historico) > 0) { ?>
<h2>historico de saques</h2>
<table>
    <tr>
        <th>#</th>
        <th>valor</th>
    </tr>
    <?php for ($i = 0; $i < count($historico); $i++) { ?>
    <tr>
        <td><?= $i + 1 ?></td>
        <td>R$ <?= number_format($historico[$i], 2, ',', '.') ?></td>
    </tr>
    <?php } ?>
    <tr class="total-row">
        <td>quantidade de saques</td>
        <td><?= $qtdSaques ?></td>
    </tr>
    <tr class="total-row">
        <td>total sacado</td>
        <td>R$ <?= number_format($totalSacado, 2, ',', '.') ?></td>
    </tr>
    <tr class="total-row">
        <td>saldo restante</td>
        <td class="destaque">R$ <?= number_format($saldo, 2, ',', '.') ?></td>
    </tr>
</table>
<?php } ?>

<?php if ($encerrado) { ?>
    <p style="text-align:center; color:green;"><strong>saldo esgotado. obrigado por usar o caixa eletronico!</strong></p>
<?php } ?>

<a href="encerrar.php" class="btn">encerrar sessao</a>

</body>
</html>
