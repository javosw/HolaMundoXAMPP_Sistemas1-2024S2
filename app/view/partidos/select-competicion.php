Selecciona una competicion para consultar sus partidos.
<select onchange="getPartidos(event)">
    <?php
    echo "<option selected disabled hidden></option>";
    foreach ($competiciones as $competicion) {
        echo "<option>{$competicion->competicion}</option>"; 
    }
    ?>
</select>
<script src="/media/competicion.js"></script>