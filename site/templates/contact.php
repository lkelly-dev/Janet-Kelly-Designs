<?php snippet('header') ?>

  <main class="main" style=" margin: auto;" role="main">

    <h3 class="contact_text" style="">Contact Information<h3>
    <p class="contact_text" style="font-size: .7em; ">If you are interested in working with us please send us a message or  give us a call.</p>
    <p class="contact_text" style="font-size: .7em;">Janet Kelly</p>
    <p class="contact_text" style="font-size: .7em; padding-bottom: 50px;">978-857-6505</p>

    <div id="contact-column-container" >
      <div class="contact_pic_column">
        <div class="contact_pic_container">
          <img id="contact_pic" src="<?= image('whitechair.jpg')->url() ?>"  alt="Showroom"/>
      </div>
      </div>

      <div class="contact_text_column">
        <div id="form-container" >
          <h4 style="margin: 0.7rem 0 0rem;">Contact Form</h4>
        <form action="mailto:JanetKelly87@gmail.com" method="post" enctype="text/plain">
        Name:<br>
        <input class="text-box" type="text" name="name"><br>
        E-mail:<br>
        <input class="text-box"  type="text" name="mail"><br>
        Phone:<br>
        <input class="text-box"  type="text" name="phone"><br>
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
