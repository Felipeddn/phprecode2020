<?php
        $conn = mysqli_connect('localhost:3306', 'conectarphp', 'recodepro2020', 'fseletro');

        if (!$conn) {
            die('a conexão ao bd falho: ' . mysqli_connect_error());
        } else {
            // echo "conectou";
        }
?>