<?
require 'vendor/autoload.php';

$days = 7;

$farm = new Farm;

for($i = 0; $i < 10; $i++){
    $farm->registerAnimal(new Cow);
}
for($i = 0; $i < 20; $i++){
    $farm->registerAnimal(new Chicken);
}

$b = $farm->getCountAnimalsType();
echo "На ферме:" . PHP_EOL;
foreach($b as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}

 $s = $farm->getAnimalsProduct($days);
echo "За $days дней собрано:" . PHP_EOL;
foreach($s as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}

for($i = 0; $i < 1; $i++){
    $farm->registerAnimal(new Cow);
}
for($i = 0; $i < 5; $i++){
    $farm->registerAnimal(new Chicken);
}

echo "Была докуплена одна корова и пять куриц." . PHP_EOL;

$b = $farm->getCountAnimalsType();
echo "На ферме:" . PHP_EOL;
foreach($b as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}


$s = $farm->getAnimalsProduct($days);
echo "За $days дней собрано:" . PHP_EOL;
foreach($s as $type => $count)
{
    echo $type . " - " . $count . PHP_EOL;
}
