<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cardápio - Hambúrgueres After Gastrobar</title>

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

    .descricao {
        font-size: 15px;
        color: #ccc;
        margin: 5px 0;
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
    }
</style>
</head>

<body>

<header>
    <h1>HAMBÚRGUERES</h1>
</header>

<!-- INDIVIDUAIS -->
<section class="categoria">
    <h2>Individuais</h2>
    <a href="javascript:history.back()" class="btn-voltar">← Voltar</a>



    <div class="item">
        <div class="nome">Smash Muçarela</div>
        <div class="descricao">Blend 50g, muçarela e molho especial</div>
        <div class="linha-preco">R$ 11,99 
            <button class="add-btn" onclick="addItem('Smash Muçarela', 11.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Smash Cheddar</div>
        <div class="descricao">Blend 50g, cheddar e molho especial</div>
        <div class="linha-preco">R$ 11,99 
            <button class="add-btn" onclick="addItem('Smash Cheddar', 11.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Smash Bacon</div>
        <div class="descricao">Blend 50g, cheddar, bacon e molho especial</div>
        <div class="linha-preco">R$ 15,99 
            <button class="add-btn" onclick="addItem('Smash Bacon', 15.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Cheddar</div>
        <div class="descricao">Blend 90g, cheddar e molho especial</div>
        <div class="linha-preco">R$ 17,99 
            <button class="add-btn" onclick="addItem('Cheddar', 17.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Stick</div>
        <div class="descricao">Frango empanado, cheddar e molho especial</div>
        <div class="linha-preco">R$ 17,99 
            <button class="add-btn" onclick="addItem('Stick', 17.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Bacon</div>
        <div class="descricao">Blend 90g, cheddar, bacon e molho especial</div>
        <div class="linha-preco">R$ 17,99 
            <button class="add-btn" onclick="addItem('Bacon', 17.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">After</div>
        <div class="descricao">Blend 50g, muçarela, bacon, cebola caramelizada e molho especial</div>
        <div class="linha-preco">R$ 18,99 
            <button class="add-btn" onclick="addItem('After', 18.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Barbecue</div>
        <div class="descricao">Blend 50g, muçarela, barbecue e molho especial</div>
        <div class="linha-preco">R$ 17,99 
            <button class="add-btn" onclick="addItem('Barbecue', 17.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Egg</div>
        <div class="descricao">Blend 50g, muçarela, ovo e molho especial</div>
        <div class="linha-preco">R$ 18,99 
            <button class="add-btn" onclick="addItem('Egg', 18.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Queijo do Reino</div>
        <div class="descricao">Blend 50g, muçarela, queijo do reino e molho especial</div>
        <div class="linha-preco">R$ 18,99 
            <button class="add-btn" onclick="addItem('Queijo do Reino', 18.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Frango Desfiado</div>
        <div class="descricao">Frango desfiado, muçarela e molho especial</div>
        <div class="linha-preco">R$ 17,99 
            <button class="add-btn" onclick="addItem('Frango Desfiado', 17.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Carne de Sol Desfiada ao Barbecue</div>
        <div class="descricao">Carne de sol, muçarela, barbecue e molho especial</div>
        <div class="linha-preco">R$ 18,99 
            <button class="add-btn" onclick="addItem('Carne de Sol Desfiada ao Barbecue', 18.99)">Adicionar</button>
        </div>
    </div>

</section>

<!-- COMBOS -->
<section class="categoria">
    <h2>Combos</h2>

    <div class="item">
        <div class="nome">Combo Smash Cheddar</div>
        <div class="descricao">Hambúrguer, batata frita e refri 350ml</div>
        <div class="linha-preco">R$ 22,99
            <button class="add-btn" onclick="addItem('Combo Smash Cheddar', 22.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Combo Smash Muçarela</div>
        <div class="descricao">Hambúrguer, batata frita e refri 350ml</div>
        <div class="linha-preco">R$ 22,99
            <button class="add-btn" onclick="addItem('Combo Smash Muçarela', 22.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Combo Smash Bacon</div>
        <div class="descricao">Hambúrguer, batata frita e refri 350ml</div>
        <div class="linha-preco">R$ 28,99
            <button class="add-btn" onclick="addItem('Combo Smash Bacon', 28.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Combo Cheddar</div>
        <div class="descricao">Hambúrguer, batata frita e refri 350ml</div>
        <div class="linha-preco">R$ 30,99
            <button class="add-btn" onclick="addItem('Combo Cheddar', 30.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Combo Bacon</div>
        <div class="descricao">Hambúrguer, batata frita e refri 350ml</div>
        <div class="linha-preco">R$ 30,99
            <button class="add-btn" onclick="addItem('Combo Bacon', 30.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Combo After</div>
        <div class="descricao">Hambúrguer, batata frita e refri 350ml</div>
        <div class="linha-preco">R$ 31,99
            <button class="add-btn" onclick="addItem('Combo After', 31.99)">Adicionar</button>
        </div>
    </div>

</section>

<!-- DOCES -->
<section class="categoria">
    <h2>Doces</h2>

    <div class="item">
        <div class="nome">Banoffee</div>
        <div class="descricao">Banana, massa assada, queijo e doce de leite</div>
        <div class="linha-preco">R$ 14,99
            <button class="add-btn" onclick="addItem('Banoffee', 14.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Brigadeiro com Morango</div>
        <div class="descricao">Brigadeiro cremoso e morango</div>
        <div class="linha-preco">R$ 14,99
            <button class="add-btn" onclick="addItem('Brigadeiro com Morango', 14.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Romeu & Julieta</div>
        <div class="descricao">Goiabada e queijo</div>
        <div class="linha-preco">R$ 13,99
            <button class="add-btn" onclick="addItem('Romeu & Julieta (Doce)', 13.99)">Adicionar</button>
        </div>
    </div>

    <div class="item">
        <div class="nome">Confete</div>
        <div class="descricao">Brigadeiro cremoso e confete</div>
        <div class="linha-preco">R$ 13,99
            <button class="add-btn" onclick="addItem('Confete (Doce)', 13.99)">Adicionar</button>
        </div>
    </div>

</section>

<!-- CARRINHO -->
<div id="carrinho">
    <h3>Seu Pedido</h3>
    <ul id="listaCarrinho"></ul>
    <p><strong>Total: R$ <span id="totalPedido">0.00</span></strong></p>
    <button onclick="enviarWhatsApp()">Enviar para WhatsApp</button>
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
    const lista = document.getElementById("listaCarrinho");
    lista.innerHTML = "";

    carrinho.forEach(item => {
        const li = document.createElement("li");
        li.textContent = `${item.nome} - R$ ${item.preco.toFixed(2)}`;
        lista.appendChild(li);
    });

    document.getElementById("totalPedido").innerText = total.toFixed(2);
}

function enviarWhatsApp() {
    let msg = "Olá! Gostaria de fazer um pedido:%0A%0A";

    carrinho.forEach(item => {
        msg += `• ${item.nome} - R$ ${item.preco.toFixed(2)}%0A`;
    });

    msg += `%0ATotal: R$ ${total.toFixed(2)}%0A`;

    const telefone = "5583993111129";
    const url = `https://wa.me/${telefone}?text=${msg}`;

    window.open(url);
}
</script>

</body>
</html>s
