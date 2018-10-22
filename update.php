<?php
/**
 * Created by PhpStorm.
 * User: junhowoo
 * Date: 2018. 10. 9.
 * Time: PM 7:32
 */


$dbh = new PDO('mysql:host=127.0.0.1;dbname=TODOLIST', 'root', 'root');

echo '<xmp>';
$dbh->query('UPDATE items SET contents = "변경" WHERE item_id = 2');
echo '</xmp>';

$dbh = null;