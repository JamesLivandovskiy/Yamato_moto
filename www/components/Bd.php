<?php
/**
 *
 */
class Db
{

  public static function connectionBd()
  {

    $host = 'localhost:3308'; // адрес сервера
    $database = 'car_auto_staf'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = '1234567890'; // пароль
    $db = new PDO("mysql:host=$host; dbname=$database",$user,$password);
    return $db;
  }
}

 ?>
