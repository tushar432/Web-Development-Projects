<!doctype html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
  <style type="text/css">
    .a {
      outline-style: solid;
      outline-color: coral;
      padding: 5px 10px;
    }

    #videoBG {
      position: fixed;
      z-index: -1;
    }

    @media (min-aspect-ratio: 16/9) {
      #videoBG {
        width: 100%;
        height: auto;
      }
    }

    @media (max-aspect-ratio: 16/9) {
      #videoBG {
        width: auto;
        height: 100%;
      }
    }

    @media (max-width: 767px) {
      #videoBG {
        display: none;
      }

      body {
        background: url('https://img.wallpapersafari.com/phone/750/1334/29/75/EILTjk.jpg');
        background-size: cover;
      }
    }


    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 40%;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
      padding: 2px 16px;
    }

    @media(max-width: 767px; ) {

      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 40%;
      }

      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      }

      .container1 {
        padding: 2px 8px;
        color: white;
      }
    }

    @media (max-width: 767px) {
      .copyright {
        color: white;
      }
    }

    @media (max-width: 767px) {
      .copyright {
        color: white;
      }
    }


    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 10px;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }



    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <title>College Predictor JOSAA</title>

  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/coming-sssoon.css" rel="stylesheet" />

  <!--     Fonts     -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
  <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">

        </ul>
        </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">
              <i class="fa fa-facebook-square"></i>
              Share
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-twitter"></i>
              Tweet
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-envelope-o"></i>
              Email
            </a>
          </li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>
  <div class="main">


    <video id="videoBG" poster="https://img.wallpapersafari.com/phone/750/1334/29/75/EILTjk.jpg" autoplay muted loop>
      <source src="Untitled 1_1440p_Trim.mp4" type="video/mp4">
    </video>

    <!-- Customerly Live Chat Snippet Code -->
    <script>
      ! function() {
        var e = window,
          i = document,
          t = "customerly",
          n = "queue",
          o = "load",
          r = "settings",
          u = e[t] = e[t] || [];
        if (u.t) {
          return void u.i("[customerly] SDK already initialized. Snippet included twice.")
        }
        u.t = !0;
        u.loaded = !1;
        u.o = ["event", "attribute", "update", "show", "hide", "open", "close"];
        u[n] = [];
        u.i = function(t) {
          e.console && !u.debug && console.error && console.error(t)
        };
        u.u = function(e) {
          return function() {
            var t = Array.prototype.slice.call(arguments);
            return t.unshift(e), u[n].push(t), u
          }
        };
        u[o] = function(t) {
          u[r] = t || {};
          if (u.loaded) {
            return void u.i("[customerly] SDK already loaded. Use customerly.update to change settings.")
          }
          u.loaded = !0;
          var e = i.createElement("script");
          e.type = "text/javascript", e.async = !0, e.src = "https://messenger.customerly.io/launcher.js";
          var n = i.getElementsByTagName("script")[0];
          n.parentNode.insertBefore(e, n)
        };
        u.o.forEach(function(t) {
          u[t] = u.u(t)
        })
      }();

      customerly.load({
        "app_id": "b58e7c2d"
      });
    </script>
    <!-- End of Customerly Live Chat Snippet Code -->

    <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
      <h1 class="logo cursive">
        College Predictor
      </h1>
      <!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
      <div class="container">
        <form action="display.php" method="post">
          <div class="row">
            <div class="col-25">
              <label for="fname" style="font-family: 'Sansita Swashed', cursive; color: rgb(78, 48, 11)">
                <div class="a">First Name</div>
              </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="fname" placeholder="Your name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname" style="font-family: 'Sansita Swashed', cursive; color:rgb(78, 48, 11)">
                <div class="a">Last Name</div>
              </label>
            </div>
            <div class="col-75">
              <input type="text" id="lnamez" name="lname" placeholder="Your last name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="rank" style="font-family: 'Sansita Swashed', cursive; color:rgb(78, 48, 11) ">
                <div class="a">Branch</div>
              </label>
            </div>
            <div class="col-75">
              <select name="branch">
                <option value="All">All</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="ME">ME</option>
                <option value="EE/EEE">EE/EEE</option>
              </select>

            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="rank" style="font-family: 'Sansita Swashed', cursive; color:rgb(78, 48, 11) ">
                <div class="a">Rank</div>
              </label>
            </div>
            <div class="col-75">
              <input type="number" id="rank" name="rank" placeholder="xxxx">

            </div>
          </div>

          <div class="row">
            <br>
            <input type="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>


</body>
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>