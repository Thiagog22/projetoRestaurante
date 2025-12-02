<?php
// Caminho do arquivo JSON
$arquivo = "pedidos.json";

// Lê o JSON
$dados = json_decode(file_get_contents($arquivo), true);

// Se não existir ou estiver vazio, cria estrutura básica
if (!$dados || !isset($dados["pedidos"])) {
    $dados = ["pedidos" => []];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>

    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        h1 {
            background: #333;
            color: white;
            padding: 15px;
            margin: 0;
        }

        table {
            width: 95%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background: #555;
            color: white;
        }

        .itens-box {
            background: #f9f9f9;
            padding: 8px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h1>Painel Administrativo - Pedidos</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Endereço</th>
        <th>Itens</th>
        <th>Total (R$)</th>
        <th>Data</th>
    </tr>

    <?php foreach ($dados["pedidos"] as $pedido): ?>
        <tr>
            <td><?= $pedido["id"] ?></td>
            <td><?= htmlspecialchars($pedido["nome"]) ?></td>
            <td><?= htmlspecialchars($pedido["endereco"]) ?></td>

            <td>
                <div class="itens-box">
                    <?php foreach ($pedido["itens"] as $item): ?>
                        • <strong><?= $item["nome"] ?></strong> — R$ <?= number_format($item["preco"], 2, ",", ".") ?><br>
                    <?php endforeach; ?>
                </div>
            </td>

            <td><strong>R$ <?= number_format($pedido["total"], 2, ",", ".") ?></strong></td>
            <td><?= $pedido["data"] ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
