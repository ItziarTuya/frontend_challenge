<div class="card" >
    <div class="card-header">
        <p>Solicita presupuestos</p>
        <div class="row">
            <div class="col-12">
                <div class="progress">
                    <div class="progress-bar bg-habitissimo" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>    
            <div class="col-4 pt-2">
                <h6 class="card-titlecard-subtitle mb-2 text-center">Tu solicitud</h6>
            </div>
            <div class="col-4 pt-2">
                <h6 class="card-titlecard-subtitle mb-2 text-center">Detalles</h6>
            </div>
            <div class="col-4 pt-2">
                <h6 class="card-titlecard-subtitle mb-2 text-center">Tus datos</h6>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="container">

            <div class="row pt-3">
                <div class="col-sm-12">

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" class="form-control" placeholder="Introduzca su nombre" required 
                                <?php if (isset($this->name)) echo $this->name; ?> />

                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" class="form-control" placeholder="Introduzca su e-mail" required
                               <?php if (isset($this->email)) echo trim($this->email); ?> />
                    </div>

                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" id="phone" class="form-control" placeholder="Introduzca su teléfono" required 
                            <?php if (isset($this->phone)) echo trim($this->phone); ?> />
                    </div>

                    <div class="form-group">
                        <input type="button" value="Volver" class="btn btn-outline-secondary float-left back-to-step-2">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Finalizar" class="btn float-right finish">
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="card-footer text-muted text-center">
        <p>Gratis y sin compromiso</p>
    </div>
</div>