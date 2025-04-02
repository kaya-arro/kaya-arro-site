<?php
  $root = $_SERVER["DOCUMENT_ROOT"];
  $page_name = "Home";

  include($root . "/php/early-php.php");

  header("Link: <https://kayaarro.site/css/main.css>; rel=preload; as=style; nopush", false);

  function decImg($img,$alt) {
    $root = $_SERVER["DOCUMENT_ROOT"];
    echo "<img src='$img' alt='$alt' loading='lazy' width='500' height='500' decoding='async' sizes='(max-width: 850px) 90lvw, 23lvw'  srcset='";
    foreach (str_replace($root,"",glob($root.str_replace("0.avif","",$img)."*.avif")) as $src) {
      $widthSrc = getimagesize($root.$src)[0];
      echo "$src"." {$widthSrc}w, ";
    }
    echo "' />";
  }
?>

<!DOCTYPE html>

<html lang="en-US">
  <title>
    Kaya Arro
  </title>

  <head>
    <meta name="description" content="Kaya Arro's webpage" />
    <meta name="keywords" content="math, maths, mathematics, photography, photo, photos, category, categories, category theory, homotopy, homotopy theory, functor calculus, teaching, Brown, Brown University, UCR, UC Riverside, University of California Riverside, University of California, Kaya, Arro, Kaya Arro" />

    <?php include($root . "/php/head.php"); ?>

    <link rel="stylesheet" type="text/css" media="screen, print, projection" href="/css/main.css" />
    <link rel="canonical" href="https://kayaarro.site" />
    <link rel="me" href="https://mathstodon.xyz/@kaya" />
  </head>

  <body>
    <?php include($root . "/php/banner.php"); ?>

    <div class="gallery-container-1" id="content">
      <section id="about">
        <div class="text">
          <h2>
            About me
          </h2>
          <hr />
          <p>
            Since Fall 2023 I have been a visiting assistant professor in the <a href="https://mathdept.ucr.edu/" target="_blank">Department of Mathematics</a> at the University of California, Riverside. My office is room 275A of Skye Hall.
          </p>
          <p>
            Before coming to UCR, I was a PhD student of <a href="https://www.math.brown.edu/tgoodwil/" target="_blank">Tom Goodwillie</a> at <a href="https://www.brown.edu/academics/math/" target="_blank">Brown University</a>. Before that, I studied under <a href="https://mching.people.amherst.edu/" target="_blank">Michael Ching</a> as an undergraduate at <a href="https://www.amherst.edu/academiclife/departments/mathematics-statistics" target="_blank">Amherst College</a>.
          </p>
          <p>
            Here is my <a href="/pdf/CV_Arro.pdf" target="_blank">CV</a>. I am currently on the job market and am interested in jobs in both academe and industry.
          </p>
          <p>
            You can reach me by email at kaya [dot] arro [at] gmail [dot] com.
          </p>
          <p>
            My name is pronounced /&#712;ka&#618;&#601; &#712;&#593;&#633;o/. My pronouns are &ldquo;they&rdquo; (English), <span lang="es">&laquo;elle&raquo; (espa&#241;ol)</span>, and <span lang="nb">&laquo;hen&raquo; (norsk)</span>. My surname used to be &ldquo;Ferendo&rdquo;.
          </p>
        </div>
        <figure class="gallery-container-2">
          <a class="gallery-item-2" data-src="/pics/tree-circle-w2.avif">
            <?php decImg("/pics/tree-circle-w0.avif","Kaya in a tree"); ?>
          </a>
          <figcaption>
            <br />
            Photo credit: <a href=https://grossack.site>Chris Grossack</a>
          </figcaption>
        </figure>
      </section>

      <section class="right" id="research">
        <div class="text">
          <h2>
            Research
          </h2>
          <hr />
          <p>
            I am an abstract homotopy theorist/&infin;-category theorist and am easily excited by almost any aspect of the field, but particularly by the use of &infin;-categories as a tool for elucidating structures in homotopy theory.
          </p>
          <p>
            My current work lies within the field of functor calculus and specifically deals with new flavors of functor calculus bearing certain similarities to Michael Weiss' orthogonal calculus. I also have an interest in the tangent (&infin;,2)-categories of Bauer, Burke, and Ching, and specifically their tangent structure for the Goodwillie calculus of differentiable &infin;-categories.
          </p>
          <p>
            In my dissertation, I show that representation stability for FI-modules can be fit pleasantly into a larger, &infin;-categorical functor calculus framework I call FI-calculus. You can read a <a href="/pdf/FI-calculus.pdf" target="_blank">preprint of my thesis research</a> and my <a href="/pdf/research_statement_full_Arro.pdf">research statement</a>. There are also <a href="/pdf/FI-slides.pdf">slides</a> from a talk on the material.
          </p>
          <p>
            Some of my current work in progress extends FI-calculus to an axiomatic system for a family of functor calculi that I call corepresentation functor calculi. <a href="/pdf/JMM25.pdf">Slides</a> discussing this generalization of FI-calculus are available. Another project in progress with <a href="https://mching.people.amherst.edu/" target="_blank">Michael Ching</a> aims to describe differential bundles in the Goodwillie tangent structure for differentiable &infin;-categories of Bauer, Burke, and Ching.
          </p>
        </div>
        <a data-external-thumb-image="/pics/19-07-05-19-13-17+0-q-w0.avif" data-src="/pics/Plants/19-07-05-19-13-17+0-g-w.avif" class="gallery-item">
          <?php decImg("/pics/19-07-05-19-13-17+0-q-w0.avif","Heliopsis helianthoides"); ?>
        </a>
      </section>

      <section id="teaching">
        <div class="text">
          <h2>Teaching</h2>
          <hr />
          <p>
            Teaching is an extremely rewarding and joyful part of my profession and I believe I have a great responsibility to my students. I elaborate my thoughts in my <a href="/pdf/Teaching_Statement_Arro.pdf" target="_blank">teaching statement</a>.
          </p>
          <p>
            This quarter I am teaching sections 020 and 030 of Math 7B, integral calculus for the life sciences.
          </p>
          <p>
            In the past, I have taught precalculus, differential, integral, and multivariable calculus, linear algebra (using team-based inquiry learning), and topology.
          </p>
          <p>
            I designed a rigorous, 30-hour course introducing high school students to logic, proof-writing, and the foundations of mathematics (focusing on Peano arithmetic and Zermelo-Fraenkel set theory) for the Summer@Brown program and have taught the course five times.
          </p>
          <p>
            In 2022 I received the Brown University Math Department's Outstanding Teaching Award.
          </p>
        </div>
        <a data-external-thumb-image="/pics/19-07-28-12-39-58+0-q-w0.avif" data-src="/pics/Plants/19-07-28-12-39-58+0-w.avif" class="gallery-item">
          <?php decImg("/pics/19-07-28-12-39-58+0-q-w0.avif","Rubus sp."); ?>
        </a>
      </section>

      <section class="right" id="personal">
        <div class="text">
          <h2>
            Personal
          </h2>
          <hr />
          <p>
            I grew up in Maryland and spent the first twelve years of my adulthood in New England. This is my first time living away from the East Coast.
          </p>
          <p>
            I live with my life partner of 14 years and our dog, <span class="gallery-container-2"><a id="rascalLink" data-src="/pics/Pets/20-03-08-17-54-46+0-w.avif" class="gallery-item-2">Rascal</a></span>.
          </p>
          <p>
            Outside of mathematics, my hobbies include <a href="/photography" target="_blank">photography</a>, spending time in nature, practicing Norwegian, <a href="https://github.com/kaya-arro/" target="_blank">coding</a>, playing Celtic fiddle music, and writing.
          </p>
          <p>
            My first significant coding <a href="https://github.com/kaya-arro/sc-simplify" target="_blank">project</a>, <code>sc-simplify</code>, provides a tool for simplifying large simplicial complexes in order to accelerate homology calculations. I developed with the goal of using it to calculate the torsion parts of the homology of homogeneous FI-objects, but I think it is also well-suited to expediting the calculation of the persistence homology of large data sets.
          </p>
          <p>
            You can also find the source code for this website is also available on my GitHub page.
          </p>
        </div>
        <a data-external-thumb-image="/pics/19-06-27-19-14-42+0-q-w0.avif" class="gallery-item" data-src="/pics/Plants/19-06-27-19-14-42+0-w.avif">
          <?php decImg("/pics/19-06-27-19-14-42+0-q-w0.avif","Trifolium repens"); ?>
        </a>
      </section>
    </div>

    <script>
      document.getElementById('home').classList.add('active');
      document.querySelector('header h1').textContent = 'Kaya Arro';
    </script>

    <script src="/js/main.js"></script>
  </body>
</html>
