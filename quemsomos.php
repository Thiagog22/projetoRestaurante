<?php  
echo '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>After Gastrobar</title>

    <style>
    /* RESET */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Poppins", Arial, sans-serif;
        background: radial-gradient(circle at 20% 20%, #1a1a1a, #000),
                    radial-gradient(circle at 80% 80%, #111, #000);
        color: #e0e0e0;
        overflow-x: hidden;
        background-attachment: fixed;
        animation: gradientMove 8s ease-in-out infinite alternate;
    }

    @keyframes gradientMove {
        0% { background-position: 0% 0%, 100% 100%; }
        100% { background-position: 100% 100%, 0% 0%; }
    }

    /* CORES */
    :root {
        --dourado: #E6A100;
        --brilho: rgba(230,161,0,0.4);
        --cinza: #dcdcdc;
    }

    /* PARTÍCULAS */
    .particles span {
        position: absolute;
        bottom: -20px;
        background: var(--dourado);
        border-radius: 50%;
        opacity: 0.7;
        animation: subir 6s linear infinite;
    }

    @keyframes subir {
        0% { transform: translateY(0) scale(0.4); }
        100% { transform: translateY(-120vh) scale(1.3); }
    }

    .particles {
        position: fixed;
        width: 100%;
        height: 100%;
        overflow: hidden;
        top: 0;
        left: 0;
        pointer-events: none;
        z-index: 0;
    }

    /* TOPO */
    .topo {
        padding: 40px;
        text-align: center;
        background: linear-gradient(to bottom, #000, #111);
        border-bottom: 4px solid var(--dourado);
        position: relative;
        z-index: 2;
        opacity: 0;
        transform: translateY(-20px);
        animation: fadeInDown 1s forwards;
        animation-delay: 0.3s;
    }

    @keyframes fadeInDown {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .topo h1 {
        font-size: 44px;
        color: var(--dourado);
        letter-spacing: 3px;
        text-shadow: 0 0 10px var(--brilho);
    }

    .topo p {
        color: var(--cinza);
        margin-top: 8px;
        font-size: 18px;
    }

    /* ANIMAÇÃO DE SEÇÃO */
    section {
        padding: 70px 20px;
        position: relative;
        z-index: 2;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s forwards;
    }

    section:nth-of-type(1) { animation-delay: 0.6s; }
    section:nth-of-type(2) { animation-delay: 0.9s; }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* GLASS */
    .glass {
        background: rgba(255,255,255,0.06);
        border-radius: 15px;
        padding: 30px;
        border: 1px solid rgba(255,255,255,0.15);
        box-shadow: 0 0 25px rgba(255,255,255,0.05);
        backdrop-filter: blur(6px);
        max-width: 850px;
        margin: auto;
    }

    .glass p {
        font-size: 19px;
        color: var(--cinza);
        line-height: 1.7;
        margin-bottom: 15px;
        text-align: justify;
    }

    /* RODAPÉ */
    .rodape {
        text-align: center;
        padding: 20px;
        background: #000;
        border-top: 4px solid var(--dourado);
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s forwards;
        animation-delay: 1.2s;
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
<div class="particles">';
for ($i = 0; $i < 50; $i++) {
    $x = rand(0,100);
    $delay = rand(0,500)/100;
    $size = rand(4,7);
    echo "<span style=\"
        left:{$x}%;
        width:{$size}px;
        height:{$size}px;
        animation-delay:{$delay}s;
    \"></span>";
}
echo '</div>

<header class="topo">
    <h1>AFTER GASTROBAR</h1>
    <p>Drinks autorais • Gastronomia • Experiências</p>
</header>

<section class="sobre">
    <h2>Quem Somos</h2>
    <div class="glass">
        <p>
            O <strong>After Gastrobar</strong> nasceu com a proposta de oferecer mais do que um bar: 
            uma experiência completa com drinks autorais, gastronomia criativa e clima sofisticado.
        </p>
        <p>
            Nossa equipe é formada por profissionais apaixonados pelo que fazem: chefs criativos,
             bartenders especializados e atendimento dedicado, sempre focados em proporcionar qualidade e satisfação em cada detalhe.
        </p>
        <p>
            Tudo isso em um ambiente moderno, iluminado e pensado para quem gosta de viver boas noites.
        </p>
    </div>
</section>

<section class="contato">
    <h2>Contato & Localização</h2>
    <div class="glass">
        <p><strong>Endereço:</strong> Rua Antônio de Luna Feire, 205 — Centro, Mari-PB</p>
        <p><strong>Funcionamento:</strong> Todos os dias a partir das 18h</p>
        <p><strong>WhatsApp:</strong> (83) 99999-8739</p>
    </div>
</section>

<footer class="rodape">
    <p>© After Gastrobar — Todos os direitos reservados.</p>
</footer>

<a href="https://wa.me/5583999998739" class="whatsapp-float" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" width="28">
    WhatsApp
</a>

</body>
</html>
';
?>
