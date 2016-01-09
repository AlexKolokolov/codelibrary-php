<!DOCTYPE html>
<html>
    <head>
        <?php
            $logo = "info.png";
            $title = "О проекте";
            require_once ('blocks/head.php');
        ?>
    </head>
    <body>
        <?php
            $header = "О проекте";
            require_once ('blocks/header.php'); 
        ?>
        <section>
            <article>
                <h2>Учебный проект начинающего программиста Алексея Колоколова </h2>
                <p>
Сайт представляет собой сборник книг, ссылок на видеокурсы и сайты, которые могут быть полезны для тех, кто решил попробовать освоить какой-нибудь из языков программирования: Java, PHP, JavaScript и др.<br> Сайт создан, прежде всего, с целью практического применния изучаемых мной технологий HTML5, CSS, PHP и JavaScript. Планируется регулярное добавление и обновление контента.<br> В разделе <a href="/feedback.php"><b>Обратная связь</b></a> есть возможность связаться со мной, если у Вас появятся вопросы и предложения.
                </p>
            </article>
            <?php require_once ('blocks/social.php'); ?>
        </section>
        <?php require_once ('blocks/footer.php'); ?>
    </body>
</html>