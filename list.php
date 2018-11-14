<?php
/**
 * Created by PhpStorm.
 * User: junhowoo
 * Date: 2018. 10. 9.
 * Time: PM 7:32
 */
echo '11';exit;
//$localhost = '127.0.0.1';
$dbh = new PDO('mysql:host=127.0.0.1;dbname=TODOLIST', 'root', 'root');

$statArr = [
    'Y' => '완료',
    'N' => '미완료',
];

echo '<table>';
foreach ($dbh->query('SELECT * from items', PDO::FETCH_ASSOC) as $row) {
    echo '<tr><td>' . $row['item_id'] . '</td><td>' . $row['contents'] . '</td><td>' . $statArr[$row['stat']] . '</td><td>' . $row['excute_date'] . '</td></tr>';
}
echo '</table>';

$dbh = null;
?>
