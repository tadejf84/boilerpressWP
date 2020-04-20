<div class="container">
    <main class="main main--search">

        <header class="page-header">
            <h1 class="page-title">
                <?php esc_html_e( 'Search Results for: ', 'boilerpress' ); ?>
                <span class="query"><?php echo get_search_query(); ?></span>
            </h1>
        </header>

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

            <?php BoilerPress\Nav\archive_pagination(); // pagination ?>
        <?php endif; ?>

    </main>
</div>

