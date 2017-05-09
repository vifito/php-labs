<?php
require __DIR__ . '/config.php';

function get_assets_path() {
  return ASSETS_PATH;
}

function html_header($title) {
  $assets_path = get_assets_path();
  $html=<<<HTML
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{$title}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{$assets_path}/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="{$assets_path}/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{$assets_path}/css/main.css">

        <script src="{$assets_path}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <div class="container">
HTML;
  return $html;
}

function html_footer($footer='') {
  $assets_path = get_assets_path();
  $html =<<<HTML
      <footer>
        <p>{$footer}</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{$assets_path}/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="{$assets_path}/js/vendor/bootstrap.min.js"></script>
        <script src="{$assets_path}/js/main.js"></script>
    </body>
</html>
HTML;
  return $html;
}
