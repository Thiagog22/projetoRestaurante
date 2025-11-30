<?php 
echo '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Serviços - After Gastrobar</title>

<style>

    /* RESET */
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    body{
        font-family:"Poppins",sans-serif;
        background: radial-gradient(circle at 20% 20%, #1a1a1a, #000),
                    radial-gradient(circle at 80% 80%, #111, #000);
        color:#e0e0e0;
        overflow-x:hidden;
        background-attachment:fixed;
    }

    /* Canvas de partículas */
    #particles-js {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none; /* permite clicar nos elementos acima */
    }

    /* TÍTULO DA PÁGINA */
    .topo{
        text-align:center;
        padding:40px;
        background:#000;
        border-bottom:4px solid #E6A100;
        box-shadow:0 0 20px rgba(230,161,0,0.3);
        animation:fadeIn 1s ease;
        position: relative;
        z-index: 1;
    }

    .topo h1{
        color:#E6A100;
        font-size:40px;
        text-shadow:0 0 10px rgba(230,161,0,0.5);
        letter-spacing:2px;
    }

    .topo p{
        color:#dcdcdc;
        font-size:18px;
    }

    /* SEÇÃO */
    section{
        padding:60px 25px;
        animation:fadeIn 1.5s ease;
        position: relative;
        z-index: 1;
    }

    h2{
        font-size:32px;
        text-align:center;
        margin-bottom:30px;
        color:#E6A100;
        text-shadow:0 0 10px rgba(230,161,0,0.4);
    }

    /* GRID DOS SERVIÇOS */
    .servicos-container{
        display:grid;
        grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));
        gap:30px;
        max-width:1100px;
        margin:auto;
    }

    /* CARD GLASS */
    .card{
        background:rgba(255,255,255,0.05);
        border:1px solid rgba(255,255,255,0.1);
        backdrop-filter:blur(6px);
        padding:25px;
        border-radius:15px;
        box-shadow:0 0 15px rgba(255,255,255,0.05);
        transition:0.3s;
        text-align:center;
    }

    .card:hover{
        transform:translateY(-6px);
        box-shadow:0 0 20px rgba(230,161,0,0.4);
    }

    .card h3{
        color:#E6A100;
        font-size:22px;
        margin-bottom:12px;
    }

    .card p{
        font-size:17px;
        color:#dcdcdc;
        line-height:1.6;
    }

    /* ANIMAÇÃO */
    @keyframes fadeIn{
        0%{opacity:0; transform:translateY(20px);}
        100%{opacity:1; transform:translateY(0);}
    }

    /* BOTÃO WHATSAPP FLUTUANTE */
    .whatsapp-float {
        position: fixed;
        right: 20px;
        bottom: 20px;
        background: #25D366;
        color: white;
        padding: 14px 20px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 18px;
        font-weight: bold;
        text-decoration: none;
        box-shadow: 0 0 15px rgba(37, 211, 102, 0.5);
        transition: .3s;
        z-index: 2;
    }

    .whatsapp-float:hover {
        background: #1ebe5d;
        transform: scale(1.05);
        box-shadow: 0 0 25px rgba(37, 211, 102, 0.9);
    }

    .whatsapp-float img {
        width: 28px;
        height: 28px;
    }

</style>

<!-- particles.js -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

</head>
<body>

<!-- Canvas de partículas -->
<div id="particles-js"></div>

<header class="topo">
    <h1>Nossos Serviços</h1>
    <p>Experiências únicas para uma noite inesquecível</p>
</header>

<section>
    <h2>O que oferecemos</h2>

    <div class="servicos-container">

        <!-- GASTRONOMIA -->
        <div class="card">
            <h3>🍽 Gastronomia Premium</h3>
            <p>Petiscos gourmet, hambúrguer artesanal, porções especiais e pratos exclusivos preparados com ingredientes selecionados.</p>
        </div>

        <!-- DRINKS -->
        <div class="card">
            <h3>🍸 Drinks & Coquetelaria</h3>
            <p>Drinks autorais, coquetéis clássicos, gin personalizado, caipifrutas e apresentações impecáveis criadas por bartenders especializados.</p>
        </div>

        <!-- MÚSICA -->
        <div class="card">
            <h3>🎵 Música & Ambiente</h3>
            <p>Atmosfera moderna com música ao vivo e playlists selecionadas para tornar sua noite ainda mais especial.</p>
        </div>

        <!-- EVENTOS -->
        <div class="card">
            <h3>🎉 Eventos & Comemorações</h3>
            <p>Aniversários, festas privadas, reservas para grupos e eventos especiais com atendimento premium.</p>
        </div>

        <!-- SERVIÇOS ESPECIAIS -->
        <div class="card">
            <h3>⭐ Exclusividades</h3>
            <p>Promoções especiais, comanda individual, reservas antecipadas e um ambiente totalmente instagramável.</p>
        </div>

    </div>
</section>

<a href="https://wa.me/5583999998739" class="whatsapp-float" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" width="28">
    WhatsApp
</a>

<script>
particlesJS("particles-js", {
  "particles": {
    "number": { "value": 60, "density": { "enable": true, "value_area": 800 } },
    "color": { "value": "#E6A100" },
    "shape": { "type": "circle" },
    "opacity": { "value": 0.6, "random": true },
    "size": { "value": 3, "random": true },
    "line_linked": { "enable": true, "distance": 150, "color": "#E6A100", "opacity": 0.4, "width": 1 },
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
</html>
';
?>
