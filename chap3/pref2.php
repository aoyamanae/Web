$pref = [ 
"hokkaido" => "北海道"
"aomori" => "青森"
"fukushima" => "福島"
];
<p>代入時のエラーを直してください</p>

<?php
$pref = [ 
  "hokkaido" => "北海道",
  "aomori" => "青森",
  "fukushima" => "福島"
];
var_dump($pref);

?>
<p>
複数を一度に代入する場合はインデックス=>値 は=>(配列演算子)で結んで
カンマで区切る
