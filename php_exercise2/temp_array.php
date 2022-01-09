<!DOCTYPE html>
<html>
  <head>
    <title> My Web Page </title>
  </head>
  <body>
    <h1> Array of Temperatures </h1>
    <?php
    $temperatures = array(65, 58, 60, 62, 66, 79, 84, 80, 75, 78, 77, 82, 68, 64, 64, 60, 63, 60, 65, 65, 74, 82, 84, 84, 88, 90, 88, 82, 80, 82);
    $sum = 0;
    foreach($temperatures as $t)
    {
      $sum += $t;
    }
    $avg = round($sum / 30);
    echo "<p> The average temperature in Toledo, Sapin, during the month of May in 2020 was $avg &deg;F.</p>\n";

    rsort($temperatures); //I found that rsort produces a descendent sort
    $highestTemperatures = array_slice($temperatures, 0, 5);
    echo "<p> The warmest temperatures in Toledo, Spain, were: <br />\n";
    foreach ($highestTemperatures as $h)
    {
      echo "$h &deg;F <br/> \n";
    }
    echo "</p>";

    $lowestTemperatures = array_slice($temperatures, 25, 30);
    echo "<p> The coolest temperatures in Toledo, Spain, were: <br />\n";
    foreach ($lowestTemperatures as $l)
    {
      echo "$l &deg;F <br/> \n";
    }
    echo "</p>";
    ?>
  </body>
</html>
