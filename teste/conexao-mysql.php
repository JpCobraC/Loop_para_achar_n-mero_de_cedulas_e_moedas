<?php
$servidor = "localhost";
$porta = 3306;
$banco = "teste";
$usuario = "alunos";
$senha ="cefetmg";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or
die ("Não foi possível conectar ao servidor MYSQL" . mysqli_error());
//caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário
echo "Conexão efetuada com sucesso!!";

//mysqli_select_db($banco) or die('Could not select database');
$query= "SELECT id, nome FROM clientes";

print "<h2>EXECUTAR CONSULTA (QUALQUER CONSULTA SQL)</h2>";
$result = mysqli_query($conexao, $query) or die ('Query failed: ' . mysqli_error());;
if (!$result) {
  echo "Erro na consulta.<br>";
  exit;
}

while ($row = mysqli_fetch_array($result)) {
  echo "ID: $row[0]  Nome: $row[1]";
  echo "<br />\n";
}

// Free resultset
mysqli_free_result($result);

// Closing connection
mysqli_close($conexao);
