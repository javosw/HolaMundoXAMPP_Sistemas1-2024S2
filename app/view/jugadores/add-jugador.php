<h3>Agrega un jugador al equipo</h3>

<p>
<form action="/holaMundo/jugadores/add" method="post">
    <p>
        <label for="dorsal">dorsal</label><br />
        <input name="dorsal" type="text" required />
    </p>
    <p>
        <label for="nombre">nombre</label><br />
        <input name="nombre" type="text" required />
    </p>
    <p>
        <label for="nacimiento">nacimiento</label><br />
        <input name="nacimiento" type="text" required />
    </p>
    <p>
        <label for="nit">nit</label><br />
        <input name="nit" type="text" required />
    </p>
    <input type="submit" value="AGREGAR" />
</form>
</p>