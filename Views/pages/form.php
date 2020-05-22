<form action="budget/create" method="post">

	<?= csrf_field() ?>

	<div class="form-group">
		<label for="description">Descripción del trabajo</label>
		<textarea class="form-control" id="description" rows="3" name="description" required></textarea>
	</div>
	<div class="form-group">
		<label for="datepicker">Fecha estimada</label>
		<input id="datepicker" class="form-control" name="date">
	</div>
	<div class="form-group">
		<input type="submit" value="Continuar" class="btn float-right continue">
	</div>

</form>
