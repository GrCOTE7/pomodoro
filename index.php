<!--
********************************************************************************
**                                                                            **
** We're looking for contributors for developp this Pomodoro 's Project       **
**                                                                            **
** You work with NetBeans, know HTML5 / CSS3 or PHP or MySQL or jQuery ?      **
**                                                                            **
** Please contact-us at POMODO dot MANUDON.COM                                     **
**                                                                            **
********************************************************************************
-->
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Pomodoro</title>

    <?php
    $_GET['u'] = ucfirst('li');
    $_GET['t'] = strtoupper('gc7');

    $username = isset($_GET['u']) ? $_GET['u'] : null;
    $teamname = isset($_GET['t']) ? $_GET['t'] : null;

    if ((is_null($username) || $username === "") && (is_null($teamname) || $teamname === "")) {
      die('</head><body><p>Please enter your user name!!</p></body></html>');
    }
    ?>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.countdown.pack.js"></script>
    <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>

    <script type="text/javascript">
      var username = "<?php echo ucfirst($username); ?>";
      var teamname = "<?php echo strtoupper($teamname); ?>";</script>
    <style type="text/css">
      #content {
        width : 400px;
        height : 350px;
        margin : auto;
      }
      #timer {
        text-align : right;
        font-size : 100px;
        font-family : Arial;
        height: 100px;
      }
      #name {
        text-align : center;
        font-size : 80px;
        font-family : Arial;
        font-weight : bold;
        border-bottom : 2px solid black;
      }
      #progress {
        width : 380px;
        height : 50px;
        margin : auto;
        margin-top : 10px;
        margin-bottom : 10px;
      }
      #buttons {
        text-align : center;
      }
    </style>
  </head>
  <body>
    <div id="main">
      <div id="content">
        <div id="name">
          <?php
          if (!is_null($teamname)) {
            echo $username . ' - ' . $teamname;
          } else {
            echo $username;
          }
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