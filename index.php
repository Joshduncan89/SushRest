<?php get_header(); ?>
  <div>
    <div class="sidebar-brand">
      <div class="social">
        <a href="#">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
      <div class="brand">
        <img src="https://image.ibb.co/mbNE49/Sushi_Eats.png">
      </div>
    </div>
    <section class="home">
      <div class="left-content">
        <nav>
          <ul>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#gallery">Gallery</a>
            </li>
            <li>
              <a href="#menu">Menu</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>
        <h2><span>FRESH</span><br><br> sushi</h2>
        <br>
        <p>The best of Japanese cuisine found locally.
        </p>
        <a href="#book" id="btn-book-top">Book Now</a>
        <div class="box-next">
          <a href="#menu">See our menu
            <i class="fa fa-caret-down" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="right-content">
      </div>
    </section>
    <section class="about" id="about">
      <div class="left-content">
        <h3>Our original cuisine</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus sit possimus quam, neque quo ut vitae vero ad aut molestias ullam odio magnam maiores dolor praesentium incidunt excepturi at tempore.
        <?php 
          $mypod = pods('about');
          $mypod->find('name ASC');
          $content = $mypod->field('content');
          $content2 = $mypod->field('about2');
        ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam aut autem possimus. Architecto officiis eligendi placeat recusandae quisquam vel porro, repellendus voluptates corporis tenetur sapiente. Accusantium quia aspernatur nostrum officia!</p>
      </div>
      <div class="right-content">
        <p><?php echo $content2 ?></p>
      </div>
    </section>
    <section class="gallery" id="gallery">
    <div class="gallery-carousel">
    <?php echo do_shortcode("[qcld_hero id=2]"); ?>
      </div>
      <div class="chefs-special">
        <h3>Specials</h3>
        <div class="col">
        <img src="https://i.ibb.co/y0xcKjH/chefsspecials.png" class="img-1 circle">
        </div>
        <div class="col">
        <img src="https://i.ibb.co/vwNj1hc/chefsspecials02.png" class="img-2 circle">
        </div>
        <div class="col">
        <img src="https://i.ibb.co/g7qBSgC/chefsspecials03.png" class="img-3 circle">
        </div>
      </div>
    </section>
    <section class="menu" id="menu">
      <h2>Menu</h2>
      
      <div class="left-menu">
        <h3>Sushi</h3>
        <h4>Chicken Avocado<span>$6</span></h4>
        <p>4 pieces of chicken avocado</p>
        <h4>Salmon Avocado<span>$6</span></h4>
        <p>4 pieces of salmon avocado</p>
        <h4>Salmon Sashimi<span>$12</span></h4>
        <p>6 pieces of salmon sashimi, lemon, coriander, carrots strips</p>
        <h4>Soft Shell Crab<span>$8</span></h4>
        <p>3 pieces of soft shell crab sushi</p>
      </div>     

      <div class="left-menu">
        <h3>Bento</h3>

        <h4>Chicken Teriyaki Bento<span>$15</span></h4>
        <p>Chicken teriyaki bento</p>

        <h4>Hinomaru Bento<span>$16</span></h4>
        <p>Hinomaru Bento</p>

        <h4>Koraku Bento<span>$15</span></h4>
        <p>Koraku Bento</p>

        <h4>Salmon Bento<span>$17</span></h4>
        <p>Salmon bento</p>
      </div>
</div>
       
      <button>Download Menu <i class="fa fa-download" aria-hidden="true"></i></button>
    </section>
    <section class="contact" id="contact">
      <h2>Contact</h2>
      <div class="location">
        <i class="fa fa-location-arrow" aria-hidden="true"></i>
        <h3>Location</h3>
        <p>Suite 20, Greektown Central</p>
        <p>Detroit, MI</p>
      </div>
      <div class="hours">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
        <h3>Opening hours</h3>
        <p>Monday: 9am - 11pm</p>
        <p>Tuesday: 9am - 11pm</p>
        <p>Wednesday: 9am - 11pm</p>
        <p>Thursday: 9am - 11pm</p>
        <p>Friday: 9am - 11pm</p>
        <p>Saturday: 9am - 11pm</p>
        <p>Sunday: 9am - 11pm</p>
      </div>
    </section>
    <section class="reservations" id="book">
      <h2>Book Now</h2>

      <?php echo do_shortcode("[booking type=2]"); ?>

    </section>
  </div>
<?php get_footer(); ?>
