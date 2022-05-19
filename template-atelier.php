<?php
    /**
     * Template Name: Atelier
     * 
     * @package WordPress
     * @subpackage cidw-4w4
     */
?>

<?php get_header(); ?>
<main class="site__main">
    <article class="atelier">
    <!-- <h1>---- page.php ------</h1> -->
    <?php if (have_posts()) : the_post(); ?>
        <h1><?php the_title() ?></h1>
        <section class="atelier__description">
            <?php the_field('description_de_latelier'); ?>   
        </section>
        <p class="atelier__animateur">
            <?php the_field('animateur'); ?>
        </p>
        <p class="atelier__local">
            <?php the_field('local_ou_se_deroulera_latelier'); ?>
        </p>
        <p class="atelier__duree">
            <?php the_field('duree_dune_seance_datelier'); ?>
        </p>
        <p class="atelier__date__debut">
            <?php the_field('date_de_debut_de_latelier'); ?>
        </p>
        <p class="atelier__date__fin">
            <?php the_field('date_de_fin_de_latelier'); ?>
        </p>
        <p class="atelier__jours">
            <?php the_field('jour_de_la_semaine_de_latelier'); ?>
        </p>
        <p class="atelier__heure__debut">
            <?php the_field('heure_de_debut'); ?>
        </p>
        <p class="atelier__heure__fin">
            <?php the_field('heure_de_fin'); ?>
        </p>
        <?php
        $image = get_field('image');
        if (!empty($image)):  ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr() ?>">
        <?php endif; ?>
        

   <?php endif; ?>
    </article>
</main>
<?php get_footer() ?>