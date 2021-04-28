<?php session_start(); ?>
<?php require 'header.php'; ?>
<div id="breadcrumb">
  <ol>
    <li><a href="index.php">ホーム</a></li>
    <li><i class="fas fa-angle-right"></i> 商品</li>
  </ol>
</div>

<div id="contents">
	<div id="main">
    <form action="product.php" method="post">
      商品検索
      <input type="text" name="keyword">
      <input type="submit" value="検索">
    </form>
    
    <table>
      <th>商品番号</th>
      <th>商品名</th>
      <th>価格</th>
    <?php
    if (isset($_REQUEST['keyword'])) {
      $sql=$pdo->prepare('select * from product where name like ?');
      $sql->execute(['%'.$_REQUEST['keyword'].'%']);
    } else {
      $sql=$pdo->prepare('select * from product');
      $sql->execute([]);
    }
    foreach ($sql as $row) {
      $id=$row['id'];
    ?>
      <tr>
        <td> <?=$id?> </td>
        <td><a href="detail.php?id= <?=$id?> "> <?=$row['name']?> </a></td>
        <td> <?=$row['price']?> </td>
      </tr>
    <?php
    }
    ?>
    </table>
	</div>		
</div>
<?php require 'footer.php'; ?>