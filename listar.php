<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Metadados -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">

  <!--Título da página (aparece na aba)-->

  <title>Estoque</title>
</head>

<body>
  <div class="inicio">
    <h1 id="titulo">Relação do Estoque</h1> <!-- par ao CSS, a identificação é pelo ID="titulo"-->
    <br /> <!--quebra de linha-->
  </div>
  <div class="tabela">
    <?php
    require("conecta.php");

    // Consulta ao banco de dados
    $sql = "SELECT * FROM estoque_oleos";
    $result = $conn->query($sql);

    if ($result->num_rows <= 0) {
      echo '<script>
              alert("Nenhum óleo cadastrado.");
              window.location.href = "index.html";
            </script>';
    } else {
      // Criação da tabela HTML para exibir os dados
      echo "<table border='1'>";
      echo "<tr>
            <th>Identificador           </th>
            <th>Nome                    </th>
            <th>Origem                  </th>
            <th>Raridade                </th>
            <th>Ingestão                </th>
            <th>História                </th>
            <th>Cítricos                </th>
            <th>Frutadas                </th>
            <th>Verdes                  </th>
            <th>Florais                 </th>
            <th>Especiarias             </th>
            <th>Frutadas                </th>
            <th>Amadeiradas             </th>
            <th>Orientais               </th>
            <th>Musgosas                </th>
            <th>Ações                   </th>
            </tr>";

      // Loop para exibir cada linha da tabela
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_oleo']        . "</td>";
        echo "<td>" . $row['nome']          . "</td>";
        echo "<td>" . $row['origem']        . "</td>";
        echo "<td>" . $row['raridade']      . "</td>";
        echo "<td>" . $row['ingestao']      . "</td>";
        echo "<td>" . $row['historia']      . "</td>";
        echo "<td>" . $row['nota1']         . "</td>";
        echo "<td>" . $row['nota2']         . "</td>";
        echo "<td>" . $row['nota3']         . "</td>";
        echo "<td>" . $row['nota4']         . "</td>";
        echo "<td>" . $row['nota5']         . "</td>";
        echo "<td>" . $row['nota6']         . "</td>";
        echo "<td>" . $row['nota7']         . "</td>";
        echo "<td>" . $row['nota8']         . "</td>";
        echo "<td>" . $row['nota9']         . "</td>";


        // Botões para editar e excluir
        echo "<td>
                <a href='formulario_atualiza.php?id=" . $row['id_oleo'] . "'><button class='botao_padrao' type='submit'>Editar</button></a> 
                <form method='POST' action='apaga_oleo.php' style='display:inline;'>
                  <input type='hidden' name='id_oleo' value='" . $row['id_oleo'] . "'/>
                  <button class='excluir' type='submit' onclick=\"return confirm('Tem certeza que deseja apagar?');\">Apagar</button>
                </form>
              </td>";
        echo "</tr>";
      }

      echo "</table>";
    }

    $conn->close();

    ?>
    <!-- <button class="botao-voltar" href="index.html">Voltar</button> -->
    <a id="cancelar" href="index.html"><input class="cancelar" type="button" value="Cancelar"></a>
    </form>
  </div>
  </form>
</body>

</html>