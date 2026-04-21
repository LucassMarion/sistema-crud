<h1>Listar Pets</h1>
<?php

$sql = "SELECT * FROM pet AS p
		INNER JOIN cliente AS c ON p.cliente_id_cliente = c.id_cliente
		INNER JOIN funcionario AS f ON p.funcionario_id_funcionario = f.id_funcionario";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome Pet</th>";
		print "<th>Raça</th>";
		print "<th>Cliente</th>";
		print "<th>Funcionário</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>{$row->id_pet}</td>";
			print "<td>{$row->nome_pet}</td>";
			print "<td>{$row->raca_pet}</td>";
			print "<td>{$row->nome_cliente}</td>";
			print "<td>{$row->nome_funcionario}</td>";
			print "<td>
					<button class='btn btn-success' onclick=\"location.href='?page=editar-pet&id_pet={$row->id_pet}';\">Editar</button>
					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-pet&acao=excluir&id_pet={$row->id_pet}';}else{false;}\">Excluir</button>
					</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultado</p>";
	}