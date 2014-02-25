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
    <h2>Are you ready to begin?</h2>
    <p>You are too old to be jobless and sitting around your parents basement playing video games online with angry 10 year old kids. It is time to become a man. You must journey to the top of Mount Chroot and bring back the treasure you find at the top. Then you will be a man. Now go my son!
    <form action="journey.php">
      <input type="submit" value="Start">
    </form>
    </div>


  </body>

  <footer>
    <?php $foot = file_get_contents('./modules/footer.html', true);
          echo $foot;
           ?>
  </footer>
</html>
