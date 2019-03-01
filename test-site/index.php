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
		<p><?php echo 'DB-Name: ' .$_ENV["DB_NAME"] . ''; ?></p>
		<p><?php echo 'DB-User: ' .$_ENV["DB_USER"] . ''; ?></p>
        </body>
</html>

<?php
$db_host = $_ENV["DB_HOST"];
$db_port = $_ENV["DB_PORT"];
$db_name = $_ENV["DB_NAME"];
$db_user = $_ENV["DB_USER"];
$db_password = $_ENV["DB_PASSWORD"];


$conn = pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_user password=$db_password");
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
