<?php
include ('./path.php');
// echo $COREPATH;
?>

<html>
  <head>
    <title>Project action</title>
  </head>
  <body>
    <h1>Master branche action</h1>
    <p>
      <a href="<?php echo './import-db.php'; ?>">Import Database</a>
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