<?php get_header(); ?>
<body>
<section class="container py-5">
<div class="container">
            <div>
                
                <h4 class="h2 py-5 typo-space-line"><?php the_title(); ?></h4>
                
                <p> 
                    <span>By: </span> 
                    <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
                        <?php echo get_the_author_meta('display_name'); ?>
                    </a>
                </p>

                <?php the_post_thumbnail(); ?>

                <p>
                    <span>Date: </span>
                    <?php the_time( get_option('date_format') ); ?>
                </p>

                <p class="text-muted pb-5 light-300"> <?php the_content(); ?></p>

            </div>
            
            
</div>
</section>

<?php get_footer(); ?>