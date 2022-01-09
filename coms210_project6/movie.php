//This exercise is not finished yet as it does not run
<!DOCTYPE html>
<html>
  <!--
  Internet Programming, Homework Project 3: Movie Review Part 2
  Author: Miguel de la Cruz Cabello
  Date:18 February 2021
-->
  <head>
    <title>Different Movies - Rancid Tomatoes</title>
    <link rel="stylesheet" href="movie.css">
  </head>
  <body>
    <?php
    $movie = $_GET["film"];
    $try_text = file_get_contents("movie/info.txt");
    $try_overview = file_get_contents("movie/overview.txt");
    $text = explode("\n", $try_text); //splits the string by a string
    $overview = explode("\n", $try_overview);
    $count = 0;
    $freshbig = "";
    $rottenbig = "";

    // This let us know whether a movies is rated over 60% or not
    if (intval($text[2]) <= 60) // intval gets the integer value of a variable
    {
      $freshbig = "rottenbig.png";
      $rottenbig = "Rotten";
    }
    else
    {
      $freshbig = "freshbig.png";
      $rottenbig = "Fresh";
    }

    //movie general overview
    function definition_list() {
      foreach($overview as $row)
      {
        $row = explode(";", $row);
        echo "<dt>{$row[0]}</dt><dd>{$row[1]}</dd>";
      }
    }

    //it gets the information of each review
    function getP1() {
      $p1 = array();
      foreach (glob("$movie/review*.txt") as $filename) //glob finds pathnames matching a pattern
      {
        p1[$count] = file_get_contents($filename);
        $count++; //returns the number of elements in the array
      }
      for ($i = 0; $i < $count; $i++)
      {
        $information = explode("\n", p1[$i]);
      }
    }
    ?>

    <div class="banner">
			<img src="banner.png" alt="Banner">
		</div>
    <h1><?echo "$text[0] ($text[1])";?></h1>

    <div id="overall">
      <div id="left">
        <div id="rottenbig">
          <img src="<?=$freshbig?>" alt="<?=$rottenbig?>">
          <?=$text[2]?>%
        </div>

        <div class="column">
          <?php getP1();?>
        </div>
      </div>
      <div id="right">
        <div>
          <img src="<?=$movie?>/overview.png" alt="Overview">
        </div>
        <dl>
          <?php definition_list();?>
        </dl>
      </div>
      <p id="last">(1-10) of 88</p>
    </div>

    <div class="validators">
			<p>
				<img src="w3c-xhtml.png" alt="HTML Validator" /></a><br />
				<img src="w3c-css.png" alt="CSS Validator" /></a>
			</p>
		</div>
  </body>
</html>
