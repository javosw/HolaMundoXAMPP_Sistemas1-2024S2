<section>
    <?php
    foreach ($noticias as $noticia) {
        echo '<article>';
        echo "<h6>{$noticia->fecha}</h6>";
        echo "{$noticia->contenido}";
        echo '</article>';
    }
    ?>
</section>