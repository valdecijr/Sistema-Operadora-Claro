﻿<?PHP include('menu.php'); ?>
<?PHP
#session_start();
if(isset($_SESSION['nome_usu_sessao']))
	{
		?>
		 <div class="borda2 padding20">
        	<img src="imagens/logo.png" width="200">
            <br>
            <br>
        	Aqui é o conteúdo restrito. <a href="logout.php"><strong>Sair</strong></a>

        </div>
		
		
        
		<?PHP
	}
else
	{
		?>
        <div class="borda1 padding20">
        	<img src="../imagens/logo.png" width="70" height="70"/><br>
            <br>
            <br>
        	Esta é uma área restrita, por favor, <a href="login.php"><strong>efetue login</strong></a>.
        </div>
		<?PHP
	}
?>
