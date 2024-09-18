<?php
require("conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id_dev = $_POST['id_dev'];
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email = $_POST['email'];
  $devweb = $_POST['devweb'];
  $senioridade = $_POST['senioridade'];
  $experiencia = $_POST['experiencia'];
  $sn_html        = isset($_POST['tecnologia1']) ? 'S' : 'N';
  $sn_css         = isset($_POST['tecnologia2']) ? 'S' : 'N';
  $sn_javascript  = isset($_POST['tecnologia3']) ? 'S' : 'N';
  $sn_php         = isset($_POST['tecnologia4']) ? 'S' : 'N';
  $sn_csharp      = isset($_POST['tecnologia5']) ? 'S' : 'N';
  $sn_python      = isset($_POST['tecnologia6']) ? 'S' : 'N';
  $sn_java        = isset($_POST['tecnologia7']) ? 'S' : 'N';
  $sn_delphi      = isset($_POST['tecnologia8']) ? 'S' : 'N';

  // Atualiza os dados no banco
  $sql = "UPDATE dev 
            SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', devweb = '$devweb', senioridade = '$senioridade', experiencia = '$experiencia', HTML = '$sn_html'       
CSS = '$sn_css', Java Script = '$sn_javascript', PHP = '$sn_php', CSHARP = '$sn_csharp', PYTHPON = $sn_python, JAVA = $sn_java  
$sn_delphi     






            WHERE id_dev = $id_dev";

  if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso.";
  } else {
    echo "Erro ao atualizar o registro: " . $conn->error;
  }

  $conn->close();

  // Redireciona de volta para a página da tabela
  header("Location: listar_devs.php");
}
