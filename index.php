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

    </br></br>
    <h2>Sorry this has been changing a lot lately. Content has been misplaced. Stay tuned.</h2>
    <h1>Gandalf</h1>
    <h2>Other Names</h2>
    <ul>
      <li>Olorin</li>
      <li>Mithrandir</li>
      <li>Incanus</li>
      <li>Tharkun</li>
      <li>The White Rider</li>
      <li>Greyhame</li>
      <li>Stormcrwo</li>
      <li>Lathspell</li>
    </ul>
    <h2>Who was Gandalf?</h2>
    <p>Gandalf was one of the five Istari sent to Middle-earth by the Valar in the Third Age. In Valinor he was known as Olórin. Gandalf was instrumental in bringing about the demise of Sauron in T.A. 3019, chiefly by encouraging others and dispensing his wisdom at pivotal times. Gandalf was originally robed in grey, and second to Saruman in the Order of wizards. After his fall in Moria, Gandalf returned to Middle-earth as head of the Order, robed in white. Gandalf was noteworthy for his keen interest in Hobbits. </p>
    <h2>What powers did he have?</h2>
    <p>Gandalf was servant of the Secret Fire, wielder of the flame of Anor,[21] and bearer of Narya. </p>
    <p>He demonstrated extensive knowledge of the land and an assortment of magical abilities from trivial to essential. For example he would use his powers for entertainment, by blowing glowing smoke rings that moved around a room at his direction, and Bilbo Baggins remembered him for his fantastic fireworks displays. He created blinding flashes and other pyrotechnics to distract the goblins of the Misty Mountains, aiding the dwarves in their escape from Goblin-town. On the eastern slopes, he turned pine cones into flaming projectiles that threw hot sparks and started fires that would not easily go out. He was also able to come and go from the presence of Thorin and Company without being noticed.</p>
    <p>Sent back to Middle-earth as Gandalf the White, he possessed greater charisma and a limited degree of clairvoyance, although he was unable to peer into the land of Mordor to see the progress of Frodo and Sam. His power and authority had increased so that he could break Saruman's staff with a spoken command, showing his authority to throw the treacherous wizard out of the order. </p>

  </body>

  <footer>
    <?php $foot = file_get_contents('./modules/footer.html', true);
    echo $foot;
    ?>
  </footer>
</html>
