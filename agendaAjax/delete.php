<?php
    header('Content-Type: application/json');
    

   
    $id = $_POST['id'];

    $pdo = new PDO('mysql:host=localhost; dbname=bd-agenda;', 'root', '');

    $stmt = $pdo->prepare('DELETE FROM agenda WHERE id = :id ');
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Contato apagado com sucesso');
    } else {
        echo json_encode('Falha ao apagar o contato');
    }