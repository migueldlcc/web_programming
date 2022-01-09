<?php
  $creditcard = $_REQUEST["ccard"];
  $ccnum = $_REQUEST["ccnumber"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Credit Card Billing</title>
  </head>

  <body>
<ul>
  <?php
    foreach ($_REQUEST as $param => $value) {
      ?>
      <li>The parameter named <?= $param ?> has value <?= $value ?></li>
      <?php
    }
  ?>
</ul>
  </body>
</html>
