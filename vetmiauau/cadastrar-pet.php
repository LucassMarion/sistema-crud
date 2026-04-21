<h1>Cadastrar Pet</h1>
<form action="?page=salvar-pet" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Cliente
			<select name="cliente_id_cliente" class="form-control" required>
				<option>-- Escolha --</option>
				<?php
					$sql = "SELECT * FROM cliente";
					$res = $conn->query($sql);
					$qtd = $res->num_rows;
					if($qtd > 0){
						while($row = $res->fetch_object()){
							print "<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>";
						}
					}else{
						print "<option>Não há clientes registrados</option>";
					}
				?>
			</select>
		</label>
		<label>Funcionário
			<select name="funcionario_id_funcionario" class="form-control" required>
				<option>-- Escolha --</option>
				<?php
					$sql = "SELECT * FROM funcionario";
					$res = $conn->query($sql);
					$qtd = $res->num_rows;
					if($qtd > 0){
						while($row = $res->fetch_object()){
							print "<option value='{$row->id_funcionario}'>{$row->nome_funcionario}</option>";
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
			<input type="text" name="nome_pet" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Raça do Pet
			<input type="text" name="raca_pet" class="form-control">
		</label>
	</div>
	<div>
		<button type="submit" class="btn-btn-primary">Enviar</button>
	</div>
</form>