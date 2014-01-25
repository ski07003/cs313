<?php
//$dir = 'json';
//if (!file_exists('results.php'))
//{
 //mkdir ($dir, 0777);
//  $results = file_get_contents("2results.json");
//}
//else
//{
//  $results = file_get_contents("results.json");
//}

$results = file_get_contents("json/results.json");
$decoded = json_decode($results, true);
//echo $results;

if (empty($_GET))
{
//Do nothing
}
else
{
  $decoded['power'][$_GET["power"]] = $decoded['power'][$_GET["power"]] + 1;
  $decoded['food'][$_GET["food"]] = $decoded['food'][$_GET["food"]] + 1;
  $decoded['flavor'][$_GET["flavor"]] = $decoded['flavor'][$_GET["flavor"]] + 1;
  $decoded['fight'][$_GET["fight"]] = $decoded['fight'][$_GET["fight"]] + 1;
  
  $encode = json_encode($decoded);

// echo $encode;
 file_put_contents('json/results.json', $encode);
//  file_put_contents('1results.json', $decoded);
}


$pwfly = $decoded['power']['Flight'];
$pwinv = $decoded['power']['Invisibility'];
$pwtel = $decoded['power']['Teleportation'];
$pwtim = $decoded['power']['Time Travel'];
$pwsst = $decoded['power']['Super Strength'];
$pwssp = $decoded['power']['Super Speed'];

$foBB = $decoded['food']['Bacon Burger'];
$foBL = $decoded['food']['BLT'];
$foLa = $decoded['food']['Lasagna'];
$foCC = $decoded['food']['Chicken Caesar Salad'];
$foCB = $decoded['food']['Chicken Bacon Artichoke Pizza'];
$foFY = $decoded['food']['Frozen Yogurt'];

$flR = $decoded['flavor']['Red'];
$flB = $decoded['flavor']['Blue'];
$flG = $decoded['flavor']['Green'];
$flP = $decoded['flavor']['Pink'];
$flY = $decoded['flavor']['Yellow'];
$flO = $decoded['flavor']['Orange'];

$fightGan = $decoded['fight']['Gandalf'];
$fightDum = $decoded['fight']['Dumbledore'];

?>

<!DOCTYPE html>
<html>

  <head>
  </head>

  <body>

    <h1>Thank You for Your Time</h1>
    <h2>Survey Results</h2>
    <h3>Super Powers</h3>
    <table border="1">
      <tr>
        <td>Power</td>
        <td>Votes</td>
      </tr>
      <tr>
        <td>Flight</td>        
        <td><?php  echo $pwfly;?></td>
      </tr>
      <tr>
        <td>Invisibility</td>        
        <td><?php  echo $pwinv;?></td>
      </tr>
      <tr>
        <td>Teleportation</td>        
        <td><?php echo $pwtel;?></td>
      </tr>
      <tr>
        <td>Time Travel</td>        
        <td><?php  echo $pwtim;?></td>
      </tr>
      <tr>
        <td>Super Strength</td>        
        <td><?php  echo $pwsst;?></td>
      </tr>
      <tr>
        <td>Super Speed</td>        
        <td><?php  echo $pwssp;?></td>
      </tr>    
    </table>

    <h3>Food</h3>
    <table border="1">
      <tr>
        <td>Food</td>
        <td>Votes</td>
      </tr>
      <tr>
        <td>Bacon Burger</td>        
        <td><?php  echo $foBB;?></td>
      </tr>
      <tr>
        <td>BLT</td>        
        <td><?php  echo $foBL;?></td>
      </tr>
      <tr>
        <td>Lasagna</td>        
        <td><?php  echo $foLa;?></td>
      </tr>
      <tr>
        <td>Chicken Caesar Salad</td>        
        <td><?php  echo $foCC;?></td>
      </tr>
      <tr>
        <td>Chicken Bacon Artichoke Pizza</td>        
        <td><?php echo $foCB;?></td>
      </tr>
      <tr>
        <td>Frozen Yogurt</td>        
        <td><?php  echo $foFY;?></td>
      </tr>
    </table>

    <h3>Flavors</h3>
    <table border="1">
      <tr>
        <td>Flavor</td>
        <td>Votes</td>
      </tr>
      <tr>
        <td>Red</td>        
        <td><?php echo $flR;?></td>
      </tr>
      <tr>
        <td>Blue</td>        
        <td><?php echo $flB;?></td>
      </tr>
      <tr>
        <td>Green</td>        
        <td><?php  echo $flG;?></td>
      </tr>
      <tr>
        <td>Pink</td>        
        <td><?php  echo $flP;?></td>
      </tr>
      <tr>
        <td>Yellow</td>        
        <td><?php echo $flY;?></td>
      </tr>
      <tr>
        <td>Orange</td>        
        <td><?php echo $flO;?></td>
      </tr>
    </table>

    <h3>The Fight</h3>
    <table border="1">
      <tr>
        <td>Contestant</td>
        <td>Votes</td>
      </tr>
      <tr>
        <td>DumbleDore</td>
        <td><?php echo $fightDum;?></td>
      </tr>
      <tr>
        <td>Gandalf</td>
        <td><?php echo $fightGan;?></td>
      </tr>
    </table>    
  </body>
  
</html>
