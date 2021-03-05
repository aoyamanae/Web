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

if ( isset($variable->rental) ) { 
  // 配列かわからないときはis_arrayを追加する

  foreach ($variable->rental as $k => $val) { 

    if( $val == '無線LANカード' ){
      // $nic_tanka = $rental_price[$val];
      // echo $variable->nic_maisu;　→ 1 枚とか
      // $total += $variable->nic_maisu * $nic_tanka;
      $total += $variable->nic_maisu * $rental_price[$val];

    }else{
      $total += $rental_price[$val];
    }
  }
} 
echo '<h3>見積金額</h3>',$total,'円';