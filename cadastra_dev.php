<?php
require("conecta.php");

//Decidi colocar a validação antes de iniciar o processo, professor:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome           = $_POST['nome'];
  $sobrenome      =  $_POST['sobrenome'];
  $email          = $_POST['email'];
  $devweb         = $_POST['devweb'];
  $senioridade    = isset($_POST['senioridade']) ? $_POST['senioridade'] : null; //$senioridade    = $_POST['senioridade'];
  $experiencia    = $_POST['experiencia'];

  //recebi cada valor em uma variável para utilizar um conceito quase booleano (SN - Sim ou Não)
  $sn_html        = isset($_POST['tecnologia1']) ? 'S' : 'N';
  $sn_css         = isset($_POST['tecnologia2']) ? 'S' : 'N';
  $sn_javascript  = isset($_POST['tecnologia3']) ? 'S' : 'N';
  $sn_php         = isset($_POST['tecnologia4']) ? 'S' : 'N';
  $sn_csharp      = isset($_POST['tecnologia5']) ? 'S' : 'N';
  $sn_python      = isset($_POST['tecnologia6']) ? 'S' : 'N';
  $sn_java        = isset($_POST['tecnologia7']) ? 'S' : 'N';
  $sn_delphi      = isset($_POST['tecnologia8']) ? 'S' : 'N';

  if ($senioridade === null) {
    echo "<h3>Por favor, selecione a senioridade.</h3>";
    echo "<h3> .$senioridade. ";
  } else {
    $sql = "INSERT INTO dev 
        (nome, sobrenome, email, devweb, senioridade, experiencia, sn_html, sn_css, sn_javascript, sn_php, sn_csharp, sn_python, sn_java, sn_delphi)
    VALUES ('$nome', '$sobrenome', '$email', '$devweb', '$senioridade', '$experiencia', '$sn_html', '$sn_css', '$sn_javascript', '$sn_php', '$sn_csharp', '$sn_python', '$sn_java', '$sn_delphi')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
  }
}
