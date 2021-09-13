<main class="contenedor-principal">
    <h2>Ingresos de Materiales</h2>
        <section class="contenedor">
            <table class="tablaStock">
                <caption>Total de Ingresos</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <Th>Remito</Th>
                        <th>Descripcion</th>
                        <th>Unidad</th>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                        <th>IngresadoPor</th>
                        <th>Desde</th>
                        <th>Opereaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ingresos as $ingreso): ?>
                    <tr>
                        <td class="tabla-id"><?php echo $ingreso->id; ?></td>
                        <Td class="tabla-rem"><?php echo $ingreso->remitosID; ?></Td>
                        <?php foreach($materiales as $material) : 
                            if($ingreso->materialID === $material->id){ ?>
                                <td class="tabla-des"><?php echo $material->descripcion; ?></td>
                                <td class="tabla-uni"><?php echo $material->unidad; ?></td>
                            <?php } endforeach; ?>
                        <td class="tabla-can"><?php echo $ingreso->cantidad; ?></td>
                        <td class="tabla-fec"><?php echo $ingreso->fecha; ?></td>
                        <td class="tabla-ingP"><?php echo $ingreso->ingresadoPor; ?></td>
                        <td class="tabla-des"><?php echo $ingreso->desde; ?></td>
                        <td class="tabla-ope">[ICONO]</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form action="/ingresos/total" method="post" class="paginadores">
                <button type="submit" name="atras" <?php if($numPagina <= 1){  echo "style='visibility:hidden;'";  } ?> class="boton-siguiente atras"><-</button>
                
                <p><?php echo $numPagina . " de " . $totalPaginas . " paginas"?></p>
                <button type="submit" name="siguiente" <?php if($numPagina >= $totalPaginas){ echo "style='visibility:hidden;'";} ?> class="boton-siguiente siguiente">-></button>
                
                
            </form>
        </section>
    </main>
