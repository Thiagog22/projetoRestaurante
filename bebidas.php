<!DOCTYPE html> 
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Cardápio - After Gastrobar</title>

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
    }

    header h1 {
        font-size: 48px;
        letter-spacing: 3px;
    }

    .categoria {
        width: 90%;
        max-width: 700px;
        margin: 40px auto;
        background: #111;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    }

    .categoria h2 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 32px;
        letter-spacing: 2px;
    }

    .item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #444;
        padding: 10px 0;
        font-size: 18px;
    }

    .nome {
        max-width: 65%;
    }

    .preco-area {
        display: flex;
        gap: 12px;
        align-items: center;
    }

    .preco {
        font-weight: bold;
        white-space: nowrap;
        text-align: right;
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
    }
</style>
</head>

<body>

<header>
    <h1>CARDÁPIO</h1>
</header>

<a href="javascript:history.back()" class="btn-voltar">← Voltar</a>

<section class="categoria">
    <h2>BEBIDAS</h2>

    <!-- ITENS CORRIGIDOS -->
    
    <div class="item">
        <span class="nome">Coxinhas de frango (8 unidades)</span>
        <div class="preco-area">
            <span class="preco">R$ 11,99</span>
            <button class="add-btn" onclick="addItem('Coxinhas de frango (8 unidades)', 11.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Pastéis de carne de sol (6 unidades)</span>
        <div class="preco-area">
            <span class="preco">R$ 19,99</span>
            <button class="add-btn" onclick="addItem('Pastéis de carne de sol (6 unidades)', 19.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Pastéis de queijo do reino (6 unidades)</span>
        <div class="preco-area">
            <span class="preco">R$ 19,99</span>
            <button class="add-btn" onclick="addItem('Pastéis de queijo do reino (6 unidades)', 19.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Bolinhos de bacalhau (6 unidades)</span>
        <div class="preco-area">
            <span class="preco">R$ 19,90</span>
            <button class="add-btn" onclick="addItem('Bolinhos de bacalhau (6 unidades)', 19.90)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Pão de alho (unidade)</span>
        <div class="preco-area">
            <span class="preco">R$ 4,99</span>
            <button class="add-btn" onclick="addItem('Pão de alho (unidade)', 4.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Frango à passarinho com molho especial</span>
        <div class="preco-area">
            <span class="preco">R$ 19,99</span>
            <button class="add-btn" onclick="addItem('Frango à passarinho com molho especial', 19.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Torresmo com farofa</span>
        <div class="preco-area">
            <span class="preco">R$ 19,99</span>
            <button class="add-btn" onclick="addItem('Torresmo com farofa', 19.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Tripa com farofa</span>
        <div class="preco-area">
            <span class="preco">R$ 19,99</span>
            <button class="add-btn" onclick="addItem('Tripa com farofa', 19.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Camarão crocante com catupiry (6 unidades)</span>
        <div class="preco-area">
            <span class="preco">R$ 24,99</span>
            <button class="add-btn" onclick="addItem('Camarão crocante com catupiry (6 unidades)', 24.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Queijo coalho na chapa</span>
        <div class="preco-area">
            <span class="preco">R$ 9,99</span>
            <button class="add-btn" onclick="addItem('Queijo coalho na chapa', 9.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Cubinhos de queijo à milanesa com molho especial</span>
        <div class="preco-area">
            <span class="preco">R$ 17,99</span>
            <button class="add-btn" onclick="addItem('Cubinhos de queijo à milanesa com molho especial', 17.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Macaxeira frita com molho especial</span>
        <div class="preco-area">
            <span class="preco">R$ 14,99</span>
            <button class="add-btn" onclick="addItem('Macaxeira frita com molho especial', 14.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Batata frita</span>
        <div class="preco-area">
            <span class="preco">R$ 19,99</span>
            <button class="add-btn" onclick="addItem('Batata frita', 19.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Batata frita com cheddar e queijo ralado</span>
        <div class="preco-area">
            <span class="preco">R$ 19,99</span>
            <button class="add-btn" onclick="addItem('Batata frita com cheddar e queijo ralado', 19.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Batata frita com bacon, cheddar e queijo ralado</span>
        <div class="preco-area">
            <span class="preco">R$ 24,99</span>
            <button class="add-btn" onclick="addItem('Batata frita com bacon, cheddar e queijo ralado', 24.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Filé com fritas com cheddar e queijo ralado</span>
        <div class="preco-area">
            <span class="preco">R$ 29,99</span>
            <button class="add-btn" onclick="addItem('Filé com fritas com cheddar e queijo ralado', 29.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Calabresa com fritas com molho especial e queijo ralado</span>
        <div class="preco-area">
            <span class="preco">R$ 24,99</span>
            <button class="add-btn" onclick="addItem('Calabresa com fritas com molho especial e queijo ralado', 24.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Iscas de frango com fritas com cheddar e queijo ralado</span>
        <div class="preco-area">
            <span class="preco">R$ 27,99</span>
            <button class="add-btn" onclick="addItem('Iscas de frango com fritas com cheddar e queijo ralado', 27.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Iscas de peixe com fritas com cheddar e queijo ralado</span>
        <div class="preco-area">
            <span class="preco">R$ 22,99</span>
            <button class="add-btn" onclick="addItem('Iscas de peixe com fritas com cheddar e queijo ralado', 22.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Camarão com fritas ao alho e óleo e queijo ralado</span>
        <div class="preco-area">
            <span class="preco">R$ 29,99</span>
            <button class="add-btn" onclick="addItem('Camarão com fritas ao alho e óleo e queijo ralado', 29.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Carré suíno com vinagrete, farofa e macaxeira cozida</span>
        <div class="preco-area">
            <span class="preco">R$ 24,99</span>
            <button class="add-btn" onclick="addItem('Carré suíno com vinagrete, farofa e macaxeira cozida', 24.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <span class="nome">Bisteca bovina com vinagrete, farofa e macaxeira cozida</span>
        <div class="preco-area">
            <span class="preco">R$ 29,99</span>
            <button class="add-btn" onclick="addItem('Bisteca bovina com vinagrete, farofa e macaxeira cozida', 29.99)">Adicionar</button>
        </div>
    </div>

</section>

<div id="carrinho">
    <h3>Seu Pedido</h3>
    <ul id="listaCarrinho"></ul>
    <p><strong>Total: R$ <span id="totalPedido">0.00</span></strong></p>
    <button onclick="enviarWhatsApp()">Enviar para o WhatsApp</button>
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

    carrinho.forEach(item => {
        let li = document.createElement('li');
        li.textContent = `${item.nome} - R$ ${item.preco.toFixed(2)}`;
        lista.appendChild(li);
    });

    document.getElementById('totalPedido').innerText = total.toFixed(2);
}

function enviarWhatsApp() {
    let mensagem = "Olá! Gostaria de fazer um pedido:%0A%0A";

    carrinho.forEach(item => {
        mensagem += `• ${item.nome} - R$ ${item.preco.toFixed(2)}%0A`;
    });

    mensagem += `%0ATotal: R$ ${total.toFixed(2)}%0A`;

    window.open("https://wa.me/5583994089340?text=" + mensagem);
}
</script>

</body>
</html>
