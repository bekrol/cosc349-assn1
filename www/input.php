$siteName = $_REQUEST['siteName'];
$sitePage = $_REQUEST['sitePage'];
$siteUrl = $_REQUEST['siteUrl'];
$tags = $_REQUEST['tags'];

$sql = "INSERT INTO websites (siteName, sitePage, siteUrl, tags) VALUES (:siteName, :sitePage, :siteUrl :tags)";