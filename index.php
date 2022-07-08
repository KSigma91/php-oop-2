<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body><?php
    include __DIR__ . '/list.php'; ?>

    <div class=food>
        <ul>
            <li>
                <?= $food1->printFood() ?>
            </li>
            <li>
                <?= $food2->printFood() ?>
            </li>
            <li>
                <?= $food3->printFood() ?>
            </li>
        </ul>
    </div><br>
    
    <div class="toys">
        <ul>
            <li>
                <?= $toys1->printToys() ?>
            </li>
            <li>
                <?= $toys2->printToys() ?>
            </li>
            <li>
                <?= $toys3->printToys() ?>
            </li>
        </ul>
    </div>
</body>
</html> 