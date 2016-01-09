<!DOCTYPE html>
<html>
    <head>
        <?php
            $logo = "computer.png";
            $title = "Библиотека кодера";
            require_once ('blocks/head.php');
            require_once ('functions/functions.php');
            $books = getList ("books", 1, 5);
            $courses = getList ("courses", 1, 5);
            $sites = getList ("sites", 1, 5);
            $booksNum = getItemsNum("books");
        ?>
    </head>
    <body>
        <?php
            $header = "Библиотека кодера";
            require_once ('blocks/header.php'); 
        ?>
        <section>
            <article>
                <a href="books.php?page=1">
                    <h1>Последние добавленные книги</h1>
                </a>
                    <?php
                        $stringNum = count($books);
                        if ($stringNum > 5) $stringNum = 5;
                        for ($i = 0; $i < $stringNum; $i++) {
                            echo ('<a href="books.php?page=1#book'.$i.'">
                                    <p><b>'.$books[$i]["title"].'</b>, '.$books[$i]["author"].'</p>
                                </a>');
                        }
                    ?>    
            </article>
            <article>
                <a href="courses.php?page=1">
                    <h1>Последние добавленные видеокурсы</h1>
                   <?php
                            $stringNum = count($courses);
                            if ($stringNum > 5) $stringNum = 5;
                            for ($i = 0; $i < $stringNum; $i++) {
                                echo ('<a href="courses.php?page=1#course'.$i.'">
                                        <p><b>'.$courses[$i]["title"].'</b>, '.$courses[$i]["author"].'</p>
                                    </a>');
                            }
                    ?>
            </article>
            <article>
                <a href="sites.php?page=1">
                    <h1>Последние добавленные сайты</h1>
                </a>
                <?php
                            $stringNum = count($sites);
                            if ($stringNum > 5) $stringNum = 5;
                            for ($i = 0; $i < $stringNum; $i++) {
                                echo ('<a href="sites.php?page=1#site'.$i.'">
                                        <p><b>'.$sites[$i]["title"].'</b>
                                    </a>');
                            }
                    ?>
            </article>
        </section>
        <?php require_once ('blocks/footer.php'); ?>
    </body>
</html>