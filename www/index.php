<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Weblink collection</title>
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
  <h1>Weblink collection form.</h1>

  <p>Collect and store your weblinks via the form below.</p>
  <p>Add site name and tags to help manage websites easier</p>

  <form action="database.php" method="POST">
  <p>  
    <label for="siteName">Site name:</label>
    <input type="text" name="siteName" id="siteName" required><br>
  </p>
  <p>
    <label for="siteURL">Site URL:</label>
    <input type="url" name="siteURL" id="siteURL" required><br>
  </p>
    <input type="submit" value="Submit">  

  </form>
  
  <a href="database.php">View your collection of web links here</a>

</body>
</html>

