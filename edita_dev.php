<?php
require("conecta.php");

// Consulta os dados do desenvolvedor pelo ID
$sql = "SELECT * FROM dev WHERE id_dev = $id_dev";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
?>
  <form method="POST" action="atualiza_dev.php">
    <input type="hidden" name="id_dev" value="<?php echo $id_dev; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br>
    Sobrenome: <input type="text" name="sobrenome" value="<?php echo $row['sobrenome']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
    Dev Side: <input type="text" name="devweb" value="<?php echo $row['devweb']; ?>"><br>
    Senioridade: <input type="text" name="senioridade" value="<?php echo $row['senioridade']; ?>"><br>
    Experiência: <textarea name="experiencia"><?php echo $row['experiencia']; ?></textarea><br>
    SN_HTML : <input type="text" name="SN_HTML" value="<?php echo $row['SN_HTML']; ?>"><br>
    SN_CSS : <input type="text" name="SN_CSS" value="<?php echo $row['SN_CSS']; ?>"><br>
    SN_JAVASCRIPT : <input type="text" name="SN_JAVASCRIPT" value="<?php echo $row['SN_JAVASCRIPT']; ?>"><br>
    SN_PHP : <input type="text" name="SN_PHP" value="<?php echo $row['SN_PHP']; ?>"><br>
    SN_CSHARP : <input type="text" name="SN_CSHARP" value="<?php echo $row['SN_CSHARP']; ?>"><br>
    SN_PYTHON : <input type="text" name="SN_PYTHON" value="<?php echo $row['SN_PYTHON']; ?>"><br>
    SN_JAVA : <input type="text" name="SN_JAVA" value="<?php echo $row['SN_JAVA']; ?>"><br>
    SN_DELPHI : <input type="text" name="SN_DELPHI" value="<?php echo $row['SN_DELPHI']; ?>"><br>
    <input type="submit" value="Atualizar">
  <?php
} else {
  echo "Registro não encontrado.";
}

$conn->close();

  ?>