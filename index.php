<!DOCTYPE html>
<html>
  <head>
    <title>Ramus - The Unification of The World</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

    <?php
      session_start();

      echo $_SESSION['uid'];
    ?>

    <div class="container">
      <div class="row">
        <div class="col s1 blue darken-2">1</div>
        <div class="col s1 blue darken-2">2</div>
        <div class="col s1 blue darken-2">3</div>
        <div class="col s1 blue darken-2">4</div>
        <div class="col s1 blue darken-2">5</div>
        <div class="col s1 blue darken-2">6</div>
        <div class="col s1 blue darken-2">7</div>
        <div class="col s1 blue darken-2">8</div>
        <div class="col s1 blue darken-2">9</div>
        <div class="col s1 blue darken-2">10</div>
        <div class="col s1 blue darken-2">11</div>
        <div class="col s1 blue darken-2">12</div>
      </div>

      <div class="row">
        <div class="col s12 center-align"><span class="flow-text">This div is 12-columns wide</span></div>
        <div class="col s6 center-align"><span class="flow-text">This div is 6-columns wide</span></div>
        <div class="col s6 center-align"><span class="flow-text">This div is 6-columns wide</span></div>
      </div>

      <div class="divider"></div>
      <div class="section">
        <h5>Section 1</h5>
        <p>Stuff</p>
      </div>
      <div class="divider"></div>
      <div class="section">
        <h5>Section 2</h5>
        <p>Stuff</p>
      </div>
      <div class="divider"></div>
      <div class="section">
        <h5>Section 3</h5>
        <p>Stuff</p>
      </div>

      <div class="row center-align">
        <div class="col s4">
          <h2>A</h2>

          <p>Hello There this is the intro</p>
        </div>
        <div class="col s4">
          <h2>B</h2>

          <p>Hello There this is the intro</p>
        </div>
        <div class="col s4">
          <h2>C</h2>

          <p>Hello There this is the intro</p>
        </div>
      </div>


      <div class="row">
        <div class="col s12"><p>s12</p></div>
        <div class="col s12 m4 l2"><p>s12 m4</p></div>
        <div class="col s12 m4 l8"><p>s12 m4</p></div>
        <div class="col s12 m4 l2"><p>s12 m4</p></div>
      </div>
      <div class="row">
        <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
        <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
        <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
        <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
      </div>




      <div class="row" style="text-align: center">
        <div class="col grid-example s12 blue darken-2 waves-effect waves-light"><span class="flow-text">s12</span></div>
        <div class="col grid-example s12 m4 l2 teal lighten-1"><span class="flow-text">s12 m4 l2</span></div>
        <div class="col grid-example s12 m4 l8 teal lighten-1"><span class="flow-text">s12 m4 l8</span></div>
        <div class="col grid-example s12 m4 l2 teal lighten-1"><span class="flow-text">s12 m4 l2</span></div>
        <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span></div>
        <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span></div>
        <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span></div>
        <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span></div>
      </div>

      <blockquote cite="http://google.com">
        <p>Hello there.</p>
        <p>Are you seeing this?</p>
      </blockquote>






        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
          <a class="btn-floating btn-large blue">
            <i class="large material-icons">mode_edit</i>
          </a>
          <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
          </ul>
        </div>


        <a class="waves-effect waves-light btn-large">Button</a>
        <a class="waves-effect waves-light btn-large"><i class="material-icons left">add</i>button</a>
        <a class="waves-effect waves-light btn-large"><i class="material-icons right">cloud</i>button</a>


        <div style="width: 100%; height: 50px"></div>


        <div class="row">
          <div class="col s12 m12 l6">
            <div class="card hoverable">
              <div class="card-image">
                <img src="http://pcwallart.com/images/milky-way-from-earth-nasa-wallpaper-1.jpg">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>

          <div class="col s12 m12 l6">
            <div class="card hoverable">
              <div class="card-image">
                <img src="http://pcwallart.com/images/milky-way-from-earth-nasa-wallpaper-1.jpg">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
            </div>
        </div>
      </div>



      <ul class="collection">
        <li class="collection-item avatar">
          <img src="http://pcwallart.com/images/milky-way-from-earth-nasa-wallpaper-1.jpg" alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">folder</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle green">insert_chart</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle red">play_arrow</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
      </ul>


      </div>


  </body>
</html>
