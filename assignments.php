<!DOCTYPE html>
<html>
  <head>
    <?php $head = file_get_contents('./modules/head.html', true);
          echo $head;
           ?>
  </head>

  <body>
    <div id="navigation">
      <?php $nav = file_get_contents('./modules/navigation.html', true);
            echo $nav;
             ?>
    </div>

    <ul><h3>Assignments</h3>
      <li><a href="form.php">Form Assignment</a></li>
      <li><a href="results.php">Survey Results</a></li>
      <li><a href="query.php">Query</a></li>
      <li><a href="auth.php">Change</a></li>
    </ul>
  </body>

  <footer>
    <?php $foot = file_get_contents('./modules/footer.html', true);
          echo $foot;
           ?>
  </footer>
</html>
