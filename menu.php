<?php
echo '

<style>
    .menu-container {
        background: #000;
        padding: 20px 0 25px;
        text-align: center;
        width: 100%;
        box-shadow: 0 2px 8px rgba(0,0,0,0.3);
    }

    .menu-title {
        font-size: 34px;
        color: #d19d00;
        font-weight: 900;
        margin: 0;
        letter-spacing: 3px;
        text-transform: uppercase;
        position: relative;
        display: inline-block;
        padding-bottom: 8px;
    }

    .menu-title::after {
        content: "";
        width: 70%;
        height: 3px;
        background: #d19d00;
        position: absolute;
        bottom: 0;
        left: 15%;
        border-radius: 5px;
        box-shadow: 0 0 8px #d19d00;
    }

    .menu ul {
        list-style: none;
        padding: 0;
        margin: 15px 0 0 0;
    }

    .menu li {
        display: inline-block;
        margin: 0 20px;
    }

    .menu a {
        text-decoration: none;
        font-size: 18px;
        color: #d19d00;
        font-weight: bold;
        padding: 6px 10px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .menu a:hover {
        background: #d19d00;
        color: #000;
    }
</style>

<div class="menu-container">
    <h2 class="menu-title">Menu</h2>

    <nav class="menu">
        <ul>
            <li><a href="?pg=principal">Home</a></li>
            <li><a href="?pg=quemsomos">Quem somos</a></li>
            <li><a href="?pg=servicos">Serviços</a></li>

        </ul>
    </nav>
</div>

';
?>

