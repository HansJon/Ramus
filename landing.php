<!DOCTYPE html>
<html>
  <head>
    <title>Ramus - The Unification of The World</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/css.css" media="screen" charset="utf-8">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

    <form action="pontun.php" method="post">
        <h2>Login</h2>

        <div class="input-field">
          <input id="last_name" type="text" class="validate" name="kt" maxlength="10" pattern="^\d{10}$">
          <label>Username</label>
        </div>
        <div class="input-field">
          <input id="last_name" type="text" class="validate" name="nafn">
          <label>Nafn</label>
        </div>
        <div class="input-field">
          <input id="last_name" type="text" class="validate" name="heimilisfang">
          <label>Heimilisfang</label>
        </div>
        <div class="input-field">
          <input id="last_name" type="text" class="validate" name="netfang">
          <label>Netfang</label>
        </div>
        <div class="input-field">
          <input id="last_name" type="text" class="validate" name="simi" pattern="^\d{7}$" maxlength="7">
          <label>Símanúmer</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="x">Panta
          <i class="material-icons right">send</i>
        </button>
    </form>
  </body>
</html>
