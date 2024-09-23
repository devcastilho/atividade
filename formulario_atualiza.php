<?php
require("conecta.php");

$id = $_GET['id']; // Pega o ID passado pela URL

// Consulta o registro no banco de dados com base no ID
$sql = "SELECT * FROM estoque_oleos WHERE id_oleo = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc(); // Pega os dados da linha
} else {
  echo "Registro não encontrado!";
  exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Metadados -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">
  <title>Editar Desenvolvedor</title>
</head>

<body>
  <div class="inicio">
    <h1>Atualização de Estoque</h1>
    <p>Atualize o óleo modificando as informações abaixo</p>
    <br /> <!--quebra de linha-->
  </div>

  <!-- Formulário de edição preenchido com os valores existentes -->
  <form method="POST" action="atualiza.php">
    <input type="hidden" name="id_oleo" value="<?php echo $row['id_oleo']; ?>">

    <div class="campo">
      <label for="nome"><strong>Nome</strong></label>
      <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>" required />
    </div>

    <div class="campo">
      <label for="origem"><strong>Origem</strong></label>
      <input type="text" name="origem" id="origem" value="<?php echo $row['origem']; ?>" required />
    </div>

    <div class="campo">
      <label><strong>Qual o nível de dificuldade de extração?</strong></label>
      <label>
        <input type="radio" name="raridade" value="Abundante" <?php if ($row['raridade'] == 'Abundante') echo 'checked'; ?> />Abundante
      </label>
      <label>
        <input type="radio" name="raridade" value="Médio" <?php if ($row['raridade'] == 'Médio') echo 'checked'; ?> />Médio
      </label>
      <label>
        <input type="radio" name="raridade" value="Raro" <?php if ($row['raridade'] == 'Raro') echo 'checked'; ?> />Raro
      </label>
    </div>

    <div class="campo">
      <label for="ingestao"><strong>Pode ser ingerido?</strong></label>
      <select id="ingestao" name="ingestao" required>
        <option value="Não ingerir" <?php if ($row['ingestao'] == 'Não ingerir') echo 'selected'; ?>>Não ingerir</option>
        <option value="Poucas gotas" <?php if ($row['ingestao'] == 'Poucas gotas') echo 'selected'; ?>>Poucas gotas</option>
        <option value="Sem restrição" <?php if ($row['ingestao'] == 'Sem restrição') echo 'selected'; ?>>Sem restrição</option>
      </select>
    </div>

    <fieldset class="grupo">
      <div id="check">

        <label><strong>Marque as notas que definem esse óleo:</strong></label><br><br>

        <input type="checkbox" name="nota1" value="Cítricos" <?php if ($row['nota1']    == 'Cítricos') echo 'checked'; ?> /><b>Cítricos</b>: limão, laranja, bergamota <br />
        <input type="checkbox" name="nota2" value="Frutadas" <?php if ($row['nota2']    == 'Frutadas') echo 'checked'; ?> /><b>Frutadas</b>: maçã, pêssego, framboesa <br />
        <input type="checkbox" name="nota3" value="Verdes" <?php if ($row['nota3']      == 'Verdes') echo 'checked'; ?> /><b>Verdes</b>: grama cortada, folhas frescas <br />
        <input type="checkbox" name="nota4" value="Florais" <?php if ($row['nota4']     == 'Florais') echo 'checked'; ?> /><b>Florais</b>: rosa, jasmim, lavanda <br />
        <input type="checkbox" name="nota5" value="Especiarias" <?php if ($row['nota5'] == 'Especiarias') echo 'checked'; ?> /><b>Especiarias</b>: canela, cardamomo <br />
        <input type="checkbox" name="nota6" value="Frutadas" <?php if ($row['nota6']    == 'Frutadas') echo 'checked'; ?> /><b>Frutadas</b>: pera, pêssego <br />
        <input type="checkbox" name="nota7" value="Amadeiradas" <?php if ($row['nota7'] == 'Amadeiradas') echo 'checked'; ?> /><b>Amadeiradas</b>: sândalo, cedro, vetiver <br />
        <input type="checkbox" name="nota8" value="Orientais" <?php if ($row['nota8']   == 'Orientais') echo 'checked'; ?> /><b>Orientais</b>: baunilha, âmbar, incenso <br />
        <input type="checkbox" name="nota9" value="Musgosas" <?php if ($row['nota9']    == 'Musgosas') echo 'checked'; ?> /><b>Musgosas</b>: musgo de carvalho, musgo de pedra <br />

      </div>
    </fieldset>

    <div class="campo">
      <br>
      <label for="historia"><strong>Conte mais sobre este óleo:</strong></label><br>
      <textarea rows="6" style="width: 26em" id="historia" name="historia"><?php echo $row['historia']; ?></textarea>
    </div>

    <button class="botao" type="submit" onclick="return confirm('Tem certeza que deseja salvar as alterações?')">Salvar</button>
    <button class=" cancelar" type="button" onclick="window.location.href='listar.php';">Cancelar</button>
  </form>
</body>

</html>