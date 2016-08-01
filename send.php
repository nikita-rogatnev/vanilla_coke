<?php


$to = "vanilla@rogatnev.ru";
$subject= "Новый заказ Coca-Cola Vanilla & Cherry!";

$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$vanilla = $_POST["vanilla"];
$cherry = $_POST["cherry"];
$rr = $_POST["rr"];
$metro = $_POST["metro"];
$date = date("m.d.y"); 



$db = "idiotsonli_cola";
$link = mysql_pconnect ("localhost", "idiotsonli_admin", "ybrbnfhjufnytd");
$query = "INSERT INTO order ('name, email, tel, vanilla, cherry, rr, metro, date') VALUES ('".$name.", ".$email.", ".$tel.", ".$vanilla.", ".$cherry.", ".$rr.", ".$metro.", ".$date."')";
mysql_query ( $query );
mysql_close ( $link );






$message = "Заказчик: ".$name."\r\n"."Ванильной: ".$vanilla."\r\n"."Вишневой: ".$cherry."\r\n\r\n"."Email: ".$email."\r\n"."Тел.: ".$tel."\r\n"."Доставка: ".$rr."\r\n"."Метро: ".$metro;
$headers = "From: Vaniila-Coke" . "\r\n";
 
mail($to, $subject, $message, $headers);








?>