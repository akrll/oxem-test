<?

class Farm
{

    public $arAnimals = [];
    //Метод получения продуктов для всех типов животных
    public function getAnimalsProduct($arAnimals, $cDays = 1)
    {
        $arProduct = [];

        if($cDays < 1) $cDays = 1;

        for($i=0;$i<$cDays;$i++)
        {
            foreach ($arAnimals as $animal)
            {
                $productType = $animal->getProductType();
                if(is_null($arProduct[$productType]))
                {
                    $arProduct[$productType] = $animal->getProduct();
                }
                else
                {
                    $arProduct[$productType] += $animal->getProduct();
                }
            }
        }
        return $arProduct;
    }


    //Метод получения кол-ва всех типов животных
    public function getCountAnimalsType($arAnimals)
    {
        $arTypes = [];

        foreach ($arAnimals as $animal)
        {
            $animalType = $animal->getAnimalType();
            if(is_null($arTypes[$animalType]))
            {
                $arTypes[$animalType] = 1;
            }
            else
            {
                $arTypes[$animalType]++;
            }
        }

        return $arTypes;
    }
}