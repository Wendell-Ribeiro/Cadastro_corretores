<?php

include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM corretores WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['message'] = "Registro excluído com sucesso!";
        $_SESSION['message_type'] = "success";
    } else {
        session_start();
        $_SESSION['message'] = "Erro ao excluir.";
        $_SESSION['message_type'] = "danger";
    }

    header("Location: ../index.php");
    exit();
}
?>
