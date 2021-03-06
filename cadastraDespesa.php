<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';

// Attempt insert query execution
try {
    // Create prepared statement
    $sql = "INSERT INTO despesa(id_diretor, nome_despesa, valor_despesa) VALUES (:id_diretor, :nome_despesa, :valor_despesa)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':id_diretor', $_REQUEST['id_diretor']);
    $stmt->bindParam(':nome_despesa', $_REQUEST['nome_despesa']);
    $stmt->bindParam(':valor_despesa', $_REQUEST['valor_despesa']);
    // Execute the prepared statement
    $stmt->execute();
    echo"<script language='javascript' type='text/javascript'>window.location.href='./addDespesa.php';</script>";
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>

