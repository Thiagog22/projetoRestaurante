<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        padding: 18px 0;
        border-bottom: 1px solid #444;
    }

    .nome {
        font-size: 21px;
        font-weight: bold;
    }

    .descricao {
        font-size: 15px;
        color: #ccc;
        margin: 5px 0 10px;
        line-height: 1.5;
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
        margin-left: 10px;
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
    <h1>PRATOS</h1>
</header>

<a href="javascript:history.back()" class="btn-voltar">< Voltar</a>

<!-- ========== PRATOS ========== -->
<section class="categoria">
    <h2>Pratos</h2>

    <!-- 1 - Parmegiana de Frango -->
    <div class="item">
        <div class="nome">Parmegiana de Frango</div>
        <div class="descricao">
            Espaguete ao molho de tomate, arroz e purê.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 21,99 
            <button class="add-btn" onclick="addItem('Parmegiana de Frango (1 pessoa)', 21.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 59,99 
            <button class="add-btn" onclick="addItem('Parmegiana de Frango (3 pessoas)', 59.99)">Adicionar</button>
        </div>
    </div>

    <!-- 2 - Parmegiana de Carne -->
    <div class="item">
        <div class="nome">Parmegiana de Carne</div>
        <div class="descricao">Espaguete ao molho de tomate, arroz e purê.</div>

        <div class="linha-preco">
            1 Pessoa — R$ 23,99
            <button class="add-btn" onclick="addItem('Parmegiana de Carne (1 pessoa)', 23.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 64,99
            <button class="add-btn" onclick="addItem('Parmegiana de Carne (3 pessoas)', 64.99)">Adicionar</button>
        </div>
    </div>

    <!-- 3 - Frango ao Formaggio -->
    <div class="item">
        <div class="nome">Frango ao Formaggio</div>
        <div class="descricao">
            Frango empanado ao molho branco, arroz com brócolis e purê.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 23,99
            <button class="add-btn" onclick="addItem('Frango ao Formaggio (1 pessoa)', 23.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 64,99
            <button class="add-btn" onclick="addItem('Frango ao Formaggio (3 pessoas)', 64.99)">Adicionar</button>
        </div>
    </div>

    <!-- 4 - Fettuccine de Camarão -->
    <div class="item">
        <div class="nome">Fettuccine de Camarão</div>
        <div class="descricao">
            Macarrão fettuccine com camarões ao molho branco.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 29,99
            <button class="add-btn" onclick="addItem('Fettuccine de Camarão (1 pessoa)', 29.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 84,99
            <button class="add-btn" onclick="addItem('Fettuccine de Camarão (3 pessoas)', 84.99)">Adicionar</button>
        </div>
    </div>

    <!-- 5 - Camarão Internacional -->
    <div class="item">
        <div class="nome">Camarão Internacional</div>
        <div class="descricao">
            Arroz, camarão, queijo, presunto, ervilha, batata palha e molho branco.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 29,99
            <button class="add-btn" onclick="addItem('Camarão Internacional (1 pessoa)', 29.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 84,99
            <button class="add-btn" onclick="addItem('Camarão Internacional (3 pessoas)', 84.99)">Adicionar</button>
        </div>
    </div>

    <!-- 6 - Espaguete de Carne de Sol -->
    <div class="item">
        <div class="nome">Espaguete de Carne de Sol</div>
        <div class="descricao">
            Espaguete, carne de sol, nata, cebola e molho branco.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 24,99
            <button class="add-btn" onclick="addItem('Espaguete de Carne de Sol (1 pessoa)', 24.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 69,99
            <button class="add-btn" onclick="addItem('Espaguete de Carne de Sol (3 pessoas)', 69.99)">Adicionar</button>
        </div>
    </div>

    <!-- 7 - Carne de Sol na Nata -->
    <div class="item">
        <div class="nome">Carne de Sol na Nata</div>
        <div class="descricao">
            Carne de sol desfiada na nata, feijão verde, arroz, vinagrete e farofa.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 24,99
            <button class="add-btn" onclick="addItem('Carne de Sol na Nata (1 pessoa)', 24.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 84,99
            <button class="add-btn" onclick="addItem('Carne de Sol na Nata (3 pessoas)', 84.99)">Adicionar</button>
        </div>
    </div>

    <!-- 8 - Carne de Sol com Coalho -->
    <div class="item">
        <div class="nome">Carne de Sol com Coalho</div>
        <div class="descricao">
            Carne de sol, queijo coalho, feijão verde, arroz, vinagrete e farofa.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 27,99
            <button class="add-btn" onclick="addItem('Carne de Sol com Coalho (1 pessoa)', 27.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 89,99
            <button class="add-btn" onclick="addItem('Carne de Sol com Coalho (3 pessoas)', 89.99)">Adicionar</button>
        </div>
    </div>

    <!-- 9 - Cupim ao Gorgonzola -->
    <div class="item">
        <div class="nome">Cupim ao Gorgonzola</div>
        <div class="descricao">
            Cupim ao molho gorgonzola, feijão verde, arroz, vinagrete e farofa.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 27,99
            <button class="add-btn" onclick="addItem('Cupim ao Gorgonzola (1 pessoa)', 27.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 76,99
            <button class="add-btn" onclick="addItem('Cupim ao Gorgonzola (3 pessoas)', 76.99)">Adicionar</button>
        </div>
    </div>

    <!-- 10 - Alcatra -->
    <div class="item">
        <div class="nome">Alcatra</div>
        <div class="descricao">
            Alcatra, feijão verde, arroz, vinagrete e farofa.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 24,99
            <button class="add-btn" onclick="addItem('Alcatra (1 pessoa)', 24.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 69,99
            <button class="add-btn" onclick="addItem('Alcatra (3 pessoas)', 69.99)">Adicionar</button>
        </div>
    </div>

    <!-- 11 - Picanha -->
    <div class="item">
        <div class="nome">Picanha</div>
        <div class="descricao">
            Picanha, feijão verde, arroz, vinagrete e farofa.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 29,99
            <button class="add-btn" onclick="addItem('Picanha (1 pessoa)', 29.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 89,99
            <button class="add-btn" onclick="addItem('Picanha (3 pessoas)', 89.99)">Adicionar</button>
        </div>
    </div>

    <!-- 12 - Rubacão -->
    <div class="item">
        <div class="nome">Rubacão</div>
        <div class="descricao">
            Feijão verde, arroz, carne de sol, charque, bacon, queijo coalho e requeijão.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 27,99
            <button class="add-btn" onclick="addItem('Rubacão (1 pessoa)', 27.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 76,99
            <button class="add-btn" onclick="addItem('Rubacão (3 pessoas)', 76.99)">Adicionar</button>
        </div>
    </div>

    <!-- 13 - Filé de Tilápia -->
    <div class="item">
        <div class="nome">Filé de Tilápia</div>
        <div class="descricao">
            Tilápia empanada, arroz com brócolis e purê.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 27,99
            <button class="add-btn" onclick="addItem('Filé de Tilápia (1 pessoa)', 27.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 76,99
            <button class="add-btn" onclick="addItem('Filé de Tilápia (3 pessoas)', 76.99)">Adicionar</button>
        </div>
    </div>

    <!-- 14 - Lasanha de Carne -->
    <div class="item">
        <div class="nome">Lasanha de Carne</div>
        <div class="descricao">
            Acompanha arroz e batata palha.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 18,99
            <button class="add-btn" onclick="addItem('Lasanha de Carne (1 pessoa)', 18.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 54,99
            <button class="add-btn" onclick="addItem('Lasanha de Carne (3 pessoas)', 54.99)">Adicionar</button>
        </div>
    </div>

    <!-- 15 - Lasanha de Frango -->
    <div class="item">
        <div class="nome">Lasanha de Frango</div>
        <div class="descricao">
            Acompanha arroz e batata palha.
        </div>

        <div class="linha-preco">
            1 Pessoa — R$ 18,99
            <button class="add-btn" onclick="addItem('Lasanha de Frango (1 pessoa)', 18.99)">Adicionar</button>
        </div>
        <div class="linha-preco">
            Até 3 Pessoas — R$ 54,99
            <button class="add-btn" onclick="addItem('Lasanha de Frango (3 pessoas)', 54.99)">Adicionar</button>
        </div>
    </div>

</section>

<!-- ========== PORÇÕES ========== -->
<section class="categoria">
    <h2>Porções</h2>

    <div class="item">
        <div class="nome">Arroz Branco</div>
        <div class="linha-preco">
            R$ 5,99
            <button class="add-btn" onclick="addItem('Arroz Branco', 5.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Arroz com Brócolis</div>
        <div class="linha-preco">
            R$ 7,99
            <button class="add-btn" onclick="addItem('Arroz com Brócolis', 7.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Purê de Batata Inglesa</div>
        <div class="linha-preco">
            R$ 7,99
            <button class="add-btn" onclick="addItem('Purê de Batata Inglesa', 7.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Espaguete ao Molho de Tomate</div>
        <div class="linha-preco">
            R$ 7,99
            <button class="add-btn" onclick="addItem('Espaguete ao Molho de Tomate', 7.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Feijão Verde</div>
        <div class="linha-preco">
            R$ 4,99
            <button class="add-btn" onclick="addItem('Feijão Verde', 4.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Farofa de Bacon</div>
        <div class="linha-preco">
            R$ 4,99
            <button class="add-btn" onclick="addItem('Farofa de Bacon', 4.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Vinagrete</div>
        <div class="linha-preco">
            R$ 4,99
            <button class="add-btn" onclick="addItem('Vinagrete', 4.99)">Adicionar</button>
        </div>
    </div>

</section>

<!-- ========== SOBREMESAS ========== -->
<section class="categoria">
    <h2>Sobremesas</h2>

    <div class="item">
        <div class="nome">Brownie</div>
        <div class="descricao">Chocolate preto e chocolate branco com cobertura de confete.</div>

        <div class="linha-preco">
            R$ 11,99
            <button class="add-btn" onclick="addItem('Brownie', 11.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Brownie com Sorvete</div>
        <div class="descricao">Brownie de chocolate branco e preto com sorvete de creme.</div>

        <div class="linha-preco">
            R$ 14,99
            <button class="add-btn" onclick="addItem('Brownie com Sorvete', 14.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Taça de Açaí</div>
        <div class="descricao">Açaí com creme de avelã, paçoca, leite condensado, confete e morango.</div>

        <div class="linha-preco">
            R$ 19,99
            <button class="add-btn" onclick="addItem('Taça de Açaí', 19.99)">Adicionar</button>
        </div>
    </div>

</section>

<!-- ========== CARRINHO ========== -->
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

    let msg = " Olá, gostaria de fazer um pedido: %0A%0A";

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
