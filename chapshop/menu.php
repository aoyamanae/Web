<ul>
  <li><a href="product.php">商品</a></li>
  <li><a href="favorite-show.php"><i class="fas fa-heart"></i>お気に入り</a></li>
  <li><a href="history.php">購入履歴</a></li>
  <li><a href="cart-show.php"><i class="fas fa-shopping-cart"></i>カート</a></li>
  <li><a href="purchase-input.php">購入</a></li>
  <li><a href="customer-input.php">会員登録</a></li>
  <li>
  <?php
  if (isset($_SESSION['customer'])) {
  echo '<a href="logout-input.php"><i class="fas fa-sign-out-alt"></i>ログアウト</a>' ;
  }else {
  echo '<a href="login-input.php"><i class="fas fa-sign-in-alt"></i>ログイン</a>';
  }
  ?>
  </li>
</ul>