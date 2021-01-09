<?php
/* ファイルポインタをオープン */
$file = fopen("list.txt", "r");
 
/* ファイルを1行ずつ出力 */
if($file){
  while ($line = fgets($file)) {
    echo $line;
  }
}
 
/* ファイルポインタをクローズ */
fclose($file);
?>
