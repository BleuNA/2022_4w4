<?php get_header() ?>
<main class="principal">
    <!-- <h1>category-cours.php</h1> -->
    <section class="formation">

    <a href="?cletri=title&ordre=asc">Ascendant</a>
    <a href="?cletri=title&ordre=desc">Descendant</a>
    
    <?php wp_nav_menu(array(
        "menu" => "categorie_cours",
        "container" => "nav"
    )) ?>
<?php
    $ma_categorie= get_category_by_slug($url_categorie_slug);
    echo "<h3>" . $ma_categorie->description. "</h3>"
?>

        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <?php if(is_category(array('cours', 'web', 'jeu', 'utilitaire', 'design', 'creation-3d', 'video'))) :?>
                <?php get_template_part('gabarit/content','cours');?>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>