<?php include 'database.php'; ?>
<?php 
  /*
   * get total number of questions 
   */
  $query = "SELECT * from questions";
  // get result
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $results->num_rows;
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
      <h2>Test your PHP knowledge</h2>
      <p>This is a multiple choise quiz to test your knowledge of PHP</p>
      <ul>
        <li><strong>Number of questions: </strong><?php echo $total; ?></li>
        <li><strong>Type: </strong>Multiple Choice</li>
        <li><strong>Estimate time: </strong><?php echo $total * .75; ?> minutes</li>
      </ul>
      <a href="question.php?n=1" class="start">Start</a>
    </div>
  </main>
  <footer>
    <div class="container">
      Copyright &copy; 2018 Quizzer
    </div>
  </footer>
</body>
</html>