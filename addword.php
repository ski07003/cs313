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

    <h2>Add Word to Database</h2>
    <div id="content">
      <form name="input" action="addwordproc.php" method="post">
        Word:<input type="text" name="word"><br/>
        Type of word:<br/>
        <input type="radio" name="type" value="noun">Noun<br/>
        <input type="radio" name="type" value="adj">Adjective<br/>
        <input type="radio" name="type" value="adv">Adverb<br/>
        <input type="radio" name="type" value="verb">Verb<br/>

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
