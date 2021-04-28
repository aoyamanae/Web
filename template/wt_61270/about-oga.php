<style>
ol.breadcrumb {
  display: none;
}
</style>
<?php 
$title='About';
$h='none'; $a='active'; $b='none'; $c='none';
require 'header.php'; 
?>

<section class="section-top-80 section-lg-top-0">
  <div class="container">
    <h2 class="text-ubold">男鹿市</h2>
    <hr class="divider divider-primary divider-80">

    <div class="row" id="recommend">
      <div class="col-6" style="text-align:left">
        <h3>Place</h3>
        なまはげで有名です<br>
        男鹿市ホームページは<a href="https://www.city.oga.akita.jp/" target= _blank>こちら</a>
        <h3>Location</h3>
        <ul>
        <li>秋田駅から車で約1時間</li>
        <li>秋田駅から電車で約1時間</li>
        <li>大館能代空港から車で約1時間半</li>
        <li>秋田空港から車で約1時間15分</li>
        <li>秋田港から車で約30分</li>
        <a href="https://oganavi.com/access/">公式リンク</a>
        </ul>
        <h3>Recommended sightseeing routes</h3>
        

        
        
      </div>
      <div class="col-6">
        <?php
          for ($i=1; $i < 5 ; $i++) { 
            echo "<img src='images/oga$i.jpg' style='width:200px;'>";
          }
        ?>
      </div>
    </div>

  </div>
</section>
<?php require 'footer.php'; ?>