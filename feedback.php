<!DOCTYPE html>
<html>
	<head>
		<?php
            $logo = "letter.png";
            $title = "Обратная связь";
            require_once ('blocks/head.php'); 
        ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script>
            $(document).ready (function(){
                $("#done").click (function () {
                    $('#messageShow').hide ();
                    var name = $("#name").val ();
                    var email = $("#email").val ();
                    var subject = $("#subject").val ();
                    var message = $("#message").val ();
                    var fail = "";
                    if (name.length < 3) 
                        fail = "Имя не меньше 3 символов";
                    else if (email.split ('@').length - 1 == 0 || email.split('.').length - 1 == 0 )
                        fail = "Вы ввели некорректный email";
                    else if (subject.length < 3)
                        fail = "Тема сообщения меньше 3 символов";
                    else if (message.length < 10)
                        fail = "Сообщение меньше 10 символов";
                    if (fail != "") {
                        $('#messageShow').html (fail + "<div class='clear'><br></div>");
                        $('#messageShow').show ();
                        return false;
                    }
                    $.ajax ({
                        url: '/ajax/feedback.php',
                        type: 'POST',
                        cache: false,
                        data: {'name': name, 'email': email, 'subject': subject, 'message': message},
                        dataType: 'html',
                        success: function (data) {
                            $('#messageShow').html (data + "<div class='clear'><br></div>");
                            $('#messageShow').show ();
                        }
                    })
                   
                });
            });
        </script>
	</head>
	<body>
		<?php
            $header = "Обратная связь";
            require_once ('blocks/header.php'); 
        ?>
        <section>
            <?php require_once ('blocks/social.php'); ?>
            <article>
                <h2>Или напишите мне письмо</h2>
                <label for="name">Имя:</label>
                <input type"text" placeholder="Ваше имя" id="name" name="name" /><br><br>
                <label for="email">E-mail:</label>
                <input type"text" placeholder="Ваш E-mail" id="email" name="email" /><br><br>
                <label for="subject">Тема:</label>
                <input type"text" placeholder="Тема сообщения" id="subject" name="subject" /><br><br>
                <textarea name="message" id="message" placeholder="Введите сюда ваше сообщение"></textarea><br><br>
                <div id="messageShow"></div>
                <input class="menuButton" type="button" name="done" id="done" value="Отправить" />
            </article>
        </section>
        <?php require_once ('blocks/footer.php'); ?>
	</body>
</html>