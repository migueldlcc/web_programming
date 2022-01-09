<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
  </head>
  <body>
    <h1>Favorite City</h1>
    <?php
    if (!isset($_POST['submit'])) {
    ?>
    Enter your fovorite ciy: <br />
    <form action = "favoriteCity.php" method="post">
      <input type="text" name="city">
      <input type="submit" name="submit" value="Click">
    </form>

    <?php
    }else
    {
      $city = $_POST['city'];
      echo "Your favorite city is: $city";
    }
    ?>
  </body>
</html>
