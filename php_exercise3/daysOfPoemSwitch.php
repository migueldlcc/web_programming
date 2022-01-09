<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
  </head>
  <body>
    <h1>Switch Statement</h1>
    <?php
    if (!isset($_POST['submit'])){
    ?>

    <form action="daysOfPoemSwitch.php" method="post">
      Enter a day of the week: <br />
      <input type="text" name="day">
      <input type="submit" name="submit" value="Click">
    </form>

    <?php
    }else{
      $day_of_the_week = $_POST["day"];
      $day1 = strtolower($day_of_the_week);
      switch($day1) {
        case 'monday':
          echo "Laugh on Monday, laugh for danger";
          break;
        case 'tuesday':
          echo "Laugh on Tuesday, kiss a stranger";
          break;
        case 'wednesday':
          echo "Laugh on Wednesday, laugh for a letter";
          break;
        case 'Thursday':
          echo "Laugh on Thursday, something better";
          break;
        case 'friday':
          echo "Laugh on Friday, laugh for sorrow";
          break;
        case 'saturday':
          echo "Laugh on Saturday, joy tomorrow";
          break;
        default:
          echo "Data not valid. Try again";
      }
    }
    ?>
  </body>
</html>
