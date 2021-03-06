<div class="portfolio-page bg-blue pb4">
  <header class="w-100 bg-blue flex justify-between pa5-l pa4">
    <h4 class="text-white">Yasmin Jones Sheahan</h4>

    <ul id="header-links" class="flex pl0">
      <li>
        <a href="http://localhost:8888/contact">Contact</a>
      </li>
      <li>
        <a href="https://github.com/yjsheahan">Github</a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/yasminjs/">LinkedIn</a>
      </li>
    </ul>
  </header>

  <div class="portfolio-content ph5-l ph4 w-100 flex justify-between">

    <svg width="60" height="29" viewBox="0 0 60 29" fill="none" xmlns="http://www.w3.org/2000/svg">
      <line y1="1.5" x2="45" y2="1.5" stroke="#E4959E" stroke-width="3"/>
      <line y1="14.5" x2="60" y2="14.5" stroke="#E4959E" stroke-width="3"/>
      <line y1="27.5" x2="45" y2="27.5" stroke="#E4959E" stroke-width="3"/>
    </svg>

    <div class="bio text-white tr w-60 w-40-l">
      <?php the_content(); ?>
    </div>

  </div>



  <div class="subhead text-white flex items-center">
    <h4 class="ph5-l ph4 pt5">
      <?php the_field('subhead'); ?>
    </h4>
  </div>
</div>

<div class="portfolio-circle">
</div>

<div class="mobile-menu">
  <h4 class="text-pink">Menu</h4>
</div>
