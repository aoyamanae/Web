<p>パソコンは時間を数字として扱っている <br>
ある日時からの経過秒をタイムスタンプといいます｡
<pre style="font: normal 1.1em/125% Consolas">
<?php
$n =  "\n";
// 日付書式はdate関数で引数として指定する
 echo $n, date("Y-m-d H:i:s") ; 
  echo $n,$n,date("Y年m月d日") ; 

 echo $n,$n,strtotime("2020-01-07");
  echo $n,$n,strtotime("2020-01-08");
   echo $n,$n,'一日は',strtotime("2020-01-08")-strtotime("2020-01-07") ;

  date_default_timezone_set('Asia/Tokyo');

 echo $n,$n,strtotime("2020-12-17 12:00:00");
  echo $n,$n,strtotime("2020-12-17 12:00:01");
  echo $n,$n,'一秒はcount 1';
  
  echo $n,$n,date("Y年m月d日",strtotime("2020-12-18"));
  echo $n ,'今現在のタイムスタンプ',time();

echo $n,$n,strtotime("1970-01-1 9:00:00");
 ?>

  いつからの経過時間でしょうか? 
  <p>1970-01-1 9:00:00

  <!-- 模範解答 -->
  1608542327/3600/24/365=
 答え: <?php echo date("Y-m-d H:i:s",1608542327/3600/24/365) ; ?>
からの経過秒