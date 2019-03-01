<html>
        <head><title>OpenShift Webhooks work!</title></head>
        <body>
                <h1>Wohoooo it works!</h1><br>
                <img src="animation.gif"><br>
		<h1><?php echo 'You\'re on the: =>' .$_ENV["STAGE"] . '<= Environment!'; ?></h1>
		<br>
		<h1>DB-Config</h1>
		<p><?php echo 'DB-Host: ' .$_ENV["DB_HOST"] . ''; ?></p>
		<p><?php echo 'DB-Port: ' .$_ENV["DB_PORT"] . ''; ?></p>
		<p><?php echo 'DB-User: ' $_ENV["DB_USER"]  ''; ?></p>
        </body>
</html>

<?php
// $conn = pg_connect(host=$_ENV["DB_HOST"] port=$_ENV["DB_PORT"] dbname=$_ENV["DB_NAME"] user=$DB_USER password=$DB_PASSWORD);
if (!$conn) {
  echo "PostgreSQL-DB-Verbindung fehlgeschlagen.\n";
  exit;
}

// $result = pg_query($conn, "SELECT * FROM customers");
if (!$result) {
  echo "Query fehlgeschlagen.\n";
  exit;
}

?>
