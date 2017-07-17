<?php get_header(); ?>

<section class="homi-zone clearfix" id="home">
<?php query_posts('page_id=4');
if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="container controllerson relative">
			<div class="controlson le-prev"></div>
			<div class="controlson le-next"></div>
		</div>
	  	<div class="slick-homi">
      <?php $query = new WP_Query( array( 'post_type' => 'destacados', 'posts_per_page' => 6));// ?>
  		 <?php
      	$count1=0;
        if ($query->have_posts() ) {
            while ( $query->have_posts() ) { 
            $query->the_post();
				    $url = get_field('url-destacado');
  			 ?>				 
    			<div>
            <?php the_post_thumbnail('header', array('class' => 'img-responsive', 'title' => get_the_title()));?>
            <div class="overlay">
              <div class="container relative">
                <div class="col-md-7">
                  <h2><?php the_title();?></h2>
                  <?php 
                    $content = get_the_content();
                    $content = apply_filters('the_content', $content);
                   ?>
                  <p><?php echo $content; ?></p>
                  <?php if ($url!=""): ?>
                    <a href="<?= $url; ?>" class="btn btn-red-round">ver más</a>
                  <?php endif ?>
                </div>
              </div>
            </div>
    			</div>			
			<?php 
				$count1++;
				}
      }
			?>			
	  	</div>

<?php endwhile; endif; wp_reset_query(); ?>

</section>
<!-- Conoce la tarjeta -->
<section class="conocela" id="conocela"> 
	<div class="container">
		<div class="row">

      <?php $conoce = get_page_by_path('conoce-la-tarjeta'); ?>
      <?php $titulo = apply_filters('the_title', $conoce->post_title);?>
      <h2 class="text-center"><?php echo wp_strip_all_tags($titulo); ?></h2>

      <div class="col-md-6 col-md-offset-3 clearfix text-center">
        <?php $contenido = apply_filters('the_content', $conoce->post_content);?>
        <p><?php echo wp_strip_all_tags($contenido); ?></p>
      </div>
      <div class="clearfix"></div>
        <?php
                $query = get_posts('post_type=tarjeta&numberposts=4');
                if(!empty($query)):
                ?>

                  <?php
                      $counter = 0;
                      foreach($query as $post):
                      setup_postdata($post);
                  ?>
                  <div class="col-md-3 box-zone">
 

                  <?php 
                  $image = get_field('miniatura');
                  $size = 'conoce';
                  if( !empty($image) ): ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <img src="<?php echo $image; ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive responsive--full" />
                    </a>
                  <?php else : ?>
                      <?php if ( has_post_thumbnail() ) : ?>
                          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                              <?php the_post_thumbnail('conoce', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]); ?>

                          </a>
                      <?php endif; ?>
                  <?php endif; ?>


                        <div class="overzone">
                          <div class="flopi"></div>
                          <h4><?php the_title();  ?></h4>
                          <p><?php echo wp_trim_words( get_the_excerpt(), 10 ); ?></p>
                          <a href="<?php the_permalink(); ?>" class="btn btn-round-white">ver más</a>
                        </div><!-- overzone -->

                </div>

              <?php
                endforeach;
                wp_reset_query();
            ?>
            <?php
                endif;
            ?>
             <!--  fin -->

           
    		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
		
</section><!-- conoce-la-tarjeta -->

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
                  $query = get_posts('post_type=saludable&numberposts=3');
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
            <div class="container text-center clearfix">
              <a href="/saludable" class="btn-rounder">ver todas</a>
            </div>
       		</div>
		<!-- /.row -->
		</div>		
</section><!-- amivivir saludable -->
	
