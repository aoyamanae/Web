<?php 
/*受注伝票のデザイン ☓*/
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
}?>
<p>
  得意先名 <select name="tokui_mei" id="tokui_mei">
    <option value="">選択してください</option>
    <?=$tokui_select?></select>
  日付 <input type="date" name="juchu_bi">
</p><p>
  得意先ID <input type="number" name="tokui_id" id="tokui_id" readonly>
  住所 <input type="text" name="jusho" readonly>
</p>  

<div><button id="add_row" type="button">一行増やす</button></div>

<?php
/*商品名の一覧取得*/ 
$sql = "SELECT shohin_id, shohin_mei FROM shohin LIMIT 50" ;
$sth = $dbh->prepare( $sql );
$sth->execute();
$shohin_select = '';
foreach ($sth as $key => $row) {
  $shohin_select .= 
  "<option value='{$row['shohin_id']}'> {$row['shohin_mei']} </option>";
}?>

<table id="shosai">
  <tr><th>商品コード</th><th>商品名</th><th>単価</th>
    <th>数量</th><th>小計</th></tr>
  <tr><td><input name="shohin_id[]" class="shohin_id" readonly></td> 
  <!--type="text"は省略できる-->
      <td><select name="shohin_mei[]" class="shohin_mei">
          <option value="">選択してください</option>
          <?=$shohin_select?></select></td>
      <td><input name="tanka[]" id="tanka"></td>
      <td><input name="suryo[]" id="suryo"></td>
      <td><input id="shoke"></td></tr>  
</table>
<br>
<div><button id="go" type="button" >発行する</button></div>


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

$('#add_row').click(function(){
  var tr = $('#shosai tr').eq(1).prop('outerHTML'); //eq(0)だと直書き部分
  $('#shosai').append(tr);
}); //一行追加

$(document).on("change", ".shohin_mei", function () {
  var shohin_id = $(this).val(); 
  // console.log(this); 
  $.ajax({
    url: 'ajax_shohin.php',
    type: "POST", 
    dataType: "json",
    data:{shohin_id: shohin_id}
  }).done(function(data){
    console.log(data); 
    $('.shohin_id').val(data['shohin_id']);
    $('#tanka').val(data['tanka']);
  }).fail(function(XMLHttpRequest, textStatus, error){
      console.log(error); 
  });
});


// $(this).parent().prev().children().val(shohin_json[k]['shohin_id']); 
    // $(this).parent().next().children().val(shohin_json[k]['tanka']);

// $('#suryo').change(function(){
//   // 小計の計算と結果の埋め込み
//    var shoke = $(this).val() * $('#tanka').val();
//    $('#shoke').val(shoke);
// });
</script>

