<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cardápio - Bebidas After Gastrobar</title>

<style>
    body {
        background: #0f0f0f;
        color: #fff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        text-align: center;
        padding: 40px 0 10px;
    }

    header h1 {
        font-size: 48px;
        letter-spacing: 3px;
    }

    .categoria {
        width: 90%;
        max-width: 800px;
        margin: 40px auto;
        background: #111;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
    }

    .categoria h2 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 32px;
        letter-spacing: 2px;
    }

    .item {
        padding: 15px 0;
        border-bottom: 1px solid #444;
    }

    .nome {
        font-size: 20px;
        font-weight: bold;
    }

    .linha-preco {
        margin-top: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .add-btn {
        background: #ffb300;
        border: none;
        padding: 6px 12px;
        border-radius: 5px;
        cursor: pointer;
        color: #000;
        font-weight: bold;
    }

    .add-btn:hover {
        background: #ffcc46;
    }

    #carrinho {
        position: fixed;
        right: 20px;
        bottom: 20px;
        background: #222;
        border: 1px solid #555;
        padding: 15px;
        width: 260px;
        border-radius: 10px;
        color: #fff;
        z-index: 999;
    }

    .remover-btn {
        background: red;
        color: white;
        border: none;
        padding: 2px 7px;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 8px;
        font-weight: bold;
    }

    .remover-btn:hover {
        background: darkred;
    }
    
    .btn-voltar {

position: absolute;

left: 20px;

top: 20px;

background: #ffb300;

padding: 10px 15px;

border-radius: 5px;

color: #000;

text-decoration: none;

font-weight: bold;

}

.btn-voltar:hover {

background: #ffcc46;

header h1 {

font-size: 48px;

letter-spacing: 3px;
}
}

</style>
</head>

<body>

<header>
    <h1>BEBIDAS</h1>
</header>

<a href="javascript:history.back()" class="btn-voltar">< Voltar</a>

