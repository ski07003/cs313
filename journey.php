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
        <form name="input" action="getName.php" method="get">
            <h3>As you reach the foot of the mountain,</h3> you come across a young couple screaming like lunatics. You quickly see there is a large brown bear coming in your direction. What do you do?<br />
            <input type="radio" name="bear" value="one">Luckily you brought your trusty samurai sword. You pull it out of its sheath.<br/>
            <input type="radio" name="bear" value="two">The young couple is in better shape than you so you trip one of them and make a mad dash for it.<br/>
            <input type="radio" name="bear" value="three">You notice there is a beehive above you in the trees so you make like a monkey with a plan and get up there.<br/>
            <input type="radio" name="bear" value="four">Your and eagle scout so you drop to the ground and play dead. duh.<br/><br/>
            <h3>Halfway up the mountain</h3> and your path brings you to a canyon with a rope bridge which snaps just as begin to take your first step. How will you get to the other side?<br/>
            <input type="radio" name="canyon" value="one">Easy. Make a new bridge by cutting down the nearest tree with my trusty samurai sword.<br/>
            <input type="radio" name="canyon" value="two">Once again, samurai sword. Cut all the hair off my bod and make a rope. Then, Indian Jones across.<br/>
            <input type="radio" name="canyon" value="three">I guess I'll just walk around.<br/>
            <input type="radio" name="canyon" value="four">I'm an eagle scout. I could climb down this canyon in my sleep. So I'll do that.<br/>
            <h3>The top of the mountain nears</h3> and there is a heavy storm ahead. Rain drops are slapping your face and only the lightning lights your path to the peak. You finally summit only to find an old man sitting on a box watching the storm. He looks at you and speaks, "I will give you whats in this box if you answer me a simple question. Who would win in a fight, Dumbledore or Gandalf?"<br/>
            <input type="radio" name="fight" value="one">Dumbledore<br/>
            <input type="radio" name="fight" value="two">Gandalf<br/>
            <h3>Your journey ends</h3> as you make it back home. Your Mentor sees the look on your face and is curious so he asks you what happened. "What did you find?"<br/>
            <input type="radio" name="box" value="one">Just an old man on a box. Thanks a ton.<br/>
            <input type="radio" name="box" value="two">Well its mine, I found it, it came to me! So back off.<br/>
            <input type="radio" name="box" value="three">I didn't really find anything but I learned some valuable lessons up there. I think I'll go camping more often.<br/>
            <input type="radio" name="box" value="four">I found the meaning of life.<br/>
            <p>Mentor tells you that you have done well. He proclaims that you are now a man and have earned a name to represent your new life ahead of you.</p>
            <input type="submit" value="Get the Name">
        </form>
    </div>


  </body>

  <footer>
    <?php $foot = file_get_contents('./modules/footer.html', true);
          echo $foot;
           ?>
  </footer>
</html>
