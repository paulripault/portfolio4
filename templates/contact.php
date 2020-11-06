<?php include("top.php"); ?>

<header class="showcase">
  <div class="container showcase-inner">
    <div class="contact">
      <div class="contact-us">
        <div class="title">
          <h1>Me contacter</h1>
        </div>
        <div class="form">
          <form method="post">
            <div class="form-items">
              <label for="author"></label>
              <input type="text" class="input" name="author" id="author" placeholder="Nom">
              <i class="fas fa-user"></i>
            </div>
            <div class="form-items">
              <label for="email"></label>
              <input type="email" class="input" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-items">
              <label for="message"></label>
              <textarea name="message" class="input" cols="30" rows="10" id="message" placeholder="Message...."></textarea>
            </div>
            <div class="errors">
              <?php
              if (!empty($errors)) {
                echo '<div><h4>Oups !</h4>';
                foreach ($errors as $error) {
                  echo '<div>' . $error . '</div>';
                }
                echo '</div>';
              }
              ?>
            </div>
            <div class="btn-contact">
              <button>Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>