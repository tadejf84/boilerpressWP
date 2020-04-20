<div class="container">
    <main class="main main--search">

        <?php if(!have_posts()) : ?>
            <?php get_template_part( 'template-parts/loop/content-empty' ); ?>
        <?php else : ?>
            <div class="row">
                <?php while(have_posts()) : the_post(); ?>
                    <div class="col-lg-4">
                        <?php get_template_part( 'template-parts/loop/content-search' ); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </main>
</div>

