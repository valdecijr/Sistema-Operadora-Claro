<!doctype html>
<html>
<head>

<meta charset="utf-8">
<?PHP include('menu-monitor.php'); ?>
<title>Sistema de Monitorias - Claro</title>


</head>

<body>

<hr>
<h1>Cadastro de Monitoria Claro</h1>
<img src="../imagens/logo.png" width="70" height="70"/><br>


<br>
<div   class="borda1 padding20" Align="justify">

<center><h2>Dados Operacionais</h2></center>


<form action="cadastrar.php" method="post" onSubmit="return valida_campos();">
<table>
	<tr>
	 <th>Data da Escuta: <input type="date" name="dataescuta" id="dataescuta">
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </th>
     <th>Atendente: <input type="text_format" name="nomecli" id="nomecli">
	 &nbsp;&nbsp;&nbsp;&nbsp;
	 </th>
     <th>Supervisor: <input type="text_format" name="nomesuper" id="nomesuper">
	 &nbsp;&nbsp;&nbsp;
	 </th>
	 <th>Monitor: <input type="text_format" name="nomemon" id="nomemon"></th>
	</tr>
</table>  
  </center>
<br>
<h2>Dados do Cliente</h2>

<table>
  <tr>
    <th>Data:<input type="date" name="datacli" id="datacli">&nbsp;&nbsp;&nbsp;</th>
    <th>Horario:<input type="text_format" name="horario" id="horario">&nbsp;&nbsp;&nbsp;</th>
    <th>CPF: <input type="text_format" name="cpf" id="cpf">&nbsp;&nbsp;&nbsp;</th>
	<th>Sua nota foi: <input type="number_format" name="nota" id="nota">&nbsp;&nbsp;&nbsp;</th>
  </tr>
</table>  
  
</table>

<br>
<div   class="borda1 padding20" Align="justify">
	<center>* SENHA DO CLIENTE
    <input type="number_format" name="codigo" id="codigo"></center>
	<br><br>
	<hr>
<center class="borda1 padding20"><b>*** ABERTURA ***</b></center>
<hr>
<br>

	<br>
	
	* O operador atendeu a ligação em até 5s ?
    <select name="abertura1" id="abertura1">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
		</select>

<br>
	<br>* O operador iniciou o contato com saudação, com nome e como um agente do escritório (nome do Escritório) à serviço da Claro Brasil?
	<select name="abertura2" id="abertura2">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
<br><br>
	*  O operador certificou se que estava falando com o responsável pelo contrato? ( validou a ligação com o nome completo ou 3 dígitos do CPF)
	<select name="abertura3" id="abertura3">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
<br><br><br>
</div>
<br>
<div class="borda1 padding20" Align="justify">
<hr>
<center class="borda1 padding20"><b>*** TÉCNICAS DE ATENDIMENTO/COMUNICAÇÃO E LINGUAGEM ***</b></center>
<hr color="black">
<br><br>
	* O operador utilizou o script de pausa dentro do tempo de retorno (Pausa curta=30") com agradecimento ao retornar?
    <select name="tec4" id="tec4">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
	* O operador realizou o atendimento sem utilizar vícios de Linguagem ou erros de português? 
    <select name="tec5" id="tec5">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
	* O operador atuou com: Paciência, cordialidade, estabilidade, interesse, ética, tom de voz adequado, escuta ativa e atenção?
    <select name="tec6" id="tec6">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br><br>
<hr>
</div>
</div>
<br>
<div class="borda1 padding20" Align="justify">
<center class="borda1 padding20"><b>*** NEGOCIAÇÃO ***</b></center>
<hr>
<br><br>
   * O operador informou os produtos, faturas e valores abertos?
    <select name="neg7" id="neg7">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
   * O operador negociou o pagamento para o mesmo dia, quando não possível, para o dia seguinte da negociação
    <select name="neg8" id="neg8">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O operador ofertou o desconto disponível no sistema?
    <select name="neg9" id="neg9">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * Sondagem e interação com o cliente?
    <select name="neg10" id="neg10">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O operador contornou as  objeções?
    <select name="neg11" id="neg11">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  </div>
  </div>
  <br>
  <div class="borda1 padding20" Align="justify">
	<center class="borda1 padding20"><b>*** PROCEDIMENTOS ***</b></center>
		<hr>
	<br>
   * O operador teve conhecimento sobre o produto, segurança e clareza nas informações?
    <select name="proc12" id="proc12">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O operador realizou a confirmação do endereço de E-mail? 
    <select name="proc13" id="proc13">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O operador realizou a confirmação do telefone? 
    <select name="proc14" id="proc14">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * Operador esclareceu eventuais dúvidas do cliente?
    <select name="proc15" id="proc15">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  </div>
  </div>
  <br>
  <div class="borda1 padding20" Align="justify">
<center class="borda1 padding20"><b>*** FINALIZAÇÃO ***</b></center>
<hr>
<br><br>

  * O operador realizou o selo do acordo?
    <select name="fin16" id="fin16">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O operador informou as ações de Cobrança? ( juros e multas, ligações de cobrança e a possivel restrição do nome ) 
    <select name="fin17" id="fin17">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * Liberação do cadastro após o término da ligação  (10 segundos) 
    <select name="fin18" id="fin18">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O operador encerrou o atendimento em nome da empresa, despedindo-se adequadamente, agradecendo pela atenção OU pelo acordo fechado(Quando houver), informando o 0800 722 0222 e horário de atendimento?
    <select name="fin19" id="fin19">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O operador atendeu descortês, irônico, irritado, e/ou usou palavras de de baixo calão?
    <select name="ncg20" id="ncg20">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O operador formalizou promessa sem a concordância do cliente ? 
    <select name="ncg21" id="ncg21">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O operador quebrou o sigilo ?
    <select name="ncg22" id="ncg22">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * O registro da tabulação foi divergente com o ocorrido no atendimento? 
    <select name="ncg23" id="ncg23">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  * Derrubou/Abandonou a ligação
    <select name="ncg24" id="ncg24">
	<option value="sim">SIM</option>
    <option value="não">NÃO</option>
    <option value="na">N/A</option>
	</select>
  <br>
  <br><br>
  <center class="borda1 padding20" Align="justify">
	* Observações:<br><br>
    <input type="text" name="obs" id="obs" size="200">
	<br><br>

  </div>

  <br><input type="submit" value="Cadastrar" class="but_comando"><br>
	</form>

<br>
<hr>
</center>
<img src="../imagens/logo.png" width="70" height="70"/><br>
Desenvolvido por Grupo Talentos<br>
<hr>
<br>
</body>
</html>