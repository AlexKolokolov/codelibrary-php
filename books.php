<!DOCTYPE html>
<html>
    <head>
        <?php
            $logo = "books.png";
            $title = "Книги";
            require_once ('blocks/head.php');
            require_once ('functions/functions.php');
            $page = htmlspecialchars($_GET['page']);
            $sourseDB = "books";
            $pageSize = 5;
            $itemsNum = getItemsNum ($sourseDB);
            $books = getList ($sourseDB, $page, $pageSize);
        ?>
    </head>
    <body>
        <?php
            $header = "Книги";
            require_once ('blocks/header.php'); 
        ?>
        <section>
            <?php
                for ($i = 0; $i < count($books); $i++) {
                    echo ('<a name="book'.$i.'"></a>
                        <article>
                            <h2>'.$books[$i]["title"].'</h2>
                            <img src="/img/books/book_'.$books[$i]["id"].'.jpg" />
                            <p><b>Автор:</b> '.$books[$i]["author"].'</p>
                            <p>'.$books[$i]["info"].'</p>
                            <a href="'.$books[$i]["url"].'" target="_blank">
                                <div class="refButton">Скачать</div>
                            </a>
                        </article>');
                }
            require_once ('blocks/nav.php');
            ?>
        </section>
        <?php require_once ('blocks/footer.php'); ?>
    </body>
</html>