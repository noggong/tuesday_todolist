<?php
/**
 * Created by PhpStorm.
 * User: junhowoo
 * Date: 2018. 10. 9.
 * Time: PM 7:32
 */

try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=TODOLIST', 'root', 'root');

    echo '<xmp>';
    foreach($dbh->query('SELECT * from items') as $row) {
        print_r($row);
    }
    echo '</xmp>';

    $dbh = null;

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}