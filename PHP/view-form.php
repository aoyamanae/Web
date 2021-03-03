<!-- その他の部分 -->

<!-- 送信画面の始まり -->
<div id="first" class="container">
  <form method="post">

    <h3>プラン名</h3>
    <?php
    foreach ($plan as $key => $value) {
      echo "<label><input type='radio' name='plan' value='$value' required>$value</label>";
    }
    ?>

    <h3>2年割</h3>
    <label><input type="checkbox" name="nenwari" value="申し込む">申し込む</label>

    <h3>機器レンタル</h3>
    <div class="pr">
      <?php
      foreach ($rental as $key => $value) {
        echo "<label><input type='checkbox' name='rental[]' value='$value'>$value</label>" ;
      }
      ?>
      <b class="pa nick-maisu">
        <input type="number" name="nick-maisu" min="1" max="99" step="1">
      </b>
    </div>

    <input type="submit" name="btn" value="確認">

  </form>
</div> <!--#first-->
<!--送信画面の終わり-->