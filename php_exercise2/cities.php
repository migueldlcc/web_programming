<!DOCTYPE html>
<html>
  <head>
    <title> My Web Page </title>
  </head>
  <body>
    <h1> Cities </h1>
    <?php
    $cities = array("Tokio", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
    for ($i = 0; $i <= 9; $i++)
    {
      if ($i < 9)
      {
        echo $cities[$i].", ";
      }
      else
      {
        echo $cities[$i].".";
      }
    }

    echo "<p> Cities in an unodered list: </p>\n";
    sort($cities);
    echo "\n<ul>\n";
    foreach ($cities as $list)
    {
      echo "<li>$list</li>\n";
    }
    echo "</ul>";

    echo "<p> Added cities:<p>\n";
    array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
    sort($cities);
    echo "\n<ul>\n";
    foreach ($cities as $list)
    {
      echo "<li>$list</li>\n";
    }
    echo "</ul>";
    ?>
  </body>
</html>
