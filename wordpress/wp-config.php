<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'an_wp' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'aoyama_nae' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Asdf3333-' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j7DR3r<S3scQtf37!JLKh? ToDyr}B^j>Rik=+h34Nr;0(5r+.}tNpuF4}a_.dyv' );
define( 'SECURE_AUTH_KEY',  '47D6^hMphUnejY!sUKK>hRy=DfpaHfMC4};z-2|O_ba{HGnX<T9 @tvnv~CiB~%=' );
define( 'LOGGED_IN_KEY',    'g;Y*0SYZ7oGiuSiK]*8{g+N~1r46nKMsx!X*A*S ]O= oKR&O&ub5fs[Kp(dv>&!' );
define( 'NONCE_KEY',        '4@)a ^wB]$l1BnCbRnRC]7HI;pK6yDB$A$LXiLFt8YT3WKR2t{`oNtkz_h^ SN}{' );
define( 'AUTH_SALT',        'YR*J%PB#_N[Ua@m%f//`af71v8%eAtZfx#c1+4?*-U~#a4D-W:t>gr_M8*ggRKxY' );
define( 'SECURE_AUTH_SALT', '@E(XIsFE!~sD75OIm{^on4_O1o;xjZa&2j4P/4%HlC1J3D,Kly?[]K#WP_lT-4^4' );
define( 'LOGGED_IN_SALT',   'bc/?N);k[HFL?d70tM Ej|M)>zJ8!gUwo%LH67ljc:+18DIJ@u/htij:%yV7_`$0' );
define( 'NONCE_SALT',       'OGV2{:;^{~1cL_a^Kj-*+:BbAhx I.eRq%/EmmsG )&!.DEt]DR9pp{IYrn]tWE8' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
