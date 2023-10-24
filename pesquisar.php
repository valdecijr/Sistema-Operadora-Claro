
<body>


<?PHP include('menu-monitor.php'); ?>


<?php
	$servidor = "127.0.0.1:3306";
	$usuario = "root";
	$senha = "";
	$dbname = "claro";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['pesquisar'];
	$result_cursos = "SELECT * FROM tb_monitoria WHERE codigo LIKE '%$pesquisar%' LIMIT 5";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
		echo "Codigo de Monitoria: ".$rows_cursos['codigo']."<br><br>";
		echo "Data da Escuta: ".$rows_cursos['dataescuta']."<br>";
		echo "Supervisor: ".$rows_cursos['nomesuper']."<br>";
		echo "Monitor(a): ".$rows_cursos['nomemon']."<br>";
		echo "Cliente: ".$rows_cursos['datacli']."<br>";
		echo "Horario: ".$rows_cursos['horario']."<br>";
		echo "CPF: ".$rows_cursos['cpf']."<br><br>";
		echo "O operador atendeu a ligação em até 5s ? R: ".$rows_cursos['abertura1']."<br><br>";
		echo "O operador iniciou o contato com saudação, com nome e como um agente do escritório (nome do Escritório) à serviço da Claro Brasil? R: ".$rows_cursos['abertura2']."<br><br>";
		echo "O operador certificou se que estava falando com o responsável pelo contrato? ( validou a ligação com o nome completo ou 3 dígitos do CPF) R: ".$rows_cursos['abertura3']."<br><br>";
		echo "O operador utilizou o script de pausa dentro do tempo de retorno (Pausa curta=30) com agradecimento ao retornar? R: ".$rows_cursos['tec5']."<br><br>";
		echo "O operador realizou o atendimento sem utilizar vícios de Linguagem ou erros de português? R: ".  $rows_cursos['tec6']."<br><br>";
		echo "O operador atuou com: Paciência, cordialidade, estabilidade, interesse, ética, tom de voz adequado, escuta ativa e atenção? R: ".$rows_cursos['neg7']."<br><br>";
		echo "O operador informou os produtos, faturas e valores abertos? R: ".$rows_cursos['neg8']."<br><br>";
		echo "O operador negociou o pagamento para o mesmo dia, quando não possível, para o dia seguinte da negociação R: ".$rows_cursos['neg9']."<br><br>";
		echo "O operador ofertou o desconto disponível no sistema? R: ".$rows_cursos['neg10']."<br><br>";
		echo "Sondagem e interação com o cliente?   ".$rows_cursos['neg11']."<br><br>";
		echo "O operador contornou as objeções?  ".$rows_cursos['proc12']."<br><br>";
		echo "O operador teve conhecimento sobre o produto, segurança e clareza nas informações? R:  ".$rows_cursos['proc13']."<br><br>";
		echo "O operador realizou a confirmação do endereço de E-mail? R: ".$rows_cursos['proc14']."<br><br>";
		echo "O operador realizou a confirmação do telefone? R: ".$rows_cursos['proc15']."<br><br>";
		echo "Operador esclareceu eventuais dúvidas do cliente? R: ".$rows_cursos['fin16']."<br><br>";
		echo "O operador realizou o selo do acordo?  ".$rows_cursos['fin17']."<br><br>";
		echo "O operador informou as ações de Cobrança? ( juros e multas, ligações de cobrança e a possivel restrição do nome ) R: ".$rows_cursos['fin18']."<br><br>";
		echo "Liberação do cadastro após o término da ligação (10 segundos)  R: ".$rows_cursos['fin19']."<br><br>";
		echo "O operador encerrou o atendimento em nome da empresa, <br>despedindo-se adequadamente, agradecendo pela atenção OU pelo acordo fechado(Quando houver), informando o 0800 722 0222 e horário de atendimento? R: ".$rows_cursos['ncg20']."<br><br>";
		echo "O operador atendeu descortês, irônico, irritado, e/ou usou palavras de de baixo calão? R: ".$rows_cursos['ncg21']."<br><br>";
		echo "O operador formalizou promessa sem a concordância do cliente ? R: ".$rows_cursos['ncg22']."<br><br>";
		echo " O operador quebrou o sigilo ? R: ".$rows_cursos['ncg23']."<br><br>";
		echo " O registro da tabulação foi divergente com o ocorrido no atendimento? R: ".$rows_cursos['ncg24']."<br><br>";
		echo " Observações: ".$rows_cursos['obs']."<br><br>";		
	}
	
?>