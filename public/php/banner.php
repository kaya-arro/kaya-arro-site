<header id="banner">
  <h1>Kaya Arro</h1>
  <div id="navbar">
    <span id="filler">
      Kaya Arro
    </span>
    <nav id="navbar-menu">
      <nav class="dropdown">
        <a id="home" href="/#">Home</a>
        <nav class="dropdown-content cont">
          <div class="meas">
            <a href="/#about">About me</a>
            <a href="/#research">Research</a>
            <a href="/#teaching">Teaching</a>
            <a href="/#personal">Personal</a>
          </div>
        </nav>
      </nav>
      <nav class="dropdown">
        <a id="photos" href="/photography/#">Photography</a>
        <nav class="dropdown-content cont">
          <div class="meas">
            <?php include($root . "/php/photo-menu.php"); ?>
          </div>
        </nav>
      </nav>
      <div>
        <a onclick="openNav()" id="curtain-button">&#9776;</a>
      </div>
    </nav>
  </div>
</header>

<div id="curtain">
  <a class="closebtn" onclick="closeNav()">&times;</a>
  <nav id="curtain-content">
    <nav class="curtain-col">
      <a class="curtain-head" href="/#">Home</a>
      <a href="/#about">About me</a>
      <a href="/#research">Research</a>
      <a href="/#teaching">Teaching</a>
      <a href="/#personal">Personal</a>
    </nav>
    <nav class="curtain-col">
      <a class="curtain-head" href="/photography#">Photography</a>
      <?php include($root . "/php/photo-menu.php"); ?>
    </nav>
  </nav>
</div>
