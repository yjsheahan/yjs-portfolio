<div class="contact-page min-vh-100 bg-white flex flex-column">
  <header class="w-100 bg-blue-light flex justify-between pa5-l pa4">
    <h4 class="text-blue">Yasmin Jones Sheahan</h4>

    <svg width="60" height="29" viewBox="0 0 60 29" fill="none" xmlns="http://www.w3.org/2000/svg">
      <line y1="1.5" x2="45" y2="1.5" stroke="#37515F" stroke-width="3"/>
      <line y1="14.5" x2="60" y2="14.5" stroke="#37515F" stroke-width="3"/>
      <line y1="27.5" x2="45" y2="27.5" stroke="#37515F" stroke-width="3"/>
    </svg>

  </header>

  <div class="contact-container flex flex-column justify-center items-center pv5 ph6-l ph5-m ph4 bg-blue-light-2">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <section class="contact-form w-100 pv5-ns pv4">
      <form
        action="https://formspree.io/f/moqyejgv"
        method="POST"
        class="flex flex-column"
      >
        <label>
          <input type="name" name="_replyto" placeholder="Name">
        </label>

        <label>
          <input type="email" name="_replyto" placeholder="Email">
        </label>

        <label>
          <textarea name="message" placeholder="Message"></textarea>
        </label>

        <!-- your other form fields go here -->
        <div class="w-100 flex justify-end pt3">
          <button type="submit">Send</button>
        </div>
      </form>
    </section>
  </div>

  <footer class="bg-blue-light">
    <ul id="footer-links" class="flex pl0 pv4 ma0">
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
  </footer>

</div>
