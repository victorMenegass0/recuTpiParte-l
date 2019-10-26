<?php
	include 'conn.php';
		$result1="";
		$sql= 'select * from tb_dependente';
		$result2=$GLOBALS['conn']->query($sql);
		$res="";
	if ($_POST) {
		$nome=$_POST['nome'];
		$nasc=$_POST['nascimento'];
		$grauparente= $_POST['graup'];
		$idFuncionario=$_POST['idfun'];
		$sql4='insert into tb_dependente values(null, "'.$nome.'", "'.$nasc.'", "'.$grauparente.'", '.$idFuncionario.')';
		$result1=$GLOBALS['conn']->query($sql4);
		if ($result1) {
			$result1='cadastrado com sucesso';
		}
		else{
			$result1='parace que deu erro¯\_(ツ)_/¯';
		}
		$sql='select * from tb_dependente';
		$result2=$GLOBALS['conn']->query($sql);
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<?php echo $result1;?><br>
		<input type="text" name="nome" placeholder="nome"><br>
		<input type="date" name="nascimento"><br>
		<select name="graup">
			<option value="pai">pai</option>
			<option value="tio">tio(a)</option>
			<option value="irmao">irmao(ã)</option>
			<option value="mae">mae</option>	
		</select><br>
		<input type="number" name="idfun"><br>
		<input type="submit" value="enviar">
	</form><br><br>


	<table border="1">
		<tr>
			<td>nome</td>
			<td>data de nascimento</td>
			<td>grau de parentesco</td>
			<td>nome do funcionario do qual depende</td>	
		</tr>
		<?php while($listinha=$result2->fetch_array()){?>
		<tr>
			<td><?php echo $listinha['nm_dependente']?></td>
			<td><?php echo $listinha['dt_nascimento']?></td>
			<td><?php echo $listinha['grau_parentesco']?></td>
			<td><?php echo $listinha['id_funcionario']?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>