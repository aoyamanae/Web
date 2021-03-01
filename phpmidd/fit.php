<!-- 2台のFitを管理するオブジェクト-->
<?php
class Fit{ //オブジェクトはclassで定義
  private $kyori;
  protected $hoken =35000;
  public static $shaken ='2020/10'; //スタティック宣言 public $shaken ='2020/10';
  protected $zei =35000;
  public function _construct($d){ //コンストラクタ関数
    @session_start();
    $engin = 'start';
    echo $d;
  }

  public function soko($km){
    if ($km > 0) 
    $this->kyori += $km;
  }
  public function getKyori(){
    return $this->kyori;
  }
  public function kyori(){
    echo $this->kyori;
  }
}
echo Fit ::$shaken; //クラス内でstaticつけると::で外で呼び出せる

class Lexus extends Fit{
  protected $zei = 80000;

  function getZei(){
    echo $this->zei;
  }
}

$lexusA  = new Lexus();
$lexusA->soko(50);

echo "<p>レクサスの走行距離";
$lexusA->kyori();
echo "<p>レクサスの重量税";
$lexusA->getZei();

$date = date("1");
$lexusA = new Lexus($date); //???????

exit;
//クラスを使う方法 インスタンス=クラスのコピー 

$fitA = new Fit(); //newでインスタンスをつくる
$fitA->shaken = '2022/02';
echo $fitA->shaken; //$は先頭にしか付けない
//echo $fitA->kyori; //private修飾子は出ない
//echo $fitA->hoken; //protectedも外から出せない

// fitAを55k走らせる
$fitA->soko(55);
// var_dump($fitA);
$abc = $fitA->getKyori();
echo "<p>fitAの走行距離は$abc</p>"; //returnだと代入できる

// さらにfitAを20k走らせる
$fitA->soko(20);
// var_dump($fitA);
// $fitA->kyori(); echoがすでにあるからこれだけで表示される
// echo "<p>今日の距離は$fitA->kyori()</p>"; ""で()と->が認知されない
echo "<p>今日の距離は" ,$fitA->kyori();
?> 
<!--html-->
<p>今日の距離は<?=$fitA->kyori();?></p>

<?php
//2台目のフィットをfitBとして100k走らせる
$fitB = new Fit();
$fitB->soko(100);
echo $fitB->getKyori(); // 走った距離も表示
// こっちの車検日は?
echo '<p>fitBの車検日は',$fitB->shaken;
//インスタンスはお互いに分離してる 