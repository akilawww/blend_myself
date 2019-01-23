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

    function tagVerCount($tagVers, $tagCount){
        $result = array();
        foreach ($tagVers as $tagVer1){
            $recipe = $tagVer1['recipe_id'];
            $recipeCount = 0;
            foreach ($tagVers as $tagVer2)
                if ($tagVer2['recipe_id'] === $recipe) $recipeCount++;
            if ($tagCount === $recipeCount) $result[] = $recipe;
        }
        return $result;
    }