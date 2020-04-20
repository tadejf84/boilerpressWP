<div class="container">
    <main class="main main--index">

        <article>
            <h1><?php the_title(); ?></h1>
            <?php if(!have_posts()) : ?>
                
            <?php else : ?>
                <div class="row">
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="col-lg-4">
                            <?php get_template_part( 'template-parts/loop/content-index' ); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </article>

    </main>
</div>
