<div class="card" >
    <div class="card-header">
        <p>Solicita presupuestos</p>
        <div class="row">
            <div class="col-12">
                <div class="progress">
                    <div class="progress-bar bg-habitissimo" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>    
            <div class="col-4 pt-2">
                <h6 class="card-titlecard-subtitle mb-2 text-center">Tu solicitud</h6>
            </div>
            <div class="col-4 pt-2">
                <h6 class="card-titlecard-subtitle mb-2 text-muted text-center">Detalles</h6>
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
                        <label for="description">Descripción del trabajo</label>
                        <textarea class="form-control" id="description" rows="3"  name="description" required><?php
                                if (isset($this->description)) echo trim($this->description);
                            ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="subcategories">Subcategoría</label>
                        <?php
                            (isset($this->time)) ? $time = $this->time : $time= 0;
                        ?>
                        <select class="form-control" id="time">
                            <option <?php if ($time == 1 ) echo 'selected' ; ?> value="1"> Lo antes posible </option>
                            <option <?php if ($time == 2 ) echo 'selected' ; ?> value="2"> Entre 1 y 3 meses </option>
                            <option <?php if ($time == 3 ) echo 'selected' ; ?> value="3"> Más de 3 meses </option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Continuar" class="btn float-right continue-to-step-2">
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="card-footer text-muted text-center">
        <p>Gratis y sin compromiso</p>
    </div>
</div>
