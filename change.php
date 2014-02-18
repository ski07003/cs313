<?php
session_start();
session_regenerate_id();
if(!isset($_SESSION['user']))      // if there is no valid session
{
  header("Location: auth.php");
}

?>

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

    <h2>Update Database</h2>
    <div id="content">
      <ul>
        <li><a href="adduser.php">Add New User</a></li>
        <li><a href="addword.php">Add New Word</a></li>
      </ul>
    </div>


  </body>

  <footer>
    <?php $foot = file_get_contents('./modules/footer.html', true);
          echo $foot;
           ?>
  </footer>
</html>
