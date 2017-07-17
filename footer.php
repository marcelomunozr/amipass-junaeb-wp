
</div> <!-- close main container -->

<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="ingresoLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <h2 class="text-center">Ingreso Intranet</h2>
        
    	<form id="login" method="POST" action="http://190.13.64.138/Amipass/AmipassLogIn/amipass.aspx">
        <div class="form-group">
          <label for="usuario">Usuario</label>
          <input type="text" class="form-control" id="rut" name="u" placeholder="Rut">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="pwd" name="p" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox">  Recordar Contraseña
          </label>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </form>
      </div>

    </div>
  </div>
</div><!-- LoginModal -->


<?php $celu = get_field('celu', 'options'); ?>
<?php $fijo = get_field('fijo', 'options'); ?>
<?php $correo = get_field('correo', 'options'); ?>
<footer>
  <div class="container">
    <div class="row">
        <div class="col-sm-6">
          <img src="<?php bloginfo('template_url'); ?>/img/logo-gob.png" alt="" class="img-responsive">
      </div>
      <!-- /.col-sm-6 -->
      <div class="col-sm-6 text-right">
        <h3>Contáctanos</h3>
        <p><a href="tel:<?php echo str_replace(" ", "", get_field('celu', 'option')); ?>"><?php echo $celu; ?></a> (desde red fija) o <a href="tel:<?php echo str_replace(" ", "", get_field('fijo', 'option')); ?>"><?php echo $fijo; ?></a></p>
        <p><?php echo $correo; ?></p>
        <div class="text-right social-nav">
          <?php $facebook = get_field('facebook', 'options'); ?>
          <?php $twitter = get_field('twitter', 'options'); ?>
          <?php $youtube = get_field('youtube', 'options'); ?>
          <?php if ($facebook!=""): ?>
            <a href="<?php echo $facebook; ?>" class="social" target="_blank"><i class="fa fa-facebook"></i></a>
          <?php endif ?>
          <?php if ($twitter!=""): ?>
            <a href="<?php echo $twitter; ?>" class="social" target="_blank"><i class="fa fa-twitter"></i></a>
          <?php endif ?>
          <?php if ($youtube!=""): ?>
            <a href="<?php echo $youtube; ?>" class="social" target="_blank"><i class="fa fa-youtube-play"></i></a>
          <?php endif ?>
        </div>
      </div>
      <!-- /.col-sm-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</footer>

<!-- jQuery -->
<script src="<?php bloginfo('template_url') ?>/vendor/jquery/jquery.js"></script>

<?php /* 


//estilo select

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

*/ ?>
  
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_url') ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Slick CaCarousel -->
<script src="<?php bloginfo('template_url') ?>/vendor/slick/slick.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Theme JavaScript -->
<script src="<?php bloginfo('template_url') ?>/js/grayscale.js"></script>

<!-- Mamasonry -->
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/masonry/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/masonry/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/masonry/animated-masonry-gallery.js"></script>

<!-- Mis Custom -->
<script src="<?php bloginfo('template_url') ?>/js/custom.js"></script>

<?php wp_footer(); ?>
</body>
</html>
