<?php get_header('interior'); ?>
<!-- Amivivir -->
<section class="amivivir" id="amivivir"  style="background: url(/wp-content/themes/amipass/img/bg-amivivir.jpg) no-repeat fixed;">
	<div class="container text-center">
		<div class="row">
      <?php $amivivir = get_page_by_path('amivivir-saludable'); ?>
      <?php $titulo = apply_filters('the_title', $amivivir->post_title);?>
      <h2 class="text-center"><?php echo $titulo; ?></h2>
      <div class="col-md-6 col-md-offset-3">
        <?php $contenido = apply_filters('the_content', $amivivir->post_content);?>
        <p><?php echo wp_strip_all_tags($contenido); ?></p>
      </div>
        	<?php
                  $query = get_posts('post_type=saludable&numberposts=-1');
                  if(!empty($query)):
                ?>

                  <?php
                      $counter = 0;
                      foreach($query as $post):
                      setup_postdata($post);
                  ?>

                  <div class="col-md-4 box-zone text-left">
                      <div class="img-flow">
                        <?php
                          if(has_post_thumbnail()):
                            $thumb_id = get_post_thumbnail_id($post->ID);
                            $thumb = wp_get_attachment_image_src($thumb_id, 'saludable-home');
                            ?>
                           <img src="<?php echo $thumb[0]?>" alt="<?php the_title(); ?>" class="img-responsive center"/>
                          <?php 
                          else: ?>
                            <img src="http://placehold.it/360x327" alt="<?php the_title(); ?>" class="img-responsive center">
                          <?php
                          endif; ?>
                        <div class="border-effect">
                          <a href="<?php the_permalink(); ?>" class="btn-round">ver más</a>
                        </div>
                      </div>

		                  <h4 ><?php the_title();  ?></h4>
                      <span class="date"><?php the_time('d F'); ?></span>
		                <div class="contxt">
                      <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                    </div>

                </div>

              <?php
                endforeach;
                wp_reset_query();
            ?>
            <?php
                endif;
            ?>
             <!--  fin -->

            <div class="clearfix"></div>
       		</div>
		<!-- /.row -->
		</div>		
</section><!-- amivivir saludable -->
<?php get_footer(); ?>