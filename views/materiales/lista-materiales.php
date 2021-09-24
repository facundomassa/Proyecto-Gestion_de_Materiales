<main class="contenedor-principal contenedor">
    <h2>Seleccionar Materiales</h2>
    <form action="">
        <table class="tablaStock">
                <caption>Stock Actual</caption>
                <thead>
                    <tr>
                        <th>Selec</th>
                        <th>ID</th>
                        <Th>Codigo</Th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($materiales as $material): ?>
                    <tr>
                        <td class="tabla-ope"><input type="checkbox"></td>
                        <td class="tabla-id"><?php echo $material->id; ?></td>
                        <Td class="tabla-cod"><?php echo $material->codigo; ?></Td>
                        <td class="tabla-des"><?php echo $material->descripcion; ?></td>
                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </form>
</main>