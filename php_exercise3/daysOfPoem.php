<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
  </head>
  <body>
    <?php
    if (!isset($_POST['submit'])) {
    ?>
    <h1>If-Elseif-Else Construction</h1>
    <form action="daysOfPoem.php" method="post">
      Enter a day of the week: <br />
      <input type="text" name="day">
      <input type="submit" name="submit" value="Click">
    </form>

    <?php
    }else {
      $day_of_the_week = $_POST["day"];
      $day1 = strtolower($day_of_the_week);
      if ($day1 == 'monday'){
        echo "Laugh on Monday, laugh for danger";
      }
      elseif ($day1 == 'tuesday') {
        echo "Laugh on Tuesday, kiss a stranger";
      }
      elseif ($day1 == 'wednesday') {
        echo "Laugh on Wednesday, laugh for a letter";
      }
      elseif ($day1 == 'thursday') {
        echo "Laugh on Thursday, something better";
      }
      elseif ($day1 == 'friday') {
        echo "Laugh on Friday, kiss a laugh for sorrow";
      }
      elseif ($day1 == 'saturday') {
        echo "Laugh on Saturday, joy tomorrow";
      }
      else {
        echo "Data not valid. Try again";
      }
    }
    ?>
  </body>
</html>
