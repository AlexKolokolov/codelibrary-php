<!DOCTYPE html>
<html>
    <head>
        <?php
            $logo = "net.png";
            $title = "Сайты";
            require_once ('blocks/head.php');
            require_once ('functions/functions.php');
            $page = htmlspecialchars($_GET['page']);
            $sourseDB = "sites";
            $pageSize = 5;
            $itemsNum = getItemsNum ($sourseDB);
            $sites = getList ($sourseDB, $page, $pageSize);
        ?>
    </head>
    <body>
        <?php
            $header = "Сайты";
            require_once ('blocks/header.php'); 
        ?>
        
        <section>
            <?php
                for ($i = 0; $i < count($sites); $i++) {
                    echo ('<a name="site'.$i.'"></a>
                        <article>
                            <h2>'.$sites[$i]["title"].'</h2>
                            <img src="/img/sites/site_'.$sites[$i]["id"].'.jpg" />
                            <p>'.$sites[$i]["info"].'</p>
                            <a href="'.$sites[$i]["url"].'" target="_blank">
                                <div class="refButton">Перейти</div>
                            </a>
                        </article>');
                }
                require_once ('blocks/nav.php');
            ?>
        </section>
        <?php require_once ('blocks/footer.php'); ?>
    </body>
</html>