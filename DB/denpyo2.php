<?php
/*受注伝票のデザイン tokuiとshohinで別の取得方法*/
require_once 'connect.php';

/* 得意先の一覧取得*/
$sql = "SELECT tokui_id, tokui_mei FROM tokui LIMIT 50";
$sth = $dbh->prepare( $sql );
$sth->execute();

$tokui_select = '';
foreach ($sth as $key => $row) {
  // ループしてselectの選択肢を作る
  $tokui_select .= 
  "<option value='{$row['tokui_id']}'> {$row['tokui_mei']} </option>";
}

/*商品名の一覧取得*/ 
$sql = "SELECT * FROM shohin LIMIT 50" ;
$sth = $dbh->prepare( $sql );
$sth->execute();

$shohin_select = '<option value="" >選択してください</option>';
$json_arr = [];  //配列として初期化

foreach ($sth as $key => $row) {
  // ループしてselectの選択肢を作る
  $shohin_select .= "<option value='$key'>{$row['shohin_mei']}</option>";
  $shohin_arr[] = $row ; 
}
//jsで使うためjsonに変えておく
$shohin_json = json_encode($shohin_arr);
?>


<form action="denpyo-output.php" method="post" onsubmit="return hissu()"> 
<!--onsubmitでjsの関数を実行する､その戻り値がfalseならformは送信を止める､trueなら送信する-->

<p>
得意先名 <select name="tokui_mei" id="tokui_mei">
    <option value="">選択してください</option><?=$tokui_select?></select>
  日付 <input type="date" name="juchu_bi">
</p><p>
  得意先ID <input type="number" name="tokui_id" id="tokui_id" readonly>
  住所 <input type="text" name="jusho" readonly>
</p>  

<div><button id="add_row" type="button">一行増やす</button></div>

<table id="shosai">
  <tr><th>商品コード</th><th>商品名</th><th>単価</th>
    <th>数量</th><th>小計</th></tr>
  <tr><td><input name="shohin_id[]" readonly></td> <!--type="text"は省略できる-->
      <td><select name="shohin_mei[]" class="shohin_mei"><?=$shohin_select?></select></td>
      <td><input name="tanka[]" class="tanka"></td>
      <td><input name="suryo[]" class="suryo"></td>  <!--requiredだと無駄な行があるときに送信できない-->
      <td><input id="shoke"></td></tr>  
</table>

  <input type="submit" value="発行する">
</form>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script>
// $('#tokui_id').change(function () {
//     console.log($(this).val()); 
// });
$(document).on("change", "#tokui_mei", function () {
  //送信するのは実はidの方
  var tokui_id = $(this).val(); 
  $.ajax({
    url: 'ajax_tokui.php',
    type: "POST", 
    dataType: "json",
    data:{tokui_id: tokui_id}
    // success : function(data) successは1.18以降で非推奨
  }).done(function(data){
      console.log(data); 
      $('#tokui_id').val(data[0]);
      $('[name="jusho"]').val(data[2]);
  }).fail(function(XMLHttpRequest, textStatus, error){
      console.log(error); 
  });
});

var shohin_json = <?=$shohin_json?>;

  $('#add_row').click(function(){
    var tr = $('#shosai tr').eq(1).prop('outerHTML'); //eq(0)だと直書き部分
    $('#shosai').append(tr);
  }); //一行追加

  // $('.suryo').change(function(){
    $(document).on("change", ".suryo", function () {
    // 小計の計算と結果の埋め込み
    var shoke = $(this).val() * $(this).parent().prev().children().val();
     $(this).parent().next().children().val(shoke);
    //  var shoke = $(this).val() * $('#tanka').val();
    //  $('#shoke').val(shoke);
  });

  $(document).on("change", ".shohin_mei", function () {
    //取得した行の､商品idをフィールドの値に埋め込む
    var k = $(this).val(); // 行番号を取得
    // console.log(shohin_json[k]);
    var m = $('.shohin_mei').index($(this));
    // console.log(m);
    $('.shohin_mei').each(function (i,e) {
    // console.log( $(e).val() != k);
    if($(e).val() == k && i !=m) {
      $('.shohin_mei').eq(m).children().eq(0).prop('selected',true); //atterだと2回めいかない
      alert('重複しています');
      return false; //ループを抜ける
    }
    });
    $(this).parent().prev().children().val(shohin_json[k]['shohin_id']); 
    $(this).parent().next().children().val(shohin_json[k]['tanka']);
  });

function hissu() {
  var flug;

  $('.tanka').each(function(i,e){
    console.log($('.suryo').eq(i).val()); //←何も書いてなければカラなので何も映らない
    if ($(e).val() != '' && $('.suryo').eq(i).val() == '') {
      alert('数量をいれてください');
      flug = false ;
    } else {
      flug = true;
    }
  });

  return flug;
}
</script>

