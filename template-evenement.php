<?php
    /**
     * Template Name : evenement
     * @package WordPress
     * @subpackage cidw-4w4
     */
?>
<main class="site__main">
    <section class="evenement">
    <!-- <h1>---- page.php ------</h1> -->
    <?php if (have_posts()) : the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>

   <?php endif; ?>
</section>
</main>
<?php get_footer() ?>