<?php
$title='Contacts';
$h='none'; $a='none'; $b='none'; $c='active';
require 'header.php'; 
function to($length = 20){ 
  return substr(str_shuffle('1234567890QWERTYUIOPLKJHGFDSAZXCVBNMabcdefghijklmnopqrstuvwxyz'), 0, $length);
}
?>

<section class="section-top-80 section-lg-top-0 google-map-abs-section">
  <div class="container container-wide text-lg-left">
    <div class="row row-50 row-lg-0 justify-content-xl-between">
      <div class="col-lg-7 col-xl-5 section-lg-80 section-xl-120">
        <h2 class="text-ubold">Get in Touch</h2>
        <hr class="divider divider-md-left divider-primary divider-80">
        <p>ご意見、ご感想などがありましたら、以下の欄にご記入の上、送信してください。</p>


        <form action="contact-output-to.php" method="post" class="text-left">
          <?php
          $_SESSION['post']['to']=to();
          ?>
          <input type="hidden" name="to" value="<?=$_SESSION['post']['to']?>">


          <div class="row row-20">

            <div class="col-12">
              <div class="form-wrap">
                <label class="form-label-outside" for="name">名前</label>
                <input class="form-input form-input-gray" type="text" name="name" id="name" required>
                <span class="form-validation"></span>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
                <label class="form-label-outside" for="email">メールアドレス</label>
                <input class="form-input form-input-gray" type="text" name="email" id="email" required>
                <span class="form-validation"></span>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
                <label class="form-label-outside" for="comment">コメント</label>
                <textarea class="form-input form-input-gray" type="text" name="comment" id="comment" required></textarea>
                <span class="form-validation"></span>
              </div>
            </div>

            <p><input type="submit" value="送信" class="button button-primary button-sm" style="min-width: 140px;"></p>
          </div>
        </form>

      </div>

      <div class="col-xxl-2 col-xl-3 col-lg-4 section-lg-80 section-xl-120">
        <div class="row row-40 row-lg-60 text-left">
          <div class="col-sm-6 col-lg-12">
            <h5 class="text-bold hr-title">Phones</h5>
            <div class="unit unit-spacing-xxs flex-row">
              <div class="unit-left"><span class="icon icon-sm text-info-dr mdi mdi-phone"></span></div>
              <div class="unit-body">
                <div><a class="text-gray" href="tel:#">1-800-1234-567,</a></div>
                <div><a class="text-gray" href="tel:#">1-800-9876-543</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-12">
            <h5 class="text-bold hr-title">E-mail</h5>
            <div class="unit unit-spacing-xxs flex-row">
              <div class="unit-left"><span class="icon icon-sm text-info-dr mdi mdi-email-outline"></span></div>
              <div class="unit-body">
                <div><a class="text-gray" href="mailto:#">info@demolink.org</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-12">
            <h5 class="text-bold hr-title">Address</h5>
            <div class="unit unit-spacing-xxs flex-row">
              <div class="unit-left"><span class="icon icon-sm text-info-dr mdi mdi-map-marker"></span></div>
              <div class="unit-body">
                <div><a class="text-gray" href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-12">
            <h5 class="text-bold hr-title">Opening Hours</h5>
            <div class="unit unit-spacing-xxs flex-row">
              <div class="unit-left"><span class="icon icon-sm text-info-dr mdi mdi-calendar-clock"></span></div>
              <div class="unit-body">
                <div>Mon–Fri 8:00am–6:00pm<br>Sat 10:00am–4:00pm<br>Sun Closed</div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <h5 class="text-bold hr-title">Socials</h5>
            <ul class="list-inline">
              <li><a class="icon text-gray icon-xxs fa-facebook" href="#"></a></li>
              <li><a class="icon text-gray icon-xxs fa-twitter" href="#"></a></li>
              <li><a class="icon text-gray icon-xxs fa-pinterest-p" href="#"></a></li>
              <li><a class="icon text-gray icon-xxs fa-vimeo" href="#"></a></li>
              <li><a class="icon text-gray icon-xxs fa-google-plus" href="#"></a></li>
              <li><a class="icon text-gray icon-xxs fa-rss" href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="col-xl-3 google-map-abs">
        <div class="google-map-container google-map-align">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1572022.6846545886!2d139.21952989712267!3d39.686680831671815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8feb5ed12ef1bf%3A0x9a7dfbec605c1c12!2z56eL55Sw55yM!5e0!3m2!1sja!2sjp!4v1619076908847!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php require 'footer.php'; ?>