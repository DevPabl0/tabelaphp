
<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="utf-8">
<link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>
<title>Formulário inserindo dados em uma tabela</title>	

</head>

<body>
	<div class="box">
<form action="localhost.php" method="post">
<h2>Formulário</h2>
 <div class="inputbox">
		<label for="nome">

		Nome: <input type="text"  id="nome"  name="nome" autofocus autocomplete="off" maxlength="15" required placeholder="Nome"> </p>

		</label>
    </div>
 <div class="inputbox">
		Sobrenome: <input type="text" name="sobrenome" required maxlength="15" placeholder="Sobrenome"></p>
    </div>
    <div class="inputbox">
		Idade: <input type="number" name="idade" required autocomplete="off" placeholder="Idade"> </p>
        </div>

<input type="submit" value="Enviar" class="enviar">
<input type="submit" value="Listar" class="listar">

</form>
</div>
</body>

</html>