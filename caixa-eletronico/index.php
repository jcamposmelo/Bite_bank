<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="style.css">
    <link id="favicon" rel="icon" type="image/png" href="./imagens/icons/icon.png">
    <title>BITE BANK</title>
</head>

<body>
    <?php
    include 'sessao.php'
    ?>
    <section id="content">
        <header class="header">
            <img src="./imagens/bite-bank.png" alt="Bite bank logo" id="logo">
        </header>
        <h1>CAIXA ELETRÔNICO</h1>
        <div class="saldo-em-tela">
            <span style="padding-right: 5px;">Saldo em conta: </span><p id="saldo-paragraph" class="p-saldo" style="filter: blur(5px);"><?php echo $saldo; ?>,00</p>
            <button id="eye-icon" onclick="toggleVisibility()">👁️</button>
        </div>
        <div class="form">
            <main role="main">
                <form role="form" action="processar.php" method="get">
                    <div id="saque">
                        <label for="saque">DIGITE O VALOR QUE DESEJA SACAR</label>
                        <br>
                        <input type="text" name="saque" id="caixa_texto" required aria-label="Valor do saque em reais" aria-required="true" placeholder="R$ 0,00" oninput="formatarMoeda(this)">
                    </div>
                    <div class="buttons">
                        <button type="submit" value="sacar" id="sacar" class="button">Sacar</button>
                        <button type="reset" value="limpar" id="limpar" class="button">Limpar</button>
                    </div>
                </form>
                <div id="notas">
                    <h2 id="disponivel">NOTAS DISPONÍVEIS:</h2>
                    <div class="nota-flex">
                        <img class="nota" src="imagens/notas/200-reais.jpg" alt="200 reais">
                        <img class="nota" src="imagens/notas/100-reais.jpg" alt="100 reais">
                        <img class="nota" src="imagens/notas/50-reais.jpg" alt="50 reais">
                        <img class="nota" src="imagens/notas/20-reais.jpg" alt="20 reais">
                        <img class="nota" src="imagens/notas/10-reais.jpg" alt="10 reais">
                        <img class="nota" src="imagens/notas/5-reais.jpg" alt="5 reais">
                        <img class="nota" src="imagens/notas/2-reais.jpg" alt="2 reais">
                    </div>
                </div>
                <form action="resetSaldo.php" method="post" class="reset button">
                    <input type="submit" value="Reiniciar Sessão" />
                </form>
            </main>
        </div>

    </section>
    <script src="main.js"></script>
</body>

</html>