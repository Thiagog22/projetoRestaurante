<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Gastrobar | Drinks Autorais & Gastronomia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* ANIMAÇÃO AO ABRIR */
        body {
            opacity: 0;
            animation: fadeIn 1.2s ease-in-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* CONFIGURAÇÕES GLOBAIS */
        :root {
            --cor-primaria: #000;
            --cor-secundaria: #111;
            --cor-destaque: #E6A100;
            --cor-texto-claro: #e0e0e0;
            --cor-texto-cinza: #dcdcdc;
            --sombra-destaque: rgba(230, 161, 0, 0.4);
            --sombra-escura: rgba(0, 0, 0, 0.28);
            --blur-medio: blur(6px);
            --blur-suave: blur(5px);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(#111, #000);
            color: var(--cor-texto-claro);
            overflow-x: hidden;
        }

        /* CANVAS DE PARTÍCULAS */
        #particles {
            position: fixed;
            inset: 0;
            z-index: -1;
            pointer-events: none;
        }

        /* HEADER */
        .topo {
            padding: 30px;
            text-align: center;
        }
        .topo h1 {
            color: var(--cor-destaque);
            font-size: 42px;
            text-shadow: 0 0 15px rgba(230, 161, 0, 0.7);
        }
        .topo p {
            color: var(--cor-texto-cinza);
            font-size: 18px;
        }

        /* BANNER */
        .banner {
            background: url("gastrobar.jpg") center/cover no-repeat;
            height: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
         /* remove o escurecimento da imagem */
        .banner::after {
            content:"";
            position:absolute;
            inset:0;
            background: none !important;
        }

        .banner-text {
            position: relative;
            z-index: 2;
            background: rgba(0,0,0,0.35);
            padding: 25px 45px;
            border-radius: 15px;
            backdrop-filter: var(--blur-medio);

            /* GLOW no lugar da borda */
            box-shadow: 0 0 18px rgba(230, 161, 0, 0.8);
        }
        .banner-text h2 {
            color: var(--cor-destaque);
            font-size: 34px;
            text-shadow: 0 0 12px rgba(230, 161, 0, 0.6);
        }

        /* GLASS */
        .glass {
            max-width: 800px;
            margin: 40px auto;
            background: rgba(255,255,255,0.05);
            padding: 25px;
            border-radius: 15px;
            backdrop-filter: var(--blur-suave);
            box-shadow: 0 0 16px rgba(230, 161, 0, 0.35);
        }

        /* TITULOS */
        h2 {
            color: var(--cor-destaque);
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
            text-shadow: 0 0 12px rgba(230, 161, 0, 0.6);
        }

        /* BOTÃO */
        .btn {
            display: inline-block;
            margin-top: 12px;
            padding: 12px 22px;
            background: var(--cor-destaque);
            color: #000;
            font-weight: bold;
            text-decoration: none;
            border-radius: 6px;
            box-shadow: 0 0 12px rgba(230, 161, 0, 0.9);
            transition: 0.2s ease;
        }
        .btn:hover {
            box-shadow: 0 0 22px rgba(230, 161, 0, 1);
        }

        /* === CARROSSEL FAVORITOS === */
        .carrossel-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }

        .carrossel {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 15px;
            scrollbar-width: none;
        }
        .carrossel::-webkit-scrollbar { display: none; }

        .card {
            min-width: 260px;
            height: 330px;
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            box-shadow: 0 0 18px rgba(230, 161, 0, 0.55);
            position: relative;
        }
        .card h3 {
            position: absolute;
            bottom: 15px;
            left: 15px;
            color: #fff;
            text-shadow: 0 0 10px #000;
        }

        .seta {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: var(--cor-destaque);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: none;
            font-size: 22px;
            cursor: pointer;
            font-weight: bold;
            z-index: 10;
        }
        .esquerda { left: -10px; }
        .direita { right: -10px; }

        /* === CARROSSEL FOTOS === */
        .fotos-carousel-wrapper {
            position: relative;
            max-width: 1100px;
            margin: 0 auto;
        }
        .fotos-carousel {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            scrollbar-width: none;
            padding: 15px;
        }
        .fotos-carousel::-webkit-scrollbar { display: none; }

        .foto-card {
            min-width: 280px;
            height: 350px;
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            box-shadow: 0 0 18px rgba(230, 161, 0, 0.55);
        }

        .foto-arrow {
            position:absolute;
            top:50%;
            transform:translateY(-50%);
            background: var(--cor-destaque);
            border:none;
            width:45px;
            height:45px;
            border-radius:50%;
            font-size:22px;
            cursor:pointer;
            font-weight:bold;
            z-index: 10;
        }
        .foto-left { left:-10px; }
        .foto-right { right:-10px; }

        /* RODAPÉ */
        .rodape {
            padding: 20px;
            text-align:center;
            box-shadow: 0 -4px 14px rgba(230, 161, 0, 0.45);
        }

        /* WHATSAPP FIXO */
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
            z-index: 9999;
        }

        .whatsapp-float:hover {
            transform: scale(1.06);
            background: #1ebe5d;
        }
    </style>
</head>
<body>

