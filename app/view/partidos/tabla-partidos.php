<h3><?php echo "{$competicionSeleccionada}"; ?></h3>

<table>
    <tr>
        <th>FECHA</th>
        <th>RIVAL</th>
        <th>ESTADIO</th>
    </tr>
    <?php
    foreach ($partidos as $partido) {
        echo '<tr>'; 
            echo "<td>{$partido->fecha}</td>";
            echo "<td>{$partido->rival}</td>";
            echo "<td>{$partido->estadio}</td>";
        echo '</tr>';
    }
    ?>
</table>
