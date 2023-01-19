<?
require 'vendor/autoload.php';

$days = 7;

$farm = new Farm;

var_dump($farm);

for($i = 0; $i < 10; $i++){
    $farm->arAnimals[] = new Cow;
}
for($i = 0; $i < 20; $i++){
    $farm->arAnimals[] = new Chicken;
}

$b = $farm->getCountAnimalsType($farm->arAnimals);
echo "На ферме:" . PHP_EOL;
foreach($b as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}

$s = $farm->getAnimalsProduct($farm->arAnimals, $days);
echo "За $days дней собрано:" . PHP_EOL;
foreach($s as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}

for($i = 0; $i < 1; $i++){
    $farm->arAnimals[] = new Cow;
}
for($i = 0; $i < 5; $i++){
    $farm->arAnimals[] = new Chicken;
}

echo "Была докуплена одна корова и пять куриц." . PHP_EOL;

$b = $farm->getCountAnimalsType($farm->arAnimals);
echo "На ферме:" . PHP_EOL;
foreach($b as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}


$s = $farm->getAnimalsProduct($farm->arAnimals, $days);
echo "За $days дней собрано:" . PHP_EOL;
foreach($s as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}