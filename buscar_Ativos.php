<!DOCTYPE html>
<html>
<head>
	<title>Buscar Ativos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Ativos Cadastrados</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Número de Série</th>
				<th>Fabricante</th>
				<th>Tipo de Equipamento</th>
				<th>Subestação</th>
				<th>Data de Entrega</th>
				<th>Em Operação</th>
				<th>Nível de Tensão</th>
				<th>Status</th>
				<th>Observação</th>
			</tr>
		</thead>
		<tbody>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ativos";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação de erro
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conexão bem-sucedida";

			// Seleciona a tabela de ativos
			$sql = "SELECT * FROM equipamentos";
			$result = mysqli_query($conn, $sql);

			// Percorre os resultados da consulta e exibe na página
			while ($row = mysqli_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>" . $row['id'] . "</td>";
			    echo "<td>" . $row['numero_serie'] . "</td>";
			    echo "<td>" . $row['fabricante'] . "</td>";
			    echo "<td>" . $row['tipo_equipamento'] . "</td>";
			    echo "<td>" . $row['subestacao'] . "</td>";
			    echo "<td>" . $row['data_entrega'] . "</td>";
			    echo "<td>" . $row['em_operacao'] . "</td>";
			    echo "<td>" . $row['nivel_tensao'] . "</td>";
			    echo "<td>" . $row['status'] . "</td>";
			    echo "<td>" . $row['observacao'] . "</td>";
			    echo "</tr>";
			}

			// Fecha a conexão com o banco de dados
			mysqli_close($conn);
			?>
		</tbody>
	</table>
</body>
</html>

