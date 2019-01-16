<?php
    // ファイルを保存した後、シンボリックリンクを貼ったstorage/をpathに差し込む
    function makeImagePath($path) {
        $ary = explode('/', $path);
        array_splice($ary, 0, 1, array('storage')); // publicをstorageに変換
        return implode('/', $ary);
    }