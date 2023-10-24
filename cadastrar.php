<?PHP include('menu-monitor.php'); ?>
<?PHP
# Receber os dados vindos do formulário
# incluir arquivo de conexao
include('config.php');

$dataescuta = ($_POST['dataescuta']);
$nomecli = ($_POST['nomecli']);
$nomesuper = ($_POST['nomesuper']);
$nomemon = ($_POST['nomemon']);
$datacli = ($_POST['datacli']);
$horario = ($_POST['horario']);
$cpf = ($_POST['cpf']);
$codigo = ($_POST['codigo']);
$abertura1 = ucwords($_POST['abertura1']); # Coloca a primeira letra da string em maiúsculo
$abertura2 = $_POST['abertura2'];
$abertura3 = $_POST['abertura3'];
$tec4 = $_POST['tec4'];
$tec5 = $_POST['tec5'];
$tec6 = $_POST['tec6'];
$neg7 = $_POST['neg7'];
$neg8 = $_POST['neg8'];
$neg9 = $_POST['neg9'];
$neg10 = $_POST['neg10'];
$neg11 = $_POST['neg11'];
$proc12 = $_POST['proc12'];
$proc13 = $_POST['proc13'];
$proc14 = $_POST['proc14'];
$proc15 = $_POST['proc15'];
$fin16 = $_POST['fin16'];
$fin17 = $_POST['fin17'];
$fin18 = $_POST['fin18'];
$fin19 = $_POST['fin19'];
$ncg20 = $_POST['ncg20'];
$ncg21 = $_POST['ncg21'];
$ncg22 = $_POST['ncg22'];
$ncg23 = $_POST['ncg23'];
$ncg24 = $_POST['ncg24'];
$obs = $_POST['obs'];

$in = mysqli_query($conexao,"insert into tb_monitoria (dataescuta,nomecli,nomesuper,nomemon,datacli,horario,cpf,codigo,abertura1,abertura2,abertura3,tec4,tec5,tec6,neg7,neg8,neg9,neg10,neg11,proc12,proc13,proc14,proc15,fin16,fin17,fin18,fin19,ncg20,ncg21,ncg22,ncg23,ncg24,obs) values ('$dataescuta','$nomecli','$nomesuper','$nomemon','$datacli','$horario','$cpf','$codigo','$abertura1','$abertura2','$abertura3','$tec4','$tec5','$tec6','$neg7','$neg8','$neg9','$neg10','$neg11','$proc12','$proc13','$proc14','$proc15','$fin16','$fin17','$fin18','$fin19','$ncg20','$ncg21','$ncg22','$ncg23','$ncg24','$obs')") or die("Erro");
?>
<div class="msg1 padding20">Monitoria Cadastrada com sucesso.</div>