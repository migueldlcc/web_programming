<!DOCTYPE html>
<html>
  <head>
    <title>If-else Statement</title>
  </head>
  <body>
    <?php
    $month = date('F', time());
    if ($month == 'August')
    {
      echo "It is August, so it si really hot";
    }
    else
    {
      echo "It is not August, so at least not in the peek of the heat";
    }
    ?>
  </body>
</html>
