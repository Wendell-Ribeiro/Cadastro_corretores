<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $creci = $_POST['creci'];

    if (strlen($cpf) != 11 || strlen($nome) < 2 || strlen($creci) < 2) {
        $_SESSION['message'] = "Preencha os campos corretamente.";
        $_SESSION['message_type'] = "danger";
        header("Location: ../index.php");
        exit();
    }

    if (!empty($id)) {
        $stmt = $conn->prepare("UPDATE corretores SET name=?, cpf=?, creci=? WHERE id=?");
        $stmt->bind_param("sssi", $nome, $cpf, $creci, $id);
        $stmt->execute();
        $_SESSION['message'] = "Corretor atualizado com sucesso!";
    } else {
        $stmt = $conn->prepare("INSERT INTO corretores (name, cpf, creci) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $cpf, $creci);
        $stmt->execute();
        $_SESSION['message'] = "Corretor cadastrado com sucesso!";
    }

    $_SESSION['message_type'] = "success";
    header("Location: ../index.php");
    exit();
}
?>
