<?php
// index.php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Corretor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h1 class="text-center mb-4">Cadastro de Corretor</h1>

  <?php
  if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-' . $_SESSION['message_type'] . '">' . $_SESSION['message'] . '</div>';
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
  }
  ?>

  <form action="config/processa.php" method="POST">
    <input type="hidden" name="id" id="id">
    <div class="form-row">
      <div class="form-group col-md-4">
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF" maxlength="11" required>
      </div>
      <div class="form-group col-md-4">
        <input type="text" class="form-control" name="creci" id="creci" placeholder="Digite seu Creci" minlength="2" required>
      </div>
      <div class="form-group col-md-4">
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" minlength="2" required>
      </div>
    </div>
    <button type="submit" class="btn btn-dark btn-block" id="submitBtn">Enviar</button>
  </form>

  <h2 class="mt-5">Corretores Cadastrados</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>CRECI</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'config/conexao.php';
      $result = $conn->query("SELECT * FROM corretores");

      while ($row = $result->fetch_assoc()) {
        echo '<tr>
          <td>' . $row['id'] . '</td>
          <td>' . $row['name'] . '</td>
          <td>' . $row['cpf'] . '</td>
          <td>' . $row['creci'] . '</td>
          <td>
            <button class="btn btn-warning btn-sm" onclick="editar(' . $row['id'] . ', \'' . $row['cpf'] . '\', \'' . $row['creci'] . '\', \'' . $row['name'] . '\')">Editar</button>
            <a href="config/excluir.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Tem certeza que deseja excluir?\')">Excluir</a>
          </td>
        </tr>';
      }
      $conn->close();
      ?>
    </tbody>
  </table>
</div>

<script>
  function editar(id, cpf, creci, nome) {
    document.getElementById('id').value = id;
    document.getElementById('cpf').value = cpf;
    document.getElementById('creci').value = creci;
    document.getElementById('nome').value = nome;
    document.getElementById('submitBtn').innerText = "Salvar";
  }
</script>
</body>
</html>