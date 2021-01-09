<?php require '../header.php'; ?>

<p>商品を追加します。</p>
<form action="insert-output.php" method="post">
商品名<input type="text" name="name" id="">
価格<input type="text" name="price" id="">
<input type="submit" value="追加">
</form>

<?php require '../footer.php'; ?>