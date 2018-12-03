<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#a7d9da">
    <meta name="msapplication-TileImage" content="/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#a7d9da">
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="/assets/css/index.css">
    <title>Ylenpbaf frontend test 2018</title>
  </head>
  <body>
    <main>
      <header>
        <div class="header">
          <div class="logo"></div>
        </div>
      </header>
      <nav>
        <div class="nav">
          <div class="nav-btn">
            <label for="nav-check">
              <span></span>
              <span></span>
              <span></span>
            </label>
          </div>
          <input type="checkbox" id="nav-check">
          <div class="nav-links">
            <label onclick="displayProducts('products');">INICIO</label>
            <label class="dropdown">
              <div class="dropdown-button">
                PRODUCTOS
              </div>
              <input type="checkbox" class="dropdown-input" id="test">
              <ul id="dropdown-menu" class="dropdown-menu">
                <li><small>CSS menu</small></li>
                <li>Pantalones</li>
                <li>Remeras</li>
                <li>Camperas</li>
                <li><small>PHP menu</small></li>
                <?php
                  require_once('functions.php');
                  $sub_menu = array(
                      array('titulo' => 'Ropa', 'url' => '/ropa.html'),
                      array('titulo' => 'Electronica', 'url' => '/electronica.html'),
                      array('titulo' => 'Higiene', 'url' => '/higiene.html'),
                      array('titulo' => 'Alimentos', 'url' => '/alimentos.html'),
                      array('titulo' => 'Otros', 'url' => '/otros.html')
                  );
                  if (!empty($sub_menu)):
                  		print $sub_menu = wrapElement(array(
                  				'element' => 'ul',
                  				'content' => drawMenu($sub_menu)
                  		));
                  endif
                ?>
              </ul>
            </label>
            <label onclick="sidebarText()">NOSOTROS</label>
            <label onmouseover="sidebarColor()" onmouseleave="sidebarColor()">COMPRAS</label>
          </div>
        </div>
      </nav>
      <section class="catalogue">
        <div id="sidebar" class="sidebar"></div>
        <div id="products" class="products" style="display: block;">
          <div class="product"></div>
          <div class="product"></div>
          <div class="product"></div>
          <div class="product"></div>
          <div class="product"></div>
          <div class="product"></div>
        </div>
      </section>
    </main>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
