<h3>Jugador agregado exitosamente!</h3>
<blockquote>
    <table>
        <tr>
            <td><?php echo $jugador->dorsal; ?></td>
            <td><?php echo $jugador->nombre; ?></td>
        </tr>
    </table>
</blockquote>

<h3>Jugadores</h3>
<p>
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
</p>