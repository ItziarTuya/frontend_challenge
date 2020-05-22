<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Solicita presupuesto</h3>
			</div>
			<div class="card-body">

				<?= \Config\Services::validation()->listErrors(); ?>

				<form action="/budget/create" method="post">

					<?= csrf_field() ?>

					<div class="form-group">
						<label for="description">Descripción del trabajo</label>
						<textarea class="form-control" id="description" rows="3" name="description" required></textarea>
					</div>

					<fieldset class="form-group">
						<legend class="col-form-label pt-0">Fecha estimada</legend>
						<div class="form-check pl-5">
							<input class="form-check-input" type="radio" name="time" id="time1" value="assap">
							<label class="form-check-label" for="time1"> Lo antes posible </label>
						</div>
						<div class="form-check pl-5">
							<input class="form-check-input" type="radio" name="time" id="time2" value="1-3months">
							<label class="form-check-label" for="time2"> Entre 1 y 3 meses </label>
						</div>
						<div class="form-check pl-5">
							<input class="form-check-input" type="radio" name="time" id="time3" value="more3months">
							<label class="form-check-label" for="time3"> Más de 3 meses </label>
						</div>
				  </fieldset>
					
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
