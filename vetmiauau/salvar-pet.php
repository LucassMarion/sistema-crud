<?php

	switch($_REQUEST['acao']){
		case 'cadastrar':
		$pet = $_POST['nome_pet'];
		$raca = $_POST['raca_pet'];
		$cliente = $_POST['cliente_id_cliente'];
		$funcionario = $_POST['funcionario_id_funcionario'];

		$sql = "INSERT INTO pet (nome_pet, raca_pet, cliente_id_cliente, funcionario_id_funcionario) VALUES ('{$pet}', '{$raca}', {$cliente}, {$funcionario})";

		$res = $conn->query($sql);

		if($res == true){
			print "<script>alert('Cadastrou com sucesso');</script>";
			print "<script>location.href='?page=listar-pet';</script>";
		}else{
			print "<script>alert('Erro ao cadastrar');</script>";
			print "<script>location.href='?page=listar-pet';</script>";
		}
		break;

		case 'editar':
		$pet = $_POST['nome_pet'];
		$raca = $_POST['raca_pet'];
		$cliente = $_POST['cliente_id_cliente'];
		$funcionario = $_POST['funcionario_id_funcionario'];

		$sql = "UPDATE pet SET nome_pet='{$pet}', raca_pet='{$raca}', cliente_id_cliente='{$cliente}', funcionario_id_funcionario='{$funcionario}' WHERE id_pet = ".$_REQUEST['id_pet'];

		$res = $conn->query($sql);

		if($res == true){
			print "<script>alert('Editou com sucesso');</script>";
			print "<script>location.href='?page=listar-pet';</script>";
		}else{
			print "<script>alert('Erro ao editar');</script>";
			print "<script>location.href='?page=listar-pet';</script>";
		}
		break;

		case 'excluir':
			$sql = "DELETE FROM pet WHERE id_pet = ".$_REQUEST['id_pet'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=listar-pet';</script>";
			}else{
				print "<script>alert('Não excluiu');</script>";
				print "<script>location.href='?page=listar-pet';</script>";
			}
			break;
	}
?>