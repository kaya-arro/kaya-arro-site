<?php
  $dirs = glob($root . '/pics/*',GLOB_ONLYDIR);
  foreach ($dirs as $gal) {
    $dirName = str_replace($root . '/pics/','',$gal);
    $dirNameEsc = str_replace(' ','',$dirName);
    echo "
        <a href='/photography/#$dirNameEsc'>
          $dirName
        </a>
    ";
  }
?>
