Selecciona una competicion para consultar sus partidos.
<select>
    <?php
    foreach ($competiciones as $competicion) {
        echo "<option>{$competicion}</option>"; 
    }
    ?>
</select>
<script src="/media/competicion.js"></script>