<?php
//メインカラムの手前に何かを挿入したいときは、このテンプレートを編集
//例えば、3カラムの左サイドバーなどをカスタマイズで作りたいときなどに利用します。
// if ( is_front_page() ) {
//   echo do_shortcode('[metaslider id="49"]');
// } 

// ID が1のユーザーのすべての公開 ID とタイトルを取得して、タイトルを echo。
global $wpdb; //グローバル宣言必須
$fivesdrafts = $wpdb->get_results( 
	"
	SELECT ID, post_title 
	FROM $wpdb->posts
	WHERE post_status = 'publish' 
		AND post_author = 1
	"
);

//複数の宛先へ送信
foreach ( $fivesdrafts as $fivesdraft ) {
  echo $fivesdraft->post_title;
}
$admin_email=get_option('admin_email');
$headers[] = 'From: Me Myself <$admin_email>';
$multiple_recipients = array(
  'wsqa_ryo203@yahoo.co.jp',
  'recipient2@foo.example.jp'
);
$subj = 'The email subject';
$body = 'This is the body of the email';
wp_mail( $multiple_recipients, $subj, $body, $headers);
?>