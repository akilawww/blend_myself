<?php
    // ファイルを保存した後、シンボリックリンクを貼ったstorage/をpathに差し込む
    function makeImagePath($path) {
        $ary = explode('/', $path);
        array_splice($ary, 0, 1, array('storage')); // publicをstorageに変換
        return implode('/', $ary);
    }
    
    function reMakeImagePath($path) {
        $ary = explode('/', $path);
        array_splice($ary, 0, 1, array('public')); // storageをpublicに変換
        return implode('/', $ary);
    }

    // タグの選択に全件Hitしたrecipe_idを抽出
    function tagVerCount($tagVers, $tagCount){
        $result = array();
        foreach ($tagVers as $tagVer1){
            $recipeCount = 0;
            foreach ($tagVers as $tagVer2)
                if ($tagVer2['recipe_id'] === $tagVer1['recipe_id']) $recipeCount++;
            if ($tagCount === $recipeCount) $result[] = $tagVer1['recipe_id'];
        }
        return $result;
    }