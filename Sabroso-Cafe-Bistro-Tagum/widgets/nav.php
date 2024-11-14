<?php
    $srcPath =dirname(__FILE__,2)."/src/";
    $nav = file($srcPath."nav.txt",FILE_IGNORE_NEW_LINES);
?>


    <?php
        foreach($nav as $i){
        list($text, $link) = explode(",",$i);
    ?>
        <li><a href="<?=$link?>"><?=$text?></a></li>
    <?php
        }
    ?>