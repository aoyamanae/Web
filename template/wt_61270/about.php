<?php 
$title='About';
$h='none'; $a='active'; $b='none'; $c='none';
require 'header.php'; 
?>
<section class="section-80 section-lg-120">
  <div class="container container-wide">
    <h2 class="text-ubold">秋田県MAP</h2>
    <hr class="divider divider-primary divider-80">
    <p>地図上の位置から探す</p>
    <img class="click-map" src="images/akitamap2.jpg" alt="地図" usemap="#Map">
    <map name="Map">
      <area title="秋田市"
        coords="343,440,373,423,424,410,438,427,466,425,473,446,504,423,536,433,562,473,529,497,519,492,460,532,434,587,457,630,447,640,401,585,357,556,352,476"
        shape="POLY" href="about-aki.php">
      <area title="男鹿市"
        coords="301,292,269,336,244,354,232,357,188,330,192,377,214,411,261,408,259,393,280,388,301,393,280,388,301,393,312,399,310,368,289,356,301,332,293,319,307,303"
        shape="POLY" href="about-oga.php">
      <area title="仙北市" coords="685,373,573,433,573,561,667,551" shape="POLY" href="about-sen.php">
      <area title="横手市湯沢市" coords="629,923,501,873,541,779,485,691,631,697,663,765,625,835" shape="POLY" href="about-yokoyu.php">
    </map>
  </div>
  <?php require 'footer.php'; ?>