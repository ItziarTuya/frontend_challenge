<div class="card" >
    <div class="card-header">
        <p>Solicita presupuestos</p>
        <div class="row">
            <div class="col-12">
                <div class="progress">
                    <div class="progress-bar bg-habitissimo" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>    
            <div class="col-4 pt-2">
                <h6 class="card-titlecard-subtitle mb-2 text-center">Tu solicitud</h6>
            </div>
            <div class="col-4 pt-2">
                <h6 class="card-titlecard-subtitle mb-2 text-center">Detalles</h6>
            </div>
            <div class="col-4 pt-2">
                <h6 class="card-titlecard-subtitle mb-2 text-muted text-center">Tus datos</h6>
            </div>

        </div>
    </div>

    <div class="card-body">
        <div class="container">

            <div class="row pt-3">
                <div class="col-sm-12">

                    <div class="form-group">
                        <label for="categories">Categoría</label>
                        <select class="form-control" id="category" required>
                            <!--<option>Selecciona una categoría</option>-->
                            <?php
                            for ($i = 0; $i < count($this->options); $i++) {

                                echo $this->options[$i];
                            }
                            ?>
                        </select>
                        <p class="category-error font-italic"></p>
                    </div>

                    <div class="form-group">
                        <label for="subcategories">Subcategoría</label>
                        <select class="form-control" id="subcategory" readonly requiered>
                            <option value="0">Selecciona primero una categoría</option>
                        </select>
                        <p class="subcategory-error font-italic"></p>
                    </div>

                    <div class="form-group">
                        <label for="categories">Preferencia de precio</label>
                        <select class="form-control" id="rate">
                            <option value="1">Mejor calidad</option>
                            <option value="2">Relación calidad precio</option>
                            <option value="3">Lo más barato</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="button" value="Volver" class="btn btn-outline-secondary float-left back-to-step-1">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Continuar" class="btn float-right continue-to-step-3">
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="card-footer text-muted text-center">
        <p>Gratis y sin compromiso</p>
    </div>
</div>


