<!DOCTYPE html>
<html>
  <head>
    <title>Ramus - The Unification of The World</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS/css.css" media="screen" charset="utf-8">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

    <script type="text/javascript" src="/JS/handleScreen.js"></script>


    <?php
      include 'includes/navbar.php';
    ?>

    <div class="Banner" id="WelcomeBanner">
      <h2 class="whoAreWeTitle">Welcome to the new world</h2>
      <p class="whoAreWe flow-text">Welcome to Ramus, the main platform for international communication and Unity.</p>
      
      <div class="BannerScrollBtn">
        <a href="#OurStory"><i class="material-icons">arrow_downward</i></a>
      </div>
    </div>
    <div class="Banner" id="OurStory">
      <h2 class="whoAreWeTitle">Our story</h2>
      <p class="whoAreWe flow-text">We set out to provide a service that unifies every important aspect of the ordinary life such as instant messaging, social networking and general entertainment.</p>
      
      <div class="BannerScrollBtn">
        <a href="#OurGoal"><i class="material-icons">arrow_downward</i></a>
      </div>
    </div>
    <div class="Banner" id="OurGoal">
      <h2 class="whoAreWeTitle">Our goals</h2>
      <p class="whoAreWe flow-text">
      Unifying the web.<br>
      Providing a service worth caring about.<br>
      Live up to the potential of our dedicated users.
      </p>
      
      <div class="BannerScrollBtn">
        <a href="#footer"><i class="material-icons">arrow_downward</i></a>
      </div>
    </div>
    <div id="footer" style="background: #2E2E2E; width: 100%; height: 200px;"></div>

    <script type="text/javascript" src="/JS/smoothscrolling.js"></script>
  </body>
</html>
