<html>
  <head>
    <title>WordPress CD</title>
  </head>

  <body>

    <h3>WordPress Installations (admin:admin)</h3>

    <?php
    $host = $_SERVER['SERVER_NAME'];

    // http://www.brightcherry.co.uk/scribbles/2008/11/02/php-list-all-files-in-a-directory/

    //path to directory to scan
    $directory = "./";
     
    //get all image files with a .jpg extension.
    $folders = glob("" . $directory . "wordpress*");
     
    //print each file name
    foreach ($folders as $folder) {
     echo "<a href=\"$folder\">" . str_replace("./", "", $folder) . "</a><br />";
    }

    ?>

    <h3>Other</h3>

    <a href="phpinfo.php">phpinfo</a>
    <br />
    <a href="https://<?php echo $host ?>:12321">Webmin</a> (root:password)
    <br />
    <a href="https://<?php echo $host ?>:12320">Web Shell</a> (root:password)
    <br />
    <a href="https://<?php echo $host ?>:12322">PHPMyAdmin</a> (root:password)
    <br />
    ssh root:password

    <p>By <a href="http://www.ethicalhack3r.co.uk" target="_blank">ethicalhack3r</a></p>

  </body>

</html>