<!-- LONG NECK -->
<section class="categoria">
    <h2>Long Neck</h2>

    <div class="item"><div class="nome">Heineken</div><div class="linha-preco">R$ 9,99 <button class="add-btn" onclick="addItem('Heineken Long Neck', 9.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Stella Artois</div><div class="linha-preco">R$ 9,99 <button class="add-btn" onclick="addItem('Stella Artois', 9.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Budweiser Zero Álcool</div><div class="linha-preco">R$ 9,99 <button class="add-btn" onclick="addItem('Budweiser Zero Álcool', 9.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Corona</div><div class="linha-preco">R$ 9,99 <button class="add-btn" onclick="addItem('Corona', 9.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Skol Beats Senses</div><div class="linha-preco">R$ 9,99 <button class="add-btn" onclick="addItem('Skol Beats Senses', 9.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Smirnoff Ice</div><div class="linha-preco">R$ 9,99 <button class="add-btn" onclick="addItem('Smirnoff Ice', 9.99)">Adicionar</button></div></div>
</section>



<!-- CERVEJAS 600ML -->
<section class="categoria">
    <h2>Cervejas 600ml</h2>

    <div class="item"><div class="nome">Antarctica</div><div class="linha-preco">R$ 8,99 <button class="add-btn" onclick="addItem('Antarctica 600ml', 8.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Brahma Chopp</div><div class="linha-preco">R$ 8,99 <button class="add-btn" onclick="addItem('Brahma Chopp 600ml', 8.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Budweiser</div><div class="linha-preco">R$ 10,99 <button class="add-btn" onclick="addItem('Budweiser 600ml', 10.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Antarctica Original</div><div class="linha-preco">R$ 11,99 <button class="add-btn" onclick="addItem('Antarctica Original 600ml', 11.99)">Adicionar</button></div></div>
</section>


<section class="categoria">
    <h2>Cachaças</h2>

    <div class="item"><div class="nome">Triunfo</div><div class="linha-preco">R$ 10,99 <button class="add-btn" onclick="addItem('Triunfo', 10.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Triunfo Umburana</div><div class="linha-preco">R$ 12,99 <button class="add-btn" onclick="addItem('Triunfo Umburana', 12.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Matuta</div><div class="linha-preco">R$ 14,99 <button class="add-btn" onclick="addItem('Matuta', 14.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Matuta Mel e Limão</div><div class="linha-preco">R$ 18,99 <button class="add-btn" onclick="addItem('Matuta Mel e Limão', 18.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Preciosa do Vale</div><div class="linha-preco">R$ 14,99 <button class="add-btn" onclick="addItem('Preciosa do Vale', 14.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Preciosa do Vale Abacaxi</div><div class="linha-preco">R$ 18,99 <button class="add-btn" onclick="addItem('Preciosa do Vale Abacaxi', 18.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Preciosa do Vale Favo de Mel</div><div class="linha-preco">R$ 18,99 <button class="add-btn" onclick="addItem('Preciosa Vale Favo de Mel', 18.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Rainha</div><div class="linha-preco">R$ 19,99 <button class="add-btn" onclick="addItem('Rainha', 19.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Serra Limpa</div><div class="linha-preco">R$ 29,99 <button class="add-btn" onclick="addItem('Serra Limpa', 29.99)">Adicionar</button></div></div>
</section>

<section class="categoria">
    <h2>Doses</h2>

    <div class="item"><div class="nome">Gin Tanqueray</div><div class="linha-preco">R$ 14,99 <button class="add-btn" onclick="addItem('Gin Tanqueray', 14.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Gin Beefeater</div><div class="linha-preco">R$ 19,99 <button class="add-btn" onclick="addItem('Gin Beefeater', 19.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Whisky Black & White</div><div class="linha-preco">R$ 7,99 <button class="add-btn" onclick="addItem('Whisky Black & White', 7.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Whisky Red Label</div><div class="linha-preco">R$ 14,99 <button class="add-btn" onclick="addItem('Whisky Red Label', 14.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Whisky Old Parr</div><div class="linha-preco">R$ 19,99 <button class="add-btn" onclick="addItem('Whisky Old Parr', 19.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Whisky Jack Daniel’s</div><div class="linha-preco">R$ 22,99 <button class="add-btn" onclick="addItem('Jack Daniel’s', 22.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Rum Montilla</div><div class="linha-preco">R$ 6,99 <button class="add-btn" onclick="addItem('Rum Montilla', 6.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Rum Montilla Carta Branca</div><div class="linha-preco">R$ 7,99 <button class="add-btn" onclick="addItem('Rum Montilla Carta Branca', 7.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Tequila Jose Cuervo</div><div class="linha-preco">R$ 14,99 <button class="add-btn" onclick="addItem('Tequila Jose Cuervo', 14.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Campari</div><div class="linha-preco">R$ 12,99 <button class="add-btn" onclick="addItem('Campari', 12.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Pinga Mix</div><div class="linha-preco">R$ 4,99 <button class="add-btn" onclick="addItem('Pinga Mix', 4.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Martini Bianco</div><div class="linha-preco">R$ 11,99 <button class="add-btn" onclick="addItem('Martini Bianco', 11.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Martini Rosato</div><div class="linha-preco">R$ 12,99 <button class="add-btn" onclick="addItem('Martini Rosato', 12.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Vodka Smirnoff</div><div class="linha-preco">R$ 7,99 <button class="add-btn" onclick="addItem('Vodka Smirnoff', 7.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Vodka Absolut</div><div class="linha-preco">R$ 10,99 <button class="add-btn" onclick="addItem('Vodka Absolut', 10.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Vodka Cîroc</div><div class="linha-preco">R$ 22,99 <button class="add-btn" onclick="addItem('Vodka Ciroc', 22.99)">Adicionar</button></div></div>
</section>


<section class="categoria">
    <h2>Garrafas</h2>

    <div class="item"><div class="nome">Whisky Black & White</div><div class="linha-preco">R$ 79,99 <button class="add-btn" onclick="addItem('Black & White Garrafa', 79.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Whisky Red Label</div><div class="linha-preco">R$ 149,99 <button class="add-btn" onclick="addItem('Red Label Garrafa', 149.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Whisky Old Parr</div><div class="linha-preco">R$ 199,99 <button class="add-btn" onclick="addItem('Old Parr Garrafa', 199.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Rum Montilla</div><div class="linha-preco">R$ 39,99 <button class="add-btn" onclick="addItem('Rum Montilla Garrafa', 39.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Vodka Smirnoff</div><div class="linha-preco">R$ 79,99 <button class="add-btn" onclick="addItem('Smirnoff Garrafa', 79.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Vodka Absolut</div><div class="linha-preco">R$ 129,99 <button class="add-btn" onclick="addItem('Absolut Garrafa', 129.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Vodka Cîroc</div><div class="linha-preco">R$ 229,99 <button class="add-btn" onclick="addItem('Ciroc Garrafa', 229.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Vinho Periquita</div><div class="linha-preco">R$ 39,99 <button class="add-btn" onclick="addItem('Vinho Periquita', 39.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Vinho Quinta do Morgado</div><div class="linha-preco">R$ 29,99 <button class="add-btn" onclick="addItem('Quinta do Morgado', 29.99)">Adicionar</button></div></div>
</section>



<section class="categoria">
    <h2>Não Alcoólicas</h2>

    <div class="item"><div class="nome">Energético Monster</div><div class="linha-preco">R$ 10,99 <button class="add-btn" onclick="addItem('Energético Monster', 10.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Energético Red Bull</div><div class="linha-preco">R$ 14,99 <button class="add-btn" onclick="addItem('Energético Red Bull', 14.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Coca-Cola Lata</div><div class="linha-preco">R$ 5,99 <button class="add-btn" onclick="addItem('Coca-Cola Lata', 5.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Coca-Cola Zero Lata</div><div class="linha-preco">R$ 5,99 <button class="add-btn" onclick="addItem('Coca-Cola Zero Lata', 5.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Guaraná Lata</div><div class="linha-preco">R$ 5,99 <button class="add-btn" onclick="addItem('Guaraná Lata', 5.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Guaraná Zero Lata</div><div class="linha-preco">R$ 5,99 <button class="add-btn" onclick="addItem('Guaraná Zero Lata', 5.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Fanta Laranja Lata</div><div class="linha-preco">R$ 5,99 <button class="add-btn" onclick="addItem('Fanta Laranja Lata', 5.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Fanta Uva Lata</div><div class="linha-preco">R$ 5,99 <button class="add-btn" onclick="addItem('Fanta Uva Lata', 5.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Sprite Lata</div><div class="linha-preco">R$ 5,99 <button class="add-btn" onclick="addItem('Sprite Lata', 5.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Schweppes Tônica Lata</div><div class="linha-preco">R$ 5,99 <button class="add-btn" onclick="addItem('Schweppes Tônica Lata', 5.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Schweppes Citrus Lata</div><div class="linha-preco">R$ 5,99 <button class="add-btn" onclick="addItem('Schweppes Citrus Lata', 5.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">H2OH Limão</div><div class="linha-preco">R$ 6,99 <button class="add-btn" onclick="addItem('H2OH Limão', 6.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">H2OH Limoneto</div><div class="linha-preco">R$ 6,99 <button class="add-btn" onclick="addItem('H2OH Limoneto', 6.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Água sem gás</div><div class="linha-preco">R$ 2,99 <button class="add-btn" onclick="addItem('Água sem gás', 2.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Água com gás</div><div class="linha-preco">R$ 3,99 <button class="add-btn" onclick="addItem('Água com gás', 3.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Sprite 1 L</div><div class="linha-preco">R$ 9,99 <button class="add-btn" onclick="addItem('Sprite 1 L', 9.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Coca-Cola 1 L</div><div class="linha-preco">R$ 9,99 <button class="add-btn" onclick="addItem('Coca-Cola 1 L', 9.99)">Adicionar</button></div></div>

    <div class="item"><div class="nome">Guaraná 1 L</div><div class="linha-preco">R$ 9,99 <button class="add-btn" onclick="addItem('Guaraná 1 L', 9.99)">Adicionar</button></div></div>
</section>



<section class="categoria">
    <h2>Sucos</h2>

    
    <div class="item">
        <div class="nome">Açaí</div>
        <div class="linha-preco">Copo R$ 8,99 <button class="add-btn" onclick="addItem('Açaí (Copo)', 8.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 18,99 <button class="add-btn" onclick="addItem('Açaí (Jarra)', 18.99)">Adicionar</button></div>
    </div>

    <div class="item">
        <div class="nome">Morango com Tangerina</div>
        <div class="linha-preco">Copo R$ 8,99 <button class="add-btn" onclick="addItem('Morango com Tangerina (Copo)', 8.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 18,99 <button class="add-btn" onclick="addItem('Morango com Tangerina (Jarra)', 18.99)">Adicionar</button></div>
    </div>


    <div class="item">
        <div class="nome">Abacaxi com Hortelã</div>
        <div class="linha-preco">Copo R$ 8,99 <button class="add-btn" onclick="addItem('Abacaxi com Hortelã (Copo)', 8.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 18,99 <button class="add-btn" onclick="addItem('Abacaxi com Hortelã (Jarra)', 18.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Laranja</div>
        <div class="linha-preco">Copo R$ 8,99 <button class="add-btn" onclick="addItem('Laranja (Copo)', 8.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 18,99 <button class="add-btn" onclick="addItem('Laranja (Jarra)', 18.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Limão</div>
        <div class="linha-preco">Copo R$ 8,99 <button class="add-btn" onclick="addItem('Limão (Copo)', 8.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 18,99 <button class="add-btn" onclick="addItem('Limão (Jarra)', 18.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Morango</div>
        <div class="linha-preco">Copo R$ 8,99 <button class="add-btn" onclick="addItem('Morango (Copo)', 8.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 18,99 <button class="add-btn" onclick="addItem('Morango (Jarra)', 18.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Cajá</div>
        <div class="linha-preco">Copo R$ 8,99 <button class="add-btn" onclick="addItem('Cajá (Copo)', 8.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 18,99 <button class="add-btn" onclick="addItem('Cajá (Jarra)', 18.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Graviola</div>
        <div class="linha-preco">Copo R$ 8,99 <button class="add-btn" onclick="addItem('Graviola (Copo)', 8.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 18,99 <button class="add-btn" onclick="addItem('Graviola (Jarra)', 18.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Maracujá</div>
        <div class="linha-preco">Copo R$ 8,99 <button class="add-btn" onclick="addItem('Maracujá (Copo)', 8.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 18,99 <button class="add-btn" onclick="addItem('Maracujá (Jarra)', 18.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Uva</div>
        <div class="linha-preco">Copo R$ 7,99 <button class="add-btn" onclick="addItem('Uva (Copo)', 7.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 16,99 <button class="add-btn" onclick="addItem('Uva (Jarra)', 16.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Acerola</div>
        <div class="linha-preco">Copo R$ 6,99 <button class="add-btn" onclick="addItem('Acerola (Copo)', 6.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 16,99 <button class="add-btn" onclick="addItem('Acerola (Jarra)', 16.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Goiaba</div>
        <div class="linha-preco">Copo R$ 6,99 <button class="add-btn" onclick="addItem('Goiaba (Copo)', 6.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 16,99 <button class="add-btn" onclick="addItem('Goiaba (Jarra)', 16.99)">Adicionar</button></div>
    </div>

    <
    <div class="item">
        <div class="nome">Abacaxi</div>
        <div class="linha-preco">Copo R$ 6,99 <button class="add-btn" onclick="addItem('Abacaxi (Copo)', 6.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 16,99 <button class="add-btn" onclick="addItem('Abacaxi (Jarra)', 16.99)">Adicionar</button></div>
    </div>

    
    <div class="item">
        <div class="nome">Caju</div>
        <div class="linha-preco">Copo R$ 6,99 <button class="add-btn" onclick="addItem('Caju (Copo)', 6.99)">Adicionar</button></div>
        <div class="linha-preco">Jarra R$ 16,99 <button class="add-btn" onclick="addItem('Caju (Jarra)', 16.99)">Adicionar</button></div>
    </div>

</section>


<div id="carrinho">
    <h3>Seu Pedido</h3>

    <ul id="listaCarrinho"></ul>

    <p><strong>Total: R$ <span id="totalPedido">0.00</span></strong></p>

    <label for="nomeCliente">Seu Nome:</label>
    <input id="nomeCliente" type="text" 
           style="width: 100%; padding: 6px; margin-bottom: 10px; border-radius: 5px;">

    <label for="enderecoCliente">Endereço:</label>
    <input id="enderecoCliente" type="text" 
           style="width: 100%; padding: 6px; margin-bottom: 15px; border-radius: 5px;">

    <button onclick="enviarWhatsApp()" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 6px;">
        Enviar para WhatsApp
    </button>
</div>


<script>
let carrinho = [];
let total = 0;

function addItem(nome, preco) {
    carrinho.push({ nome, preco });
    total += preco;
    atualizarCarrinho();
}

function atualizarCarrinho() {
    let lista = document.getElementById('listaCarrinho');
    lista.innerHTML = '';

    carrinho.forEach((item, index) => {
        let li = document.createElement('li');
        li.innerHTML = `
            ${item.nome} - R$ ${item.preco.toFixed(2)}
            <button class="remover-btn" onclick="removerItem(${index})">X</button>
        `;
        lista.appendChild(li);
    });

    document.getElementById('totalPedido').innerText = total.toFixed(2);

    localStorage.setItem("carrinho", JSON.stringify(carrinho));
    localStorage.setItem("total", total);
}

function removerItem(index) {
    total -= carrinho[index].preco;
    carrinho.splice(index, 1);

    localStorage.setItem("carrinho", JSON.stringify(carrinho));
    localStorage.setItem("total", total);

    atualizarCarrinho();
}

function enviarWhatsApp() {
    const nome = document.getElementById("nomeCliente").value.trim();
    const endereco = document.getElementById("enderecoCliente").value.trim();

    if (!nome || !endereco) {
        alert("Por favor, preencha seu nome e endereço antes de enviar o pedido.");
        return;
    }

    let msg = " Olá, Gostaria de fazer um pedido: %0A%0A";

    msg += ` *Nome:* ${nome}%0A`;
    msg += ` *Endereço:* ${endereco}%0A%0A`;
    msg += " *Itens do pedido:* %0A";

    carrinho.forEach(item => {
        msg += `• ${item.nome} - R$ ${item.preco.toFixed(2)}%0A`;
    });

    msg += `%0A *Total:* R$ ${total.toFixed(2)}%0A`;

    const telefone = "5583993111129";
    const url = `https://wa.me/${telefone}?text=${msg}`;

    window.open(url);
}

window.onload = function() {
    const salvo = localStorage.getItem("carrinho");
    const totalSalvo = localStorage.getItem("total");

    if (salvo) {
        carrinho = JSON.parse(salvo);
        total = parseFloat(totalSalvo);
        atualizarCarrinho();
    }
};
</script>

</body>
</html>
