<?php
/**
 * Plugin Name: Folder Slider DX ver2
 * Description: ディレクトリ内の画像を取得するスライダー
*/

    function get_images(){
        $wudir = wp_upload_dir();

        $file_dir = $wudir['basedir']."/slider/";
        $urlslider = $wudir['baseurl']."/slider/";

        $filelist = glob($file_dir.'*-150x150.jpg');
        //ファイルの末尾がこれと一致するファイルのみ取得
        return $filelist;
    }