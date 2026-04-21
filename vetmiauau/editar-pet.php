<h1>Editar Pet</h1>
<?php

	$sql = "SELECT * FROM pet WHERE id_pet = ".$_REQUEST['id_pet'];

	$res = $conn->query($sql);

	$row_1 = $res->fetch_object();
?>
<form action="?page=salvar-pet" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_pet" value="<?php print $row_1->id_pet; ?>">
	<div class="mb-3">
		<label>Cliente
			<select name="cliente_id_cliente" class="form-control" required>
				<?php
					$sql_1 = "SELECT * FROM cliente";
					$res_1 = $conn->query($sql_1);
					$qtd_1 = $res_1->num_rows;
					if($qtd_1 > 0){
						while($row = $res_1->fetch_object()){
							if($row->id_cliente == $row_1->cliente_id_cliente){
							print "<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>";
						}
						}
					}else{
						print "<option>Não há clientes registrados</option>";
					}
				?>
			</select>
		</label>
		<label>Funcionário
			<select name="funcionario_id_funcionario" class="form-control" required>
				<?php
					$sql_1 = "SELECT * FROM funcionario";
					$res_1 = $conn->query($sql_1);
					$qtd_1 = $res_1->num_rows;
					if($qtd_1 > 0){
						while($row = $res_1->fetch_object()){
							if($row->id_funcionario == $row_1->funcionario_id_funcionario){
							print "<option value='{$row->id_funcionario}'>{$row->nome_funcionario}</option>";
						}
						}
					}else{
						print "<option>Não há funcionários registrados</option>";
					}
				?>
			</select>
		</label>
	</div>
	<div class="mb-3">
		<label>Nome do Pet
			<input type="text" name="nome_pet" class="form-control" value="<?php print $row_1->nome_pet; ?>">
		</label>
	</div>
	<div class="mb-3">
		<label>Raça do Pet
			<input type="text" name="raca_pet" class="form-control" value="<?php print $row_1->raca_pet; ?>">
		</label>
	</div>
	<div>
		<button type="submit" class="btn-btn-primary">Enviar</button>
	</div>
</form>