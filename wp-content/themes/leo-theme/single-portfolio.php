<?php get_header(); ?>

  <div class="container">
  <div class="page-header">
       <div class="row">
         <div class="col-xs-9">
           <h1>Players</h1>
         </div>
         <div class="col-xs-3 prev-next">
          <?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>' ); ?>
          <a href="<?php bloginfo('url'); ?>/?p=49"><span class="glyphicon glyphicon-th"></span></a>
          <?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>' ); ?>
          </div>
       </div>
     </div>

    <div class="row">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <div class="col-sm-8 portfolio-image">
            <?php
              $thumbnail_id = get_post_thumbnail_id();
              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
            ?>

            <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"></a></p>
           </div>

            <div class="col-md-4">
             <h1><?php the_title(); ?></h1>
             <?php the_content(); ?>
             <p><a class="btn btn-large btn-primary" href="<?php the_field('link'); ?>" target="_blank">View Final Piece <span class="glyphicon glyphicon-fullscreen"></span></a></p>
            </div>

        <?php endwhile; else: ?>
           <!-- we run this else if there is no content -->
          <div class="page-header">
            <h1>Wups!</h1>
          </div>

          <p>Looks like we have no content for this page?</p>

        <?php endif; ?>


    </div><!-- END .row -->

<?php get_footer(); ?>
