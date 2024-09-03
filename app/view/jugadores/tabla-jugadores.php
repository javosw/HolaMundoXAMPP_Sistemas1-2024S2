<table>
    <tr>
        <th>DORSAL</th>
        <th>NOMBRE</th>
    </tr>
    <?php
    foreach ($jugadores as $jugador) {
        echo '<tr>'; 
            echo "<td>{$jugador->dorsal}</td>";
            echo "<td>{$jugador->nombre}</td>";
        echo '</tr>';
    }
    ?>
</table>
