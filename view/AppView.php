<?php
class AppView {
  public static function showApp($content) {
?>
<!DOCTYPE html>
<html lang='fr'>
  <head>
    <title>Langages Web 1 - PHP</title>
    <meta http-equiv='content-type' content='text/html; charset=utf-8' >
  </head>
  <body>
    <?php echo $content; ?>
  </body>
</html>
<?php
  }
}
?>