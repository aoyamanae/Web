<?php
// var_dump( json_decode( $_POST['shohin'] ));
// exit;

$variable = json_decode($_POST['shohin']);
// print_r($variable); // var_dumpよりみやすい
include 'inc-array.php';
$total = 0;

// var_dump($variable->nenwari); →申し込む
// var_dump($variable->plan);　→光ネオEXA****

if( isset($variable->nenwari) ){
  //２年割なら
  $total += $plan_price[$variable->plan] * $nenwari;

}else{
  $total += $plan_price[$variable->plan];
}
// プランの金額計算まで

// foreach ($variable as $key => $value) {
//   if ( is_array($value) ) { //key'rental'のvalueは配列
// 		//配列ならcheckBox 
//     foreach ($value as $k => $val) { 

//       if( $val = '無線LANカード' ){
//         $total += $rental_price[$val] * $variable->nic_maisu;

//       }else{
//         $total += $rental_price[$val];
//       }
//     }
//   } 
// }これだとなぜか100円合わない

if ( isset($variable->rental) ) {
  //配列ならcheckBox 　配列かわからないときはis_arrayを追加する
  foreach ($variable->rental as $k => $val) { 

    if( $val == '無線LANカード' ){
      // $nic_tanka = $rental_price[$val];
      // echo $variable->nic_maisu;
      // $total += $variable->nic_maisu * $nic_tanka;
      $total += $rental_price[$val] * $variable->nic_maisu;

    }else{
      $total += $rental_price[$val];
    }
  }
} 
echo $total,'円';