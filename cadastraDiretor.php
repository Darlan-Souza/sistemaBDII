<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';


// Attempt insert query execution
try {
    // Create prepared statement
    $sql = "INSERT INTO diretor (nome_diretor,sobrenome_diretor,email_diretor, data_nasc, rua_diretor, numero, cidade_diretor, estado_diretor) VALUES (:nome_diretor,:sobrenome_diretor,:email_diretor, :data_nasc, :rua_diretor, :numero, :cidade_diretor, :estado_diretor)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':nome_diretor', $_REQUEST['nome_diretor']);
    $stmt->bindParam(':sobrenome_diretor', $_REQUEST['sobrenome_diretor']);
    $stmt->bindParam(':email_diretor', $_REQUEST['email_diretor']);
    $stmt->bindParam(':data_nasc', $_REQUEST['data_nasc']);
    $stmt->bindParam(':rua_diretor', $_REQUEST['rua_diretor']);
    $stmt->bindParam(':numero', $_REQUEST['numero']);
    $stmt->bindParam(':cidade_diretor', $_REQUEST['cidade_diretor']);
    $stmt->bindParam(':estado_diretor', $_REQUEST['estado_diretor']);
    // Execute the prepared statement
    $stmt->execute();
    echo"<script language='javascript' type='text/javascript'>window.location.href='./addDiretor.php';</script>";
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>
