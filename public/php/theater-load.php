<?php

  $dirs = glob($root . "/pics/*",GLOB_ONLYDIR);
  foreach ($dirs as $gal) {
    $dirPath = str_replace($root,"",$gal);
    $dirName = str_replace("/pics/","",$dirPath);
    $dirNameEsc = str_replace(' ','',$dirName);
    echo "
      <section class='theater' id='$dirNameEsc'>
        <h2 onclick='toggleDisplay($dirNameEsc);'>
          <a>
            $dirName
          </a>
        </h2>
        <div class='cont'>
          <div class='meas'>
            <hr />
            <div class='theater-margins'>
              <div class='theater-imgs gallery-container' id='imgs$dirNameEsc'>
    ";
    $imagesBig = str_replace($root,"",glob($gal . "/*-w.avif"));
    foreach ($imagesBig as $imageBig) {

      $imageDownload = str_replace('-w.','-d.',$imageBig);
      $imageSmall = str_replace('w.','w0.',$imageBig);
      list($widthBig, $heightBig) = getimagesize($root . "$imageBig");
      list($widthSmall, $heightSmall) = getimagesize($root . "$imageSmall");

      $ratio = $widthBig / $heightBig;

      // The parameters

      // Desired behavior: wide images become even more wide, possibly clipping their tops and bottoms. Vertical images not clipped.

      $rowHeight = 200;

      $P1 = 1.4;
      $P2 = .8;

      $greed = 1.80;

      // W → 0 ⇒ Constant width across all rows (except finals), but variable height between rows.

      // W → ∞ ⇒ Wide images grow very large and retain their original dimensions; narrow images are squished thin.

      $W1 = $P1;
      $W2 = $P2;

      // G → 0 ⇒ Tall images get taller, wide images get narrower.

      // G → ∞ ⇒ Wide images get wider, narrow images get narrower (but not dramatically).

      $G1 = $P1;
      $G2 = $P2;

      // H → 0 ⇒ images grow in height (but not width) until they are squares or narrower.

      // H → ∞ ⇒ infinitely tall images of default width.

      $H1 = $P1;
      $H2 = $P2;

      $flexWidth = round(max(pow($ratio,$W2),pow($ratio,$W1)) * $rowHeight);
      $flexGrow = round(max(pow($ratio,$G2),pow($ratio,$G1)) * $rowHeight);
      $flexHeight = round(100/max(pow($ratio,$H2),pow($ratio,$H1)));

      // if ($imageBig == $imagesBig[count($imagesBig) - 1]) {
      //   $flexGrow = 1;
      // }

      echo "
        <a data-src='$imageBig' data-external-thumb-image='$imageSmall' class='gallery-item' data-download-url='".str_replace("w.avif","d.jpg",$imageBig)."' style='width: {$flexWidth}px; flex-grow: $flexGrow;'>
          <div style='padding-top:{$flexHeight}%;'></div>
          <img  data-lg-size='$widthBig-$heightBig' src='$imageSmall' "
          ."srcset='";
          foreach (str_replace($root,"",glob($root.str_replace(".avif","",$imageBig)."*.avif")) as $src) {
            $widthSrc = getimagesize($root.$src)[0];
            echo "$src"." {$widthSrc}w, ";
          }
          echo "' sizes='(max-width: 500px) 92lvw, (max-width: 850px) min(92lvw, ". $greed * $flexWidth ."px), min(57.4lvw, ". $greed * $flexWidth ."px)' loading='lazy' decoding='async' alt='' width='$widthSmall' height='$heightSmall' />
        </a>
      ";

    }
    echo "
              </div>
            </div>
          </div>
        </div>
      </section>
    "; // Close theater-imgs, meas, cont, theater
  }
?>
