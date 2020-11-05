<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="./js/funcoes.js"></script>
</head>

<body>
    <!-- Menu de navegação -->
    <!-- refatoração da tag table para nav -->
    <!-- refatoraçao do menu usando PHP -->
        
    <?php
    include('menu.html');
    ?>

    <!-- inclusão do main -->
    <main>
        <h2>Seja bem vindo(a)!</h2>
        <p>Aqui em nossa loja,<span class="italico"> programadores tem desconto</span> nos produtos para sua casa!</p>
    </main>

    <!-- refatorando rodapé em php-->
    <?php
    include('rodape.html');
    ?>
</body>

</html>