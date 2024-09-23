<?php
require("conecta.php");

//Decidi colocar a validação antes de iniciar o processo, professor:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome           = $_POST['nome'];
  $origem         = $_POST['origem'];
  $raridade       = $_POST['raridade'];
  $ingestao       = isset($_POST['ingestao']) ? $_POST['ingestao'] : null; //$ingestao    = $_POST['ingestao'];
  $historia       = $_POST['historia'];


  $nota1    = isset($_POST['nota1']) ? 'Cítricos'    : '';
  $nota2    = isset($_POST['nota2']) ? 'Frutadas'    : '';
  $nota3    = isset($_POST['nota3']) ? 'Verdes'      : '';
  $nota4    = isset($_POST['nota4']) ? 'Florais'     : '';
  $nota5    = isset($_POST['nota5']) ? 'Especiarias' : '';
  $nota6    = isset($_POST['nota6']) ? 'Frutadas'    : '';
  $nota7    = isset($_POST['nota7']) ? 'Amadeiradas' : '';
  $nota8    = isset($_POST['nota8']) ? 'Orientais'   : '';
  $nota9    = isset($_POST['nota9']) ? 'Musgosas'    : '';


  if ($ingestao === null) {
    echo "<h3>Por favor, selecione a instrução sobre ingestao.</h3>"; //Essa validação é por segurança, devido a um bug comum no value
    echo "<h3> .$ingestao. ";
  } else {
    $sql = "INSERT INTO estoque_oleos 
        (nome, origem, raridade, ingestao, historia, nota1, nota2, nota3, nota4, nota5, nota6, nota7, nota8, nota9)
    VALUES
        ('$nome'
        ,'$origem'
        ,'$raridade'
        ,'$ingestao'
        ,'$historia'
        ,'$nota1'
        ,'$nota2'
        ,'$nota3'
        ,'$nota4'
        ,'$nota5'
        ,'$nota6'
        ,'$nota7'
        ,'$nota8'
        ,'$nota9')";

    if ($conn->query($sql) === TRUE) {
      echo '<script>
              alert("Óleo cadastrado com sucesso!");
              window.location.href = "index.html";
            </script>';
    } else {
      echo '<script>
              alert ("OCORREU UM ERRO: ' . $sql . "<br>" . $conn->error .
        '</script>';
    }
  }
}
