<?

class Chicken extends Animal
{

    function __construct() 
    {
        $this->animalID = uniqid("CHICKEN_");
        $this->ProductType = "Egg";
    }

    public function getProduct()
    {
        return rand(0, 1);
    }

    public function getProductType()
    {
        return $this->ProductType;
    }
}