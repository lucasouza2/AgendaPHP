<?php
    header('Content-Type: application/json');
    

    $name = $_POST['name'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];

    $pdo = new PDO('mysql:host=localhost; dbname=bd-agenda;', 'root', '');

    $stmt = $pdo->prepare('UPDATE agenda (nome, telefone, email, endereco) VALUES (:na, :te, :em, :en)');
    $stmt->bindValue(':na', $name);
    $stmt->bindValue(':te', $telefone);
    $stmt->bindValue(':em', $email);
    $stmt->bindValue(':en', $endereco);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Contato salvo com sucesso');
    } else {
        echo json_encode('Falha ao salvar o contato');
    }