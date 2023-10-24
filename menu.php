<?PHP
session_start();
if(isset($_SESSION['nome_usu_sessao']))
	{
		?>
        <div class="padding20"><?PHP echo 'Olá '.$_SESSION['nome_usu_sessao'].', tudo certinho? Seja bem vindo!'; ?></div><?PHP
	}
?>
<link rel="stylesheet" href="style.css">
<div class="menu">Sistema de Monitorias - Claro</div><br>
<p><a href="form.php">Acesse a sua Avaliação</a></p>


