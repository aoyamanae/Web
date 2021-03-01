<!-- 2台のFitを管理するオブジェクト-->
<?php
class Fit{ //オブジェクトはclassで定義
  private $kyori;
  protected $hoken =35000;
  public $shaken ='2020/10';
  protected $zei =35000;

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


class Lexus extends Fit{
  protected $zei =80000;
}
// 50km走らせ税金は?
$lexisA = new Lexus();
$lexisA->soko(50);
var_dump($lexisA);
// echo $lexis->zei();