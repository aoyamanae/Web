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
define( 'AUTH_KEY',         '!G!QbLaGj#*Qv4$*i~FIv*gou|~$</4kF>Kr=ck@rkg2.}6$d-.$%!0elyqb#(=Z' );
define( 'SECURE_AUTH_KEY',  'aRCQ4a)b/H})?DsB(FmG4RTQh$kEBOc=<%0OnWMjyvI{G1cVVl}UfIf{1=4eIs`2' );
define( 'LOGGED_IN_KEY',    'JXVIK?:ASAFvg`s<X$d}Fb_?S93B$D|B~Y6+Fj/0rKSmye4|m&I@]J)rxZYNB5Eb' );
define( 'NONCE_KEY',        '<=Tf5o *:j?XxMqn?nfi j` SL.uo$jV^q}(De`8>g@}EYvJLlnwtFO !_I5Sess' );
define( 'AUTH_SALT',        '<q]O#-=e$E_)dfIk>7wnrPLw{GAt#:~Yi@o(r9=h8#ludP=n84|Qfe-C7k^mK~dF' );
define( 'SECURE_AUTH_SALT', 'V_7eBm(-si1N$F s.ep-V-4`dq|]fpf1P qY,^|dM)N,]jN*|4sQ{R]-uD7c39v9' );
define( 'LOGGED_IN_SALT',   'hvb0GRtIv@.~ZCq/d}-F7Og4+)+KcXa;c4RdR~-vFz_c|#LBa]bNL~ds*P82(!lZ' );
define( 'NONCE_SALT',       '7P6s[ E]|k3<`m,=4j4nO5~rc`0rWPJsLqf[8c#l&:F@:1tdsa3%^qp_sh{]CuLu' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'sk_';

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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
