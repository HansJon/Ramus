<!DOCTYPE html>
<html>
  <head>
    <title>Ramus - The Unification of The World</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS/css.css" media="screen" charset="utf-8">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>

<div class="container">
    <div class="row">
      <div id="signupForm" class="z-depth-3">
        <form action="processLogin.php" method="post">
            <h1 class="flow-text">Enter the first day of the rest of your life</h1>

            <div class="input-field">
              <input id="username" type="text" class="validate" name="loginID" required>
              <label for="username">Username or Email</label>
            </div>
            <div class="input-field">
              <input id="password" type="password" class="validate" name="password" required>
              <label for="password">Password</label>
            </div>


            <button class="btn waves-effect waves-light" type="submit" name="x">
              Enter The World
              <i class="material-icons right">send</i>
            </button>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="JS/noSpaces.js"></script>
  </body>
</html>