<!DOCTYPE html>
<html>
  <head>
    <title>Ramus - The Unification of The World</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS/branches.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="CSS/css.css" media="screen" charset="utf-8">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function() {
        //Prepare dropdown box for countries
        $('select').material_select();

        //Prepare datepicker for birthday registration
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 123, // Creates a dropdown of 15 years to control year
          formatSubmit: 'yyyy-mm-dd'
        });
    </script>

    <?php
      include 'includes/navbar.php';
    ?>

<div class="container">
    <div class="row">
      <div id="signupForm" class="z-depth-3">
        <form action="processSignup.php" method="post">
            <h1 class="flow-text">Enter the first day of the rest of your life</h1>

            <div class="input-field">
              <input id="username" type="text" class="validate" name="username" required>
              <label for="username">Username *</label>
            </div>
            <div class="input-field">
              <input id="name" type="text" class="validate" name="name">
              <label for="name">Full Name</label>
            </div>
            <div class="input-field">
              <input id="email" type="email" class="validate" name="email" required>
              <label data-error="Please enter a valid address" for="email">Email Address *</label>
            </div>
            <div class="input-field">
              <input id="password" type="password" class="validate" name="password" required>
              <label for="password">Password *</label>
            </div>
            <div class="input-field">
              <input id="phone" type="tel" class="validate" name="phone">
              <label for="phone">Phone number</label>
            </div>

            <div class="input-field" style="margin-bottom: 30px">
              <h4 class="flow-text" style="text-align: left">Select your gender *</h4>

              <p>
                <input name="gender" value="male" type="radio" id="RdoBtn_male" checked/>
                <label for="RdoBtn_male">male</label>
              </p>
              <p>
                <input name="gender" value="female" type="radio" id="RdoBtn_female" />
                <label for="RdoBtn_female">female</label>
              </p>
              <p>
                <input name="gender" value="other" type="radio" id="RdoBtn_Red" />
                <label for="RdoBtn_Red">other</label>
              </p>
            </div>

            <div class="divider"></div>

            <div class="input-field" style="margin-top: 30px; margin-bottom: 30px">
              <h4 class="flow-text">Country</h4>
              <select class="browser-default" name="country" required>
                <option disabled selected>Where are you from</option>
                <?php
                  try {
                    require "includes/connection.php";

                    $statement = $con->prepare("SELECT iso, nicename FROM country");
                    $statement->execute();
                    //$row = $statement->fetch(PDO::FETCH_ASSOC);

                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                      $iso = $row['iso'];
                      $country = $row['nicename'];

                      echo '<option value="' . $iso . '">' . $country . '</option>';
                    }
                  } catch (PDOException $e) {
                    echo 'Error: ' . $e;
                  }
                ?>
              </select>
            </div>

    <!--
            <div class="input-field" style="margin-top: 30px">
              <input type="date" class="datepicker" name="birthday" value="Click to enter birth date">
            </div>
    -->

          <button class="btn waves-effect waves-light" type="submit" name="x">
            Enter The World
            <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
    </div>
  </div>


  <script type="text/javascript" src="JS/noSpaces.js"></script>
  <script type="text/javascript" src="JS/noAtSigns.js"></script>
  </body>
  
  <script type="text/javascript">
/*
  $('label').click(function() {
    $lastActive = $('label.active');
    $lastActive.removeClass('active');
    $(this).addClass('active');
    $(this).siblings().css('border-bottom', '4px solid #26A69A');
    $(this).css('color', ' #26A69A');
  });
*/
  </script>
</html>