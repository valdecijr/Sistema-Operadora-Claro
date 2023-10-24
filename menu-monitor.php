<?PHP
session_start();
if(isset($_SESSION['nome_usu_sessao']))
	{
		?>
        <div class="padding20"><?PHP echo 'Olá '.$_SESSION['nome_usu_sessao'].', tudo certinho? Seja bem vindo!'; ?></div><?PHP
	}
?>
<link rel="stylesheet" href="style.css">
<div class="menu">Sistema de Monitorias - Claro</div>
<p><a href="form.php">Pesquise Avaliações Cadastradas</a></p>
<p><a href="cadastro.php">Cadastrar Nova Avaliação de Monitoria Claro</a></p>


