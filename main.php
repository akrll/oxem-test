<?
spl_autoload_register(function ($class_name) {
    include __DIR__ . '/classes/'. $class_name . '.php';
});

$days = 7;
$animals = [];
$farm = new farm;

$farm->createAnimal('COW', $animals, 10);
$farm->createAnimal('CHICKEN',$animals,20);


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

$farm->createAnimal('COW',$animals,1);
$farm->createAnimal('CHICKEN',$animals,5);
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
