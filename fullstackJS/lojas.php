<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Lojas - Full Stack Eletro</title>
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
        <h2>Nossas Lojas</h2>

        <hr>

        <!-- refatorando tabela para section e div -->
        <section class="lojas">
            <!-- Loja 1 -->
            <div class="box_loja">
                <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Vargas, 5000</p>
                <p>10 &ordm; andar</p>
                <p>Centro</p>
                <p>(21) 3333-3333</p>
            </div>

            <!-- Loja 2 -->
            <div class="box_loja">
                <h3>São Paulo</h3>
                <p>Avenida Paulista, 985</p>
                <p>3 &ordm; andar</p>
                <p>Jardins</p>
                <p>(11) 4444-4444</p>
            </div>

            <!-- Loja 3 -->
            <div class="box_loja">
                <h3>Santa Catarina</h3>
                <p>Rua Major &Aacute;vila, 370</p>
                <p>Vila Mariana</p>
                <p>(47) 5555-5555</p>
            </div>
        </section>

    </main>
    <!-- refatorando rodapé php-->
    
    <?php
    include('rodape.html');
    ?>
</body>

</html>