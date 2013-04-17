<?php
$error = "none";

$sequence = "Morning warm up - let's go!:6," .
            "Get ready to run in place:12," .
            "Run in place:60," .
			"Sweet! Get ready for jumping jacks.:6," .
			"Jumping jacks:60," . 
			"Good! Get ready for situps.:6," .
			"As many situps as you can:60," .
			"Doing great! Here comes pushups.:6," . 
			"Pushups:60," . 
			"Awesome! Stand back up:6," . 
			"Squats!:60," .
			"Super! get set for lunges:6," . 
			"Lunges:60," . 
			"Okay - one more thing...:6," . 
			"Have a great day!:30";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

   <!-- <?php echo date("Y-m-d-H-i-s", $startTime); ?> -->

   <!-- <?php echo date("Y-m-d-H-i-s", $endTime); ?> -->
   <!-- <?php print_r(localtime()); ?> -->
   <head>

      <title>Timer - E.ggTimer.com</title>

      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <link rel="icon" type="image/ico" href="http://www.lemieuxster.com/favicon.ico" />
      <script type="text/javascript" src="/timer/swfobject.js"></script>

      <style type="text/css">

         /* hide from ie on mac \*/

      	html {

      		height: 100%;

      		overflow: hidden;

      	}

      	

      	#eggtimer {

      		height: 100%;

      	}

      	/* end hide */



      	body {

      		height: 100%;

      		margin: 0;

      		padding: 0;

      	}

      </style>

   </head>

   <body>

      <div id="eggtimer">

         A morning warm-up routine. Get Flash and join in! To see the timer you need Adobe Flash Player.

         <a href="http://www.adobe.com/go/getflashplayer">

            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />

         </a>

      </div>
      <script type="text/javascript">

		  // <![CDATA[

		  var eggTimer = new SWFObject("/timer/e.ggtimer.swf", "eggtimer", "100%", "100%", "9", "#FFFFFF");

		  eggTimer.addParam("wmode", "transparent");
		  eggTimer.addParam("allowscriptaccess", "always");
		  eggTimer.addVariable("sequence", "<?php echo $sequence; ?>");
		  eggTimer.addVariable("error", "<?php echo $error; ?>");

		  eggTimer.write("eggtimer");

		  // ]]>

      </script>
   </body>
</html>

                                                                                                                           