<?php
$dbh = new PDO('mysql:host=127.0.0.1;dbname=TODOLIST', 'root', 'root');
$statArr = [
    'Y' => '완료',
    'N' => '미완료',
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDoList</title>

    <link href="css/common.css" rel="stylesheet"/>
</head>
<body>
    <div>
        <header>
            <div id="logo">ToDoList</div>
            <div id="finder">Quick Find</div>
            <ul id="quick">
                <li><a>설정</a></li>
                <li><a>알림</a></li>
                <li><a>추가</a></li>
            </ul>
        </header>
        <div id="container">
            <nav>
                <ul>
                    <li><span>Inbox</span></li>
                    <li><span>Today</span></li>
                    <li><span>Next 7 days</span></li>
                    <li>
                        <ul>
                            <li class="header"><span>Projects</span></li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="header"><span>Labels</span></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="wrap">
                <h2>Today <time class="gray-font">Sun 21 Oct</time></h2>
                <ul class="items">
                    <?php
                    foreach ($dbh->query('SELECT * from items', PDO::FETCH_ASSOC) as $row) {
                        $checked = '';
                        if ($row['stat'] == 'Y') $checked = 'checked';
                    ?>
                        <li>
                            <div>
                                <label>
                                    <input type="checkbox" class="complete" <?php echo $checked?> />
                                    <span class="contents"><?php echo $row['contents']?></span>
                                </label>
                                <button></button>
                            </div>
                        </li>
                    <?php };?>
                </ul>
                <div>
                    <form action="/insert.php" method="post">
                        <input type="text" name="contents" />
                        <input type="checkbox" name="isCOmple" value="1"/>
                        <input type="submit" value="Add Task">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>