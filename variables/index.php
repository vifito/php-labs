<?php
require __DIR__ . '/../include/template.php';

echo html_header('Proba de formularios');
?>
<div class="row">
  <div class="col-md-12">

    <h1>Variables SUPERGLOBALS</h1>

    <pre>
      <?php var_dump($_REQUEST); ?>
    </pre>

    <form action="#" method="post">
      <div class="form-group">
        <label for="variable-post">Variable POST</label>
        <input type="text" class="form-control" id="variable-post" name="variable_post" placeholder="Correo-e" />
      </div>

      <button type="submit" class="btn btn-default">Enviar</button>
    </form>

    <form action="#" method="get">
      <div class="form-group">
        <label for="variable-post">Variable GET</label>
        <input type="text" class="form-control" id="variable-post" name="variable_post" placeholder="Correo-e" />
      </div>

      <button type="submit" class="btn btn-default">Enviar</button>
    </form>

  </div><!-- .col-md-12 -->
</div><!-- .row -->

<?php
echo html_footer();
