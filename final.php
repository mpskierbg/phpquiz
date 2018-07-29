<?php session_start(); ?>
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
      <h2>You're Done!</h2>
      <p>Congrats you have completed the test</p>
      <p>Final Score: <?php echo $_SESSION['score']; ?></p>
      <a href="question.php?n=1" class="start">Try Again</a>
    </div>
  </main>
  <footer>
    <div class="container">
      Copyright &copy; 2018 Quizzer
    </div>
  </footer>
</body>
</html>