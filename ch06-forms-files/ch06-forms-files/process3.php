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
    <h1>Thank You</h1>
    
    <p>
      Your <?= $creditcard ?> card, number <?= $ccnum ?>, has
      been successfully charged $1,000,000.  Thank you!
    </p>
    
    <?php
    if (isset($_REQUEST["express"])) {
      ?>
      <p>
        Thanks for using express shipping.
        Your card was charged an additional $10.
      </p>
      <?php
    }
    ?>
  </body>
</html>
