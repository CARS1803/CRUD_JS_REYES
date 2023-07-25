<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario de ingreso de clientes</h1>
        <div class="row justify-content-center">
            <form class="col-lg-8 border bg-light p-3">
            <input type="text" name="cliente_id" id="cliente_id">
                <div class="row mb-3">
                    <div class="col">
                    <label for="cliente_nombre">Nombre del cliente</label>
                        <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_nit">Nit del cliente</label>
                        <input type="text" name="cliente_nit" id="cliente_nit" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                    <div class="col">
                        <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../src/js/funciones.js"></script>
    <script src="../../src/js/clientes/index.js"></script>
<?php include_once '../../includes/footer.php'?>