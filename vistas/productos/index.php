<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario de productos</h1>
        <div class="row justify-content-center">
            <form class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="producto_id" id="producto_id">
                <div class="row mb-3">
                    <div class="col">
                        <label for="producto_nombre">Nombre del producto</label>
                        <input type="text" name="producto_nombre" id="producto_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="producto_precio">Precio del producto</label>
                        <input type="number" step="0.01" min="0" name="producto_precio" id="producto_precio" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-info w-100">Buscar</button>
                        </div>
                    </div>
                </div>
            </form> 
        </div>
    </div>
    <script src="../../src/js/funciones.js"></script>
    <script src="../../src/js/productos/index.js"></script>
<?php include_once '../../includes/footer.php'?>