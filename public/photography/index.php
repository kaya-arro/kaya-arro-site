<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  $page_name = 'Photography';

  include($root . '/php/early-php.php');

  header("Link: <https://kayaarro.site/css/theater.css>; rel=preload; as=style; nopush", false);
?>

<!DOCTYPE html>

<html lang="en-US">
  <title>
    Kaya's Photography
  </title>

  <head>
    <meta name="description" content="Kaya Arro's photography" />
    <meta name="keywords" content="photography, photo, photos, Kaya, Arro, Kaya Arro" />

    <?php include($root . "/php/head.php"); ?>

    <link rel="stylesheet" type="text/css" media="screen, print, projection" href="/css/theater.css" />
    <link rel="canonical" href="https://kayaarro.site/photography" />
  </head>
  <body>
    <?php include($root . "/php/banner.php"); ?>

    <div id="content">
      <br />
      <h2>Navigation</h2>
      <p>
        Click on the title of a gallery to display it. You can also use the drop-down menu in the upper right. Click on an image to open it in the viewer. If you are viewing the site on a phone, you can navigate through the image viewer by swiping.
      </p>
      <p>
        You can toggle displaying all galleries by clicking <a onclick="toggleAll()">here</a>.
      </p>
      <p>
        There is a button to download images hosted on this site in the upper right corner of the image viewer. The downloadable images are in <code>jpeg</code> format and are less compressed than the images displayed on the page. Higher resolution versions of some of these photographs are also available for download on <a href="https://unsplash.com/@kayaarro">Unsplash</a>.
      </p>
      <p>
        The images displayed on this site are in the <code>avif</code> format, which is relatively newly supported across all major browsers. If the images do not appear, updating to your browser's most recent version may help.
      </p>
      <?php include($root . "/php/theater-load.php") ?>
      <br />
    </div>

    <script>
      document.getElementById('photos').classList.add('active');
      document.querySelector('header h1').textContent = 'Kaya\'s Photography';
    </script>

    <script src="/js/main.js"></script>
    <script src="/js/theater.js"></script>
  </body>
</html>
