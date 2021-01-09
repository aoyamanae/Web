<?php require 'header2.php'; ?>
<!-- ↑chap6用に新しく作ったstyleとPDO -->

<table>
  <tr>
    <th>商品番号</th><th>商品名</th><th>商品価格</th>
  </tr>

  <?php 

foreach ($pdo->query('select * from product') as $row) {

  echo '<tr>' ;
  echo '<td> ', $row['id'], '</td>' ;
  echo '<td> ', $row['name'], '</td>' ;
  echo '<td> ', $row['price'], '</td>' ;
  ?>
  <td>
    <a href="delete-output.php?id=<?=$row['id']?>">削除</a>
  </td>
<?php
  echo '</tr>' ;
  echo "\n" ;
}
?>
</table>

<?php require '../footer.php'; ?>