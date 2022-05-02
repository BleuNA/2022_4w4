<?php
    $categories = get_the_category();
?>
<article class="formation__cours <?= $categories[1] -> slug; ?> ">
    <?php
    $titre = get_the_title();
    $titreFiltreCours = substr($titre, 4, -6);
    //$nbHeures = substr($titre, -6);
    $nombre_heures = get_field("nombre_dheures"). "heures";
    $departement = get_field("departement");
    echo $nombre_heures;
    $sigleCours = substr($titre, 0, 3);
    $descCours = get_the_content();
    ?>
    <code class="cours__invisible"><?= $descCours; ?></code>
        <?php the_post_thumbnail("thumbnail") ?>
        <h3 class="cours__titre"> 
            <a href="<?php get_permalink();?>">
                <?= $titreFiltreCours; ?>
        </a>          
    </h3>
        <div class="cours__nbre-heure"><?= $nombre_heures; ?></div>
        <p class="cours__sigle"><?= $sigleCours; ?> </p>
        <p class="cours__desc"> 
            <?=wp_trim_words($descCours, 12, "<button class='cours__desc__bouton'>Suite</button>"); ?></p>
        <p class="cours__departement"><?= $departement; ?></p>
                        
    </article>