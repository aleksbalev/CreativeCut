<?
/* $file = 'wsp.zip';

// get the absolute path to $file
$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE) {
  // extract it to the path we determined above
  $zip->extractTo($path);
  $zip->close();
  echo "WOOT! $file extracted to $path";
} else {
  echo "Doh! I couldn't open $file";
}
*/
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";



$output = shell_exec('ls -lart ./*');
echo "<pre>$output</pre>";
 
//system('unzip $master.zip'); 
?> 