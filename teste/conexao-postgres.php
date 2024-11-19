<?php
$servidor = "localhost";
$porta = 5432;
$banco = "teste";
$usuario = "alunos";
$senha ="cefetmg";

$conexao = pg_connect("host=$servidor port=$porta dbname=$banco user=$usuario password=$senha") or
die ("Não foi possível conectar ao servidor PostGreSQL");
//caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário
echo "Conexão efetuada com sucesso!!";


$query= "SELECT id, nome FROM clientes";

print "<h2>EXECUTAR CONSULTA (QUALQUER CONSULTA SQL)</h2>";
$result = pg_query($conexao, $query);
if (!$result) {
  echo "Erro na consulta.<br>";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "ID: $row[0]  Nome: $row[1]";
  echo "<br />\n";
}
