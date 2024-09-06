<?php
foreach ($noticias as $noticia) {
    echo '<blockquote>';
    echo "<h6>{$noticia->fecha}</h6>";
    echo "{$noticia->contenido}";
    echo '</blockquote>';
}
