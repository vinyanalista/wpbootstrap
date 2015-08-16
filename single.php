<?php get_header(); ?>

<div class="row">
    <div class="col-md-8">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <p><em><?php echo ucfirst(get_the_time('l, j \d\e F \d\e Y')); ?></em></p>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <hr>
            <?php comments_template(); ?>

        <?php endwhile; else: ?>
            <p><?php _e('Desculpe, essa página não existe.'); ?></p>
        <?php endif; ?>

    </div>
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>