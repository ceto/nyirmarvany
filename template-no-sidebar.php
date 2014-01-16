<?php
/*
Template Name: No Sidebar
*/
?>
  <div id="carousel-home" data-interval="6000"  class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-home" data-slide-to="1" class=""></li>
      <li data-target="#carousel-home" data-slide-to="2" class=""></li>
      <li data-target="#carousel-home" data-slide-to="3" class=""></li>
      <li data-target="#carousel-home" data-slide-to="4"></li>
      <li data-target="#carousel-home" data-slide-to="5"></li>
      <li data-target="#carousel-home" data-slide-to="6"></li>
      <!-- li data-target="#carousel-home" data-slide-to="7"></li -->
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-05.jpg" alt="">
        <div class="carousel-caption">
          <h3>Rólunk</h3>
          <p>
            Cégünket 1983-ban indítottuk kőfaragó tevékenységgel.
            A piaci igényeket figyelembe véve, folyamatos bővítések és fejlesztések eredményeként,
            mára térség vezető gyártó és ellátó vállalkozása lettünk.
          </p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-06.jpg" alt="">
        <div class="carousel-caption">
          <p>
            Több, mint 40 fős szakembergárdánk, valamint a legmodernebb technológiával felszerelt gépparkunk
            garantálja megrendelőink színvonalas, gyors kiszolgálását.
          </p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-07.jpg" alt="">
        <div class="carousel-caption">
          <p>
            Állandóan bővülő árukészletünkben megtalálhatók a világ minden tájáról származó természetes kövek.
          </p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-09.jpg" alt="">
        <div class="carousel-caption">
          <p>
            Logisztikai bázisunk és saját gépjárműparkunk lehetővé teszi a gyors házhozszállítást az ország egész területén.
          </p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-01.jpg" alt="">
        <div class="carousel-caption">
          <p>
            Személyre szabott konstrukciókat kínálunk kis-, közép-, és nagyfelhasználók részére egyaránt.
          </p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-02.jpg" alt="">
        <div class="carousel-caption">
          <p>
            Új szolgáltatásként direkt import lebonyolításával is állunk ügyfeleink részére.
          </p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-03.jpg" alt="">
        <div class="carousel-caption">
          <h3>
            Remélem hamarosan Önt is elégedett partnereink között üdvözölhetjük.
          </h3>
          <p style="text-indent:0">Petró Attila - <em>tulajdonos</em></p>
        </div>
      </div>
      <!-- div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-04.jpg" alt="">
      </div -->
      
      
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-home" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#carousel-home" data-slide="next">
      <span class="icon-next"></span>
    </a>
  </div>

  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
