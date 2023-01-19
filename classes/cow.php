<?

class Cow extends animal
{

    function __construct() 
    {
        $this->animalID = uniqid("COW_");
        $this->ProductType = "Milk";
    }

    public function getProduct()
    {
        return rand(8, 12);
    }

    public function getProductType()
    {
        return $this->ProductType;
    }

    public function getAnimalType()
    {
        return parent::getAnimalType();
    }
}