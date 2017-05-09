<?php
require __DIR__ . '/../include/template.php';

echo html_header('Recepción de formularios');
?>
<div class="row">
  <div class="col-md-12">

    <h1>Recepción dos datos</h1>

    <dl class="dl-inline">
      <dt>Correo</dt>
      <dd><?php echo $_POST['correo'] ?></dd>

      <dt>Contrasinal</dt>
      <dd><?php echo $_POST['contrasinal'] ?></dd>
    </dl>

    <div class="well">
      Este funcionamento dos formularios é millorable. <br/>
      Ver <a href="https://es.wikipedia.org/wiki/Post/Redirect/Get">Post/Redirect/Get</a>
    </div>

  </div><!-- .col-md-12 -->
</div><!-- .row -->

<?php
echo html_footer();
