<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>GRE Vocab Quiz</title>
    <link href="quiz.css" type="text/css" rel="stylesheet" />
  </head>

  <body>
    <h1>Marty's GRE Vocab Quiz</h1>
    
    <?php
    $choices = read_words("words.txt");
    $answer_index = rand(0, count($choices) - 1);
    list($answer, $part, $defn) = explode("\t", $choices[$answer_index]);
    ?>

    <h2><?= $answer ?> - <?= $part ?></h2>
    
    <form action="quiz1.php" method="post">
      <ul id="choices">
        <?php
        foreach ($choices as $line) {
          list($word, $part, $defn) = explode("\t", $line);
          ?>

          <li>
            <label>
              <input type="radio" name="guess" value="<?= $defn ?>" />
              <?= $defn ?>
            </label>
          </li>

          <?php
        }
        ?>
      </ul>
      
      <div>
        <input type="submit" value="Submit" />
      </div>
    </form>
  </body>
</html>

<?php
function read_words($filename) {
  $parts_of_speech = array("noun", "verb", "adjective");
  shuffle($parts_of_speech);
  $answer_part = array_pop($parts_of_speech);
  
  $lines = file($filename);
  shuffle($lines);

  $choices = array();
  while (count($choices) < 5) {
    $line = array_pop($lines);
    list($word, $part, $defn) = explode("\t", $line);
    
    if ($part == $answer_part) {
      $choices[] = $line;
    }
  }

  return $choices;
}
?>
