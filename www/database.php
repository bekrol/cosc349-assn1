<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Database test page</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
<h1>Website collection</h1>

<p>Showing contents of papers table:</p>

<table border="1">
<tr><th>Site Name</th><th>Site Page</th><th>URL</th></tr>

<?php
 
$db_host   = '192.168.56.11';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM websites");

while($row = $q->fetch()){
  echo "<tr><td>".$row["siteName"]."</td><td>".$row["sitePage"]."</td></tr><tr><td>".$row["siteUrl"]."</td>\n";
}

?>
</table>
</body>
</html>

