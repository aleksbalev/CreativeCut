<?php
include ('./path.php');
include ($COREPATH . '/core/config/config.inc.php');

$filename = './base-dumps/back.sql';



$conn =new mysqli($database_server, $database_user, $database_password , $dbase); 
$conn->set_charset("utf8");
$query = '';
$sqlScript = file($filename);

?>

<html>
  <head>
    <title>Import Database</title>
  </head>
  <body>
		<?php
			foreach ($sqlScript as $line)	{
	
				$startWith = substr(trim($line), 0 ,2);
				$endWith = substr(trim($line), -1 ,1);
				
				if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
					continue;
				}
					
				$query = $query . $line;
				if ($endWith == ';') {
					mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
					$query= '';		
				}
			}
		?>
		<h1>SQL file imported successfullyr</h1>
		<p>
      <a href="<?php echo './index.php'; ?>"><- Back to index</a>
    </p>
    <p>
      <a href="<?php echo './import-db.php'; ?>">Import Database agane</a>
    </p>
    <p>
      <a href="<?php echo './clearcache.php'; ?>">Clear cache</a>
		</p>
		
    <br>
    <p>
      <a href="/">Go to site</a>
    </p>
  </body>
</html>