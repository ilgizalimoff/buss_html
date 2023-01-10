 <?php

if(isset($_POST['submit'])){
$to = "anton71vanov@yandex.ru"; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['email'];
$telefon = $_POST['tel'];
$name = $_POST['name'];
$subject = "Форма отправки сообщений с сайта";
$message = $name . " оставил сообщение:" . "\n\n" ."Телефон: " . $telefon ."\n\n" . $_POST['message'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
}
else 
echo "Error";
?>
