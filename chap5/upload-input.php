<!-- 5-8_p165 -->

<?php require '../header.php'; ?>
<p>アップロードするファイルを指定してください。</p>
<form action="upload-output.php" method="post" enctype="multipart/form-data">
<p><input type="file" name="file" id=""></p>
<p><input type="submit" value="アップロード"></p>
</form>
<?php require '../footer.php'; ?>