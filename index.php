<?php
  if ($_REQUEST) {
    $auteur = $_REQUEST["auteur"];
    $bericht = $_REQUEST["bericht"];
    $submit = $_REQUEST["submit"];

    $file = 'blog.txt';
    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new person to the file
    $current = "$auteur<br> $bericht<br>" . $current;
    // Write the contents back to the file
    file_put_contents($file, $current);
  }
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="index.php" method="post">
      Auteur <input type="text" name="auteur" value=""><br>
      Bericht <textarea name="bericht" rows="8" cols="80"></textarea><br>
      Submit <input type="submit" name="submit" value="submit"><br>
    </form>
    <?php
        echo $current;
    ?>
  </body>
</html>
