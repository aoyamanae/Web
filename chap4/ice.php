<?php
$t = false ;  //食べてない
$h = true ; //引換券ありは "かつ→&&"
$s = 400 ; //所持金
$w = true ; //割引券あり
if ( !$t && $h == true){
  if ($s >= 500 ) {
    echo '買える';
  }elseif ($s>=400 && $w) {
    echo '買える';
  } else {
    echo '買えない';
  }
}
else{
    echo '買えない';
}

echo '<br>';
//省略
if ( !$t && $h && (($s >= 500 ) || ($s>=400 && $w))){
    echo '買える';
}
else{
    echo '買えない';
}
?>
