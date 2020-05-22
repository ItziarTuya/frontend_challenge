<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Solicita presupuesto</h3>
			</div>
			<div class="card-body">

				<?= \Config\Services::validation()->listErrors(); ?>

				<form action="create" method="post">

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
						<input type="button" value="Volver" class="btn btn-default float-left back">
					</div>
					<div class="form-group">
						<input type="submit" value="Continuar" class="btn float-right continue">
					</div>

				</form>


			</div>
			<div class="card-footer">
				<p>Gratis y sin compromiso</p>
			</div>
		</div>
	</div>
</div>
