<?php snippet('header') ?>

  <main class="main" style="width: 70%; margin: auto;" role="main">

    <h3 style="margin-left: 20%;">Contact Information<h3>
    <p style="font-size: .7em; margin-left: 20%;">If you are interested in working with us, or just want to say hello, send us a message or give us a call.</p>

    <div style="display: block; text-align:center">
      <div class="contact_pic_column">
        <!-- <div id="contact_info">
          <p>Janet Kelly</p>
          <p>978-857-5212</p>
          <p>Stow, MA</p>
        </div> -->
        <div class="contact_pic_container">
          <img id="contact_pic" src="<?= image('chair.jpg')->url() ?>"  alt="Showroom"/>
      </div>
      </div>

      <div class="contact_text_column">
        <div style="float:left; width: 100%; ">
          <h4 style="margin: 0.7rem 0 0rem;">Contact Form</h4>
        <form action="mailto:JanetKelly87@gmail.com" method="post" enctype="text/plain">
        Name:<br>
        <input class="text-box" type="text" name="name"><br>
        E-mail:<br>
        <input class="text-box"  type="text" name="mail"><br>
        Comment:<br>
        <textarea class="text-box" id="comment-box" type="text" name="comment" size="50"></textarea><br><br>
        <input class="button" id="submit" type="submit" value="Send">
        <input class="button" id="reset" type="reset" value="Reset">
        </form>
      </div>
      </div>
    </div>




    <hr>
  </main>

<?php snippet('footer') ?>
