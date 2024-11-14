<?php
    $srcPath =dirname(__FILE__,2)."/src/";
    $nav = file($srcPath."indexnav.txt",FILE_IGNORE_NEW_LINES);
?>


    <?php
        foreach($nav as $i){
        list($text, $link) = explode(",",$i);
    ?>
    <div class="container-fluid navbar-nav">
        <div class="back">
            <ul class="nav justify-content-center navbar ">
                    <li class="nav-item nav-item active">
                        <a class="navbar-brand nav-link" href="<?=$link?>"><?=$text?></a>
                    
                    </li>
            </ul>
    </div>    
    </div>
    <?php
        }
    ?>