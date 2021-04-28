<?php 
 session_start();
// いずれかがカラかトークンが一致しなければ送信しない

if( empty($_POST['username']) || empty($_POST['usermail']) || empty($_POST['usercomment']) || empty($_POST['token']) || $_POST['token']!=$_SESSION['post']['token']){
	echo '<p>送信出来ませんでした｡戻って入力し直してください｡';	

}else{

  
  $_SESSION['post']['username']=htmlspecialchars($_POST['username'])."\n";
  $_SESSION['post']['usermail']=htmlspecialchars($_POST['usermail']).PHP_EOL;
  $_SESSION['post']['usercomment']=htmlspecialchars($_POST['usercomment'])."\n";
  
  ?>
<style>dt{ float:left;width:6em}</style>
<h2>確認してください</h2>
<dl>
  <dt>お名前</dt>  <dd><?=$_SESSION['post']['username']?></dd>
  <dt>Eメール</dt>  <dd><?=$_SESSION['post']['usermail']?></dd>
  <dt>コメント</dt>  <dd><?=$_SESSION['post']['usercomment']?></dd>
</dl>

<button onclick='location.href="mailsend.php"'>この内容で送信</button>
<?php 
}