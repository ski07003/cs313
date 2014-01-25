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

    <h2>Don't Look! I'm not ready</h2>


  </body>

  <footer>
    <?php $foot = file_get_contents('./modules/footer.html', true);
          echo $foot;
           ?>
  </footer>
</html>
