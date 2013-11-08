<?php

/**
 * param string $base_directory
 * return array
**/
function get_wordpress_versions($base_directory)
{
  $versions = array();
  $wp_directories = get_wordpress_directories($base_directory);

  foreach ($wp_directories as $wp_directory)
  {
    if (preg_match("/wordpress\-(.*)/", $wp_directory, $matches))
    {
      $versions[] = $matches[1];
    }
  }
  return $versions;
}

/**
 * param string $base_directory
 * return array
**/
function get_wordpress_directories($base_directory)
{
  $pattern = $base_directory . "wordpress\-*";
  return glob($pattern, GLOB_ONLYDIR);
}

/**
 * param array $versions
 * return array(array)
**/
function sort_wordpress_versions(array $versions)
{
  rsort($versions);
  $sorted_versions = array();

  foreach ($versions as $version)
  {
    $index = $version[0];
    $sorted_versions[$index][] = $version;
  }
  
  return $sorted_versions;
}

?>