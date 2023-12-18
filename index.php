<?php
$title = 'Давыдов Артём Сергеевич 221-362 - Лабораторная работа №5';
$array = array('DEFENDER', 'DISCOVERY', 'RANGE ROVER', 'RANGE ROVER SPORT', 'RANGE ROVER EVOQUE', 'RANGE ROVER VELAR');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
    <title><?php echo $title ?></title>
    
</head>

<body>
    
    <header>
        <nav>
        <ul>
            <li>
                    <a href="<?php
                    $name = 'Главная';
                    $link = 'index.php';
                    $current_page = true;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
           
            <li>
                    <a href="<?php
                    $name = 'Обратная связь';
                    $link = 'two.php';
                    $current_page = false;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
            <li>
                    <a href="<?php
                    $name = 'Вход в систему';
                    $link = 'two2.php';
                    $current_page = false;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
            <li>
                    <a href="<?php
                    $name = 'Автомобильная терминология';
                    $link = 'terms.php';
                    $current_page = false;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
        </ul>
        </nav>
    </header>
    <main>
        
        <section id="section1">
            <h1>Land Rover</h1>
            <div class="image-container">
                <?php echo '<img src="image'.(date('s')% 2 + 1).'.jpg" alt="Welcome Image"'?>
            </div>
        </section>

        <section id="section2">
            <h2>О нас</h2>
            <p>Мы делаем лучшие автомобили!</p>
        </section>

        <section id="section3">
            <h2>Модельный ряд</h2>
            <?php foreach ($array as $n => $row) {
                echo  ' ' .($n + 1) . '.' .' '. $row . "<br>\r\n";
            } ?>
            <h2>Рейтинг продаваемых моделей</h2>
            <table>
                <thead>
                    <tr>
                        <th>Модель</th>
                        <th>Количество</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $min = 20000;
                    $max = 350000;
                    $models = array(
                        array("Range Rover Vogue", rand($min, $max)),
                        array("Range Rover Sport HSE", rand($min,$max))
                    );

                    foreach ($models as $model) {
                        echo "<tr>";
                        echo "<td>" . $model[0] . "</td>";
                        echo "<td>" . $model[1] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>Контакты</p>
        <p>Телефон: +7(495)-755-75-75<p>
        <p>Почта: land@rover.ru<p>
        <p>&copy; 2023 Jaguar Land Rover</p>
        <div style="text-align:left">Сформировано <?=date('d.m.Y в H-i:s')?></div>
    </footer>
</body>
</html>