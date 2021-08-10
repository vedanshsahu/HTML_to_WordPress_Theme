<?php get_header(); ?>
    <body>
        <section class="container py-5">
            <div class="container">
                <?php while(have_posts(  )): the_post(  ); ?>
                <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3"><?php the_title( ); ?></h1>

                        <?php
                            // check if an image exist
                        if( has_post_thumbnail() ):
                            the_post_thumbnail('', array('class' => 'featured-image'));
                        endif;

                        the_content();?>
                <?php endwhile; ?>
            </div>
        </section>                
<?php get_footer(); ?>