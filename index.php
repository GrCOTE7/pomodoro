<!--
********************************************************************************
**                                                                            **
** We're looking for contributors for developp this Pomodoro 's Project       **
**                                                                            **
** You can work with NetBeans, know HTML5 / CSS3 or PHP or MySQL or jQuery ?  **
**                                                                            **
** Please contact-us at : POMODO dot MANUDON.COM                              **
**                                                                            **
** https://github.com/GrCOTE7/pomodoro                                        **
**                                                                            **
********************************************************************************
-->
<!DOCTYPE html>
<html lang='en'>
  <head>
    <?php
    $_GET['u'] = ucfirst('mtest');
    $_GET['t'] = strtoupper('gc7');

    $username = isset($_GET['u']) ? $_GET['u'] : null;
    $teamname = isset($_GET['t']) ? $_GET['t'] : null;

    if ((is_null($username) || $username === "") && (is_null($teamname) || $teamname === "")) {
      die('</head><body><p>Please enter your user name!!</p></body></html>');
    }
    ?>
    <meta charset="utf-8">
    <title>Pomodoro | GC7</title>

    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />

    <meta name="application-name" content="Page Type"/>
    <meta name="robots" content="noindex,follow"/>
    <meta name="geo.placename" content="Paris, Ile de France, France" />

    <meta name="keywords" content="Groupe,COTE" />
    <meta name="description" content="Boosteur,Centre,Affaires, International,Business,E-Business,Marketing,E-Marketing,Formation, E-Formation,Enseignement,E-Enseignement" />
    <meta name="author" content="Harold COTE" />

    <!-- @   T O D O  : Flux: XML thématiques & RSS -->

    <link rel="shortcut icon" href="http://cote7.com/favicon.ico"/>
    <link rel="icon" type="image/x-icon"  href="http://cote7.com/favicon.ico"/>
    <!-- @   T O D O  : Possibilité d'avoir l'icône en .png-->        
    <!--<link rel="icon" type="image/png" href="#" />-->

    <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <link rel="stylesheet" href="lib/css/reset.min.css" />
    <!-- <link rel="stylesheet" href="lib/css/style.min.css" /> @TOFIX END-->
    <link rel="stylesheet" href="lib/css/style.css" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.countdown.pack.js"></script>
    <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>

    <script type="text/javascript">
      var username = "<?php echo ucfirst($username); ?>", teamname = "<?php echo strtoupper($teamname); ?>";</script>

  </head>
  <body>
    <div id="main">
      <div id="content">
        <div id="name">
          <?php
          echo (!is_null($teamname)) ? $username . ' - ' . $teamname : $username;
          ?>
          <span></span>
        </div>
        <div id='liResult'></div>
        <div id="timer"></div>
        <div id="progress"></div>
        <div id="buttons">
          <?php if (!is_null($teamname)) { ?>
            <button id="start" onclick="start_team();
                return false">Start</button>
            <button id="stop" onclick="stop_team();
                return false">Stop</button>
                  <?php } else { ?>
            <button id="start" onclick="start();
                return false">Start</button>
            <button id="stop" onclick="stop();
                return false">Stop</button>
                  <?php } ?>
        </div>
      </div>
    </div>
    <div id="dialog-confirm"></div>
    <div id="player"></div>
    <script type="text/javascript" src="js/index.js"></script>
    <script>
            $('#start').trigger('click');
    </script>
  </body>
</html>