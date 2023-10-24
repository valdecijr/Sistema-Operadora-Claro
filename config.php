<?PHP
# Conexão com o banco de dados
$conexao = mysqli_connect('127.0.0.1:3306','root','RiMEX2QxEqCCRJJp') or die("Erro de conexão");
$banco = mysqli_select_db($conexao,'claro') or die("Erro ao selecionar o banco de dados");
?>