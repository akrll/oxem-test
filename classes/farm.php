<?

class Farm
{

    public $arAnimals = [];

    //Метод регистрации животного на ферме
    public function registerAnimal(object $animal)
    {
        $type = $animal->getAnimalType();
        $this->arAnimals[$type][] = $animal;
    }

    //Метод получения продуктов для всех типов животных
    public function getAnimalsProduct($cDays = 1)
    {
        $arProduct = [];

        if($cDays < 1) $cDays = 1;

        for($i=0;$i<$cDays;$i++)
        {
            foreach ($this->arAnimals as $type)
            {
                foreach($type as $animal)
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
                
        }
        return $arProduct;
    }


    //Метод получения кол-ва всех типов животных
    public function getCountAnimalsType()
    {
        $arTypes = [];

        foreach ($this->arAnimals as $key=>$type)
        {
            $arTypes[$key] = count($type);
        }

        return $arTypes;
    }
}