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

    <h2>Results of Query</h2>
    <div id="content">
    
      <?php
      if (empty($_GET)) {
        echo "No Query Made<br/>";
      }
      else {
        $results = $_GET["query"];
        $adj = false;
        $noun = false;
        $value = false;
        foreach ($results as $value) {
          if ($value == "adj") {
            $adj = true;
          }
          if ($value == "noun") {
            $noun = true;
          }
          if ($value == "user") {
            $user = true;
          }
        }
	      
        require_once("dbInfo.php");
        $mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);
        if ($mysqli->connect_errno) {
           echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        }
        if ($user) {
          echo "Current Users:<ul>";
          $result = $mysqli->query("SELECT * FROM user");
          while ($row = $result->fetch_assoc()) {
             echo "<li>" . $row["username"] . "</li>";
          }
        }
        if ($adj) {
          echo "</ul><br/>Current Adjectives:<ul>";
          $result = $mysqli->query("SELECT * FROM adj");
          while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["adj"] . "</li>";
          }
        }
        if ($noun) {
          echo "</ul><br/>Current Nouns: <br/><ul>";
          $result = $mysqli->query("SELECT * FROM noun");
          while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["noun"] . "</li>";
          }
        }
        echo "</ul>";
      }

      ?>
    </div>


  </body>

  <footer>
    <?php $foot = file_get_contents('./modules/footer.html', true);
          echo $foot;
           ?>
  </footer>
</html>
