<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
    <title>PHP practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex container">
        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>
        <div class="about me">
            <?php
            include 'index.php';
            ?>
            <h1> <?php
                echo $p ?> </h1>
        </div>
        <div class="data">
            <div class="myImg">
                <?php
                 echo '<src="img/php.png">'
                 ?>
            </div>
        </div>
        <div class="fullname">
            <?php include 'index.php' ?>
            <p> Меня зовут
            <?php echo $name, ' ', $surname, '<br>';
                  echo 'город', ' ', $city; ?>
            </p>
            <p> Мне
            <?php echo $age; ?>
                год </p>
            <p>Мы изучили переменные</p>
            <p>Мы изучили простые операции с ними</p>
        </div>
        <div class="knowlege">
            <?php include 'knowlege.inc.php'; ?>
            <?php
            echo $a, ' ', $b, ' ', $c;
            ?><br>
            <?php
                $a = 10;
                $b = 20;
                $c = $a + $b;
                echo $c;
             ?><br>
            <?php
            echo $d;
            ?>
        </div>
        <div class="article">
            <p class="text">
HACKER-1
            </p>
        </div>
    </div>
        <?php include 'footer.inc.php'
        ?>
</body>
</html>
