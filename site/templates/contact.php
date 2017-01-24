<?php snippet('header') ?>

  <main class="main" role="main">

    <h3>Contact Information<h3>
    <p style="font-size: .7em;">If you are interested in working with us, or just want to say hello, send us a message or give us a call.</p>

    <div style="display: block; text-align:center">
      <div class="contact_pic_column">
        <div id="contact_info">
          <p>Janet Kelly</p>
          <p>978-857-5212</p>
          <p>Stow, MA</p>
        </div>
        <div class="contact_pic_container">
          <img id="contact_pic" src="<?= image('chair.jpg')->url() ?>"  alt="Showroom"/>
      </div>
      </div>

      <div class="contact_text_column">
        <div>
          <h4 style="margin: 1.5rem 0 0rem;">Contact Form</h4>
        <form action="mailto:JanetKelly87@gmail.com" method="post" enctype="text/plain">
        Name:<br>
        <input class="text-box" type="text" name="name"><br>
        E-mail:<br>
        <input class="text-box" type="text" name="mail"><br>
        Comment:<br>
        <input class="text-box" type="text" name="comment" size="50"><br><br>
        <input class="button" type="submit" value="Send">
        <input class="button" type="reset" value="Reset">
        </form>
      </div>
      </div>
    </div>




    <hr>
  </main>

<?php snippet('footer') ?>
