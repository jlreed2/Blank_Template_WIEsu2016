<?php get_header(); ?>

<!--Begin Section Container -->
<section class="row">
    <div class="twelve columns">
        <!--Begin Loop-->
        <?php
            if ( have_posts()) {
                while ( have_posts()) {
                    the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
        
                <?php
                }
            }
        ?>
        <!--End Loop-->
    </div>
</section>

<?php get_footer(); ?>
