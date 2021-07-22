<?php

    try {

        // conexão com o banco de dados

        // variáveis de configuração
        $dns = "mysql:host=localhost;";
        $user = "root";

        // conexão (PDO)
        $conn = new PDO($dns, $user, '');

        // query para criar a database caso não exista
        $query = "CREATE DATABASE IF NOT EXISTS sistema_tasks";

        // novas configurações de database
        $dns = "mysql:host=localhost;dbname=sistema_tasks";

        $conn = null;

        $conn = new PDO($dns, $user, '');

        // criação da tabela tasks caso não exista
        $query = "CREATE TABLE IF NOT EXISTS tasks (
            id INT(50) AUTO_INCREMENT NOT NULL,
            nome VARCHAR(200) NOT NULL,
            descricao VARCHAR(400) NOT NULL,
            data_de_conclusao DATE NOT NULL,
            concluida VARCHAR(30) NOT NULL,
            PRIMARY KEY (id)
        );";

        $conn -> exec($query);

    } catch(PDOException $error) {
        echo "Encontramos um erro, contate o desenvolvedor.<br>";
        echo "Número do erro: " . $error -> getCode() . " | Erro: " . $error -> getMessage();
    }

?>
