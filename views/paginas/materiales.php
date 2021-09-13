<main class="contenedor-principal">
        <section class="contenedor">
            <table class="tablaStock">
                <caption>Stock Actual</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <Th>Codigo</Th>
                        <th>Descripcion</th>
                        <th>Unidad</th>
                        <th>Cantidad</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($materiales as $material): ?>
                    <tr>
                        <td class="tabla-id"><?php echo $material->id; ?></td>
                        <Td class="tabla-cod"><?php echo $material->codigo; ?></Td>
                        <td class="tabla-des"><?php echo $material->descripcion; ?></td>
                        <td class="tabla-uni"><?php echo $material->unidad; ?></td>
                        <td class="tabla-can"><?php echo $material->cantidad; ?></td>
                        <td class="tabla-ope">[ICONO]</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form action="/" method="post" class="paginadores">
                <button type="submit" name="atras" <?php if($numPagina <= 1){  echo "style='visibility:hidden;'";  } ?> class="boton-siguiente atras"><-</button>
                
                <p><?php echo $numPagina . " de " . $totalPaginas . " paginas"?></p>
                <button type="submit" name="siguiente" <?php if($numPagina >= $totalPaginas){ echo "style='visibility:hidden;'";} ?> class="boton-siguiente siguiente">-></button>
                
                
            </form>
        </section>
    </main>