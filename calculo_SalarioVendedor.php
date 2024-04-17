<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Calculadora PHP</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nome: <input type="text" name="nome"><br><br>
    Salario base: <input type="text" name="salariobase"><br><br>
	Total Vendido: <input type="text" name="totalvendido"><br><br>
	Porcentagem: <input type="text" name="porcentagem"><br><br>
    <!-- Escolha a operação:
    <select name="operacao">
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select><br><br> -->
    <input type="submit" name="submit" value="Calcular">
</form> <br><hr>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $nome = $_POST['nome'];
	$salariobase = $_POST['salariobase'];
	$totalvendido = $_POST['totalvendido'];
	$porcentagem = $_POST['porcentagem'];
	
    $valordacomissao = ($totalvendido * $porcentagem) /100;
	$salariototal = $salariobase + $valordacomissao; 
   
    echo "<br><strong>Confira os resultados de Salário para</strong> " . $nome;
	echo "<br><strong>Resultado do  salario base é:</strong> " . $salariobase;
	echo "<br><strong>Resultado do valor de comissão é:</strong> " . $valordacomissao;
	echo "<br><strong>Resultado do salario total é:</strong> " . $salariototal;
	}
	?>
	
</body>
</html>