<!-- PARTÍCULAS -->
<canvas id="particles"></canvas>

<header class="topo">
    <h1>AFTER GASTROBAR</h1>
    <p>Drinks autorais • Gastronomia • Música</p>
</header>

<!-- BANNER -->
</section>

<!-- SOBRE -->
<section class="sobre">
    <div class="glass">
        <h2>Bem-vindo ao After Gastrobar</h2>
        <p>O After Gastrobar nasceu para ser o ponto de encontro perfeito...</p>
    </div>
</section>

<!-- FAVORITOS -->
<section>
    <h2>Faça seu pedido</h2>

    <div class="carrossel-container">
        <button class="seta esquerda" onclick="scrollCarrossel(-300)">&#10094;</button>
        <button class="seta direita" onclick="scrollCarrossel(300)">&#10095;</button>

       <div class="carrossel" id="carrossel">

    <a href="hamburguer.php" class="card" 
       style="background-image:url('https://static.itdg.com.br/images/auto-auto/6a173180b197546dc7937ede8f1c0a12/shutterstock-1710468256.jpg');">
        <h3>Hambúrgueres</h3>
    </a>

    <a href="pizzas.php" class="card" 
       style="background-image:url('https://wallpapers.com/images/hd/pizza-pictures-bfwkt0ti6ej1wus4.jpg');">
        <h3>Pizza</h3>
    </a>

    <a href="petiscos.php" class="card" 
       style="background-image:url('https://www.receiteria.com.br/wp-content/uploads/receitas-de-petiscos-de-boteco-4.jpg');">
        <h3>Petiscos</h3>
    </a>

    <a href="bebidas.php" class="card" 
       style="background-image:url('https://rezenha.ze.delivery/wp-content/uploads/2025/02/drinks-com-energetico.webp');">
        <h3>Bebidas</h3>
    </a>

    <a href="pratos.php" class="card" 
       style="background-image:url('https://www.elhombre.com.br/wp-content/uploads/2023/03/Classic-Lasagna-14-scaled-1-1400x841.jpg');">
        <h3>Pratos</h3>
    </a>

</div>
    </div> 
</section>

<!-- FOTOS -->
<section id="fotos">
    <h2>Fotos</h2>

    <div class="fotos-carousel-wrapper">

        <button class="foto-arrow foto-left" onclick="scrollFotos(-300)">&#10094;</button>

        <div class="fotos-carousel" id="carousel-fotos">
            <div class="foto-card" style="background-image:url('img/bar.jpg');"></div>
            <div class="foto-card" style="background-image:url('img/letreiro.jpg');"></div>
            <div class="foto-card" style="background-image:url('img/drinks.jpg');"></div>
            <div class="foto-card" style="background-image:url('img/frente.jpg');"></div>
            <div class="foto-card" style="background-image:url('img/hamburguer.jpg');"></div>
            <div class="foto-card" style="background-image:url('img/logogastrobar.jpg');"></div>
        </div>

        <button class="foto-arrow foto-right" onclick="scrollFotos(300)">&#10095;</button>

    </div>
</section>

<!-- CONTATO -->
<section id="contato">
    <div class="glass">
        <h2>Contato & Localização</h2>
        <p>Rua Antônio de Luna Freire, 205 — Centro — Mari-PB</p>
    </div>
</section>

<a href="https://wa.me/5583999998739" class="whatsapp-float" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" width="28">
    WhatsApp
</a>

<footer class="rodape">
    <p>© 2025 After Gastrobar.</p>
</footer>

<!-- JS -->
<script>

function scrollCarrossel(valor) {
    document.getElementById("carrossel").scrollBy({
        left: valor,
        behavior: "smooth"
    });
}

function scrollFotos(valor) {
    document.getElementById("carousel-fotos").scrollBy({
        left: valor,
        behavior: "smooth"
    });
}

/* === PARTÍCULAS DOURADAS === */

const canvas = document.getElementById('particles');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particlesArray = [];

window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});

class Particle {
    constructor() {
        this.x = Math.random() * canvas.width;
        this.y = canvas.height + Math.random() * 100;
        this.size = Math.random() * 3 + 1;
        this.speedY = Math.random() * 1 + 0.5;
        this.speedX = (Math.random() - 0.5) * 0.3;
        this.color = "rgba(255, 215, 0, " + (Math.random() * 0.5 + 0.3) + ")";
    }
    update() {
        this.y -= this.speedY;
        this.x += this.speedX;
        if (this.y < -10) {
            this.y = canvas.height + Math.random() * 50;
            this.x = Math.random() * canvas.width;
        }
    }
    draw() {
        ctx.fillStyle = this.color;
        ctx.shadowColor = "gold";
        ctx.shadowBlur = 8;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
        ctx.shadowBlur = 0;
    }
}

function initParticles() {
    particlesArray = [];
    for (let i = 0; i < 120; i++) {
        particlesArray.push(new Particle());
    }
}
initParticles();

function animateParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    particlesArray.forEach(p => {
        p.update();
        p.draw();
    });
    requestAnimationFrame(animateParticles);
}

animateParticles();

</script>

</body>
</html>
