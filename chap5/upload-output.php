<?php require '../header.php'; ?>
<?php 
if (is_uploaded_file($_FILES['file']['tmp_name'])) {
  if (!file_exists('upload')) {
    mkdir('upload') ;
  }
  
  $mime = mime_content_type($_FILES['file']['tmp_name']);
  // var_dump($mime) ;
  if ($mime =='image/jpeg') {
		
    
    $file= 'upload/'.basename($_FILES['file']['name']) ;
    
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
      echo $file, 'のアップロードに成功しました。';
      echo '<p><img src="',$file,'"></p>';
      
    } else {
      echo 'アップロードに失敗しました。';
    }
    
  } else {
    echo "アップできるファイルはjpgのみ。";
  }
} else {
  echo 'ファイルを選択してください。';
}
?>
<?php require '../footer.php'; ?>

