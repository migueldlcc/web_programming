<!DOCTYPE html>
<html>
  <head>
    <title>Data Types</title>
  </head>
  <body>
    <?php
    $whatsit = 'Paul';
    echo "Value is ".gettype($whatsit).".<br/>";
    $whatsit = 4.20;
    echo "Value is ".gettype($whatsit).".<br/>";
    $whatsit = true;
    echo "Value is ".gettype($whatsit).".<br/>";
    $whatsit = 4;
    echo "Value is ".gettype($whatsit).".<br/>";
    $whatsit = null;
    echo "Value is ".gettype($whatsit).".<br/>";
    ?>
  </body>
</html>
