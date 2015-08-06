<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; else: ?>
    <p><?php _e('Desculpe, não há posts a exibir.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>