<?php 

$msg=$_POST['text'];
$count=$_POST['count'];

if(isset($_POST['submit'])){
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */    
	$to = "admin@probex.ru; office@probex.ru"; // Здесь нужно написать e-mail, куда будут приходить письма	
    $from = "site@probex.ru"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply@epicblog.net

/* Указываем переменные, в которые будет записываться информация из формы */
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['text'];
	$bezspama = $_POST["bezspama"];
    $subject = "Форма отправки сообщений с сайта Probex";//Фиксированная тема письма
	
/* Проверка правильного написания e-mail адреса 
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
} */
	
/* Переменная, которая будет отправлена на почту со значениями, вводимыми в поля */
$mail_to_myemail = "Здравствуйте! 
Было отправлено сообщение с сайта.
Имя отправителя: $name 
E-mail: $email 
Текст сообщения: $message 


Это письмо отправлено роботом. Для обратной связи с автором сообщения используйте адрес указанный в тексте письма.";	
	
$headers = "From: $from \r\n";

if (empty($bezspama) && str_word_count($msg, 0, "АаБбВвГгҐґДдЕеЁёЄєЖжЗзИиІіЇїЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЬьЪъЫыЮюЬьЭэЯя" ) <= $count) /* Оценка полей: bezspama - должно быть пустым и сообщение заполнено вручную */
{	
/* Отправка сообщения, с помощью функции mail() */
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
	echo "<br /><br /><a href='https://probex.ru'>Вернуться на сайт.</a>";
}

/* echo "Отправка проигнорирована. Вы не ввели сообщение"; */

/* echo str_word_count($msg, 0, "АаБбВвГгҐґДдЕеЁёЄєЖжЗзИиІіЇїЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЬьЪъЫыЮюЬьЭэЯя") . $msg . $count; */
/* exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
}
?> 

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script type="text/javascript">
function changeurl(){eval(self.location="https://probex.ru");}
window.setTimeout("changeurl();",3000);
</script>