<section class="vida-universitaria clearfix" id="vida-universitaria">


		
			<h2 class="text-center">VIDA UNIVERSITARIA</h2>

      <div id="gallery">
          <div id="gallery-header">
              <div id="gallery-header-center">
                  <div id="gallery-header-center-right">
                      <div class="gallery-header-center-right-links" id="filter-all">Todos</div>
                      <div class="gallery-header-center-right-links" id="filter-concursos">Concursos</div>
                      <div class="gallery-header-center-right-links" id="filter-eventos">Eventos</div>
                      <div class="gallery-header-center-right-links" id="filter-noticias">Noticias</div>
                  </div>
              </div>
          </div><!-- gallery-header -->
          <div id="gallery-content">
            <div id="gallery-content-center">

              <?php
                $query = get_posts('post_type=vida_universitaria&numberposts=-1');
                if(!empty($query)):
                  $counter = 0;
                  foreach($query as $post):
                  setup_postdata($post);
                  $terms = get_the_terms( $post->ID, 'tipo_vida' );
                  if ( !empty( $terms ) ){
                      $term = array_shift( $terms );
                      
                  }
                           
                        ?>

                        <figure class="all <?php echo $term->slug; ?>">
                          <?php
                          if(has_post_thumbnail()):
                            $thumb_id = get_post_thumbnail_id($post->ID);
                            $thumb = wp_get_attachment_image_src($thumb_id, 'universitaria-home');
                            ?>
                           <img src="<?php echo $thumb[0]?>" alt="<?php the_title(); ?>" class="img-responsive center"/>
                          <?php 
                          else: ?>
                            <img src="http://placehold.it/500x327" alt="<?php the_title(); ?>" class="img-responsive center">
                          <?php
                          endif; ?>
                          <div class="absolute-caption">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                             <a href="<?php the_permalink(); ?>" class="btn-round">ver todas</a>
                          </div>

                        </figure>

                    <?php
                      endforeach;
                      wp_reset_query();
                  ?>
                  <?php
                      endif;
                  ?>
             <!--  fin -->

             </div><!-- gallery-content-center -->
            
          </div>
          <!-- /#gallery-content -->
      </div><!-- gallery -->


</section><!-- vida-universitaria -->
	

<section class="faq" id="faq" style="background: url('/wp-content/themes/amipass/img/bg-faq.jpg') no-repeat fixed;">

		<h2 class="text-center">Tienes Alguna Pregunta</h2>


		<div class="container text-center">
			<div class="row">

            <div class="col-md-8 col-md-offset-2">
        <p>Acá te damos algunas respuestas.</p>
      </div>     

      <div class="controllerson relative">
        <div class="controlson el-prev"></div>
        <div class="controlson el-next"></div>
      </div>

      <div class="slick-faq">
        <?php
            $query = get_posts('post_type=preguntas&numberposts=-1');
            if(!empty($query)):
          ?>

            <?php
              $total = 0;
              foreach($query as $post):
                $total++;
              endforeach;
              $counter = 1;
              foreach($query as $post):
                setup_postdata($post);
                $count_posts = wp_count_posts();
                $published_posts = $count_posts->publish;
              ?>

              <div>
                <div class="col-md-4 col-md-offset-1">
                  <div class="question">
                    <h4><?php the_title();  ?></h4>
                  </div>
                </div>
                <div class="col-md-7 col-md-offset-4">
                  <div class="answer">
                     <?php the_content(); ?>
                  </div>
                  
                </div>
                <div class="numbers">
                    <div class="col-md-4 text-center col-md-offset-1">
                      <h6><span class="big"><?php echo $counter; ?></span> de <span class="medium"><?php echo $total; ?></span></h6>
                    </div>
                </div>
              </div>


          <?php
            $counter++;
            endforeach;
            wp_reset_query();
        ?>
        <?php
            endif;
        ?>
         <!--  fin -->

     </div>
               <!-- /.slick-faq -->            
    </div>
</section> 


<!-- Mapa -->
<section class="mapa" id="mapa">
      <?php $mapa = get_page_by_path('mapa-ciclovias'); ?>
      <?php $titulo = apply_filters('the_title', $mapa->post_title);?>
      <h2 class="text-center"><?php echo $titulo; ?></h2>
        <div class="col-md-8 col-md-offset-2 text-center">
          <?php $contenidoz = apply_filters('the_content', $mapa->post_content);?>
          <p><?php echo wp_strip_all_tags($contenidoz); ?></p>
        </div>
        <div class="clearfix"></div>
        <div class="map-zone">
          <div class="overlay" onClick="style.pointerEvents='none'"></div>
          <?php echo get_field('iframe',$mapa); ?>
        </div> 
</section>

<!-- Contacto -->
<section class="contacto clearfix" id="contacto">

        <h2 class="text-center">CONTACTO</h2>

    <?php query_posts('page_id=29');
      if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-8 col-md-offset-2 text-center">
          <?php the_excerpt(); ?>
        </div>
      <div class="container">
        <div class="row">
        <?php the_content(); ?>
        <div class="clearfix"></div>
        </div>
      </div>

      <?php endwhile; endif; wp_reset_query(); ?>
  
</section>
<!-- /#contacto.contacto -->


<?php get_footer(); ?>
