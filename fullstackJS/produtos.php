<?php
// refatorando conexão
    include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <script src="./js/funcoes.js"></script>
</head>

<body>
    <!-- Menu de navegação -->
    <!-- refatoração da tag table para nav -->
    <!-- refatoraçao do menu usando PHP -->

    <?php
    include('menu.html');
    ?>

    <header>
        <h1>Produtos</h1>
    </header>
    <hr>
    <!-- inclusão de classes e ids para acessar eventos -->

    <section class="categorias">
        <h3>Categorias</h3>
        <ul>
            <li onclick="exibirTodos()">Todos</li>
            <li onclick="exibirCategoria('geladeiras')">Geladeiras (3)</li>
            <li onclick="exibirCategoria('fogoes')">Fogões (2)</li>
            <li onclick="exibirCategoria('microondas')"> Microondas (3)</li>
            <li onclick="exibirCategoria('lavadouraderoupas')">Lavadoura de roupas (2)</li>
            <li onclick="exibirCategoria('lavaloucas')">Lava-louças (2)</li>
        </ul>
    </section>

    <section class="produtos">

        <!-- refatorando produtos, esse beto brinca com nosso coração (rs) apagando tudo!! e modificando com um comando do PHP! -->

        <?php

        $sql = "SELECT * FROM produtos";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while ($rows = $resultado->fetch_assoc()) {
               

        ?>

                <div class="box_produto" id="<?php  echo $rows["categoria"]; ?>" style="display: inline-block;">
                    <img src="./<?php  echo $rows["imagem"]; ?>" alt="Geladeira Brastemp 540 litros" onclick="destaque(this)">
                    <br>
                    <p class="descricao"><?php  echo $rows["descricao"]; ?></p>
                    <hr>
                    <p class="precoAnterior"><?php  echo $rows["preco"]; ?></p>
                    <br>
                    <p class="preco"><?php  echo $rows["preco_final"]; ?></p>
                    <br>
                </div>

        <?php
            }
        } else {
            echo "Nenhum produto cadastrado!";
        }
        ?>

    <!-- refatorando rodapé -->
    <?php
    include('rodape.html');
    ?>

</body>

</html>