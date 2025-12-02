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
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    }

    .categoria h2 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 32px;
        letter-spacing: 2px;
    }

    .item {
        border-bottom: 1px solid #444;
        padding: 15px 0;
    }

    .item .nome {
        font-size: 20px;
        font-weight: bold;
    }

    .precos {
        margin-top: 8px;
        display: flex;
        gap: 20px;
    }

    .precos div {
        display: flex;
        align-items: center;
        gap: 8px;
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

        .remover-btn {
    background: red;
    color: white;
    border: none;
    margin-left: 10px;
    padding: 3px 8px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.remover-btn:hover {
    background: darkred;
}

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
    <h1>PIZZAS</h1>
</header>

<a href="javascript:history.back()" class="btn-voltar">< Voltar</a>

<section class="categoria">
    <h2>SALGADAS</h2>

    <div class="item">
        <div class="nome">Muçarela</div>
        <div class="precos">
            <div>M: R$ 34,99 <button class="add-btn" onclick="addItem('Pizza Muçarela - M', 34.99)">Adicionar</button></div>
            <div>G: R$ 44,99 <button class="add-btn" onclick="addItem('Pizza Muçarela - G', 44.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Frango com Catupiry</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Frango com Catupiry - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Frango com Catupiry - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Frango com Cheddar</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Frango com Cheddar - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Frango com Cheddar - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Frango com Milho</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Frango com Milho - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Frango com Milho - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Frango com Cream Cheese</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Frango com Cream Cheese - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Frango com Cream Cheese - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Carne de Sol com Catupiry</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Carne de Sol com Catupiry - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Carne de Sol com Catupiry - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Calabresa</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Calabresa - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Calabresa - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Calabresa com Cheddar</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Calabresa com Cheddar - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Calabresa com Cheddar - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Moda do Chefe</div>
        <div class="precos">
            <div>M: R$ 39,99 <button class="add-btn" onclick="addItem('Moda do Chefe - M', 39.99)">Adicionar</button></div>
            <div>G: R$ 54,99 <button class="add-btn" onclick="addItem('Moda do Chefe - G', 54.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Portuguesa</div>
        <div class="precos">
            <div>M: R$ 39,99 <button class="add-btn" onclick="addItem('Portuguesa - M', 39.99)">Adicionar</button></div>
            <div>G: R$ 54,99 <button class="add-btn" onclick="addItem('Portuguesa - G', 54.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Filé de Carne com Gorgonzola</div>
        <div class="precos">
            <div>M: R$ 39,99 <button class="add-btn" onclick="addItem('Filé de Carne com Gorgonzola - M', 39.99)">Adicionar</button></div>
            <div>G: R$ 54,99 <button class="add-btn" onclick="addItem('Filé de Carne com Gorgonzola - G', 54.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Lombinho Canadense</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Lombinho Canadense - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Lombinho Canadense - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Sertaneja</div>
        <div class="precos">
            <div>M: R$ 39,99 <button class="add-btn" onclick="addItem('Sertaneja - M', 39.99)">Adicionar</button></div>
            <div>G: R$ 54,99 <button class="add-btn" onclick="addItem('Sertaneja - G', 54.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">4 Queijos</div>
        <div class="precos">
            <div>M: R$ 42,99 <button class="add-btn" onclick="addItem('4 Queijos - M', 42.99)">Adicionar</button></div>
            <div>G: R$ 54,99 <button class="add-btn" onclick="addItem('4 Queijos - G', 54.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Camarão com Cream Cheese</div>
        <div class="precos">
            <div>M: R$ 49,99 <button class="add-btn" onclick="addItem('Camarão com Cream Cheese - M', 49.99)">Adicionar</button></div>
            <div>G: R$ 64,99 <button class="add-btn" onclick="addItem('Camarão com Cream Cheese - G', 64.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Camarão com Queijo do Reino</div>
        <div class="precos">
            <div>M: R$ 42,99 <button class="add-btn" onclick="addItem('Camarão com Queijo do Reino - M', 42.99)">Adicionar</button></div>
            <div>G: R$ 54,99 <button class="add-btn" onclick="addItem('Camarão com Queijo do Reino - G', 54.99)">Adicionar</button></div>
        </div>
    </div>

</section>

<!-- DOCES -->
<section class="categoria">
    <h2>DOCES</h2>

    <div class="item">
        <div class="nome">Brigadeiro</div>
        <div class="precos">
            <div>M: R$ 36,99 <button class="add-btn" onclick="addItem('Brigadeiro - M', 36.99)">Adicionar</button></div>
            <div>G: R$ 47,99 <button class="add-btn" onclick="addItem('Brigadeiro - G', 47.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Brigadeiro com Morango</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Brigadeiro com Morango - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Brigadeiro com Morango - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Romeu & Julieta</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Romeu & Julieta - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Romeu & Julieta - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Chocolate Preto</div>
        <div class="precos">
            <div>M: R$ 36,99 <button class="add-btn" onclick="addItem('Chocolate Preto - M', 36.99)">Adicionar</button></div>
            <div>G: R$ 47,99 <button class="add-btn" onclick="addItem('Chocolate Preto - G', 47.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Chocolate Branco</div>
        <div class="precos">
            <div>M: R$ 36,99 <button class="add-btn" onclick="addItem('Chocolate Branco - M', 36.99)">Adicionar</button></div>
            <div>G: R$ 47,99 <button class="add-btn" onclick="addItem('Chocolate Branco - G', 47.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Dois Amores</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Dois Amores - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Dois Amores - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Confete</div>
        <div class="precos">
            <div>M: R$ 36,99 <button class="add-btn" onclick="addItem('Confete - M', 36.99)">Adicionar</button></div>
            <div>G: R$ 47,99 <button class="add-btn" onclick="addItem('Confete - G', 47.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Prestígio</div>
        <div class="precos">
            <div>M: R$ 36,99 <button class="add-btn" onclick="addItem('Prestígio - M', 36.99)">Adicionar</button></div>
            <div>G: R$ 47,99 <button class="add-btn" onclick="addItem('Prestígio - G', 47.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Banana Flambada</div>
        <div class="precos">
            <div>M: R$ 37,99 <button class="add-btn" onclick="addItem('Banana Flambada - M', 37.99)">Adicionar</button></div>
            <div>G: R$ 49,99 <button class="add-btn" onclick="addItem('Banana Flambada - G', 49.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Morango com Leite Ninho</div>
        <div class="precos">
            <div>M: R$ 42,99 <button class="add-btn" onclick="addItem('Morango com Leite Ninho - M', 42.99)">Adicionar</button></div>
            <div>G: R$ 54,99 <button class="add-btn" onclick="addItem('Morango com Leite Ninho - G', 54.99)">Adicionar</button></div>
        </div>
    </div>

    <div class="item">
        <div class="nome">Nutella</div>
        <div class="precos">
            <div>M: R$ 42,99 <button class="add-btn" onclick="addItem('Nutella - M', 42.99)">Adicionar</button></div>
            <div>G: R$ 54,99 <button class="add-btn" onclick="addItem('Nutella - G', 54.99)">Adicionar</button></div>
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

