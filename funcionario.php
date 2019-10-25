<?php
	include 'conn.php';
		$result1="";
		$sql='SELECT * FROM tb_funcionario';
		$result2= $GLOBAlS['conn']->query($sql);
	if ($_POST) {
		$nome=$_POST['nome'];
		$nasc=$_POST['nasc'];
		$cpf=$_POST['cpf'];
		$rg=$_POST['rg'];
		$estadocv=$_POST['estadocv'];
		$salario=$_POST['salario'];
		$sql= 'INSERT INTO tb_funcionario values (null, "'.$nome.'","'.$nasc.'", "'.$cpf.' ", "'.$rg.'", "'.$estadocv.'", "'.$salario.')';
		$result=$GLOBAlS['conn']->query($sql);
		if ($result) {
			$result1 = 'cadastrado com sucesso';
		}
		else{
			$result1= ' ¯\_(ツ)_/¯ deu certo nao';
		}
		$res = '';
		//select pra mostrar na tabela embaixo do form
		$sql = "SELECT * FROM tb_funcionario";
		$result2= $GLOBAlS['conn']->query($sql);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="nome" placeholder="Nome e sobrenome"><br>
		<input type="date" name="nasc"><br>
		<input type="number" name="cpf" maxlength="11" minlength="11" placeholder="Cpf"><br>
		<input type="text" name="rg" placeholder="Rg">
		<select name="estadocv">
			<option value="solteiro">solteiro(a)</option>
			<option value="casado">casado(a)</option>
			<option value="viuvo">viuvo(a)</option>
		</select>
		<input type="number" name="salario">
		<?php echo $result1; ?>
	</form>
	<div class="result">
		<table>
			<tr>
				<td>nome</td>
				<td>nascimento</td>
				<td>cpf</td>
				<td>rg</td>
				<td>estado civil</td>
				<td>salario bruto</td>
			</tr>
			<?php while($list=$result2->fetch_array());{?>	
			<tr>
				<td><?php echo $list["nm_nome"]?></td>
				<td><?php echo $list["dt_nascimento"]?></td>
				<td><?php echo $list["nr_cpf"]?></td>
				<td><?php echo $list["nr_rg"]?></td>
				<td><?php echo $list["nm_estadoCivil"]?></td>
				<td><?php echo $list["vl_salario"]?></td>
			</tr>
			<?php }?>
		</table>
	</div>
</body>
</html>