<?php
    $categories = get_the_category();
?>
<article class="formation__cours <?= $categories[1] -> slug; ?> ">
    <?php
    $titre = get_the_title();
    $titreFiltreCours = substr($titre, 4, -6);
    $nbHeures = substr($titre, -6);
    //$nombre_heures = get_field("nombre_dheures"). "heures";
    //echo $nombre_heures;
    $sigleCours = substr($titre, 0, 3);
    $descCours = get_the_excerpt();
    ?>
        <?php the_post_thumbnail("thumbnail") ?>
        <h3 class="cours__titre"> 
            <a href="<?php get_permalink();?>">
                <?= $titreFiltreCours; ?>
        </a>          
    </h3>
        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
        <p class="cours__sigle"><?= $sigleCours; ?> </p>
        <p class="cours__desc"> <?= $descCours; ?></p>
                        
    </article>