<?php
// Caminho do arquivo JSON
$arquivo = "pedidos.json";

// Recebe dados enviados pelo JS
$input = file_get_contents("php://input");
$pedido = json_decode($input, true);

// Lê JSON atual
$data = json_decode(file_get_contents($arquivo), true);

// Cria um ID automático
$pedido["id"] = count($data["pedidos"]) + 1;

// Adiciona data/hora
$pedido["data"] = date("Y-m-d H:i:s");

// Salva pedido no array
$data["pedidos"][] = $pedido;

// Salva no arquivo JSON
file_put_contents($arquivo, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo json_encode(["status" => "ok"]);
