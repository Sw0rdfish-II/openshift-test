<html>
        <head><title>OpenShift Webhooks work!</title></head>
        <body>
                <h1>Wohoooo it works!</h1><br>
                <img src="animation.gif"><br>
		<h1><?php echo 'You\'re on the: =>' .$_ENV["STAGE"] . '<= Environment!'; ?></h1>
        </body>
</html>

<?php
$conn = pg_connect("host=.$_ENV["DB_HOST"] port=$DB_PORT dbname=$DB_NAME user=$DB_USER password=$DB_PASSWORD");
if (!$conn) {
  echo "PostgreSQL-DB-Verbindung fehlgeschlangen.\n";
  exit;
}

$result = pg_query($conn, "SELECT * FROM customers");
if (!$result) {
  echo "Query fehlgeschlagen.\n";
  exit;
}

?>
