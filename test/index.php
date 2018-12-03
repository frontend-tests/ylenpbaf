<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="index.css">
    <title>Ylenpbaf test 2018</title>
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
