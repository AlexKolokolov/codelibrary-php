<nav>
    <?php
    $pagesNum = ceil($itemsNum / $pageSize);
    if ($page > 1 && $page < $pagesNum)
        echo('<a href="'.$sourseDB.'.php?page='.($page - 1).'" />
                <div class="navButton" id="pevious">Предыдущая</div>
            </a>
            <div id="pagesNum">
                <p><b>Страница '.$page.' из '.$pagesNum.'</b></p>
            </div>
            <a href="'.$sourseDB.'.php?page='.($page + 1).'" />
                <div class="navButton" id="next">Следующая</div>
            </a>');
    elseif ($page <= 1)
        echo ('<div id="pagesNum">
                <p><b>Страница '.$page.' из '.$pagesNum.'</b></p>
            </div>
            <a href="'.$sourseDB.'.php?page='.($page + 1).'" />
                <div class="navButton" id="next">Следующая</div>
            </a>');
    else 
        echo ('<a href="'.$sourseDB.'.php?page='.($page - 1).'" />
                <div class="navButton" id="pevious">Предыдущая</div>
            </a>
            <div id="pagesNum">
                <p><b>Страница '.$page.' из '.$pagesNum.'</b></p>
            </div>');
    ?>
</nav>