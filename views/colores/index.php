<div class="row text-center">
    <div class="col">
        <h1>Colores</h1>
    </div>
</div>
<div class="row justify-content-center">
    <form id="formProductos" class="col-lg-4 border rounded bg-light p-3">
        <input type="hidden" name="id" id="id">
        <div class="row mb-3">
            <div class="col-lg-12">
                <label for="nombre">Tipo de topico</label>
                <select class="form-control" name="topico" onchange="topico_cambio(this.value)" id="topico" required>
                            <option value="">Seleccione...</option>
                            
                        </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12">
                <label for="precio">Precio del producto</label>
                <input type="number" name="precio" id="precio" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button id="btnGuardar" type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="col">
                <button id="btnModificar" type="button" class="btn btn-warning w-100">Modificar</button>
            </div>
        </div>
    </form>
</div>
<div class="row justify-content-center" id="divTabla">
    <div class="col-lg-10">
        <table id="topicosTabla" class="table table-bordered table-hover w-100">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>CLASIFIACION</th>
                    <th>DESCRIPCION</th>
                    <th>CANTIDAD</th>
                    <th>COLOR</th>
                    <th>MODIFICAR</th>
                   
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
<script src="build/js/colores/index.js"></script>