<?php 
	include("conexaoN2.php");
	
	$dadosDoBanco = mostrarCadastrados();
	/*
	$dadosOrdenadosPeloSort = mostrarCadastradosSort(); */	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="cssN2.css" media="screen"  />	
	<meta charset="utf-8">
	<title>Trabalho N2 Pesquisa e Armazenamento de Dados</title>
	<script type="text/javascript" src="funcoes.js"></script>
	<script>
	function funcao1()
	{
	alert("É necessário cadastrar UM primeiro nome.");
	}
	</script>
</head>
	<h1>Trabalho N2</h1>
	<h2>Pesquisa e Armazenamento de Dados</h2>
	<div class="meunome">
	<h3>Luis Mauricio C. Pires & Victória da Silva Pacheco</h3>
	<h4>Menu de Links</h4>
	</div>
	<body>			
		<div class="menu">
			<input id="botao-menu1" onclick="window.location.href = 'indexprincipal.php'" style="text-align:center" name="botao" value="Cadastrar" />
			<?php if(count($dadosDoBanco) > 0) { ?>
			<input id="botao-menu2" style="text-align:center" onclick="window.location.href = 'listabancoN2.php'" name="botao" value="Listar" />
			<?php } else { ?> 
				<input id="botao-menu2" onclick="funcao1()" value="Listar" style="text-align:center"  name="botao" />		
			<?php } ?> 	
		</div>
	</body>
</html>