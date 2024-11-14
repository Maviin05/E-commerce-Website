<?php
    $srcPath =dirname(__FILE__,2)."/src/";
    $nav2 = file($srcPath."nav2.txt",FILE_IGNORE_NEW_LINES);
?>


    <?php
        foreach($nav2 as $i){
        list($text, $link) = explode(",",$i);
    ?>
        <li><a href="<?=$link?>"><?=$text?></a></li>
    <?php
        }
    ?>