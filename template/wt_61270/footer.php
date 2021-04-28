<!-- Page Footer-->
<footer class="page-footer">
  <div class="container container-wide text-md-left">
    <div class="row row-50 section-60 section-lg-90">

      <div class="col-md-4"><a class="d-inline-block" href="./"><img class="img-responsive center-block"
            src="images/logo.png" width="166" height="55" alt=""></a>
        <p> (練習サイト) このサイトは秋田県あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめも</p>
      </div>

      <div class="col-md-4">
        <h5 class="text-bold">about menu</h5>
        <hr class="divider divider-50 divider-info divider-sm-left">
        <div>
          <ul>
            <li>秋田市</li>
            <li>男鹿市</li>
            <li>仙北市</li>
            <li>横手市湯沢市</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4">
        <div class="inset-xxl-left-50">
          <h5 class="text-bold">Contact</h5>
          <hr class="divider divider-50 divider-info divider-sm-left">

          <form class="rd-mailform rd-form text-md-left" method="post" action="contact-output.php">
          <?php
          $_SESSION['post']['token']=token();
          ?>
          <input type="hidden" name="token" value="<?=$_SESSION['post']['token']?>">
          
            <div class="form-wrap form-wrap-sm">
              <label class="text-gray-light form-label rd-input-label" for="footer-name">Your name</label>
              <input class="form-input form-input-dark" id="footer-name" type="text" name="name" required>
            </div>
            <div class="form-wrap form-wrap-sm">
              <label class="text-gray-light form-label rd-input-label" for="footer-email">Your e-mail</label>
              <input class="form-input form-input-dark" id="footer-email" type="email" name="email" required>
            </div>
            <div class="form-wrap form-wrap-sm">
              <label class="text-gray-light form-label rd-input-label" for="footer-message">comment</label>
              <textarea class="form-input form-input-dark" id="footer-message" style="height: 90px;" name="comment" required></textarea>
            </div>
            <input type="submit" value="送信" class="button button-primary button-xs button-naira button-naira-up">
          </form>
          
        </div>
      </div>
    </div>
    <hr>
  </div>


  <div class="container container-wide page-footer-min small">
    <div class="row row-20 justify-content-end-xs-middle">
      <div class="col-md-6 text-md-left">
        <ul class="list-inline">
          <li><a class="icon fa-facebook" href="#"></a></li>
          <li><a class="icon fa-twitter" href="#"></a></li>
          <li><a class="icon fa-pinterest-p" href="#"></a></li>
          <li><a class="icon fa-vimeo" href="#"></a></li>
          <li><a class="icon fa-google-plus" href="#"></a></li>
          <li><a class="icon fa-rss" href="#"></a></li>
        </ul>
      </div>
      <div class="col-md-6 text-md-right">
        <small class="rights">&copy; Akita tour</small>
      </div>
    </div>
  </div>
</footer>
</div>
<!-- Global Mailform Output-->
<!-- <div class="snackbars" id="form-output-global"></div> -->
<!-- Java script-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>