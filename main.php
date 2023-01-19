<?
require 'vendor/autoload.php';

$days = 7;
$animals = [];
$farm = new Farm;


for($i = 0; $i < 10; $i++){
    $animals[] = new Cow;
}
for($i = 0; $i < 20; $i++){
    $animals[] = new Chicken;
}

$b = $farm->getCountAnimalsType($animals);
echo "На ферме:" . PHP_EOL;
foreach($b as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}

$s = $farm->getAnimalsProduct($animals, $days);
echo "За $days дней собрано:" . PHP_EOL;
foreach($s as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}

for($i = 0; $i < 1; $i++){
    $animals[] = new Cow;
}
for($i = 0; $i < 5; $i++){
    $animals[] = new Chicken;
}

echo "Была докуплена одна корова и пять куриц." . PHP_EOL;

$b = $farm->getCountAnimalsType($animals);
echo "На ферме:" . PHP_EOL;
foreach($b as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}


$s = $farm->getAnimalsProduct($animals, $days);
echo "За $days дней собрано:" . PHP_EOL;
foreach($s as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}