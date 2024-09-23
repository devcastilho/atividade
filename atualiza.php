<?php
require("conecta.php");

$id_oleo = $_POST['id_oleo'];
$nome = $_POST['nome'];
$origem = $_POST['origem'];
$raridade = $_POST['raridade'];
$ingestao = $_POST['ingestao'];
$historia = $_POST['historia'];

// Checkbox handling
$nota1    = isset($_POST['nota1']) ? 'Cítricos'    : '';
$nota2    = isset($_POST['nota2']) ? 'Frutadas'    : '';
$nota3    = isset($_POST['nota3']) ? 'Verdes'      : '';
$nota4    = isset($_POST['nota4']) ? 'Florais'     : '';
$nota5    = isset($_POST['nota5']) ? 'Especiarias' : '';
$nota6    = isset($_POST['nota6']) ? 'Frutadas'    : '';
$nota7    = isset($_POST['nota7']) ? 'Amadeiradas' : '';
$nota8    = isset($_POST['nota8']) ? 'Orientais'   : '';
$nota9    = isset($_POST['nota9']) ? 'Musgosas'    : '';


// Atualização no banco de dados
$sql = "UPDATE estoque_oleos SET 
    nome='$nome',
    origem='$origem',
    raridade='$raridade',
    ingestao='$ingestao',
    historia='$historia',
    nota1='$nota1',
    nota2='$nota2',
    nota3='$nota3',
    nota4='$nota4',
    nota5='$nota5',
    nota6='$nota6',
    nota7='$nota7',
    nota8='$nota8',
    nota9='$nota9'
    WHERE id_oleo = $id_oleo";

if ($conn->query($sql) === TRUE) {
  echo "Registro atualizado com sucesso!";
  header("Location: listar.php"); // Redireciona para a página inicial
} else {
  echo "Erro ao atualizar o registro: " . $conn->error;
}

$conn->close();
