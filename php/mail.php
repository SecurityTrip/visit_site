<meta http-equiv='refresh' content='3; url=https://arasaka-industry.online/'>
<meta charset="UTF-8" />
<?php

	if (isset($_POST['email']) && $_POST['email'] != "") //тут все точно так же как и в предыдущем случае
		$email = $_POST['email'];
	else die ("Не заполнено поле \"Email\"");

	$address = "info@arasaka.ru";//адрес куда будет отсылаться сообщение для администратора

    $body = "Рассылка \n";
    $mes = "Рассылка \n";
	$mes .= "E-mail: $email \n";
    $mes .= "Текст: $body";
	$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");//собственно сам вызов функции отправки сообщения на сервере

	if ($send) //проверяем, отправилось ли сообщение
		echo "Сообщение отправлено успешно! Перейти на <a href='https://arasaka-industry.online/'a>, если вас не перенаправило вручную.";
	else
		echo "Ошибка, сообщение не отправлено! Возможно, проблемы на сервере";

?>