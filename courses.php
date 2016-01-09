<!DOCTYPE html>
<html>
    <head>
        <?php
            $logo = "video.png";
            $title = "Видеокурсы";
            require_once ('blocks/head.php');
            require_once ('functions/functions.php');
            $page = htmlspecialchars($_GET['page']);
            $sourseDB = "courses";
            $pageSize = 5;
            $itemsNum = getItemsNum ($sourseDB);
            $courses = getList ($sourseDB, $page, $pageSize);
        ?>
    </head>
    <body>
        <?php
            $header = "Видеокурсы";
            require_once ('blocks/header.php'); 
        ?>
        
        <section>
            <?php
                for ($i = 0; $i < count($courses); $i++) {
                    echo ('<a name="course'.$i.'"></a>
                        <article>
                            <h2>'.$courses[$i]["title"].'</h2>
                            <img src="/img/courses/course_'.$courses[$i]["id"].'.jpg" />
                            <p><b>Автор / Канал:</b> '.$courses[$i]["author"].'</p>
                            <p>'.$courses[$i]["info"].'</p>
                            <a href="'.$courses[$i]["url"].'" target="_blank">
                                <div class="refButton">Смотреть</div>
                            </a>
                        </article>');
                }
                require_once ('blocks/nav.php');
            ?>
        </section>
        <?php require_once ('blocks/footer.php'); ?>
    </body>
</html>