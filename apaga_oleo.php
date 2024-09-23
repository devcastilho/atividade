<?php
require("conecta.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_oleo = $_POST['id_oleo'];


  // Atualização no banco de dados
  $sql = "delete from estoque_oleos where id_oleo=$id_oleo";

  if ($conn->query($sql) === TRUE) {
    echo "Óleo essencial apagado com sucesso!";
    header("Location: listar.php"); // Redireciona para a listagem
  } else {
    echo "Erro ao excluir: " . $conn->error;
  }

  $conn->close();
} else {
  echo "Método não permitido.";
}
