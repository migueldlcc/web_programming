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
    $FILENAME = "words.txt";
    $correct = 0;
    $total = 0;

    if (isset($_REQUEST["guess"])) {
      $answer = $_REQUEST["word"];
      $guess = $_REQUEST["guess"];
      $correct = $_REQUEST["correct"];
      $total = $_REQUEST["total"];
      $total++;
      
      $defn = get_definition($answer, $FILENAME);
      if ($defn == $guess) {   # user guessed definition correctly
        $correct++;
        ?>

        <h2 class="correct">Correct!</h2>

        <?php
      } else {
        ?>

        <h2 class="incorrect">
          Incorrect; the correct definition was: <br />
          "<?= $defn ?>"
        </h2>

        <?php
      }
      ?>

      <h3>Your score: <?= $correct ?> / <?= $total ?></h3>

      <?php
    }

    $choices = read_words($FILENAME);
    $answer_index = rand(0, count($choices) - 1);
    list($answer, $part, $defn) = explode("\t", $choices[$answer_index]);
    ?>

    <h4><?= $answer ?> - <?= $part ?></h4>
    
    <form action="quiz.php" method="post">
      <ul id="choices">
        <?php
        foreach ($choices as $line) {
          list($word, $part, $defn) = explode("\t", trim($line));
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
        <input type="hidden" name="word" value="<?= $answer ?>" />
        <input type="hidden" name="total" value="<?= $total ?>" />
        <input type="hidden" name="correct" value="<?= $correct ?>" />
        <input type="submit" value="Submit" />
      </div>
    </form>
  </body>
</html>

<?php
# Reads the given file name looking for a line about the given word.
# Returns the definition of that word.
function get_definition($answer, $filename) {
  $lines = file($filename);
  foreach ($lines as $line) {
    list($word, $part, $defn) = explode("\t", trim($line));
    if ($answer == $word) {
      return $defn;
    }
  }
  return NULL;  # word not found; should not ever get here
}

# Reads the given file name and returns an array of 5 randomly 
# chosen lines representing 5 words of the same part of speech.
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
