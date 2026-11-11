<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Ação</title>
</head>
<body>
    <h1>Explorando a Casa...</h1>

    <h2>Número sorteado: <?php echo $resultado['numero']; ?></h2>
    <p><?php echo $resultado['texto']; ?></p>

    
    <a href="?rota=explorar">Vasculhar outro cômodo</a>
    <br><br>

    <a href="?rota=inicio">Voltar ao início</a>
</body>
</html>