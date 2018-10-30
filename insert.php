<?php
/**
 * Created by PhpStorm.
 * User: junhowoo
 * Date: 2018. 10. 9.
 * Time: PM 7:32
 */

$contents = $_POST['contents'];
$excuteDate = date('Y-m-d H:i:s');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=TODOLIST', 'root', 'root');
$dbh->query('insert into items (contents, excute_date) values ("' . $contents . '", "' . $excuteDate . '")');
header('Location: /html/index.php');