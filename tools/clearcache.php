<?php
include ('./path.php');

$path = $COREPATH . '/core/cache/';
if (file_exists($path)) {
	$objects = new RecursiveIteratorIterator (
		new RecursiveDirectoryIterator($path),
		RecursiveIteratorIterator::SELF_FIRST);
	$directories = array();
	$i = 0;

	/** Recursive process of Folders */
	foreach ($objects as $name => $object) {
		/** Remove files as found */
		if (is_file($name)) {
			unlink($name);

			/** Hold folders until end */
		} elseif (is_dir($name)) {
			$directories[$i++] = $name;
		}
	}

	/** Sort folders in reverse order and delete one at a time */        
	arsort($directories);
	foreach ($directories as $name) {
		rmdir($name);
	}

}

?>

<html>
  <head>
    <title>Clear cache</title>
  </head>
  <body>
		<h1>Clear cache</h1>
		<p>
      <a href="<?php echo './index.php'; ?>"><- Back to index</a>
    </p>
    <p>
      <a href="<?php echo './clearcache.php'; ?>">Clear cache agane</a>
		</p>
    <br>
    <p>
      <a href="/">Go to site</a>
    </p>
  </body>
</html>