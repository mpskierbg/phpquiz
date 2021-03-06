<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
  // set qieston number
  $number = (int) $_GET['n'];
  /*
   * get total
   */
  $query = "SELECT * FROM `questions`";
  // get results
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $results->num_rows;

  /*
  * Get question
  */
  $query = "SELECT * FROM `questions`
              WHERE question_number = $number";
  // get result
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

  $question = $result->fetch_assoc();

  /*
  * Get choices
  */
  $query = "SELECT * FROM `choices`
              WHERE question_number = $number";
  // get results
  $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quizzer</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>PHP Quizzer</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="current">
        Question <?php echo $question['question_number']; ?> of <?php echo $total; ?>
      </div>
      <p class="question">
        <?php echo $question['text']; ?>
      </p>
      <form action="process.php" method="post">
        <ul class="choices">
          <?php while($row = $choices->fetch_assoc()): ?>
            <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
          <?php endwhile ?>
        </ul>
        <input type="submit" value="submit">
        <input type="hidden" name="number" value="<?php echo $number; ?>">
      </form>
    </div>
  </main>
  <footer>
    <div class="container">
      Copyright &copy; 2018 Quizzer
    </div>
  </footer>
</body>
</html>