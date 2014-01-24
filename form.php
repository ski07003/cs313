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

      echo "Views=". $_SESSION['views'];

      ?>
    </div>

    <form name="input" action="results.php" method="get">
      First Name: <input type="text" name="firstname"><br/>
      Last Name: <input type="text" name="lastname"><br/>
      If you could have any one of the following super powers, what would it be? <br/>
      <input type="radio" name="power" value="Flight">Fly<br/>
      <input type="radio" name="power" value="Invisibility">Invisible<br/>
      <input type="radio" name="power" value="Teleportation">Teleportation<br/>
      <input type="radio" name="power" value="Time Travel">Time Travel<br/>
      <input type="radio" name="power" value="Super Speed">Super Speed<br/>
      <input type="radio" name="power" value="Super Strength">Super Strength<br/>
      
      Which is best?<br/>
      <input type="radio" name="food" value="Bacon Burger">Bacon Burger<br/>
      <input type="radio" name="food" value="BLT">BLT<br/>
      <input type="radio" name="food" value="Lasagna">Lasagna<br/>
      <input type="radio" name="food" value="Chicken Caesar Salad">Chicken Caesar Salad<br/>
      <input type="radio" name="food" value="Chicken Bacon Artichoke Pizza">Chicken Bacon Artichoke Pizza<br/>
      <input type="radio" name="food" value="Frozen Yogurt">Frozen Yogurt<br/>

      Which flavor is best?<br/>
      <input type="radio" name="flavor" value="Red">Red<br/>
      <input type="radio" name="flavor" value="Blue">Blue<br/>
      <input type="radio" name="flavor" value="Green">Green<br/>
      <input type="radio" name="flavor" value="Pink">Pink<br/>
      <input type="radio" name="flavor" value="Yellow">Yellow<br/>
      <input type="radio" name="flavor" value="Orange">Orange<br/>

      Who would win in a fight, Gandalf or Dumbledore?<br/>
      <input type="radio" name="fight" value="Dumbledore">Dumbledore<br/>
      <input type="radio" name="fight" value="Gandalf">Gandalf<br/>


      <input type="submit" value="Submit">
    </form>


  </body>

  <footer>
    <?php $foot = file_get_contents('/var/www/html/modules/footer.html');
    echo $foot;
    ?>
  </footer>
</html>
