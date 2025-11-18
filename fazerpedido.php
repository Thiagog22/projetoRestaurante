<?php  
echo '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Faça Seu Pedido</title>

    <style>
        body {
            margin: 0;
            font-family: "Poppins", Arial, sans-serif;
            background: #0e0e0e;
            color: #fff;
            overflow-x: hidden;
        }

        /* Canvas de partículas */
        #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        .pedido-section {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 50px auto;
            background: #1a1a1a;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.6);
            text-align: center;
            opacity: 0;
            transform: translateY(50px);
            animation: sectionFadeIn 1s forwards;
            animation-delay: 0.3s;
        }

        @keyframes sectionFadeIn {
            to { opacity: 1; transform: translateY(0); }
        }

        .pedido-title {
            font-size: 36px;
            color: #d19d00;
            font-weight: 900;
            margin-bottom: 10px;
            letter-spacing: 2px;
            opacity: 0;
            transform: translateX(-50px);
            animation: fadeInSlide 0.8s forwards;
            animation-delay: 0.5s;
        }

        .pedido-sub {
            font-size: 18px;
            color: #ccc;
            margin-bottom: 30px;
            opacity: 0;
            transform: translateX(50px);
            animation: fadeInSlide 0.8s forwards;
            animation-delay: 0.7s;
        }

        form {
            text-align: left;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 18px;
            opacity: 0;
            transform: translateX(-30px);
            animation: fadeInSlide 0.6s forwards;
        }

        input[type=text], input[type=number], textarea, select {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border-radius: 6px;
            border: none;
            background: #2b2b2b;
            color: #fff;
            font-size: 16px;
            opacity: 0;
            transform: translateX(30px);
            animation: fadeInSlide 0.6s forwards;
        }

        textarea { height: 120px; resize: none; }

        .btn-pedido {
            background: #d19d00;
            color: #000;
            padding: 14px 20px;
            margin-top: 25px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 20px;
            font-weight: bold;
            border-radius: 6px;
            transition: 0.3s;
            opacity: 0;
            transform: scale(0.8);
            animation: fadeInScale 0.6s forwards;
            animation-delay: 2s;
        }

        .btn-pedido:hover {
            background: #b38700;
        }

        .whatsapp-float {
            position: fixed;
            right: 20px;
            bottom: 20px;
            background: #25D366;
            color: white;
            padding: 14px 22px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 0 15px rgba(37, 211, 102, 0.7);
            transition: 0.3s;
            z-index: 2;
        }

        .whatsapp-float:hover {
            transform: scale(1.06);
            background: #1ebe5d;
        }

        /* ANIMAÇÕES */
        @keyframes fadeInSlide {
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes fadeInScale {
            to { opacity: 1; transform: scale(1); }
        }

        /* Delay sequencial para inputs */
        form label:nth-of-type(1), form input[name="nome"] { animation-delay: 0.9s; }
        form label:nth-of-type(2), form input[name="telefone"] { animation-delay: 1.1s; }
        form h3:nth-of-type(1) { animation-delay: 1.3s; opacity: 0; transform: translateY(20px); animation: fadeInSlide 0.6s forwards; }
        form label:nth-of-type(3), form input[name="bairro"] { animation-delay: 1.5s; }
        form label:nth-of-type(4), form input[name="rua"] { animation-delay: 1.7s; }
        form label:nth-of-type(5), form input[name="numero"] { animation-delay: 1.9s; }
        form label:nth-of-type(6), form input[name="referencia"] { animation-delay: 2.1s; }
        form h3:nth-of-type(2) { animation-delay: 2.3s; opacity: 0; transform: translateY(20px); animation: fadeInSlide 0.6s forwards; }
        form label:nth-of-type(7), form input[name="item"] { animation-delay: 2.5s; }
        form label:nth-of-type(8), form input[name="qtd"] { animation-delay: 2.7s; }
        form label:nth-of-type(9), form textarea[name="obs"] { animation-delay: 2.9s; }

    </style>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body>

<div id="particles-js"></div>

<section class="pedido-section">
    <h1 class="pedido-title">Faça Seu Pedido</h1>
    <p class="pedido-sub">Preencha seus dados e envie seu pedido diretamente para nossa equipe.</p>

    <form action="?pg=enviar-pedido" method="post">
        <label>Seu Nome:</label>
        <input type="text" name="nome" required>

        <label>Telefone/WhatsApp:</label>
        <input type="text" name="telefone" placeholder="(00) 00000-0000" required>

        <h3 style="color:#d19d00; margin-top:25px;">Endereço para Entrega</h3>

        <label>Bairro:</label>
        <input type="text" name="bairro" placeholder="Ex: Centro, Pasto Novo..." required>

        <label>Rua:</label>
        <input type="text" name="rua" placeholder="Ex: Rua Antônio de Luna..." required>

        <label>Número:</label>
        <input type="text" name="numero" placeholder="Ex: 205" required>

        <label>Ponto de Referência:</label>
        <input type="text" name="referencia" placeholder="Ex: Próximo à praça, casa azul..." required>

        <h3 style="color:#d19d00; margin-top:25px;">Pedidos</h3>

        <label>Escolha o Item:</label>
        <input type="text" name="item" placeholder="Ex: X-Burger, Caipirinha, Batata..." required>

        <label>Quantidade:</label>
        <input type="number" name="qtd" min="1" max="20" required>

        <label>Observações:</label>
        <textarea name="obs" placeholder="Ex: Tirar cebola, mais gelo, ponto da carne..."></textarea>

        <button type="submit" class="btn-pedido">Enviar Pedido</button>
    </form>
</section>

<a href="https://wa.me/5583999998739" class="whatsapp-float" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" width="28">
    WhatsApp
</a>

<script>
particlesJS("particles-js", {
  "particles": {
    "number": { "value": 60, "density": { "enable": true, "value_area": 800 } },
    "color": { "value": "#d19d00" },
    "shape": { "type": "circle" },
    "opacity": { "value": 0.6, "random": true },
    "size": { "value": 3, "random": true },
    "line_linked": { "enable": true, "distance": 150, "color": "#d19d00", "opacity": 0.4, "width": 1 },
    "move": { "enable": true, "speed": 2, "direction": "none", "random": false, "straight": false, "out_mode": "out" }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": { "enable": true, "mode": "grab" },
      "onclick": { "enable": true, "mode": "push" }
    },
    "modes": {
      "grab": { "distance": 140, "line_linked": { "opacity": 0.5 } },
      "push": { "particles_nb": 4 }
    }
  },
  "retina_detect": true
});
</script>

</body>
</html>';
?>
