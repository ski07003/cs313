<?php
session_start();
if(isset($_SESSION["user"])) {
  //$_SESSION['views'] = $_SESSION['views'] + 1;
  header('Location: change.php');
}
else {
}
?>

<!DOCTYPE html>
<html>
  <head>
    <?php $head = file_get_contents('/var/www/html/modules/head.html');
    echo $head;
    ?>
  </head>

  <body>
    <div id="navigation">
      <?php $nav = file_get_contents('/var/www/html/modules/navigation.html');
      echo $nav;
      ?>
    <h2>Login:</h2>
    </div>

    <form name="input" action="check.php" method="post">
      Username:<input type="text" name="username"><br><br>
      Password:<input type="password" name="password"><br><br>
      <input type="submit" value="Submit">
    </form>


  </body>

  <footer>
    <?php $foot = file_get_contents('/var/www/html/modules/footer.html');
    echo $foot;
    ?>
  </footer>
</html>
