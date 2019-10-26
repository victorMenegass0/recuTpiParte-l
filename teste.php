<?php  
	include 'conn.php';
		$sql="";
	if ($_POST) {
		$cpf=$_POST['cpf'];
		$sql='SELECT f.cd_funcionario FROM tb_funcionario f WHERE nr_cpf='.$cpf.'';
		$id=$GLOBALS['conn']->query($sql);
		$id2=$id->fetch_array();
		echo $id2;

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="number" name="cpf">
		<input type="submit" value="enviar">
	</form>
</body>
</html>