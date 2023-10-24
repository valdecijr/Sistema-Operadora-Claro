<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Monitorias - Claro</title>
</head>

<body>
<?PHP include('menu.php'); ?>
<h1>Login</h1>
<br>
<form action="valida.php" method="post">
	* E-mail
	<input type="text" name="email_usu" id="email_usu">
<br><br>
	* Senha
	<input type="password" name="senha_usu" id="senha_usu">
  <br><br>
 
  <input type="submit" value="Login" class="but_comando">
</form>
</body>
</html>