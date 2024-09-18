<?php
require("conecta.php");

// Consulta ao banco de dados
$sql = "SELECT * FROM dev";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Criação da tabela HTML para exibir os dados
  echo "<table border='1'>";
  echo "<tr>
            <th>ID_DEV                  </th>
            <th>Nome                    </th>
            <th>Sobrenome               </th>
            <th>Email                   </th>
            <th>Lado de desenvolvimento </th>
            <th>Senioridade             </th>
            <th>Experiência             </th>
            <th>sn_html                  </th> 
            <th>sn_css                   </th>
            <th>sn_javascript            </th>
            <th>sn_php                   </th>
            <th>sn_csharp                </th>
            <th>sn_python                </th>
            <th>sn_java                  </th>
            <th>sn_delphi                </th>
            <th>Ações                    </th>
        </tr>";

  // Loop para exibir cada linha da tabela
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id_dev']        . "</td>";
    echo "<td>" . $row['nome']          . "</td>";
    echo "<td>" . $row['sobrenome']     . "</td>";
    echo "<td>" . $row['email']         . "</td>";
    echo "<td>" . $row['devweb']        . "</td>";
    echo "<td>" . $row['senioridade']   . "</td>";
    echo "<td>" . $row['experiencia']   . "</td>";
    echo "<td>" . $row['SN_HTML']       . "</td>";
    echo "<td>" . $row['SN_CSS']        . "</td>";
    echo "<td>" . $row['SN_JAVASCRIPT'] . "</td>";
    echo "<td>" . $row['SN_PHP']        . "</td>";
    echo "<td>" . $row['SN_CSHARP']     . "</td>";
    echo "<td>" . $row['SN_PYTHON']     . "</td>";
    echo "<td>" . $row['SN_JAVA']       . "</td>";
    echo "<td>" . $row['SN_DELPHI']     . "</td>";

    // Botões para editar e excluir
    echo "<td>
                <a href='edita_dev.php?id=" . $row['id_dev'] . "'>Editar</a> | 
                <a href='apaga_dev.php?id=" . $row['id_dev'] . "' onclick=\"return confirm('Tem certeza que deseja apagar?');\">Apagar</a>
              </td>";
    echo "</tr>";
  }

  echo "</table>";
} else {
  echo "Nenhum desenvolvedor encontrado.";
}

$conn->close();
