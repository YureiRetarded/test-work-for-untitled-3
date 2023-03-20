<?php
require_once('classes.php');

class TestApple
{
    function testIsWeightCorrect(): void
    {
        //Проверяем вес яблока(минимальное и максимально значение)
        $apple = new Apple(160);
        $expected = [false, true, true, false];
        $result[] = $apple->isWeightCorrect(149);
        $result[] = $apple->isWeightCorrect(150);
        $result[] = $apple->isWeightCorrect(180);
        $result[] = $apple->isWeightCorrect(181);
        if ($expected === $result) {
            echo "Тест прошёл" . PHP_EOL;
        } else {
            echo 'Тест не прошёл. Ожидалось ' . PHP_EOL;
            var_dump($expected);
            echo ' ,получили ' . PHP_EOL;
            var_dump($result);
        }
    }
}

class TestPear
{
    function testIsWeightCorrect(): void
    {
        //Проверяем вес груши(минимальное и максимально значение)
        $pear = new Pear(150);
        $expected = [false, true, true, false];
        $result[] = $pear->isWeightCorrect(129);
        $result[] = $pear->isWeightCorrect(130);
        $result[] = $pear->isWeightCorrect(170);
        $result[] = $pear->isWeightCorrect(171);
        if ($expected === $result) {
            echo "Тест прошёл" . PHP_EOL;
        } else {
            echo 'Тест не прошёл. Ожидалось ' . PHP_EOL;
            var_dump($expected);
            echo ' ,получили ' . PHP_EOL;
            var_dump($result);
        }
    }
}

class TestAppleTree
{
    function testGetApple(): void
    {
        //Проверяем что яблочное дерево отдаёт именно яблоко
        $expected = new Apple(160);
        $appleTree = new AppleTree(1);
        $result = $appleTree->getApple();

        if (get_class($result) === get_class($expected)) {
            echo "Тест прошёл" . PHP_EOL;
        } else {
            echo 'Тест не прошёл. Ожидалось ' . PHP_EOL;
            var_dump(get_class($expected));
            echo ' ,получили ' . PHP_EOL;
            var_dump(get_class($result));
        }
    }

    function testGetCount(): void
    {
        //Проверяем, что функция возвращает число
        $expected = 'integer';
        $appleTree = new AppleTree(1);
        $result = gettype($appleTree->getCount());
        if ($expected === $result) {
            echo "Тест прошёл" . PHP_EOL;
        } else {
            echo 'Тест не прошёл. Ожидалось ' . PHP_EOL;
            var_dump($expected);
            echo ' ,получили ' . PHP_EOL;
            var_dump($result);
        }
    }
}

class TestPearTree
{
    function testGetPear(): void
    {
        //Проверяем что груша отдаёт именно грушу
        $expected = new Pear(160);
        $pearTree = new PearTree(1);
        $result = $pearTree->getPear();

        if (get_class($result) === get_class($expected)) {
            echo "Тест прошёл" . PHP_EOL;
        } else {
            echo 'Тест не прошёл. Ожидалось ' . PHP_EOL;
            var_dump(get_class($expected));
            echo ' ,получили ' . PHP_EOL;
            var_dump(get_class($result));
        }
    }

    function testGetCount(): void
    {
        //Проверяем, что функция возвращает число
        $expected = 'integer';
        $pearTree = new PearTree(1);
        $result = gettype($pearTree->getCount());
        if ($expected === $result) {
            echo "Тест прошёл" . PHP_EOL;
        } else {
            echo 'Тест не прошёл. Ожидалось ' . PHP_EOL;
            var_dump($expected);
            echo ' ,получили ' . PHP_EOL;
            var_dump($result);
        }
    }

}

class TestGarden
{
    function testAddTree()
    {
        //Проверяем кол-во добавленных деревьев
        $expected = 5;
        $garden = new Garden();
        $garden->addTree(new AppleTree(1));
        $garden->addTree(new AppleTree(2));
        $garden->addTree(new PearTree(3));
        $garden->addTree(new AppleTree(4));
        $garden->addTree(new PearTree(5));
        $result = $garden->getCountTrees();
        if ($expected === $result) {
            echo "Тест прошёл" . PHP_EOL;
        } else {
            echo 'Тест не прошёл. Ожидалось ' . PHP_EOL;
            var_dump($expected);
            echo ' ,получили ' . PHP_EOL;
            var_dump($result);
        }
    }
}

class TestWorker
{
    function testWorkerCanAddTreeToGarden()
    {
        $expected = 5;
        $garden = new Garden();
        $worker = new Worker($garden);
        $worker->addTree(new AppleTree(1));
        $worker->addTree(new AppleTree(2));
        $worker->addTree(new PearTree(3));
        $worker->addTree(new AppleTree(4));
        $worker->addTree(new PearTree(5));
        $result = $garden->getCountTrees();
        if ($expected === $result) {
            echo "Тест прошёл" . PHP_EOL;
        } else {
            echo 'Тест не прошёл. Ожидалось ' . PHP_EOL;
            var_dump($expected);
            echo ' ,получили ' . PHP_EOL;
            var_dump($result);
        }
    }
}

$testApple = new TestApple();
$testApple->testIsWeightCorrect();
$testPear = new TestPear();
$testPear->testIsWeightCorrect();
$testAppleTree = new TestAppleTree();
$testAppleTree->testGetApple();
$testAppleTree->testGetCount();
$testPearTree = new TestPearTree();
$testPearTree->testGetPear();
$testPearTree->testGetCount();
$testGarden = new TestGarden();
$testGarden->testAddTree();
$testWorker = new TestWorker();
$testWorker->testWorkerCanAddTreeToGarden();