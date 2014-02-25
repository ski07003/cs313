<?php
session_start();
if(isset($_SESSION["views"]))
{
  $_SESSION['views'] = $_SESSION['views'] + 1;
  //header('Location: results.php');
}
else
{
  $_SESSION['views'] = 1;
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

      //echo "Views=". $_SESSION['views'];

      ?>
    </div>
    <div id="content">
        <h2>Query:</h2>
        <form name="input" action="mysqltest.php" method="get">
          Select query attributes:</br>
          <input type="checkbox" name="query[]" value="user">Usernames</br>
          <input type="checkbox" name="query[]" value="adj">Adjectives</br> 
          <input type="checkbox" name="query[]" value="noun">Nouns</br>

          <input type="submit" value="Submit">
        </form>
    </div>

  </body>

  <footer>
    <?php $foot = file_get_contents('/var/www/html/modules/footer.html');
    echo $foot;
    ?>
  </footer>
</html>
