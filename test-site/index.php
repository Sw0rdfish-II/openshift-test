<html>
        <head><title>OpenShift Webhooks work!</title></head>
        <body>
                <h1>Wohoooooo it works!</h1><br>
                <img src="animation.gif"><br>
		<?php
			echo "Test!";
			echo 'You are on: ' .$_ENV["STAGE"] . '!';
//  			$stage = getenv('STAGE');
//  			echo "Stage: $stage";
		?>  
        </body>
</html>
