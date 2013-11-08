<?php
error_reporting(E_ALL);
require_once("functions.php");

$wp_versions = sort_wordpress_versions(get_wordpress_versions("./"));
$https_link = 'https://' . $_SERVER['SERVER_NAME'];

?>

<html>
  <head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <div class="menu">
      <a class="dark_button" href="phpinfo.php">PHPInfo</a>
      <a class="dark_button" href="<?php echo $https_link ?>:12322">PHPMyAdmin</a>
      <a class="dark_button" href="<?php echo $https_link ?>:12321">Webmin</a>
      <a class="dark_button" href="<?php echo $https_link ?>:12320">Web Shell</a>
    </div>

    <?php foreach ($wp_versions as $index => $versions): ?>
      <fieldset class="versions">
        <legend><?php echo $index ?>.x</legend>
          <?php foreach ($versions as $version): ?>
            <a class="dark_button" href="wordpress-<?php echo $version ?>"><?php echo $version ?></a>
          <?php endforeach ?>
      </fieldset>
    <?php endforeach ?>
  </body>
</html>