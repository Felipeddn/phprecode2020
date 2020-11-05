<?php
// refatorando conexão
    include('conexao.php');

    if(isset($_POST['nome']) && isset($_POST['mensagem'])){
        $nome = $_POST['nome'] ;
        $mensagem = $_POST['mensagem'] ;
        
        $sql = "INSERT INTO comentario (nome, mensagem) values ('$nome','$mensagem')";
        $resultado = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Full Stack Eletro</title>
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
        <h2>Contato</h2>
        <hr>

        <!-- refatoração do table para section e div -->
        <section class="contato">
            <div class="box_contato">
                <img src="./imagens/logoemail.png" width="80px" alt="icone de e-mail">
                <p>contato@fullstackeletro.com</p>
            </div>
            <div class="box_contato">
                <img src="./imagens/logowhatapp.png" width="80px" alt="icone de whatsapp">
                <p>(11) 99999-9999</p>
            </div>
        </section>


        <!-- refatorando envio do contato -->
        <section class="comunique">
            <form action="" method="POST">
                <h4>
                    Nome:
                </h4>
                <input name="nome" type="text" width="400px">
                <h4>
                    mensagem:
                </h4>
                <textarea name="mensagem" id="" cols="30" rows="10" width="400px"></textarea>

                <input type="submit" value="Enviar">
            </form>
        </section>
    </main>

    <!-- incluindo mensagem já postadas! -->
    <h2>Comentarios</h2>
    <hr>
    <?php

$sql = "SELECT * FROM comentario";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($rows = $resultado->fetch_assoc()) {
       echo "Data: " , $rows['data']."<br/>";
       echo "Nome: " , $rows['nome']."<br/>";
       echo "Mensagem: " , $rows['mensagem']."<br/>";
       echo "<hr>";
    }
} else {
    echo "Nenhum comentario por aqui!";
}
?>

    <!-- refatorando rodapé php-->
    
    <?php
    include('rodape.html');
    ?>
</body>

</html>