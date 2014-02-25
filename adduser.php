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

    
    <div id="content">
      <h2>Add Word to Database</h2>
      <form name="input" action="adduserproc.php" method="post">
        Username:<input type="text" name="username"><br/>
        Password:<input type="password" name="password"><br/>

        <input type="submit" value="Submit">
      </form>
    </div>


  </body>

  <footer>
    <?php $foot = file_get_contents('./modules/footer.html', true);
          echo $foot;
           ?>
  </footer>
</html>
