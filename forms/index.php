<?php
require __DIR__ . '/../include/template.php';

echo html_header('Proba de formularios');
?>
<div class="row">
  <div class="col-md-12">

    <h1>Proba de formularios</h1>

    <form action="recibe.php" method="post">
      <div class="form-group">
        <label for="correo">Correo-e</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo-e" />
      </div>
      <div class="form-group">
        <label for="contrasinal">Contrasinal</label>
        <input type="password" class="form-control" id="contrasinal" name="contrasinal" placeholder="Contrasinal" />
      </div>

      <button type="submit" class="btn btn-default">Enviar</button>
    </form>

  </div><!-- .col-md-12 -->
</div><!-- .row -->

<?php
echo html_footer();
