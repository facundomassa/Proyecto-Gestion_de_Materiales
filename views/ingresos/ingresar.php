<main class="contenedor-principal contenedor">
    <h2>Ingresos de Materiales</h2>
    <iframe class="contenedor ventana-emergente" src="/materiales/lista-materiales" frameborder="1px"></iframe>
    <table class="seleccionar">
        <thead class="seleccionar-head">
            <tr>
                <th>ID</th>
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <th>UNIDAD</th>
                <th>CANTIDAD</th>
                <th>CANCELAR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>15415637465</td>
                <td>HERRAJES</td>
                <td>unidad</td>
                <td><input name="cantidad" type="number" min="0"></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6" align="center"><button class="btn-agregar-item" id="agregar">Agregar mas elementos</button></td>
            </tr>
        </tfoot>
    </table>
</main>