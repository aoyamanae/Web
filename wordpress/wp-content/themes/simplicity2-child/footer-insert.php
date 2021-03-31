<?php
//フッター部分に解析タグを挿入したいときは、このテンプレートに挿入
//子テーマのカスタマイズ部分を最小限に抑えたい場合に有効なテンプレートとなります。
?>
<?php if (!is_user_logged_in()) :
//ログインユーザーをカウントしたくない場合は
//↓ここに挿入?>

<?php endif; ?>
<?php //ログインユーザーも含めてカウントする場合は以下に挿入 ?>

<script>
  jQuery(function(){
    jQuery(".cat-post-item a.cat-post-title").prepend('<i class="fa fa-thumbs-o-up"></i>');//追加
    jQuery("#category-posts-3 h3").eq(0).html("<i class='fa fa-cutlery'></i> <span>WEEKLY LUNCH</span><br>今週のランチ");// この要素の最初のh3の中身を ()内に書いたタグで上書きするスクリプト
  });
</script>
